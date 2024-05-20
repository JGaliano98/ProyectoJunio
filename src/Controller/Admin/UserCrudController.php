<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCrudController extends AbstractCrudController
{
    private $passwordHasher;
    private $entityManager;

    // Inyectamos el servicio UserPasswordHasherInterface y el EntityManager en el constructor
    public function __construct(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager)
    {
        $this->passwordHasher = $passwordHasher;
        $this->entityManager = $entityManager;
    }

    // Definimos la clase de la entidad que este controlador manejará
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    // Configuramos los campos que se mostrarán en el formulario de EasyAdmin
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(), // Campo ID, oculto en el formulario
            EmailField::new('email', 'Email'), // Campo de correo electrónico
            TextField::new('password', 'Password')
                ->setFormType(PasswordType::class) // Campo de contraseña, usando PasswordType
                ->onlyOnForms(), // Solo se muestra en los formularios (creación y edición)
            TextField::new('nombre', 'Nombre'), // Campo de nombre
            TextField::new('apellido1', 'Apellido 1'), // Campo de primer apellido
            TextField::new('apellido2', 'Apellido 2'), // Campo de segundo apellido
            BooleanField::new('isActive', 'Is Active'), // Campo booleano para estado activo/inactivo
            TextField::new('activationToken', 'Activation Token')->hideOnForm(), // Campo para el token de activación, oculto en el formulario
            TextField::new('nick', 'Nick')->hideOnForm(), // Campo de apodo, generado automáticamente, oculto en el formulario
            TextField::new('foto', 'Foto'), // Campo para la URL de la foto
        ];
    }

    // Método para persistir una nueva entidad en la base de datos
    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance instanceof User) {
            // Generar el nick basado en las primeras dos letras del nombre y apellidos
            $nick = $this->generateNick($entityInstance->getNombre(), $entityInstance->getApellido1(), $entityInstance->getApellido2());
            $nick = $this->ensureUniqueNick($entityManager, $nick);
            $entityInstance->setNick($nick);

            // Verificar si el correo ya existe en la base de datos
            $existingEmailUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $entityInstance->getEmail()]);

            // Si el usuario ya existe, lanzar una excepción con un mensaje de error
            if ($existingEmailUser !== null) {
                throw new \Exception('El correo electrónico ya está en uso.');
            }

            // Si la entidad es un User y tiene una contraseña
            if ($entityInstance->getPassword()) {
                // Hashear la contraseña antes de guardarla
                $hashedPassword = $this->passwordHasher->hashPassword($entityInstance, $entityInstance->getPassword());
                $entityInstance->setPassword($hashedPassword);
            }

            // Asignar el rol por defecto ROLE_ADMIN
            $entityInstance->setRoles(['ROLE_ADMIN']);
        }

        // Llamar al método padre para persistir la entidad
        parent::persistEntity($entityManager, $entityInstance);
    }

    // Método para actualizar una entidad existente en la base de datos
    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        if ($entityInstance instanceof User) {
            // Generar el nick basado en las primeras dos letras del nombre y apellidos
            $nick = $this->generateNick($entityInstance->getNombre(), $entityInstance->getApellido1(), $entityInstance->getApellido2());
            $nick = $this->ensureUniqueNick($entityManager, $nick, $entityInstance->getId());
            $entityInstance->setNick($nick);

            // Verificar si el correo ya existe en la base de datos, excluyendo el actual usuario
            $existingEmailUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $entityInstance->getEmail()]);

            // Si el usuario ya existe y no es el mismo usuario que se está actualizando, lanzar una excepción con un mensaje de error
            if ($existingEmailUser !== null && $existingEmailUser->getId() !== $entityInstance->getId()) {
                throw new \Exception('El correo electrónico ya está en uso.');
            }

            // Si la entidad es un User y tiene una contraseña
            if ($entityInstance->getPassword()) {
                // Hashear la contraseña antes de guardarla
                $hashedPassword = $this->passwordHasher->hashPassword($entityInstance, $entityInstance->getPassword());
                $entityInstance->setPassword($hashedPassword);
            }

            // Mantener el rol ROLE_ADMIN
            $entityInstance->setRoles(['ROLE_ADMIN']);
        }

        // Llamar al método padre para actualizar la entidad
        parent::updateEntity($entityManager, $entityInstance);
    }

    // Método privado para generar el nick basado en las primeras dos letras del nombre y apellidos
    private function generateNick(string $nombre, string $apellido1, string $apellido2): string
    {
        $nombre = $this->removeAccents($nombre);
        $apellido1 = $this->removeAccents($apellido1);
        $apellido2 = $this->removeAccents($apellido2);

        $nick = substr($nombre, 0, 2) . substr($apellido1, 0, 2) . substr($apellido2, 0, 2);
        return strtolower($nick); // Convertir el nick a minúsculas
    }

    // Método privado para eliminar las tildes de un string
    private function removeAccents(string $string): string
    {
        return strtr(utf8_decode($string), utf8_decode('áéíóúÁÉÍÓÚ'), 'aeiouAEIOU');
    }

    // Método privado para asegurar que el nick es único
    private function ensureUniqueNick(EntityManagerInterface $entityManager, string $nick, int $userId = null): string
    {
        $originalNick = $nick;
        $counter = 1;

        while (true) {
            $existingNickUser = $entityManager->getRepository(User::class)->findOneBy(['nick' => $nick]);

            if ($existingNickUser === null || ($userId !== null && $existingNickUser->getId() === $userId)) {
                break;
            }

            $nick = $originalNick . $counter;
            $counter++;
        }

        return $nick;
    }
}
?>

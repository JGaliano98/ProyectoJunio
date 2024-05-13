<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/users', name: 'user_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $userRepository = $em->getRepository(User::class);
        $users = $userRepository->findAll();
        return $this->json($users);
    }

    #[Route('/users/{id}', name: 'user_show', methods: ['GET'])]

    public function show(int $id, EntityManagerInterface $em): Response
    {
        $userRepository = $em->getRepository(User::class);
        $user = $userRepository->find($id);

        //Si no encuentra al usuario
        
        if (!$user) {
            
            // Devolver una respuesta JSON manualmente
            return $this->json(['message' => 'No se han encontrado usuarios con ID  ' . $id], Response::HTTP_NOT_FOUND);
        }

        return $this->json($user);
    }

    #[Route('/users', name: 'user_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        // Decodificar el JSON del cuerpo de la solicitud
        $data = json_decode($request->getContent(), true);

        // Acceder a los datos del usuario a través del índice 'user', que es parte de tu estructura JSON
        $userData = $data['user'];

        // Crear el objeto User
        $user = new User();
        $user->setEmail($userData['email']);
        $user->setPassword($userData['password']); // Considera usar password_hash aquí para mayor seguridad
        // Suponiendo que tienes setters adecuados para otros campos, como roles, nombre, etc.
        $user->setRoles($userData['roles']);
        $user->setNombre($userData['nombre']);
        $user->setApellido1($userData['apellido1']);
        $user->setApellido2($userData['apellido2']);
        $user->setIsActive($userData['is_active']);  // Asegúrate de que el setter maneje la conversión de 0 a false si es necesario
        $user->setActivationToken($userData['activation_token']);
        $user->setNick($userData['nick']);
        $user->setFoto($userData['foto']);

        // Persistir el nuevo usuario en la base de datos
        $em->persist($user);
        $em->flush();

        // Devolver una respuesta JSON con el usuario creado
        return $this->json($user, Response::HTTP_CREATED);
    }


    #[Route('/users/{id}', name: 'user_update', methods: ['PUT'])]
    public function update(Request $request, EntityManagerInterface $em, User $user = null, int $id, UserPasswordHasherInterface $passwordHasher): Response
    {
        // Verifica si el usuario realmente existe
        if (!$user) {
            return $this->json(['error' => 'User not found for ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        // Decodifica el JSON recibido en la solicitud
        $data = json_decode($request->getContent(), true);
        if (!$data || !isset($data['user'])) {
            // Maneja el error en caso de que el JSON no se pueda decodificar o no tenga la clave 'user'
            return $this->json(['error' => 'Invalid JSON or missing \'user\' key'], Response::HTTP_BAD_REQUEST);
        }

        // Accede a la subclave 'user' para obtener los datos del usuario
        $userData = $data['user'];

        // Actualiza los campos del usuario, asegurándote de verificar que existan en el JSON
        if (isset($userData['email'])) {
            $user->setEmail($userData['email']);
        }
        if (isset($userData['password']) && !$passwordHasher->isPasswordValid($user, $userData['password'])) {
            // Hash de la contraseña si es diferente
            $user->setPassword($passwordHasher->hashPassword($user, $userData['password']));
        }
        if (isset($userData['roles'])) {
            $user->setRoles($userData['roles']);
        }
        if (isset($userData['nombre'])) {
            $user->setNombre($userData['nombre']);
        }
        if (isset($userData['apellido1'])) {
            $user->setApellido1($userData['apellido1']);
        }
        if (isset($userData['apellido2'])) {
            $user->setApellido2($userData['apellido2']);
        }
        if (isset($userData['is_active'])) {
            $user->setIsActive((bool)$userData['is_active']);
        }
        if (isset($userData['activation_token'])) {
            $user->setActivationToken($userData['activation_token']);
        }
        if (isset($userData['nick'])) {
            $user->setNick($userData['nick']);
        }
        if (isset($userData['foto'])) {
            $user->setFoto($userData['foto']);
        }

        // Intenta guardar los cambios en la base de datos
        try {
            $em->flush();
            return $this->json($user);
        } catch (\Exception $e) {
            // Log del error y respuesta al cliente
            error_log($e->getMessage());
            return $this->json(['error' => 'Failed to update user'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
}


    #[Route('/users/{id}', name: 'user_delete', methods: ['DELETE'])]

    public function delete(EntityManagerInterface $em, User $user = null, int $id): Response
    {
        // Verifica si el usuario existe antes de intentar eliminarlo
        if (!$user) {
            // Devuelve una respuesta JSON informando que no se encontró el usuario
            return $this->json(['message' => 'No se han encontrado usuarios con ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        // Procede a eliminar el usuario si existe
        $em->remove($user);
        $em->flush();

        // Devuelve una respuesta confirmando que el usuario ha sido eliminado
        return $this->json(['message' => 'Usuario eliminado exitosamente.']);
    }


#[Route('/user/modal', name: 'user_modal', methods: ['GET'])]
public function userModal(): Response
{
    // Aquí se supone que podrías añadir lógica para obtener datos específicos si es necesario.
    // Por ahora, solo renderizaremos la plantilla.
    return $this->render('templates/altasMasivas/user.html.twig');
}


}

?>
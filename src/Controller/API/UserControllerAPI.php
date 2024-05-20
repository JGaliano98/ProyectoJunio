<?php

namespace App\Controller\API;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/API')]
class UserControllerAPI extends AbstractController
{
    #[Route('/users/{id?}', name: 'user_index', methods: ['GET'])]
    public function index(?int $id, EntityManagerInterface $em): Response
    {
        $userRepository = $em->getRepository(User::class);

        if ($id === null) {
            // Si no se proporciona ID, devolver todos los usuarios
            $users = $userRepository->findAll();
            return $this->json($users);
        } else {
            // Si se proporciona ID, devolver el usuario específico
            $user = $userRepository->find($id);

            if (!$user) {
                return $this->json(['message' => 'No se han encontrado usuarios con ID ' . $id], Response::HTTP_NOT_FOUND);
            }

            return $this->json($user);
        }
    }


    
    
    #[Route('/users', name: 'user_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {
        $data = json_decode($request->getContent(), true);
        $resultados = [];
        $errores = [];
    
        foreach ($data as $index => $userData) {
            try {
                // Verificar si ya existe un usuario con el mismo nick
                $existingUser = $em->getRepository(User::class)->findOneBy(['nick' => $userData[1] ?? '']);
                if ($existingUser) {
                    throw new \Exception('Ya existe un usuario con el mismo nick: ' . $userData[1]);
                }
    
                // Divide el primer campo en nombre, primer apellido y segundo apellido
                $nombreCompleto = explode(', ', $userData[0]);
                $apellidos = $nombreCompleto[0] ?? '';
                $nombre = $nombreCompleto[1] ?? '';
    
                // Separa los apellidos en primer y segundo apellido
                $apellidosSeparados = explode(' ', $apellidos);
                $apellido1 = $apellidosSeparados[0] ?? '';
                $apellido2 = $apellidosSeparados[1] ?? '';
    
                $user = new User();
                $user->setEmail($userData[2] ?? '');
                $user->setNick($userData[1] ?? '');
                $user->setNombre($nombre);
                $user->setApellido1($apellido1);
                $user->setApellido2($apellido2);
                $user->setPassword($passwordHasher->hashPassword($user, '123456')); // Hashea el password
                $user->setIsActive(true); // Establece is_active como true
    
                $em->persist($user);
                $em->flush();
                $resultados[] = ['index' => $index, 'status' => 'success', 'message' => 'Usuario creado correctamente'];
            } catch (\Exception $e) {
                // Manejo del error para esta línea específica
                $resultados[] = ['index' => $index, 'status' => 'error', 'message' => $e->getMessage()];
                $errores[] = $index; // Añadir el índice de la línea con error al array de errores
            }
        }
    
        return $this->json(['status' => 'finished', 'results' => $resultados, 'errors' => $errores], Response::HTTP_CREATED);
    }
    





    #[Route('/users/{id}', name: 'user_update', methods: ['PUT'])]
    public function update(Request $request, EntityManagerInterface $em, User $user = null, int $id, UserPasswordHasherInterface $passwordHasher): Response
    {
        if (!$user) {
            return $this->json(['error' => 'User not found for ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        if (!$data || !isset($data['user'])) {
            return $this->json(['error' => 'Invalid JSON or missing \'user\' key'], Response::HTTP_BAD_REQUEST);
        }

        $userData = $data['user'];

        if (isset($userData['email'])) {
            $user->setEmail($userData['email']);
        }
        if (isset($userData['password']) && !$passwordHasher->isPasswordValid($user, $userData['password'])) {
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

        try {
            $em->flush();
            return $this->json($user);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            return $this->json(['error' => 'Failed to update user'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/users/{id}', name: 'user_delete', methods: ['DELETE'])]
    public function delete(EntityManagerInterface $em, User $user = null, int $id): Response
    {
        if (!$user) {
            return $this->json(['message' => 'No se han encontrado usuarios con ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        $em->remove($user);
        $em->flush();

        return $this->json(['message' => 'Usuario eliminado exitosamente.'], Response::HTTP_NO_CONTENT);
    }

    #[Route('/user/modal', name: 'user_modal', methods: ['GET'])]
    public function userModal(): Response
    {
        return $this->render('templates/altasMasivas/user.html.twig');
    }
}
?>
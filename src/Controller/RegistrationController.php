<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Uid\Uuid;  // Import for Uuid
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $user = new User();
        $user->setNombre("Pepe");
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($userPasswordHasher->hashPassword($user, $form->get('plainPassword')->getData()));
            
            // Crear token de activación
            $user->setActivationToken(Uuid::v4()->toRfc4122());
            
            $entityManager->persist($user);
            $entityManager->flush();
            
            // Enviar email de activación
            $email = (new Email())
                ->from('your_email@example.com')
                ->to($user->getEmail())
                ->subject('Activate your account')
                ->html($this->renderView('emails/activation.html.twig', [
                    'user' => $user,
                    'token' => $user->getActivationToken() // Asegúrate de que esto está correctamente incluido
                ]));

            $mailer->send($email);

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }

    #[Route('/activate/{token}', name: 'app_activate')]
    public function activate(string $token, EntityManagerInterface $entityManager): Response
    {
        $userRepository = $entityManager->getRepository(User::class);
        $user = $userRepository->findOneBy(['activationToken' => $token]);

        if ($user === null) {
            // Handle error or token not found situation
            return $this->redirectToRoute('app_register');
        }

        $user->setIsActive(true);
        $user->setActivationToken(null); // Clear the token
        $entityManager->flush();

        $this->addFlash('success', 'Your account has been activated.');

        return $this->redirectToRoute('app_login');
    }
}

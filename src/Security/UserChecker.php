<?php
namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void  // Asegúrate de incluir ": void"
    {
        if (!$user instanceof User) {
            return;
        }

        // Verifica si la cuenta está activa
        if (!$user->getIsActive()) {
            throw new CustomUserMessageAccountStatusException('Your account is not activated. Please check your email for the activation link.');
        }
    }

    public function checkPostAuth(UserInterface $user): void  // Asegúrate de incluir ": void"
    {
        if (!$user instanceof User) {
            return;
        }

        // Aquí puedes añadir más verificaciones post-autenticación si es necesario.
    }
}

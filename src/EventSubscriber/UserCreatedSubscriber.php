<?php
// src/EventSubscriber/UserCreatedSubscriber.php
namespace App\EventSubscriber;

use App\Event\UserCreatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class UserCreatedSubscriber implements EventSubscriberInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onUserCreated(UserCreatedEvent $event): void
    {
        $user = $event->getUser();

        // Aquí puedes obtener los detalles del usuario y enviar un correo electrónico
        $email = (new Email())
            ->from('jlopgal0606@g.educaand.es')
            ->to('t1s7lopezm@gmail.com')
            ->subject('Nuevo usuario creado')
            ->text('Se ha creado un nuevo usuario.');

        $this->mailer->send($email);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            UserCreatedEvent::class => 'onUserCreated',
        ];
    }
}

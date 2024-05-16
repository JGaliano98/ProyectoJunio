<?php
// src/EventSubscriber/MailPostSendSubscriber.php
namespace App\EventSubscriber;

use App\Event\AfterSendMailEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailPostSendSubscriber implements EventSubscriberInterface
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onAfterSendMail(): void
    {

        // Aquí puedes enviar un segundo correo para informar que el primero se ha enviado correctamente
        $email = (new Email())
            ->from('jlopgal0606@g.educaand.es')
            ->to('jlopgal0606@g.educaand.es')
            ->subject('Correo enviado correctamente')
            ->text('El correo se ha enviado correctamente.');

        $this->mailer->send($email);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            AfterSendMailEvent::class => 'onAfterSendMail',
        ];
    }
}

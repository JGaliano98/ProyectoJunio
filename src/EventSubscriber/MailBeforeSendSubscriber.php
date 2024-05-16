<?php
namespace App\EventSubscriber;

use App\Event\BeforeSendMailEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailBeforeSendSubscriber implements EventSubscriberInterface
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onBeforeSendMail(BeforeSendMailEvent $event): void
    {
        $subject = $event->getSubject();
        $message = $event->getMessage();

        $email = (new Email())
            ->from('jlopgal0606@g.educaand.es')
            ->to('jlopgal0606@g.educaand.es')
            ->subject($subject)
            ->text($message);

        $this->mailer->send($email);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            BeforeSendMailEvent::class => 'onBeforeSendMail',
        ];
    }
}

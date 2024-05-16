<?php
// src/Service/EmailService.php
namespace App\Service;

use App\Event\AfterSendMailEvent;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email as MimeEmail;
use App\Event\BeforeSendMailEvent;

class EmailService
{
    private $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function enviarPdf(string $pdfFilePath, MailerInterface $mailer, string $from, string $to, string $asunto, string $texto, string $tituloPDF): void
    {
        //Disparar el evento BeforeSendMailEvent antes de enviar el correo electrónico
        $beforeSendMailEvent = new BeforeSendMailEvent('Enviando correo', 'España va bien');
        $this->eventDispatcher->dispatch($beforeSendMailEvent);

        $email = (new MimeEmail()) 
            ->from($from)
            ->to($to)
            ->subject($asunto) // Utilizar el asunto modificado si se cambió en el evento
            ->text($texto) // Utilizar el mensaje modificado si se cambió en el evento
            ->attachFromPath($pdfFilePath, $tituloPDF.'.pdf', 'application/pdf');

        $mailer->send($email);

        // // Disparar el evento after despues de enviar el correo electrónico
        // $afterSendMailEvent = new AfterSendMailEvent($asunto, $texto);
        // $this->eventDispatcher->dispatch($afterSendMailEvent);
    }
}

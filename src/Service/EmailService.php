<?php
// src/Service/EmailService.php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email as MimeEmail;

class EmailService
{
    public function enviarPdf(string $pdfFilePath, MailerInterface $mailer, string $from, string $to, string $asunto, string $texto, string $tituloPDF): void
    {
        $email = (new MimeEmail()) 
            ->from($from)
            ->to($to)
            ->subject($asunto)
            ->text($texto)
            ->attachFromPath($pdfFilePath, $tituloPDF.'.pdf', 'application/pdf');

        $mailer->send($email);
    }
}
?>
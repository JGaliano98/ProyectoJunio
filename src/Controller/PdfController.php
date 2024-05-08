<?php

// src/Controller/PdfController.php

namespace App\Controller;

use App\Service\PdfGenerator;
use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PdfController extends AbstractController
{
    #[Route("/descargar-pdf", name: "descargar_pdf")]

    public function downloadPdf(PdfGenerator $pdfGenerator): BinaryFileResponse
    {
        return $pdfGenerator->downloadPdf('pdf/template.html.twig',
        [
            'message' => '¡Hola, usando DOM PDF!'
        ], 'example.pdf');
    }


    #[Route("/enviar-pdf/{destinatario}", name: "enviar_pdf")]
public function sendPdf(PdfGenerator $pdfGenerator, EmailService $emailSender, MailerInterface $mailer, string $destinatario): Response
{
    $pdfFilePath = $pdfGenerator->generateAndSavePdf('pdf/template.html.twig', ['message' => "¡Hola $destinatario !"], 'nuevoCorreo.pdf');

    $emailSender->enviarPdf($pdfFilePath, $mailer, 'jlopgal0606@g.educaand.es', $destinatario, '¡Hola! Aquí tienes tu PDF', 'Adjunto PDF generado automáticamente con DOM PDF', 'miPDF');

    // Comentado porque podrías no querer forzar la descarga en el mismo endpoint.
    // $pdfGenerator->downloadPdf('pdf/template.html.twig', ['message' => "¡Hola $destinatario !"], 'nuevoCorreo.pdf');

    // Usa Twig para renderizar tu respuesta HTML
    return $this->render('emails/enviados.html.twig', [
        'destinatario' => $destinatario
    ]);
}

    
}

?>
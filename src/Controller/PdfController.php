<?php

// src/Controller/PdfController.php

namespace App\Controller;

use App\Entity\Actividad;
use App\Entity\Evento;
use App\Service\PdfGenerator;
use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\Mailer\MailerInterface;
use Doctrine\ORM\EntityManagerInterface;

class PdfController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route("/descargar-pdf/{eventoId}", name: "descargar_pdf")]
    public function downloadPdf(int $eventoId, PdfGenerator $pdfGenerator): BinaryFileResponse
    {
        $evento = $this->entityManager->getRepository(Evento::class)->find($eventoId);

        if (!$evento) {
            throw $this->createNotFoundException('Evento no encontrado');
        }

        $actividades = $this->entityManager->getRepository(Actividad::class)->findBy(['evento' => $evento]);

        return $pdfGenerator->downloadPdf(
            'pdf/eventos.html.twig',
            [
                'evento' => $evento,
                'actividades' => $actividades
            ],
            'evento_' . $evento->getId() . '.pdf'
        );
    }

    #[Route("/enviar-pdf/{eventoId}/{destinatario}", name: "enviar_pdf")]
    public function sendPdf(int $eventoId, string $destinatario, PdfGenerator $pdfGenerator, EmailService $emailSender, MailerInterface $mailer): Response
    {
        $evento = $this->entityManager->getRepository(Evento::class)->find($eventoId);

        if (!$evento) {
            throw $this->createNotFoundException('Evento no encontrado');
        }

        $actividades = $this->entityManager->getRepository(Actividad::class)->findBy(['evento' => $evento]);

        $pdfFilePath = $pdfGenerator->generateAndSavePdf(
            'pdf/eventos.html.twig',
            [
                'evento' => $evento,
                'actividades' => $actividades
            ],
            'evento_' . $evento->getId() . '_correo.pdf'
        );

        $emailSender->enviarPdf(
            $pdfFilePath,
            $mailer,
            'jlopgal0606@g.educaand.es',
            $destinatario,
            '¡Hola! Aquí tienes tu PDF del evento',
            'Adjunto PDF generado automáticamente con DOM PDF con detalles del evento y sus actividades',
            'evento_' . $evento->getId()
        );

        return $this->render('emails/enviados.html.twig', [
            'destinatario' => $destinatario
        ]);
    }
}
?>

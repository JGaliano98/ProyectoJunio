<?php

// src/Service/PdfGenerator.php
namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Twig\Environment;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class PdfGenerator
{
    private $twig;
    private $params;

    public function __construct(Environment $twig, ParameterBagInterface $params)
    {
        $this->twig = $twig;
        $this->params = $params;
    }

    public function downloadPdf(string $template, array $context, string $filename): BinaryFileResponse
    {
        $pdfFilePath = $this->generateAndSavePdf($template, $context, $filename);

        $response = new BinaryFileResponse($pdfFilePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT, //Si se desea que se abra en la ventana, poner DISPOSITION_INLINE
            $filename
        );

        return $response;
    }

    public function generateAndSavePdf(string $template, array $context, string $filename): string
    {
        $html = $this->twig->render($template, $context);
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdfContent = $dompdf->output();
        $pdfFilePath = $this->params->get('kernel.project_dir') . '/public/pdf/' . $filename;
        file_put_contents($pdfFilePath, $pdfContent);

        return $pdfFilePath;
    }

    
}

?>

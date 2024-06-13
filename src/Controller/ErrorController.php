<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ErrorController extends AbstractController
{
    public function notFound(): Response
    {
        // Renderiza la plantilla 'error/404.html.twig'
        return $this->render('error/error.html.twig');
    }
}
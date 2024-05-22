<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActividadController extends AbstractController
{
    #[Route('/actividad', name: 'actividad')]
    public function index(): Response
    {
        return $this->render('actividad/actividad.html.twig');
    }
}

?>

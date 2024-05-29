<?php

// src/Controller/ActivityController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActivityController extends AbstractController
{

    #[Route('/actividad', name: 'actividad')]
    public function index(): Response
    {
        // Ejemplo de datos de actividades
        $actividades = [
        
        ];

        return $this->render('/actividad/actividades.html.twig', [
            'actividades' => $actividades,
        ]);
    }
}

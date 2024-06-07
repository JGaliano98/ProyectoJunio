<?php
// src/Controller/ActividadController.php

namespace App\Controller;

use App\Entity\Actividad;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActividadController extends AbstractController
{
    #[Route('/actividades', name: 'actividades')]
    public function index(): Response
    {
        return $this->render('actividad/actividad.html.twig');
    }

    #[Route('/lista-actividades', name: 'lista_actividades')]
    public function listaActividades(EntityManagerInterface $em): Response
    {
        // Filtrar actividades sin eventos asociados
        $actividades = $em->getRepository(Actividad::class)->findBy(['evento' => null]);
        
        return $this->render('actividad/lista_actividades.html.twig', [
            'actividades' => $actividades,
        ]);
    }

    #[Route('/nuevaActividad', name: 'nuevaActividad')]
    public function nuevaActividad(): Response
    {
        return $this->render('actividad/nuevaActividad.html.twig');
    }
}

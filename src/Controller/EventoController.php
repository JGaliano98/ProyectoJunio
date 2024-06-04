<?php
// src/Controller/EventoController.php

namespace App\Controller;

use App\Entity\Evento;
use App\Entity\Actividad;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EventoController extends AbstractController
{
    #[Route('/eventos', name: 'eventos')]
    public function index(): Response
    {
        return $this->render('evento/evento.html.twig');
    }

    #[Route('/lista-eventos', name: 'lista_eventos')]
    public function listaEventos(EntityManagerInterface $em): Response
    {
        $eventos = $em->getRepository(Evento::class)->findAll();
        return $this->render('evento/lista_eventos.html.twig', [
            'eventos' => $eventos,
        ]);
    }

    #[Route('/evento/{id}', name: 'evento_detalle', methods: ['GET'])]
    public function detalleEvento(EntityManagerInterface $em, int $id): JsonResponse
    {
        try {
            $evento = $em->getRepository(Evento::class)->find($id);
            if (!$evento) {
                return $this->json(['error' => 'Evento no encontrado'], Response::HTTP_NOT_FOUND);
            }

            $actividades = $em->getRepository(Actividad::class)->findBy(['evento' => $evento]);
            $eventoData = [
                'id' => $evento->getId(),
                'titulo' => $evento->getTitulo(),
                'descripcion' => $evento->getDescripcion(),
                'fechaHoraInicio' => $evento->getFechaInicio()->format('Y-m-d H:i:s'),
                'fechaHoraFin' => $evento->getFechaFin()->format('Y-m-d H:i:s'),
                'actividades' => [],
            ];

            foreach ($actividades as $actividad) {
                $eventoData['actividades'][] = [
                    'id' => $actividad->getId(),
                    'descripcion' => $actividad->getDescripcion(),
                ];
            }

            return $this->json($eventoData);
        } catch (\Exception $e) {
            $this->logger->error('Error al cargar el detalle del evento: ' . $e->getMessage());
            return $this->json(['error' => 'Error interno del servidor'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

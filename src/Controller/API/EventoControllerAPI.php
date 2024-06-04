<?php
// src/Controller/API/EventoControllerAPI.php

namespace App\Controller\API;

use App\Entity\Evento;
use App\Entity\Actividad;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/API')]
class EventoControllerAPI extends AbstractController
{
    #[Route('/eventos', name: 'api_evento_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): JsonResponse
    {
        $fechaActual = new \DateTime();

        $eventos = $em->getRepository(Evento::class)
            ->createQueryBuilder('e')
            ->where('e.fecha_fin > :fechaActual')
            ->setParameter('fechaActual', $fechaActual)
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($eventos as $evento) {
            $data[] = [
                'id' => $evento->getId(),
                'titulo' => $evento->getTitulo(),
                'fecha_inicio' => $evento->getFechaInicio()->format('Y-m-d H:i:s'),
                'fecha_fin' => $evento->getFechaFin()->format('Y-m-d H:i:s'),
            ];
        }

        return $this->json($data, Response::HTTP_OK);
    }

    #[Route('/eventos/{id}', name: 'api_evento_detalle', methods: ['GET'])]
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

            return $this->json($eventoData, Response::HTTP_OK);
        } catch (\Exception $e) {
            return $this->json(['error' => 'Error interno del servidor'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

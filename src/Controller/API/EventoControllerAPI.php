<?php

namespace App\Controller\API;

use App\Entity\Evento;
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
        // Obtener la fecha actual del sistema
        $fechaActual = new \DateTime();

        // Obtener eventos cuya fecha de finalización es posterior a la fecha actual
        $eventos = $em->getRepository(Evento::class)
            ->createQueryBuilder('e')
            ->where('e.fecha_fin > :fechaActual')
            ->setParameter('fechaActual', $fechaActual)
            ->getQuery()
            ->getResult();

        // Construir la respuesta JSON
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
}

?>

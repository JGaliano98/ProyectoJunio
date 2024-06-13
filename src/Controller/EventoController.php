<?php
namespace App\Controller;

use App\Entity\Evento;
use App\Entity\Actividad;
use App\Entity\DetalleActividad;
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
        $eventos = $em->getRepository(Evento::class)->findBy([], ['fecha_inicio' => 'ASC']);
        return $this->render('evento/lista_eventos.html.twig', [
            'eventos' => $eventos,
        ]);
    }

    #[Route('/evento/{id}', name: 'evento_detalle', methods: ['GET'])]
    public function detalleEvento(EntityManagerInterface $em, int $id): Response
    {
        $evento = $em->getRepository(Evento::class)->find($id);
        if (!$evento) {
            throw $this->createNotFoundException('Evento no encontrado');
        }

        $actividades = $em->getRepository(Actividad::class)->findBy(['evento' => $evento]);

        return $this->render('evento/detalles.html.twig', [
            'evento' => $evento,
            'actividades' => $actividades,
        ]);
    }
}

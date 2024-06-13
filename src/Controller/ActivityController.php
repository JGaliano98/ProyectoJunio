<?php
namespace App\Controller;

use App\Entity\Actividad;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ActivityController extends AbstractController
{
    #[Route('/actividad', name: 'actividad')]
    public function index(EntityManagerInterface $em): Response
    {
        // Obtener todas las actividades desde la base de datos, ordenadas por fecha_hora_inicio ascendente
        $actividades = $em->getRepository(Actividad::class)->findBy([], ['fecha_hora_inicio' => 'ASC']);

        // Agrupar las actividades por evento
        $actividadesAgrupadas = [];
        foreach ($actividades as $actividad) {
            $eventoId = $actividad->getEvento() ? $actividad->getEvento()->getId() : 'sin_evento';
            if (!isset($actividadesAgrupadas[$eventoId])) {
                $actividadesAgrupadas[$eventoId] = [];
            }
            $actividadesAgrupadas[$eventoId][] = $actividad;
        }

        return $this->render('/actividad/actividades.html.twig', [
            'actividades_agrupadas' => $actividadesAgrupadas,
        ]);
    }
}

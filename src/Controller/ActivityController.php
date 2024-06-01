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
        // Obtener todas las actividades desde la base de datos
        $actividades = $em->getRepository(Actividad::class)->findAll();

        return $this->render('/actividad/actividades.html.twig', [
            'actividades' => $actividades,
        ]);
    }
}

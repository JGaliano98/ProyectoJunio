<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Evento;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Recupera los eventos de la base de datos, ordenados por fecha de inicio ascendente
        // y filtra los eventos que no hayan caducado (fechaFin mayor que la fecha actual)
        $currentDate = new \DateTime();
        $query = $entityManager->createQuery(
            'SELECT e 
             FROM App\Entity\Evento e
             WHERE e.fecha_fin > :currentDate
             ORDER BY e.fecha_inicio ASC'
        )->setParameter('currentDate', $currentDate)
         ->setMaxResults(3);

        $eventos = $query->getResult();

        return $this->render('home/index.html.twig', [
            'eventos' => $eventos,
        ]);
    }
}

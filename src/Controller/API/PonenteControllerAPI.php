<?php
// src/Controller/PonenteController.php
namespace App\Controller\API;

use App\Entity\Ponente;
use App\Entity\DetalleActividad;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/API')]
class PonenteControllerAPI extends AbstractController
{
    #[Route('/ponentes/{id?}', name: 'ponente_index', methods: ['GET'])]
    public function index(?int $id, EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        if ($id === null) {
            return $this->getAllPonentes($em, $serializer);
        } else {
            return $this->getPonenteById($id, $em, $serializer);
        }
    }

    #[Route('/ponentes/detalle/{id}', name: 'ponentes_by_detalle_actividad', methods: ['GET'])]
    public function getPonentesByDetalleActividad(int $id, EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        $detalleActividad = $em->getRepository(DetalleActividad::class)->find($id);
        if (!$detalleActividad) {
            return $this->json(['message' => 'No se ha encontrado el DetalleActividad con ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        $query = $em->createQuery(
            'SELECT p
            FROM App\Entity\Ponente p
            WHERE p.detalle_actividad = :id'
        )->setParameter('id', $id);

        try {
            $ponentes = $query->getResult();
        } catch (\Exception $e) {
            return $this->json(['message' => 'Error en la consulta: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $data = [];
        foreach ($ponentes as $ponente) {
            $data[] = [
                'id' => $ponente->getId(),
                'nombre' => $ponente->getNombre(),
                'cargo' => $ponente->getCargo(),
                'URL' => $ponente->getURL(),
                'detalle_actividad' => $ponente->getDetalleActividad() ? $ponente->getDetalleActividad()->getId() : null,
            ];
        }

        return new Response(
            $serializer->serialize($data, 'json'),
            Response::HTTP_OK,
            ['Content-Type' => 'application/json']
        );
    }

    private function getAllPonentes(EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        $ponenteRepository = $em->getRepository(Ponente::class);
        $ponentes = $ponenteRepository->createQueryBuilder('p')
            ->leftJoin('p.detalle_actividad', 'da')
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($ponentes as $ponente) {
            $data[] = [
                'id' => $ponente->getId(),
                'nombre' => $ponente->getNombre(),
                'cargo' => $ponente->getCargo(),
                'URL' => $ponente->getURL(),
                'detalle_actividad' => $ponente->getDetalleActividad() ? $ponente->getDetalleActividad()->getId() : null,
            ];
        }

        return new Response(
            $serializer->serialize($data, 'json'),
            Response::HTTP_OK,
            ['Content-Type' => 'application/json']
        );
    }

    private function getPonenteById(int $id, EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        $ponenteRepository = $em->getRepository(Ponente::class);
        $ponente = $ponenteRepository->createQueryBuilder('p')
            ->leftJoin('p.detalle_actividad', 'da')
            ->where('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$ponente) {
            return $this->json(['message' => 'No se ha encontrado el ponente con ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $ponente->getId(),
            'nombre' => $ponente->getNombre(),
            'cargo' => $ponente->getCargo(),
            'URL' => $ponente->getURL(),
            'detalle_actividad' => $ponente->getDetalleActividad() ? $ponente->getDetalleActividad()->getId() : null,
        ];

        return new Response(
            $serializer->serialize($data, 'json'),
            Response::HTTP_OK,
            ['Content-Type' => 'application/json']
        );
    }
}

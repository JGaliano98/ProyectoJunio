<?php
namespace App\Controller\API;

use App\Entity\DetalleActividad;
use App\Entity\Grupo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/API')]
class GrupoControllerAPI extends AbstractController
{
    #[Route('/grupos/{id?}', name: 'grupo_index', methods: ['GET'])]
    public function index(?int $id, EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        if ($id === null) {
            return $this->getAllGrupos($em, $serializer);
        } else {
            return $this->getGrupoById($id, $em, $serializer);
        }
    }

    #[Route('/grupos/detalle/{id}', name: 'grupos_by_detalle_actividad', methods: ['GET'])]
    public function grupos(int $id, EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        return $this->getGruposByDetalleActividad($id, $em, $serializer);
    }

    private function getAllGrupos(EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        $grupoRepository = $em->getRepository(Grupo::class);
        $grupos = $grupoRepository->createQueryBuilder('g')
            ->leftJoin('g.nivelEducativo', 'ne')
            ->getQuery()
            ->getResult();

        $data = [];
        foreach ($grupos as $grupo) {
            $data[] = [
                'id' => $grupo->getId(),
                'nombre' => $grupo->getNombre(),
                'nivelEducativo' => $grupo->getNivelEducativo() ? $grupo->getNivelEducativo()->getNombre() : null,
            ];
        }

        return new Response(
            $serializer->serialize($data, 'json'),
            Response::HTTP_OK,
            ['Content-Type' => 'application/json']
        );
    }

    private function getGrupoById(int $id, EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        $grupoRepository = $em->getRepository(Grupo::class);
        $grupo = $grupoRepository->createQueryBuilder('g')
            ->leftJoin('g.nivelEducativo', 'ne')
            ->where('g.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();

        if (!$grupo) {
            return $this->json(['message' => 'No se ha encontrado el grupo con ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        $data = [
            'id' => $grupo->getId(),
            'nombre' => $grupo->getNombre(),
            'nivelEducativo' => $grupo->getNivelEducativo() ? $grupo->getNivelEducativo()->getNombre() : null,
        ];

        return new Response(
            $serializer->serialize($data, 'json'),
            Response::HTTP_OK,
            ['Content-Type' => 'application/json']
        );
    }

    private function getGruposByDetalleActividad(int $id, EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        $detalleActividad = $em->getRepository(DetalleActividad::class)->find($id);
        if (!$detalleActividad) {
            return $this->json(['message' => 'No se ha encontrado el DetalleActividad con ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        $query = $em->createQuery(
            'SELECT DISTINCT g
            FROM App\Entity\Grupo g
            JOIN g.alumnos a
            JOIN a.detalleActividads da
            WHERE da.id = :id'
        )->setParameter('id', $id);

        try {
            $grupos = $query->getResult();
        } catch (\Exception $e) {
            return $this->json(['message' => 'Error en la consulta: ' . $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        $data = [];
        foreach ($grupos as $grupo) {
            $data[] = [
                'id' => $grupo->getId(),
                'nombre' => $grupo->getNombre(),
                'nivelEducativo' => $grupo->getNivelEducativo() ? $grupo->getNivelEducativo()->getNombre() : null,
            ];
        }

        return new Response(
            $serializer->serialize($data, 'json'),
            Response::HTTP_OK,
            ['Content-Type' => 'application/json']
        );
    }
}

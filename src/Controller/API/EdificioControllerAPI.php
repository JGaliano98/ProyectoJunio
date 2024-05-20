<?php
// src/Controller/API/EdificioControllerAPI.php
namespace App\Controller\API;

use App\Entity\Edificio;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/API')]
class EdificioControllerAPI extends AbstractController
{
    #[Route('/edificios/{id?}', name: 'edificio_index', methods: ['GET'])]
    public function index(?int $id, EntityManagerInterface $em): Response
    {
        $edificioRepository = $em->getRepository(Edificio::class);

        if ($id === null) {
            // Si no se proporciona ID, devolver todos los edificios
            $edificios = $edificioRepository->findAll();
            $data = array_map(function($edificio) {
                return $this->transformEdificio($edificio);
            }, $edificios);
            return $this->json($data);
        } else {
            // Si se proporciona ID, devolver el edificio específico
            $edificio = $edificioRepository->find($id);

            if (!$edificio) {
                return $this->json(['message' => 'No se ha encontrado el edificio con ID ' . $id], Response::HTTP_NOT_FOUND);
            }

            return $this->json($this->transformEdificio($edificio));
        }
    }

    #[Route('/edificios', name: 'edificio_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $data = json_decode($request->getContent(), true);
        $resultados = [];
        $errores = [];
    
        foreach ($data as $index => $edificioData) {
            try {
                // Verificar si el nombre del edificio está presente
                if (!isset($edificioData[0])) {
                    throw new \Exception('El nombre del edificio es obligatorio en el índice ' . $index);
                }
    
                $nombreEdificio = $edificioData[0];
    
                // Verificar si ya existe un edificio con el mismo nombre
                $existingEdificio = $em->getRepository(Edificio::class)->findOneBy(['nombre' => $nombreEdificio]);
                if ($existingEdificio) {
                    throw new \Exception('Ya existe un edificio con el nombre: ' . $nombreEdificio);
                }
    
                $edificio = new Edificio();
                $edificio->setNombre($nombreEdificio);
    
                $em->persist($edificio);
                $em->flush();
    
                $resultados[] = ['index' => $index, 'status' => 'success', 'message' => 'Edificio creado correctamente'];
            } catch (\Exception $e) {
                // Manejo del error para esta línea específica
                $resultados[] = ['index' => $index, 'status' => 'error', 'message' => $e->getMessage()];
                $errores[] = $index; // Añadir el índice de la línea con error al array de errores
            }
        }
    
        return $this->json(['status' => 'finished', 'results' => $resultados, 'errors' => $errores], Response::HTTP_CREATED);
    }
    

    


    #[Route('/edificios/{id}', name: 'edificio_update', methods: ['PUT'])]
    public function update(Request $request, EntityManagerInterface $em, int $id): Response
    {
        $edificio = $em->getRepository(Edificio::class)->find($id);

        if (!$edificio) {
            return $this->json(['error' => 'Edificio no encontrado'], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        if (isset($data['edificio']['nombre'])) {
            $edificio->setNombre($data['edificio']['nombre']);
        }

        try {
            $em->flush();
            return $this->json($this->transformEdificio($edificio));
        } catch (\Exception $e) {
            return $this->json(['error' => 'Error al actualizar el edificio'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


    #[Route('/edificios/{id}', name: 'edificio_delete', methods: ['DELETE'])]
    public function delete(EntityManagerInterface $em, int $id): Response
    {
        $edificio = $em->getRepository(Edificio::class)->find($id);

        if (!$edificio) {
            return $this->json(['error' => 'Edificio no encontrado'], Response::HTTP_NOT_FOUND);
        }

        $em->remove($edificio);
        $em->flush();

        return $this->json(['message' => 'Edificio eliminado exitosamente'], Response::HTTP_NO_CONTENT);
    }



    
    private function transformEdificio(Edificio $edificio): array
    {
        return [
            'id' => $edificio->getId(),
            'nombre' => $edificio->getNombre()
        ];
    }
}

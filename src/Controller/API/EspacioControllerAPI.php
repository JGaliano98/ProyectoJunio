<?php
namespace App\Controller\API;

use App\Entity\Espacio;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/API')]
class EspacioControllerAPI extends AbstractController
{
    #[Route('/espacios/{id?}', name: 'espacio_index', methods: ['GET'])]
    public function index(?int $id, EntityManagerInterface $em): Response
    {
        $espacioRepository = $em->getRepository(Espacio::class);

        if ($id === null) {
            // Si no se proporciona ID, devolver todos los espacios
            $espacios = $espacioRepository->findAll();
            $data = [];
            foreach ($espacios as $espacio) {
                $data[] = $this->serializeEspacio($espacio);
            }
            return $this->json($data);
        } else {
            // Si se proporciona ID, devolver el espacio específico
            $espacio = $espacioRepository->find($id);

            if (!$espacio) {
                return $this->json(['message' => 'No se ha encontrado el espacio con ID ' . $id], Response::HTTP_NOT_FOUND);
            }

            $data = $this->serializeEspacio($espacio);
            return $this->json($data);
        }
    }

    private function serializeEspacio(Espacio $espacio): array  
    {
        return [
            'id' => $espacio->getId(),
            'nombre' => $espacio->getNombre(),
            'aforo' => $espacio->getAforo(),
            'edificio' => $espacio->getEdificio() ? $espacio->getEdificio()->getNombre() : null,
            'recursos' => array_map(fn($recurso) => $recurso->getId(), $espacio->getRecurso()->toArray()), // Cambiar a IDs de recursos
            // Añade aquí otros campos relevantes de tu entidad Espacio
        ];
    }

}

?>
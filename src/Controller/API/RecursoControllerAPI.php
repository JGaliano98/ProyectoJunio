<?php
namespace App\Controller\API;

use App\Entity\Recurso;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/API')]
class RecursoControllerAPI extends AbstractController
{
    #[Route('/recursos/{id?}', name: 'recurso_index', methods: ['GET'])]
    public function index(?int $id, EntityManagerInterface $em): Response
    {
        $recursoRepository = $em->getRepository(Recurso::class);

        if ($id === null) {
            // Si no se proporciona ID, devolver todos los recursos
            $recursos = $recursoRepository->findAll();
            $data = [];
            foreach ($recursos as $recurso) {
                $data[] = $this->serializeRecurso($recurso);
            }
            return $this->json($data);
        } else {
            // Si se proporciona ID, devolver el recurso específico
            $recurso = $recursoRepository->find($id);

            if (!$recurso) {
                return $this->json(['message' => 'No se ha encontrado el recurso con ID ' . $id], Response::HTTP_NOT_FOUND);
            }

            $data = $this->serializeRecurso($recurso);
            return $this->json($data);
        }
    }

    private function serializeRecurso(Recurso $recurso): array
    {
        return [
            'id' => $recurso->getId(),
            'nombre' => $recurso->getDescripcion(), // Asegúrate de que este campo es correcto
        ];
    }
    
}

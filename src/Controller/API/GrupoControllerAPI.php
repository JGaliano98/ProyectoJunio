<?php

    namespace App\Controller\API;
    
    use App\Entity\Grupo;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\Serializer\SerializerInterface;
    
    #[Route('/API')]
    class GrupoControllerAPI extends AbstractController
    {
        #[Route('/grupos/{id?}', name: 'grupo_index', methods: ['GET'])]
    public function index(?int $id, EntityManagerInterface $em, SerializerInterface $serializer): Response
    {
        $grupoRepository = $em->getRepository(Grupo::class);

        if ($id === null) {
            // Cargar todos los grupos con sus relaciones
            $grupos = $grupoRepository->createQueryBuilder('g')
                ->leftJoin('g.nivelEducativo', 'ne')
                ->getQuery()
                ->getResult();

            // Transformar los datos en un formato que se pueda serializar
            $data = [];
            foreach ($grupos as $grupo) {
                $data[] = [
                    'id' => $grupo->getId(),
                    'nombre' => $grupo->getNombre(),
                    'nivelEducativo' => $grupo->getNivelEducativo() ? $grupo->getNivelEducativo()->getNombre() : null,
                    // Añade otras propiedades de Grupo si es necesario
                ];
            }

            // Serializar los datos transformados como JSON
            return new Response(
                $serializer->serialize($data, 'json'),
                Response::HTTP_OK,
                ['Content-Type' => 'application/json']
            );
        } else {
            // Obtener el grupo específico con el ID proporcionado
            $grupo = $grupoRepository->createQueryBuilder('g')
                ->leftJoin('g.nivelEducativo', 'ne')
                ->where('g.id = :id')
                ->setParameter('id', $id)
                ->getQuery()
                ->getOneOrNullResult();

            if (!$grupo) {
                return $this->json(['message' => 'No se ha encontrado el grupo con ID ' . $id], Response::HTTP_NOT_FOUND);
            }

            // Transformar los datos en un formato que se pueda serializar
            $data = [
                'id' => $grupo->getId(),
                'nombre' => $grupo->getNombre(),
                'nivelEducativo' => $grupo->getNivelEducativo() ? $grupo->getNivelEducativo()->getNombre() : null,
                // Añade otras propiedades de Grupo si es necesario
            ];

            // Serializar los datos transformados como JSON
            return new Response(
                $serializer->serialize($data, 'json'),
                Response::HTTP_OK,
                ['Content-Type' => 'application/json']
            );
        }
    }
}
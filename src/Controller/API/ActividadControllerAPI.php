<?php
namespace App\Controller\API;

use App\Entity\Actividad;
use App\Entity\Evento;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/API')]
class ActividadControllerAPI extends AbstractController
{
    #[Route('/actividades', name: 'actividad_index', methods: ['GET'])]
    public function index(EntityManagerInterface $em): Response
    {
        $actividades = $em->getRepository(Actividad::class)->findAll();
        return $this->json($actividades);
    }

    #[Route('/actividades/{id}', name: 'actividad_show', methods: ['GET'])]
    public function show(EntityManagerInterface $em, int $id): Response
    {
        $actividad = $em->getRepository(Actividad::class)->find($id);
        if (!$actividad) {
            return $this->json(['error' => 'Actividad no encontrada'], Response::HTTP_NOT_FOUND);
        }
        return $this->json($actividad);
    }

    #[Route('/actividades', name: 'actividad_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $data = json_decode($request->getContent(), true);
        error_log('Solicitud de creación de actividad recibida: ' . print_r($data, true));

        // Verificar si se recibe el campo 'tipo'
        if (!isset($data['tipo'])) {
            error_log('Error: Tipo no especificado');
            return $this->json(['error' => 'Tipo no especificado'], Response::HTTP_BAD_REQUEST);
        }

        try {
            // Si el tipo es 1, verificar si 'idPadre' tiene contenido no vacío
            if ($data['tipo'] == 1) {
                if (isset($data['idPadre']) && $data['idPadre'] !== '') {
                    return $this->json(['message' => 'hola']);
                } else {
                    return $this->json(['message' => 'adios']);
                }
            }

            // Validar datos para el tipo 2
            if ($data['tipo'] == 2) {
                if (!isset($data['descripcion']) || !isset($data['evento']) || 
                    !isset($data['fechaFin']) || !isset($data['fechaInicio'])) {
                    error_log('Error: Datos incompletos');
                    return $this->json(['error' => 'Datos incompletos'], Response::HTTP_BAD_REQUEST);
                }

                // Convertir fechas
                try {
                    $fechaInicio = new \DateTime($data['fechaInicio']);
                    $fechaFin = new \DateTime($data['fechaFin']);
                } catch (\Exception $e) {
                    error_log('Error al convertir fechas: ' . $e->getMessage());
                    return $this->json(['error' => 'Formato de fecha inválido'], Response::HTTP_BAD_REQUEST);
                }

                // Crear nueva actividad
                try {
                    $actividad = new Actividad();
                    $actividad->setDescripcion($data['descripcion']);
                    $actividad->setFechaHoraInicio($fechaInicio);
                    $actividad->setFechaHoraFin($fechaFin);
                    $actividad->setTipo($data['tipo']);

                    // Buscar el evento por ID y asignarlo
                    $evento = $em->getRepository(Evento::class)->find($data['evento']);
                    if (!$evento) {
                        error_log('Error: Evento no encontrado');
                        return $this->json(['error' => 'Evento no encontrado'], Response::HTTP_NOT_FOUND);
                    }
                    $actividad->setEvento($evento);

                    $em->persist($actividad);
                    $em->flush();

                    // Serializar manualmente la respuesta para evitar referencias circulares
                    $actividadData = [
                        'id' => $actividad->getId(),
                        'descripcion' => $actividad->getDescripcion(),
                        'fechaHoraInicio' => $actividad->getFechaHoraInicio()->format('Y-m-d'),
                        'fechaHoraFin' => $actividad->getFechaHoraFin()->format('Y-m-d'),
                        'tipo' => $actividad->getTipo(),
                        'evento' => [
                            'id' => $evento->getId(),
                            'nombre' => $evento->getTitulo()
                        ]
                    ];

                    return $this->json($actividadData, Response::HTTP_CREATED);
                } catch (\Exception $e) {
                    error_log('Error al crear actividad: ' . $e->getMessage());
                    error_log($e->getTraceAsString());
                    return $this->json(['error' => 'Error interno del servidor'], Response::HTTP_INTERNAL_SERVER_ERROR);
                }
            }

            error_log('Error: Tipo no soportado');
            return $this->json(['error' => 'Tipo no soportado'], Response::HTTP_BAD_REQUEST);
        } catch (\Exception $e) {
            error_log('Error en la creación de actividad: ' . $e->getMessage());
            error_log($e->getTraceAsString());
            return $this->json(['error' => 'Error interno del servidor'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

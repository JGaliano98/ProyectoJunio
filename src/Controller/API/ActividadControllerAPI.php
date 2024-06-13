<?php
namespace App\Controller\API;

use App\Entity\Actividad;
use App\Entity\DetalleActividad;
use App\Entity\Espacio;
use App\Entity\Evento;
use App\Entity\Grupo;
use App\Entity\Ponente;
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
        $this->denyAccessUnlessGranted('ROLE_USER');

        $actividades = $em->getRepository(Actividad::class)->findAll();
        $data = [];
        foreach ($actividades as $actividad) {
            $data[] = $this->serializeActividad($actividad);
        }
        return $this->json($data);
    }

    #[Route('/actividades/{id}', name: 'actividad_show', methods: ['GET'])]
    public function show(EntityManagerInterface $em, int $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $actividad = $em->getRepository(Actividad::class)->find($id);
        if (!$actividad) {
            return $this->json(['error' => 'Actividad no encontrada'], Response::HTTP_NOT_FOUND);
        }
        $data = $this->serializeActividad($actividad);
        return $this->json($data);
    }


    private function serializeActividad(Actividad $actividad): array
    {
        $data = [
            'id' => $actividad->getId(),
            'descripcion' => $actividad->getDescripcion(),
            'fechaHoraInicio' => $actividad->getFechaHoraInicio()->format('Y-m-d H:i:s'),
            'fechaHoraFin' => $actividad->getFechaHoraFin()->format('Y-m-d H:i:s'),
            'tipo' => $actividad->getTipo(),
            'evento' => $actividad->getEvento() ? [
                'id' => $actividad->getEvento()->getId(),
                'titulo' => $actividad->getEvento()->getTitulo()
            ] : null,
        ];

        if ($actividad->getDetalleActividads()) {
            $subactividades = [];
            foreach ($actividad->getDetalleActividads() as $subactividad) {
                $subactividades[] = [
                    'id' => $subactividad->getId(),
                    'titulo' => $subactividad->getTitulo(),
                    'fechaHoraInicio' => $subactividad->getFechaHoraInicio()->format('Y-m-d H:i:s'),
                    'fechaHoraFin' => $subactividad->getFechaHoraFin()->format('Y-m-d H:i:s'),
                    'espacio' => $subactividad->getEspacio() ? [
                        'id' => $subactividad->getEspacio()->getId(),
                        'nombre' => $subactividad->getEspacio()->getNombre()
                    ] : null,
                ];
            }
            $data['subactividades'] = $subactividades;
        }

        return $data;
    }

    #[Route('/actividades', name: 'actividad_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $data = json_decode($request->getContent(), true);
        error_log('Solicitud de creación de actividad recibida: ' . print_r($data, true));

        if (!isset($data['tipo'])) {
            error_log('Error: Tipo no especificado');
            return $this->json(['error' => 'Tipo no especificado'], Response::HTTP_BAD_REQUEST);
        }

        $em->beginTransaction();
        try {
            if ($data['tipo'] == 1) {
                if (!isset($data['idPadre']) || empty($data['idPadre'])) {
                    // Crear una nueva actividad
                    if (!isset($data['descripcion']) || !isset($data['fechaInicio']) || !isset($data['fechaFin'])) {
                        error_log('Error: Datos incompletos para actividad');
                        return $this->json(['error' => 'Datos incompletos para actividad'], Response::HTTP_BAD_REQUEST);
                    }

                    try {
                        $fechaInicio = new \DateTime($data['fechaInicio']);
                        $fechaFin = new \DateTime($data['fechaFin']);
                    } catch (\Exception $e) {
                        error_log('Error al convertir fechas: ' . $e->getMessage());
                        return $this->json(['error' => 'Formato de fecha inválido'], Response::HTTP_BAD_REQUEST);
                    }

                    // Crear la nueva actividad
                    $actividad = new Actividad();
                    $actividad->setDescripcion($data['descripcion']);
                    $actividad->setFechaHoraInicio($fechaInicio);
                    $actividad->setFechaHoraFin($fechaFin);
                    $actividad->setTipo($data['tipo']);

                    if (isset($data['evento'])) {
                        $evento = $em->getRepository(Evento::class)->find($data['evento']);
                        if (!$evento) {
                            error_log('Error: Evento no encontrado');
                            return $this->json(['error' => 'Evento no encontrado'], Response::HTTP_NOT_FOUND);
                        }
                        $actividad->setEvento($evento);
                    }

                    $em->persist($actividad);
                    $em->flush(); // Necesario para obtener el ID de la actividad

                    // Crear el detalle actividad asociado
                    $detalleActividad = new DetalleActividad();
                    $detalleActividad->setTitulo($data['descripcion']);
                    $detalleActividad->setFechaHoraInicio($fechaInicio);
                    $detalleActividad->setFechaHoraFin($fechaFin);
                    $detalleActividad->setURL(null);
                    $detalleActividad->setActividad($actividad);

                    if (isset($data['espacio'])) {
                        $espacio = $em->getRepository(Espacio::class)->find($data['espacio']);
                        if (!$espacio) {
                            error_log('Error: Espacio no encontrado');
                            return $this->json(['error' => 'Espacio no encontrado'], Response::HTTP_NOT_FOUND);
                        }
                        $detalleActividad->setEspacio($espacio);
                    }

                    $em->persist($detalleActividad);
                    $em->flush();

                    // Gestionar ponentes
                    if (isset($data['ponentes'])) {
                        $this->updatePonentes($em, $detalleActividad, $data['ponentes']);
                    }

                    // Gestionar la inscripción de alumnos si el tipo es 1 y se proporcionan grupos
                    if (isset($data['gruposSeleccionados']) && is_array($data['gruposSeleccionados'])) {
                        $this->inscribirAlumnosEnActividad($em, $detalleActividad, $data['gruposSeleccionados']);
                    }

                    $em->commit();

                    $response = [
                        'actividad' => [
                            'id' => $actividad->getId(),
                            'descripcion' => $actividad->getDescripcion(),
                            'fechaHoraInicio' => $actividad->getFechaHoraInicio()->format('Y-m-d H:i:s'),
                            'fechaHoraFin' => $actividad->getFechaHoraFin()->format('Y-m-d H:i:s'),
                            'tipo' => $actividad->getTipo(),
                            'evento' => $actividad->getEvento() ? [
                                'id' => $actividad->getEvento()->getId(),
                                'titulo' => $actividad->getEvento()->getTitulo()
                            ] : null,
                        ],
                        'detalleActividad' => [
                            'id' => $detalleActividad->getId(),
                            'titulo' => $detalleActividad->getTitulo(),
                            'fechaHoraInicio' => $detalleActividad->getFechaHoraInicio()->format('Y-m-d H:i:s'),
                            'fechaHoraFin' => $detalleActividad->getFechaHoraFin()->format('Y-m-d H:i:s'),
                            'actividadPadre' => $actividad->getId(),
                            'espacio' => $detalleActividad->getEspacio() ? $detalleActividad->getEspacio()->getId() : null
                        ]
                    ];

                    return $this->json($response, Response::HTTP_CREATED);
                } else {
                    // Código existente para manejar idPadre proporcionado...
                    if (isset($data['idPadre']) && !empty($data['idPadre'])) {
                        if (!isset($data['titulo']) || !isset($data['fechaInicio']) || 
                            !isset($data['fechaFin']) || !isset($data['espacio'])) {
                            error_log('Error: Datos incompletos para subactividad');
                            return $this->json(['error' => 'Datos incompletos para subactividad'], Response::HTTP_BAD_REQUEST);
                        }

                        try {
                            $fechaInicio = new \DateTime($data['fechaInicio']);
                            $fechaFin = new \DateTime($data['fechaFin']);
                        } catch (\Exception $e) {
                            error_log('Error al convertir fechas: ' . $e->getMessage());
                            return $this->json(['error' => 'Formato de fecha inválido'], Response::HTTP_BAD_REQUEST);
                        }

                        $espacio = $em->getRepository(Espacio::class)->find($data['espacio']);
                        if (!$espacio) {
                            error_log('Error: Espacio no encontrado');
                            return $this->json(['error' => 'Espacio no encontrado'], Response::HTTP_NOT_FOUND);
                        }

                        try {
                            $subactividad = new DetalleActividad();
                            $subactividad->setTitulo($data['titulo']);
                            $subactividad->setFechaHoraInicio($fechaInicio);
                            $subactividad->setFechaHoraFin($fechaFin);
                            $subactividad->setURL(null);
                            $subactividad->setEspacio($espacio);

                            $actividadPadre = $em->getRepository(Actividad::class)->find($data['idPadre']);
                            if (!$actividadPadre) {
                                error_log('Error: Actividad padre no encontrada');
                                return $this->json(['error' => 'Actividad padre no encontrada'], Response::HTTP_NOT_FOUND);
                            }
                            $subactividad->setActividad($actividadPadre);

                            $em->persist($subactividad);
                            $em->flush();

                            // Gestionar ponentes
                            if (isset($data['ponentes'])) {
                                $this->updatePonentes($em, $subactividad, $data['ponentes']);
                            }

                            // Gestionar la inscripción de alumnos si se proporcionan grupos
                            if (isset($data['gruposSeleccionados']) && is_array($data['gruposSeleccionados'])) {
                                $this->inscribirAlumnosEnActividad($em, $subactividad, $data['gruposSeleccionados']);
                            }

                            $response = [
                                'id' => $subactividad->getId(),
                                'titulo' => $subactividad->getTitulo(),
                                'fechaHoraInicio' => $subactividad->getFechaHoraInicio()->format('Y-m-d H:i:s'),
                                'fechaHoraFin' => $subactividad->getFechaHoraFin()->format('Y-m-d H:i:s'),
                                'actividadPadre' => $actividadPadre->getId(),
                                'espacio' => $espacio->getId()
                            ];

                            $em->commit();

                            return $this->json($response, Response::HTTP_CREATED);
                        } catch (\Exception $e) {
                            error_log('Error al crear subactividad: ' . $e->getMessage());
                            error_log($e->getTraceAsString());
                            $em->rollback();
                            return $this->json(['error' => 'Error interno del servidor (1)'], Response::HTTP_INTERNAL_SERVER_ERROR);
                        }
                    } else {
                        return $this->json(['error' => 'idPadre no especificado o vacío'], Response::HTTP_BAD_REQUEST);
                    }
                }
            }

            // Manejar tipo 2
            if ($data['tipo'] == 2) {
                if (!isset($data['descripcion']) || !isset($data['evento']) || 
                    !isset($data['fechaFin']) || !isset($data['fechaInicio'])) {
                    error_log('Error: Datos incompletos');
                    return $this->json(['error' => 'Datos incompletos'], Response::HTTP_BAD_REQUEST);
                }

                try {
                    $fechaInicio = new \DateTime($data['fechaInicio']);
                    $fechaFin = new \DateTime($data['fechaFin']);
                } catch (\Exception $e) {
                    error_log('Error al convertir fechas: ' . $e->getMessage());
                    return $this->json(['error' => 'Formato de fecha inválido'], Response::HTTP_BAD_REQUEST);
                }

                try {
                    $actividad = new Actividad();
                    $actividad->setDescripcion($data['descripcion']);
                    $actividad->setFechaHoraInicio($fechaInicio);
                    $actividad->setFechaHoraFin($fechaFin);
                    $actividad->setTipo($data['tipo']);

                    $evento = $em->getRepository(Evento::class)->find($data['evento']);
                    if (!$evento) {
                        error_log('Error: Evento no encontrado');
                        return $this->json(['error' => 'Evento no encontrado'], Response::HTTP_NOT_FOUND);
                    }
                    $actividad->setEvento($evento);

                    $em->persist($actividad);
                    $em->flush();

                    // Commit de la transacción aquí para asegurar persistencia en la base de datos
                    $em->commit();

                    $actividadData = [
                        'id' => $actividad->getId(),
                        'descripcion' => $actividad->getDescripcion(),
                        'fechaHoraInicio' => $actividad->getFechaHoraInicio()->format('Y-m-d H:i:s'),
                        'fechaHoraFin' => $actividad->getFechaHoraFin()->format('Y-m-d H:i:s'),
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
                    $em->rollback();
                    return $this->json(['error' => 'Error interno del servidor (2)'], Response::HTTP_INTERNAL_SERVER_ERROR);
                }
            }

            error_log('Error: Tipo no soportado');
            return $this->json(['error' => 'Tipo no soportado'], Response::HTTP_BAD_REQUEST);
        } catch (\Exception $e) {
            error_log('Error en la creación de actividad: ' . $e->getMessage());
            error_log($e->getTraceAsString());
            $em->rollback();
            return $this->json(['error' => 'Error interno del servidor (3)'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/actividades/{id}', name: 'actividad_update', methods: ['PUT'])]
    public function update(Request $request, EntityManagerInterface $em, int $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $data = json_decode($request->getContent(), true);
    
        // Iniciar la transacción
        $em->getConnection()->beginTransaction();
    
        try {
            // Verificar si estamos actualizando una subactividad
            if (isset($data['idPadre']) && !empty($data['idPadre'])) {
                // Actualizar una subactividad (DetalleActividad)
                $detalleActividad = $em->getRepository(DetalleActividad::class)->find($id);
    
                if (!$detalleActividad) {
                    return $this->json(['error' => 'Subactividad no encontrada'], Response::HTTP_NOT_FOUND);
                }
    
                if (isset($data['titulo'])) {
                    $detalleActividad->setTitulo($data['titulo']);
                }
    
                if (isset($data['fechaInicio'])) {
                    try {
                        $fechaInicio = new \DateTime($data['fechaInicio']);
                        $detalleActividad->setFechaHoraInicio($fechaInicio);
                    } catch (\Exception $e) {
                        return $this->json(['error' => 'Formato de fecha inválido para fechaInicio'], Response::HTTP_BAD_REQUEST);
                    }
                }
    
                if (isset($data['fechaFin'])) {
                    try {
                        $fechaFin = new \DateTime($data['fechaFin']);
                        $detalleActividad->setFechaHoraFin($fechaFin);
                    } catch (\Exception $e) {
                        return $this->json(['error' => 'Formato de fecha inválido para fechaFin'], Response::HTTP_BAD_REQUEST);
                    }
                }
    
                if (isset($data['espacio'])) {
                    $espacio = $em->getRepository(Espacio::class)->find($data['espacio']);
                    if (!$espacio) {
                        return $this->json(['error' => 'Espacio no encontrado'], Response::HTTP_NOT_FOUND);
                    }
                    $detalleActividad->setEspacio($espacio);
                }
    
                $em->persist($detalleActividad);
                $em->flush();
                $em->getConnection()->commit();
    
                return $this->json($this->serializeDetalleActividad($detalleActividad), Response::HTTP_OK);
            } else {
                // Actualizar una actividad (Actividad)
                $actividad = $em->getRepository(Actividad::class)->find($id);
    
                if (!$actividad) {
                    return $this->json(['error' => 'Actividad no encontrada'], Response::HTTP_NOT_FOUND);
                }
    
                if (isset($data['descripcion'])) {
                    $actividad->setDescripcion($data['descripcion']);
                }
    
                if (isset($data['fechaInicio'])) {
                    try {
                        $fechaInicio = new \DateTime($data['fechaInicio']);
                        $actividad->setFechaHoraInicio($fechaInicio);
                    } catch (\Exception $e) {
                        return $this->json(['error' => 'Formato de fecha inválido para fechaInicio'], Response::HTTP_BAD_REQUEST);
                    }
                }
    
                if (isset($data['fechaFin'])) {
                    try {
                        $fechaFin = new \DateTime($data['fechaFin']);
                        $actividad->setFechaHoraFin($fechaFin);
                    } catch (\Exception $e) {
                        return $this->json(['error' => 'Formato de fecha inválido para fechaFin'], Response::HTTP_BAD_REQUEST);
                    }
                }
    
                if (isset($data['evento'])) {
                    $evento = $em->getRepository(Evento::class)->find($data['evento']);
                    if (!$evento) {
                        return $this->json(['error' => 'Evento no encontrado'], Response::HTTP_NOT_FOUND);
                    }
                    $actividad->setEvento($evento);
                }
    
                $em->persist($actividad);
                $em->flush();
                $em->getConnection()->commit();
    
                return $this->json($this->serializeActividad($actividad), Response::HTTP_OK);
            }
        } catch (\Exception $e) {
            $em->getConnection()->rollBack();
            return $this->json(['error' => 'Error interno del servidor'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
    

    #[Route('/actividades/{id}', name: 'actividad_delete', methods: ['DELETE'])]
    public function deleteActividad(EntityManagerInterface $em, int $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $em->beginTransaction();
        try {
            $actividad = $em->getRepository(Actividad::class)->find($id);
            if ($actividad) {
                // Eliminar actividad principal y sus subactividades
                $detalleActividades = $actividad->getDetalleActividads();
                foreach ($detalleActividades as $detalleActividad) {
                    $em->remove($detalleActividad);
                }
                $em->remove($actividad);
                $em->flush();
                $em->commit();
                return $this->json(['success' => 'Actividad eliminada exitosamente'], Response::HTTP_OK);
            } else {
                return $this->json(['error' => 'Actividad no encontrada'], Response::HTTP_NOT_FOUND);
            }
        } catch (\Exception $e) {
            $em->rollback();
            return $this->json(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/detalleActividades/{id}', name: 'detalle_actividad_delete', methods: ['DELETE'])]
    public function deleteDetalleActividad(EntityManagerInterface $em, int $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $em->beginTransaction();
        try {
            // Intentar encontrar la subactividad (detalleActividad)
            $detalleActividad = $em->getRepository(DetalleActividad::class)->find($id);
            if ($detalleActividad) {
                $em->remove($detalleActividad);
                $em->flush();
                $em->commit();
                return $this->json(['success' => 'Detalle de Actividad eliminado exitosamente'], Response::HTTP_OK);
            } else {
                return $this->json(['error' => 'Detalle de Actividad no encontrado'], Response::HTTP_NOT_FOUND);
            }
        } catch (\Exception $e) {
            $em->rollback();
            return $this->json(['error' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    private function serializeDetalleActividad(DetalleActividad $detalleActividad): array
    {
        return [
            'id' => $detalleActividad->getId(),
            'titulo' => $detalleActividad->getTitulo(),
            'fechaHoraInicio' => $detalleActividad->getFechaHoraInicio()->format('Y-m-d H:i:s'),
            'fechaHoraFin' => $detalleActividad->getFechaHoraFin()->format('Y-m-d H:i:s'),
            'espacio' => $detalleActividad->getEspacio() ? [
                'id' => $detalleActividad->getEspacio()->getId(),
                'nombre' => $detalleActividad->getEspacio()->getNombre()
            ] : null,
        ];
    }

    private function inscribirAlumnosEnActividad(EntityManagerInterface $em, DetalleActividad $detalleActividad, array $grupoIds)
    {
        foreach ($grupoIds as $grupoId) {
            $grupo = $em->getRepository(Grupo::class)->find($grupoId);
            if ($grupo) {
                foreach ($grupo->getAlumnos() as $alumno) {
                    $detalleActividad->addAlumno($alumno);
                }
            }
        }
        $em->flush();
    }

    private function updatePonentes(EntityManagerInterface $em, DetalleActividad $subactividad, array $ponentesData)
    {
        $ponenteRepository = $em->getRepository(Ponente::class);

        try {
            // Eliminar ponentes existentes de la subactividad
            $ponentesExistentes = $ponenteRepository->findBy(['detalle_actividad' => $subactividad]);
            foreach ($ponentesExistentes as $ponenteExistente) {
                $em->remove($ponenteExistente);
            }
            $em->flush(); // Asegurarse de eliminar los ponentes anteriores antes de añadir los nuevos

            // Añadir nuevos ponentes
            foreach ($ponentesData as $ponenteData) {
                $ponente = new Ponente();
                $ponente->setNombre($ponenteData['nombre']);
                $ponente->setCargo($ponenteData['cargo']);
                $ponente->setURL($ponenteData['url']);
                $ponente->setDetalleActividad($subactividad);

                $em->persist($ponente);
            }

            $em->flush(); // Guardar los nuevos ponentes
        } catch (\Exception $e) {
            error_log('Error en updatePonentes: ' . $e->getMessage());
            error_log($e->getTraceAsString());
            throw $e; // Re-lanzar la excepción para que el controlador pueda manejarla
        }
    }
}

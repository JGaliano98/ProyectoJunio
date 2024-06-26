<?php

namespace App\Controller\API;

use App\Entity\Alumno;
use App\Entity\Grupo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/API')]
class AlumnoControllerAPI extends AbstractController
{
    #[Route('/alumnos/{id?}', name: 'alumno_index', methods: ['GET'])]
    public function index(?int $id, EntityManagerInterface $em): Response
    {
        $alumnoRepository = $em->getRepository(Alumno::class);

        if ($id === null) {
            // Si no se proporciona ID, devolver todos los alumnos
            $alumnos = $alumnoRepository->findAll();
            $result = array_map(function($alumno) {
                return $this->transformAlumno($alumno);
            }, $alumnos);
            return $this->json($result);
        } else {
            // Si se proporciona ID, devolver el alumno específico
            $alumno = $alumnoRepository->find($id);

            if (!$alumno) {
                return $this->json(['message' => 'No se ha encontrado el alumno con ID ' . $id], Response::HTTP_NOT_FOUND);
            }

            return $this->json($this->transformAlumno($alumno));
        }
    }

    #[Route('/alumnos', name: 'alumno_create', methods: ['POST'])]
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $data = json_decode($request->getContent(), true);
        $resultados = [];
        $errores = [];

        foreach ($data as $index => $alumnoData) {
            try {
                // Verificar si ya existe un alumno con el mismo correo
                $existingAlumno = $em->getRepository(Alumno::class)->findOneBy(['correo' => $alumnoData[1]]);
                if ($existingAlumno) {
                    throw new \Exception('Ya existe un alumno con el mismo correo: ' . $alumnoData[1]);
                }

                // Extraer el nombre completo del alumno
                $nombreCompleto = $alumnoData[0];
                // Dividir el nombre completo en nombre y apellidos
                $nombreYApellidos = explode(', ', $nombreCompleto);
                $nombre = $nombreYApellidos[1]; // Primer elemento del array es el nombre

                $alumno = new Alumno();
                $alumno->setNombre($nombre);
                $alumno->setCorreo($alumnoData[1]);
                $alumno->setFechaNacimiento(new \DateTime($alumnoData[2]));

                // Asignar el grupo al alumno
                if (isset($alumnoData[3])) {
                    $grupo = $em->getRepository(Grupo::class)->find($alumnoData[3]);
                    if (!$grupo) {
                        throw new \Exception('Grupo no encontrado con ID: ' . $alumnoData[3]);
                    }
                    $alumno->setGrupo($grupo);
                }

                $em->persist($alumno);
                $em->flush();
                $resultados[] = ['index' => $index, 'status' => 'success', 'message' => 'Alumno creado correctamente'];
            } catch (\Exception $e) {
                // Manejo del error para esta línea específica
                $resultados[] = ['index' => $index, 'status' => 'error', 'message' => $e->getMessage()];
                $errores[] = $index; // Añadir el índice de la línea con error al array de errores
            }
        }

        return $this->json(['status' => 'finished', 'results' => $resultados, 'errors' => $errores], Response::HTTP_CREATED);
    }

    #[Route('/alumnos/{id}', name: 'alumno_update', methods: ['PUT'])]
    public function update(Request $request, EntityManagerInterface $em, int $id): Response
    {
        // Busca el alumno por ID
        $alumno = $em->getRepository(Alumno::class)->find($id);

        if (!$alumno) {
            return $this->json(['error' => 'Alumno no encontrado con ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        $data = json_decode($request->getContent(), true);
        if (!$data || !isset($data['alumno'])) {
            return $this->json(['error' => 'JSON inválido o falta la clave \'alumno\''], Response::HTTP_BAD_REQUEST);
        }

        $alumnoData = $data['alumno'];

        // Actualiza los datos del alumno
        if (isset($alumnoData['nombre'])) {
            $alumno->setNombre($alumnoData['nombre']);
        }
        if (isset($alumnoData['correo'])) {
            $alumno->setCorreo($alumnoData['correo']);
        }
        if (isset($alumnoData['fecha_nacimiento'])) {
            try {
                $fechaNacimiento = new \DateTime($alumnoData['fecha_nacimiento']);
                $alumno->setFechaNacimiento($fechaNacimiento);
            } catch (\Exception $e) {
                return $this->json(['error' => 'Formato de fecha incorrecto'], Response::HTTP_BAD_REQUEST);
            }
        }
        if (isset($alumnoData['grupo_id'])) {
            $alumno->setGrupoId($alumnoData['grupo_id']);
        }

        try {
            // Guarda los cambios en la base de datos
            $em->flush();
            return $this->json($this->transformAlumno($alumno));
        } catch (\Exception $e) {
            // Captura cualquier excepción durante el flush y loguea detalles para depuración
            error_log($e->getMessage()); // Loguea el mensaje de error en el log del servidor
            return $this->json(['error' => 'Error al actualizar el alumno', 'details' => $e->getMessage()], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    #[Route('/alumnos/{id}', name: 'alumno_delete', methods: ['DELETE'])]
    public function delete(EntityManagerInterface $em, Alumno $alumno = null, int $id): Response
    {
        // Verifica si el alumno existe
        if (!$alumno) {
            return $this->json(['message' => 'No se ha encontrado el alumno con ID ' . $id], Response::HTTP_NOT_FOUND);
        }

        // Elimina el alumno de la base de datos
        $em->remove($alumno);
        $em->flush();

        return $this->json(['message' => 'Alumno eliminado exitosamente.'], Response::HTTP_NO_CONTENT);
    }

    // Transforma un objeto Alumno a un array
    private function transformAlumno($alumno) {
        return [
            'id' => $alumno->getId(),
            'nombre' => $alumno->getNombre(),
            'correo' => $alumno->getCorreo(),
            'fecha_nacimiento' => $alumno->getFechaNacimiento()->format('Y-m-d'),
            'grupo_id' => $alumno->getGrupo(),
        ];
    }
}

?>

<?php

namespace App\Entity;

use App\Repository\AlumnoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AlumnoRepository::class)]
class Alumno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "El nombre no puede estar vacío")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "El nombre debe tener al menos {{ limit }} caracteres",
        maxMessage: "El nombre no puede tener más de {{ limit }} caracteres"
    )]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "El correo no puede estar vacío")]
    #[Assert\Email(message: "El correo '{{ value }}' no es un correo válido.")]
    private ?string $correo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Assert\Date(message: "La fecha '{{ value }}' no es una fecha válida.")]
    private ?\DateTimeInterface $fecha_nacimiento = null;

    /**
     * @var Collection<int, DetalleActividad>
     */
    #[ORM\ManyToMany(targetEntity: DetalleActividad::class, mappedBy: 'alumno')]
    private Collection $detalleActividads;

    #[ORM\ManyToOne(inversedBy: 'alumnos')]
    private ?Grupo $grupo = null;

    public function __construct()
    {
        $this->detalleActividads = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): static
    {
        $this->correo = $correo;
        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento(?\DateTimeInterface $fecha_nacimiento): static
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
        return $this;
    }

    /**
     * @return Collection<int, DetalleActividad>
     */
    public function getDetalleActividads(): Collection
    {
        return $this->detalleActividads;
    }

    public function addDetalleActividad(DetalleActividad $detalleActividad): static
    {
        if (!$this->detalleActividads->contains($detalleActividad)) {
            $this->detalleActividads->add($detalleActividad);
            $detalleActividad->addAlumno($this);
        }

        return $this;
    }

    public function removeDetalleActividad(DetalleActividad $detalleActividad): static
    {
        if ($this->detalleActividads->removeElement($detalleActividad)) {
            $detalleActividad->removeAlumno($this);
        }

        return $this;
    }

    public function getGrupo(): ?Grupo
    {
        return $this->grupo;
    }

    public function setGrupo(?Grupo $grupo): static
    {
        $this->grupo = $grupo;
        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\DetalleActividadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DetalleActividadRepository::class)]
class DetalleActividad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_hora_inicio = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_hora_fin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $URL = null;

    /**
     * @var Collection<int, Ponente>
     */
    #[ORM\OneToMany(targetEntity: Ponente::class, mappedBy: 'detalle_actividad')]
    private Collection $ponentes;

    #[ORM\ManyToOne(inversedBy: 'detalleActividads')]
    private ?Espacio $espacio = null;

    #[ORM\ManyToOne(inversedBy: 'detalleActividads')]
    private ?Actividad $actividad = null;

    /**
     * @var Collection<int, Alumno>
     */
    #[ORM\ManyToMany(targetEntity: Alumno::class, inversedBy: 'detalleActividads')]
    private Collection $alumno;

    public function __construct()
    {
        $this->ponentes = new ArrayCollection();
        $this->alumno = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getFechaHoraInicio(): ?\DateTimeInterface
    {
        return $this->fecha_hora_inicio;
    }

    public function setFechaHoraInicio(?\DateTimeInterface $fecha_hora_inicio): static
    {
        $this->fecha_hora_inicio = $fecha_hora_inicio;

        return $this;
    }

    public function getFechaHoraFin(): ?\DateTimeInterface
    {
        return $this->fecha_hora_fin;
    }

    public function setFechaHoraFin(?\DateTimeInterface $fecha_hora_fin): static
    {
        $this->fecha_hora_fin = $fecha_hora_fin;

        return $this;
    }

    public function getURL(): ?string
    {
        return $this->URL;
    }

    public function setURL(?string $URL): static
    {
        $this->URL = $URL;

        return $this;
    }

    /**
     * @return Collection<int, Ponente>
     */
    public function getPonentes(): Collection
    {
        return $this->ponentes;
    }

    public function addPonente(Ponente $ponente): static
    {
        if (!$this->ponentes->contains($ponente)) {
            $this->ponentes->add($ponente);
            $ponente->setDetalleActividad($this);
        }

        return $this;
    }

    public function removePonente(Ponente $ponente): static
    {
        if ($this->ponentes->removeElement($ponente)) {
            // set the owning side to null (unless already changed)
            if ($ponente->getDetalleActividad() === $this) {
                $ponente->setDetalleActividad(null);
            }
        }

        return $this;
    }

    public function getEspacio(): ?espacio
    {
        return $this->espacio;
    }

    public function setEspacio(?espacio $espacio): static
    {
        $this->espacio = $espacio;

        return $this;
    }

    public function getActividad(): ?Actividad
    {
        return $this->actividad;
    }

    public function setActividad(?Actividad $actividad): static
    {
        $this->actividad = $actividad;

        return $this;
    }

    /**
     * @return Collection<int, Alumno>
     */
    public function getAlumno(): Collection
    {
        return $this->alumno;
    }

    public function addAlumno(Alumno $alumno): static
    {
        if (!$this->alumno->contains($alumno)) {
            $this->alumno->add($alumno);
        }

        return $this;
    }

    public function removeAlumno(Alumno $alumno): static
    {
        $this->alumno->removeElement($alumno);

        return $this;
    }
}

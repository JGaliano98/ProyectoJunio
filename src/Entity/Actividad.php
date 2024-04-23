<?php

namespace App\Entity;

use App\Repository\ActividadRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActividadRepository::class)]
class Actividad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_hora_inicio = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_hora_fin = null;

    #[ORM\ManyToOne(inversedBy: 'actividads')]
    private ?evento $evento = null;

    /**
     * @var Collection<int, DetalleActividad>
     */
    #[ORM\OneToMany(targetEntity: DetalleActividad::class, mappedBy: 'actividad')]
    private Collection $detalleActividads;

    public function __construct()
    {
        $this->detalleActividads = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEvento(): ?evento
    {
        return $this->evento;
    }

    public function setEvento(?evento $evento): static
    {
        $this->evento = $evento;

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
            $detalleActividad->setActividad($this);
        }

        return $this;
    }

    public function removeDetalleActividad(DetalleActividad $detalleActividad): static
    {
        if ($this->detalleActividads->removeElement($detalleActividad)) {
            // set the owning side to null (unless already changed)
            if ($detalleActividad->getActividad() === $this) {
                $detalleActividad->setActividad(null);
            }
        }

        return $this;
    }
}

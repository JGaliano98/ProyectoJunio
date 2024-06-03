<?php

namespace App\Entity;

use App\Repository\EventoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventoRepository::class)]
class Evento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_inicio = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fecha_fin = null;

    /**
     * @var Collection<int, Actividad>
     */
    #[ORM\OneToMany(targetEntity: Actividad::class, mappedBy: 'evento')]
    private Collection $actividads;

    public function __construct()
    {
        $this->actividads = new ArrayCollection();
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

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fecha_inicio;
    }

    public function setFechaInicio(?\DateTimeInterface $fecha_inicio): static
    {
        $this->fecha_inicio = $fecha_inicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fecha_fin;
    }

    public function setFechaFin(?\DateTimeInterface $fecha_fin): static
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    /**
     * @return Collection<int, Actividad>
     */
    public function getActividads(): Collection
    {
        return $this->actividads;
    }

    public function addActividad(Actividad $actividad): static
    {
        if (!$this->actividads->contains($actividad)) {
            $this->actividads->add($actividad);
            $actividad->setEvento($this);
        }

        return $this;
    }

    public function removeActividad(Actividad $actividad): static
    {
        if ($this->actividads->removeElement($actividad)) {
            // set the owning side to null (unless already changed)
            if ($actividad->getEvento() === $this) {
                $actividad->setEvento(null);
            }
        }

        return $this;
    }
    public function __toString(): string
    {
        return  $this->titulo;
    }
}

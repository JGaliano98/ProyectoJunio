<?php

namespace App\Entity;

use App\Repository\EspacioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EspacioRepository::class)]
class Espacio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column]
    private ?int $aforo = null;

    #[ORM\ManyToOne(inversedBy: 'espacios')]
    private ?Edificio $edificio = null;

    /**
     * @var Collection<int, Recurso>
     */
    #[ORM\ManyToMany(targetEntity: Recurso::class, inversedBy: 'espacios')]
    private Collection $recurso;

    /**
     * @var Collection<int, DetalleActividad>
     */
    #[ORM\OneToMany(targetEntity: DetalleActividad::class, mappedBy: 'espacio')]
    private Collection $detalleActividads;

    public function __construct()
    {
        $this->recurso = new ArrayCollection();
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

    public function getAforo(): ?int
    {
        return $this->aforo;
    }

    public function setAforo(int $aforo): static
    {
        $this->aforo = $aforo;

        return $this;
    }

    public function getEdificio(): ?Edificio
    {
        return $this->edificio;
    }

    public function setEdificio(?Edificio $edificio): static
    {
        $this->edificio = $edificio;

        return $this;
    }

    /**
     * @return Collection<int, Recurso>
     */
    public function getRecurso(): Collection
    {
        return $this->recurso;
    }

    public function addRecurso(Recurso $recurso): static
    {
        if (!$this->recurso->contains($recurso)) {
            $this->recurso->add($recurso);
        }

        return $this;
    }

    public function removeRecurso(Recurso $recurso): static
    {
        $this->recurso->removeElement($recurso);

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
            $detalleActividad->setEspacio($this);
        }

        return $this;
    }

    public function removeDetalleActividad(DetalleActividad $detalleActividad): static
    {
        if ($this->detalleActividads->removeElement($detalleActividad)) {
            // set the owning side to null (unless already changed)
            if ($detalleActividad->getEspacio() === $this) {
                $detalleActividad->setEspacio(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\EspacioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EspacioRepository::class)]
class Espacio
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

    #[ORM\Column]
    #[Assert\NotBlank(message: "El aforo no puede estar vacío")]
    #[Assert\Positive(message: "El aforo debe ser un número positivo")]
    private ?int $aforo = null;

    #[ORM\ManyToOne(inversedBy: 'espacios')]
    #[Assert\NotNull(message: "El edificio no puede estar vacío")]
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

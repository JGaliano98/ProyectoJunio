<?php
namespace App\Entity;

use App\Repository\NivelEducativoRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: NivelEducativoRepository::class)]
class NivelEducativo
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

    #[ORM\OneToMany(targetEntity: Grupo::class, mappedBy: 'nivelEducativo')]
    private Collection $grupos;

    public function __construct()
    {
        $this->grupos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getGrupos(): Collection
    {
        return $this->grupos;
    }

    public function addGrupo(Grupo $grupo): self
    {
        if (!$this->grupos->contains($grupo)) {
            $this->grupos[] = $grupo;
            $grupo->setNivelEducativo($this);
        }
        return $this;
    }

    public function removeGrupo(Grupo $grupo): self
    {
        if ($this->grupos->removeElement($grupo)) {
            if ($grupo->getNivelEducativo() === $this) {
                $grupo->setNivelEducativo(null);
            }
        }
        return $this;
    }

    public function __toString()
    {
        // Retorna la descripción del recurso como cadena de texto
        return $this->nombre;
    }
}

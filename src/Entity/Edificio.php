<?php
namespace App\Entity;

use App\Repository\EdificioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EdificioRepository::class)]
class Edificio
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

    /**
     * @var Collection<int, Espacio>
     */
    #[ORM\OneToMany(targetEntity: Espacio::class, mappedBy: 'edificio')]
    private Collection $espacios;

    public function __construct()
    {
        $this->espacios = new ArrayCollection();
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

    public function __toString()
    {
        // Retorna el nombre del edificio como cadena de texto
        return $this->nombre;
    }

    /**
     * @return Collection<int, Espacio>
     */
    public function getEspacios(): Collection
    {
        return $this->espacios;
    }

    public function addEspacio(Espacio $espacio): static
    {
        if (!$this->espacios->contains($espacio)) {
            $this->espacios->add($espacio);
            $espacio->setEdificio($this);
        }

        return $this;
    }

    public function removeEspacio(Espacio $espacio): static
    {
        if ($this->espacios->removeElement($espacio)) {
            // set the owning side to null (unless already changed)
            if ($espacio->getEdificio() === $this) {
                $espacio->setEdificio(null);
            }
        }

        return $this;
    }
}

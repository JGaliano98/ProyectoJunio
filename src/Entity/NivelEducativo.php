<?php

namespace App\Entity;

use App\Repository\NivelEducativoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NivelEducativoRepository::class)]
class NivelEducativo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\ManyToOne(inversedBy: 'nivelEducativos')]
    private ?grupo $grupo = null;

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

    public function getGrupo(): ?grupo
    {
        return $this->grupo;
    }

    public function setGrupo(?grupo $grupo): static
    {
        $this->grupo = $grupo;

        return $this;
    }
}

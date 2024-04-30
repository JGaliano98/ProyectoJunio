<?php

namespace App\Entity;

use App\Repository\GrupoRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

#[ORM\Entity(repositoryClass: GrupoRepository::class)]
class Grupo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\ManyToOne(targetEntity: NivelEducativo::class, inversedBy: 'grupos')]
    private ?NivelEducativo $nivelEducativo = null;


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

    public function getNivelEducativo(): ?NivelEducativo
    {
        return $this->nivelEducativo;
    }

    public function setNivelEducativo(?NivelEducativo $nivelEducativo): self
    {
        $this->nivelEducativo = $nivelEducativo;
        return $this;
    }
}

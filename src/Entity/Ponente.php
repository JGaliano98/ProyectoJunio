<?php

namespace App\Entity;

use App\Repository\PonenteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PonenteRepository::class)]
class Ponente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $cargo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $URL = null;

    #[ORM\ManyToOne(inversedBy: 'ponentes')]
    private ?DetalleActividad $detalle_actividad = null;

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

    public function getCargo(): ?string
    {
        return $this->cargo;
    }

    public function setCargo(string $cargo): static
    {
        $this->cargo = $cargo;

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

    public function getDetalleActividad(): ?DetalleActividad
    {
        return $this->detalle_actividad;
    }

    public function setDetalleActividad(?DetalleActividad $detalle_actividad): static
    {
        $this->detalle_actividad = $detalle_actividad;

        return $this;
    }
}

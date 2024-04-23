<?php

namespace App\Entity;

use App\Repository\DetalleActividadRepository;
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
}

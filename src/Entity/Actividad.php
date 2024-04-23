<?php

namespace App\Entity;

use App\Repository\ActividadRepository;
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
}

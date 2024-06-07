<?php
// src/Entity/Ponente.php

namespace App\Entity;

use App\Repository\PonenteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

#[ORM\Entity(repositoryClass: PonenteRepository::class)]
#[Vich\Uploadable]
class Ponente
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

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "El cargo no puede estar vacío")]
    #[Assert\Length(
        min: 3,
        max: 255,
        minMessage: "El cargo debe tener al menos {{ limit }} caracteres",
        maxMessage: "El cargo no puede tener más de {{ limit }} caracteres"
    )]
    private ?string $cargo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $URL = null;

    #[Vich\UploadableField(mapping: 'ponente_image', fileNameProperty: 'URL')]
    private ?File $imagenFile = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $updatedAt = null;

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

    public function getImagenFile(): ?File
    {
        return $this->imagenFile;
    }

    public function setImagenFile(?File $imagenFile = null): void
    {
        $this->imagenFile = $imagenFile;

        if (null !== $imagenFile) {
            $this->updatedAt = new \DateTimeImmutable();
        }
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
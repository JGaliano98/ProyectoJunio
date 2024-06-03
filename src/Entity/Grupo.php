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

    /**
     * @var Collection<int, Alumno>
     */
    #[ORM\OneToMany(targetEntity: Alumno::class, mappedBy: 'grupo')]
    private Collection $alumnos;

    public function __construct()
    {
        $this->alumnos = new ArrayCollection();
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

    public function getNivelEducativo(): ?NivelEducativo
    {
        return $this->nivelEducativo;
    }

    public function setNivelEducativo(?NivelEducativo $nivelEducativo): self
    {
        $this->nivelEducativo = $nivelEducativo;
        return $this;
    }

    public function __toString(): string
    {
        return sprintf('%s - %s', $this->nivelEducativo ? $this->nivelEducativo->getNombre() : 'Sin Nivel Educativo', $this->nombre);
    }

    /**
     * @return Collection|Alumno[]
     */
    public function getAlumnos(): Collection
    {
        return $this->alumnos;
    }

    public function addAlumno(Alumno $alumno): self
    {
        if (!$this->alumnos->contains($alumno)) {
            $this->alumnos[] = $alumno;
            $alumno->setGrupo($this);
        }

        return $this;
    }

    public function removeAlumno(Alumno $alumno): self
    {
        if ($this->alumnos->removeElement($alumno)) {
            // set the owning side to null (unless already changed)
            if ($alumno->getGrupo() === $this) {
                $alumno->setGrupo(null);
            }
        }

        return $this;
    }
}

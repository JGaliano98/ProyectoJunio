<?php

namespace App\Entity;

use App\Repository\GrupoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GrupoRepository::class)]
class Grupo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    /**
     * @var Collection<int, Alumno>
     */
    #[ORM\OneToMany(targetEntity: Alumno::class, mappedBy: 'grupo')]
    private Collection $alumnos;

    /**
     * @var Collection<int, NivelEducativo>
     */
    #[ORM\OneToMany(targetEntity: NivelEducativo::class, mappedBy: 'grupo')]
    private Collection $nivelEducativos;

    /**
     * @var Collection<int, user>
     */
    #[ORM\ManyToMany(targetEntity: user::class, inversedBy: 'grupos')]
    private Collection $user;

    public function __construct()
    {
        $this->alumnos = new ArrayCollection();
        $this->nivelEducativos = new ArrayCollection();
        $this->user = new ArrayCollection();
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

    /**
     * @return Collection<int, Alumno>
     */
    public function getAlumnos(): Collection
    {
        return $this->alumnos;
    }

    public function addAlumno(Alumno $alumno): static
    {
        if (!$this->alumnos->contains($alumno)) {
            $this->alumnos->add($alumno);
            $alumno->setGrupo($this);
        }

        return $this;
    }

    public function removeAlumno(Alumno $alumno): static
    {
        if ($this->alumnos->removeElement($alumno)) {
            // set the owning side to null (unless already changed)
            if ($alumno->getGrupo() === $this) {
                $alumno->setGrupo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, NivelEducativo>
     */
    public function getNivelEducativos(): Collection
    {
        return $this->nivelEducativos;
    }

    public function addNivelEducativo(NivelEducativo $nivelEducativo): static
    {
        if (!$this->nivelEducativos->contains($nivelEducativo)) {
            $this->nivelEducativos->add($nivelEducativo);
            $nivelEducativo->setGrupo($this);
        }

        return $this;
    }

    public function removeNivelEducativo(NivelEducativo $nivelEducativo): static
    {
        if ($this->nivelEducativos->removeElement($nivelEducativo)) {
            // set the owning side to null (unless already changed)
            if ($nivelEducativo->getGrupo() === $this) {
                $nivelEducativo->setGrupo(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, user>
     */
    public function getUser(): Collection
    {
        return $this->user;
    }

    public function addUser(user $user): static
    {
        if (!$this->user->contains($user)) {
            $this->user->add($user);
        }

        return $this;
    }

    public function removeUser(user $user): static
    {
        $this->user->removeElement($user);

        return $this;
    }
}

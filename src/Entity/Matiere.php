<?php

namespace App\Entity;

use App\Repository\MatiereRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatiereRepository::class)
 */
class Matiere
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $matiere_id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $matiere_name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $matiere_specialite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatiereId(): ?int
    {
        return $this->matiere_id;
    }

    public function setMatiereId(int $matiere_id): self
    {
        $this->matiere_id = $matiere_id;

        return $this;
    }

    public function getMatiereName(): ?string
    {
        return $this->matiere_name;
    }

    public function setMatiereName(string $matiere_name): self
    {
        $this->matiere_name = $matiere_name;

        return $this;
    }

    public function getMatiereSpecialite(): ?bool
    {
        return $this->matiere_specialite;
    }

    public function setMatiereSpecialite(bool $matiere_specialite): self
    {
        $this->matiere_specialite = $matiere_specialite;

        return $this;
    }
}

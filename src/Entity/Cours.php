<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 */
class Cours
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
    private $cours_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $matiere_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCoursId(): ?int
    {
        return $this->cours_id;
    }

    public function setCoursId(int $cours_id): self
    {
        $this->cours_id = $cours_id;

        return $this;
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
}

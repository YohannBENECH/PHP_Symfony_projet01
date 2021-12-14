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

    /**
     * @ORM\Column(type="integer")
     */
    private $cours_duree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $background_color;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text_color;

    /**
     * @ORM\Column(type="string", length=7)
     */
    private $border_color;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start;

    /**
     * @ORM\Column(type="integer")
     */
    private $intervenant_id;

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

    public function getCoursDuree(): ?int
    {
        return $this->cours_duree;
    }

    public function setCoursDuree(int $cours_duree): self
    {
        $this->cours_duree = $cours_duree;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->background_color;
    }

    public function setBackgroundColor(string $background_color): self
    {
        $this->background_color = $background_color;

        return $this;
    }

    public function getTextColor(): ?string
    {
        return $this->text_color;
    }

    public function setTextColor(string $text_color): self
    {
        $this->text_color = $text_color;

        return $this;
    }

    public function getBorderColor(): ?string
    {
        return $this->border_color;
    }

    public function setBorderColor(string $border_color): self
    {
        $this->border_color = $border_color;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getIntervenantId(): ?int
    {
        return $this->intervenant_id;
    }

    public function setIntervenantId(int $intervenant_id): self
    {
        $this->intervenant_id = $intervenant_id;

        return $this;
    }
}

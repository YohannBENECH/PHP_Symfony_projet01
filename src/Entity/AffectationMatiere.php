<?php

namespace App\Entity;

use App\Repository\AffectationMatiereRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AffectationMatiereRepository::class)
 */
class AffectationMatiere
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
    private $intervenant_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $matiere_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $duree;

    /**
     * @ORM\Column(type="date")
     */
    private $intervalle_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $intervalle_fin;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMatiereId(): ?int
    {
        return $this->matiere_id;
    }

    public function setMatiereId(int $matiere_id): self
    {
        $this->matiere_id = $matiere_id;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getIntervalleDebut(): ?\DateTimeInterface
    {
        return $this->intervalle_debut;
    }

    public function setIntervalleDebut(\DateTimeInterface $intervalle_debut): self
    {
        $this->intervalle_debut = $intervalle_debut;

        return $this;
    }

    public function getIntervalleFin(): ?\DateTimeInterface
    {
        return $this->intervalle_fin;
    }

    public function setIntervalleFin(\DateTimeInterface $intervalle_fin): self
    {
        $this->intervalle_fin = $intervalle_fin;

        return $this;
    }
}

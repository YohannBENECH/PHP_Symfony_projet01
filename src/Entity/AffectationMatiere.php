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
    private $AM_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $AM_intervenant_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $AM_matiere_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $AM_duree;

    /**
     * @ORM\Column(type="date")
     */
    private $AM_intervalle_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $AM_intervalle_fin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAMId(): ?int
    {
        return $this->AM_id;
    }

    public function setAMId(int $AM_id): self
    {
        $this->AM_id = $AM_id;

        return $this;
    }

    public function getAMIntervenantId(): ?int
    {
        return $this->AM_intervenant_id;
    }

    public function setAMIntervenantId(int $AM_intervenant_id): self
    {
        $this->AM_intervenant_id = $AM_intervenant_id;

        return $this;
    }

    public function getAMMatiereId(): ?int
    {
        return $this->AM_matiere_id;
    }

    public function setAMMatiereId(int $AM_matiere_id): self
    {
        $this->AM_matiere_id = $AM_matiere_id;

        return $this;
    }

    public function getAMDuree(): ?int
    {
        return $this->AM_duree;
    }

    public function setAMDuree(int $AM_duree): self
    {
        $this->AM_duree = $AM_duree;

        return $this;
    }

    public function getAMIntervalleDebut(): ?\DateTimeInterface
    {
        return $this->AM_intervalle_debut;
    }

    public function setAMIntervalleDebut(\DateTimeInterface $AM_intervalle_debut): self
    {
        $this->AM_intervalle_debut = $AM_intervalle_debut;

        return $this;
    }

    public function getAMIntervalleFin(): ?\DateTimeInterface
    {
        return $this->AM_intervalle_fin;
    }

    public function setAMIntervalleFin(\DateTimeInterface $AM_intervalle_fin): self
    {
        $this->AM_intervalle_fin = $AM_intervalle_fin;

        return $this;
    }
}

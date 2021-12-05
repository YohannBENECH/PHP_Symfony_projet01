<?php

namespace App\Entity;

use App\Repository\ToExcludeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ToExcludeRepository::class)
 */
class ToExclude
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
    private $TE_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $TE_intervenant_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $TE_matiere_id;

    /**
     * @ORM\Column(type="date")
     */
    private $TE_intervalle_debut;

    /**
     * @ORM\Column(type="date")
     */
    private $TE_intervalle_fin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTEId(): ?int
    {
        return $this->TE_id;
    }

    public function setTEId(int $TE_id): self
    {
        $this->TE_id = $TE_id;

        return $this;
    }

    public function getTEIntervenantId(): ?int
    {
        return $this->TE_intervenant_id;
    }

    public function setTEIntervenantId(int $TE_intervenant_id): self
    {
        $this->TE_intervenant_id = $TE_intervenant_id;

        return $this;
    }

    public function getTEMatiereId(): ?int
    {
        return $this->TE_matiere_id;
    }

    public function setTEMatiereId(int $TE_matiere_id): self
    {
        $this->TE_matiere_id = $TE_matiere_id;

        return $this;
    }

    public function getTEIntervalleDebut(): ?\DateTimeInterface
    {
        return $this->TE_intervalle_debut;
    }

    public function setTEIntervalleDebut(\DateTimeInterface $TE_intervalle_debut): self
    {
        $this->TE_intervalle_debut = $TE_intervalle_debut;

        return $this;
    }

    public function getTEIntervalleFin(): ?\DateTimeInterface
    {
        return $this->TE_intervalle_fin;
    }

    public function setTEIntervalleFin(\DateTimeInterface $TE_intervalle_fin): self
    {
        $this->TE_intervalle_fin = $TE_intervalle_fin;

        return $this;
    }
}

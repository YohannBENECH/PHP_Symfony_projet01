<?php

namespace App\Entity;

use App\Repository\AccountRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AccountRepository::class)
 */
class Account
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $account_id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $account_login;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $account_password;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $account_type;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $account_firstname;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $account_name;

    public function getAccountId(): ?int
    {
        return $this->account_id;
    }

    public function getAccountLogin(): ?string
    {
        return $this->account_login;
    }

    public function setAccountLogin(string $account_login): self
    {
        $this->account_login = $account_login;

        return $this;
    }

    public function getAccountPassword(): ?string
    {
        return $this->account_password;
    }

    public function setAccountPassword(string $account_password): self
    {
        $this->account_password = $account_password;

        return $this;
    }

    public function getAccountType(): ?string
    {
        return $this->account_type;
    }

    public function setAccountType(string $account_type): self
    {
        $this->account_type = $account_type;

        return $this;
    }

    public function getAccountFirstname(): ?string
    {
        return $this->account_firstname;
    }

    public function setAccountFirstname(?string $account_firstname): self
    {
        $this->account_firstname = $account_firstname;

        return $this;
    }

    public function getAccountName(): ?string
    {
        return $this->account_name;
    }

    public function setAccountName(?string $account_name): self
    {
        $this->account_name = $account_name;

        return $this;
    }
}

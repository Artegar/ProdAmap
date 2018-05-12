<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class producteurProfil
{


    private $utilId;
    private $name;
    private $phone;
    private $namePro;

    public function setUtilID(?int $utilId): self
    {
        $this->utilId = $utilId;

        return $this;
    }

    public function getUtilId(): ?int
    {
        return $this->utilId;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setNamePro(?string $namePro): self
    {
        $this->namePro = $namePro;

        return $this;
    }

    public function getNamePro(): ?string
    {
        return $this->namePro;
    }
}
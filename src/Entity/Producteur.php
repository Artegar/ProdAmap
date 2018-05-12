<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Producteur
 *
 * @ORM\Table(name="producteur")
 * @ORM\Entity
 */
class Producteur
{
    /**
     * @var int
     *
     * @ORM\Column(name="prod_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prodId;

    /**
     * @var bool
     *
     * @ORM\Column(name="prod_verif", type="boolean", nullable=false)
     */
    private $prodVerif;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_siren", type="string", length=100, nullable=false)
     */
    private $prodSiren;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="prod_date_verif", type="datetime", nullable=true)
     */
    private $prodDateVerif;

    /**
     * @var string
     *
     * @ORM\Column(name="prod_nom_exploit", type="string", length=100, nullable=false)
     */
    private $prodNomExploit;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Produit", mappedBy="prod")
     */
    private $produit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->produit = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getProdId(): ?int
    {
        return $this->prodId;
    }

    public function getProdVerif(): ?bool
    {
        return $this->prodVerif;
    }

    public function setProdVerif(bool $prodVerif): self
    {
        $this->prodVerif = $prodVerif;

        return $this;
    }

    public function getProdSiren(): ?string
    {
        return $this->prodSiren;
    }

    public function setProdSiren(string $prodSiren): self
    {
        $this->prodSiren = $prodSiren;

        return $this;
    }

    public function getProdDateVerif(): ?\DateTimeInterface
    {
        return $this->prodDateVerif;
    }

    public function setProdDateVerif(?\DateTimeInterface $prodDateVerif): self
    {
        $this->prodDateVerif = $prodDateVerif;

        return $this;
    }

    public function getProdNomExploit(): ?string
    {
        return $this->prodNomExploit;
    }

    public function setProdNomExploit(string $prodNomExploit): self
    {
        $this->prodNomExploit = $prodNomExploit;

        return $this;
    }

    /**
     * @return Collection|Produit[]
     */
    public function getProduit(): Collection
    {
        return $this->produit;
    }

    public function addProduit(Produit $produit): self
    {
        if (!$this->produit->contains($produit)) {
            $this->produit[] = $produit;
            $produit->addProd($this);
        }

        return $this;
    }

    public function removeProduit(Produit $produit): self
    {
        if ($this->produit->contains($produit)) {
            $this->produit->removeElement($produit);
            $produit->removeProd($this);
        }

        return $this;
    }

}

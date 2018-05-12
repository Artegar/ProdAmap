<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="FK_produit_fam_id", columns={"fam_id"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="produit_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $produitId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prod_nom", type="string", length=100, nullable=true)
     */
    private $prodNom;

    /**
     * @var \Famille
     *
     * @ORM\ManyToOne(targetEntity="Famille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fam_id", referencedColumnName="fam_id")
     * })
     */
    private $fam;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Producteur", inversedBy="produit")
     * @ORM\JoinTable(name="produire",
     *   joinColumns={
     *     @ORM\JoinColumn(name="produit_id", referencedColumnName="produit_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="prod_id", referencedColumnName="prod_id")
     *   }
     * )
     */
    private $prod;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prod = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getProduitId(): ?int
    {
        return $this->produitId;
    }

    public function getProdNom(): ?string
    {
        return $this->prodNom;
    }

    public function setProdNom(?string $prodNom): self
    {
        $this->prodNom = $prodNom;

        return $this;
    }

    public function getFam(): ?Famille
    {
        return $this->fam;
    }

    public function setFam(?Famille $fam): self
    {
        $this->fam = $fam;

        return $this;
    }

    /**
     * @return Collection|Producteur[]
     */
    public function getProd(): Collection
    {
        return $this->prod;
    }

    public function addProd(Producteur $prod): self
    {
        if (!$this->prod->contains($prod)) {
            $this->prod[] = $prod;
        }

        return $this;
    }

    public function removeProd(Producteur $prod): self
    {
        if ($this->prod->contains($prod)) {
            $this->prod->removeElement($prod);
        }

        return $this;
    }

}

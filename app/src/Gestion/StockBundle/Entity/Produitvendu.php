<?php

namespace Gestion\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produitvendu
 *
 * @ORM\Table(name="produitvendu", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_6A830A89C29D63C1", columns={"idproduit_id"})})
 * @ORM\Entity
 */
class Produitvendu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="string", length=60, nullable=false)
     */
    private $quantite;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproduit_id", referencedColumnName="id")
     * })
     */
    private $idproduit;



    /**
     * Set quantite
     *
     * @param string $quantite
     *
     * @return Produitvendu
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idproduit
     *
     * @param \Gestion\StockBundle\Entity\Produit $idproduit
     *
     * @return Produitvendu
     */
    public function setIdproduit(\Gestion\StockBundle\Entity\Produit $idproduit = null)
    {
        $this->idproduit = $idproduit;

        return $this;
    }

    /**
     * Get idproduit
     *
     * @return \Gestion\StockBundle\Entity\Produit
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }
}

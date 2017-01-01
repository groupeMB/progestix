<?php

namespace Pharmacie\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Keyword
 *
 * @ORM\Table(name="keyword")
 * @ORM\Entity(repositoryClass="Pharmacie\StockBundle\Repository\KeywordRepository")
 */
class Keyword
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;

    /**
     * @var Pharmacie\StockBundle\Entity\Stock
     *
     * @ORM\ManyToOne(targetEntity="Pharmacie\StockBundle\Entity\Stock", inversedBy="keywords", cascade={"remove", "persist", "refresh"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produit", referencedColumnName="id")
     * })
     */
    private $produit;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     *
     * @return Keyword
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set produit
     *
     * @param \Pharmacie\StockBundle\Entity\Stock $produit
     *
     * @return Keyword
     */
    public function setProduit(\Pharmacie\StockBundle\Entity\Stock $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Pharmacie\StockBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }

    public function __toString(){
        return $this->getLibelle();
    }
}

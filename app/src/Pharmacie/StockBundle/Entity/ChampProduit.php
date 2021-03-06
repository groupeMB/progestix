<?php

namespace Pharmacie\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChampProduit
 *
 * @ORM\Table(name="champ_produit")
 * @ORM\Entity(repositoryClass="Pharmacie\StockBundle\Repository\ChampProduitRepository")
 */
class ChampProduit
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
     * @ORM\Column(name="typeChamp", type="string", length=255)
     */
    private $typeChamp = "string";

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;

    /**
     * @var Pharmacie\StockBundle\Entity\Stock
     *
     * @ORM\ManyToOne(targetEntity="Pharmacie\StockBundle\Entity\Stock", inversedBy="champs", cascade={"remove", "persist", "refresh"})
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
     * Set typeChamp
     *
     * @param string $typeChamp
     *
     * @return ChampProduit
     */
    public function setTypeChamp($typeChamp)
    {
        $this->typeChamp = $typeChamp;

        return $this;
    }

    /**
     * Get typeChamp
     *
     * @return string
     */
    public function getTypeChamp()
    {
        return $this->typeChamp;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     *
     * @return ChampProduit
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
     * @return ChampProduit
     */
    public function setProduit(\Pharmacie\StockBundle\Entity\Stock $produit = null)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Pharmacie\StockBundle\Entity\Stock
     */
    public function getProduit()
    {
        return $this->produit;
    }

    public function __toString(){
        return $this->getLibelle();
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return ChampProduit
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}

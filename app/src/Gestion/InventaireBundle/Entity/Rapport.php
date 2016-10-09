<?php

namespace Gestion\InventaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapport
 *
 * @ORM\Table(name="rapport")
 * @ORM\Entity(repositoryClass="Gestion\InventaireBundle\Repository\RapportRepository")
 */
class Rapport
{


    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Gestion\InventaireBundle\Entity\Inventaire")
     */
    private $inventaire;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Gestion\StockBundle\Entity\Produit")
     */
    private $produit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantiteDepart", type="integer")
     */
    private $quantiteDepart;

    /**
     * @var int
     *
     * @ORM\Column(name="quantiteRestante", type="integer")
     */
    private $quantiteRestante;

    /**
     * @var int
     *
     * @ORM\Column(name="coutGlobal", type="integer")
     */
    private $coutGlobal;

    /**
     * @var string
     *
     * @ORM\Column(name="src", type="string", length=255, unique=true)
     */
    private $src;



    /**
     * Set quantiteDepart
     *
     * @param integer $quantiteDepart
     *
     * @return Rapport
     */
    public function setQuantiteDepart($quantiteDepart)
    {
        $this->quantiteDepart = $quantiteDepart;

        return $this;
    }

    /**
     * Get quantiteDepart
     *
     * @return int
     */
    public function getQuantiteDepart()
    {
        return $this->quantiteDepart;
    }

    /**
     * Set quantiteRestante
     *
     * @param integer $quantiteRestante
     *
     * @return Rapport
     */
    public function setQuantiteRestante($quantiteRestante)
    {
        $this->quantiteRestante = $quantiteRestante;

        return $this;
    }

    /**
     * Get quantiteRestante
     *
     * @return int
     */
    public function getQuantiteRestante()
    {
        return $this->quantiteRestante;
    }

    /**
     * Set coutGlobal
     *
     * @param integer $coutGlobal
     *
     * @return Rapport
     */
    public function setCoutGlobal($coutGlobal)
    {
        $this->coutGlobal = $coutGlobal;

        return $this;
    }

    /**
     * Get coutGlobal
     *
     * @return int
     */
    public function getCoutGlobal()
    {
        return $this->coutGlobal;
    }

    /**
     * Set src
     *
     * @param string $src
     *
     * @return Rapport
     */
    public function setSrc($src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get src
     *
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

 

    /**
     * Set inventaire
     *
     * @param \Gestion\InventaireBundle\Entity\Inventaire $inventaire
     *
     * @return Rapport
     */
    public function setInventaire(\Gestion\InventaireBundle\Entity\Inventaire $inventaire)
    {
        $this->inventaire = $inventaire;

        return $this;
    }

    /**
     * Get inventaire
     *
     * @return \Gestion\InventaireBundle\Entity\Inventaire
     */
    public function getInventaire()
    {
        return $this->inventaire;
    }

    /**
     * Set produit
     *
     * @param \Gestion\StockBundle\Entity\Produit $produit
     *
     * @return Rapport
     */
    public function setProduit(\Gestion\StockBundle\Entity\Produit $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \Gestion\StockBundle\Entity\Produit
     */
    public function getProduit()
    {
        return $this->produit;
    }
}

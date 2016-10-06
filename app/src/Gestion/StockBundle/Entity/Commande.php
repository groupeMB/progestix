<?php

namespace Gestion\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="IDX_6EEAA67DC29D63C1", columns={"idproduit_id"}), @ORM\Index(name="IDX_6EEAA67DB6418165", columns={"idpharmacien_id"}), @ORM\Index(name="IDX_6EEAA67D7674E434", columns={"idfournisseur_id"})})
 * @ORM\Entity
 */
class Commande
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
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Fournisseur
     *
     * @ORM\ManyToOne(targetEntity="Fournisseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idfournisseur_id", referencedColumnName="id")
     * })
     */
    private $idfournisseur;

    /**
     * @var \Pharmacien
     *
     * @ORM\ManyToOne(targetEntity="Pharmacien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpharmacien_id", referencedColumnName="id")
     * })
     */
    private $idpharmacien;

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
     * @param integer $quantite
     *
     * @return Commande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Commande
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
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
     * @return Commande
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

    /**
     * Set idpharmacien
     *
     * @param \Gestion\StockBundle\Entity\Pharmacien $idpharmacien
     *
     * @return Commande
     */
    public function setIdpharmacien(\Gestion\StockBundle\Entity\Pharmacien $idpharmacien = null)
    {
        $this->idpharmacien = $idpharmacien;

        return $this;
    }

    /**
     * Get idpharmacien
     *
     * @return \Gestion\StockBundle\Entity\Pharmacien
     */
    public function getIdpharmacien()
    {
        return $this->idpharmacien;
    }

    /**
     * Set idfournisseur
     *
     * @param \Gestion\StockBundle\Entity\Fournisseur $idfournisseur
     *
     * @return Commande
     */
    public function setIdfournisseur(\Gestion\StockBundle\Entity\Fournisseur $idfournisseur = null)
    {
        $this->idfournisseur = $idfournisseur;

        return $this;
    }

    /**
     * Get idfournisseur
     *
     * @return \Gestion\StockBundle\Entity\Fournisseur
     */
    public function getIdfournisseur()
    {
        return $this->idfournisseur;
    }
}

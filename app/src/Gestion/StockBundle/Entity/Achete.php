<?php

namespace Gestion\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achete
 *
 * @ORM\Table(name="achete", indexes={@ORM\Index(name="IDX_6AFD8FC3C29D63C1", columns={"idproduit_id"}), @ORM\Index(name="IDX_6AFD8FC367F0C0D4", columns={"idclient_id"})})
 * @ORM\Entity
 */
class Achete
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure", type="integer", nullable=false)
     */
    private $heure;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idclient_id", referencedColumnName="id")
     * })
     */
    private $idclient;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Achete
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
     * Set heure
     *
     * @param integer $heure
     *
     * @return Achete
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return integer
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set montant
     *
     * @param string $montant
     *
     * @return Achete
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
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
     * @return Achete
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
     * Set idclient
     *
     * @param \Gestion\StockBundle\Entity\Client $idclient
     *
     * @return Achete
     */
    public function setIdclient(\Gestion\StockBundle\Entity\Client $idclient = null)
    {
        $this->idclient = $idclient;

        return $this;
    }

    /**
     * Get idclient
     *
     * @return \Gestion\StockBundle\Entity\Client
     */
    public function getIdclient()
    {
        return $this->idclient;
    }
}

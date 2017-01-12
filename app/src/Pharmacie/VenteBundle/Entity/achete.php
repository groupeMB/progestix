<?php

namespace Pharmacie\VenteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * achete
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class achete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="decimal")
     */
    private $montant;


    /**
     * @ORM\ManyToOne(targetEntity="Pharmacie\StockBundle\Entity\Produit")
     */
    private $idproduit;


    /**
     * @ORM\ManyToOne(targetEntity="Pharmacie\VenteBundle\Entity\client")
     */
    private $idclient;

    /**
     * @return mixed
     */
    public function getIdproduit()
    {
        return $this->idproduit;
    }

    /**
     * @param mixed $idproduit
     */
    public function setIdproduit($idproduit)
    {
        $this->idproduit = $idproduit;
    }

    /**
     * @return mixed
     */
    public function getIdclient()
    {
        return $this->idclient;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $idclient
     */
    public function setIdclient($idclient)
    {
        $this->idclient = $idclient;
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
     * Set date
     *
     * @param \DateTime $date
     * @return achete
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
     * Set montant
     *
     * @param float $montant
     * @return achete
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }
}

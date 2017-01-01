<?php

namespace Pharmacie\VenteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vente
 *
 * @ORM\Table(name="vente")
 * @ORM\Entity(repositoryClass="Pharmacie\VenteBundle\Repository\VenteRepository")
 */
class Vente
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
     * @var int
     *
     * @ORM\Column(name="montant", type="integer")
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="agent", type="string", length=255)
     */
    private $agent;

    /**
     * @var datetime
     *
     * @ORM\Column(name="dateVente", type="datetime")
     */
    private $dateVente;


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
     * Set montant
     *
     * @param integer $montant
     *
     * @return Vente
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return int
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set agent
     *
     * @param string $agent
     *
     * @return Vente
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return string
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set dateVente
     *
     * @param string $dateVente
     *
     * @return Vente
     */
    public function setDateVente($dateVente)
    {
        $this->dateVente = $dateVente;

        return $this;
    }

    /**
     * Get dateVente
     *
     * @return string
     */
    public function getDateVente()
    {
        return $this->dateVente;
    }

    public function __toString()

    {
        return $this->getAgent();
    }
}

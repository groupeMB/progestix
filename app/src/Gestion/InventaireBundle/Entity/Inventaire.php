<?php

namespace Gestion\InventaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventaire
 *
 * @ORM\Table(name="inventaire")
 * @ORM\Entity(repositoryClass="Gestion\InventaireBundle\Repository\InventaireRepository")
 */
class Inventaire
{

    public function __construct()
    {
        $this->dateInventaire = new \Datetime;
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInventaire", type="datetime")
     */
    private $dateInventaire;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \Date
     *
     * @ORM\Column(name="dateDateFin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="rapport", type="string", length=255)
     */
    private $rapport;

    /**
     * @ORM\ManyToOne(targetEntity="Gestion\InventaireBundle\Entity\TypeInventaire", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tyep_inventaire_id", referencedColumnName="id")
     * } )
     *
     */
    private $typeInventaire;


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
     * Set dateInventaire
     *
     * @param \DateTime $dateInventaire
     *
     * @return Inventaire
     */
    public function setDateInventaire($dateInventaire)
    {
        $this->dateInventaire = $dateInventaire;

        return $this;
    }

    /**
     * Get dateInventaire
     *
     * @return \DateTime
     */
    public function getDateInventaire()
    {
        return $this->dateInventaire;
    }


    /**
     * Set typeInventaire
     *
     * @param \Gestion\InventaireBundle\Entity\TypeInventaire $typeInventaire
     *
     * @return Inventaire
     */
    public function setTypeInventaire(\Gestion\InventaireBundle\Entity\TypeInventaire $typeInventaire = null)
    {
        $this->typeInventaire = $typeInventaire;

        return $this;
    }

    /**
     * Get typeInventaire
     *
     * @return \Gestion\InventaireBundle\Entity\TypeInventaire
     */
    public function getTypeInventaire()
    {
        return $this->typeInventaire;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Inventaire
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \Date
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \Date $dateFin
     *
     * @return Inventaire
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set rapport
     *
     * @param string $rapport
     *
     * @return Inventaire
     */
    public function setRapport($rapport)
    {
        $this->rapport = $rapport;

        return $this;
    }

    /**
     * Get rapport
     *
     * @return string
     */
    public function getRapport()
    {
        return $this->rapport;
    }
}
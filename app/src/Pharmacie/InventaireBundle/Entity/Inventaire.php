<?php

namespace Pharmacie\InventaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventaire
 *
 * @ORM\Table(name="inventaire")
 * @ORM\Entity(repositoryClass="Pharmacie\InventaireBundle\Repository\InventaireRepository")
 */
class Inventaire
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateInventaire", type="datetimetz")
     */
    private $dateInventaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;
    
    /**
     * @var string
     *
     * @ORM\Column(name="rapport", type="string", length=255)
     */
    private $rapport;
	
    /**
     * @ORM\ManyToOne(targetEntity="Pharmacie\InventaireBundle\Entity\ModeleInventaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $modele;

    public function __construct(){
    	$this->dateInventaire = new \DateTime();
    }
    
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Inventaire
     */
    public function setDateInventaire($date)
    {
        $this->dateInventaire = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDateInventaire()
    {
        return $this->dateInventaire;
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
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
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

    /**
     * Set modele
     *
     * @param \Pharmacie\InventaireBundle\Entity\ModeleInventaire $modele
     *
     * @return Inventaire
     */
    public function setModele(\Pharmacie\InventaireBundle\Entity\ModeleInventaire $modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return \Pharmacie\InventaireBundle\Entity\ModeleInventaire
     */
    public function getModele()
    {
        return $this->modele;
    }
}

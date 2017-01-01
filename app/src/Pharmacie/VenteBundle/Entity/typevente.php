<?php

namespace Gestion\VenteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * typevente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class typevente
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
     * @var string
     *
     * @ORM\Column(name="typevente", type="string", length=60)
     */
    private $typevente;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage", type="string", length=60)
     */
    private $pourcentage;


    /**
     * @ORM\OneToOne(targetEntity="achete")
     */
    private $idachete;

    /**
     * @return mixed
     */
    public function getIdachete()
    {
        return $this->idachete;
    }

    /**
     * @param mixed $idachete
     */
    public function setIdachete($idachete)
    {
        $this->idachete = $idachete;
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
     * Set typevente
     *
     * @param string $typevente
     * @return typevente
     */
    public function setTypevente($typevente)
    {
        $this->typevente = $typevente;
    
        return $this;
    }

    /**
     * Get typevente
     *
     * @return string 
     */
    public function getTypevente()
    {
        return $this->typevente;
    }

    /**
     * Set pourcentage
     *
     * @param string $pourcentage
     * @return typevente
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    
        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return string 
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }
}

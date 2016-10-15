<?php
namespace Pharmacie\VenteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produitVendu
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class produitVendu
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
     * @ORM\Column(name="quantite", type="string", length=60)
     */
    private $quantite;

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
     * @ORM\OneToOne(targetEntity="Pharmacie\StockBundle\Entity\Produit")
     */
    private $idproduit;

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
     * Set quantite
     *
     * @param string $quantite
     * @return produitVendu
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return string 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}

<?php
namespace Pharmacie\VenteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produitVendu
 *
 *@ORM\Entity(repositoryClass="Pharmacie\StockBundle\Repository\ProduitRepository")
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
     * @var string
     * @ORM\Column(name="nomproduit", type="string")
     */
    private $nomproduit;

    /**
     * @var integer
     * @ORM\Column(name="prixunitaire", type="integer")
     */
    private $prixUnitaire;

    /**
     * @var integer
     * @ORM\Column(name="idvente", type="integer")
     */
    private $idvente;


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
     *
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

    /**
     * Set nomproduit
     *
     * @param string $nomproduit
     *
     * @return produitVendu
     */
    public function setNomproduit($nomproduit)
    {
        $this->nomproduit = $nomproduit;

        return $this;
    }

    /**
     * Get nomproduit
     *
     * @return string
     */
    public function getNomproduit()
    {
        return $this->nomproduit;
    }

    /**
     * Set prixUnitaire
     *
     * @param integer $prixUnitaire
     *
     * @return produitVendu
     */
    public function setPrixUnitaire($prixUnitaire)
    {
        $this->prixUnitaire = $prixUnitaire;

        return $this;
    }

    /**
     * Get prixUnitaire
     *
     * @return integer
     */
    public function getPrixUnitaire()
    {
        return $this->prixUnitaire;
    }

    /**
     * Set idvente
     *
     * @param integer $idvente
     *
     * @return produitVendu
     */
    public function setIdvente($idvente)
    {
        $this->idvente = $idvente;

        return $this;
    }

    /**
     * Get idvente
     *
     * @return integer
     */
    public function getIdvente()
    {
        return $this->idvente;
    }
}

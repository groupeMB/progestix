<?php

namespace Pharmacie\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Entity(repositoryClass="Pharmacie\StockBundle\Repository\ProduitRepository")
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="IDX_E618D5BBBCF5E72D", columns={"categorie_id"})})
 * 
 * 
 */
class Produit
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="codeBarre", type="string", length=40, nullable=false)
     */
    private $codebarre;

    /**
     * @var string
     *
     * @ORM\Column(name="prixUnitaire", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $prixunitaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePeremption", type="date", nullable=false)
     */
    private $dateperemption;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=50, nullable=false)
     */
    private $reference;

    /**
     * @var Gestion\StockBundle\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="Gestion\StockBundle\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     * })
     */
    private $categorie;


    /**  
    * @var integer
    */
    public $cate;

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Produit
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set codebarre
     *
     * @param string $codebarre
     *
     * @return Produit
     */
    public function setCodebarre($codebarre)
    {
        $this->codebarre = $codebarre;

        return $this;
    }

    /**
     * Get codebarre
     *
     * @return string
     */
    public function getCodebarre()
    {
        return $this->codebarre;
    }

    /**
     * Set prixunitaire
     *
     * @param string $prixunitaire
     *
     * @return Produit
     */
    public function setPrixunitaire($prixunitaire)
    {
        $this->prixunitaire = $prixunitaire;

        return $this;
    }

    /**
     * Get prixunitaire
     *
     * @return string
     */
    public function getPrixunitaire()
    {
        return $this->prixunitaire;
    }

    /**
     * Set dateperemption
     *
     * @param \DateTime $dateperemption
     *
     * @return Produit
     */
    public function setDateperemption($dateperemption)
    {
        $this->dateperemption = $dateperemption;

        return $this;
    }

    /**
     * Get dateperemption
     *
     * @return \DateTime
     */
    public function getDateperemption()
    {
        return $this->dateperemption;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Produit
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
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
     * Set categorie
     *
     * @param \Gestion\StockBundle\Entity\Categorie $categorie
     *
     * @return Produit
     */
    public function setCategorie(\Pharmacie\StockBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Gestion\StockBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    public function __toString()
    
    {
        return $this->getLibelle();
    }


    public function getContent(){
        return array(
                "id" => $this->id,
                "libelle" => $this->libelle,
                "reference" => $this->reference,
                "codebarre" => $this->codebarre,
                "prixunitaire" => $this->prixunitaire,
                "dateperemption" => $this->dateperemption,
                "categorie" => $this->categorie->getLibelle()
            );
    }

    
}

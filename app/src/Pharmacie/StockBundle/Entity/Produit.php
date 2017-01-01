<?php

namespace Pharmacie\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Entity(repositoryClass="Pharmacie\StockBundle\Repository\ProduitRepository")
 * @ORM\Table(name="produit")
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
     * @var Pharmacie\StockBundle\Entity\Stock
     *
     * @ORM\ManyToOne(targetEntity="Pharmacie\StockBundle\Entity\Stock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stock", referencedColumnName="id")
     * })
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="codeBarre", type="string", length=40, nullable=false)
     */
    private $codebarre;

    /**
     * @var decimal
     *
     * @ORM\Column(name="prixUnitaire", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prixunitaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePeremption", type="date", nullable=false)
     */
    private $dateperemption;




    public function __toString(){
        return $this->getLibelle();
    }


    public function getContent(){
        return array(
                "id" => $this->id,
                "libelle" => $this->libelle,
                "codebarre" => $this->codebarre,
                "prixunitaire" => $this->prixunitaire,
                "dateperemption" => $this->dateperemption
            );
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
     * @param \Date $dateperemption
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
     * @return \Date
     */
    public function getDateperemption()
    {
        return $this->dateperemption;
    }

    

    /**
     * Set libelle
     *
     * @param \Pharmacie\StockBundle\Entity\Stock $libelle
     *
     * @return Produit
     */
    public function setLibelle(\Pharmacie\StockBundle\Entity\Stock $libelle = null)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return \Pharmacie\StockBundle\Entity\Stock
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
}

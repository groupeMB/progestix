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
     * @var \Stock
     *
     * @ORM\ManyToOne(targetEntity="Stock")
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
     * @ORM\Column(name="champ1", type="string", length=255, nullable=true)
     */
    private $champ1;

        /**
     * @var string
     *
     * @ORM\Column(name="champ2", type="string", length=255, nullable=true)
     */
    private $champ2;

        /**
     * @var string
     *
     * @ORM\Column(name="champ3", type="string", length=255, nullable=true)
     */
    private $champ3;

        /**
     * @var string
     *
     * @ORM\Column(name="champ4", type="string", length=255, nullable=true)
     */
    private $champ4;

        /**
     * @var string
     *
     * @ORM\Column(name="champ5", type="string", length=255, nullable=true)
     */
    private $champ5;




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
     * Set champ1
     *
     * @param string $champ1
     *
     * @return Produit
     */
    public function setChamp1($champ1)
    {
        $this->champ1 = $champ1;

        return $this;
    }

    /**
     * Get champ1
     *
     * @return string
     */
    public function getChamp1()
    {
        return $this->champ1;
    }

    /**
     * Set champ2
     *
     * @param string $champ2
     *
     * @return Produit
     */
    public function setChamp2($champ2)
    {
        $this->champ2 = $champ2;

        return $this;
    }

    /**
     * Get champ2
     *
     * @return string
     */
    public function getChamp2()
    {
        return $this->champ2;
    }

    /**
     * Set champ3
     *
     * @param string $champ3
     *
     * @return Produit
     */
    public function setChamp3($champ3)
    {
        $this->champ3 = $champ3;

        return $this;
    }

    /**
     * Get champ3
     *
     * @return string
     */
    public function getChamp3()
    {
        return $this->champ3;
    }

    /**
     * Set champ4
     *
     * @param string $champ4
     *
     * @return Produit
     */
    public function setChamp4($champ4)
    {
        $this->champ4 = $champ4;

        return $this;
    }

    /**
     * Get champ4
     *
     * @return string
     */
    public function getChamp4()
    {
        return $this->champ4;
    }

    /**
     * Set champ5
     *
     * @param string $champ5
     *
     * @return Produit
     */
    public function setChamp5($champ5)
    {
        $this->champ5 = $champ5;

        return $this;
    }

    /**
     * Get champ5
     *
     * @return string
     */
    public function getChamp5()
    {
        return $this->champ5;
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

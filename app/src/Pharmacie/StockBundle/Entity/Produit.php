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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;



    /**
     * @var string
     *
     * @ORM\Column(name="posologie", type="string", length=255, nullable=false)
     */
    private $posologie;

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



    /**
     * @var Pharmacie\StockBundle\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="Pharmacie\StockBundle\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     * })
     */
    private $categorie;

    /**
    *
    * @var Pharmacie\StockBundle\Entity\Keyword
    * @ORM\OneToMany(targetEntity="Pharmacie\StockBundle\Entity\Keyword", mappedBy="produit", cascade={"remove", "persist", "refresh"})
    * 
    */
    private $keywords;

    /**
     * @var Pharmacie\StockBundle\Entity\Image
     *
     * @ORM\ManyToOne(targetEntity="Pharmacie\StockBundle\Entity\Image")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image", referencedColumnName="id")
     * })
     */
    private $image;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->keywords = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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


    /**
     * Set description
     *
     * @param string $description
     *
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set posologie
     *
     * @param string $posologie
     *
     * @return Produit
     */
    public function setPosologie($posologie)
    {
        $this->posologie = $posologie;

        return $this;
    }

    /**
     * Get posologie
     *
     * @return string
     */
    public function getPosologie()
    {
        return $this->posologie;
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
     * Add keyword
     *
     * @param \Pharmacie\StockBundle\Entity\Keyword $keyword
     *
     * @return Produit
     */
    public function addKeyword(\Pharmacie\StockBundle\Entity\Keyword $keyword)
    {
        $this->keywords[] = $keyword;

        return $this;
    }

    /**
     * Remove keyword
     *
     * @param \Pharmacie\StockBundle\Entity\Keyword $keyword
     */
    public function removeKeyword(\Pharmacie\StockBundle\Entity\Keyword $keyword)
    {
        $this->keywords->removeElement($keyword);
    }

    /**
     * Get keywords
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set image
     *
     * @param \Pharmacie\StockBundle\Entity\Image $image
     *
     * @return Produit
     */
    public function setImage(\Pharmacie\StockBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Pharmacie\StockBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}

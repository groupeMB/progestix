<?php


namespace Gestion\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Typevente
 *
 * @ORM\Table(name="typevente", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_2A09F5FF4A44E93", columns={"idachete_id"})})
 * @ORM\Entity
 */
class Typevente
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
     * @ORM\Column(name="typevente", type="string", length=60, nullable=false)
     */
    private $typevente;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage", type="string", length=60, nullable=false)
     */
    private $pourcentage;

    /**
     * @var \Achete
     *
     * @ORM\ManyToOne(targetEntity="Achete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idachete_id", referencedColumnName="id")
     * })
     */
    private $idachete;



    /**
     * Set typevente
     *
     * @param string $typevente
     *
     * @return Typevente
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
     *
     * @return Typevente
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
     * Set idachete
     *
     * @param \Gestion\StockBundle\Entity\Achete $idachete
     *
     * @return Typevente
     */
    public function setIdachete(\Gestion\StockBundle\Entity\Achete $idachete = null)
    {
        $this->idachete = $idachete;

        return $this;
    }

    /**
     * Get idachete
     *
     * @return \Gestion\StockBundle\Entity\Achete
     */
    public function getIdachete()
    {
        return $this->idachete;
    }
}

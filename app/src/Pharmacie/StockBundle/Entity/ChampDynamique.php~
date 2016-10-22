<?php

namespace Pharmacie\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChampDynamique
 *
 * @ORM\Table(name="champ_dynamique")
 * @ORM\Entity(repositoryClass="Pharmacie\StockBundle\Repository\ChampDynamiqueRepository")
 */
class ChampDynamique
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
     * @var string
     *
     * @ORM\Column(name="typeChamp", type="string", length=255)
     */
    private $typeChamp;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur", type="string", length=255)
     */
    private $valeur;


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
     * Set typeChamp
     *
     * @param string $typeChamp
     *
     * @return ChampDynamique
     */
    public function setTypeChamp($typeChamp)
    {
        $this->typeChamp = $typeChamp;

        return $this;
    }

    /**
     * Get typeChamp
     *
     * @return string
     */
    public function getTypeChamp()
    {
        return $this->typeChamp;
    }

    /**
     * Set valeur
     *
     * @param string $valeur
     *
     * @return ChampDynamique
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return string
     */
    public function getValeur()
    {
        return $this->valeur;
    }
}

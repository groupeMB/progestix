<?php

namespace Pharmacie\VenteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity(repositoryClass="Pharmacie\VenteBundle\Repository\SessionRepository")
 */
class Session
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
     * @ORM\Column(name="dateouverture", type="datetime", nullable=true)
     */
    private $dateouverture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefermeture", type="datetime", nullable=true)
     */
    private $datefermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="agent", type="string", length=255, nullable=true)
     */
    private $agent;


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
     * Set dateouverture
     *
     * @param \DateTime $dateouverture
     *
     * @return Session
     */
    public function setDateouverture($dateouverture)
    {
        $this->dateouverture = $dateouverture;

        return $this;
    }

    /**
     * Get dateouverture
     *
     * @return \DateTime
     */
    public function getDateouverture()
    {
        return $this->dateouverture;
    }

    /**
     * Set datefermeture
     *
     * @param \DateTime $datefermeture
     *
     * @return Session
     */
    public function setDatefermeture($datefermeture)
    {
        $this->datefermeture = $datefermeture;

        return $this;
    }

    /**
     * Get datefermeture
     *
     * @return \DateTime
     */
    public function getDatefermeture()
    {
        return $this->datefermeture;
    }

    /**
     * Set agent
     *
     * @param string $agent
     *
     * @return Session
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return string
     */
    public function getAgent()
    {
        return $this->agent;
    }
}


<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * GatbPart2SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart2SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart2")
     */
    protected $gatbPart2;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbSP")
     */
    protected $gatbSP;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="datetime", nullable=true)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinish", type="datetime", nullable=true)
     */
    private $dateFinish;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberCorrect", type="integer", nullable=true)
     */
    private $numberCorrect;

    /**
     * @var integer
     *
     * @ORM\Column(name="numberIncorrect", type="integer", nullable=true)
     */
    private $numberIncorrect;
    
    /**
     * @ORM\OneToMany(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart2DetailSpTemp", mappedBy="object", cascade={"all"})
     */
    private $gatbPart2DetailSpTemps;
    
    public function __construct() {
        $this->gatbPart2DetailSpTemps = new ArrayCollection();
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
     * Set gatbPart2
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart2 $gatbPart2
     */
    public function setGatbPart2(\Jaxxes\TestGatbBundle\Entity\GatbPart2 $gatbPart2)
    {
        $this->gatbPart2 = $gatbPart2;
    }

    /**
     * Get gatbPart2
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart2
     */
    public function getGatbPart2()
    {
        return $this->gatbPart2;
    }
    
    /**
     * Set gatbSP
     *
     * @param Jaxxes\TestGatbSPBundle\Entity\GatbSP $gatbSP
     */
    public function setGatbSP(\Jaxxes\TestGatbSPBundle\Entity\GatbSP $gatbSP)
    {
        $this->gatbSP = $gatbSP;
    }

    /**
     * Get gatbSP
     *
     * @return Jaxxes\TestGatbSPBundle\Entity\GatbSP
     */
    public function getGatbSP()
    {
        return $this->gatbSP;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return GatbPart2SP
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateFinish
     *
     * @param \DateTime $dateFinish
     * @return GatbPart2SP
     */
    public function setDateFinish($dateFinish)
    {
        $this->dateFinish = $dateFinish;

        return $this;
    }

    /**
     * Get dateFinish
     *
     * @return \DateTime 
     */
    public function getDateFinish()
    {
        return $this->dateFinish;
    }

    /**
     * Set numberCorrect
     *
     * @param integer $numberCorrect
     * @return GatbPart2SP
     */
    public function setNumberCorrect($numberCorrect)
    {
        $this->numberCorrect = $numberCorrect;

        return $this;
    }

    /**
     * Get numberCorrect
     *
     * @return integer 
     */
    public function getNumberCorrect()
    {
        return $this->numberCorrect;
    }

    /**
     * Set numberIncorrect
     *
     * @param integer $numberIncorrect
     * @return GatbPart2SP
     */
    public function setNumberIncorrect($numberIncorrect)
    {
        $this->numberIncorrect = $numberIncorrect;

        return $this;
    }

    /**
     * Get numberIncorrect
     *
     * @return integer 
     */
    public function getNumberIncorrect()
    {
        return $this->numberIncorrect;
    }
    
    
    public function getGatbPart2DetailSpTemps() 
    {
        return $this->gatbPart2DetailSpTemps;
    }
    
    /**
     * Add gatbPart2DetailSpTemps
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart2DetailSpTemp $gatbPart2DetailSpTemps
     * @return Project
     */
    public function addGatbPart1DetailSP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart2DetailSpTemp $gatbPart2DetailSpTemps)
    {
        $this->gatbPart2DetailSpTemps[] = $gatbPart2DetailSpTemps;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart2DetailSpTemp $gatbPart2DetailSpTemps
     */
    public function removeSource(\Jaxxes\TestGatbSPBundle\Entity\GatbPart2DetailSpTemp $gatbPart2DetailSpTemps)
    {
        $this->gatbPart2DetailSpTemps->removeElement($gatbPart2DetailSpTemps);
    }
}

<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * GatbPart1SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart1SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart1")
     */
    protected $gatbPart1;
    
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
     * @ORM\OneToMany(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart1DetailSP", mappedBy="gatbPart1SP", cascade={"all"})
     */
    private $gatbPart1DetailSPs;
    
    
    public function __toString()
    {
        return 'valor';
    }
    
    public function __construct() {
        $this->gatbPart1DetailSPs = new ArrayCollection();
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
     * Set gatbPart1
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart1 $gatbPart1
     */
    public function setGatbPart1(\Jaxxes\TestGatbBundle\Entity\GatbPart1 $gatbPart1)
    {
        $this->gatbPart1 = $gatbPart1;
    }

    /**
     * Get gatbPart1
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart1
     */
    public function getGatbPart1()
    {
        return $this->gatbPart1;
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
     * @return GatbPart1SP
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
     * @return GatbPart1SP
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
     * @return GatbPart1SP
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
     * @return GatbPart1SP
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
    
    public function setGatbPart1DetailSPs() 
    {
        
        return $this->gatbPart1DetailSPs = new ArrayCollection();
    }
    
    public function getGatbPart1DetailSPs() 
    {
        return $this->gatbPart1DetailSPs;
    }
    
    /**
     * Add gatbPart1DetailSPs
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart1DetailSP $gatbPart1DetailSPs
     * @return Project
     */
    public function addGatbPart1DetailSP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart1DetailSP $gatbPart1DetailSPs)
    {
        $this->gatbPart1DetailSPs[] = $gatbPart1DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart1DetailSP $gatbPart1DetailSPs
     */
    public function removeSource(\Jaxxes\TestGatbSPBundle\Entity\GatbPart1DetailSP $gatbPart1DetailSPs)
    {
        $this->gatbPart1DetailSPs->removeElement($gatbPart1DetailSPs);
    }
}

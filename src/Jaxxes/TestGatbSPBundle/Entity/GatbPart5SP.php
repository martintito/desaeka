<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * GatbPart5SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart5SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart5")
     */
    protected $gatbPart5;
    
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
     * @ORM\OneToMany(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart5DetailSP", mappedBy="gatbPart5SP", cascade={"all"})
     */
    private $gatbPart5DetailSPs;
    
    
    public function __toString()
    {
        return 'valor';
    }
    
    public function __construct() {
        $this->gatbPart5DetailSPs = new ArrayCollection();
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
     * Set gatbPart5
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart5 $gatbPart5
     */
    public function setGatbPart5(\Jaxxes\TestGatbBundle\Entity\GatbPart5 $gatbPart5)
    {
        $this->gatbPart5 = $gatbPart5;
    }

    /**
     * Get gatbPart5
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart5
     */
    public function getGatbPart5()
    {
        return $this->gatbPart5;
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
     * @return GatbPart5SP
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
     * @return GatbPart5SP
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
     * @return GatbPart5SP
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
     * @return GatbPart5SP
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
    
    
    public function setGatbPart5DetailSPs() 
    {
        
        return $this->gatbPart5DetailSPs = new ArrayCollection();
    }
    
    public function getGatbPart5DetailSPs() 
    {
        return $this->gatbPart5DetailSPs;
    }
    
    /**
     * Add gatbPart5DetailSPs
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart5DetailSP $gatbPart5DetailSPs
     * @return Project
     */
    public function addGatbPart5DetailSP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart5DetailSP $gatbPart5DetailSPs)
    {
        $this->gatbPart5DetailSPs[] = $gatbPart5DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart5DetailSP $gatbPart5DetailSPs
     */
    public function removeSource(\Jaxxes\TestGatbSPBundle\Entity\GatbPart5DetailSP $gatbPart5DetailSPs)
    {
        $this->gatbPart5DetailSPs->removeElement($gatbPart5DetailSPs);
    }
}

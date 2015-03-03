<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * GatbPart4SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart4SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart4")
     */
    protected $gatbPart4;
    
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
     * @ORM\OneToMany(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart4DetailSP", mappedBy="gatbPart4SP", cascade={"all"})
     */
    private $gatbPart4DetailSPs;
    
    
    public function __toString()
    {
        return 'valor';
    }
    
    public function __construct() {
        $this->gatbPart4DetailSPs = new ArrayCollection();
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
     * Set gatbPart4
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart4 $gatbPart4
     */
    public function setGatbPart4(\Jaxxes\TestGatbBundle\Entity\GatbPart4 $gatbPart4)
    {
        $this->gatbPart4 = $gatbPart4;
    }

    /**
     * Get gatbPart4
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart4
     */
    public function getGatbPart4()
    {
        return $this->gatbPart4;
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
     * @return GatbPart4SP
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
     * @return GatbPart4SP
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
     * @return GatbPart4SP
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
     * @return GatbPart4SP
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
    
    public function setGatbPart4DetailSPs() 
    {
        
        return $this->gatbPart4DetailSPs = new ArrayCollection();
    }
    
    public function getGatbPart4DetailSPs() 
    {
        return $this->gatbPart4DetailSPs;
    }
    
    /**
     * Add gatbPart4DetailSPs
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart4DetailSP $gatbPart4DetailSPs
     * @return Project
     */
    public function addGatbPart4DetailSP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart4DetailSP $gatbPart4DetailSPs)
    {
        $this->gatbPart4DetailSPs[] = $gatbPart4DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart4DetailSP $gatbPart4DetailSPs
     */
    public function removeSource(\Jaxxes\TestGatbSPBundle\Entity\GatbPart4DetailSP $gatbPart4DetailSPs)
    {
        $this->gatbPart4DetailSPs->removeElement($gatbPart4DetailSPs);
    }
}

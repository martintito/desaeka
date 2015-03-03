<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * GatbPart3SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart3SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart3")
     */
    protected $gatbPart3;
    
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
     * @ORM\OneToMany(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart3DetailSP", mappedBy="gatbPart3SP", cascade={"all"})
     */
    private $gatbPart3DetailSPs;
    
    
    public function __toString()
    {
        return 'valor';
    }
    
    public function __construct() {
        $this->gatbPart3DetailSPs = new ArrayCollection();
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
     * Set gatbPart3
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart3 $gatbPart3
     */
    public function setGatbPart3(\Jaxxes\TestGatbBundle\Entity\GatbPart3 $gatbPart3)
    {
        $this->gatbPart3 = $gatbPart3;
    }

    /**
     * Get gatbPart3
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart3
     */
    public function getGatbPart3()
    {
        return $this->gatbPart3;
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
     * @return GatbPart3SP
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
     * @return GatbPart3SP
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
     * @return GatbPart3SP
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
     * @return GatbPart3SP
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
    
    
    public function setGatbPart3DetailSPs() 
    {
        
        return $this->gatbPart3DetailSPs = new ArrayCollection();
    }
    
    public function getGatbPart3DetailSPs() 
    {
        return $this->gatbPart3DetailSPs;
    }
    
    /**
     * Add gatbPart3DetailSPs
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart1DetailSP $gatbPart3DetailSPs
     * @return Project
     */
    public function addGatbPart3DetailSP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart3DetailSP $gatbPart3DetailSPs)
    {
        $this->gatbPart3DetailSPs[] = $gatbPart3DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestGatbSPBundle\Entity\GatbPart3DetailSP $gatbPart3DetailSPs
     */
    public function removeSource(\Jaxxes\TestGatbSPBundle\Entity\GatbPart3DetailSP $gatbPart3DetailSPs)
    {
        $this->gatbPart3DetailSPs->removeElement($gatbPart3DetailSPs);
    }
}

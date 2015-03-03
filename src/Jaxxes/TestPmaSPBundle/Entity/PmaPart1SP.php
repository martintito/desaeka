<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * PmaPart1SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart1SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart1")
     */
    protected $pmaPart1;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaSP")
     */
    protected $pmaSP;

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
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart1DetailSP", mappedBy="pmaPart1SP", cascade={"all"})
     */
    private $pmaPart1DetailSPs;
    
    
    public function __toString()
    {
        return 'valor';
    }
    
    public function __construct() {
        $this->pmaPart1DetailSPs = new ArrayCollection();
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
     * Set pmaPart1
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart1 $pmaPart1
     */
    public function setPmaPart1(\Jaxxes\TestPmaBundle\Entity\PmaPart1 $pmaPart1)
    {
        $this->pmaPart1 = $pmaPart1;
    }

    /**
     * Get pmaPart1
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart1
     */
    public function getPmaPart1()
    {
        return $this->pmaPart1;
    }
    
    /**
     * Set pmaSP
     *
     * @param Jaxxes\TestPmaSPBundle\Entity\PmaSP $pmaSP
     */
    public function setPmaSP(\Jaxxes\TestPmaSPBundle\Entity\PmaSP $pmaSP)
    {
        $this->pmaSP = $pmaSP;
    }

    /**
     * Get pmaSP
     *
     * @return Jaxxes\TestPmaSPBundle\Entity\PmaSP
     */
    public function getPmaSP()
    {
        return $this->pmaSP;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return PmaPart1SP
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
     * @return PmaPart1SP
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
     * @return PmaPart1SP
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
     * @return PmaPart1SP
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
    
    
    public function getPmaPart1DetailSPs() 
    {
        return $this->pmaPart1DetailSPs;
    }
    
    /**
     * Add pmaPart1DetailSPs
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart1DetailSP $pmaPart1DetailSPs
     * @return Project
     */
    public function addPmaPart1DetailSP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart1DetailSP $pmaPart1DetailSPs)
    {
        $this->pmaPart1DetailSPs[] = $pmaPart1DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart1DetailSP $pmaPart1DetailSPs
     */
    public function removeSource(\Jaxxes\TestPmaSPBundle\Entity\PmaPart1DetailSP $pmaPart1DetailSPs)
    {
        $this->pmaPart1DetailSPs->removeElement($pmaPart1DetailSPs);
    }
}

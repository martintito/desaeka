<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * PmaPart2BlockSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart2BlockSP
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
     * @var integer
     *
     * @ORM\Column(name="block", type="integer")
     */
    private $block;

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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart2SP")
     */
    protected $pmaPart2SP;
    
    /**
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP", mappedBy="pmaPart2BlockSP", cascade={"all"})
     */
    private $pmaPart2DetailSPs;
    
    public function __construct() {
        $this->pmaPart2DetailSPs = new ArrayCollection();
    }
    
    public function __toString()
    {
        return 'valor';
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
     * Set block
     *
     * @param integer $block
     * @return PmaPart2BlockSP
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return integer 
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return PmaPart2BlockSP
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
     * @return PmaPart2BlockSP
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
     * @return PmaPart2BlockSP
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
     * @return PmaPart2BlockSP
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
    
    /**
     * Set pmaPart2SP
     *
     * @param Jaxxes\TestPmaSPBundle\Entity\PmaPart2SP $pmaPart2SP
     */
    public function setPmaPart2SP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart2SP $pmaPart2SP)
    {
        $this->pmaPart2SP = $pmaPart2SP;
    }

    /**
     * Get pmaPart2SP
     *
     * @return Jaxxes\TestPmaSPBundle\Entity\PmaPart2SP
     */
    public function getPmaPart2SP()
    {
        return $this->pmaPart2SP;
    }
    
    
    
    public function getPmaPart2DetailSPs() 
    {
        return $this->pmaPart2DetailSPs;
    }
    
    
    
    /**
     * Add pmaPart2DetailSPs
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP $pmaPart2DetailSPs
     * @return Project
     */
    public function addPmaPart2DetailSP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP $pmaPart2DetailSPs)
    {
        $this->pmaPart2DetailSPs[] = $pmaPart2DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP $pmaPart2DetailSPs
     */
    public function removeSource(\Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP $pmaPart2DetailSPs)
    {
        $this->pmaPart2DetailSPs->removeElement($pmaPart2DetailSPs);
    }
}

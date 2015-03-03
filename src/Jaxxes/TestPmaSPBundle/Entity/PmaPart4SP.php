<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * PmaPart4SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart4SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart4")
     */
    protected $pmaPart4;
    
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
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart4DetailSP", mappedBy="pmaPart4SP", cascade={"all"})
     */
    private $pmaPart4DetailSPs;
    
    
    public function __toString()
    {
        return 'valor';
    }
    
    public function __construct() {
        $this->pmaPart4DetailSPs = new ArrayCollection();
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
     * Set pmaPart4
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart4 $pmaPart4
     */
    public function setPmaPart4(\Jaxxes\TestPmaBundle\Entity\PmaPart4 $pmaPart4)
    {
        $this->pmaPart4 = $pmaPart4;
    }

    /**
     * Get pmaPart4
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart4
     */
    public function getPmaPart4()
    {
        return $this->pmaPart4;
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
     * @return PmaPart4SP
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
     * @return PmaPart4SP
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
     * @return PmaPart4SP
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
     * @return PmaPart4SP
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
    
    public function getPmaPart4DetailSPs() 
    {
        return $this->pmaPart4DetailSPs;
    }
    
    /**
     * Add pmaPart4DetailSPs
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart4DetailSP $pmaPart4DetailSPs
     * @return Project
     */
    public function addPmaPart4DetailSP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart4DetailSP $pmaPart4DetailSPs)
    {
        $this->pmaPart4DetailSPs[] = $pmaPart4DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart4DetailSP $pmaPart4DetailSPs
     */
    public function removeSource(\Jaxxes\TestPmaSPBundle\Entity\PmaPart4DetailSP $pmaPart4DetailSPs)
    {
        $this->pmaPart4DetailSPs->removeElement($pmaPart4DetailSPs);
    }
}

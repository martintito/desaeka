<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * PmaPart5SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart5SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart5")
     */
    protected $pmaPart5;
    
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
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart5DetailSP", mappedBy="pmaPart5SP", cascade={"all"})
     */
    private $pmaPart5DetailSPs;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="numberQuestions", type="integer", nullable=true)
     */
    private $numberQuestions;
    
    
    public function __toString()
    {
        return 'valor';
    }
    
    public function __construct() {
        $this->pmaPart5DetailSPs = new ArrayCollection();
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
     * Set pmaPart5
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart5 $pmaPart5
     */
    public function setPmaPart5(\Jaxxes\TestPmaBundle\Entity\PmaPart5 $pmaPart5)
    {
        $this->pmaPart5 = $pmaPart5;
    }

    /**
     * Get pmaPart5
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart5
     */
    public function getPmaPart5()
    {
        return $this->pmaPart5;
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
    
    
    public function getPmaPart5DetailSPs() 
    {
        return $this->pmaPart5DetailSPs;
    }
    
    /**
     * Add pmaPart5DetailSPs
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart5DetailSP $pmaPart5DetailSPs
     * @return Project
     */
    public function addPmaPart5DetailSP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart5DetailSP $pmaPart5DetailSPs)
    {
        $this->pmaPart5DetailSPs[] = $pmaPart5DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart5DetailSP $pmaPart5DetailSPs
     */
    public function removeSource(\Jaxxes\TestPmaSPBundle\Entity\PmaPart5DetailSP $pmaPart5DetailSPs)
    {
        $this->pmaPart5DetailSPs->removeElement($pmaPart5DetailSPs);
    }
    
    
    /**
     * Set numberQuestions
     *
     * @param integer $numberQuestions
     * @return PmaPart5SP
     */
    public function setNumberQuestions($numberQuestions)
    {
        $this->numberQuestions = $numberQuestions;

        return $this;
    }

    /**
     * Get numberQuestions
     *
     * @return integer 
     */
    public function getNumberQuestions()
    {
        return $this->numberQuestions;
    }    
    
    
}

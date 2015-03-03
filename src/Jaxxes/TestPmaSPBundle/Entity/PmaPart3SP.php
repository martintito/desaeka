<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * PmaPart3SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart3SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart3")
     */
    protected $pmaPart3;
    
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
     * @var string
     *
     * @ORM\Column(name="numberIncorrect", type="string", length=255, nullable=true)
     */
    private $numberIncorrect;
    
    /**
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart3DetailSP", mappedBy="pmaPart3SP", cascade={"all"})
     */
    private $pmaPart3DetailSPs;
    
    
    public function __toString()
    {
        return 'valor';
    }
    
    public function __construct() {
        $this->pmaPart3DetailSPs = new ArrayCollection();
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
     * Set pmaPart3
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart3 $pmaPart3
     */
    public function setPmaPart3(\Jaxxes\TestPmaBundle\Entity\PmaPart3 $pmaPart3)
    {
        $this->pmaPart3 = $pmaPart3;
    }

    /**
     * Get pmaPart3
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart3
     */
    public function getPmaPart3()
    {
        return $this->pmaPart3;
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
     * @return PmaPart3SP
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
     * @return PmaPart3SP
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
     * @return PmaPart3SP
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
     * @param string $numberIncorrect
     * @return PmaPart3SP
     */
    public function setNumberIncorrect($numberIncorrect)
    {
        $this->numberIncorrect = $numberIncorrect;

        return $this;
    }

    /**
     * Get numberIncorrect
     *
     * @return string 
     */
    public function getNumberIncorrect()
    {
        return $this->numberIncorrect;
    }
    
    public function getPmaPart3DetailSPs() 
    {
        return $this->pmaPart3DetailSPs;
    }
    
    /**
     * Add pmaPart3DetailSPs
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart3DetailSP $pmaPart3DetailSPs
     * @return Project
     */
    public function addPmaPart3DetailSP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart3DetailSP $pmaPart3DetailSPs)
    {
        $this->pmaPart3DetailSPs[] = $pmaPart3DetailSPs;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart3DetailSP $pmaPart3DetailSPs
     */
    public function removeSource(\Jaxxes\TestPmaSPBundle\Entity\PmaPart3DetailSP $pmaPart3DetailSPs)
    {
        $this->pmaPart3DetailSPs->removeElement($pmaPart3DetailSPs);
    }
}

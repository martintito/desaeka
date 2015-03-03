<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * PmaPart2SP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart2SP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart2")
     */
    protected $pmaPart2;
    
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
     * Set pmaPart2
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart2 $pmaPart2
     */
    public function setPmaPart2(\Jaxxes\TestPmaBundle\Entity\PmaPart2 $pmaPart2)
    {
        $this->pmaPart2 = $pmaPart2;
    }

    /**
     * Get pmaPart2
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart2
     */
    public function getPmaPart2()
    {
        return $this->pmaPart2;
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
     * @return PmaPart2SP
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
     * @return PmaPart2SP
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
     * @return PmaPart2SP
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
     * @return PmaPart2SP
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
    
    
}

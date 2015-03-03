<?php

namespace Jaxxes\TestGatbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart1Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart1Detail
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
     * @ORM\Column(name="number", type="integer")
     */
    private $number;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="factorQ", type="integer", nullable=true)
     */
    private $factorQ;

    /**
     * @var string
     *
     * @ORM\Column(name="question_i", type="string", length=255)
     */
    private $questionI;

    /**
     * @var string
     *
     * @ORM\Column(name="question_d", type="string", length=255)
     */
    private $questionD;

    /**
     * @var boolean
     *
     * @ORM\Column(name="equal", type="boolean")
     */
    private $equal;
    
    /**
     * @var string
     *
     * @ORM\Column(name="alternativeCorrect", type="string", length=255, nullable=true)
     */
    private $alternativeCorrect;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart1")
     */
    protected $gatbPart1;
    
    
    public function __toString()
    {
        return $this->getNumber(). ' ' . $this->getQuestionI(). ' - ' . $this->getQuestionD() ;
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
     * Set number
     *
     * @param integer $number
     * @return GatbPart1Detail
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }
    
    
    /**
     * Set factorQ
     *
     * @param integer $factorQ
     * @return GatbPart1Detail
     */
    public function setFactorQ($factorQ)
    {
        $this->factorQ = $factorQ;

        return $this;
    }

    /**
     * Get factorQ
     *
     * @return integer 
     */
    public function getFactorQ()
    {
        return $this->factorQ;
    }

    /**
     * Set questionI
     *
     * @param string $questionI
     * @return GatbPart1Detail
     */
    public function setQuestionI($questionI)
    {
        $this->questionI = $questionI;

        return $this;
    }

    /**
     * Get questionI
     *
     * @return string 
     */
    public function getQuestionI()
    {
        return $this->questionI;
    }

    /**
     * Set questionD
     *
     * @param string $questionD
     * @return GatbPart1Detail
     */
    public function setQuestionD($questionD)
    {
        $this->questionD = $questionD;

        return $this;
    }

    /**
     * Get questionD
     *
     * @return string 
     */
    public function getQuestionD()
    {
        return $this->questionD;
    }

    /**
     * Set equal
     *
     * @param boolean $equal
     * @return GatbPart1Detail
     */
    public function setEqual($equal)
    {
        $this->equal = $equal;

        return $this;
    }

    /**
     * Get equal
     *
     * @return boolean 
     */
    public function getEqual()
    {
        return $this->equal;
    }
    
    /**
     * Set alternativeCorrect
     *
     * @param string $alternativeCorrect
     * @return GatbPart2Detail
     */
    public function setAlternativeCorrect($alternativeCorrect)
    {
        $this->alternativeCorrect = $alternativeCorrect;

        return $this;
    }

    /**
     * Get alternativeCorrect
     *
     * @return string 
     */
    public function getAlternativeCorrect()
    {
        return $this->alternativeCorrect;
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
}

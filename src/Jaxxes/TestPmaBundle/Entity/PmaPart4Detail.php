<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart4Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart4Detail
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
     * @var string
     *
     * @ORM\Column(name="letter", type="string", length=255)
     */
    private $letter;

    /**
     * @var string
     *
     * @ORM\Column(name="valor1", type="string", length=255)
     */
    private $valor1;

    /**
     * @var string
     *
     * @ORM\Column(name="valor2", type="string", length=255)
     */
    private $valor2;

    /**
     * @var string
     *
     * @ORM\Column(name="valor3", type="string", length=255)
     */
    private $valor3;

    /**
     * @var string
     *
     * @ORM\Column(name="valor4", type="string", length=255)
     */
    private $valor4;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="string", length=255)
     */
    private $result;

    /**
     * @var string
     *
     * @ORM\Column(name="alternativeCorrect", type="string", length=255)
     */
    private $alternativeCorrect;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart4Group", inversedBy="pmaPart4Details")
     * @ORM\JoinColumn(name="pmaPart4Group_id", referencedColumnName="id")
     */
    protected $pmaPart4Group;
    
    
    public function __toString()
    {
        return $this->getValor1();
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
     * @return PmaPart4Detail
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
     * Set letter
     *
     * @param string $letter
     * @return PmaPart4Detail
     */
    public function setLetter($letter)
    {
        $this->letter = $letter;

        return $this;
    }

    /**
     * Get letter
     *
     * @return string 
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * Set valor1
     *
     * @param string $valor1
     * @return PmaPart4Detail
     */
    public function setValor1($valor1)
    {
        $this->valor1 = $valor1;

        return $this;
    }

    /**
     * Get valor1
     *
     * @return string 
     */
    public function getValor1()
    {
        return $this->valor1;
    }

    /**
     * Set valor2
     *
     * @param string $valor2
     * @return PmaPart4Detail
     */
    public function setValor2($valor2)
    {
        $this->valor2 = $valor2;

        return $this;
    }

    /**
     * Get valor2
     *
     * @return string 
     */
    public function getValor2()
    {
        return $this->valor2;
    }

    /**
     * Set valor3
     *
     * @param string $valor3
     * @return PmaPart4Detail
     */
    public function setValor3($valor3)
    {
        $this->valor3 = $valor3;

        return $this;
    }

    /**
     * Get valor3
     *
     * @return string 
     */
    public function getValor3()
    {
        return $this->valor3;
    }

    /**
     * Set valor4
     *
     * @param string $valor4
     * @return PmaPart4Detail
     */
    public function setValor4($valor4)
    {
        $this->valor4 = $valor4;

        return $this;
    }

    /**
     * Get valor4
     *
     * @return string 
     */
    public function getValor4()
    {
        return $this->valor4;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return PmaPart4Detail
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set alternativeCorrect
     *
     * @param string $alternativeCorrect
     * @return PmaPart4Detail
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
     * Set pmaPart4Group
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart4Group $pmaPart4Group
     */
    public function setPmaPart4Group(\Jaxxes\TestPmaBundle\Entity\PmaPart4Group $pmaPart4Group)
    {
        $this->pmaPart4Group = $pmaPart4Group;
    }

    /**
     * Get pmaPart4Group
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart4Group
     */
    public function getPmaPart4Group()
    {
        return $this->pmaPart4Group;
    }
}

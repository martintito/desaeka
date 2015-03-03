<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart1Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart1Detail
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
     * @ORM\Column(name="word", type="string", length=255)
     */
    private $word;

    /**
     * @var string
     *
     * @ORM\Column(name="field_A", type="string", length=255)
     */
    private $fieldA;

    /**
     * @var string
     *
     * @ORM\Column(name="field_B", type="string", length=255)
     */
    private $fieldB;

    /**
     * @var string
     *
     * @ORM\Column(name="field_C", type="string", length=255)
     */
    private $fieldC;

    /**
     * @var string
     *
     * @ORM\Column(name="field_D", type="string", length=255)
     */
    private $fieldD;

    /**
     * @var string
     *
     * @ORM\Column(name="alternativeCorrect", type="string", length=255)
     */
    private $alternativeCorrect;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart1")
     */
    protected $pmaPart1;
    
    public function __toString()
    {
        return $this->getWord();
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
     * @return PmaPart1Detail
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
     * Set word
     *
     * @param string $word
     * @return PmaPart1Detail
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set fieldA
     *
     * @param string $fieldA
     * @return PmaPart1Detail
     */
    public function setFieldA($fieldA)
    {
        $this->fieldA = $fieldA;

        return $this;
    }

    /**
     * Get fieldA
     *
     * @return string 
     */
    public function getFieldA()
    {
        return $this->fieldA;
    }

    /**
     * Set fieldB
     *
     * @param string $fieldB
     * @return PmaPart1Detail
     */
    public function setFieldB($fieldB)
    {
        $this->fieldB = $fieldB;

        return $this;
    }

    /**
     * Get fieldB
     *
     * @return string 
     */
    public function getFieldB()
    {
        return $this->fieldB;
    }

    /**
     * Set fieldC
     *
     * @param string $fieldC
     * @return PmaPart1Detail
     */
    public function setFieldC($fieldC)
    {
        $this->fieldC = $fieldC;

        return $this;
    }

    /**
     * Get fieldC
     *
     * @return string 
     */
    public function getFieldC()
    {
        return $this->fieldC;
    }

    /**
     * Set fieldD
     *
     * @param string $fieldD
     * @return PmaPart1Detail
     */
    public function setFieldD($fieldD)
    {
        $this->fieldD = $fieldD;

        return $this;
    }

    /**
     * Get fieldD
     *
     * @return string 
     */
    public function getFieldD()
    {
        return $this->fieldD;
    }

    /**
     * Set alternativeCorrect
     *
     * @param string $alternativeCorrect
     * @return PmaPart1Detail
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
}

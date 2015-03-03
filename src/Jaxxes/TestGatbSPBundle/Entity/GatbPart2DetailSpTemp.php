<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart2DetailSpTemp
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart2DetailSpTemp
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
     * @ORM\Column(name="operation", type="string", length=255)
     */
    private $operation;

    /**
     * @var string
     *
     * @ORM\Column(name="valueTop", type="string", length=255)
     */
    private $valueTop;

    /**
     * @var string
     *
     * @ORM\Column(name="valueDown", type="string", length=255)
     */
    private $valueDown;

    /**
     * @var string
     *
     * @ORM\Column(name="alternativeCorrect", type="string", length=255)
     */
    private $alternativeCorrect;

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
     * @ORM\Column(name="field_E", type="string", length=255)
     */
    private $fieldE;
    
    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=255)
     */
    private $answer;


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
     * @return GatbPart2DetailSpTemp
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
     * Set operation
     *
     * @param string $operation
     * @return GatbPart2DetailSpTemp
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Get operation
     *
     * @return string 
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set valueTop
     *
     * @param string $valueTop
     * @return GatbPart2DetailSpTemp
     */
    public function setValueTop($valueTop)
    {
        $this->valueTop = $valueTop;

        return $this;
    }

    /**
     * Get valueTop
     *
     * @return string 
     */
    public function getValueTop()
    {
        return $this->valueTop;
    }

    /**
     * Set valueDown
     *
     * @param string $valueDown
     * @return GatbPart2DetailSpTemp
     */
    public function setValueDown($valueDown)
    {
        $this->valueDown = $valueDown;

        return $this;
    }

    /**
     * Get valueDown
     *
     * @return string 
     */
    public function getValueDown()
    {
        return $this->valueDown;
    }

    /**
     * Set alternativeCorrect
     *
     * @param string $alternativeCorrect
     * @return GatbPart2DetailSpTemp
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
     * Set fieldA
     *
     * @param string $fieldA
     * @return GatbPart2DetailSpTemp
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
     * @return GatbPart2DetailSpTemp
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
     * @return GatbPart2DetailSpTemp
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
     * @return GatbPart2DetailSpTemp
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
     * Set fieldE
     *
     * @param string $fieldE
     * @return GatbPart2DetailSpTemp
     */
    public function setFieldE($fieldE)
    {
        $this->fieldE = $fieldE;

        return $this;
    }

    /**
     * Get fieldE
     *
     * @return string 
     */
    public function getFieldE()
    {
        return $this->fieldE;
    }
    
    
    /**
     * Set answer
     *
     * @param string $answer
     * @return GatbPart2DetailSpTemp
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }
}

<?php

namespace Jaxxes\TestGatbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart2Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart2Detail
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
     * @ORM\Column(name="factorN", type="integer", nullable=true)
     */
    private $factorN;

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
    private $field_A;
    
    /**
     * @var string
     *
     * @ORM\Column(name="field_B", type="string", length=255)
     */
    private $field_B;
    
    /**
     * @var string
     *
     * @ORM\Column(name="field_C", type="string", length=255)
     */
    private $field_C;
    
    /**
     * @var string
     *
     * @ORM\Column(name="field_D", type="string", length=255)
     */
    private $field_D;
    
    /**
     * @var string
     *
     * @ORM\Column(name="field_E", type="string", length=255)
     */
    private $field_E;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart2")
     */
    protected $gatbPart2;


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
     * @return GatbPart2Detail
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
     * Set factorN
     *
     * @param integer $factorN
     * @return GatbPart2Detail
     */
    public function setFactorN($factorN)
    {
        $this->factorN = $factorN;

        return $this;
    }

    /**
     * Get factorN
     *
     * @return integer 
     */
    public function getFactorN()
    {
        return $this->factorN;
    }

    /**
     * Set operation
     *
     * @param string $operation
     * @return GatbPart2Detail
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
     * @return GatbPart2Detail
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
     * @return GatbPart2Detail
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
     * Set field_A
     *
     * @param string $field_A
     * @return GatbPart2Detail
     */
    public function setField_A($field_A)
    {
        $this->field_A = $field_A;

        return $this;
    }

    /**
     * Get field_A
     *
     * @return string 
     */
    public function getField_A()
    {
        return $this->field_A;
    }
    
    /**
     * Set field_B
     *
     * @param string $field_B
     * @return GatbPart2Detail
     */
    public function setField_B($field_B)
    {
        $this->field_B = $field_B;

        return $this;
    }

    /**
     * Get field_B
     *
     * @return string 
     */
    public function getField_B()
    {
        return $this->field_B;
    }
    
    /**
     * Set field_C
     *
     * @param string $field_C
     * @return GatbPart2Detail
     */
    public function setField_C($field_C)
    {
        $this->field_C = $field_C;

        return $this;
    }

    /**
     * Get field_C
     *
     * @return string 
     */
    public function getField_C()
    {
        return $this->field_C;
    }
    
    /**
     * Set field_D
     *
     * @param string $field_D
     * @return GatbPart2Detail
     */
    public function setField_D($field_D)
    {
        $this->field_D = $field_D;

        return $this;
    }

    /**
     * Get field_D
     *
     * @return string 
     */
    public function getField_D()
    {
        return $this->field_D;
    }
    
    /**
     * Set field_E
     *
     * @param string $field_E
     * @return GatbPart2Detail
     */
    public function setField_E($field_E)
    {
        $this->field_E = $field_E;

        return $this;
    }

    /**
     * Get field_E
     *
     * @return string 
     */
    public function getField_E()
    {
        return $this->field_E;
    }
    
    /**
     * Set gatbPart2
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart2 $gatbPart2
     */
    public function setGatbPart2(\Jaxxes\TestGatbBundle\Entity\GatbPart2 $gatbPart2)
    {
        $this->gatbPart2 = $gatbPart2;
    }

    /**
     * Get gatbPart2
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart2
     */
    public function getGatbPart2()
    {
        return $this->gatbPart2;
    }
}

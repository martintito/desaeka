<?php

namespace Jaxxes\TestGatbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart4Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart4Detail
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
     * @ORM\Column(name="factorG", type="integer", nullable=true)
     */
    private $factorG;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="factorV", type="integer", nullable=true)
     */
    private $factorV;

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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart4")
     */
    protected $gatbPart4;
    
    public function __toString()
    {
        return $this->getFieldA();
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
     * @return GatbPart4Detail
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
     * Set factorG
     *
     * @param integer $factorG
     * @return GatbPart4Detail
     */
    public function setFactorG($factorG)
    {
        $this->factorG = $factorG;

        return $this;
    }

    /**
     * Get factorG
     *
     * @return integer 
     */
    public function getFactorG()
    {
        return $this->factorG;
    }
    
    /**
     * Set factorV
     *
     * @param integer $factorV
     * @return GatbPart4Detail
     */
    public function setFactorV($factorV)
    {
        $this->factorV = $factorV;

        return $this;
    }

    /**
     * Get factorV
     *
     * @return integer 
     */
    public function getFactorV()
    {
        return $this->factorV;
    }

    /**
     * Set fieldA
     *
     * @param string $fieldA
     * @return GatbPart4Detail
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
     * @return GatbPart4Detail
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
     * @return GatbPart4Detail
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
     * @return GatbPart4Detail
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
     * @return GatbPart4Detail
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
     * Set gatbPart4
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart4 $gatbPart4
     */
    public function setGatbPart4(\Jaxxes\TestGatbBundle\Entity\GatbPart4 $gatbPart4)
    {
        $this->gatbPart4 = $gatbPart4;
    }

    /**
     * Get gatbPart4
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart4
     */
    public function getGatbPart4()
    {
        return $this->gatbPart4;
    }
}

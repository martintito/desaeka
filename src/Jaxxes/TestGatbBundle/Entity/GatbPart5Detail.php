<?php

namespace Jaxxes\TestGatbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart5Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart5Detail
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
     * @ORM\Column(name="factorN", type="integer", nullable=true)
     */
    private $factorN;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=355)
     */
    private $question;

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
     * @ORM\Column(name="alternativeCorrect", type="string", length=255)
     */
    private $alternativeCorrect;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart5")
     */
    protected $gatbPart5;
    
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
     * @return GatbPart5Detail
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
     * @return GatbPart5Detail
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
     * Set factorN
     *
     * @param integer $factorN
     * @return GatbPart5Detail
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
     * Set question
     *
     * @param string $question
     * @return GatbPart5Detail
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set fieldA
     *
     * @param string $fieldA
     * @return GatbPart5Detail
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
     * @return GatbPart5Detail
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
     * @return GatbPart5Detail
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
     * @return GatbPart5Detail
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
     * @return GatbPart5Detail
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
     * Set alternativeCorrect
     *
     * @param string $alternativeCorrect
     * @return GatbPart5Detail
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
     * Set gatbPart5
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart5 $gatbPart5
     */
    public function setGatbPart5(\Jaxxes\TestGatbBundle\Entity\GatbPart5 $gatbPart5)
    {
        $this->gatbPart5 = $gatbPart5;
    }

    /**
     * Get gatbPart5
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart5
     */
    public function getGatbPart5()
    {
        return $this->gatbPart5;
    }
}

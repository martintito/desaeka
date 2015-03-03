<?php

namespace Jaxxes\TestGatbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * GatbPart3Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart3Detail
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
     * @ORM\Column(name="factorS", type="integer", nullable=true)
     */
    private $factorS;

    /**
     * @var string
     *
     * @ORM\Column(name="rutaFotoOperation", type="string", length=255)
     */
    private $rutaFotoOperation;
    
    /**
     * @Assert\Image(maxSize = "500k")
     */
    protected $fotoOperation;

    /**
     * @var string
     *
     * @ORM\Column(name="rutaFotoAlternatives", type="string", length=255)
     */
    private $rutaFotoAlternatives;

    /**
     * @Assert\Image(maxSize = "500k")
     */
    private $fotoAlternatives;

    /**
     * @var string
     *
     * @ORM\Column(name="alternativeCorrect", type="string", length=255)
     */
    private $alternativeCorrect;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart3")
     */
    protected $gatbPart3;
    
    public function __toString()
    {
        return $this->getRutaFotoOperation();
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
     * @return GatbPart3Detail
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
     * @return GatbPart3Detail
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
     * Set factorS
     *
     * @param integer $factorS
     * @return GatbPart3Detail
     */
    public function setFactorS($factorS)
    {
        $this->factorS = $factorS;

        return $this;
    }

    /**
     * Get factorS
     *
     * @return integer 
     */
    public function getFactorS()
    {
        return $this->factorS;
    }

    /**
     * Set rutaFotoOperation
     *
     * @param string $rutaFotoOperation
     * @return GatbPart3Detail
     */
    public function setRutaFotoOperation($rutaFotoOperation)
    {
        $this->rutaFotoOperation = $rutaFotoOperation;

        return $this;
    }

    /**
     * Get rutaFotoOperation
     *
     * @return string 
     */
    public function getRutaFotoOperation()
    {
        return $this->rutaFotoOperation;
    }
    
    
    /**
     * Set fotoOperation.
     *
     * @param UploadedFile $fotoOperation
     */
    public function setFotoOperation(UploadedFile $fotoOperation = null)
    {
        $this->fotoOperation = $fotoOperation;
    }

    /**
     * Get fotoOperation.
     *
     * @return UploadedFile
     */
    public function getFotoOperation()
    {
        return $this->fotoOperation;
    }

    /**
     * Set rutaFotoAlternatives
     *
     * @param string $rutaFotoAlternatives
     * @return GatbPart3Detail
     */
    public function setRutaFotoAlternatives($rutaFotoAlternatives)
    {
        $this->rutaFotoAlternatives = $rutaFotoAlternatives;

        return $this;
    }

    /**
     * Get rutaFotoAlternatives
     *
     * @return string 
     */
    public function getRutaFotoAlternatives()
    {
        return $this->rutaFotoAlternatives;
    }
    
    
    /**
     * Set fotoAlternatives.
     *
     * @param UploadedFile $fotoAlternatives
     */
    public function setFotoAlternatives(UploadedFile $fotoAlternatives = null)
    {
        $this->fotoAlternatives = $fotoAlternatives;
    }

    /**
     * Get fotoAlternatives.
     *
     * @return UploadedFile
     */
    public function getFotoAlternatives()
    {
        return $this->fotoAlternatives;
    }

    /**
     * Set alternativeCorrect
     *
     * @param string $alternativeCorrect
     * @return GatbPart3Detail
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
     * Set gatbPart3
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart3 $gatbPart3
     */
    public function setGatbPart3(\Jaxxes\TestGatbBundle\Entity\GatbPart3 $gatbPart3)
    {
        $this->gatbPart3 = $gatbPart3;
    }

    /**
     * Get gatbPart3
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart3
     */
    public function getGatbPart3()
    {
        return $this->gatbPart3;
    }
}

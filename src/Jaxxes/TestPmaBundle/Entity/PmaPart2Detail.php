<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart2Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart2Detail
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
     * @ORM\Column(name="rutaFotoOperation", type="string", length=255)
     */
    private $rutaFotoOperation;

    /**
     * @var string
     *
     * @ORM\Column(name="rutaFotoAlternatives", type="string", length=255)
     */
    private $rutaFotoAlternatives;

    /**
     * @var integer
     *
     * @ORM\Column(name="block", type="integer")
     */
    private $block;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart2")
     */
    protected $pmaPart2;
    
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
     * @return PmaPart2Detail
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
     * Set rutaFotoOperation
     *
     * @param string $rutaFotoOperation
     * @return PmaPart2Detail
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
     * Set rutaFotoAlternatives
     *
     * @param string $rutaFotoAlternatives
     * @return PmaPart2Detail
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
     * Set block
     *
     * @param integer $block
     * @return PmaPart2Detail
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return integer 
     */
    public function getBlock()
    {
        return $this->block;
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
}

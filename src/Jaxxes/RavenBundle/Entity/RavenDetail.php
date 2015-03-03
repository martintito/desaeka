<?php

namespace Jaxxes\RavenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RavenDetail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RavenDetail
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
     * @ORM\Column(name="orden", type="integer")
     */
    private $orden;
    
    /**
     * @var string
     *
     * @ORM\Column(name="rutaFotoSerie", type="string", length=255)
     */
    private $rutaFotoSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="rutaFotoAlternatives", type="string", length=255)
     */
    private $rutaFotoAlternatives;   
    
    /**
     * @var string
     *
     * @ORM\Column(name="correct", type="string", length=1)
     */
    private $correct;       
    
    /**
     * @var string
     *
     * @ORM\Column(name="block", type="string")
     */
    private $block;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\RavenBundle\Entity\Raven")
     */
    protected $Raven;
    
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
     * Set rutaFotoSerie
     *
     * @param string $rutaFotoSerie
     * @return RavenDetail
     */
    public function setRutaFotoSerie($rutaFotoSerie)
    {
        $this->rutaFotoSerie = $rutaFotoSerie;

        return $this;
    }

    /**
     * Get rutaFotoSerie
     *
     * @return string 
     */
    public function getRutaFotoSerie()
    {
        return $this->rutaFotoSerie;
    }

    /**
     * Set rutaFotoAlternatives
     *
     * @param string $rutaFotoAlternatives
     * @return RavenDetail
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
     * Set orden
     *
     * @param integer $number
     * @return RavenDetail
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
    
    /**
     * Set block
     *
     * @param string $block
     * @return RavenDetail
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return string 
     */
    public function getBlock()
    {
        return $this->block;
    }
    
    /**
     * Set Raven
     *
     * @param Jaxxes\RavenBundle\Entity\Raven $Raven
     */
    public function setRaven(\Jaxxes\RavenBundle\Entity\Raven $Raven)
    {
        $this->Raven = $Raven;
    }

    /**
     * Get Raven
     *
     * @return Jaxxes\RavenBundle\Entity\Raven
     */
    public function getRaven()
    {
        return $this->Raven;
    }

    /**
     * Set correct
     *
     * @param string $correct
     * @return RavenDetail
     */
    public function setCorrect($correct)
    {
        $this->correct = $correct;

        return $this;
    }

    /**
     * Get correct
     *
     * @return string 
     */
    public function getCorrect()
    {
        return $this->correct;
    }    
         
}

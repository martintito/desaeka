<?php

namespace Jaxxes\TestGatbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart1
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart1
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\Gatb")
     */
    protected $gatb;
    
    public function __toString()
    {
        return $this->getDescripcion();
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return GatbPart1
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    
    /**
     * Set gatb
     *
     * @param Jaxxes\TestGatbBundle\Entity\Gatb $gatb
     */
    public function setGatb(\Jaxxes\TestGatbBundle\Entity\Gatb $gatb)
    {
        $this->gatb = $gatb;
    }

    /**
     * Get gatb
     *
     * @return Jaxxes\TestGatbBundle\Entity\Gatb
     */
    public function getGatb()
    {
        return $this->gatb;
    }
}

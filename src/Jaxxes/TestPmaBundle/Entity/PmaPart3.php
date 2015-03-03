<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart3
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart3
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
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\Pma")
     */
    protected $pma;
    
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
     * @return PmaPart3
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
     * Set pma
     *
     * @param Jaxxes\TestPmaBundle\Entity\Pma $pma
     */
    public function setPma(\Jaxxes\TestPmaBundle\Entity\Pma $pma)
    {
        $this->pma = $pma;
    }

    /**
     * Get pma
     *
     * @return Jaxxes\TestPmaBundle\Entity\Pma
     */
    public function getPma()
    {
        return $this->pma;
    }
}

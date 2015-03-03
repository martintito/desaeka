<?php

namespace Jaxxes\RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolFunction
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RolFunction
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
     * @ORM\Column(name="descripcion", type="string", length=1000)
     */
    private $descripcion;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\RolBundle\Entity\RegisterDefinitionRol")
     */
    protected $RegisterDefinitionRol;


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
     * @return RolFunction
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
     * Set RegisterDefinitionRol
     *
     * @param Jaxxes\RolBundle\Entity\RegisterDefinitionRol $RegisterDefinitionRol
     */
    public function setRegisterDefinitionRol(\Jaxxes\RolBundle\Entity\RegisterDefinitionRol $RegisterDefinitionRol)
    {
        $this->RegisterDefinitionRol = $RegisterDefinitionRol;
    }

    /**
     * Get RegisterDefinitionRol
     *
     * @return Jaxxes\RolBundle\Entity\RegisterDefinitionRol
     */
    public function getRegisterDefinitionRol()
    {
        return $this->RegisterDefinitionRol;
    }
}

<?php

namespace Jaxxes\RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TestByRol
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TestByRol
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\RolBundle\Entity\Rol")
     */
    protected $Rol;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\DefinitionTestBundle\Entity\DefinitionTest")
     */
    protected $DefinitionTest;
    
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
     * Set Rol
     *
     * @param Jaxxes\RolBundle\Entity\Rol $Rol
     */
    public function setRol(\Jaxxes\RolBundle\Entity\Rol $Rol)
    {
        $this->Rol = $Rol;
    }

    /**
     * Get Rol
     *
     * @return Jaxxes\RolBundle\Entity\Rol
     */
    public function getRol()
    {
        return $this->Rol;
    }

    /**
     * Set DefinitionTest
     *
     * @param Jaxxes\DefinitionTestBundle\Entity\DefinitionTest $DefinitionTest
     */
    public function setDefinitionTest(\Jaxxes\DefinitionTestBundle\Entity\DefinitionTest $DefinitionTest)
    {
        $this->DefinitionTest = $DefinitionTest;
    }

    /**
     * Get DefinitionTest
     *
     * @return Jaxxes\DefinitionTestBundle\Entity\DefinitionTest
     */
    public function getDefinitionTest()
    {
        return $this->DefinitionTest;
    }    

}

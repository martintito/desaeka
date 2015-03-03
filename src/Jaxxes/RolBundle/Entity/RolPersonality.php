<?php

namespace Jaxxes\RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolPersonality
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RolPersonality
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nivel", type="string", length=1)
     */
    private $nivel;

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
     * Set name
     *
     * @param string $name
     * @return RolPersonality
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     * @return RolPersonality
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string 
     */
    public function getNivel()
    {
        return $this->nivel;
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

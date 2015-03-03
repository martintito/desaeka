<?php

namespace Jaxxes\RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolStudyLevel
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RolStudyLevel
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\RolBundle\Entity\RegisterDefinitionRol")
     */
    protected $registerdefinitionrol;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="req", type="boolean", nullable=true)
     */
    private $req;
    
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
     * Set registerdefinitionrol
     *
     * @param Jaxxes\RolBundle\Entity\RegisterDefinitionRol $registerdefinitionrol
     */
    public function setRegisterDefinitionRol(\Jaxxes\RolBundle\Entity\RegisterDefinitionRol $registerdefinitionrol)
    {
        $this->registerdefinitionrol = $registerdefinitionrol;
    }

    /**
     * Get registerdefinitionrol
     *
     * @return Jaxxes\RolBundle\Entity\RegisterDefinitionRol
     */
    public function getRegisterDefinitionRol()
    {
        return $this->registerdefinitionrol;
    }
    
    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return RolStudyLevel
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
     * Set req
     *
     * @param boolean $req
     * @return RolStudyLevel
     */
    public function setReq($req)
    {
        $this->req = $req;

        return $this;
    }

    /**
     * Get req
     *
     * @return boolean
     */
    public function getReq()
    {
        return $this->req;
    }
    
}

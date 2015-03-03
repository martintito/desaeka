<?php

namespace Jaxxes\RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolDetail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RolDetail
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
     * @var boolean
     *
     * @ORM\Column(name="req", type="boolean")
     */
    private $req;
    
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\RolBundle\Entity\RegisterDefinitionRol")
    */
    protected $registerDefinitionRol;


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
     * @return RolDetail
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
     * Set req
     *
     * @param boolean $req
     * @return RolDetail
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
    
    /**
     * Set registerDefinitionRol
     *
     * @param Jaxxes\RolBundle\Entity\RegisterDefinitionRol $RegisterDefinitionRol
     */
    public function setRegisterDefinitionRol(\Jaxxes\RolBundle\Entity\RegisterDefinitionRol $RegisterDefinitionRol)
    {
        $this->registerDefinitionRol = $RegisterDefinitionRol;
    }

    /**
     * Get registerDefinitionRol
     *
     * @return Jaxxes\RolBundle\Entity\RegisterDefinitionRol
     */
    public function getRegisterDefinitionRol()
    {
        return $this->registerDefinitionRol;
    }
    
}

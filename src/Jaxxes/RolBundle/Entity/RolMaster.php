<?php

namespace Jaxxes\RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolMaster
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RolMaster
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return RolMaster
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
     * @return RolMaster
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

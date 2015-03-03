<?php

namespace Jaxxes\RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolLanguage
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RolLanguage
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
    protected $registerDefinitionRol;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\GeneralBundle\Entity\Language")
    */
    protected $language;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivel", type="integer")
     */
    private $nivel;

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
     * Set nivel
     *
     * @param integer $nivel
     * @return RolLanguage
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer 
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Set req
     *
     * @param boolean $req
     * @return RolLanguage
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
    
    
    /**
     * Set language
     *
     * @param Jaxxes\GeneralBundle\Entity\Language $Language
     */
    public function setLanguage(\Jaxxes\GeneralBundle\Entity\Language $Language)
    {
        $this->language = $Language;
    }

    /**
     * Get language
     *
     * @return Jaxxes\GeneralBundle\Entity\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }
    
}

<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NivelbySelectionProcess
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NivelbySelectionProcess
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
    * @ORM\ManyToOne(targetEntity="Jaxxes\ResumeBundle\Entity\NivelSelectedbyResume")
    */
    protected $nivelSelectedbyResume;

    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SectionbySelectionProcess")
    */
    protected $sectionbySelectionProcess;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="enable", type="boolean")
     */
    private $enable;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function __toString()
    {
        return $this->getSectionbySelectionProcess()->__toString();
    }
    
    /**
     * Set enable
     *
     * @param boolean $enable
     * @return NivelbySelectionProcess	
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get enable
     *
     * @return boolean 
     */
    public function getEnable()
    {
        return $this->enable;
    }

     /**
     * Set sectionbySelectionProcess
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SectionbySelectionProcess $sectionSelectedByResume
     */
    public function setSectionbySelectionProcess(\Jaxxes\SeleccionProcesBundle\Entity\SectionbySelectionProcess $sectionbySelectionProcess)
    {
        $this->sectionbySelectionProcess = $sectionbySelectionProcess;
    }
    
    /**
     * Get sectionbySelectionProcess
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SectionbySelectionProcess
     */
    public function getSectionbySelectionProcess()
    {
        return $this->sectionbySelectionProcess;
    }


     /**
     * Set nivelSelectedbyResume
     *
     * @param Jaxxes\ResumeBundle\Entity\NivelSelectedbyResume $nivelSelectedbyResume
     */
    public function setNivelSelectedbyResume(\Jaxxes\ResumeBundle\Entity\NivelSelectedbyResume $nivelSelectedbyResume)
    {
        $this->nivelSelectedbyResume = $nivelSelectedbyResume;
    }
    
    /**
     * Get nivelSelectedbyResume
     *
     * @return Jaxxes\ResumeBundle\Entity\NivelSelectedbyResume
     */
    public function getNivelSelectedbyResume()
    {
        return $this->nivelSelectedbyResume;
    }

        
}

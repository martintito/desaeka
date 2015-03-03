<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SectionbySelectionProcess
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SectionbySelectionProcess
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
    * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess")
    */
    protected $selectionProcess;
    
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\ResumeBundle\Entity\SectionSelectedByResume")
    */
    protected $sectionSelectedByResume;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Enable", type="boolean")
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
        return $this->getSelectionProcess()->__toString();
    }
    
    /**
     * Set enable
     *
     * @param boolean $enable
     * @return SectionbySelectionProcess
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
     * Set selectionProcess
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess $selectionProcess
     */
    public function setSelectionProcess(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess $selectionProcess)
    {
        $this->selectionProcess = $selectionProcess;
    }
    
    /**
     * Get selectionProcess
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess
     */
    public function getSelectionProcess()
    {
        return $this->selectionProcess;
    }
    
    /**
     * Set sectionSelectedByResume
     *
     * @param Jaxxes\ResumeBundle\Entity\SectionSelectedByResume $sectionSelectedByResume
     */
    public function setSectionSelectedByResume(\Jaxxes\ResumeBundle\Entity\SectionSelectedByResume $sectionSelectedByResume)
    {
        $this->sectionSelectedByResume = $sectionSelectedByResume;
    }
    
    /**
     * Get sectionSelectedByResume
     *
     * @return Jaxxes\ResumeBundle\Entity\SectionSelectedByResume
     */
    public function getSectionSelectedByResume()
    {
        return $this->sectionSelectedByResume;
    }
    
}

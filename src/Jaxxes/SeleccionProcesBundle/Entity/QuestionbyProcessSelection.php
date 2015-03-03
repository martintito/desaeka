<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionbyProcessSelection
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class QuestionbyProcessSelection
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
    * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\NivelbySelectionProcess")
    */
    protected $nivelbySelectionProcess;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\ResumeBundle\Entity\QuestionbySection")
    */
    protected $questionbySection;
    
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
        return $this->getNivelbySelectionProcess()->__toString();
    }
    
    /**
     * Set nivelbySelectionProcess
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\NivelbySelectionProcess $nivelbySelectionProcess
     */
    public function setNivelbySelectionProcess(\Jaxxes\SeleccionProcesBundle\Entity\NivelbySelectionProcess $nivelbySelectionProcess)
    {
        $this->nivelbySelectionProcess = $nivelbySelectionProcess;
    }
    
    /**
     * Get nivelbySelectionProcess
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\NivelbySelectionProcess
     */
    public function getNivelbySelectionProcess()
    {
        return $this->nivelbySelectionProcess;
    }
    
    /**
     * Set questionbySection
     *
     * @param Jaxxes\ResumeBundle\Entity\QuestionbySection $questionbySection
     */
    public function setQuestionbySection(\Jaxxes\ResumeBundle\Entity\QuestionbySection $questionbySection)
    {
        $this->questionbySection = $questionbySection;
    }
    
    /**
     * Get questionbySection
     *
     * @return Jaxxes\ResumeBundle\Entity\QuestionbySection
     */
    public function getQuestionbySection()
    {
        return $this->questionbySection;
    }
}

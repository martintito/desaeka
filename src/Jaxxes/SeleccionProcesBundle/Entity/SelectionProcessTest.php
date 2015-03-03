<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SelectionProcessTest
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SelectionProcessTest
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\DefinitionTestBundle\Entity\DefinitionTest")
     */
    protected $definitionTest;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess")
    */
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess", inversedBy="selectionProcessTests")
     * @ORM\JoinColumn(name="selectionProcess_id", referencedColumnName="id")
     */
    protected $selectionProcess;

    /**
     * @var boolean
     *
     * @ORM\Column(name="selected", type="boolean", nullable=true)
     */
    private $selected;
    
    
    public function __toString()
    {
        return $this->getDefinitionTest()->__toString(); 
    }


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
     * Set definitionTest
     *
     * @param Jaxxes\DefinitionTestBundle\Entity\DefinitionTest $definitionTest
     */
    public function setDefinitionTest(\Jaxxes\DefinitionTestBundle\Entity\DefinitionTest $definitionTest)
    {
        $this->definitionTest = $definitionTest;
    }

    /**
     * Get definitionTest
     *
     * @return Jaxxes\DefinitionTestBundle\Entity\DefinitionTest
     */
    public function getDefinitionTest()
    {
        return $this->definitionTest;
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
     * Set selected
     *
     * @param boolean $selected
     * @return SelectionProcessTest
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;

        return $this;
    }

    /**
     * Get selected
     *
     * @return boolean 
     */
    public function getSelected()
    {
        return $this->selected;
    }
}

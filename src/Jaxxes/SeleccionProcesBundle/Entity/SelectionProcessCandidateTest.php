<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SelectionProcessCandidateTest
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SelectionProcessCandidateTest
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest")
     */
    protected $selectionProcessTest;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate")
     */
    protected $selectionProcessCandidate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="realized", type="boolean")
     */
    private $realized;
    
    public function __toString()
    {
        return $this->getSelectionProcessTest()->__toString(); 
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
     * Set selectionProcessTest
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest $selectionProcessTest
     */
    public function setSelectionProcessTest(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest $selectionProcessTest)
    {
        $this->selectionProcessTest = $selectionProcessTest;
    }

    /**
     * Get selectionProcessTest
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest
     */
    public function getSelectionProcessTest()
    {
        return $this->selectionProcessTest;
    }
    
    /**
     * Set selectionProcessCandidate
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $selectionProcessCandidate
     */
    public function setSelectionProcessCandidate(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $selectionProcessCandidate)
    {
        $this->selectionProcessCandidate = $selectionProcessCandidate;
    }

    /**
     * Get selectionProcessCandidate
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate
     */
    public function getSelectionProcessCandidate()
    {
        return $this->selectionProcessCandidate;
    }

    /**
     * Set realized
     *
     * @param boolean $realized
     * @return SelectionProcessCandidateTest
     */
    public function setRealized($realized)
    {
        $this->realized = $realized;

        return $this;
    }

    /**
     * Get realized
     *
     * @return boolean 
     */
    public function getRealized()
    {
        return $this->realized;
    }
}

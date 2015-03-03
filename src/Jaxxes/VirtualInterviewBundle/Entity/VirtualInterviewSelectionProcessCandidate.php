<?php

namespace Jaxxes\VirtualInterviewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VirtualInterviewSelectionProcessCandidate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class VirtualInterviewSelectionProcessCandidate
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewQuestion")
     */
    protected $VirtualInterviewQuestion;
        
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate", inversedBy="answers")
     */
    protected $SelectionProcessCandidate;    

	
    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=10000, nullable= true)
     */
    private $answer;
    
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
     * Set answer
     *
     * @param string $answer
     * @return VirtualInterviewSelectionProcessCandidate
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
        return $this;
    }

    /**
     * Get answer
     *
     * @return string 
     */
    public function getAnswer()
    {
        return $this->answer;
    }
    
    /**
     * Set SelectionProcessCandidate
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $SelectionProcessCandidate
     */
    public function setSelectionProcessCandidate(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $SelectionProcessCandidate)
    {
        $this->SelectionProcessCandidate = $SelectionProcessCandidate;
    }          


    /**
     * Get SelectionProcessCandidate
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate
     */
    public function getSelectionProcessCandidate()
    {
        return $this->SelectionProcessCandidate;
    }

    /**
     * Set VirtualInterviewQuestion
     *
     * @param Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewQuestion $VirtualInterviewQuestion
     */
    public function setVirtualInterviewQuestion(\Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewQuestion $VirtualInterviewQuestion)
    {
        $this->VirtualInterviewQuestion = $VirtualInterviewQuestion;
    }          

    /**
     * Get VirtualInterviewQuestion
     *
     * @return Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewQuestion
     */
    public function getVirtualInterviewQuestion()
    {
        return $this->VirtualInterviewQuestion;
    }    
    
}

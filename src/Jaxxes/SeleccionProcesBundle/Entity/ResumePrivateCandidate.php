<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResumePrivateCandidate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ResumePrivateCandidate
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
     * @ORM\Column(name="answer", type="string", length=3000, nullable=true)
     */
    private $answer;

    /**
     * @var string
     *
     * @ORM\Column(name="typeAnswer", type="string", length=255, nullable=true)
     */
    private $typeAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="codeTable", type="string", length=255, nullable=true )
     */
    private $codeTable;

    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate", inversedBy="answersResumePrivate")
    */
    protected $SPCResumePrivate;

    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\QuestionbyProcessSelection")
    */
    protected $questionbyProcessSelection;


    public function __toString()
    {
        return (string) $this->getAnswer()->__toString();
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
     * Set answer
     *
     * @param string $answer
     * @return ResumePrivateCandidate
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
     * Set typeAnswer
     *
     * @param string $typeAnswer
     * @return ResumePrivateCandidate
     */
    public function settypeAnswer($typeAnswer)
    {
        $this->typeAnswer = $typeAnswer;

        return $this;
    }

    /**
     * Get typeAnswer
     *
     * @return string 
     */
    public function gettypeAnswer()
    {
        return $this->typeAnswer;
    }    


    /**
     * Set codeTable
     *
     * @param string $codeTable
     * @return ResumePrivateCandidate
     */
    public function setcodeTable($codeTable)
    {
        $this->codeTable = $codeTable;

        return $this;
    }

    /**
     * Get codeTable
     *
     * @return string 
     */
    public function getcodeTable()
    {
        return $this->codeTable;
    }    
        

    /**
     * Set questionbyProcessSelection
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\QuestionbyProcessSelection $questionbyProcessSelection
     */
    public function setQuestionbyProcessSelection(\Jaxxes\SeleccionProcesBundle\Entity\QuestionbyProcessSelection $questionbyProcessSelection)
    {
        $this->questionbyProcessSelection = $questionbyProcessSelection;
    }
    
    /**
     * Get questionbyProcessSelection
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\QuestionbyProcessSelection
     */
    public function getQuestionbyProcessSelection()
    {
        return $this->questionbyProcessSelection;
    }

    /**
     * Set SPCResumePrivate
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $SPCResumePrivate
    */ 
    public function setSPCResumePrivate(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $SPCResumePrivate)
    {
        $this->SPCResumePrivate = $SPCResumePrivate;
    }          
	

    /**
     * Get SPCResumePrivate
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate
     */
    public function getSPCResumePrivate()
    {
        return $this->SPCResumePrivate;
    }
     
}

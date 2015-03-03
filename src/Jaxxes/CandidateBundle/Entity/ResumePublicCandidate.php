<?php

namespace Jaxxes\CandidateBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResumePublicCandidate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ResumePublicCandidate
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
     * @ORM\Column(name="typeAnswer", type="string", length=255)
     */
    private $typeAnswer;

    /**
     * @var string
     *
     * @ORM\Column(name="codeTable", type="string", length=255)
     */
    private $codeTable;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\CandidateBundle\Entity\Candidate")
    */
    protected $candidate;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\ResumeBundle\Entity\QuestionbySection")
    */
    protected $questionbySection;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=255)
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
     * Set candidate
     *
     * @param Jaxxes\CandidateBundle\Entity\Candidate $candidate
     */
    public function setCandidate(\Jaxxes\SeleccionProcesBundle\Entity\Candidate $candidate)
    {
        $this->candidate = $candidate;
    }
    
    /**
     * Get candidate
     *
     * @return Jaxxes\CandidateBundle\Entity\Candidate
     */
    public function getCandidate()
    {
        return $this->candidate;
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

    /**
     * Set answer
     *
     * @param string $answer
     * @return ResumePublicCandidate
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
     * @return ResumePublicCandidate
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
     * @return ResumePublicCandidate
     */
    public function setcodeAnswer($codeTable)
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
    
}

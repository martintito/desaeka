<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultSPC
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ResultSPC
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate")
     */
    protected $selectionProcessCandidate;

    /**
     * @var string
     *
     * @ORM\Column(name="commentGTB", type="string", length=2500, nullable=true)
     */
    private $commentGTB;

    /**
     * @var string
     *
     * @ORM\Column(name="commentPMA", type="string", length=2500, nullable=true)
     */
    private $commentPMA;

    /**
     * @var string
     *
     * @ORM\Column(name="commentICE", type="string", length=2500, nullable=true)
     */
    private $commentICE;

    /**
     * @var string
     *
     * @ORM\Column(name="commentESC", type="string", length=2500, nullable=true)
     */
    private $commentESC;

    /**
     * @var string
     *
     * @ORM\Column(name="strengths", type="string", length=2500, nullable=true)
     */
    private $strengths;

    /**
     * @var string
     *
     * @ORM\Column(name="improvementOpportunities", type="string", length=2500, nullable=true)
     */
    private $improvementOpportunities;

    /**
     * @var string
     *
     * @ORM\Column(name="recommendation", type="string", length=2500, nullable=true)
     */
    private $recommendation;

    /**
     * @var integer
     *
     * @ORM\Column(name="FinalResult", type="integer", nullable=true)
     */
    private $finalResult;
    
    
    public function __toString()
    {
        return $this->getSelectionProcessCandidate()->__toString(); 
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
     * Set commentGTB
     *
     * @param string $commentGTB
     * @return ResultSPC
     */
    public function setCommentGTB($commentGTB)
    {
        $this->commentGTB = $commentGTB;

        return $this;
    }

    /**
     * Get commentGTB
     *
     * @return string 
     */
    public function getCommentGTB()
    {
        return $this->commentGTB;
    }

    /**
     * Set commentPMA
     *
     * @param string $commentPMA
     * @return ResultSPC
     */
    public function setCommentPMA($commentPMA)
    {
        $this->commentPMA = $commentPMA;

        return $this;
    }

    /**
     * Get commentPMA
     *
     * @return string 
     */
    public function getCommentPMA()
    {
        return $this->commentPMA;
    }

    /**
     * Set commentICE
     *
     * @param string $commentICE
     * @return ResultSPC
     */
    public function setCommentICE($commentICE)
    {
        $this->commentICE = $commentICE;

        return $this;
    }

    /**
     * Get commentICE
     *
     * @return string 
     */
    public function getCommentICE()
    {
        return $this->commentICE;
    }

    /**
     * Set commentESC
     *
     * @param string $commentESC
     * @return ResultSPC
     */
    public function setCommentESC($commentESC)
    {
        $this->commentESC = $commentESC;

        return $this;
    }

    /**
     * Get commentESC
     *
     * @return string 
     */
    public function getCommentESC()
    {
        return $this->commentESC;
    }

    /**
     * Set strengths
     *
     * @param string $strengths
     * @return ResultSPC
     */
    public function setStrengths($strengths)
    {
        $this->strengths = $strengths;

        return $this;
    }

    /**
     * Get strengths
     *
     * @return string 
     */
    public function getStrengths()
    {
        return $this->strengths;
    }

    /**
     * Set improvementOpportunities
     *
     * @param string $improvementOpportunities
     * @return ResultSPC
     */
    public function setImprovementOpportunities($improvementOpportunities)
    {
        $this->improvementOpportunities = $improvementOpportunities;

        return $this;
    }

    /**
     * Get improvementOpportunities
     *
     * @return string 
     */
    public function getImprovementOpportunities()
    {
        return $this->improvementOpportunities;
    }

    /**
     * Set recommendation
     *
     * @param string $recommendation
     * @return ResultSPC
     */
    public function setRecommendation($recommendation)
    {
        $this->recommendation = $recommendation;

        return $this;
    }

    /**
     * Get recommendation
     *
     * @return string 
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * Set finalResult
     *
     * @param integer $finalResult
     * @return ResultSPC
     */
    public function setFinalResult($finalResult)
    {
        $this->finalResult = $finalResult;

        return $this;
    }

    /**
     * Get finalResult
     *
     * @return integer 
     */
    public function getFinalResult()
    {
        return $this->finalResult;
    }
}

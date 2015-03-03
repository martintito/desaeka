<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart5DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart5DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart5SP", inversedBy="pmaPart5DetailSPs")
     * @ORM\JoinColumn(name="pmaPart5SP_id", referencedColumnName="id")
     */
    protected $pmaPart5SP;

	/**
     * @var integer
     *
     * @ORM\Column(name="numberQuestion", type="integer", nullable=true)
     */
    private $numberQuestion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=255, nullable=true)
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
     * Set pmaPart5SP
     *
     * @param Jaxxes\TestPmaSPBundle\Entity\PmaPart5SP $pmaPart5SP
     */
    public function setPmaPart5SP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart5SP $pmaPart5SP)
    {
        $this->pmaPart5SP = $pmaPart5SP;
    }

    /**
     * Get pmaPart5SP
     *
     * @return Jaxxes\TestPmaSPBundle\Entity\PmaPart5SP
     */
    public function getPmaPart5SP()
    {
        return $this->pmaPart5SP;
    }


	/**
     * Set numberQuestion
     *
     * @param integer $numberQuestion
     * @return PmaPart5SP
     */
    public function setNumberQuestion($numberQuestion)
    {
        $this->numberQuestion = $numberQuestion;

        return $this;
    }

    /**
     * Get numberQuestion
     *
     * @return integer 
     */
    public function getNumberQuestion()
    {
        return $this->numberQuestion;
    } 

    /**
     * Set answer
     *
     * @param string $answer
     * @return PmaPart5DetailSP
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
}

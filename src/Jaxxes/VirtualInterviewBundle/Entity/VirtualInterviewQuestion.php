<?php

namespace Jaxxes\VirtualInterviewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VirtualInterviewQuestion
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class VirtualInterviewQuestion
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
     * @ORM\Column(name="Question", type="string", length=255)
     */
    private $question;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;
        
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\VirtualInterviewBundle\Entity\VirtualInterview")
     */
    protected $VirtualInterview;


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
     * Set question
     *
     * @param string $question
     * @return VirtualInterviewQuestion
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return VirtualInterviewQuestion
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }
        
    
    
    /**
     * Set VirtualInterview
     *
     * @param Jaxxes\VirtualInterviewBundle\Entity\VirtualInterview $VirtualInterview
     */
    public function setVirtualInterview(\Jaxxes\VirtualInterviewBundle\Entity\VirtualInterview $VirtualInterview)
    {
        $this->VirtualInterview = $VirtualInterview;
    }

    /**
     * Get VirtualInterview
     *
     * @return Jaxxes\VirtualInterviewBundle\Entity\VirtualInterview
     */
    public function getVirtualInterview()
    {
        return $this->VirtualInterview;
    }
}

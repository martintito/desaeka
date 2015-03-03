<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * PmaPart3Detail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart3Detail
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
     * @var integer
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="alternativeCorrect", type="string", length=255)
     */
    private $alternativeCorrect;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart3")
     */
    protected $pmaPart3;
    
    /**
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart3DetailAlternative", mappedBy="pmaPart3Detail", cascade={"all"})
     */
    private $pmaPart3DetailAlternatives;
    
    
    
    public function __toString()
    {
        return $this->getQuestion();
    }
    
    public function __construct() {
        $this->pmaPart3DetailAlternatives = new ArrayCollection();
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
     * Set number
     *
     * @param integer $number
     * @return PmaPart3Detail
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return PmaPart3Detail
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
     * Set alternativeCorrect
     *
     * @param string $alternativeCorrect
     * @return PmaPart3Detail
     */
    public function setAlternativeCorrect($alternativeCorrect)
    {
        $this->alternativeCorrect = $alternativeCorrect;

        return $this;
    }

    /**
     * Get alternativeCorrect
     *
     * @return string 
     */
    public function getAlternativeCorrect()
    {
        return $this->alternativeCorrect;
    }
    
    /**
     * Set pmaPart3
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart3 $pmaPart3
     */
    public function setPmaPart3(\Jaxxes\TestPmaBundle\Entity\PmaPart3 $pmaPart3)
    {
        $this->pmaPart3 = $pmaPart3;
    }

    /**
     * Get pmaPart3
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart3
     */
    public function getPmaPart3()
    {
        return $this->pmaPart3;
    }
    
    
    public function getPmaPart3DetailAlternatives() 
    {
        return $this->pmaPart3DetailAlternatives;
    }
    
    /**
     * Add pmaPart3DetailAlternatives
     *
     * @param \Jaxxes\TestPmaBundle\Entity\PmaPart3DetailAlternative $pmaPart3DetailAlternatives
     * @return Project
     */
    public function addPmaPart3DetailAlternatives(\Jaxxes\TestPmaBundle\Entity\PmaPart3DetailAlternative $pmaPart3DetailAlternatives)
    {
        $this->pmaPart3DetailAlternatives[] = $pmaPart3DetailAlternatives;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaBundle\Entity\PmaPart3DetailAlternative $pmaPart3DetailAlternatives
     */
    public function removeSource(\Jaxxes\TestPmaBundle\Entity\PmaPart3DetailAlternative $pmaPart3DetailAlternatives)
    {
        $this->pmaPart3DetailAlternatives->removeElement($pmaPart3DetailAlternatives);
    }
}

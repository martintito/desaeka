<?php

namespace Jaxxes\ResumeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuestionbySection
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class QuestionbySection
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
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="TypeQuestion", type="string", length=255)
     */
    private $typeQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="OriginTable", type="string", length=255)
     */
    private $originTable;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\ResumeBundle\Entity\NivelSelectedByResume")
    */
    protected $nivelSelectedByResume;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="codprint", type="integer", nullable=true )
    */
    protected $codprint;
    

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
     * Set description
     *
     * @param string $description
     * @return QuestionbySection
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set typeQuestion
     *
     * @param string $typeQuestion
     * @return QuestionbySection
     */
    public function setTypeQuestion($typeQuestion)
    {
        $this->typeQuestion = $typeQuestion;

        return $this;
    }

    /**
     * Get typeQuestion
     *
     * @return string 
     */
    public function getTypeQuestion()
    {
        return $this->typeQuestion;
    }

    /**
     * Set originTable
     *
     * @param string $originTable
     * @return QuestionbySection
     */
    public function setOriginTable($originTable)
    {
        $this->originTable = $originTable;

        return $this;
    }

    /**
     * Get originTable
     *
     * @return string 
     */
    public function getOriginTable()
    {
        return $this->originTable;
    }
    
    /**
     * Set nivelSelectedByResume
     *
     * @param Jaxxes\ResumeBundle\Entity\NivelSelectedByResume $nivelSelectedByResume
     */
    public function setnivelSelectedByResume(\Jaxxes\ResumeBundle\Entity\NivelSelectedByResume $nivelSelectedByResume)
    {
        $this->nivelSelectedByResume = $nivelSelectedByResume;
    }
    
    /**
     * Get nivelSelectedByResume
     *
     * @return Jaxxes\ResumeBundle\Entity\NivelSelectedByResume
     */
    public function getnivelSelectedByResume()
    {
        return $this->nivelSelectedByResume;
    }

    /**
     * Set codprint
     *
     * @param integer $codprint
     * @return QuestionbySection
     */
    public function setCodprint($codprint)
    {
        $this->codprint = $codprint;

        return $this;
    }

    /**
     * Get codprint
     *
     * @return integer 
     */
    public function getCodprint()
    {
        return $this->codprint;
    }       
    
}

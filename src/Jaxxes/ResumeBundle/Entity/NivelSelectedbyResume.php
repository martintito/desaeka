<?php

namespace Jaxxes\ResumeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NivelSelectedbyResume
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class NivelSelectedbyResume
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
    * @ORM\ManyToOne(targetEntity="Jaxxes\ResumeBundle\Entity\SectionSelectedByResume")
    */
    protected $sectionSelectedByResume;

    /**
     * @var integer
     *
     * @ORM\Column(name="codprint", type="integer", nullable=true )
    */
    protected $codprint;
    
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200)
     */
    private $name;


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
     * Set name
     *
     * @param string $name
     * @return NivelSelectedbyResume
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
    
        /**
     * Set sectionSelectedByResume
     *
     * @param Jaxxes\ResumeBundle\Entity\SectionSelectedByResume $sectionSelectedByResume
     */
    public function setSectionSelectedByResume(\Jaxxes\ResumeBundle\Entity\SectionSelectedByResume $sectionSelectedByResume)
    {
        $this->sectionSelectedByResume = $sectionSelectedByResume;
    }
    
    /**
     * Get sectionSelectedByResume
     *
     * @return Jaxxes\ResumeBundle\Entity\SectionSelectedByResume
     */
    public function getSectionSelectedByResume()
    {
        return $this->sectionSelectedByResume;
    }

    /**
     * Set codprint
     *
     * @param integer $codprint
     * @return NivelSelectedbyResume
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

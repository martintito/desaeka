<?php

namespace Jaxxes\ResumeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SectionSelectedByResume
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SectionSelectedByResume
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\ResumeBundle\Entity\Resume")
    */
    protected $resume;

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
     * Set name
     *
     * @param string $name
     * @return SectionSelectedByResume
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
     * Set resume
     *
     * @param Jaxxes\ResumeBundle\Entity\Resume $resume
     */
    public function setResume(\Jaxxes\ResumeBundle\Entity\Resume $resume)
    {
        $this->resume = $resume;
    }
    
    /**
     * Get resume
     *
     * @return Jaxxes\ResumeBundle\Entity\Resume
     */
    public function getResume()
    {
        return $this->resume;
    }
    
    /**
     * Set codprint
     *
     * @param integer $codprint
     * @return SectionSelectedByResume
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

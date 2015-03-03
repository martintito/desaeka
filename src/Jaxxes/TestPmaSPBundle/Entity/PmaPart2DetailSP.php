<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * PmaPart2DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart2DetailSP
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
     * @ORM\Column(name="answer", type="string", length=255)
     */
    private $answer;
    
    /**
     * @var string
     *
     * @ORM\Column(name="hiddenAux", type="string", length=255, nullable=true)
     */
    private $hiddenAux;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart2Detail")
     */
    protected $pmaPart2Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart2BlockSP", inversedBy="pmaPart2DetailSPs")
     * @ORM\JoinColumn(name="pmaPart2BlockSP_id", referencedColumnName="id")
     */
    protected $pmaPart2BlockSP;

	/**
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSPAnswer", mappedBy="pmaPart2DetailSP", cascade={"all"})
     */
    private $pmaPart2DetailSPAnswers;

    public function __construct() {
        $this->pmaPart2DetailSPAnswers = new ArrayCollection();
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
     * Set pmaPart2Detail
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart2Detail $pmaPart2Detail
     */
    public function setPmaPart2Detail(\Jaxxes\TestPmaBundle\Entity\PmaPart2Detail $pmaPart2Detail)
    {
        $this->pmaPart2Detail = $pmaPart2Detail;
    }

    /**
     * Get pmaPart2Detail
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart2Detail
     */
    public function getPmaPart2Detail()
    {
        return $this->pmaPart2Detail;
    }
    
    
    /**
     * Set pmaPart2BlockSP
     *
     * @param Jaxxes\TestPmaSPBundle\Entity\PmaPart2BlockSP $pmaPart2BlockSP
     */
    public function setPmaPart2BlockSP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart2BlockSP $pmaPart2BlockSP)
    {
        $this->pmaPart2BlockSP = $pmaPart2BlockSP;
    }

    /**
     * Get pmaPart2BlockSP
     *
     * @return Jaxxes\TestPmaSPBundle\Entity\PmaPart2BlockSP
     */
    public function getPmaPart2BlockSP()
    {
        return $this->pmaPart2BlockSP;
    }
    
    /**
     * Set answer
     *
     * @param string $answer
     * @return PmaPart2DetailSP
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
     * Set hiddenAux
     *
     * @param string $hiddenAux
     * @return PmaPart2DetailSP
     */
    public function setHiddenAux($hiddenAux)
    {
        $this->hiddenAux = $hiddenAux;

        return $this;
    }

    /**
     * Get hiddenAux
     *
     * @return string 
     */
    public function getHiddenAux()
    {
        return $this->hiddenAux;
    }
    
    
    public function getPmaPart2DetailSPAnswers() 
    {
        return $this->pmaPart2DetailSPAnswers;
    }
    
    
    /**
     * Add pmaPart2DetailSPAnswers
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSPAnswer $pmaPart2DetailSPAnswers
     * @return Project
     */
    public function addPmaPart2DetailSPAnswer(\Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSPAnswer $pmaPart2DetailSPAnswers)
    {
        $this->pmaPart2DetailSPAnswers[] = $pmaPart2DetailSPAnswers;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSPAnswer $pmaPart2DetailSPAnswers
     */
    public function removeSource(\Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSPAnswer $pmaPart2DetailSPAnswers)
    {
        $this->pmaPart2DetailSPAnswers->removeElement($pmaPart2DetailSPAnswers);
    }
    
    
}

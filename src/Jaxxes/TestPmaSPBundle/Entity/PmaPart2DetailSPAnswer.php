<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart2DetailSPAnswer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart2DetailSPAnswer
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP")
     */
    protected $pmaPart2DetailSP;

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
     * Set pmaPart2DetailSP
     *
     * @param Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP $pmaPart2DetailSP
     */
    public function setPmaPart2DetailSP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP $pmaPart2DetailSP)
    {
        $this->pmaPart2DetailSP = $pmaPart2DetailSP;
    }

    /**
     * Get pmaPart2DetailSP
     *
     * @return Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP
     */
    public function getPmaPart2DetailSP()
    {
        return $this->pmaPart2DetailSP;
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
}

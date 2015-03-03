<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart1DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart1DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart1Detail")
     */
    protected $gatbPart1Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart1SP", inversedBy="gatbPart1DetailSPs")
     * @ORM\JoinColumn(name="gatbpart1sp_id", referencedColumnName="id")
     */
    protected $gatbPart1SP;

    /**
     * @var boolean
     *
     * @ORM\Column(name="equal", type="boolean", nullable=true)
     */
    private $equal;
    
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
     * Set gatbPart1Detail
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart1Detail $gatbPart1Detail
     */
    public function setGatbPart1Detail(\Jaxxes\TestGatbBundle\Entity\GatbPart1Detail $gatbPart1Detail)
    {
        $this->gatbPart1Detail = $gatbPart1Detail;
    }

    /**
     * Get gatbPart1Detail
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart1Detail
     */
    public function getGatbPart1Detail()
    {
        return $this->gatbPart1Detail;
    }
    
    /**
     * Set gatbPart1SP
     *
     * @param Jaxxes\TestGatbSPBundle\Entity\GatbPart1SP $gatbPart1SP
     */
    public function setGatbPart1SP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart1SP $gatbPart1SP)
    {
        $this->gatbPart1SP = $gatbPart1SP;
    }

    /**
     * Get gatbPart1SP
     *
     * @return Jaxxes\TestGatbSPBundle\Entity\GatbPart1SP
     */
    public function getGatbPart1SP()
    {
        return $this->gatbPart1SP;
    }

    /**
     * Set equal
     *
     * @param boolean $equal
     * @return GatbPart1DetailSP
     */
    public function setEqual($equal)
    {
        $this->equal = $equal;

        return $this;
    }

    /**
     * Get equal
     *
     * @return boolean 
     */
    public function getEqual()
    {
        return $this->equal;
    }
    
    /**
     * Set answer
     *
     * @param string $answer
     * @return GatbPart1DetailSP
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

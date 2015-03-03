<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart5DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart5DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart5Detail")
     */
    protected $gatbPart5Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart5SP", inversedBy="gatbPart5DetailSPs")
     * @ORM\JoinColumn(name="gatbpart5sp_id", referencedColumnName="id")
     */
    protected $gatbPart5SP;

    /**
     * @var string
     *
     * @ORM\Column(name="answer", type="string", length=255)
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
     * Set gatbPart5Detail
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart5Detail $gatbPart5Detail
     */
    public function setGatbPart5Detail(\Jaxxes\TestGatbBundle\Entity\GatbPart5Detail $gatbPart5Detail)
    {
        $this->gatbPart5Detail = $gatbPart5Detail;
    }

    /**
     * Get gatbPart5Detail
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart5Detail
     */
    public function getGatbPart5Detail()
    {
        return $this->gatbPart5Detail;
    }
    
    /**
     * Set gatbPart5SP
     *
     * @param Jaxxes\TestGatbSPBundle\Entity\GatbPart5SP $gatbPart5SP
     */
    public function setGatbPart5SP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart5SP $gatbPart5SP)
    {
        $this->gatbPart5SP = $gatbPart5SP;
    }

    /**
     * Get gatbPart5SP
     *
     * @return Jaxxes\TestGatbSPBundle\Entity\GatbPart5SP
     */
    public function getGatbPart5SP()
    {
        return $this->gatbPart5SP;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return GatbPart5DetailSP
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

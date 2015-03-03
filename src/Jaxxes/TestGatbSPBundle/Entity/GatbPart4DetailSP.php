<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart4DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart4DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart4Detail")
     */
    protected $gatbPart4Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart4SP", inversedBy="gatbPart4DetailSPs")
     * @ORM\JoinColumn(name="gatbpart4sp_id", referencedColumnName="id")
     */
    protected $gatbPart4SP;

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
     * Set gatbPart4Detail
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart4Detail $gatbPart4Detail
     */
    public function setGatbPart4Detail(\Jaxxes\TestGatbBundle\Entity\GatbPart4Detail $gatbPart4Detail)
    {
        $this->gatbPart4Detail = $gatbPart4Detail;
    }

    /**
     * Get gatbPart4Detail
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart4Detail
     */
    public function getGatbPart4Detail()
    {
        return $this->gatbPart4Detail;
    }
    
    /**
     * Set gatbPart4SP
     *
     * @param Jaxxes\TestGatbSPBundle\Entity\GatbPart4SP $gatbPart4SP
     */
    public function setGatbPart4SP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart4SP $gatbPart4SP)
    {
        $this->gatbPart4SP = $gatbPart4SP;
    }

    /**
     * Get gatbPart4SP
     *
     * @return Jaxxes\TestGatbSPBundle\Entity\GatbPart4SP
     */
    public function getGatbPart4SP()
    {
        return $this->gatbPart4SP;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return GatbPart4DetailSP
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

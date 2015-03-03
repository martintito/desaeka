<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart2DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart2DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart2Detail")
     */
    protected $gatbPart2Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart2SP")
     */
    protected $gatbPart2SP;

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
     * Set gatbPart2Detail
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart2Detail $gatbPart2Detail
     */
    public function setGatbPart2Detail(\Jaxxes\TestGatbBundle\Entity\GatbPart2Detail $gatbPart2Detail)
    {
        $this->gatbPart2Detail = $gatbPart2Detail;
    }

    /**
     * Get gatbPart2Detail
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart2Detail
     */
    public function getGatbPart2Detail()
    {
        return $this->gatbPart2Detail;
    }
    
    /**
     * Set gatbPart2SP
     *
     * @param Jaxxes\TestGatbSPBundle\Entity\GatbPart2SP $gatbPart2SP
     */
    public function setGatbPart2SP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart2SP $gatbPart2SP)
    {
        $this->gatbPart2SP = $gatbPart2SP;
    }

    /**
     * Get gatbPart2SP
     *
     * @return Jaxxes\TestGatbSPBundle\Entity\GatbPart2SP
     */
    public function getGatbPart2SP()
    {
        return $this->gatbPart2SP;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return GatbPart2DetailSP
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

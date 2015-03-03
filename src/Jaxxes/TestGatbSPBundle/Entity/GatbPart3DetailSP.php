<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart3DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart3DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart3Detail")
     */
    protected $gatbPart3Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbSPBundle\Entity\GatbPart3SP", inversedBy="gatbPart3DetailSPs")
     * @ORM\JoinColumn(name="gatbpart3sp_id", referencedColumnName="id")
     */
    protected $gatbPart3SP;

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
     * Set gatbPart3Detail
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart3Detail $gatbPart3Detail
     */
    public function setGatbPart3Detail(\Jaxxes\TestGatbBundle\Entity\GatbPart3Detail $gatbPart3Detail)
    {
        $this->gatbPart3Detail = $gatbPart3Detail;
    }

    /**
     * Get gatbPart3Detail
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart3Detail
     */
    public function getGatbPart3Detail()
    {
        return $this->gatbPart3Detail;
    }
    
    /**
     * Set gatbPart3SP
     *
     * @param Jaxxes\TestGatbSPBundle\Entity\GatbPart3SP $gatbPart3SP
     */
    public function setGatbPart3SP(\Jaxxes\TestGatbSPBundle\Entity\GatbPart3SP $gatbPart3SP)
    {
        $this->gatbPart3SP = $gatbPart3SP;
    }

    /**
     * Get gatbPart3SP
     *
     * @return Jaxxes\TestGatbSPBundle\Entity\GatbPart3SP
     */
    public function getGatbPart3SP()
    {
        return $this->gatbPart3SP;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return GatbPart3DetailSP
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

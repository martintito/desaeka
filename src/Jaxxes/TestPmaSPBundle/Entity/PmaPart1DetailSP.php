<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart1DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart1DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart1Detail")
     */
    protected $pmaPart1Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart1SP", inversedBy="pmaPart1DetailSPs")
     * @ORM\JoinColumn(name="pmaPart1SP_id", referencedColumnName="id")
     */
    protected $pmaPart1SP;

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
     * Set pmaPart1Detail
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart1Detail $pmaPart1Detail
     */
    public function setPmaPart1Detail(\Jaxxes\TestPmaBundle\Entity\PmaPart1Detail $pmaPart1Detail)
    {
        $this->pmaPart1Detail = $pmaPart1Detail;
    }

    /**
     * Get pmaPart1Detail
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart1Detail
     */
    public function getPmaPart1Detail()
    {
        return $this->pmaPart1Detail;
    }
    
    
    /**
     * Set pmaPart1SP
     *
     * @param Jaxxes\TestPmaSPBundle\Entity\PmaPart1SP $pmaPart1SP
     */
    public function setPmaPart1SP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart1SP $pmaPart1SP)
    {
        $this->pmaPart1SP = $pmaPart1SP;
    }

    /**
     * Get pmaPart1SP
     *
     * @return Jaxxes\TestPmaSPBundle\Entity\PmaPart1SP
     */
    public function getPmaPart1SP()
    {
        return $this->pmaPart1SP;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return PmaPart1DetailSP
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

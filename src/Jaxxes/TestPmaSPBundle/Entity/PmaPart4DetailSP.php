<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart4DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart4DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart4Detail")
     */
    protected $pmaPart4Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart4SP", inversedBy="pmaPart4DetailSPs")
     * @ORM\JoinColumn(name="pmaPart4SP_id", referencedColumnName="id")
     */
    protected $pmaPart4SP;

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
     * Set pmaPart4Detail
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart4Detail $pmaPart4Detail
     */
    public function setPmaPart4Detail(\Jaxxes\TestPmaBundle\Entity\PmaPart4Detail $pmaPart4Detail)
    {
        $this->pmaPart4Detail = $pmaPart4Detail;
    }

    /**
     * Get pmaPart4Detail
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart4Detail
     */
    public function getPmaPart4Detail()
    {
        return $this->pmaPart4Detail;
    }
    
    
    /**
     * Set pmaPart4SP
     *
     * @param Jaxxes\TestPmaSPBundle\Entity\PmaPart4SP $pmaPart4SP
     */
    public function setPmaPart4SP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart4SP $pmaPart4SP)
    {
        $this->pmaPart4SP = $pmaPart4SP;
    }

    /**
     * Get pmaPart4SP
     *
     * @return Jaxxes\TestPmaSPBundle\Entity\PmaPart4SP
     */
    public function getPmaPart4SP()
    {
        return $this->pmaPart4SP;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return PmaPart4DetailSP
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

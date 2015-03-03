<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart3DetailSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart3DetailSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart3Detail")
     */
    protected $pmaPart3Detail;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaSPBundle\Entity\PmaPart3SP", inversedBy="pmaPart3DetailSPs")
     * @ORM\JoinColumn(name="pmaPart3SP_id", referencedColumnName="id")
     */
    protected $pmaPart3SP;

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
     * Set pmaPart3Detail
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart3Detail $pmaPart3Detail
     */
    public function setPmaPart3Detail(\Jaxxes\TestPmaBundle\Entity\PmaPart3Detail $pmaPart3Detail)
    {
        $this->pmaPart3Detail = $pmaPart3Detail;
    }

    /**
     * Get pmaPart3Detail
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart3Detail
     */
    public function getPmaPart3Detail()
    {
        return $this->pmaPart3Detail;
    }
    
    
    /**
     * Set pmaPart3SP
     *
     * @param Jaxxes\TestPmaSPBundle\Entity\PmaPart3SP $pmaPart3SP
     */
    public function setPmaPart3SP(\Jaxxes\TestPmaSPBundle\Entity\PmaPart3SP $pmaPart3SP)
    {
        $this->pmaPart3SP = $pmaPart3SP;
    }

    /**
     * Get pmaPart3SP
     *
     * @return Jaxxes\TestPmaSPBundle\Entity\PmaPart3SP
     */
    public function getPmaPart3SP()
    {
        return $this->pmaPart3SP;
    }

    /**
     * Set answer
     *
     * @param string $answer
     * @return PmaPart3DetailSP
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

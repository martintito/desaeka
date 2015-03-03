<?php

namespace Jaxxes\TestICESPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ICESPDetail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ICESPDetail
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestICESPBundle\Entity\ICESP", inversedBy="icespdetails")
     */
    private $icesp;


    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestICEBundle\Entity\ICEDetail")
     */
    private $icedetail; 

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
     * Set answer
     *
     * @param string $answer
     * @return ICESPDetail
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
     * Set icesp
     *
     * @param Jaxxes\TestICESPBundle\Entity\ICESP $icesp
     */
    public function setIcesp($icesp)
    {
        $this->icesp = $icesp;
    }

    /**
     * Get icesp
     *
     * @return Jaxxes\TestICESPBundle\Entity\ICESP
     */
    public function getIcesp()
    {
        return $this->icesp;
    }

    /**
     * Set icedetail
     *
     * @param Jaxxes\TestICEBundle\Entity\ICEDetail $icedetail
     */
    public function setIcedetail($icedetail)
    {
        $this->icedetail = $icedetail;
    }

    /**
     * Get icedetail
     *
     * @return Jaxxes\TestICEBundle\Entity\ICEDetail
     */
    public function getIcedetail()
    {
        return $this->icedetail;
    }    
    
}

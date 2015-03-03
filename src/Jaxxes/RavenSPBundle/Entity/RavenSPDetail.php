<?php

namespace Jaxxes\RavenSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RavenSPDetail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RavenSPDetail
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
     * @ORM\Column(name="answer", type="string", length=1, nullable=True )
     */
    private $answer;
    

    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\RavenSPBundle\Entity\RavenSP")
     */
    private $ravensp; 

    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\RavenBundle\Entity\RavenDetail")
     */
    private $ravenDetail;     

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
     * @return RavenSPDetail
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
     * Set ravenDetail
     *
     * @param Jaxxes\RavenBundle\Entity\RavenDetail $ravenDetail
     */
    public function setRavenDetail($ravenDetail)
    {
        $this->ravenDetail = $ravenDetail;
    }

    /**
     * Get ravenDetail
     *
     * @return Jaxxes\RavenBundle\Entity\RavenDetail
     */
    public function getRavenDetail()
    {
        return $this->ravenDetail;
    }  

    /**
     * Set ravensp
     *
     * @param Jaxxes\RavenSPBundle\Entity\RavenSP $ravensp
     */
    public function setRavensp($ravensp)
    {
        $this->ravensp = $ravensp;
    }

    /**
     * Get ravensp
     *
     * @return Jaxxes\RavenSPBundle\Entity\RavenSP
     */
    public function getRavensp()
    {
        return $this->ravensp;
    }         
}

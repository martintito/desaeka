<?php

namespace Jaxxes\EscudoSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EscudoSPDetail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EscudoSPDetail
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
     * @ORM\Column(name="answer", type="string", length=10000, nullable=true )
     */
    private $answer;
    
     /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\EscudoSPBundle\Entity\EscudoSP", inversedBy="escudospdetails")
     * @ORM\JoinColumn(name="escudosp_id", referencedColumnName="id")
     */
    private $escudoSP;


    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\EscudoBundle\Entity\EscudoDetail")
     */
    private $escudodetail;


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
     * @return EscudoSPDetail
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
     * Set escudoSP
     *
     * @param Jaxxes\EscudoSPBundle\Entity\EscudoSP $escudoSP
     */
    public function setEscudoSP($escudoSP)
    {
        $this->escudoSP = $escudoSP;
    }

    /**
     * Get escudoSP
     *
     * @return Jaxxes\EscudoSPBundle\Entity\EscudoSP
     */
    public function getEscudoSP()
    {
        return $this->escudoSP;
    }

    /**
     * Set escudodetail
     *
     * @param Jaxxes\EscudoBundle\Entity\EscudoDetail $escudodetail
     */
    public function setEscudodetail($escudodetail)
    {
        $this->escudodetail = $escudodetail;
    }

    /**
     * Get escudodetail
     *
     * @return Jaxxes\EscudoBundle\Entity\EscudoDetail
     */
    public function getEscudodetail()
    {
        return $this->escudodetail;
    }
     
}

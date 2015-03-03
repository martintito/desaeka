<?php

namespace Jaxxes\EscudoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EscudoDetail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EscudoDetail
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
     * @var integer
     *
     * @ORM\Column(name="number", type="integer", nullable = true)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\EscudoBundle\Entity\Escudo")
     */
    private $escudo;

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
     * Set number
     *
     * @param integer $number
     * @return EscudoDetail
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return EscudoDetail
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set escudo
     *
     * @param Jaxxes\EscudoBundle\Entity\Escudo $Escudo
     */
    public function setEscudo(\Jaxxes\EscudoBundle\Entity\Escudo $Escudo)
    {
        $this->escudo = $Escudo;
    }

    /**
     * Get escudo
     *
     * @return Jaxxes\EscudoBundle\Entity\Escudo
     */
    public function getEscudo()
    {
        return $this->escudo;
    }    
    
}

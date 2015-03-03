<?php

namespace Jaxxes\TestICEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ICEDetail
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ICEDetail
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
     * @ORM\Column(name="number", type="integer")
     */
    private $number;    

    /**
     * @var integer
     *
     * @ORM\Column(name="pair", type="integer" , nullable= true)
     */
    private $pair;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=1)
     */
    private $type; 

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestICEBundle\Entity\ICE")
     */
    private $ice;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

	public function __toString(){
	
		return $this->getQuestion();
	}

    /**
     * Set question
     *
     * @param string $question
     * @return ICEDetail
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
     * Set pair
     *
     * @param integer $pair
     * @return ICEDetail
     */
    public function setPair($pair)
    {
        $this->pair = $pair;

        return $this;
    }

    /**
     * Get pair
     *
     * @return integer 
     */
    public function getPair()
    {
        return $this->pair;
    }       
    
    /**
     * Set number
     *
     * @param integer $number
     * @return ICEDetail
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
     * Set type
     *
     * @param string $type
     * @return ICEDetail
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }     

    /**
     * Set ice
     *
     * @param Jaxxes\TestICEBundle\Entity\ICE $ice
     */
    public function setIce(\Jaxxes\TestICEBundle\Entity\ice $ice)
    {
        $this->ice = $ice;
    }

    /**
     * Get ICE
     *
     * @return Jaxxes\TestICEBundle\Entity\ice
     */
    public function getIce()
    {
        return $this->ice;
    }     
        
}

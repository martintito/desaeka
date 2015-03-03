<?php

namespace Jaxxes\EscudoSPBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * EscudoSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class EscudoSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\EscudoBundle\Entity\Escudo")
     */
    private $escudo;

    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate")
     */
    private $selectionprocesscandidate;

	/**
	 * @ORM\OneToMany(targetEntity="Jaxxes\EscudoSPBundle\Entity\EscudoSPDetail", mappedBy="escudoSP", cascade={"all"})
	 */

	private $escudospdetails;

    public function __construct() {
        $this->escudospdetails = new ArrayCollection();
        
    }

	public function __toString(){
	
		return $this->getEscudo();
	}
	
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
     * Set escudo
     *
     * @param Jaxxes\EscudoBundle\Entity\Escudo $escudo
     */
    public function setEscudo($escudo)
    {
        $this->escudo = $escudo;

        return $this;
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

    /**
     * Set selectionprocesscandidate
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $Selectionprocesscandidate
     */     
    public function setSelectionprocesscandidate($Selectionprocesscandidate)
    {
        $this->selectionprocesscandidate = $Selectionprocesscandidate;

        return $this;
    }

    /**
     * Get selectionprocesscandidate
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate
     */     
    public function getSelectionprocesscandidate()
    {
        return $this->selectionprocesscandidate;
    }
    
	/**
	 * Add escudospdetails
	 * @param \Jaxxes\EscudoSPBundle\Entity\EscudoSPDetail $escudospdetails
	 * return EscudoSP
	 * */
    
    public function addEscudospdetails(\Jaxxes\EscudoSPBundle\Entity\EscudoSPDetail $escudospdetails  )
    {
		$this->escudospdetails[]=$escudospdetails;
		return $this;
	}
    
	public function getEscudospdetails() 
    {
        return $this->escudospdetails;         
    }    
    /*
    public function setEscudospdetails() 
    {
        return $this->escudospdetails = new ArrayCollection();        
    } */ 
    
}

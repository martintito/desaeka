<?php

namespace Jaxxes\TestICESPBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * ICESP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ICESP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestICEBundle\Entity\ICE")
     */
    private $ice;

    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate")
     */
    private $selectionprocesscandidate;

	/**
	 * @ORM\OneToMany(targetEntity="Jaxxes\TestICESPBundle\Entity\ICESPDetail", mappedBy="ICESP", cascade={"persist", "remove"} )
	 */

	private $icespdetails;

    /**
     * @var smallint
     *
     * @ORM\Column(name="numberBlanck", type="smallint", nullable = true )
     */
	private $numberBlanck;

    /**
     * @var float
     *
     * @ORM\Column(name="Porcentaje_Omision", type="float", nullable = true)
     */
	private $porcentaje_omision;

    /**
     * @var smallint
     *
     * @ORM\Column(name="imp_positiva", type="smallint", nullable = true)
     */	
	private $imp_positiva;

    /**
     * @var smallint
     *
     * @ORM\Column(name="ce_imp_positiva", type="smallint", nullable = true)
     */	
	private $ce_imp_positiva;
	
    /**
     * @var smallint
     *
     * @ORM\Column(name="imp_negativa", type="smallint" , nullable = true)
     */	
	private $imp_negativa;


    /**
     * @var smallint
     *
     * @ORM\Column(name="ce_imp_negativa", type="smallint" , nullable = true)
     */	
	private $ce_imp_negativa;
	
    /**
     * @var smallint
     * 
     * @ORM\Column(name="inconsistencia", type="smallint", nullable = true)
     */
	private $inconsistencia;	

    /**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_CM", type="smallint" , nullable = true)
     */
	private $pd_sub_CM;

    /**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_CM", type="smallint" , nullable = true)
     */
	private $ce_sub_CM;
	
    /**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_SE", type="smallint", nullable = true)
     */
	private $pd_sub_SE;	

    /**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_SE", type="smallint", nullable = true)
     */
	private $ce_sub_SE;	
	
	
    /**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_AE", type="smallint", nullable = true)
     */
	private $pd_sub_AE;

    /**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_AE", type="smallint", nullable = true)
     */
	private $ce_sub_AE;
	
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_AR", type="smallint", nullable = true)
     */
	private $pd_sub_AR;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_AR", type="smallint", nullable = true)
     */
	private $ce_sub_AR;
		
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_IN", type="smallint", nullable = true)
     */
	private $pd_sub_IN;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_IN", type="smallint", nullable = true)
     */
	private $ce_sub_IN;
		
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_RI", type="smallint", nullable = true)
     */
	private $pd_sub_RI;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_RI", type="smallint", nullable = true)
     */
	private $ce_sub_RI;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_RS", type="smallint", nullable = true)
     */
	private $pd_sub_RS;


	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_RS", type="smallint", nullable = true)
     */
	private $ce_sub_RS;
	
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_EM", type="smallint", nullable = true)
     */
	private $pd_sub_EM;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_EM", type="smallint", nullable = true)
     */
	private $ce_sub_EM;
	
		
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_SP", type="smallint", nullable = true)
     */
	private $pd_sub_SP;				

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_SP", type="smallint", nullable = true)
     */
	private $ce_sub_SP;	
	
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_PR", type="smallint", nullable = true)
     */
	private $pd_sub_PR;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_PR", type="smallint", nullable = true)
     */
	private $ce_sub_PR;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_FL", type="smallint", nullable = true)
     */
	private $pd_sub_FL;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_FL", type="smallint", nullable = true)
     */
	private $ce_sub_FL;	
		
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_TT", type="smallint", nullable = true)
     */
	private $pd_sub_TT;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_TT", type="smallint", nullable = true)
     */
	private $ce_sub_TT;	
	
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_CI", type="smallint", nullable = true)
     */
	private $pd_sub_CI;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_CI", type="smallint", nullable = true)
     */
	private $ce_sub_CI;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_FE", type="smallint", nullable = true)
     */
	private $pd_sub_FE;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_FE", type="smallint", nullable = true)
     */
	private $ce_sub_FE;
		
	/**
     * @var smallint
     * 
     * @ORM\Column(name="pd_sub_OP", type="smallint", nullable = true)
     */
	private $pd_sub_OP;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_sub_OP", type="smallint", nullable = true)
     */
	private $ce_sub_OP;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="PD_Intrapersonal", type="smallint", nullable = true)
     */
	private $PD_Intrapersonal;	

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_Intrapersonal", type="smallint", nullable = true)
     */
	private $ce_Intrapersonal;	
		
	/**
     * @var smallint
     * 
     * @ORM\Column(name="PD_Interpersonal", type="smallint", nullable = true)
     */
	private $PD_Interpersonal;		

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_Interpersonal", type="smallint", nullable = true)
     */
	private $ce_Interpersonal;	
	
	/**
     * @var smallint
     * 
     * @ORM\Column(name="PD_Adaptabilidad", type="smallint", nullable = true)
     */
	private $PD_Adaptabilidad;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_Adaptabilidad", type="smallint", nullable = true)
     */
	private $ce_Adaptabilidad;
	
	/**
     * @var smallint
     * 
     * @ORM\Column(name="PD_Tensión", type="smallint", nullable = true)
     */
	private $PD_Tension;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_Tensión", type="smallint", nullable = true)
     */
	private $ce_Tension;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="PD_Animo", type="smallint", nullable = true)
     */
	private $PD_Animo;

	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_Animo", type="smallint", nullable = true)
     */
	private $ce_Animo;
		
	/**
     * @var smallint
     * 
     * @ORM\Column(name="PD_Total", type="smallint", nullable = true)
     */
	private $PD_Total;
	
	/**
     * @var smallint
     * 
     * @ORM\Column(name="ce_Total", type="smallint", nullable = true)
     */
	private $ce_Total;		
			
	
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
	
		return $this->getIce();
	}
		
    /**
     * Set ice
     *
     * @param Jaxxes\TestICEBundle\Entity\ICE $ice
     */
    public function setIce($ice)
    {
        $this->ice = $ice;

        return $this;
    }

    /**
     * Get ice
     *
     * @return Jaxxes\TestICEBundle\Entity\ICE 
     */
    public function getIce()
    {
        return $this->ice;
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
	 * Add icespdetails
	 * @param \Jaxxes\TestICESPBundle\Entity\ICESPDetail $icespdetails
	 * return ICESP
	 * */
    
    public function addIcespdetails(\Jaxxes\TestICESPBundle\Entity\ICESPDetail $icespdetails  )
    {
		$this->icespdetails[]=$icespdetails;
		return $this;
	}
    
	public function getICESPDetails() 
    {
        return $this->icespdetails;         
    }    
    
    	public function setICESPDetails() 
    {
        return $this->icespdetails = new ArrayCollection();
        
    } 
 

     /**
     * Set imp_negativa
     *
     * @param smallint $imp_negativa
     * @return ICESP
     */
    public function setImp_negativa($imp_negativa)
    {
        $this->imp_negativa = $imp_negativa;

        return $this;
    }
    
     /**
     * Set ce_imp_negativa
     *
     * @param smallint $ce_imp_negativa
     * @return ICESP
     */
    public function setCe_Imp_negativa($ce_imp_negativa)
    {
        $this->ce_imp_negativa = $ce_imp_negativa;

        return $this;
    }
        

    /**
     * Get inconsistencia
     *
     * @return smallint 
     */
    public function getInconsistencia()
    {
        return $this->inconsistencia;
    }
 
     /**
     * Set inconsistencia
     *
     * @param smallint $inconsistencia
     * @return ICESP
     */
    public function setInconsistencia($inconsistencia)
    {
        $this->inconsistencia = $inconsistencia;

        return $this;
    }


    /**
     * Get ce_imp_negativa
     *
     * @return smallint 
     */
    public function getCe_Imp_negativa()
    {
        return $this->ce_imp_negativa;
    }
 
     /**
     * Set ce_imp_positiva
     *
     * @param smallint $ce_imp_positiva
     * @return ICESP
     */
    public function setCe_Imp_positiva($ce_imp_positiva)
    {
        $this->ce_imp_positiva = $ce_imp_positiva;

        return $this;
    }

    /**
     * Get imp_positiva
     *
     * @return smallint 
     */
    public function getImp_positiva()
    {
        return $this->imp_positiva;
    }

     /**
     * Set imp_positiva
     *
     * @param smallint $imp_positiva
     * @return ICESP
     */
    public function setImp_positiva($imp_positiva)
    {
        $this->imp_positiva=$imp_positiva;
        return $this;
    }
    
    /**
     * Get ce_imp_positiva
     *
     * @return smallint 
     */
    public function get_CE_Imp_positiva()
    {
        return $this->ce_imp_positiva;
    }
    
     /**
     * Set numberBlanck
     *
     * @param smallint $numberBlanck
     * @return ICESP
     */
    public function setNumberBlanck($numberBlanck)
    {
        $this->numberBlanck = $numberBlanck;

        return $this;
    }

    /**
     * Get numberBlanck
     *
     * @return smallint 
     */
    public function getNumberBlanck()
    {
        return $this->numberBlanck;
    } 


     /**
     * Set porcentaje_omision
     *
     * @param smallint $porcentaje_omision
     * @return ICESP
     */
    public function setPorcentaje_omision($porcentaje_omision)
    {
        $this->porcentaje_omision = $porcentaje_omision;

        return $this;
    }

    /**
     * Get porcentaje_omision
     *
     * @return smallint 
     */
    public function getPorcentaje_omision()
    {
        return $this->porcentaje_omision;
    } 

    /**
     * Get pd_sub_CM
     *
     * @return smallint 
     */
    public function getPD_sub_CM()
    {
        return $this->pd_sub_CM;
    }  

    /**
     * Get ce_sub_CM
     *
     * @return smallint 
     */
    public function getCE_sub_CM()
    {
        return $this->ce_sub_CM;
        
    }
    
    /**
     * Set pd_sub_CM
     * 
     * @param smallint $pd_sub_CM
     * @return ICESP     
     */
    public function setPD_sub_CM($pd_sub_CM)
    {
        $this->pd_sub_CM=$pd_sub_CM;
        return $this;
                
    }  
        
     /**
     * Set ce_sub_CM
     *
     * @param smallint $ce_sub_CM
     * @return ICESP
     */
    public function setCE_sub_CM($ce_sub_CM)
    {
        $this->ce_sub_CM = $ce_sub_CM;

        return $this;
    }


     /**
     * Set pd_sub_SE
     *
     * @param smallint $pd_sub_SE
     * @return ICESP
     */
    public function setPD_sub_SE($pd_sub_SE)
    {
        $this->pd_sub_SE = $pd_sub_SE;

        return $this;
    }

     /**
     * Set ce_sub_SE
     *
     * @param smallint $ce_sub_SE
     * @return ICESP
     */
    public function setCE_sub_SE($ce_sub_SE)
    {
        $this->ce_sub_SE = $ce_sub_SE;

        return $this;
    }
    
    /**
     * Get pd_sub_SE
     *
     * @return smallint 
     */
    public function getPD_sub_SE()
    {
        return $this->pd_sub_SE;
    }  
    
    /**
     * Get ce_sub_SE
     *
     * @return smallint 
     */
    public function getCE_sub_SE()
    {
        return $this->ce_sub_SE;
    }
    
     /**
     * Set pd_sub_AE
     *
     * @param smallint $pd_sub_AE
     * @return ICESP
     */
    public function setPD_sub_AE($pd_sub_AE)
    {
        $this->pd_sub_AE = $pd_sub_AE;

        return $this;
    }

     /**
     * Set ce_sub_AE
     *
     * @param smallint $ce_sub_AE
     * @return ICESP
     */
    public function setCE_sub_AE($ce_sub_AE)
    {
        $this->ce_sub_AE = $ce_sub_AE;

        return $this;
    }


    /**
     * Get pd_sub_AE
     *
     * @return smallint 
     */
    public function getPD_sub_AE()
    {
        return $this->pd_sub_AE;
    } 
    
    /**
     * Get ce_sub_AE
     *
     * @return smallint 
     */
    public function getCE_sub_AE()
    {
        return $this->ce_sub_AE;
    }
          
     /**
     * Set pd_sub_AR
     *
     * @param smallint $pd_sub_AR
     * @return ICESP
     */
    public function setPD_sub_AR($pd_sub_AR)
    {
        $this->pd_sub_AR = $pd_sub_AR;

        return $this;
    }

     /**
     * Set ce_sub_AR
     *
     * @param smallint $ce_sub_AR
     * @return ICESP
     */
    public function setCE_sub_AR($ce_sub_AR)
    {
        $this->ce_sub_AR = $ce_sub_AR;

        return $this;
    }
    
    /**
     * Get pd_sub_AR
     *
     * @return smallint 
     */
    public function getPD_sub_AR()
    {
        return $this->pd_sub_AR;
    }  

    /**
     * Get ce_sub_AR
     *
     * @return smallint 
     */
    public function getCE_sub_AR()
    {
        return $this->ce_sub_AR;
    }  
    
     /**
     * Set pd_sub_IN
     *
     * @param smallint $pd_sub_IN
     * @return ICESP
     */
    public function setPD_sub_IN($pd_sub_IN)
    {
        $this->pd_sub_IN = $pd_sub_IN;

        return $this;
    }

     /**
     * Set ce_sub_IN
     *
     * @param smallint $ce_sub_IN
     * @return ICESP
     */
    public function setCE_sub_IN($ce_sub_IN)
    {
        $this->ce_sub_IN = $ce_sub_IN;

        return $this;
    }
    
    /**
     * Get pd_sub_IN
     *
     * @return smallint 
     */
    public function getPD_sub_IN()
    {
        return $this->pd_sub_IN;
    }  

    /**
     * Get ce_sub_IN
     *
     * @return smallint 
     */
    public function getCE_sub_IN()
    {
        return $this->ce_sub_IN;
    }  
    
     /**
     * Set pd_sub_RI
     *
     * @param smallint $pd_sub_RI
     * @return ICESP
     */
    public function setPD_sub_RI($pd_sub_RI)
    {
        $this->pd_sub_RI = $pd_sub_RI;

        return $this;
    }

     /**
     * Set ce_sub_RI
     *
     * @param smallint $ce_sub_RI
     * @return ICESP
     */
    public function setCE_sub_RI($ce_sub_RI)
    {
        $this->ce_sub_RI = $ce_sub_RI;

        return $this;
    }
    
    /**
     * Get pd_sub_RI
     *
     * @return smallint 
     */
    public function getPD_sub_RI()
    {
        return $this->pd_sub_RI;
    }  

    /**
     * Get ce_sub_RI
     *
     * @return smallint 
     */
    public function getCE_sub_RI()
    {
        return $this->ce_sub_RI;
    } 
        
     /**
     * Set pd_sub_RS
     *
     * @param smallint $pd_sub_RS
     * @return ICESP
     */
    public function setPD_sub_RS($pd_sub_RS)
    {
        $this->pd_sub_RS = $pd_sub_RS;

        return $this;
    }

     /**
     * Set ce_sub_RS
     *
     * @param smallint $ce_sub_RS
     * @return ICESP
     */
    public function setCE_sub_RS($ce_sub_RS)
    {
        $this->ce_sub_RS = $ce_sub_RS;

        return $this;
    }
    
    /**
     * Get pd_sub_RS
     *
     * @return smallint 
     */
    public function getPD_sub_RS()
    {
        return $this->pd_sub_RS;
    }  

    /**
     * Get ce_sub_RS
     *
     * @return smallint 
     */
    public function getCE_sub_RS()
    {
        return $this->ce_sub_RS;
    } 
    
     /**
     * Set pd_sub_EM
     *
     * @param smallint $pd_sub_EM
     * @return ICESP
     */
    public function setPD_sub_EM($pd_sub_EM)
    {
        $this->pd_sub_EM = $pd_sub_EM;

        return $this;
    }

     /**
     * Set ce_sub_EM
     *
     * @param smallint $ce_sub_EM
     * @return ICESP
     */
    public function setCE_sub_EM($ce_sub_EM)
    {
        $this->ce_sub_EM = $ce_sub_EM;

        return $this;
    }
    
    /**
     * Get pd_sub_EM
     *
     * @return smallint 
     */
    public function getPD_sub_EM()
    {
        return $this->pd_sub_EM;
    }  

    /**
     * Get ce_sub_EM
     *
     * @return smallint 
     */
    public function getCE_sub_EM()
    {
        return $this->ce_sub_EM;
    } 
    
     /**
     * Set pd_sub_SP
     *
     * @param smallint $pd_sub_SP
     * @return ICESP
     */
    public function setPD_sub_SP($pd_sub_SP)
    {
        $this->pd_sub_SP = $pd_sub_SP;

        return $this;
    }

     /**
     * Set ce_sub_SP
     *
     * @param smallint $ce_sub_SP
     * @return ICESP
     */
    public function setCE_sub_SP($ce_sub_SP)
    {
        $this->ce_sub_SP = $ce_sub_SP;

        return $this;
    }
    
    /**
     * Get pd_sub_SP
     *
     * @return smallint 
     */
    public function getPD_sub_SP()
    {
        return $this->pd_sub_SP;
    }  

    /**
     * Get ce_sub_SP
     *
     * @return smallint 
     */
    public function getCE_sub_SP()
    {
        return $this->ce_sub_SP;
    }
    
     /**
     * Set pd_sub_PR
     *
     * @param smallint $pd_sub_PR
     * @return ICESP
     */
    public function setPD_sub_PR($pd_sub_PR)
    {
        $this->pd_sub_PR = $pd_sub_PR;

        return $this;
    }

     /**
     * Set ce_sub_PR
     *
     * @param smallint $ce_sub_PR
     * @return ICESP
     */
    public function setCE_sub_PR($ce_sub_PR)
    {
        $this->ce_sub_PR = $ce_sub_PR;

        return $this;
    }    

    /**
     * Get pd_sub_PR
     *
     * @return smallint 
     */
    public function getPD_sub_PR()
    {
        return $this->pd_sub_PR;
    }  

    /**
     * Get ce_sub_PR
     *
     * @return smallint 
     */
    public function getCE_sub_PR()
    {
        return $this->ce_sub_PR;
    }  
    
     /**
     * Set pd_sub_FL
     *
     * @param smallint $pd_sub_FL
     * @return ICESP
     */
    public function setPD_sub_FL($pd_sub_FL)
    {
        $this->pd_sub_FL = $pd_sub_FL;

        return $this;
    }

     /**
     * Set ce_sub_FL
     *
     * @param smallint $ce_sub_FL
     * @return ICESP
     */
    public function setCE_sub_FL($ce_sub_FL)
    {
        $this->ce_sub_FL = $ce_sub_FL;

        return $this;
    }
    
    /**
     * Get pd_sub_FL
     *
     * @return smallint 
     */
    public function getPD_sub_FL()
    {
        return $this->pd_sub_FL;
    }

    /**
     * Get ce_sub_FL
     *
     * @return smallint 
     */
    public function getCE_sub_FL()
    {
        return $this->ce_sub_FL;
    }
    
     /**
     * Set pd_sub_TT
     *
     * @param smallint $pd_sub_TT
     * @return ICESP
     */
    public function setPD_sub_TT($pd_sub_TT)
    {
        $this->pd_sub_TT = $pd_sub_TT;

        return $this;
    }

     /**
     * Set ce_sub_TT
     *
     * @param smallint $ce_sub_TT
     * @return ICESP
     */
    public function setCE_sub_TT($ce_sub_TT)
    {
        $this->ce_sub_TT = $ce_sub_TT;

        return $this;
    }
    
    /**
     * Get pd_sub_TT
     *
     * @return smallint 
     */
    public function getPD_sub_TT()
    {
        return $this->pd_sub_TT;
    }    

    /**
     * Get ce_sub_TT
     *
     * @return smallint 
     */
    public function getCE_sub_TT()
    {
        return $this->ce_sub_TT;
    } 
    
     /**
     * Set pd_sub_CI
     *
     * @param smallint $pd_sub_CI
     * @return ICESP
     */
    public function setPD_sub_CI($pd_sub_CI)
    {
        $this->pd_sub_CI = $pd_sub_CI;

        return $this;
    }

     /**
     * Set ce_sub_CI
     *
     * @param smallint $ce_sub_CI
     * @return ICESP
     */
    public function setCE_sub_CI($ce_sub_CI)
    {
        $this->ce_sub_CI = $ce_sub_CI;

        return $this;
    }
    
    /**
     * Get pd_sub_CI
     *
     * @return smallint 
     */
    public function getPD_sub_CI()
    {
        return $this->pd_sub_CI;
    }
 
     /**
     * Get ce_sub_CI
     *
     * @return smallint 
     */
    public function getCE_sub_CI()
    {
        return $this->ce_sub_CI;
    }
    
     /**
     * Set pd_sub_FE
     *
     * @param smallint $pd_sub_FE
     * @return ICESP
     */
    public function setPD_sub_FE($pd_sub_FE)
    {
        $this->pd_sub_FE = $pd_sub_FE;

        return $this;
    }

     /**
     * Set ce_sub_FE
     *
     * @param smallint $ce_sub_FE
     * @return ICESP
     */
    public function setCE_sub_FE($ce_sub_FE)
    {
        $this->ce_sub_FE = $ce_sub_FE;

        return $this;
    }
    
    /**
     * Get pd_sub_FE
     *
     * @return smallint 
     */
    public function getPD_sub_FE()
    {
        return $this->pd_sub_FE;
    }

    /**
     * Get ce_sub_FE
     *
     * @return smallint 
     */
    public function getCE_sub_FE()
    {
        return $this->ce_sub_FE;
    }
    
     /**
     * Set pd_sub_OP
     *
     * @param smallint $pd_sub_OP
     * @return ICESP
     */
    public function setPD_sub_OP($pd_sub_OP)
    {
        $this->pd_sub_OP = $pd_sub_OP;

        return $this;
    }

     /**
     * Set ce_sub_OP
     *
     * @param smallint $ce_sub_OP
     * @return ICESP
     */
    public function setCE_sub_OP($ce_sub_OP)
    {
        $this->ce_sub_OP = $ce_sub_OP;

        return $this;
    }
      
 
     /**
     * Get pd_sub_OP
     *
     * @return smallint 
     */
    public function getPD_sub_OP()
    {
        return $this->pd_sub_OP;
    }  
    

    /**
     * Get ce_sub_OP
     *
     * @return smallint 
     */
    public function getCE_sub_OP()
    {
        return $this->ce_sub_OP;
    }
     
     /**
     * Set PD_Intrapersonal
     *
     * @param smallint $PD_Intrapersonal
     * @return ICESP
     */
    public function setPD_Intrapersonal($PD_Intrapersonal)
    {
        $this->PD_Intrapersonal = $PD_Intrapersonal;

        return $this;
    }
    
     /**
     * Set ce_Intrapersonal
     *
     * @param smallint $ce_Intrapersonal
     * @return ICESP
     */
    public function setCE_Intrapersonal($ce_Intrapersonal)
    {
        $this->ce_Intrapersonal = $ce_Intrapersonal;

        return $this;
    }
        

    /**
     * Get PD_Intrapersonal
     *
     * @return smallint 
     */
    public function getPD_Intrapersonal()
    {
        return $this->PD_Intrapersonal;
    }    
 
     /**
     * Get ce_Intrapersonal
     *
     * @return smallint 
     */
    public function getCE_Intrapersonal()
    {
        return $this->ce_Intrapersonal;
    } 
    
     /**
     * Set PD_Interpersonal
     *
     * @param smallint $PD_Interpersonal
     * @return ICESP
     */
    public function setPD_Interpersonal($PD_Interpersonal)
    {
        $this->PD_Interpersonal = $PD_Interpersonal;

        return $this;
    }

     /**
     * Set ce_Interpersonal
     *
     * @param smallint $ce_Interpersonal
     * @return ICESP
     */
    public function setCE_Interpersonal($ce_Interpersonal)
    {
        $this->ce_Interpersonal = $ce_Interpersonal;

        return $this;
    }
    
    /**
     * Get PD_Interpersonal
     *
     * @return smallint 
     */
    public function getPD_Interpersonal()
    {
        return $this->PD_Interpersonal;
    }    

    /**
     * Get ce_Interpersonal
     *
     * @return smallint 
     */
    public function getCE_Interpersonal()
    {
        return $this->ce_Interpersonal;
    }
    
     /**
     * Set PD_Adaptabilidad
     *
     * @param smallint $PD_Adaptabilidad
     * @return ICESP
     */
    public function setPD_Adaptabilidad($PD_Adaptabilidad)
    {
        $this->PD_Adaptabilidad = $PD_Adaptabilidad;

        return $this;
    }

     /**
     * Set ce_Adaptabilidad
     *
     * @param smallint $ce_Adaptabilidad
     * @return ICESP
     */
    public function setCE_Adaptabilidad($ce_Adaptabilidad)
    {
        $this->ce_Adaptabilidad = $ce_Adaptabilidad;

        return $this;
    }
    
    /**
     * Get PD_Adaptabilidad
     *
     * @return smallint 
     */
    public function getPD_Adaptabilidad()
    {
        return $this->PD_Adaptabilidad;
    }      

    /**
     * Get ce_Adaptabilidad
     *
     * @return smallint 
     */
    public function getCE_Adaptabilidad()
    {
        return $this->ce_Adaptabilidad;
    } 
    
     /**
     * Set PD_Tension
     *
     * @param smallint $PD_Tension
     * @return ICESP
     */
    public function setPD_Tension($PD_Tension)
    {
        $this->PD_Tension = $PD_Tension;

        return $this;
    }

     /**
     * Set ce_Tension
     *
     * @param smallint $ce_Tension
     * @return ICESP
     */
    public function setCE_Tension($ce_Tension)
    {
        $this->ce_Tension = $ce_Tension;

        return $this;
    }
    
    /**
     * Get PD_Tension
     *
     * @return smallint 
     */
    public function getPD_Tension()
    {
        return $this->PD_Tension;
    }

    /**
     * Get ce_Tension
     *
     * @return smallint 
     */
    public function getCE_Tension()
    {
        return $this->ce_Tension;
    }
    
     /**
     * Set PD_Animo
     *
     * @param smallint $PD_Animo
     * @return ICESP
     */
    public function setPD_Animo($PD_Animo)
    {
        $this->PD_Animo = $PD_Animo;

        return $this;
    }

     /**
     * Set ce_Animo
     *
     * @param smallint $ce_Animo
     * @return ICESP
     */
    public function setCE_Animo($ce_Animo)
    {
        $this->ce_Animo = $ce_Animo;

        return $this;
    }
    
    /**
     * Get PD_Animo
     *
     * @return smallint 
     */
    public function getPD_Animo()
    {
        return $this->PD_Animo;
    }

    /**
     * Get ce_Animo
     *
     * @return smallint 
     */
    public function getCE_Animo()
    {
        return $this->ce_Animo;
    }
        
     /**
     * Set PD_Total
     *
     * @param smallint $PD_Total
     * @return ICESP
     */
    public function setPD_Total($PD_Total)
    {
        $this->PD_Total = $PD_Total;

        return $this;
    }

     /**
     * Set ce_Total
     *
     * @param smallint $ce_Total
     * @return ICESP
     */
    public function setCE_Total($ce_Total)
    {
        $this->ce_Total = $ce_Total;

        return $this;
    }
        
    /**
     * Get PD_Total
     *
     * @return smallint 
     */
    public function getPD_Total()
    {
        return $this->PD_Total;
    }

    /**
     * Get ce_Total
     *
     * @return smallint 
     */
    public function getCE_Total()
    {
        return $this->ce_Total;
    }
             
}

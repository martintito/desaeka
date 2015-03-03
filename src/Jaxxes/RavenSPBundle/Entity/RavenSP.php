<?php

namespace Jaxxes\RavenSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RavenSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RavenSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate")
     */
    private $selectionprocesscandidate;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\RavenBundle\Entity\Raven")
     */
    protected $raven;

   /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateStart", type="datetime", nullable=true)
     */
    private $dateStart;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinish", type="datetime", nullable=true)
     */
    private $dateFinish;

    /**
     * @var integer
     *
     * @ORM\Column(name="SerieACorrec", type="integer", nullable=true)
     */
    private $SerieACorrec;    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="SerieBCorrec", type="integer", nullable=true)
     */
    private $SerieBCorrec;

    /**
     * @var integer
     *
     * @ORM\Column(name="SerieCCorrec", type="integer", nullable=true)
     */
    private $SerieCCorrec;

    /**
     * @var integer
     *
     * @ORM\Column(name="SerieDCorrec", type="integer", nullable=true)
     */
    private $SerieDCorrec;        

    /**
     * @var integer
     *
     * @ORM\Column(name="SerieECorrec", type="integer", nullable=true)
     */
    private $SerieECorrec;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consistente", type="boolean", nullable=true)
     */
    private $consistente;    

    /**
     * @var integer
     *
     * @ORM\Column(name="PD_Natural", type="integer", nullable=true)
     */
    private $PD_Natural;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="percentil", type="integer", nullable=true)
     */
    private $percentil;      

    /**
     * @var string
     *
     * @ORM\Column(name="rango", type="string", length=20, nullable=true)
     */
    private $rango;    

    /**
     * @var string
     *
     * @ORM\Column(name="descRango", type="string", length=100, nullable=true)
     */
    private $descRango; 
            
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
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return RavenSP
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateFinish
     *
     * @param \DateTime $dateFinish
     * @return RavenSP
     */
    public function setDateFinish($dateFinish)
    {
        $this->dateFinish = $dateFinish;

        return $this;
    }

    /**
     * Get dateFinish
     *
     * @return \DateTime 
     */
    public function getDateFinish()
    {
        return $this->dateFinish;
    }
    
    /**
     * Set SerieACorrec
     *
     * @param integer $SerieACorrec
     * @return RavenSP
     */
    public function setSerieACorrec($SerieACorrec)
    {
        $this->SerieACorrec = $SerieACorrec;

        return $this;
    }

    /**
     * Get SerieACorrec
     *
     * @return integer 
     */
    public function getSerieACorrec()
    {
        return $this->SerieACorrec;
    }    
        
    /**
     * Set SerieBCorrec
     *
     * @param integer $SerieBCorrec
     * @return RavenSP
     */
    public function setSerieBCorrec($SerieBCorrec)
    {
        $this->SerieBCorrec = $SerieBCorrec;

        return $this;
    }

    /**
     * Get SerieBCorrec
     *
     * @return integer 
     */
    public function getSerieBCorrec()
    {
        return $this->SerieBCorrec;
    }

    /**
     * Set SerieCCorrec
     *
     * @param integer $SerieCCorrec
     * @return RavenSP
     */
    public function setSerieCCorrec($SerieCCorrec)
    {
        $this->SerieCCorrec = $SerieCCorrec;

        return $this;
    }

    /**
     * Get SerieCCorrec
     *
     * @return integer 
     */
    public function getSerieCCorrec()
    {
        return $this->SerieCCorrec;
    }   

    /**
     * Set SerieDCorrec
     *
     * @param integer $SerieDCorrec
     * @return RavenSP
     */
    public function setSerieDCorrec($SerieDCorrec)
    {
        $this->SerieDCorrec = $SerieDCorrec;

        return $this;
    }

    /**
     * Get SerieDCorrec
     *
     * @return integer 
     */
    public function getSerieDCorrec()
    {
        return $this->SerieDCorrec;
    }

    /**
     * Set SerieECorrec
     *
     * @param integer $SerieECorrec
     * @return RavenSP
     */
    public function setSerieECorrec($SerieECorrec)
    {
        $this->SerieECorrec = $SerieECorrec;

        return $this;
    }

    /**
     * Get SerieECorrec
     *
     * @return integer 
     */
    public function getSerieECorrec()
    {
        return $this->SerieECorrec;
    }

    /**
     * Set percentil
     *
     * @param integer $percentil
     * @return RavenSP
     */
    public function setPercentil($percentil)
    {
        $this->percentil = $percentil;

        return $this;
    }

    /**
     * Get percentil
     *
     * @return integer 
     */
    public function getPercentil()
    {
        return $this->percentil;
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
     * Get raven
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate
     */     
    public function getSelectionprocesscandidate()
    {
        return $this->selectionprocesscandidate;
    }

    /**
     * Set raven
     *
     * @param Jaxxes\RavenBundle\Entity\Raven $raven
     */     
    public function setRaven($raven)
    {
        $this->raven = $raven;

        return $this;
    }

    /**
     * Get raven
     *
     * @return Jaxxes\RavenBundle\Entity\raven
     */     
    public function getRaven()
    {
        return $raven->raven;
    }
    
    /**
     * Set consistente
     *
     * @param boolean $consistente
     * @return RavenSP
     */    
    public function setConsistente($consistente)
    {
        $this->consistente = $consistente;

        return $this;
    }

    /**
     * Get consistente
     *
     * @return boolean 
     */    
    public function getConsistente()
    {
        return $raven->consistente;
    }    
 
 
     /**
     * Set PD_Natural
     *
     * @param integer $PD_Natural
     * @return RavenSP
     */
    public function setPD_Natural($PD_Natural)
    {
        $this->PD_Natural = $PD_Natural;

        return $this;
    }

    /**
     * Get PD_Natural
     *
     * @return integer 
     */
    public function getPD_Natural()
    {
        return $this->PD_Natural;
    }
    
    /**
     * Set rango
     *
     * @param string $rango
     * @return RavenSP
     */
    public function setRango($rango)
    {
        $this->rango = $rango;

        return $this;
    }

    /**
     * Get descrango
     *
     * @return string 
     */
    public function getRango()
    {
        return $this->rango;
    }
        
    /**
     * Set descRango
     *
     * @param string $descRango
     * @return RavenSP
     */
    public function setDescrango($descRango)
    {
        $this->descRango = $descRango;

        return $this;
    }

    /**
     * Get descRango
     *
     * @return string 
     */
    public function getDescrango()
    {
        return $this->descRango;
    } 
    
}

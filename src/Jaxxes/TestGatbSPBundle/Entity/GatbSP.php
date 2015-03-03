<?php

namespace Jaxxes\TestGatbSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\Gatb")
     */
    protected $gatb;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate")
    */
    protected $selectionProcessCandidate;

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
    
    public function __toString()
    {
        return $this->getSelectionProcessCandidate()->__toString();
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorQ", type="integer", nullable=true)
     */
    private $valorQ;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorN2", type="integer", nullable=true)
     */
    private $valorN2;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorG3", type="integer", nullable=true)
     */
    private $valorG3;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorS", type="integer", nullable=true)
     */
    private $valorS;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorG4", type="integer", nullable=true)
     */
    private $valorG4;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorV", type="integer", nullable=true)
     */
    private $valorV;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorG5", type="integer", nullable=true)
     */
    private $valorG5;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorN5", type="integer", nullable=true)
     */
    private $valorN5;


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
     * Set gatb
     *
     * @param Jaxxes\TestGatbBundle\Entity\Gatb $gatb
     */
    public function setGatb(\Jaxxes\TestGatbBundle\Entity\Gatb $gatb)
    {
        $this->gatb = $gatb;
    }

    /**
     * Get gatb
     *
     * @return Jaxxes\TestGatbBundle\Entity\Gatb
     */
    public function getGatb()
    {
        return $this->gatb;
    }
    
    /**
     * Set selectionProcessCandidate
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $selectionProcessCandidate
     */
    public function setSelectionProcessCandidate(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate $selectionProcessCandidate)
    {
        $this->selectionProcessCandidate = $selectionProcessCandidate;
    }
    
    /**
     * Get selectionProcessCandidate
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate
     */
    public function getSelectionProcessCandidate()
    {
        return $this->selectionProcessCandidate;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return GatbSP
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
     * @return GatbSP
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
     * Set valorQ
     *
     * @param integer $valorQ
     * @return GatbSP
     */
    public function setValorQ($valorQ)
    {
        $this->valorQ = $valorQ;

        return $this;
    }

    /**
     * Get valorQ
     *
     * @return integer 
     */
    public function getValorQ()
    {
        return $this->valorQ;
    }
    
    /**
     * Set valorN2
     *
     * @param integer $valorN2
     * @return GatbSP
     */
    public function setValorN2($valorN2)
    {
        $this->valorN2 = $valorN2;

        return $this;
    }

    /**
     * Get valorN2
     *
     * @return integer 
     */
    public function getValorN2()
    {
        return $this->valorN2;
    }
    
    /**
     * Set valorG3
     *
     * @param integer $valorG3
     * @return GatbSP
     */
    public function setValorG3($valorG3)
    {
        $this->valorG3 = $valorG3;

        return $this;
    }

    /**
     * Get valorG3
     *
     * @return integer 
     */
    public function getValorG3()
    {
        return $this->valorG3;
    }
    
    /**
     * Set valorS
     *
     * @param integer $valorS
     * @return GatbSP
     */
    public function setValorS($valorS)
    {
        $this->valorS = $valorS;

        return $this;
    }

    /**
     * Get valorS
     *
     * @return integer 
     */
    public function getValorS()
    {
        return $this->valorS;
    }
    
    /**
     * Set valorG4
     *
     * @param integer $valorG4
     * @return GatbSP
     */
    public function setValorG4($valorG4)
    {
        $this->valorG4 = $valorG4;

        return $this;
    }

    /**
     * Get valorG4
     *
     * @return integer 
     */
    public function getValorG4()
    {
        return $this->valorG4;
    }
    
    /**
     * Set valorV
     *
     * @param integer $valorV
     * @return GatbSP
     */
    public function setValorV($valorV)
    {
        $this->valorV = $valorV;

        return $this;
    }

    /**
     * Get valorV
     *
     * @return integer 
     */
    public function getValorV()
    {
        return $this->valorV;
    }
    
    /**
     * Set valorG5
     *
     * @param integer $valorG5
     * @return GatbSP
     */
    public function setValorG5($valorG5)
    {
        $this->valorG5 = $valorG5;

        return $this;
    }

    /**
     * Get valorG5
     *
     * @return integer 
     */
    public function getValorG5()
    {
        return $this->valorG5;
    }
    
    /**
     * Set valorN5
     *
     * @param integer $valorN5
     * @return GatbSP
     */
    public function setValorN5($valorN5)
    {
        $this->valorN5 = $valorN5;

        return $this;
    }

    /**
     * Get valorN5
     *
     * @return integer 
     */
    public function getValorN5()
    {
        return $this->valorN5;
    }
}

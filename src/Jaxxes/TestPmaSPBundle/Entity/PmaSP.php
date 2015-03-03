<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaSP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaSP
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\Pma")
     */
    protected $pma;
    
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
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorV", type="integer", nullable=true)
     */
    private $valorV;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorE", type="integer", nullable=true)
     */
    private $valorE;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorR", type="integer", nullable=true)
     */
    private $valorR;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorN", type="integer", nullable=true)
     */
    private $valorN;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="valorF", type="integer", nullable=true)
     */
    private $valorF;
    
    public function __toString()
    {
        return $this->getSelectionProcessCandidate()->__toString();
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
     * Set pma
     *
     * @param Jaxxes\TestPmaBundle\Entity\Pma $pma
     */
    public function setPma(\Jaxxes\TestPmaBundle\Entity\Pma $pma)
    {
        $this->pma = $pma;
    }

    /**
     * Get pma
     *
     * @return Jaxxes\TestPmaBundle\Entity\Pma
     */
    public function getPma()
    {
        return $this->pma;
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
     * @return PmaSP
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
     * @return PmaSP
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
     * Set valorV
     *
     * @param integer $valorV
     * @return PmaSP
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
     * Set valorE
     *
     * @param integer $valorE
     * @return PmaSP
     */
    public function setValorE($valorE)
    {
        $this->valorE = $valorE;

        return $this;
    }

    /**
     * Get valorE
     *
     * @return integer 
     */
    public function getValorE()
    {
        return $this->valorE;
    }
    
    
    /**
     * Set valorR
     *
     * @param integer $valorR
     * @return PmaSP
     */
    public function setValorR($valorR)
    {
        $this->valorR = $valorR;

        return $this;
    }

    /**
     * Get valorR
     *
     * @return integer 
     */
    public function getValorR()
    {
        return $this->valorR;
    }
    
    /**
     * Set valorN
     *
     * @param integer $valorN
     * @return PmaSP
     */
    public function setValorN($valorN)
    {
        $this->valorN = $valorN;

        return $this;
    }

    /**
     * Get valorN
     *
     * @return integer 
     */
    public function getValorN()
    {
        return $this->valorN;
    }
    
    /**
     * Set valorF
     *
     * @param integer $valorF
     * @return PmaSP
     */
    public function setValorF($valorF)
    {
        $this->valorF = $valorF;

        return $this;
    }

    /**
     * Get valorF
     *
     * @return integer 
     */
    public function getValorF()
    {
        return $this->valorF;
    }
}

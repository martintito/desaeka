<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaSPAtributo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaSPAtributo
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart5")
     */
    protected $pmaPart5;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess")
    */
    protected $selectionProcess;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="string", length=1, nullable=true)
     */
    private $letra;

    
    
    public function __toString()
    {
        return $this->getSelectionProcess()->__toString();
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
     * Set pmaPart5
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart5 $pmaPart5
     */
    public function setPmaPart5(\Jaxxes\TestPmaBundle\Entity\PmaPart5 $pmaPart5)
    {
        $this->pmaPart5 = $pmaPart5;
    }

    /**
     * Get pmaPart5
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart5
     */
    public function getPmaPart5()
    {
        return $this->pmaPart5;
    }
    
    /**
     * Set selectionProcess
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess $selectionProcess
     */
    public function setSelectionProcess(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess $selectionProcess)
    {
        $this->selectionProcess = $selectionProcess;
    }
    
    /**
     * Get selectionProcess
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess
     */
    public function getSelectionProcess()
    {
        return $this->selectionProcess;
    }

    /**
     * Set letra
     *
     * @param string $letra
     * @return PmaSPAtributo
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;

        return $this;
    }

    /**
     * Get letra
     *
     * @return string 
     */
    public function getLetra()
    {
        return $this->letra;
    }

}

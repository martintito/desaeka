<?php

namespace Jaxxes\RolBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegisterDefinitionRol
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RegisterDefinitionRol
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_rol", type="string", length=255, nullable=true)
     */
    private $descRol;

    /**
     * @var string
     *
     * @ORM\Column(name="exp_ant", type="string", length=255, nullable=true)
     */
    private $expAnt;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_years", type="integer")
     */
    private $expYears;

    /**
     * @var string
     *
     * @ORM\Column(name="study_other", type="string", length=255, nullable=true)
     */
    private $studyOther;
    
    /**
     * @var string
     *
     * @ORM\Column(name="labor", type="string", nullable=true)
     */
    private $labor;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess")
     */
    protected $selectionProcess;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\RolBundle\Entity\Rol")
     */
    protected $rol;
    
    
    
    public function __toString()
    {
        return $this->getSelectionProcess()->__toString(). ' - '. $this->getRol()->__toString();
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
     * Set name
     *
     * @param string $name
     * @return RegisterDefinitionRol
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set descRol
     *
     * @param string $descRol
     * @return RegisterDefinitionRol
     */
    public function setDescRol($descRol)
    {
        $this->descRol = $descRol;

        return $this;
    }

    /**
     * Get descRol
     *
     * @return string 
     */
     
    public function getDescRol()
    {
        return $this->descRol;
    }

    /**
     * Set labor
     *
     * @param string $labor
     * @return RegisterDefinitionRol
     */
    public function setLabor($labor)
    {
        $this->labor = $labor;

        return $this;
    }

    /**
     * Get labor
     *
     * @return string 
     */
    public function getLabor()
    {
        return $this->labor;
    }


    /**
     * Set expAnt
     *
     * @param string $expAnt
     * @return RegisterDefinitionRol
     */
    public function setExpAnt($expAnt)
    {
        $this->expAnt = $expAnt;

        return $this;
    }

    /**
     * Get expAnt
     *
     * @return string 
     */
    public function getExpAnt()
    {
        return $this->expAnt;
    }

    /**
     * Set expYears
     *
     * @param integer $expYears
     * @return RegisterDefinitionRol
     */
    public function setExpYears($expYears)
    {
        $this->expYears = $expYears;

        return $this;
    }

    /**
     * Get expYears
     *
     * @return integer 
     */
    public function getExpYears()
    {
        return $this->expYears;
    }

    /**
     * Set studyOther
     *
     * @param string $studyOther
     * @return RegisterDefinitionRol
     */
    public function setStudyOther($studyOther)
    {
        $this->studyOther = $studyOther;

        return $this;
    }

    /**
     * Get studyOther
     *
     * @return string 
     */
    public function getStudyOther()
    {
        return $this->studyOther;
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
     * Set rol
     *
     * @param Jaxxes\RolBundle\Entity\Rol $rol
     */
    public function setRol(\Jaxxes\RolBundle\Entity\Rol $rol)
    {
        $this->rol = $rol;
    }

    /**
     * Get rol
     *
     * @return Jaxxes\RolBundle\Entity\Rol
     */
    public function getRol()
    {
        return $this->rol;
    }
}

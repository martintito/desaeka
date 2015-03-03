<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * PmaPart4
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart4
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
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\Pma")
     */
    protected $pma;
    
    /**
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart4Group", mappedBy="pmaPart4", cascade={"all"})
     */
    private $pmaPart4Groups;
    
    public function __toString()
    {
        return $this->getDescripcion();
    }
    
    public function __construct() {
        $this->pmaPart4Groups = new ArrayCollection();
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return PmaPart4
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
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
    
    
    public function getPmaPart4Groups() 
    {
        return $this->pmaPart4Groups;
    }
    
    /**
     * Add pmaPart4Groups
     *
     * @param \Jaxxes\TestPmaBundle\Entity\PmaPart4Group $pmaPart4Groups
     * @return Project
     */
    public function addPmaPart4Groups(\Jaxxes\TestPmaBundle\Entity\PmaPart4Group $pmaPart4Groups)
    {
        $this->pmaPart4Groups[] = $pmaPart4Groups;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaBundle\Entity\PmaPart4Group $pmaPart4Groups
     */
    public function removeSource(\Jaxxes\TestPmaBundle\Entity\PmaPart4Group $pmaPart4Groups)
    {
        $this->pmaPart4Groups->removeElement($pmaPart4Groups);
    }
}

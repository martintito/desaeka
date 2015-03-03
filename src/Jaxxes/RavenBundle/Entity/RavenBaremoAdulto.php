<?php

namespace Jaxxes\RavenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RavenBaremoAdulto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RavenBaremoAdulto
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
     * @ORM\Column(name="edadMin", type="integer")
     */
    private $edadMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="edadMax", type="integer")
     */
    private $edadMax;
        
    /**
     * @var integer
     *
     * @ORM\Column(name="pn", type="integer")
     */
    private $pn;

    /**
     * @var integer
     *
     * @ORM\Column(name="rangoMin", type="integer")
     */
    private $rangoMin;   
    
    /**
     * @var integer
     *
     * @ORM\Column(name="rangoMax", type="integer")
     */
    private $rangoMax;       
    
    /**
     * @var integer
     *
     * @ORM\Column(name="percentil", type="integer")
     */
    private $percentil;
 
    
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
     * Set edadMin
     *
     * @param integer $edadMin
     * @return RavenBaremoAdulto
     */
    public function setEdadMin($edadMin)
    {
        $this->edadMin = $edadMin;

        return $this;
    }

    /**
     * Get edadMin
     *
     * @return integer 
     */
    public function getEdadMin()
    {
        return $this->edadMin;
    }
    
    /**
     * Set edadMax
     *
     * @param integer $edadMin
     * @return RavenBaremoAdulto
     */
    public function setEdadMax($edadMax)
    {
        $this->edadMax = $edadMax;

        return $this;
    }

    /**
     * Get edadMax
     *
     * @return integer 
     */
    public function getEdadMax()
    {
        return $this->edadMax;
    }    
    
    /**
     * Set pn
     *
     * @param integer $pn
     * @return RavenBaremoAdulto
     */
    public function setPn($pn)
    {
        $this->pn = $pn;

        return $this;
    }

    /**
     * Get pn
     *
     * @return integer 
     */
    public function getPn()
    {
        return $this->pn;
    }    

    /**
     * Set rangoMin
     *
     * @param integer $rangoMin
     * @return RavenBaremoAdulto
     */
    public function setRangoMin($rangoMin)
    {
        $this->rangoMin = $rangoMin;

        return $this;
    }

    /**
     * Get rangoMin
     *
     * @return integer 
     */
    public function getRangoMin()
    {
        return $this->rangoMin;
    }
                 
                 
    /**
     * Set rangoMax
     *
     * @param integer $rangoMax
     * @return RavenBaremoAdulto
     */
    public function setRangoMax($rangoMax)
    {
        $this->rangoMax = $rangoMax;

        return $this;
    }

    /**
     * Get rangoMax
     *
     * @return integer 
     */
    public function getRangoMax()
    {
        return $this->rangoMax;
    }
    
    /**
     * Set percentil
     *
     * @param integer $percentil
     * @return RavenBaremoAdulto
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
}

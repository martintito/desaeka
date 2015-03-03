<?php

namespace Jaxxes\RavenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RavenPuntajeNormal
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class RavenPuntajeNormal
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
     * @ORM\Column(name="pn", type="integer")
     */
    private $pn;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="parcialA", type="integer")
     */
    private $parcialA;

    /**
     * @var integer
     *
     * @ORM\Column(name="parcialB", type="integer")
     */
    private $parcialB;   
    
    /**
     * @var integer
     *
     * @ORM\Column(name="parcialC", type="integer")
     */
    private $parcialC;       
    
    /**
     * @var integer
     *
     * @ORM\Column(name="parcialD", type="integer")
     */
    private $parcialD;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="parcialE", type="integer")
     */
    private $parcialE;
    
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
     * Set pn
     *
     * @param integer $pn
     * @return RavenPuntajeNormal
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
     * Set parcialA
     *
     * @param integer $parcialA
     * @return RavenPuntajeNormal
     */
    public function setParcialA($parcialA)
    {
        $this->parcialA = $parcialA;

        return $this;
    }

    /**
     * Get parcialA
     *
     * @return integer 
     */
    public function getParcialA()
    {
        return $this->parcialA;
    }
    
    /**
     * Set parcialB
     *
     * @param integer $parcialB
     * @return RavenPuntajeNormal
     */
    public function setParcialB($parcialB)
    {
        $this->parcialB = $parcialB;

        return $this;
    }

    /**
     * Get parcialB
     *
     * @return integer 
     */
    public function getParcialB()
    {
        return $this->parcialB;
    }    

    /**
     * Set parcialC
     *
     * @param integer $parcialC
     * @return RavenPuntajeNormal
     */
    public function setParcialC($parcialC)
    {
        $this->parcialC = $parcialC;

        return $this;
    }

    /**
     * Get parcialC
     *
     * @return integer 
     */
    public function getParcialC()
    {
        return $this->parcialC;
    }
                 
                 
    /**
     * Set parcialD
     *
     * @param integer $parcialD
     * @return RavenPuntajeNormal
     */
    public function setParcialD($parcialD)
    {
        $this->parcialD = $parcialD;

        return $this;
    }

    /**
     * Get parcialD
     *
     * @return integer 
     */
    public function getParcialD()
    {
        return $this->parcialD;
    }
    
    /**
     * Set parcialE
     *
     * @param integer $parcialE
     * @return RavenPuntajeNormal
     */
    public function setParcialE($parcialE)
    {
        $this->parcialE = $parcialE;

        return $this;
    }

    /**
     * Get parcialE
     *
     * @return integer 
     */
    public function getParcialE()
    {
        return $this->parcialE;
    }    
}

<?php

namespace Jaxxes\TestPmaSPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * Pma5Diccionario
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Pma5Diccionario
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
     * @ORM\Column(name="letra", type="string", length=1, nullable=true)
     */
    private $letra;
    
    /**
     * @var string
     *
     * @ORM\Column(name="palabra", type="string", length=255, nullable=true)
     */
    private $palabra;

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
     * Set letra
     *
     * @param string $letra
     * @return Pma5Diccionario
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
   
    /**
     * Set palabra
     *
     * @param string $palabra
     * @return Pma5Diccionario
     */
    public function setPalabra($palabra)
    {
        $this->palabra = $palabra;

        return $this;
    }

    /**
     * Get palabra
     *
     * @return string 
     */
    public function getPalabra()
    {
        return $this->palabra;
    }    
    
}

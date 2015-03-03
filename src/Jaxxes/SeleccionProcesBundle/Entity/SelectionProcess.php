<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
/**
 * SelectionProcess
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SelectionProcess
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
     * @ORM\ManyToOne(targetEntity="Jaxxes\EnterpriseBundle\Entity\Customer")
     */
    protected $customer;
    
    /**
     * @ORM\OneToMany(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest", mappedBy="selectionProcess", cascade={"all"})
     */
    private $selectionProcessTests;
    
    
    public function __toString()
    {
        return $this->getName();
    }
    
    public function __construct() {
        $this->selectionProcessTests = new ArrayCollection();
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
     * @return SelectionProcess
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
     * Set customer
     *
     * @param Jaxxes\EnterpriseBundle\Entity\Customer $customer
     */
    public function setCustomer(\Jaxxes\EnterpriseBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get customer
     *
     * @return Jaxxes\EnterpriseBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    
    
    
    public function getSelectionProcessTests() 
    {
        return $this->selectionProcessTests;
    }
    
    /**
     * Add selectionProcessTests
     *
     * @param \Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest $selectionProcessTests
     * @return Project
     */
    public function addSelectionProcessTest(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest $selectionProcessTests)
    {
        $this->selectionProcessTests[] = $selectionProcessTests;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest $selectionProcessTests
     */
    public function removeSource(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest $selectionProcessTests)
    {
        $this->selectionProcessTests->removeElement($selectionProcessTests);
    }
}

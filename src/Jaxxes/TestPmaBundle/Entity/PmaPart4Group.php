<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * PmaPart4Group
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart4Group
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
     * @ORM\Column(name="group_int", type="integer")
     */
    private $groupInt;

    /**
     * @var integer
     *
     * @ORM\Column(name="block", type="integer")
     */
    private $block;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart4", inversedBy="pmaPart4Groups")
     * @ORM\JoinColumn(name="pmaPart4_id", referencedColumnName="id")
     */
    protected $pmaPart4;
    
    /**
     * @ORM\OneToMany(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart4Detail", mappedBy="pmaPart4Group", cascade={"all"})
     */
    private $pmaPart4Details;
    
    
    public function __toString()
    {
        return (string)$this->getGroupInt();
    }
    
    public function __construct() {
        $this->pmaPart4Details = new ArrayCollection();
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
     * Set groupInt
     *
     * @param integer $groupInt
     * @return PmaPart4Group
     */
    public function setGroupInt($groupInt)
    {
        $this->groupInt = $groupInt;

        return $this;
    }

    /**
     * Get groupInt
     *
     * @return integer 
     */
    public function getGroupInt()
    {
        return $this->groupInt;
    }

    /**
     * Set block
     *
     * @param integer $block
     * @return PmaPart4Group
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return integer 
     */
    public function getBlock()
    {
        return $this->block;
    }
    
    /**
     * Set pmaPart4
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart4 $pmaPart4
     */
    public function setPmaPart4(\Jaxxes\TestPmaBundle\Entity\PmaPart4 $pmaPart4)
    {
        $this->pmaPart4 = $pmaPart4;
    }

    /**
     * Get pmaPart4
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart4
     */
    public function getPmaPart4()
    {
        return $this->pmaPart4;
    }
    
    
    
    public function getPmaPart4Details() 
    {
        return $this->pmaPart4Details;
    }
    
    /**
     * Add pmaPart4Details
     *
     * @param \Jaxxes\TestPmaBundle\Entity\PmaPart4Detail $pmaPart4Details
     * @return Project
     */
    public function addPmaPart4Details(\Jaxxes\TestPmaBundle\Entity\PmaPart4Detail $pmaPart4Details)
    {
        $this->pmaPart4Details[] = $pmaPart4Details;

        return $this;
    }

    /**
     * Remove sources
     *
     * @param \Jaxxes\TestPmaBundle\Entity\PmaPart4Detail $pmaPart4Details
     */
    public function removeSource(\Jaxxes\TestPmaBundle\Entity\PmaPart4Detail $pmaPart4Details)
    {
        $this->pmaPart4Details->removeElement($pmaPart4Details);
    }
    
}

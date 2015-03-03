<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart3DetailAlternative
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart3DetailAlternative
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
     * @ORM\Column(name="alternative", type="string", length=255)
     */
    private $alternative;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart3Detail", inversedBy="pmaPart3DetailAlternatives")
     * @ORM\JoinColumn(name="pmaPart3Detail_id", referencedColumnName="id")
     */
    protected $pmaPart3Detail;


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
     * Set alternative
     *
     * @param string $alternative
     * @return PmaPart3DetailAlternative
     */
    public function setAlternative($alternative)
    {
        $this->alternative = $alternative;

        return $this;
    }

    /**
     * Get alternative
     *
     * @return string 
     */
    public function getAlternative()
    {
        return $this->alternative;
    }
    
    /**
     * Set pmaPart3Detail
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart3Detail $pmaPart3Detail
     */
    public function setPmaPart3Detail(\Jaxxes\TestPmaBundle\Entity\PmaPart3Detail $pmaPart3Detail)
    {
        $this->pmaPart3Detail = $pmaPart3Detail;
    }

    /**
     * Get pmaPart3Detail
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart3Detail
     */
    public function getPmaPart3Detail()
    {
        return $this->pmaPart3Detail;
    }
}

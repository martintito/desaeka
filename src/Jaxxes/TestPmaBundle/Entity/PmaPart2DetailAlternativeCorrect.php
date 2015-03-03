<?php

namespace Jaxxes\TestPmaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PmaPart2DetailAlternativeCorrect
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PmaPart2DetailAlternativeCorrect
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
     * @ORM\Column(name="alternativeCorrect", type="string", length=255)
     */
    private $alternativeCorrect;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestPmaBundle\Entity\PmaPart2Detail")
     */
    protected $pmaPart2Detail;


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
     * Set alternativeCorrect
     *
     * @param string $alternativeCorrect
     * @return PmaPart2DetailAlternativeCorrect
     */
    public function setAlternativeCorrect($alternativeCorrect)
    {
        $this->alternativeCorrect = $alternativeCorrect;

        return $this;
    }

    /**
     * Get alternativeCorrect
     *
     * @return string 
     */
    public function getAlternativeCorrect()
    {
        return $this->alternativeCorrect;
    }
    
    /**
     * Set pmaPart2Detail
     *
     * @param Jaxxes\TestPmaBundle\Entity\PmaPart2Detail $pmaPart2Detail
     */
    public function setPmaPart2Detail(\Jaxxes\TestPmaBundle\Entity\PmaPart2Detail $pmaPart2Detail)
    {
        $this->pmaPart2Detail = $pmaPart2Detail;
    }

    /**
     * Get pmaPart2Detail
     *
     * @return Jaxxes\TestPmaBundle\Entity\PmaPart2Detail
     */
    public function getPmaPart2Detail()
    {
        return $this->pmaPart2Detail;
    }
}

<?php

namespace Jaxxes\TestGatbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GatbPart2DetailAlternative
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class GatbPart2DetailAlternative
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="alternative", type="string", length=255)
     */
    private $alternative;
    
    /**
     * @ORM\ManyToOne(targetEntity="Jaxxes\TestGatbBundle\Entity\GatbPart2Detail")
     */
    protected $gatbPart2Detail;


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
     * Set code
     *
     * @param string $code
     * @return GatbPart2DetailAlternative
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set alternative
     *
     * @param string $alternative
     * @return GatbPart2DetailAlternative
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
     * Set gatbPart2Detail
     *
     * @param Jaxxes\TestGatbBundle\Entity\GatbPart2Detail $gatbPart2Detail
     */
    public function setGatbPart2Detail(\Jaxxes\TestGatbBundle\Entity\GatbPart2Detail $gatbPart2Detail)
    {
        $this->gatbPart2Detail = $gatbPart2Detail;
    }

    /**
     * Get gatbPart2Detail
     *
     * @return Jaxxes\TestGatbBundle\Entity\GatbPart2Detail
     */
    public function getGatbPart2Detail()
    {
        return $this->gatbPart2Detail;
    }
}

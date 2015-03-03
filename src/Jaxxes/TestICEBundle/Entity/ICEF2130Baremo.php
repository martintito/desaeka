<?php

namespace Jaxxes\TestICEBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ICEF2130Baremo
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ICEF2130Baremo
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
     * @ORM\Column(name="type_scale", type="string", length=10)
     */
    private $typeScale;

    /**
     * @var integer
     *
     * @ORM\Column(name="pd_min", type="smallint")
     */
    private $pdMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="pd_max", type="smallint")
     */
    private $pdMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="ce", type="smallint")
     */
    private $ce;


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
     * Set typeScale
     *
     * @param string $typeScale
     * @return ICEBaremo
     */
    public function setTypeScale($typeScale)
    {
        $this->typeScale = $typeScale;

        return $this;
    }

    /**
     * Get typeScale
     *
     * @return string 
     */
    public function getTypeScale()
    {
        return $this->typeScale;
    }

    /**
     * Set pdMin
     *
     * @param integer $pdMin
     * @return ICEBaremo
     */
    public function setPdMin($pdMin)
    {
        $this->pdMin = $pdMin;

        return $this;
    }

    /**
     * Get pdMin
     *
     * @return integer 
     */
    public function getPdMin()
    {
        return $this->pdMin;
    }

    /**
     * Set pdMax
     *
     * @param integer $pdMax
     * @return ICEBaremo
     */
    public function setPdMax($pdMax)
    {
        $this->pdMax = $pdMax;

        return $this;
    }

    /**
     * Get pdMax
     *
     * @return integer 
     */
    public function getPdMax()
    {
        return $this->pdMax;
    }

    /**
     * Set ce
     *
     * @param integer $cE
     * @return ICEBaremo
     */
    public function setCE($cE)
    {
        $this->ce = $cE;

        return $this;
    }

    /**
     * Get ce
     *
     * @return integer 
     */
    public function getCE()
    {
        return $this->ce;
    }
}

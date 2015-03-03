<?php

namespace Jaxxes\SeleccionProcesBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * SelectionProcessCandidate
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SelectionProcessCandidate implements  UserInterface
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
    * @ORM\ManyToOne(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess")
    */
    protected $selectionProcess;
    
    /**
    * @ORM\ManyToOne(targetEntity="Jaxxes\CandidateBundle\Entity\Candidate")
    */
    protected $candidate;

    /**
    * @ORM\OneToMany(targetEntity="Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewSelectionProcessCandidate", mappedBy="SelectionProcessCandidate", cascade={"persist", "remove"} )
    */
    protected $answers;

    /**
    * @ORM\OneToMany(targetEntity="Jaxxes\SeleccionProcesBundle\Entity\ResumePrivateCandidate", mappedBy="SPCResumePrivate", cascade={"persist", "remove"} )
    */
    protected $answersResumePrivate;
    
        
    /**
     * @var string salt
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true )
     */
    protected $salt;
    
       
    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="usercandidate", type="string", length=255)
     */
    private $usercandidate;
 
    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="dateStart", type="date", nullable=true)
     * @Assert\DateTime()
     */
    private $dateStart;
    
    /**
     * @var string
     *
     * @ORM\Column(name="hourStart", type="string", length=255, nullable=true)
     */
    private $hourStart;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="finishtest", type="boolean", nullable=true)
     */
    private $finishtest;
    
    public function __construct() {
        $this->answers = new ArrayCollection();
        $this->answersResumePrivate = new ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->getCandidate()->__toString();
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
     * Set active
     *
     * @param boolean $active
     * @return SelectionProcessCandidate
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set usercandidate
     *
     * @param string $usercandidate
     * @return SelectionProcessCandidate
     */
    public function setUserCandidate($usercandidate)
    {
        $this->usercandidate = $usercandidate;

        return $this;
    }

    /**
     * Get usercandidate
     *
     * @return string 
     */
    public function getUserCandidate()
    {
        return $this->usercandidate;
    }


    public function getUsername()
    {
        return $this->getUserCandidate();
    }

    /**
     * Set password
     *
     * @param string $password
     * @return SelectionProcessCandidate
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
    /**
     * Set selectionProcess
     *
     * @param Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess $selectionProcess
     */
    public function setSelectionProcess(\Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess $selectionProcess)
    {
        $this->selectionProcess = $selectionProcess;
    }
    
    /**
     * Get selectionProcess
     *
     * @return Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess
     */
    public function getSelectionProcess()
    {
        return $this->selectionProcess;
    }
    
    /**
     * Set candidate
     *
     * @param Jaxxes\CandidateBundle\Entity\Candidate $candidate
     */
    public function setCandidate(\Jaxxes\CandidateBundle\Entity\Candidate $candidate)
    {
        $this->candidate = $candidate;
    }
    
    /**
     * Get candidate
     *
     * @return Jaxxes\CandidateBundle\Entity\Candidate
     */
    public function getCandidate()
    {
        return $this->candidate;
    }
    
	/**
	 * Add answers
	 * @param \Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewSelectionProcessCandidate $answers
	 * return SelectionProcessCandidate
	 * */
    
    public function addAnswer(\Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewSelectionProcessCandidate $answers  )
    {
		$this->answers[]=$answers;
		return $this;
	}
    
	public function getAnswers() 
    {
        return $this->answers;
    }
    
 	/**
	 * Add answersResumePrivate
	 * @param \Jaxxes\SeleccionProcesBundle\Entity\ResumePrivateCandidate $answersResumePrivate
	 * return SelectionProcessCandidate
	 * */   	 
    public function addAnswerResumePrivate(\Jaxxes\SeleccionProcesBundle\Entity\ResumePrivateCandidate $answersResumePrivate  )
    {
		$this->answersResumePrivate[]=$answersResumePrivate;
		return $this;
	}
    
	public function getAnswersResumePrivate() 
    {
        return $this->answersResumePrivate;
    }    
    
    
	function eraseCredentials()
	{
	}
	
    /**
     * Método requerido por la interfaz UserInterface
     */	
	function getRoles()
	{
		return array('ROLE_USUARIO');
	}

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }	
		
    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set dateStart
     *
     * @param datetime $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }	
		
    /**
     * Get dateStart
     *
     * @return datetime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }
    
    /**
     * Set hourStart
     *
     * @param string $hourStart
     */
    public function setHourStart($hourStart)
    {
        $this->hourStart = $hourStart;
    }	
		
    /**
     * Get hourStart
     * 
     * @return string
     */
    public function getHourStart()
    {
        return $this->hourStart;
    }
    
    
    /**
     * Set finishtest
     *
     * @param boolean $finishtest
     * @return SelectionProcessCandidate
     */
    public function setFinishTest($finishtest)
    {
        $this->finishtest = $finishtest;

        return $this;
    }

    /**
     * Get finishtest
     *
     * @return boolean 
     */
    public function getFinishTest()
    {
        return $this->finishtest;
    }
}

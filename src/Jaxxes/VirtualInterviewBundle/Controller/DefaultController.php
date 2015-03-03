<?php

namespace Jaxxes\VirtualInterviewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewSelectionProcessCandidate; 
use Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewQuestion; 
use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;

use Jaxxes\VirtualInterviewBundle\Form\InterviewCandidateType;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VirtualInterviewBundle:Default:index.html.twig', array('name' => $name));
    }
    
}

<?php

namespace Jaxxes\VirtualInterviewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewSelectionProcessCandidate; 
use Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewQuestion; 
use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;

use Jaxxes\VirtualInterviewBundle\Form\InterviewCandidateType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class EVCandidateController extends Controller
{
    /*
    public function indexAction($name)
    {
        return $this->render('VirtualInterviewBundle:Default:index.html.twig', array('name' => $name));
    }
    */
    public function newAction ()    
    {
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entitySPC = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entitySPC->getId();

		$em = $this->getDoctrine()->getManager();	
		
		/* Verifica si ya se han guardado anteriormente las respuesta de la entrevista virtual */
		$entidadVISPC= $em->getRepository('VirtualInterviewBundle:VirtualInterviewSelectionProcessCandidate')->findBy(
			array ('SelectionProcessCandidate'=>$entitySPC->getId()));
		
		if ($entidadVISPC) {
			// this->EditInterview();
			return $this->redirect($this->generateUrl('interview_show', array('entity'=>$entitySPC))); 			
			//throw $this->createNotFoundException('Sus respuestas ya fueron guardadas anteriormente no podra modificar' );
		}
		
		/* Continua solo en el caso para entrevistas nuevas */
	    		
		// entidad candidato	
		$entityCandidate= $entitySPC->getCandidate();
				
		//entidad selection process
		$entitySP= $entitySPC->getSelectionProcess();
						
		// preguntas
		$preguntaList = $em->getRepository('VirtualInterviewBundle:VirtualInterviewQuestion')->findAll(); 	
		
		
		foreach ($preguntaList as $entidadPregunta ){
			$entrevista = new VirtualInterviewSelectionProcessCandidate();
			$entrevista->setVirtualInterviewQuestion($entidadPregunta);		
			$entrevista->setSelectionProcessCandidate($entitySPC);
			
		    $entitySPC->addAnswer($entrevista);
		    
		    $entitySPC->setCandidate($entityCandidate);
		    $entitySPC->setSelectionProcess($entitySP);
		}
			
		$form   = $this->createForm(new InterviewCandidateType(), $entitySPC);
		
		// print "user:... {$user}, proceso:... {$process}" ;
		
		return $this->render('VirtualInterviewBundle:Default:interview.html.twig', array(
             'entity' => $entitySPC,
             'form'   => $form->createView()            
        ));
	}
	
	public function createAction($spc) 
	{									
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entidadspc = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entidadspc->getId();
	    		
		$em = $this->getDoctrine()->getManager();	
					
		
		/* Busqueda de respuesta */
		
		
		$entidadVISPC= $em->getRepository('VirtualInterviewBundle:VirtualInterviewSelectionProcessCandidate')->findBy(
			array ('SelectionProcessCandidate'=>$entidadspc->getId()));
		
		if ($entidadVISPC) {
			return $this->redirect($this->generateUrl('interview_show', array('entity'=>$entidadspc))); 
			/* throw $this->createNotFoundException(
            'Sus respuestas ya fueron guardadas anteriormente no podra modificar' );*/
		}

		$spcTemp = new SelectionProcessCandidate();
		        
        $entidadPregunta = $em->getRepository('VirtualInterviewBundle:VirtualInterviewQuestion')->findAll();	
		$i=0;
		foreach ($entidadPregunta as $Preg){
			$preg = new VirtualInterviewSelectionProcessCandidate();			
			$spcTemp->addAnswer($preg);
			$i = $i +1;
		}		
		
		$request = $this->getRequest();
		$formulario = $this->createForm(new InterviewCandidateType(), $spcTemp);
		$formulario->handleRequest($request);
	
		$i=0;
		/*******************************/
		foreach ($entidadPregunta as $Preg){
									
			$objetoVspc = new VirtualInterviewSelectionProcessCandidate();
			$objetoVspc->setVirtualInterviewQuestion($Preg); 
			$objetoVspc->setSelectionProcessCandidate($entidadspc);
			$objetoVspc->setAnswer($spcTemp->getAnswers()[$i]->getAnswer()); 

			$em->persist($objetoVspc);
			$em->flush();
			$i = $i +1;
		}

		return $this->redirect($this->generateUrl('interview_show', array('entity'=>$entidadspc))); 
	
	}

	public function showAction(){
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	     $entitySPC = $this->get('security.context')->getToken()->getUser();
	     $idspcandidate=$entitySPC->getId();
	    		
		$em = $this->getDoctrine()->getManager();		    		
		$entidadSPC = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($idspcandidate);

        $virtualInterviewSelectionProcessCandidateList = $em->getRepository('VirtualInterviewBundle:VirtualInterviewSelectionProcessCandidate')
                                            ->findBy(array('SelectionProcessCandidate' => $idspcandidate),
                                                     array('id' => 'ASC')
                                                    );
		
 		return $this->render('VirtualInterviewBundle:Default:interviewShow.html.twig', array(
             'entity' => $entidadSPC,             
             'virtualInterviewSelectionProcessCandidateList' => $virtualInterviewSelectionProcessCandidateList
        ));
		
	}
	/*
	public function EditAction(){		
		
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entitySPC = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entitySPC->getId();
	    		
		//$em = $this->getDoctrine()->getManager();
		$form   = $this->createForm(new InterviewCandidateType(), $entitySPC);
 
 		return $this->render('VirtualInterviewBundle:Default:interview.html.twig', array(
             'entity' => $entitySPC,
             'form'   => $form->createView()
             'delete_form' => $deleteForm->createView(),
        ));
                
	}
	*/
}

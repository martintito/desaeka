<?php

namespace Jaxxes\SeleccionProcesBundle\Controller;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess;
use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;
use Jaxxes\SeleccionProcesBundle\Entity\SectionbySelectionProcess;
use Jaxxes\SeleccionProcesBundle\Entity\NivelbySelectionProcess;
use Jaxxes\SeleccionProcesBundle\Entity\QuestionbyProcessSelection;
use Jaxxes\SeleccionProcesBundle\Entity\ResumePrivateCandidate;
use Jaxxes\CandidateBundle\Entity\Candidate;

use Jaxxes\ResumeBundle\Entity\SectionSelectedByResume;
use Jaxxes\ResumeBundle\Entity\NivelSelectedbyResume;
use Jaxxes\ResumeBundle\Entity\QuestionbySection;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Jaxxes\SeleccionProcesBundle\Form\SPCResumePrivateType;
//use Jaxxes\SeleccionProcesBundle\Form\InterviewCandidateType;

class FichaCandidatoController extends Controller
{

	public function FichaCandidateLoad(){
		/*
		 * Carga todas las secciones de la ficha de candidato		 
		 */ 
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();
	    
		/* Obtiene la entidad del Seleccion Process */
	    $entitySP=$entityUser->getSelectionProcess();

	    /* Obtiene todas las secciones del Resume */
	    $em = $this->getDoctrine()->getManager();
		$listSectionResume = $em->getRepository('ResumeBundle:SectionSelectedByResume')->findBy(
			array(),
			array ('id'=>'ASC'));
				
		
		 foreach ($listSectionResume as $objSectionResume) {

			$objSeccionSP = new SectionbySelectionProcess();			
			$objSeccionSP->setSelectionProcess($entitySP);				
			$objSeccionSP->setSectionSelectedByResume($objSectionResume);
			$objSeccionSP->setEnable(true);
			$em->persist($objSeccionSP); 
			
		    $listNivelResume = $em->getRepository('ResumeBundle:NivelSelectedbyResume')->findBy(
				array('sectionSelectedByResume'=>$objSectionResume),
				array ('id'=>'ASC'));

			foreach ($listNivelResume as $objNivelResume)
			{
				//print "objNivelResume: {$objNivelResume->getId()} **";
				$objNivelSP = new NivelbySelectionProcess();			
				$objNivelSP->setNivelSelectedbyResume($objNivelResume);				
				$objNivelSP->setSectionbySelectionProcess($objSeccionSP);
				$objNivelSP->setEnable(true);
				$em->persist($objNivelSP);
				
				$listQuestionResume = $em->getRepository('ResumeBundle:QuestionbySection')->findBy(
					array('nivelSelectedByResume'=>$objNivelResume),
					array ('id'=>'ASC'));
				
				foreach ($listQuestionResume as $objQuestionResume ){
					$objQuestionSP = new QuestionbyProcessSelection();			
					$objQuestionSP->setQuestionbySection($objQuestionResume);				
					$objQuestionSP->setNivelbySelectionProcess($objNivelSP);
					$em->persist($objQuestionSP);
				}				
			}	
		 }
		$em->flush(); 
		
		
		return 0;		
	}
	public function Is_PreguntasCargadas($entityUser){
		
		$em = $this->getDoctrine()->getManager();
	    
		/* Obtiene la entidad del Seleccion Process */
	    $entitySP=$entityUser->getSelectionProcess();
	    	   
		$listSectionResume = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')->findBy(array(
			'selectionProcess'=>$entitySP->getId(),
			'enable'=>true
			));
			
		if (!$listSectionResume) {			
			return 0;
		}
		return 1;
		/*
		 foreach ($listSectionResume as $objSectionResume) {
			print "objSectionResume: objeto section";	   	
			$listNivelResume = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')->findBy(array('sectionbySelectionProcess'=>$objSectionResume->getId()));
			
			foreach ($listNivelResume as $objNivel) {
			
				$listQuestionResume = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')->findBy(array('nivelbySelectionProcess'=>$objNivel->getId()));
				
				if (!$listQuestionResume) {
					print "11-";
					
				 	return 0 ;
					throw $this->createNotFoundException('Error' );	
				}		
			}
		}
		
		return 1;
		*/ 
	}
	
	public function ResumePrivateNewAction(){
		
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			return $this->redirect($this->generateUrl('candidate_login'));			
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();
	    $entitySP=$entityUser->getSelectionProcess();
		/* Verifica que el usuario no haya guardado su ficha anteriormente */
				
		$em = $this->getDoctrine()->getManager();
        
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')
                                            ->findOneBy(array(
                                                        'selectionProcess' => $entityUser->getSelectionProcess()->getId()
                                                        ));
	    
	    $listQuestionResume = $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')->findBy(
			array('SPCResumePrivate'=>$idspcandidate));
	    /* Verifica si ya se ingresaron preguntas*/
	    if ($listQuestionResume) {
			
			return $this->redirect($this->generateUrl('resume_show', array('entity'=>$entityUser))); 
		}
		
		// Se crean las preguntas para el proceso de selección solo si antes no se han cargado
		$PreguntasCargadas=$this->Is_PreguntasCargadas($entityUser);
		
		//throw $this->createNotFoundException('Error' );
		if (!$PreguntasCargadas) {
			$this->FichaCandidateLoad();
		}
				
		// preguntas
		//$preguntaList = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')->findAll(); 	
		
		$sectionList = $em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')->findBy(
			array('selectionProcess'=>$entitySP->getId()),
			array('id'=>'ASC'));
		
		foreach ($sectionList as $sectionObject){
			$nivelList = $em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')->findBy(
				array('sectionbySelectionProcess'=>$sectionObject->getId()),
				array('id'=>'ASC'));
			foreach ($nivelList as $entidadNivel){
				$preguntaList = $em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')->findBy(
					array('nivelbySelectionProcess'=>$entidadNivel->getId()),
					array('id'=>'ASC'));
				foreach ($preguntaList as $entidadPregunta) {
					$entrevista = new ResumePrivateCandidate();
					$entrevista->setQuestionbyProcessSelection($entidadPregunta);		
					$entrevista->setSPCResumePrivate($entityUser);			
					$entityUser->addAnswerResumePrivate($entrevista);
				}	
			}	
			
		}
		/*
		// $i=$i+1;
		foreach ($preguntaList as $entidadPregunta ){
			
			print "$i = {$i}, ";
			print( "Questión: {$entidadPregunta->getQuestionbySection()->getDescription()}, ";
			print( "rpta: {$entidadPregunta->getQuestionbySection()->getDescription()}, ";
			
			$entrevista = new ResumePrivateCandidate();
			$entrevista->setQuestionbyProcessSelection($entidadPregunta);		
			$entrevista->setSPCResumePrivate($entityUser);			
			$entityUser->addAnswerResumePrivate($entrevista);
		}
		*/
		$form   = $this->createForm(new SPCResumePrivateType(), $entityUser);
		return $this->render('SeleccionProcesBundle:Candidate:ResumePrivate.html.twig', array(
			'entity' => $entityUser,
            'entityRegisterDefinitionRol' => $entityRegisterDefinitionRol,
			'form'   => $form->createView()
		));
			
       		
		//print "resultado : {$result}";
	}
	public function ResumePrivateCreateAction(){
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();
	    
		$em = $this->getDoctrine()->getManager();
		$entidadResume= $em->getRepository('SeleccionProcesBundle:ResumePrivateCandidate')->findBy(
			array ('SPCResumePrivate'=>$entityUser->getId()));

		if ($entidadResume) {
			// throw $this->createNotFoundException('Sus respuestas ya fueron guardadas anteriormente no podra modificar' );
			return $this->redirect($this->generateUrl('resume_show', array('entity'=>$entityUser))); 
		}	
		
		/*Obtiene la entidad Selection Process*/
		$entidadSP= $entityUser->getSelectionProcess();
		
		/* Se obtiene el total de preguntas y las preguntas asignadas al proceso de seleccion */
		$spcTemp = new SelectionProcessCandidate();
		//print "entidadSP {$entidadSP->getId()}" ;
		$listEntidadSection=$em->getRepository('SeleccionProcesBundle:SectionbySelectionProcess')->findBy(
			array ('selectionProcess'=>$entidadSP->getId()),
			array ('id'=>'ASC'));
				
		if 	(!$listEntidadSection){
				throw $this->createNotFoundException('Error' );
			}
			
		$TotalQuestionSP = 0;			
		foreach ($listEntidadSection as $objSection ){
			$listEntidadNivel=$em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')->findBy(
				array ('sectionbySelectionProcess'=>$objSection->getId()),
				array ('id'=>'ASC'));
								
			if 	(!$listEntidadNivel){
				throw $this->createNotFoundException('Error' );
			}
			foreach ($listEntidadNivel as $objNivel){
				$listEntidadQuestion=$em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')->findBy(
				array ('nivelbySelectionProcess'=>$objNivel->getId()),
				array ('id'=>'ASC'));
				
				foreach ($listEntidadQuestion as $objQuestion){
					$resp = new ResumePrivateCandidate();			
					$spcTemp->addAnswerResumePrivate($resp);
					$TotalQuestionSP= $TotalQuestionSP + 1;
				}
			}
		}

				        
		$request = $this->getRequest();
		$formulario = $this->createForm(new SPCResumePrivateType(), $spcTemp);
		$formulario->handleRequest($request);

		/*******************************/
		$i=0;
		
		foreach ($listEntidadSection as $objSection ){
			$listEntidadNivel=$em->getRepository('SeleccionProcesBundle:NivelbySelectionProcess')->findBy(
				array ('sectionbySelectionProcess'=>$objSection->getId()),
				array ('id'=>'ASC'));

				//print "objSection {$objSection->getId()}" ;				
				
			foreach ($listEntidadNivel as $objNivel){
				$listEntidadQuestion=$em->getRepository('SeleccionProcesBundle:QuestionbyProcessSelection')->findBy(
				array ('nivelbySelectionProcess'=>$objNivel->getId()), 
				array ('id'=>'ASC'));
				
				//print "objNivel: {$objNivel->getId()} - " ;
				
				foreach ($listEntidadQuestion as $objQuestion){
					
					$rpta =$spcTemp->getAnswersResumePrivate()[$i]->getAnswer();
					
					if ($rpta){						
						$objetoResumePrivate = new ResumePrivateCandidate();			
						$objetoResumePrivate->setAnswer($rpta);
						$objetoResumePrivate->settypeAnswer('string');
						$objetoResumePrivate->setcodeTable('none');					
						$objetoResumePrivate->setSPCResumePrivate($entityUser); 
						$objetoResumePrivate->setQuestionbyProcessSelection($objQuestion);

						$em->persist($objetoResumePrivate);
					
					}
					$i = $i +1;
				}				
			}
				
		}				
		$em->flush();	
		//throw $this->createNotFoundException('pausa' );	
		return $this->redirect($this->generateUrl('resume_show', array('entity'=>$entityUser))); 
		//return $this->render('SeleccionProcesBundle:Candidate:ResumePrivateShow.html.twig', array('entity'=>$entityUser));
	}
    
	public function ResumePrivateShowAction(){
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entitySPC = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entitySPC->getId();
	    		

 		return $this->render('SeleccionProcesBundle:Candidate:ResumePrivateShow.html.twig', array(
             'entity' => $entitySPC,             
        ));
		
	}
} 

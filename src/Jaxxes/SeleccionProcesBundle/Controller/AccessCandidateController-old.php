<?php

namespace Jaxxes\SeleccionProcesBundle\Controller;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess;
use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;
use Jaxxes\SeleccionProcesBundle\Form\SelectionProcessCandidateWelcomeType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class AccessCandidateController extends Controller
{
    public function loginAction(Request $request)
    {
		
		$sesion = $request->getSession();
		// obtener, si existe, el error producido en el último intento de login
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
		} else {
			$error = $sesion->get(SecurityContext::AUTHENTICATION_ERROR);
			$sesion->remove(SecurityContext::AUTHENTICATION_ERROR);
		}	
		//$aux= $sesion->get(SecurityContext::LAST_USERNAME);		
		
		return $this->render('SeleccionProcesBundle:Candidate:login.html.twig', array(
			'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
			'error' => $error
		));
    }
    
    public function welcomeAction()
    {
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
				
		$entidadUser = $this->get('security.context')->getToken()->getUser();	
		print_r($entidadUser);exit;
		$active=$entidadUser->getActive();
		
        $form   = $this->createForm(new SelectionProcessCandidateWelcomeType(), $entidadUser);
		
		if (!$active){
			/*
				$flashBag = $this->get('session')->getFlashBag();
                $flashBag->add('smtc_success', 'El usuario ha expirado');
                $flashBag->add('smtc_success', sprintf('Username: %s', $entidadUser->getUsername()));
             */   
			return $this->redirect($this->generateUrl('candidate_login'));
			// throw $this->createNotFoundException(' La identificación ha caducado, compruebe el usuario y contraseña' );
		}
	
		$em = $this->getDoctrine()->getManager();
		$idCandidate = $entidadUser->getCandidate();
		$entidadCandidate = $em->getRepository('CandidateBundle:Candidate')->find($idCandidate);
	
	    $entidadSP = $entidadUser->getSelectionProcess();
	    $idtemp = $entidadSP->getID(); 
	    $entidadSPT = $em->getRepository('SeleccionProcesBundle:SelectionProcessTest')->findBy(array('selectionProcess' => $idtemp));
	    
	    $duracion = 0;
	    foreach ($entidadSPT as $entidadLista){
			if($entidadLista->getSelected()){
				$entidadDT = $entidadLista->getDefinitionTest();
				$idDT = $entidadDT->getId();
				$entidad = $em->getRepository('DefinitionTestBundle:DefinitionTest')->find($idDT);
				$duracion += $entidad->getTime();
			}
        }
	
        $consultahora= is_null($entidadUser->getHourStart());
		$consultafecha=is_null($entidadUser->getDateStart());
	
		//el previo solo entra si 1 es null y el otro no
		//if (!($consultahora) xor !($consultafecha )) {	
		if (!($consultahora) and !($consultafecha )) {			
			
			$fecha = $entidadUser->getDateStart()->format('d-m-Y');
			// Deberia mostrar solo la página de welcome con la fecha y hora seleccionada sin posibilidad de cambiar
			return $this->render('SeleccionProcesBundle:Candidate:welcomeShow.html.twig', array(
            'entity' => $entidadUser,   
            'candidate' => $entidadCandidate,
            'duracion'=> $duracion,
            'fecha' => $fecha
            ));
            
			//throw $this->createNotFoundException('El usuario y Contraseña ya estan configurado' );
			}
              
        return $this->render('SeleccionProcesBundle:Candidate:welcome.html.twig', array(
            'entity' => $entidadUser,
            'candidate' => $entidadCandidate,
            'duracion'=> $duracion,
            'form'   => $form->createView()
        ));
		
    } 
 
    /*  nuevo Sandra
		recibe usuario
		Verifica si el id existe en selectionprocescandidate
		Verifica si el selectionprocescandidate tiene fecha y hora asignada
		Verifica si recibe datos de fecha y hora desde el form
    */ 
    public function configSaveAction()
    {
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		$entidadUser = $this->get('security.context')->getToken()->getUser();	
		$active=$entidadUser->getActive();
		
		$spcTemp = new SelectionProcessCandidate();	   
		$request = $this->getRequest();
	    $form    = $this->createForm(new SelectionProcessCandidateWelcomeType(), $spcTemp);
	    $form->handleRequest($request);
	    
	    $em = $this->getDoctrine()->getManager();
			
		If(!is_null($entidadUser)){
			
			If(is_null($entidadUser->getDateStart()) or is_null($entidadUser->getHourStart())){
			
				If(is_null($spcTemp->getDateStart()) or is_null($spcTemp->getHourStart())){

					return $this->redirect($this->generateUrl('candidate_login_check' ));
				}
				$datetime1 = new \DateTime("now");
				$datetime2 = $spcTemp->getDateStart(); 
				//compara fecha actual con fecha seleccionada del combo
				If($datetime1>$datetime2){
					return $this->redirect($this->generateUrl('candidate_login_check' ));
				}
				$entidadUser->setDateStart($spcTemp->getDateStart());
				$entidadUser->setHourStart($spcTemp->getHourStart());
		   
				$em->persist($entidadUser);
				$em->flush();	
			}
			
			$idCandidate = $entidadUser->getCandidate();
			$entidadCandidate = $em->getRepository('CandidateBundle:Candidate')->find($idCandidate);
	
			$entidadSP = $entidadUser->getSelectionProcess();
			$idTemp = $entidadSP->getID(); 
			$entidadSPT = $em->getRepository('SeleccionProcesBundle:SelectionProcessTest')->findBy(array('selectionProcess' => $idTemp));
	    
			$duracion = 0;
			foreach ($entidadSPT as $entidadLista){
				if($entidadLista->getSelected()){
					$entidadDT = $entidadLista->getDefinitionTest();
					$idDT = $entidadDT->getId();
					$entidad = $em->getRepository('DefinitionTestBundle:DefinitionTest')->find($idDT);
					$duracion += $entidad->getTime();
				}
			}
			$fecha = $entidadUser->getDateStart()->format('d-m-Y');
			return $this->render('SeleccionProcesBundle:Candidate:welcomeShow.html.twig', array(
				'entity' => $entidadUser,  
				'candidate' => $entidadCandidate,
				'duracion'=> $duracion,
				'fecha' => $fecha    
			));
		}
		throw $this->createNotFoundException('El usuario no se encuentra seleccionado' );	
    }

    public function failureAction()
    {
        //return new Response('Te ayudaremos');
        return $this->render('SeleccionProcesBundle:Candidate:failure.html.twig');
    }        


    public function defaultAction()
	{
		$usuario = $this->get('security.context')->getToken()->getUserCandidate();
		// $nombre = $usuario->getNombre();	
	}


} 

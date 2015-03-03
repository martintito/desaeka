<?php

namespace Jaxxes\EscudoSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jaxxes\EscudoBundle\Entity\Escudo;
use Jaxxes\EscudoBundle\Entity\EscudoDetail;

use Jaxxes\EscudoSPBundle\Entity\EscudoSP;
use Jaxxes\EscudoSPBundle\Entity\EscudoSPDetail;

use Jaxxes\EscudoSPBundle\Form\EscudoSPType;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class EscudoSPController extends Controller
{
    public function newAction()
    {	
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();		       
        
        
        $em = $this->getDoctrine()->getManager();
       
       
        /* Busca prueba escudo sp asociada */
        $entidadEscudoSP = $em->getRepository('EscudoSPBundle:EscudoSP')->find($idspcandidate);

        if (!$entidadEscudoSP){
		
			$entidadEscudo = $em->getRepository('EscudoBundle:Escudo')->findAll();
			$entidadEscudoSP = new EscudoSP();
			$entidadEscudoSP->setSelectionprocesscandidate($entityUser);
			$entidadEscudoSP->setEscudo($entidadEscudo);			
		}
        
        // preguntas
		$preguntaList = $em->getRepository('EscudoBundle:EscudoDetail')->findAll(); 
		
		
		foreach ($preguntaList as $entidadPregunta ){
			$entrevista = new EscudoSPDetail();
			$entrevista->setEscudoSP($entidadEscudoSP);
			$entrevista->setEscudodetail($entidadPregunta);
			$entidadEscudoSP->addEscudospdetails($entrevista);

		}

        $form   = $this->createForm(new EscudoSPType(), $entidadEscudoSP);

        return $this->render('EscudoSPBundle:EscudoSP:new.html.twig', array(
             'entity' => $entidadEscudoSP,
             'form'   => $form->createView()
        ));
        
    }
    
    public function createAction()
    {	
		$em = $this->getDoctrine()->getManager();
		
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();		       
        		
		$listdetail = $em->getRepository('EscudoSPBundle:EscudoSP')->findBy(array ('selectionprocesscandidate'=>$idspcandidate));
		
		if ($listdetail) {
			return $this->redirect($this->generateUrl('test_escudo_show',array('idspc' => $idspcandidate ))); 
		}

		$entity  = new EscudoSP();

        $escudodetail = $em->getRepository('EscudoBundle:EscudoDetail')->findAll();
        
        foreach ($escudodetail as $detalle){
            $entityDetail = new EscudoSPDetail();
            $entity->addEscudospdetails($entityDetail);
        }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new EscudoSPType(), $entity);

        $form->handleRequest($request);
		
        $i = 0;

		foreach ($escudodetail as $detalle){
			if ($entity) {
				$entity->getEscudospdetails()[$i]->setEscudoSP($entity); // entidad EscudoSP
				$entity->getEscudospdetails()[$i]->setEscudodetail($detalle);// entitidad EscudoDetail			
			}
			$i = $i +1;
			
        }
        
        /* busca la entidad spc */
        
        $entity->setSelectionprocesscandidate($entityUser); 
        
        /* busca la entidad Escudo */
        $entidadEscudoLista = $em->getRepository('EscudoBundle:Escudo')->findAll();
        
        foreach ($entidadEscudoLista as $entidadEscudo){
			$entity->setEscudo($entidadEscudo);
        }
        		
        $em->persist($entity);
		$em->flush();
		
		
		return $this->redirect($this->generateUrl('test_escudo_show', array('idspc' => $entity->getId() ))); 
    }

	public function showAction($idspc){
		
		/*
		$em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($process);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion de la entrevista');
        }

        //$deleteForm = $this->createDeleteForm($process);
		*/
        return $this->render('EscudoSPBundle:EscudoSP:show.html.twig');
	}        
	

}

<?php

namespace Jaxxes\RavenSPBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Jaxxes\RavenSPBundle\Entity\RavenSP;
use Jaxxes\RavenSPBundle\Entity\RavenSPDetail;
use Jaxxes\RavenSPBundle\Form\RavenSP6DetailType;
use Jaxxes\RavenSPBundle\Form\RavenSP8DetailType;

class RavenTestController extends Controller
{
    
    public function newAction()
    {	
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();		       
        
        $em = $this->getDoctrine()->getManager();
        
        /* Busca si ya existe objeto ravensp creado */
        $ListRavenSP = $em->getRepository('RavenSPBundle:RavenSP')->findBy(array('selectionprocesscandidate'=>$idspcandidate));
        
        if ($ListRavenSP) {
			return $this->render('RavenSPBundle:Default:show.html.twig', array('message'=>'El examen ya fue resuelto anteriormente'));
		}

		/* se obtiene id de raven */
		$listaraven =$em->getRepository('RavenBundle:Raven')->findAll();
		
		foreach ($listaraven as $objRaven) {
			$TempobjRaven=$objRaven;
		}

		$entityRavenSP = new RavenSP();
		$entityRavenSP->SetRaven($TempobjRaven);
		$entityRavenSP->setSelectionprocesscandidate($entityUser);
		
		$em->persist($entityRavenSP);
		
		$listaravendetail = $em->getRepository('RavenBundle:RavenDetail')->findAll();
		
		Foreach ( $listaravendetail as $objSerie) {
			$objseriesp = new RavenSPDetail();
			$objseriesp->setRavenDetail($objSerie);
			$objseriesp->setRavensp($entityRavenSP);
			$em->persist($objseriesp);
			
		}
				
		$em->flush();
				
		$firstQuestion =$em->getRepository('RavenBundle:RavenDetail')->findOneBy(array('orden'=>'1'));
        $firstEntity =$em->getRepository('RavenSPBundle:RavenSPDetail')->findOneBy(array('ravenDetail'=>$firstQuestion->getId()));
        
        $form   = $this->createForm(new RavenSP6DetailType(), $firstEntity);
        
        return $this->render('RavenSPBundle:Default:new.html.twig', array(
            'entity' => $firstEntity,
            'orden'  =>'1',
            'message'=>'',
            'form'   => $form->createView(),
        ));
        
    }
    
	public function nextAction($idQuestion, $orden){
		/* verifica si el usuario esta logeado */
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();		       
        
		/** Recupera datos del formulario **/
		$objQuestion = new RavenSPDetail();
		
		if($orden<25){	
			$form    = $this->createForm(new RavenSP6DetailType(), $objQuestion);
		}else{			
			$form    = $this->createForm(new RavenSP8DetailType(), $objQuestion);			
		}
        $request = $this->getRequest();
        $form->handleRequest($request);        

		/* Guarda respuesta */
		$em = $this->getDoctrine()->getManager();

		$RavenSP =$em->getRepository('RavenSPBundle:RavenSP')->findOneBy(array ('selectionprocesscandidate'=>$idspcandidate));	
		$Question =$em->getRepository('RavenBundle:RavenDetail')->findOneBy(array('orden'=>$orden));
		//$Serie =$em->getRepository('RavenSPBundle:RavenSPDetail')->find($idQuestion);	
		//print "********{$objQuestion->getAnswer()}********";

		
		$Serie =$em->getRepository('RavenSPBundle:RavenSPDetail')->findOneBy(array(
			'ravenDetail'=>$Question->getId(),
			'ravensp'=>$RavenSP->getId()
			));	
		
		$Serie->setAnswer($objQuestion->getAnswer());
		
		$em->persist($Serie);
		$em->flush();
		//throw $this->createNotFoundException('***');
		$sgte= $orden +1;
	
		if ($sgte>60){
			$this->EvaluarResultados($Serie->getRavensp());
			return $this->render('RavenSPBundle:Default:show.html.twig', array('message'=>'Gracias, por responder'));
		}
		
		/* Se elije el Form */

		if($sgte<25){	
			$form    = $this->createForm(new RavenSP6DetailType(), $objQuestion);
		}else{			
			$form    = $this->createForm(new RavenSP8DetailType(), $objQuestion);			
		}
		
		//$RavenSP =$em->getRepository('RavenSPBundle:RavenSP')->findOneBy(array ('selectionprocesscandidate'=>$idspcandidate));	
		
		/* Busca nueva pregunta */
		$NextQuestion =$em->getRepository('RavenBundle:RavenDetail')->findOneBy(array('orden'=>$sgte));
		$NextSerie =$em->getRepository('RavenSPBundle:RavenSPDetail')->findOneBy(array(
			'ravenDetail'=>$NextQuestion->getId(),
			'ravensp'=>$RavenSP->getId()
			));		
		
        return $this->render('RavenSPBundle:Default:new.html.twig', array(
            'entity' => $NextSerie,
            'orden'  => $sgte,
            'message'=>'',
            'form'   => $form->createView(),
        ));		
			
	}
	
	function EvaluarResultados($objRavenSP){
	 
	 // print 	"objRavenSP: -----{$objRavenSP->getId()}--------";
	 
	 /* Obtencion de Puntajes Directos */
	 $em = $this->getDoctrine()->getManager();
	 //$lstAnswer =$em->getRepository('RavenSPBundle:RavenSPDetail')->findBy(array('ravensp'=>$objRavenSP->getId()));
	 $lstQuestion=$em->getRepository('RavenBundle:RavenDetail')->findAll();
	 
	 $SubTotalA=0;
	 $SubTotalB=0;
	 $SubTotalC=0;
	 $SubTotalD=0;
	 $SubTotalE=0;
	 
	 Foreach ($lstQuestion as $objQuestion){
		$serie = $objQuestion->getBlock();
		
		$ObjRspta= $em->getRepository('RavenSPBundle:RavenSPDetail')->findOneBy(array(
			'ravensp'=>$objRavenSP->getId(),
			'ravenDetail'=>$objQuestion->getId(),
			));
				
		if (!$ObjRspta->getAnswer()){
			$rptaCandidate=0;
		}else{
			$rptaCandidate=$ObjRspta->getAnswer();	
		}
	  $puntaje=0;
	  $rptaCorrect =$objQuestion->getCorrect();
	  if ($rptaCandidate==$rptaCorrect){
		  $puntaje =1;
		}
			
		/* Acumula puntaje segun serie */
		switch ($serie){
			case 'A': $SubTotalA= $SubTotalA + $puntaje; break;
			case 'B': $SubTotalB= $SubTotalB + $puntaje; break;
			case 'C': $SubTotalC= $SubTotalC + $puntaje; break;
			case 'D': $SubTotalD= $SubTotalD + $puntaje; break;
			case 'E': $SubTotalE= $SubTotalE + $puntaje; break;
		}
	 
	 } // Fin de for
	 
	 /* Graba puntaje Directos */
	 //print "SubTotalA : *{$SubTotalA}---------";
	 $objRavenSP->setSerieACorrec($SubTotalA);
	 $objRavenSP->setSerieBCorrec($SubTotalB);
	 $objRavenSP->setSerieCCorrec($SubTotalC);
	 $objRavenSP->setSerieDCorrec($SubTotalD);
	 $objRavenSP->setSerieECorrec($SubTotalE);
	 $em->persist($objRavenSP);
	
	/****** Verifica Consistencia *******/
	/***      Obtencion de puntaje normal para cada serie ***/
	$objRavenSP->setConsistente(true);
	$puntajeTotal= $SubTotalA + $SubTotalB + $SubTotalC + $SubTotalD + $SubTotalE;
	$objRavenSP->setPD_Natural($puntajeTotal);		
	
	// print "puntajeTotal: - {$puntajeTotal}---------";
	$lstPN =$em->getRepository('RavenBundle:RavenPuntajeNormal')->findOneBy(array('pn'=>$puntajeTotal));	
	
	if (!$lstPN) { 
		$puntajeNormal=0;
		$objRavenSP->setConsistente(false);	 
	}else {
		
		//print " parcial A: *{$lstPN->getParcialA()}--";
		$difA = abs($SubTotalA - $lstPN->getParcialA());
		$difB = abs($SubTotalB - $lstPN->getParcialB());
		$difC = abs($SubTotalC - $lstPN->getParcialC());
		$difD = abs($SubTotalD - $lstPN->getParcialD());
		$difE = abs($SubTotalE - $lstPN->getParcialE());		
		if  ($difA>2 or $difB>2 or $difC>2 or $difD>2 or $difE>2) {
		 $objRavenSP->setConsistente(false);
		}		
		
	}	
	/*  edad */
	
		$idCandidate = $objRavenSP->getSelectionprocesscandidate()->getCandidate()->getId();
        $entidadCandidate = $em->getRepository('CandidateBundle:Candidate')->find($idCandidate);
        
        $candidateSexo=$entidadCandidate->getGender();
        
        $candidateBirthdate=$entidadCandidate->getBirthDate();
        $stringBirthdate =$candidateBirthdate->format('Y-m-d');       
		
		$dateBirthdate = new \DateTime($stringBirthdate);		
		$today = new \DateTime();
		
		$age = $dateBirthdate->diff($today)->format('%Y');	
	
	$sql = 'SELECT TT 
			FROM RavenBundle:RavenBaremoAdulto TT
			WHERE TT.edadMin <= :edad
			AND TT.edadMax >= :edad
			AND TT.rangoMin <= :pn
			AND TT.rangoMax >= :pn
			';
	
	$consulta = $em->createQuery($sql);			
	$consulta->setParameter('edad', $age);
	$consulta->setParameter('pn', $puntajeTotal);
	
	$BaremoRAVEN = $consulta->getOneOrNullResult();
	
	if ($BaremoRAVEN) {
		//throw $this->createNotFoundException('Error: Al obtener el valor CE, es probable que no encuentre las tablas asociadas' );
		$Percentil=$BaremoRAVEN->getPercentil();				
	} else {
		$Percentil=0;
	}
	
	$objRavenSP->setPercentil($Percentil);
	
	/* Resultados */
	
	switch ($Percentil){
		case ($Percentil<= 5)					: $rango='V'	; $descRango='Deficiente mental'; break;
		case ($Percentil> 5 and $Percentil<=10)	: $rango='IV -'	; $descRango='Definitivamente inferior en capacidad intelectual al termino medio'; break;
		case ($Percentil>10 and $Percentil<=25)	: $rango='IV'	; $descRango='Definitivamente inferior en capacidad intelectual al termino medio'; break;
		case ($Percentil>25 and $Percentil<=50)	: $rango='III -'; $descRango='Intelectualmente termino medio'; break;
		case ($Percentil>50 and $Percentil<75)	: $rango='III +'; $descRango='Intelectualmente termino medio'; break;
		case ($Percentil>=75 and $Percentil<90)	: $rango='II'	; $descRango='Definitivamente superior en capacidad intelectual al termino medio '; break;
		case ($Percentil>=90 and $Percentil<95)	: $rango='II +'	; $descRango='Definitivamente superior en capacidad intelectual al termino medio '; break;
		case ($Percentil>=95)					: $rango='I'	; $descRango='Intelectualmente superior'; break;		
	}
	
	$objRavenSP->setRango($rango);
	$objRavenSP->setDescrango($descRango);
	
	$em->persist($objRavenSP);
	$em->flush();
    //throw $this->createNotFoundException('-----' );	 
    
	}
	
	public function instAction()
	{
		
		
		return $this->render('RavenSPBundle:Default:instruc.html.twig'
        );	
	}
}


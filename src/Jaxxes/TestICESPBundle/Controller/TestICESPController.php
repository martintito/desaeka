<?php

namespace Jaxxes\TestICESPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestICESPBundle\Form\ICESPType;
use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;


use Jaxxes\TestICESPBundle\Entity\ICESP;
use Jaxxes\TestICESPBundle\Entity\ICESPDetail;

use Jaxxes\TestICEBundle\Entity\ICE;
use Jaxxes\TestICEBundle\Entity\ICEDetail;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class TestICESPController extends Controller
{	
 /*
    public function indexAction($name)
    {
        return $this->render('TestICEBundle:Default:index.html.twig', array('name' => $name));
    }
    
   */ 
     public function newAction($idspc){
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();
	    		
		$em = $this->getDoctrine()->getManager();
        /*Se recupera la entidad del proceso por candidato*/
        $entitySPC = $entityUser; //$em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($idspcandidate);
        
        /* Busca prueba escudo sp asociada */
        $entidadICESP = $em->getRepository('TestICESPBundle:ICESP')->find($entitySPC);
                
        
        if (!$entidadICESP){
			// print " ------- no encuentra escudo SCP -----------";
			
			$ICESPTemp = new ICESP();
			// crear registro para la prueba
			
			$entidadICE = $em->getRepository('TestICEBundle:ICE')->findAll();

			$entidadICESP = new ICESP();
			$entidadICESP->setSelectionprocesscandidate($entitySPC);
			$entidadICESP->setICE($entidadICE);			
		}
                
        // preguntas
		$preguntaList = $em->getRepository('TestICEBundle:ICEDetail')->findAll(); 
		
		
		foreach ($preguntaList as $entidadPregunta ){
			$entrevista = new ICESPDetail();
			$entrevista->setIcesp($entidadICESP);
			$entrevista->setIcedetail($entidadPregunta);
			$entidadICESP->addIcespdetails($entrevista);			
		}        
		
		$form   = $this->createForm(new ICESPType(), $entidadICESP);
				
		return $this->render('TestICESPBundle:ICESP:new.html.twig', array(
             'entity' => $entidadICESP,
             'form'   => $form->createView()
        ));
		// return $this->redirect($this->generateUrl('test_ice_show', array('idspc' => $idspc)));
	 }
	 
	 public function createAction($idspc){
		 			
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();
	    		 			
		$entity  = new ICESP();        
        
        $em = $this->getDoctrine()->getManager();

        $icedetail = $em->getRepository('TestICEBundle:ICEDetail')->findAll();
        
        foreach ($icedetail as $detalle){
            $entityDetail = new ICESPDetail();
            $entity->addIcespdetails($entityDetail);
            // $entity->getEscudospdetails()->add($entityGatbPart3DetailSP);            
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new ICESPType(), $entity);

        $form->handleRequest($request);
		/*Busca si ya existen las respuestas*/
		
		$entityICESP = $em->getRepository('TestICESPBundle:ICESP')->findBy(array('selectionprocesscandidate' => $idspcandidate));
		// print "entidad ICESP {$entityICESP->getId()}";
		if ($entityICESP) {
			//return $this->redirect($this->generateUrl('test_ice_show', array('message' => 'El examen ya fue resuelto anteriormente ' ))); 	
			return $this->render('TestICESPBundle:ICESP:show.html.twig', array('message'=>'El examen ya fue resuelto anteriormente'));
		}
		
		/* busca la entidad spc */
        //$entitySPC = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($idspcandidate);
        $entitySPC = $entityUser;
        $entity->setSelectionprocesscandidate($entityUser);
       
         /* busca la entidad Escudo */
        $entidadIceLista = $em->getRepository('TestICEBundle:ICE')->findAll();
        
        foreach ($entidadIceLista as $elem){
			$entidadICE=$elem;
        }
           
        $entity->setIce($entidadICE);
        
		$em->persist($entity);
        $i = 0;
		foreach ($icedetail as $detalle){
			 $entity->getICESPDetails()[$i]->setIcesp($entity); // entidad ICESP
			 // print "id ICE: {$entitySPC->getId()} ";
			 $entity->getICESPDetails()[$i]->setIcedetail($detalle);// entitidad ICEDetail
			 // print "id ICEDetail: {$detalle->getId()} ";
			 			 
			 $i = $i +1;			
        }	
        /* Calculo de Porcentaje de Omision*/		
        
        
        /* Commit */
        $em->persist($entity);
		$em->flush();

		$i = 0;
		$blank = 0;
		$puntajeAcumulado=0;
		$sum_positiva= 0;
		$sum_negativa= 0;
		$escala_CM = 0;	
		$escala_SE = 0;
		$escala_AE = 0;
		$escala_AR = 0;
		$escala_IN = 0;
		$escala_RI = 0;
		$escala_RS = 0;
		$escala_EM = 0;
		$escala_SP = 0;
		$escala_PR = 0;
		$escala_FL = 0;
		$escala_TT = 0;
		$escala_CI = 0;
		$escala_FE = 0;
		$escala_OP = 0;
		
		// Para el calculo de la escala Interpersonal 
		$value55  = 0;
		$value61  = 0;
		$value72  = 0;
		$value98  = 0;
		$value119 = 0;
		// Para el calculo de la escala Total
		$value11 = 0; 
		$value20 = 0;
		$value23 = 0;
		$value1 = 0;
		$value35 = 0;
		$value62 = 0;
		$value88 = 0;
		$value108 =0;
		
		/* Para el Calculo de valores especiales que se usan para obtener el resultado escala_Interpersonal y escala total */
		$special_array1 = array(55, 61, 72, 98, 119);
		$special_array2 = array(11, 20, 23, 31, 35, 62, 88, 108);
		
		/***** Indice de Inconsistencia *****/
		$elem_pares1 = array(23, 100, 56, 85, 47, 32, 60, 87, 117, 41);
		$elem_pares2 = array(52, 114, 70, 129, 91, 48, 89, 103, 130, 101);
		
		/* Impresion positiva y negativa */
		$elem_impre_positiva = array( 5, 34, 50, 65, 79, 94, 109, 123);
		$elem_impre_negativa = array( 12, 25, 41, 57, 71, 101, 115);
		
		/* Para el calculo de las sub escalas */
		$cm_array = array (7, 9, 23, 35, 52, 63, 88, 116);
		$se_array = array (22, 37, 67, 82, 96, 111, 126);
		$ae_array = array (11, 24, 40, 56, 70, 85, 100, 114, 129);			
		$ar_array = array (6, 21, 36, 51, 66, 81, 95, 110, 125);			
		$in_array = array (3, 19, 32, 48, 92, 107, 121);
		$ri_array = array (10, 23, 31, 39, 55, 62, 69, 84, 99, 113, 128);
		$rs_array = array (16, 30, 46, 61, 72, 76, 90, 98, 104);			
		$em_array = array (18, 44, 55, 61, 72, 98, 119, 124);
		$sp_array = array (1, 15, 29, 45, 60, 75, 89, 118 );
		$pr_array = array (8, 35, 38, 53, 68, 83, 88, 97, 112, 127 );
		$fl_array = array (14, 28, 43, 59, 74, 87, 103, 131 );	
		$tt_array = array (4, 20, 33, 49, 64, 78, 93, 108, 122 );
		$ci_array = array (13, 27, 42, 58, 73, 86, 102, 117, 130);
		$fe_array = array (2, 17, 31, 47, 62, 77, 91, 105, 120);
		$so_array = array (11, 20, 26, 54, 80, 106, 108, 132);				
			
		foreach ($icedetail as $detalle){
			$tipo = $entity->getICESPDetails()[$i]->getIcedetail()->getType();
			$rpta = $entity->getICESPDetails()[$i]->getAnswer();
			
			//$rpta = ($rpta == '-') ? 0 : $rpta;
						
			if ($rpta == '-') {
				$rpta=0;
				$blank = $blank  + 1;
				//print "blanco: {$blank}----";
			}
						
			$puntaje=0;
			if ($rpta != 0) {
				$puntaje = ($tipo == 'P') ? $rpta : 6- $rpta;
			}
			$puntajeAcumulado=$puntajeAcumulado + $puntaje;
			
			$item = $i + 1;
						
			if (in_array($item, $special_array1 ) or (in_array($item, $special_array2 ))){
				switch ($item){
					case 11  : $value11  = $puntaje ; break;
					case 20  : $value20  = $puntaje ; break;
	   				case 23  : $value23  = $puntaje ; break;
					case 31  : $value31  = $puntaje ; break;
					case 35  : $value35  = $puntaje ; break;
					case 55  : $value55  = $puntaje ; break;
					case 61  : $value61  = $puntaje ; break;
					case 62  : $value62  = $puntaje ; break;
					case 72  : $value72  = $puntaje ; break;
					case 88  : $value88  = $puntaje ; break;
					case 98  : $value98  = $puntaje ; break;
					case 108 : $value108 = $puntaje ; break;
					case 119 : $value119 = $puntaje ; break;
					}				
			} 
					
			if (in_array($item, $elem_pares1 )){
								
				switch ($item) {
					case 23: 	$par1 = $puntaje ; break;
					case 100: 	$par2 = $puntaje ; break;
					case 56: 	$par3 = $puntaje ; break;
					case 85: 	$par4 = $puntaje ; break;
					case 47: 	$par5 = $puntaje ; break;
					case 32: 	$par6 = $puntaje ; break;
					case 60: 	$par7 = $puntaje ; break;
					case 87: 	$par8 = $puntaje ; break;
					case 117: 	$par9 = $puntaje ; break;
					case 41: 	$par10= $puntaje ; break;
				}

			}
			
			if (in_array($item, $elem_pares2 )){

				// $puntaje = ($tipo == 'P') ? $rpta : 6- $rpta;
								
				switch ($item) {
					case 52: 	$par1 = abs($par1 - $puntaje) ; break;
					case 114: 	$par2 = abs($par2 - $puntaje) ; break;
					case 70: 	$par3 = abs($par3 - $puntaje) ; break;
					case 129: 	$par4 = abs($par4 - $puntaje) ; break;
					case 91: 	$par5 = abs($par5 - $puntaje) ; break;
					case 48: 	$par6 = abs($par6 - $puntaje) ; break;
					case 89: 	$par7 = abs($par7 - $puntaje) ; break;
					case 103: 	$par8 = abs($par8 - $puntaje) ; break;
					case 130: 	$par9 = abs($par9 - $puntaje) ; break;
					case 101: 	$par10= abs($par10 - $puntaje); break;
				}
				
				//print "inconsistente: {$pos}";
			}
						
			if (in_array($item, $elem_impre_positiva )){
				$sum_positiva = $sum_positiva + $puntaje; //(($tipo == 'P') ? $rpta : 6- $rpta);				
			}
			
			if (in_array($item, $elem_impre_negativa )){				
				$sum_negativa = $sum_negativa + $puntaje; //(($tipo == 'P') ? $rpta : 6- $rpta);
			}
			/*
			 * Calculo de Sub Escalas (15)
			 * 
			 */
			 
			/* Puntajes Directos:  La sub escala Conocimiento Emocional de Sí mismo (CM) */						
			if (in_array($item, $cm_array )){									
				$escala_CM = $escala_CM + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);				
			}
			
			/* Puntajes Directos:  la sub escala Seguridad (SE)  */			
			if (in_array($item, $se_array )){
				$escala_SE = $escala_SE + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}
			
			/* Puntajes Directos:  la sub escala Autoestima (AE)  */			
			if (in_array($item, $ae_array )){	
				$escala_AE = $escala_AE + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}
			
			/* Puntajes Directos:  la sub escala Autorrealización (AR)  */			
			if (in_array($item, $ar_array )){				
				$escala_AR = $escala_AR + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}
			
			/* Puntajes Directos:  la sub escala Independencia (IN)  */			
			if (in_array($item, $in_array )){				
				$escala_IN = $escala_IN + $puntaje; //(($tipo == 'P') ? $rpta : 6- $rpta);
			}
			
			/* Puntajes Directos:  la sub escala Relaciones interpersonales (RI)  */
			if (in_array($item, $ri_array )){				
				$escala_RI = $escala_RI + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}

			/* Puntajes Directos:  la sub escala Responsabilidad social (RS)  */			
			if (in_array($item, $rs_array )){				
				$escala_RS = $escala_RS + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}			
			/* Puntajes Directos:  la sub escala Empatía (EM)  */			
			if (in_array($item, $em_array )){				
				$escala_EM = $escala_EM + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}

			/* Puntajes Directos:  la sub escala Solución de problemas (SP)  */
			if (in_array($item, $sp_array )){				
				$escala_SP = $escala_SP + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}

			/* Puntajes Directos:  la sub escala Pruebas de la realidad (PR)  */		
			if (in_array($item, $pr_array )){				
				$escala_PR = $escala_PR + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}

			/* Puntajes Directos:  la sub escala Pruebas Flexibilidad (FL)  */				
			if (in_array($item, $fl_array )){				
				$escala_FL = $escala_FL + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}

			/* Puntajes Directos:  la sub escala Pruebas Tolerancia a la tensión (TT)  */
			if (in_array($item, $tt_array )){				
				$escala_TT = $escala_TT + $puntaje; //(($tipo == 'P') ? $rpta : 6- $rpta);
			}

			/* Puntajes Directos:  la sub escala Pruebas Control de los impulsos (CI)  */					
			if (in_array($item, $ci_array )){				
				$escala_CI = $escala_CI + $puntaje; //(($tipo == 'P') ? $rpta : 6- $rpta);
			}

			/* Puntajes Directos:  la sub escala Pruebas Felicidad (FE) */						
			if (in_array($item, $fe_array )){				
				$escala_FE = $escala_FE + $puntaje; //(($tipo == 'P') ? $rpta : 6- $rpta);
			}
			
			/* Puntajes Directos:  sub escala Optimismo (OP) */						
			if (in_array($item, $so_array )){				
				$escala_OP = $escala_OP + $puntaje; // (($tipo == 'P') ? $rpta : 6- $rpta);
			}

			$i = $i +1;			
		}
		
		/* grabado de PD's, porcentajes, impresiones + o - */
		
		$inconsistencia= $par1 + $par2 + $par3 + $par4 + $par5 + $par6 + $par7 + $par8 + $par9 + $par10;
		//print "blancos: {$blank} -----";
		$entity->setNumberBlanck($blank);		
		$entity->setImp_positiva($sum_positiva);
		$entity->setImp_negativa($sum_negativa);
		//print "setImp_positiva: {$sum_positiva}";
		//print "setImp_negativa: {$sum_negativa}";
		$omision = $blank*100/132;
		$entity->setPorcentaje_omision($omision);
		$entity->setInconsistencia($inconsistencia);
		
		$entity->setPD_sub_CM($escala_CM);
		$entity->setPD_sub_SE($escala_SE);
		$entity->setPD_sub_AE($escala_AE);
		$entity->setPD_sub_AR($escala_AR);
		$entity->setPD_sub_IN($escala_IN);		
		$entity->setPD_sub_RI($escala_RI);		
		$entity->setPD_sub_RS($escala_RS);
		$entity->setPD_sub_EM($escala_EM);
		$entity->setPD_sub_SP($escala_SP);
		$entity->setPD_sub_PR($escala_PR);
		$entity->setPD_sub_FL($escala_FL);
		$entity->setPD_sub_TT($escala_TT);
		$entity->setPD_sub_CI($escala_CI);
		$entity->setPD_sub_FE($escala_FE);
		$entity->setPD_sub_OP($escala_OP); 
		
		/* Calculo de Escalas */
		$escala_Intrapersonal 	= $escala_CM + $escala_SE + $escala_AE + $escala_AR + $escala_IN; // escala Intrapersonal (A)
		$escala_Interpersonal 	= $escala_RI + $escala_RS + $escala_EM - ($value55 + $value61 + $value72 + $value98 + $value119); //escala Interpersonal (B) 
		$escala_Adaptabilidad 	= $escala_SP + $escala_PR + $escala_FL; //escala Adaptabilidad (C) 
		$escala_Tension 		= $escala_TT + $escala_CI; // escala Manejo de la tensión (D) 
		$escala_Animo 			= $escala_FE + $escala_OP; // escalo Manejo de la tensión (E)  
		$escala_Total			= $escala_Intrapersonal + $escala_Interpersonal + $escala_Adaptabilidad + $escala_Tension + $escala_Animo - ($value11 + $value20 + $value23 + $value31 + $value35 + $value62 + $value88 + $value108); 
		/*
		print "    escala_Intrapersonal - :  - valor= {$escala_Intrapersonal }   ";
		print "    escala_Interpersonal - :  - valor= {$escala_Interpersonal }   ";
		print "    escala_Adaptabilidad - :  - valor= {$escala_Adaptabilidad }   ";
		print "    escala_Tension - :  - valor= {$escala_Tension }  ";
		print "    escala_Animo - :  - valor= {$escala_Animo }  ";
		print "    escala_Total - :  - valor= {$escala_Total }  ";
		*/
		$entity->setPD_Intrapersonal($escala_Intrapersonal);
		$entity->setPD_Interpersonal($escala_Interpersonal);
		$entity->setPD_Adaptabilidad($escala_Adaptabilidad);
		$entity->setPD_Tension($escala_Tension);
		$entity->setPD_Animo($escala_Animo);
		$entity->setPD_Total($escala_Total);
					
		//		
		/* Obtiene datos de edad y sexo del candidato */
		
		$idCandidate= $entitySPC->getCandidate()->getId();			
		
        $entidadCandidate = $em->getRepository('CandidateBundle:Candidate')->find($idCandidate);
        
        $candidateSexo=$entidadCandidate->getGender();
        
        $candidateBirthdate=$entidadCandidate->getBirthDate();
        $stringBirthdate =$candidateBirthdate->format('Y-m-d');       
		
		$dateBirthdate = new \DateTime($stringBirthdate);		
		$today = new \DateTime();
		
		$age = $dateBirthdate->diff($today)->format('%Y');
	
		// Selecciona la tabla BAREMOS segun edad y sexo */		
		if ($candidateSexo=='m' and $age>=16 ) {	
			switch ($age){
				case ($age<=20)	:	$table='ICEM1620Baremo'; break; 
				case ($age<=30)	:	$table='ICEM2130Baremo'; break; 
				case ($age<=40)	:	$table='ICEM3140Baremo'; break; 
				case ($age>40)	:	$table='ICEM4100Baremo'; break; 
			}
		} elseif ($candidateSexo=='f' and $age>=16 ) {	
			switch ($age){
				case ($age<=20)	:	$table='ICEF1620Baremo'; break; 
				case ($age<=30)	:	$table='ICEF2130Baremo'; break; 
				case ($age<=40)	:	$table='ICEF3140Baremo'; break; 
				case ($age>40)	:	$table='ICEF4100Baremo'; break; 
			}
		} else {
			throw $this->createNotFoundException(' La Edad no es valido o el genero no es válido' );
		}
		
		// Para cada una de las escalas
		
		
		//print "tabla: {$table} --"	;
		
		$array_escalas = array ('IMP','IMN','CM','SE','AE','AR','IN','RI','RS','EM','SP','PR','FL','TT','CI','FE','OP','CERA','CEER','CEAD','CEMT','CEAG','CETOTAL');
		//$array_escalas = array ( 'CM','SE','AE','AR','IN','RI','RS');
		Foreach ($array_escalas as $scale ){
			switch ($scale){
				case 'IMP': $pd=$sum_positiva; break;
				case 'IMN': $pd=$sum_negativa; break;
				case 'CM' : $pd=$escala_CM; break;
				case 'SE' : $pd=$escala_SE; break;
				case 'AE' : $pd=$escala_AE; break;
				case 'AR' : $pd=$escala_AR; break;
				case 'IN' : $pd=$escala_IN; break;
				case 'RI' : $pd=$escala_RI; break;
				case 'RS' : $pd=$escala_RS; break;
				case 'EM' : $pd=$escala_EM; break;
				case 'SP' : $pd=$escala_SP; break;
				case 'PR' : $pd=$escala_PR; break;
				case 'FL' : $pd=$escala_FL; break;
				case 'TT' : $pd=$escala_TT; break;
				case 'CI' : $pd=$escala_CI; break;
				case 'FE' : $pd=$escala_FE; break;
				case 'OP' : $pd=$escala_OP; break;
				case 'CERA' : $pd=$escala_Intrapersonal; break;
				case 'CEER' : $pd=$escala_Interpersonal; break;
				case 'CEAD' : $pd=$escala_Adaptabilidad; break;
				case 'CEMT' : $pd=$escala_Tension; break;
				case 'CEAG' : $pd=$escala_Animo ; break;	
				case 'CETOTAL' : $pd=$escala_Total; break;
			}
			
			
			
			$sql = 'SELECT TT 
					FROM TestICEBundle:'.$table.' TT
					WHERE TT.pdMin <= :pd
					AND TT.pdMax >= :pd
					AND TT.typeScale = :subescala';
			
			$consulta = $em->createQuery($sql);			
			$consulta->setParameter('pd', $pd);
			$consulta->setParameter('subescala', $scale);
			
			//print "consulta sql: {$consulta->getSql()} --"	;

			$BaremoCE = $consulta->getOneOrNullResult();
						
			if ($BaremoCE) {
				//throw $this->createNotFoundException('Error: Al obtener el valor CE, es probable que no encuentre las tablas asociadas' );
				$CE=$BaremoCE->getCE();				
			} else {
				$CE=0;
			}
			//print "subescala : {$scale} -- pd: {$pd}"	;
			switch ($scale){
				case 'IMP': $entity->setCe_Imp_positiva($CE); break; 
				case 'IMN': $entity->setCe_Imp_negativa($CE); break; 
				case 'CM' : $entity->setCE_sub_CM($CE); break;
				case 'SE' : $entity->setCE_sub_SE($CE); break;
				case 'AE' : $entity->setCE_sub_AE($CE); break;
				case 'AR' : $entity->setCE_sub_AR($CE); break;
				case 'IN' : $entity->setCE_sub_IN($CE); break;
				case 'RI' : $entity->setCE_sub_RI($CE); break;
				case 'RS' : $entity->setCE_sub_RS($CE); break;
				case 'EM' : $entity->setCE_sub_EM($CE); break;
				case 'SP' : $entity->setCE_sub_SP($CE); break;
				case 'PR' : $entity->setCE_sub_PR($CE); break;
				case 'FL' : $entity->setCE_sub_FL($CE); break;
				case 'TT' : $entity->setCE_sub_TT($CE); break;
				case 'CI' : $entity->setCE_sub_CI($CE); break;
				case 'FE' : $entity->setCE_sub_FE($CE); break;
				case 'OP' : $entity->setCE_sub_OP($CE); break;
				case 'CERA' : $entity->setCE_Intrapersonal($CE); break;
				case 'CEER' : $entity->setCE_Interpersonal($CE); break;
				case 'CEAD' : $entity->setCE_Adaptabilidad($CE); break;
				case 'CEMT' : $entity->setCE_Tension($CE); break;
				case 'CEAG' : $entity->setCE_Animo($CE); break;
				case 'CETOTAL' : $entity->setCE_Total($CE); break;
			}
			//print "***************************";			
		
		}

		$em->persist($entity); 
		$em->flush();

		//return $this->redirect($this->generateUrl('test_ice_show', array('message' => 'Gracias, por responder' ))); 		 		
		return $this->render('TestICESPBundle:ICESP:show.html.twig', array('message'=>'Gracias, por responder'));
	 }
	 
	 /*
	 public function showAction(){
		
		$message= "El examen "; 
		return $this->render('TestICESPBundle:ICESP:show.html.twig', array('message' => $message));
	 }
	 **/
}

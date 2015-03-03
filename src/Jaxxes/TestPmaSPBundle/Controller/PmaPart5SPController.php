<?php

namespace Jaxxes\TestPmaSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestPmaSPBundle\Entity\PmaSP;

use Jaxxes\TestPmaSPBundle\Entity\PmaPart5SP;
use Jaxxes\TestPmaSPBundle\Form\PmaPart5SPType;

use Jaxxes\TestPmaBundle\Entity\PmaPart5Detail;
use Jaxxes\TestPmaSPBundle\Entity\PmaPart5DetailSP;
use Jaxxes\TestPmaSPBundle\Entity\Pma5Diccionario;
use Jaxxes\TestPmaSPBundle\Entity\PmaSPAtributo;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Doctrine\Common\Collections\ArrayCollection;

class PmaPart5SPController extends Controller
{
    public function newAction($idpmasp)
    {
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		//obtengo el selectionprocescandidate logueado		
		$entidadUser = $this->get('security.context')->getToken()->getUser();	
		$active=$entidadUser->getActive();
		
		
		$entity = new PmaPart5SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        /*Se obtiene el registro de definision del pma*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart5List = $em->getRepository('TestPmaBundle:PmaPart5')->findAll();
        foreach ($pmaPart5List as $pmaPart5){//me da solo 1 pero igual debo ponerlo asi
			$entity->setPmaPart5($pmaPart5);	
		}
		
		$pmaPart5SPList = $em->getRepository('TestPmaSPBundle:PmaPart5SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart5SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($pmaPart5SPList as $pmaPart5SP){
				$entity = $pmaPart5SP;
			}
			return $this->redirect($this->generateUrl('test_pma_part5_sp_show', array('id' => $entity->getId())));
		}
		
        $numero = $entity->getPmaPart5()->getNumberQuestions();
        $entity->setNumberQuestions($numero);

		$datetime1 = new \DateTime("now");
        $entity->setDateStart($datetime1);
        $entity->setDateFinish($datetime1);

        for ($i = 1; $i <= $entity->getNumberQuestions(); $i++){
			$entityPmaPart5DetailSP = new PmaPart5DetailSP();
			$entityPmaPart5DetailSP->setNumberQuestion($i);
			$entityPmaPart5DetailSP->setPmaPart5SP($entity);
            $entity->getPmaPart5DetailSPs()->add($entityPmaPart5DetailSP);
        }
		
		$tamano = count($entity->getPmaPart5DetailSPs());
		$aux = $tamano / 3; //se divide en 3 columnas
		$aux = ceil($aux);


		$idsp = $entidadUser->getSelectionProcess()->getId();
        	$pmaSpAtributoList = $em->getRepository('TestPmaSPBundle:PmaSPAtributo')->findBy(array('selectionProcess' => $idsp));
		if (!$pmaSpAtributoList) {
            		throw $this->createNotFoundException('No se ha encontrado informacion del PMA seleccionado');
        	}

		$letra = strtoupper($pmaSpAtributoList[0]->getLetra());
		$form   = $this->createForm(new PmaPart5SPType(), $entity);    
        return $this->render('TestPmaSPBundle:PmaPart5SP:new.html.twig', array(
            'entity' => $entity,
            'letra' => $letra,
            'tamano' => $tamano,
            'aux' => $aux,
            'form'   => $form->createView()
        ));
    }
    
    
    public function createAction($idpmasp)
    {
        $entity  = new PmaPart5SP();
        $em = $this->getDoctrine()->getManager();
		
		$pmaPart5SPList = $em->getRepository('TestPmaSPBundle:PmaPart5SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart5SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($pmaPart5SPList as $pmaPart5SP){
				$entity = $pmaPart5SP;
			}
			return $this->redirect($this->generateUrl('test_pma_part5_sp_show', array('id' => $entity->getId())));
		}
		
		$entityAuxiliar = new PmaPart5SP();
        $pmaPart5List = $em->getRepository('TestPmaBundle:PmaPart5')->findAll();
        foreach ($pmaPart5List as $pmaPart5){//me da solo 1 pero igual debo ponerlo asi
			$entityAuxiliar->setPmaPart5($pmaPart5);	
		}
		$numero = $entityAuxiliar->getPmaPart5()->getNumberQuestions();
        $entity->setNumberQuestions($numero);
        for ($i = 1; $i <= $entity->getNumberQuestions(); $i++){
			$entityPmaPart5DetailSP = new PmaPart5DetailSP();
            $entity->getPmaPart5DetailSPs()->add($entityPmaPart5DetailSP);
        }
        $request = $this->getRequest();
        $form    = $this->createForm(new PmaPart5SPType(), $entity);
        $form->handleRequest($request);

		$pmaPart5List = $em->getRepository('TestPmaBundle:PmaPart5')->findAll();
        foreach ($pmaPart5List as $pmaPart5){//me da solo 1 pero igual debo ponerlo asi
			$entity->setPmaPart5($pmaPart5);	
		}
		
		$numero = $entity->getPmaPart5()->getNumberQuestions();
        $entity->setNumberQuestions($numero);

		for ($i = 1; $i <= $entity->getNumberQuestions(); $i++){
			$entity->getPmaPart5DetailSPs()[$i-1]->setNumberQuestion($i);
			$entity->getPmaPart5DetailSPs()[$i-1]->setPmaPart5SP($entity);
            if(  empty( $entity->getPmaPart5DetailSPs()[$i-1]->getAnswer() )  ){
                $entity->getPmaPart5DetailSPs()[$i-1]->setAnswer('-');
            }
         } 
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);       
        /*Se obtiene el registro de definision del PMA*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart5List = $em->getRepository('TestPmaBundle:PmaPart5')->findAll();
        foreach ($pmaPart5List as $pmaPart5){//me da solo 1 pero igual debo ponerlo asi
			$entity->setPmaPart5($pmaPart5);	
		}    
        
        $datetime1 = new \DateTime("now");
        $entity->setDateFinish($datetime1);    
        
        $em->persist($entity);
                
        $em->flush();
        
        //return $this->redirect($this->generateUrl('test_pma_part5_sp_show', array('id' => $entity->getId())));
        return $this->redirect($this->generateUrl('test_pma_part5_sp_diccionario', array('id' => $entity->getId())));
        
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPmaSPBundle:PmaPart5SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del PMA seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestPmaSPBundle:PmaPart5SP:show.html.twig', array(
            'entity'        => $entity,
            'delete_form'   => $deleteForm->createView(),
        ));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    public function searchAction($id)
    {
		//funciona solo en caso perfecto..si faltase algun registro se caeria.
        if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		//obtengo el selectionprocescandidate logueado		
		$entidadUser = $this->get('security.context')->getToken()->getUser();	
		$active=$entidadUser->getActive();
        
        $em = $this->getDoctrine()->getManager();
		//obtengo el pmasp relacionado al selectionprocescandidate logueado o solicitado
		$entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->findBy(array('selectionProcessCandidate' => $entidadUser->getId()));
        
        if(!$entityPmaSP){
			throw $this->createNotFoundException('No se ha encontrado informacion del proceso seleccionado');
        }
        //puede recoger varios examenes pero solo utiliza el primero que lee
        $numero = count($entityPmaSP);
        $entityPmaPart5SPList = $em->getRepository('TestPmaSPBundle:PmaPart5SP')->findBy(array('pmaSP' => $entityPmaSP[$numero-1]->getId()));
        
        if (!$entityPmaPart5SPList) {
            throw $this->createNotFoundException('No se ha encontrado informacion del PMA seleccionado');
        }
        $entityPmaPart5SP = $entityPmaPart5SPList[0];
        $entityPmaPart5DetailSPList = $em->getRepository('TestPmaSPBundle:PmaPart5DetailSP')->findBy(array('pmaPart5SP' => $entityPmaPart5SP->getId()));

        
        //debo corregir y recoger letra. esta vez esta estatica
        
        $idsp = $entidadUser->getSelectionProcess()->getId();
        print $idsp;
        $pmaSpAtributoList = $em->getRepository('TestPmaSPBundle:PmaSPAtributo')->findBy(array('selectionProcess' => $idsp));
        print $pmaSpAtributoList[0]->getLetra();
        
        $letraRecibidaBD = $pmaSpAtributoList[0]->getLetra();
		
		switch($letraRecibidaBD){
			case("Ñ"):
				$letraRecibida = "ñ";
				break;
			default:
				$letraRecibida = strtolower($letraRecibidaBD);
		}
		
        $letra = $letraRecibida;	
		switch ($letra){
			case("ñ"):
				$letraSiguiente = "o";
				break;
			case("n"):
				//no sigue secuencia.debo indicarlo			
				$letraSiguiente = "ñ";
				break;
			case("z"):
				$letraSiguiente = "0";
				break;
			default:
				$letraRecibida++;
				$letraSiguiente = $letraRecibida;
		}
		
        $entityDicc = $em->getRepository('TestPmaSPBundle:Pma5Diccionario')->findBy(array('letra' => $letra));
		if (!$entityDicc) {
            throw $this->createNotFoundException('No se ha encontrado informacion de la letra seleccionada1');
        }
        $entityDiccionario = $entityDicc[0];
		$idLetra = $entityDiccionario->getId();  

		$entityDiccSig = $em->getRepository('TestPmaSPBundle:Pma5Diccionario')->findBy(array('letra' => $letraSiguiente));
		if (!$entityDiccSig) {
            throw $this->createNotFoundException('No se ha encontrado informacion de la letra seleccionada');
        }     
        $entityDiccionarioSig = $entityDiccSig[0];
        $idLetraSiguiente = $entityDiccionarioSig->getId();
        
        $entityArreglo = new PmaPart5SP();
        foreach($entityPmaPart5DetailSPList as $respuesta){
			$entityDetail = new PmaPart5DetailSP();
			$entityDetail->setAnswer(strtolower($respuesta->getAnswer()));
            $entityArreglo->getPmaPart5DetailSPs()->add($entityDetail);
		}
        
        $entityPmaPart5DetailSPListCorregida = $entityArreglo->getPmaPart5DetailSPs();
        
        foreach ($entityPmaPart5DetailSPList as $respuestaAuxiliar){
			$repetido = 0;
			if($respuestaAuxiliar->getAnswer()<>"-"){
				for ($j=0; $j<count($entityPmaPart5DetailSPListCorregida); $j++){
					if($entityPmaPart5DetailSPListCorregida[$j]->getAnswer()==$respuestaAuxiliar->getAnswer()){
						$repetido++;
						if($repetido>1){
							$entityPmaPart5DetailSPListCorregida[$j]->setAnswer("-");
						}
					}
				}
			}
		}
		
		$contador = 0;
        foreach ($entityPmaPart5DetailSPListCorregida as $entity){
			$i = 0;
			if($entity->getAnswer()<> "-"){
				$pertenece = true;
				while ($pertenece){					
					$entityPalabraDicc = $em->getRepository('TestPmaSPBundle:Pma5diccionario')->find($idLetra + $i);
					if($entityPalabraDicc->getLetra() == $letra){
						if(strtolower($entity->getAnswer()) == $entityPalabraDicc->getPalabra()){
							$contador = $contador + 1;
							print $entity->getAnswer();
							$pertenece = false;
						}
						$i = $i + 1;
					}
					else{
						$pertenece = false;
					}
				}
			}			
		}
        
        print $contador;
        
        $entityPmaSP_final = $entityPmaSP[0];
        
        print 'next ';
        print $entidadUser->getId();
        print $entityPmaSP_final->getId();
        
        $entityPmaSP_final->setValorF($contador);
        
        $em->persist($entityPmaSP_final);

        $em->flush();
		
        return $this->redirect($this->generateUrl('test_pma_part5_sp_show', array('id' => $id )));
        
    }
}

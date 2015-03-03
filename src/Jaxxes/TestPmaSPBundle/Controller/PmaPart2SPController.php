<?php

namespace Jaxxes\TestPmaSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestPmaSPBundle\Entity\PmaSP;

use Jaxxes\TestPmaSPBundle\Entity\PmaPart2SP;
use Jaxxes\TestPmaSPBundle\Form\PmaPart2SPType;

use Jaxxes\TestPmaBundle\Entity\PmaPart2Detail;
use Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP;

use Jaxxes\TestPmaSPBundle\Entity\PmaPart2BlockSP;
use Jaxxes\TestPmaSPBundle\Form\PmaPart2BlockSPType;

use Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSPAnswer;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\Common\Collections\ArrayCollection;

class PmaPart2SPController extends Controller
{
    
    public function newAction($idpmasp)
    {
        $entity = new PmaPart2SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        
        /*Se obtiene el registro de definision del pma*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart2List = $em->getRepository('TestPmaBundle:PmaPart2')->findAll();
        
        foreach ($pmaPart2List as $pmaPart2){
            $entity->setPmaPart2($pmaPart2);
            }
        
        $pmaPart2SPList = $em->getRepository('TestPmaSPBundle:PmaPart2SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart2SPList){//verifica si yanse realizo alguna parte de la prueba 2
			foreach($pmaPart2SPList as $pmaPart2SP){
				$entity = $pmaPart2SP;
			}
			$pmaPart2BlockSPList = $em->getRepository('TestPmaSPBundle:PmaPart2BlockSP')->findBy(array('block' => 1,'pmaPart2SP'=>$entity->getId()));
			
			if($pmaPart2BlockSPList){//verifica si el bloque 1 fue realizado.. en el new solo le importa el bloque 1
				$block = 2;
				return $this->redirect($this->generateUrl('test_pma_part2_sp_next_new', array('id' => $entity->getId(), 'block' => $block)));	
			}
		} 
        
        $em->persist($entity);
        
        
        $entityPmaPart2BlockSP = new PmaPart2BlockSP();
        
        $entityPmaPart2BlockSP->setPmaPart2SP($entity);
        
        $pmaPart2DetailList = $em->getRepository('TestPmaBundle:PmaPart2Detail')->findBy(
                                                                                    array('block' => 1),
                                                                                    array('number' => 'ASC')
                                                                                        );

        foreach ($pmaPart2DetailList as $pmaPart2Detail){
            $entityPmaPart2DetailSP = new PmaPart2DetailSP();
            
            $entityPmaPart2DetailSP->setPmaPart2Detail($pmaPart2Detail);
            
            if ($pmaPart2Detail->getBlock() == 1){
                $entityPmaPart2DetailSP->setHiddenAux('');
            }
            else{
                $entityPmaPart2DetailSP->setHiddenAux('hidden');
            }
            
            $entityPmaPart2BlockSP->getPmaPart2DetailSPs()->add($entityPmaPart2DetailSP);
            }
        
        $form   = $this->createForm(new PmaPart2BlockSPType(), $entityPmaPart2BlockSP);
        
        return $this->render('TestPmaSPBundle:PmaPart2SP:new.html.twig', array(
            'entityPmaPart2BlockSP' => $entityPmaPart2BlockSP,
            'form'   => $form->createView(),
            'block'  => 1,
            'id'     => 0
        ));
        
    }
    
    public function createAction($idpmasp, $block, $id)
    {
        $em = $this->getDoctrine()->getManager();
       
		$pmaPart2SPList = $em->getRepository('TestPmaSPBundle:PmaPart2SP')->findBy(array('pmaSP'=>$idpmasp));
		if($pmaPart2SPList){
			foreach($pmaPart2SPList as $pmaPart2SP){
				$entity = $pmaPart2SP;
			}
		
			$pmaPart2BlockSPList = $em->getRepository('TestPmaSPBundle:PmaPart2BlockSP')->findBy(array('block' => $block,'pmaPart2SP'=>$entity->getId()));
			
			/*print "recibe id {{$id}}";
			echo "<br/>";
			print "busca con id {$entity->getId()}";
			echo "<br/>";
			print $block;
			echo "<br/>";
			print $pmaPart2BlockSPList[0]->getId();*/
			if($pmaPart2BlockSPList){//verifica si el bloque fue realizado.. en el new solo le importa el bloque 1..aca todos
				if ($block == 4){
					//throw $this->createNotFoundException('se fue a final1');
					return $this->redirect($this->generateUrl('test_pma_part2_sp_show', array('id' => $entity->getId())));
				}
				else{
					$block = $block +1;
					
					//throw $this->createNotFoundException('le puso block +1');
					return $this->redirect($this->generateUrl('test_pma_part2_sp_next_new', array('id' => $entity->getId(), 'block' => $block)));
				}
			}
		}
        //throw $this->createNotFoundException('continuo el curso sin entrar');
        
        
        
        $entityPmaPart2BlockSP = new PmaPart2BlockSP();
            
        $pmaPart2DetailList = $em->getRepository('TestPmaBundle:PmaPart2Detail')->findBy(
                                                                                    array('block' => $block),
                                                                                    array('number' => 'ASC')
                                                                                    );
        
        foreach ($pmaPart2DetailList as $pmaPart2Detail){
            $entityPmaPart2DetailSP = new PmaPart2DetailSP();
            $entityPmaPart2BlockSP->getPmaPart2DetailSPs()->add($entityPmaPart2DetailSP);
            }
            
        $form    = $this->createForm(new PmaPart2BlockSPType(), $entityPmaPart2BlockSP);
        $request = $this->getRequest();

        $form->handleRequest($request);
        
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        
        if ($block != 1) {
            $entity = $em->getRepository('TestPmaSPBundle:PmaPart2SP')->find($id);
            
            $valorE = $entityPmaSP->getValorE();
        }
        else{
            $entity  = new PmaPart2SP();
            
            /*Se recupera el proceso por candidato*/
            $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
            
            /*Se obtiene el registro de definision del PMA*/
            $entity->setPmaSP($entityPmaSP);

            $pmaPart2List = $em->getRepository('TestPmaBundle:PmaPart2')->findAll();
            
            foreach ($pmaPart2List as $pmaPart2){
                $entity->setPmaPart2($pmaPart2);
                }
            
            $em->persist($entity);
            $valorE = 0;
        }
        
        $entityPmaPart2BlockSP->setPmaPart2SP($entity);
        
        $entityPmaPart2BlockSP->setBlock($block);

        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
        
        foreach ($pmaPart2DetailList as $pmaPart2Detail){
            /** Se insertar el detalle del registro de las pruebas **/

            $entityPmaPart2BlockSP->getPmaPart2DetailSPs()[$contador]->setPmaPart2Detail($pmaPart2Detail);
            $entityPmaPart2BlockSP->getPmaPart2DetailSPs()[$contador]->setPmaPart2BlockSP($entityPmaPart2BlockSP);
			
			$answer = $entityPmaPart2BlockSP->getPmaPart2DetailSPs()[$contador]->getAnswer();
			$entityPmaPart2BlockSP->getPmaPart2DetailSPs()[$contador]->setAnswer("-");
			$contadorAnswer = count ($answer);
            
            //Listado de alternativas
            $pmaPart2DetailAlternativeCorrectList = $em->getRepository('TestPmaBundle:PmaPart2DetailAlternativeCorrect')->findBy(
                                                                                    array( 'pmaPart2Detail' => $pmaPart2Detail->getId() )
                                                                                    );
            
			//print "antes ";
			for($j=0; $j<$contadorAnswer; $j++){
				$entityPmaPart2DetailSPAnswer = new PmaPart2DetailSPAnswer();
				$entityPmaPart2DetailSPAnswer->setPmaPart2DetailSP($entityPmaPart2BlockSP->getPmaPart2DetailSPs()[$contador]);
				$entityPmaPart2DetailSPAnswer->setAnswer($answer[$j]);
				$entityPmaPart2BlockSP->getPmaPart2DetailSPs()[$contador]->addPmaPart2DetailSPAnswer($entityPmaPart2DetailSPAnswer);
                
                //Se recorre por cada alternativa seleccionada
                $boolCorrecta = false;
                foreach ($pmaPart2DetailAlternativeCorrectList as $pmaPart2DetailAlternativeCorrect){
                    if  ($pmaPart2DetailAlternativeCorrect->getAlternativeCorrect() == $answer[$j] ){
                        $boolCorrecta = true;
                    }
                }
                
                if ($boolCorrecta){
                    $contadorCorrectas = $contadorCorrectas + 1;
                }
                else{
                    $contadorIncorrectas = $contadorIncorrectas + 1;
                }
				
			}
			
            $contador = $contador + 1;
            
        }
        
        $entityPmaPart2BlockSP->setNumberCorrect($contadorCorrectas);
        $entityPmaPart2BlockSP->setNumberIncorrect($contadorIncorrectas);
        
        
        $em->persist($entityPmaPart2BlockSP);
        
        $valorE = $valorE + $contadorCorrectas;
        
        
        $entityPmaSP->setValorE($valorE);
        
        $em->persist($entityPmaSP);
                
                
        $em->flush();
        
        if ($block == 4){
            return $this->redirect($this->generateUrl('test_pma_part2_sp_show', array('id' => $entity->getId())));
        }
        else{
            $block = $block +1;
            return $this->redirect($this->generateUrl('test_pma_part2_sp_next_new', array('id' => $entity->getId(), 'block' => $block)));
        }
        
    }
    
    
    public function next_newAction($id, $block)
    {
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entity = $em->getRepository('TestPmaSPBundle:PmaPart2SP')->find($id);
        
		$pmaPart2BlockSPList = $em->getRepository('TestPmaSPBundle:PmaPart2BlockSP')->findBy(array('block' => $block,'pmaPart2SP'=>$entity->getId()));
			
		if($pmaPart2BlockSPList){//verifica si el bloque fue realizado.. en el new solo le importa el bloque 1..aca todos
			if ($block == 4){
				return $this->redirect($this->generateUrl('test_pma_part2_sp_show', array('id' => $entity->getId())));
			}
			else{
				$block = $block +1;
				return $this->redirect($this->generateUrl('test_pma_part2_sp_next_new', array('id' => $entity->getId(), 'block' => $block)));
			}
		}
		
        $entityPmaPart2BlockSP = new PmaPart2BlockSP();
        
        $entityPmaPart2BlockSP->setPmaPart2SP($entity);
        
        $pmaPart2DetailList = $em->getRepository('TestPmaBundle:PmaPart2Detail')->findBy(
                                                                                    array('block' => $block),
                                                                                    array('number' => 'ASC')
                                                                                    );

        foreach ($pmaPart2DetailList as $pmaPart2Detail){
            $entityPmaPart2DetailSP = new PmaPart2DetailSP();
            
            $entityPmaPart2DetailSP->setPmaPart2Detail($pmaPart2Detail);
            
            $entityPmaPart2DetailSP->setHiddenAux('');
            
            $entityPmaPart2BlockSP->getPmaPart2DetailSPs()->add($entityPmaPart2DetailSP);
            }
        
        $form   = $this->createForm(new PmaPart2BlockSPType(), $entityPmaPart2BlockSP);
        
        return $this->render('TestPmaSPBundle:PmaPart2SP:new.html.twig', array(
            'entityPmaPart2BlockSP' => $entityPmaPart2BlockSP,
            'form'   => $form->createView(),
            'block'  => $block,
            'id'     => $id
        ));
        
        
        
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPmaSPBundle:PmaPart2SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del PMA seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestPmaSPBundle:PmaPart2SP:show.html.twig', array(
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
}


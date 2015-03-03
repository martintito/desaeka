<?php

namespace Jaxxes\TestGatbSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestGatbSPBundle\Entity\GatbSP;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart5SP;
use Jaxxes\TestGatbSPBundle\Form\GatbPart5SPType;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart5DetailSP;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Doctrine\Common\Collections\ArrayCollection;

class GatbPart5SPController extends Controller
{
    
    public function newAction($idgatbsp)
    {
        $entity = new GatbPart5SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')->find($idgatbsp);
        
        /*Se obtiene el registro de definision del Gatgb*/
        $entity->setGatbSP($entityGatbSP);

        $gatbPart5List = $em->getRepository('TestGatbBundle:GatbPart5')->findAll();
        
        foreach ($gatbPart5List as $gatbPart5){
            $entity->setGatbPart5($gatbPart5);
            }
            
		$gatbPart5SPList = $em->getRepository('TestGatbSPBundle:GatbPart5SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart5SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart5SPList as $gatbPart5SP){
				$entity = $gatbPart5SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part5_sp_show', array('id' => $entity->getId())));
		}
        $gatbPart5DetailList = $em->getRepository('TestGatbBundle:GatbPart5Detail')->findAll();
        
        foreach ($gatbPart5DetailList as $gatbPart5Detail){
            $entityGatbPart5DetailSP = new GatbPart5DetailSP();
            
            $entityGatbPart5DetailSP->setGatbPart5Detail($gatbPart5Detail);
            
            $entity->getGatbPart5DetailSPs()->add($entityGatbPart5DetailSP);
            }
        
        $form   = $this->createForm(new GatbPart5SPType(), $entity);
        
        return $this->render('TestGatbSPBundle:GatbPart5SP:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        
    }
    
    public function createAction($idgatbsp)
    {
        $entity  = new GatbPart5SP();
        
        $em = $this->getDoctrine()->getManager();
        
        $gatbPart5SPList = $em->getRepository('TestGatbSPBundle:GatbPart5SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart5SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart5SPList as $gatbPart5SP){
				$entity = $gatbPart5SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part5_sp_show', array('id' => $entity->getId())));
		}
        
        $gatbPart5DetailList = $em->getRepository('TestGatbBundle:GatbPart5Detail')->findAll();
        
        foreach ($gatbPart5DetailList as $gatbPart5Detail){
            $entityGatbPart5DetailSP = new GatbPart5DetailSP();
            $entity->getGatbPart5DetailSPs()->add($entityGatbPart5DetailSP);
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new GatbPart5SPType(), $entity);

        $form->handleRequest($request);
        
        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
        
        foreach ($gatbPart5DetailList as $gatbPart5Detail){
            /** Se insertar el detalle del registro de las pruebas **/
            
            $entity->getGatbPart5DetailSPs()[$contador]->setGatbPart5Detail($gatbPart5Detail);
            $entity->getGatbPart5DetailSPs()[$contador]->setGatbPart5SP($entity);
            
            if ( $entity->getGatbPart5DetailSPs()[$contador]->getAnswer() == $gatbPart5Detail->getAlternativeCorrect() ) {
                $contadorCorrectas = $contadorCorrectas + 1;
            } 
            else {
                $contadorIncorrectas = $contadorIncorrectas + 1;
            }

            $contador = $contador + 1;

            }
        
        $entity->setNumberCorrect($contadorCorrectas);
        
        $entity->setNumberIncorrect($contadorIncorrectas);
        
        /*Se recupera el proceso por candidato*/
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')->find($idgatbsp);
        
        /*Se obtiene el registro de definision del Gatgb*/
        $entity->setGatbSP($entityGatbSP);

        $gatbPart5List = $em->getRepository('TestGatbBundle:GatbPart5')->findAll();
        
        foreach ($gatbPart5List as $gatbPart5){
            $entity->setGatbPart5($gatbPart5);
            }
        
        $em->persist($entity);
        
        /**Se busca el valor G y N**/
        $gatbPart5DetailListG_N = $em->getRepository('TestGatbBundle:GatbPart5Detail')->findBy(array(
                                                                                        'number' => $contadorCorrectas
                                                                                            ));
        
        $valorG = 0;
        $valorN = 0;
        foreach ($gatbPart5DetailListG_N as $gatbPart5DetailG_N){
            $valorG = $gatbPart5DetailG_N->getFactorG();
            $valorN = $gatbPart5DetailG_N->getFactorN();
            }

        $entityGatbSP->setValorG5($valorG);
        $entityGatbSP->setValorN5($valorN);
        
        $em->persist($entityGatbSP);
                        
        $em->flush();
        
        return $this->redirect($this->generateUrl('test_gatb_part5_sp_show', array('id' => $entity->getId())));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestGatbSPBundle:GatbPart5SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del GATB seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestGatbSPBundle:GatbPart5SP:show.html.twig', array(
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


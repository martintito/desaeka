<?php

namespace Jaxxes\TestPmaSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestPmaSPBundle\Entity\PmaSP;

use Jaxxes\TestPmaSPBundle\Entity\PmaPart4SP;
use Jaxxes\TestPmaSPBundle\Form\PmaPart4SPType;

use Jaxxes\TestPmaBundle\Entity\PmaPart4Detail;
use Jaxxes\TestPmaSPBundle\Entity\PmaPart4DetailSP;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Doctrine\Common\Collections\ArrayCollection;

class PmaPart4SPController extends Controller
{
    
    public function newAction($idpmasp)
    {
        $entity = new PmaPart4SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        
        /*Se obtiene el registro de definision del pma*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart4List = $em->getRepository('TestPmaBundle:PmaPart4')->findAll();
        
        foreach ($pmaPart4List as $pmaPart4){
            $entity->setPmaPart4($pmaPart4);
            }
        
        $pmaPart4SPList = $em->getRepository('TestPmaSPBundle:PmaPart4SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart4SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($pmaPart4SPList as $pmaPart4SP){
				$entity = $pmaPart4SP;
			}
			return $this->redirect($this->generateUrl('test_pma_part4_sp_show', array('id' => $entity->getId())));
		}

        $pmaPart4DetailList = $em->getRepository('TestPmaBundle:PmaPart4Detail')->findAll();
        
        foreach ($pmaPart4DetailList as $pmaPart4Detail){
            $entityPmaPart4DetailSP = new PmaPart4DetailSP();
            
            $entityPmaPart4DetailSP->setPmaPart4Detail($pmaPart4Detail);
            
            $entity->getPmaPart4DetailSPs()->add($entityPmaPart4DetailSP);
            }
        
        $form   = $this->createForm(new PmaPart4SPType(), $entity);
        
        return $this->render('TestPmaSPBundle:PmaPart4SP:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        
    }
    
    public function createAction($idpmasp)
    {
        $entity  = new PmaPart4SP();
        
        $em = $this->getDoctrine()->getManager();
        
        $pmaPart4SPList = $em->getRepository('TestPmaSPBundle:PmaPart4SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart4SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($pmaPart4SPList as $pmaPart4SP){
				$entity = $pmaPart4SP;
			}
			return $this->redirect($this->generateUrl('test_pma_part4_sp_show', array('id' => $entity->getId())));
		}
        
        $pmaPart4DetailList = $em->getRepository('TestPmaBundle:PmaPart4Detail')->findAll();
        
        foreach ($pmaPart4DetailList as $pmaPart4Detail){
            $entityPmaPart4DetailSP = new PmaPart4DetailSP();
            $entity->getPmaPart4DetailSPs()->add($entityPmaPart4DetailSP);
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new PmaPart4SPType(), $entity);

        $form->handleRequest($request);
        
        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
        
        foreach ($pmaPart4DetailList as $pmaPart4Detail){
            /** Se insertar el detalle del registro de las pruebas **/
            
            $entity->getPmaPart4DetailSPs()[$contador]->setPmaPart4Detail($pmaPart4Detail);
            $entity->getPmaPart4DetailSPs()[$contador]->setPmaPart4SP($entity);
            
            if(  empty( $entity->getPmaPart4DetailSPs()[$contador]->getAnswer() )  ){
                $entity->getPmaPart4DetailSPs()[$contador]->setAnswer('-');
            }
            
            if ( $entity->getPmaPart4DetailSPs()[$contador]->getAnswer() == $pmaPart4Detail->getAlternativeCorrect() ) {
                $contadorCorrectas = $contadorCorrectas + 1;
            } 
            else {
                $contadorIncorrectas = $contadorIncorrectas + 1;
            }

            $contador = $contador + 1;

            }
        
        $entity->setNumberCorrect($contadorCorrectas);
        
        $entity->setNumberIncorrect($contadorIncorrectas);
        
        $valorN = $contadorCorrectas;
        
        
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        
        /*Se obtiene el registro de definision del PMA*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart4List = $em->getRepository('TestPmaBundle:PmaPart4')->findAll();
        
        foreach ($pmaPart4List as $pmaPart4){
            $entity->setPmaPart4($pmaPart4);
            }
        
        $em->persist($entity);
        
        
        $entityPmaSP->setValorN($valorN);
        
        $em->persist($entityPmaSP);


        $em->flush();
        
        return $this->redirect($this->generateUrl('test_pma_part4_sp_show', array('id' => $entity->getId())));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPmaSPBundle:PmaPart4SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del PMA seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestPmaSPBundle:PmaPart4SP:show.html.twig', array(
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


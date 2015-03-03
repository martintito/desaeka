<?php

namespace Jaxxes\TestPmaSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestPmaSPBundle\Entity\PmaSP;

use Jaxxes\TestPmaSPBundle\Entity\PmaPart3SP;
use Jaxxes\TestPmaSPBundle\Form\PmaPart3SPType;

use Jaxxes\TestPmaBundle\Entity\PmaPart3Detail;
use Jaxxes\TestPmaSPBundle\Entity\PmaPart3DetailSP;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Doctrine\Common\Collections\ArrayCollection;

class PmaPart3SPController extends Controller
{
    
    public function newAction($idpmasp)
    {
        $entity = new PmaPart3SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        
        /*Se obtiene el registro de definision del pma*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart3List = $em->getRepository('TestPmaBundle:PmaPart3')->findAll();
        
        foreach ($pmaPart3List as $pmaPart3){
            $entity->setPmaPart3($pmaPart3);
            }
        
        $pmaPart3SPList = $em->getRepository('TestPmaSPBundle:PmaPart3SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart3SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($pmaPart3SPList as $pmaPart3SP){
				$entity = $pmaPart3SP;
			}
			return $this->redirect($this->generateUrl('test_pma_part3_sp_show', array('id' => $entity->getId())));
		}

        $pmaPart3DetailList = $em->getRepository('TestPmaBundle:PmaPart3Detail')->findAll();
        
        foreach ($pmaPart3DetailList as $pmaPart3Detail){
            $entityPmaPart3DetailSP = new PmaPart3DetailSP();
            
            $entityPmaPart3DetailSP->setPmaPart3Detail($pmaPart3Detail);
            
            $entity->getPmaPart3DetailSPs()->add($entityPmaPart3DetailSP);
            }
        
        $form   = $this->createForm(new PmaPart3SPType(), $entity);
        
        return $this->render('TestPmaSPBundle:PmaPart3SP:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        
    }
    
    public function createAction($idpmasp)
    {
        $entity  = new PmaPart3SP();
        
        $em = $this->getDoctrine()->getManager();
        
        $pmaPart3SPList = $em->getRepository('TestPmaSPBundle:PmaPart3SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart3SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($pmaPart3SPList as $pmaPart3SP){
				$entity = $pmaPart3SP;
			}
			return $this->redirect($this->generateUrl('test_pma_part3_sp_show', array('id' => $entity->getId())));
		}
        
        $pmaPart3DetailList = $em->getRepository('TestPmaBundle:PmaPart3Detail')->findAll();
        
        foreach ($pmaPart3DetailList as $pmaPart3Detail){
            $entityPmaPart3DetailSP = new PmaPart3DetailSP();
            $entity->getPmaPart3DetailSPs()->add($entityPmaPart3DetailSP);
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new PmaPart3SPType(), $entity);

        $form->handleRequest($request);
        
        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
        
        foreach ($pmaPart3DetailList as $pmaPart3Detail){
            /** Se insertar el detalle del registro de las pruebas **/
            
            $entity->getPmaPart3DetailSPs()[$contador]->setPmaPart3Detail($pmaPart3Detail);
            $entity->getPmaPart3DetailSPs()[$contador]->setPmaPart3SP($entity);
            
            if(  empty( $entity->getPmaPart3DetailSPs()[$contador]->getAnswer() )  ){
                $entity->getPmaPart3DetailSPs()[$contador]->setAnswer('-');
            }
            
            if ( $entity->getPmaPart3DetailSPs()[$contador]->getAnswer() == $pmaPart3Detail->getAlternativeCorrect() ) {
                $contadorCorrectas = $contadorCorrectas + 1;
            } 
            else {
                $contadorIncorrectas = $contadorIncorrectas + 1;
            }

            $contador = $contador + 1;

            }
        
        $entity->setNumberCorrect($contadorCorrectas);
        
        $entity->setNumberIncorrect($contadorIncorrectas);
        
        $valorR = $contadorCorrectas;
        
        
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        
        /*Se obtiene el registro de definision del PMA*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart3List = $em->getRepository('TestPmaBundle:PmaPart3')->findAll();
        
        foreach ($pmaPart3List as $pmaPart3){
            $entity->setPmaPart3($pmaPart3);
            }
        
        $em->persist($entity);
        
        
        $entityPmaSP->setValorR($valorR);
        
        $em->persist($entityPmaSP);
                
        $em->flush();
        
        return $this->redirect($this->generateUrl('test_pma_part3_sp_show', array('id' => $entity->getId())));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPmaSPBundle:PmaPart3SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del PMA seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestPmaSPBundle:PmaPart3SP:show.html.twig', array(
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


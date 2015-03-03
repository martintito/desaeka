<?php

namespace Jaxxes\TestPmaSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestPmaSPBundle\Entity\PmaSP;

use Jaxxes\TestPmaSPBundle\Entity\PmaPart1SP;
use Jaxxes\TestPmaSPBundle\Form\PmaPart1SPType;

use Jaxxes\TestPmaBundle\Entity\PmaPart1Detail;
use Jaxxes\TestPmaSPBundle\Entity\PmaPart1DetailSP;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Doctrine\Common\Collections\ArrayCollection;

class PmaPart1SPController extends Controller
{
    
    public function newAction($idpmasp)
    {
        $entity = new PmaPart1SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        
        /*Se obtiene el registro de definision del pma*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart1List = $em->getRepository('TestPmaBundle:PmaPart1')->findAll();
        
        foreach ($pmaPart1List as $pmaPart1){
            $entity->setPmaPart1($pmaPart1);
            }
        
        $pmaPart1SPList = $em->getRepository('TestPmaSPBundle:PmaPart1SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart1SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($pmaPart1SPList as $pmaPart1SP){
				$entity = $pmaPart1SP;
			}
			return $this->redirect($this->generateUrl('test_pma_part1_sp_show', array('id' => $entity->getId())));
		}        

        $pmaPart1DetailList = $em->getRepository('TestPmaBundle:PmaPart1Detail')->findAll();
        
        foreach ($pmaPart1DetailList as $pmaPart1Detail){
            $entityPmaPart1DetailSP = new PmaPart1DetailSP();
            
            $entityPmaPart1DetailSP->setPmaPart1Detail($pmaPart1Detail);
            
            $entity->getPmaPart1DetailSPs()->add($entityPmaPart1DetailSP);
            }
        
        $form   = $this->createForm(new PmaPart1SPType(), $entity);
        
        return $this->render('TestPmaSPBundle:PmaPart1SP:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        
    }
    
    public function createAction($idpmasp)
    {
        $entity  = new PmaPart1SP();
        
        $em = $this->getDoctrine()->getManager();
        
        $pmaPart1SPList = $em->getRepository('TestPmaSPBundle:PmaPart1SP')->findBy(array('pmaSP'=>$idpmasp));
        if($pmaPart1SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($pmaPart1SPList as $pmaPart1SP){
				$entity = $pmaPart1SP;
			}
			return $this->redirect($this->generateUrl('test_pma_part1_sp_show', array('id' => $entity->getId())));
		} 
        
        $pmaPart1DetailList = $em->getRepository('TestPmaBundle:PmaPart1Detail')->findAll();
        
        foreach ($pmaPart1DetailList as $pmaPart1Detail){
            $entityPmaPart1DetailSP = new PmaPart1DetailSP();
            $entity->getPmaPart1DetailSPs()->add($entityPmaPart1DetailSP);
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new PmaPart1SPType(), $entity);

        $form->handleRequest($request);
        
        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
       
        
        foreach ($pmaPart1DetailList as $pmaPart1Detail){
            /** Se insertar el detalle del registro de las pruebas **/
            
            $entity->getPmaPart1DetailSPs()[$contador]->setPmaPart1Detail($pmaPart1Detail);
            $entity->getPmaPart1DetailSPs()[$contador]->setPmaPart1SP($entity);
            
            if ( $entity->getPmaPart1DetailSPs()[$contador]->getAnswer() == $pmaPart1Detail->getAlternativeCorrect() ) {
                $contadorCorrectas = $contadorCorrectas + 1;
            } 
            else {
                $contadorIncorrectas = $contadorIncorrectas + 1;
            }
            
            $contador = $contador + 1;

            }
            
        $entity->setNumberCorrect($contadorCorrectas);
        
        $entity->setNumberIncorrect($contadorIncorrectas);
        
        $valorV = $contadorCorrectas;
        
        /*Se recupera el proceso por candidato*/
        $entityPmaSP = $em->getRepository('TestPmaSPBundle:PmaSP')->find($idpmasp);
        
        /*Se obtiene el registro de definision del PMA*/
        $entity->setPmaSP($entityPmaSP);

        $pmaPart1List = $em->getRepository('TestPmaBundle:PmaPart1')->findAll();
        
        foreach ($pmaPart1List as $pmaPart1){
            $entity->setPmaPart1($pmaPart1);
            }
        
        $em->persist($entity);
        
        
        $entityPmaSP->setValorV($valorV);
        
        $em->persist($entityPmaSP);
        
        $em->flush();
        
        return $this->redirect($this->generateUrl('test_pma_part1_sp_show', array('id' => $entity->getId())));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestPmaSPBundle:PmaPart1SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del PMA seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestPmaSPBundle:PmaPart1SP:show.html.twig', array(
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

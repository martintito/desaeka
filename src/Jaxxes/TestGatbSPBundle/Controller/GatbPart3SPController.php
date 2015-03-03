<?php

namespace Jaxxes\TestGatbSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestGatbSPBundle\Entity\GatbSP;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart3SP;
use Jaxxes\TestGatbSPBundle\Form\GatbPart3SPType;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart3DetailSP;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Doctrine\Common\Collections\ArrayCollection;

class GatbPart3SPController extends Controller
{
    
    public function newAction($idgatbsp)
    {
        $entity = new GatbPart3SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')->find($idgatbsp);
        
        /*Se obtiene el registro de definision del Gatgb*/
        $entity->setGatbSP($entityGatbSP);

        $gatbPart3List = $em->getRepository('TestGatbBundle:GatbPart3')->findAll();
        
        foreach ($gatbPart3List as $gatbPart3){
            $entity->setGatbPart3($gatbPart3);
            }
            
		$gatbPart3SPList = $em->getRepository('TestGatbSPBundle:GatbPart3SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart3SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart3SPList as $gatbPart3SP){
				$entity = $gatbPart3SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part3_sp_show', array('id' => $entity->getId())));
		}
        $gatbPart3DetailList = $em->getRepository('TestGatbBundle:GatbPart3Detail')->findAll();
        
        foreach ($gatbPart3DetailList as $gatbPart3Detail){
            $entityGatbPart3DetailSP = new GatbPart3DetailSP();
            
            $entityGatbPart3DetailSP->setGatbPart3Detail($gatbPart3Detail);
            
            $entity->getGatbPart3DetailSPs()->add($entityGatbPart3DetailSP);
            }
        
        $form   = $this->createForm(new GatbPart3SPType(), $entity);
        
        return $this->render('TestGatbSPBundle:GatbPart3SP:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        
    }
    
    public function createAction($idgatbsp)
    {
        $entity  = new GatbPart3SP();
        
        $em = $this->getDoctrine()->getManager();
        
        $gatbPart3SPList = $em->getRepository('TestGatbSPBundle:GatbPart3SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart3SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart3SPList as $gatbPart3SP){
				$entity = $gatbPart3SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part3_sp_show', array('id' => $entity->getId())));
		}
        
        $gatbPart3DetailList = $em->getRepository('TestGatbBundle:GatbPart3Detail')->findAll();
        
        foreach ($gatbPart3DetailList as $gatbPart3Detail){
            $entityGatbPart3DetailSP = new GatbPart3DetailSP();
            $entity->getGatbPart3DetailSPs()->add($entityGatbPart3DetailSP);
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new GatbPart3SPType(), $entity);

        $form->handleRequest($request);
        
        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
        
        foreach ($gatbPart3DetailList as $gatbPart3Detail){
            /** Se insertar el detalle del registro de las pruebas **/
            
            $entity->getGatbPart3DetailSPs()[$contador]->setGatbPart3Detail($gatbPart3Detail);
            $entity->getGatbPart3DetailSPs()[$contador]->setGatbPart3SP($entity);
            
            if ( $entity->getGatbPart3DetailSPs()[$contador]->getAnswer() == $gatbPart3Detail->getAlternativeCorrect() ) {
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

        $gatbPart3List = $em->getRepository('TestGatbBundle:GatbPart3')->findAll();
        
        foreach ($gatbPart3List as $gatbPart3){
            $entity->setGatbPart3($gatbPart3);
            }
        
        $em->persist($entity);
        
        /**Se busca el valor G y S**/
        $gatbPart3DetailListG_S = $em->getRepository('TestGatbBundle:GatbPart3Detail')->findBy(array(
                                                                                        'number' => $contadorCorrectas
                                                                                            ));
        
        $valorG = 0;
        $valorS = 0;
        foreach ($gatbPart3DetailListG_S as $gatbPart3DetailG_S){
            $valorG = $gatbPart3DetailG_S->getFactorG();
            $valorS = $gatbPart3DetailG_S->getFactorS();
            }

        $entityGatbSP->setValorG3($valorG);
        $entityGatbSP->setValorS($valorS);
        
        $em->persist($entityGatbSP);
                
        $em->flush();
        
        return $this->redirect($this->generateUrl('test_gatb_part3_sp_show', array('id' => $entity->getId())));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestGatbSPBundle:GatbPart3SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del GATB seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestGatbSPBundle:GatbPart3SP:show.html.twig', array(
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




<?php

namespace Jaxxes\TestGatbSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestGatbSPBundle\Entity\GatbSP;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart4SP;
use Jaxxes\TestGatbSPBundle\Form\GatbPart4SPType;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart4DetailSP;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Doctrine\Common\Collections\ArrayCollection;

class GatbPart4SPController extends Controller
{
    
    public function newAction($idgatbsp)
    {
        $entity = new GatbPart4SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')->find($idgatbsp);
        
        /*Se obtiene el registro de definision del Gatgb*/
        $entity->setGatbSP($entityGatbSP);

        $gatbPart4List = $em->getRepository('TestGatbBundle:GatbPart4')->findAll();
        
        foreach ($gatbPart4List as $gatbPart4){
            $entity->setGatbPart4($gatbPart4);
            }
            
        $gatbPart4SPList = $em->getRepository('TestGatbSPBundle:GatbPart4SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart4SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart4SPList as $gatbPart4SP){
				$entity = $gatbPart4SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part4_sp_show', array('id' => $entity->getId())));
		}
        $gatbPart4DetailList = $em->getRepository('TestGatbBundle:GatbPart4Detail')->findAll();
        
        foreach ($gatbPart4DetailList as $gatbPart4Detail){
            $entityGatbPart4DetailSP = new GatbPart4DetailSP();
            
            $entityGatbPart4DetailSP->setGatbPart4Detail($gatbPart4Detail);
            
            $entity->getGatbPart4DetailSPs()->add($entityGatbPart4DetailSP);
            }
        
        $form   = $this->createForm(new GatbPart4SPType(), $entity);
        
        return $this->render('TestGatbSPBundle:GatbPart4SP:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        
    }
    
    public function createAction($idgatbsp)
    {
        $entity  = new GatbPart4SP();
        
        $em = $this->getDoctrine()->getManager();
        
        $gatbPart4SPList = $em->getRepository('TestGatbSPBundle:GatbPart4SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart4SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart4SPList as $gatbPart4SP){
				$entity = $gatbPart4SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part4_sp_show', array('id' => $entity->getId())));
		}
        
        $gatbPart4DetailList = $em->getRepository('TestGatbBundle:GatbPart4Detail')->findAll();
        
        foreach ($gatbPart4DetailList as $gatbPart4Detail){
            $entityGatbPart4DetailSP = new GatbPart4DetailSP();
            $entity->getGatbPart4DetailSPs()->add($entityGatbPart4DetailSP);
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new GatbPart4SPType(), $entity);

        $form->handleRequest($request);
        
        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
        
        foreach ($gatbPart4DetailList as $gatbPart4Detail){
            /** Se insertar el detalle del registro de las pruebas **/
            
            $entity->getGatbPart4DetailSPs()[$contador]->setGatbPart4Detail($gatbPart4Detail);
            $entity->getGatbPart4DetailSPs()[$contador]->setGatbPart4SP($entity);
            
            if ( $entity->getGatbPart4DetailSPs()[$contador]->getAnswer() == $gatbPart4Detail->getAlternativeCorrect() ) {
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

        $gatbPart4List = $em->getRepository('TestGatbBundle:GatbPart4')->findAll();
        
        foreach ($gatbPart4List as $gatbPart4){
            $entity->setGatbPart4($gatbPart4);
            }
        
        $em->persist($entity);
        
        /**Se busca el valor G y S**/
        $gatbPart4DetailListG_V = $em->getRepository('TestGatbBundle:GatbPart4Detail')->findBy(array(
                                                                                        'number' => $contadorCorrectas
                                                                                            ));
        
        $valorG = 0;
        $valorV = 0;
        foreach ($gatbPart4DetailListG_V as $gatbPart4DetailG_V){
            $valorG = $gatbPart4DetailG_V->getFactorG();
            $valorV = $gatbPart4DetailG_V->getFactorV();
            }

        $entityGatbSP->setValorG4($valorG);
        $entityGatbSP->setValorV($valorV);
        
        $em->persist($entityGatbSP);
                
        $em->flush();
        
        return $this->redirect($this->generateUrl('test_gatb_part4_sp_show', array('id' => $entity->getId())));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestGatbSPBundle:GatbPart4SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del GATB seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestGatbSPBundle:GatbPart4SP:show.html.twig', array(
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





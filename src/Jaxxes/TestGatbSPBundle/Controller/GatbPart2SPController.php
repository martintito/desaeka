<?php

namespace Jaxxes\TestGatbSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\TestGatbSPBundle\Entity\GatbSP;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart2SP;
use Jaxxes\TestGatbSPBundle\Form\GatbPart2SPType;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart2DetailSpTemp;
use Jaxxes\TestGatbSPBundle\Entity\GatbPart2DetailSP;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\Common\Collections\ArrayCollection;

class GatbPart2SPController extends Controller
{
    
    public function newAction($idgatbsp)
    {
        $entity = new GatbPart2SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')->find($idgatbsp);
        
        /*Se obtiene el registro de definision del Gatgb*/
        $entity->setGatbSP($entityGatbSP);

        $gatbPart2List = $em->getRepository('TestGatbBundle:GatbPart2')->findAll();
        
        foreach ($gatbPart2List as $gatbPart2){
            $entity->setGatbPart2($gatbPart2);
            }
            
        $gatbPart2SPList = $em->getRepository('TestGatbSPBundle:GatbPart2SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart2SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart2SPList as $gatbPart2SP){
				$entity = $gatbPart2SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part2_sp_show', array('id' => $entity->getId())));
		}
        $gatbPart2DetailList = $em->getRepository('TestGatbBundle:GatbPart2Detail')->findAll();
        
        foreach ($gatbPart2DetailList as $gatbPart2Detail){
            $entityGatbPart2DetailSpTemp = new GatbPart2DetailSpTemp();
            
            $entityGatbPart2DetailSpTemp->setNumber($gatbPart2Detail->getNumber() );
            $entityGatbPart2DetailSpTemp->setOperation($gatbPart2Detail->getOperation() );
            $entityGatbPart2DetailSpTemp->setValueTop($gatbPart2Detail->getValueTop() );
            $entityGatbPart2DetailSpTemp->setValueDown($gatbPart2Detail->getValueDown() );
            $entityGatbPart2DetailSpTemp->setAlternativeCorrect($gatbPart2Detail->getAlternativeCorrect() );
            $entityGatbPart2DetailSpTemp->setFieldA($gatbPart2Detail->getField_A() );
            $entityGatbPart2DetailSpTemp->setFieldB($gatbPart2Detail->getField_B() );
            $entityGatbPart2DetailSpTemp->setFieldC($gatbPart2Detail->getField_C() );
            $entityGatbPart2DetailSpTemp->setFieldD($gatbPart2Detail->getField_D() );
            $entityGatbPart2DetailSpTemp->setFieldE($gatbPart2Detail->getField_E() );
            
            $entity->getGatbPart2DetailSpTemps()->add($entityGatbPart2DetailSpTemp);
            }
        
        $form   = $this->createForm(new GatbPart2SPType(), $entity);
        
        return $this->render('TestGatbSPBundle:GatbPart2SP:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        
    }
    
    public function createAction($idgatbsp)
    {
        $entity  = new GatbPart2SP();
        
        $em = $this->getDoctrine()->getManager();
        
        $gatbPart2SPList = $em->getRepository('TestGatbSPBundle:GatbPart2SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart2SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart2SPList as $gatbPart2SP){
				$entity = $gatbPart2SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part2_sp_show', array('id' => $entity->getId())));
		}
        
        $gatbPart2DetailList = $em->getRepository('TestGatbBundle:GatbPart2Detail')->findAll();
        
        foreach ($gatbPart2DetailList as $gatbPart2Detail){
            $entityGatbPart2DetailSpTemp = new GatbPart2DetailSpTemp();
            $entity->getGatbPart2DetailSpTemps()->add($entityGatbPart2DetailSpTemp);
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new GatbPart2SPType(), $entity);

        $form->handleRequest($request);
        
        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
        
        foreach ($gatbPart2DetailList as $gatbPart2Detail){
            $entity->getGatbPart2DetailSpTemps()[$contador]->setNumber($gatbPart2Detail->getNumber() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setOperation($gatbPart2Detail->getOperation() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setValueTop($gatbPart2Detail->getValueTop() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setValueDown($gatbPart2Detail->getValueDown() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setAlternativeCorrect($gatbPart2Detail->getAlternativeCorrect() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setFieldA($gatbPart2Detail->getField_A() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setFieldB($gatbPart2Detail->getField_B() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setFieldC($gatbPart2Detail->getField_C() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setFieldD($gatbPart2Detail->getField_D() );
            $entity->getGatbPart2DetailSpTemps()[$contador]->setFieldE($gatbPart2Detail->getField_E() );
            
            /** Se insertar el detalle del registro de las pruebas **/
            $entityGatbPart2DetailSP = new GatbPart2DetailSP();
            
            $entityGatbPart2DetailSP->setGatbPart2Detail($gatbPart2Detail);
            $entityGatbPart2DetailSP->setGatbPart2SP($entity);
            $entityGatbPart2DetailSP->setAnswer($entity->getGatbPart2DetailSpTemps()[$contador]->getAnswer());
            
            $em->persist($entityGatbPart2DetailSP);
            
            if ( $entity->getGatbPart2DetailSpTemps()[$contador]->getAnswer() == $gatbPart2Detail->getAlternativeCorrect() ) {
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

        $gatbPart2List = $em->getRepository('TestGatbBundle:GatbPart2')->findAll();
        
        foreach ($gatbPart2List as $gatbPart2){
            $entity->setGatbPart2($gatbPart2);
            }
        
        $em->persist($entity);
        
        /**Se busca el valor Q**/
        $gatbPart2DetailListN = $em->getRepository('TestGatbBundle:GatbPart2Detail')->findBy(array(
                                                                                        'number' => $contadorCorrectas
                                                                                            ));
        
        $valorN = 0;
        foreach ($gatbPart2DetailListN as $gatbPart2DetailN){
            $valorN = $gatbPart2DetailN->getFactorN();
            }

        $entityGatbSP->setValorN2($valorN);
        
        $em->persist($entityGatbSP);
        
        $em->flush();
        
        return $this->redirect($this->generateUrl('test_gatb_part2_sp_show', array('id' => $entity->getId())));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestGatbSPBundle:GatbPart2SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del GATB seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestGatbSPBundle:GatbPart2SP:show.html.twig', array(
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



<?php

namespace Jaxxes\TestGatbSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;

use Jaxxes\TestGatbSPBundle\Entity\GatbSP;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart1SP;
use Jaxxes\TestGatbSPBundle\Form\GatbPart1SPType;

use Jaxxes\TestGatbSPBundle\Entity\GatbPart1DetailSP;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Doctrine\Common\Collections\ArrayCollection;

class GatbPart1SPController extends Controller
{
    
    public function newAction($idgatbsp)
    {
        $entity = new GatbPart1SP();
        
        $em = $this->getDoctrine()->getManager();
        /*Se recupera el proceso por candidato*/
        $entityGatbSP = $em->getRepository('TestGatbSPBundle:GatbSP')->find($idgatbsp);
        
        /*Se obtiene el registro de definision del Gatgb*/
        $entity->setGatbSP($entityGatbSP);

        $gatbPart1List = $em->getRepository('TestGatbBundle:GatbPart1')->findAll();
        
        foreach ($gatbPart1List as $gatbPart1){
            $entity->setGatbPart1($gatbPart1);
            }
        
		$gatbPart1SPList = $em->getRepository('TestGatbSPBundle:GatbPart1SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart1SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart1SPList as $gatbPart1SP){
				$entity = $gatbPart1SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part1_sp_show', array('id' => $entity->getId())));
		}
        $gatbPart1DetailList = $em->getRepository('TestGatbBundle:GatbPart1Detail')->findAll();
        
        foreach ($gatbPart1DetailList as $gatbPart1Detail){
            $entityGatbPart1DetailSP = new GatbPart1DetailSP();
            
            $entityGatbPart1DetailSP->setGatbPart1Detail($gatbPart1Detail);
            $entity->getGatbPart1DetailSPs()->add($entityGatbPart1DetailSP);
            }
        
        $form   = $this->createForm(new GatbPart1SPType(), $entity);
        
        return $this->render('TestGatbSPBundle:GatbPart1SP:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        
    }
    
    public function createAction($idgatbsp)
    {
        $entity  = new GatbPart1SP();
        
        $em = $this->getDoctrine()->getManager();
        
        $gatbPart1SPList = $em->getRepository('TestGatbSPBundle:GatbPart1SP')->findBy(array('gatbSP'=>$idgatbsp));
        if($gatbPart1SPList){
			//throw $this->createNotFoundException('ya existe');
			foreach($gatbPart1SPList as $gatbPart1SP){
				$entity = $gatbPart1SP;
			}
			return $this->redirect($this->generateUrl('test_gatb_part1_sp_show', array('id' => $entity->getId())));
		}
        
        $gatbPart1DetailList = $em->getRepository('TestGatbBundle:GatbPart1Detail')->findAll();
        
        foreach ($gatbPart1DetailList as $gatbPart1Detail){
            $entityGatbPart1DetailSP = new GatbPart1DetailSP();
            $entity->getGatbPart1DetailSPs()->add($entityGatbPart1DetailSP);
            }
        
        $request = $this->getRequest();
        $form    = $this->createForm(new GatbPart1SPType(), $entity);

        $form->handleRequest($request);
        
        $contador = 0;
        $contadorCorrectas = 0;
        $contadorIncorrectas = 0;
        
        foreach ($gatbPart1DetailList as $gatbPart1Detail){
            /** Se insertar el detalle del registro de las pruebas **/
            
            $entity->getGatbPart1DetailSPs()[$contador]->setGatbPart1Detail($gatbPart1Detail);
            $entity->getGatbPart1DetailSPs()[$contador]->setGatbPart1SP($entity);
            $entity->getGatbPart1DetailSPs()[$contador]->setEqual(1);
            /**$entity->getGatbPart1DetailSPs()[$contador]->setAnswer('D');**/
            
            if ( $entity->getGatbPart1DetailSPs()[$contador]->getAnswer() == $gatbPart1Detail->getAlternativeCorrect() ) {
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

        $gatbPart1List = $em->getRepository('TestGatbBundle:GatbPart1')->findAll();
        
        foreach ($gatbPart1List as $gatbPart1){
            $entity->setGatbPart1($gatbPart1);
            }
        
        $em->persist($entity);
        
        /**Se busca el valor Q**/
        $gatbPart1DetailListQ = $em->getRepository('TestGatbBundle:GatbPart1Detail')->findBy(array(
                                                                                        'number' => $contadorCorrectas
                                                                                            ));
        $valorQ = 0;
        foreach ($gatbPart1DetailListQ as $gatbPart1DetailQ){
            $valorQ = $gatbPart1DetailQ->getFactorQ();
            }

        $entityGatbSP->setValorQ($valorQ);
        
        $em->persist($entityGatbSP);
        
        $em->flush();
        
        return $this->redirect($this->generateUrl('test_gatb_part1_sp_show', array('id' => $entity->getId())));
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestGatbSPBundle:GatbPart1SP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del GATB seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestGatbSPBundle:GatbPart1SP:show.html.twig', array(
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


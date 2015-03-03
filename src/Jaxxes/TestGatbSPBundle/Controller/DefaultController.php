<?php

namespace Jaxxes\TestGatbSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;

use Jaxxes\TestGatbSPBundle\Entity\GatbSP;
use Jaxxes\TestGatbSPBundle\Form\GatbSPType;


class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestGatbSPBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function newAction()
    {
        
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    $idspcandidate=$entityUser->getId();
	    
        $em = $this->getDoctrine()->getManager();
        
        
        
        
        $entityGatb = $em->getRepository('TestGatbSPBundle:GatbSP')
                                            ->findOneBy(array(
                                                        'selectionProcessCandidate' => $idspcandidate
                                                        ));
        
        if (!$entityGatb) {
        
            $entity = new GatbSP();
            
            /*Se recupera el proceso por candidato*/
            $entitySelectionProcessCandidate = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($idspcandidate);
            
            /*Se obtiene el registro de definision del Gatgb*/
            $entity->setSelectionProcessCandidate($entitySelectionProcessCandidate);
            
            
            
            $gatbList = $em->getRepository('TestGatbBundle:Gatb')->findAll();
            
            
            foreach ($gatbList as $gatb){
                $entity->setGatb($gatb);
                }
            /**
            $form   = $this->createForm(new GatbSPType(), $entity);
            
            return $this->render('TestGatbSPBundle:Default:new.html.twig', array(
                'entity' => $entity,
                'form'   => $form->createView()
            ));
            **/
            

            $emRepo = $this->getDoctrine()->getManager();
            $emRepo->persist($entity);
            $emRepo->flush();
            
            $entityGatb = $entity;
        }
        
        //return $this->redirect($this->generateUrl('test_gatb_sp_show', array('id' => $entity->getId())));
        //return $this->redirect($this->generateUrl('test_gatb_sp_show', array('id' => $entityGatb->getId())));
        return $this->redirect($this->generateUrl('test_gatb_sp_next', array('id' => $entityGatb->getId())));
        
    }
    
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestGatbSPBundle:GatbSP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del GATB seleccionado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TestGatbSPBundle:Default:show.html.twig', array(
            'entity'        => $entity,
            'delete_form'   => $deleteForm->createView(),
        ));
    }
    
    public function nextAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TestGatbSPBundle:GatbSP')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado informacion del GATB seleccionado');
        }

        //Busca el siguiente Gatb
        $entityGatbPart1SP = $em->getRepository('TestGatbSPBundle:GatbPart1SP')
                                            ->findOneBy(array(
                                                        'gatbSP' => $id
                                                        ));

        if (!$entityGatbPart1SP) {
            
            $deleteForm = $this->createDeleteForm($id);
            
            return $this->render('TestGatbSPBundle:Default:show.html.twig', array(
                'entity'        => $entity,
                'delete_form'   => $deleteForm->createView(),
            ));
            
        }
        else{
            
            $entityGatbPart2SP = $em->getRepository('TestGatbSPBundle:GatbPart2SP')
                                            ->findOneBy(array(
                                                        'gatbSP' => $id
                                                        ));
                                                        
            if (!$entityGatbPart2SP) {
                
                return $this->redirect($this->generateUrl('test_gatb_part1_sp_show', array('id' => $entityGatbPart1SP->getId())));
                
            }
            else{
                
                $entityGatbPart3SP = $em->getRepository('TestGatbSPBundle:GatbPart3SP')
                                            ->findOneBy(array(
                                                        'gatbSP' => $id
                                                        ));
                
                if (!$entityGatbPart3SP) {
                
                    return $this->redirect($this->generateUrl('test_gatb_part2_sp_show', array('id' => $entityGatbPart2SP->getId())));
                    
                }
                else{
                    
                    $entityGatbPart4SP = $em->getRepository('TestGatbSPBundle:GatbPart4SP')
                                            ->findOneBy(array(
                                                        'gatbSP' => $id
                                                        ));
                    
                    if (!$entityGatbPart4SP) {
                
                        return $this->redirect($this->generateUrl('test_gatb_part3_sp_show', array('id' => $entityGatbPart3SP->getId())));
                        
                    }
                    else{
                        
                        $entityGatbPart5SP = $em->getRepository('TestGatbSPBundle:GatbPart5SP')
                                            ->findOneBy(array(
                                                        'gatbSP' => $id
                                                        ));
                        
                        if (!$entityGatbPart5SP) {
                
                            return $this->redirect($this->generateUrl('test_gatb_part4_sp_show', array('id' => $entityGatbPart4SP->getId())));
                            
                        }
                        else{
                            
                            return $this->redirect($this->generateUrl('test_gatb_part5_sp_show', array('id' => $entityGatbPart5SP->getId())));
                            
                        }
                        
                    }
                    
                }
                
                
            }
            
        }

        
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

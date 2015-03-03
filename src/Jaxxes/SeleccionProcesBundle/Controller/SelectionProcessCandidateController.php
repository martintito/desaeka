<?php

namespace Jaxxes\SeleccionProcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess;
use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate;
use Jaxxes\SeleccionProcesBundle\Form\SelectionProcessCandidateType;
use Jaxxes\SeleccionProcesBundle\Form\SelectionProcessCandidateEditType;


class SelectionProcessCandidateController extends Controller
{
    
    public function newAction($idselectionprocess)
    {
        $em = $this->getDoctrine()->getManager();
        $entitySelectionProcess = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->find($idselectionprocess);
        
        $entity = new SelectionProcessCandidate();
        $entity->setSelectionProcess($entitySelectionProcess);
        
        $form   = $this->createForm(new SelectionProcessCandidateType(), $entity);

        return $this->render('SeleccionProcesBundle:SelectionProcessCandidate:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Creates a new Register Rol Detail.
     *
     */
    public function createAction($idselectionprocess)
    {
        $entity  = new SelectionProcessCandidate();
        $request = $this->getRequest();
        $form    = $this->createForm(new SelectionProcessCandidateType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entitySelectionProcess = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->find($idselectionprocess);
            $entity->setSelectionProcess($entitySelectionProcess);
            
            $entity->setSalt(md5(time()));

            $encoder = $this->get('security.encoder_factory')->getEncoder($entity);
            $passwordCodificado = $encoder->encodePassword(
                $entity->getPassword(),
                $entity->getSalt()
            );
            $entity->setPassword($passwordCodificado);

            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('consultor_show', array('id' => $entity->getSelectionProcess()->getId() )));
        }
        print "formulario no valido";
		//throw $this->createNotFoundException(' ------- ' );
		return $this->redirect($this->generateUrl('backend_consultores'));

        /**
        return $this->render('SeleccionProcesBundle:SelectionProcessCandidate:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
        * */
    }
    
    /**
     * Finds and displays a Rol Detail entity
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la "candidato" asociado al proceso de seleccion');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SeleccionProcesBundle:SelectionProcessCandidate:show.html.twig', array(
            'entity'        => $entity,
            'delete_form'   => $deleteForm->createView(),
        ));
    }
    
    
    /**
     * Displays a form to edit an existing rol detail entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el candidato solicitado');
        }

        $editForm = $this->createForm(new SelectionProcessCandidateEditType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SeleccionProcesBundle:SelectionProcessCandidate:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Edits an existing  rol detail entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el registro solicitado');
        }

        $editForm   = $this->createForm(new SelectionProcessCandidateEditType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entityTemp = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->find($id);
            $entity->setPassword($entityTemp->getPassword());
            $entity->setSelectionProcess($entityTemp->getSelectionProcess());
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('consultor_show', array('id' => $entity->getSelectionProcess()->getId())));
        }

        return $this->render('SeleccionProcesBundle:SelectionProcessCandidate:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
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

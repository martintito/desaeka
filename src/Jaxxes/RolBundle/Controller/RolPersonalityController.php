<?php

namespace Jaxxes\RolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\RolBundle\Entity\RegisterDefinitionRol;
use Jaxxes\RolBundle\Entity\RolPersonality;
use Jaxxes\RolBundle\Form\RolPersonalityType;


class RolPersonalityController extends Controller
{
    /*ACCIONES DE REGISTER DEFINITION ROL*/
    /**
     * Displays a form to create a new asign Personality to Register Definition Rol.
     *
     */
    public function newAction($idregisterdefinitionrol)
    {
        $em = $this->getDoctrine()->getManager();
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($idregisterdefinitionrol);
        
        $entity = new RolPersonality();
        $entity->setRegisterDefinitionRol($entityRegisterDefinitionRol);
        
        $form   = $this->createForm(new RolPersonalityType(), $entity);

        return $this->render('RolBundle:RolPersonality:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Creates a new Register Rol Master.
     *
     */
    public function createAction()
    {
        $entity  = new RolPersonality();
        $request = $this->getRequest();
        $form    = $this->createForm(new RolPersonalityType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            #return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getId())));
            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getRegisterDefinitionRol()->getId())));
        }

        return $this->render('RolBundle:RolPersonality:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Finds and displays a Rol master entity
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RolPersonality')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la rol de personalidad asociado al perfil del cargo');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RolPersonality:show.html.twig', array(
            'entity'        => $entity,
            'delete_form'   => $deleteForm->createView(),
        ));
    }
    
    
    /**
     * Displays a form to edit an existing rol personality entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RolPersonality')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el rol de personalidad solicitada');
        }

        $editForm = $this->createForm(new RolPersonalityType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RolPersonality:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Edits an existing  rol personality entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RolPersonality')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el rol de personalidad solicitado');
        }

        $editForm   = $this->createForm(new RolPersonalityType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getRegisterDefinitionRol()->getId())));
        }

        return $this->render('RolBundle:RolPersonality:edit.html.twig', array(
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



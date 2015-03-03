<?php

namespace Jaxxes\RolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\RolBundle\Entity\RegisterDefinitionRol;
use Jaxxes\RolBundle\Entity\RolDetail;
use Jaxxes\RolBundle\Form\RolDetailType;


class RolDetailController extends Controller
{
    /*ACCIONES DE REGISTER DEFINITION ROL*/
    /**
     * Displays a form to create a new asign Rol Detail Function.
     *
     */
    public function newAction($idregisterdefinitionrol)
    {
        $em = $this->getDoctrine()->getManager();
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($idregisterdefinitionrol);
        
        $entity = new RolDetail();
        $entity->setRegisterDefinitionRol($entityRegisterDefinitionRol);
        
        $form   = $this->createForm(new RolDetailType(), $entity);

        return $this->render('RolBundle:RolDetail:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Creates a new Register Rol Detail.
     *
     */
    public function createAction()
    {
        $entity  = new RolDetail();
        $request = $this->getRequest();
        $form    = $this->createForm(new RolDetailType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getRegisterDefinitionRol()->getId())));
        }

        return $this->render('RolBundle:RolDetail:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Finds and displays a Rol Detail entity
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RolDetail')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la "otros conocimientos" asociado al perfil del cargo');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RolDetail:show.html.twig', array(
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

        $entity = $em->getRepository('RolBundle:RolDetail')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el registro solicitado');
        }

        $editForm = $this->createForm(new RolDetailType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RolDetail:edit.html.twig', array(
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

        $entity = $em->getRepository('RolBundle:RolDetail')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el registro solicitado');
        }

        $editForm   = $this->createForm(new RolDetailType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getRegisterDefinitionRol()->getId())));
        }

        return $this->render('RolBundle:RolDetail:edit.html.twig', array(
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

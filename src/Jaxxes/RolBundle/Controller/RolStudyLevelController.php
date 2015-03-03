<?php

namespace Jaxxes\RolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\RolBundle\Entity\RegisterDefinitionRol;
use Jaxxes\RolBundle\Entity\RolStudyLevel;
use Jaxxes\RolBundle\Form\RolStudyLevelType;


class RolStudyLevelController extends Controller
{
    /*ACCIONES DE REGISTER DEFINITION ROL*/
    /**
     * Displays a form to create a new asign Language to Register Definition Rol.
     *
     */
    public function newAction($idregisterdefinitionrol)
    {
        $em = $this->getDoctrine()->getManager();
        $entityRegisterDefinitionRol = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($idregisterdefinitionrol);
        
        $entity = new RolStudyLevel();
        $entity->setRegisterDefinitionRol($entityRegisterDefinitionRol);
        
        $form   = $this->createForm(new RolStudyLevelType(), $entity);

        return $this->render('RolBundle:RolStudyLevel:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Creates a new Register Definition Rol.
     *
     */
    public function createAction()
    {
        $entity  = new RolStudyLevel();
        $request = $this->getRequest();
        $form    = $this->createForm(new RolStudyLevelType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            #return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getId())));
            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getRegisterDefinitionRol()->getId())));
        }

        return $this->render('RolBundle:RolStudyLevel:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Finds and displays a Rol language entity
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RolStudyLevel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el Nivel de Estudio asociado al perfil del cargo');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RolStudyLevel:show.html.twig', array(
            'entity'        => $entity,
            'delete_form'   => $deleteForm->createView(),
        ));
    }
    
    
    /**
     * Displays a form to edit an existing Register definition rol entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RolStudyLevel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el Nivel de estudio solicitado');
        }

        $editForm = $this->createForm(new RolStudyLevelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RolStudyLevel:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Edits an existing Register definition rol entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RolStudyLevel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el rol solicitado');
        }

        $editForm   = $this->createForm(new RolStudyLevelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getRegisterDefinitionRol()->getId())));
        }

        return $this->render('RolBundle:RolStudyLevel:edit.html.twig', array(
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




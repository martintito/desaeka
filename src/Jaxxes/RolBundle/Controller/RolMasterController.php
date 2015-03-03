<?php

namespace Jaxxes\RolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\RolBundle\Entity\RegisterDefinitionRol;
use Jaxxes\RolBundle\Entity\RolMaster;
use Jaxxes\RolBundle\Form\RolMasterType;


class RolMasterController extends Controller
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
        
        $entity = new RolMaster();
        $entity->setRegisterDefinitionRol($entityRegisterDefinitionRol);
        
        $form   = $this->createForm(new RolMasterType(), $entity);

        return $this->render('RolBundle:RolMaster:new.html.twig', array(
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
        $entity  = new RolMaster();
        $request = $this->getRequest();
        $form    = $this->createForm(new RolMasterType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            #return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getId())));
            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getRegisterDefinitionRol()->getId())));
        }

        return $this->render('RolBundle:RolMaster:new.html.twig', array(
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

        $entity = $em->getRepository('RolBundle:RolMaster')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la maestria asociado al perfil del cargo');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RolMaster:show.html.twig', array(
            'entity'        => $entity,
            'delete_form'   => $deleteForm->createView(),
        ));
    }
    
    
    /**
     * Displays a form to edit an existing rol master entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RolMaster')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado la maestria solicitada');
        }

        $editForm = $this->createForm(new RolMasterType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RolMaster:edit.html.twig', array(
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

        $entity = $em->getRepository('RolBundle:RolMaster')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el rol solicitado');
        }

        $editForm   = $this->createForm(new RolMasterType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getRegisterDefinitionRol()->getId())));
        }

        return $this->render('RolBundle:RolMaster:edit.html.twig', array(
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


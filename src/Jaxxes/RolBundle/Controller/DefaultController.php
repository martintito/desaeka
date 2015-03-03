<?php

namespace Jaxxes\RolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jaxxes\RolBundle\Entity\Rol;
use Jaxxes\RolBundle\Form\RolType;

use Jaxxes\RolBundle\Entity\RegisterDefinitionRol;
use Jaxxes\RolBundle\Form\RegisterDefinitionRolType;

class DefaultController extends Controller
{
    /**
     * Lists all Rol entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RolBundle:Rol')->findAll();

        return $this->render('RolBundle:Default:index.html.twig', array(
            'entities' => $entities
        ));
    }
    
    /**
     * Finds and displays a Rol entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el rol solicitado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:Default:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to create a new Rol entity.
     *
     */
    public function newAction()
    {
        $entity = new Rol();
        $form   = $this->createForm(new RolType(), $entity);

        return $this->render('RolBundle:Default:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Creates a new Seleccion Process entity.
     *
     */
    public function createAction()
    {
        $entity  = new Rol();
        $request = $this->getRequest();
        $form    = $this->createForm(new RolType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rol_show', array('id' => $entity->getId())));
        }

        return $this->render('RolBundle:Default:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    
    /**
     * Displays a form to edit an existing seleccion Process entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el rol solicitado');
        }

        $editForm = $this->createForm(new RolType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Edits an existing Rol entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:Rol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el rol solicitado');
        }

        $editForm   = $this->createForm(new RolType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('rol_edit', array('id' => $id)));
            return $this->redirect($this->generateUrl('rol_show', array('id' => $entity->getId())));
        }

        return $this->render('RolBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Rol entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RolBundle:Rol')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('No se ha encontrado el rol solicitado');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rol_homepage'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

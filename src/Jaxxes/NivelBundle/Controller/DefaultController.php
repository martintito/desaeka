<?php

namespace Jaxxes\NivelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jaxxes\NivelBundle\Entity\Nivel;
use Jaxxes\NivelBundle\Form\NivelType;

class DefaultController extends Controller
{
     /**
     * Lists all Seleccion Process entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NivelBundle:Nivel')->findAll();

        return $this->render('NivelBundle:Default:index.html.twig', array(
            'entities' => $entities
        ));
    }
    
    /**
     * Finds and displays a Selecction Process entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NivelBundle:Nivel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el proceso de seleccion solicitado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NivelBundle:Default:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to create a new Seleccion Process entity.
     *
     */
    public function newAction()
    {
        $entity = new Nivel();
        $form   = $this->createForm(new NivelType(), $entity);

        return $this->render('NivelBundle:Default:new.html.twig', array(
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
        $entity  = new Nivel();
        $request = $this->getRequest();
        $form    = $this->createForm(new NivelType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nivel_show', array('id' => $entity->getId())));
        }

        return $this->render('NivelBundle:Default:new.html.twig', array(
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

        $entity = $em->getRepository('NivelBundle:Nivel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el proceso de seleccion solicitado');
        }

        $editForm = $this->createForm(new NivelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NivelBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Edits an existing Seleccion Process entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NivelBundle:Nivel')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el cliente solicitado');
        }

        $editForm   = $this->createForm(new NivelType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('nivel_edit', array('id' => $id)));
            return $this->redirect($this->generateUrl('nivel_show', array('id' => $entity->getId())));
        }

        return $this->render('NivelBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Seleccion Process entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NivelBundle:Nivel')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('No se ha encontrado el proceso de seleccion solicitado');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nivel_homepage'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

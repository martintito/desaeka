<?php

namespace Jaxxes\EnterpriseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jaxxes\EnterpriseBundle\Entity\Customer;
use Jaxxes\EnterpriseBundle\Form\CustomerType;

class DefaultController extends Controller
{
    /**
     * Lists all Customer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('EnterpriseBundle:Customer')->findAll();

        return $this->render('EnterpriseBundle:Default:index.html.twig', array(
            'entities' => $entities
        ));
    }
    
    /**
     * Finds and displays a Ciudad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnterpriseBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el cliente solicitado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EnterpriseBundle:Default:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to create a new Customer entity.
     *
     */
    public function newAction()
    {
        $entity = new Customer();
        $form   = $this->createForm(new CustomerType(), $entity);

        return $this->render('EnterpriseBundle:Default:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Creates a new Customer entity.
     *
     */
    public function createAction()
    {
        $entity  = new Customer();
        $request = $this->getRequest();
        $form    = $this->createForm(new CustomerType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('enterprise_show', array('id' => $entity->getId())));
        }

        return $this->render('EnterpriseBundle:Default:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    
    /**
     * Displays a form to edit an existing Customer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnterpriseBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el cliente solicitado');
        }

        $editForm = $this->createForm(new CustomerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('EnterpriseBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Edits an existing Customer entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('EnterpriseBundle:Customer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el cliente solicitado');
        }

        $editForm   = $this->createForm(new CustomerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('enterprise_edit', array('id' => $id)));
            return $this->redirect($this->generateUrl('enterprise_show', array('id' => $entity->getId())));
        }

        return $this->render('EnterpriseBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Customer entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('EnterpriseBundle:Customer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('No se ha encontrado el cliente solicitado');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('enterprise_homepage'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

<?php

namespace Jaxxes\CandidateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Jaxxes\CandidateBundle\Entity\Candidate;
use Jaxxes\CandidateBundle\Form\CandidateType;


class DefaultController extends Controller
{
    public function helpAction()
    {
        //return new Response('Te ayudaremos');
        return $this->render('CandidateBundle:Default:ayuda.html.twig');
    }
    
    public function welcomeAction()
    {
        //return new Response('Te ayudaremos');
        return $this->render('CandidateBundle:Default:welcome.html.twig');
    }   
    
    /**
     * Lists all candidate entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CandidateBundle:Candidate')->findAll();

        return $this->render('CandidateBundle:Default:index.html.twig', array(
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

        $entity = $em->getRepository('CandidateBundle:Candidate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha candidato solicitado');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CandidateBundle:Default:show.html.twig', array(
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
        
        $entity  = new Candidate();
        $request = $this->getRequest();
        $form    = $this->createForm(new CandidateType(), $entity);        
        
        $form->handleRequest($request);

        if ($form->isValid()) {
			$candidateBirthdate=$entity->getBirthDate();
			$stringBirthdate =$candidateBirthdate->format('Y-m-d');       
			
			$dateBirthdate = new \DateTime($stringBirthdate);		
			$today = new \DateTime();
			
			$age = $dateBirthdate->diff($today)->format('%Y');
			
			if(($age<18) or ($age<65)){
				
				$mensaje = "Debe ingresar una edad entre los 18 y 65 años";
				return $this->render('CandidateBundle:Default:new.html.twig', array(
					'entity' => $entity,
					'mensaje' => $mensaje,
					'form'   => $form->createView()
				));
				
			}
			$mensaje = "";
			return $this->render('CandidateBundle:Default:new.html.twig', array(
				'entity' => $entity,
				'mensaje' => $mensaje,
				'form'   => $form->createView()
			));
        
        }
			$mensaje = "";
			return $this->render('CandidateBundle:Default:new.html.twig', array(
				'entity' => $entity,
				'mensaje' => $mensaje,
				'form'   => $form->createView()
			));
        
    }
    
    /**
     * Creates a new Candidate entity.
     *
     */
    public function createAction()
    {
        $entity  = new Candidate();
        $request = $this->getRequest();
        $form    = $this->createForm(new CandidateType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
			
			$candidateBirthdate=$entity->getBirthDate();
			$stringBirthdate =$candidateBirthdate->format('Y-m-d');       
			
			$dateBirthdate = new \DateTime($stringBirthdate);		
			$today = new \DateTime();
			
			$age = $dateBirthdate->diff($today)->format('%Y');
			
			if(($age<18) or ($age>65)){
				
				$mensaje = "Debe ingresar una edad entre los 18 y 65 años";
				return $this->render('CandidateBundle:Default:new.html.twig', array(
					'entity' => $entity,
					'mensaje' => $mensaje,
					'form'   => $form->createView()
				));
				
			}
			
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('candidate_show', array('id' => $entity->getId())));
        }
		$mensaje = "";
        return $this->render('CandidateBundle:Default:new.html.twig', array(
            'entity' => $entity,
            'mensaje' => $mensaje,
            'form'   => $form->createView()
        ));
    }
    
    
    /**
     * Displays a form to edit an existing candidate entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CandidateBundle:Candidate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el candidato solicitado');
        }

        $editForm = $this->createForm(new CandidateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CandidateBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Edits an existing candidate entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CandidateBundle:Candidate')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el candidato solicitado');
        }

        $editForm   = $this->createForm(new CandidateType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('candidate_edit', array('id' => $id)));
            return $this->redirect($this->generateUrl('candidate_show', array('id' => $entity->getId())));
        }

        return $this->render('CandidateBundle:Default:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a candidates entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CandidateBundle:Candidate')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('No se ha encontrado el candidato solicitado');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('candidate_homepage'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

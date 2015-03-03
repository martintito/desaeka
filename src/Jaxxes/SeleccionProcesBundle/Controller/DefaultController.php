<?php

namespace Jaxxes\SeleccionProcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess;
use Jaxxes\SeleccionProcesBundle\Form\SeleccionProcessType;
use Jaxxes\TestPmaSPBundle\Form\PmaSPAtributoType;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessTest;
use Jaxxes\DefinitionTestBundle\Entity\DefinitionTest;
use Jaxxes\TestPmaSPBundle\Entity\PmaSPAtributo;

use Doctrine\Common\Collections\ArrayCollection;

class DefaultController extends Controller
{
    /*
    public function indexAction($name)
    {
        return $this->render('SeleccionProcesBundle:Default:index.html.twig', array('name' => $name));
    }
*/
    public function consultorAction()
    {
        print("Ingresa a consultorAction");
        print "** Ingresa a consultorAction **"; 
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->findAll();

        return $this->render('SeleccionProcesBundle:Default:seleccionproces.html.twig', array(
            'entities' => $entities
        ));
    }
    
    
    
    /**
     * Lists all Seleccion Process entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->findAll();

        return $this->render('SeleccionProcesBundle:Default:index.html.twig', array(
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

        $entity = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el proceso de seleccion solicitado');
        }
        
        $sp_candidato = $em->getRepository('SeleccionProcesBundle:SelectionProcessCandidate')->findBy(array('selectionProcess' => $id));

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SeleccionProcesBundle:Default:show.html.twig', array(
            'entity'            => $entity,
            'sp_candidatos'     => $sp_candidato,
            'delete_form'       => $deleteForm->createView(),
        ));
    }
    
    /**
     * Displays a form to create a new Seleccion Process entity.
     *
     */
    public function newAction()
    {
        $entity = new SelectionProcess();
        
        $em = $this->getDoctrine()->getManager();
        
        $definitionTestList = $em->getRepository('DefinitionTestBundle:DefinitionTest')->findAll();
        
        foreach ($definitionTestList as $definitionTest){
            
            $entitySelectionProcessTest = new SelectionProcessTest();
            
            $entitySelectionProcessTest->setDefinitionTest($definitionTest);
            
            $entity->getSelectionProcessTests()->add($entitySelectionProcessTest);
            }
        
        
        $form   = $this->createForm(new SeleccionProcessType(), $entity);
		
		$entityAtributo = new PmaSPAtributo();	
		$formAtributo = $this->createForm(new PmaSPAtributoType(), $entityAtributo);	
		
			
        return $this->render('SeleccionProcesBundle:Default:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'entityAtributo' => $entityAtributo,
            'formAtributo' => $formAtributo->createView()
        ));
    }
    
    /**
     * Creates a new Seleccion Process entity.
     *
     */
    public function createAction()
    {
        $entity  = new SelectionProcess();
        
        $em = $this->getDoctrine()->getManager();
        $definitionTestList = $em->getRepository('DefinitionTestBundle:DefinitionTest')->findAll();
        
        foreach ($definitionTestList as $definitionTest){
            
            $entitySelectionProcessTest = new SelectionProcessTest();

            $entity->getSelectionProcessTests()->add($entitySelectionProcessTest);
            }

        $request = $this->getRequest();
        $form    = $this->createForm(new SeleccionProcessType(), $entity);
        
        $form->handleRequest($request);
        
        //recupero el combo
        $entityAtributo = new PmaSPAtributo();
        $pmaPart5List = $em->getRepository('TestPmaBundle:PmaPart5')->findAll();
        foreach ($pmaPart5List as $pmaPart5){
			$entityAtributo->setPmaPart5($pmaPart5);
		}
        $entityAtributo->setSelectionProcess($entity);
        
        $formAtributo = $this->createForm(new PmaSPAtributoType(), $entityAtributo);
        $formAtributo->handleRequest($request);
        
        
        $contador = 0;
       
        foreach ($definitionTestList as $definitionTest){
            /** Se insertar el detalle del registro de las pruebas **/
            
            $entity->getSelectionProcessTests()[$contador]->setDefinitionTest($definitionTest);
            $entity->getSelectionProcessTests()[$contador]->setSelectionProcess($entity);

            $contador = $contador + 1;

            }

        if ($form->isValid() and $formAtributo->isValid()) {
            
            $em->persist($entity);
            $em->flush();
            $em->persist($entityAtributo);
            $em->flush();

            return $this->redirect($this->generateUrl('consultor_show', array('id' => $entity->getId())));
        }

        return $this->render('SeleccionProcesBundle:Default:new.html.twig', array(
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

        $entity = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el proceso de seleccion solicitado');
        }

        $editForm = $this->createForm(new SeleccionProcessType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SeleccionProcesBundle:Default:edit.html.twig', array(
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

        $entity = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el cliente solicitado');
        }

        $editForm   = $this->createForm(new SeleccionProcessType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            //return $this->redirect($this->generateUrl('consultor_edit', array('id' => $id)));
            return $this->redirect($this->generateUrl('consultor_show', array('id' => $entity->getId())));
        }

        return $this->render('SeleccionProcesBundle:Default:edit.html.twig', array(
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
            $entity = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('No se ha encontrado el proceso de seleccion solicitado');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('consultor_portada'));
    }
    
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    

}

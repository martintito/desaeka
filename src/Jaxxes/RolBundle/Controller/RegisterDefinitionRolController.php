<?php

namespace Jaxxes\RolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Jaxxes\RolBundle\Entity\RegisterDefinitionRol;
use Jaxxes\RolBundle\Entity\RolLanguage;
use Jaxxes\RolBundle\Form\RegisterDefinitionRolType;
use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess;

class RegisterDefinitionRolController extends Controller
{
    /*ACCIONES DE REGISTER DEFINITION ROL*/
    /**
     * Displays a form to create a new Rol entity.
     *
     */
    public function newAction($idseleccionprocess)
    {
        $em = $this->getDoctrine()->getManager();
        $entitySeleccionProcess = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->find($idseleccionprocess);
        
        $entity = new RegisterDefinitionRol();
        $entity->setSelectionProcess($entitySeleccionProcess);
        
        $form   = $this->createForm(new RegisterDefinitionRolType(), $entity);

        return $this->render('RolBundle:RegisterDefinitionRol:new.html.twig', array(
            'entity' => $entity,
            'entitySeleccionProcess' => $entitySeleccionProcess,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Creates a new Register Definition Rol.
     *
     */
    public function createAction()
    {
        $entity  = new RegisterDefinitionRol();
        $request = $this->getRequest();
        $form    = $this->createForm(new RegisterDefinitionRolType(), $entity);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            //$entitySeleccionProcess = $em->getRepository('SeleccionProcesBundle:SelectionProcess')->find($idseleccionprocess);
            //$entity->setSelectionProcess($entitySeleccionProcess);
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getId())));
        }

        return $this->render('RolBundle:RegisterDefinitionRol:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }
    
    /**
     * Finds and displays a Register Definition Rol entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el Perfil de cargo solicitado');
        }
        
        $rol_lenguaje = $em->getRepository('RolBundle:RolLanguage')->findBy(array('registerDefinitionRol' => $id));
        
        $rol_study_level = $em->getRepository('RolBundle:RolStudyLevel')->findBy(array('registerdefinitionrol' => $id));
        
        $rol_master = $em->getRepository('RolBundle:RolMaster')->findBy(array('registerDefinitionRol' => $id));
        
        $rol_personality = $em->getRepository('RolBundle:RolPersonality')->findBy(array('RegisterDefinitionRol' => $id));
        
        $rol_function = $em->getRepository('RolBundle:RolFunction')->findBy(array('RegisterDefinitionRol' => $id));
        
        $rol_detail = $em->getRepository('RolBundle:RolDetail')->findBy(array('registerDefinitionRol' => $id));

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RegisterDefinitionRol:show.html.twig', array(
            'entity'        => $entity,
            'languages'     => $rol_lenguaje,
            'study_levels'  => $rol_study_level,
            'masters'       => $rol_master,
            'personalitys'  => $rol_personality,
            'functions'     => $rol_function,
            'details'       => $rol_detail,
            'delete_form'   => $deleteForm->createView(),
        ));
    }
    

    /**
     * Displays a form to edit an existing Register definition rol entity.
     *
     */
    public function since_select_editAction($idseleccionprocess)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('RolBundle:RegisterDefinitionRol')->findOneBy(array('selectionProcess' => $idseleccionprocess));

        if (!$entity) {
            /*throw $this->createNotFoundException('No se ha encontrado el perfil de cargo solicitado');*/
            return $this->redirect($this->generateUrl('register_definition_rol_new', array(
            'idseleccionprocess' => $idseleccionprocess
            )));
        }

        return $this->redirect($this->generateUrl('register_definition_rol_edit', array(
            'id' => $entity->getId()
            )));
        
    }
    
    /**
     * Displays a form to edit an existing Register definition rol entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el rol solicitado');
        }

        $editForm = $this->createForm(new RegisterDefinitionRolType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RegisterDefinitionRol:edit.html.twig', array(
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

        $entity = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el Perfil de cargo solicitado');
        }

        $editForm   = $this->createForm(new RegisterDefinitionRolType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('register_definition_rol_show', array('id' => $entity->getId())));
        }

        return $this->render('RolBundle:RegisterDefinitionRol:edit.html.twig', array(
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
    
    
    
    
    
    //Nuevo
   //LLama a la pantalla de perfil cargo postulante
   
 public function perfilcargopostulanteAction()//$id 
    {
		if (false === $this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw new AccessDeniedException();
		}
		
	    $entityUser = $this->get('security.context')->getToken()->getUser();
	    
	    $em = $this->getDoctrine()->getManager();
	    $idspcandidate=$entityUser->getId();
        
	    $entitysp = $entityUser->getSelectionProcess();
	   
	    $idtemp = $entitysp->getID(); 
	   
	    $entityrdr = $em->getRepository('RolBundle:RegisterDefinitionRol')->findOneBy(array('selectionProcess' => $idtemp));
	   
	    if (!$entityrdr ){
			
			return $this->render('RolBundle:RegisterDefinitionRol:message.html.twig', array(
                 'title'=> 'Perfil', 'message'=>'El Perfil no ha sido definido por el consultor'));
			//throw $this->createNotFoundException('El rol asignado no ha sido definido por el consultor	');
		}
		
	    $id = $entityrdr->getId();
	    
        $entity = $em->getRepository('RolBundle:RegisterDefinitionRol')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('No se ha encontrado el Perfil de cargo solicitado');
        }
        
        $rol_lenguaje = $em->getRepository('RolBundle:RolLanguage')->findBy(array('registerDefinitionRol' => $id));
        
        $rol_study_level = $em->getRepository('RolBundle:RolStudyLevel')->findBy(array('registerdefinitionrol' => $id));
        
        $rol_master = $em->getRepository('RolBundle:RolMaster')->findBy(array('registerDefinitionRol' => $id));
        
        $rol_personality = $em->getRepository('RolBundle:RolPersonality')->findBy(array('RegisterDefinitionRol' => $id));
        
        $rol_function = $em->getRepository('RolBundle:RolFunction')->findBy(array('RegisterDefinitionRol' => $id));
        
        $rol_detail = $em->getRepository('RolBundle:RolDetail')->findBy(array('registerDefinitionRol' => $id));

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RolBundle:RegisterDefinitionRol:perfilcargopostulante.html.twig', array( //RolBundle:RegisterDefinitionRol:show.html.twig
            'entity'        => $entity,
            'languages'     => $rol_lenguaje,
            'study_levels'  => $rol_study_level,
            'masters'       => $rol_master,
            'personalitys'  => $rol_personality,
            'functions'     => $rol_function,
            'details'       => $rol_detail,
            'delete_form'   => $deleteForm->createView(),
        ));
		
	}
 
}


<?php
 
namespace Jaxxes\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jaxxes\SeleccionProcesBundle\Entity\Consultant;
use Symfony\Component\HttpFoundation\Request;
use Jaxxes\GeneralBundle\Form\ConsultantType;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GeneralBundle:Default:index.html.twig', array('name' => $name));
    }


    public function PortadaAction()
    {
    
	return $this->render('GeneralBundle:Default:index.html.twig', array('name' => $names));
    }
    
    public function homeAdminAction()
    {
      
      return $this->render('GeneralBundle:Default:home.html.twig');
      	 
    }

    public function indexConsultoresAction()
    {

		$em = $this->getDoctrine()->getManager();

		$entities = $em->getRepository('SeleccionProcesBundle:Consultant')->findAll();

		return $this->render('GeneralBundle:Default:indexConsulting.html.twig', array(
			'entities' => $entities
		));
		  		 
    }    
    
    public function newConsultingAction()
    {
        $entity = new Consultant();
        $form   = $this->createForm(new ConsultantType(), $entity);

        return $this->render('GeneralBundle:Default:newConsulting.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
      	 
    }
    
    public function createConsultingAction()
    {
       // throw $this->createNotFoundException(' ---- eN EL CREATE --- ' );
       
        $usuario = new Consultant();        
		$em = $this->getDoctrine()->getManager();
		
		$peticion = $this->getRequest();
		
        $formulario = $this->createForm(new ConsultantType(), $usuario);
		
        $formulario->handleRequest($peticion);

        if ($formulario->isValid()) {
			print "formulario valido";
		//	throw $this->createNotFoundException(' ------- ' );
            // Completar las propiedades que el usuario no rellena en el formulario
            $usuario->setSalt(md5(time()));

            $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
            $passwordCodificado = $encoder->encodePassword(
                $usuario->getPassword(),
                $usuario->getSalt()
            );
            $usuario->setPassword($passwordCodificado);

            // Guardar el nuevo usuario en la base de datos
            $em->persist($usuario);
            $em->flush();

            // Crear un mensaje flash para notificar al usuario que se ha registrado correctamente
            /*
             * $this->get('session')->getFlashBag()->add('info',
                '¡Enhorabuena! Te has registrado correctamente en Cupon'
            );
            */

            return $this->redirect($this->generateUrl('backend_consultores'));
        }
		print "formulario no valido";
		//throw $this->createNotFoundException(' ------- ' );
		return $this->redirect($this->generateUrl('backend_consultores'));
    }         
}


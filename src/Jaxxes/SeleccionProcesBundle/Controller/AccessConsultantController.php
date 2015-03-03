<?php

namespace Jaxxes\SeleccionProcesBundle\Controller;

use Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;


class AccessConsultantController extends Controller
{
    public function loginAction(Request $peticion)
    {
        $sesion = $peticion->getSession();

        $error = $peticion->attributes->get(
            SecurityContext::AUTHENTICATION_ERROR,
            $sesion->get(SecurityContext::AUTHENTICATION_ERROR)
        );

        return $this->render('SeleccionProcesBundle:Consultant:login.html.twig', array(
            'error' => $error
        ));
    }
    
    public function welcomeAction()
    {	print "welcome";
        //return new Response('Te ayudaremos');
        return $this->render('SeleccionProcesBundle:Consultant:welcome.html.twig');
    }

    public function failureAction()
    {
        //return new Response('Te ayudaremos');
        return $this->render('SeleccionProcesBundle:Default:failure.html.twig');
    }        


    public function defaultAction()
	{
		$usuario = $this->get('security.context')->getToken()->getUsername();
		// $nombre = $usuario->getNombre();	
	}

} 

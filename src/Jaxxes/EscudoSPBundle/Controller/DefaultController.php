<?php

namespace Jaxxes\EscudoSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EscudoSPBundle:Default:index.html.twig', array('name' => $name));
    }
}

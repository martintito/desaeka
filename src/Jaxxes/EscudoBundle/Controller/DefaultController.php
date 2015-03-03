<?php

namespace Jaxxes\EscudoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EscudoBundle:Default:index.html.twig', array('name' => $name));
    }
}

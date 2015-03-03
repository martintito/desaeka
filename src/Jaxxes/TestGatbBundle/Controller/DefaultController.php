<?php

namespace Jaxxes\TestGatbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestGatbBundle:Default:index.html.twig', array('name' => $name));
    }
}

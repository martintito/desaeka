<?php

namespace Jaxxes\TestPmaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestPmaBundle:Default:index.html.twig', array('name' => $name));
    }
}

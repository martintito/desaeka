<?php

namespace Jaxxes\TestICESPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestICESPBundle:Default:index.html.twig', array('name' => $name));
    }
}

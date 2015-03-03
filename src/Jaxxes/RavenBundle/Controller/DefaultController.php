<?php

namespace Jaxxes\RavenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RavenBundle:Default:index.html.twig', array('name' => $name));
    }
}

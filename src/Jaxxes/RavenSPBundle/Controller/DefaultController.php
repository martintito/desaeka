<?php

namespace Jaxxes\RavenSPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RavenSPBundle:Default:index.html.twig', array('name' => $name));
    }
}

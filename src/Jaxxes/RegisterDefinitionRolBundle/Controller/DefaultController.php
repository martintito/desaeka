<?php

namespace Jaxxes\RegisterDefinitionRolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RegisterDefinitionRolBundle:Default:index.html.twig', array('name' => $name));
    }
}

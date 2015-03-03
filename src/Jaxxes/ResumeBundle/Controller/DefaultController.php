<?php

namespace Jaxxes\ResumeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ResumeBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Jaxxes\TestICEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestICEBundle:Default:index.html.twig', array('name' => $name));
    }
}

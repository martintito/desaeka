<?php

/*
 * (c) Rossana Janampa
 *
 * Este archivo pertenece a la aplicaci�n de EKA jaxxes.
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
 */

namespace Jaxxes\RavenBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\RavenBundle\Entity\Raven;

 
// class Resumes implements FixtureInterface
 class Ravens extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 2;
    }
    private $container;
    
    

    public function load(ObjectManager $manager)
    {       
         $ev = array(
            'name' => 'Prueba Raven'
        );

        foreach ($ev as $lst) {
            $objeto = new Raven();
            $objeto->setName($lst);
            $manager->persist($objeto);
        }        
        $manager->flush();
    }    
}

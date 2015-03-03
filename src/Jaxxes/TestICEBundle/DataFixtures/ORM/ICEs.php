<?php

/*
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * Este archivo pertenece a la aplicación de prueba Cupon.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestICEBundle\Entity\ICE;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para la primera prueba del Gatb
 */
 
// class Resumes implements FixtureInterface
 class ICEs extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 2;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {       
         $ev = array(
            'name' => 'Prueba ICE de Baron'
        );

        foreach ($ev as $lst) {
            $objeto = new ICE();
            $objeto->setName($lst);
            $manager->persist($objeto);
        }        
        $manager->flush();
    }
}


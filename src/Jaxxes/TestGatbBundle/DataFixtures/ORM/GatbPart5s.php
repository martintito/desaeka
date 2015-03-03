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

use Jaxxes\TestGatbBundle\Entity\GatbPart5;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para la primera prueba del Gatb
 */
 
// class Resumes implements FixtureInterface
 class GatbPart5s extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 2;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstGatbPart5s = array(	
								array ('descripcion'=>'Prueba numero 5'),
								);
                                
        $gatbList = $manager->getRepository('TestGatbBundle:Gatb')->findAll();
        
        foreach ($gatbList as $gatb)
            foreach ($lstGatbPart5s as $GatbPart5) {
                $objeto = new GatbPart5();
                
                $objeto->setDescripcion($GatbPart5['descripcion']);
                $objeto->setGatb($gatb);
                
                $manager->persist($objeto);            
            }        
            $manager->flush();
    }
}

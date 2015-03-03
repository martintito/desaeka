<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA jaxxes.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestPmaBundle\Entity\PmaPart1;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para la primera prueba del PMA
 */
 
// class Resumes implements FixtureInterface
 class PmaPart1s extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 2;
    }
    private $container;
    
    
    public function load(ObjectManager $manager)
    {
        $lstPmaPart1s = array(
								array ('descripcion'=>'Prueba numero 1'),
								);
                                
        $pmaList = $manager->getRepository('TestPmaBundle:Pma')->findAll();
        
        foreach ($pmaList as $pma)
            foreach ($lstPmaPart1s as $pmaPart1) {
                $objeto = new PmaPart1();
                
                $objeto->setDescripcion($pmaPart1['descripcion']);
                $objeto->setPma($pma);
                
                $manager->persist($objeto);            
            }
            $manager->flush();
    }
}

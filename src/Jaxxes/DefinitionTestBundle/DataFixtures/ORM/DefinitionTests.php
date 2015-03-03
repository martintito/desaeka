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

use Jaxxes\DefinitionTestBundle\Entity\DefinitionTest;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para la primera prueba del PMA
 */
 
// class Resumes implements FixtureInterface
 class DefinitionTests extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 1;
    }
    private $container;
    
    
    public function load(ObjectManager $manager)
    {
        $lstDefinitionTests = array(
								array ('code'=>'GTB',   'name'=>'GATB',      'time'=>60),
                                array ('code'=>'PMA',   'name'=>'PMA',       'time'=>80),
                                array ('code'=>'ICE',   'name'=>'ICE',       'time'=>80),
                                array ('code'=>'ESC',   'name'=>'ESCUDO',    'time'=>80),
                                array ('code'=>'RVN',   'name'=>'RAVEN',     'time'=>45),
								);
        
        
        foreach ($lstDefinitionTests as $definitionTest) {
            $objeto = new DefinitionTest();
            
            $objeto->setCode($definitionTest['code']);
            $objeto->setName($definitionTest['name']);
            $objeto->setTime($definitionTest['time']);

            $manager->persist($objeto);            
        }
        $manager->flush();
    }
}


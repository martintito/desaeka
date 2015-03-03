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

use Jaxxes\GeneralBundle\Entity\MaritalStatus;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro de la cabecera para Resume = Ficha del candidato
 */
 
// class Resumes implements FixtureInterface
 class MaritalStates extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 1;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
         $lstStates = array(	
								array ('name'=>'Casada/o', 'code'=>'1'),
								array ('name'=>'Soltera/o', 'code'=>'2'), 
								array ('name'=>'Divorciada/o', 'code'=>'3'),
								array ('name'=>'Viuda/o', 'code'=>'4'),
								array ('name'=>'Separada/o', 'code'=>'5'),
								);
        
        foreach ($lstStates as $lst) {
            $objeto = new MaritalStatus();
            $objeto->setName($lst['name']);
            $objeto->setCode($lst['code']);
            $manager->persist($objeto);            
        }        
        $manager->flush();
    }
}

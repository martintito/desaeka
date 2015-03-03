<?php

/*
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * Este archivo pertenece a la aplicación de prueba Cupon.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia. a
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\GeneralBundle\Entity\DocumentType;

/**
 * Fixtures de la entidad DocumentTypes.
 * 
 */
 
// class Resumes implements FixtureInterface
 class DocumentTypes extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 1;
    }
    private $container;
    
    public function load(ObjectManager $manager)
    {
         $lstTypes = array(	'DNI','CARNET EXTRANJERÍA','PASAPORTE',);
						
        
        foreach ($lstTypes as $lst) {
            $objeto = new DocumentType();
            $objeto->setName($lst);
            $manager->persist($objeto);            
        }        
        $manager->flush();
    }
}

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

use Jaxxes\ResumeBundle\Entity\Resume;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro de la cabecera para Resume = Ficha del candidato
 */
 
// class Resumes implements FixtureInterface
 class Resumes extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 1;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        // El registro inicial para la Ficha del postulante
        
         $ficha = array(
            'name' => 'Ficha del postulante'
        );

        foreach ($ficha as $fc) {
            $resume = new Resume();
            $resume->setname($fc);

            $manager->persist($resume);
        }        
        $manager->flush();
    }
}

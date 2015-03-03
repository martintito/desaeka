<?php

/*
 * (c) Rossana Janampa <rossana.janampa@acklis.com>

 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\EscudoBundle\Entity\Escudo;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro de la cabecera para Resume = Ficha del candidato
 */
  
// class Resumes implements FixtureInterface
 class Escudos extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 1;
    }
    private $container;
    
    public function load(ObjectManager $manager)
    {       
         $ev = array(
            'name' => 'Prueba del Escudo'
        );

        foreach ($ev as $lst) {
            $objeto = new Escudo();
            $objeto->setName($lst);
            $manager->persist($objeto);
        }        
        $manager->flush();
    }
}

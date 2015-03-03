<?php

/*
 *
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\VirtualInterviewBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\VirtualInterviewBundle\Entity\VirtualInterview;


 class VirtualInterviews extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 1;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        // El registro inicial para la Ficha del postulante
        
         $ev = array(
            'name' => 'Entrevista virtual'
        );

        foreach ($ev as $lst) {
            $objeto = new VirtualInterview();
            $objeto->setName($lst);
            $manager->persist($objeto);
        }        
        $manager->flush();
    }
}

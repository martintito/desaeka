<?php

namespace Jaxxes\TestPmaSPBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestPmaSPBundle\Entity\Pma5Diccionario;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro de la cabecera para Resume = Ficha del candidato
 */
 
// class Resumes implements FixtureInterface
 class PMA5DiccionarioW extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 124;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstStructure = array(	
			array('letra'=>'w', 'palabra'=>'w'),
array('letra'=>'w', 'palabra'=>'wagneriano'),
array('letra'=>'w', 'palabra'=>'washingtoniano'),
array('letra'=>'w', 'palabra'=>'waterpolista'),
array('letra'=>'w', 'palabra'=>'waterpolo'),
array('letra'=>'w', 'palabra'=>'watt'),
array('letra'=>'w', 'palabra'=>'wau'),
array('letra'=>'w', 'palabra'=>'weber'),
array('letra'=>'w', 'palabra'=>'weber'),
array('letra'=>'w', 'palabra'=>'weimares'),
array('letra'=>'w', 'palabra'=>'wellingtonia'),
array('letra'=>'w', 'palabra'=>'welter'),
array('letra'=>'w', 'palabra'=>'western'),
array('letra'=>'w', 'palabra'=>'westfaliano'),
array('letra'=>'w', 'palabra'=>'whiskeria'),
array('letra'=>'w', 'palabra'=>'whisky'),
array('letra'=>'w', 'palabra'=>'windsurf'),
array('letra'=>'w', 'palabra'=>'windsurfing'),
array('letra'=>'w', 'palabra'=>'windsurfista'),
array('letra'=>'w', 'palabra'=>'wolfram'),
array('letra'=>'w', 'palabra'=>'wolfram'),
array('letra'=>'w', 'palabra'=>'wolframio'),


		);
         
        foreach ($lstStructure as $lst) {

            $objeto = new Pma5Diccionario();
            $objeto->setLetra($lst['letra']);
            $objeto->setPalabra($lst['palabra']);
            
            $manager->persist($objeto);                              
        }

        $manager->flush();    
	}
}

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
 class PMA5DiccionarioX extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 125;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstStructure = array(	
			array('letra'=>'x', 'palabra'=>'x'),
array('letra'=>'x', 'palabra'=>'xantoma'),
array('letra'=>'x', 'palabra'=>'xenofobia'),
array('letra'=>'x', 'palabra'=>'xenofobo'),
array('letra'=>'x', 'palabra'=>'xenon'),
array('letra'=>'x', 'palabra'=>'xerocopia'),
array('letra'=>'x', 'palabra'=>'xerocopiar'),
array('letra'=>'x', 'palabra'=>'xerofilo'),
array('letra'=>'x', 'palabra'=>'xerofitico'),
array('letra'=>'x', 'palabra'=>'xerofito'),
array('letra'=>'x', 'palabra'=>'xeroftalmia'),
array('letra'=>'x', 'palabra'=>'xeroftalmia'),
array('letra'=>'x', 'palabra'=>'xerografia'),
array('letra'=>'x', 'palabra'=>'xerografiar'),
array('letra'=>'x', 'palabra'=>'xerografico'),
array('letra'=>'x', 'palabra'=>'xerografo'),
array('letra'=>'x', 'palabra'=>'xi'),
array('letra'=>'x', 'palabra'=>'xifoideo'),
array('letra'=>'x', 'palabra'=>'xifoides'),
array('letra'=>'x', 'palabra'=>'xilema'),
array('letra'=>'x', 'palabra'=>'xilofago'),
array('letra'=>'x', 'palabra'=>'xilofonista'),
array('letra'=>'x', 'palabra'=>'xilofono'),
array('letra'=>'x', 'palabra'=>'xilografia'),
array('letra'=>'x', 'palabra'=>'xilografico'),
array('letra'=>'x', 'palabra'=>'xilografo'),
array('letra'=>'x', 'palabra'=>'xiloprotector'),
array('letra'=>'x', 'palabra'=>'xilorgano'),
array('letra'=>'x', 'palabra'=>'xilotila'),


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

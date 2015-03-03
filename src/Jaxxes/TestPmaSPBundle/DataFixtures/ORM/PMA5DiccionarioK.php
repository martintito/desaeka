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
 class PMA5DiccionarioK extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 111;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstStructure = array(	
			array('letra'=>'k', 'palabra'=>'k'),
array('letra'=>'k', 'palabra'=>'ka'),
array('letra'=>'k', 'palabra'=>'kafkiano'),
array('letra'=>'k', 'palabra'=>'kaiser'),
array('letra'=>'k', 'palabra'=>'kaki'),
array('letra'=>'k', 'palabra'=>'kamikaze'),
array('letra'=>'k', 'palabra'=>'kan'),
array('letra'=>'k', 'palabra'=>'kantiano'),
array('letra'=>'k', 'palabra'=>'kantismo'),
array('letra'=>'k', 'palabra'=>'kappa'),
array('letra'=>'k', 'palabra'=>'karaoke'),
array('letra'=>'k', 'palabra'=>'karate'),
array('letra'=>'k', 'palabra'=>'karma'),
array('letra'=>'k', 'palabra'=>'karst'),
array('letra'=>'k', 'palabra'=>'karstico'),
array('letra'=>'k', 'palabra'=>'katiuska'),
array('letra'=>'k', 'palabra'=>'kayak'),
array('letra'=>'k', 'palabra'=>'kefir'),
array('letra'=>'k', 'palabra'=>'kelvin'),
array('letra'=>'k', 'palabra'=>'keniata'),
array('letra'=>'k', 'palabra'=>'kerigma'),
array('letra'=>'k', 'palabra'=>'kermes'),
array('letra'=>'k', 'palabra'=>'kermes'),
array('letra'=>'k', 'palabra'=>'keroseno'),
array('letra'=>'k', 'palabra'=>'ketchup'),
array('letra'=>'k', 'palabra'=>'kibutz'),
array('letra'=>'k', 'palabra'=>'kif'),
array('letra'=>'k', 'palabra'=>'kiliarea'),
array('letra'=>'k', 'palabra'=>'kilo'),
array('letra'=>'k', 'palabra'=>'kilocaloria'),
array('letra'=>'k', 'palabra'=>'kilociclo'),
array('letra'=>'k', 'palabra'=>'kilogrametro'),
array('letra'=>'k', 'palabra'=>'kilogramo'),
array('letra'=>'k', 'palabra'=>'kilohercio'),
array('letra'=>'k', 'palabra'=>'kilolitro'),
array('letra'=>'k', 'palabra'=>'kilometraje'),
array('letra'=>'k', 'palabra'=>'kilometrar'),
array('letra'=>'k', 'palabra'=>'kilometrico'),
array('letra'=>'k', 'palabra'=>'kilometro'),
array('letra'=>'k', 'palabra'=>'kilopondio'),
array('letra'=>'k', 'palabra'=>'kilotex'),
array('letra'=>'k', 'palabra'=>'kiloton'),
array('letra'=>'k', 'palabra'=>'kilovatio'),
array('letra'=>'k', 'palabra'=>'kilovoltio'),
array('letra'=>'k', 'palabra'=>'kimono'),
array('letra'=>'k', 'palabra'=>'kinesiologia'),
array('letra'=>'k', 'palabra'=>'kinesiologo'),
array('letra'=>'k', 'palabra'=>'kinesioterapia'),
array('letra'=>'k', 'palabra'=>'kinesioterapico'),
array('letra'=>'k', 'palabra'=>'kinesiterapia'),
array('letra'=>'k', 'palabra'=>'kinesiterapico'),
array('letra'=>'k', 'palabra'=>'kiosco'),
array('letra'=>'k', 'palabra'=>'kirguis'),
array('letra'=>'k', 'palabra'=>'kirie'),
array('letra'=>'k', 'palabra'=>'kirieleison'),
array('letra'=>'k', 'palabra'=>'kirsch'),
array('letra'=>'k', 'palabra'=>'kit'),
array('letra'=>'k', 'palabra'=>'kitsch'),
array('letra'=>'k', 'palabra'=>'kivi'),
array('letra'=>'k', 'palabra'=>'kiwi'),
array('letra'=>'k', 'palabra'=>'koala'),
array('letra'=>'k', 'palabra'=>'koine'),
array('letra'=>'k', 'palabra'=>'kopek'),
array('letra'=>'k', 'palabra'=>'krausismo'),
array('letra'=>'k', 'palabra'=>'krausista'),
array('letra'=>'k', 'palabra'=>'kremlin'),
array('letra'=>'k', 'palabra'=>'kremlinologia'),
array('letra'=>'k', 'palabra'=>'kremlinologo'),
array('letra'=>'k', 'palabra'=>'kril'),
array('letra'=>'k', 'palabra'=>'krill'),
array('letra'=>'k', 'palabra'=>'kurdo'),
array('letra'=>'k', 'palabra'=>'kuwaiti'),


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

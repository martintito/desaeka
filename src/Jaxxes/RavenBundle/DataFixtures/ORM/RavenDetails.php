<?php

/*
 * (c) Rossana Janampa
 *
 * Este archivo pertenece a la aplicación de Ekka Jaxxes.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\RavenBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\RavenBundle\Entity\RavenDetail;
//use Jaxxes\RavenBundle\Entity\PmaPart2DetailAlternativeCorrect;

 
// class Resumes implements FixtureInterface
 class RavenDetails extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstStructure = array(	
            array ('orden'=>'1' ,'rutaFotoSerie'=>'raven.test.serieA.1.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.1.alts.jpg',  'block'=>'A', 'correct'=>'4'),
            array ('orden'=>'2' ,'rutaFotoSerie'=>'raven.test.serieA.2.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.2.alts.jpg',  'block'=>'A', 'correct'=>'5'),
            array ('orden'=>'3' ,'rutaFotoSerie'=>'raven.test.serieA.3.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.3.alts.jpg',  'block'=>'A', 'correct'=>'1'),
            array ('orden'=>'4' ,'rutaFotoSerie'=>'raven.test.serieA.4.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.4.alts.jpg',  'block'=>'A', 'correct'=>'2'),
            array ('orden'=>'5' ,'rutaFotoSerie'=>'raven.test.serieA.5.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.5.alts.jpg',  'block'=>'A', 'correct'=>'6'),
            array ('orden'=>'6' ,'rutaFotoSerie'=>'raven.test.serieA.6.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.6.alts.jpg',  'block'=>'A', 'correct'=>'3'),
            array ('orden'=>'7' ,'rutaFotoSerie'=>'raven.test.serieA.7.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.7.alts.jpg',  'block'=>'A', 'correct'=>'6'),
            array ('orden'=>'8' ,'rutaFotoSerie'=>'raven.test.serieA.8.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.8.alts.jpg',  'block'=>'A', 'correct'=>'2'),
            array ('orden'=>'9' ,'rutaFotoSerie'=>'raven.test.serieA.9.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.9.alts.jpg',  'block'=>'A', 'correct'=>'1'),
            array ('orden'=>'10','rutaFotoSerie'=>'raven.test.serieA.10.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.10.alts.jpg',  'block'=>'A', 'correct'=>'3'),
            array ('orden'=>'11','rutaFotoSerie'=>'raven.test.serieA.11.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.11.alts.jpg',  'block'=>'A', 'correct'=>'5'),
            array ('orden'=>'12','rutaFotoSerie'=>'raven.test.serieA.12.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieA.12.alts.jpg',  'block'=>'A', 'correct'=>'4'),
            
            array ('orden'=>'13' ,'rutaFotoSerie'=>'raven.test.serieB.1.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.1.alts.jpg',  'block'=>'B', 'correct'=>'2'),
            array ('orden'=>'14' ,'rutaFotoSerie'=>'raven.test.serieB.2.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.2.alts.jpg',  'block'=>'B', 'correct'=>'6'),
            array ('orden'=>'15' ,'rutaFotoSerie'=>'raven.test.serieB.3.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.3.alts.jpg',  'block'=>'B', 'correct'=>'1'),
            array ('orden'=>'16' ,'rutaFotoSerie'=>'raven.test.serieB.4.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.4.alts.jpg',  'block'=>'B', 'correct'=>'2'),
            array ('orden'=>'17' ,'rutaFotoSerie'=>'raven.test.serieB.5.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.5.alts.jpg',  'block'=>'B', 'correct'=>'1'),
            array ('orden'=>'18' ,'rutaFotoSerie'=>'raven.test.serieB.6.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.6.alts.jpg',  'block'=>'B', 'correct'=>'3'),
            array ('orden'=>'19' ,'rutaFotoSerie'=>'raven.test.serieB.7.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.7.alts.jpg',  'block'=>'B', 'correct'=>'5'),
            array ('orden'=>'20' ,'rutaFotoSerie'=>'raven.test.serieB.8.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.8.alts.jpg',  'block'=>'B', 'correct'=>'6'),
            array ('orden'=>'21' ,'rutaFotoSerie'=>'raven.test.serieB.9.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.9.alts.jpg',  'block'=>'B', 'correct'=>'4'),
            array ('orden'=>'22' ,'rutaFotoSerie'=>'raven.test.serieB.10.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.10.alts.jpg',  'block'=>'B', 'correct'=>'3'),
            array ('orden'=>'23' ,'rutaFotoSerie'=>'raven.test.serieB.11.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.11.alts.jpg',  'block'=>'B', 'correct'=>'4'),
            array ('orden'=>'24' ,'rutaFotoSerie'=>'raven.test.serieB.12.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieB.12.alts.jpg',  'block'=>'B', 'correct'=>'5'),

            array ('orden'=>'25' ,'rutaFotoSerie'=>'raven.test.serieC.1.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.1.alts.jpg',  'block'=>'C', 'correct'=>'8'),
            array ('orden'=>'26' ,'rutaFotoSerie'=>'raven.test.serieC.2.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.2.alts.jpg',  'block'=>'C', 'correct'=>'2'),
            array ('orden'=>'27' ,'rutaFotoSerie'=>'raven.test.serieC.3.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.3.alts.jpg',  'block'=>'C', 'correct'=>'3'),
            array ('orden'=>'28' ,'rutaFotoSerie'=>'raven.test.serieC.4.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.4.alts.jpg',  'block'=>'C', 'correct'=>'8'),
            array ('orden'=>'29' ,'rutaFotoSerie'=>'raven.test.serieC.5.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.5.alts.jpg',  'block'=>'C', 'correct'=>'7'),
            array ('orden'=>'30' ,'rutaFotoSerie'=>'raven.test.serieC.6.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.6.alts.jpg',  'block'=>'C', 'correct'=>'4'),
            array ('orden'=>'31' ,'rutaFotoSerie'=>'raven.test.serieC.7.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.7.alts.jpg',  'block'=>'C', 'correct'=>'5'),
            array ('orden'=>'32' ,'rutaFotoSerie'=>'raven.test.serieC.8.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.8.alts.jpg',  'block'=>'C', 'correct'=>'1'),
            array ('orden'=>'33' ,'rutaFotoSerie'=>'raven.test.serieC.9.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.9.alts.jpg',  'block'=>'C', 'correct'=>'7'),
            array ('orden'=>'34' ,'rutaFotoSerie'=>'raven.test.serieC.10.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.10.alts.jpg',  'block'=>'C', 'correct'=>'6'),
            array ('orden'=>'35' ,'rutaFotoSerie'=>'raven.test.serieC.11.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.11.alts.jpg',  'block'=>'C', 'correct'=>'1'),
            array ('orden'=>'36' ,'rutaFotoSerie'=>'raven.test.serieC.12.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieC.12.alts.jpg',  'block'=>'C', 'correct'=>'2'),

            array ('orden'=>'37' ,'rutaFotoSerie'=>'raven.test.serieD.1.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.1.alts.jpg',  'block'=>'D', 'correct'=>'3'),
            array ('orden'=>'38' ,'rutaFotoSerie'=>'raven.test.serieD.2.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.2.alts.jpg',  'block'=>'D', 'correct'=>'4'),
            array ('orden'=>'39' ,'rutaFotoSerie'=>'raven.test.serieD.3.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.3.alts.jpg',  'block'=>'D', 'correct'=>'3'),
            array ('orden'=>'40' ,'rutaFotoSerie'=>'raven.test.serieD.4.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.4.alts.jpg',  'block'=>'D', 'correct'=>'7'),
            array ('orden'=>'41' ,'rutaFotoSerie'=>'raven.test.serieD.5.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.5.alts.jpg',  'block'=>'D', 'correct'=>'8'),
            array ('orden'=>'42' ,'rutaFotoSerie'=>'raven.test.serieD.6.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.6.alts.jpg',  'block'=>'D', 'correct'=>'6'),
            array ('orden'=>'43' ,'rutaFotoSerie'=>'raven.test.serieD.7.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.7.alts.jpg',  'block'=>'D', 'correct'=>'5'),
            array ('orden'=>'44' ,'rutaFotoSerie'=>'raven.test.serieD.8.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.8.alts.jpg',  'block'=>'D', 'correct'=>'4'),
            array ('orden'=>'45' ,'rutaFotoSerie'=>'raven.test.serieD.9.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.9.alts.jpg',  'block'=>'D', 'correct'=>'1'),
            array ('orden'=>'46' ,'rutaFotoSerie'=>'raven.test.serieD.10.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.10.alts.jpg',  'block'=>'D', 'correct'=>'2'),
            array ('orden'=>'47' ,'rutaFotoSerie'=>'raven.test.serieD.11.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.11.alts.jpg',  'block'=>'D', 'correct'=>'5'),
            array ('orden'=>'48' ,'rutaFotoSerie'=>'raven.test.serieD.12.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieD.12.alts.jpg',  'block'=>'D', 'correct'=>'6'),

            array ('orden'=>'49' ,'rutaFotoSerie'=>'raven.test.serieE.1.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.1.alts.jpg',  'block'=>'E', 'correct'=>'7'),
            array ('orden'=>'50' ,'rutaFotoSerie'=>'raven.test.serieE.2.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.2.alts.jpg',  'block'=>'E', 'correct'=>'6'),
            array ('orden'=>'51' ,'rutaFotoSerie'=>'raven.test.serieE.3.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.3.alts.jpg',  'block'=>'E', 'correct'=>'8'),
            array ('orden'=>'52' ,'rutaFotoSerie'=>'raven.test.serieE.4.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.4.alts.jpg',  'block'=>'E', 'correct'=>'2'),
            array ('orden'=>'53' ,'rutaFotoSerie'=>'raven.test.serieE.5.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.5.alts.jpg',  'block'=>'E', 'correct'=>'1'),
            array ('orden'=>'54' ,'rutaFotoSerie'=>'raven.test.serieE.6.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.6.alts.jpg',  'block'=>'E', 'correct'=>'5'),
            array ('orden'=>'55' ,'rutaFotoSerie'=>'raven.test.serieE.7.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.7.alts.jpg',  'block'=>'E', 'correct'=>'2'),
            array ('orden'=>'56' ,'rutaFotoSerie'=>'raven.test.serieE.8.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.8.alts.jpg',  'block'=>'E', 'correct'=>'4'),
            array ('orden'=>'57' ,'rutaFotoSerie'=>'raven.test.serieE.9.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.9.alts.jpg',  'block'=>'E', 'correct'=>'1'),
            array ('orden'=>'58' ,'rutaFotoSerie'=>'raven.test.serieE.10.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.10.alts.jpg',  'block'=>'E', 'correct'=>'6'),
            array ('orden'=>'59' ,'rutaFotoSerie'=>'raven.test.serieE.11.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.11.alts.jpg',  'block'=>'E', 'correct'=>'3'),
            array ('orden'=>'60' ,'rutaFotoSerie'=>'raven.test.serieE.12.preg.jpg',   'rutaFotoAlternatives'=>'raven.test.serieE.12.alts.jpg',  'block'=>'E', 'correct'=>'5'),
            
			);
             
        $pregutaList = $manager->getRepository('RavenBundle:Raven')->findAll();
        
         
	 foreach ($pregutaList as $heactest)
        foreach ($lstStructure as $lst) {
			
			// print "elemento 1: {$lst[$i]}";
            $objeto = new RavenDetail();
			$objeto->setOrden($lst['orden']);
			$objeto->setRutaFotoSerie($lst['rutaFotoSerie']);
			$objeto->setRutaFotoAlternatives($lst['rutaFotoAlternatives']);
			$objeto->setBlock($lst['block']);
			$objeto->setCorrect($lst['correct']);
			$objeto->setRaven($heactest);			
			$manager->persist($objeto);
                               
        }        
        $manager->flush();
    }
    
}



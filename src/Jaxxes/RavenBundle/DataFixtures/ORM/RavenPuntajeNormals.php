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

use Jaxxes\RavenBundle\Entity\RavenPuntajeNormal;
//use Jaxxes\RavenBundle\Entity\PmaPart2DetailAlternativeparcialD;

 
// class Resumes implements FixtureInterface
 class RavenPuntajeNormals extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstStructure = array(	
            array ('pn'=>'15' ,'parcialA'=>'8',   'parcialB'=>'4',  'parcialC'=>'2', 'parcialD'=>'1', 'parcialE'=>'0'),
            array ('pn'=>'16' ,'parcialA'=>'8',   'parcialB'=>'4',  'parcialC'=>'3', 'parcialD'=>'1', 'parcialE'=>'0'),
            array ('pn'=>'17' ,'parcialA'=>'8',   'parcialB'=>'5',  'parcialC'=>'3', 'parcialD'=>'1', 'parcialE'=>'0'),
            array ('pn'=>'18' ,'parcialA'=>'8',   'parcialB'=>'5',  'parcialC'=>'3', 'parcialD'=>'2', 'parcialE'=>'0'),
            array ('pn'=>'19' ,'parcialA'=>'8',   'parcialB'=>'6',  'parcialC'=>'3', 'parcialD'=>'2', 'parcialE'=>'0'),
            array ('pn'=>'20' ,'parcialA'=>'8',   'parcialB'=>'6',  'parcialC'=>'3', 'parcialD'=>'2', 'parcialE'=>'1'),
            array ('pn'=>'21' ,'parcialA'=>'8',   'parcialB'=>'6',  'parcialC'=>'4', 'parcialD'=>'2', 'parcialE'=>'1'),
            array ('pn'=>'22' ,'parcialA'=>'9',   'parcialB'=>'6',  'parcialC'=>'4', 'parcialD'=>'2', 'parcialE'=>'1'),
            array ('pn'=>'23' ,'parcialA'=>'9',   'parcialB'=>'7',  'parcialC'=>'4', 'parcialD'=>'2', 'parcialE'=>'1'),
            array ('pn'=>'24' ,'parcialA'=>'9',   'parcialB'=>'7',  'parcialC'=>'4', 'parcialD'=>'3', 'parcialE'=>'1'),
            array ('pn'=>'25' ,'parcialA'=>'10',   'parcialB'=>'7',  'parcialC'=>'4', 'parcialD'=>'3', 'parcialE'=>'1'),
            array ('pn'=>'26' ,'parcialA'=>'10',   'parcialB'=>'7',  'parcialC'=>'5', 'parcialD'=>'3', 'parcialE'=>'1'),
            array ('pn'=>'27' ,'parcialA'=>'10',   'parcialB'=>'7',  'parcialC'=>'5', 'parcialD'=>'4', 'parcialE'=>'1'),
            array ('pn'=>'28' ,'parcialA'=>'10',   'parcialB'=>'7',  'parcialC'=>'6', 'parcialD'=>'4', 'parcialE'=>'1'),
            array ('pn'=>'29' ,'parcialA'=>'10',   'parcialB'=>'7',  'parcialC'=>'6', 'parcialD'=>'5', 'parcialE'=>'1'),
            array ('pn'=>'30' ,'parcialA'=>'10',   'parcialB'=>'7',  'parcialC'=>'6', 'parcialD'=>'5', 'parcialE'=>'2'),
            array ('pn'=>'31' ,'parcialA'=>'10',   'parcialB'=>'7',  'parcialC'=>'7', 'parcialD'=>'5', 'parcialE'=>'2'),
            array ('pn'=>'32' ,'parcialA'=>'10',   'parcialB'=>'8',  'parcialC'=>'7', 'parcialD'=>'5', 'parcialE'=>'2'),
            array ('pn'=>'33' ,'parcialA'=>'11',   'parcialB'=>'8',  'parcialC'=>'7', 'parcialD'=>'5', 'parcialE'=>'2'),
            array ('pn'=>'34' ,'parcialA'=>'11',   'parcialB'=>'8',  'parcialC'=>'7', 'parcialD'=>'6', 'parcialE'=>'2'),
            array ('pn'=>'35' ,'parcialA'=>'11',   'parcialB'=>'8',  'parcialC'=>'7', 'parcialD'=>'7', 'parcialE'=>'2'),
            array ('pn'=>'36' ,'parcialA'=>'11',   'parcialB'=>'8',  'parcialC'=>'8', 'parcialD'=>'7', 'parcialE'=>'2'),
            array ('pn'=>'37' ,'parcialA'=>'11',   'parcialB'=>'9',  'parcialC'=>'8', 'parcialD'=>'7', 'parcialE'=>'2'),
            array ('pn'=>'38' ,'parcialA'=>'11',   'parcialB'=>'9',  'parcialC'=>'8', 'parcialD'=>'8', 'parcialE'=>'2'),
            array ('pn'=>'39' ,'parcialA'=>'11',   'parcialB'=>'9',  'parcialC'=>'8', 'parcialD'=>'8', 'parcialE'=>'3'),
            array ('pn'=>'40' ,'parcialA'=>'11',   'parcialB'=>'10',  'parcialC'=>'8', 'parcialD'=>'8', 'parcialE'=>'3'),
            array ('pn'=>'41' ,'parcialA'=>'11',   'parcialB'=>'10',  'parcialC'=>'9', 'parcialD'=>'8', 'parcialE'=>'3'),
            array ('pn'=>'42' ,'parcialA'=>'11',   'parcialB'=>'10',  'parcialC'=>'9', 'parcialD'=>'9', 'parcialE'=>'3'),
            array ('pn'=>'43' ,'parcialA'=>'12',   'parcialB'=>'10',  'parcialC'=>'9', 'parcialD'=>'9', 'parcialE'=>'3'),
            array ('pn'=>'44' ,'parcialA'=>'12',   'parcialB'=>'10',  'parcialC'=>'9', 'parcialD'=>'9', 'parcialE'=>'4'),
            array ('pn'=>'45' ,'parcialA'=>'12',   'parcialB'=>'10',  'parcialC'=>'9', 'parcialD'=>'9', 'parcialE'=>'5'),
            array ('pn'=>'46' ,'parcialA'=>'12',   'parcialB'=>'10',  'parcialC'=>'10', 'parcialD'=>'9', 'parcialE'=>'5'),
            array ('pn'=>'47' ,'parcialA'=>'12',   'parcialB'=>'10',  'parcialC'=>'10', 'parcialD'=>'9', 'parcialE'=>'6'),
            array ('pn'=>'48' ,'parcialA'=>'12',   'parcialB'=>'11',  'parcialC'=>'10', 'parcialD'=>'9', 'parcialE'=>'6'),
            array ('pn'=>'49' ,'parcialA'=>'12',   'parcialB'=>'11',  'parcialC'=>'10', 'parcialD'=>'10', 'parcialE'=>'6'),
            array ('pn'=>'50' ,'parcialA'=>'12',   'parcialB'=>'11',  'parcialC'=>'10', 'parcialD'=>'10', 'parcialE'=>'7'),
            array ('pn'=>'51' ,'parcialA'=>'12',   'parcialB'=>'11',  'parcialC'=>'11', 'parcialD'=>'10', 'parcialE'=>'7'),
            array ('pn'=>'52' ,'parcialA'=>'12',   'parcialB'=>'11',  'parcialC'=>'11', 'parcialD'=>'10', 'parcialE'=>'8'),
            array ('pn'=>'53' ,'parcialA'=>'12',   'parcialB'=>'11',  'parcialC'=>'11', 'parcialD'=>'11', 'parcialE'=>'8'),
            array ('pn'=>'54' ,'parcialA'=>'12',   'parcialB'=>'12',  'parcialC'=>'11', 'parcialD'=>'11', 'parcialE'=>'8'),
            array ('pn'=>'55' ,'parcialA'=>'12',   'parcialB'=>'12',  'parcialC'=>'11', 'parcialD'=>'11', 'parcialE'=>'9'),
            array ('pn'=>'56' ,'parcialA'=>'12',   'parcialB'=>'12',  'parcialC'=>'12', 'parcialD'=>'11', 'parcialE'=>'9'),
            array ('pn'=>'57' ,'parcialA'=>'12',   'parcialB'=>'12',  'parcialC'=>'12', 'parcialD'=>'11', 'parcialE'=>'10'),
            array ('pn'=>'58' ,'parcialA'=>'12',   'parcialB'=>'12',  'parcialC'=>'12', 'parcialD'=>'12', 'parcialE'=>'10'),
            array ('pn'=>'59' ,'parcialA'=>'12',   'parcialB'=>'12',  'parcialC'=>'12', 'parcialD'=>'12', 'parcialE'=>'11'),            
            array ('pn'=>'60' ,'parcialA'=>'12',   'parcialB'=>'12',  'parcialC'=>'12', 'parcialD'=>'12', 'parcialE'=>'12'),
            
			);
             
         

        foreach ($lstStructure as $lst) {
			
			// print "elemento 1: {$lst[$i]}";
            $objeto = new RavenPuntajeNormal();
			$objeto->setPn($lst['pn']);
			$objeto->setParcialA($lst['parcialA']);
			$objeto->setParcialB($lst['parcialB']);
			$objeto->setParcialC($lst['parcialC']);
			$objeto->setParcialD($lst['parcialD']);
			$objeto->setParcialE($lst['parcialE']);			
			$manager->persist($objeto);
         
        }
        $manager->flush();

}
}

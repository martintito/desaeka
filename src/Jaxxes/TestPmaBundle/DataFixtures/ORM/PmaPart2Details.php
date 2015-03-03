<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de Ekka Jaxxes.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestPmaBundle\Entity\PmaPart2Detail;
use Jaxxes\TestPmaBundle\Entity\PmaPart2DetailAlternativeCorrect;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para las pregunstas de la segunda prueba del PMA
 */
 
// class Resumes implements FixtureInterface
 class PmaPart2Details extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstPmaPart2Details = array(	
            array ('number'=>'1' ,'rutaFotoOperation'=>'01.pma.preg.jpg',   'rutaFotoAlternatives'=>'01.pma.alternativas.jpg',  'block'=>'1'),
            array ('number'=>'2' ,'rutaFotoOperation'=>'02.pma.preg.jpg',   'rutaFotoAlternatives'=>'02.pma.alternativas.jpg',  'block'=>'1'),
            array ('number'=>'3' ,'rutaFotoOperation'=>'03.pma.preg.jpg',   'rutaFotoAlternatives'=>'03.pma.alternativas.jpg',  'block'=>'1'),
            array ('number'=>'4' ,'rutaFotoOperation'=>'04.pma.preg.jpg',   'rutaFotoAlternatives'=>'04.pma.alternativas.jpg',  'block'=>'1'),
            array ('number'=>'5' ,'rutaFotoOperation'=>'05.pma.preg.jpg',   'rutaFotoAlternatives'=>'05.pma.alternativas.jpg',  'block'=>'1'),
            array ('number'=>'6' ,'rutaFotoOperation'=>'06.pma.preg.jpg',   'rutaFotoAlternatives'=>'06.pma.alternativas.jpg',  'block'=>'1'),
            array ('number'=>'7' ,'rutaFotoOperation'=>'07.pma.preg.jpg',   'rutaFotoAlternatives'=>'07.pma.alternativas.jpg',  'block'=>'1'),
            
            array ('number'=>'8' ,'rutaFotoOperation'=>'08.pma.preg.jpg',   'rutaFotoAlternatives'=>'08.pma.alternativas.jpg',  'block'=>'2'),
            array ('number'=>'9' ,'rutaFotoOperation'=>'09.pma.preg.jpg',   'rutaFotoAlternatives'=>'09.pma.alternativas.jpg',  'block'=>'2'),
            array ('number'=>'10','rutaFotoOperation'=>'10.pma.preg.jpg',   'rutaFotoAlternatives'=>'10.pma.alternativas.jpg',  'block'=>'2'),
            array ('number'=>'11','rutaFotoOperation'=>'11.pma.preg.jpg',   'rutaFotoAlternatives'=>'11.pma.alternativas.jpg',  'block'=>'2'),
            
            array ('number'=>'12','rutaFotoOperation'=>'12.pma.preg.jpg',   'rutaFotoAlternatives'=>'12.pma.alternativas.jpg',  'block'=>'3'),
            array ('number'=>'13','rutaFotoOperation'=>'13.pma.preg.jpg',   'rutaFotoAlternatives'=>'13.pma.alternativas.jpg',  'block'=>'3'),
            array ('number'=>'14','rutaFotoOperation'=>'14.pma.preg.jpg',   'rutaFotoAlternatives'=>'14.pma.alternativas.jpg',  'block'=>'3'),
            
            array ('number'=>'15','rutaFotoOperation'=>'15.pma.preg.jpg',   'rutaFotoAlternatives'=>'15.pma.alternativas.jpg',  'block'=>'4'),
            array ('number'=>'16','rutaFotoOperation'=>'16.pma.preg.jpg',   'rutaFotoAlternatives'=>'16.pma.alternativas.jpg',  'block'=>'4'),
            array ('number'=>'17','rutaFotoOperation'=>'17.pma.preg.jpg',   'rutaFotoAlternatives'=>'17.pma.alternativas.jpg',  'block'=>'4'),
            array ('number'=>'18','rutaFotoOperation'=>'18.pma.preg.jpg',   'rutaFotoAlternatives'=>'18.pma.alternativas.jpg',  'block'=>'4'),
            array ('number'=>'19','rutaFotoOperation'=>'19.pma.preg.jpg',   'rutaFotoAlternatives'=>'19.pma.alternativas.jpg',  'block'=>'4'),
            array ('number'=>'20','rutaFotoOperation'=>'20.pma.preg.jpg',   'rutaFotoAlternatives'=>'20.pma.alternativas.jpg',  'block'=>'4'),
            
								);
                                
        $lstPmaPart2DetailAlternatives = array(	
            array ('number'=>'1' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'C'), 
                                                                    array ('alternativeCorrect'=>'D'),
                                                                   ),
                   ),
            array ('number'=>'2' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'B'), 
                                                                    array ('alternativeCorrect'=>'C'),
                                                                    array ('alternativeCorrect'=>'F'),
                                                                   ),
                   ),
            array ('number'=>'3' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'D'),
                                                                   ),
                   ),
            array ('number'=>'4' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'B'), 
                                                                    array ('alternativeCorrect'=>'D'),
                                                                    array ('alternativeCorrect'=>'F'),
                                                                   ),
                   ),
            array ('number'=>'5' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'D'), 
                                                                    array ('alternativeCorrect'=>'E'),
                                                                    array ('alternativeCorrect'=>'F'),
                                                                   ),
                   ),
            array ('number'=>'6' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'D'), 
                                                                    array ('alternativeCorrect'=>'F'),
                                                                   ),
                   ),
            array ('number'=>'7' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'C'),
                                                                    array ('alternativeCorrect'=>'E'),
                                                                   ),
                   ),
            array ('number'=>'8' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'C'), 
                                                                    array ('alternativeCorrect'=>'F'),
                                                                   ),
                   ),
            array ('number'=>'9' , 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'B'),
                                                                    array ('alternativeCorrect'=>'E'),
                                                                   ),
                   ),
            array ('number'=>'10', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'B'),
                                                                    array ('alternativeCorrect'=>'C'),
                                                                   ),
                   ),
            array ('number'=>'11', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'B'),
                                                                    array ('alternativeCorrect'=>'C'),
                                                                   ),
                   ),
            array ('number'=>'12', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'C'),
                                                                   ),
                   ),
            array ('number'=>'13', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'B'),
                                                                   ),
                   ),
            array ('number'=>'14', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'B'),
                                                                    array ('alternativeCorrect'=>'F'),
                                                                   ),
                   ),
            array ('number'=>'15', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'B'),
                                                                    array ('alternativeCorrect'=>'E'),
                                                                   ),
                   ),
            array ('number'=>'16', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'C'), 
                                                                    array ('alternativeCorrect'=>'D'),
                                                                    array ('alternativeCorrect'=>'F'),
                                                                   ),
                   ),
            array ('number'=>'17', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'B'), 
                                                                    array ('alternativeCorrect'=>'D'),
                                                                    array ('alternativeCorrect'=>'E'),
                                                                   ),
                   ),
            array ('number'=>'18', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'B'),
                                                                    array ('alternativeCorrect'=>'D'),
                                                                   ),
                   ),
            array ('number'=>'19', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'D'),
                                                                    array ('alternativeCorrect'=>'E'),
                                                                   ),
                   ),
            array ('number'=>'20', 'alternativeCorrects' => array ( array ('alternativeCorrect'=>'A'), 
                                                                    array ('alternativeCorrect'=>'B'),
                                                                    array ('alternativeCorrect'=>'C'),
                                                                   ),
                   ),
            );
        
        
        $pmaPart2List = $manager->getRepository('TestPmaBundle:PmaPart2')->findAll();
        
        foreach ($pmaPart2List as $pmaPart2)
            $contador = 0;
            foreach ($lstPmaPart2Details as $pmaPart2Detail) {
                $objeto = new PmaPart2Detail();
                
                $objeto->setNumber($pmaPart2Detail['number']);
                $objeto->setRutaFotoOperation($pmaPart2Detail['rutaFotoOperation']);
                $objeto->setRutaFotoAlternatives($pmaPart2Detail['rutaFotoAlternatives']);
                $objeto->setBlock($pmaPart2Detail['block']);
                
                $objeto->setPmaPart2($pmaPart2);
                
                $manager->persist($objeto);
                
                if ($lstPmaPart2DetailAlternatives[$contador]['number'] == $pmaPart2Detail['number'] ) {
                
                    foreach ($lstPmaPart2DetailAlternatives[$contador]['alternativeCorrects'] as $elemAlternativeCorrect) {
                       
                        $pmaPart2DetailAlternativeCorrect = new PmaPart2DetailAlternativeCorrect();
                        
                        $pmaPart2DetailAlternativeCorrect->setAlternativeCorrect($elemAlternativeCorrect['alternativeCorrect']);
                        $pmaPart2DetailAlternativeCorrect->setPmaPart2Detail($objeto);
                        
                        $manager->persist($pmaPart2DetailAlternativeCorrect);						
                    }
                    
                } 
                $contador = $contador + 1;
            }        
            $manager->flush();
    }
}



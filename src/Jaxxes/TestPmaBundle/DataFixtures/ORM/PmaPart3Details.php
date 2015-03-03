<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicaci�n de Ekka Jaxxes.
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestPmaBundle\Entity\PmaPart3Detail;
use Jaxxes\TestPmaBundle\Entity\PmaPart3DetailAlternative;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para las pregunstas de la segunda prueba del PMA
 */
 
// class Resumes implements FixtureInterface
 class PmaPart3Details extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstPmaPart3Details = array(	
            array ('number'=>'1' ,'question'=>'a a b c c d e e f g g',              'alternativeCorrect'=>'h'),
            array ('number'=>'2' ,'question'=>'a x a y b x b y c x c y d x d',      'alternativeCorrect'=>'y'),
            array ('number'=>'3' ,'question'=>'a b c a b c d f d e f g h i',        'alternativeCorrect'=>'g'),
            array ('number'=>'4' ,'question'=>'a b c x y z d e f x y x z g h i',    'alternativeCorrect'=>'x'),
            array ('number'=>'5' ,'question'=>'a b c a b d a b e a b f',            'alternativeCorrect'=>'a'),
            array ('number'=>'6' ,'question'=>'x y z a x y z b x y z c x y z',      'alternativeCorrect'=>'d'),
            array ('number'=>'7' ,'question'=>'e f c g h c i j c k l c m n c',      'alternativeCorrect'=>'ñ'),
            array ('number'=>'8' ,'question'=>'c b a c b a c b a c b',              'alternativeCorrect'=>'a'),
            array ('number'=>'9' ,'question'=>'a m b c m d e f m g h i j',          'alternativeCorrect'=>'m'),
            array ('number'=>'10','question'=>'a a c c e e g g i i',                'alternativeCorrect'=>'k'),
            
            array ('number'=>'11','question'=>'e f e f c d g h g h c d i j',        'alternativeCorrect'=>'i'),
            array ('number'=>'12','question'=>'a b b c c c d d d d e e e e',        'alternativeCorrect'=>'e'),
            array ('number'=>'13','question'=>'a b c a b c d a b c d e',            'alternativeCorrect'=>'a'),
            array ('number'=>'14','question'=>'a b c c d e f f g h i i j k l',      'alternativeCorrect'=>'l'),
            array ('number'=>'15','question'=>'a b a c d c e f e g h g i j',        'alternativeCorrect'=>'i'),
            array ('number'=>'16','question'=>'a b c ñ o d e f ñ o g h i ñ o',   'alternativeCorrect'=>'j'),
            array ('number'=>'17','question'=>'a b b b c d d d e f f i g h h',      'alternativeCorrect'=>'h'),
            array ('number'=>'18','question'=>'h g f e d c b',                      'alternativeCorrect'=>'a'),
            array ('number'=>'19','question'=>'a c e g i k m',                      'alternativeCorrect'=>'ñ'),
            array ('number'=>'20','question'=>'a x b y c z a x b y c z a x b',      'alternativeCorrect'=>'y'),
            
            array ('number'=>'21','question'=>'a b b c d d e f f g h',              'alternativeCorrect'=>'h'),
            array ('number'=>'22','question'=>'f g i j l m ñ o q r t u',           'alternativeCorrect'=>'w'),
            array ('number'=>'23','question'=>'a b c a d e f d g h i g j k l',      'alternativeCorrect'=>'j'),
            array ('number'=>'24','question'=>'a s b t c u d v e w f x g',          'alternativeCorrect'=>'y'),
            array ('number'=>'25','question'=>'a a b b c d d e e f g g h',          'alternativeCorrect'=>'h'),
            array ('number'=>'26','question'=>'a a b a b c c d c d e e f',          'alternativeCorrect'=>'e'),
            array ('number'=>'27','question'=>'a c f h k m o q',                    'alternativeCorrect'=>'t'),
            array ('number'=>'28','question'=>'v v v v v w w w w x x x y',          'alternativeCorrect'=>'y'),
            array ('number'=>'29','question'=>'a b c c b a d e f f e d g h i',      'alternativeCorrect'=>'i'),
            array ('number'=>'30','question'=>'a b c b c d e f e f g h i h',        'alternativeCorrect'=>'i'),
								);
                                
        $lstPmaPart3DetailAlternatives = array(	
            array ('number'=>'1' , 'alternatives' => array ( array ('alternative'=>'a'), 
                                                             array ('alternative'=>'b'), 
                                                             array ('alternative'=>'c'), 
                                                             array ('alternative'=>'f'), 
                                                             array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                            ),
                   ),
                   
            array ('number'=>'2' , 'alternatives' => array ( array ('alternative'=>'d'), 
                                                             array ('alternative'=>'e'), 
                                                             array ('alternative'=>'f'), 
                                                             array ('alternative'=>'x'), 
                                                             array ('alternative'=>'y'), 
                                                             array ('alternative'=>'z'), 
                                                            ),
                   ),

            array ('number'=>'3' , 'alternatives' => array ( array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                            ),
                   ),
            
            array ('number'=>'4' , 'alternatives' => array ( array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                             array ('alternative'=>'x'), 
                                                             array ('alternative'=>'y'), 
                                                             array ('alternative'=>'z'), 
                                                            ),
                   ),
            
            array ('number'=>'5' , 'alternatives' => array ( array ('alternative'=>'a'), 
                                                             array ('alternative'=>'b'), 
                                                             array ('alternative'=>'c'), 
                                                             array ('alternative'=>'f'), 
                                                             array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                            ),
                   ),
            
            array ('number'=>'6' , 'alternatives' => array ( array ('alternative'=>'x'), 
                                                             array ('alternative'=>'b'), 
                                                             array ('alternative'=>'c'), 
                                                             array ('alternative'=>'d'), 
                                                             array ('alternative'=>'e'), 
                                                             array ('alternative'=>'y'), 
                                                            ),
                   ),
            
            array ('number'=>'7' , 'alternatives' => array ( array ('alternative'=>'c'), 
                                                             array ('alternative'=>'d'), 
                                                             array ('alternative'=>'m'), 
                                                             array ('alternative'=>'n'), 
                                                             array ('alternative'=>'ñ'), 
                                                             array ('alternative'=>'o'), 
                                                            ),
                   ),
            
            array ('number'=>'8' , 'alternatives' => array ( array ('alternative'=>'a'), 
                                                             array ('alternative'=>'b'), 
                                                             array ('alternative'=>'c'), 
                                                             array ('alternative'=>'d'), 
                                                             array ('alternative'=>'e'), 
                                                             array ('alternative'=>'f'), 
                                                            ),
                   ),
            
            array ('number'=>'9' , 'alternatives' => array ( array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                             array ('alternative'=>'m'), 
                                                            ),
                   ),
            
            array ('number'=>'10', 'alternatives' => array ( array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                             array ('alternative'=>'m'), 
                                                            ),
                   ),
            
            array ('number'=>'11', 'alternatives' => array ( array ('alternative'=>'c'), 
                                                             array ('alternative'=>'d'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                            ),
                   ),
            
            array ('number'=>'12', 'alternatives' => array ( array ('alternative'=>'d'), 
                                                             array ('alternative'=>'e'), 
                                                             array ('alternative'=>'f'), 
                                                             array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                            ),
                   ),
            
            array ('number'=>'13', 'alternatives' => array ( array ('alternative'=>'a'), 
                                                             array ('alternative'=>'b'), 
                                                             array ('alternative'=>'c'), 
                                                             array ('alternative'=>'d'), 
                                                             array ('alternative'=>'e'), 
                                                             array ('alternative'=>'f'), 
                                                            ),
                   ),
            
            array ('number'=>'14', 'alternatives' => array ( array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                             array ('alternative'=>'m'), 
                                                             array ('alternative'=>'n'), 
                                                             array ('alternative'=>'ñ'), 
                                                            ),
                   ),
            
            array ('number'=>'15', 'alternatives' => array ( array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                            ),
                   ),
            
            array ('number'=>'16', 'alternatives' => array ( array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'ñ'), 
                                                             array ('alternative'=>'o'), 
                                                             array ('alternative'=>'p'), 
                                                            ),
                   ),
            
            array ('number'=>'17', 'alternatives' => array ( array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                            ),
                   ),
            
            array ('number'=>'18', 'alternatives' => array ( array ('alternative'=>'a'), 
                                                             array ('alternative'=>'b'), 
                                                             array ('alternative'=>'c'), 
                                                             array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                            ),
                   ),
            
            array ('number'=>'19', 'alternatives' => array ( array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                             array ('alternative'=>'m'), 
                                                             array ('alternative'=>'n'), 
                                                             array ('alternative'=>'ñ'), 
                                                            ),
                   ),
            
            array ('number'=>'20', 'alternatives' => array ( array ('alternative'=>'a'), 
                                                             array ('alternative'=>'b'), 
                                                             array ('alternative'=>'c'), 
                                                             array ('alternative'=>'x'), 
                                                             array ('alternative'=>'y'), 
                                                             array ('alternative'=>'z'), 
                                                            ),
                   ),
            
            array ('number'=>'21', 'alternatives' => array ( array ('alternative'=>'e'), 
                                                             array ('alternative'=>'f'), 
                                                             array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                            ),
                   ),
            
            array ('number'=>'22', 'alternatives' => array ( array ('alternative'=>'s'), 
                                                             array ('alternative'=>'t'), 
                                                             array ('alternative'=>'u'), 
                                                             array ('alternative'=>'v'), 
                                                             array ('alternative'=>'w'), 
                                                             array ('alternative'=>'x'), 
                                                            ),
                   ),
            
            array ('number'=>'23', 'alternatives' => array ( array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                             array ('alternative'=>'m'), 
                                                             array ('alternative'=>'n'), 
                                                            ),
                   ),
            
            array ('number'=>'24', 'alternatives' => array ( array ('alternative'=>'f'), 
                                                             array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'x'), 
                                                             array ('alternative'=>'y'), 
                                                             array ('alternative'=>'z'), 
                                                            ),
                   ),
            
            array ('number'=>'25', 'alternatives' => array ( array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                             array ('alternative'=>'m'), 
                                                            ),
                   ),
            
            array ('number'=>'26', 'alternatives' => array ( array ('alternative'=>'e'), 
                                                             array ('alternative'=>'f'), 
                                                             array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                            ),
                   ),
            
            array ('number'=>'27', 'alternatives' => array ( array ('alternative'=>'p'), 
                                                             array ('alternative'=>'q'), 
                                                             array ('alternative'=>'r'), 
                                                             array ('alternative'=>'s'), 
                                                             array ('alternative'=>'t'), 
                                                             array ('alternative'=>'u'), 
                                                            ),
                   ),
            
            array ('number'=>'28', 'alternatives' => array ( array ('alternative'=>'u'), 
                                                             array ('alternative'=>'v'), 
                                                             array ('alternative'=>'w'), 
                                                             array ('alternative'=>'x'), 
                                                             array ('alternative'=>'y'), 
                                                             array ('alternative'=>'z'), 
                                                            ),
                   ),
            
            array ('number'=>'29', 'alternatives' => array ( array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                             array ('alternative'=>'l'), 
                                                             array ('alternative'=>'m'), 
                                                            ),
                   ),
            
            array ('number'=>'30', 'alternatives' => array ( array ('alternative'=>'f'), 
                                                             array ('alternative'=>'g'), 
                                                             array ('alternative'=>'h'), 
                                                             array ('alternative'=>'i'), 
                                                             array ('alternative'=>'j'), 
                                                             array ('alternative'=>'k'), 
                                                            ),
                   ),

            );
        
        $pmaPart3List = $manager->getRepository('TestPmaBundle:PmaPart3')->findAll();
        
        foreach ($pmaPart3List as $pmaPart3)
            $contador = 0;
            foreach ($lstPmaPart3Details as $pmaPart3Detail) {
                $objeto = new PmaPart3Detail();
                
                $objeto->setNumber($pmaPart3Detail['number']);
                $objeto->setQuestion($pmaPart3Detail['question']);
                $objeto->setAlternativeCorrect($pmaPart3Detail['alternativeCorrect']);
                
                $objeto->setPmaPart3($pmaPart3);
                
                if ($lstPmaPart3DetailAlternatives[$contador]['number'] == $pmaPart3Detail['number'] ) {
                
                    foreach ($lstPmaPart3DetailAlternatives[$contador]['alternatives'] as $elemAlternative) {
                       
                        $pmaPart3DetailAlternative = new PmaPart3DetailAlternative();
                        
                        $pmaPart3DetailAlternative->setAlternative($elemAlternative['alternative']);
                        $pmaPart3DetailAlternative->setPmaPart3Detail($objeto);
                        
                        $objeto->getPmaPart3DetailAlternatives()->add($pmaPart3DetailAlternative);
                        
                        //$manager->persist($pmaPart3DetailAlternative);						
                    }
                    
                $manager->persist($objeto);
                } 
                $contador = $contador + 1;
            }        
            $manager->flush();
    }
}

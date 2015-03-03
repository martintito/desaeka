<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA jaxxes.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestPmaBundle\Entity\PmaPart4;
use Jaxxes\TestPmaBundle\Entity\PmaPart4Group;
use Jaxxes\TestPmaBundle\Entity\PmaPart4Detail;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para la cuarta prueba del PMA
 */
 
// class Resumes implements FixtureInterface
 class PmaPart4s extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 2;
    }
    private $container;
    
    
    public function load(ObjectManager $manager)
    {
        $lstPmaPart4s = array(
								array ('descripcion'=>'Prueba numero 4'),
								);
                                
        $lstPmaPart4Groups  = array(
            array ('groupInt'=>'1' ,'block'=>'1'),
            array ('groupInt'=>'2' ,'block'=>'1'),
            array ('groupInt'=>'3' ,'block'=>'1'),
            array ('groupInt'=>'4' ,'block'=>'1'),
            array ('groupInt'=>'5' ,'block'=>'1'),
            array ('groupInt'=>'6' ,'block'=>'1'),
            array ('groupInt'=>'7' ,'block'=>'1'),
            array ('groupInt'=>'8' ,'block'=>'2'),
            array ('groupInt'=>'9' ,'block'=>'2'),
            array ('groupInt'=>'10','block'=>'2'),
            array ('groupInt'=>'11','block'=>'2'),
            array ('groupInt'=>'12','block'=>'2'),
            array ('groupInt'=>'13','block'=>'2'),
            array ('groupInt'=>'14','block'=>'2'),
								);
        
        
        $lstPmaPart4Details = array(
            array ('groupInt'=>'1' ,'details' => array( array ('number'=>'1', 'letter'=>'a', 'valor1'=>'61', 'valor2'=>'34', 'valor3'=>'78', 'valor4'=>'53', 'result'=>'226', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'2', 'letter'=>'b', 'valor1'=>'31', 'valor2'=>'59', 'valor3'=>'52', 'valor4'=>'68', 'result'=>'200', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'3', 'letter'=>'c', 'valor1'=>'66', 'valor2'=>'73', 'valor3'=>'15', 'valor4'=>'38', 'result'=>'202', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'4', 'letter'=>'d', 'valor1'=>'73', 'valor2'=>'29', 'valor3'=>'56', 'valor4'=>'33', 'result'=>'211', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'5', 'letter'=>'e', 'valor1'=>'13', 'valor2'=>'39', 'valor3'=>'99', 'valor4'=>'32', 'result'=>'183', 'alternativeCorrect'=>'M' ), 
                                                            ),
                   ),
                   
            
            array ('groupInt'=>'2' ,'details' => array( array ('number'=>'6', 'letter'=>'a', 'valor1'=>'48', 'valor2'=>'45', 'valor3'=>'17', 'valor4'=>'82', 'result'=>'192', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'7', 'letter'=>'b', 'valor1'=>'88', 'valor2'=>'29', 'valor3'=>'69', 'valor4'=>'98', 'result'=>'284', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'8', 'letter'=>'c', 'valor1'=>'86', 'valor2'=>'49', 'valor3'=>'54', 'valor4'=>'22', 'result'=>'111', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'9', 'letter'=>'d', 'valor1'=>'69', 'valor2'=>'44', 'valor3'=>'89', 'valor4'=>'84', 'result'=>'286', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'10','letter'=>'e', 'valor1'=>'71', 'valor2'=>'37', 'valor3'=>'66', 'valor4'=>'55', 'result'=>'129', 'alternativeCorrect'=>'M' ), 
                                                            ),
                   ),
            
            array ('groupInt'=>'3' ,'details' => array( array ('number'=>'11','letter'=>'a', 'valor1'=>'44', 'valor2'=>'49', 'valor3'=>'23', 'valor4'=>'48', 'result'=>'164', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'12','letter'=>'b', 'valor1'=>'75', 'valor2'=>'54', 'valor3'=>'36', 'valor4'=>'17', 'result'=>'162', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'13','letter'=>'c', 'valor1'=>'26', 'valor2'=>'44', 'valor3'=>'75', 'valor4'=>'51', 'result'=>'196', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'14','letter'=>'d', 'valor1'=>'99', 'valor2'=>'77', 'valor3'=>'82', 'valor4'=>'68', 'result'=>'316', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'15','letter'=>'e', 'valor1'=>'25', 'valor2'=>'46', 'valor3'=>'92', 'valor4'=>'57', 'result'=>'220', 'alternativeCorrect'=>'B' ), 
                                                            ),
                   ),
            
            array ('groupInt'=>'4' ,'details' => array( array ('number'=>'16','letter'=>'a', 'valor1'=>'43', 'valor2'=>'34', 'valor3'=>'89', 'valor4'=>'32', 'result'=>'198', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'17','letter'=>'b', 'valor1'=>'31', 'valor2'=>'73', 'valor3'=>'13', 'valor4'=>'48', 'result'=>'185', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'18','letter'=>'c', 'valor1'=>'59', 'valor2'=>'29', 'valor3'=>'39', 'valor4'=>'45', 'result'=>'192', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'19','letter'=>'d', 'valor1'=>'52', 'valor2'=>'56', 'valor3'=>'99', 'valor4'=>'17', 'result'=>'124', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'20','letter'=>'e', 'valor1'=>'68', 'valor2'=>'33', 'valor3'=>'32', 'valor4'=>'82', 'result'=>'225', 'alternativeCorrect'=>'M' ), 
                                                            ),
                   ),
                   
            array ('groupInt'=>'5' ,'details' => array( array ('number'=>'21','letter'=>'a', 'valor1'=>'78', 'valor2'=>'56', 'valor3'=>'76', 'valor4'=>'35', 'result'=>'245', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'22','letter'=>'b', 'valor1'=>'95', 'valor2'=>'49', 'valor3'=>'44', 'valor4'=>'37', 'result'=>'205', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'23','letter'=>'c', 'valor1'=>'79', 'valor2'=>'22', 'valor3'=>'84', 'valor4'=>'55', 'result'=>'240', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'24','letter'=>'d', 'valor1'=>'89', 'valor2'=>'64', 'valor3'=>'61', 'valor4'=>'34', 'result'=>'258', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'25','letter'=>'e', 'valor1'=>'97', 'valor2'=>'35', 'valor3'=>'66', 'valor4'=>'73', 'result'=>'271', 'alternativeCorrect'=>'B' ), 
                                                            ),
                    ),
                   
                   
            array ('groupInt'=>'6' ,'details' => array( array ('number'=>'26','letter'=>'a', 'valor1'=>'13', 'valor2'=>'92', 'valor3'=>'31', 'valor4'=>'36', 'result'=>'172', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'27','letter'=>'b', 'valor1'=>'26', 'valor2'=>'99', 'valor3'=>'26', 'valor4'=>'62', 'result'=>'213', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'28','letter'=>'c', 'valor1'=>'44', 'valor2'=>'77', 'valor3'=>'86', 'valor4'=>'68', 'result'=>'275', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'29','letter'=>'d', 'valor1'=>'97', 'valor2'=>'92', 'valor3'=>'26', 'valor4'=>'86', 'result'=>'201', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'30','letter'=>'e', 'valor1'=>'13', 'valor2'=>'99', 'valor3'=>'86', 'valor4'=>'79', 'result'=>'367', 'alternativeCorrect'=>'M' ), 
                                                            ),
                   ),
            
            array ('groupInt'=>'7' ,'details' => array( array ('number'=>'31','letter'=>'a', 'valor1'=>'26', 'valor2'=>'77', 'valor3'=>'32', 'valor4'=>'99', 'result'=>'234', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'32','letter'=>'b', 'valor1'=>'44', 'valor2'=>'82', 'valor3'=>'84', 'valor4'=>'32', 'result'=>'232', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'33','letter'=>'c', 'valor1'=>'75', 'valor2'=>'68', 'valor3'=>'39', 'valor4'=>'57', 'result'=>'339', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'34','letter'=>'d', 'valor1'=>'51', 'valor2'=>'39', 'valor3'=>'92', 'valor4'=>'32', 'result'=>'314', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'35','letter'=>'e', 'valor1'=>'81', 'valor2'=>'46', 'valor3'=>'43', 'valor4'=>'48', 'result'=>'208', 'alternativeCorrect'=>'M' ), 
                                                            ),
                   ),
            
            array ('groupInt'=>'8' ,'details' => array( array ('number'=>'36','letter'=>'a', 'valor1'=>'32', 'valor2'=>'98', 'valor3'=>'22', 'valor4'=>'91', 'result'=>'243', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'37','letter'=>'b', 'valor1'=>'97', 'valor2'=>'63', 'valor3'=>'76', 'valor4'=>'57', 'result'=>'303', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'38','letter'=>'c', 'valor1'=>'23', 'valor2'=>'36', 'valor3'=>'41', 'valor4'=>'65', 'result'=>'165', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'39','letter'=>'d', 'valor1'=>'71', 'valor2'=>'46', 'valor3'=>'67', 'valor4'=>'62', 'result'=>'236', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'40','letter'=>'e', 'valor1'=>'48', 'valor2'=>'59', 'valor3'=>'17', 'valor4'=>'16', 'result'=>'450', 'alternativeCorrect'=>'M' ), 
                                                            ),
                   ),
            
            array ('groupInt'=>'9' ,'details' => array( array ('number'=>'41','letter'=>'a', 'valor1'=>'24', 'valor2'=>'85', 'valor3'=>'94', 'valor4'=>'47', 'result'=>'250', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'42','letter'=>'b', 'valor1'=>'89', 'valor2'=>'95', 'valor3'=>'55', 'valor4'=>'79', 'result'=>'218', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'43','letter'=>'c', 'valor1'=>'26', 'valor2'=>'86', 'valor3'=>'34', 'valor4'=>'99', 'result'=>'345', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'44','letter'=>'d', 'valor1'=>'81', 'valor2'=>'39', 'valor3'=>'84', 'valor4'=>'79', 'result'=>'293', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'45','letter'=>'e', 'valor1'=>'75', 'valor2'=>'47', 'valor3'=>'55', 'valor4'=>'19', 'result'=>'196', 'alternativeCorrect'=>'B' ), 
                                                            ),
                   ),
                   
            array ('groupInt'=>'10','details' => array( array ('number'=>'46','letter'=>'a', 'valor1'=>'18', 'valor2'=>'15', 'valor3'=>'57', 'valor4'=>'96', 'result'=>'186', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'47','letter'=>'b', 'valor1'=>'59', 'valor2'=>'44', 'valor3'=>'78', 'valor4'=>'89', 'result'=>'280', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'48','letter'=>'c', 'valor1'=>'64', 'valor2'=>'61', 'valor3'=>'34', 'valor4'=>'19', 'result'=>'188', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'49','letter'=>'d', 'valor1'=>'83', 'valor2'=>'34', 'valor3'=>'41', 'valor4'=>'16', 'result'=>'174', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'50','letter'=>'e', 'valor1'=>'32', 'valor2'=>'97', 'valor3'=>'23', 'valor4'=>'71', 'result'=>'243', 'alternativeCorrect'=>'M' ), 
                                                            ),
                   ),
            
            
            array ('groupInt'=>'11','details' => array( array ('number'=>'51','letter'=>'a', 'valor1'=>'98', 'valor2'=>'63', 'valor3'=>'36', 'valor4'=>'46', 'result'=>'243', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'52','letter'=>'b', 'valor1'=>'22', 'valor2'=>'76', 'valor3'=>'41', 'valor4'=>'67', 'result'=>'196', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'53','letter'=>'c', 'valor1'=>'91', 'valor2'=>'57', 'valor3'=>'65', 'valor4'=>'62', 'result'=>'295', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'54','letter'=>'d', 'valor1'=>'28', 'valor2'=>'63', 'valor3'=>'62', 'valor4'=>'87', 'result'=>'260', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'55','letter'=>'e', 'valor1'=>'81', 'valor2'=>'39', 'valor3'=>'67', 'valor4'=>'52', 'result'=>'239', 'alternativeCorrect'=>'B' ), 
                                                            ),
                   ),
            
            
            array ('groupInt'=>'12','details' => array( array ('number'=>'56','letter'=>'a', 'valor1'=>'89', 'valor2'=>'86', 'valor3'=>'69', 'valor4'=>'71', 'result'=>'315', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'57','letter'=>'b', 'valor1'=>'75', 'valor2'=>'82', 'valor3'=>'99', 'valor4'=>'87', 'result'=>'243', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'58','letter'=>'c', 'valor1'=>'51', 'valor2'=>'68', 'valor3'=>'32', 'valor4'=>'23', 'result'=>'174', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'59','letter'=>'d', 'valor1'=>'43', 'valor2'=>'73', 'valor3'=>'39', 'valor4'=>'17', 'result'=>'182', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'60','letter'=>'e', 'valor1'=>'31', 'valor2'=>'29', 'valor3'=>'99', 'valor4'=>'82', 'result'=>'251', 'alternativeCorrect'=>'M' ), 
                                                            ),
                   ),
            
            
            array ('groupInt'=>'13','details' => array( array ('number'=>'61','letter'=>'a', 'valor1'=>'59', 'valor2'=>'56', 'valor3'=>'32', 'valor4'=>'19', 'result'=>'146', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'62','letter'=>'b', 'valor1'=>'52', 'valor2'=>'33', 'valor3'=>'55', 'valor4'=>'33', 'result'=>'173', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'63','letter'=>'c', 'valor1'=>'68', 'valor2'=>'47', 'valor3'=>'56', 'valor4'=>'58', 'result'=>'239', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'64','letter'=>'d', 'valor1'=>'31', 'valor2'=>'43', 'valor3'=>'92', 'valor4'=>'79', 'result'=>'245', 'alternativeCorrect'=>'B' ), 
                                                        array ('number'=>'65','letter'=>'e', 'valor1'=>'59', 'valor2'=>'73', 'valor3'=>'43', 'valor4'=>'57', 'result'=>'232', 'alternativeCorrect'=>'B' ), 
                                                            ),
                   ),
            
            
            array ('groupInt'=>'14','details' => array( array ('number'=>'66','letter'=>'a', 'valor1'=>'42', 'valor2'=>'29', 'valor3'=>'13', 'valor4'=>'32', 'result'=>'106', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'67','letter'=>'b', 'valor1'=>'68', 'valor2'=>'56', 'valor3'=>'39', 'valor4'=>'48', 'result'=>'201', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'68','letter'=>'c', 'valor1'=>'75', 'valor2'=>'33', 'valor3'=>'45', 'valor4'=>'99', 'result'=>'242', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'69','letter'=>'d', 'valor1'=>'78', 'valor2'=>'47', 'valor3'=>'32', 'valor4'=>'17', 'result'=>'154', 'alternativeCorrect'=>'M' ), 
                                                        array ('number'=>'70','letter'=>'e', 'valor1'=>'23', 'valor2'=>'56', 'valor3'=>'55', 'valor4'=>'82', 'result'=>'216', 'alternativeCorrect'=>'B' ), 
                                                            ),
                   ),
            );

                                
        $pmaList = $manager->getRepository('TestPmaBundle:Pma')->findAll();
        
        foreach ($pmaList as $pma)
            foreach ($lstPmaPart4s as $pmaPart4) {
                $objeto = new PmaPart4();
                
                $objeto->setDescripcion($pmaPart4['descripcion']);
                $objeto->setPma($pma);
                
                $contador = 0;
                
                foreach ($lstPmaPart4Groups as $elemPmaPart4Group) {
                    $objPmaPart4Group = new PmaPart4Group();
                    
                    $objPmaPart4Group->setGroupInt($elemPmaPart4Group['groupInt']);
                    $objPmaPart4Group->setBlock($elemPmaPart4Group['block']);
                    $objPmaPart4Group->setPmaPart4($objeto);
                    
                    if ($lstPmaPart4Details[$contador]['groupInt'] == $elemPmaPart4Group['groupInt'] ) {
                    
                        foreach ($lstPmaPart4Details[$contador]['details'] as $elemPmaPart4Detail) {

                            $objPmaPart4Detail = new PmaPart4Detail();
                            
                            $objPmaPart4Detail->setNumber($elemPmaPart4Detail['number']);
                            $objPmaPart4Detail->setLetter($elemPmaPart4Detail['letter']);
                            $objPmaPart4Detail->setValor1($elemPmaPart4Detail['valor1']);
                            $objPmaPart4Detail->setValor2($elemPmaPart4Detail['valor2']);
                            $objPmaPart4Detail->setValor3($elemPmaPart4Detail['valor3']);
                            $objPmaPart4Detail->setValor4($elemPmaPart4Detail['valor4']);
                            $objPmaPart4Detail->setResult($elemPmaPart4Detail['result']);
                            $objPmaPart4Detail->setAlternativeCorrect($elemPmaPart4Detail['alternativeCorrect']);
                            
                            $objPmaPart4Detail->setPmaPart4Group($objPmaPart4Group);
                            
                            $objPmaPart4Group->getPmaPart4Details()->add($objPmaPart4Detail);
                            
                        }
                        
                    }
                    
                    
                    $objeto->getPmaPart4Groups()->add($objPmaPart4Group);
                    
                    $contador = $contador + 1;
                }
                


                $manager->persist($objeto);            
            }
            $manager->flush();
    }
}

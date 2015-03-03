<?php

/*
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * Este archivo pertenece a la aplicaci�n de prueba Cupon.
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestGatbBundle\Entity\GatbPart2Detail;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para las pregunstas de la primera prueba del GATB
 */
 
// class Resumes implements FixtureInterface
 class GatbPart2Details extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstGatbPart2Details = array(	
            array ('number'=>'1','factorN'=>'34','operation'=>'SUME (+)',       'valueTop'=>'3 + 4', 'valueDown'=>'', 'alternativeCorrect'=>'D', 'field_A'=>'3', 'field_B'=>'5', 'field_C'=>'6', 'field_D'=>'7', 'field_E'=>'ninguna de éstas'),
            array ('number'=>'2','factorN'=>'36','operation'=>'RESTE ( - )',      'valueTop'=>'7 - 4', 'valueDown'=>'', 'alternativeCorrect'=>'B', 'field_A'=>'2', 'field_B'=>'3', 'field_C'=>'5', 'field_D'=>'8', 'field_E'=>'ninguna de éstas'),
            array ('number'=>'3','factorN'=>'38','operation'=>'MULTIPLIQUE ( X )','valueTop'=>'2 X 4', 'valueDown'=>'', 'alternativeCorrect'=>'C', 'field_A'=>'5', 'field_B'=>'7', 'field_C'=>'8', 'field_D'=>'10','field_E'=>'ninguna de éstas'),
            array ('number'=>'4','factorN'=>'40','operation'=>'RESTE ( - )',      'valueTop'=>'63 - 41','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'22','field_B'=>'25','field_C'=>'27','field_D'=>'29','field_E'=>'ninguna de éstas'),
            array ('number'=>'5','factorN'=>'42','operation'=>'DIVIDA ( : )',     'valueTop'=>'27 : 3', 'valueDown'=>'', 'alternativeCorrect'=>'A', 'field_A'=>'9', 'field_B'=>'11','field_C'=>'12','field_D'=>'13','field_E'=>'ninguna de éstas'),
            array ('number'=>'6','factorN'=>'44','operation'=>'RESTE ( - )',      'valueTop'=>'19 - 9', 'valueDown'=>'', 'alternativeCorrect'=>'B', 'field_A'=>'9', 'field_B'=>'10','field_C'=>'11','field_D'=>'14','field_E'=>'ninguna de éstas'),
            array ('number'=>'7','factorN'=>'46','operation'=>'DIVIDA ( : )',     'valueTop'=>'168 : 4','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'373/4', 'field_B'=>'39','field_C'=>'411/4','field_D'=>'42','field_E'=>'ninguna de éstas'),
            array ('number'=>'8','factorN'=>'48','operation'=>'SUME ( + )',     'valueTop'=>'1 + 8 + 3','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'373/4', 'field_B'=>'39','field_C'=>'411/4','field_D'=>'42','field_E'=>'ninguna de éstas'),
            array ('number'=>'9','factorN'=>'50','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'15 X 4','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'20', 'field_B'=>'40','field_C'=>'50','field_D'=>'60','field_E'=>'ninguna de éstas'),
            array ('number'=>'10','factorN'=>'50','operation'=>'DIVIDA ( : )',     'valueTop'=>'35 : 5','valueDown'=>'','alternativeCorrect'=>'C', 'field_A'=>'5', 'field_B'=>'6','field_C'=>'7','field_D'=>'8','field_E'=>'ninguna de éstas'),
            array ('number'=>'11','factorN'=>'52','operation'=>'SUME (+)',     'valueTop'=>'16 + 17 + 20','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'53', 'field_B'=>'60','field_C'=>'62','field_D'=>'69','field_E'=>'ninguna de éstas'),
            array ('number'=>'12','factorN'=>'54','operation'=>'RESTE ( - )',     'valueTop'=>'832 - 21','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'791', 'field_B'=>'801','field_C'=>'810','field_D'=>'811','field_E'=>'ninguna de éstas'),
            array ('number'=>'13','factorN'=>'56','operation'=>'DIVIDA ( : )',     'valueTop'=>'42 : 6','valueDown'=>'','alternativeCorrect'=>'E', 'field_A'=>'4', 'field_B'=>'6','field_C'=>'8','field_D'=>'9','field_E'=>'ninguna de éstas'),
            array ('number'=>'14','factorN'=>'58','operation'=>'RESTE ( - )',     'valueTop'=>'120 - 32','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'88', 'field_B'=>'89','field_C'=>'90','field_D'=>'98','field_E'=>'ninguna de éstas'),
            array ('number'=>'15','factorN'=>'60','operation'=>'DIVIDA ( : )',     'valueTop'=>'297 : 9','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'33', 'field_B'=>'35','field_C'=>'36','field_D'=>'41','field_E'=>'ninguna de éstas'),
            array ('number'=>'16','factorN'=>'62','operation'=>'SUME (+)',     'valueTop'=>'697 + 13','valueDown'=>'','alternativeCorrect'=>'C', 'field_A'=>'684', 'field_B'=>'700','field_C'=>'710','field_D'=>'711','field_E'=>'ninguna de éstas'),
            array ('number'=>'17','factorN'=>'64','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'93 X 4','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'332', 'field_B'=>'354','field_C'=>'366','field_D'=>'372','field_E'=>'ninguna de éstas'),
            array ('number'=>'18','factorN'=>'68','operation'=>'DIVIDA ( : )',     'valueTop'=>'186 : 6','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'28', 'field_B'=>'29','field_C'=>'30','field_D'=>'31','field_E'=>'ninguna de éstas'),
            array ('number'=>'19','factorN'=>'70','operation'=>'RESTE ( - )',     'valueTop'=>'4345 - 917','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'3398', 'field_B'=>'3428','field_C'=>'3434','field_D'=>'3538','field_E'=>'ninguna de éstas'),
            array ('number'=>'20','factorN'=>'74','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'43 X 7','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'291', 'field_B'=>'301','field_C'=>'308','field_D'=>'318','field_E'=>'ninguna de éstas'),
            array ('number'=>'21','factorN'=>'76','operation'=>'RESTE ( - )',     'valueTop'=>'109 - 37','valueDown'=>'','alternativeCorrect'=>'E', 'field_A'=>'32', 'field_B'=>'46','field_C'=>'62','field_D'=>'65','field_E'=>'ninguna de éstas'),
            array ('number'=>'22','factorN'=>'78','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'634 X 6','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'3794', 'field_B'=>'3804','field_C'=>'3812','field_D'=>'3854','field_E'=>'ninguna de éstas'),
            array ('number'=>'23','factorN'=>'80','operation'=>'RESTE ( - )',     'valueTop'=>'89213 - 764','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'88317', 'field_B'=>'88359','field_C'=>'88432','field_D'=>'88449','field_E'=>'ninguna de éstas'),
            array ('number'=>'24','factorN'=>'82','operation'=>'SUME (+)',     'valueTop'=>'563 + 877 + 89','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'1429', 'field_B'=>'1439','field_C'=>'1519','field_D'=>'1529','field_E'=>'ninguna de éstas'),
            array ('number'=>'25','factorN'=>'84','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'58 X 9','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'512', 'field_B'=>'522','field_C'=>'527','field_D'=>'552','field_E'=>'ninguna de éstas'),
            array ('number'=>'26','factorN'=>'86','operation'=>'SUME (+)',     'valueTop'=>'878 + 552 + 97','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'1527', 'field_B'=>'1534','field_C'=>'1567','field_D'=>'1593','field_E'=>'ninguna de éstas'),
            array ('number'=>'27','factorN'=>'88','operation'=>'DIVIDA ( : )',     'valueTop'=>'132 : 11','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'11', 'field_B'=>'12','field_C'=>'13','field_D'=>'22','field_E'=>'ninguna de éstas'),
            array ('number'=>'28','factorN'=>'90','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'7246 X 3','valueDown'=>'','alternativeCorrect'=>'C', 'field_A'=>'21628', 'field_B'=>'21728','field_C'=>'21738','field_D'=>'21748','field_E'=>'ninguna de éstas'),
            array ('number'=>'29','factorN'=>'92','operation'=>'DIVIDA ( : )',     'valueTop'=>'644021 : 7','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'9203', 'field_B'=>'92003','field_C'=>'92030','field_D'=>'92041','field_E'=>'ninguna de éstas'),
            array ('number'=>'30','factorN'=>'94','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'749 X 4','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'2996', 'field_B'=>'2999','field_C'=>'3026','field_D'=>'3093','field_E'=>'ninguna de éstas'),
            array ('number'=>'31','factorN'=>'96','operation'=>'RESTE ( - )',     'valueTop'=>'520763 - 2591','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'517175', 'field_B'=>'518012','field_C'=>'518162','field_D'=>'518172','field_E'=>'ninguna de éstas'),
            array ('number'=>'32','factorN'=>'98','operation'=>'SUME (+)',     'valueTop'=>'1824 + 617 + 533','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'2974', 'field_B'=>'2977','field_C'=>'2984','field_D'=>'3074','field_E'=>'ninguna de éstas'),
            array ('number'=>'33','factorN'=>'100','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'76034 X 8','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'608176', 'field_B'=>'608212','field_C'=>'608264','field_D'=>'608272','field_E'=>'ninguna de éstas'),
            array ('number'=>'34','factorN'=>'102','operation'=>'RESTE ( - )',     'valueTop'=>'71304 - 895','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'7409', 'field_B'=>'7419','field_C'=>'70408','field_D'=>'70409','field_E'=>'ninguna de éstas'),
            array ('number'=>'35','factorN'=>'104','operation'=>'SUME (+)',     'valueTop'=>'84546 + 1732 + 2040','valueDown'=>'','alternativeCorrect'=>'D', 'field_A'=>'87313', 'field_B'=>'88218','field_C'=>'88306','field_D'=>'88318','field_E'=>'ninguna de éstas'),
            array ('number'=>'36','factorN'=>'106','operation'=>'DIVIDA ( : )',     'valueTop'=>'90363 : 7','valueDown'=>'','alternativeCorrect'=>'E', 'field_A'=>'1299', 'field_B'=>'12707','field_C'=>'12894','field_D'=>'12907','field_E'=>'ninguna de éstas'),
            array ('number'=>'37','factorN'=>'108','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'15435 X 30','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'463050', 'field_B'=>'463055','field_C'=>'466040','field_D'=>'466135','field_E'=>'ninguna de éstas'),
            array ('number'=>'38','factorN'=>'110','operation'=>'RESTE ( - )',     'valueTop'=>'131141 - 89742','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'41399', 'field_B'=>'42309','field_C'=>'42399','field_D'=>'50399','field_E'=>'ninguna de éstas'),
            array ('number'=>'39','factorN'=>'112','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'782 X 52','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'40564', 'field_B'=>'40664','field_C'=>'50664','field_D'=>'51674','field_E'=>'ninguna de éstas'),
            array ('number'=>'40','factorN'=>'114','operation'=>'SUME (+)',     'valueTop'=>'1942 + 539 + 621','valueDown'=>'','alternativeCorrect'=>'E', 'field_A'=>'2972', 'field_B'=>'2984','field_C'=>'2990','field_D'=>'3012','field_E'=>'ninguna de éstas'),
            array ('number'=>'41','factorN'=>'116','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'872 X 43','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'37496', 'field_B'=>'38496','field_C'=>'38226','field_D'=>'39296','field_E'=>'ninguna de éstas'),
            array ('number'=>'42','factorN'=>'118','operation'=>'RESTE ( - )',     'valueTop'=>'4065947 - 694478','valueDown'=>'','alternativeCorrect'=>'A', 'field_A'=>'3371469', 'field_B'=>'3371498','field_C'=>'3374696','field_D'=>'3376469','field_E'=>'ninguna de éstas'),
            array ('number'=>'43','factorN'=>'120','operation'=>'DIVIDA ( : )',     'valueTop'=>'1103565 : 5','valueDown'=>'','alternativeCorrect'=>'E', 'field_A'=>'22713', 'field_B'=>'24713','field_C'=>'110713','field_D'=>'120713','field_E'=>'ninguna de éstas'),
            array ('number'=>'44','factorN'=>'122','operation'=>'SUME (+)',     'valueTop'=>'21307 + 9865 + 52270 + 327 + 2663','valueDown'=>'','alternativeCorrect'=>'C', 'field_A'=>'0', 'field_B'=>'0','field_C'=>'0','field_D'=>'0','field_E'=>'ninguna de éstas'),
            array ('number'=>'45','factorN'=>'124','operation'=>'DIVIDA ( : )',     'valueTop'=>'840300 : 60','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'1405', 'field_B'=>'14005','field_C'=>'14015','field_D'=>'14050','field_E'=>'ninguna de éstas'),
            array ('number'=>'46','factorN'=>'126','operation'=>'MULTIPLIQUE ( X )',     'valueTop'=>'47609 X 102','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'4846118', 'field_B'=>'4856118','field_C'=>'4857318','field_D'=>'4866118','field_E'=>'ninguna de éstas'),
            array ('number'=>'47','factorN'=>'128','operation'=>'SUME (+)',     'valueTop'=>'123 + 64 + 741 + 5 + 819 + 7 + 78 + 1 + 965 + 42 + 89 + 7 + 6','valueDown'=>'','alternativeCorrect'=>'B', 'field_A'=>'2927', 'field_B'=>'2947','field_C'=>'2967','field_D'=>'2987','field_E'=>'ninguna de éstas'),
            array ('number'=>'48','factorN'=>'130','operation'=>'DIVIDA ( : )',     'valueTop'=>'263718 : 13','valueDown'=>'','alternativeCorrect'=>'E', 'field_A'=>'2028', 'field_B'=>'2029 1/3','field_C'=>'20186','field_D'=>'20276','field_E'=>'ninguna de éstas'),
            array ('number'=>'49','factorN'=>'132','operation'=>'SUME (+)',     'valueTop'=>'13209 + 8977 + 61140 + 497 + 2558','valueDown'=>'','alternativeCorrect'=>'C', 'field_A'=>'75361', 'field_B'=>'85381','field_C'=>'86376','field_D'=>'86381','field_E'=>'ninguna de éstas'),
            array ('number'=>'50','factorN'=>'132','operation'=>'DIVIDA ( : )',     'valueTop'=>'344913 : 17','valueDown'=>'','alternativeCorrect'=>'C', 'field_A'=>'2289', 'field_B'=>'20146','field_C'=>'20269','field_D'=>'20289','field_E'=>'ninguna de éstas'),
								);
                                
        $gatbPart2List = $manager->getRepository('TestGatbBundle:GatbPart2')->findAll();
        
        foreach ($gatbPart2List as $gatbPart2)
            foreach ($lstGatbPart2Details as $gatbPart2Detail) {
                $objeto = new GatbPart2Detail();
                
                $objeto->setNumber($gatbPart2Detail['number']);
                $objeto->setFactorN($gatbPart2Detail['factorN']);
                $objeto->setOperation($gatbPart2Detail['operation']);
                $objeto->setValueTop($gatbPart2Detail['valueTop']);
                $objeto->setValueDown($gatbPart2Detail['valueDown']);
                $objeto->setAlternativeCorrect($gatbPart2Detail['alternativeCorrect']);
                $objeto->setField_A($gatbPart2Detail['field_A']);
                $objeto->setField_B($gatbPart2Detail['field_B']);
                $objeto->setField_C($gatbPart2Detail['field_C']);
                $objeto->setField_D($gatbPart2Detail['field_D']);
                $objeto->setField_E($gatbPart2Detail['field_E']);
                $objeto->setGatbPart2($gatbPart2);
                
                $manager->persist($objeto);            
            }        
            $manager->flush();
    }
}

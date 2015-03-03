<?php

/*
 * (c) Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * Este archivo pertenece a la aplicación de prueba Cupon.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestGatbBundle\Entity\GatbPart3Detail;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para las pregunstas de la primera prueba del GATB
 */
 
// class Resumes implements FixtureInterface
 class GatbPart3Details extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstGatbPart3Details = array(	
            array ('number'=>'1' ,'factorG'=>'2' , 'factorS'=>'51' ,'rutaFotoOperation'=>'FotoOperation1.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives1.jpg' , 'alternativeCorrect'=>'B'),
            array ('number'=>'2' ,'factorG'=>'3' , 'factorS'=>'55' ,'rutaFotoOperation'=>'FotoOperation2.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives2.jpg' , 'alternativeCorrect'=>'A'),
            array ('number'=>'3' ,'factorG'=>'4' , 'factorS'=>'58' ,'rutaFotoOperation'=>'FotoOperation3.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives3.jpg' , 'alternativeCorrect'=>'A'),
            array ('number'=>'4' ,'factorG'=>'4' , 'factorS'=>'61' ,'rutaFotoOperation'=>'FotoOperation4.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives4.jpg' , 'alternativeCorrect'=>'C'),
            array ('number'=>'5' ,'factorG'=>'5' , 'factorS'=>'65' ,'rutaFotoOperation'=>'FotoOperation5.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives5.jpg' , 'alternativeCorrect'=>'D'),
            array ('number'=>'6' ,'factorG'=>'6' , 'factorS'=>'68' ,'rutaFotoOperation'=>'FotoOperation6.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives6.jpg' , 'alternativeCorrect'=>'D'),
            array ('number'=>'7' ,'factorG'=>'7' , 'factorS'=>'71' ,'rutaFotoOperation'=>'FotoOperation7.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives7.jpg' , 'alternativeCorrect'=>'A'),
            array ('number'=>'8' ,'factorG'=>'8' , 'factorS'=>'74' ,'rutaFotoOperation'=>'FotoOperation8.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives8.jpg' , 'alternativeCorrect'=>'C'),
            array ('number'=>'9' ,'factorG'=>'9' , 'factorS'=>'78' ,'rutaFotoOperation'=>'FotoOperation9.jpg' , 'rutaFotoAlternatives'=>'FotoAlternatives9.jpg' , 'alternativeCorrect'=>'B'),
            array ('number'=>'10','factorG'=>'10', 'factorS'=>'81' ,'rutaFotoOperation'=>'FotoOperation10.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives10.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'11','factorG'=>'11', 'factorS'=>'84' ,'rutaFotoOperation'=>'FotoOperation11.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives11.jpg', 'alternativeCorrect'=>'D'),
            array ('number'=>'12','factorG'=>'12', 'factorS'=>'88' ,'rutaFotoOperation'=>'FotoOperation12.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives12.jpg', 'alternativeCorrect'=>'B'),
            array ('number'=>'13','factorG'=>'13', 'factorS'=>'91' ,'rutaFotoOperation'=>'FotoOperation13.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives13.jpg', 'alternativeCorrect'=>'C'),
            array ('number'=>'14','factorG'=>'14', 'factorS'=>'94' ,'rutaFotoOperation'=>'FotoOperation14.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives14.jpg', 'alternativeCorrect'=>'C'),
            array ('number'=>'15','factorG'=>'15', 'factorS'=>'97' ,'rutaFotoOperation'=>'FotoOperation15.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives15.jpg', 'alternativeCorrect'=>'D'),
            array ('number'=>'16','factorG'=>'16', 'factorS'=>'101','rutaFotoOperation'=>'FotoOperation16.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives16.jpg', 'alternativeCorrect'=>'D'),
            array ('number'=>'17','factorG'=>'17', 'factorS'=>'104','rutaFotoOperation'=>'FotoOperation17.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives17.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'18','factorG'=>'17', 'factorS'=>'107','rutaFotoOperation'=>'FotoOperation18.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives18.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'19','factorG'=>'18', 'factorS'=>'110','rutaFotoOperation'=>'FotoOperation19.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives19.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'20','factorG'=>'19', 'factorS'=>'114','rutaFotoOperation'=>'FotoOperation20.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives20.jpg', 'alternativeCorrect'=>'C'),
            array ('number'=>'21','factorG'=>'20', 'factorS'=>'117','rutaFotoOperation'=>'FotoOperation21.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives21.jpg', 'alternativeCorrect'=>'C'),
            array ('number'=>'22','factorG'=>'21', 'factorS'=>'120','rutaFotoOperation'=>'FotoOperation22.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives22.jpg', 'alternativeCorrect'=>'B'),
            array ('number'=>'23','factorG'=>'22', 'factorS'=>'124','rutaFotoOperation'=>'FotoOperation23.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives23.jpg', 'alternativeCorrect'=>'D'),
            array ('number'=>'24','factorG'=>'23', 'factorS'=>'127','rutaFotoOperation'=>'FotoOperation24.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives24.jpg', 'alternativeCorrect'=>'D'),
            array ('number'=>'25','factorG'=>'24', 'factorS'=>'130','rutaFotoOperation'=>'FotoOperation25.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives25.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'26','factorG'=>'25', 'factorS'=>'133','rutaFotoOperation'=>'FotoOperation26.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives26.jpg', 'alternativeCorrect'=>'B'),
            array ('number'=>'27','factorG'=>'26', 'factorS'=>'137','rutaFotoOperation'=>'FotoOperation27.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives27.jpg', 'alternativeCorrect'=>'D'),
            array ('number'=>'28','factorG'=>'27', 'factorS'=>'140','rutaFotoOperation'=>'FotoOperation28.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives28.jpg', 'alternativeCorrect'=>'C'),
            array ('number'=>'29','factorG'=>'28', 'factorS'=>'143','rutaFotoOperation'=>'FotoOperation29.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives29.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'30','factorG'=>'29', 'factorS'=>'147','rutaFotoOperation'=>'FotoOperation30.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives30.jpg', 'alternativeCorrect'=>'B'),
            array ('number'=>'31','factorG'=>'31', 'factorS'=>'153','rutaFotoOperation'=>'FotoOperation31.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives31.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'32','factorG'=>'31', 'factorS'=>'153','rutaFotoOperation'=>'FotoOperation32.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives32.jpg', 'alternativeCorrect'=>'D'),
            array ('number'=>'33','factorG'=>'31', 'factorS'=>'158','rutaFotoOperation'=>'FotoOperation33.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives33.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'34','factorG'=>'32', 'factorS'=>'160','rutaFotoOperation'=>'FotoOperation34.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives34.jpg', 'alternativeCorrect'=>'B'),
            array ('number'=>'35','factorG'=>'33', 'factorS'=>'163','rutaFotoOperation'=>'FotoOperation35.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives35.jpg', 'alternativeCorrect'=>'B'),
            array ('number'=>'36','factorG'=>'34', 'factorS'=>'166','rutaFotoOperation'=>'FotoOperation36.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives36.jpg', 'alternativeCorrect'=>'B'),
            array ('number'=>'37','factorG'=>'35', 'factorS'=>'169','rutaFotoOperation'=>'FotoOperation37.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives37.jpg', 'alternativeCorrect'=>'B'),
            array ('number'=>'38','factorG'=>'36', 'factorS'=>'173','rutaFotoOperation'=>'FotoOperation38.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives38.jpg', 'alternativeCorrect'=>'D'),
            array ('number'=>'39','factorG'=>'37', 'factorS'=>'176','rutaFotoOperation'=>'FotoOperation39.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives39.jpg', 'alternativeCorrect'=>'A'),
            array ('number'=>'40','factorG'=>'38', 'factorS'=>'179','rutaFotoOperation'=>'FotoOperation40.jpg', 'rutaFotoAlternatives'=>'FotoAlternatives40.jpg', 'alternativeCorrect'=>'B'),
            
            
								);
                                
        $gatbPart3List = $manager->getRepository('TestGatbBundle:GatbPart3')->findAll();
        
        foreach ($gatbPart3List as $gatbPart3)
            foreach ($lstGatbPart3Details as $gatbPart3Detail) {
                $objeto = new GatbPart3Detail();
                
                $objeto->setNumber($gatbPart3Detail['number']);
                $objeto->setFactorG($gatbPart3Detail['factorG']);
                $objeto->setFactorS($gatbPart3Detail['factorS']);
                $objeto->setRutaFotoOperation($gatbPart3Detail['rutaFotoOperation']);
                $objeto->setRutaFotoAlternatives($gatbPart3Detail['rutaFotoAlternatives']);
                $objeto->setAlternativeCorrect($gatbPart3Detail['alternativeCorrect']);
                
                $objeto->setGatbPart3($gatbPart3);
                
                $manager->persist($objeto);
            }        
            $manager->flush();
    }
}

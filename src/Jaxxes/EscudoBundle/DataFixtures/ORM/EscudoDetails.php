<?php

/*
 * (c) Rossana Janampa <rossana.janampa@acklis.com>

 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\EscudoBundle\Entity\EscudoDetail;


 class EscudoDetails extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 2;
    }
    private $container;
    
    
    public function load(ObjectManager $manager)
    {
        // El registro inicial para la Ficha del postulante
        
         $listQuestion = array(	array('orden'=>'1', 'number'=>'1' ,'question'=>'DESCRIBA EL QUE CONSIDERE SU MAYOR LOGRO Y ¿POR QUÉ?'),
								array('orden'=>'2', 'number'=>'2' ,'question'=>'DESCRIBA ¿CUÁL HA SIDO SU MAYOR FRUSTRACION, Y POR QUÉ?'),
								array('orden'=>'3', 'number'=>'3' ,'question'=>'DESCRIBA SUS TRES FORTALEZAS'),
								array('orden'=>'4', 'number'=>'4' ,'question'=>'DESCRIBA SUS TRES AREAS DE MEJORA:'),
								array('orden'=>'5', 'number'=>'5' ,'question'=>'DESCRIBA SUS METAS A CORTO/MEDIANO/LARGO PLAZO (A NIVEL PERSONAL Y LABORAL)'),
								array('orden'=>'6', 'number'=>'6' ,'question'=>'¿CUÁL ES SU LEMA?'),
								array('orden'=>'7', 'number'=>'7' ,'question'=>'¿CUÁL ES SU ANIMAL PREFERIDO?'),
								array('orden'=>'8', 'number'=>'8' ,'question'=>'SI DEJARA DE EXISTIR HOY ¿QUÉ DEJARÍA DE HERENCIA?'),
								array('orden'=>'9', 'number'=>'9' ,'question'=>'HAGA UNA DESCRIPCION INTEGRAL DE SU PERSONA'),
								array('orden'=>'10','number'=>'10','question'=>'CÓMO PIENSA QUE LO DESCRIBEN SUS COMPAÑEROS DE TRABAJO O SUS DIRIGIDOS'),
								array('orden'=>'11','number'=>'11','question'=>'¿QUÉ ES LO QUE BUSCA A NIVEL LABORAL?'),
								array('orden'=>'12','number'=>'12','question'=>'¿CÓMO LE GUSTARÍA QUE SEA SU JEFE IDEAL'),
								array('orden'=>'13','number'=>'13','question'=>'DESCRIBA PROBLEMAS DE TRABAJO COTIDIANOS'),
								array('orden'=>'14','number'=>'14','question'=>'¿QUÉ LO QUE MÁS LE GUSTA?'),
								array('orden'=>'15','number'=>'15','question'=>'¿QUÉ ES LO QUE MÁS LE DISGUSTA?'),
        );
	

	 // Obtener todas las cabeceras 
        $pregutaList = $manager->getRepository('EscudoBundle:Escudo')->findAll();
	 
	 foreach ($pregutaList as $entrevista)
        foreach ($listQuestion as $lst) {
			
			// print "elemento 1: {$lst[$i]}";
            $objeto = new EscudoDetail();
            $objeto->setQuestion($lst['question']);
            $objeto->setNumber($lst['number']);
            $objeto->setEscudo($entrevista);
            $manager->persist($objeto);                       
            
        }        
        $manager->flush();
    }
}

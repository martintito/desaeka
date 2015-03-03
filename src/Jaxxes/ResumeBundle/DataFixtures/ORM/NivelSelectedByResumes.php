<?php

/*
 * (c) Rossana Janampa <rossana.janampa@acklis.com>
 *
 * Este archivo pertenece a la aplicación de Jaxxes.
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\ResumeBundle\Entity\SectionSelectedByResume;
use Jaxxes\ResumeBundle\Entity\NivelSelectedByResume;

/**
 * Fixtures de la entidad NivelSelectedByResumes.
 * Carga los niveles por cada seccion
 */
 
 class NivelSelectedByResumes extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 10;
    }

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
         $nivelList = array(
				array(	'order'=>'1', 'items' => array (array('name'=>'Datos Generales', 'codprint'=>'1',),
														),
					),
				array(	'order'=>'2', 'items' => array (array('name'=>'Estudios de Post Grado o Maestría', 'codprint'=>'1',), //Educación
														array('name'=>'Estudios de Post Grado o Maestría', 'codprint'=>'6',), //nuevo
														array('name'=>'Estudios Universitarios', 'codprint'=>'2',),
														array('name'=>'Estudios Universitarios', 'codprint'=>'7',), // nuevo 
														array('name'=>'Estudios Técnicos', 'codprint'=>'3',),														
														array('name'=>'Otros Estudios', 'codprint'=>'4',),
														array('name'=>'Estudios Escolares', 'codprint'=>'5',), // se cambia de ubicación y el nombre
														array('name'=>'Idiomas', 'codprint'=>'0',),
														array('name'=>'Cómputo', 'codprint'=>'0',),														
														),
					),													
				array(	'order'=>'3', 'items' => array (array('name'=>'Último Trabajo o Trabajo Actual', 'codprint'=>'1',), // Informe Laboral
														array('name'=>'Anterior Trabajo', 'codprint'=>'2',),
														array('name'=>'Anterior Trabajo', 'codprint'=>'3',),
														array('name'=>'Metas Profesionales', 'codprint'=>'0',),
														array('name'=>'Expectativas remunerativas', 'codprint'=>'4',),
														array('name'=>'Referencias Laborales', 'codprint'=>'0',),											
														),					
					),
				array(	'order'=>'4', 'items' => array (array('name'=>'Entorno Familiar', 'codprint'=>'0',),  //Informe Personal
														array('name'=>'Referencias Personales', 'codprint'=>'0',),
														array('name'=>'Asociaciones','codprint'=>'0',),
														array('name'=>'Propiedades', 'codprint'=>'0',),
														array('name'=>'Salud Física', 'codprint'=>'0',),
														array('name'=>'Disponibilidad', 'codprint'=>'0',),
														),
					),

			);
			
         
        // Obtener todas los resume de la base de datos
        $seccionList = $manager->getRepository('ResumeBundle:SectionSelectedByResume')->findAll();

        $i = 0;
        
        foreach ($seccionList as $objSeccion) {
				$ItemList = $nivelList[$i]['items']; // lista de niveles			
				foreach ($ItemList as $Item){
					//print "{$Item} , ";					
					$elem = new NivelSelectedByResume();
					$elem->setName($Item['name']);
					$elem->setCodPrint($Item['codprint']);
					$elem->setSectionSelectedByResume($objSeccion);					
					$manager->persist($elem);
				}
				$i= $i+1;
			}			           
		$manager->flush();
		
	}

}

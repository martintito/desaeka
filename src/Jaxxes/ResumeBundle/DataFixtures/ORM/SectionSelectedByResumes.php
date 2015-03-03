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
use Jaxxes\ResumeBundle\Entity\Resume;

/**
 * Fixtures de la entidad SectionSelectedByResume.
 * Crea las secciones para la ficha del candidato
 */
 
 class SectionSelectedByResumes extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 5;
    }

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
         $seccionList = array( 	array( 'codprint'=>'1', 'name'=>'Datos Generales'),
								array( 'codprint'=>'2', 'name'=>'Educación'),
								array( 'codprint'=>'3', 'name'=>'Informe Laboral'),
								array( 'codprint'=>'0', 'name'=>'Informe Personal'),
								        
        );
        

        // Obtener todas los resume de la base de datos
        $resumeList = $manager->getRepository('ResumeBundle:Resume')->findAll();

        $i = 1;
        
        foreach ($resumeList as $objresume) {
			
			foreach ($seccionList as $seccionVar ) {
				$objSeccion = new SectionSelectedByResume();			
				$objSeccion->setResume($objresume);
				$objSeccion->setName($seccionVar['name']);
				$objSeccion->setCodPrint($seccionVar['codprint']);
				$manager->persist($objSeccion); 	
			}
			           
		}
		
		$manager->flush();
		
	}

}

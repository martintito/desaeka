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

use Jaxxes\GeneralBundle\Entity\Language;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro de la cabecera para Resume = Ficha del candidato
 */
 
// class Resumes implements FixtureInterface
 class Languages extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 1;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        // El registro inicial para la Ficha del postulante
        
         $lstLanguages = array(	
								array ('name'=>'chino', 'code'=>'zh'),
								array ('name'=>'español', 'code'=>'es'), 
								array ('name'=>'english', 'code'=>'en'),
								array ('name'=>'francés', 'code'=>'fr'),
								array ('name'=>'germany', 'code'=>'de'),
								array ('name'=>'italiano', 'code'=>'it'),
								array ('name'=>'japonés', 'code'=>'ja'),
								array ('name'=>'ruso', 'code'=>'ru'),
								array ('name'=>'portugués', 'code'=>'pt'),
								array ('name'=>'quechua', 'code'=>'qu'),								
								);
        
        foreach ($lstLanguages as $lst) {
            $objeto = new Language();
            $objeto->setName($lst['name']);
            $objeto->setCode($lst['code']);
            $manager->persist($objeto);            
        }        
        $manager->flush();
    }
}

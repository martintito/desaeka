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

use Jaxxes\RavenBundle\Entity\RavenBaremoAdulto;
//use Jaxxes\RavenBundle\Entity\PmaPart2DetailAlternativepercentil;

 
// class Resumes implements FixtureInterface
 class RavenBaremoAdultos extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstStructure = array(	
			/* 20 años */
            array ('pn'=>'23' ,'edadMin'=>'0', 'edadMax'=>'20',   'rangoMin'=>'0',  'rangoMax'=>'23', 'percentil'=>'5'),
            array ('pn'=>'28' ,'edadMin'=>'0', 'edadMax'=>'20',   'rangoMin'=>'24', 'rangoMax'=>'28', 'percentil'=>'10'),
            array ('pn'=>'37' ,'edadMin'=>'0', 'edadMax'=>'20',   'rangoMin'=>'29', 'rangoMax'=>'37', 'percentil'=>'25'),            
            array ('pn'=>'44' ,'edadMin'=>'0', 'edadMax'=>'20',   'rangoMin'=>'38', 'rangoMax'=>'48', 'percentil'=>'50'),            
            array ('pn'=>'49' ,'edadMin'=>'0', 'edadMax'=>'20',   'rangoMin'=>'49', 'rangoMax'=>'53', 'percentil'=>'75'),
            array ('pn'=>'54' ,'edadMin'=>'0', 'edadMax'=>'20',   'rangoMin'=>'54', 'rangoMax'=>'54', 'percentil'=>'90'),
            array ('pn'=>'55' ,'edadMin'=>'0', 'edadMax'=>'20',   'rangoMin'=>'55', 'rangoMax'=>'60', 'percentil'=>'95'),
            /* 25 años */
            array ('pn'=>'23' ,'edadMin'=>'21', 'edadMax'=>'25',   'rangoMin'=>'0',  'rangoMax'=>'23', 'percentil'=>'5'),
            array ('pn'=>'28' ,'edadMin'=>'21', 'edadMax'=>'25',   'rangoMin'=>'24', 'rangoMax'=>'28', 'percentil'=>'10'),
            array ('pn'=>'37' ,'edadMin'=>'21', 'edadMax'=>'25',   'rangoMin'=>'29', 'rangoMax'=>'37', 'percentil'=>'25'),
            array ('pn'=>'44' ,'edadMin'=>'21', 'edadMax'=>'25',   'rangoMin'=>'38', 'rangoMax'=>'48', 'percentil'=>'50'),
            array ('pn'=>'49' ,'edadMin'=>'21', 'edadMax'=>'25',   'rangoMin'=>'49', 'rangoMax'=>'53', 'percentil'=>'75'),
            array ('pn'=>'54' ,'edadMin'=>'21', 'edadMax'=>'25',   'rangoMin'=>'54', 'rangoMax'=>'54', 'percentil'=>'90'),
            array ('pn'=>'55' ,'edadMin'=>'21', 'edadMax'=>'25',   'rangoMin'=>'55', 'rangoMax'=>'60', 'percentil'=>'95'),
            /* 30 años */
            array ('pn'=>'34' ,'edadMin'=>'26', 'edadMax'=>'30',   'rangoMin'=>'0',  'rangoMax'=>'34', 'percentil'=>'25'),
            array ('pn'=>'42' ,'edadMin'=>'26', 'edadMax'=>'30',   'rangoMin'=>'35', 'rangoMax'=>'46', 'percentil'=>'50'),
            array ('pn'=>'47' ,'edadMin'=>'26', 'edadMax'=>'30',   'rangoMin'=>'47', 'rangoMax'=>'52', 'percentil'=>'75'),
            array ('pn'=>'53' ,'edadMin'=>'26', 'edadMax'=>'30',   'rangoMin'=>'53', 'rangoMax'=>'53', 'percentil'=>'90'),
            array ('pn'=>'54' ,'edadMin'=>'26', 'edadMax'=>'30',   'rangoMin'=>'54', 'rangoMax'=>'60', 'percentil'=>'95'),
            /* 35 años */
            array ('pn'=>'30' ,'edadMin'=>'31', 'edadMax'=>'35',   'rangoMin'=>'0',  'rangoMax'=>'30', 'percentil'=>'25'),
            array ('pn'=>'40' ,'edadMin'=>'31', 'edadMax'=>'35',   'rangoMin'=>'31', 'rangoMax'=>'44', 'percentil'=>'50'),
            array ('pn'=>'45' ,'edadMin'=>'31', 'edadMax'=>'35',   'rangoMin'=>'45', 'rangoMax'=>'50', 'percentil'=>'75'),
            array ('pn'=>'51' ,'edadMin'=>'31', 'edadMax'=>'35',   'rangoMin'=>'51', 'rangoMax'=>'52', 'percentil'=>'90'),
            array ('pn'=>'53' ,'edadMin'=>'31', 'edadMax'=>'35',   'rangoMin'=>'53', 'rangoMax'=>'60', 'percentil'=>'95'),
            /* 40 años */
            array ('pn'=>'27' ,'edadMin'=>'36', 'edadMax'=>'40',   'rangoMin'=>'0',  'rangoMax'=>'27', 'percentil'=>'25'),
            array ('pn'=>'38' ,'edadMin'=>'36', 'edadMax'=>'40',   'rangoMin'=>'28', 'rangoMax'=>'42', 'percentil'=>'50'),
            array ('pn'=>'43' ,'edadMin'=>'36', 'edadMax'=>'40',   'rangoMin'=>'43', 'rangoMax'=>'48', 'percentil'=>'75'),
            array ('pn'=>'49' ,'edadMin'=>'36', 'edadMax'=>'40',   'rangoMin'=>'49', 'rangoMax'=>'51', 'percentil'=>'90'),
            array ('pn'=>'52' ,'edadMin'=>'36', 'edadMax'=>'40',   'rangoMin'=>'52', 'rangoMax'=>'60', 'percentil'=>'95'),
            /* 45 años */
            array ('pn'=>'24' ,'edadMin'=>'41', 'edadMax'=>'45',   'rangoMin'=>'0',  'rangoMax'=>'24', 'percentil'=>'25'),
            array ('pn'=>'35' ,'edadMin'=>'41', 'edadMax'=>'45',   'rangoMin'=>'25', 'rangoMax'=>'40', 'percentil'=>'50'),
            array ('pn'=>'41' ,'edadMin'=>'41', 'edadMax'=>'45',   'rangoMin'=>'41', 'rangoMax'=>'46', 'percentil'=>'75'),
            array ('pn'=>'47' ,'edadMin'=>'41', 'edadMax'=>'45',   'rangoMin'=>'47', 'rangoMax'=>'49', 'percentil'=>'90'),
            array ('pn'=>'50' ,'edadMin'=>'41', 'edadMax'=>'45',   'rangoMin'=>'50', 'rangoMax'=>'60', 'percentil'=>'95'),
            /* 50 años */
            array ('pn'=>'21' ,'edadMin'=>'46', 'edadMax'=>'50',   'rangoMin'=>'0',  'rangoMax'=>'21', 'percentil'=>'25'),
            array ('pn'=>'33' ,'edadMin'=>'46', 'edadMax'=>'50',   'rangoMin'=>'22', 'rangoMax'=>'37', 'percentil'=>'50'),
            array ('pn'=>'39' ,'edadMin'=>'46', 'edadMax'=>'50',   'rangoMin'=>'38', 'rangoMax'=>'44', 'percentil'=>'75'),
            array ('pn'=>'45' ,'edadMin'=>'46', 'edadMax'=>'50',   'rangoMin'=>'45', 'rangoMax'=>'47', 'percentil'=>'90'),
            array ('pn'=>'48' ,'edadMin'=>'46', 'edadMax'=>'50',   'rangoMin'=>'48', 'rangoMax'=>'60', 'percentil'=>'95'),
            /* 55 años */
            array ('pn'=>'18' ,'edadMin'=>'51', 'edadMax'=>'55',   'rangoMin'=>'0',  'rangoMax'=>'18',  'percentil'=>'25'),
            array ('pn'=>'30' ,'edadMin'=>'51', 'edadMax'=>'55',   'rangoMin'=>'19', 'rangoMax'=>'30',  'percentil'=>'50'),
            array ('pn'=>'37' ,'edadMin'=>'51', 'edadMax'=>'55',   'rangoMin'=>'12', 'rangoMax'=>'12',  'percentil'=>'75'),
            array ('pn'=>'43' ,'edadMin'=>'51', 'edadMax'=>'55',   'rangoMin'=>'12', 'rangoMax'=>'12',  'percentil'=>'90'),
            array ('pn'=>'46' ,'edadMin'=>'51', 'edadMax'=>'55',   'rangoMin'=>'12', 'rangoMax'=>'60',  'percentil'=>'95'),
           
            /* 60 años */
            array ('pn'=>'15' ,'edadMin'=>'56', 'edadMax'=>'60',   'rangoMin'=>'0',  'rangoMax'=>'15',  'percentil'=>'25'),
            array ('pn'=>'27' ,'edadMin'=>'56', 'edadMax'=>'60',   'rangoMin'=>'16', 'rangoMax'=>'34',  'percentil'=>'50'),
            array ('pn'=>'35' ,'edadMin'=>'56', 'edadMax'=>'60',   'rangoMin'=>'35', 'rangoMax'=>'40',  'percentil'=>'75'),
            array ('pn'=>'41' ,'edadMin'=>'56', 'edadMax'=>'60',   'rangoMin'=>'41', 'rangoMax'=>'43',  'percentil'=>'90'),
            array ('pn'=>'44' ,'edadMin'=>'56', 'edadMax'=>'60',   'rangoMin'=>'44', 'rangoMax'=>'60',  'percentil'=>'95'),            

            /* 65 años */
            array ('pn'=>'12' ,'edadMin'=>'61', 'edadMax'=>'65',   'rangoMin'=>'0',  'rangoMax'=>'12',  'percentil'=>'25'),
            array ('pn'=>'24' ,'edadMin'=>'61', 'edadMax'=>'65',   'rangoMin'=>'13', 'rangoMax'=>'32',  'percentil'=>'50'),
            array ('pn'=>'33' ,'edadMin'=>'61', 'edadMax'=>'65',   'rangoMin'=>'33', 'rangoMax'=>'38',  'percentil'=>'75'),
            array ('pn'=>'39' ,'edadMin'=>'61', 'edadMax'=>'65',   'rangoMin'=>'39', 'rangoMax'=>'41',  'percentil'=>'90'),
            array ('pn'=>'42' ,'edadMin'=>'61', 'edadMax'=>'65',   'rangoMin'=>'42', 'rangoMax'=>'60',  'percentil'=>'95'),            
            
			);
             
         

        foreach ($lstStructure as $lst) {
			
			// print "elemento 1: {$lst[$i]}";
            $objeto = new RavenBaremoAdulto();
			$objeto->setPn($lst['pn']);
			$objeto->setEdadMin($lst['edadMin']);
			$objeto->setEdadMax($lst['edadMax']);
			$objeto->setRangoMin($lst['rangoMin']);
			$objeto->setRangoMax($lst['rangoMax']);
			$objeto->setPercentil($lst['percentil']);
			$manager->persist($objeto);
         
        }
        $manager->flush();

}
}

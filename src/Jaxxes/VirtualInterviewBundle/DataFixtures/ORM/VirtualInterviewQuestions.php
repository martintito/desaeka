<?php

/*
 * (c) Rossana Janampa
 *
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\VirtualInterviewBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\VirtualInterviewBundle\Entity\VirtualInterviewQuestion;

 

 class VirtualInterviewQuestions extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 2;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        // El registro inicial para la Ficha del postulante
        
         $listQuestion = array(	array('orden'=>'1','question'=>'¿Cuál es su edad? Por favor indique lugar y fecha de nacimiento'),
								array('orden'=>'2','question'=>'¿Qué carrera universitaria estudió o que profesión o grado tiene?'),
								array('orden'=>'3','question'=>'¿Actualmente estudia? Por favor especificar (sede- lugar – horario- año de estudio)'),
								array('orden'=>'4','question'=>'¿Cuenta Ud. con experiencia exitosa en cargos similares no menores a 1 año?   Detalle. Cuéntenos más acerca de esta experiencia. ¿Qué funciones cumplía?'),
								array('orden'=>'5','question'=>'Ha leído el perfil ¿Cumple con lo detallado en el perfil? Hay algo que no cumple? Por favor especifique'),
								array('orden'=>'6','question'=>'¿Tiene experiencia de haber estado en situaciones críticas? ¿Cómo y Cuándo?'),
								array('orden'=>'7','question'=>'Díganos si usted ha liderado en alguna oportunidad funciones similares en alguna empresa o proyecto? Comente al detalle'),
								array('orden'=>'8','question'=>'¿Tiene usted deudas con Infocorp o alguna entidad bancaria?'),
								array('orden'=>'9','question'=>'¿Cuál fue su último o actual salario?¿Por qué se retiró de ese trabajo?'),
								array('orden'=>'10','question'=>'¿Cuáles son sus expectativas laborales y cuáles son sus expectativas  económicas?'),
								array('orden'=>'11','question'=>'Díganos tres fortalezas suyas en el ambiente laboral. Diga una virtud que lo defina'),
								array('orden'=>'12','question'=>'Díganos tres aspectos por mejorar en el ambiente laboral'),
								array('orden'=>'13','question'=>'¿Por qué le gustaría esta posición?'),
								array('orden'=>'14','question'=>'¿Por qué considera que lo deberíamos de contratar?'),
								array('orden'=>'15','question'=>'Cuál es su disponibilidad para poder iniciar este nuevo reto laboral? ¿Puede viajar? Especifíque'),
        );
	

	 // Obtener todas las cabeceras de entrevista virtual de la base de datos
        $entrevistaList = $manager->getRepository('VirtualInterviewBundle:VirtualInterview')->findAll();
	 
	 foreach ($entrevistaList as $entrevista)
        foreach ($listQuestion as $lst) {
			
			// print "elemento 1: {$lst[$i]}";
            $objeto = new VirtualInterviewQuestion();
            $objeto->setQuestion($lst['question']);
            $objeto->setOrden($lst['orden']);
            $objeto->setVirtualInterview($entrevista);
            $manager->persist($objeto);                       
            
        }        
        $manager->flush();
    }
}

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

use Jaxxes\ResumeBundle\Entity\QuestionbySection;
use Jaxxes\ResumeBundle\Entity\NivelSelectedByResume;

/**
 * Fixtures de la entidad NivelSelectedByResumes.
 * Carga los niveles por cada seccion
 */
 
 class QuestionbySections extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 12;
    }

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
         $QuestionList = array(
				array(	'order'=>'0', 'items' => array ( array ('name'=>'Nombre del postulante', 'typefield'=>'string','origentabla'=>'tabla','codprint'=>'1',), //Datos Generales
														 array ('name'=>'Cargo al que postula', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array ('name'=>'Estado civil','typefield'=>'table', 'origentabla'=>'maritaStatus','codprint'=>'4',),
														 array ('name'=>'Fecha nacimiento', 'typefield'=>'date', 'origentabla'=>'none','codprint'=>'3',),
														 array ('name'=>'Ciudad de nacimiento', 'typefield'=>'table', 'origentabla'=>'city','codprint'=>'0',),
														 array ('name'=>'Dirección', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array ('name'=>'Urbanización', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array ('name'=>'Ciudad', 'typefield'=>'table', 'origentabla'=>'city','codprint'=>'0',),
														 array ('name'=>'Teléfono Fijo', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array ('name'=>'Celular','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array ('name'=>'E-mail', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array ('name'=>'Tipo de documento', 'typefield'=>'table', 'origentabla'=>'documentType','codprint'=>'0',),
														 array ('name'=>'Documento Intentidad', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'2',),
														 array ('name'=>'Número de brevete', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array ('name'=>'Tipo de sangre', 'typefield'=>'table', 'origentabla'=>'bloodType','codprint'=>'0',),
														 array ('name'=>'Familiar de contacto / Teléfono', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														),
					),
				array(	'order'=>'1', 'items' => array ( array ('name'=>'Centro de Estudios', 'typefield'=>'Compania', 'origentabla'=>'tabla','codprint'=>'1',),//Educación
														 array ('name'=>'Especialidad', 'typefield'=>'table', 'origentabla'=>'speciality_study','codprint'=>'2',),
														 array ('name'=>'Nivel alcanzado', 'typefield'=>'table', 'origentabla'=>'pendiente','codprint'=>'0',),
														 array ('name'=>'Año inicio', 'typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array ('name'=>'Año de término', 'typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),														 
														 array ('name'=>'Rango Académico', 'typefield'=>'table', 'origentabla'=>'pendiente','codprint'=>'0',),
														),
					),													
				array(	'order'=>'2', 'items' => array ( array('name'=>'Idioma', 'typefield'=>'table', 'origentabla'=>'language', 'codprint'=>'0',), // Idioma
														 array('name'=>'Nivel de dominio','typefield'=>'table', 'origentabla'=>'language_level','codprint'=>'0',),
														 array('name'=>'Centro de estudios', 'typefield'=>'table', 'origentabla'=>'business','codprint'=>'0',),
														 array('name'=>'Año y mes de inicio', 'typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Año y mes de término', 'typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														// array('name'=>'Año fin', 'typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														// array('name'=>'Mes fin', 'typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),			
														),					
					),
				array(	'order'=>'3', 'items' => array (array('name'=>'Herramienta', 'typefield'=>'table', 'origentabla'=>'tabla','codprint'=>'0',),	  //Computo
														array('name'=>'Nivel de dominio', 'typefield'=>'table', 'origentabla'=>'tabla','codprint'=>'0',),	
														array('name'=>'Centro de estudios', 'typefield'=>'table', 'origentabla'=>'tabla','codprint'=>'0',),	
														array('name'=>'Año y mes de inicio', 'typefield'=>'string', 'origentabla'=>'tabla','codprint'=>'0',),	
														array('name'=>'Año y mes de término', 'typefield'=>'string', 'origentabla'=>'tabla','codprint'=>'0',),	
														// array('name'=>'Año fin', 'typefield'=>'string', 'origentabla'=>'tabla','codprint'=>'0',),	
														// array('name'=>'Mes fin', 'typefield'=>'string', 'origentabla'=>'tabla','codprint'=>'0',),	
														),
					),
				array(	'order'=>'4', 'items' => array ( array('name'=>'Nombre o Razón Social de la Empresa', 'typefield'=>'table', 'origentabla'=>'business','codprint'=>'1',), // Informe laboral
														 array('name'=>'Dirección', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Distrito de la empresa','typefield'=>'table', 'origentabla'=>'country-city','codprint'=>'0',),
														 array('name'=>'Giro de la empresa','typefield'=>'table', 'origentabla'=>'business_type','codprint'=>'0',),
														 array('name'=>'Descripción de la empresa','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Número de trabajadores','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',), // Se cambio el nombre
														 array('name'=>'Nivel de facturación','typefield'=>'table', 'origentabla'=>'country_invoice_range','codprint'=>'0',),
														 array('name'=>'Cargo desempeñado','typefield'=>'string', 'origentabla'=>'none','codprint'=>'2',),
														 array('name'=>'Periodo laboral (Fecha de inicio y término)','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 // array('name'=>'Fin mes periodo laboral','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Modalidad de contratación','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Remuneración bruta percibida mensual','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Moneda','typefield'=>'table', 'origentabla'=>'currency','codprint'=>'0',),
														 array('name'=>'Bonos','typefield'=>'boolean', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Monto de bono','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Periodicidad Bono','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Utilidad (Indique cantidad aprox)','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Describa las principales funciones realizadas','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Número de personas a su cargo','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Ascensos Logros y Premios (Fechas)','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Motivo de cese o motivo por el cual desea cambiarse de centro laboral (ESPECIFIQUE)','typefield'=>'string', 'origentabla'=>'none','codprint'=>'3',),
														),
					),				
				array(	'order'=>'5', 'items' => array ( array('name'=>'Metas a corto plazo',  'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),//Meta profesional
														 array('name'=>'Metas a mediano plazo', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Metas a largo plazo', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														),
					),
				array(	'order'=>'6', 'items' => array ( array('name'=>'Última o actual remuneración mensual bruta', 'typefield'=>'number', 'origentabla'=>'none','codprint'=>'1',), //Remuneración percibida - Expectativas remunerativas
														 array('name'=>'Número de sueldos recibidos al año','typefield'=>'number', 'origentabla'=>'none','codprint'=>'2',),
														 array('name'=>'Bono','typefield'=>'number', 'origentabla'=>'none','codprint'=>'3',),
														 array('name'=>'Utilidades','typefield'=>'number', 'origentabla'=>'none','codprint'=>'4',),
														 array('name'=>'Variable','typefield'=>'number', 'origentabla'=>'none','codprint'=>'5',),
														 array('name'=>'Expectativa remunerativa actual (mensual)','typefield'=>'number', 'origentabla'=>'none','codprint'=>'6',),
														),
					),
				array(	'order'=>'7', 'items' => array ( array('name'=>'Nombre y Apellido', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),//Referencias Laborales'
														 array('name'=>'Empresa', 'typefield'=>'table', 'origentabla'=>'business','codprint'=>'0',),
														 array('name'=>'Cargo', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',), 
														 array('name'=>'Teléfono Fijo / Celular', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														),
					),				
				array(	'order'=>'8', 'items' => array ( array('name'=>'Relación', 'typefield'=>'table', 'origentabla'=>'relationship','codprint'=>'0',),//Entorno Familiar
														 array('name'=>'Nombres y Apellidos', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Edad', 'typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Grado de instrucción / Profesión', 'typefield'=>'table', 'origentabla'=>'speciality_study','codprint'=>'0',),
														 array('name'=>'Ocupación', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														),
					),
				array(	'order'=>'9', 'items' => array ( array('name'=>'Nombre y Apellido', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',), //Referencias personales (Familiares, Pareja, Novio y/o Amigos)
														 array('name'=>'Edad', 'typefield'=>'number', 'origentabla'=>'table','codprint'=>'0',),
														 array('name'=>'Parentesco', 'typefield'=>'table', 'origentabla'=>'relationship','codprint'=>'0',),
														 array('name'=>'Ocupación', 'typefield'=>'table', 'origentabla'=>'speciality_study','codprint'=>'0',),
														 array('name'=>'Teléfono Fijo / Celular', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														),
					),
				array(	'order'=>'10', 'items' => array ( array('name'=>'Nombre Institución', 'typefield'=>'table', 'origentabla'=>'business','codprint'=>'0',),// Pertenece a asociaciones, colegios, profesionales, clubes, instituciones
														  array('name'=>'Lugar', 'typefield'=>'table', 'origentabla'=>'country','codprint'=>'0',),
														  array('name'=>'Año de ingreso','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														  array('name'=>'Número Carnet / Colegiatura','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														),
					),
				array(	'order'=>'11', 'items' => array ( array('name'=>'Tipo de propiedad','typefield'=>'table', 'origentabla'=>'estate','codprint'=>'0',), // Propiedades
														  array('name'=>'Lugar','typefield'=>'table', 'origentabla'=>'country','codprint'=>'0',),
														  array('name'=>'Fecha de compra','typefield'=>'number', 'origentabla'=>'none','codprint'=>'0',),
														  ),
					),
				array(	'order'=>'12', 'items' => array ( array('name'=>'Estado de salud actual', 'typefield'=>'table', 'origentabla'=>'pendiente','codprint'=>'0',),//Estado de salud física
														 array('name'=>'Tratamiento de salud mental','typefield'=>'boolean', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Operación / Año','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Accidentes / Año','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														 array('name'=>'Enfermedades hereditarias (de familiares)','typefield'=>'boolean', 'origentabla'=>'none','codprint'=>'0',),
														),
					),
				array(	'order'=>'13', 'items' => array ( array('name'=>'Disponibilidad para iniciar a trabajar', 'typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),//Datos necesarios para la postulación
														  array('name'=>'Disponibilidad de horario','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														  array('name'=>'Disponibilidad de viaje','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														  array('name'=>'Deudas ante Entidades Financieras - Infocorp','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														  array('name'=>'Juicios por alimentos u otros','typefield'=>'string', 'origentabla'=>'none','codprint'=>'0',),
														),
					),
			);
			       
        // Obtener todas los resume de la base de datos
        $NivelList = $manager->getRepository('ResumeBundle:NivelSelectedByResume')->findAll();
        
        $NivelxQuestion = array (	array('n'=>'0','q'=>'0'), 
									array('n'=>'1','q'=>'1'), 
									array('n'=>'2','q'=>'1'),
									array('n'=>'3','q'=>'1'), 
									array('n'=>'4','q'=>'1'), 
									array('n'=>'5','q'=>'1'),
									array('n'=>'6','q'=>'1'),
									array('n'=>'7','q'=>'1'),
									array('n'=>'8','q'=>'2'), 
									array('n'=>'8','q'=>'2'),
									array('n'=>'8','q'=>'2'),
									array('n'=>'9','q'=>'3'),
									array('n'=>'9','q'=>'3'),
									array('n'=>'9','q'=>'3'),
									array('n'=>'9','q'=>'3'),
									array('n'=>'10','q'=>'4'),
									array('n'=>'11','q'=>'4'), 
									array('n'=>'12','q'=>'4'), 
									array('n'=>'13','q'=>'5'),
									array('n'=>'14','q'=>'6'), 
									array('n'=>'15','q'=>'7'),
									array('n'=>'15','q'=>'7'),
									array('n'=>'15','q'=>'7'),
									array('n'=>'15','q'=>'7'),
									array('n'=>'16','q'=>'8'),
									array('n'=>'16','q'=>'8'),
									array('n'=>'16','q'=>'8'),
									array('n'=>'16','q'=>'8'),
									array('n'=>'17','q'=>'9'),
									array('n'=>'17','q'=>'9'),
									array('n'=>'17','q'=>'9'),
									array('n'=>'17','q'=>'9'),
									array('n'=>'17','q'=>'9'),
									array('n'=>'17','q'=>'9'),
									array('n'=>'18','q'=>'10'),
									array('n'=>'18','q'=>'10'), 									
									array('n'=>'19','q'=>'11'),
									array('n'=>'19','q'=>'11'),									
									array('n'=>'20','q'=>'12'),
									array('n'=>'21','q'=>'13'),
        );
        
        $i = 0;
        $order1 = 12;
        //print "Elemento-order = {$QuestionList[$order1]['order']}";        
        //print "Elemento-item-name = {$QuestionList[$order1]['items'][2]['name']}";              
        foreach ($NivelxQuestion as $nxq){			
			$n=$nxq['n']; 	$q=$nxq['q'];			
			//print "nivel - question = {$n} - {$q}"; 
			//print "********************** Nivel-question = {$n} - {$q}, ************************** ";
			foreach ($QuestionList[$q]['items'] as $elementos) {
				$nivel = $NivelList[$n];						
				//print " Elemento-name = {$elementos['name']},";
				//print " Elemento-typefield = {$elementos['typefield']},";
				//print " Elemento-origentabla = {$elementos['origentabla']},";
				$pregunta = new QuestionbySection();						
				$pregunta ->setDescription($elementos['name']);						
				$pregunta ->setOriginTable($elementos['origentabla']);
				$pregunta ->setTypeQuestion($elementos['typefield']);
				$pregunta ->setCodPrint($elementos['codprint']);
				$pregunta ->setnivelSelectedByResume($nivel);
				$manager->persist($pregunta);
			}
		}		
		$manager->flush();		
	
}
}

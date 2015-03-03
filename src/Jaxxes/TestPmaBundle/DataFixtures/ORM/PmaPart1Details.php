<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicaci�n de Ekka Jaxxes.
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
 */

namespace Jaxxes\ResumeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestPmaBundle\Entity\PmaPart1Detail;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para las pregunstas de la primera prueba del PMA
 */
 
// class Resumes implements FixtureInterface
 class PmaPart1Details extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstPmaPart1Details = array(	
            array ('number'=>'1' ,'word'=>'HUMEDO',             'fieldA'=>'Corto',          'fieldB'=>'Humano',         'fieldC'=>'Mojado',         'fieldD'=>'Móderado',       'alternativeCorrect'=>'C'),
            array ('number'=>'2' ,'word'=>'RAPIDO',             'fieldA'=>'Mayor',          'fieldB'=>'Ligero',         'fieldC'=>'Estrecho',       'fieldD'=>'Vigoroso',       'alternativeCorrect'=>'B'),
            array ('number'=>'3' ,'word'=>'DIARIO',             'fieldA'=>'Variable',       'fieldB'=>'Cotidiano',      'fieldC'=>'Indiferente',    'fieldD'=>'Insostenible',   'alternativeCorrect'=>'B'),
            array ('number'=>'4' ,'word'=>'ESPLENDIDO',         'fieldA'=>'Expansivo',      'fieldB'=>'Alegre',         'fieldC'=>'Rigido',         'fieldD'=>'Magnifico',      'alternativeCorrect'=>'D'),
            array ('number'=>'5' ,'word'=>'HABITUAL',           'fieldA'=>'Nocturno',       'fieldB'=>'Circular',       'fieldC'=>'Principal',      'fieldD'=>'Usual',          'alternativeCorrect'=>'D'),
            array ('number'=>'6' ,'word'=>'FLUIDO',             'fieldA'=>'Livido',         'fieldB'=>'Muerto',         'fieldC'=>'Líquido',        'fieldD'=>'Hablador',       'alternativeCorrect'=>'C'),
            array ('number'=>'7' ,'word'=>'HOLGANZAN',          'fieldA'=>'Gandul',         'fieldB'=>'Travieso',       'fieldC'=>'Inculto',        'fieldD'=>'Util',           'alternativeCorrect'=>'A'),
            array ('number'=>'8' ,'word'=>'DESAMPARADO',        'fieldA'=>'Ocre',           'fieldB'=>'Absurdo',        'fieldC'=>'Transtornado',   'fieldD'=>'Abandonado',     'alternativeCorrect'=>'D'),
            array ('number'=>'9' ,'word'=>'RARO',               'fieldA'=>'Santo',          'fieldB'=>'Tosco',          'fieldC'=>'Escaso',         'fieldD'=>'Débil',          'alternativeCorrect'=>'C'),
            array ('number'=>'10','word'=>'CONTENTO',           'fieldA'=>'Fastidioso',     'fieldB'=>'Contínuo',       'fieldC'=>'Difamatorio',    'fieldD'=>'Satisfecho',     'alternativeCorrect'=>'D'),
            array ('number'=>'11','word'=>'ENOJADO',            'fieldA'=>'Risueño',        'fieldB'=>'Pobre',          'fieldC'=>'Enfadado',       'fieldD'=>'Doméstico',      'alternativeCorrect'=>'C'),
            array ('number'=>'12','word'=>'BENEFICIOSO',        'fieldA'=>'Artificial',     'fieldB'=>'Domesticable',   'fieldC'=>'Util',           'fieldD'=>'Picante',        'alternativeCorrect'=>'C'),
            array ('number'=>'13','word'=>'MOHOSO',             'fieldA'=>'Tónico',         'fieldB'=>'Herrumbroso',    'fieldC'=>'Informe',        'fieldD'=>'Mudo',           'alternativeCorrect'=>'B'),
            array ('number'=>'14','word'=>'TOSCO',              'fieldA'=>'Aspero',         'fieldB'=>'Diminuto',       'fieldC'=>'Cinestésico',    'fieldD'=>'Fangoso',        'alternativeCorrect'=>'A'),
            array ('number'=>'15','word'=>'TERAPEUTICO',        'fieldA'=>'Diagramático',   'fieldB'=>'Amorío',         'fieldC'=>'Curativo',       'fieldD'=>'Gramatical',     'alternativeCorrect'=>'C'),
            array ('number'=>'16','word'=>'SOBRIO',             'fieldA'=>'Sucio',          'fieldB'=>'Sombrio',        'fieldC'=>'Parco',          'fieldD'=>'Apropiado',      'alternativeCorrect'=>'C'),
            array ('number'=>'17','word'=>'FESTIVO',            'fieldA'=>'Delicioso',      'fieldB'=>'Divertido',      'fieldC'=>'Potente',        'fieldD'=>'Forastero',      'alternativeCorrect'=>'B'),
            array ('number'=>'18','word'=>'AUGUSTO',            'fieldA'=>'Majestuoso',     'fieldB'=>'Delgado',        'fieldC'=>'Digestible',     'fieldD'=>'Válido',         'alternativeCorrect'=>'A'),
            array ('number'=>'19','word'=>'DIFAMENTE',          'fieldA'=>'Deshonroso',     'fieldB'=>'Forense',        'fieldC'=>'Hortícola',      'fieldD'=>'Impresionable',  'alternativeCorrect'=>'A'),
            array ('number'=>'20','word'=>'EDUCADO',            'fieldA'=>'Rico',           'fieldB'=>'Cuidadano',      'fieldC'=>'Cortés',         'fieldD'=>'Ignorante',      'alternativeCorrect'=>'C'),
            array ('number'=>'21','word'=>'ORIGINAL',           'fieldA'=>'Oral',           'fieldB'=>'Abandonado',     'fieldC'=>'Primero',        'fieldD'=>'Fidedigno',      'alternativeCorrect'=>'C'),
            array ('number'=>'22','word'=>'NOVEL',              'fieldA'=>'Costoso',        'fieldB'=>'Nuevo',          'fieldC'=>'Hosco',          'fieldD'=>'Radical',        'alternativeCorrect'=>'B'),
            array ('number'=>'23','word'=>'FAMOSO',             'fieldA'=>'Célebre',        'fieldB'=>'Leal',           'fieldC'=>'Renovado',       'fieldD'=>'Agil',           'alternativeCorrect'=>'A'),
            array ('number'=>'24','word'=>'SISTEMATICO',        'fieldA'=>'Laudatorio',     'fieldB'=>'Ordenando',      'fieldC'=>'Jubiloso',       'fieldD'=>'Ambicioso',      'alternativeCorrect'=>'B'),
            array ('number'=>'25','word'=>'FATIGADO',           'fieldA'=>'Dócil',          'fieldB'=>'Grave',          'fieldC'=>'Cansado',        'fieldD'=>'Fanático',       'alternativeCorrect'=>'C'),
            array ('number'=>'26','word'=>'RESPLANDECIENTE',    'fieldA'=>'Fonético',       'fieldB'=>'Acerbo',         'fieldC'=>'Brillante',      'fieldD'=>'Intrepido',      'alternativeCorrect'=>'C'),
            array ('number'=>'27','word'=>'GENEROSO',           'fieldA'=>'Olvidadizo',     'fieldB'=>'Ardiente',       'fieldC'=>'Liberal',        'fieldD'=>'Provocativo',    'alternativeCorrect'=>'C'),
            array ('number'=>'28','word'=>'REGIO',              'fieldA'=>'Blando',         'fieldB'=>'Facial',         'fieldC'=>'Reciente',       'fieldD'=>'Real',           'alternativeCorrect'=>'D'),
            array ('number'=>'29','word'=>'FLEXIFLE',           'fieldA'=>'Lastimoso',      'fieldB'=>'Formal',         'fieldC'=>'Plegable',       'fieldD'=>'Pacifico',       'alternativeCorrect'=>'C'),
            array ('number'=>'30','word'=>'SAGAZ',              'fieldA'=>'Exótico',        'fieldB'=>'Aparente',       'fieldC'=>'Astuto',         'fieldD'=>'Dócil',          'alternativeCorrect'=>'C'),
            array ('number'=>'31','word'=>'IRREFLEXIVO',        'fieldA'=>'Paciente',       'fieldB'=>'Preferible',     'fieldC'=>'Paralelo',       'fieldD'=>'Atolondrado',    'alternativeCorrect'=>'D'),
            array ('number'=>'32','word'=>'DEFICIENTE',         'fieldA'=>'Constante',      'fieldB'=>'Triste',         'fieldC'=>'Falto',          'fieldD'=>'Peculiar',       'alternativeCorrect'=>'C'),
            array ('number'=>'33','word'=>'VIGILANTE',          'fieldA'=>'Alerta',         'fieldB'=>'Indulgente',     'fieldC'=>'Valeroso',       'fieldD'=>'Naciente',       'alternativeCorrect'=>'A'),
            array ('number'=>'34','word'=>'MINIMO',             'fieldA'=>'Húmedo',         'fieldB'=>'Restringido',    'fieldC'=>'Tranquilo',      'fieldD'=>'Infimo',         'alternativeCorrect'=>'D'),
            array ('number'=>'35','word'=>'GALANTE',            'fieldA'=>'Caballeroso',    'fieldB'=>'Auténtico',      'fieldC'=>'Alevoso',        'fieldD'=>'Probable',       'alternativeCorrect'=>'A'),
            array ('number'=>'36','word'=>'ALOCADO',            'fieldA'=>'Femenino',       'fieldB'=>'Casual',         'fieldC'=>'Aturdido',       'fieldD'=>'Cómico',         'alternativeCorrect'=>'C'),
            array ('number'=>'37','word'=>'DISCRETO',           'fieldA'=>'Cústico',        'fieldB'=>'Fragante',       'fieldC'=>'Honorable',      'fieldD'=>'Prudente',       'alternativeCorrect'=>'D'),
            array ('number'=>'38','word'=>'PREDESTINADO',       'fieldA'=>'Simplificado',   'fieldB'=>'Fatal',          'fieldC'=>'Directivo',      'fieldD'=>'Afortunado',     'alternativeCorrect'=>'B'),
            array ('number'=>'39','word'=>'ETERNO',             'fieldA'=>'Importante',     'fieldB'=>'Benigno',        'fieldC'=>'Inestimable',    'fieldD'=>'Perpetuo',       'alternativeCorrect'=>'D'),
            array ('number'=>'40','word'=>'PRODIGO',            'fieldA'=>'Compuesto',      'fieldB'=>'Licencioso',     'fieldC'=>'Digno',          'fieldD'=>'Despilfarrador', 'alternativeCorrect'=>'D'),
            array ('number'=>'41','word'=>'DEFECTUOSO',         'fieldA'=>'Oculto',         'fieldB'=>'Mítico',         'fieldC'=>'Imperfecto',     'fieldD'=>'Externo',        'alternativeCorrect'=>'C'),
            array ('number'=>'42','word'=>'VAGO',               'fieldA'=>'Inválido',       'fieldB'=>'Oscuro',         'fieldC'=>'Indecente',      'fieldD'=>'Vermiforme',     'alternativeCorrect'=>'B'),
            array ('number'=>'43','word'=>'ESENCIAL',           'fieldA'=>'Clásico',        'fieldB'=>'Indispensable',  'fieldC'=>'Deporable',      'fieldD'=>'Veraz',          'alternativeCorrect'=>'B'),
            array ('number'=>'44','word'=>'IMPULSIVO',          'fieldA'=>'Impetuoso',      'fieldB'=>'Petrificado',    'fieldC'=>'Inmaduro',       'fieldD'=>'Compulsivo',     'alternativeCorrect'=>'A'),
            array ('number'=>'45','word'=>'APOCADO',            'fieldA'=>'Ficticio',       'fieldB'=>'Timido',         'fieldC'=>'Valioso',        'fieldD'=>'Alfabético',     'alternativeCorrect'=>'B'),
            array ('number'=>'46','word'=>'ERRONEO',            'fieldA'=>'Solemne',        'fieldB'=>'Falso',          'fieldC'=>'Irónico',        'fieldD'=>'Trágico',        'alternativeCorrect'=>'B'),
            array ('number'=>'47','word'=>'BENEVOLO',           'fieldA'=>'Amable',         'fieldB'=>'Perfecto',       'fieldC'=>'Adecuado',       'fieldD'=>'Modesto',        'alternativeCorrect'=>'A'),
            array ('number'=>'48','word'=>'LETAL',              'fieldA'=>'Adusto',         'fieldB'=>'Mortal',         'fieldC'=>'Lácteo',         'fieldD'=>'Abirrado',       'alternativeCorrect'=>'B'),
            array ('number'=>'49','word'=>'LACERADO',           'fieldA'=>'Disgustado',     'fieldB'=>'Herido',         'fieldC'=>'Oriado',         'fieldD'=>'Agobiado',       'alternativeCorrect'=>'B'),
            array ('number'=>'50','word'=>'INSOLENTE',          'fieldA'=>'Estudioso',      'fieldB'=>'Envidioso',      'fieldC'=>'Altanero',       'fieldD'=>'Accidental',     'alternativeCorrect'=>'C'),
            
								);
                                
        $pmaPart1List = $manager->getRepository('TestPmaBundle:PmaPart1')->findAll();
        
        foreach ($pmaPart1List as $pmaPart1)
            foreach ($lstPmaPart1Details as $pmaPart1Detail) {
                $objeto = new PmaPart1Detail();
                
                $objeto->setNumber($pmaPart1Detail['number']);
                $objeto->setWord($pmaPart1Detail['word']);
                $objeto->setFieldA($pmaPart1Detail['fieldA']);
                $objeto->setFieldB($pmaPart1Detail['fieldB']);
                $objeto->setFieldC($pmaPart1Detail['fieldC']);
                $objeto->setFieldD($pmaPart1Detail['fieldD']);
                $objeto->setAlternativeCorrect($pmaPart1Detail['alternativeCorrect']);
                
                $objeto->setPmaPart1($pmaPart1);
                
                $manager->persist($objeto);
            }        
            $manager->flush();
    }
}


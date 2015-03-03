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

use Jaxxes\TestGatbBundle\Entity\GatbPart4Detail;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para las pregunstas de la primera prueba del GATB
 */
 
// class Resumes implements FixtureInterface
 class GatbPart4Details extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstGatbPart4Details = array(	
            array ('number'=>'1' ,'factorG'=>'44' , 'factorV'=>'63' ,'fieldA'=>'poco', 'fieldB'=>'exacto', 'fieldC'=>'brillante', 'fieldD'=>'mucho', 'alternativeCorrect'=>'AD'),
            array ('number'=>'2' ,'factorG'=>'45' , 'factorV'=>'65' ,'fieldA'=>'recordar', 'fieldB'=>'imaginar', 'fieldC'=>'leer', 'fieldD'=>'olvidar', 'alternativeCorrect'=>'AD'),
            array ('number'=>'3' ,'factorG'=>'46' , 'factorV'=>'66' ,'fieldA'=>'salir', 'fieldB'=>'disuadir', 'fieldC'=>'entrar', 'fieldD'=>'descansar', 'alternativeCorrect'=>'AC'),
            array ('number'=>'4' ,'factorG'=>'46' , 'factorV'=>'68' ,'fieldA'=>'expediente', 'fieldB'=>'costoso', 'fieldC'=>'caro', 'fieldD'=>'final', 'alternativeCorrect'=>'BC'),
            array ('number'=>'5' ,'factorG'=>'47' , 'factorV'=>'70' ,'fieldA'=>'prescripcion', 'fieldB'=>'habito', 'fieldC'=>'asociacion', 'fieldD'=>'costumbre', 'alternativeCorrect'=>'BD'),
            array ('number'=>'6' ,'factorG'=>'48' , 'factorV'=>'72' ,'fieldA'=>'anhelo', 'fieldB'=>'conocimiento', 'fieldC'=>'deseo', 'fieldD'=>'poder', 'alternativeCorrect'=>'AC'),
            array ('number'=>'7' ,'factorG'=>'48' , 'factorV'=>'72' ,'fieldA'=>'fuerte', 'fieldB'=>'erguido', 'fieldC'=>'debil', 'fieldD'=>'pequeno', 'alternativeCorrect'=>'AC'),
            array ('number'=>'8' ,'factorG'=>'49' , 'factorV'=>'76' ,'fieldA'=>'distante', 'fieldB'=>'resonante', 'fieldC'=>'dilatado', 'fieldD'=>'cerca', 'alternativeCorrect'=>'AD'),
            array ('number'=>'9' ,'factorG'=>'50' , 'factorV'=>'78' ,'fieldA'=>'veneno', 'fieldB'=>'toxina', 'fieldC'=>'cataplasma', 'fieldD'=>'picota', 'alternativeCorrect'=>'AB'),
            array ('number'=>'10','factorG'=>'51' , 'factorV'=>'80' ,'fieldA'=>'medir', 'fieldB'=>'arrancar', 'fieldC'=>'inflar', 'fieldD'=>'calibrar', 'alternativeCorrect'=>'AD'),
            array ('number'=>'11','factorG'=>'51' , 'factorV'=>'82' ,'fieldA'=>'caliente', 'fieldB'=>'abierto', 'fieldC'=>'frio', 'fieldD'=>'raro', 'alternativeCorrect'=>'AC'),
            array ('number'=>'12','factorG'=>'52' , 'factorV'=>'82' ,'fieldA'=>'enojado', 'fieldB'=>'infeliz', 'fieldC'=>'enfurecido', 'fieldD'=>'deletereo', 'alternativeCorrect'=>'AC'),
            array ('number'=>'13','factorG'=>'53' , 'factorV'=>'86' ,'fieldA'=>'doméstico', 'fieldB'=>'rural', 'fieldC'=>'urbano', 'fieldD'=>'cortés', 'alternativeCorrect'=>'BC'),
            array ('number'=>'14','factorG'=>'54' , 'factorV'=>'88' ,'fieldA'=>'poción', 'fieldB'=>'ponzoña', 'fieldC'=>'veneno', 'fieldD'=>'enfermedad', 'alternativeCorrect'=>'BC'),
            array ('number'=>'15','factorG'=>'54' , 'factorV'=>'90' ,'fieldA'=>'consultar', 'fieldB'=>'rechazar', 'fieldC'=>'conservar', 'fieldD'=>'destruir', 'alternativeCorrect'=>'CD'),
            array ('number'=>'16','factorG'=>'55' , 'factorV'=>'92' ,'fieldA'=>'húmedo', 'fieldB'=>'reseco', 'fieldC'=>'arrugado', 'fieldD'=>'arenoso', 'alternativeCorrect'=>'AB'),
            array ('number'=>'17','factorG'=>'56' , 'factorV'=>'94' ,'fieldA'=>'verbal', 'fieldB'=>'abreviado', 'fieldC'=>'expurgado', 'fieldD'=>'reducido', 'alternativeCorrect'=>'BD'),
            array ('number'=>'18','factorG'=>'57' , 'factorV'=>'96' ,'fieldA'=>'lustroso', 'fieldB'=>'calmado', 'fieldC'=>'confortable', 'fieldD'=>'sereno', 'alternativeCorrect'=>'BD'),
            array ('number'=>'19','factorG'=>'57' , 'factorV'=>'98' ,'fieldA'=>'remoto', 'fieldB'=>'continental', 'fieldC'=>'casero', 'fieldD'=>'distante', 'alternativeCorrect'=>'AD'),
            array ('number'=>'20','factorG'=>'58' , 'factorV'=>'100','fieldA'=>'discutible', 'fieldB'=>'legal', 'fieldC'=>'ilícito', 'fieldD'=>'precipitado', 'alternativeCorrect'=>'BC'),
            array ('number'=>'21','factorG'=>'59' , 'factorV'=>'102','fieldA'=>'oblicuo', 'fieldB'=>'suave', 'fieldC'=>'redondo', 'fieldD'=>'liso', 'alternativeCorrect'=>'BD'),
            array ('number'=>'22','factorG'=>'60' , 'factorV'=>'104','fieldA'=>'benevolencia', 'fieldB'=>'diplomacia', 'fieldC'=>'personalidad', 'fieldD'=>'tacto', 'alternativeCorrect'=>'BD'),
            array ('number'=>'23','factorG'=>'60' , 'factorV'=>'106','fieldA'=>'desobedecer', 'fieldB'=>'cesar', 'fieldC'=>'recopilar', 'fieldD'=>'dejar', 'alternativeCorrect'=>'BD'),
            array ('number'=>'24','factorG'=>'61' , 'factorV'=>'108','fieldA'=>'inhabitado', 'fieldB'=>'poblado', 'fieldC'=>'inhibir', 'fieldD'=>'rural', 'alternativeCorrect'=>'AB'),
            array ('number'=>'25','factorG'=>'62' , 'factorV'=>'109','fieldA'=>'agrio', 'fieldB'=>'dulce', 'fieldC'=>'grotesco', 'fieldD'=>'saliente', 'alternativeCorrect'=>'AB'),
            array ('number'=>'26','factorG'=>'63' , 'factorV'=>'111','fieldA'=>'compasión', 'fieldB'=>'encanto', 'fieldC'=>'pena', 'fieldD'=>'consideración', 'alternativeCorrect'=>'AD'),
            array ('number'=>'27','factorG'=>'63' , 'factorV'=>'113','fieldA'=>'denso', 'fieldB'=>'húmedo', 'fieldC'=>'tibio', 'fieldD'=>'templado', 'alternativeCorrect'=>'CD'),
            array ('number'=>'28','factorG'=>'64' , 'factorV'=>'115','fieldA'=>'fragmentario', 'fieldB'=>'convulsivo', 'fieldC'=>'espasmódico', 'fieldD'=>'peripatético', 'alternativeCorrect'=>'BC'),
            array ('number'=>'29','factorG'=>'65' , 'factorV'=>'117','fieldA'=>'dogmático', 'fieldB'=>'pedante', 'fieldC'=>'categórico', 'fieldD'=>'político', 'alternativeCorrect'=>'AC'),
            array ('number'=>'30','factorG'=>'65' , 'factorV'=>'119','fieldA'=>'paso', 'fieldB'=>'pieza', 'fieldC'=>'rollo', 'fieldD'=>'parte', 'alternativeCorrect'=>'BD'),
            array ('number'=>'31','factorG'=>'66' , 'factorV'=>'121','fieldA'=>'devastar', 'fieldB'=>'sancionar', 'fieldC'=>'desaprobar', 'fieldD'=>'saciar', 'alternativeCorrect'=>'BC'),
            array ('number'=>'32','factorG'=>'67' , 'factorV'=>'123','fieldA'=>'alabar', 'fieldB'=>'amar', 'fieldC'=>'apreciar', 'fieldD'=>'elogiar', 'alternativeCorrect'=>'AD'),
            array ('number'=>'33','factorG'=>'68' , 'factorV'=>'125','fieldA'=>'almacenar', 'fieldB'=>'dedicar', 'fieldC'=>'decorar', 'fieldD'=>'adornar', 'alternativeCorrect'=>'CD'),
            array ('number'=>'34','factorG'=>'69' , 'factorV'=>'127','fieldA'=>'derecho', 'fieldB'=>'hábil', 'fieldC'=>'exquisito', 'fieldD'=>'inapto', 'alternativeCorrect'=>'BD'),
            array ('number'=>'35','factorG'=>'69' , 'factorV'=>'129','fieldA'=>'jeroglíficos', 'fieldB'=>'dramas', 'fieldC'=>'crónicas', 'fieldD'=>'anales', 'alternativeCorrect'=>'CD'),
            array ('number'=>'36','factorG'=>'70' , 'factorV'=>'131','fieldA'=>'aliado', 'fieldB'=>'villano', 'fieldC'=>'adversario', 'fieldD'=>'conquistador', 'alternativeCorrect'=>'AC'),
            array ('number'=>'37','factorG'=>'71' , 'factorV'=>'133','fieldA'=>'apatía', 'fieldB'=>'temperancia', 'fieldC'=>'entusiasmo', 'fieldD'=>'afecto', 'alternativeCorrect'=>'AC'),
            array ('number'=>'38','factorG'=>'71' , 'factorV'=>'135','fieldA'=>'territorial', 'fieldB'=>'terrestre', 'fieldC'=>'celestial', 'fieldD'=>'centenario', 'alternativeCorrect'=>'BC'),
            array ('number'=>'39','factorG'=>'73' , 'factorV'=>'137','fieldA'=>'caprichoso', 'fieldB'=>'tolerante', 'fieldC'=>'terco', 'fieldD'=>'provincial', 'alternativeCorrect'=>'AC'),
            array ('number'=>'40','factorG'=>'73' , 'factorV'=>'139','fieldA'=>'orador', 'fieldB'=>'profeta', 'fieldC'=>'concejero', 'fieldD'=>'vidente', 'alternativeCorrect'=>'BD'),
            array ('number'=>'41','factorG'=>'74' , 'factorV'=>'141','fieldA'=>'refugiado', 'fieldB'=>'renegado', 'fieldC'=>'desertor', 'fieldD'=>'tramposo', 'alternativeCorrect'=>'BC'),
            array ('number'=>'42','factorG'=>'74' , 'factorV'=>'143','fieldA'=>'secreto', 'fieldB'=>'benigno', 'fieldC'=>'maligno', 'fieldD'=>'maleable', 'alternativeCorrect'=>'BC'),
            array ('number'=>'43','factorG'=>'75' , 'factorV'=>'145','fieldA'=>'tangible', 'fieldB'=>'tentativo', 'fieldC'=>'excepcional', 'fieldD'=>'definitivo', 'alternativeCorrect'=>'BD'),
            array ('number'=>'44','factorG'=>'76' , 'factorV'=>'147','fieldA'=>'profuso', 'fieldB'=>'escaso', 'fieldC'=>'pronóstico', 'fieldD'=>'asqueroso', 'alternativeCorrect'=>'AB'),
            array ('number'=>'45','factorG'=>'77' , 'factorV'=>'149','fieldA'=>'audaz', 'fieldB'=>'malicioso', 'fieldC'=>'canto', 'fieldD'=>'arduo', 'alternativeCorrect'=>'AC'),
            array ('number'=>'46','factorG'=>'77' , 'factorV'=>'151','fieldA'=>'principio', 'fieldB'=>'principal', 'fieldC'=>'precepto', 'fieldD'=>'prefacio', 'alternativeCorrect'=>'AC'),
            array ('number'=>'47','factorG'=>'78' , 'factorV'=>'152','fieldA'=>'nupcial', 'fieldB'=>'ineficaz', 'fieldC'=>'conyugal', 'fieldD'=>'marcial', 'alternativeCorrect'=>'AC'),
            array ('number'=>'48','factorG'=>'79' , 'factorV'=>'158','fieldA'=>'traicionado', 'fieldB'=>'fiscal', 'fieldC'=>'despótico', 'fieldD'=>'arbitrario', 'alternativeCorrect'=>'CD'),
            array ('number'=>'49','factorG'=>'79' , 'factorV'=>'156','fieldA'=>'vengativo', 'fieldB'=>'estridente', 'fieldC'=>'retraído', 'fieldD'=>'extrovertido', 'alternativeCorrect'=>'CD'),
            array ('number'=>'50','factorG'=>'80' , 'factorV'=>'158','fieldA'=>'manifiesto', 'fieldB'=>'elaborado', 'fieldC'=>'evidente', 'fieldD'=>'decoroso', 'alternativeCorrect'=>'AC'),
            array ('number'=>'51','factorG'=>'81' , 'factorV'=>'160','fieldA'=>'cáustico', 'fieldB'=>'imaginario', 'fieldC'=>'militar', 'fieldD'=>'mordaz', 'alternativeCorrect'=>'AC'),
            array ('number'=>'52','factorG'=>'82' , 'factorV'=>'162','fieldA'=>'imitar', 'fieldB'=>'mitigar', 'fieldC'=>'enanar', 'fieldD'=>'aliviar', 'alternativeCorrect'=>'BD'),
            array ('number'=>'53','factorG'=>'82' , 'factorV'=>'164','fieldA'=>'defectuoso', 'fieldB'=>'trascendente', 'fieldC'=>'similar', 'fieldD'=>'análogo', 'alternativeCorrect'=>'CD'),
            array ('number'=>'54','factorG'=>'83' , 'factorV'=>'166','fieldA'=>'tangible', 'fieldB'=>'cultivable', 'fieldC'=>'disputable', 'fieldD'=>'palpable', 'alternativeCorrect'=>'AD'),
            array ('number'=>'55','factorG'=>'84' , 'factorV'=>'168','fieldA'=>'obstruso', 'fieldB'=>'desarme', 'fieldC'=>'profundo', 'fieldD'=>'profuso', 'alternativeCorrect'=>'AC'),
            array ('number'=>'56','factorG'=>'85' , 'factorV'=>'170','fieldA'=>'lateral', 'fieldB'=>'remoto', 'fieldC'=>'latente', 'fieldD'=>'oculto', 'alternativeCorrect'=>'CD'),
            array ('number'=>'57','factorG'=>'85' , 'factorV'=>'172','fieldA'=>'chistoso', 'fieldB'=>'portentoso', 'fieldC'=>'prodigioso', 'fieldD'=>'audaz', 'alternativeCorrect'=>'BC'),
            array ('number'=>'58','factorG'=>'86' , 'factorV'=>'174','fieldA'=>'lacónico', 'fieldB'=>'verboso', 'fieldC'=>'veraz', 'fieldD'=>'estentóreo', 'alternativeCorrect'=>'AB'),
            array ('number'=>'59','factorG'=>'87' , 'factorV'=>'176','fieldA'=>'altruista', 'fieldB'=>'egoísta', 'fieldC'=>'afable', 'fieldD'=>'reservado', 'alternativeCorrect'=>'AB'),
            array ('number'=>'60','factorG'=>'88' , 'factorV'=>'178','fieldA'=>'misántropo', 'fieldB'=>'filántropo', 'fieldC'=>'actuario', 'fieldD'=>'antropólogo', 'alternativeCorrect'=>'AB'),
								);
                                
        $gatbPart4List = $manager->getRepository('TestGatbBundle:GatbPart4')->findAll();
        
        foreach ($gatbPart4List as $gatbPart4)
            foreach ($lstGatbPart4Details as $gatbPart4Detail) {
                $objeto = new GatbPart4Detail();
                
                $objeto->setNumber($gatbPart4Detail['number']);
                $objeto->setFactorG($gatbPart4Detail['factorG']);
                $objeto->setFactorV($gatbPart4Detail['factorV']);
                $objeto->setFieldA($gatbPart4Detail['fieldA']);
                $objeto->setFieldB($gatbPart4Detail['fieldB']);
                $objeto->setFieldC($gatbPart4Detail['fieldC']);
                $objeto->setFieldD($gatbPart4Detail['fieldD']);
                $objeto->setAlternativeCorrect($gatbPart4Detail['alternativeCorrect']);
                
                $objeto->setGatbPart4($gatbPart4);
                
                $manager->persist($objeto);
            }        
            $manager->flush();
    }
}


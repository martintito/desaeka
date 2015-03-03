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

use Jaxxes\TestGatbBundle\Entity\GatbPart1Detail;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para las pregunstas de la primera prueba del GATB
 */
 
// class Resumes implements FixtureInterface
 class GatbPart1Details extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstGatbPart1Details = array(	
        array ('number'=>'1'  ,'factorQ'=>'53' , 'questionI'=>'Hildebrant Jorge' ,    'questionD'=>'Hildebrant Jorge',    'equal'=>'1', 'alternativeCorrect'=>'I'),
        array ('number'=>'2'  ,'factorQ'=>'55' , 'questionI'=>'Hirsch Heinz' ,        'questionD'=>'Hirsch Heinz',        'equal'=>'1', 'alternativeCorrect'=>'D'),
        array ('number'=>'3'  ,'factorQ'=>'56' , 'questionI'=>'Hill Martha' ,         'questionD'=>'Hil Martha',          'equal'=>'0', 'alternativeCorrect'=>'D'),
        array ('number'=>'4'  ,'factorQ'=>'57' , 'questionI'=>'Hoschhauster Elsa' ,   'questionD'=>'Hoschhauster Elsa',   'equal'=>'1', 'alternativeCorrect'=>'I'),
        array ('number'=>'5'  ,'factorQ'=>'58' , 'questionI'=>'Hoschhauster & Cia' ,  'questionD'=>'Hoschhauster & Cia',  'equal'=>'1', 'alternativeCorrect'=>'I'),
        array ('number'=>'6'  ,'factorQ'=>'59' , 'questionI'=>'Herrera Oscar' ,       'questionD'=>'Herrera Oscar',       'equal'=>'1', 'alternativeCorrect'=>'I'),
        array ('number'=>'7'  ,'factorQ'=>'60' , 'questionI'=>'Hohagan Jorge' ,       'questionD'=>'Hohegan Jorge',       'equal'=>'0', 'alternativeCorrect'=>'D'),
        array ('number'=>'8'  ,'factorQ'=>'62' , 'questionI'=>'Hohl Pedro' ,          'questionD'=>'Hohl Pedro',          'equal'=>'1', 'alternativeCorrect'=>'I'),
        array ('number'=>'9'  ,'factorQ'=>'63' , 'questionI'=>'Helberg I.E.' ,        'questionD'=>'Helberg E.I.',        'equal'=>'0', 'alternativeCorrect'=>'I'),
        array ('number'=>'10' ,'factorQ'=>'65' , 'questionI'=>'Holcol Exportadora' ,  'questionD'=>'Holcot Exportadora',  'equal'=>'0', 'alternativeCorrect'=>'D'),
        array ('number'=>'11' ,'factorQ'=>'66' , 'questionI'=>'Netrilux S.A.' ,       'questionD'=>'Netrilus S.A.',       'equal'=>'0', 'alternativeCorrect'=>'D'),
        array ('number'=>'12' ,'factorQ'=>'67' , 'questionI'=>'Musso & Cia' ,         'questionD'=>'Mosso & Cia',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'13' ,'factorQ'=>'68' , 'questionI'=>'Naranjas Huando' ,     'questionD'=>'Naranjas Huando',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'14' ,'factorQ'=>'69' , 'questionI'=>'Payot Salvador' ,      'questionD'=>'Payet Salvador',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'15' ,'factorQ'=>'70' , 'questionI'=>'Sccc. Catastro' ,       'questionD'=>'Scc. Catastro',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'16' ,'factorQ'=>'71' , 'questionI'=>'Parode Hnos.' ,       'questionD'=>'Parodi Hnos.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'17' ,'factorQ'=>'72' , 'questionI'=>'Panizo y Cia' ,       'questionD'=>'Panizo y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'18' ,'factorQ'=>'74' , 'questionI'=>'Optica Imperial' ,       'questionD'=>'Optica Imperial',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'19' ,'factorQ'=>'76' , 'questionI'=>'Ojeda S.J.' ,       'questionD'=>'Ojeda S.J.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'20' ,'factorQ'=>'77' , 'questionI'=>'Ruiz Remy' ,       'questionD'=>'Ruiz Remy',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'21' ,'factorQ'=>'78' , 'questionI'=>'Patroni y Soria' ,       'questionD'=>'Patonri y Soria',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'22' ,'factorQ'=>'79' , 'questionI'=>'Tassara y Cia' ,       'questionD'=>'Tassara y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'23' ,'factorQ'=>'80' , 'questionI'=>'Payva Carbajal' ,       'questionD'=>'Paiwa Carbajal',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'24' ,'factorQ'=>'81' , 'questionI'=>'Talleres de Modas' ,       'questionD'=>'Talleres de Modas',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'25' ,'factorQ'=>'82' , 'questionI'=>'Metro Carabaya' ,       'questionD'=>'Metro Carabaya',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'26' ,'factorQ'=>'84' , 'questionI'=>'Tubino Elio' ,       'questionD'=>'Tubino Elio',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'27' ,'factorQ'=>'85' , 'questionI'=>'Klinge y Cia' ,       'questionD'=>'Kling y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'28' ,'factorQ'=>'86' , 'questionI'=>'Sydney Ross' ,       'questionD'=>'Sidney Ross',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'29' ,'factorQ'=>'87' , 'questionI'=>'Fosst Charles' ,       'questionD'=>'Fost Charles',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'30' ,'factorQ'=>'89' , 'questionI'=>'Aranzaes Trop.' ,       'questionD'=>'Aranzas Trop.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'31' ,'factorQ'=>'90' , 'questionI'=>'Valladares G.' ,       'questionD'=>'Valladares G.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'32' ,'factorQ'=>'91' , 'questionI'=>'Tejada Ger.' ,       'questionD'=>'Tajada Ger.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'33' ,'factorQ'=>'93' , 'questionI'=>'Viña Ocucaje' ,       'questionD'=>'Viña Ocucaje',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'34' ,'factorQ'=>'94' , 'questionI'=>'Tali y Atala' ,       'questionD'=>'Tali & Atala',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'35' ,'factorQ'=>'95' , 'questionI'=>'Tassara Hnos.' ,       'questionD'=>'Tasara Hnos.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'36' ,'factorQ'=>'96' , 'questionI'=>'Decal y Cia.' ,       'questionD'=>'Decal y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'37' ,'factorQ'=>'97' , 'questionI'=>'Chifa Canton' ,       'questionD'=>'Chifa Cantón',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'38' ,'factorQ'=>'98' , 'questionI'=>'Cerveza Pil.' ,       'questionD'=>'Cerveza Pil.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'39' ,'factorQ'=>'99' , 'questionI'=>'Tassara Hnos' ,       'questionD'=>'Tassara y Cia.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'40' ,'factorQ'=>'100', 'questionI'=>'Sumadoras IGSA.' ,       'questionD'=>'Sumadoras ISGA.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'41' ,'factorQ'=>'103', 'questionI'=>'Talleres PTCM.' ,       'questionD'=>'Talleres PCTM.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'42' ,'factorQ'=>'104', 'questionI'=>'Cadena Crnel' ,       'questionD'=>'Cadena Coronel',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'43' ,'factorQ'=>'105', 'questionI'=>'Ruggiero y Cia' ,       'questionD'=>'Ruggiero y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'44' ,'factorQ'=>'106', 'questionI'=>'Transitur' ,       'questionD'=>'Transitur',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'45' ,'factorQ'=>'107', 'questionI'=>'Valdizán Valle' ,       'questionD'=>'Valdizsán Valle',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'46' ,'factorQ'=>'108', 'questionI'=>'Vak S.A.' ,       'questionD'=>'Vack S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'47' ,'factorQ'=>'109', 'questionI'=>'Chifa Chang' ,       'questionD'=>'Chifa Chang',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'48' ,'factorQ'=>'110', 'questionI'=>'Viña Vista Alegre' ,       'questionD'=>'Viña Vista Alegre',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'49' ,'factorQ'=>'112', 'questionI'=>'Viña S.A.' ,       'questionD'=>'Viña S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'50' ,'factorQ'=>'113', 'questionI'=>'Jirón Abancay' ,       'questionD'=>'Girón Abancay',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'51' ,'factorQ'=>'114', 'questionI'=>'De Rosi Ser' ,       'questionD'=>'De Rossi Ser',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'52' ,'factorQ'=>'115', 'questionI'=>'Ugasz C. de Vaca' ,       'questionD'=>'Ugasz C. de Baca',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'53' ,'factorQ'=>'117', 'questionI'=>'Alba y Cia' ,       'questionD'=>'Alba y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'54' ,'factorQ'=>'118', 'questionI'=>'Licco H. Unanue' ,       'questionD'=>'Licco H. Unanue',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'55' ,'factorQ'=>'118', 'questionI'=>'Arca Peruana' ,       'questionD'=>'Arce Peruana',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'56' ,'factorQ'=>'120', 'questionI'=>'Ugáz y Cia' ,       'questionD'=>'Ugás y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'57' ,'factorQ'=>'122', 'questionI'=>'Confec. en cuero' ,       'questionD'=>'Confecc. en cuero',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'58' ,'factorQ'=>'123', 'questionI'=>'Alvarado y Cia' ,       'questionD'=>'Alvarado y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'59' ,'factorQ'=>'124', 'questionI'=>'Amer. Dry Clean' ,       'questionD'=>'Amer. Dry Clean',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'60' ,'factorQ'=>'125', 'questionI'=>'Catres Lamas' ,       'questionD'=>'Cartes Lamas',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'61' ,'factorQ'=>'126', 'questionI'=>'Fuentes Jara' ,       'questionD'=>'Fuente Jara',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'62' ,'factorQ'=>'127', 'questionI'=>'Turf Peruano' ,       'questionD'=>'Turf Peruano',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'63' ,'factorQ'=>'128', 'questionI'=>'Catres Imperio' ,       'questionD'=>'Catres Imperio',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'64' ,'factorQ'=>'129', 'questionI'=>'Freyre Raygada' ,       'questionD'=>'Freyre Raygada',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'65' ,'factorQ'=>'132', 'questionI'=>'Galván Saca' ,       'questionD'=>'Galván Saac',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'66' ,'factorQ'=>'133', 'questionI'=>'Amauta S.A.' ,       'questionD'=>'Amaunta S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'67' ,'factorQ'=>'134', 'questionI'=>'Cintas Elasticas' ,       'questionD'=>'Cintas Elasticas',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'68' ,'factorQ'=>'135', 'questionI'=>'Colville y Cia' ,       'questionD'=>'Colvill y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'69' ,'factorQ'=>'136', 'questionI'=>'Escobas El Inca' ,       'questionD'=>'Escobas El Inca',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'70' ,'factorQ'=>'137', 'questionI'=>'Gas Carbónico' ,       'questionD'=>'Gas Carbónico',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'71' ,'factorQ'=>'138', 'questionI'=>'Hilados y Tejidas' ,       'questionD'=>'Hilados y Tejidos',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'72' ,'factorQ'=>'139', 'questionI'=>'La Vitalicia' ,       'questionD'=>'La Vitalica',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'73' ,'factorQ'=>'141', 'questionI'=>'Maimon Issac' ,       'questionD'=>'Mainon Issac',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'74' ,'factorQ'=>'142', 'questionI'=>'Espejos N.M.' ,       'questionD'=>'Espejos N.M.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'75' ,'factorQ'=>'143', 'questionI'=>'Ludoweig J.' ,       'questionD'=>'Ludoweig J.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'76' ,'factorQ'=>'145', 'questionI'=>'Los Incas' ,       'questionD'=>'Los Incas',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'77' ,'factorQ'=>'146', 'questionI'=>'Frio Lux Perú' ,       'questionD'=>'Frio Lux Perú',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'78' ,'factorQ'=>'147', 'questionI'=>'Carbón Pescheira' ,       'questionD'=>'Carbón Peschiera',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'79' ,'factorQ'=>'148', 'questionI'=>'Díaz SAP.' ,       'questionD'=>'Días SAP.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'80' ,'factorQ'=>'150', 'questionI'=>'Aminsco S.A.' ,       'questionD'=>'Aminco S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'81' ,'factorQ'=>'151', 'questionI'=>'Landazuri R.C.' ,       'questionD'=>'Landasuri R.C.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'82' ,'factorQ'=>'152', 'questionI'=>'Gaggero Andrés' ,       'questionD'=>'Gaggero Andrés',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'83' ,'factorQ'=>'153', 'questionI'=>'El Comercio' ,       'questionD'=>'El Comercio',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'84' ,'factorQ'=>'154', 'questionI'=>'Diesa Huancayo' ,       'questionD'=>'Deisa Huancayo',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'85' ,'factorQ'=>'155', 'questionI'=>'Kessel Helmut' ,       'questionD'=>'Kessel Helmut',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'86' ,'factorQ'=>'156', 'questionI'=>'La Oficina Moderna' ,       'questionD'=>'La Oficina Moderna',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'87' ,'factorQ'=>'158', 'questionI'=>'La Pirámide S.A.' ,       'questionD'=>'La Pirámide S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'88' ,'factorQ'=>'160', 'questionI'=>'Hierlsa Hierra' ,       'questionD'=>'Hieralsa Hierra',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'89' ,'factorQ'=>'161', 'questionI'=>'Lanfranco y Cia' ,       'questionD'=>'Lanfranco y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'90' ,'factorQ'=>'162', 'questionI'=>'La Novedad S.A.' ,       'questionD'=>'La Novedad S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'91' ,'factorQ'=>'163', 'questionI'=>'La comersial S.' ,       'questionD'=>'La comersial S.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'92' ,'factorQ'=>'164', 'questionI'=>'Piselli Alberto' ,       'questionD'=>'Piseli Alberto',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'93' ,'factorQ'=>'165', 'questionI'=>'La Rosa Lima' ,       'questionD'=>'La Rosa Lima',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'94' ,'factorQ'=>'166', 'questionI'=>'Lummis C.A.' ,       'questionD'=>'Lummis C.A.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'95' ,'factorQ'=>'167', 'questionI'=>'El Cóndor' ,       'questionD'=>'El Cóndor',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'96' ,'factorQ'=>'168', 'questionI'=>'Minerco Cia' ,       'questionD'=>'Minerco Cia',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'97' ,'factorQ'=>'170', 'questionI'=>'Colliere S.A.' ,       'questionD'=>'Collier S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'98' ,'factorQ'=>'172', 'questionI'=>'Poppe Y. & Rivero' ,       'questionD'=>'Poppe Y. & Rivero',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'99' ,'factorQ'=>'173', 'questionI'=>'Meta y Cia.' ,       'questionD'=>'Mata y Cia.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'100','factorQ'=>'174', 'questionI'=>'Policlinico S.A.' ,       'questionD'=>'Policlinico S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'101','factorQ'=>'175', 'questionI'=>'Pacocha S.A.' ,       'questionD'=>'Pacocha S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'102','factorQ'=>'176', 'questionI'=>'Pinasco Silvio' ,       'questionD'=>'Piñasco Silvio',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'103','factorQ'=>'178', 'questionI'=>'Primatex S.A.' ,       'questionD'=>'Primatex S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'A'),
        array ('number'=>'104','factorQ'=>'179', 'questionI'=>'Neira H.M.' ,       'questionD'=>'Neira H.M.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'105','factorQ'=>'180', 'questionI'=>'Piérola S. Carlos' ,       'questionD'=>'Piérola S. Carlos',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'106','factorQ'=>'181', 'questionI'=>'Mesia y Cia' ,       'questionD'=>'Mezca y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'107','factorQ'=>'182', 'questionI'=>'Piaget Hnos.' ,       'questionD'=>'Piaget Hnos.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'108','factorQ'=>'183', 'questionI'=>'Plástica Industrial' ,       'questionD'=>'Plástica Industrial',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'109','factorQ'=>'185', 'questionI'=>'Platería Nacional' ,       'questionD'=>'Plateria Nacional',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'110','factorQ'=>'186', 'questionI'=>'Pineda Jorge' ,       'questionD'=>'Pinedo Jorge',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'111','factorQ'=>'188', 'questionI'=>'Refrigeración - Apin' ,       'questionD'=>'Refrigeración - A-pine',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'112','factorQ'=>'189', 'questionI'=>'Ponce Ratto' ,       'questionD'=>'Ponce Rato',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'113','factorQ'=>'190', 'questionI'=>'Envolturas IND.' ,       'questionD'=>'Envolturas IND.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'114','factorQ'=>'191', 'questionI'=>'Oeschle Cia' ,               'questionD'=>'Oeschle Cia',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'115','factorQ'=>'192', 'questionI'=>'Valdizán y Lazo' ,           'questionD'=>'Valdizan y Lazo',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'116','factorQ'=>'193', 'questionI'=>'Chepote Manuel' ,            'questionD'=>'Chepote Manuel',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'117','factorQ'=>'194', 'questionI'=>'Chiclin Tienda' ,            'questionD'=>'Chiclin Tienda',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'118','factorQ'=>'195', 'questionI'=>'Escobar Damiani' ,           'questionD'=>'Escobar Damiami',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'119','factorQ'=>'197', 'questionI'=>'Dorteano y Stucker' ,        'questionD'=>'Durteano y Stucker',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'120','factorQ'=>'199', 'questionI'=>'Cúnco y Bandirola' ,         'questionD'=>'Cúnco y Bandirola',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'121','factorQ'=>'200', 'questionI'=>'Asserrar Maderas' ,          'questionD'=>'Asserrar Maderas',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'122','factorQ'=>'201', 'questionI'=>'Consejo Británico' ,         'questionD'=>'Consejo Británico',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'123','factorQ'=>'202', 'questionI'=>'Jara y Ureta' ,              'questionD'=>'Jaro y Ureta',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'124','factorQ'=>'203', 'questionI'=>'Alcanflores y Cia S.A.' ,    'questionD'=>'Alcanflores y Cia-S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'125','factorQ'=>'201', 'questionI'=>'Helados Taormina' ,          'questionD'=>'Helados Taorina',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'126','factorQ'=>'205', 'questionI'=>'Curtiembes Cocodrilo S.A.' , 'questionD'=>'Curtiembes -Cocodrilo S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'127','factorQ'=>'207', 'questionI'=>'Buonanni Osvaldo' ,          'questionD'=>'Buonanni Oswaldo',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'128','factorQ'=>'208', 'questionI'=>'Almacén Panamericana' ,      'questionD'=>'Almacenes Panamericana',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'129','factorQ'=>'209', 'questionI'=>'Fridman y Cia' ,             'questionD'=>'Friedman y Cia',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'130','factorQ'=>'210', 'questionI'=>'Corpac Aeropuerto' ,         'questionD'=>'Corpac Aeropuerto',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'131','factorQ'=>'212', 'questionI'=>'Industrial la Popular' ,     'questionD'=>'Industrial la -Popular',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'132','factorQ'=>'213', 'questionI'=>'Isola Alberto' ,             'questionD'=>'Isola Alberto',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'133','factorQ'=>'214', 'questionI'=>'Almacén Callao' ,            'questionD'=>'Almacén Calao',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'134','factorQ'=>'216', 'questionI'=>'Talleres IGSA' ,             'questionD'=>'Talleres IGSA',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'135','factorQ'=>'216', 'questionI'=>'Bodega Moscoso Pinasco' ,    'questionD'=>'Bodega Moscoso -Pinasco',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'136','factorQ'=>'216', 'questionI'=>'La Quimica Suiza' ,          'questionD'=>'La Quimica Suiza',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'137','factorQ'=>'216', 'questionI'=>'Lanificio del Perú' ,        'questionD'=>'Lanificio del Perú',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'138','factorQ'=>'216', 'questionI'=>'Cerámica Las Reínas' ,       'questionD'=>'Cerámica Las -Reínas',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'139','factorQ'=>'216', 'questionI'=>'Otárola Crisanto' ,          'questionD'=>'Otárola Crisanto',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'140','factorQ'=>'216', 'questionI'=>'Viale y Cia S.A.' ,          'questionD'=>'Viale y Cia S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'141','factorQ'=>'216', 'questionI'=>'Avenida los Gallos' ,        'questionD'=>'Avenida los Gallos',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'142','factorQ'=>'216', 'questionI'=>'Hilanderías Nacionales' ,    'questionD'=>'Hilanderías -Nacional',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'143','factorQ'=>'216', 'questionI'=>'Talleres Mercánicos Assoc.', 'questionD'=>'Talleres Mercánicos S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'144','factorQ'=>'216', 'questionI'=>'Imprenta El Dia S.A.' ,      'questionD'=>'Imprenta El Dia -S.A.',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'145','factorQ'=>'216', 'questionI'=>'Vélez y Tudela' ,            'questionD'=>'Velez y Tudela',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'146','factorQ'=>'216', 'questionI'=>'Llantas Pacífico' ,          'questionD'=>'Llantas Pacífico',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'147','factorQ'=>'216', 'questionI'=>'Casas salas y Cia.' ,        'questionD'=>'Casas salas y Cia.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'148','factorQ'=>'216', 'questionI'=>'Agen. de Com. y Ven.' ,      'questionD'=>'Agen. de Com. y -Ven.',       'equal'=>'0' , 'alternativeCorrect'=>'I'),
        array ('number'=>'149','factorQ'=>'216', 'questionI'=>'Imgen. Unidos' ,             'questionD'=>'Img Unidas',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
        array ('number'=>'150','factorQ'=>'216', 'questionI'=>'Antigua Casa Comercial Laos','questionD'=>'Antigua Casa -Comercial Laos',       'equal'=>'0' , 'alternativeCorrect'=>'D'),
								);
                                
        $gatbPart1List = $manager->getRepository('TestGatbBundle:GatbPart1')->findAll();
        
        foreach ($gatbPart1List as $gatbPart1)
            foreach ($lstGatbPart1Details as $gatbPart1Detail) {
                $objeto = new GatbPart1Detail();
                
                $objeto->setNumber($gatbPart1Detail['number']);
                $objeto->setQuestionI($gatbPart1Detail['questionI']);
                $objeto->setQuestionD($gatbPart1Detail['questionD']);
                $objeto->setEqual($gatbPart1Detail['equal']);
                $objeto->setFactorQ($gatbPart1Detail['factorQ']);
                $objeto->setAlternativeCorrect($gatbPart1Detail['alternativeCorrect']);
                $objeto->setGatbPart1($gatbPart1);
                
                $manager->persist($objeto);            
            }        
            $manager->flush();
    }
}

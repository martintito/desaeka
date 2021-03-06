<?php

namespace Jaxxes\TestPmaSPBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestPmaSPBundle\Entity\Pma5Diccionario;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro de la cabecera para Resume = Ficha del candidato
 */
 
// class Resumes implements FixtureInterface
 class PMA5DiccionarioJ extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 110;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstStructure = array(	
			array('letra'=>'j', 'palabra'=>'j'),
array('letra'=>'j', 'palabra'=>'ja'),
array('letra'=>'j', 'palabra'=>'jaba'),
array('letra'=>'j', 'palabra'=>'jabado'),
array('letra'=>'j', 'palabra'=>'jabalcon'),
array('letra'=>'j', 'palabra'=>'jabalconar'),
array('letra'=>'j', 'palabra'=>'jabali'),
array('letra'=>'j', 'palabra'=>'jabalin'),
array('letra'=>'j', 'palabra'=>'jabalina'),
array('letra'=>'j', 'palabra'=>'jabalinero'),
array('letra'=>'j', 'palabra'=>'jabalon'),
array('letra'=>'j', 'palabra'=>'jabalonar'),
array('letra'=>'j', 'palabra'=>'jabaluna'),
array('letra'=>'j', 'palabra'=>'jabardear'),
array('letra'=>'j', 'palabra'=>'jabardillo'),
array('letra'=>'j', 'palabra'=>'jabardo'),
array('letra'=>'j', 'palabra'=>'jabato'),
array('letra'=>'j', 'palabra'=>'jabeba'),
array('letra'=>'j', 'palabra'=>'jabeca'),
array('letra'=>'j', 'palabra'=>'jabeca'),
array('letra'=>'j', 'palabra'=>'jabega'),
array('letra'=>'j', 'palabra'=>'jabega'),
array('letra'=>'j', 'palabra'=>'jabegote'),
array('letra'=>'j', 'palabra'=>'jabeguero'),
array('letra'=>'j', 'palabra'=>'jabelgar'),
array('letra'=>'j', 'palabra'=>'jabeque'),
array('letra'=>'j', 'palabra'=>'jabera'),
array('letra'=>'j', 'palabra'=>'jabi'),
array('letra'=>'j', 'palabra'=>'jabillo'),
array('letra'=>'j', 'palabra'=>'jabino'),
array('letra'=>'j', 'palabra'=>'jable'),
array('letra'=>'j', 'palabra'=>'jabon'),
array('letra'=>'j', 'palabra'=>'jabonada'),
array('letra'=>'j', 'palabra'=>'jabonado'),
array('letra'=>'j', 'palabra'=>'jabonador'),
array('letra'=>'j', 'palabra'=>'jabonadura'),
array('letra'=>'j', 'palabra'=>'jabonar'),
array('letra'=>'j', 'palabra'=>'jaboncillo'),
array('letra'=>'j', 'palabra'=>'jabonear'),
array('letra'=>'j', 'palabra'=>'jabonera'),
array('letra'=>'j', 'palabra'=>'jaboneria'),
array('letra'=>'j', 'palabra'=>'jabonero'),
array('letra'=>'j', 'palabra'=>'jaboneta'),
array('letra'=>'j', 'palabra'=>'jabonete'),
array('letra'=>'j', 'palabra'=>'jabonoso'),
array('letra'=>'j', 'palabra'=>'jaborandi'),
array('letra'=>'j', 'palabra'=>'jabrir'),
array('letra'=>'j', 'palabra'=>'jabuco'),
array('letra'=>'j', 'palabra'=>'jaca'),
array('letra'=>'j', 'palabra'=>'jacal'),
array('letra'=>'j', 'palabra'=>'jacalear'),
array('letra'=>'j', 'palabra'=>'jacalosuchil'),
array('letra'=>'j', 'palabra'=>'jacapa'),
array('letra'=>'j', 'palabra'=>'jacara'),
array('letra'=>'j', 'palabra'=>'jacaranda'),
array('letra'=>'j', 'palabra'=>'jacaranda'),
array('letra'=>'j', 'palabra'=>'jacarandaina'),
array('letra'=>'j', 'palabra'=>'jacarandana'),
array('letra'=>'j', 'palabra'=>'jacarandino'),
array('letra'=>'j', 'palabra'=>'jacarando'),
array('letra'=>'j', 'palabra'=>'jacarandoso'),
array('letra'=>'j', 'palabra'=>'jacarear'),
array('letra'=>'j', 'palabra'=>'jacarero'),
array('letra'=>'j', 'palabra'=>'jacarista'),
array('letra'=>'j', 'palabra'=>'jacaro'),
array('letra'=>'j', 'palabra'=>'jacena'),
array('letra'=>'j', 'palabra'=>'jacer'),
array('letra'=>'j', 'palabra'=>'jacerino'),
array('letra'=>'j', 'palabra'=>'jacetano'),
array('letra'=>'j', 'palabra'=>'jachali'),
array('letra'=>'j', 'palabra'=>'jachudo'),
array('letra'=>'j', 'palabra'=>'jacilla'),
array('letra'=>'j', 'palabra'=>'jacintino'),
array('letra'=>'j', 'palabra'=>'jacinto'),
array('letra'=>'j', 'palabra'=>'jaco'),
array('letra'=>'j', 'palabra'=>'jacobeo'),
array('letra'=>'j', 'palabra'=>'jacobinismo'),
array('letra'=>'j', 'palabra'=>'jacobino'),
array('letra'=>'j', 'palabra'=>'jacobita'),
array('letra'=>'j', 'palabra'=>'jactancia'),
array('letra'=>'j', 'palabra'=>'jactanciosamente'),
array('letra'=>'j', 'palabra'=>'jactancioso'),
array('letra'=>'j', 'palabra'=>'jactar'),
array('letra'=>'j', 'palabra'=>'jactura'),
array('letra'=>'j', 'palabra'=>'jaculatorio'),
array('letra'=>'j', 'palabra'=>'jaculo'),
array('letra'=>'j', 'palabra'=>'jacuzzi'),
array('letra'=>'j', 'palabra'=>'jada'),
array('letra'=>'j', 'palabra'=>'jade'),
array('letra'=>'j', 'palabra'=>'jadeante'),
array('letra'=>'j', 'palabra'=>'jadear'),
array('letra'=>'j', 'palabra'=>'jadeo'),
array('letra'=>'j', 'palabra'=>'jadiar'),
array('letra'=>'j', 'palabra'=>'jadraque'),
array('letra'=>'j', 'palabra'=>'jaecero'),
array('letra'=>'j', 'palabra'=>'jaen'),
array('letra'=>'j', 'palabra'=>'jaenero'),
array('letra'=>'j', 'palabra'=>'jaenes'),
array('letra'=>'j', 'palabra'=>'jaez'),
array('letra'=>'j', 'palabra'=>'jaezar'),
array('letra'=>'j', 'palabra'=>'jafetico'),
array('letra'=>'j', 'palabra'=>'jagua'),
array('letra'=>'j', 'palabra'=>'jaguar'),
array('letra'=>'j', 'palabra'=>'jaguarete'),
array('letra'=>'j', 'palabra'=>'jaguarzo'),
array('letra'=>'j', 'palabra'=>'jagüel'),
array('letra'=>'j', 'palabra'=>'jagüey'),
array('letra'=>'j', 'palabra'=>'jagüilla'),
array('letra'=>'j', 'palabra'=>'jahari'),
array('letra'=>'j', 'palabra'=>'jaharrar'),
array('letra'=>'j', 'palabra'=>'jaharro'),
array('letra'=>'j', 'palabra'=>'jai'),
array('letra'=>'j', 'palabra'=>'jaiba'),
array('letra'=>'j', 'palabra'=>'jaiberia'),
array('letra'=>'j', 'palabra'=>'jaima'),
array('letra'=>'j', 'palabra'=>'jaique'),
array('letra'=>'j', 'palabra'=>'jajay'),
array('letra'=>'j', 'palabra'=>'jalado'),
array('letra'=>'j', 'palabra'=>'jalador'),
array('letra'=>'j', 'palabra'=>'jalapa'),
array('letra'=>'j', 'palabra'=>'jalapeño'),
array('letra'=>'j', 'palabra'=>'jalar'),
array('letra'=>'j', 'palabra'=>'jalbegador'),
array('letra'=>'j', 'palabra'=>'jalbegar'),
array('letra'=>'j', 'palabra'=>'jalbegue'),
array('letra'=>'j', 'palabra'=>'jalda'),
array('letra'=>'j', 'palabra'=>'jaldado'),
array('letra'=>'j', 'palabra'=>'jalde'),
array('letra'=>'j', 'palabra'=>'jaldeta'),
array('letra'=>'j', 'palabra'=>'jaldo'),
array('letra'=>'j', 'palabra'=>'jaldre'),
array('letra'=>'j', 'palabra'=>'jalea'),
array('letra'=>'j', 'palabra'=>'jaleador'),
array('letra'=>'j', 'palabra'=>'jalear'),
array('letra'=>'j', 'palabra'=>'jaleco'),
array('letra'=>'j', 'palabra'=>'jaleo'),
array('letra'=>'j', 'palabra'=>'jaletina'),
array('letra'=>'j', 'palabra'=>'jalifa'),
array('letra'=>'j', 'palabra'=>'jalifato'),
array('letra'=>'j', 'palabra'=>'jalifiano'),
array('letra'=>'j', 'palabra'=>'jalisciense'),
array('letra'=>'j', 'palabra'=>'jalma'),
array('letra'=>'j', 'palabra'=>'jalmeria'),
array('letra'=>'j', 'palabra'=>'jalmero'),
array('letra'=>'j', 'palabra'=>'jalon'),
array('letra'=>'j', 'palabra'=>'jalona'),
array('letra'=>'j', 'palabra'=>'jalonamiento'),
array('letra'=>'j', 'palabra'=>'jalonar'),
array('letra'=>'j', 'palabra'=>'jalonear'),
array('letra'=>'j', 'palabra'=>'jaloneo'),
array('letra'=>'j', 'palabra'=>'jaloque'),
array('letra'=>'j', 'palabra'=>'jama'),
array('letra'=>'j', 'palabra'=>'jamacuco'),
array('letra'=>'j', 'palabra'=>'jamaica'),
array('letra'=>'j', 'palabra'=>'jamaicano'),
array('letra'=>'j', 'palabra'=>'jamaiquino'),
array('letra'=>'j', 'palabra'=>'jamar'),
array('letra'=>'j', 'palabra'=>'jamas'),
array('letra'=>'j', 'palabra'=>'jamba'),
array('letra'=>'j', 'palabra'=>'jambaje'),
array('letra'=>'j', 'palabra'=>'jambico'),
array('letra'=>'j', 'palabra'=>'jambo'),
array('letra'=>'j', 'palabra'=>'jambrar'),
array('letra'=>'j', 'palabra'=>'jamelgo'),
array('letra'=>'j', 'palabra'=>'jamerdana'),
array('letra'=>'j', 'palabra'=>'jamerdar'),
array('letra'=>'j', 'palabra'=>'jamete'),
array('letra'=>'j', 'palabra'=>'jamila'),
array('letra'=>'j', 'palabra'=>'jamon'),
array('letra'=>'j', 'palabra'=>'jamona'),
array('letra'=>'j', 'palabra'=>'jamoncillo'),
array('letra'=>'j', 'palabra'=>'jamuas'),
array('letra'=>'j', 'palabra'=>'jamuga'),
array('letra'=>'j', 'palabra'=>'jamugas'),
array('letra'=>'j', 'palabra'=>'jamurar'),
array('letra'=>'j', 'palabra'=>'jamuscar'),
array('letra'=>'j', 'palabra'=>'jan'),
array('letra'=>'j', 'palabra'=>'janano'),
array('letra'=>'j', 'palabra'=>'jandalo'),
array('letra'=>'j', 'palabra'=>'jane'),
array('letra'=>'j', 'palabra'=>'jangada'),
array('letra'=>'j', 'palabra'=>'jangua'),
array('letra'=>'j', 'palabra'=>'janiche'),
array('letra'=>'j', 'palabra'=>'jansenismo'),
array('letra'=>'j', 'palabra'=>'jansenista'),
array('letra'=>'j', 'palabra'=>'japon'),
array('letra'=>'j', 'palabra'=>'japon'),
array('letra'=>'j', 'palabra'=>'japonense'),
array('letra'=>'j', 'palabra'=>'japones'),
array('letra'=>'j', 'palabra'=>'japonica'),
array('letra'=>'j', 'palabra'=>'japuta'),
array('letra'=>'j', 'palabra'=>'jaque'),
array('letra'=>'j', 'palabra'=>'jaque'),
array('letra'=>'j', 'palabra'=>'jaquear'),
array('letra'=>'j', 'palabra'=>'jaqueca'),
array('letra'=>'j', 'palabra'=>'jaquecoso'),
array('letra'=>'j', 'palabra'=>'jaquel'),
array('letra'=>'j', 'palabra'=>'jaquelado'),
array('letra'=>'j', 'palabra'=>'jaquero'),
array('letra'=>'j', 'palabra'=>'jaques'),
array('letra'=>'j', 'palabra'=>'jaqueta'),
array('letra'=>'j', 'palabra'=>'jaquetilla'),
array('letra'=>'j', 'palabra'=>'jaqueton'),
array('letra'=>'j', 'palabra'=>'jaquima'),
array('letra'=>'j', 'palabra'=>'jaquimazo'),
array('letra'=>'j', 'palabra'=>'jaquimero'),
array('letra'=>'j', 'palabra'=>'jaquir'),
array('letra'=>'j', 'palabra'=>'jara'),
array('letra'=>'j', 'palabra'=>'jarabe'),
array('letra'=>'j', 'palabra'=>'jarabear'),
array('letra'=>'j', 'palabra'=>'jaracalla'),
array('letra'=>'j', 'palabra'=>'jaraiz'),
array('letra'=>'j', 'palabra'=>'jaral'),
array('letra'=>'j', 'palabra'=>'jaramago'),
array('letra'=>'j', 'palabra'=>'jarameño'),
array('letra'=>'j', 'palabra'=>'jaramugo'),
array('letra'=>'j', 'palabra'=>'jarana'),
array('letra'=>'j', 'palabra'=>'jarandina'),
array('letra'=>'j', 'palabra'=>'jaranear'),
array('letra'=>'j', 'palabra'=>'jaranero'),
array('letra'=>'j', 'palabra'=>'jaranista'),
array('letra'=>'j', 'palabra'=>'jarano'),
array('letra'=>'j', 'palabra'=>'jarapa'),
array('letra'=>'j', 'palabra'=>'jarazo'),
array('letra'=>'j', 'palabra'=>'jarbar'),
array('letra'=>'j', 'palabra'=>'jarca'),
array('letra'=>'j', 'palabra'=>'jarcha'),
array('letra'=>'j', 'palabra'=>'jarcia'),
array('letra'=>'j', 'palabra'=>'jarciar'),
array('letra'=>'j', 'palabra'=>'jarda'),
array('letra'=>'j', 'palabra'=>'jardazo'),
array('letra'=>'j', 'palabra'=>'jardin'),
array('letra'=>'j', 'palabra'=>'jardinera'),
array('letra'=>'j', 'palabra'=>'jardineria'),
array('letra'=>'j', 'palabra'=>'jardinero'),
array('letra'=>'j', 'palabra'=>'jareta'),
array('letra'=>'j', 'palabra'=>'jaretazo'),
array('letra'=>'j', 'palabra'=>'jaretera'),
array('letra'=>'j', 'palabra'=>'jareton'),
array('letra'=>'j', 'palabra'=>'jargonza'),
array('letra'=>'j', 'palabra'=>'jaricar'),
array('letra'=>'j', 'palabra'=>'jarico'),
array('letra'=>'j', 'palabra'=>'jarife'),
array('letra'=>'j', 'palabra'=>'jarifiano'),
array('letra'=>'j', 'palabra'=>'jarifo'),
array('letra'=>'j', 'palabra'=>'jarillo'),
array('letra'=>'j', 'palabra'=>'jaripeada'),
array('letra'=>'j', 'palabra'=>'jaripear'),
array('letra'=>'j', 'palabra'=>'jaripeo'),
array('letra'=>'j', 'palabra'=>'jarique'),
array('letra'=>'j', 'palabra'=>'jarjara'),
array('letra'=>'j', 'palabra'=>'jaro'),
array('letra'=>'j', 'palabra'=>'jarocho'),
array('letra'=>'j', 'palabra'=>'jaropar'),
array('letra'=>'j', 'palabra'=>'jarope'),
array('letra'=>'j', 'palabra'=>'jaropear'),
array('letra'=>'j', 'palabra'=>'jaropeo'),
array('letra'=>'j', 'palabra'=>'jaroso'),
array('letra'=>'j', 'palabra'=>'jarquia'),
array('letra'=>'j', 'palabra'=>'jarra'),
array('letra'=>'j', 'palabra'=>'jarrar'),
array('letra'=>'j', 'palabra'=>'jarrazo'),
array('letra'=>'j', 'palabra'=>'jarrear'),
array('letra'=>'j', 'palabra'=>'jarrer'),
array('letra'=>'j', 'palabra'=>'jarrero'),
array('letra'=>'j', 'palabra'=>'jarretar'),
array('letra'=>'j', 'palabra'=>'jarrete'),
array('letra'=>'j', 'palabra'=>'jarretera'),
array('letra'=>'j', 'palabra'=>'jarrita'),
array('letra'=>'j', 'palabra'=>'jarro'),
array('letra'=>'j', 'palabra'=>'jarron'),
array('letra'=>'j', 'palabra'=>'jarropa'),
array('letra'=>'j', 'palabra'=>'jasa'),
array('letra'=>'j', 'palabra'=>'jasador'),
array('letra'=>'j', 'palabra'=>'jasadura'),
array('letra'=>'j', 'palabra'=>'jasar'),
array('letra'=>'j', 'palabra'=>'jaspe'),
array('letra'=>'j', 'palabra'=>'jaspeado'),
array('letra'=>'j', 'palabra'=>'jaspear'),
array('letra'=>'j', 'palabra'=>'jaspon'),
array('letra'=>'j', 'palabra'=>'jata'),
array('letra'=>'j', 'palabra'=>'jate'),
array('letra'=>'j', 'palabra'=>'jateo'),
array('letra'=>'j', 'palabra'=>'jatib'),
array('letra'=>'j', 'palabra'=>'jatives'),
array('letra'=>'j', 'palabra'=>'jato'),
array('letra'=>'j', 'palabra'=>'jau'),
array('letra'=>'j', 'palabra'=>'jaudo'),
array('letra'=>'j', 'palabra'=>'jauja'),
array('letra'=>'j', 'palabra'=>'jaula'),
array('letra'=>'j', 'palabra'=>'jaulero'),
array('letra'=>'j', 'palabra'=>'jaulilla'),
array('letra'=>'j', 'palabra'=>'jauria'),
array('letra'=>'j', 'palabra'=>'jauto'),
array('letra'=>'j', 'palabra'=>'javanes'),
array('letra'=>'j', 'palabra'=>'javera'),
array('letra'=>'j', 'palabra'=>'javo'),
array('letra'=>'j', 'palabra'=>'jayan'),
array('letra'=>'j', 'palabra'=>'jazaran'),
array('letra'=>'j', 'palabra'=>'jazarino'),
array('letra'=>'j', 'palabra'=>'jazmin'),
array('letra'=>'j', 'palabra'=>'jazmineo'),
array('letra'=>'j', 'palabra'=>'jazminero'),
array('letra'=>'j', 'palabra'=>'jazz'),
array('letra'=>'j', 'palabra'=>'je'),
array('letra'=>'j', 'palabra'=>'jea'),
array('letra'=>'j', 'palabra'=>'jebe'),
array('letra'=>'j', 'palabra'=>'jebuseo'),
array('letra'=>'j', 'palabra'=>'jeda'),
array('letra'=>'j', 'palabra'=>'jedar'),
array('letra'=>'j', 'palabra'=>'jedive'),
array('letra'=>'j', 'palabra'=>'jedrea'),
array('letra'=>'j', 'palabra'=>'jefa'),
array('letra'=>'j', 'palabra'=>'jefatura'),
array('letra'=>'j', 'palabra'=>'jefe'),
array('letra'=>'j', 'palabra'=>'jehova'),
array('letra'=>'j', 'palabra'=>'jeito'),
array('letra'=>'j', 'palabra'=>'jejen'),
array('letra'=>'j', 'palabra'=>'jelengue'),
array('letra'=>'j', 'palabra'=>'jeliz'),
array('letra'=>'j', 'palabra'=>'jemal'),
array('letra'=>'j', 'palabra'=>'jeme'),
array('letra'=>'j', 'palabra'=>'jemesia'),
array('letra'=>'j', 'palabra'=>'jenabe'),
array('letra'=>'j', 'palabra'=>'jenable'),
array('letra'=>'j', 'palabra'=>'jengibre'),
array('letra'=>'j', 'palabra'=>'jeniquen'),
array('letra'=>'j', 'palabra'=>'jenizaro'),
array('letra'=>'j', 'palabra'=>'jeque'),
array('letra'=>'j', 'palabra'=>'jera'),
array('letra'=>'j', 'palabra'=>'jerapellina'),
array('letra'=>'j', 'palabra'=>'jerarca'),
array('letra'=>'j', 'palabra'=>'jerarquia'),
array('letra'=>'j', 'palabra'=>'jerarquicamente'),
array('letra'=>'j', 'palabra'=>'jerarquico'),
array('letra'=>'j', 'palabra'=>'jerarquizacion'),
array('letra'=>'j', 'palabra'=>'jerarquizar'),
array('letra'=>'j', 'palabra'=>'jerbo'),
array('letra'=>'j', 'palabra'=>'jeremiaco'),
array('letra'=>'j', 'palabra'=>'jeremiaco'),
array('letra'=>'j', 'palabra'=>'jeremiada'),
array('letra'=>'j', 'palabra'=>'jeremias'),
array('letra'=>'j', 'palabra'=>'jeremiquear'),
array('letra'=>'j', 'palabra'=>'jerez'),
array('letra'=>'j', 'palabra'=>'jerezano'),
array('letra'=>'j', 'palabra'=>'jerga'),
array('letra'=>'j', 'palabra'=>'jergal'),
array('letra'=>'j', 'palabra'=>'jergon'),
array('letra'=>'j', 'palabra'=>'jerguilla'),
array('letra'=>'j', 'palabra'=>'jeribeque'),
array('letra'=>'j', 'palabra'=>'jerico'),
array('letra'=>'j', 'palabra'=>'jerife'),
array('letra'=>'j', 'palabra'=>'jerifiano'),
array('letra'=>'j', 'palabra'=>'jerigonza'),
array('letra'=>'j', 'palabra'=>'jerigonzar'),
array('letra'=>'j', 'palabra'=>'jeringa'),
array('letra'=>'j', 'palabra'=>'jeringacion'),
array('letra'=>'j', 'palabra'=>'jeringador'),
array('letra'=>'j', 'palabra'=>'jeringar'),
array('letra'=>'j', 'palabra'=>'jeringatorio'),
array('letra'=>'j', 'palabra'=>'jeringazo'),
array('letra'=>'j', 'palabra'=>'jeringon'),
array('letra'=>'j', 'palabra'=>'jeringonza'),
array('letra'=>'j', 'palabra'=>'jeringuilla'),
array('letra'=>'j', 'palabra'=>'jeroglifico'),
array('letra'=>'j', 'palabra'=>'jeronimiano'),
array('letra'=>'j', 'palabra'=>'jeronimo'),
array('letra'=>'j', 'palabra'=>'jerosolimitano'),
array('letra'=>'j', 'palabra'=>'jerpa'),
array('letra'=>'j', 'palabra'=>'jerricote'),
array('letra'=>'j', 'palabra'=>'jersey'),
array('letra'=>'j', 'palabra'=>'jeruga'),
array('letra'=>'j', 'palabra'=>'jerusalen'),
array('letra'=>'j', 'palabra'=>'jervilla'),
array('letra'=>'j', 'palabra'=>'jese'),
array('letra'=>'j', 'palabra'=>'jesnato'),
array('letra'=>'j', 'palabra'=>'jesucristo'),
array('letra'=>'j', 'palabra'=>'jesuita'),
array('letra'=>'j', 'palabra'=>'jesuitico'),
array('letra'=>'j', 'palabra'=>'jesuitina'),
array('letra'=>'j', 'palabra'=>'jesuitismo'),
array('letra'=>'j', 'palabra'=>'jesus'),
array('letra'=>'j', 'palabra'=>'jesusear'),
array('letra'=>'j', 'palabra'=>'jet'),
array('letra'=>'j', 'palabra'=>'jeta'),
array('letra'=>'j', 'palabra'=>'jetar'),
array('letra'=>'j', 'palabra'=>'jetazo'),
array('letra'=>'j', 'palabra'=>'jetear'),
array('letra'=>'j', 'palabra'=>'jeto'),
array('letra'=>'j', 'palabra'=>'jeton'),
array('letra'=>'j', 'palabra'=>'jetudo'),
array('letra'=>'j', 'palabra'=>'ji'),
array('letra'=>'j', 'palabra'=>'jibaro'),
array('letra'=>'j', 'palabra'=>'jibe'),
array('letra'=>'j', 'palabra'=>'jibia'),
array('letra'=>'j', 'palabra'=>'jibion'),
array('letra'=>'j', 'palabra'=>'jibraltareño'),
array('letra'=>'j', 'palabra'=>'jicama'),
array('letra'=>'j', 'palabra'=>'jicaque'),
array('letra'=>'j', 'palabra'=>'jicara'),
array('letra'=>'j', 'palabra'=>'jicarazo'),
array('letra'=>'j', 'palabra'=>'jicaro'),
array('letra'=>'j', 'palabra'=>'jicarudo'),
array('letra'=>'j', 'palabra'=>'jico'),
array('letra'=>'j', 'palabra'=>'jicote'),
array('letra'=>'j', 'palabra'=>'jicotea'),
array('letra'=>'j', 'palabra'=>'jicotera'),
array('letra'=>'j', 'palabra'=>'jienense'),
array('letra'=>'j', 'palabra'=>'jiennense'),
array('letra'=>'j', 'palabra'=>'jifa'),
array('letra'=>'j', 'palabra'=>'jiferada'),
array('letra'=>'j', 'palabra'=>'jiferia'),
array('letra'=>'j', 'palabra'=>'jifero'),
array('letra'=>'j', 'palabra'=>'jifia'),
array('letra'=>'j', 'palabra'=>'jiga'),
array('letra'=>'j', 'palabra'=>'jigote'),
array('letra'=>'j', 'palabra'=>'jigüe'),
array('letra'=>'j', 'palabra'=>'jiguilete'),
array('letra'=>'j', 'palabra'=>'jiguillo'),
array('letra'=>'j', 'palabra'=>'jijallar'),
array('letra'=>'j', 'palabra'=>'jijallo'),
array('letra'=>'j', 'palabra'=>'jijas'),
array('letra'=>'j', 'palabra'=>'jijear'),
array('letra'=>'j', 'palabra'=>'jijeo'),
array('letra'=>'j', 'palabra'=>'jijona'),
array('letra'=>'j', 'palabra'=>'jijonenco'),
array('letra'=>'j', 'palabra'=>'jileco'),
array('letra'=>'j', 'palabra'=>'jilguera'),
array('letra'=>'j', 'palabra'=>'jilguero'),
array('letra'=>'j', 'palabra'=>'jilmaestre'),
array('letra'=>'j', 'palabra'=>'jilote'),
array('letra'=>'j', 'palabra'=>'jilotear'),
array('letra'=>'j', 'palabra'=>'jimagua'),
array('letra'=>'j', 'palabra'=>'jimelga'),
array('letra'=>'j', 'palabra'=>'jimerito'),
array('letra'=>'j', 'palabra'=>'jimia'),
array('letra'=>'j', 'palabra'=>'jimio'),
array('letra'=>'j', 'palabra'=>'jimplar'),
array('letra'=>'j', 'palabra'=>'jincho'),
array('letra'=>'j', 'palabra'=>'jinda'),
array('letra'=>'j', 'palabra'=>'jindama'),
array('letra'=>'j', 'palabra'=>'jine'),
array('letra'=>'j', 'palabra'=>'jinebro'),
array('letra'=>'j', 'palabra'=>'jinestada'),
array('letra'=>'j', 'palabra'=>'jineta'),
array('letra'=>'j', 'palabra'=>'jinetada'),
array('letra'=>'j', 'palabra'=>'jinete'),
array('letra'=>'j', 'palabra'=>'jineteada'),
array('letra'=>'j', 'palabra'=>'jinetear'),
array('letra'=>'j', 'palabra'=>'jinglar'),
array('letra'=>'j', 'palabra'=>'jingoismo'),
array('letra'=>'j', 'palabra'=>'jingoista'),
array('letra'=>'j', 'palabra'=>'jinicuil'),
array('letra'=>'j', 'palabra'=>'jinjol'),
array('letra'=>'j', 'palabra'=>'jinjolero'),
array('letra'=>'j', 'palabra'=>'jinojo'),
array('letra'=>'j', 'palabra'=>'jinotegano'),
array('letra'=>'j', 'palabra'=>'jiña'),
array('letra'=>'j', 'palabra'=>'jiñar'),
array('letra'=>'j', 'palabra'=>'jiote'),
array('letra'=>'j', 'palabra'=>'jiotoso'),
array('letra'=>'j', 'palabra'=>'jipa'),
array('letra'=>'j', 'palabra'=>'jipato'),
array('letra'=>'j', 'palabra'=>'jipi'),
array('letra'=>'j', 'palabra'=>'jipiar'),
array('letra'=>'j', 'palabra'=>'jipido'),
array('letra'=>'j', 'palabra'=>'jipijapa'),
array('letra'=>'j', 'palabra'=>'jipio'),
array('letra'=>'j', 'palabra'=>'jiquilete'),
array('letra'=>'j', 'palabra'=>'jira'),
array('letra'=>'j', 'palabra'=>'jirafa'),
array('letra'=>'j', 'palabra'=>'jirapliega'),
array('letra'=>'j', 'palabra'=>'jirasal'),
array('letra'=>'j', 'palabra'=>'jirel'),
array('letra'=>'j', 'palabra'=>'jiride'),
array('letra'=>'j', 'palabra'=>'jirocho'),
array('letra'=>'j', 'palabra'=>'jirofina'),
array('letra'=>'j', 'palabra'=>'jirofle'),
array('letra'=>'j', 'palabra'=>'jiron'),
array('letra'=>'j', 'palabra'=>'jironado'),
array('letra'=>'j', 'palabra'=>'jirpear'),
array('letra'=>'j', 'palabra'=>'jisca'),
array('letra'=>'j', 'palabra'=>'jismero'),
array('letra'=>'j', 'palabra'=>'jitar'),
array('letra'=>'j', 'palabra'=>'jitomate'),
array('letra'=>'j', 'palabra'=>'jo'),
array('letra'=>'j', 'palabra'=>'job'),
array('letra'=>'j', 'palabra'=>'jobada'),
array('letra'=>'j', 'palabra'=>'jobar'),
array('letra'=>'j', 'palabra'=>'jobero'),
array('letra'=>'j', 'palabra'=>'jobillo'),
array('letra'=>'j', 'palabra'=>'jobo'),
array('letra'=>'j', 'palabra'=>'jochar'),
array('letra'=>'j', 'palabra'=>'joco'),
array('letra'=>'j', 'palabra'=>'joco'),
array('letra'=>'j', 'palabra'=>'jocoque'),
array('letra'=>'j', 'palabra'=>'jocosamente'),
array('letra'=>'j', 'palabra'=>'jocoserio'),
array('letra'=>'j', 'palabra'=>'jocosidad'),
array('letra'=>'j', 'palabra'=>'jocoso'),
array('letra'=>'j', 'palabra'=>'jocotal'),
array('letra'=>'j', 'palabra'=>'jocote'),
array('letra'=>'j', 'palabra'=>'jocotear'),
array('letra'=>'j', 'palabra'=>'jocundidad'),
array('letra'=>'j', 'palabra'=>'jocundo'),
array('letra'=>'j', 'palabra'=>'joder'),
array('letra'=>'j', 'palabra'=>'jodienda'),
array('letra'=>'j', 'palabra'=>'jofaina'),
array('letra'=>'j', 'palabra'=>'jofor'),
array('letra'=>'j', 'palabra'=>'joglar'),
array('letra'=>'j', 'palabra'=>'jogleria'),
array('letra'=>'j', 'palabra'=>'joguer'),
array('letra'=>'j', 'palabra'=>'jojoba'),
array('letra'=>'j', 'palabra'=>'jojoto'),
array('letra'=>'j', 'palabra'=>'jolgorio'),
array('letra'=>'j', 'palabra'=>'jolin'),
array('letra'=>'j', 'palabra'=>'jolines'),
array('letra'=>'j', 'palabra'=>'jolino'),
array('letra'=>'j', 'palabra'=>'jolito'),
array('letra'=>'j', 'palabra'=>'jollin'),
array('letra'=>'j', 'palabra'=>'joloano'),
array('letra'=>'j', 'palabra'=>'jolongo'),
array('letra'=>'j', 'palabra'=>'jolote'),
array('letra'=>'j', 'palabra'=>'jondo'),
array('letra'=>'j', 'palabra'=>'jonico'),
array('letra'=>'j', 'palabra'=>'jonio'),
array('letra'=>'j', 'palabra'=>'jonjabar'),
array('letra'=>'j', 'palabra'=>'jonjoli'),
array('letra'=>'j', 'palabra'=>'jonuco'),
array('letra'=>'j', 'palabra'=>'joparse'),
array('letra'=>'j', 'palabra'=>'jope'),
array('letra'=>'j', 'palabra'=>'jopear'),
array('letra'=>'j', 'palabra'=>'jopeo'),
array('letra'=>'j', 'palabra'=>'jopo'),
array('letra'=>'j', 'palabra'=>'jora'),
array('letra'=>'j', 'palabra'=>'jorco'),
array('letra'=>'j', 'palabra'=>'jordan'),
array('letra'=>'j', 'palabra'=>'jordano'),
array('letra'=>'j', 'palabra'=>'jorfe'),
array('letra'=>'j', 'palabra'=>'jorga'),
array('letra'=>'j', 'palabra'=>'jorge'),
array('letra'=>'j', 'palabra'=>'jorguin'),
array('letra'=>'j', 'palabra'=>'jorguineria'),
array('letra'=>'j', 'palabra'=>'jornada'),
array('letra'=>'j', 'palabra'=>'jornal'),
array('letra'=>'j', 'palabra'=>'jornalar'),
array('letra'=>'j', 'palabra'=>'jornalear'),
array('letra'=>'j', 'palabra'=>'jornalero'),
array('letra'=>'j', 'palabra'=>'joroba'),
array('letra'=>'j', 'palabra'=>'jorobado'),
array('letra'=>'j', 'palabra'=>'jorobadura'),
array('letra'=>'j', 'palabra'=>'jorobar'),
array('letra'=>'j', 'palabra'=>'jorobeta'),
array('letra'=>'j', 'palabra'=>'jorongo'),
array('letra'=>'j', 'palabra'=>'joropear'),
array('letra'=>'j', 'palabra'=>'joropo'),
array('letra'=>'j', 'palabra'=>'jorrar'),
array('letra'=>'j', 'palabra'=>'jorro'),
array('letra'=>'j', 'palabra'=>'josa'),
array('letra'=>'j', 'palabra'=>'jose'),
array('letra'=>'j', 'palabra'=>'josefinismo'),
array('letra'=>'j', 'palabra'=>'josefino'),
array('letra'=>'j', 'palabra'=>'josefismo'),
array('letra'=>'j', 'palabra'=>'jostra'),
array('letra'=>'j', 'palabra'=>'jostrado'),
array('letra'=>'j', 'palabra'=>'jota'),
array('letra'=>'j', 'palabra'=>'jote'),
array('letra'=>'j', 'palabra'=>'jotero'),
array('letra'=>'j', 'palabra'=>'joto'),
array('letra'=>'j', 'palabra'=>'joule'),
array('letra'=>'j', 'palabra'=>'joven'),
array('letra'=>'j', 'palabra'=>'jovenado'),
array('letra'=>'j', 'palabra'=>'jovenete'),
array('letra'=>'j', 'palabra'=>'jovial'),
array('letra'=>'j', 'palabra'=>'jovialidad'),
array('letra'=>'j', 'palabra'=>'jovialmente'),
array('letra'=>'j', 'palabra'=>'joya'),
array('letra'=>'j', 'palabra'=>'joyante'),
array('letra'=>'j', 'palabra'=>'joyel'),
array('letra'=>'j', 'palabra'=>'joyelero'),
array('letra'=>'j', 'palabra'=>'joyeria'),
array('letra'=>'j', 'palabra'=>'joyero'),
array('letra'=>'j', 'palabra'=>'joyo'),
array('letra'=>'j', 'palabra'=>'joyon'),
array('letra'=>'j', 'palabra'=>'joyosa'),
array('letra'=>'j', 'palabra'=>'ju'),
array('letra'=>'j', 'palabra'=>'juagarzo'),
array('letra'=>'j', 'palabra'=>'juan'),
array('letra'=>'j', 'palabra'=>'juana'),
array('letra'=>'j', 'palabra'=>'juanelo'),
array('letra'=>'j', 'palabra'=>'juanete'),
array('letra'=>'j', 'palabra'=>'juanetero'),
array('letra'=>'j', 'palabra'=>'juanetudo'),
array('letra'=>'j', 'palabra'=>'juanillo'),
array('letra'=>'j', 'palabra'=>'juanramoniano'),
array('letra'=>'j', 'palabra'=>'juarda'),
array('letra'=>'j', 'palabra'=>'juardoso'),
array('letra'=>'j', 'palabra'=>'juba'),
array('letra'=>'j', 'palabra'=>'jubada'),
array('letra'=>'j', 'palabra'=>'jubete'),
array('letra'=>'j', 'palabra'=>'jubeteria'),
array('letra'=>'j', 'palabra'=>'jubetero'),
array('letra'=>'j', 'palabra'=>'jubilacion'),
array('letra'=>'j', 'palabra'=>'jubilado'),
array('letra'=>'j', 'palabra'=>'jubilar'),
array('letra'=>'j', 'palabra'=>'jubileo'),
array('letra'=>'j', 'palabra'=>'jubillo'),
array('letra'=>'j', 'palabra'=>'jubilo'),
array('letra'=>'j', 'palabra'=>'jubilosamente'),
array('letra'=>'j', 'palabra'=>'jubiloso'),
array('letra'=>'j', 'palabra'=>'jubo'),
array('letra'=>'j', 'palabra'=>'jubon'),
array('letra'=>'j', 'palabra'=>'jubonero'),
array('letra'=>'j', 'palabra'=>'jucaro'),
array('letra'=>'j', 'palabra'=>'juco'),
array('letra'=>'j', 'palabra'=>'juco'),
array('letra'=>'j', 'palabra'=>'judaico'),
array('letra'=>'j', 'palabra'=>'judaismo'),
array('letra'=>'j', 'palabra'=>'judaizacion'),
array('letra'=>'j', 'palabra'=>'judaizante'),
array('letra'=>'j', 'palabra'=>'judaizar'),
array('letra'=>'j', 'palabra'=>'judas'),
array('letra'=>'j', 'palabra'=>'judea'),
array('letra'=>'j', 'palabra'=>'judeocristiano'),
array('letra'=>'j', 'palabra'=>'judeoespañol'),
array('letra'=>'j', 'palabra'=>'juderia'),
array('letra'=>'j', 'palabra'=>'judgador'),
array('letra'=>'j', 'palabra'=>'judgar'),
array('letra'=>'j', 'palabra'=>'judia'),
array('letra'=>'j', 'palabra'=>'judiada'),
array('letra'=>'j', 'palabra'=>'judiar'),
array('letra'=>'j', 'palabra'=>'judicante'),
array('letra'=>'j', 'palabra'=>'judicar'),
array('letra'=>'j', 'palabra'=>'judicativo'),
array('letra'=>'j', 'palabra'=>'judicatura'),
array('letra'=>'j', 'palabra'=>'judicial'),
array('letra'=>'j', 'palabra'=>'judicializacion'),
array('letra'=>'j', 'palabra'=>'judicializar'),
array('letra'=>'j', 'palabra'=>'judicialmente'),
array('letra'=>'j', 'palabra'=>'judiciario'),
array('letra'=>'j', 'palabra'=>'judicio'),
array('letra'=>'j', 'palabra'=>'judicioso'),
array('letra'=>'j', 'palabra'=>'judiego'),
array('letra'=>'j', 'palabra'=>'judio'),
array('letra'=>'j', 'palabra'=>'judion'),
array('letra'=>'j', 'palabra'=>'judo'),
array('letra'=>'j', 'palabra'=>'juego'),
array('letra'=>'j', 'palabra'=>'juera'),
array('letra'=>'j', 'palabra'=>'juerga'),
array('letra'=>'j', 'palabra'=>'juerguearse'),
array('letra'=>'j', 'palabra'=>'juerguista'),
array('letra'=>'j', 'palabra'=>'jueves'),
array('letra'=>'j', 'palabra'=>'juey'),
array('letra'=>'j', 'palabra'=>'juez'),
array('letra'=>'j', 'palabra'=>'jueza'),
array('letra'=>'j', 'palabra'=>'jugada'),
array('letra'=>'j', 'palabra'=>'jugadera'),
array('letra'=>'j', 'palabra'=>'jugado'),
array('letra'=>'j', 'palabra'=>'jugador'),
array('letra'=>'j', 'palabra'=>'jugar'),
array('letra'=>'j', 'palabra'=>'jugarreta'),
array('letra'=>'j', 'palabra'=>'juglandeo'),
array('letra'=>'j', 'palabra'=>'juglar'),
array('letra'=>'j', 'palabra'=>'juglara'),
array('letra'=>'j', 'palabra'=>'juglareria'),
array('letra'=>'j', 'palabra'=>'juglaresa'),
array('letra'=>'j', 'palabra'=>'juglaresco'),
array('letra'=>'j', 'palabra'=>'juglaria'),
array('letra'=>'j', 'palabra'=>'jugleria'),
array('letra'=>'j', 'palabra'=>'jugo'),
array('letra'=>'j', 'palabra'=>'jugosidad'),
array('letra'=>'j', 'palabra'=>'jugoso'),
array('letra'=>'j', 'palabra'=>'juguete'),
array('letra'=>'j', 'palabra'=>'juguetear'),
array('letra'=>'j', 'palabra'=>'jugueteo'),
array('letra'=>'j', 'palabra'=>'jugueteria'),
array('letra'=>'j', 'palabra'=>'juguetero'),
array('letra'=>'j', 'palabra'=>'jugueton'),
array('letra'=>'j', 'palabra'=>'juiciero'),
array('letra'=>'j', 'palabra'=>'juicio'),
array('letra'=>'j', 'palabra'=>'juiciosamente'),
array('letra'=>'j', 'palabra'=>'juicioso'),
array('letra'=>'j', 'palabra'=>'juilin'),
array('letra'=>'j', 'palabra'=>'jujear'),
array('letra'=>'j', 'palabra'=>'jujeño'),
array('letra'=>'j', 'palabra'=>'jujeo'),
array('letra'=>'j', 'palabra'=>'julepe'),
array('letra'=>'j', 'palabra'=>'julepear'),
array('letra'=>'j', 'palabra'=>'julia'),
array('letra'=>'j', 'palabra'=>'juliano'),
array('letra'=>'j', 'palabra'=>'julio'),
array('letra'=>'j', 'palabra'=>'julo'),
array('letra'=>'j', 'palabra'=>'juma'),
array('letra'=>'j', 'palabra'=>'jumarse'),
array('letra'=>'j', 'palabra'=>'jumenta'),
array('letra'=>'j', 'palabra'=>'jumental'),
array('letra'=>'j', 'palabra'=>'jumentil'),
array('letra'=>'j', 'palabra'=>'jumento'),
array('letra'=>'j', 'palabra'=>'jumera'),
array('letra'=>'j', 'palabra'=>'jumil'),
array('letra'=>'j', 'palabra'=>'jumilla'),
array('letra'=>'j', 'palabra'=>'jumo'),
array('letra'=>'j', 'palabra'=>'juncaceo'),
array('letra'=>'j', 'palabra'=>'juncada'),
array('letra'=>'j', 'palabra'=>'juncal'),
array('letra'=>'j', 'palabra'=>'juncar'),
array('letra'=>'j', 'palabra'=>'junceo'),
array('letra'=>'j', 'palabra'=>'juncia'),
array('letra'=>'j', 'palabra'=>'juncial'),
array('letra'=>'j', 'palabra'=>'junciana'),
array('letra'=>'j', 'palabra'=>'junciera'),
array('letra'=>'j', 'palabra'=>'juncino'),
array('letra'=>'j', 'palabra'=>'juncir'),
array('letra'=>'j', 'palabra'=>'junco'),
array('letra'=>'j', 'palabra'=>'juncoso'),
array('letra'=>'j', 'palabra'=>'jungla'),
array('letra'=>'j', 'palabra'=>'junglada'),
array('letra'=>'j', 'palabra'=>'juninense'),
array('letra'=>'j', 'palabra'=>'junio'),
array('letra'=>'j', 'palabra'=>'junior'),
array('letra'=>'j', 'palabra'=>'junipero'),
array('letra'=>'j', 'palabra'=>'junquera'),
array('letra'=>'j', 'palabra'=>'junqueral'),
array('letra'=>'j', 'palabra'=>'junquillo'),
array('letra'=>'j', 'palabra'=>'junta'),
array('letra'=>'j', 'palabra'=>'juntador'),
array('letra'=>'j', 'palabra'=>'juntamente'),
array('letra'=>'j', 'palabra'=>'juntamiento'),
array('letra'=>'j', 'palabra'=>'juntar'),
array('letra'=>'j', 'palabra'=>'juntera'),
array('letra'=>'j', 'palabra'=>'junterilla'),
array('letra'=>'j', 'palabra'=>'juntero'),
array('letra'=>'j', 'palabra'=>'junto'),
array('letra'=>'j', 'palabra'=>'juntorio'),
array('letra'=>'j', 'palabra'=>'juntucha'),
array('letra'=>'j', 'palabra'=>'juntura'),
array('letra'=>'j', 'palabra'=>'junza'),
array('letra'=>'j', 'palabra'=>'juñir'),
array('letra'=>'j', 'palabra'=>'jupa'),
array('letra'=>'j', 'palabra'=>'jupiter'),
array('letra'=>'j', 'palabra'=>'jupiterino'),
array('letra'=>'j', 'palabra'=>'jur'),
array('letra'=>'j', 'palabra'=>'jura'),
array('letra'=>'j', 'palabra'=>'juradera'),
array('letra'=>'j', 'palabra'=>'juraderia'),
array('letra'=>'j', 'palabra'=>'jurado'),
array('letra'=>'j', 'palabra'=>'jurador'),
array('letra'=>'j', 'palabra'=>'juraduria'),
array('letra'=>'j', 'palabra'=>'juramentar'),
array('letra'=>'j', 'palabra'=>'juramento'),
array('letra'=>'j', 'palabra'=>'juramiento'),
array('letra'=>'j', 'palabra'=>'jurar'),
array('letra'=>'j', 'palabra'=>'jurasico'),
array('letra'=>'j', 'palabra'=>'juratoria'),
array('letra'=>'j', 'palabra'=>'juratorio'),
array('letra'=>'j', 'palabra'=>'jurco'),
array('letra'=>'j', 'palabra'=>'jurdano'),
array('letra'=>'j', 'palabra'=>'jurdia'),
array('letra'=>'j', 'palabra'=>'jurel'),
array('letra'=>'j', 'palabra'=>'jurero'),
array('letra'=>'j', 'palabra'=>'jurguina'),
array('letra'=>'j', 'palabra'=>'juridicamente'),
array('letra'=>'j', 'palabra'=>'juridicidad'),
array('letra'=>'j', 'palabra'=>'juridico'),
array('letra'=>'j', 'palabra'=>'jurisconsulto'),
array('letra'=>'j', 'palabra'=>'jurisdiccion'),
array('letra'=>'j', 'palabra'=>'jurisdiccional'),
array('letra'=>'j', 'palabra'=>'jurispericia'),
array('letra'=>'j', 'palabra'=>'jurisperito'),
array('letra'=>'j', 'palabra'=>'jurisprudencia'),
array('letra'=>'j', 'palabra'=>'jurisprudente'),
array('letra'=>'j', 'palabra'=>'jurista'),
array('letra'=>'j', 'palabra'=>'juro'),
array('letra'=>'j', 'palabra'=>'jurquero'),
array('letra'=>'j', 'palabra'=>'jurungar'),
array('letra'=>'j', 'palabra'=>'jurutungo'),
array('letra'=>'j', 'palabra'=>'jusbarba'),
array('letra'=>'j', 'palabra'=>'jusello'),
array('letra'=>'j', 'palabra'=>'jusente'),
array('letra'=>'j', 'palabra'=>'jusi'),
array('letra'=>'j', 'palabra'=>'justa'),
array('letra'=>'j', 'palabra'=>'justador'),
array('letra'=>'j', 'palabra'=>'justamente'),
array('letra'=>'j', 'palabra'=>'justar'),
array('letra'=>'j', 'palabra'=>'justedad'),
array('letra'=>'j', 'palabra'=>'justeza'),
array('letra'=>'j', 'palabra'=>'justicia'),
array('letra'=>'j', 'palabra'=>'justiciable'),
array('letra'=>'j', 'palabra'=>'justiciador'),
array('letra'=>'j', 'palabra'=>'justicialismo'),
array('letra'=>'j', 'palabra'=>'justicialista'),
array('letra'=>'j', 'palabra'=>'justiciar'),
array('letra'=>'j', 'palabra'=>'justiciazgo'),
array('letra'=>'j', 'palabra'=>'justiciero'),
array('letra'=>'j', 'palabra'=>'justificable'),
array('letra'=>'j', 'palabra'=>'justificacion'),
array('letra'=>'j', 'palabra'=>'justificadamente'),
array('letra'=>'j', 'palabra'=>'justificado'),
array('letra'=>'j', 'palabra'=>'justificador'),
array('letra'=>'j', 'palabra'=>'justificante'),
array('letra'=>'j', 'palabra'=>'justificar'),
array('letra'=>'j', 'palabra'=>'justificativo'),
array('letra'=>'j', 'palabra'=>'justillo'),
array('letra'=>'j', 'palabra'=>'justinianeo'),
array('letra'=>'j', 'palabra'=>'justipreciacion'),
array('letra'=>'j', 'palabra'=>'justipreciar'),
array('letra'=>'j', 'palabra'=>'justiprecio'),
array('letra'=>'j', 'palabra'=>'justo'),
array('letra'=>'j', 'palabra'=>'juta'),
array('letra'=>'j', 'palabra'=>'jutia'),
array('letra'=>'j', 'palabra'=>'jutia'),
array('letra'=>'j', 'palabra'=>'jutiapaneco'),
array('letra'=>'j', 'palabra'=>'juticalpense'),
array('letra'=>'j', 'palabra'=>'juvenal'),
array('letra'=>'j', 'palabra'=>'juvenca'),
array('letra'=>'j', 'palabra'=>'juvenco'),
array('letra'=>'j', 'palabra'=>'juvenecer'),
array('letra'=>'j', 'palabra'=>'juvenil'),
array('letra'=>'j', 'palabra'=>'juventud'),
array('letra'=>'j', 'palabra'=>'juvia'),
array('letra'=>'j', 'palabra'=>'juzgado'),
array('letra'=>'j', 'palabra'=>'juzgador'),
array('letra'=>'j', 'palabra'=>'juzgaduria'),
array('letra'=>'j', 'palabra'=>'juzgamiento'),
array('letra'=>'j', 'palabra'=>'juzgamundos'),
array('letra'=>'j', 'palabra'=>'juzgar'),


		);
         
        foreach ($lstStructure as $lst) {

            $objeto = new Pma5Diccionario();
            $objeto->setLetra($lst['letra']);
            $objeto->setPalabra($lst['palabra']);
            
            $manager->persist($objeto);                              
        }

        $manager->flush();    
	}
}

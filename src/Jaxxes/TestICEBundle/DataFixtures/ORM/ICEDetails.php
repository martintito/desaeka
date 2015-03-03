<?php

namespace Jaxxes\TestICEBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture; 
use Symfony\Component\DependencyInjection\ContainerAwareInterface;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Jaxxes\TestICEBundle\Entity\ICEDetail;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro de la cabecera para Resume = Ficha del candidato
 */
 
// class Resumes implements FixtureInterface
 class ICEDetails extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstStructure = array(	
			array ('number'=>'1', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Para superar las dificultades que se me presentan actúo paso a paso. '),
			array ('number'=>'2', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me resulta difícil disfrutar de la vida. '),
			array ('number'=>'3', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Prefiero un tipo de trabajo en el cual me indiquen casi todo lo que debo hacer.'),
			array ('number'=>'4', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Sé cómo manejar los problemas más desagradables. '),
			array ('number'=>'5', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me agradan las personas que conozco'),
			array ('number'=>'6', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Trato de valorar y darle el mejor sentido a mi vida. '),
			array ('number'=>'7', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me resulta relativamente fácil expresar mis sentimientos.'),
			array ('number'=>'8', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Trato de ser realista, no me gusta fantasear ni soñar despierto(a).'),
			array ('number'=>'9', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Entro fácilmente en contacto con mis emociones.'),
			array ('number'=>'10', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Soy incapaz de demostrar afecto. '),
			array ('number'=>'11', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me siento seguro(a) de mí mismo(a) en la mayoría de las situaciones. '),
			array ('number'=>'12', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Tengo la sensación que algo no está bien en mi cabeza. '),
			array ('number'=>'13', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Tengo problemas para controlarme cuando me enojo '),
			array ('number'=>'14', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me resulta difícil comenzar cosas nuevas.'),
			array ('number'=>'15', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Frente a una situación problemática obtengo la mayor cantidad de información posible para comprender mejor lo que está pasando.'),
			array ('number'=>'16', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me gusta ayudar a la gente.'),
			array ('number'=>'17', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me es difícil sonreir. '),
			array ('number'=>'18', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Soy incapaz de comprender cómo se sienten los demás. '),
			array ('number'=>'19', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Cuando trabajo con otras personas, tiendo a confiar más en las ideas de los demás que en las mías propias. '),
			array ('number'=>'20', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Creo que tengo la capacidad para poder controlar las situaciones difíciles.'),
			array ('number'=>'21', 	 'type'=>'N', 'pair'=>'0', 'question'=>'No puedo identificar mis cualidades, no sé realmente para qué cosas soy bueno(a).'),
			array ('number'=>'22', 	 'type'=>'N', 'pair'=>'0', 'question'=>'No soy capaz de expresar mis pensamientos. '),
			array ('number'=>'23', 	 'type'=>'N', 'pair'=>'1', 'question'=>'Me es difícil compartir mis sentimientos más íntimos.'),
			array ('number'=>'24', 	 'type'=>'N', 'pair'=>'0', 'question'=>'No tengo confianza en mí mismo(a). '),
			array ('number'=>'25', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Creo que he perdido la cabeza. '),
			array ('number'=>'26', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Casi todo lo que hago, lo hago con optimismo.'),
			array ('number'=>'27', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Cuando comienzo a hablar me resulta difícil determe. '),
			array ('number'=>'28', 	 'type'=>'N', 'pair'=>'0', 'question'=>'En general, me resulta difícil adaptarme a los cambios.'),
			array ('number'=>'29', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Antes de intentar solucionar un problema me gusta obtener un panorama general del mismo. '),
			array ('number'=>'30', 	 'type'=>'N', 'pair'=>'0', 'question'=>'No me molesta aprovecharme de los demás, especialmente si se lo merecen. '),
			array ('number'=>'31', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Soy una persona bastante alegre y optimista. '),
			array ('number'=>'32', 	 'type'=>'N', 'pair'=>'6', 'question'=>'Prefiero que los otros tomen las decisiones por mí.'),
			array ('number'=>'33', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Puedo manejar situaciones de estrés sin ponerme demasiado nervioso(a). '),
			array ('number'=>'34', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Tengo pensamientos positivos para con los demás. '),
			array ('number'=>'35', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me es difícil entender cómo me siento. '),
			array ('number'=>'36', 	 'type'=>'N', 'pair'=>'0', 'question'=>'He logrado muy poco en los últimos años. '),
			array ('number'=>'37', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Cuando estoy enojado(a) con alguien se lo puedo decir. '),
			array ('number'=>'38', 	 'type'=>'N', 'pair'=>'0', 'question'=>'He tenido experiencias extrañas que son inexplicables. '),
			array ('number'=>'39', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me resulta fácil hacer amigos(as). '),
			array ('number'=>'40', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me tengo mucho respeto.'),
			array ('number'=>'41', 	 'type'=>'P', 'pair'=>'10', 'question'=>'Hago cosas muy raras.'),
			array ('number'=>'42', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Soy impulsivo(a) y esto me trae problemas. '),
			array ('number'=>'43', 	 'type'=>'N', 'pair'=>'0', 'question'=>' Me resulta difícil cambiar de opinión.'),
			array ('number'=>'44', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Tengo la capacidad para comprender los sentimientos ajenos.'),
			array ('number'=>'45', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Lo primero que hago cuando tengo un problema es detenerme a pensar.'),
			array ('number'=>'46', 	 'type'=>'N', 'pair'=>'0', 'question'=>'A la gente le resulta difícil confiar en mí. '),
			array ('number'=>'47', 	 'type'=>'P', 'pair'=>'5', 'question'=>'Estoy contento(a) con mi vida. '),
			array ('number'=>'48', 	 'type'=>'N', 'pair'=>'6', 'question'=>'Me resulta difícil tomar decisiones por mí mismo(a)'),
			array ('number'=>'49', 	 'type'=>'N', 'pair'=>'0', 'question'=>'No resisto el estrés.'),
			array ('number'=>'50', 	 'type'=>'P', 'pair'=>'0', 'question'=>'En mi vida no hago nada malo.'),
			array ('number'=>'51', 	 'type'=>'N', 'pair'=>'0', 'question'=>'No disfruto lo que hago'),
			array ('number'=>'52', 	 'type'=>'N', 'pair'=>'1', 'question'=>'Me resulta difícil expresar mis sentimientos más íntimos.'),
			array ('number'=>'53', 	 'type'=>'N', 'pair'=>'0', 'question'=>'La gente comprende mi manera de pensar.'),
			array ('number'=>'54', 	 'type'=>'P', 'pair'=>'0', 'question'=>'En general, espero que suceda lo mejor.'),
			array ('number'=>'55', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Mis amistades me confían sus intimidades.'),
			array ('number'=>'56', 	 'type'=>'N', 'pair'=>'3', 'question'=>'No me siento bien conmigo mismo(a).'),
			array ('number'=>'57', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Percibo cosas extrañas que los demás no ven. '),
			array ('number'=>'58', 	 'type'=>'N', 'pair'=>'0', 'question'=>'La gente me dice que baje el tono de voz cuando discuto. '),
			array ('number'=>'59', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me resulta fácil adaptarme a situaciones nuevas. '),
			array ('number'=>'60', 	 'type'=>'P', 'pair'=>'7', 'question'=>'Frente a una situación problemática, analizo todas las opciones y luego opto por la que considero mejor. '),
			array ('number'=>'61', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Si veo a un niño llorando me detengo a ayudarlo a encontrar a su padre, aunque en ese momento tenga otro compromiso. '),
			array ('number'=>'62', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Soy una persona divertida. '),
			array ('number'=>'63', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Soy consciente de cómo me siento.'),
			array ('number'=>'64', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Siento que me resulta difícil controlar mi ansiedad. '),
			array ('number'=>'65', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Nada me perturba.'),
			array ('number'=>'66', 	 'type'=>'N', 'pair'=>'0', 'question'=>'No me entusiasman mucho mis intereses. '),
			array ('number'=>'67', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Cuando no estoy de acuerdo con alguien siento que se lo puedo decir. '),
			array ('number'=>'68', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Tengo una tendencia a perder contacto con la realidad y a fantasear. '),
			array ('number'=>'69', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me es difícil relacionarme con los demás.'),
			array ('number'=>'70', 	 'type'=>'N', 'pair'=>'3', 'question'=>'Me resulta difícil aceptarme tal como soy. '),
			array ('number'=>'71', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me siento como si estuviera separado(a) de mi cuerpo.'),
			array ('number'=>'72', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me importa lo que puede sucederle a los demás. '),
			array ('number'=>'73', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Soy impaciente.'),  
			array ('number'=>'74', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Puedo cambiar mis viejas costumbres. '),
			array ('number'=>'75', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me resulta difícil escoger la mejor solución cuando tengo que resolver un problema.'),
			array ('number'=>'76', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Si pudiera violar la ley sin pagar las consecuencias, lo haría en determinadas situaciones.'),
			array ('number'=>'77', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me deprimo.'),  
			array ('number'=>'78', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Sé cómo mantener la calma en situaciones difíciles.'),
			array ('number'=>'79', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Nunca he mentido.'),
			array ('number'=>'80', 	 'type'=>'P', 'pair'=>'0', 'question'=>'En general, me siento motivado(a) para seguir adelante, incluso cuando las cosas se ponen difíciles. '),
			array ('number'=>'81', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Trato de seguir adelante con las cosas que me gustan.'),
			array ('number'=>'82', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me resulta difícil decir “no” aunque tenga el deseo de hacerlo.'),
			array ('number'=>'83', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me dejo llevar por mi imaginación y mis fantasías. '),
			array ('number'=>'84', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Mis relaciones más cercanas significan mucho, tanto para mí como para mis amigos '),
			array ('number'=>'85', 	 'type'=>'P', 'pair'=>'4', 'question'=>'Me siento feliz conmigo mismo(a).'),
			array ('number'=>'86', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Tengo reacciones fuertes, intensas que son difíciles de controlar. '),
			array ('number'=>'87', 	 'type'=>'N', 'pair'=>'8', 'question'=>'En general, me resulta difícil realizar cambios en mi vida cotidiana.'),
			array ('number'=>'88', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Soy consciente de lo que me está pasando, aun cuando estoy alterado(a).'),
			array ('number'=>'89', 	 'type'=>'P', 'pair'=>'7', 'question'=>'Para poder resolver una situación que se presenta, analizo todas las posibilidades existentes. '),
			array ('number'=>'90', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Soy respetuoso(a) con los demás. '),
			array ('number'=>'91', 	 'type'=>'N', 'pair'=>'5', 'question'=>'No estoy muy contento(a) con mi vida.'),
			array ('number'=>'92', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Prefiero seguir a otros, a ser líder.'),
			array ('number'=>'93', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Me resulta difícil enfrentar las cosas desagradables de la vida. '),
			array ('number'=>'94', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Nunca he violado la ley. '),
			array ('number'=>'95', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Disfruto de las cosas que me interesan.'),
			array ('number'=>'96', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Me resulta relativamente fácil decirle a la gente lo que pienso.'),
			array ('number'=>'97', 	 'type'=>'N', 'pair'=>'0', 'question'=>'Tengo tendencia a exagerar.'),
			array ('number'=>'98', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Soy sensible a los sentimientos de las otras personas. '),
			array ('number'=>'99', 	 'type'=>'P', 'pair'=>'0', 'question'=>'Mantengo buenas relaciones con la gente. '),
			array ('number'=>'100',  'type'=>'P', 'pair'=>'2', 'question'=>'Estoy contento(a) con mi cuerpo. '),
			array ('number'=>'101',  'type'=>'P', 'pair'=>'10', 'question'=>'Soy una persona muy extraña. '),
			array ('number'=>'102',  'type'=>'N', 'pair'=>'0', 'question'=>'Soy impulsivo(a).'),  
			array ('number'=>'103',  'type'=>'N', 'pair'=>'8', 'question'=>'Me resulta difícil cambiar mis costumbres. '),
			array ('number'=>'104',  'type'=>'P', 'pair'=>'0', 'question'=>'Considero que es importante ser un ciudadano(a) que respeta la ley.'),
			array ('number'=>'105',  'type'=>'P', 'pair'=>'0', 'question'=>'Disfruto las vacaciones y los fines de semana. '),
			array ('number'=>'106',  'type'=>'P', 'pair'=>'0', 'question'=>'En general, tengo una actitud positiva para todo, aún cuando surjan inconvenientes.'),
			array ('number'=>'107',  'type'=>'N', 'pair'=>'0', 'question'=>'Tengo tendencia a apegarme demasiado a la gente. '),
			array ('number'=>'108',  'type'=>'P', 'pair'=>'0', 'question'=>'Creo en mi capacidad para manejar los problemas más difíciles. '),
			array ('number'=>'109',  'type'=>'P', 'pair'=>'0', 'question'=>'No me siento avergonzado(a) por nada de lo que he hecho hasta ahora. '),
			array ('number'=>'110',  'type'=>'P', 'pair'=>'0', 'question'=>'Trato de aprovechar al máximo las cosas que me gustan. '),
			array ('number'=>'111',  'type'=>'N', 'pair'=>'0', 'question'=>'Los demás piensan que no me hago valer, que me falta firmeza.'),
			array ('number'=>'112',  'type'=>'P', 'pair'=>'0', 'question'=>'Soy capaz de dejar de fantasear para inmediatamente ponerme a tono con la realidad.'),
			array ('number'=>'113',  'type'=>'P', 'pair'=>'0', 'question'=>'Los demás opinan que soy una persona sociable. '),
			array ('number'=>'114',  'type'=>'P', 'pair'=>'2', 'question'=>'Estoy contento(a) con la forma en que me veo.'),
			array ('number'=>'115',  'type'=>'P', 'pair'=>'0', 'question'=>'Tengo pensamientos extraños que los demás no logran entender.'),
			array ('number'=>'116',  'type'=>'N', 'pair'=>'0', 'question'=>'Me es difícil describir lo que siento. '),
			array ('number'=>'117',  'type'=>'N', 'pair'=>'9', 'question'=>'Tengo mal carácter.'),
			array ('number'=>'118',  'type'=>'N', 'pair'=>'0', 'question'=>'Por lo general,me trabo cuando analizo diferentes opciones para resolver un problema.'),
			array ('number'=>'119',  'type'=>'P', 'pair'=>'0', 'question'=>'Me es difícil ver sufrir a la gente. '),
			array ('number'=>'120',  'type'=>'P', 'pair'=>'0', 'question'=>'Me gusta divertirme. '),
			array ('number'=>'121',  'type'=>'N', 'pair'=>'0', 'question'=>'Me parece que necesito de los demás, más de lo que ellos me necesitan. '),
			array ('number'=>'122',  'type'=>'N', 'pair'=>'0', 'question'=>'Me pongo ansioso.'),
			array ('number'=>'123',  'type'=>'P', 'pair'=>'0', 'question'=>'Nunca tengo un mal día.'),
			array ('number'=>'124',  'type'=>'P', 'pair'=>'0', 'question'=>'Intento no herir los sentimientos de los demás.'),
			array ('number'=>'125',  'type'=>'N', 'pair'=>'0', 'question'=>'No tengo idea de lo que quiero hacer en mi vida. '),
			array ('number'=>'126',  'type'=>'N', 'pair'=>'0', 'question'=>'Me es difícil hacer valer mis derechos.'),
			array ('number'=>'127',  'type'=>'N', 'pair'=>'0', 'question'=>'Me es difícil ser realista.'),
			array ('number'=>'128',  'type'=>'N', 'pair'=>'0', 'question'=>'No mantengo relación con mis amistades.'),
			array ('number'=>'129',  'type'=>'P', 'pair'=>'4', 'question'=>'Mis cualidades superan a mis defectos y esto me permite estar contento(a) conmigo mismo(a).'),
			array ('number'=>'130',  'type'=>'N', 'pair'=>'9', 'question'=>'Tengo una tendencia de explotar de rabia fácilmente. '),
			array ('number'=>'131',  'type'=>'N', 'pair'=>'0', 'question'=>'Si me viera obligado(a) a dejar mi casa actual, me sería difícil adaptarme nuevamente. '),
			array ('number'=>'132',  'type'=>'N', 'pair'=>'0', 'question'=>'En general, cuando comienzo algo nuevo tengo la sensación que voy a fracasar.'),
			array ('number'=>'133',  'type'=>'P', 'pair'=>'0', 'question'=>'He respondido sincera y honestamente a las frases anteriores.'),
		);

	 // Obtener todas las cabeceras 
        $pregutaList = $manager->getRepository('TestICEBundle:ICE')->findAll();
         
	 foreach ($pregutaList as $entrevista)
        foreach ($lstStructure as $lst) {
			
			// print "elemento 1: {$lst[$i]}";
            $objeto = new ICEDetail();
            $objeto->setQuestion($lst['question']);
            $objeto->setIce($entrevista);
            $objeto->setNumber($lst['number']);
            $objeto->setType($lst['type']);
            $objeto->setPair($lst['pair']);
            
            $manager->persist($objeto);                                   
        }        
        $manager->flush();
    }
}

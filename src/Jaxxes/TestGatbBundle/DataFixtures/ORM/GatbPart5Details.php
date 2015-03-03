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

use Jaxxes\TestGatbBundle\Entity\GatbPart5Detail;

/**
 * Fixtures de la entidad Resume.
 * Crea el registro para las pregunstas de la primera prueba del GATB
 */
 
// class Resumes implements FixtureInterface
 class GatbPart5Details extends AbstractFixture implements OrderedFixtureInterface
{
	
    public function getOrder()
    {
        return 3;
    }
    private $container;
    
    
    
    public function load(ObjectManager $manager)
    {
        $lstGatbPart5Details = array(	
            array ( 'number'=>'1',
                    'factorG'=>'2',
                    'factorN'=>'2',
                    'question'=>'¿Cuántos estudiantes hay en una clase de 12 niñas y 7 niños?',
                    'fieldA'=>'5 estudiantes', 
                    'fieldB'=>'15 estudiantes', 
                    'fieldC'=>'17 estudiantes', 
                    'fieldD'=>'18 estudiantes', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'E'),
            array ( 'number'=>'2',
                    'factorG'=>'5',
                    'factorN'=>'4',
                    'question'=>'Un contratista puede construir 6 casas en un mes. ¿Cuantas casa puede construir en 8 meses?',
                    'fieldA'=>'14 casas', 
                    'fieldB'=>'45 casas', 
                    'fieldC'=>'48 casas', 
                    'fieldD'=>'49 casas', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
            array ( 'number'=>'3',
                    'factorG'=>'7',
                    'factorN'=>'5',
                    'question'=>'Carlos trabaja regularmente 45 horas por semana. La ultima semana trabajo 17 horas de sobretiempo. ¿Cuántas horas trabajo él?',
                    'fieldA'=>'28 horas', 
                    'fieldB'=>'38 horas', 
                    'fieldC'=>'52 horas', 
                    'fieldD'=>'61 horas', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'E'),
            array ( 'number'=>'4',
                    'factorG'=>'10',
                    'factorN'=>'7',
                    'question'=>'Usualmente pedro toma 45 minutos para llegar a su trabajo. Esta mañana tomo 1 hora y 5 minutos. ¿Cuántos minutos más se demoro esta mañana?',
                    'fieldA'=>'5 minutos', 
                    'fieldB'=>'10 minutos', 
                    'fieldC'=>'20 minutos', 
                    'fieldD'=>'30 minutos', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
            array ( 'number'=>'5',
                    'factorG'=>'12',
                    'factorN'=>'9',
                    'question'=>'Un taller emplea 3 veces mas el número de trabajadores que empleaba hace un año. Habia 29 hombres empleados en el taller hace un año. ¿Cuántos hombres hay empleados ahora?',
                    'fieldA'=>'87 hombres', 
                    'fieldB'=>'91 hombres', 
                    'fieldC'=>'97 hombres', 
                    'fieldD'=>'98 hombres', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'A'),
            array ( 'number'=>'6',
                    'factorG'=>'14',
                    'factorN'=>'11',
                    'question'=>'Juan tiene un carro que recorre 14 kilómetros por cada galón de gasolina. ¿Cuántos kilómetros recorrerá su carro con 15 galones de gasolina?',
                    'fieldA'=>'110 kilómetros', 
                    'fieldB'=>'210 kilómetros', 
                    'fieldC'=>'211 kilómetros', 
                    'fieldD'=>'219 kilómetros', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'B'),
            array ( 'number'=>'7',
                    'factorG'=>'17',
                    'factorN'=>'12',
                    'question'=>'Una muchacha de 14 años permanece la tercera parte de su vida en Arequipa. ¿Cuántos años ha vivido en Arequipa?',
                    'fieldA'=>'4 2/3 años', 
                    'fieldB'=>'5 años', 
                    'fieldC'=>'5 1/3 años', 
                    'fieldD'=>'11 años', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'A'),
            array ( 'number'=>'8',
                    'factorG'=>'19',
                    'factorN'=>'14',
                    'question'=>'Juan compró una motoneta por un valor de S/. 3.960. El arregló para pagarle durante un año. ¿Qué cantidad pagó cada mes?',
                    'fieldA'=>'S/. 305.00', 
                    'fieldB'=>'S/. 325.00', 
                    'fieldC'=>'S/. 330.00', 
                    'fieldD'=>'S/. 342.75', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
            array ( 'number'=>'9',
                    'factorG'=>'22',
                    'factorN'=>'16',
                    'question'=>'De una soga de 3 yardas de largo se va a cortar 5 pies. ¿Cuántas pulgadas quedarán después que la pieza ha sido cortada?
(1 yarda = 3 pies ; 1 pie = 12 pulgadas)',
                    'fieldA'=>'4 pulgadas', 
                    'fieldB'=>'24 pulgadas', 
                    'fieldC'=>'40 pulgadas', 
                    'fieldD'=>'48 pulgadas', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'D'),
            array ( 'number'=>'10',
                    'factorG'=>'24',
                    'factorN'=>'18',
                    'question'=>'Si un presidente de una Asamblea concede 15 minutos para cada orador, en tres horas y media de discusión. ¿Cuántos podrán hablar?',
                    'fieldA'=>'12 personas', 
                    'fieldB'=>'14 personas', 
                    'fieldC'=>'16 personas', 
                    'fieldD'=>'18 personas', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'B'),
            array ( 'number'=>'11',
                    'factorG'=>'26',
                    'factorN'=>'19',
                    'question'=>'Dos ruedas miden 2.6 metros y 1.855 metros de diámetro. ¿Cuál es la diferencia de diámetro entre las dos ruedas?',
                    'fieldA'=>'745 metros', 
                    'fieldB'=>'775 metros', 
                    'fieldC'=>'825 metros', 
                    'fieldD'=>'855 metros', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'A'),
            array ( 'number'=>'12',
                    'factorG'=>'29',
                    'factorN'=>'21',
                    'question'=>'Carlos compró una máquina de escribir por S/. 3.125.00. La vendió perdiendo S/. 410.75. ¿Cuál fue el precio de venta?',
                    'fieldA'=>'S/. 2.694.25', 
                    'fieldB'=>'S/. 2.704.25', 
                    'fieldC'=>'S/. 2.714.25', 
                    'fieldD'=>'S/. 2.715.25', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
            array ( 'number'=>'13',
                    'factorG'=>'31',
                    'factorN'=>'23',
                    'question'=>'¿Cuántos metros cuadrados de alfombra se requiere para cubrir un cuarto de 27 metros de largo por 15 de ancho?',
                    'fieldA'=>'12 metros cuadrados', 
                    'fieldB'=>'42 metros cuadrados', 
                    'fieldC'=>'395 metros cuadrados', 
                    'fieldD'=>'405 metros cuadrados', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'D'),
            array ( 'number'=>'14',
                    'factorG'=>'34',
                    'factorN'=>'25',
                    'question'=>'Se ha dividido una hoja de papel de 2 3/4 pies en columnas de 3 pulgadas de ancho. ¿Cuál es el mayor número de columnas que puede contener la hoja? (1 pie = 12 pulgadas)',
                    'fieldA'=>'9 columnas', 
                    'fieldB'=>'11 columnas', 
                    'fieldC'=>'14 columnas', 
                    'fieldD'=>'21 columnas', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'B'),
            array ( 'number'=>'15',
                    'factorG'=>'36',
                    'factorN'=>'27',
                    'question'=>'José hizo un viaje de 1.275 kilómetros. El voló el 40% de esta distancia. ¿Cuántos kilómetros voló?',
                    'fieldA'=>'313 3/14 kilómetros', 
                    'fieldB'=>'510 kilómetros', 
                    'fieldC'=>'765 kilómetros', 
                    'fieldD'=>'1235 kilómetros', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'B'),
            array ( 'number'=>'16',
                    'factorG'=>'38',
                    'factorN'=>'28',
                    'question'=>'En un exámen de historia de 60 preguntas Enrique contesto correctamente 51. ¿Qué porcentaje de respuestas correctas respondió?',
                    'fieldA'=>'15%', 
                    'fieldB'=>'18%', 
                    'fieldC'=>'75%', 
                    'fieldD'=>'85%', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'D'),
            array ( 'number'=>'17',
                    'factorG'=>'41',
                    'factorN'=>'30',
                    'question'=>'Tres muchachos dividieron S/. 3.60 entre ellos. El primer muchacho recibió 1/4 de la cantidad total y el segundo recibió 1/3 del total. ¿Cuánto recibió el tercero?',
                    'fieldA'=>'S/. 1.00', 
                    'fieldB'=>'S/. 1.25', 
                    'fieldC'=>'S/. 1.50', 
                    'fieldD'=>'S/. 2.00', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
            array ( 'number'=>'18',
                    'factorG'=>'43',
                    'factorN'=>'32',
                    'question'=>'Un joven vive a dos kilómetros de su colegio. Si él maneja su bicicleta a un promedio de 10 kilómetros por hora. ¿Cuántas horas demorará manejando a y del colegio cada semana? (El va al colegio 5 dias a la semana y no regresa a casa a almorzar).',
                    'fieldA'=>'2 horas', 
                    'fieldB'=>'2 1/2 horas', 
                    'fieldC'=>'3 horas', 
                    'fieldD'=>'4 horas', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'A'),
            array ( 'number'=>'19',
                    'factorG'=>'46',
                    'factorN'=>'34',
                    'question'=>'Un hombre es dueño de una casa evaluada en S/. 9.000. Esta es tasada por los dos tercios de su valor. El impuesto es de S/.2.25 por cada S/.100 del valor tasado. ¿Cuánto suma su impuesto?',
                    'fieldA'=>'S/. 135.00', 
                    'fieldB'=>'S/. 150.00', 
                    'fieldC'=>'S/. 270.00', 
                    'fieldD'=>'S/. 875.25', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'A'),
            array ( 'number'=>'20',
                    'factorG'=>'48',
                    'factorN'=>'35',
                    'question'=>'Un motor que hace girar una rueda dentada grande 12 veces, simultáneamente hace girar una rueda dentada más pequeña 32 veces. ¿Cuántas veces girará la rueda pequeña si la grande gira 72 veces? A 2 1/4 veces',
                    'fieldA'=>'2 1/4 veces', 
                    'fieldB'=>'6 veces', 
                    'fieldC'=>'192 veces', 
                    'fieldD'=>'212 veces', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
            array ( 'number'=>'21',
                    'factorG'=>'50',
                    'factorN'=>'31',
                    'question'=>'Un hombre plantó maiz en 2 1/4 acres de tierra. El plantó también 27,690 pies cuadrados con papas. ¿Cuántos pies cuadrados plantó en total?',
                    'fieldA'=>'12,570 pies cuadrados', 
                    'fieldB'=>'124,700 pies cuadrados', 
                    'fieldC'=>'125,200 pies cuadrados', 
                    'fieldD'=>'125,700 pies cuadrados', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'D'),
            array ( 'number'=>'22',
                    'factorG'=>'53',
                    'factorN'=>'39',
                    'question'=>'En una oficina hay 12 mecanógrafas que pueden escribir 12 hojas por dia cada una, 15 pueden escribir 20 hojas al dia cada una y 20 pueden escribir 18 hojas al dia cada una. ¿Cuántas hojas pueden escribir en 5 dias?',
                    'fieldA'=>'1,680 hojas', 
                    'fieldB'=>'4,020 hojas', 
                    'fieldC'=>'4,220 hojas', 
                    'fieldD'=>'4,225 hojas', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'B'),
            array ( 'number'=>'23',
                    'factorG'=>'55',
                    'factorN'=>'41',
                    'question'=>'Tres hombres han realizado un trabajo y se les pagó S/.1.25, S/.1.75 por hora respectivamente. Ellos recibieron S/. 1,080.00 cuando terminó el trabajo. Si ellos trabajaron 8 horas diarias,6 dias de la semana. ¿Cuántas semanas se necesitó para el trabajo?',
                    'fieldA'=>'3 semanas', 
                    'fieldB'=>'4 semanas', 
                    'fieldC'=>'5 semanas', 
                    'fieldD'=>'6 semanas', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
            array ( 'number'=>'24',
                    'factorG'=>'57',
                    'factorN'=>'43',
                    'question'=>'Un hombre desea poner un aviso de 3 lineas en un periódico con el fin de vender herramientas usadas. Le costará S/. 0.25 por linea en el primer dia, S/. 0.15 linea por cada uno de los 5 dias siguientes y después S/. 0.10 linea por dia. El tiene S/. 6.00 para pagar el aviso. ¿Cuántos dias puede publicarlo?',
                    'fieldA'=>'6 dias', 
                    'fieldB'=>'10 dias', 
                    'fieldC'=>'16 dias', 
                    'fieldD'=>'21 dias', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
            array ( 'number'=>'25',
                    'factorG'=>'60',
                    'factorN'=>'44',
                    'question'=>'Un hombre tiene un pozo en una hacienda. El pagó S/. 2.50 por pie por la perforación de los primeros 25 pies, S/.3.00 por pie por los 50 pies siguientes y S/.3.50 por pie por los restantes. Si pagó S/. 363.00 por el trabajo. ¿Cuál fue la profundidad del pozo?',
                    'fieldA'=>'113 pies', 
                    'fieldB'=>'115 pies', 
                    'fieldC'=>'118 pies', 
                    'fieldD'=>'125 pies', 
                    'fieldE'=>'ninguna de éstas', 
                    'alternativeCorrect'=>'C'),
								);
                                
        $gatbPart5List = $manager->getRepository('TestGatbBundle:GatbPart5')->findAll();
        
        foreach ($gatbPart5List as $gatbPart5)
            foreach ($lstGatbPart5Details as $gatbPart5Detail) {
                $objeto = new GatbPart5Detail();
                
                $objeto->setNumber($gatbPart5Detail['number']);
                $objeto->setFactorG($gatbPart5Detail['factorG']);
                $objeto->setFactorN($gatbPart5Detail['factorN']);
                $objeto->setQuestion($gatbPart5Detail['question']);
                $objeto->setFieldA($gatbPart5Detail['fieldA']);
                $objeto->setFieldB($gatbPart5Detail['fieldB']);
                $objeto->setFieldC($gatbPart5Detail['fieldC']);
                $objeto->setFieldD($gatbPart5Detail['fieldD']);
                $objeto->setFieldE($gatbPart5Detail['fieldE']);
                $objeto->setAlternativeCorrect($gatbPart5Detail['alternativeCorrect']);
                
                $objeto->setGatbPart5($gatbPart5);
                
                $manager->persist($objeto);
            }        
            $manager->flush();
    }
}

<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\TestICESPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class ICEDetailSPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            

            ->add('answer','choice', array(	'label' => 'Respuesta: ', 
											'choices' => array('-'=>'Seleccione', '1'=>'Rara vez o nunca','2'=>'Pocas veces','3'=>'Algunas veces','4'=>'Muchas veces', '5'=>'Muy frecuentemente o siempre' ), 
											//'multiple'  => true,
											//'expanded' => false,
											//'attr' => array('class' => 'span12')
											)
				)
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestICESPBundle\Entity\ICESPDetail',
        ));
    }

    public function getName()
    {
        return 'jaxxes_TestICESPBundle_ICESPDetail';
    }
}



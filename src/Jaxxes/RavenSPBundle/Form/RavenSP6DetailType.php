<?php

/*
 * (c) Rossana Janampa
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\RavenSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class RavenSP6DetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                    
            ->add('answer','choice', array(
				'label' => 'Alternativas: ', 
				'choices' => array(  
									'1'=>'1',
									'2'=>'2',
									'3'=>'3',
									'4'=>'4', 
									'5'=>'5', 
									'6'=>'6' ),
				'required'    => true,
				'empty_value' => 'Seleccione',
				//'empty_data'  => null,
				'data'=>'Seleccione',
				'required' => false,
				'attr' => array('class' => 'span12')
				)
			)
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar y Continuar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\RavenSPBundle\Entity\RavenSPDetail',
        ));
    }

    public function getName()
    {
        return 'jaxxes_RavenSPBundle_RavenSP6Detail';
    }
}



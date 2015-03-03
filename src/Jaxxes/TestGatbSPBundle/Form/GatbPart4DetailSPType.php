<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\TestGatbSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class GatbPart4DetailSPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
           
            ->add('gatbPart4Detail',null)
            ->add('answer','choice', array('label' => 'answer', 'choices' => array('-'=>'Seleccione', 'AB'=>'Respuestas a-b', 'AC'=>'Respuestas a-c', 'AD'=>'Respuestas a-d', 'BC'=>'Respuestas b-c', 'BD'=>'Respuestas b-d', 'CD'=>'Respuestas c-d'), 'attr' => array('class' => 'span12')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestGatbSPBundle\Entity\GatbPart4DetailSP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testgatbspbundle_gatbpart4detailsp';
    }
}

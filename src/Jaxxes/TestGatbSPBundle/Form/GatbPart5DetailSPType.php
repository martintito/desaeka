<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicaci�n de EKA
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
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
class GatbPart5DetailSPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
           
            ->add('gatbPart5Detail',null)
            ->add('answer','choice', array('label' => 'answer', 'choices' => array('-'=>'Seleccione', 'A'=>'Respuesta A', 'B'=>'Respuesta B', 'C'=>'Respuesta C', 'D'=>'Respuesta D', 'E'=>'Respuesta E'), 'attr' => array('class' => 'span12')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestGatbSPBundle\Entity\GatbPart5DetailSP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testgatbspbundle_gatbpart5detailsp';
    }
}


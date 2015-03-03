<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicaci�n de EKA
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
 */

namespace Jaxxes\TestPmaSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class PmaPart2DetailSPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pmaPart2Detail',null)
            ->add('answer','choice', array('label' => 'answer', 'choices' => array('A'=>'A','B'=>'B','C'=>'C','D'=>'D','E'=>'E','F'=>'F'), 'multiple' => true, 'expanded' =>true))//, 'attr' => array('class' => 'span1')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestPmaSPBundle\Entity\PmaPart2DetailSP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testpmaspbundle_pmapart2detailsp';
    }
}


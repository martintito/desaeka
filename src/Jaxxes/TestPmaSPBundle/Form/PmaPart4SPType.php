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

use Jaxxes\TestPmaSPBundle\Form\PmaPart4DetailSPType;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class PmaPart4SPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pmaPart4',null)
            ->add('pmaSP',null)
            ->add('pmaPart4DetailSPs', 'collection', array('type' => new PmaPart4DetailSPType(), 'label' => 'Preguntas:') )
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar y Continuar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestPmaSPBundle\Entity\PmaPart4SP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testpmaspbundle_pmapart4sp';
    }
}



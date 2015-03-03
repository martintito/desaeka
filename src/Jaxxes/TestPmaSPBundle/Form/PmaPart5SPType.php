<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\TestPmaSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Jaxxes\TestPmaSPBundle\Form\PmaPart5DetailSPType;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class PmaPart5SPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pmaPart5',null)
            ->add('pmaSP',null)
            ->add('pmaPart5DetailSPs', 'collection', array('type' => new PmaPart5DetailSPType(), 'label' => 'Respuestas:') )
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar y Continuar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestPmaSPBundle\Entity\PmaPart5SP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testpmaspbundle_pmapart5sp';
    }
}

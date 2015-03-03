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

use Jaxxes\TestGatbSPBundle\Form\GatbPart5DetailSPType;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class GatbPart5SPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            /**
            ->add('gatbPart1',null, array('label' => 'Test :','disabled' => true, 'attr' => array('class' => 'span5')))
            ->add('gatbSP',null, array('label' => 'Evaluado :','disabled' => true, 'attr' => array('class' => 'span5')))
            * */
            ->add('gatbPart5',null)
            ->add('gatbSP',null)
            ->add('gatbPart5DetailSPs', 'collection', array('type' => new GatbPart5DetailSPType(), 'label' => 'Preguntas:') )
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar y Continuar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestGatbSPBundle\Entity\GatbPart5SP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testgatbspbundle_gatbpart5sp';
    }
}


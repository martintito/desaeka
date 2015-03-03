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
class GatbSPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            ->add('gatb',null, array('label' => 'Prueba Gatb', 'attr' => array('class' => 'span5')))
            ->add('selectionProcessCandidate',null, array('label' => 'Candidato', 'attr' => array('class' => 'span5')))
            ->add('dateStart',null, array('label' => 'Fecha Inicio', 'attr' => array('class' => 'span5')))
            ->add('dateFinish',null, array('label' => 'Fecha Fin', 'attr' => array('class' => 'span5')))
            ->add('guardar', 'submit', array('attr' => array('class' => 'boton')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestGatbSPBundle\Entity\GatbSP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testgatbspbundle_gatbsp';
    }
}


<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicaci�n de EKA
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
 */

namespace Jaxxes\SeleccionProcesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Jaxxes\SeleccionProcesBundle\Form\SelectionProcessTestType;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class SeleccionProcessType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name','text', array('label' => 'Nombre', 'attr' => array('class' => 'span11')))
            //->add('name','text', array('label' => 'Nombre'))
            ->add('customer',null, array('label' => 'Cliente', 'attr' => array('class' => 'span11')))
            //->add('customer',null, array('label' => 'Cliente'))
            //->add('guardar', 'submit', array('attr' => array('class' => 'boton')))
            ->add('selectionProcessTests', 'collection', array('type' => new SelectionProcessTestType(), 'label' => 'test:') )
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar y Continuar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\SeleccionProcesBundle\Entity\SelectionProcess',
        ));
    }

    public function getName()
    {
        return 'jaxxes_seleccionprocesbundle_seleccionprocesstype';
    }
}



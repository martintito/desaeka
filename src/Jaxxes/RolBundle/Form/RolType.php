<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicaci�n de EKA
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
 */

namespace Jaxxes\RolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class RolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('name')
            ->add('name','text', array('label' => 'Nombre', 'attr' => array('class' => 'span8')))
            //->add('descripcion')
            ->add('descripcion','textarea', array('label' => 'Descripci�n', 'attr' => array('class' => 'span8')))
            //->add('nivel')
            ->add('nivel',null, array('label' => 'Nombre', 'attr' => array('class' => 'span8')))
            //->add('guardar', 'submit', array('attr' => array('class' => 'boton')))
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\RolBundle\Entity\Rol',
        ));
    }

    public function getName()
    {
        return 'jaxxes_rolbundle_roltype';
    }
}


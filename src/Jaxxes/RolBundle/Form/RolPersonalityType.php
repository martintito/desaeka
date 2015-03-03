<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
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
class RolPersonalityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('RegisterDefinitionRol',null, array('label' => 'Perfil de cargo', 'attr' => array('class' => 'span3', 'hidden' => true), 'read_only' => true))
            ->add('name','text', array('label' => 'Nombre', 'attr' => array('class' => 'span6')))
            //->add('nivel','text', array('label' => 'Nivel', 'attr' => array('class' => 'span3'), 'required' => false))
            ->add('nivel','choice', array('label' => 'Nivel', 'choices' => array('1'=>'Nivel bajo', '2'=>'Nivel intermedio','3'=>'Nivel avanzado'), 'attr' => array('class' => 'span3')))
            //->add('guardar', 'submit', array('attr' => array('class' => 'boton')))
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\RolBundle\Entity\RolPersonality',
        ));
    }

    public function getName()
    {
        return 'jaxxes_rolbundle_rolpersonality';
    }
}



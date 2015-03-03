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
class RegisterDefinitionRolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('selectionProcess',null, array('label' => 'Proceso de Seleccion', 'attr' => array('class' => 'span8', 'hidden' => true), 'read_only' => true))
            ->add('rol',null, array('label' => 'Rol', 'attr' => array('class' => 'span8')))
            ->add('name','text', array('label' => 'Nombre', 'attr' => array('class' => 'span8')))
            ->add('descRol','textarea', array('label' => 'Descripcion', 'attr' => array('class' => 'span8')))
            ->add('expAnt','text', array('label' => 'Experiencia Anterior', 'attr' => array('class' => 'span8')))
            //->add('expYears','text', array('label' => 'A�os de Experiencia', 'attr' => array('class' => 'span1')))
            ->add('expYears','choice', array('label' => 'A�os de Experiencia', 'choices' => array('1'=>'1 año', '2'=>'2 años','3'=>'3 años','4'=>'4 años','5'=>'5 años','6'=>'6 años'), 'attr' => array('class' => 'span3')))
            //->add('studyOther','textarea', array('label' => 'Otros Estudios', 'attr' => array('class' => 'span3')))
            //->add('labor','textarea', array('label' => 'Funciones a Realizar', 'attr' => array('class' => 'span3')))
            //->add('guardar', 'submit', array('attr' => array('class' => 'boton')))
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar y continuar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\RolBundle\Entity\RegisterDefinitionRol',
        ));
    }

    public function getName()
    {
        return 'jaxxes_rolbundle_registerdefinitionrol';
    }
}

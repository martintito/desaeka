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
            //->add('expYears','text', array('label' => 'Años de Experiencia', 'attr' => array('class' => 'span1')))
            ->add('expYears','choice', array('label' => 'Años de Experiencia', 'choices' => array('1'=>'1 aÃ±o', '2'=>'2 aÃ±os','3'=>'3 aÃ±os','4'=>'4 aÃ±os','5'=>'5 aÃ±os','6'=>'6 aÃ±os'), 'attr' => array('class' => 'span3')))
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

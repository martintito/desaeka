<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\CandidateBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName','text', array('label' => 'Nombre', 'attr' => array('class' => 'span12')))
            ->add('lastName','text', array('label' => 'Apellidos', 'attr' => array('class' => 'span12')))
            ->add('gender','choice', array('label' => 'Genero', 'choices' => array('m' => 'Masculino', 'f' => 'Femenino'), 'attr' => array('class' => 'span12')))
            ->add('birthDate','birthday', array('label' => 'Fecha Nacimiento', 'attr' => array('class' => 'span12')))
            ->add('email','email', array('label' => 'Correo Electronico', 'attr' => array('class' => 'span12')))
            //->add('guardar', 'submit', array('attr' => array('class' => 'boton')))
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\CandidateBundle\Entity\Candidate',
        ));
    }

    public function getName()
    {
        return 'jaxxes_candidatebundle_candidate';
    }
}




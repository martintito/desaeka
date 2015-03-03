<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\SeleccionProcesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class SelectionProcessCandidateEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            //->add('selectionProcess',null, array('label' => 'Proceso de Selección', 'attr' => array('class' => 'span8')))
            ->add('candidate',null, array('label' => 'Candidato', 'attr' => array('class' => 'span8')))
            ->add('userCandidate','text', array('label' => 'Usuario', 'attr' => array('class' => 'span8')))
            //->add('password',null, array( 'label' => 'Password', 'attr' => array('class' => 'span8')))
            /*
            ->add('password', 'text', array(
                            'type' => 'password', 'invalid_message' => 'Las dos contraseñas deben coincidir',
                            'first_options' => array('label' => 'ContraseÃ±a'),
                            'second_options' => array('label' => 'Repite ContraseÃ±a'),
                            'attr' => array('class' => 'span8')
                ))
                */
            //->add('active',null, array('label' => 'Activo', 'attr' => array('class' => 'span8')))
            ->add('active', 'checkbox', array('required' => false, 'label' => 'Activo', 'attr' => array('class' => 'span1') ))
            //->add('guardar', 'submit', array('attr' => array('class' => 'boton')))
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar y continuar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\SeleccionProcesBundle\Entity\SelectionProcessCandidate',
        ));
    }

    public function getName()
    {
        return 'jaxxes_seleccionprocesbundle_selectionprocesscandidateeditType';
    }
}





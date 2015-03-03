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
class GatbPart1DetailSPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            /**->add('gatbPart1Detail',null, array('label' => 'Pregunta: ', 'disabled' => true, 'attr' => array('class' => 'span5'))) **/
            /**->add('gatbPart1SP',null, array('label' => 'Parte 1: ', 'attr' => array('class' => 'span5'))) **/
            ->add('gatbPart1Detail',null) 
            ->add('equal','checkbox', array('label' => 'Es igual: ', 'required' => false, 'attr' => array('class' => 'span12')))
            ->add('answer','choice', array('label' => 'answer', 'choices' => array('-'=>'Seleccione','I'=>'Igual', 'D'=>'Diferente'), 'expanded' => false, 'multiple'  => false, 'required' => true, 'attr' => array('class' => 'span12')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestGatbSPBundle\Entity\GatbPart1DetailSP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testgatbspbundle_gatbpart1detailsp';
    }
}




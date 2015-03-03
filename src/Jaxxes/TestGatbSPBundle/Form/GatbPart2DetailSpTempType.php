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
class GatbPart2DetailSpTempType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            /**
            ->add('number',null, array('label' => 'numero', 'attr' => array('class' => 'span5'))) 
            ->add('operation',null, array('label' => 'operation', 'attr' => array('class' => 'span5'))) 
            ->add('valueTop',null, array('label' => 'valueTop', 'attr' => array('class' => 'span5'))) 
            ->add('valueDown',null, array('label' => 'valueDown', 'attr' => array('class' => 'span5'))) 
            ->add('alternativeCorrect',null, array('label' => 'alternativeCorrect', 'attr' => array('class' => 'span5'))) 
            ->add('fieldA',null, array('label' => 'fieldA', 'attr' => array('class' => 'span5'))) 
            ->add('fieldB',null, array('label' => 'fieldB', 'attr' => array('class' => 'span5'))) 
            ->add('fieldC',null, array('label' => 'fieldC', 'attr' => array('class' => 'span5'))) 
            ->add('fieldD',null, array('label' => 'fieldD', 'attr' => array('class' => 'span5'))) 
            ->add('fieldE',null, array('label' => 'fieldE', 'attr' => array('class' => 'span5'))) 
            **/
            ->add('number','hidden', array('data' => 'abcdef',))
            /**->add('answer',null, array('label' => 'answer', 'required' => false, 'attr' => array('class' => 'span5')))**/
            ->add('answer','choice', array('label' => 'answer', 'choices' => array('-'=>'Seleccione', 'A'=>'Respuesta A','B'=>'Respuesta B','C'=>'Respuesta C','D'=>'Respuesta D','E'=>'Respuesta E'), 'attr' => array('class' => 'span12')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestGatbSPBundle\Entity\GatbPart2DetailSpTemp',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testgatbspbundle_gatbpart2detailsptemp';
    }
}


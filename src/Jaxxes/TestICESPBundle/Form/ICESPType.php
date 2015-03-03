<?php

/*
 * (c) Rossana Janampa <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\TestICESPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

// use Jaxxes\TestICESPBundle\Form\ICEDetailSPType;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class ICESPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
            /**
            ->add('gatbPart1',null, array('label' => 'Test :','disabled' => true, 'attr' => array('class' => 'span5')))
            ->add('gatbSP',null, array('label' => 'Evaluado :','disabled' => true, 'attr' => array('class' => 'span5')))
            ->add('gatbPart3',null)
            ->add('gatbSP',null)
            */
            ->add('icespdetails', 'collection', array('type' => new ICEDetailSPType(), 'label' => 'Preguntas:') )
            ->add('Guardar', 'submit', array('attr' => array('class' => 'boton')))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestICESPBundle\Entity\ICESP',
        ));
    }

    public function getName()
    {
        return 'jaxxes_TestICESPBundle_ICESP';
    }
}





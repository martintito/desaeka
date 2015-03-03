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
class ResultSPCType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentGTB','textarea', array('label' => 'Comentario GATB', 'attr' => array('class' => 'span11')))
            ->add('commentPMA','textarea', array('label' => 'Comentario PMA', 'attr' => array('class' => 'span11')))
            ->add('commentICE','textarea', array('label' => 'Comentario ICE', 'attr' => array('class' => 'span11')))
            ->add('commentESC','textarea', array('label' => 'Comentario ESCUDO', 'attr' => array('class' => 'span11')))
            ->add('strengths','textarea', array('label' => 'Fortalezas', 'attr' => array('class' => 'span11')))
            ->add('improvementOpportunities','textarea', array('label' => 'Oportunidades de mejora', 'attr' => array('class' => 'span11')))
            ->add('recommendation','textarea', array('label' => 'Recomendaciones', 'attr' => array('class' => 'span11')))
            ->add('finalResult','choice', array('label' => 'answer', 'choices' => array('0'=>' ','1'=>'Recomendable', '2'=>'Recomendable con observaciones', '3'=>'No recomendable'), 'required' => true, 'attr' => array('class' => 'span4')))
            ->add('guardar', 'submit', array('attr' => array('class' => 'btn btn-success save'), 'label' => 'Guardar y continuar'  ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\SeleccionProcesBundle\Entity\ResultSPC',
        ));
    }

    public function getName()
    {
        return 'jaxxes_seleccionprocesbundle_resultspcType';
    }
}





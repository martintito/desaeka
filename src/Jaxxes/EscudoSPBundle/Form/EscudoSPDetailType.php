<?php

/*
 * (c) Rossana Janampa <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\EscudoSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class EscudoSPDetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('id','hidden',array('label' => 'Pregunta: ', 'disabled' => true))
            ->add('answer','textarea', array('label' => false, 'required'=>false))             
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\EscudoSPBundle\Entity\EscudoSPDetail',
        ));
    }

    public function getName()
    {
        return 'jaxxes_EscudoSPBundle_EscudoSPDetailType';
    }
}


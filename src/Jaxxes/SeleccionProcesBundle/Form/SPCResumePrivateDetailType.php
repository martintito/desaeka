<?php

/*
 * (c) Rossana Janampa 
 *
 * Este archivo pertenece a la aplicaci�n de EKA
 * El c�digo fuente de la aplicaci�n incluye un archivo llamado LICENSE
 * con toda la informaci�n sobre el copyright y la licencia.
 */

namespace Jaxxes\SeleccionProcesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class SPCResumePrivateDetailType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('id','hidden',array('label' => 'Pregunta: ', 'disabled' => true))
            ->add('answer','text', array('label' => false, 'required'=>false))          
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\SeleccionProcesBundle\Entity\ResumePrivateCandidate',
        ));
    }

    public function getName()
    {
        return 'jaxxes_SeleccionProcesBundle_SPCResumePrivateDetailType';
    }
}


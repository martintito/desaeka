<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\EscudoSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo Ciudad.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class EscudoSPType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			//->add('escudo') 
			//->add('selectionprocesscandidate')
            ->add('escudospdetails', 'collection', array('type' => new EscudoSPDetailType(), 'label' => 'Preguntas:') )
            ->add('Guardar', 'submit')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\EscudoSPBundle\Entity\EscudoSP', 
        ));
    }

    public function getName()
    {
        return 'jaxxes_EscudoSPBundle_EscudoSPType';
    }
}


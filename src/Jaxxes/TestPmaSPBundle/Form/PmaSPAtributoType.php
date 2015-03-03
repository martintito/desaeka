<?php

/*
 * (c) Pedro Tananta <pedrotananta@gmail.com>
 *
 * Este archivo pertenece a la aplicación de EKA
 * El código fuente de la aplicación incluye un archivo llamado LICENSE
 * con toda la información sobre el copyright y la licencia.
 */

namespace Jaxxes\TestPmaSPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Formulario para crear y manipular entidades de tipo proceso seleccion.
 * Como se utiliza en el backend, el formulario incluye todas las propiedades
 * de la entidad.
 */
class PmaSPAtributoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('letra','choice',array('label' => 'letra', 'choices' => array(
				'a' =>'A', 
				'b' =>'B', 
				'c' =>'C', 
				'd' =>'D', 
				'e' =>'E', 
				'f' =>'F', 
				'g' =>'G', 
				'h' =>'H', 
				'i' =>'I', 
				'j' =>'J', 
				'k' =>'K', 
				'l' =>'L', 
				'm' =>'M', 
				'n' =>'N', 
				'Ã±' =>'Ã±', 
				'o' =>'O', 
				'p' =>'P', 
				'q' =>'Q', 
				'r' =>'R', 
				's' =>'S', 
				't' =>'T', 
				'u' =>'U', 
				'v' =>'V', 
				'w' =>'W', 
				'x' =>'X', 
				'y' =>'Y', 
				'z' =>'Z'
				)))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jaxxes\TestPmaSPBundle\Entity\PmaSPAtributo',
        ));
    }

    public function getName()
    {
        return 'jaxxes_testpmaspbundle_pmapart5detailsp';
    }
}

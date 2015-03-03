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
class SelectionProcessCandidateWelcomeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder            
        
            ->add('dateStart','date',array('years'=>range(date('Y'),date('Y')+5) ,'attr' => array('class' => 'span5')))
            ->add('hourStart','choice', array('label' => 'Hora', 'choices' => array(
            '00:00'=>'00:00',
			'00:30'=>'00:30',
			'01:00'=>'01:00',
			'01:30'=>'01:30',
			'02:00'=>'02:00',
			'02:30'=>'02:30',
			'03:00'=>'03:00',
			'03:30'=>'03:30',
			'04:00'=>'04:00',
			'04:30'=>'04:30',
			'05:00'=>'05:00',
			'05:30'=>'05:30',
			'06:00'=>'06:00',
			'06:30'=>'06:30',
			'07:00'=>'07:00',
			'07:30'=>'07:30',
			'08:00'=>'08:00',
			'08:30'=>'08:30',
			'09:00'=>'09:00',
			'09:30'=>'09:30',
			'10:00'=>'10:00',
			'10:30'=>'10:30',
			'11:00'=>'11:00',
			'11:30'=>'11:30',
			'12:00'=>'12:00',
			'12:30'=>'12:30',
			'13:00'=>'13:00',
			'13:30'=>'13:30',
			'14:00'=>'14:00',
			'14:30'=>'14:30',
			'15:00'=>'15:00',
			'15:30'=>'15:30',
			'16:00'=>'16:00',
			'16:30'=>'16:30',
			'17:00'=>'17:00',
			'17:00'=>'17:00',
			'18:00'=>'18:00',
			'18:30'=>'18:30',
			'19:00'=>'19:00',
			'19:30'=>'19:30',
			'20:00'=>'20:00',
			'20:30'=>'20:30',
			'21:00'=>'21:00',
			'21:30'=>'21:30',
			'22:00'=>'22:00',
			'22:30'=>'22:30',
			'23:00'=>'23:00',
			'23:30'=>'23:30' ), 'attr' => array('class' => 'span6')))
            ->add('guardar', 'submit', array('label' => 'Guardar cambios', 'attr' => array('class' => 'btn btn-primary save', 'style' => 'float:right')))//boton
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
        return 'jaxxes_seleccionprocesbundle_selectionprocesscandidatewelcomeType';
    }
}




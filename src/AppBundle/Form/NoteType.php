<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('value', \Symfony\Component\Form\Extension\Core\Type\ChoiceType::class, array(
            'placeholder' => '--- choisir ---',
            'choices'  => array(
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5
        )) )
                ->add('Ajouter', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Note'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_note';
    }


}

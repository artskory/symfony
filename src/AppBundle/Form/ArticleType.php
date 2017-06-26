<?php

namespace AppBundle\Form;

use AppBundle\Entity\Tag;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre', TextType::class)
                ->add('contenu')
                ->add('image', ImageType::class,['required'=> FALSE])
                ->add('date', DateType::class, ['widget' => 'single_text', 'html5' => false, 'format' => 'yyyy-MM-dd'])
                ->add('tags', EntityType::class, [
                    'required'=> FALSE,
                    'class' => Tag::class,
                    'choice_label' => 'titre',
                    'expanded' => true,
                    'multiple' => true,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.titre', 'ASC');
                    }
                    ])
                ->add('publication', null, ['required'=> FALSE, 'label' => 'Publié ?'])
                ->add('submit', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_article';
    }


}

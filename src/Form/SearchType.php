<?php

namespace App\Form;

use App\class\Search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('string',TextType::class,[
                'label' => 'Rechercher',
                'mapped' => false,
                'attr' => [
                    'placeholder' => 'Votre recherche...'
                ]
            ]);
    }

    //Configure la barre de filtrer pour les cours dans nos formations
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Search::class,
            'method' => 'GET',
            'crsf_protection' => false,
            ]);
    }
    public function getBlockPrefix()
    {
        return '';
    }
}

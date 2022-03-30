<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterInstructorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class, [
                'label' => 'Votre nom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre nom'
                ]
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Votre prenom',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre prénom'
                ]
            ])

            ->add('email', EmailType::class, [
                'label' => 'Votre e-mail',
                'attr' => [
                    'placeholder' => 'Merci de saisir votre adresse e-mail'
                ]
            ])

            ->add('photo', FileType::class, [
                'label' => 'Votre photo de profil'
            ])

            ->add('description', TextareaType::class,[
                'label' => 'Votre description',
                'attr' => [
                    'placeholder' => 'Merci de vous présenter en quelques ligne :)'
                ]
            ])

            ->add('password', PasswordType::class,[
                'label' => 'Votre mot de passe',
                'attr' => [
                    'placeholder' => 'Merci de rentrer un mot de passe sécurisé'
                ]
            ])
            ->add('submit', SubmitType::class,[
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'btn-block btn-success'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            //Des paramètres si on veux lier l'entité au formulaire pour les récup en BDD
        ]);
    }
}

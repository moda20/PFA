<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewUserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("nom",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Votre Nom",

                ],

            ))
            ->add("prenom",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Voter Prenom",

                ],

            ))
            ->add("mail",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Votre E-mail",

                ],

            ))
            ->add("numTel",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Votre numéro de téléphone",

                ],

            ))
            ->add("dateNaissance",null,[
                'html5' =>false,
                'widget' => 'single_text',
                'attr' =>[
                    'class'=> 'js-datepicker',
                    'placeholder'=> 'Vore Date de naissance'
                ],
            ])
            ->add("adresse",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Vore Adresse",
                ],

            ))
            ->add("codePostal",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Votre Code Postal",

                ],

            ))
            ->add("ville",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Votre Ville",

                ],

            ))
            ->add("pays",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Votre Pays",

                ],

            ))
            ->add("photo",FileType::class,[
                'required' => false,
                'data_class' => null,
            ])
            ->add("username",Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Spécifier votre Nom d'utilisateur",

                ],

            ))
            ->add("password", RepeatedType::class, [
                'type' =>PasswordType::class,
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Votre Mot de passe",
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Utilisateur'
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_new_user_form';
    }
}

<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add("id")
            ->add("nom")
            ->add("prenom")
            ->add("mail")
            ->add("numTel")
            ->add("dateNaissance",null,[
                'html5' =>false,
                'widget' => 'single_text',
                'attr' =>[
                    'class'=> 'js-datepicker'
                ],
            ])
            ->add("adresse")
            ->add("codePostal")
            ->add("ville")
            ->add("pays")
            ->add("ipCourante",Null,[
                'required'=> false,
            ])
            ->add("photo",FileType::class,[
                'required' => false,
                'data_class' => null,
            ])
            ->add("username")
            ->add("password", RepeatedType::class, [
                'type' =>PasswordType::class,
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

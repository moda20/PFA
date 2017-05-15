<?php

namespace AppBundle\Form;

use AppBundle\Entity\Constructeur;
use AppBundle\Entity\Voiture;
use Doctrine\DBAL\Types\DateType;
use Doctrine\ORM\EntityManager;
use Repository\CarRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewCarForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateAjout', \Symfony\Component\Form\Extension\Core\Type\DateType::class, [
                'widget' => 'single_text',
                'attr' =>[
                    'class'=> 'js-datepicker',
                    'placeholder' => "Choisir une date d'ajout",
                    'style'=> 'border-radius: 0;'
                ],
                'html5'=> false,
                'label' => " ",

            ])
            ->add('Disponibilite',ChoiceType::class, [
                'choices'=> [
                    'Non Disponible' =>false,
                    'Disponible' =>true
                ],
                'label' => ' ',
                'attr'=> [

                    'style'=> 'border-radius: 0;'
                ]
            ])
            ->add('photos')
            ->add('photo',FileType::class, array(
                'data_class' => null,
                'label' => ' ',
                'attr' =>[
                    'id'=> 'CarImageInput',
                    'class'=>'btn btn-default btn-file',
                    'label' => " ",
                    'style'=> 'border-radius: 0;'
                ],


            ))
            ->add('ficheTech', NewTechSheetForm::class,[
            ])
            ->add('nomVoiture',Null,array(
                'label' => ' ',
                'attr' =>[
                   'placeholder' => "Choisir un nom pour La voiture",
                    'style'=> 'border-radius: 0;'

                ],

            ))
            ->add('modeleVoiture',Null,array(
                'label' => ' ',
                'attr' =>[
                    'placeholder' => "Choisir un modèle pour La voiture",
                    'style'=> 'border-radius: 0;'

                ],
            ))
            ->add("constructeur", EntityType::class,[
               'label' => " ",
                'class' =>Constructeur::class,
                'attr' => ['placeholder' => 'Choisir un contstructeur',
                    'style'=> 'border-radius: 0;']
            ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Voiture',
            'car' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_new_car_form';
    }
}

<?php

namespace AppBundle\Form;

use AppBundle\Controller\NewCarController;
use AppBundle\Entity\Voiture;
use Repository\CarRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TicketForm extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("nom", Null,[
                'label' => " ",
                'attr' => [
                    'placeholder' => 'Spécifier un nom distinctif à votre annonce',
                    'style'=> 'border-radius: 0;'
                ]
            ])
/*            ->add("voiture", EntityType::class, [
                'placeholder' =>'clicker ici pour choisir votre voiture',
                'class' =>Voiture::class,
                'query_builder' => function(CarRepository $repo) use($options){
                    return $repo->getAllCarsOfOne($options['userId']);
                }
            ])*/
            ->add("voiture", NewCarForm::class)
            ->add("prix", Null,[
                'attr' => [
                    'placeholder' => 'Donner votre prix',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("description", TextareaType::class, [
                'attr' => [
                    'placeholder' => 'Ajouter une description',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Annonce',
            'userId'=>false,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_new_ticket_form';
    }
}

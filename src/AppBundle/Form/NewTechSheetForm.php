<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NewTechSheetForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
            ->add("acceleration",Null,[
                'attr'=> [
                    'placeholder' => "Précisez l'accéleration de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("alimentation",Null,[
                'attr'=> [
                    'placeholder' => "Précisez l'alimentation de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("carburant",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la nature du carburant de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("consommationMixte",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la consommation mixte de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("consommationUrbaine100Km",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la consommation urbaine /100Km",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("consommationNomUrbaine100Km",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la consommation non urbaine /100Km",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("couple",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le Couple",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("dateCommerce",Null,[
                'widget' => 'single_text',
                'attr' =>[
                    'class'=> 'js-datepickerr',
                    'placeholder' => "Préciser la date de Commerce",
                    'style'=> 'border-radius: 0;'
                ],
                'html5'=> false,
                'label' => ' '
            ])
            ->add("dateFinCommerce",Null,[
                'widget' => 'single_text',
                'attr' =>[
                    'class'=> 'js-datepicker',
                    'placeholder' => "Préciser la date de fin de Commerce",
                    'style'=> 'border-radius: 0;'
                ],
                'html5'=> false,
                'label' => ' '
            ])
            ->add("degagementCO2",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le dégagement Co2 de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("garantie",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la garentie de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("hauteur",Null,[
                'attr'=> [
                    'placeholder' => "Précisez l'hauteur de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("longueur",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la longeur  de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("longueurAvecRetroviseurs",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la longeur avec Retro de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("maxRevision",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le Maximum de révision",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("modeMoteur",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le mode moteur de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("nombrePlaces",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le nombre de place la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("nombrePortes",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le nombre de portes",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("poidVide",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le poids vide de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("positionMoteur",ChoiceType::class,[
                'attr'=> [
                    'placeholder' => "Précisez la position du moteur",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'choices'=> [
                    'Avant' => 'Avant',
                    'Arrière' =>'Arrière',
                    'Choisir Position Moteur' => null
                ],
                'label' => ' '
            ])
            ->add("puissance" ,Null,[
                'attr'=> [
                    'placeholder' => "Précisez la puissance",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("puissanceFiscale",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la puissance fiscale",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("revisionKm",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le nombre de Km / révision",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ]
            ])
            ->add("roueMotrice",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le dégagement Co2 de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("roueSecours",ChoiceType::class,[
                'attr'=> [
                    'placeholder' => "Précisez la présance d'une roue de scours",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'choices' =>[
                    'Oui' => true,
                    'Non' => false,
                    'Non disponible' => null
                ],
                'label' => ' '
            ])
            ->add("poidVide",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le poids à vide de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("taillePneue",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la taille des pneus",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("vitesseMax",Null,[
                'attr'=> [
                    'placeholder' => "Précisez la vitesse de la voiture",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ]
            ])
            ->add("volumeCylindre",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le volume Cylindre",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("volumeMinMax",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le volumeMinMax",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ])
            ->add("volumeResevoir",Null,[
                'attr'=> [
                    'placeholder' => "Précisez le volume réservoir",
                    'label' => ' ',
                    'style'=> 'border-radius: 0;'
                ],
                'label' => ' '
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\FicheTech'
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_bundle_new_tech_sheet_form';
    }
}

<?php

namespace App\Form;

use App\Entity\Annonce;
use App\Form\ImageType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ApplicationType extends AbstractType
{
    
  /**
   * 
   * Permet d'avoir la configuration de base d'un champ
   *
   * @param [type] $label
   * @param [type] $placeholder
   * @param array option
   * on retourne un tableau
   * @return array 
   * 
   * On met la fonction en protected pour qu'elle soit utilisable par les classes filles
   */
    protected function configurationDesChamps($label, $placeholder, $options=[]){//ici on a deux champs a remplir a chaque fois, le label et le placeholder donc on les met en parametre
                                                                             //par défaut $options sera un tableau vide
        return array_merge([ //array merge pour fusionner les deux tableaux et rajout du tableau $options a la fin
            'label'=> $label,
            'attr' => [
                'placeholder' => $placeholder
            ]

            ], $options );

    }

}


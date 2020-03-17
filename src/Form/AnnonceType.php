<?php

namespace App\Form;

use App\Entity\Annonce;
use App\Form\ImageType;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class AnnonceType extends ApplicationType
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
   */
   
    /* Cette fonction n'est plus utile ici car on hérite de la classe ApplicationType qui contient cette méthode 
    
                private function configurationDesChamps($label, $placeholder, $options=[]){//ici on a deux champs a remplir a chaque fois, le label et le placeholder donc on les met en parametre
                    //par défaut $options sera un tableau vide
            return array_merge([ //array merge pour fusionner les deux tableaux et rajout du tableau $options a la fin
            'label'=> $label,
            'attr' => [
            'placeholder' => $placeholder
            ]

            ], $options );

            }
*/

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType ::class, $this->configurationDesChamps('Titre', 'Indiquer le titre de votre annonce'))
            //->add('adresse', TextType ::class, $this->configurationDesChamps('Adresse', 'adresse URL (récupération auto)'))
            ->add('introduction', TextType :: class,$this->configurationDesChamps('Introduction', 'Introduction de votre annonce'))
            ->add('contenu', TextareaType :: class, $this->configurationDesChamps('Contenu', 'Contenu de votre annonce') )
            ->add('race', TextType :: class,$this->configurationDesChamps('Race', 'Indiquer la race de votre chat') )
            ->add('coverImage', UrlType :: class,$this->configurationDesChamps('Image', 'Url de l\'Image principale de votre chat'))
            ->add('prix', MoneyType :: class, $this->configurationDesChamps('Prix', 'Indiquer le prix', ['required' => false])) //le champs $options remplit par required => false indiquant qu'il n'est pas obligé de le remplir pour finaliser le formulaire
            ->add('don',ChoiceType::class, [
                'label'=>'Type d\'annonce',
                'choices' => ['Vente' =>'Vente',
                            'Don'=>'Don',                     
                            ],                 
            ])
            ->add(
                'imagess',
                CollectionType::class,  //collection class permet de rajouter plusieurs champs 
                [
                    'entry_type'=>ImageType :: class, //le type de champs correspond au formulaire ImageType qu'on répéte(affiche le nombre de fois qu'il est demandé dans le controller annonce)
                    'allow_add'=> true
                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}

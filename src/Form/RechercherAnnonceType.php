<?php

namespace App\Form;

use App\Entity\Race;
use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\DataFixtures\AppFixtures;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RechercherAnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        /*
            ->add('titre')
            ->add('adresse')
            ->add('prix')
            ->add('introduction')
            ->add('contenu')
            ->add('coverImage')
            ->add('race')
            ->add('don')
        */
        ->add('don',ChoiceType::class, [
            'label'=>'Type d\'annonce',
            'choices' => ['Vente' =>'Vente',
                        'Don'=>'Don',                     
                        ]])  
      /*  ->add ('race', EntityType::class, [ //la class entity type permet d'utiliser des entité/table d'une BDD
            'label'=>'Race voulu',
            'class'=> Race::class, //ici on indique qu'on veut utiliser la class/table Race
            'choice_label'=>'libelle' // et ici on indique qu'on utilise le champ libelle de la table/class Race
        ]) // on va avoir un menu déroulant avec toutes les races se trouvant dans la table Race
        */
        ->add('Prix_mini', ChoiceType::class, [ //menu déroulant avec différent prix de la constante prix se trouvant dans le fichier AppFixtures
            'label'=> 'Prix minimum',
            'choices'=> array_combine(AppFixtures::PRICE, AppFixtures::PRICE)

        ])
        ->add('Prix_maximum', ChoiceType::class, [//menu déroulant avec différent prix de la constante prix se trouvant dans le fichier AppFixtures
            'label'=> 'Prix Maximum',
            'choices'=> array_combine(AppFixtures::PRICE, AppFixtures::PRICE)
           
        ])
        ->add('recherche', SubmitType::class)
            ;
    }

   
}

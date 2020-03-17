<?php

namespace App\Form;

use App\Entity\User;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class EnregistrementType extends ApplicationType
{

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
        $builder //indication des compositions de chaque champ de notre formulaire d'inscription
            ->add('prenom', TextType::class, $this->configurationDesChamps('Prénom', 'Entrez votre prénom ..'))
            ->add('nom',  TextType::class, $this->configurationDesChamps('Nom', 'Entrez votre nom ..'))
            ->add('email', EmailType::class, $this->configurationDesChamps('Email','Entrez votre adresse mail..'))
            ->add('avatar',  UrlType::class, $this->configurationDesChamps('Url Avatar', 'Entrez l\'URL de votre avatar..'))
            ->add('hash',  PasswordType::class, $this->configurationDesChamps('Mot de passe', 'Entrez votre mot de passe ..'))
            ->add('passwordConfirm', PasswordType::class, $this->configurationDesChamps("Confirmation du mot de passe","Veuillez retaper votre mot de passe.."))
            ->add('introduction', TextType::class, $this->configurationDesChamps('Introduction', 'Présentez vous en quelques mots ..'))
            ->add('description', TextareaType::class, $this->configurationDesChamps('Description', 'Présentez vous en détail avec votre passion des chats ..'))
            //->add('slug') on affiche pas le slug il est automatiquement définit
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

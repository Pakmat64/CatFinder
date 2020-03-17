<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditerUtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder //pas besoin d'indiquer le place holder et tout car sa reprend les infos du user qui est actuellement connecté
            ->add('prenom')
            ->add('nom')
            ->add('email')
            ->add('avatar')
            //->add('hash')
            ->add('introduction')
            ->add('description')
            //->add('slug')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

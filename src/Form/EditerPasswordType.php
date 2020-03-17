<?php

namespace App\Form;

use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class EditerPasswordType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('AncienPassword', PasswordType::class, $this->configurationDesChamps("Ancien mot de passe", "Donnez votre mot de passe actuel ..." ))
            ->add('NouveauPassword',PasswordType::class, $this->configurationDesChamps("Nouveau mot de passe", "Tapez votre nouveau mot de passe ..." ))
            ->add('confirmationPassword',PasswordType::class, $this->configurationDesChamps("Confirmation du mot de passe", "Confirmation du nouveau mot de passe ..." ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}

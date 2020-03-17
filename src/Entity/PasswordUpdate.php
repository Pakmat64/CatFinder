<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



class PasswordUpdate
{
  

    private $AncienPassword;

    /**
     * 
     * @Assert\Length(min=8, minMessage="Votre mot de passe doit faire au moins 8 caractères !")
     */
    private $NouveauPassword;

      /**
     * EqualTo permet de comparer ce qui est marqué dans le champ NouveauPassword avec ce qu'il y a marqué dans le champ confirmationPassword
     * @Assert\EqualTo(propertyPath="NouveauPassword", message="Vous n'avez pas correctement confirmé votre nouveau mot de passe !")
     */
    private $confirmationPassword;

    public function getAncienPassword(): ?string
    {
        return $this->AncienPassword;
    }

    public function setAncienPassword(string $AncienPassword): self
    {
        $this->AncienPassword = $AncienPassword;

        return $this;
    }

    public function getNouveauPassword(): ?string
    {
        return $this->NouveauPassword;
    }

    public function setNouveauPassword(string $NouveauPassword): self
    {
        $this->NouveauPassword = $NouveauPassword;

        return $this;
    }

    public function getConfirmationPassword(): ?string
    {
        return $this->confirmationPassword;
    }

    public function setConfirmationPassword(string $confirmationPassword): self
    {
        $this->confirmationPassword = $confirmationPassword;

        return $this;
    }
}

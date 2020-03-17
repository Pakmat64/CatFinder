<?php

namespace App\Entity;

use Serializable;
use App\Entity\Annonce;
use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(
 * fields={"email"},
 * message="Un autre utilisateur s'est déjà inscit avec cette addresse mail, veuillez en choisir un autre !"
 * )
 * 
 */

//IMPORTANT Il faut implémenter la classe USER Interface et serializer pour passer l'objet en string
//ca va permettre la sécurité et le fonctionnement 
class User implements UserInterface,\Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message="Veuillez renseigner votre prénom !")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\NotBlank(message="Veuillez renseigner votre nom de famille !")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\Email(message="Veuillez renseigner un email valide !")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *@Assert\Url(message="Veuillez donner une URL valide !")
     */
    private $avatar;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8, minMessage="Votre mot de passe doit faire au moins 8 caractères !")
     */
    private $hash;

    /**
     * Ici on ne met pas l'annotation ORM car ce n'est pas un champ qui sera dans la table User de la BDD
     *@Assert\EqualTo(propertyPath="hash", message="Vous n'avez pas retaper le meme mot de passe !") 
     *
     */
    public $passwordConfirm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=10, minMessage="Votre introduction doit être d'au moins 10 caractères !")
     */
    private $introduction;

    /**
     * @ORM\Column(type="text", nullable=true)
     *@Assert\Length(min=50 ,minMessage="Votre description doit être d'au moins 50 caractères !")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Annonce", mappedBy="auteur")
     */
    private $annonces;

    //fonction qui permet d'inclure le prenom et le nom juste en faisant fullName
    public function getNomEnEntier(){
        return "{$this->prenom} {$this->nom}";

    }

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(?string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection|Annonce[]
     */
    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function addAnnonce(Annonce $annonce): self
    {
        if (!$this->annonces->contains($annonce)) {
            $this->annonces[] = $annonce;
            $annonce->setAuteur($this);
        }

        return $this;
    }

    public function removeAnnonce(Annonce $annonce): self
    {
        if ($this->annonces->contains($annonce)) {
            $this->annonces->removeElement($annonce);
            // set the owning side to null (unless already changed)
            if ($annonce->getAuteur() === $this) {
                $annonce->setAuteur(null);
            }
        }

        return $this;
    }

     /**
     * Permet d'initialiser le slug !
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     * 
     * @return void
     */
    public function initializeSlug(){
    
        if(empty($this->slug)){
            $slugify = new Slugify();
             $this->slug = $slugify->slugify($this->prenom.' '.$this->nom);
        }
    }

    //////////////////////Implémentation des méthodes de la classe UserInterface//////////////////
    //5 méthodes a implémenter : getRoles, getSalt, getUsername, getPassword, eraseCredentials

    //On doit retourner le role du user
    public function getRoles(){
        return ['ROLE_USER'];
    }

    //On retourne null car on est pas concerné
    public function getSalt(){
        return null;
    }

    //L'username qu'on utilise dans notre cas c'est le mail
    public function getUsername() 
    {
        return $this->getEmail();
    }

    //On retourne le password dans notre c'est le champ hash
    public function getPassword(){
        return $this->getHash();
    }

    //on retourne rien car on est pas concerné
    public function eraseCredentials(){}

    ///////////////////////////Implementation de la serialisation///////////////////////////
    //Deux méthodes a implémenter serialize et unserialize
    
    public function serialize(){
        return serialize([
            $this->id,
            $this->prenom,
            $this->nom,
            $this->email,
            $this->avatar,
            $this->hash,
            $this->introduction,
            $this->description,
            $this->slug,
            $this->annonces
        ]);

    }


        /**
         * Constructs the object
         * @link https://php.net/manual/en/serializable.unserialize.php
         * @param string $serialized <p>
         * The string representation of the object
         * </p>
         * @return void
         * @since 5.1.0
         */
        public function unserialize($serialized)
        {
            list(
                    $this->id,
                    $this->prenom,
                    $this->nom,
                    $this->email,
                    $this->avatar,
                    $this->hash,
                    $this->introduction,
                    $this->description,
                    $this->slug,
                    $this->annonces
                )=unserialize($serialized, ['allowed classes'=> false]);
        }


}

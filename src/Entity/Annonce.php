<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnnonceRepository")
 *@ORM\HasLifecycleCallbacks
 *@UniqueEntity(
 * fields={"titre"},
 * message="Un autre annonce utilise déjà ce titre, veuillez en choisir un autre !"
 * )
 */
class Annonce
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *@Assert\Length(min=5, max=20 ,minMessage="Votre titre doit être d'au moins 5 caractères !",
     * maxMessage="Votre titre ne doit pas dépasser 20 caractères ! ")
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(min=10, max=50 ,minMessage="Votre introduction doit être d'au moins 10 caractères !",
     * maxMessage="Votre introduction ne doit pas dépasser 50 caractères ! ")
     */
    private $introduction;

    /**
     * @ORM\Column(type="text")
     *@Assert\Length(min=50, max=950 ,minMessage="Votre contenu d'annonce doit être d'au moins 50 caractères !",
     * maxMessage="Votre contenu d'annonce ne doit pas dépasser 950 caractères ! ")
     */
    private $contenu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Url(message="Veuillez donner une URL valide !")
     */
    private $coverImage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $race;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Image", mappedBy="Annonce", orphanRemoval=true)
     */
    private $imagess;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $don;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="annonces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $auteur;

    public function __construct()
    {
        $this->imagess = new ArrayCollection();
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
    
    if(empty($this->adresse)){
        $slugify = new Slugify();
         $this->adresse = $slugify->slugify($this->titre);
    }
}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getIntroduction(): ?string
    {
        return $this->introduction;
    }

    public function setIntroduction(string $introduction): self
    {
        $this->introduction = $introduction;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getCoverImage(): ?string
    {
        return $this->coverImage;
    }

    public function setCoverImage(string $coverImage): self
    {
        $this->coverImage = $coverImage;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

 
    /**
     * @return Collection|Image[]
     */
    public function getImagess(): Collection
    {
        return $this->imagess;
    }

    public function addImagess(Image $imagess): self
    {
        if (!$this->imagess->contains($imagess)) {
            $this->imagess[] = $imagess;
           // $imagess->setAnnonce($this);
        }

        return $this;
    }

    public function removeImagess(Image $imagess): self
    {
        if ($this->imagess->contains($imagess)) {
            $this->imagess->removeElement($imagess);
            // set the owning side to null (unless already changed)
            if ($imagess->getAnnonce() === $this) {
                $imagess->setAnnonce(null);
            }
        }

        return $this;
 
   }

    public function getDon(): ?string
    {
        return $this->don;
    }

    public function setDon(string $don): self
    {
        $this->don = $don;

        return $this;
    }

    public function getAuteur(): ?User
    {
        return $this->auteur;
    }

    public function setAuteur(?User $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }

 
}

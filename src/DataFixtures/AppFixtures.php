<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Image;
//use Cocur\Slugify\Slugify;
use App\Entity\Annonce;
use App\Entity\Product;
use Faker\Provider\Base;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture //héritage de la classe fixture
{
  

  const PRICE =[100, 200, 300, 400, 500, 600,700,800,900, 1000, 1100,1200,1300,1400, 1500, 2000, 3000];

  //attribut encoder
  private $encoder;

  //constructeur créée avec l'injection de dépendance de la classe UserPasswordEncoderInterface
  public function __construct(UserPasswordEncoderInterface $encoder){
      $this->encoder = $encoder;
  }


    public function load(ObjectManager $manager)
    {
      $faker= Factory::create('fr-FR');
      
        //Gestion des produits .... 
        
        for ($i = 0; $i < 10; $i++) {
          $product = new Product();
          $product->setTitle($faker->word)
              ->setPrice($faker->numberBetween($min = 20, $max = 120))
              ->setImage($faker->imageUrl(400, 400));

          $manager->persist($product);
      }

      $manager->flush();

      //Nous gérons les utilisateurs :
      //tabeau permettant de récupérer tous les users créées pour les utiliser dans la création de fausse données de la table annonce
      $users = [];

      //tableau composé de deux entité male et female
      $genres =['male', 'femmale'];

      for($i = 1;$i<=10;$i++)
      {
        $user = new User();

        //on utilise randomElement qui va donner aléatoirement les entités du tableau genres donc soit male ou female
        $giveGenre = $faker->randomElement($genres);

        //on utilise l'url du site randomuser.me
        $picture = 'https://randomuser.me/api/portraits/';
        //les photos vont de l'id 1 a 99 donc ici on en donne aléatoirement entre ces deux valeurs
        $pictureId = $faker->numberBetween(1,99). '.jpg';
        //une condition permettant de compléter l'url selon le genre donnée aleatoirement
        if($giveGenre =="male"){
          $picture = $picture. 'men/'. $pictureId;

        }
        else {
          $picture = $picture. 'women/'. $pictureId;

        }

        //la méthode encodePassword va permettre de hasher un mot avec l'algo choisi
        //on va récupérer l'objet user et on lui indique son mot de passe a encoder sera 'password' pour tous les users
        $hash = $this->encoder->encodePassword($user, 'password');

        //en indiquant le tableau genres, fake va donner des prenom soit masculin ou feminin selon ce que retourne le randomElement (male ou female)
        $user->setPrenom($faker->firstname($giveGenre))
              ->setNom($faker->lastname)
              ->setEmail($faker->email)
              ->setIntroduction($faker->sentence())
              ->setDescription($faker->sentence())
              //on lui indique la variable hash qui utilie la methode encoderPassword
              ->setHash($hash)
              //set avatar aura une picture aleatoire d'homme ou de femme avec un nom correspondant au genre de la photo
              ->setAvatar($picture);

              $manager->persist($user);
              $users[]=$user;

      }


      
      //nous gérons les annonces
       //$slugify = new Slugify();
        for($i=1; $i <=30; $i++){
        $annonce = new Annonce(); // creation d'un objet annonce de la classe Annonce correspondant a la table annonce de la BDD



        //Pour les types strings (sentence()):
        $titre = $faker->sentence();
        //Permet de donner une URL par rapport au titre de l'annonce
       // $slug = $slugify->slugify($title);
        //Pour les types images par url (imageUrl()):
        $coverImage = $faker->imageUrl(1000,350);
        //Pour les types text (paragraph()):
        $introduction=$faker->paragraph();
        //Pour de grand contenu:
        $contenu = '<p>'.join('</p><p>', $faker->paragraphs(5)).'</p>';
        //Pour les types strings ici pour les caption des images
        $caption=$faker->sentence();
        //permet de mettre soit vente ou don en mode random
        $don=$faker->randomElement($array = array ('Vente','Don'));

        //ici on va créer des clés indiquant les users qui ont créés les annonces
        $user= $users[mt_rand(0, count($users)-1)];
          //c'est ici qu'on ré utilise le tableau users


        $annonce->setTitre($titre)
              //  ->setAdresse($slug)
                ->setCoverImage($coverImage)
                ->setIntroduction($introduction)
                ->setContenu($contenu)
                ->setPrix(mt_rand(0, 2000))
                ->setRace("race n°$i")
                ->setAuteur($user)
                ->setDon($don);
               
        
for ($j=1;$j <= mt_rand(2, 5); $j++){ //pour mettre aleatoirement 2 a 5 images par annonce
$image = new Image();

$image->setUrl($faker->imageUrl()) //on fake l'url de l'image
      ->setCaption($caption) // on fake la légende de l'image
      ->setAnnonce($annonce); //Champ clé étrangere, ou on passe l'objet annonce instancier précédemment


      $manager->persist($image);  //persist l'objet image dans le temps -> on save tous les enregistrements
}


                $manager->persist($annonce);
        }
        $manager->flush(); //flush envoi dans la BDD tout les enregistrements des objets save via les persist()
        
    }
}

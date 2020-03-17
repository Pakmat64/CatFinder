<?php

namespace App\Controller; //notre controller portera donc le nom App\Controller\HomeController
                          //permettant une utilisation plus facile

                          //permet de d'indiquer a symfony l'utilisation du @route et de la classe Response
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


//héritage sur la classe AbstractController -> on hérite de beaucoup de fonctionnalités -> exemple, interpreter un code twig
class exempleController extends AbstractController{

    /*
     annotation @Route permet d'expliquer a Symfony l'adresse qui contacte une fonction
     Indique le chemin qui appelera la fonction home, ici c'est "/" et on nomme la route par name = "homepage"
     2eme pilier, route qui permet de dire sur quelle adresse il faut aller pour que cette fonction public soit appelé par Symfony
     */

   /** 
   * @Route("/", name="homepage");
    */

    public function home(){ //1er pilier, une fonction public

 $prenom = ["lior"=>31, "joseph"=>12, "han"=>23];

        //3eme pilier, retour d'une réponse selon la requete
        //$this -> correspond a notre objet
        //fonction render permet d'interpreter un fichier sous la forme d'une response
        return $this->render(

        'home.html.twig',
        ['nom'=>"Jean",
        'age' => 17,
        'tableau' => $prenom
        ]

        );
}




/**
 * @Route("/annonce/{prenom}/{age}" , name = "testPage");
 *@Route("/salut", name ="test")
 *
 * @return void
 */

public function test($prenom = "anonyme", $age = 0) {

return $this->render(

  'annonce.html.twig',

  [

    'prenom' => $prenom,
    'age' => $age
  ]

  );
  
  
  }

  /**
   * 
   * @Route("/racechat", name = "raceChat");
   * 
   */
public function RaceChat(){

  return $this->render(

    'RaceChat.html.twig'
  );

}


}




?>
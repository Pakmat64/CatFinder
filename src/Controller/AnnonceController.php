<?php

namespace App\Controller;

use App\Entity\Image;
use App\Entity\Annonce;
use App\Form\AnnonceType;
use App\Form\RechercherAnnonceType;
use App\Repository\AnnonceRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AnnonceController extends AbstractController
{
    
    

    /** Permet d'afficher toute les annonces
     * @Route("/annonce", name="annonce")
     */
    public function MainAnnonce(AnnonceRepository $repo) //injection de dépendance de la classe AnnonceRepository
    {
        //$repo=$this->getDoctrine()->getRepository(Annonce::class);
        
        $annonces=$repo->findAll();

        
        return $this->render('annonce/mainAnnonce.html.twig', [
            'annonces' => $annonces,
        ]);
    }
 /**
  * On met cette fonction avant car meme chemin que pour l'affichage d'une annonce, et donc 
  *symfony va prendre la premiere et voir que ce n'est pas un slug et donc effectuer cette fonction 
     * @Route("/annonce/newAd", name="formulaire_creer_annonce")
     * 
     * @return Response()
     */                                             //IMPORTANT\\
    public function CreerAnnonce(Request $request) //C'est ici qu'on va gérer une clé étrangere avec le getUser voir en bas 
     {
           $annonce  = new Annonce(); //creation d'un objet de type Annonce (avec tous les champs d'une annonce)

          /* Plus utile car le javascript a la fin du template créer annonce en javascript
           $image = new Image();

           $image->setUrl('http://placehold.it/400x200')
                ->setCaption('Titre 1');

           $image2 = new Image();

           $image2->setUrl('http://placehold.it/400x200')
                ->setCaption('Titre 2');     

           $annonce->addImagess($image)
                   ->addImagess($image2);  
        
            */

          $form = $this->createForm(AnnonceType :: class,$annonce); //recupere le formulaire crée a l'exterieur du controller se trouvant dans le dossier form

         
          $form->handleRequest($request); //on lui passe la requete HTTP, analyse de la requete
          //Il va relier toutes les informations du formulaires a notre variable $annonce qui va faire le lien entre les champs du formulaires et les attributs de l'entité $annonce (objet de type Annonce)

        


          if ($form->isSubmitted() && $form->isValid()){

            $manager = $this -> getDoctrine()->getManager(); //la fonction ne fonctionne pas si je n'ai pas le manager, on peut remplacer cette ligne en passant par une injection de dépendance
            
            //Pour persister les nouvelles images ajoutés pour les annonces 
            foreach($annonce->getImagess() as $image){

                $image->setAnnonce($annonce);
                $manager->persist($image);
            }

            //IMPORTANT\\
            $annonce->setAuteur($this->getUser()); // Cette ligne va permettre de recuperer dans le champ auteur l'id de l'auteur qui est actuellement entrain de créer l'annonce 

            $manager->persist($annonce); //persiste dans le temps les données 
            
            $manager->flush(); //envoi les données qui était entrain de persister dans le temps
            
          
            $this->addFlash( //affichage de la notif indiquant la réussite
                'success', //success car boostrap rendra vers la notif, on indique le type de flash
                "L'annonce <strong>{$annonce->getTitre()}</strong> a bien été enregistrée ! :)" //indication du message dans la notif
            );
    
            return $this->redirectToRoute('afficherAnnonce',[
                    'slug'=>$annonce->getAdresse()

            ]);

            }
            /* Mettre un message d'erreur si le post de l'annonce n'a pas été fait
            else if ($form->isNotValid()) { //sinon l'annonce n'est pas posté alors notification d'erreur
                $this->addFlash(
                    'danger', //success car boostrap rendra vers la notif, on indique le type de flash
                    "<strong>Erreur</strong> : Votre annonce n'a pas été postée ! :( " //indication du message dans la notif
                );
                return $this->redirectToRoute('annonce');   
            }*/

        return $this->render('formulaire/creerAnnonce.html.twig', [
            'form'=> $form->createView()//permet de récupérer juste l'affichage du formulaire via twig
        ]);
    }


        /**
     * @Route("/annonce/recherche", name = "recherche_annonce")
     * 
     * Barre de recherche filtrant par rapport au type de vente et le prix si "Vente"
     */
public function RechercherAnnonce(Request $request, AnnonceRepository $annonceRepository){ //injection de dépendance de request pour les requetes formulaire
                                                                                        // injection de dépendance pour le repository annonce
    $searchAnnonces = []; // déclaration d'un tableau vide permettant l'ajout des données récupéré en dessous dans ce tableau, facilitant le traitement
    $FormRecherche = $this->createForm(RechercherAnnonceType::class);

    if($FormRecherche->handleRequest($request)->isSubmitted() && $FormRecherche->isValid()){ // if vérifiant le bon fonctionnement de la requete via le form
        $critere= $FormRecherche->getData(); //la variable critere récupère les informations du formulaire
       
        $searchAnnonces = $annonceRepository->RechercherAnnonce($critere); //la variable searchAnnonce va récupérer les réponses du fichier AnnonceRepository
                                                                        //On passe en parametre la variable critere qui recupere les données du formulaires
        //seachAnnonces va récupérer toutes les annonces selectionnées via le select du repository demandé
        //dd($searchAnnonce);
    }

    return $this->render("recherche/rechercheAnnonce.html.twig", [
        'form_recherche' => $FormRecherche->createView(), //on partage le formulaire pour qu'il soit utilisable par twig
        'searchAnnonces' => $searchAnnonces, //on partage la variable pour qu'elle soit utilisable par twig
        ]); 
}




    
/**
 * Permet d'afficher une annonce de chat
 * @Route("/annonce/{slug}" , name="afficherAnnonce")
 * @return Response
 */
public function AffichageAnnonce ($slug,AnnonceRepository $repo){
//ici je recupere l'annonce qui correspond au slug passé dans l'url, recupere le slug de l'url et recupere l'annonce correspondante dans la table
$annonce = $repo->findOneByAdresse($slug); //findByX on peut mettre le nom du champ qu'on veut retrouver dans la table, ici on veut récupérer les annonces par adresse
//trouver un seul element = findOneByX pas de tableau car un seul element
//trouver plusieurs elements = findByX donc renvoi un tableau car plusieurs element

return $this->render('annonce/affichageAnnonce.html.twig',[

'annonce' => $annonce // on récupere dans un tableau les/la donnée(s) récupéré via le repository avec la variable $annonce 

]);

    }

    /**
    *Formulaire pour éditer les annonces déjà crée
     * @Route("/annonce/{slug}/editer", name="formulaire_editer_annonce")
     * 
     * @return Response()
     */
    public function EditAnnonce($slug, Request $request, AnnonceRepository $repo)
    //ici je recupere l'annonce qui correspond au slug passé dans l'url, recupere le slug de l'url et recupere l'annonce correspondante dans la table

     {
         $annonce = $repo->findOneByAdresse($slug);
          $form = $this->createForm(AnnonceType :: class,$annonce); //recupere le formulaire crée a l'exterieur du controller se trouvant dans le dossier form

         
          $form->handleRequest($request); //on lui passe la requete HTTP, analyse de la requete
          //Il va relier toutes les


          if ($form->isSubmitted() && $form->isValid()){
            $manager = $this -> getDoctrine()->getManager(); //la fonction ne fonctionne pas si je n'ai pas le manager, on peut remplacer cette ligne en passant par une injection de dépendance
            
             //Pour persister les nouvelles images ajoutés pour les annonces 
             foreach($annonce->getImagess() as $image){

                $image->setAnnonce($annonce);
                $manager->persist($image);
            }
            $manager->persist($annonce); //persiste dans le temps les données 
            
            $manager->flush(); //envoi les données qui était entrain de persister dans le temps
            
          
            $this->addFlash( //affichage de la notif indiquant la réussite
                'success', //success car boostrap rendra vers la notif, on indique le type de flash
                "Les modifications de l'annonce <strong>{$annonce->getTitre()}</strong> ont bien été modifiées ! :)" //indication du message dans la notif
            );
    
            return $this->redirectToRoute('afficherAnnonce',[
                    'slug'=>$annonce->getAdresse()

            ]);
          }

        return $this->render('formulaire/editerAnnonce.html.twig',
        [
            'form'=>$form->createView(),
            'annonce'=>$annonce
        ]

        );
     }


     /**
      * 
      *@Route("/annonce/{slug}/SuppressionAnnonce", name="SuppressionAnnonce")
      *
      *
      * @return void
      */
     public function SupprimerAnnonce($slug, AnnonceRepository $repo){

        $annonce = $repo->findOneByAdresse($slug); //on récupére le slug/adresse

        $manager = $this->getDoctrine()->getManager(); 

        $manager->remove($annonce); //on supprime l'annonce sous le nom de son slug

        $manager->flush(); // on effectue toutes les actions (donc ici le remove)

       
        $this->addFlash( //affichage de la notif indiquant la réussite
            'success', //success car boostrap rendra vers la notif, on indique le type de flash
            "La suppression de l'annonce <strong>{$annonce->getTitre()}</strong> a bien été réalisée ! :)" //indication du message dans la notif
        );

        return $this->redirectToRoute('annonce'); //après la suppression on est redirigé vers la liste des annonces
       
     }
}
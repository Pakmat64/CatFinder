<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\PasswordUpdate;
use App\Form\EditerPasswordType;
use App\Form\EnregistrementType;
use App\Repository\UserRepository;
use App\Form\EditerUtilisateurType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class CompteController extends AbstractController
{
    /**
     * Permet d'afficher et de gérer le formulaire de connexion
     * @Route("/login", name="login")
     * 
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils):Response
    {
         // get the login error if there is one
         $error = $authenticationUtils->getLastAuthenticationError();

         //Va permettre dans twig de garder écrit dans l'input mail le dernier email entré dans le formulaire
         $lastMail = $authenticationUtils->getLastUsername();

         //dd($error);


        return $this->render('compte/login.html.twig',[
        'error' => $error,
        'lastMail'=>$lastMail
        ]);
    }

    /**
     * Permet de se déconnecter
     * 
     * @Route("/logout", name="compte_logout")
     *
     * @return void
     */
    public function logout(){
        //..elle ne fait rien

    }



/**
 * Permet l'enregistrement des utilisateurs
 * @Route("/inscription", name="inscription_user")
 * 

 * @return Response
 */
public function enregistrement(Request $request, UserPasswordEncoderInterface $encoder){

                $user= new User(); //création d'un objet de la classe user

                $form=$this->createForm(EnregistrementType::class, $user); //Creation du formulaire via le fichier ou les composants du formulaire sont déclarés
                                                                        //On entre dans l'objet de type user chacun des champs dans chaque attributs de correspondant a la classe USer 

                $form->handleRequest($request); //on lui passe la requete HTTP, analyse de la requete
                //Il va relier toutes les informations du formulaires a notre variable $annonce qui va faire le lien entre les champs du formulaires et les attributs de l'entité $annonce (objet de type Annonce)

                if ($form->isSubmitted() && $form->isValid()){

                            $hash = $encoder->encodePassword($user, $user->getHash());
                            $user->setHash($hash);

                            $manager = $this -> getDoctrine()->getManager(); //la fonction ne fonctionne pas si je n'ai pas le manager, on peut remplacer cette ligne en passant par une injection de dépendance
                            
                            $manager->persist($user); //persiste dans le temps les données 
                            
                            $manager->flush(); //envoi les données qui était entrain de persister dans le temps
                            

                            $this->addFlash( //affichage de la notif indiquant la réussite
                                'success', //success car boostrap rendra vers la notif, on indique le type de flash
                                "Votre compte a bien été créé ! Vous pouvez maintenant vous connecter et profiter des pages supplémentaires ! :)" //indication du message dans la notif
                            );

                            return $this->redirectToRoute('login');

                }
                return $this->render('compte/enregistrement_user.html.twig', [
                'form'=> $form->createView() //on renvoie une composante du formulaire pour alléger (on n'envoie pas toutes les fonctionnalités)
                ]);
    }



  /**
    *Formulaire pour éditer les comptes utilisateurs
     * @Route("/compte/profil", name="editer_profil")
     * 
     * @return Response()
     */
    public function EditerProfile(Request $request)
    //ici je recupere l'annonce qui correspond au slug passé dans l'url, recupere le slug de l'url et recupere l'annonce correspondante dans la table

     {

          $user = $this->getUser(); //Grace a la fonction getUser on récupere l'utilisateur connecté actuellement

          $form = $this->createForm(EditerUtilisateurType :: class,$user); //recupere le formulaire crée a l'exterieur du controller se trouvant dans le dossier form

         
          $form->handleRequest($request); //on lui passe la requete HTTP, analyse de la requete
          //Il va relier toutes les


          if ($form->isSubmitted() && $form->isValid()){
            $manager = $this -> getDoctrine()->getManager(); //la fonction ne fonctionne pas si je n'ai pas le manager, on peut remplacer cette ligne en passant par une injection de dépendance
            
            $manager->persist($user); //persiste dans le temps les données 
            
            $manager->flush(); //envoi les données qui était entrain de persister dans le temps
            
          
            $this->addFlash( //affichage de la notif indiquant la réussite
                'success', //success car boostrap rendra vers la notif, on indique le type de flash
                "Les données du profil ont été mises à jours ! :)" //indication du message dans la notif
            );
    
          }

        return $this->render('compte/editerProfil.html.twig',
        [
            'form'=>$form->createView(),
            'user'=>$user
        ]

        );
     }

     
  /**
     *Formulaire pour éditer le mot de passe des comptes utilisateurs
     * @Route("/compte/changerPassword", name="editer_password")
     * 
     * @return Response()
     */
    public function EditerPassword(Request $request, UserPasswordEncoderInterface $encoder)
    //ici je recupere l'annonce qui correspond au slug passé dans l'url, recupere le slug de l'url et recupere l'annonce correspondante dans la table

     {
        $passwordUpdate = new PasswordUpdate(); //on déclare un objet passwordUpdate de type PasswordUpdate

          $user= $this->getUser(); //On récupére les infos de l'utilisateur actuel

          $form = $this->createForm(EditerPasswordType :: class,$passwordUpdate); //recupere le formulaire crée a l'exterieur du controller se trouvant dans le dossier form

         
          $form->handleRequest($request); //on lui passe la requete HTTP, analyse de la requete
          //Il va relier toutes les


          if ($form->isSubmitted() && $form->isValid()){
           //1.Vérifier que l'ancien mdp du formulaire soit le meme password de l'utilisateur en cours
           if (!password_verify($passwordUpdate->getAncienPassword(), $user->getHash())){ //si les passwords ne sont pas les meme alors on rentre dans le if
            //gére l'erreur                                                               //la méthode password_verify compare les passwords cryptés, le premier parametre est le premier mdp crypté(écrit par le user dans le champ du formulaire) et en deuxieme parametre le deuxieme mdp crypté (de la bdd)
                                                                                          //utilisé grace a l'injection de dépendance du UserEncoderInterface
           }
           else{ //Sinon si les passwords comparés sont les mêmes
               $newPassword = $passwordUpdate->getNouveauPassword(); //ici on choppe notre nouveau password que l'utilisateur a tapé 
               $hash= $encoder->encodePassword($user, $newPassword); //Ensuite il faut encoder/crypter/hasher le nouveau mot de passe pour la bdd 
           
                $user->setHash($hash); //on met a jour le champ hash de l'utilisateur dans la BDD avec le new mdp hashé
                $manager = $this -> getDoctrine()->getManager(); //la fonction ne fonctionne pas si je n'ai pas le manager, on peut remplacer cette ligne en passant par une injection de dépendance
            
                $manager->persist($user); //persiste dans le temps les données 
                
                $manager->flush(); //envoi les données qui était entrain de persister dans le temps
                
                $this->addFlash( //affichage de la notif indiquant la réussite
                    'success', //success car boostrap rendra vers la notif, on indique le type de flash
                    "Votre mot de passe a bien été modifié ! :)" //indication du message dans la notif
                ); 

            }
           
    
          }

        return $this->render('compte/editerPassword.html.twig',
        [
            'form'=>$form->createView(),
            'passwordUpdate'=>$passwordUpdate
        ]

        );
     }

     /**
      * Permet d'afficher le profil de l'utilisateur connecté
      *
      *@Route("/compte", name="afficher_compte")
      *@return Response
      */
     public function afficherCompte(){

        $user= $this->getUser();

        return $this->render('user/pageUtilisateur.html.twig',[
            'user'=>$user
        ]);
     }
    
    }
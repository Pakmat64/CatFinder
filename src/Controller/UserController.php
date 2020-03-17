<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * Permet d'afficher le compte de chaque utilisateur 
     * 
     * @Route("/compte/{slug}", name="page_utilisateur")
     */
    public function pageUtilisateur(User $user)
    {
        return $this->render('user/pageUtilisateur.html.twig', [
            'user' => $user,
        ]);
    }
}

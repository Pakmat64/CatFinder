<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HistoireChatController extends AbstractController
{
    /**
     * @Route("/histChats", name="histoire_chats")
     */
    public function AfficherHistoireChat()
    {
        return $this->render('histoire_chat/histoireChat.html.twig');
    }
}

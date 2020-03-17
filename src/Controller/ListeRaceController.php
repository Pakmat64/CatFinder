<?php

namespace App\Controller;

use App\Repository\RaceRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ListeRaceController extends AbstractController
{
    /**
     * @Route("/liste/race", name="liste_race")
     */
    public function RaceChatMain(RaceRepository $repo)
    {
        $races=$repo->findAll();

        //dd($races);
        return $this->render('liste_race/raceChat.html.twig', [
            'races'=>$races,
        ]);
    }

     /**
     * @Route("/liste/race/A", name="liste_race_A")
     * Controller permettant l'affichage des chats commencant par la lettre A
     */
    public function RaceChatA(RaceRepository $raceRepo)
    {

        
        $racesA = $raceRepo->RaceChatA();

       // dd($racesA);
        return $this->render('liste_race/raceChatA.html.twig', [
          'racesA'=>$racesA,
        ]);
    }

    
     /**
     * @Route("/liste/race/B", name="liste_race_B")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatB(RaceRepository $raceRepo)
    {

        
        $racesB = $raceRepo->RaceChatB();

       // dd($racesA);
        return $this->render('liste_race/raceChatB.html.twig', [
          'racesB'=>$racesB,
        ]);
    }

     /**
     * @Route("/liste/race/C", name="liste_race_C")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatC(RaceRepository $raceRepo)
    {

        
        $racesC = $raceRepo->RaceChatC();

       // dd($racesA);
        return $this->render('liste_race/raceChatC.html.twig', [
          'racesC'=>$racesC,
        ]);
    }

     /**
     * @Route("/liste/race/D", name="liste_race_D")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatD(RaceRepository $raceRepo)
    {

        
        $racesD = $raceRepo->RaceChatD();

       // dd($racesA);
        return $this->render('liste_race/raceChatD.html.twig', [
          'racesD'=>$racesD,
        ]);
    }

     /**
     * @Route("/liste/race/E", name="liste_race_E")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatE(RaceRepository $raceRepo)
    {

        
        $racesE = $raceRepo->RaceChatE();

       // dd($racesA);
        return $this->render('liste_race/raceChatE.html.twig', [
          'racesE'=>$racesE,
        ]);
    }

     /**
     * @Route("/liste/race/F", name="liste_race_F")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatF(RaceRepository $raceRepo)
    {

        
        $racesF = $raceRepo->RaceChatF();

       // dd($racesA);
        return $this->render('liste_race/raceChatF.html.twig', [
          'racesF'=>$racesF,
        ]);
    }

     /**
     * @Route("/liste/race/G", name="liste_race_G")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatG(RaceRepository $raceRepo)
    {

        
        $racesG = $raceRepo->RaceChatG();

       // dd($racesA);
        return $this->render('liste_race/raceChatG.html.twig', [
          'racesG'=>$racesG,
        ]);
    }


     /**
     * @Route("/liste/race/H", name="liste_race_H")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatH(RaceRepository $raceRepo)
    {

        
        $racesH = $raceRepo->RaceChatH();

       // dd($racesA);
        return $this->render('liste_race/raceChatH.html.twig', [
          'racesH'=>$racesH,
        ]);
    }

     /**
     * @Route("/liste/race/I", name="liste_race_I")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatI(RaceRepository $raceRepo)
    {

        
        $racesI = $raceRepo->RaceChatI();

       // dd($racesA);
        return $this->render('liste_race/raceChatI.html.twig', [
          'racesI'=>$racesI,
        ]);
    }

     /**
     * @Route("/liste/race/J", name="liste_race_J")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatJ(RaceRepository $raceRepo)
    {

        
        $racesJ = $raceRepo->RaceChatJ();

       // dd($racesA);
        return $this->render('liste_race/raceChatJ.html.twig', [
          'racesJ'=>$racesJ,
        ]);
    }

     /**
     * @Route("/liste/race/K", name="liste_race_K")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatK(RaceRepository $raceRepo)
    {

        
        $racesK = $raceRepo->RaceChatK();

       // dd($racesA);
        return $this->render('liste_race/raceChatK.html.twig', [
          'racesK'=>$racesK,
        ]);
    }

     /**
     * @Route("/liste/race/L", name="liste_race_L")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatL(RaceRepository $raceRepo)
    {

        
        $racesL = $raceRepo->RaceChatL();

       // dd($racesA);
        return $this->render('liste_race/raceChatL.html.twig', [
          'racesL'=>$racesL,
        ]);
    }

     /**
     * @Route("/liste/race/M", name="liste_race_M")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatM(RaceRepository $raceRepo)
    {

        
        $racesM = $raceRepo->RaceChatM();

       // dd($racesA);
        return $this->render('liste_race/raceChatM.html.twig', [
          'racesM'=>$racesM,
        ]);
    }

     /**
     * @Route("/liste/race/N", name="liste_race_N")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatN(RaceRepository $raceRepo)
    {

        
        $racesN = $raceRepo->RaceChatN();

       // dd($racesA);
        return $this->render('liste_race/raceChatN.html.twig', [
          'racesN'=>$racesN,
        ]);
    }

     /**
     * @Route("/liste/race/O", name="liste_race_O")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatO(RaceRepository $raceRepo)
    {

        
        $racesO = $raceRepo->RaceChatO();

       // dd($racesA);
        return $this->render('liste_race/raceChatO.html.twig', [
          'racesO'=>$racesO,
        ]);
    }

     /**
     * @Route("/liste/race/P", name="liste_race_P")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatP(RaceRepository $raceRepo)
    {

        
        $racesP = $raceRepo->RaceChatP();

       // dd($racesA);
        return $this->render('liste_race/raceChatP.html.twig', [
          'racesP'=>$racesP,
        ]);
    }
 /**
     * @Route("/liste/race/Q", name="liste_race_Q")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatQ(RaceRepository $raceRepo)
    {

        
        $racesQ = $raceRepo->RaceChatQ();

       // dd($racesA);
        return $this->render('liste_race/raceChatQ.html.twig', [
          'racesQ'=>$racesQ,
        ]);
    }

     /**
     * @Route("/liste/race/R", name="liste_race_R")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatR(RaceRepository $raceRepo)
    {

        
        $racesR = $raceRepo->RaceChatR();

       // dd($racesA);
        return $this->render('liste_race/raceChatR.html.twig', [
          'racesR'=>$racesR,
        ]);
    }

     /**
     * @Route("/liste/race/S", name="liste_race_S")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatS(RaceRepository $raceRepo)
    {

        
        $racesS = $raceRepo->RaceChatS();

       // dd($racesA);
        return $this->render('liste_race/raceChatS.html.twig', [
          'racesS'=>$racesS,
        ]);
    }

 /**
     * @Route("/liste/race/T", name="liste_race_T")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatT(RaceRepository $raceRepo)
    {

        
        $racesT = $raceRepo->RaceChatT();

       // dd($racesA);
        return $this->render('liste_race/raceChatT.html.twig', [
          'racesT'=>$racesT,
        ]);
    }

     /**
     * @Route("/liste/race/U", name="liste_race_U")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatU(RaceRepository $raceRepo)
    {

        
        $racesU = $raceRepo->RaceChatU();

       // dd($racesA);
        return $this->render('liste_race/raceChatU.html.twig', [
          'racesU'=>$racesU,
        ]);
    }

     /**
     * @Route("/liste/race/V", name="liste_race_V")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatV(RaceRepository $raceRepo)
    {

        
        $racesV = $raceRepo->RaceChatV();

       // dd($racesA);
        return $this->render('liste_race/raceChatV.html.twig', [
          'racesV'=>$racesV,
        ]);
    }

     /**
     * @Route("/liste/race/W", name="liste_race_W")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatW(RaceRepository $raceRepo)
    {

        
        $racesW = $raceRepo->RaceChatW();

       // dd($racesA);
        return $this->render('liste_race/raceChatW.html.twig', [
          'racesW'=>$racesW,
        ]);
    }

     /**
     * @Route("/liste/race/X", name="liste_race_X")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatX(RaceRepository $raceRepo)
    {

        
        $racesX = $raceRepo->RaceChatX();

       // dd($racesA);
        return $this->render('liste_race/raceChatX.html.twig', [
          'racesX'=>$racesX,
        ]);
    }
     /**
     * @Route("/liste/race/Y", name="liste_race_Y")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatY(RaceRepository $raceRepo)
    {

        
        $racesY = $raceRepo->RaceChatY();

       // dd($racesA);
        return $this->render('liste_race/raceChatY.html.twig', [
          'racesY'=>$racesY,
        ]);
    }

     /**
     * @Route("/liste/race/Z", name="liste_race_Z")
     * Controller permettant l'affichage des chats commencant par la lettre B
     */
    public function RaceChatZ(RaceRepository $raceRepo)
    {

        
        $racesZ = $raceRepo->RaceChatZ();

       // dd($racesA);
        return $this->render('liste_race/raceChatZ.html.twig', [
          'racesZ'=>$racesZ,
        ]);
    }
}



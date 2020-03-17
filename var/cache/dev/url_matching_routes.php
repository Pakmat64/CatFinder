<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/annonce' => [[['_route' => 'annonce', '_controller' => 'App\\Controller\\AnnonceController::MainAnnonce'], null, null, null, false, false, null]],
        '/annonce/newAd' => [[['_route' => 'formulaire_creer_annonce', '_controller' => 'App\\Controller\\AnnonceController::CreerAnnonce'], null, null, null, false, false, null]],
        '/annonce/recherche' => [[['_route' => 'recherche_annonce', '_controller' => 'App\\Controller\\AnnonceController::RechercherAnnonce'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/panier/pay' => [[['_route' => 'cart_pay', '_controller' => 'App\\Controller\\CartController::pay'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\CompteController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'compte_logout', '_controller' => 'App\\Controller\\CompteController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription_user', '_controller' => 'App\\Controller\\CompteController::enregistrement'], null, null, null, false, false, null]],
        '/compte/profil' => [[['_route' => 'editer_profil', '_controller' => 'App\\Controller\\CompteController::EditerProfile'], null, null, null, false, false, null]],
        '/compte/changerPassword' => [[['_route' => 'editer_password', '_controller' => 'App\\Controller\\CompteController::EditerPassword'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'afficher_compte', '_controller' => 'App\\Controller\\CompteController::afficherCompte'], null, null, null, false, false, null]],
        '/histChats' => [[['_route' => 'histoire_chats', '_controller' => 'App\\Controller\\HistoireChatController::AfficherHistoireChat'], null, null, null, false, false, null]],
        '/liste/race' => [[['_route' => 'liste_race', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatMain'], null, null, null, false, false, null]],
        '/liste/race/A' => [[['_route' => 'liste_race_A', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatA'], null, null, null, false, false, null]],
        '/liste/race/B' => [[['_route' => 'liste_race_B', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatB'], null, null, null, false, false, null]],
        '/liste/race/C' => [[['_route' => 'liste_race_C', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatC'], null, null, null, false, false, null]],
        '/liste/race/D' => [[['_route' => 'liste_race_D', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatD'], null, null, null, false, false, null]],
        '/liste/race/E' => [[['_route' => 'liste_race_E', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatE'], null, null, null, false, false, null]],
        '/liste/race/F' => [[['_route' => 'liste_race_F', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatF'], null, null, null, false, false, null]],
        '/liste/race/G' => [[['_route' => 'liste_race_G', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatG'], null, null, null, false, false, null]],
        '/liste/race/H' => [[['_route' => 'liste_race_H', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatH'], null, null, null, false, false, null]],
        '/liste/race/I' => [[['_route' => 'liste_race_I', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatI'], null, null, null, false, false, null]],
        '/liste/race/J' => [[['_route' => 'liste_race_J', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatJ'], null, null, null, false, false, null]],
        '/liste/race/K' => [[['_route' => 'liste_race_K', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatK'], null, null, null, false, false, null]],
        '/liste/race/L' => [[['_route' => 'liste_race_L', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatL'], null, null, null, false, false, null]],
        '/liste/race/M' => [[['_route' => 'liste_race_M', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatM'], null, null, null, false, false, null]],
        '/liste/race/N' => [[['_route' => 'liste_race_N', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatN'], null, null, null, false, false, null]],
        '/liste/race/O' => [[['_route' => 'liste_race_O', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatO'], null, null, null, false, false, null]],
        '/liste/race/P' => [[['_route' => 'liste_race_P', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatP'], null, null, null, false, false, null]],
        '/liste/race/Q' => [[['_route' => 'liste_race_Q', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatQ'], null, null, null, false, false, null]],
        '/liste/race/R' => [[['_route' => 'liste_race_R', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatR'], null, null, null, false, false, null]],
        '/liste/race/S' => [[['_route' => 'liste_race_S', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatS'], null, null, null, false, false, null]],
        '/liste/race/T' => [[['_route' => 'liste_race_T', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatT'], null, null, null, false, false, null]],
        '/liste/race/U' => [[['_route' => 'liste_race_U', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatU'], null, null, null, false, false, null]],
        '/liste/race/V' => [[['_route' => 'liste_race_V', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatV'], null, null, null, false, false, null]],
        '/liste/race/W' => [[['_route' => 'liste_race_W', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatW'], null, null, null, false, false, null]],
        '/liste/race/X' => [[['_route' => 'liste_race_X', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatX'], null, null, null, false, false, null]],
        '/liste/race/Y' => [[['_route' => 'liste_race_Y', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatY'], null, null, null, false, false, null]],
        '/liste/race/Z' => [[['_route' => 'liste_race_Z', '_controller' => 'App\\Controller\\ListeRaceController::RaceChatZ'], null, null, null, false, false, null]],
        '/ecommerce' => [[['_route' => 'all_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\exempleController::home'], null, null, null, false, false, null]],
        '/salut' => [[['_route' => 'test', '_controller' => 'App\\Controller\\exempleController::test'], null, null, null, false, false, null]],
        '/racechat' => [[['_route' => 'raceChat', '_controller' => 'App\\Controller\\exempleController::RaceChat'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/annonce(?'
                    .'|/([^/]++)(?'
                        .'|(*:192)'
                        .'|/(?'
                            .'|editer(*:210)'
                            .'|SuppressionAnnonce(*:236)'
                        .')'
                    .')'
                    .'|(?:/([^/]++)(?:/([^/]++))?)?(*:274)'
                .')'
                .'|/panier/(?'
                    .'|add/([^/]++)(*:306)'
                    .'|remove/([^/]++)(*:329)'
                .')'
                .'|/compte/([^/]++)(*:354)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'afficherAnnonce', '_controller' => 'App\\Controller\\AnnonceController::AffichageAnnonce'], ['slug'], null, null, false, true, null]],
        210 => [[['_route' => 'formulaire_editer_annonce', '_controller' => 'App\\Controller\\AnnonceController::EditAnnonce'], ['slug'], null, null, false, false, null]],
        236 => [[['_route' => 'SuppressionAnnonce', '_controller' => 'App\\Controller\\AnnonceController::SupprimerAnnonce'], ['slug'], null, null, false, false, null]],
        274 => [[['_route' => 'testPage', 'prenom' => 'anonyme', 'age' => 0, '_controller' => 'App\\Controller\\exempleController::test'], ['prenom', 'age'], null, null, false, true, null]],
        306 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        329 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        354 => [
            [['_route' => 'page_utilisateur', '_controller' => 'App\\Controller\\UserController::pageUtilisateur'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

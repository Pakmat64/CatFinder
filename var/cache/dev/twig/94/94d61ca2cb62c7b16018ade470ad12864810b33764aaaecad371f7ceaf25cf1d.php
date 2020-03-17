<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_0c938131b16d5997eb400bdf3a071c03ce7d309a4f4a8e95dee137b1eb3b5f8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        
        <meta charset=\"UTF-8\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"stylesheet\" href=\"../../css/boostrap.min.css\">
        <link rel=\"stylesheet\" href= \"../../css/app.css\">
        <link rel=\"stylesheet\" href= \"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/font/font.face.css"), "html", null, true);
        echo "\">
        <link rel=\"shortout icon\" type=\"image/x-icon\" href=\"../../catfinder.jpg\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src = \"../../js/jquery.min.js\"></script>
        <script src = \"../../js/boostrap.min.js\"></script>
        <script src = \"../../js/popper.min.js\"></script>
        <script src = \"../../css/boostrap.min.css\"></script>
        



        ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "

    </head>
    
 ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30)) {
            echo "   ";
            echo " 

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo " \"> <strong>CatFinder</strong></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\"> <!--margin right (mr) auto-->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\" ";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo " \">Page d'acceuil</a>
            </li>
               <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race");
            echo "\">Race Chat</a>
            </li>
             <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("histoire_chats");
            echo "\">Histoire Chat</a>
            </li>
                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                        Annonce
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\"> ";
            // line 54
            echo "                         <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce");
            echo "\">Afficher annonces</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire_creer_annonce");
            echo "\">Créer une annonce</a>
                    </div>
                  </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_product");
            echo "\">E-Commerce</a>
            </li>
           ";
            // line 64
            echo "            </ul>
            <ul class=\"navbar-nav ml-auto\" > <!--la classe indique qu'il est dans la navbar margin left (ml) auto-->

                  <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                        <img src=\"";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "avatar", [], "any", false, false, false, 69), "html", null, true);
            echo "\" class=\"avatar avatar-mini\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "nomEnEntier", [], "any", false, false, false, 69), "html", null, true);
            echo "\">
                        ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "nomEnEntier", [], "any", false, false, false, 70), "html", null, true);
            echo "
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\"> ";
            // line 73
            echo "                         <a class=\"dropdown-item\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_compte");
            echo "\">Afficher mon profil</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editer_profil");
            echo "\">Modifier informations</a>
                        <a class=\"dropdown-item\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editer_password");
            echo "\">Changer mot de passe</a>
                        <div class=\"dropdown-divider\"></div>        
                        <a class=\"dropdown-item\" href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compte_logout");
            echo "\">Déconnexion</a>
                    </div>
                  </li>
            </ul>
                ";
        } else {
            // line 81
            echo " ";
            // line 82
            echo "
                    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo " \"> <strong>CatFinder</strong></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\"> <!--margin right (mr) auto-->
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\" ";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo " \">Page d'acceuil</a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race");
            echo "\">Race Chat</a>
                  </li>
                  <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("histoire_chats");
            echo "\">Histoire Chat</a>
                  </li>
              </ul>
               <ul class=\"navbar-nav ml-auto\" > <!--la classe indique qu'il est dans la navbar margin left (ml) auto-->
              
                  <li class=\"nav-item\">
                  <a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_user");
            echo "\" class=\"nav-link\">Inscription</a>

                  </li>

                  <li class=\"nav-item\">
                  <a href=\"";
            // line 109
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"nav-link\">Connexion</a>

                  </li>
                </ul>
                ";
        }
        // line 114
        echo "            
            
        </div>
        </nav>
<!--partie Notification alertant reussite ou pas-->
        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "flashes", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            echo " <!--app variable globale avec pleins d'infos et flashes pour focus sur les flashes-->
      <!--Boucle for qui boucle dans app.flashes autant de fois qu'il y a de flashes en récupérant la clé (success ou danger) qu'il rentre dans label et le message dans messages-->
      <div class=\"container\">
        <div class=\"alert alert-";
            // line 122
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\"> <!--div avec une classe avec le nom de la flashes pour afficher une classe couleur correspondant au déroulement (vert si success, rouge si error)-->
            ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                echo " <!--boucle foir bouclant et récupérant les messages des flashes-->
            <p>";
                // line 124
                echo $context["message"];
                echo "</p> <!--affichage du message et le filtre raw permet d'enlever la protection de twig sur le contenu HTML (affichage des strongs dans les flashs)-->
             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "        </div>
      
      </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "        

        ";
        // line 133
        $this->displayBlock('body', $context, $blocks);
        // line 134
        echo "        
        ";
        // line 135
        $this->displayBlock('footer', $context, $blocks);
        // line 257
        echo "

        ";
        // line 259
        $this->displayBlock('javascripts', $context, $blocks);
        // line 260
        echo "
 
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CatFinder";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 133
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " <body><h1>ERROR PAS DE BODY DANS PAGE</h1> </body>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        echo " <!--La position des block compte, ici mettre footer en dessous de body important-->
        <!-- Footer -->
<footer class=\"page-footer font-small blue pt-4\" style=\"background: #593196\">

  <!-- Footer Links -->
  <div class=\"container text-center text-md-left\">

    <!-- Grid row -->
    <div class=\"row justify-content-center\">

      <!-- Grid column phrase de fin-->
      <div class=\"col-md-4 mt-md-0 mt-3 sautLigne\">

        <!-- Content -->
        <h5 class=\"text-uppercase hFooter alignerTexte\">Phrase de fin <i class=\"material-icons\">archive</i></h5>
        <p class=\"pFooter\">Nous espérons que vous allez passez de bons moments sur notre 
        site. Comme par exemple faire des rencontres amicales sur notre forum ou 
        trouver un ami félin qui vous correspond. Si vous avez le moindre problème ou demande
        toute simple, n'hésitez pas a nous contacter aux différents endroits indiqués sur votre droite ! <i class='far fa-laugh-wink'></i></p>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none pb-3\">

      <!-- Grid column Réseaux sociaux -->
      <div class=\"col-md-2 mb-md-0 mb-3\">

        <!-- Links -->
        <h5 class=\"text-uppercase hFooter alignerTexte\">Réseaux <i class='fas fa-comment-alt'></i></h5>

        <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Mokhtar</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a href=\"https://www.facebook.com/bmm.mokhtar\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
        </div>
         <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Pako</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
\t\t\t\t<a href=\"https://www.facebook.com/pako.mathieu\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
        </div>

          <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Stéfan</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
\t\t\t\t<a href=\"https://www.facebook.com/stefan.menard.5\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
        </div>


      </div>
      <!-- Grid column -->

      <!-- Grid column Numéro -->
      <div class=\"col-md-2 mb-md-0 mb-3\">

        <!-- Links -->
        <h5 class=\"text-uppercase hFooter alignerTexte\">Numero <i class=\"material-icons\" style=\"font-size:24px\">call</i></h5>
        <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Mokhtar</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">momo64@gmail.com</a>
        </div>
         <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Pako</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">pako64@gmail.com</a>
        </div>

          <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Stéfan</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">stefan64@gmail.com</a>
        </div>

      </div>
      <!-- Grid column Mail -->
       <div class=\"col-md-2 mb-md-0 mb-3\">

        <!-- Links -->
        <h5 class=\"text-uppercase hFooter alignerTexte\" >Mail <i class=\"material-icons\">email</i></h5>
          <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Mokhtar</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">momo64@gmail.com</a>
        </div>
         <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Pako</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">pako64@gmail.com</a>
        </div>

          <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Stéfan</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">stefan64@gmail.com</a>
        </div>


      </div>

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3 divFooter\">© 2020 Copyright
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer --> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 259
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 259,  367 => 135,  348 => 133,  330 => 25,  311 => 7,  298 => 260,  296 => 259,  292 => 257,  290 => 135,  287 => 134,  285 => 133,  281 => 131,  271 => 126,  263 => 124,  257 => 123,  253 => 122,  245 => 119,  238 => 114,  230 => 109,  222 => 104,  213 => 98,  207 => 95,  201 => 92,  190 => 84,  186 => 82,  184 => 81,  176 => 77,  171 => 75,  167 => 74,  162 => 73,  157 => 70,  151 => 69,  144 => 64,  139 => 59,  132 => 55,  127 => 54,  118 => 47,  112 => 44,  106 => 41,  95 => 33,  88 => 30,  82 => 26,  80 => 25,  63 => 11,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>

        
        <meta charset=\"UTF-8\">
        <title>{% block title %}CatFinder{% endblock %}</title>
        
        <link rel=\"stylesheet\" href=\"../../css/boostrap.min.css\">
        <link rel=\"stylesheet\" href= \"../../css/app.css\">
        <link rel=\"stylesheet\" href= \"{{asset('/font/font.face.css')}}\">
        <link rel=\"shortout icon\" type=\"image/x-icon\" href=\"../../catfinder.jpg\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src = \"../../js/jquery.min.js\"></script>
        <script src = \"../../js/boostrap.min.js\"></script>
        <script src = \"../../js/popper.min.js\"></script>
        <script src = \"../../css/boostrap.min.css\"></script>
        



        {% block stylesheets %}{% endblock %}


    </head>
    
 {% if app.user %}   {# Si  c'est un utilisateur connecté on affiche cette barre de navigation  #} 

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"{{path ('homepage') }} \"> <strong>CatFinder</strong></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\"> <!--margin right (mr) auto-->
            <li class=\"nav-item dropdown\">
                <a class=\"nav-link\" href=\" {{path ('homepage') }} \">Page d'acceuil</a>
            </li>
               <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path ('liste_race')}}\">Race Chat</a>
            </li>
             <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path ('histoire_chats')}}\">Histoire Chat</a>
            </li>
                <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                        Annonce
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\"> {# data-toggle permet d'activer le dropdown #}
                         <a class=\"dropdown-item\" href=\"{{path ('annonce') }}\">Afficher annonces</a>
                        <a class=\"dropdown-item\" href=\"{{path ('formulaire_creer_annonce') }}\">Créer une annonce</a>
                    </div>
                  </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path ('all_product') }}\">E-Commerce</a>
            </li>
           {# <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"#\">Forum</a>
            </li> #}
            </ul>
            <ul class=\"navbar-nav ml-auto\" > <!--la classe indique qu'il est dans la navbar margin left (ml) auto-->

                  <li class=\"nav-item dropdown\">
                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" id=\"accountDropdownLink\">
                        <img src=\"{{app.user.avatar}}\" class=\"avatar avatar-mini\" alt=\"Avatar de {{app.user.nomEnEntier}}\">
                        {{app.user.nomEnEntier}}
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"accountDropdownLink\"> {# data-toggle permet d'activer le dropdown #}
                         <a class=\"dropdown-item\" href=\"{{path ('afficher_compte') }}\">Afficher mon profil</a>
                        <a class=\"dropdown-item\" href=\"{{path ('editer_profil') }}\">Modifier informations</a>
                        <a class=\"dropdown-item\" href=\"{{path ('editer_password') }}\">Changer mot de passe</a>
                        <div class=\"dropdown-divider\"></div>        
                        <a class=\"dropdown-item\" href=\"{{path ('compte_logout') }}\">Déconnexion</a>
                    </div>
                  </li>
            </ul>
                {% else %} {# Sinon si  c'est un visiteur on affiche cette barre de navigation  #}

                    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
  <a class=\"navbar-brand\" href=\"{{path ('homepage') }} \"> <strong>CatFinder</strong></a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
            <ul class=\"navbar-nav mr-auto\"> <!--margin right (mr) auto-->
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\" {{path ('homepage') }} \">Page d'acceuil</a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link\" href=\"{{path ('liste_race')}}\">Race Chat</a>
                  </li>
                  <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"{{path ('histoire_chats')}}\">Histoire Chat</a>
                  </li>
              </ul>
               <ul class=\"navbar-nav ml-auto\" > <!--la classe indique qu'il est dans la navbar margin left (ml) auto-->
              
                  <li class=\"nav-item\">
                  <a href=\"{{path ('inscription_user') }}\" class=\"nav-link\">Inscription</a>

                  </li>

                  <li class=\"nav-item\">
                  <a href=\"{{path ('login') }}\" class=\"nav-link\">Connexion</a>

                  </li>
                </ul>
                {% endif %}
            
            
        </div>
        </nav>
<!--partie Notification alertant reussite ou pas-->
        {% for label, messages in app.flashes %} <!--app variable globale avec pleins d'infos et flashes pour focus sur les flashes-->
      <!--Boucle for qui boucle dans app.flashes autant de fois qu'il y a de flashes en récupérant la clé (success ou danger) qu'il rentre dans label et le message dans messages-->
      <div class=\"container\">
        <div class=\"alert alert-{{label}}\"> <!--div avec une classe avec le nom de la flashes pour afficher une classe couleur correspondant au déroulement (vert si success, rouge si error)-->
            {% for message in messages %} <!--boucle foir bouclant et récupérant les messages des flashes-->
            <p>{{message | raw}}</p> <!--affichage du message et le filtre raw permet d'enlever la protection de twig sur le contenu HTML (affichage des strongs dans les flashs)-->
             {% endfor %}
        </div>
      
      </div>

        {% endfor %}
        

        {% block body %} <body><h1>ERROR PAS DE BODY DANS PAGE</h1> </body>{% endblock %}
        
        {% block footer %} <!--La position des block compte, ici mettre footer en dessous de body important-->
        <!-- Footer -->
<footer class=\"page-footer font-small blue pt-4\" style=\"background: #593196\">

  <!-- Footer Links -->
  <div class=\"container text-center text-md-left\">

    <!-- Grid row -->
    <div class=\"row justify-content-center\">

      <!-- Grid column phrase de fin-->
      <div class=\"col-md-4 mt-md-0 mt-3 sautLigne\">

        <!-- Content -->
        <h5 class=\"text-uppercase hFooter alignerTexte\">Phrase de fin <i class=\"material-icons\">archive</i></h5>
        <p class=\"pFooter\">Nous espérons que vous allez passez de bons moments sur notre 
        site. Comme par exemple faire des rencontres amicales sur notre forum ou 
        trouver un ami félin qui vous correspond. Si vous avez le moindre problème ou demande
        toute simple, n'hésitez pas a nous contacter aux différents endroits indiqués sur votre droite ! <i class='far fa-laugh-wink'></i></p>

      </div>
      <!-- Grid column -->

      <hr class=\"clearfix w-100 d-md-none pb-3\">

      <!-- Grid column Réseaux sociaux -->
      <div class=\"col-md-2 mb-md-0 mb-3\">

        <!-- Links -->
        <h5 class=\"text-uppercase hFooter alignerTexte\">Réseaux <i class='fas fa-comment-alt'></i></h5>

        <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Mokhtar</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a href=\"https://www.facebook.com/bmm.mokhtar\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
        </div>
         <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Pako</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
\t\t\t\t<a href=\"https://www.facebook.com/pako.mathieu\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
        </div>

          <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Stéfan</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
\t\t\t\t<a href=\"https://www.facebook.com/stefan.menard.5\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
        </div>


      </div>
      <!-- Grid column -->

      <!-- Grid column Numéro -->
      <div class=\"col-md-2 mb-md-0 mb-3\">

        <!-- Links -->
        <h5 class=\"text-uppercase hFooter alignerTexte\">Numero <i class=\"material-icons\" style=\"font-size:24px\">call</i></h5>
        <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Mokhtar</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">momo64@gmail.com</a>
        </div>
         <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Pako</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">pako64@gmail.com</a>
        </div>

          <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Stéfan</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">stefan64@gmail.com</a>
        </div>

      </div>
      <!-- Grid column Mail -->
       <div class=\"col-md-2 mb-md-0 mb-3\">

        <!-- Links -->
        <h5 class=\"text-uppercase hFooter alignerTexte\" >Mail <i class=\"material-icons\">email</i></h5>
          <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Mokhtar</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">momo64@gmail.com</a>
        </div>
         <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Pako</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">pako64@gmail.com</a>
        </div>

          <div class=\"row justify-content-center\">
              <h8 style=\"color:white\"><strong>Stéfan</strong></h8>
        </div>  
        <div class=\"row justify-content-center\">
          <a class=\"aFooter\" href=\"#!\">stefan64@gmail.com</a>
        </div>


      </div>

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class=\"footer-copyright text-center py-3 divFooter\">© 2020 Copyright
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer --> {% endblock %}


        {% block javascripts %}{% endblock %}

 
</html>
", "base.html.twig", "C:\\Users\\Bobo\\CatFinder\\templates\\base.html.twig");
    }
}

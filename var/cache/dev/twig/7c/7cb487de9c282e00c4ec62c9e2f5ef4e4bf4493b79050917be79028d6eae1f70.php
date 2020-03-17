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

/* recherche/rechercheAnnonce.html.twig */
class __TwigTemplate_1b1382d93f6bdba80634f066510ae83a4b8226cd85ccb12954d9978483121475 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recherche/rechercheAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recherche/rechercheAnnonce.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recherche/rechercheAnnonce.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container bordure\" style=\"text-align:center\">


 ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_recherche"]) || array_key_exists("form_recherche", $context) ? $context["form_recherche"] : (function () { throw new RuntimeError('Variable "form_recherche" does not exist.', 8, $this->source); })()), 'form_start');
        echo "


  ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_recherche"]) || array_key_exists("form_recherche", $context) ? $context["form_recherche"] : (function () { throw new RuntimeError('Variable "form_recherche" does not exist.', 11, $this->source); })()), 'form_end');
        echo "


</div>

        <div class=\"container\">
          
            ";
        // line 18
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "method", [], "any", false, false, false, 18), "POST")) {
            // line 19
            echo "      
            ";
            // line 20
            if (0 === twig_compare(twig_length_filter($this->env, (isset($context["searchAnnonces"]) || array_key_exists("searchAnnonces", $context) ? $context["searchAnnonces"] : (function () { throw new RuntimeError('Variable "searchAnnonces" does not exist.', 20, $this->source); })())), 0)) {
                // line 21
                echo "            <h1 class=\"my-3\">Aucun résultat pour votre recherche</h1>
            ";
            } else {
                // line 23
                echo "            <h1 class=\"my-3\">Résultat de la recherche</h1>


          <div class=\"row\">
          ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["searchAnnonces"]) || array_key_exists("searchAnnonces", $context) ? $context["searchAnnonces"] : (function () { throw new RuntimeError('Variable "searchAnnonces" does not exist.', 27, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["searchAnnonce"]) {
                    echo " ";
                    // line 28
                    echo "      
          ";
                    // line 29
                    $context["lienVersAnnonce"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherAnnonce", ["slug" => twig_get_attribute($this->env, $this->source, $context["searchAnnonce"], "adresse", [], "any", false, false, false, 29)]);
                    echo " <!--Constant permettant de ne pas repeter ce chemin a indiquer dans les 3 liens en dessous-->

            <div class =\"col-md-4 mb-3\">
              <div class=\"card\">
              ";
                    // line 33
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["searchAnnonce"], "don", [], "any", false, false, false, 33), "Vente")) {
                        echo " <!--changement d'affichage selon la vente ou le don-->
                <div class=\"card-header text-center\">Un chat de la race <strong>";
                        // line 34
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchAnnonce"], "race", [], "any", false, false, false, 34), "html", null, true);
                        echo "</strong>
                au prix de <strong>";
                        // line 35
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchAnnonce"], "prix", [], "any", false, false, false, 35), "html", null, true);
                        echo "</strong> euros
                </div>
                ";
                    } else {
                        // line 38
                        echo "            <div class=\"card-header text-center\">Un chat de la race <strong>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchAnnonce"], "race", [], "any", false, false, false, 38), "html", null, true);
                        echo "</strong>
            a <strong>donner</strong>
                </div>
              ";
                    }
                    // line 41
                    echo "\t
                <a href=\"";
                    // line 42
                    echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 42, $this->source); })()), "html", null, true);
                    echo "\"> <!--Ici on rend l'image cliquable et sa renvoi sur l'annonce (constante lienVersAnnonce)-->
                <img src= \"";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchAnnonce"], "coverImage", [], "any", false, false, false, 43), "html", null, true);
                    echo "\" alt=\"Image du chat\" style=\"height:200px; width:100%; display:block\"><!--on bloque les images a une taille par défaut-->
              <!--<a> est un lien et le href vers le chemin de la route sous le nom \"afficherAnnonce\" avec comme parametre du slug, le slug de l'annonce(correspond au champ adresse de la table annonce)-->
            </a>
              <div class=\"card-body\">
                <h4 class = \"card-title\">
                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 48, $this->source); })()), "html", null, true);
                    echo "\"> <!--pareil ici on rend le titre cliquable et redirigant vers l'annonce-->
                  ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchAnnonce"], "titre", [], "any", false, false, false, 49), "html", null, true);
                    echo "
                </a>\t
                </h4>
                <p class=\"card-text\">
                <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 53, $this->source); })()), "html", null, true);
                    echo "\"><!--pareil ici on rend l'intro cliquable et redirigant vers l'annonce-->
                  ";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["searchAnnonce"], "introduction", [], "any", false, false, false, 54), "html", null, true);
                    echo "
                </a>\t
                </p>
              </div>
              <div class=\"card-footer\">
                <a href=\"#\" class=\"btn btn-primary\">En savoir plus</a>
              </div>
              </div>
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchAnnonce'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "            ";
            }
            echo "  
                
            </div>
          </div>
          ";
        }
        // line 68
        echo "  
        </div>
   
</div>


 
";
        // line 75
        $this->displayBlock('javascript', $context, $blocks);
        // line 119
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 76
        echo "
<script>
  

function CacherPrix(){ //permet de cacher les prix mini et maxi quand on passe sur don

\t
    var b=document.getElementById(\"rechercher_annonce_Prix_mini\");
\tvar c=document.getElementById(\"rechercher_annonce_Prix_maximum\");
    var a = document.getElementById(\"rechercher_annonce_don\");

   if(a.value == \"Don\") //a.value correspond a une donnée du champs annonce_don pour voir les différentes données
                        //allé voir le code source de la page(value correspond au element de la liste déroulante donc si cliche sur Don, on rentre dans ce if)
   {
\t   
      b.style.visibility='hidden'; //on cache la visibilité
      b.style.display='none'; // Permet de masquer l'affichage du bloc
\t  c.style.visibility='hidden'; //on cache la visibilité
      c.style.display='none'; // Permet de masquer l'affichage du bloc
   }
   else
   {
      b.style.visibility='visible '; //le rend visible
      b.style.display='block'; //re affiche le bloc de l'element par rapport a son id (annonce_prix) récupéré dans la var b
      c.style.visibility='visible '; //le rend visible
      c.style.display='block'; //re affiche le bloc de l'element par rapport a son id (annonce_prix) récupéré dans la var b

   }
}

  
    
   // alert(document.getElementById(\"rechercher_annonce_don\").name);
//document.getElementById(\"annonce_don\").addEventListener(\"change\",function(){alert('hello');});

//document.getElementById(\"annonce_don\").addEventListener(\"change\", CacherPrix); 
//                                    OU
addEventListener(\"change\", CacherPrix); //event lancé quand on change la valeur de la liste déroulante, les traitements sont fait via l'appel de la fonction CacherPrix
    

    </script>
    
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "recherche/rechercheAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 76,  222 => 75,  211 => 119,  209 => 75,  200 => 68,  191 => 64,  175 => 54,  171 => 53,  164 => 49,  160 => 48,  152 => 43,  148 => 42,  145 => 41,  137 => 38,  131 => 35,  127 => 34,  123 => 33,  116 => 29,  113 => 28,  108 => 27,  102 => 23,  98 => 21,  96 => 20,  93 => 19,  91 => 18,  81 => 11,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container bordure\" style=\"text-align:center\">


 {{ form_start(form_recherche) }}


  {{ form_end(form_recherche) }}


</div>

        <div class=\"container\">
          
            {% if app.request.method == 'POST' %}
      
            {% if searchAnnonces | length == 0 %}
            <h1 class=\"my-3\">Aucun résultat pour votre recherche</h1>
            {% else %}
            <h1 class=\"my-3\">Résultat de la recherche</h1>


          <div class=\"row\">
          {% for searchAnnonce in searchAnnonces %} {# boucle for permettant de boucler sur les résultats récupéré dans la variable searchAnnonces via le select dans le repositoryAnnonce et lancé dans le controller  #}
      
          {% set lienVersAnnonce = path('afficherAnnonce', {'slug':searchAnnonce.adresse}) %} <!--Constant permettant de ne pas repeter ce chemin a indiquer dans les 3 liens en dessous-->

            <div class =\"col-md-4 mb-3\">
              <div class=\"card\">
              {% if searchAnnonce.don == 'Vente' %} <!--changement d'affichage selon la vente ou le don-->
                <div class=\"card-header text-center\">Un chat de la race <strong>{{searchAnnonce.race}}</strong>
                au prix de <strong>{{searchAnnonce.prix}}</strong> euros
                </div>
                {% else %}
            <div class=\"card-header text-center\">Un chat de la race <strong>{{searchAnnonce.race}}</strong>
            a <strong>donner</strong>
                </div>
              {% endif %}\t
                <a href=\"{{lienVersAnnonce}}\"> <!--Ici on rend l'image cliquable et sa renvoi sur l'annonce (constante lienVersAnnonce)-->
                <img src= \"{{searchAnnonce.coverImage}}\" alt=\"Image du chat\" style=\"height:200px; width:100%; display:block\"><!--on bloque les images a une taille par défaut-->
              <!--<a> est un lien et le href vers le chemin de la route sous le nom \"afficherAnnonce\" avec comme parametre du slug, le slug de l'annonce(correspond au champ adresse de la table annonce)-->
            </a>
              <div class=\"card-body\">
                <h4 class = \"card-title\">
                <a href=\"{{lienVersAnnonce}}\"> <!--pareil ici on rend le titre cliquable et redirigant vers l'annonce-->
                  {{searchAnnonce.titre}}
                </a>\t
                </h4>
                <p class=\"card-text\">
                <a href=\"{{lienVersAnnonce}}\"><!--pareil ici on rend l'intro cliquable et redirigant vers l'annonce-->
                  {{searchAnnonce.introduction}}
                </a>\t
                </p>
              </div>
              <div class=\"card-footer\">
                <a href=\"#\" class=\"btn btn-primary\">En savoir plus</a>
              </div>
              </div>
            </div>
            {% endfor %}
            {% endif %}  
                
            </div>
          </div>
          {% endif %}  
        </div>
   
</div>


 
{% block javascript %}

<script>
  

function CacherPrix(){ //permet de cacher les prix mini et maxi quand on passe sur don

\t
    var b=document.getElementById(\"rechercher_annonce_Prix_mini\");
\tvar c=document.getElementById(\"rechercher_annonce_Prix_maximum\");
    var a = document.getElementById(\"rechercher_annonce_don\");

   if(a.value == \"Don\") //a.value correspond a une donnée du champs annonce_don pour voir les différentes données
                        //allé voir le code source de la page(value correspond au element de la liste déroulante donc si cliche sur Don, on rentre dans ce if)
   {
\t   
      b.style.visibility='hidden'; //on cache la visibilité
      b.style.display='none'; // Permet de masquer l'affichage du bloc
\t  c.style.visibility='hidden'; //on cache la visibilité
      c.style.display='none'; // Permet de masquer l'affichage du bloc
   }
   else
   {
      b.style.visibility='visible '; //le rend visible
      b.style.display='block'; //re affiche le bloc de l'element par rapport a son id (annonce_prix) récupéré dans la var b
      c.style.visibility='visible '; //le rend visible
      c.style.display='block'; //re affiche le bloc de l'element par rapport a son id (annonce_prix) récupéré dans la var b

   }
}

  
    
   // alert(document.getElementById(\"rechercher_annonce_don\").name);
//document.getElementById(\"annonce_don\").addEventListener(\"change\",function(){alert('hello');});

//document.getElementById(\"annonce_don\").addEventListener(\"change\", CacherPrix); 
//                                    OU
addEventListener(\"change\", CacherPrix); //event lancé quand on change la valeur de la liste déroulante, les traitements sont fait via l'appel de la fonction CacherPrix
    

    </script>
    
    {% endblock %}

{% endblock %}

", "recherche/rechercheAnnonce.html.twig", "C:\\Users\\Bobo\\ProjetChat\\templates\\recherche\\rechercheAnnonce.html.twig");
    }
}

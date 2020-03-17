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

/* annonce/affichageAnnonce.html.twig */
class __TwigTemplate_6b815675972c9892ad397d896bfffe7bffe49fa135aebe393d77b76733d48ea8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/affichageAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/affichageAnnonce.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce/affichageAnnonce.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<body>

    <div class=\"annonce-title\" style=\"background-image: url(";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 10, $this->source); })()), "coverImage", [], "any", false, false, false, 10), "html", null, true);
        echo ")\">
        <div class=\"container\" >
              <h1>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 12, $this->source); })()), "titre", [], "any", false, false, false, 12), "html", null, true);
        echo "</h1>
              <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 13, $this->source); })()), "introduction", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>

            ";
        // line 15
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 15, $this->source); })()), "don", [], "any", false, false, false, 15), "Vente")) {
            // line 16
            echo "                  <p class =\"h2\">
            Un chat de la <strong>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 17, $this->source); })()), "race", [], "any", false, false, false, 17), "html", null, true);
            echo "</strong>
                au prix de <strong>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), "html", null, true);
            echo "</strong> euros
                  </p>
            ";
        } else {
            // line 21
            echo "                  <p class =\"h2\">
            Un chat de la race <strong>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 22, $this->source); })()), "race", [], "any", false, false, false, 22), "html", null, true);
            echo "</strong>
                a <strong>donner</strong>
                  </p>
            ";
        }
        // line 26
        echo "
            ";
        // line 27
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 27, $this->source); })()), "don", [], "any", false, false, false, 27), "Vente")) {
            // line 28
            echo "                <a href=\"#\" class=\"btn btn-primary\">Acheter</a>
            ";
        } else {
            // line 30
            echo "                <a href=\"#\" class=\"btn btn-primary\">Réserver le don</a>
            ";
        }
        // line 32
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 32, $this->source); })()), "auteur", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32))) {
            echo " ";
            // line 33
            echo "            <!--Bouton redirigeant vers la modification de l'annonce-->
                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formulaire_editer_annonce", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 34, $this->source); })()), "adresse", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier Annonce</a>
            <!--Bouton permettant la suppresion de l'annonce-->
                <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("SuppressionAnnonce", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 36, $this->source); })()), "adresse", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Supprimer Annonce</a>
            ";
        }
        // line 38
        echo "        </div>
      </div>

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-8 mb-3\">
                  <div class=\"sautLigne\"><p >";
        // line 46
        echo twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 46, $this->source); })()), "contenu", [], "any", false, false, false, 46);
        echo "</p>
                  </div>
                  
                  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 51, $this->source); })()), "imagess", [], "any", false, false, false, 51));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 52
            echo "                      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 52), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 52)) {
                echo "class=\"active\"";
            }
            echo "></li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </ol>
          <div class=\"carousel-inner\">
              ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 56, $this->source); })()), "imagess", [], "any", false, false, false, 56));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " <!--Liaison entre table annonce et image permet d'afficher toutes les photos de l'annonce-->
            <div class=\"carousel-item ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 57)) {
                echo " active ";
            }
            echo "\"> <!--Ici cocnernant notre boucle, si c'est la premiere fois qu'on rentre dans la boucle on mettra active (occurence)-->
              <img class=\"d-block w-100\" src=";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 58), "html", null, true);
            echo " alt=\"First slide\">
              <div class=\"carousel-caption d-none d-md-block\">
            <h5>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 60, $this->source); })()), "titre", [], "any", false, false, false, 60), "html", null, true);
            echo "</h5> <!--le for permet de récupérer chaque info de l'image lié a l'annonce-->
            <p>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "caption", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>
          </div> 
            </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "          <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>
        </div>
            </div>
            <div class=\"col-md-4 mb-3 sautLigne\">
                <div class=\"row mb-3 align-items-center\">
                    <div class=\"col-3\">
                      <a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_utilisateur", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 79, $this->source); })()), "auteur", [], "any", false, false, false, 79), "slug", [], "any", false, false, false, 79)]), "html", null, true);
        echo "\">
                        ";
        // line 81
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 81, $this->source); })()), "auteur", [], "any", false, false, false, 81), "avatar", [], "any", false, false, false, 81), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 81, $this->source); })()), "auteur", [], "any", false, false, false, 81), "nomEnEntier", [], "any", false, false, false, 81), "html", null, true);
        echo "\">
                      </a>
                    </div>
                  <div class=\"col\">
                    <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page_utilisateur", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 85, $this->source); })()), "auteur", [], "any", false, false, false, 85), "slug", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\">
                        <h3>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 86, $this->source); })()), "auteur", [], "any", false, false, false, 86), "nomEnEntier", [], "any", false, false, false, 86), "html", null, true);
        echo "</h3>
                      <span class=\"badge badge-primary\">";
        // line 87
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 87, $this->source); })()), "auteur", [], "any", false, false, false, 87), "annonces", [], "any", false, false, false, 87)), "html", null, true);
        echo " annonce(s)</span> ";
        // line 88
        echo "                    </a>
                  </div>
                </div>
                ";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 91, $this->source); })()), "auteur", [], "any", false, false, false, 91), "description", [], "any", false, false, false, 91);
        echo " ";
        // line 92
        echo "            </div>
      </div>
</div>

</body>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/affichageAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 92,  300 => 91,  295 => 88,  292 => 87,  288 => 86,  284 => 85,  274 => 81,  270 => 79,  254 => 65,  236 => 61,  232 => 60,  227 => 58,  221 => 57,  202 => 56,  198 => 54,  177 => 52,  160 => 51,  152 => 46,  142 => 38,  137 => 36,  132 => 34,  129 => 33,  125 => 32,  121 => 30,  117 => 28,  115 => 27,  112 => 26,  105 => 22,  102 => 21,  96 => 18,  92 => 17,  89 => 16,  87 => 15,  82 => 13,  78 => 12,  73 => 10,  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("        {% extends 'base.html.twig' %}




        {% block body %}

<body>

    <div class=\"annonce-title\" style=\"background-image: url({{annonce.coverImage}})\">
        <div class=\"container\" >
              <h1>{{annonce.titre}}</h1>
              <p>{{annonce.introduction}}</p>

            {% if annonce.don == 'Vente' %}
                  <p class =\"h2\">
            Un chat de la <strong>{{annonce.race}}</strong>
                au prix de <strong>{{annonce.prix}}</strong> euros
                  </p>
            {% else %}
                  <p class =\"h2\">
            Un chat de la race <strong>{{annonce.race}}</strong>
                a <strong>donner</strong>
                  </p>
            {% endif %}

            {% if annonce.don == 'Vente' %}
                <a href=\"#\" class=\"btn btn-primary\">Acheter</a>
            {% else %}
                <a href=\"#\" class=\"btn btn-primary\">Réserver le don</a>
            {% endif %}
            {% if annonce.auteur.id is same as(app.user.id) %} {# Si l'id du user qui a créé l'annonce est le meme que le user connecté actuellement alors on affiche les deux boutons sinon non #}
            <!--Bouton redirigeant vers la modification de l'annonce-->
                <a href=\"{{path ('formulaire_editer_annonce', {'slug':annonce.adresse}) }}\" class=\"btn btn-primary\">Modifier Annonce</a>
            <!--Bouton permettant la suppresion de l'annonce-->
                <a href=\"{{path ('SuppressionAnnonce', {'slug':annonce.adresse}) }}\" class=\"btn btn-primary\">Supprimer Annonce</a>
            {% endif %}
        </div>
      </div>

        <div class=\"container\">

            <div class=\"row\">

                <div class=\"col-md-8 mb-3\">
                  <div class=\"sautLigne\"><p >{{annonce.contenu | raw}}</p>
                  </div>
                  
                  <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                    <ol class=\"carousel-indicators\">
                    {% for image in annonce.imagess %}
                      <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"{{loop.index0}}\" {% if loop.first %}class=\"active\"{% endif %}></li>
                    {% endfor %}
                    </ol>
          <div class=\"carousel-inner\">
              {% for image in annonce.imagess %} <!--Liaison entre table annonce et image permet d'afficher toutes les photos de l'annonce-->
            <div class=\"carousel-item {% if loop.first %} active {% endif %}\"> <!--Ici cocnernant notre boucle, si c'est la premiere fois qu'on rentre dans la boucle on mettra active (occurence)-->
              <img class=\"d-block w-100\" src={{image.url}} alt=\"First slide\">
              <div class=\"carousel-caption d-none d-md-block\">
            <h5>{{annonce.titre}}</h5> <!--le for permet de récupérer chaque info de l'image lié a l'annonce-->
            <p>{{image.caption}}</p>
          </div> 
            </div>
          {% endfor %}
          <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>
        </div>
            </div>
            <div class=\"col-md-4 mb-3 sautLigne\">
                <div class=\"row mb-3 align-items-center\">
                    <div class=\"col-3\">
                      <a href=\"{{path ('page_utilisateur', {'slug':annonce.auteur.slug}) }}\">
                        {# annonce.auteur permet d'etre lié aux attributs de la table user car c'est la clé étrangere #}
                        <img src=\"{{annonce.auteur.avatar}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{annonce.auteur.nomEnEntier}}\">
                      </a>
                    </div>
                  <div class=\"col\">
                    <a href=\"{{path ('page_utilisateur', {'slug':annonce.auteur.slug}) }}\">
                        <h3>{{annonce.auteur.nomEnEntier}}</h3>
                      <span class=\"badge badge-primary\">{{ annonce.auteur.annonces | length }} annonce(s)</span> {# On va récupérer le nombre d'annonce via le filtre twig lenght #}
                    </a>
                  </div>
                </div>
                {{ annonce.auteur.description | raw }} {# le filtre raw va permettre d'afficher le texte brut en comptant les balises html s'il y en a  #}
            </div>
      </div>
</div>

</body>
        {% endblock %}
", "annonce/affichageAnnonce.html.twig", "C:\\Users\\Bobo\\CatFinder\\templates\\annonce\\affichageAnnonce.html.twig");
    }
}

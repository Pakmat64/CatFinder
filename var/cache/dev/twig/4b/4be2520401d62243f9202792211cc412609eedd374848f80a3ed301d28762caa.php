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

/* annonce/affichageTypeAnnonce.html.twig */
class __TwigTemplate_8ba3a382883efcea8e586cb89b763bbead3c37ce19a75afb1c161172eb4a506f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/affichageTypeAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/affichageTypeAnnonce.html.twig"));

        // line 1
        echo "
";
        // line 5
        echo "
";
        // line 6
        $context["lienVersAnnonce"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherAnnonce", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 6, $this->source); })()), "adresse", [], "any", false, false, false, 6)]);
        echo " <!--Constant permettant de ne pas repeter ce chemin a indiquer dans les 3 liens en dessous-->

                <div class =\"col-md-4 mb-3\">
                    <div class=\"card\">
                    ";
        // line 10
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 10, $this->source); })()), "don", [], "any", false, false, false, 10), "Vente")) {
            echo " <!--changement d'affichage selon la vente ou le don-->
                        <div class=\"card-header text-center\">Un chat de la race <strong>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 11, $this->source); })()), "race", [], "any", false, false, false, 11), "html", null, true);
            echo "</strong>
                        au prix de <strong>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 12, $this->source); })()), "prix", [], "any", false, false, false, 12), "html", null, true);
            echo "</strong> euros
                        </div>
                    ";
        } else {
            // line 15
            echo "                <div class=\"card-header text-center\">Un chat de la race <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 15, $this->source); })()), "race", [], "any", false, false, false, 15), "html", null, true);
            echo "</strong>
                a <strong>donner</strong>
                        </div>
                    ";
        }
        // line 18
        echo "\t
                        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\"> <!--Ici on rend l'image cliquable et sa renvoi sur l'annonce (constante lienVersAnnonce)-->
                        <img src= \"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 20, $this->source); })()), "coverImage", [], "any", false, false, false, 20), "html", null, true);
        echo "\" alt=\"Image du chat\" style=\"height:200px; width:100%; display:block\"><!--on bloque les images a une taille par défaut-->
                <!--<a> est un lien et le href vers le chemin de la route sous le nom \"afficherAnnonce\" avec comme parametre du slug, le slug de l'annonce(correspond au champ adresse de la table annonce)-->
                </a>
                    <div class=\"card-body\">
                        <h4 class = \"card-title\">
                        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\"> <!--pareil ici on rend le titre cliquable et redirigant vers l'annonce-->
                            ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), "html", null, true);
        echo "
                        </a>\t
                        </h4>
                        <p class=\"card-text\">
                        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"><!--pareil ici on rend l'intro cliquable et redirigant vers l'annonce-->
                            ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 31, $this->source); })()), "introduction", [], "any", false, false, false, 31), "html", null, true);
        echo "
                        </a>\t
                        </p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                    </div>
                </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "annonce/affichageTypeAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 36,  108 => 31,  104 => 30,  97 => 26,  93 => 25,  85 => 20,  81 => 19,  78 => 18,  70 => 15,  64 => 12,  60 => 11,  56 => 10,  49 => 6,  46 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{# Ce fichier va permettre de ne pas duppliquer le code qui le contient car on l'utilise dans 
le template main annonce et le template pageUtilisateur donc ca va eviter la dupication, facilite
le changement du code, au lieu de changer sur chaque page, on modifie juste ici.#}

{% set lienVersAnnonce = path('afficherAnnonce', {'slug':annonce.adresse}) %} <!--Constant permettant de ne pas repeter ce chemin a indiquer dans les 3 liens en dessous-->

                <div class =\"col-md-4 mb-3\">
                    <div class=\"card\">
                    {% if annonce.don == 'Vente' %} <!--changement d'affichage selon la vente ou le don-->
                        <div class=\"card-header text-center\">Un chat de la race <strong>{{annonce.race}}</strong>
                        au prix de <strong>{{annonce.prix}}</strong> euros
                        </div>
                    {% else %}
                <div class=\"card-header text-center\">Un chat de la race <strong>{{annonce.race}}</strong>
                a <strong>donner</strong>
                        </div>
                    {% endif %}\t
                        <a href=\"{{lienVersAnnonce}}\"> <!--Ici on rend l'image cliquable et sa renvoi sur l'annonce (constante lienVersAnnonce)-->
                        <img src= \"{{annonce.coverImage}}\" alt=\"Image du chat\" style=\"height:200px; width:100%; display:block\"><!--on bloque les images a une taille par défaut-->
                <!--<a> est un lien et le href vers le chemin de la route sous le nom \"afficherAnnonce\" avec comme parametre du slug, le slug de l'annonce(correspond au champ adresse de la table annonce)-->
                </a>
                    <div class=\"card-body\">
                        <h4 class = \"card-title\">
                        <a href=\"{{lienVersAnnonce}}\"> <!--pareil ici on rend le titre cliquable et redirigant vers l'annonce-->
                            {{annonce.titre}}
                        </a>\t
                        </h4>
                        <p class=\"card-text\">
                        <a href=\"{{lienVersAnnonce}}\"><!--pareil ici on rend l'intro cliquable et redirigant vers l'annonce-->
                            {{annonce.introduction}}
                        </a>\t
                        </p>
                    </div>
                    <div class=\"card-footer\">
                        <a href=\"{{lienVersAnnonce}}\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                    </div>
                </div>", "annonce/affichageTypeAnnonce.html.twig", "C:\\Users\\Bobo\\ProjetChat\\templates\\annonce\\affichageTypeAnnonce.html.twig");
    }
}

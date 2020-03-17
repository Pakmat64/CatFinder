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

/* annonce/index.html.twig */
class __TwigTemplate_304fa958eb405a0b081af2a9206e07fc016acce76716ecbc097bcccde732c2f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annonce/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Nos magnifiques annonces";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
<h1 class=\"my-3\">Voici les annonces de nos clients :</h1>

<div class=\"row\">

";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 12
            $context["lienVersAnnonce"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherAnnonce", ["slug" => twig_get_attribute($this->env, $this->source, $context["annonce"], "adresse", [], "any", false, false, false, 12)]);
            echo " <!--Constant permettant de ne pas repeter ce chemin a indiquer dans les 3 liens en dessous-->

<div class =\"col-md-4 mb-3\">
\t<div class=\"card\">
\t\t<div class=\"card-header text-center\">Un chat de la <strong>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "race", [], "any", false, false, false, 16), "html", null, true);
            echo "</strong>
\t\tau prix de <strong>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "prix", [], "any", false, false, false, 17), "html", null, true);
            echo "</strong> euros
\t\t</div>
\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\"> <!--Ici on rend l'image cliquable et sa renvoi sur l'annonce-->
\t\t<img src= \"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "coverImage", [], "any", false, false, false, 20), "html", null, true);
            echo "\" alt=\"Image du chat\" style=\"height:200px; width:100%; display:block\"><!--on bloque les images a une taille par défaut-->
  <!--<a> est un lien et le href vers le chemin de la route sous le nom \"afficherAnnonce\" avec comme parametre du slug, le slug de l'annonce(correspond au champ adresse de la table annonce)-->
</a>
\t<div class=\"card-body\">
\t\t<h4 class = \"card-title\">
\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "\"> <!--pareil ici on rend le titre cliquable et redirigant vers l'annonce-->
\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 26), "html", null, true);
            echo "
\t\t</a>\t
\t\t</h4>
\t\t<p class=\"card-text\">
\t\t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["lienVersAnnonce"]) || array_key_exists("lienVersAnnonce", $context) ? $context["lienVersAnnonce"] : (function () { throw new RuntimeError('Variable "lienVersAnnonce" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\"><!--pareil ici on rend l'intro cliquable et redirigant vers l'annonce-->
\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "introduction", [], "any", false, false, false, 31), "html", null, true);
            echo "
\t\t</a>\t
\t\t</p>
\t</div>
\t<div class=\"card-footer\">
\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir plus</a>
\t</div>
\t</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "<div>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 41,  142 => 31,  138 => 30,  131 => 26,  127 => 25,  119 => 20,  115 => 19,  110 => 17,  106 => 16,  99 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos magnifiques annonces{% endblock %}

{% block body %}
<div class=\"container\">
<h1 class=\"my-3\">Voici les annonces de nos clients :</h1>

<div class=\"row\">

{% for annonce in annonces %}
{% set lienVersAnnonce = path('afficherAnnonce', {'slug':annonce.adresse}) %} <!--Constant permettant de ne pas repeter ce chemin a indiquer dans les 3 liens en dessous-->

<div class =\"col-md-4 mb-3\">
\t<div class=\"card\">
\t\t<div class=\"card-header text-center\">Un chat de la <strong>{{annonce.race}}</strong>
\t\tau prix de <strong>{{annonce.prix}}</strong> euros
\t\t</div>
\t\t<a href=\"{{lienVersAnnonce}}\"> <!--Ici on rend l'image cliquable et sa renvoi sur l'annonce-->
\t\t<img src= \"{{annonce.coverImage}}\" alt=\"Image du chat\" style=\"height:200px; width:100%; display:block\"><!--on bloque les images a une taille par défaut-->
  <!--<a> est un lien et le href vers le chemin de la route sous le nom \"afficherAnnonce\" avec comme parametre du slug, le slug de l'annonce(correspond au champ adresse de la table annonce)-->
</a>
\t<div class=\"card-body\">
\t\t<h4 class = \"card-title\">
\t\t<a href=\"{{lienVersAnnonce}}\"> <!--pareil ici on rend le titre cliquable et redirigant vers l'annonce-->
\t\t\t{{annonce.titre}}
\t\t</a>\t
\t\t</h4>
\t\t<p class=\"card-text\">
\t\t<a href=\"{{lienVersAnnonce}}\"><!--pareil ici on rend l'intro cliquable et redirigant vers l'annonce-->
\t\t\t{{annonce.introduction}}
\t\t</a>\t
\t\t</p>
\t</div>
\t<div class=\"card-footer\">
\t\t<a href=\"#\" class=\"btn btn-primary\">En savoir plus</a>
\t</div>
\t</div>
</div>
{% endfor %}
<div>

</div>


{% endblock %}
", "annonce/index.html.twig", "C:\\Users\\Bobo\\ProjetChat\\templates\\annonce\\index.html.twig");
    }
}

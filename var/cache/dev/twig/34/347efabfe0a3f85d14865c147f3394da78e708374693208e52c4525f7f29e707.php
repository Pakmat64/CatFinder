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

/* liste_race/raceChatU.html.twig */
class __TwigTemplate_d0181a77a3f3b9113e12fa2ee5b2b5dcf159af73c29efb1a97d00fbce5da9c68 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_race/raceChatU.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste_race/raceChatU.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste_race/raceChatU.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container\">
    <div class=\"row\" >

         <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_A");
        echo "\" class=\"btn btn-primary\">A</a>
        <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_B");
        echo "\" class=\"btn btn-primary\">B</a>
        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_C");
        echo "\" class=\"btn btn-primary\">C</a>
        <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_D");
        echo "\" class=\"btn btn-primary\">D</a>
        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_E");
        echo "\" class=\"btn btn-primary\">E</a>
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_F");
        echo "\" class=\"btn btn-primary\">F</a>
        <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_G");
        echo "\" class=\"btn btn-primary\">G</a>
        <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_H");
        echo "\" class=\"btn btn-primary\">H</a>
        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_I");
        echo "\" class=\"btn btn-primary\">I</a>
        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_J");
        echo "\" class=\"btn btn-primary\">J</a>
        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_K");
        echo "\" class=\"btn btn-primary\">K</a>
        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_L");
        echo "\" class=\"btn btn-primary\">L</a>
        <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_M");
        echo "\" class=\"btn btn-primary\">M</a>
        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_N");
        echo "\" class=\"btn btn-primary\">N</a>
        <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_O");
        echo "\" class=\"btn btn-primary\">O</a>
        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_P");
        echo "\" class=\"btn btn-primary\">P</a>
        <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_Q");
        echo "\" class=\"btn btn-primary\">Q</a>
        <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_R");
        echo "\" class=\"btn btn-primary\">R</a>
        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_S");
        echo "\" class=\"btn btn-primary\">S</a>
        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_T");
        echo "\"class=\"btn btn-primary\">T</a>
        <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_U");
        echo "\" class=\"btn btn-primary\">U</a>
        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_V");
        echo "\" class=\"btn btn-primary\">V</a>
        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_W");
        echo "\" class=\"btn btn-primary\">W</a>
        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_X");
        echo "\" class=\"btn btn-primary\">X</a>
        <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_Y");
        echo "\" class=\"btn btn-primary\">Y</a>
        <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("liste_race_Z");
        echo "\" class=\"btn btn-primary\">Z</a>

    </div>
</div>

    <div class=\"container\">
        <h1 class=\"my-3\">Voici les races de chats :</h1>

           ";
        // line 42
        if (0 === twig_compare(twig_length_filter($this->env, (isset($context["racesU"]) || array_key_exists("racesU", $context) ? $context["racesU"] : (function () { throw new RuntimeError('Variable "racesU" does not exist.', 42, $this->source); })())), 0)) {
            // line 43
            echo "        
            <h1 class=\"my-3\">Aucun résultat pour votre recherche</h1>
            ";
        } else {
            // line 46
            echo "
            <div class=\"row\">

            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["racesU"]) || array_key_exists("racesU", $context) ? $context["racesU"] : (function () { throw new RuntimeError('Variable "racesU" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["raceU"]) {
                // line 50
                echo "
                <div class =\"col-md-4 mb-3\">
\t                <div class=\"card border-dark mb-3\">
\t\t                <div class=\"card-header text-center\"><strong>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raceU"], "libelle", [], "any", false, false, false, 53), "html", null, true);
                echo "</strong>
\t\t                </div>
                            <div class=\"card-body\">
\t\t                       <img src= \"";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["raceU"], "urlImage", [], "any", false, false, false, 56), "html", null, true);
                echo "\" alt=\"Image de chat\" style=\"height:200px; width:100%; display:block\">\t
                            </div>                     
                    </div>
                 </div>   
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raceU'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            </div>
            ";
        }
        // line 63
        echo "    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "liste_race/raceChatU.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 63,  223 => 61,  212 => 56,  206 => 53,  201 => 50,  197 => 49,  192 => 46,  187 => 43,  185 => 42,  174 => 34,  170 => 33,  166 => 32,  162 => 31,  158 => 30,  154 => 29,  150 => 28,  146 => 27,  142 => 26,  138 => 25,  134 => 24,  130 => 23,  126 => 22,  122 => 21,  118 => 20,  114 => 19,  110 => 18,  106 => 17,  102 => 16,  98 => 15,  94 => 14,  90 => 13,  86 => 12,  82 => 11,  78 => 10,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"container\">
    <div class=\"row\" >

         <a href=\"{{path ('liste_race_A')}}\" class=\"btn btn-primary\">A</a>
        <a href=\"{{path ('liste_race_B')}}\" class=\"btn btn-primary\">B</a>
        <a href=\"{{path ('liste_race_C')}}\" class=\"btn btn-primary\">C</a>
        <a href=\"{{path ('liste_race_D')}}\" class=\"btn btn-primary\">D</a>
        <a href=\"{{path ('liste_race_E')}}\" class=\"btn btn-primary\">E</a>
        <a href=\"{{path ('liste_race_F')}}\" class=\"btn btn-primary\">F</a>
        <a href=\"{{path ('liste_race_G')}}\" class=\"btn btn-primary\">G</a>
        <a href=\"{{path ('liste_race_H')}}\" class=\"btn btn-primary\">H</a>
        <a href=\"{{path ('liste_race_I')}}\" class=\"btn btn-primary\">I</a>
        <a href=\"{{path ('liste_race_J')}}\" class=\"btn btn-primary\">J</a>
        <a href=\"{{path ('liste_race_K')}}\" class=\"btn btn-primary\">K</a>
        <a href=\"{{path ('liste_race_L')}}\" class=\"btn btn-primary\">L</a>
        <a href=\"{{path ('liste_race_M')}}\" class=\"btn btn-primary\">M</a>
        <a href=\"{{path ('liste_race_N')}}\" class=\"btn btn-primary\">N</a>
        <a href=\"{{path ('liste_race_O')}}\" class=\"btn btn-primary\">O</a>
        <a href=\"{{path ('liste_race_P')}}\" class=\"btn btn-primary\">P</a>
        <a href=\"{{path ('liste_race_Q')}}\" class=\"btn btn-primary\">Q</a>
        <a href=\"{{path ('liste_race_R')}}\" class=\"btn btn-primary\">R</a>
        <a href=\"{{path ('liste_race_S')}}\" class=\"btn btn-primary\">S</a>
        <a href=\"{{path ('liste_race_T')}}\"class=\"btn btn-primary\">T</a>
        <a href=\"{{path ('liste_race_U')}}\" class=\"btn btn-primary\">U</a>
        <a href=\"{{path ('liste_race_V')}}\" class=\"btn btn-primary\">V</a>
        <a href=\"{{path ('liste_race_W')}}\" class=\"btn btn-primary\">W</a>
        <a href=\"{{path ('liste_race_X')}}\" class=\"btn btn-primary\">X</a>
        <a href=\"{{path ('liste_race_Y')}}\" class=\"btn btn-primary\">Y</a>
        <a href=\"{{path ('liste_race_Z')}}\" class=\"btn btn-primary\">Z</a>

    </div>
</div>

    <div class=\"container\">
        <h1 class=\"my-3\">Voici les races de chats :</h1>

           {% if racesU | length == 0 %}
        
            <h1 class=\"my-3\">Aucun résultat pour votre recherche</h1>
            {% else %}

            <div class=\"row\">

            {% for raceU in racesU %}

                <div class =\"col-md-4 mb-3\">
\t                <div class=\"card border-dark mb-3\">
\t\t                <div class=\"card-header text-center\"><strong>{{raceU.libelle}}</strong>
\t\t                </div>
                            <div class=\"card-body\">
\t\t                       <img src= \"{{raceU.urlImage}}\" alt=\"Image de chat\" style=\"height:200px; width:100%; display:block\">\t
                            </div>                     
                    </div>
                 </div>   
            {% endfor %}
            </div>
            {% endif %}
    </div>
</div>

{% endblock %}
", "liste_race/raceChatU.html.twig", "C:\\Users\\Bobo\\ProjetChat\\templates\\liste_race\\raceChatU.html.twig");
    }
}

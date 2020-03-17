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

/* user/pageUtilisateur.html.twig */
class __TwigTemplate_8f7187f728747a5aeb213094d0e6de91cbd2e00a664f21f1ac8a053d9fd25807 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pageUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/pageUtilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/pageUtilisateur.html.twig", 1);
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
    <div class=\"row align-items-center\">
        <div class=\"col-3 text-center\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "avatar", [], "any", false, false, false, 9), "html", null, true);
        echo "\" class=\"avatar avatar-medium\" alt=\"Avatar de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "nomEnEntier", [], "any", false, false, false, 9), "html", null, true);
        echo "\">
            <br>
            <h4><span class=\"badge badge-primary\">";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "annonces", [], "any", false, false, false, 11)), "html", null, true);
        echo " annonce(s)</span></h4>
        </div>
        <div class=\"col-9\">
         <h1>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "nomEnEntier", [], "any", false, false, false, 14), "html", null, true);
        echo "</h1>
         ";
        // line 15
        if (((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()) === twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15))) {
            echo " ";
            // line 16
            echo "            <div class=\"mt-3\"> ";
            // line 17
            echo "             <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editer_profil");
            echo "\" class=\"btn btn-primary mr-2 mb-2\">Modifier mes informations</a>
             <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editer_password");
            echo "\" class=\"btn btn-primary mr-2 mb-2\">Modifier mon mot de passe</a>
            </div>
        ";
        }
        // line 21
        echo "      </div>
    </div>


    ";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25);
        echo "
    
    <hr>

    <h2>Les annonces de ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 29, $this->source); })()), "nomEnEntier", [], "any", false, false, false, 29), "html", null, true);
        echo "</h2>

    ";
        // line 31
        if (1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "annonces", [], "any", false, false, false, 31)), 0)) {
            // line 32
            echo "    <div class=\"row\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "annonces", [], "any", false, false, false, 33));
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
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 34
                echo "
            ";
                // line 37
                echo "            ";
                $this->loadTemplate("annonce/affichageTypeAnnonce.html.twig", "user/pageUtilisateur.html.twig", 37)->display($context);
                // line 38
                echo "                
    
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    </div>
    ";
        } else {
            // line 43
            echo "    <div class=\"alert alert-warning\">
        <p>
            <strong>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "nomEnEntier", [], "any", false, false, false, 45), "html", null, true);
            echo "</strong> n'a pas d'annonce actuellement !
        </p>
    </div>
    ";
        }
        // line 49
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/pageUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 49,  177 => 45,  173 => 43,  169 => 41,  153 => 38,  150 => 37,  147 => 34,  130 => 33,  127 => 32,  125 => 31,  120 => 29,  113 => 25,  107 => 21,  101 => 18,  96 => 17,  94 => 16,  91 => 15,  87 => 14,  81 => 11,  74 => 9,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"container\">
    <div class=\"row align-items-center\">
        <div class=\"col-3 text-center\">
            <img src=\"{{user.avatar}}\" class=\"avatar avatar-medium\" alt=\"Avatar de {{user.nomEnEntier}}\">
            <br>
            <h4><span class=\"badge badge-primary\">{{user.annonces | length }} annonce(s)</span></h4>
        </div>
        <div class=\"col-9\">
         <h1>{{user.nomEnEntier}}</h1>
         {% if user is same as(app.user) %} {# is same as permet de comparer 2 objets il compare l'utilisateur qu'on regarde son profil et l'user qui est actuellement connecté #}
            <div class=\"mt-3\"> {# Si les deux users correspondent alors on va afficher sa page avec des boutons supplémentaires permettant la modification de son profil #}
             <a href=\"{{path ('editer_profil')}}\" class=\"btn btn-primary mr-2 mb-2\">Modifier mes informations</a>
             <a href=\"{{path ('editer_password')}}\" class=\"btn btn-primary mr-2 mb-2\">Modifier mon mot de passe</a>
            </div>
        {% endif %}
      </div>
    </div>


    {{ user.description | raw }}
    
    <hr>

    <h2>Les annonces de {{user.nomEnEntier}}</h2>

    {% if user.annonces | length > 0 %}
    <div class=\"row\">
        {% for annonce in user.annonces %}

            {# Donc on appelle ca l'inclusion permettant d'éviter de duppliquer une grande quanité de code
            dans plusieurs template différent #}
            {% include 'annonce/affichageTypeAnnonce.html.twig' %}
                
    
        {% endfor %}
    </div>
    {% else %}
    <div class=\"alert alert-warning\">
        <p>
            <strong>{{user.nomEnEntier}}</strong> n'a pas d'annonce actuellement !
        </p>
    </div>
    {% endif %}

</div>

{% endblock %}
", "user/pageUtilisateur.html.twig", "C:\\Users\\Bobo\\ProjetChat\\templates\\user\\pageUtilisateur.html.twig");
    }
}

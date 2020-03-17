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

/* hello.html.twig */
class __TwigTemplate_5b8939bcad92366d0639eeeb2061019660998337092f71887ea6b6ccda2ce9ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hello.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "hello.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "
    <!--début du carroussel-->
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"carousel slide\" id=\"carousel-820396\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li data-slide-to=\"0\" data-target=\"#carousel-820396\" class=\"active\">
\t\t\t\t\t</li>
\t\t\t\t\t<li data-slide-to=\"1\" data-target=\"#carousel-820396\">
\t\t\t\t\t</li>
\t\t\t\t\t<li data-slide-to=\"2\" data-target=\"#carousel-820396\">
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap First\" src=\"annonce chat.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tAnnonce
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t Le site née pour trouver son félin 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Second\" src=\"equipement chat.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tE-Commerce
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tUne rubrique pour rendre votre animal fou de vous
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Third\" src=\"forum chat.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tForum
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t Un endroit remplit de passionnés de nos félins
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <a class=\"carousel-control-prev\" href=\"#carousel-820396\" data-slide=\"prev\"><span class=\"carousel-control-prev-icon\"></span> <span class=\"sr-only\">Previous</span></a> <a class=\"carousel-control-next\" href=\"#carousel-820396\" data-slide=\"next\"><span class=\"carousel-control-next-icon\"></span> <span class=\"sr-only\">Next</span></a>
\t\t\t</div>
\t\t</div>
\t</div>

<!--Partie photo des créateurs-->
\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<h3 class=\"text-center\">
\t\t\t\tPako
\t\t\t</h3><img alt=\"Bootstrap Image Preview\" src=\"pako.jpg\" class=\"rounded-circle img1\"/>
\t\t\t<p class=\"text-center\">
\t\t\t<strong>Tout est objet</strong> \t</p>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h3 class=\"text-center\">
\t\t\tMomo
\t\t\t</h3><img alt=\"Bootstrap Image Preview\" src=\"momo.jpg\" class=\"rounded-circle img1\" />
\t\t\t<p class=\"text-center\">
\t\t\t\t <strong>L'homme mystérieux</strong>
         </p>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h3 class=\"text-center\">
\t\t\t\tStéfano
\t\t\t</h3><img alt=\"Bootstrap Image Preview\" src=\"stef.jpg\" class=\"rounded-circle img1\" />
\t\t\t<p class = \"text-center\">
\t\t\t<strong>Dumbo</strong>
      </p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig' %}



{% block body %}

    <!--début du carroussel-->
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"carousel slide\" id=\"carousel-820396\">
\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t<li data-slide-to=\"0\" data-target=\"#carousel-820396\" class=\"active\">
\t\t\t\t\t</li>
\t\t\t\t\t<li data-slide-to=\"1\" data-target=\"#carousel-820396\">
\t\t\t\t\t</li>
\t\t\t\t\t<li data-slide-to=\"2\" data-target=\"#carousel-820396\">
\t\t\t\t\t</li>
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap First\" src=\"annonce chat.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tAnnonce
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t Le site née pour trouver son félin 
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Second\" src=\"equipement chat.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tE-Commerce
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tUne rubrique pour rendre votre animal fou de vous
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Third\" src=\"forum chat.jpg\" />
\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\tForum
\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t Un endroit remplit de passionnés de nos félins
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <a class=\"carousel-control-prev\" href=\"#carousel-820396\" data-slide=\"prev\"><span class=\"carousel-control-prev-icon\"></span> <span class=\"sr-only\">Previous</span></a> <a class=\"carousel-control-next\" href=\"#carousel-820396\" data-slide=\"next\"><span class=\"carousel-control-next-icon\"></span> <span class=\"sr-only\">Next</span></a>
\t\t\t</div>
\t\t</div>
\t</div>

<!--Partie photo des créateurs-->
\t<div class=\"row\">
\t\t<div class=\"col-md-4\">
\t\t\t<h3 class=\"text-center\">
\t\t\t\tPako
\t\t\t</h3><img alt=\"Bootstrap Image Preview\" src=\"pako.jpg\" class=\"rounded-circle img1\"/>
\t\t\t<p class=\"text-center\">
\t\t\t<strong>Tout est objet</strong> \t</p>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h3 class=\"text-center\">
\t\t\tMomo
\t\t\t</h3><img alt=\"Bootstrap Image Preview\" src=\"momo.jpg\" class=\"rounded-circle img1\" />
\t\t\t<p class=\"text-center\">
\t\t\t\t <strong>L'homme mystérieux</strong>
         </p>
\t\t</div>
\t\t<div class=\"col-md-4\">
\t\t\t<h3 class=\"text-center\">
\t\t\t\tStéfano
\t\t\t</h3><img alt=\"Bootstrap Image Preview\" src=\"stef.jpg\" class=\"rounded-circle img1\" />
\t\t\t<p class = \"text-center\">
\t\t\t<strong>Dumbo</strong>
      </p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t</div>
\t</div>
</div>
{#
<div class = \"fixed-bottom\">
        <div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\">
                <button type=\"button\" class=\"btn btn-secondary\">1</button>
                <button type=\"button\" class=\"btn btn-secondary\">2</button>
                <button type=\"button\" class=\"btn btn-secondary\">3</button>
                <button type=\"button\" class=\"btn btn-secondary\">4</button>
            </div>
        </div>
</div>
#}
{% endblock %}", "hello.html.twig", "C:\\Users\\Bobo\\ProjetChat\\templates\\hello.html.twig");
    }
}

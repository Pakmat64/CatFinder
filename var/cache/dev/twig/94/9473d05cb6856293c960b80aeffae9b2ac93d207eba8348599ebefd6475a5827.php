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

/* home.html.twig */
class __TwigTemplate_844fb33cabbdbc6ceb267f6b5cc4e08692ac153d372e0c3d969146bf2b4f3264 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        echo "<body>
<div class=\"container\">
<!--Présentation du site-->
\t<div class=\"espaceTop\" >
\t\t<div class=\"row justify-content-center\">
\t\t\t\t<h1>Présentation du site</h1>
\t\t</div>
    <!--début du carroussel-->
\t\t\t<div class=\"container-fluid\" >
\t\t\t\t<div class=\"row espaceBot\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"carousel slide\" id=\"carousel-820396\">
\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t<li data-slide-to=\"0\" data-target=\"#carousel-820396\" class=\"active\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-slide-to=\"1\" data-target=\"#carousel-820396\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-slide-to=\"2\" data-target=\"#carousel-820396\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap First\" src=\"annonce chat.jpg\" />
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\tAnnonce
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLe site née pour trouver son félin 
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Second\" src=\"equipement chat.jpg\" />
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\tE-Commerce
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tUne rubrique pour rendre votre animal fou de vous
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Third\" src=\"forum chat.jpg\" />
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\tForum
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tUn endroit remplit de passionnés de nos félins
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Third\" src=\"connexion.jpg\" />
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\tForum
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tUn endroit remplit de passionnés de nos félins
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> <a class=\"carousel-control-prev\" href=\"#carousel-820396\" data-slide=\"prev\"><span class=\"carousel-control-prev-icon\"></span> <span class=\"sr-only\">Previous</span></a> <a class=\"carousel-control-next\" href=\"#carousel-820396\" data-slide=\"next\"><span class=\"carousel-control-next-icon\"></span> <span class=\"sr-only\">Next</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<hr> <!--permet de séparer les parties par un trait-->
<!--Partie nos valeurs -->
<div>
\t\t<div class=\"row  justify-content-center\">
\t\t<h1>Nos valeurs</h1>
\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"respectAnimaux.jpg\" class=\"rounded-circle  img1\"/>
\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<strong>Respect des animaux</strong></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"ecologie.jpg\" class=\"rounded-circle  img1\" />
\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t<strong>Ecologie</strong>
\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"securite.jpg\" class=\"rounded-circle  img1\" />
\t\t\t\t\t<p class = \"text-center\">
\t\t\t\t\t<strong>Sécurité</strong>
\t\t\t</p>
\t\t\t\t</div>
</div>
\t\t



<hr> <!--permet de séparer les parties par un trait-->
<!--Partie photo des créateurs-->
 <!--Premier créateur-->
<!-- Card Regular -->
<div>
\t<div class=\"row justify-content-center\">
\t\t\t<h1>Créateurs</h1>
\t</div>
\t<div class=\"row justify-content-center\"> <!--justify-content-center permet de centrer les colonnes d'une row-->
\t
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"card card-cascade arrondie\">

\t\t\t<!-- Card image -->
\t\t\t<div class=\"view view-cascade overlay\">
\t\t\t\t<img class=\"card-img-top arrondie\" src=\"pako.jpg\" alt=\"Pakito\">
\t\t\t\t<a>
\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Card content -->
\t\t\t<div class=\"card-body card-body-cascade text-center\">

\t\t\t\t\t\t\t<h4 class=\"card-title\"><strong>Pako Mathieu</strong></h4>
\t\t\t\t<!-- Subtitle -->
\t\t\t\t<h6 class=\"font-weight-bold indigo-text py-2\">Tout est objet</h6>

\t\t\t
\t\t\t\t<!-- Facebook -->
\t\t\t\t<a href=\"https://www.facebook.com/pako.mathieu\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
\t\t\t\t<!-- Twitter -->
\t\t\t\t";
        // line 140
        echo "\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
 <!--Deuxieme créateur-->
\t\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"card card-cascade arrondie\">

\t\t\t<!-- Card image -->
\t\t\t<div class=\"view view-cascade overlay\">
\t\t\t\t<img class=\"card-img-top arrondie\" src=\"momo.jpg\" alt=\"MOMO\">
\t\t\t\t<a>
\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Card content -->
\t\t\t<div class=\"card-body card-body-cascade text-center\">

\t\t\t\t\t\t\t<h4 class=\"card-title\"><strong>Mokhtar Bouniar</strong></h4>
\t\t\t\t<!-- Subtitle -->
\t\t\t\t<h6 class=\"font-weight-bold indigo-text py-2\">L'homme mystérieux</h6>

\t\t\t
\t\t\t\t<!-- Facebook -->
\t\t\t\t<a href=\"https://www.facebook.com/bmm.mokhtar\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
\t\t\t\t<!-- Twitter -->
\t\t\t\t";
        // line 169
        echo "\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--Troisieme créateur-->
\t\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"card card-cascade arrondie\">

\t\t\t<!-- Card image -->
\t\t\t<div class=\"view view-cascade overlay\">
\t\t\t\t<img class=\"card-img-top arrondie\" src=\"stef.jpg\" alt=\"Stéfano\">
\t\t\t\t<a>
\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Card content -->
\t\t\t<div class=\"card-body card-body-cascade text-center\">

\t\t\t\t\t\t\t<h4 class=\"card-title\"><strong>Stéfan Ménard</strong></h4>
\t\t\t\t<!-- Subtitle -->
\t\t\t\t<h6 class=\"font-weight-bold indigo-text py-2\">Dumbo</h6>

\t\t\t
\t\t\t\t<!-- Facebook -->
\t\t\t\t<a href=\"https://www.facebook.com/stefan.menard.5\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"facebook-squared\"></i></a>
\t\t\t\t<!-- Twitter -->
\t\t\t\t";
        // line 198
        echo "\t\t\t\t
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
</div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 198,  233 => 169,  203 => 140,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig' %}



{% block body %}
<body>
<div class=\"container\">
<!--Présentation du site-->
\t<div class=\"espaceTop\" >
\t\t<div class=\"row justify-content-center\">
\t\t\t\t<h1>Présentation du site</h1>
\t\t</div>
    <!--début du carroussel-->
\t\t\t<div class=\"container-fluid\" >
\t\t\t\t<div class=\"row espaceBot\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"carousel slide\" id=\"carousel-820396\">
\t\t\t\t\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t\t\t\t\t<li data-slide-to=\"0\" data-target=\"#carousel-820396\" class=\"active\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-slide-to=\"1\" data-target=\"#carousel-820396\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-slide-to=\"2\" data-target=\"#carousel-820396\">
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap First\" src=\"annonce chat.jpg\" />
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\tAnnonce
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tLe site née pour trouver son félin 
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Second\" src=\"equipement chat.jpg\" />
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\tE-Commerce
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tUne rubrique pour rendre votre animal fou de vous
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Third\" src=\"forum chat.jpg\" />
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\tForum
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tUn endroit remplit de passionnés de nos félins
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t\t\t\t<img class=\"d-block w-100\" alt=\"Carousel Bootstrap Third\" src=\"connexion.jpg\" />
\t\t\t\t\t\t\t\t\t<div class=\"carousel-caption\">
\t\t\t\t\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t\t\t\t\tForum
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tUn endroit remplit de passionnés de nos félins
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> <a class=\"carousel-control-prev\" href=\"#carousel-820396\" data-slide=\"prev\"><span class=\"carousel-control-prev-icon\"></span> <span class=\"sr-only\">Previous</span></a> <a class=\"carousel-control-next\" href=\"#carousel-820396\" data-slide=\"next\"><span class=\"carousel-control-next-icon\"></span> <span class=\"sr-only\">Next</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
<hr> <!--permet de séparer les parties par un trait-->
<!--Partie nos valeurs -->
<div>
\t\t<div class=\"row  justify-content-center\">
\t\t<h1>Nos valeurs</h1>
\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"respectAnimaux.jpg\" class=\"rounded-circle  img1\"/>
\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t<strong>Respect des animaux</strong></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"ecologie.jpg\" class=\"rounded-circle  img1\" />
\t\t\t\t\t<p class=\"text-center\">
\t\t\t\t\t\t<strong>Ecologie</strong>
\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<img alt=\"Bootstrap Image Preview\" src=\"securite.jpg\" class=\"rounded-circle  img1\" />
\t\t\t\t\t<p class = \"text-center\">
\t\t\t\t\t<strong>Sécurité</strong>
\t\t\t</p>
\t\t\t\t</div>
</div>
\t\t



<hr> <!--permet de séparer les parties par un trait-->
<!--Partie photo des créateurs-->
 <!--Premier créateur-->
<!-- Card Regular -->
<div>
\t<div class=\"row justify-content-center\">
\t\t\t<h1>Créateurs</h1>
\t</div>
\t<div class=\"row justify-content-center\"> <!--justify-content-center permet de centrer les colonnes d'une row-->
\t
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"card card-cascade arrondie\">

\t\t\t<!-- Card image -->
\t\t\t<div class=\"view view-cascade overlay\">
\t\t\t\t<img class=\"card-img-top arrondie\" src=\"pako.jpg\" alt=\"Pakito\">
\t\t\t\t<a>
\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Card content -->
\t\t\t<div class=\"card-body card-body-cascade text-center\">

\t\t\t\t\t\t\t<h4 class=\"card-title\"><strong>Pako Mathieu</strong></h4>
\t\t\t\t<!-- Subtitle -->
\t\t\t\t<h6 class=\"font-weight-bold indigo-text py-2\">Tout est objet</h6>

\t\t\t
\t\t\t\t<!-- Facebook -->
\t\t\t\t<a href=\"https://www.facebook.com/pako.mathieu\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
\t\t\t\t<!-- Twitter -->
\t\t\t\t{#<a type=\"button\" class=\"btn-floating btn-small btn-tw\"><i class=\"fab fa-twitter\"></i></a>#}
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
 <!--Deuxieme créateur-->
\t\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"card card-cascade arrondie\">

\t\t\t<!-- Card image -->
\t\t\t<div class=\"view view-cascade overlay\">
\t\t\t\t<img class=\"card-img-top arrondie\" src=\"momo.jpg\" alt=\"MOMO\">
\t\t\t\t<a>
\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Card content -->
\t\t\t<div class=\"card-body card-body-cascade text-center\">

\t\t\t\t\t\t\t<h4 class=\"card-title\"><strong>Mokhtar Bouniar</strong></h4>
\t\t\t\t<!-- Subtitle -->
\t\t\t\t<h6 class=\"font-weight-bold indigo-text py-2\">L'homme mystérieux</h6>

\t\t\t
\t\t\t\t<!-- Facebook -->
\t\t\t\t<a href=\"https://www.facebook.com/bmm.mokhtar\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"fa fa-facebook-official\" style=\"font-size:24px\"></i></a>
\t\t\t\t<!-- Twitter -->
\t\t\t\t{#<a type=\"button\" class=\"btn-floating btn-small btn-tw\"><i class=\"fab fa-twitter\"></i></a>#}
\t\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--Troisieme créateur-->
\t\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"card card-cascade arrondie\">

\t\t\t<!-- Card image -->
\t\t\t<div class=\"view view-cascade overlay\">
\t\t\t\t<img class=\"card-img-top arrondie\" src=\"stef.jpg\" alt=\"Stéfano\">
\t\t\t\t<a>
\t\t\t\t<div class=\"mask rgba-white-slight\"></div>
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<!-- Card content -->
\t\t\t<div class=\"card-body card-body-cascade text-center\">

\t\t\t\t\t\t\t<h4 class=\"card-title\"><strong>Stéfan Ménard</strong></h4>
\t\t\t\t<!-- Subtitle -->
\t\t\t\t<h6 class=\"font-weight-bold indigo-text py-2\">Dumbo</h6>

\t\t\t
\t\t\t\t<!-- Facebook -->
\t\t\t\t<a href=\"https://www.facebook.com/stefan.menard.5\" type=\"button\" target=\"_blank\" class=\"btn-floating btn-small btn-fb\"><i class=\"facebook-squared\"></i></a>
\t\t\t\t<!-- Twitter -->
\t\t\t\t{#<a type=\"button\" class=\"btn-floating btn-small btn-tw\"><i class=\"fab fa-twitter\"></i></a>#}
\t\t\t\t
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
</div>
</body>
{% endblock %}", "home.html.twig", "C:\\Users\\Bobo\\CatFinder\\templates\\home.html.twig");
    }
}

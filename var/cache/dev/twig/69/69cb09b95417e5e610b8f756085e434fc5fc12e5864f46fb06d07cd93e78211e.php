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

/* compte/login.html.twig */
class __TwigTemplate_3835acc63756c71d5f4cfb76ed86f2551852eea3d6cdb5c6aec12fd56073d306 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "compte/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "compte/login.html.twig", 1);
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
<body>
    <div class=\"container\">

    <div class=\"row\">  
            <div class=\"col-md-3\">&nbsp;</div>
            <div class=\"col-md-6\">
                    <div class=\"bg-light py-3 px-3\">
                            ";
        // line 13
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 13, $this->source); })())) {
            // line 14
            echo "                                <div class=\"alert alert-danger\">
                                
                                ";
            // line 17
            echo "
                                Une erreur est survenue, le nom d'utilisateur ou alors le mot de passe est invalide
                                
                                </div>

                            ";
        }
        // line 23
        echo "                    
                            <h1>Connectez vous</h1>
                            
                                <form action=\" ";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo " \" method=\"POST\"> <!--Quand le formulaire est executé on le redirige vers le controller via son et le path-->

                                    <div class=\"form-group\">
                                        <label for=\"email\">Email</label>
                                        <!--Symfony s'attend a des champs précis : _username et _password-->
                                        <input type=\"text\" name=\"_username\"  id=\"email\" class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["lastMail"]) || array_key_exists("lastMail", $context) ? $context["lastMail"] : (function () { throw new RuntimeError('Variable "lastMail" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" 
                                        placeholder=\"Adresse email...\" required> <!--required indique l'obligation de remplir cette input-->
                                        <!--Le value lasUsername permet de garder écrit dans l'input le dernier email écrit lors de la connexion au formulaire-->
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"password\">Mot de passe</label>
                                        <!--Symfony s'attend a des champs précis : _username et _password-->
                                        <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" 
                                        placeholder=\"Mot de passe ..\" required>
                                    </div>

                                    <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-success\">Connexion</button>

                                    </div>

                                </form>
                    </div>
                        
            </div>
            </div>
    </div>
</body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "compte/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  106 => 31,  98 => 26,  93 => 23,  85 => 17,  81 => 14,  79 => 13,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<body>
    <div class=\"container\">

    <div class=\"row\">  
            <div class=\"col-md-3\">&nbsp;</div>
            <div class=\"col-md-6\">
                    <div class=\"bg-light py-3 px-3\">
                            {% if error %}
                                <div class=\"alert alert-danger\">
                                
                                {#{{ error.messageKey | trans(error.messagedata, 'security') }};#}

                                Une erreur est survenue, le nom d'utilisateur ou alors le mot de passe est invalide
                                
                                </div>

                            {% endif %}
                    
                            <h1>Connectez vous</h1>
                            
                                <form action=\" {{path ('login')}} \" method=\"POST\"> <!--Quand le formulaire est executé on le redirige vers le controller via son et le path-->

                                    <div class=\"form-group\">
                                        <label for=\"email\">Email</label>
                                        <!--Symfony s'attend a des champs précis : _username et _password-->
                                        <input type=\"text\" name=\"_username\"  id=\"email\" class=\"form-control\" value=\"{{ lastMail }}\" 
                                        placeholder=\"Adresse email...\" required> <!--required indique l'obligation de remplir cette input-->
                                        <!--Le value lasUsername permet de garder écrit dans l'input le dernier email écrit lors de la connexion au formulaire-->
                                    </div>

                                    <div class=\"form-group\">
                                        <label for=\"password\">Mot de passe</label>
                                        <!--Symfony s'attend a des champs précis : _username et _password-->
                                        <input type=\"password\" name=\"_password\" id=\"password\" class=\"form-control\" 
                                        placeholder=\"Mot de passe ..\" required>
                                    </div>

                                    <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-success\">Connexion</button>

                                    </div>

                                </form>
                    </div>
                        
            </div>
            </div>
    </div>
</body>
{% endblock %}

{% block footer %} {% endblock %}
", "compte/login.html.twig", "C:\\Users\\Bobo\\CatFinder\\templates\\compte\\login.html.twig");
    }
}

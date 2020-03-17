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

/* cart/pay.html.twig */
class __TwigTemplate_f68bf11a70369699f8b01135d8341b4b7edffcc79487653233eefc446a95f42f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/pay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/pay.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/pay.html.twig", 1);
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

        echo " 

<div class=\"creditCardForm\">
    <div class=\"bg-light p-3\">
        <h1>Paiement</h1>
    </div>

    <div class=\"container\">
        <form>
            <div class=\"form-group owner\">
                <label for=\"owner\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"owner\">
            </div>
            <div class=\"form-group CVV\">
                <label for=\"cvv\">Adresse</label>
                <input type=\"text\" class=\"form-control\" id=\"cvv\">
            </div>
            <div class=\"form-group\" id=\"card-number-field\">
                <label for=\"cardNumber\">Numéro de carte</label>
                <input type=\"text\" class=\"form-control\" id=\"cardNumber\">
            </div>
            <div class=\"form-group\" id=\"expiration-date\">
                <label>Date d'expiration</label>
                <select>
                    <option value=\"01\">Janvier</option>
                    <option value=\"02\">Fevrier </option>
                    <option value=\"03\">Mars</option>
                    <option value=\"04\">Avril</option>
                    <option value=\"05\">Mai</option>
                    <option value=\"06\">Juin</option>
                    <option value=\"07\">Juillet</option>
                    <option value=\"08\">Aout</option>
                    <option value=\"09\">Septembre</option>
                    <option value=\"10\">Octobre</option>
                    <option value=\"11\">Novembre</option>
                    <option value=\"12\">Decembre</option>
                </select>
                <select>
                    <option value=\"16\"> 2020</option>
                    <option value=\"17\"> 2021</option>
                    <option value=\"18\"> 2022</option>
                    <option value=\"19\"> 2023</option>
                    <option value=\"20\"> 2024</option>
                    <option value=\"21\"> 2025</option>
                    
                    
                </select>
            </div>
            <div class=\"form-group row justify-content-center\" id=\"pay-now\">
                <button type=\"submit\" class=\"btn btn-primary\" id=\"confirm-purchase\">Confirmer</button>
            </div>
        </form>
    </div>
</div>



 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/pay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %} 

<div class=\"creditCardForm\">
    <div class=\"bg-light p-3\">
        <h1>Paiement</h1>
    </div>

    <div class=\"container\">
        <form>
            <div class=\"form-group owner\">
                <label for=\"owner\">Nom</label>
                <input type=\"text\" class=\"form-control\" id=\"owner\">
            </div>
            <div class=\"form-group CVV\">
                <label for=\"cvv\">Adresse</label>
                <input type=\"text\" class=\"form-control\" id=\"cvv\">
            </div>
            <div class=\"form-group\" id=\"card-number-field\">
                <label for=\"cardNumber\">Numéro de carte</label>
                <input type=\"text\" class=\"form-control\" id=\"cardNumber\">
            </div>
            <div class=\"form-group\" id=\"expiration-date\">
                <label>Date d'expiration</label>
                <select>
                    <option value=\"01\">Janvier</option>
                    <option value=\"02\">Fevrier </option>
                    <option value=\"03\">Mars</option>
                    <option value=\"04\">Avril</option>
                    <option value=\"05\">Mai</option>
                    <option value=\"06\">Juin</option>
                    <option value=\"07\">Juillet</option>
                    <option value=\"08\">Aout</option>
                    <option value=\"09\">Septembre</option>
                    <option value=\"10\">Octobre</option>
                    <option value=\"11\">Novembre</option>
                    <option value=\"12\">Decembre</option>
                </select>
                <select>
                    <option value=\"16\"> 2020</option>
                    <option value=\"17\"> 2021</option>
                    <option value=\"18\"> 2022</option>
                    <option value=\"19\"> 2023</option>
                    <option value=\"20\"> 2024</option>
                    <option value=\"21\"> 2025</option>
                    
                    
                </select>
            </div>
            <div class=\"form-group row justify-content-center\" id=\"pay-now\">
                <button type=\"submit\" class=\"btn btn-primary\" id=\"confirm-purchase\">Confirmer</button>
            </div>
        </form>
    </div>
</div>



 {% endblock %}", "cart/pay.html.twig", "C:\\Users\\Bobo\\CatFinder\\templates\\cart\\pay.html.twig");
    }
}

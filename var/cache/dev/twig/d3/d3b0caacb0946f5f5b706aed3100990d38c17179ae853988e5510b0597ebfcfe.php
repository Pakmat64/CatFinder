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

/* formulaire/editerAnnonce.html.twig */
class __TwigTemplate_5a71ab9018d6174e3e39a7d1842bb00a7246d54a731abff548d021919a3c5d89 extends Template
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
            '_annonce_imagess_widget' => [$this, 'block__annonce_imagess_widget'],
            '_annonce_imagess_entry_row' => [$this, 'block__annonce_imagess_entry_row'],
            '_annonce_imagess_entry_widget' => [$this, 'block__annonce_imagess_entry_widget'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/editerAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formulaire/editerAnnonce.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "formulaire/editerAnnonce.html.twig", 1);
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
 <div class=\"container\" style = \"text-align:center\">
    <h1>Modifier l'annonce : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
        echo " </h1>
        </div>
    <div class=\"container\">

        ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo " <!--ici form correspond a l'ensemble des champs du formulaire-->

        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'widget');
        echo "

    <div class=\"container boutton-submit\" >
        <button type=\"submit\" class=\"btn btn-primary\" style = >Modification de l'annonce</button>

   
    </div>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
    

                    ";
        // line 24
        $this->displayBlock('javascript', $context, $blocks);
        // line 59
        echo "

                </div>




                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 25
        echo "                    <script>
                

                function CacherPrix(){

                    var b=document.getElementById(\"annonce_prix\");
                    var a = document.getElementById(\"annonce_don\");

                if(a.value == \"Don\") //a.value correspond a une donnée du champs annonce_don pour voir les différentes données
                                        //allé voir le code source de la page(value correspond au element de la liste déroulante donc si cliche sur Don, on rentre dans ce if)
                {
                    b.style.visibility='hidden'; //on cache la visibilité
                    b.style.display='none'; // Permet de masquer l'affichage du bloc
                }
                else
                {
                    b.style.visibility='visible '; //le rend visible
                    b.style.display='block'; //re affiche le bloc de l'element par rapport a son id (annonce_prix) récupéré dans la var b
                }
                }

                
                    
                // alert(document.getElementById(\"annonce_don\").name);
                //document.getElementById(\"annonce_don\").addEventListener(\"change\",function(){alert('hello');});

                //document.getElementById(\"annonce_don\").addEventListener(\"change\", CacherPrix); 
                //                                    OU
                addEventListener(\"change\", CacherPrix); //event lancé quand on change la valeur de la liste déroulante, les traitements sont fait via l'appel de la fonction CacherPrix
                    

                    </script>
                    
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block__annonce_imagess_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_annonce_imagess_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_annonce_imagess_widget"));

        // line 68
        echo "                <p>Ici, vous pouvez ajouter vos propres images !</p>

                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'widget');
        echo "

                <input type=\"hidden\" id=\"widgets-counter\" value=\"0\">

                <div class=\"form-group\">
                    <button type=\"button\" id=\"add-image\" class=\"btn btn-primary\">Ajouter une image</button>
                </div>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block__annonce_imagess_entry_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_annonce_imagess_entry_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_annonce_imagess_entry_row"));

        // line 81
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'widget');
        echo "

                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block__annonce_imagess_entry_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_annonce_imagess_entry_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_annonce_imagess_entry_widget"));

        // line 87
        echo "
                                <div class=\"form-group\" id=\"block_";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "\">
                                <div class=\"row\">
                                
                                <div class=\"col-10\">
                                <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "url", [], "any", false, false, false, 94), 'widget');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "caption", [], "any", false, false, false, 97), 'widget');
        echo "
                                        </div>
                                    </div>
                                
                                </div>
                                <div class=\"col-2\">
                                
                                <button type=\"button\" data-action=\"delete\" data-target=\"#block_";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary\">X</button>
                                </div>
                        </div> 
                    </div>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " ";
        // line 112
        echo "
                <script>
                 \$('#add-image').click(function(){
                //Je récupère le numéro des futurs champs que je vais créer
                const index = \$('#widgets-counter').val();




                //Je récupère le prototype des entrées
                const tmpl = \$('#annonce_imagess').data('prototype').replace(/__name__/g, index);

                //J'injecte ce code au sein de la div
                \$('#annonce_imagess').append(tmpl);

                \$('#widgets-counter').val(index + 1);

                //Je gère le bouton supprimer
                handleDeleteButtons();

                });
                ";
        // line 134
        echo "                function handleDeleteButtons(){ 
                    \$('button[data-action=\"delete\"]').click(function(){
                        const target = this.dataset.target;
                        \$(target).remove();
                    });

                }

                handleDeleteButtons();
                </script>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formulaire/editerAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 134,  304 => 112,  293 => 111,  277 => 104,  267 => 97,  261 => 94,  252 => 88,  249 => 87,  239 => 86,  226 => 82,  223 => 81,  213 => 80,  194 => 70,  190 => 68,  180 => 67,  137 => 25,  127 => 24,  110 => 59,  108 => 24,  102 => 21,  92 => 14,  87 => 12,  80 => 8,  76 => 6,  66 => 5,  55 => 1,  53 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

 {% form_theme form _self %}

{% block body %}

 <div class=\"container\" style = \"text-align:center\">
    <h1>Modifier l'annonce : {{annonce.titre}} </h1>
        </div>
    <div class=\"container\">

        {{ form_start(form) }} <!--ici form correspond a l'ensemble des champs du formulaire-->

        {{ form_widget(form) }}

    <div class=\"container boutton-submit\" >
        <button type=\"submit\" class=\"btn btn-primary\" style = >Modification de l'annonce</button>

   
    </div>
        {{ form_end(form) }}
    

                    {% block javascript %}
                    <script>
                

                function CacherPrix(){

                    var b=document.getElementById(\"annonce_prix\");
                    var a = document.getElementById(\"annonce_don\");

                if(a.value == \"Don\") //a.value correspond a une donnée du champs annonce_don pour voir les différentes données
                                        //allé voir le code source de la page(value correspond au element de la liste déroulante donc si cliche sur Don, on rentre dans ce if)
                {
                    b.style.visibility='hidden'; //on cache la visibilité
                    b.style.display='none'; // Permet de masquer l'affichage du bloc
                }
                else
                {
                    b.style.visibility='visible '; //le rend visible
                    b.style.display='block'; //re affiche le bloc de l'element par rapport a son id (annonce_prix) récupéré dans la var b
                }
                }

                
                    
                // alert(document.getElementById(\"annonce_don\").name);
                //document.getElementById(\"annonce_don\").addEventListener(\"change\",function(){alert('hello');});

                //document.getElementById(\"annonce_don\").addEventListener(\"change\", CacherPrix); 
                //                                    OU
                addEventListener(\"change\", CacherPrix); //event lancé quand on change la valeur de la liste déroulante, les traitements sont fait via l'appel de la fonction CacherPrix
                    

                    </script>
                    
                    {% endblock %}


                </div>




                        {% endblock %}
                {% block _annonce_imagess_widget %}
                <p>Ici, vous pouvez ajouter vos propres images !</p>

                {{ form_widget(form) }}

                <input type=\"hidden\" id=\"widgets-counter\" value=\"0\">

                <div class=\"form-group\">
                    <button type=\"button\" id=\"add-image\" class=\"btn btn-primary\">Ajouter une image</button>
                </div>

                {% endblock %}

                {% block _annonce_imagess_entry_row %}

                {{ form_widget(form) }}

                                {% endblock %}

                                {% block _annonce_imagess_entry_widget %}

                                <div class=\"form-group\" id=\"block_{{id}}\">
                                <div class=\"row\">
                                
                                <div class=\"col-10\">
                                <div class=\"row\">
                                        <div class=\"col\">
                                            {{ form_widget(form.url) }}
                                        </div>
                                        <div class=\"col\">
                                            {{ form_widget(form.caption) }}
                                        </div>
                                    </div>
                                
                                </div>
                                <div class=\"col-2\">
                                
                                <button type=\"button\" data-action=\"delete\" data-target=\"#block_{{id}}\" class=\"btn btn-primary\">X</button>
                                </div>
                        </div> 
                    </div>

                {% endblock %}

                {% block javascripts %} {# Block javascript qui fait apparaitre la possibilité de mettre une nouvelle image, grâce au prototype du collection type #}

                <script>
                 \$('#add-image').click(function(){
                //Je récupère le numéro des futurs champs que je vais créer
                const index = \$('#widgets-counter').val();




                //Je récupère le prototype des entrées
                const tmpl = \$('#annonce_imagess').data('prototype').replace(/__name__/g, index);

                //J'injecte ce code au sein de la div
                \$('#annonce_imagess').append(tmpl);

                \$('#widgets-counter').val(index + 1);

                //Je gère le bouton supprimer
                handleDeleteButtons();

                });
                {# Boutton de suppresion des images supplémentaire rajoutées #}
                function handleDeleteButtons(){ 
                    \$('button[data-action=\"delete\"]').click(function(){
                        const target = this.dataset.target;
                        \$(target).remove();
                    });

                }

                handleDeleteButtons();
                </script>

                {% endblock %}

    


", "formulaire/editerAnnonce.html.twig", "C:\\Users\\Bobo\\ProjetChat\\templates\\formulaire\\editerAnnonce.html.twig");
    }
}

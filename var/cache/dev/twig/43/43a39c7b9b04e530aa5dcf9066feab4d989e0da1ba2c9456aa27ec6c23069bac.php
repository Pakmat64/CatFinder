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

/* histoire_chat/histoireChat.html.twig */
class __TwigTemplate_4d85775173b07ba31655e44f1aa551d34a38fa92eed6fbd4e8101fdcfe683bb4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire_chat/histoireChat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "histoire_chat/histoireChat.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "histoire_chat/histoireChat.html.twig", 1);
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

        echo "L'histoire du chat";
        
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
        echo "
<link rel=\"stylesheet\" href=\"/css/statique.css\">

              <div class=\"container-fluid\" data-spy=\"scroll\" data-target=\"#navbar-chat\" data-offset=\"50\">
                <div class=\"row\">
                    <div class=\"col-lg-4 paddingTopAndBottom\" >
                        <!--
                        <nav id=\"navbar-chat\" class=\"navbar navbar-light bg-light\" >

                                  <nav class=\"nav nav-pills flex-column\">
                                      <a class=\"nav-link\" href=\"#item-1\">DeChat sauvage à divinité</a>
                                      <nav class=\"nav nav-pills flex-column\">
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-1-1\">L'ADN parle</a>
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-1-2\">Chats protecteurs</a>
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-1-3\">Divinité sacrée</a>
                                      </nav>
                                      <a class=\"nav-link\" href=\"#item2\">Exportation dans le reste du monde<a>
                                      <a class=\"nav-link\" href=\"#item3\">Evolution des conditions de vies</a>
                                      <nav class=\"nav nav-pills flex-column\">
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-3-1\">Animaux maléfiques ?<a>
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-3-2\">Item 3-2</a>
                                      </nav>
                                      <a class=\"nav-link\" href=\"#item-4\">Anotre époque</a>
                                  </nav>
                        </nav>-->
                        <img src=\"https://i0.wp.com/culture-crunch.com/wp-content/uploads/2020/01/zretdhg.jpg?fit=346%2C603&ssl=1\" class=\"img-responsive rounded\"width=\"300\">
                        <img src=\"https://img.freepik.com/photos-gratuite/portrait-mignon-petit-chaton-pli-ecossais-chat-aux-oreilles-tombantes_120968-1.jpg?size=338&ext=jpg\" class=\"img-responsive rounded\"width=\"300\">
                        <img src=\"https://lh3.googleusercontent.com/proxy/VXPF1M3E8MlzgMJnfc8HhSs0MFZsYbytSrQWkB7RYaUDkQVWPLyZsUWcvL7JtZRG0WJXv6eNH2DQixIoda_XzS4kwkqZ6JT0EI0DfE5LHTinqdIL04J8CzGN\"class=\"img-responsive rounded\"width=\"300\">
                        <img src=\"https://p5.storage.canalblog.com/52/29/282799/61375160.jpg\"class=\"img-responsive rounded\"width=\"300\" >
                    </div>
                    <div class=\"col-lg-6 paddingTopAndBottom\">

                                <h4 id=\"item-1\">De Chat sauvage à divinité</h4>
                                <p>L'amitié harmonieuse entre le chat et l'homme remonte jusqu'à l'an 3000 avant J.-C., dans l'Egypte ancienne.
                                Des études archéologiques ont mis au jour des éléments prouvant que le chat sauvage africain (Felis sylvestris lybica)
                                est le premier ancêtre du chat domestique.</p>

                                <h5 id=\"item-1-1\">L'ADN parle</h5>
                                <p>C'est pourquoi, on trouve souvent aujourd'hui des chats sauvages africains comme animaux de compagnie chez certaines populations traditionnelles.
                                Des études fondées sur l'ADN menées en Afrique du Sud n'ont pas réussi à établir de distinction entre le chat domestique et le chat sauvage africain.
                                Alors que le chat sauvage européen (Felis sylvestris sylvestris), souvent considéré comme ayant contribué au développement du chat de compagnie, se distingue clairement des deux autres.
                                </p>
                                <h5 id=\"item-1-2\">Chats protecteurs</h5>
                                <p>Selon les scientifiques et les historiens, les chats sauvages africains ont commencé à s'approcher des entrepôts de grains égyptiens le long de la rive du Nil, attirés par les souris et les rats qui s'y trouvaient.
                                Les chats éliminant les rongeurs, les populations ont commencé à les apprécier, les jugeant très utiles.
                                Comme il y avait peu de prédateurs dans ces régions, ces chats ont commencé à se reproduire et se multiplier, à côté des hommes. Les portées de nombreux petits chatons attachants ont attendri les populations.
                                <br>
                                Très vite, les hommes ont emmené chez eux ces petits chatons pour en prendre soin et ils n'ont pas tardé à les adopter.
                                La relation très affectueuse entre l'homme et le chat a commencé alors à se renforcer, surtout en les nourrissant très tôt, entre l'âge de 2 à 8 semaines.
                                Il y avait donc toutes les chances que ces chatons une fois l'âge adulte atteint restent.</p>

                                <h5 id=\"item-1-3\">Divinité sacrée</h5>
                                <p>C'est sans doute sa fonction de protection des entrepôts d'aliments contre les rongeurs qui explique pourquoi les habitants de l'Egypte ancienne aient fait du chat une divinité sacrée.
                                Ces chats étaient appelés « miw » (de l'onomatopée miou). Les maîtres étaient en deuil lorsqu'un « miw » mourait : les chats morts étaient embaumés et placés dans des cercueils en bois.
                                Les chattes et les lionnes étaient associées à Sekhmet, la très vénérée déesse égyptienne de la guerre, tandis que les chats mâles étaient consacrés au dieu du soleil, Ra.
                                <br>
                                Les chats étaient si protégés, que si quelqu'un passait près d'un chat blessé gravement, il quittait rapidement les lieux de crainte d'être incriminé.
                                Après sa mort, le chat était alors momifié avant d'être inhumé – souvent dans des tombeaux énormes, avec des dizaines de milliers d'autres chats.
                                </p>
                                <h4 id=\"item-2\">Exportation dans le reste du monde</h4>
                                <p>Malgré les efforts des Egyptiens pour empêcher l'exportation de leurs chats adorés, les Grecs volèrent les animaux afin de résoudre leurs propres problèmes de rongeurs.
                                Les premiers animaux domestiques sont apparus en Europe autour de l'an 900 avant J.-C.
                                Puis, les Egyptiens ont commencé à vendre les chats aux Romains, aux Ecossais, aux Celtes et, plus tard, à d'autres Européens, si bien que la population des chats a commencé à s'étendre dans le monde entier.
                                En l'an 500 avant J.-C., le chat était devenu un animal commun en Chine.
                                Initialement, les chats étaient offerts en cadeau aux empereurs.
                                Au fil du temps, la noblesse a été autorisée à en posséder, puis le clergé et enfin les gens du peuple.
                                De nombreux chats se sont croisés avec les chats sauvages locaux, créant certaines des races que nous connaissons aujourd'hui.
                                La trace la plus ancienne de chats domestiques dans les îles britanniques remonte à l'an 936 après J.-C., quand Howell Dla, le prince du sud du Pays de Galles central, a promulgué une loi visant à les protéger.</p>

                                <h4 id=\"item-3\">Evolution des conditions de vies</h4>

                                <h5 id=\"item-3-1\">Animaux maléfiques ?</h5>
                                <p>Malheureusement, les chats domestiques ont changé au cours des années, et peu à peu ils ont été associés à de mauvais comportements, des maladies et des méfaits.
                                En 1484, le pape Innocent VII a décrété que tous les adorateurs de chats en Europe seraient brûlés comme des sorcières.
                                Il croyait que les sorcières vénéraient Satan et qu'elles prenaient la forme de leurs acolytes de l'espèce animale, qui étaient le plus souvent des chats.
                                Leur habitude de rôder la nuit les a associés encore davantage au diable et à la sorcellerie. Un chat en compagnie d'une vieille femme était aussitôt considéré comme le compagnon diabolique d'une sorcière.
                                L'Inquisition a ordonné la chasse à tous ceux qui possédaient des chats et les jugeait en tant que sorcières. Des centaines de chats et de propriétaires de chats ont été brûlés à mort !</p>

                                <h5 id=\"item-3-2\">Chasseurs</h5>
                                <p>La vie des chats ne s'est pas guère améliorée jusqu'au XVIIe siècle, lorsqu'ils sont devenus des chasseurs de souris, en particulier à bord des navires.
                                A l'époque victorienne, cependant, les chats ont de nouveau été acceptés dans les foyers comme animaux de compagnie et à la fin du XIXe siècle, les premières races pures étaient présentées dans les premières expositions de chats.
                                En 1871, une grande exposition était organisée au Crystal Palace sur les British Shorthairs et les chats persans. A la même époque, en Nouvelle Angleterre, la race Maine Coon était présentée lors de la première exposition de chats aux Etats-Unis.</p>
                                <h4 id=\"item-4\">A notre époque</h4>
                                <p>De nos jours, la qualité de vie d'un chat est très certainement meilleure que jamais. Avec leur aura de sagesse surnaturelle et d'indépendance, les chats ont un bel avenir devant eux.</p>

                    </div>

        </div>
      </div>


<script>
\$('body').scrollspy({ target: '#navbar-chat' })
</script>









";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "histoire_chat/histoireChat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}L'histoire du chat{% endblock %}

{% block body %}

<link rel=\"stylesheet\" href=\"/css/statique.css\">

              <div class=\"container-fluid\" data-spy=\"scroll\" data-target=\"#navbar-chat\" data-offset=\"50\">
                <div class=\"row\">
                    <div class=\"col-lg-4 paddingTopAndBottom\" >
                        <!--
                        <nav id=\"navbar-chat\" class=\"navbar navbar-light bg-light\" >

                                  <nav class=\"nav nav-pills flex-column\">
                                      <a class=\"nav-link\" href=\"#item-1\">DeChat sauvage à divinité</a>
                                      <nav class=\"nav nav-pills flex-column\">
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-1-1\">L'ADN parle</a>
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-1-2\">Chats protecteurs</a>
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-1-3\">Divinité sacrée</a>
                                      </nav>
                                      <a class=\"nav-link\" href=\"#item2\">Exportation dans le reste du monde<a>
                                      <a class=\"nav-link\" href=\"#item3\">Evolution des conditions de vies</a>
                                      <nav class=\"nav nav-pills flex-column\">
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-3-1\">Animaux maléfiques ?<a>
                                      <a class=\"nav-link ml-3 my-1\"href=\"#item-3-2\">Item 3-2</a>
                                      </nav>
                                      <a class=\"nav-link\" href=\"#item-4\">Anotre époque</a>
                                  </nav>
                        </nav>-->
                        <img src=\"https://i0.wp.com/culture-crunch.com/wp-content/uploads/2020/01/zretdhg.jpg?fit=346%2C603&ssl=1\" class=\"img-responsive rounded\"width=\"300\">
                        <img src=\"https://img.freepik.com/photos-gratuite/portrait-mignon-petit-chaton-pli-ecossais-chat-aux-oreilles-tombantes_120968-1.jpg?size=338&ext=jpg\" class=\"img-responsive rounded\"width=\"300\">
                        <img src=\"https://lh3.googleusercontent.com/proxy/VXPF1M3E8MlzgMJnfc8HhSs0MFZsYbytSrQWkB7RYaUDkQVWPLyZsUWcvL7JtZRG0WJXv6eNH2DQixIoda_XzS4kwkqZ6JT0EI0DfE5LHTinqdIL04J8CzGN\"class=\"img-responsive rounded\"width=\"300\">
                        <img src=\"https://p5.storage.canalblog.com/52/29/282799/61375160.jpg\"class=\"img-responsive rounded\"width=\"300\" >
                    </div>
                    <div class=\"col-lg-6 paddingTopAndBottom\">

                                <h4 id=\"item-1\">De Chat sauvage à divinité</h4>
                                <p>L'amitié harmonieuse entre le chat et l'homme remonte jusqu'à l'an 3000 avant J.-C., dans l'Egypte ancienne.
                                Des études archéologiques ont mis au jour des éléments prouvant que le chat sauvage africain (Felis sylvestris lybica)
                                est le premier ancêtre du chat domestique.</p>

                                <h5 id=\"item-1-1\">L'ADN parle</h5>
                                <p>C'est pourquoi, on trouve souvent aujourd'hui des chats sauvages africains comme animaux de compagnie chez certaines populations traditionnelles.
                                Des études fondées sur l'ADN menées en Afrique du Sud n'ont pas réussi à établir de distinction entre le chat domestique et le chat sauvage africain.
                                Alors que le chat sauvage européen (Felis sylvestris sylvestris), souvent considéré comme ayant contribué au développement du chat de compagnie, se distingue clairement des deux autres.
                                </p>
                                <h5 id=\"item-1-2\">Chats protecteurs</h5>
                                <p>Selon les scientifiques et les historiens, les chats sauvages africains ont commencé à s'approcher des entrepôts de grains égyptiens le long de la rive du Nil, attirés par les souris et les rats qui s'y trouvaient.
                                Les chats éliminant les rongeurs, les populations ont commencé à les apprécier, les jugeant très utiles.
                                Comme il y avait peu de prédateurs dans ces régions, ces chats ont commencé à se reproduire et se multiplier, à côté des hommes. Les portées de nombreux petits chatons attachants ont attendri les populations.
                                <br>
                                Très vite, les hommes ont emmené chez eux ces petits chatons pour en prendre soin et ils n'ont pas tardé à les adopter.
                                La relation très affectueuse entre l'homme et le chat a commencé alors à se renforcer, surtout en les nourrissant très tôt, entre l'âge de 2 à 8 semaines.
                                Il y avait donc toutes les chances que ces chatons une fois l'âge adulte atteint restent.</p>

                                <h5 id=\"item-1-3\">Divinité sacrée</h5>
                                <p>C'est sans doute sa fonction de protection des entrepôts d'aliments contre les rongeurs qui explique pourquoi les habitants de l'Egypte ancienne aient fait du chat une divinité sacrée.
                                Ces chats étaient appelés « miw » (de l'onomatopée miou). Les maîtres étaient en deuil lorsqu'un « miw » mourait : les chats morts étaient embaumés et placés dans des cercueils en bois.
                                Les chattes et les lionnes étaient associées à Sekhmet, la très vénérée déesse égyptienne de la guerre, tandis que les chats mâles étaient consacrés au dieu du soleil, Ra.
                                <br>
                                Les chats étaient si protégés, que si quelqu'un passait près d'un chat blessé gravement, il quittait rapidement les lieux de crainte d'être incriminé.
                                Après sa mort, le chat était alors momifié avant d'être inhumé – souvent dans des tombeaux énormes, avec des dizaines de milliers d'autres chats.
                                </p>
                                <h4 id=\"item-2\">Exportation dans le reste du monde</h4>
                                <p>Malgré les efforts des Egyptiens pour empêcher l'exportation de leurs chats adorés, les Grecs volèrent les animaux afin de résoudre leurs propres problèmes de rongeurs.
                                Les premiers animaux domestiques sont apparus en Europe autour de l'an 900 avant J.-C.
                                Puis, les Egyptiens ont commencé à vendre les chats aux Romains, aux Ecossais, aux Celtes et, plus tard, à d'autres Européens, si bien que la population des chats a commencé à s'étendre dans le monde entier.
                                En l'an 500 avant J.-C., le chat était devenu un animal commun en Chine.
                                Initialement, les chats étaient offerts en cadeau aux empereurs.
                                Au fil du temps, la noblesse a été autorisée à en posséder, puis le clergé et enfin les gens du peuple.
                                De nombreux chats se sont croisés avec les chats sauvages locaux, créant certaines des races que nous connaissons aujourd'hui.
                                La trace la plus ancienne de chats domestiques dans les îles britanniques remonte à l'an 936 après J.-C., quand Howell Dla, le prince du sud du Pays de Galles central, a promulgué une loi visant à les protéger.</p>

                                <h4 id=\"item-3\">Evolution des conditions de vies</h4>

                                <h5 id=\"item-3-1\">Animaux maléfiques ?</h5>
                                <p>Malheureusement, les chats domestiques ont changé au cours des années, et peu à peu ils ont été associés à de mauvais comportements, des maladies et des méfaits.
                                En 1484, le pape Innocent VII a décrété que tous les adorateurs de chats en Europe seraient brûlés comme des sorcières.
                                Il croyait que les sorcières vénéraient Satan et qu'elles prenaient la forme de leurs acolytes de l'espèce animale, qui étaient le plus souvent des chats.
                                Leur habitude de rôder la nuit les a associés encore davantage au diable et à la sorcellerie. Un chat en compagnie d'une vieille femme était aussitôt considéré comme le compagnon diabolique d'une sorcière.
                                L'Inquisition a ordonné la chasse à tous ceux qui possédaient des chats et les jugeait en tant que sorcières. Des centaines de chats et de propriétaires de chats ont été brûlés à mort !</p>

                                <h5 id=\"item-3-2\">Chasseurs</h5>
                                <p>La vie des chats ne s'est pas guère améliorée jusqu'au XVIIe siècle, lorsqu'ils sont devenus des chasseurs de souris, en particulier à bord des navires.
                                A l'époque victorienne, cependant, les chats ont de nouveau été acceptés dans les foyers comme animaux de compagnie et à la fin du XIXe siècle, les premières races pures étaient présentées dans les premières expositions de chats.
                                En 1871, une grande exposition était organisée au Crystal Palace sur les British Shorthairs et les chats persans. A la même époque, en Nouvelle Angleterre, la race Maine Coon était présentée lors de la première exposition de chats aux Etats-Unis.</p>
                                <h4 id=\"item-4\">A notre époque</h4>
                                <p>De nos jours, la qualité de vie d'un chat est très certainement meilleure que jamais. Avec leur aura de sagesse surnaturelle et d'indépendance, les chats ont un bel avenir devant eux.</p>

                    </div>

        </div>
      </div>


<script>
\$('body').scrollspy({ target: '#navbar-chat' })
</script>









{% endblock %}
", "histoire_chat/histoireChat.html.twig", "C:\\Users\\Bobo\\ProjetChat\\templates\\histoire_chat\\histoireChat.html.twig");
    }
}

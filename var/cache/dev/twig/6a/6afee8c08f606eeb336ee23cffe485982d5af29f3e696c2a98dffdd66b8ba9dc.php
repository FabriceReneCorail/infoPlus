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

/* article/index.html.twig */
class __TwigTemplate_58055abc94eba8d3afc0eb584dc841b0d7eb0369319ffd48e255e4a5b6e55e75 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        echo "Hello ArticleController!";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">

   <h2> Covid-19 : les hôpitaux sont-ils prêts à faire face à une deuxième vague ?</h2>
A la fin de l'été, le Premier ministre Jean Castex a assuré que la système hospitalier français était suffisamment doté en lits, en masques et en réanimateurs pour affronter une recrudescence du nombre de malades.
<img src=\"https://www.francetvinfo.fr/image/75s64aqtx-7d3a/1200/450/22126215.jpg\">

<p>La \"seconde vague\" de l'épidémie de Covid-19 s'abat-elle sur Marseille ? Le nombre de cas graves ne cesse d'augmenter dans les Bouches-du-Rhône. A tel point que les hôpitaux publics de la région marseillaise ont été contraints de revoir en urgence leur dispositif à la hausse, en ajoutant \"dans les quinze à vingt jours à venir\" 17 lits de réanimation et de soins critiques aux 70 déjà dédiés dans le département, selon Dominique Rossi, le président de la commission médicale de l'Assistance publique-Hôpitaux de Marseille (APHM).</p>
</p>

<p>Au niveau national, avec 32 départements en \"vulnérabilité élevée\", \"la progression de la circulation virale est exponentielle\" et la \"dynamique de la transmission en forte croissance\" est \"préoccupante\", a alerté Santé publique France. \"A partir des calculs qu'on peut faire, a prévenu Jean-François Delfraissy, le président du Conseil scientifique, le 10 septembre sur RTL, le nombre de lits de réanimation qui peuvent être consacrés aux 'patients Covid' va être bousculé et interpellé à partir de la mi-octobre ou à partir de début octobre dans certaines régions.\"</p>

<h2>Des chiffres très inférieurs au pic d'avril</h2>

<p>Le système hospitalier français est-il \"prêt\" à faire face à une nouvelle vague épidémique, comme l'a assuré le Premier ministre, Jean Castex, le 27 août ? Pour l'heure, les hôpitaux français ne sont pas saturés. Après une baisse progressive pendant l'été, les admissions en réanimation ont tout de même retrouvé leur niveau du 30 juin. Le 9 septembre, 593 patients occupaient des lits de réanimation ou de soins intensifs dans les établissements de santé français. En Ile-de-France, région la plus peuplée, 202 patients étaient hospitalisés en réanimation ou soins intensifs, d'après la plateforme publique Géodes. Un chiffre très inférieur au pic atteint le 10 avril, lorsque les hôpitaux franciliens en comptabilisaient 2 668.</p>

</p>

</div>

<div>

affichage du fomulaire pour deposer des commentaires en cours...



<input type=\"text\"> à binder</input>
<input type=\"textarea\"> à binder</input>
<button type=\"submit\" class=\"btn\">Register</button>

<div>


boucle for pour afficher les articles pousser en bases à implementer 



</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
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

{% block title %}Hello ArticleController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">

   <h2> Covid-19 : les hôpitaux sont-ils prêts à faire face à une deuxième vague ?</h2>
A la fin de l'été, le Premier ministre Jean Castex a assuré que la système hospitalier français était suffisamment doté en lits, en masques et en réanimateurs pour affronter une recrudescence du nombre de malades.
<img src=\"https://www.francetvinfo.fr/image/75s64aqtx-7d3a/1200/450/22126215.jpg\">

<p>La \"seconde vague\" de l'épidémie de Covid-19 s'abat-elle sur Marseille ? Le nombre de cas graves ne cesse d'augmenter dans les Bouches-du-Rhône. A tel point que les hôpitaux publics de la région marseillaise ont été contraints de revoir en urgence leur dispositif à la hausse, en ajoutant \"dans les quinze à vingt jours à venir\" 17 lits de réanimation et de soins critiques aux 70 déjà dédiés dans le département, selon Dominique Rossi, le président de la commission médicale de l'Assistance publique-Hôpitaux de Marseille (APHM).</p>
</p>

<p>Au niveau national, avec 32 départements en \"vulnérabilité élevée\", \"la progression de la circulation virale est exponentielle\" et la \"dynamique de la transmission en forte croissance\" est \"préoccupante\", a alerté Santé publique France. \"A partir des calculs qu'on peut faire, a prévenu Jean-François Delfraissy, le président du Conseil scientifique, le 10 septembre sur RTL, le nombre de lits de réanimation qui peuvent être consacrés aux 'patients Covid' va être bousculé et interpellé à partir de la mi-octobre ou à partir de début octobre dans certaines régions.\"</p>

<h2>Des chiffres très inférieurs au pic d'avril</h2>

<p>Le système hospitalier français est-il \"prêt\" à faire face à une nouvelle vague épidémique, comme l'a assuré le Premier ministre, Jean Castex, le 27 août ? Pour l'heure, les hôpitaux français ne sont pas saturés. Après une baisse progressive pendant l'été, les admissions en réanimation ont tout de même retrouvé leur niveau du 30 juin. Le 9 septembre, 593 patients occupaient des lits de réanimation ou de soins intensifs dans les établissements de santé français. En Ile-de-France, région la plus peuplée, 202 patients étaient hospitalisés en réanimation ou soins intensifs, d'après la plateforme publique Géodes. Un chiffre très inférieur au pic atteint le 10 avril, lorsque les hôpitaux franciliens en comptabilisaient 2 668.</p>

</p>

</div>

<div>

affichage du fomulaire pour deposer des commentaires en cours...



<input type=\"text\"> à binder</input>
<input type=\"textarea\"> à binder</input>
<button type=\"submit\" class=\"btn\">Register</button>

<div>


boucle for pour afficher les articles pousser en bases à implementer 



</div>

{% endblock %}", "article/index.html.twig", "/Users/fabricerene-corail/Documents/Symfony/projet/infoPlus/templates/article/index.html.twig");
    }
}

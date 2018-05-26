<?php

/* producteur/show.html.twig */
class __TwigTemplate_937d0f758d2f87fb67219ca5733661fb18b718a245ea07ac1daafb0b59fabe7e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "producteur/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producteur/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producteur/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Producteur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Producteur</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>ProdId</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producteur"]) || array_key_exists("producteur", $context) ? $context["producteur"] : (function () { throw new Twig_Error_Runtime('Variable "producteur" does not exist.', 12, $this->source); })()), "prodId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ProdVerif</th>
                <td>";
        // line 16
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["producteur"]) || array_key_exists("producteur", $context) ? $context["producteur"] : (function () { throw new Twig_Error_Runtime('Variable "producteur" does not exist.', 16, $this->source); })()), "prodVerif", array())) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>ProdSiren</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producteur"]) || array_key_exists("producteur", $context) ? $context["producteur"] : (function () { throw new Twig_Error_Runtime('Variable "producteur" does not exist.', 20, $this->source); })()), "prodSiren", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ProdDateVerif</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["producteur"]) || array_key_exists("producteur", $context) ? $context["producteur"] : (function () { throw new Twig_Error_Runtime('Variable "producteur" does not exist.', 24, $this->source); })()), "prodDateVerif", array())) ? (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producteur"]) || array_key_exists("producteur", $context) ? $context["producteur"] : (function () { throw new Twig_Error_Runtime('Variable "producteur" does not exist.', 24, $this->source); })()), "prodDateVerif", array()), "Y-m-d H:i:s")) : ("")), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ProdNomExploit</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["producteur"]) || array_key_exists("producteur", $context) ? $context["producteur"] : (function () { throw new Twig_Error_Runtime('Variable "producteur" does not exist.', 28, $this->source); })()), "prodNomExploit", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producteur_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("producteur_edit", array("prodId" => twig_get_attribute($this->env, $this->source, (isset($context["producteur"]) || array_key_exists("producteur", $context) ? $context["producteur"] : (function () { throw new Twig_Error_Runtime('Variable "producteur" does not exist.', 35, $this->source); })()), "prodId", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 37
        echo twig_include($this->env, $context, "producteur/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "producteur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 37,  121 => 35,  116 => 33,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Producteur{% endblock %}

{% block body %}
    <h1>Producteur</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>ProdId</th>
                <td>{{ producteur.prodId }}</td>
            </tr>
            <tr>
                <th>ProdVerif</th>
                <td>{{ producteur.prodVerif ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>ProdSiren</th>
                <td>{{ producteur.prodSiren }}</td>
            </tr>
            <tr>
                <th>ProdDateVerif</th>
                <td>{{ producteur.prodDateVerif ? producteur.prodDateVerif|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>ProdNomExploit</th>
                <td>{{ producteur.prodNomExploit }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('producteur_index') }}\">back to list</a>

    <a href=\"{{ path('producteur_edit', {'prodId': producteur.prodId}) }}\">edit</a>

    {{ include('producteur/_delete_form.html.twig') }}
{% endblock %}", "producteur/show.html.twig", "D:\\wamp64\\www\\prodamap\\templates\\producteur\\show.html.twig");
    }
}

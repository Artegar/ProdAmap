<?php

/* amap/show.html.twig */
class __TwigTemplate_705f2f46d3d6f4d53b5f18c64e49efc4e5efd72aee2f84d59bd76cd0a8193c30 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "amap/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "amap/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "amap/show.html.twig"));

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

        echo "Amap";
        
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
        echo "    <h1>Amap</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>AmapId</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amap"]) || array_key_exists("amap", $context) ? $context["amap"] : (function () { throw new Twig_Error_Runtime('Variable "amap" does not exist.', 12, $this->source); })()), "amapId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AmapNom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amap"]) || array_key_exists("amap", $context) ? $context["amap"] : (function () { throw new Twig_Error_Runtime('Variable "amap" does not exist.', 16, $this->source); })()), "amapNom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AmapAdresse1</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amap"]) || array_key_exists("amap", $context) ? $context["amap"] : (function () { throw new Twig_Error_Runtime('Variable "amap" does not exist.', 20, $this->source); })()), "amapAdresse1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AmapAdresse2</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amap"]) || array_key_exists("amap", $context) ? $context["amap"] : (function () { throw new Twig_Error_Runtime('Variable "amap" does not exist.', 24, $this->source); })()), "amapAdresse2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AmapCodepostal</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amap"]) || array_key_exists("amap", $context) ? $context["amap"] : (function () { throw new Twig_Error_Runtime('Variable "amap" does not exist.', 28, $this->source); })()), "amapCodepostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AmapVille</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["amap"]) || array_key_exists("amap", $context) ? $context["amap"] : (function () { throw new Twig_Error_Runtime('Variable "amap" does not exist.', 32, $this->source); })()), "amapVille", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amap_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("amap_edit", array("amapId" => twig_get_attribute($this->env, $this->source, (isset($context["amap"]) || array_key_exists("amap", $context) ? $context["amap"] : (function () { throw new Twig_Error_Runtime('Variable "amap" does not exist.', 39, $this->source); })()), "amapId", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "amap/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "amap/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  128 => 39,  123 => 37,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Amap{% endblock %}

{% block body %}
    <h1>Amap</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>AmapId</th>
                <td>{{ amap.amapId }}</td>
            </tr>
            <tr>
                <th>AmapNom</th>
                <td>{{ amap.amapNom }}</td>
            </tr>
            <tr>
                <th>AmapAdresse1</th>
                <td>{{ amap.amapAdresse1 }}</td>
            </tr>
            <tr>
                <th>AmapAdresse2</th>
                <td>{{ amap.amapAdresse2 }}</td>
            </tr>
            <tr>
                <th>AmapCodepostal</th>
                <td>{{ amap.amapCodepostal }}</td>
            </tr>
            <tr>
                <th>AmapVille</th>
                <td>{{ amap.amapVille }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('amap_index') }}\">back to list</a>

    <a href=\"{{ path('amap_edit', {'amapId': amap.amapId}) }}\">edit</a>

    {{ include('amap/_delete_form.html.twig') }}
{% endblock %}", "amap/show.html.twig", "D:\\wamp64\\www\\prodamap\\templates\\amap\\show.html.twig");
    }
}

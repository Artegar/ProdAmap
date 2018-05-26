<?php

/* utilisateur/show.html.twig */
class __TwigTemplate_f857d1316bc5a4581131f36690cd1643a3f8e037bfbc72b6da3516e4a2a1e090 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

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

        echo "Utilisateur";
        
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
        echo "    <h1>Utilisateur</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>UtilId</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 12, $this->source); })()), "utilId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilNom</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 16, $this->source); })()), "utilNom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilPrenom</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 20, $this->source); })()), "utilPrenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilTel</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 24, $this->source); })()), "utilTel", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilMail</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 28, $this->source); })()), "utilMail", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilLogin</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 32, $this->source); })()), "utilLogin", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilMdp</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 36, $this->source); })()), "utilMdp", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilActif</th>
                <td>";
        // line 40
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 40, $this->source); })()), "utilActif", array())) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>UtilSuperadmin</th>
                <td>";
        // line 44
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 44, $this->source); })()), "utilSuperadmin", array())) ? ("Yes") : ("No"));
        echo "</td>
            </tr>
            <tr>
                <th>UtilAdresse1</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 48, $this->source); })()), "utilAdresse1", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilAdresse2</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 52, $this->source); })()), "utilAdresse2", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilCodepostal</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 56, $this->source); })()), "utilCodepostal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UtilVille</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 60, $this->source); })()), "utilVille", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Producteur</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 64, $this->source); })()), "producteur", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adherant</th>
                <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 68, $this->source); })()), "adherant", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_edit", array("utilId" => twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 75, $this->source); })()), "utilId", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 77
        echo twig_include($this->env, $context, "utilisateur/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 77,  191 => 75,  186 => 73,  178 => 68,  171 => 64,  164 => 60,  157 => 56,  150 => 52,  143 => 48,  136 => 44,  129 => 40,  122 => 36,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Utilisateur{% endblock %}

{% block body %}
    <h1>Utilisateur</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>UtilId</th>
                <td>{{ utilisateur.utilId }}</td>
            </tr>
            <tr>
                <th>UtilNom</th>
                <td>{{ utilisateur.utilNom }}</td>
            </tr>
            <tr>
                <th>UtilPrenom</th>
                <td>{{ utilisateur.utilPrenom }}</td>
            </tr>
            <tr>
                <th>UtilTel</th>
                <td>{{ utilisateur.utilTel }}</td>
            </tr>
            <tr>
                <th>UtilMail</th>
                <td>{{ utilisateur.utilMail }}</td>
            </tr>
            <tr>
                <th>UtilLogin</th>
                <td>{{ utilisateur.utilLogin }}</td>
            </tr>
            <tr>
                <th>UtilMdp</th>
                <td>{{ utilisateur.utilMdp }}</td>
            </tr>
            <tr>
                <th>UtilActif</th>
                <td>{{ utilisateur.utilActif ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>UtilSuperadmin</th>
                <td>{{ utilisateur.utilSuperadmin ? 'Yes' : 'No' }}</td>
            </tr>
            <tr>
                <th>UtilAdresse1</th>
                <td>{{ utilisateur.utilAdresse1 }}</td>
            </tr>
            <tr>
                <th>UtilAdresse2</th>
                <td>{{ utilisateur.utilAdresse2 }}</td>
            </tr>
            <tr>
                <th>UtilCodepostal</th>
                <td>{{ utilisateur.utilCodepostal }}</td>
            </tr>
            <tr>
                <th>UtilVille</th>
                <td>{{ utilisateur.utilVille }}</td>
            </tr>
            <tr>
                <th>Producteur</th>
                <td>{{ utilisateur.producteur }}</td>
            </tr>
            <tr>
                <th>Adherant</th>
                <td>{{ utilisateur.adherant }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('utilisateur_index') }}\">back to list</a>

    <a href=\"{{ path('utilisateur_edit', {'utilId': utilisateur.utilId}) }}\">edit</a>

    {{ include('utilisateur/_delete_form.html.twig') }}
{% endblock %}", "utilisateur/show.html.twig", "D:\\wamp64\\www\\prodamap\\templates\\utilisateur\\show.html.twig");
    }
}

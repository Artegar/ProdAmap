<?php

/* inscription/inscription.html.twig */
class __TwigTemplate_407885abbb87251d49acd1f3bd1bfc421ce9c1cd7b26a996d631fdc6cee12ce1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inscription/inscription.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "inscription/inscription.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<form role=\"form\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t 
\t\t\t\t\t<label for=\"exampleInputEmail1\">
\t\t\t\t\t\tEmail address
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t 
\t\t\t\t\t<label for=\"exampleInputPassword1\">
\t\t\t\t\t\tPassword
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\tEnvoyer
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include 'base.html.twig' %}

{% block body %}
<div class=\"container-fluid\">
\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<form role=\"form\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t 
\t\t\t\t\t<label for=\"exampleInputEmail1\">
\t\t\t\t\t\tEmail address
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t 
\t\t\t\t\t<label for=\"exampleInputPassword1\">
\t\t\t\t\t\tPassword
\t\t\t\t\t</label>
\t\t\t\t\t<input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\tEnvoyer
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "inscription/inscription.html.twig", "D:\\wamp64\\www\\prodamap\\templates\\inscription\\inscription.html.twig");
    }
}

<?php

/* cliente/detalhes.html.twig */
class __TwigTemplate_988e13f443687178eefb7e4a59ae2946b8d6227282d0882e344a9e9a5476d8d5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/detalhes.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/detalhes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/detalhes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12\">
<meta charset=\"utf-8\">
\t\t<a class=\"btn btn-default\" href=\"/admin/clientes\">Voltar</a>
\t\t<hr>
\t\t<h2 class=\"page-header\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 10, $this->source); })()), "nomeCliente", array()), "html", null, true);
        echo "</h2>
\t\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item\">Sobrenome : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 12, $this->source); })()), "nmeSobrenomeCliente", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Endereço : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 13, $this->source); })()), "endCliente", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Data de Nascimento : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 14, $this->source); })()), "dtaNascCliente", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">E-mail: ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 15, $this->source); })()), "emlCliente", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Telefone : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 16, $this->source); })()), "telCliente", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">CPF : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 17, $this->source); })()), "cpfCliente", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">RG : ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 18, $this->source); })()), "rgCliente", array()), "html", null, true);
        echo "</li>
\t\t<li class=\"list-group-item\">Senha : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 19, $this->source); })()), "pwdCliente", array()), "html", null, true);
        echo "</li>


\t\t</ul>
\t\t</div>
\t\t</div>
\t\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cliente/detalhes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12\">
<meta charset=\"utf-8\">
\t\t<a class=\"btn btn-default\" href=\"/admin/clientes\">Voltar</a>
\t\t<hr>
\t\t<h2 class=\"page-header\">{{ clientes.nomeCliente }}</h2>
\t\t<ul class=\"list-group\">
\t\t<li class=\"list-group-item\">Sobrenome : {{ clientes.nmeSobrenomeCliente }}</li>
\t\t<li class=\"list-group-item\">Endereço : {{ clientes.endCliente }}</li>
\t\t<li class=\"list-group-item\">Data de Nascimento : {{ clientes.dtaNascCliente }}</li>
\t\t<li class=\"list-group-item\">E-mail: {{ clientes.emlCliente }}</li>
\t\t<li class=\"list-group-item\">Telefone : {{ clientes.telCliente }}</li>
\t\t<li class=\"list-group-item\">CPF : {{ clientes.cpfCliente }}</li>
\t\t<li class=\"list-group-item\">RG : {{ clientes.rgCliente }}</li>
\t\t<li class=\"list-group-item\">Senha : {{ clientes.pwdCliente }}</li>


\t\t</ul>
\t\t</div>
\t\t</div>
\t\t</div>
{% endblock %}
", "cliente/detalhes.html.twig", "C:\\Higo\\Desenvolvimento\\Web\\PHP\\Symphony\\loja\\templates\\cliente\\detalhes.html.twig");
    }
}

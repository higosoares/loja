<?php

/* cliente/index.html.twig */
class __TwigTemplate_7a65e15aa8d771ba5ffea84c1a4e04e84e645557e4eb20721b9397c263ed8cc1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

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
<a class=\"btn btn-default\" href=\"/admin\">Voltar</a>
<a class=\"btn btn-default\" href=\"/admin/cliente/cadastrar\">Novo</a>
<hr>
<h2 class=\"page-header\">Clientes</h2>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>#</th>
\t\t\t<th>Nome</th>
\t\t\t<th>Sobrenome</th>
\t\t\t<th>Endereço</th>
\t\t\t<th>Data de nascimento</th>
\t\t\t<th>E-mail</th>
\t\t\t<th>Telefone</th>
\t\t\t<th>CPF</th>
\t\t\t<th>RG</th>
\t\t\t<th>Senha</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) || array_key_exists("clientes", $context) ? $context["clientes"] : (function () { throw new Twig_Error_Runtime('Variable "clientes" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 30
            echo "\t\t\t<th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "idcliente", array()), "html", null, true);
            echo "</th>
\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nomeCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "nmeSobrenomeCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "endCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "dtaNascCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "emlCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "telCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "cpfCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "rgCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "pwdCliente", array()), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"/admin/cliente/detalhes/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "idcliente", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Ver</a>
\t\t\t<a href=\"/admin/cliente/editar/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "idcliente", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Editar</a>
\t\t\t<a href=\"/admin/cliente/deletar/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cliente"], "idcliente", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Deletar</a>
\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
\t</tbody>
</table>
</div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  84 => 30,  80 => 29,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12\">
<meta charset=\"utf-8\">
<a class=\"btn btn-default\" href=\"/admin\">Voltar</a>
<a class=\"btn btn-default\" href=\"/admin/cliente/cadastrar\">Novo</a>
<hr>
<h2 class=\"page-header\">Clientes</h2>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>#</th>
\t\t\t<th>Nome</th>
\t\t\t<th>Sobrenome</th>
\t\t\t<th>Endereço</th>
\t\t\t<th>Data de nascimento</th>
\t\t\t<th>E-mail</th>
\t\t\t<th>Telefone</th>
\t\t\t<th>CPF</th>
\t\t\t<th>RG</th>
\t\t\t<th>Senha</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t{% for cliente in clientes %}
\t\t\t<th scope=\"row\">{{ cliente.idcliente }}</th>
\t\t\t<td>{{ cliente.nomeCliente }}</td>
\t\t\t<td>{{ cliente.nmeSobrenomeCliente }}</td>
\t\t\t<td>{{ cliente.endCliente }}</td>
\t\t\t<td>{{ cliente.dtaNascCliente }}</td>
\t\t\t<td>{{ cliente.emlCliente }}</td>
\t\t\t<td>{{ cliente.telCliente }}</td>
\t\t\t<td>{{ cliente.cpfCliente }}</td>
\t\t\t<td>{{ cliente.rgCliente }}</td>
\t\t\t<td>{{ cliente.pwdCliente }}</td>
\t\t\t<td><a href=\"/admin/cliente/detalhes/{{ cliente.idcliente }}\" class=\"btn btn-success\">Ver</a>
\t\t\t<a href=\"/admin/cliente/editar/{{ cliente.idcliente }}\" class=\"btn btn-default\">Editar</a>
\t\t\t<a href=\"/admin/cliente/deletar/{{ cliente.idcliente }}\" class=\"btn btn-danger\">Deletar</a>
\t\t\t</td>
\t\t\t</tr>
\t\t{% endfor %}

\t</tbody>
</table>
</div>
</div>
</div>

{% endblock %}
", "cliente/index.html.twig", "C:\\Higo\\Desenvolvimento\\Web\\PHP\\Symphony\\loja\\templates\\cliente\\index.html.twig");
    }
}

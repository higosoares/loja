<?php

/* admin/admin.html.twig */
class __TwigTemplate_8856b51d6a3c81ea06e601e92d48bf20e87214974dc041e221e74a5cb10e4cd6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/admin.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12\">
<meta charset=\"utf-8\">
<h2 class=\"page-header\">Todos os itens</h2>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>#</th>
\t\t\t<th>Tabela</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<th scope=\"row\">1</th>
\t\t\t<td>Clientes - OK</td>
\t\t\t<td><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_clientes");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">2</th>
\t\t\t<td>Produtos - OK</td>
\t\t\t<td><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produtos");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">3</th>
\t\t\t<td>Categorias - OK</td>
\t\t\t<td><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categorias");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">4</th>
\t\t\t<td>Itens - OK</td>
\t\t\t<td><a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_itens");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">5</th>
\t\t\t<td>Subcategorias - OK</td>
\t\t\t<td><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_subcategorias");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">6</th>
\t\t\t<td>Formas de Pagamento - OK</td>
\t\t\t<td><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_formapagamentos");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">7</th>
\t\t\t<td>Produto Item - OK</td>
\t\t\t<td><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produtoitens");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">8</th>
\t\t\t<td>Carrinho - OK</td>
\t\t\t<td><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carrinhos");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">9</th>
\t\t\t<td>Carrinho Produto - OK</td>
\t\t\t<td><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_carrinhoprodutos");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">10</th>
\t\t\t<td>Categoria SubCategoria - OK</td>
\t\t\t<td><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categoriasubcategorias");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">11</th>
\t\t\t<td>Compra  - OK</td>
\t\t\t<td><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_compras");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">12</th>
\t\t\t<td>Entrega - OK</td>
\t\t\t<td><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_entregas");
        echo "\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">12</th>
\t\t\t<td>Visão geral</td>
\t\t\t<td><a href=\"#\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
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
        return "admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 85,  161 => 79,  152 => 73,  143 => 67,  134 => 61,  125 => 55,  116 => 49,  107 => 43,  98 => 37,  89 => 31,  80 => 25,  71 => 19,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12\">
<meta charset=\"utf-8\">
<h2 class=\"page-header\">Todos os itens</h2>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>#</th>
\t\t\t<th>Tabela</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t\t<th scope=\"row\">1</th>
\t\t\t<td>Clientes - OK</td>
\t\t\t<td><a href=\"{{ path('admin_clientes') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">2</th>
\t\t\t<td>Produtos - OK</td>
\t\t\t<td><a href=\"{{ path('admin_produtos') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">3</th>
\t\t\t<td>Categorias - OK</td>
\t\t\t<td><a href=\"{{ path('admin_categorias') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">4</th>
\t\t\t<td>Itens - OK</td>
\t\t\t<td><a href=\"{{ path('admin_itens') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">5</th>
\t\t\t<td>Subcategorias - OK</td>
\t\t\t<td><a href=\"{{ path('admin_subcategorias') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">6</th>
\t\t\t<td>Formas de Pagamento - OK</td>
\t\t\t<td><a href=\"{{ path('admin_formapagamentos') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">7</th>
\t\t\t<td>Produto Item - OK</td>
\t\t\t<td><a href=\"{{ path('admin_produtoitens') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">8</th>
\t\t\t<td>Carrinho - OK</td>
\t\t\t<td><a href=\"{{ path('admin_carrinhos') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">9</th>
\t\t\t<td>Carrinho Produto - OK</td>
\t\t\t<td><a href=\"{{ path('admin_carrinhoprodutos') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">10</th>
\t\t\t<td>Categoria SubCategoria - OK</td>
\t\t\t<td><a href=\"{{ path('admin_categoriasubcategorias') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">11</th>
\t\t\t<td>Compra  - OK</td>
\t\t\t<td><a href=\"{{ path('admin_compras') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">12</th>
\t\t\t<td>Entrega - OK</td>
\t\t\t<td><a href=\"{{ path('admin_entregas') }}\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th scope=\"row\">12</th>
\t\t\t<td>Visão geral</td>
\t\t\t<td><a href=\"#\" class=\"btn btn-default\">Ver</a>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</table>
</div>
</div>
</div>
{% endblock %}
", "admin/admin.html.twig", "C:\\Higo\\Desenvolvimento\\Web\\PHP\\Symphony\\loja\\templates\\admin\\admin.html.twig");
    }
}

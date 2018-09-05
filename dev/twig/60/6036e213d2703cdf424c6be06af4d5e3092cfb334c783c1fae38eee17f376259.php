<?php

/* categoria/subcategoria/index.html.twig */
class __TwigTemplate_bd890c9fd687c3a986b8efc3ab2c4907db42d5b7a4d851cc7163ee37c19cc799 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "categoria/subcategoria/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/subcategoria/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/subcategoria/index.html.twig"));

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
<a class=\"btn btn-default\" href=\"/admin/categoriasubcategoria/cadastrar\">Novo</a>
<hr>
<h2 class=\"page-header\">Categoria Subcategorias</h2>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>#</th>
\t\t\t<th>Categoria</th>
\t\t\t<th>SubCategoria</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriasubcategorias"]) || array_key_exists("categoriasubcategorias", $context) ? $context["categoriasubcategorias"] : (function () { throw new Twig_Error_Runtime('Variable "categoriasubcategorias" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoriasubcategoria"]) {
            // line 23
            echo "\t\t\t<th scope=\"row\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriasubcategoria"], "idCategoriaSubcategoria", array()), "html", null, true);
            echo "</th>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoriasubcategoria"], "categoriaCategoria", array()), "nmeCategoria", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categoriasubcategoria"], "subcategoriaSubcategoria", array()), "nmeSubcategoria", array()), "html", null, true);
            echo "</td>
\t\t\t<td><a href=\"/admin/categoriasubcategoria/detalhes/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriasubcategoria"], "idCategoriaSubcategoria", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">Ver</a>
\t\t\t<a href=\"/admin/categoriasubcategoria/editar/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriasubcategoria"], "idCategoriaSubcategoria", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Editar</a>
\t\t\t<a href=\"/admin/categoriasubcategoria/deletar/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoriasubcategoria"], "idCategoriaSubcategoria", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Deletar</a>
\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoriasubcategoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
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
        return "categoria/subcategoria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  77 => 23,  73 => 22,  53 => 4,  44 => 3,  15 => 1,);
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
<a class=\"btn btn-default\" href=\"/admin/categoriasubcategoria/cadastrar\">Novo</a>
<hr>
<h2 class=\"page-header\">Categoria Subcategorias</h2>
<table class=\"table table-striped\">
\t<thead>
\t\t<tr>
\t\t\t<th>#</th>
\t\t\t<th>Categoria</th>
\t\t\t<th>SubCategoria</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t<tr>
\t\t{% for categoriasubcategoria in categoriasubcategorias %}
\t\t\t<th scope=\"row\">{{ categoriasubcategoria.idCategoriaSubcategoria }}</th>
\t\t\t<td>{{ categoriasubcategoria.categoriaCategoria.nmeCategoria }}</td>
\t\t\t<td>{{ categoriasubcategoria.subcategoriaSubcategoria.nmeSubcategoria }}</td>
\t\t\t<td><a href=\"/admin/categoriasubcategoria/detalhes/{{ categoriasubcategoria.idCategoriaSubcategoria }}\" class=\"btn btn-success\">Ver</a>
\t\t\t<a href=\"/admin/categoriasubcategoria/editar/{{ categoriasubcategoria.idCategoriaSubcategoria }}\" class=\"btn btn-default\">Editar</a>
\t\t\t<a href=\"/admin/categoriasubcategoria/deletar/{{ categoriasubcategoria.idCategoriaSubcategoria }}\" class=\"btn btn-danger\">Deletar</a>
\t\t\t</td>
\t\t\t</tr>
\t\t{% endfor %}

\t</tbody>
</table>
</div>
</div>
</div>

{% endblock %}
", "categoria/subcategoria/index.html.twig", "C:\\Higo\\Desenvolvimento\\Web\\PHP\\Symphony\\loja\\templates\\categoria\\subcategoria\\index.html.twig");
    }
}

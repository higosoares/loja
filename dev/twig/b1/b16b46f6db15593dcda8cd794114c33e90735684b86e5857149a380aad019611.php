<?php

/* login/login.html.twig */
class __TwigTemplate_2164bc0eb6d9d4b202bdedd2a9afee57aa1fa0499b149901431994fdbaf05624 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "login/login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login/login.html.twig"));

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
        echo "


<div class=\"login-page\">
\t\t<div class=\"container\">
        \t\t\t<h3 class=\"w3ls-title w3ls-title1\">Realize login</h3>
\t\t\t<div class=\"login-body\">
\t\t\t\t<form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_control");
        echo "\" method=\"post\">
\t\t\t\t\t<input type=\"text\" class=\"user\" name=\"email\" placeholder=\"Seu e-mail\" required=\"\">
\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"lock\" placeholder=\"Senha\" required=\"\">
\t\t\t\t\t<input type=\"submit\" name=\"login\" value=\"Login\">
\t\t\t\t\t<div class=\"forgot-grid\">
\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Me lembre</label>
\t\t\t\t\t\t<div class=\"forgot\">
\t\t\t\t\t\t\t<a href=\"#\">Esqueceu a senha?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<h6> Não é cadastrado? <a href=\"/registro\">Cadastra-se </a> </h6>
\t\t\t<div class=\"login-page-bottom social-icons\">
\t\t\t\t<h5>Recover your social account</h5>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-facebook icon facebook\"> </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-twitter icon twitter\"> </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-google-plus icon googleplus\"> </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-dribbble icon dribbble\"> </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-rss icon rss\"> </a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 11,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}



<div class=\"login-page\">
\t\t<div class=\"container\">
        \t\t\t<h3 class=\"w3ls-title w3ls-title1\">Realize login</h3>
\t\t\t<div class=\"login-body\">
\t\t\t\t<form action=\"{{ path('login_control') }}\" method=\"post\">
\t\t\t\t\t<input type=\"text\" class=\"user\" name=\"email\" placeholder=\"Seu e-mail\" required=\"\">
\t\t\t\t\t<input type=\"password\" name=\"password\" class=\"lock\" placeholder=\"Senha\" required=\"\">
\t\t\t\t\t<input type=\"submit\" name=\"login\" value=\"Login\">
\t\t\t\t\t<div class=\"forgot-grid\">
\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Me lembre</label>
\t\t\t\t\t\t<div class=\"forgot\">
\t\t\t\t\t\t\t<a href=\"#\">Esqueceu a senha?</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<h6> Não é cadastrado? <a href=\"/registro\">Cadastra-se </a> </h6>
\t\t\t<div class=\"login-page-bottom social-icons\">
\t\t\t\t<h5>Recover your social account</h5>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-facebook icon facebook\"> </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-twitter icon twitter\"> </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-google-plus icon googleplus\"> </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-dribbble icon dribbble\"> </a></li>
\t\t\t\t\t<li><a href=\"#\" class=\"fa fa-rss icon rss\"> </a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "login/login.html.twig", "C:\\Higo\\Desenvolvimento\\Web\\PHP\\Symphony\\loja\\templates\\login\\login.html.twig");
    }
}

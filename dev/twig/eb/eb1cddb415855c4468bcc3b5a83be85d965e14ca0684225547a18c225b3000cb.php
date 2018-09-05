<?php

/* base.html.twig */
class __TwigTemplate_eb66c2f72f1eb3ea51de6c4e9e1ff28181f96037483b3aefa48a574f27319840 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
            'conta' => array($this, 'block_conta'),
            'categorias' => array($this, 'block_categorias'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 97
        $this->displayBlock('javascript', $context, $blocks);
        // line 99
        echo "</head>
<body>
\t<!-- header -->
\t<div class=\"header\">
\t\t<div class=\"w3ls-header\"><!--header-one-->

\t\t\t<div class=\"w3ls-header-right\">
\t\t\t\t<ul>
\t\t\t\t\t";
        // line 107
        $this->displayBlock('conta', $context, $blocks);
        // line 116
        echo "\t\t\t\t\t<li class=\"dropdown head-dpdn\">
\t\t\t\t\t\t<a href=\"contact.html\" class=\"dropdown-toggle\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Localização</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"dropdown head-dpdn\">
\t\t\t\t\t\t<a href=\"help.html\" class=\"dropdown-toggle\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> Ajude</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"header-two\"><!-- header-two -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t\t<h1><a href=\"/\"><span>E</span>shop </a></h1>
\t\t\t\t\t\t<h6>Sua loja virtual!</h6>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<input type=\"search\" name=\"Search\" placeholder=\"O que deseja procurar?\" required=\"\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" aria-label=\"Left Align\">
\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"> </i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-cart\">
\t\t\t\t\t<div class=\"my-account\">
\t\t\t\t\t\t<a href=\"/contato\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> CONTATE-NOS</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t<form action=\"#\" method=\"post\" class=\"last\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"display\" value=\"1\" />
\t\t\t\t\t\t\t<button class=\"w3view-cart\" type=\"submit\" name=\"submit\" value=\"\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div><!-- //header-two -->


\t\t<div class=\"header-three\"><!-- header-three -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<div class=\"cd-dropdown-wrapper\">
\t\t\t\t\t\t<a class=\"cd-dropdown-trigger\" href=\"#0\">Categorias</a>
\t\t\t\t\t\t<nav class=\"cd-dropdown\">
\t\t\t\t\t\t\t<a href=\"#0\" class=\"cd-close\">Close</a>
\t\t\t\t\t\t\t<ul class=\"cd-dropdown-content\">
                                ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 167, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 168
            echo "                                    ";
            // line 169
            echo "\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nmeCategoria", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products.html\">Todos de ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nmeCategoria", array()), "html", null, true);
            echo "</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "nmeCategoria", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
                                                    ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categorias_subcategorias"]) || array_key_exists("categorias_subcategorias", $context) ? $context["categorias_subcategorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias_subcategorias" does not exist.', 177, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 178
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "categoriaCategoria", array()), "idCategoria", array()) == twig_get_attribute($this->env, $this->source, $context["categoria"], "idCategoria", array()))) {
                    // line 179
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li> <a href=\"#\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "subcategoriaSubcategoria", array()), "nmeSubcategoria", array()), "html", null, true);
                    echo "</a> </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 182
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Electronics</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products.html\">All Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">MOBILE PHONES</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#0\">SmartPhones</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Android</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Windows</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Black berry</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li> <a href=\"products.html\">IPhones</a> </li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Tablets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">IPad</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Feature Phones</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">LARGE APPLIANCES</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Electronics </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Refrigerators</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Washing Machine</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Office Technology</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Air conditioner</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Home Automation</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">ENTERTAINMENT</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Tv & Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Digital Camera</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Gaming</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Home Audio & Theater</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Computer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Laptop </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Gaming PC</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Monitors</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Networking</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Printers & Supplies</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">HOME APPLIANCES</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\">All Electronics </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\"><a href=\"#\">Kitchen appliances</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Rice Cookers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Mixer Juicer</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Grinder</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Blenders & Choppers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Microwave Oven</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Food Processors</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Purifiers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Geysers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Gas Stove</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Vacuum Cleaner</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Sewing Machine</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Heaters & Fans</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">SMALL DEVICES</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\">All Electronics </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Wifi Dongle</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Router & Modem</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\"><a href=\"#\">Storage Devices</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Cloud Storage</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Hard Disk</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">SSD</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Pen Drive</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Memory card</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Security Devices</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Office Supplies</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Cut the Cable</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Auto Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">PERSONAL CARE</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\">All Electronics </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Epilator</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Hair Styler</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Trimmer & Shaver</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Health Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">cables</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul> <!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Fashion Store</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products1.html\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">GIRLS' CLOTHING</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Ethnic wear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Maternity wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">inner & nightwear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">casual wear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">formal wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Sports wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">BOYS' CLOTHING</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Jeans</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Casual wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Shorts</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">T-Shirts & Polos</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Trousers & Chinos</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">JACKETS</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Blazers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Bomber jackets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Denim Jackets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Duffle Coats</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Leather Jackets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Parkas</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">ACCESSORIES </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Watches </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Eyewear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Jewellery </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Footwear </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Ethnic</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Casual wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Sports Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Boots</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Stoles & Scarves</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Handbags</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">BEAUTY</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Perfumes & Deos</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Lipsticks & Nail Polish</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Beauty Gift Hampers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Personal Grooming</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Travel bags</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"products1.html\">PERSONAL CARE</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Face Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Nail Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Hair Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Body Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Bath & Spa</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul> <!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"products2.html\">Kids Fashion & Toys</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products2.html\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"products2.html\">KIDS CLOTHING</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Ethnic wear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">inner & Sleepwear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Dresses & Frocks </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Winter wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Diaper & Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">KIDS FASHION</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Footwear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Sunglasses </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">School & Stationery</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Jewellery</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Hair bands & Clips</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Baby Care</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Lotions, Oil & Powder </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Soaps, Shampoo </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Bath Towels</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Feeding</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Baby Food </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Bottle Feeding </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Breast Feeding</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Toddlers' Rooms</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">TOYS & GAMES </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Art & Crafts</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Educational Toys </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Baby Toys</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Outdoor Play </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Musical Instruments</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Toy Tips & Trends</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Preschool Toys</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Musical Instruments</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Bikes & Ride-Ons</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Video Games</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">PC & Digital Gaming</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Home, Furniture & Patio</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products3.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Kitchen Uses</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Dinner Sets </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Cookware & Bakeware </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Containers & Jars </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Kitchen Tools </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Food Storage</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Casseroles</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Furniture </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Bedroom </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Dining Room </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Kids' Furniture </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Living Room</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Office</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Mattresses</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home Decor </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Lighting</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Painting</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Curtains & Blinds</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Patio Furniture</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Wardrobes & Cabinets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Mattresses</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Gardening & Lawn </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Gardening </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Landscaping </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Sheds</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Outdoor Storage  </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Garden & Ideas </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Patio Tips</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Garage Storage</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Baskets & Bins </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Garage Door Openers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Free Standing Shelves </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Floor cleaning</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Tool Kits</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Sports, Fitness & Outdoor</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products4.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Single Sports </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Bikes </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Fishing  </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Cycling </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Musical Instruments</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Archery </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Team Sports</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Cricket </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Badminton </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Swimming Gear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Sports Apparel </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Indoor games</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Fitness </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Fitness Accessories </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Exercise Machines </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Ellipticals </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Home Gyms</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Exercise Bikes</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Camping </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\"> Airbeds</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Tents </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Gazebo's & Shelters</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Coolers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Canopies</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Sleeping Bags</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Camping Tools</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Shooting </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Knives & Tools </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Optics & Binoculars </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Lights & Lanterns </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Hunting Clothing </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Other</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Riding Gears & More </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Body Massagers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Health Monitors </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Health Drinks </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Grocery store</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products5.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Veggies & Fruits </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Vegetables </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Fruits </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Dry Fruits</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Snacks & Cookies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Breakfast & Cereal</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Packet Food</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Beverages </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Baking </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Emergency Food </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Candy & Gum </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Meals & Pasta </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Shop All Pets </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Dogs </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Fish </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Cats</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Birds </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Pet Food </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Household Essentials </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Laundry Room </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Paper & Plastic</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Pest Control </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Batteries </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Food Shops </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Fresh Food</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Food Gifts </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Frozen Food </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Organic </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Gluten Free </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Tips </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Pets Growth</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Recipes </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Snacks</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Nutrition</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Photo, Gifts & Office Supplies</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products6.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Trending Now </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Best Priced</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Chocolates </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Gift Cards </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Fashion & Accessories </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Decorative Plants </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Photos </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Shelf animation </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">3D-rendered </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">gift builder </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Frames</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Wall Decor</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Gifts </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Personalized Gifts </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Flowers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Cards & Toys</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Show pieces </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Photo Books</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Favourite Brands </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Archies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Jewel Fuel </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Ferns N Petals </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Happily Unmarried</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Chumbak</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Office</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Calendars</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Mousepads</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Phone Cases</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Tablet & Laptop Cases</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Mounted Photos</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Combos </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Chocolates </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Dry Fruits</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Sweets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Snacks</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Cakes</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Health, Beauty & Pharmacy</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products7.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Health</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Home Health Care </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Sports Nutrition </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Vision </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Vitamins </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Diet & Nutrition </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Health Tips</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Diet</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Exercise Tips  </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Vitamin Balance</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Health Insurance</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Funeral</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Beauty </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Massage & Spa </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Face Wash</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Facial Cleanser</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Makeup </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Beauty Tips</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pharmacy </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Home Delivery </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">History & Reports </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Transfer Prescriptions </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Health CheckUp</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Mobile App</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pharmacy Center </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Diabetes Shop </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Medicine Cabinet </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Vitamin Selector</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Pharmacy Help</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Automotive</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products8.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">All Motors </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Bikes </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Yachts </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Scooters </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Autos</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Bus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Accessories </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Vehicle Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Stereos & Monitors</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Bluetooth Devices</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">GPS Navigation</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Speakers & Tweeters</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Safety & Security </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Anti-Theft Devices </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Helmets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Sensors</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Auto Repair Tools </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Antifreeze & Coolants </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Car Interiors</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Stereos </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Floor Mats </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Seat Covers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Chargers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Audio Finder </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Exterior Accessories </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Wheel covers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Car Lighting </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Polish & Waxes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Cargo Management</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Car Decoration </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Car Care</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Auto Tips & Advice </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Car Washes & Cleaners </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Car Wax & Polish</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Cleaning Tools</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Detailing Kits </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Books, Music & Movies</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products9.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Books</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\"><a href=\"#\">Exam books </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">CAT/MAT/XAT</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Civil Services</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">AFCAT</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">New Releases</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Academic Text </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Romance Books </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Journals </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Children's & Teen Books </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Music</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">New Releases </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Country Music </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Musical Instruments </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Collections</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Boxed Sets </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Music Combo</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Pop </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Preorders </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Album Songs</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Top 50 CDs </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Music DVDs </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Movies</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">New Releases </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Children & Family </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Classic Movies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Bollywood Movies </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Movies Combo</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Hollywood Movies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Digital Movies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Boxed Sets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Animated</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Adventure</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">TV Shows</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Serials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Best Programs</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Celebrations</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Top Shows</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"sitemap.html\">Full Site Directory </a></li>
\t\t\t\t\t\t\t\t";
        // line 956
        $this->displayBlock('categorias', $context, $blocks);
        // line 957
        echo "\t\t\t\t\t\t\t</ul> <!-- .cd-dropdown-content -->
\t\t\t\t\t\t</nav> <!-- .cd-dropdown -->
\t\t\t\t\t</div> <!-- .cd-dropdown-wrapper -->
\t\t\t\t</div>
\t\t\t\t<div class=\"move-text\">
\t\t\t\t\t<div class=\"marquee\"><a href=\"offers.html\"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
\t\t\t\t\t<script type=\"text/javascript\" src=\"";
        // line 963
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.marquee.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t\t\t<script>
\t\t\t\t\t  \$('.marquee').marquee({ pauseOnHover: true });
\t\t\t\t\t  //@ sourceURL=pen.js
\t\t\t\t\t</script>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- //header -->

\t<div class=\"container\">
<div class=\"row\">
\t<div class=\"col-md-12\">

\t";
        // line 978
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 978, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 979
            echo "\t\t<div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 981
        echo "
\t";
        // line 982
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 982, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 983
            echo "\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>

\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 986
        echo "


\t</div>
</div>

</div><!-- /.container -->
";
        // line 993
        $this->displayBlock('body', $context, $blocks);
        // line 994
        echo "



\t<!-- footer-top -->
\t<div class=\"w3agile-ftr-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"ftr-toprow\">

\t\t\t\t<div class=\"col-md-4 ftr-top-grids\">
\t\t\t\t\t<div class=\"ftr-top-left\">
\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ftr-top-right\">
\t\t\t\t\t\t<h4>CUSTOMER CARE</h4>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 ftr-top-grids\">
\t\t\t\t\t<div class=\"ftr-top-left\">
\t\t\t\t\t\t<i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ftr-top-right\">
\t\t\t\t\t\t<h4>GOOD QUALITY</h4>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- //footer-top -->
\t<!-- footer -->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-info w3-agileits-info\">
\t\t\t\t<div class=\"col-md-4 address-left agileinfo\">
\t\t\t\t\t<div class=\"footer-logo header-logo\">
\t\t\t\t\t\t\t<h1><a href=\"/\"><span>E</span>shop </a></h1>
\t\t\t\t\t\t\t<h6>Sua loja virtual!</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><i class=\"fa fa-map-marker\"></i> 123 San Sebastian, New York City USA.</li>
\t\t\t\t\t\t<li><i class=\"fa fa-mobile\"></i> 333 222 3333 </li>
\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i> +222 11 4444 </li>
\t\t\t\t\t\t<li><i class=\"fa fa-envelope-o\"></i> <a href=\"mailto:example@mail.com\"> mail@example.com</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 address-right\">
\t\t\t\t\t<div class=\"col-md-4 footer-grids\">
\t\t\t\t\t\t<h3>Company</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"about.html\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"marketplace.html\">Marketplace</a></li>
\t\t\t\t\t\t\t<li><a href=\"values.html\">Core Values</a></li>
\t\t\t\t\t\t\t<li><a href=\"privacy.html\">Privacy Policy</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 footer-grids\">
\t\t\t\t\t\t<h3>Services</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"login.html\">Returns</a></li>
\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ</a></li>
\t\t\t\t\t\t\t<li><a href=\"sitemap.html\">Site Map</a></li>
\t\t\t\t\t\t\t<li><a href=\"login.html\">Order Status</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- //footer -->
\t<div class=\"copy-right\">
\t\t<div class=\"container\">
\t\t\t<p>© 2016 E Shop . All rights reserved | Design by <a href=\"http://w3layouts.com\"> W3layouts.</a></p>
\t\t</div>
\t</div>
\t<!-- cart-js -->
\t<script src=\"";
        // line 1078
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/minicart.js"), "html", null, true);
        echo "\"></script>
\t<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        \tvar items, len, i;

        \tif (this.subtotal() > 0) {
        \t\titems = this.items();

        \t\tfor (i = 0, len = items.length; i < len; i++) {
        \t\t\titems[i].set('shipping', 0);
        \t\t\titems[i].set('shipping2', 0);
        \t\t}
        \t}
        });
    </script>
\t<!-- //cart-js -->
\t<!-- menu js aim -->
\t<script src=\"";
        // line 1097
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.menu-aim.js"), "html", null, true);
        echo "\"> </script>
\t<script src=\"";
        // line 1098
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script> <!-- Resource jQuery -->
\t<!-- //menu js aim -->
\t<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 1103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "E-shop | Online Shopping | Home";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
\t\tfunction hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" /> <!-- menu style -->
<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"> <!-- carousel slider -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<!-- //font-awesome icons -->
<!-- js -->
<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts -->
<!-- scroll to fixed-->
<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-scrolltofixed-min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script>
    \$(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        \$('.header-two').scrollToFixed();
        // previous summary up the page.

        var summaries = \$('.summary');
        summaries.each(function(i) {
            var summary = \$(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: \$('.header-two').outerHeight(true) + 10,
                zIndex: 999
            });
        });
    });
</script>
<!-- //scroll to fixed-->
<!-- start-smooth-scrolling -->
<script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/move-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\t\tjQuery(document).ready(function(\$) {
\t\t\t\$(\".scroll\").click(function(event){
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
\t\t\t});
\t\t});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type=\"text/javascript\">
\t\$(document).ready(function() {

\t\tvar defaults = {
\t\t\tcontainerID: 'toTop', // fading element id
\t\t\tcontainerHoverID: 'toTopHover', // fading element hover id
\t\t\tscrollSpeed: 1200,
\t\t\teasingType: 'linear'
\t\t};

\t\t\$().UItoTop({ easingType: 'easeOutQuart' });

\t});
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- the jScrollPane script -->
<script type=\"text/javascript\" src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.jscrollpane.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" id=\"sourcecode\">
\t\$(function()
\t{
\t\t\$('.scroll-pane').jScrollPane();
\t});
</script>
<!-- //the jScrollPane script -->
<script type=\"text/javascript\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mousewheel.js"), "html", null, true);
        echo "\"></script>
<!-- the mousewheel plugin -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 107
    public function block_conta($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conta"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "conta"));

        // line 108
        echo "\t\t\t\t\t<li class=\"dropdown head-dpdn\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Minha Conta<span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"/login\">Login </a></li>
\t\t\t\t\t\t\t<li><a href=\"/registro\">Registro</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 956
    public function block_categorias($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorias"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "categorias"));

        echo " ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\CategoriaController::mostrarCategorias"));
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 993
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1373 => 993,  1353 => 956,  1336 => 108,  1327 => 107,  1310 => 97,  1297 => 94,  1286 => 86,  1256 => 59,  1252 => 58,  1225 => 34,  1213 => 25,  1209 => 24,  1203 => 21,  1197 => 18,  1193 => 17,  1189 => 16,  1185 => 15,  1181 => 14,  1177 => 13,  1168 => 6,  1159 => 5,  1141 => 4,  1127 => 1103,  1119 => 1098,  1115 => 1097,  1093 => 1078,  1007 => 994,  1005 => 993,  996 => 986,  986 => 983,  982 => 982,  979 => 981,  970 => 979,  966 => 978,  948 => 963,  940 => 957,  938 => 956,  167 => 187,  157 => 182,  151 => 181,  145 => 179,  142 => 178,  138 => 177,  133 => 175,  128 => 173,  122 => 170,  119 => 169,  117 => 168,  113 => 167,  60 => 116,  58 => 107,  48 => 99,  46 => 97,  44 => 5,  40 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<title>{% block title %}E-shop | Online Shopping | Home{% endblock %}</title>
{% block stylesheets %}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Smart Bazaar Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false);
\t\tfunction hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
<link href=\"{{ asset('css/bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"{{ asset('css/menu.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" /> <!-- menu style -->
<link href=\"{{ asset('css/animate.min.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"{{ asset('css/owl.carousel.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"> <!-- carousel slider -->
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\">
<!-- //font-awesome icons -->
<!-- js -->
<script src=\"{{ asset('js/jquery-2.2.3.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.js') }}\"></script>
<!-- //js -->
<!-- web-fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lovers+Quarrel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<!-- web-fonts -->
<!-- scroll to fixed-->
<script src=\"{{ asset('js/jquery-scrolltofixed-min.js') }}\" type=\"text/javascript\"></script>

<script>
    \$(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        \$('.header-two').scrollToFixed();
        // previous summary up the page.

        var summaries = \$('.summary');
        summaries.each(function(i) {
            var summary = \$(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: \$('.header-two').outerHeight(true) + 10,
                zIndex: 999
            });
        });
    });
</script>
<!-- //scroll to fixed-->
<!-- start-smooth-scrolling -->
<script type=\"text/javascript\" src=\"{{ asset('js/move-top.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('js/easing.js') }}\"></script>
<script type=\"text/javascript\">
\t\tjQuery(document).ready(function(\$) {
\t\t\t\$(\".scroll\").click(function(event){
\t\t\t\tevent.preventDefault();
\t\t\t\t\$('html,body').animate({scrollTop:\$(this.hash).offset().top},1000);
\t\t\t});
\t\t});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script type=\"text/javascript\">
\t\$(document).ready(function() {

\t\tvar defaults = {
\t\t\tcontainerID: 'toTop', // fading element id
\t\t\tcontainerHoverID: 'toTopHover', // fading element hover id
\t\t\tscrollSpeed: 1200,
\t\t\teasingType: 'linear'
\t\t};

\t\t\$().UItoTop({ easingType: 'easeOutQuart' });

\t});
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- the jScrollPane script -->
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.jscrollpane.min.js') }}\"></script>
<script type=\"text/javascript\" id=\"sourcecode\">
\t\$(function()
\t{
\t\t\$('.scroll-pane').jScrollPane();
\t});
</script>
<!-- //the jScrollPane script -->
<script type=\"text/javascript\" src=\"{{ asset('js/jquery.mousewheel.js') }}\"></script>
<!-- the mousewheel plugin -->
{% endblock %}
{% block javascript %}
{% endblock %}
</head>
<body>
\t<!-- header -->
\t<div class=\"header\">
\t\t<div class=\"w3ls-header\"><!--header-one-->

\t\t\t<div class=\"w3ls-header-right\">
\t\t\t\t<ul>
\t\t\t\t\t{% block conta %}
\t\t\t\t\t<li class=\"dropdown head-dpdn\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Minha Conta<span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"/login\">Login </a></li>
\t\t\t\t\t\t\t<li><a href=\"/registro\">Registro</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t{% endblock %}
\t\t\t\t\t<li class=\"dropdown head-dpdn\">
\t\t\t\t\t\t<a href=\"contact.html\" class=\"dropdown-toggle\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> Localização</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li class=\"dropdown head-dpdn\">
\t\t\t\t\t\t<a href=\"help.html\" class=\"dropdown-toggle\"><i class=\"fa fa-question-circle\" aria-hidden=\"true\"></i> Ajude</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t</div>
\t\t<div class=\"header-two\"><!-- header-two -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"header-logo\">
\t\t\t\t\t\t<h1><a href=\"/\"><span>E</span>shop </a></h1>
\t\t\t\t\t\t<h6>Sua loja virtual!</h6>
\t\t\t\t\t</div>
\t\t\t\t<div class=\"header-search\">
\t\t\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t\t\t<input type=\"search\" name=\"Search\" placeholder=\"O que deseja procurar?\" required=\"\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\" aria-label=\"Left Align\">
\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"> </i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-cart\">
\t\t\t\t\t<div class=\"my-account\">
\t\t\t\t\t\t<a href=\"/contato\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i> CONTATE-NOS</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t<form action=\"#\" method=\"post\" class=\"last\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"display\" value=\"1\" />
\t\t\t\t\t\t\t<button class=\"w3view-cart\" type=\"submit\" name=\"submit\" value=\"\"><i class=\"fa fa-cart-arrow-down\" aria-hidden=\"true\"></i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div><!-- //header-two -->


\t\t<div class=\"header-three\"><!-- header-three -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"menu\">
\t\t\t\t\t<div class=\"cd-dropdown-wrapper\">
\t\t\t\t\t\t<a class=\"cd-dropdown-trigger\" href=\"#0\">Categorias</a>
\t\t\t\t\t\t<nav class=\"cd-dropdown\">
\t\t\t\t\t\t\t<a href=\"#0\" class=\"cd-close\">Close</a>
\t\t\t\t\t\t\t<ul class=\"cd-dropdown-content\">
                                {% for categoria in categorias %}
                                    {#{%  if categoria.nmeCategoria == 'Vestuário' %}#}
\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ categoria.nmeCategoria }}</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products.html\">Todos de {{ categoria.nmeCategoria }}</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">{{ categoria.nmeCategoria }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
                                                    {% for item in categorias_subcategorias %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% if item.categoriaCategoria.idCategoria == categoria.idCategoria %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li> <a href=\"#\">{{ item.subcategoriaSubcategoria.nmeSubcategoria }}</a> </li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Electronics</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products.html\">All Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">MOBILE PHONES</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#0\">SmartPhones</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Android</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Windows</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Black berry</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li> <a href=\"products.html\">IPhones</a> </li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Tablets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">IPad</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Feature Phones</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">LARGE APPLIANCES</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Electronics </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Refrigerators</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Washing Machine</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Office Technology</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Air conditioner</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Home Automation</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">ENTERTAINMENT</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Tv & Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Digital Camera</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Gaming</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Home Audio & Theater</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Computer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Laptop </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Gaming PC</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Monitors</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Networking</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Printers & Supplies</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">HOME APPLIANCES</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\">All Electronics </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\"><a href=\"#\">Kitchen appliances</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Rice Cookers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Mixer Juicer</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Grinder</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Blenders & Choppers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Microwave Oven</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Food Processors</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Purifiers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Geysers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Gas Stove</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Vacuum Cleaner</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Sewing Machine</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Heaters & Fans</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">SMALL DEVICES</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\">All Electronics </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Wifi Dongle</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Router & Modem</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\"><a href=\"#\">Storage Devices</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Cloud Storage</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Hard Disk</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">SSD</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Pen Drive</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Memory card</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Security Devices</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Office Supplies</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Cut the Cable</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Auto Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">PERSONAL CARE</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#0\">All Electronics </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Epilator</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Hair Styler</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Trimmer & Shaver</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Health Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">cables</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul> <!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Fashion Store</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products1.html\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">GIRLS' CLOTHING</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Ethnic wear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Maternity wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">inner & nightwear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">casual wear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">formal wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Sports wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">BOYS' CLOTHING</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Jeans</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Casual wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Shorts</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">T-Shirts & Polos</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Trousers & Chinos</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">JACKETS</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Blazers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Bomber jackets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Denim Jackets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Duffle Coats</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Leather Jackets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Parkas</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">ACCESSORIES </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Watches </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Eyewear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Jewellery </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Footwear </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Ethnic</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Casual wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Sports Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Boots</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Stoles & Scarves</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Handbags</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">BEAUTY</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Perfumes & Deos</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Lipsticks & Nail Polish</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Beauty Gift Hampers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Personal Grooming</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Travel bags</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"products1.html\">PERSONAL CARE</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Fashion Stores</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Face Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Nail Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Hair Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Body Care</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products1.html\">Bath & Spa</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul> <!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"products2.html\">Kids Fashion & Toys</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products2.html\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"products2.html\">KIDS CLOTHING</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Ethnic wear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">inner & Sleepwear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Dresses & Frocks </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Winter wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Diaper & Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">KIDS FASHION</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Footwear</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Sunglasses </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">School & Stationery</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Jewellery</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Hair bands & Clips</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Baby Care</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Lotions, Oil & Powder </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Soaps, Shampoo </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Bath Towels</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Feeding</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Baby Food </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Bottle Feeding </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Breast Feeding</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Toddlers' Rooms</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">TOYS & GAMES </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Art & Crafts</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Educational Toys </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Baby Toys</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Outdoor Play </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Musical Instruments</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">All Kids Fashions</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Toy Tips & Trends</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Preschool Toys</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Musical Instruments</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Bikes & Ride-Ons</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">Video Games</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products2.html\">PC & Digital Gaming</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Home, Furniture & Patio</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products3.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Kitchen Uses</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Dinner Sets </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Cookware & Bakeware </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Containers & Jars </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Kitchen Tools </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Food Storage</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Casseroles</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Furniture </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Bedroom </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Dining Room </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Kids' Furniture </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Living Room</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Office</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Mattresses</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home Decor </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Lighting</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Painting</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Curtains & Blinds</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Patio Furniture</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Wardrobes & Cabinets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Mattresses</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Gardening & Lawn </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Gardening </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Landscaping </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Sheds</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Outdoor Storage  </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Garden & Ideas </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Patio Tips</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Garage Storage</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Baskets & Bins </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Garage Door Openers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Free Standing Shelves </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Floor cleaning</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products3.html\">Tool Kits</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Sports, Fitness & Outdoor</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products4.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Single Sports </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Bikes </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Fishing  </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Cycling </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Musical Instruments</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Archery </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Team Sports</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Cricket </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Badminton </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Swimming Gear </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Sports Apparel </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Indoor games</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Fitness </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Fitness Accessories </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Exercise Machines </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Ellipticals </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Home Gyms</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Exercise Bikes</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Camping </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\"> Airbeds</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Tents </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Gazebo's & Shelters</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Coolers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Canopies</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Sleeping Bags</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Camping Tools</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Shooting </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Knives & Tools </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Optics & Binoculars </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Lights & Lanterns </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Hunting Clothing </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Other</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Riding Gears & More </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Body Massagers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Health Monitors </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products4.html\">Health Drinks </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Grocery store</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products5.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Veggies & Fruits </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Vegetables </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Fruits </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Dry Fruits</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Snacks & Cookies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Breakfast & Cereal</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Packet Food</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Beverages </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Baking </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Emergency Food </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Candy & Gum </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Meals & Pasta </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Shop All Pets </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Dogs </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Fish </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Cats</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Birds </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Pet Food </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Household Essentials </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Laundry Room </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Paper & Plastic</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Pest Control </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Batteries </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Food Shops </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Fresh Food</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Food Gifts </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Frozen Food </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Organic </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Gluten Free </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Tips </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Pets Growth</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Recipes </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Snacks</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products5.html\">Nutrition</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li> <!-- .has-children -->
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Photo, Gifts & Office Supplies</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products6.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Trending Now </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Best Priced</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Chocolates </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Gift Cards </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Fashion & Accessories </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Decorative Plants </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Photos </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Shelf animation </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">3D-rendered </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">gift builder </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Frames</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Wall Decor</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Gifts </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Personalized Gifts </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Flowers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Cards & Toys</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Show pieces </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Photo Books</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Favourite Brands </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Archies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Jewel Fuel </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Ferns N Petals </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Happily Unmarried</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Chumbak</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Office</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Calendars</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Mousepads</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Phone Cases</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Tablet & Laptop Cases</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Mounted Photos</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Combos </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Chocolates </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Dry Fruits</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Sweets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Snacks</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products6.html\">Cakes</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Health, Beauty & Pharmacy</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products7.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Health</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Home Health Care </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Sports Nutrition </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Vision </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Vitamins </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Diet & Nutrition </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Health Tips</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Diet</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Exercise Tips  </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Vitamin Balance</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Health Insurance</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Funeral</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Beauty </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Massage & Spa </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Face Wash</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Facial Cleanser</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Makeup </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Beauty Tips</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pharmacy </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Home Delivery </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">History & Reports </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Transfer Prescriptions </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Health CheckUp</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Mobile App</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pharmacy Center </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Diabetes Shop </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Medicine Cabinet </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Vitamin Selector</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products7.html\">Pharmacy Help</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Automotive</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products8.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">All Motors </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Bikes </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Yachts </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Scooters </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Autos</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Bus</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Accessories </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Vehicle Electronics</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Stereos & Monitors</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Bluetooth Devices</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">GPS Navigation</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Speakers & Tweeters</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Safety & Security </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Anti-Theft Devices </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Helmets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Sensors</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Auto Repair Tools </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Antifreeze & Coolants </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Car Interiors</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Stereos </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Floor Mats </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Seat Covers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Chargers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Audio Finder </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Exterior Accessories </a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Wheel covers </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Car Lighting </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Polish & Waxes</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Cargo Management</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Car Decoration </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Car Care</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Auto Tips & Advice </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Car Washes & Cleaners </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Car Wax & Polish</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Cleaning Tools</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products8.html\">Detailing Kits </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Books, Music & Movies</a>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-secondary-dropdown is-hidden\">
\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\">Menu</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"see-all\"><a href=\"products9.html\">All Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Books</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\"><a href=\"#\">Exam books </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"> </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">CAT/MAT/XAT</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Civil Services</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">AFCAT</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">New Releases</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Academic Text </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Romance Books </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Journals </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Children's & Teen Books </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Music</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">New Releases </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Country Music </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Musical Instruments </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Collections</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Boxed Sets </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Music Combo</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Pop </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Preorders </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Album Songs</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Top 50 CDs </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Music DVDs </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Movies</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">New Releases </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Children & Family </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Action</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Classic Movies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Bollywood Movies </a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Movies Combo</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Hollywood Movies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Digital Movies </a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Boxed Sets</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Animated</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Adventure</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"has-children\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">TV Shows</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"is-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"go-back\"><a href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Serials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Best Programs</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Celebrations</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products9.html\">Top Shows</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul><!-- .cd-secondary-dropdown -->
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"sitemap.html\">Full Site Directory </a></li>
\t\t\t\t\t\t\t\t{% block categorias %} {{ render(controller('App\\\\Controller\\\\CategoriaController::mostrarCategorias')) }} {% endblock %}
\t\t\t\t\t\t\t</ul> <!-- .cd-dropdown-content -->
\t\t\t\t\t\t</nav> <!-- .cd-dropdown -->
\t\t\t\t\t</div> <!-- .cd-dropdown-wrapper -->
\t\t\t\t</div>
\t\t\t\t<div class=\"move-text\">
\t\t\t\t\t<div class=\"marquee\"><a href=\"offers.html\"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div>
\t\t\t\t\t<script type=\"text/javascript\" src=\"{{ asset('js/jquery.marquee.min.js') }}\"></script>
\t\t\t\t\t<script>
\t\t\t\t\t  \$('.marquee').marquee({ pauseOnHover: true });
\t\t\t\t\t  //@ sourceURL=pen.js
\t\t\t\t\t</script>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- //header -->

\t<div class=\"container\">
<div class=\"row\">
\t<div class=\"col-md-12\">

\t{% for flash_message in app.session.flashbag.get('notice') %}
\t\t<div class=\"alert alert-success\">{{ flash_message }}</div>
\t{% endfor %}

\t{% for flash_message in app.session.flashbag.get('error') %}
\t\t<div class=\"alert alert-danger\">{{ flash_message }}</div>

\t{% endfor %}



\t</div>
</div>

</div><!-- /.container -->
{% block body %}{% endblock %}




\t<!-- footer-top -->
\t<div class=\"w3agile-ftr-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"ftr-toprow\">

\t\t\t\t<div class=\"col-md-4 ftr-top-grids\">
\t\t\t\t\t<div class=\"ftr-top-left\">
\t\t\t\t\t\t<i class=\"fa fa-user\" aria-hidden=\"true\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ftr-top-right\">
\t\t\t\t\t\t<h4>CUSTOMER CARE</h4>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 ftr-top-grids\">
\t\t\t\t\t<div class=\"ftr-top-left\">
\t\t\t\t\t\t<i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"ftr-top-right\">
\t\t\t\t\t\t<h4>GOOD QUALITY</h4>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- //footer-top -->
\t<!-- footer -->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-info w3-agileits-info\">
\t\t\t\t<div class=\"col-md-4 address-left agileinfo\">
\t\t\t\t\t<div class=\"footer-logo header-logo\">
\t\t\t\t\t\t\t<h1><a href=\"/\"><span>E</span>shop </a></h1>
\t\t\t\t\t\t\t<h6>Sua loja virtual!</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><i class=\"fa fa-map-marker\"></i> 123 San Sebastian, New York City USA.</li>
\t\t\t\t\t\t<li><i class=\"fa fa-mobile\"></i> 333 222 3333 </li>
\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i> +222 11 4444 </li>
\t\t\t\t\t\t<li><i class=\"fa fa-envelope-o\"></i> <a href=\"mailto:example@mail.com\"> mail@example.com</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8 address-right\">
\t\t\t\t\t<div class=\"col-md-4 footer-grids\">
\t\t\t\t\t\t<h3>Company</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"about.html\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"marketplace.html\">Marketplace</a></li>
\t\t\t\t\t\t\t<li><a href=\"values.html\">Core Values</a></li>
\t\t\t\t\t\t\t<li><a href=\"privacy.html\">Privacy Policy</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 footer-grids\">
\t\t\t\t\t\t<h3>Services</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"login.html\">Returns</a></li>
\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ</a></li>
\t\t\t\t\t\t\t<li><a href=\"sitemap.html\">Site Map</a></li>
\t\t\t\t\t\t\t<li><a href=\"login.html\">Order Status</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- //footer -->
\t<div class=\"copy-right\">
\t\t<div class=\"container\">
\t\t\t<p>© 2016 E Shop . All rights reserved | Design by <a href=\"http://w3layouts.com\"> W3layouts.</a></p>
\t\t</div>
\t</div>
\t<!-- cart-js -->
\t<script src=\"{{ asset('js/minicart.js') }}\"></script>
\t<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        \tvar items, len, i;

        \tif (this.subtotal() > 0) {
        \t\titems = this.items();

        \t\tfor (i = 0, len = items.length; i < len; i++) {
        \t\t\titems[i].set('shipping', 0);
        \t\t\titems[i].set('shipping2', 0);
        \t\t}
        \t}
        });
    </script>
\t<!-- //cart-js -->
\t<!-- menu js aim -->
\t<script src=\"{{ asset('js/jquery.menu-aim.js') }}\"> </script>
\t<script src=\"{{ asset('js/main.js') }}\"></script> <!-- Resource jQuery -->
\t<!-- //menu js aim -->
\t<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
</body>
</html>
", "base.html.twig", "C:\\Higo\\Desenvolvimento\\Web\\PHP\\Symphony\\loja\\templates\\base.html.twig");
    }
}

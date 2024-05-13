<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_be69aa7300ba4aed3dd2b2c801e0452e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello HomeController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Organiza el contenido en una columna */
        }
        .container-fluid {
            flex: 1; /* Permite que el contenedor crezca y ocupe cualquier espacio disponible */
            display: flex;
            flex-direction: column;
            min-height: 0; /* Impide que el contenedor se estire más allá de su contenido mínimo */
        }
        .top-right-buttons {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 1000; /* Asegura que esté por encima de otros elementos */
        }
        .footer {
            background: #f8f9fa;
            padding: 1rem;
            text-align: center;
            width: 100%;
            margin-top: auto; /* Empuja el footer hacia abajo */
        }
        .carousel {
            margin-top: 6rem;
            margin-right: auto;
            margin-left: auto;
            width: 90%;
            max-width: 900px;
        }
        .carousel .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        .carousel .carousel-inner .carousel-item img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 56
        yield "<div class=\"container-fluid\">
    <div class=\"top-right-buttons\">
        <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargar_pdf");
        yield "\" class=\"btn btn-primary\">Descargar PDF</a>
        <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn btn-secondary\">Login</a>
    </div>

    <div id=\"newsCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"https://via.placeholder.com/900x400\" class=\"d-block w-100\" alt=\"Imagen de muestra\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Título de muestra</h5>
                    <p>Descripción breve de la muestra.</p>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#newsCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#newsCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

    <footer class=\"footer\">
        <a href=\"https://facebook.com\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fab fa-facebook-f\"></i></a>
        <a href=\"https://twitter.com\" class=\"btn btn-social-icon btn-twitter\"><i class=\"fab fa-twitter\"></i></a>
        <a href=\"https://instagram.com\" class=\"btn btn-social-icon btn-instagram\"><i class=\"fab fa-instagram\"></i></a>
    </footer>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  169 => 59,  165 => 58,  161 => 56,  151 => 55,  91 => 6,  81 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body, html {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column; /* Organiza el contenido en una columna */
        }
        .container-fluid {
            flex: 1; /* Permite que el contenedor crezca y ocupe cualquier espacio disponible */
            display: flex;
            flex-direction: column;
            min-height: 0; /* Impide que el contenedor se estire más allá de su contenido mínimo */
        }
        .top-right-buttons {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 1000; /* Asegura que esté por encima de otros elementos */
        }
        .footer {
            background: #f8f9fa;
            padding: 1rem;
            text-align: center;
            width: 100%;
            margin-top: auto; /* Empuja el footer hacia abajo */
        }
        .carousel {
            margin-top: 6rem;
            margin-right: auto;
            margin-left: auto;
            width: 90%;
            max-width: 900px;
        }
        .carousel .carousel-inner {
            position: relative;
            width: 100%;
            overflow: hidden;
        }
        .carousel .carousel-inner .carousel-item img {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <div class=\"top-right-buttons\">
        <a href=\"{{ path('descargar_pdf') }}\" class=\"btn btn-primary\">Descargar PDF</a>
        <a href=\"{{ path('app_login') }}\" class=\"btn btn-secondary\">Login</a>
    </div>

    <div id=\"newsCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"https://via.placeholder.com/900x400\" class=\"d-block w-100\" alt=\"Imagen de muestra\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>Título de muestra</h5>
                    <p>Descripción breve de la muestra.</p>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#newsCarousel\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#newsCarousel\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

    <footer class=\"footer\">
        <a href=\"https://facebook.com\" class=\"btn btn-social-icon btn-facebook\"><i class=\"fab fa-facebook-f\"></i></a>
        <a href=\"https://twitter.com\" class=\"btn btn-social-icon btn-twitter\"><i class=\"fab fa-twitter\"></i></a>
        <a href=\"https://instagram.com\" class=\"btn btn-social-icon btn-instagram\"><i class=\"fab fa-instagram\"></i></a>
    </footer>
</div>
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\home\\index.html.twig");
    }
}

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

/* actividad/lista_actividades.html.twig */
class __TwigTemplate_88ad04ae51ad4c62c3eeaa0084fd5020 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actividad/lista_actividades.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actividad/lista_actividades.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "actividad/lista_actividades.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Lista de Actividades";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "<div class=\"container\">
    <h1 class=\"mb-3\">Lista de Actividades</h1>
    <div class=\"row\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actividades"]) || array_key_exists("actividades", $context) ? $context["actividades"] : (function () { throw new RuntimeError('Variable "actividades" does not exist.', 11, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 12
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "descripcion", [], "any", false, false, false, 15), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">
                            <strong>Fecha Inicio:</strong> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "fechaHoraInicio", [], "any", false, false, false, 17), "Y-m-d H:i"), "html", null, true);
            yield "<br>
                            <strong>Fecha Fin:</strong> ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "fechaHoraFin", [], "any", false, false, false, 18), "Y-m-d H:i"), "html", null, true);
            yield "
                        </p>
                        <a href=\"#\" class=\"btn btn-primary\">Ver detalles</a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            yield "            <p>No hay actividades disponibles.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </div>
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
        return "actividad/lista_actividades.html.twig";
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
        return array (  133 => 27,  126 => 25,  114 => 18,  110 => 17,  105 => 15,  100 => 12,  95 => 11,  90 => 8,  80 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/actividad/lista_actividades.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Lista de Actividades{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"mb-3\">Lista de Actividades</h1>
    <div class=\"row\">
        {% for actividad in actividades %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ actividad.descripcion }}</h5>
                        <p class=\"card-text\">
                            <strong>Fecha Inicio:</strong> {{ actividad.fechaHoraInicio|date('Y-m-d H:i') }}<br>
                            <strong>Fecha Fin:</strong> {{ actividad.fechaHoraFin|date('Y-m-d H:i') }}
                        </p>
                        <a href=\"#\" class=\"btn btn-primary\">Ver detalles</a>
                    </div>
                </div>
            </div>
        {% else %}
            <p>No hay actividades disponibles.</p>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "actividad/lista_actividades.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\actividad\\lista_actividades.html.twig");
    }
}

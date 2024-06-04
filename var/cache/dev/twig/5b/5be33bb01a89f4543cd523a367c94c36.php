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

/* evento/lista_eventos.html.twig */
class __TwigTemplate_7c17a7786f5048c18188ca007bf362f5 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/lista_eventos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/lista_eventos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evento/lista_eventos.html.twig", 3);
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

        yield "Lista de Eventos";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/eventos.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        yield "<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Lista de Eventos</h1>
    <div class=\"row\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 17
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "titulo", [], "any", false, false, false, 20), "html", null, true);
            yield "</h5>
                        <p class=\"card-text\">
                            <strong>Fecha Inicio:</strong> ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "fechaInicio", [], "any", false, false, false, 22), "Y-m-d H:i"), "html", null, true);
            yield "<br>
                            <strong>Fecha Fin:</strong> ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "fechaFin", [], "any", false, false, false, 23), "Y-m-d H:i"), "html", null, true);
            yield "
                        </p>
                        <button class=\"btn btn-primary\" onclick=\"verDetalleEvento(";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield ")\">Ver detalles</button>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 30
            yield "            <div class=\"col-12\">
                <p class=\"text-center\">No hay eventos disponibles.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    </div>
</div>

<!-- Modal para detalles de evento -->
<div class=\"modal fade\" id=\"modalDetalleEvento\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalDetalleEventoLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modalDetalleEventoLabel\">Detalle del Evento</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <h5 id=\"eventoTitulo\"></h5>
                <p id=\"eventoDescripcion\"></p>
                <p><strong>Fecha Inicio:</strong> <span id=\"eventoFechaInicio\"></span></p>
                <p><strong>Fecha Fin:</strong> <span id=\"eventoFechaFin\"></span></p>
                <h6>Actividades</h6>
                <ul id=\"eventoActividades\" class=\"list-unstyled\"></ul>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 61
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        yield "<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/evento.js"), "html", null, true);
        yield "\"></script>
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
        return "evento/lista_eventos.html.twig";
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
        return array (  218 => 64,  214 => 62,  204 => 61,  168 => 34,  159 => 30,  149 => 25,  144 => 23,  140 => 22,  135 => 20,  130 => 17,  125 => 16,  120 => 13,  110 => 12,  97 => 9,  92 => 8,  82 => 7,  62 => 5,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/evento/lista_eventos.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Lista de Eventos{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('css/eventos.css') }}\">
{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h1 class=\"mb-4 text-center\">Lista de Eventos</h1>
    <div class=\"row\">
        {% for evento in eventos %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card shadow-sm h-100\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ evento.titulo }}</h5>
                        <p class=\"card-text\">
                            <strong>Fecha Inicio:</strong> {{ evento.fechaInicio|date('Y-m-d H:i') }}<br>
                            <strong>Fecha Fin:</strong> {{ evento.fechaFin|date('Y-m-d H:i') }}
                        </p>
                        <button class=\"btn btn-primary\" onclick=\"verDetalleEvento({{ evento.id }})\">Ver detalles</button>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <p class=\"text-center\">No hay eventos disponibles.</p>
            </div>
        {% endfor %}
    </div>
</div>

<!-- Modal para detalles de evento -->
<div class=\"modal fade\" id=\"modalDetalleEvento\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalDetalleEventoLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"modalDetalleEventoLabel\">Detalle del Evento</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <h5 id=\"eventoTitulo\"></h5>
                <p id=\"eventoDescripcion\"></p>
                <p><strong>Fecha Inicio:</strong> <span id=\"eventoFechaInicio\"></span></p>
                <p><strong>Fecha Fin:</strong> <span id=\"eventoFechaFin\"></span></p>
                <h6>Actividades</h6>
                <ul id=\"eventoActividades\" class=\"list-unstyled\"></ul>
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
<script src=\"{{ asset('js/evento.js') }}\"></script>
{% endblock %}
", "evento/lista_eventos.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\evento\\lista_eventos.html.twig");
    }
}

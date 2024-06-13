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

/* /actividad/actividades.html.twig */
class __TwigTemplate_2905733925f16a2c712e67d64674a080 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/actividad/actividades.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/actividad/actividades.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "</head>
<body>
    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 109
        yield "    
    ";
        // line 110
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 115
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Actividades";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        .subactividad-item {
            margin-bottom: 1rem; /* Añade espacio entre subactividades */
        }
    </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        yield "    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"mb-0\">ACTIVIDADES</h1>
            <button class=\"btn btn-primary\" style=\"background-color: #5368d5;\" data-toggle=\"modal\" data-target=\"#modalAgregarActividad\">AÑADIR ACTIVIDAD</button>
        </div>

        <div id=\"actividades\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actividades_agrupadas"]) || array_key_exists("actividades_agrupadas", $context) ? $context["actividades_agrupadas"] : (function () { throw new RuntimeError('Variable "actividades_agrupadas" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["eventoId"] => $context["actividades"]) {
            // line 27
            yield "                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        ";
            // line 29
            if (($context["eventoId"] != "sin_evento")) {
                // line 30
                yield "                            <h3 class=\"card-title\">Evento: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["actividades"], 0, [], "array", false, false, false, 30), "evento", [], "any", false, false, false, 30), "titulo", [], "any", false, false, false, 30), "html", null, true);
                yield "</h3>
                        ";
            } else {
                // line 32
                yield "                            <h3 class=\"card-title\">Sin Evento</h3>
                        ";
            }
            // line 34
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["actividades"]);
            foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
                // line 35
                yield "                            <div class=\"card mb-2\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <h5 class=\"card-title\">";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "descripcion", [], "any", false, false, false, 38), "html", null, true);
                yield "</h5>
                                        <div>
                                            <button class=\"btn btn-primary btn-sm\" 
                                                    onclick=\"agregarSubactividad(this)\" 
                                                    data-actividad-id=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 42), "html", null, true);
                yield "\" 
                                                    data-actividad-evento=\"";
                // line 43
                ((CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "evento", [], "any", false, false, false, 43)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "evento", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true)) : (yield ""));
                yield "\" 
                                                    data-actividad-fechainicio=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "getFechaHoraInicio", [], "any", false, false, false, 44), "Y-m-d H:i"), "html", null, true);
                yield "\" 
                                                    data-actividad-fechafin=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "getFechaHoraFin", [], "any", false, false, false, 45), "Y-m-d H:i"), "html", null, true);
                yield "\">

                                                    AÑADIR SUBACTIVIDAD
                                            </button>
                                            <button class=\"btn btn-warning btn-sm\" 
                                                    onclick=\"editarActividad(this)\" 
                                                    data-actividad-id=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 51), "html", null, true);
                yield "\"
                                                    data-actividad-descripcion=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "descripcion", [], "any", false, false, false, 52), "html", null, true);
                yield "\"
                                                    data-actividad-tipo=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "tipo", [], "any", false, false, false, 53), "html", null, true);
                yield "\"
                                                    data-actividad-evento=\"";
                // line 54
                ((CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "evento", [], "any", false, false, false, 54)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "evento", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true)) : (yield ""));
                yield "\"
                                                    data-actividad-fechainicio=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "getFechaHoraInicio", [], "any", false, false, false, 55), "Y-m-d H:i"), "html", null, true);
                yield "\"
                                                    data-actividad-fechafin=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "getFechaHoraFin", [], "any", false, false, false, 56), "Y-m-d H:i"), "html", null, true);
                yield "\">

                                                    EDITAR
                                            </button>
                                            <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarActividad(";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 60), "html", null, true);
                yield ")\">ELIMINAR</button>
                                        </div>
                                    </div>
                                    <div class=\"subactividades mt-2\">
                                        ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "detalleActividads", [], "any", false, false, false, 64));
                foreach ($context['_seq'] as $context["_key"] => $context["subactividad"]) {
                    // line 65
                    yield "                                            <div class=\"d-flex justify-content-between align-items-center subactividad-item\">
                                                <div class=\"card-text\">";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "titulo", [], "any", false, false, false, 66), "html", null, true);
                    yield "</div>
                                                <div>
                                                    <button class=\"btn btn-warning btn-sm\" 
                                                            onclick=\"editarSubactividad(this)\" 
                                                            data-subactividad-id=\"";
                    // line 70
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "id", [], "any", false, false, false, 70), "html", null, true);
                    yield "\"
                                                            data-subactividad-titulo=\"";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "titulo", [], "any", false, false, false, 71), "html", null, true);
                    yield "\"
                                                            data-subactividad-fechainicio=\"";
                    // line 72
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "getFechaHoraInicio", [], "any", false, false, false, 72), "Y-m-d H:i"), "html", null, true);
                    yield "\"
                                                            data-subactividad-fechafin=\"";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "getFechaHoraFin", [], "any", false, false, false, 73), "Y-m-d H:i"), "html", null, true);
                    yield "\"
                                                            data-subactividad-espacio=\"";
                    // line 74
                    ((CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "espacio", [], "any", false, false, false, 74)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "espacio", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74), "html", null, true)) : (yield ""));
                    yield "\"
                                                            data-subactividad-idpadre=\"";
                    // line 75
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 75), "html", null, true);
                    yield "\">
                                                        EDITAR
                                                    </button>
                                                    <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarSubactividad(";
                    // line 78
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "id", [], "any", false, false, false, 78), "html", null, true);
                    yield ")\">ELIMINAR</button>
                                                </div>
                                            </div>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subactividad'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                yield "                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['eventoId'], $context['actividades'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "        </div>
    </div>

    <!-- Modal para agregar actividad -->
    <div class=\"modal fade\" id=\"modalAgregarActividad\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalAgregarActividadLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalAgregarActividadLabel\">Añadir Actividad</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 103
        yield from         $this->loadTemplate("actividad/nuevaActividad.html.twig", "/actividad/actividades.html.twig", 103)->unwrap()->yield($context);
        // line 104
        yield "                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        yield "    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/actividad.js"), "html", null, true);
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
        return "/actividad/actividades.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  358 => 113,  354 => 111,  344 => 110,  329 => 104,  327 => 103,  311 => 89,  303 => 86,  294 => 82,  284 => 78,  278 => 75,  274 => 74,  270 => 73,  266 => 72,  262 => 71,  258 => 70,  251 => 66,  248 => 65,  244 => 64,  237 => 60,  230 => 56,  226 => 55,  222 => 54,  218 => 53,  214 => 52,  210 => 51,  201 => 45,  197 => 44,  193 => 43,  189 => 42,  182 => 38,  177 => 35,  172 => 34,  168 => 32,  162 => 30,  160 => 29,  156 => 27,  152 => 26,  143 => 19,  133 => 18,  116 => 9,  106 => 8,  86 => 6,  73 => 115,  71 => 110,  68 => 109,  66 => 18,  62 => 16,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Actividades{% endblock %}</title>
    
    {% block stylesheets %}
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        .subactividad-item {
            margin-bottom: 1rem; /* Añade espacio entre subactividades */
        }
    </style>
    {% endblock %}
</head>
<body>
    {% block body %}
    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"mb-0\">ACTIVIDADES</h1>
            <button class=\"btn btn-primary\" style=\"background-color: #5368d5;\" data-toggle=\"modal\" data-target=\"#modalAgregarActividad\">AÑADIR ACTIVIDAD</button>
        </div>

        <div id=\"actividades\">
            {% for eventoId, actividades in actividades_agrupadas %}
                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        {% if eventoId != 'sin_evento' %}
                            <h3 class=\"card-title\">Evento: {{ actividades[0].evento.titulo }}</h3>
                        {% else %}
                            <h3 class=\"card-title\">Sin Evento</h3>
                        {% endif %}
                        {% for actividad in actividades %}
                            <div class=\"card mb-2\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <h5 class=\"card-title\">{{ actividad.descripcion }}</h5>
                                        <div>
                                            <button class=\"btn btn-primary btn-sm\" 
                                                    onclick=\"agregarSubactividad(this)\" 
                                                    data-actividad-id=\"{{ actividad.id }}\" 
                                                    data-actividad-evento=\"{{ actividad.evento ? actividad.evento.id : '' }}\" 
                                                    data-actividad-fechainicio=\"{{ actividad.getFechaHoraInicio|date('Y-m-d H:i') }}\" 
                                                    data-actividad-fechafin=\"{{ actividad.getFechaHoraFin|date('Y-m-d H:i') }}\">

                                                    AÑADIR SUBACTIVIDAD
                                            </button>
                                            <button class=\"btn btn-warning btn-sm\" 
                                                    onclick=\"editarActividad(this)\" 
                                                    data-actividad-id=\"{{ actividad.id }}\"
                                                    data-actividad-descripcion=\"{{ actividad.descripcion }}\"
                                                    data-actividad-tipo=\"{{ actividad.tipo }}\"
                                                    data-actividad-evento=\"{{ actividad.evento ? actividad.evento.id : '' }}\"
                                                    data-actividad-fechainicio=\"{{ actividad.getFechaHoraInicio|date('Y-m-d H:i') }}\"
                                                    data-actividad-fechafin=\"{{ actividad.getFechaHoraFin|date('Y-m-d H:i') }}\">

                                                    EDITAR
                                            </button>
                                            <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarActividad({{ actividad.id }})\">ELIMINAR</button>
                                        </div>
                                    </div>
                                    <div class=\"subactividades mt-2\">
                                        {% for subactividad in actividad.detalleActividads %}
                                            <div class=\"d-flex justify-content-between align-items-center subactividad-item\">
                                                <div class=\"card-text\">{{ subactividad.titulo }}</div>
                                                <div>
                                                    <button class=\"btn btn-warning btn-sm\" 
                                                            onclick=\"editarSubactividad(this)\" 
                                                            data-subactividad-id=\"{{ subactividad.id }}\"
                                                            data-subactividad-titulo=\"{{ subactividad.titulo }}\"
                                                            data-subactividad-fechainicio=\"{{ subactividad.getFechaHoraInicio|date('Y-m-d H:i') }}\"
                                                            data-subactividad-fechafin=\"{{ subactividad.getFechaHoraFin|date('Y-m-d H:i') }}\"
                                                            data-subactividad-espacio=\"{{ subactividad.espacio ? subactividad.espacio.id : '' }}\"
                                                            data-subactividad-idpadre=\"{{ actividad.id }}\">
                                                        EDITAR
                                                    </button>
                                                    <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarSubactividad({{ subactividad.id }})\">ELIMINAR</button>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <!-- Modal para agregar actividad -->
    <div class=\"modal fade\" id=\"modalAgregarActividad\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalAgregarActividadLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"modalAgregarActividadLabel\">Añadir Actividad</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {% include 'actividad/nuevaActividad.html.twig' %}
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
    
    {% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"{{ asset('js/actividad.js') }}\"></script>
    {% endblock %}
</body>
</html>
", "/actividad/actividades.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\actividad\\actividades.html.twig");
    }
}

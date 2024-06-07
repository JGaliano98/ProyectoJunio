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
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
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
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 21
        yield "</head>
<body>
    ";
        // line 23
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 83
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

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        yield "    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/actividad.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 23
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 24
        yield "    <div class=\"container\">
        <div class=\"d-flex justify-content-between align-items-center mb-3\">
            <h1 class=\"mb-0\">ACTIVIDADES</h1>
            <button class=\"btn btn-primary\" style=\"background-color: #5368d5;\" data-toggle=\"modal\" data-target=\"#modalAgregarActividad\">AÑADIR ACTIVIDAD</button>
        </div>

        <div id=\"actividades\">
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actividades"]) || array_key_exists("actividades", $context) ? $context["actividades"] : (function () { throw new RuntimeError('Variable "actividades" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 32
            yield "                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title\">";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "descripcion", [], "any", false, false, false, 35), "html", null, true);
            yield "</h5>
                            <div>
                                <button class=\"btn btn-warning btn-sm\" onclick=\"editarActividad(";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 37), "html", null, true);
            yield ")\">EDITAR</button>
                                <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarActividad(";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield ")\">ELIMINAR</button>
                                <button class=\"btn btn-primary btn-sm\" 
                                        onclick=\"agregarSubactividad(this)\" 
                                        data-actividad-id=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\" 
                                        data-actividad-evento=\"";
            // line 42
            ((CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "evento", [], "any", false, false, false, 42)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "evento", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true)) : (yield ""));
            yield "\" 
                                        data-actividad-fechainicio=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "fechaHoraInicio", [], "any", false, false, false, 43), "Y-m-d"), "html", null, true);
            yield "\" 
                                        data-actividad-fechafin=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "fechaHoraFin", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true);
            yield "\">
                                    AÑADIR SUBACTIVIDAD
                                </button>
                            </div>
                        </div>
                        <div class=\"subactividades mt-2\">
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "detalleActividads", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["subactividad"]) {
                // line 51
                yield "                                <div class=\"d-flex justify-content-between align-items-center subactividad-item\">
                                    <div class=\"card-text\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "titulo", [], "any", false, false, false, 52), "html", null, true);
                yield "</div>
                                    <div>
                                        <button class=\"btn btn-warning btn-sm\" onclick=\"editarSubactividad(";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "id", [], "any", false, false, false, 54), "html", null, true);
                yield ")\">EDITAR</button>
                                        <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarSubactividad(";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "id", [], "any", false, false, false, 55), "html", null, true);
                yield ")\">ELIMINAR</button>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subactividad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        // line 77
        yield from         $this->loadTemplate("actividad/nuevaActividad.html.twig", "/actividad/actividades.html.twig", 77)->unwrap()->yield($context);
        // line 78
        yield "                </div>
            </div>
        </div>
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
        return "/actividad/actividades.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  275 => 78,  273 => 77,  257 => 63,  248 => 59,  238 => 55,  234 => 54,  229 => 52,  226 => 51,  222 => 50,  213 => 44,  209 => 43,  205 => 42,  201 => 41,  195 => 38,  191 => 37,  186 => 35,  181 => 32,  177 => 31,  168 => 24,  158 => 23,  145 => 19,  141 => 17,  131 => 16,  114 => 9,  104 => 8,  84 => 6,  71 => 83,  69 => 23,  65 => 21,  62 => 16,  60 => 8,  55 => 6,  48 => 1,);
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
    {% block javascripts %}
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"{{ asset('js/actividad.js') }}\"></script>
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
            {% for actividad in actividades %}
                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title\">{{ actividad.descripcion }}</h5>
                            <div>
                                <button class=\"btn btn-warning btn-sm\" onclick=\"editarActividad({{ actividad.id }})\">EDITAR</button>
                                <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarActividad({{ actividad.id }})\">ELIMINAR</button>
                                <button class=\"btn btn-primary btn-sm\" 
                                        onclick=\"agregarSubactividad(this)\" 
                                        data-actividad-id=\"{{ actividad.id }}\" 
                                        data-actividad-evento=\"{{ actividad.evento ? actividad.evento.id : '' }}\" 
                                        data-actividad-fechainicio=\"{{ actividad.fechaHoraInicio|date('Y-m-d') }}\" 
                                        data-actividad-fechafin=\"{{ actividad.fechaHoraFin|date('Y-m-d') }}\">
                                    AÑADIR SUBACTIVIDAD
                                </button>
                            </div>
                        </div>
                        <div class=\"subactividades mt-2\">
                            {% for subactividad in actividad.detalleActividads %}
                                <div class=\"d-flex justify-content-between align-items-center subactividad-item\">
                                    <div class=\"card-text\">{{ subactividad.titulo }}</div>
                                    <div>
                                        <button class=\"btn btn-warning btn-sm\" onclick=\"editarSubactividad({{ subactividad.id }})\">EDITAR</button>
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
</body>
</html>
", "/actividad/actividades.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\actividad\\actividades.html.twig");
    }
}

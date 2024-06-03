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
class __TwigTemplate_65f34d74e481b83bae09860f98034f40 extends Template
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
        // line 11
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 16
        yield "</head>
<body>
    ";
        // line 18
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 78
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
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/actividad.js"), "html", null, true);
        yield "\"></script>
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actividades"]) || array_key_exists("actividades", $context) ? $context["actividades"] : (function () { throw new RuntimeError('Variable "actividades" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 27
            yield "                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "descripcion", [], "any", false, false, false, 30), "html", null, true);
            yield "</h5>
                            <div>
                                <button class=\"btn btn-warning btn-sm\" onclick=\"editarActividad(";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield ")\">EDITAR</button>
                                <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarActividad(";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield ")\">ELIMINAR</button>
                                <button class=\"btn btn-primary btn-sm\" 
                                        onclick=\"agregarSubactividad(this)\" 
                                        data-actividad-id=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 36), "html", null, true);
            yield "\" 
                                        data-actividad-evento=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "evento", [], "any", false, false, false, 37), "html", null, true);
            yield "\" 
                                        data-actividad-fechainicio=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "fechaHoraInicio", [], "any", false, false, false, 38), "Y-m-dTH:i"), "html", null, true);
            yield "\" 
                                        data-actividad-fechafin=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "fechaHoraFin", [], "any", false, false, false, 39), "Y-m-dTH:i"), "html", null, true);
            yield "\">
                                    AÑADIR SUBACTIVIDAD
                                </button>
                            </div>
                        </div>
                        <div class=\"subactividades mt-2\">
                            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "detalleActividads", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["subactividad"]) {
                // line 46
                yield "                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"card-text\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "titulo", [], "any", false, false, false, 47), "html", null, true);
                yield "</div>
                                    <div>
                                        <button class=\"btn btn-warning btn-sm\" onclick=\"editarSubactividad(";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "id", [], "any", false, false, false, 49), "html", null, true);
                yield ")\">EDITAR</button>
                                        <button class=\"btn btn-danger btn-sm\" onclick=\"eliminarSubactividad(";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subactividad"], "id", [], "any", false, false, false, 50), "html", null, true);
                yield ")\">ELIMINAR</button>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subactividad'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
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
        // line 72
        yield from         $this->loadTemplate("actividad/actividad.html.twig", "/actividad/actividades.html.twig", 72)->unwrap()->yield($context);
        // line 73
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
        return array (  270 => 73,  268 => 72,  252 => 58,  243 => 54,  233 => 50,  229 => 49,  224 => 47,  221 => 46,  217 => 45,  208 => 39,  204 => 38,  200 => 37,  196 => 36,  190 => 33,  186 => 32,  181 => 30,  176 => 27,  172 => 26,  163 => 19,  153 => 18,  140 => 14,  136 => 12,  126 => 11,  114 => 9,  104 => 8,  84 => 6,  71 => 78,  69 => 18,  65 => 16,  62 => 11,  60 => 8,  55 => 6,  48 => 1,);
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
                                        data-actividad-evento=\"{{ actividad.evento }}\" 
                                        data-actividad-fechainicio=\"{{ actividad.fechaHoraInicio|date('Y-m-d\\TH:i') }}\" 
                                        data-actividad-fechafin=\"{{ actividad.fechaHoraFin|date('Y-m-d\\TH:i') }}\">
                                    AÑADIR SUBACTIVIDAD
                                </button>
                            </div>
                        </div>
                        <div class=\"subactividades mt-2\">
                            {% for subactividad in actividad.detalleActividads %}
                                <div class=\"d-flex justify-content-between align-items-center\">
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
                    {% include 'actividad/actividad.html.twig' %}
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
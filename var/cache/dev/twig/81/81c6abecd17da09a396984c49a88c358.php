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
class __TwigTemplate_44ca14be61140b0aeb8cc162966620c4 extends Template
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
        return "home/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/lista_eventos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evento/lista_eventos.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "evento/lista_eventos.html.twig", 3);
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

        yield "Lista de Eventos - I.E.S. Las Fuentezuelas";
        
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
        yield "    <link rel=\"stylesheet\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/eventos.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "    <div class=\"container mt-5\">

        <!-- Eventos vigentes -->
        <h2 class=\"text-center\">Eventos Vigentes</h2>
        <div class=\"row\">
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 18
            yield "                ";
            $context["fechaActual"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
            // line 19
            yield "                ";
            $context["fechaFin"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "fechaFin", [], "any", false, false, false, 19), "Y-m-d");
            // line 20
            yield "                ";
            if (((isset($context["fechaFin"]) || array_key_exists("fechaFin", $context) ? $context["fechaFin"] : (function () { throw new RuntimeError('Variable "fechaFin" does not exist.', 20, $this->source); })()) >= (isset($context["fechaActual"]) || array_key_exists("fechaActual", $context) ? $context["fechaActual"] : (function () { throw new RuntimeError('Variable "fechaActual" does not exist.', 20, $this->source); })()))) {
                // line 21
                yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card shadow-sm h-100 evento-vigente\">
                            ";
                // line 23
                if (CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "imagenURL", [], "any", false, false, false, 23)) {
                    // line 24
                    yield "                                ";
                    $context["imagenPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "imagenURL", [], "any", false, false, false, 24)));
                    // line 25
                    yield "                                <div class=\"card-background\" style=\"background-image: url('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imagenPath"]) || array_key_exists("imagenPath", $context) ? $context["imagenPath"] : (function () { throw new RuntimeError('Variable "imagenPath" does not exist.', 25, $this->source); })()), "html", null, true);
                    yield "');\"></div>
                            ";
                }
                // line 27
                yield "                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "titulo", [], "any", false, false, false, 28), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">
                                    <strong>Fecha Inicio:</strong> ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "fechaInicio", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
                yield "<br>
                                    <strong>Fecha Fin:</strong> ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "fechaFin", [], "any", false, false, false, 31), "d-m-Y"), "html", null, true);
                yield "
                                </p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargar_pdf", ["eventoId" => CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                yield "\">Descargar PDF</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 38
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "        </div>

        <!-- Eventos caducados -->
        <h2 class=\"text-center\">Eventos Caducados</h2>
        <div class=\"row\">
            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 45
            yield "                ";
            $context["fechaActual"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d");
            // line 46
            yield "                ";
            $context["fechaFin"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "fechaFin", [], "any", false, false, false, 46), "Y-m-d");
            // line 47
            yield "                ";
            if (((isset($context["fechaFin"]) || array_key_exists("fechaFin", $context) ? $context["fechaFin"] : (function () { throw new RuntimeError('Variable "fechaFin" does not exist.', 47, $this->source); })()) < (isset($context["fechaActual"]) || array_key_exists("fechaActual", $context) ? $context["fechaActual"] : (function () { throw new RuntimeError('Variable "fechaActual" does not exist.', 47, $this->source); })()))) {
                // line 48
                yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card shadow-sm h-100 evento-caducado\">
                            ";
                // line 50
                if (CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "imagenURL", [], "any", false, false, false, 50)) {
                    // line 51
                    yield "                                ";
                    $context["imagenPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "imagenURL", [], "any", false, false, false, 51)));
                    // line 52
                    yield "                                <div class=\"card-background\" style=\"background-image: url('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["imagenPath"]) || array_key_exists("imagenPath", $context) ? $context["imagenPath"] : (function () { throw new RuntimeError('Variable "imagenPath" does not exist.', 52, $this->source); })()), "html", null, true);
                    yield "');\"></div>
                            ";
                }
                // line 54
                yield "                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "titulo", [], "any", false, false, false, 55), "html", null, true);
                yield "</h5>
                                <p class=\"card-text\">
                                    <strong>Fecha Inicio:</strong> ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "fechaInicio", [], "any", false, false, false, 57), "d-m-Y"), "html", null, true);
                yield "<br>
                                    <strong>Fecha Fin:</strong> ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "fechaFin", [], "any", false, false, false, 58), "d-m-Y"), "html", null, true);
                yield "
                                </p>
                                <a class=\"btn btn-primary\" href=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargar_pdf", ["eventoId" => CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\">Descargar PDF</a>
                            </div>
                        </div>
                    </div>
                ";
            }
            // line 65
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 70
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        yield "    <script src=\"";
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
        return array (  271 => 71,  261 => 70,  248 => 66,  242 => 65,  234 => 60,  229 => 58,  225 => 57,  220 => 55,  217 => 54,  211 => 52,  208 => 51,  206 => 50,  202 => 48,  199 => 47,  196 => 46,  193 => 45,  189 => 44,  182 => 39,  176 => 38,  168 => 33,  163 => 31,  159 => 30,  154 => 28,  151 => 27,  145 => 25,  142 => 24,  140 => 23,  136 => 21,  133 => 20,  130 => 19,  127 => 18,  123 => 17,  116 => 12,  106 => 11,  92 => 8,  82 => 7,  62 => 5,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/evento/lista_eventos.html.twig #}

{% extends 'home/base.html.twig' %}

{% block title %}Lista de Eventos - I.E.S. Las Fuentezuelas{% endblock %}

{% block stylesheets %}
    <link rel=\"stylesheet\" href=\"{{ asset('css/eventos.css') }}\">
{% endblock %}

{% block body %}
    <div class=\"container mt-5\">

        <!-- Eventos vigentes -->
        <h2 class=\"text-center\">Eventos Vigentes</h2>
        <div class=\"row\">
            {% for evento in eventos %}
                {% set fechaActual = \"now\"|date(\"Y-m-d\") %}
                {% set fechaFin = evento.fechaFin|date(\"Y-m-d\") %}
                {% if fechaFin >= fechaActual %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card shadow-sm h-100 evento-vigente\">
                            {% if evento.imagenURL %}
                                {% set imagenPath = asset('images/' ~ evento.imagenURL) %}
                                <div class=\"card-background\" style=\"background-image: url('{{ imagenPath }}');\"></div>
                            {% endif %}
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ evento.titulo }}</h5>
                                <p class=\"card-text\">
                                    <strong>Fecha Inicio:</strong> {{ evento.fechaInicio|date('d-m-Y') }}<br>
                                    <strong>Fecha Fin:</strong> {{ evento.fechaFin|date('d-m-Y') }}
                                </p>
                                <a class=\"btn btn-primary\" href=\"{{ path('descargar_pdf', {'eventoId': evento.id}) }}\">Descargar PDF</a>
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>

        <!-- Eventos caducados -->
        <h2 class=\"text-center\">Eventos Caducados</h2>
        <div class=\"row\">
            {% for evento in eventos %}
                {% set fechaActual = \"now\"|date(\"Y-m-d\") %}
                {% set fechaFin = evento.fechaFin|date(\"Y-m-d\") %}
                {% if fechaFin < fechaActual %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card shadow-sm h-100 evento-caducado\">
                            {% if evento.imagenURL %}
                                {% set imagenPath = asset('images/' ~ evento.imagenURL) %}
                                <div class=\"card-background\" style=\"background-image: url('{{ imagenPath }}');\"></div>
                            {% endif %}
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ evento.titulo }}</h5>
                                <p class=\"card-text\">
                                    <strong>Fecha Inicio:</strong> {{ evento.fechaInicio|date('d-m-Y') }}<br>
                                    <strong>Fecha Fin:</strong> {{ evento.fechaFin|date('d-m-Y') }}
                                </p>
                                <a class=\"btn btn-primary\" href=\"{{ path('descargar_pdf', {'eventoId': evento.id}) }}\">Descargar PDF</a>
                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/evento.js') }}\"></script>
{% endblock %}
", "evento/lista_eventos.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\evento\\lista_eventos.html.twig");
    }
}

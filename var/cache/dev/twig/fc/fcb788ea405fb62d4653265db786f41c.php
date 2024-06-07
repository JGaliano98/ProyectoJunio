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

/* pdf/eventos.html.twig */
class __TwigTemplate_e2cde2c555141061023245185cc4be17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/eventos.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/eventos.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Detalles del Evento</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            color: #333;
            background-color: #f7f7f7;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 24, $this->source); })()), "imagenUrl", [], "any", false, false, false, 24)))), "html", null, true);
        yield "');
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
        }
        .container {
            position: relative;
            z-index: 1;
            width: 90%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semitransparente para legibilidad */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        .header {
            text-align: center;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .event-details {
            padding: 20px;
        }
        .event-details h2 {
            color: #4CAF50;
            font-size: 1.8em;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
        }
        .activities {
            margin-top: 20px;
        }
        .activity {
            background-color: #e7f9e7;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 5px solid #4CAF50;
            border-radius: 4px;
        }
        .activity:nth-child(odd) {
            background-color: #dff0d8;
        }
        .activity strong {
            color: #4CAF50;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 0 0 8px 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"background\"></div>
    <div class=\"container\">
        <div class=\"header\">
            <h1>";
        // line 91
        yield "I.E.S. LAS FUENTEZUELAS";
        yield "</h1>
        </div>
        <div class=\"event-details\">
            <h1>";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 94, $this->source); })()), "titulo", [], "any", false, false, false, 94), "html", null, true);
        yield "</h1>
            <div class=\"activities\">
                <h2>Actividades</h2>
                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actividades"]) || array_key_exists("actividades", $context) ? $context["actividades"] : (function () { throw new RuntimeError('Variable "actividades" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 98
            yield "                    <div class=\"activity\">
                        <strong>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "id", [], "any", false, false, false, 99), "html", null, true);
            yield ":</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "descripcion", [], "any", false, false, false, 99), "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "            </div>
        </div>
        <div class=\"footer\">
            <p>¡No te lo pierdas!</p>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pdf/eventos.html.twig";
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
        return array (  169 => 102,  158 => 99,  155 => 98,  151 => 97,  145 => 94,  139 => 91,  69 => 24,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Detalles del Evento</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            color: #333;
            background-color: #f7f7f7;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ absolute_url(asset('images/' ~ evento.imagenUrl)) }}');
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
        }
        .container {
            position: relative;
            z-index: 1;
            width: 90%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semitransparente para legibilidad */
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        .header {
            text-align: center;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .event-details {
            padding: 20px;
        }
        .event-details h2 {
            color: #4CAF50;
            font-size: 1.8em;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
        }
        .activities {
            margin-top: 20px;
        }
        .activity {
            background-color: #e7f9e7;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 5px solid #4CAF50;
            border-radius: 4px;
        }
        .activity:nth-child(odd) {
            background-color: #dff0d8;
        }
        .activity strong {
            color: #4CAF50;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 0 0 8px 8px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class=\"background\"></div>
    <div class=\"container\">
        <div class=\"header\">
            <h1>{{ 'I.E.S. LAS FUENTEZUELAS' }}</h1>
        </div>
        <div class=\"event-details\">
            <h1>{{ evento.titulo }}</h1>
            <div class=\"activities\">
                <h2>Actividades</h2>
                {% for actividad in actividades %}
                    <div class=\"activity\">
                        <strong>{{ actividad.id }}:</strong> {{ actividad.descripcion }}
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"footer\">
            <p>¡No te lo pierdas!</p>
        </div>
    </div>
</body>
</html>
", "pdf/eventos.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\pdf\\eventos.html.twig");
    }
}

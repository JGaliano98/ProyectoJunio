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
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
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
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 25, $this->source); })()), "imagenURL", [], "any", false, false, false, 25)))), "html", null, true);
        yield "');
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
            opacity: 0.5;
        }
        .container {
            position: relative;
            z-index: 1;
            width: 90%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        .header {
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
            text-align: center;
        }
        .event-details {
            padding: 20px;
        }
        .event-details h2 {
            color: #007BFF;
            font-size: 1.8em;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 5px;
            text-align: center;
        }
        .activities {
            margin-top: 20px;
        }
        .activity {
            background-color: #e3f2fd;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 5px solid #007BFF;
            border-radius: 4px;
        }
        .activity:nth-child(odd) {
            background-color: #bbdefb;
        }
        .activity strong {
            color: #007BFF;
        }
        .details {
            margin-top: 10px;
            padding: 10px;
            background-color: #f7f7f7;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-style: italic;
        }
        .details + .details {
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 0 0 8px 8px;
            margin-top: 20px;
        }
        .datetime {
            display: flex;
            gap: 10px;
        }
        .datetime span {
            flex: 1;
        }
        .ponente {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .ponente .info {
            display: flex;
            flex-direction: column;
        }
        .ponente .info strong {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class=\"background\"></div>
    <div class=\"container\">
        <div class=\"header\">
            <h1>";
        // line 125
        yield "I.E.S. LAS FUENTEZUELAS";
        yield "</h1>
        </div>
        <div class=\"event-details\">
            <h1>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evento"]) || array_key_exists("evento", $context) ? $context["evento"] : (function () { throw new RuntimeError('Variable "evento" does not exist.', 128, $this->source); })()), "titulo", [], "any", false, false, false, 128), "html", null, true);
        yield "</h1>
            <div class=\"activities\">
                <h2>Actividades</h2>
                ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actividades"]) || array_key_exists("actividades", $context) ? $context["actividades"] : (function () { throw new RuntimeError('Variable "actividades" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 132
            yield "                    <div class=\"activity\">
                        <strong>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "descripcion", [], "any", false, false, false, 133), "html", null, true);
            yield ":</strong>
                        ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "detalleActividads", [], "any", false, false, false, 134));
            foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
                // line 135
                yield "                            <div class=\"details\">
                                <strong>";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "titulo", [], "any", false, false, false, 136), "html", null, true);
                yield "</strong> <br>
                                <div class=\"datetime\">
                                    <span><strong>Fecha de Inicio:</strong> ";
                // line 138
                ((CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "fechaHoraInicio", [], "any", false, false, false, 138)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "fechaHoraInicio", [], "any", false, false, false, 138), "Y-m-d"), "html", null, true)) : (yield "N/A"));
                yield "</span>
                                    <span><strong>Hora de Inicio:</strong> ";
                // line 139
                ((CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "fechaHoraInicio", [], "any", false, false, false, 139)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "fechaHoraInicio", [], "any", false, false, false, 139), "H:i"), "html", null, true)) : (yield "N/A"));
                yield "</span>
                                </div>
                                <div class=\"datetime\">
                                    <span><strong>Fecha de Fin:</strong> ";
                // line 142
                ((CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "fechaHoraFin", [], "any", false, false, false, 142)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "fechaHoraFin", [], "any", false, false, false, 142), "Y-m-d"), "html", null, true)) : (yield "N/A"));
                yield "</span>
                                    <span><strong>Hora de Fin:</strong> ";
                // line 143
                ((CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "fechaHoraFin", [], "any", false, false, false, 143)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "fechaHoraFin", [], "any", false, false, false, 143), "H:i"), "html", null, true)) : (yield "N/A"));
                yield "</span>
                                </div>
                                <strong>Ponentes:</strong>
                                ";
                // line 146
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "ponentes", [], "any", false, false, false, 146)) > 0)) {
                    // line 147
                    yield "                                    <ul>
                                        ";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "ponentes", [], "any", false, false, false, 148));
                    foreach ($context['_seq'] as $context["_key"] => $context["ponente"]) {
                        // line 149
                        yield "                                            <li class=\"ponente\">
                                                <div class=\"info\">
                                                    <strong>Nombre: ";
                        // line 151
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ponente"], "nombre", [], "any", false, false, false, 151), "html", null, true);
                        yield "</strong>
                                                    <span>Cargo: ";
                        // line 152
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ponente"], "cargo", [], "any", false, false, false, 152), "html", null, true);
                        yield "</span>
                                                </div>
                                            </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ponente'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 156
                    yield "                                    </ul>
                                ";
                } else {
                    // line 158
                    yield "                                    No hay ponentes asignados.
                                ";
                }
                // line 159
                yield "<br>
                                <strong>Grupos:</strong>
                                ";
                // line 161
                $context["grupos"] = [];
                // line 162
                yield "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "alumno", [], "any", false, false, false, 162));
                foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
                    // line 163
                    yield "                                    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "grupo", [], "any", false, false, false, 163) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "grupo", [], "any", false, false, false, 163), (isset($context["grupos"]) || array_key_exists("grupos", $context) ? $context["grupos"] : (function () { throw new RuntimeError('Variable "grupos" does not exist.', 163, $this->source); })())))) {
                        // line 164
                        yield "                                        ";
                        $context["grupos"] = Twig\Extension\CoreExtension::merge((isset($context["grupos"]) || array_key_exists("grupos", $context) ? $context["grupos"] : (function () { throw new RuntimeError('Variable "grupos" does not exist.', 164, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["alumno"], "grupo", [], "any", false, false, false, 164)]);
                        // line 165
                        yield "                                    ";
                    }
                    // line 166
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 167
                yield "                                ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["grupos"]) || array_key_exists("grupos", $context) ? $context["grupos"] : (function () { throw new RuntimeError('Variable "grupos" does not exist.', 167, $this->source); })())) > 0)) {
                    // line 168
                    yield "                                    <ul>
                                        ";
                    // line 169
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["grupos"]) || array_key_exists("grupos", $context) ? $context["grupos"] : (function () { throw new RuntimeError('Variable "grupos" does not exist.', 169, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["grupo"]) {
                        // line 170
                        yield "                                            <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["grupo"], "nivelEducativo", [], "any", false, false, false, 170), "nombre", [], "any", false, false, false, 170), "html", null, true);
                        yield " - ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["grupo"], "nombre", [], "any", false, false, false, 170), "html", null, true);
                        yield "</li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grupo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 172
                    yield "                                    </ul>
                                ";
                } else {
                    // line 174
                    yield "                                    No hay grupos asignados.
                                ";
                }
                // line 175
                yield "<br>
                                <strong>Espacio:</strong> ";
                // line 176
                ((CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "espacio", [], "any", false, false, false, 176)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["detalle"], "espacio", [], "any", false, false, false, 176), "nombre", [], "any", false, false, false, 176), "html", null, true)) : (yield "No asignado"));
                yield "<br>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
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
        return array (  337 => 181,  330 => 179,  321 => 176,  318 => 175,  314 => 174,  310 => 172,  299 => 170,  295 => 169,  292 => 168,  289 => 167,  283 => 166,  280 => 165,  277 => 164,  274 => 163,  269 => 162,  267 => 161,  263 => 159,  259 => 158,  255 => 156,  245 => 152,  241 => 151,  237 => 149,  233 => 148,  230 => 147,  228 => 146,  222 => 143,  218 => 142,  212 => 139,  208 => 138,  203 => 136,  200 => 135,  196 => 134,  192 => 133,  189 => 132,  185 => 131,  179 => 128,  173 => 125,  70 => 25,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Detalles del Evento</title>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap\" rel=\"stylesheet\">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
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
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('{{ absolute_url(asset('images/' ~ evento.imagenURL)) }}');
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
            opacity: 0.5;
        }
        .container {
            position: relative;
            z-index: 1;
            width: 90%;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        .header {
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 0;
            border-radius: 8px 8px 0 0;
        }
        h1 {
            margin: 0;
            font-size: 2.5em;
            text-align: center;
        }
        .event-details {
            padding: 20px;
        }
        .event-details h2 {
            color: #007BFF;
            font-size: 1.8em;
            border-bottom: 2px solid #007BFF;
            padding-bottom: 5px;
            text-align: center;
        }
        .activities {
            margin-top: 20px;
        }
        .activity {
            background-color: #e3f2fd;
            padding: 10px;
            margin-bottom: 10px;
            border-left: 5px solid #007BFF;
            border-radius: 4px;
        }
        .activity:nth-child(odd) {
            background-color: #bbdefb;
        }
        .activity strong {
            color: #007BFF;
        }
        .details {
            margin-top: 10px;
            padding: 10px;
            background-color: #f7f7f7;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-style: italic;
        }
        .details + .details {
            margin-top: 20px;
        }
        .footer {
            text-align: center;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border-radius: 0 0 8px 8px;
            margin-top: 20px;
        }
        .datetime {
            display: flex;
            gap: 10px;
        }
        .datetime span {
            flex: 1;
        }
        .ponente {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        .ponente .info {
            display: flex;
            flex-direction: column;
        }
        .ponente .info strong {
            color: #007BFF;
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
                        <strong>{{ actividad.descripcion }}:</strong>
                        {% for detalle in actividad.detalleActividads %}
                            <div class=\"details\">
                                <strong>{{ detalle.titulo }}</strong> <br>
                                <div class=\"datetime\">
                                    <span><strong>Fecha de Inicio:</strong> {{ detalle.fechaHoraInicio ? detalle.fechaHoraInicio|date('Y-m-d') : 'N/A' }}</span>
                                    <span><strong>Hora de Inicio:</strong> {{ detalle.fechaHoraInicio ? detalle.fechaHoraInicio|date('H:i') : 'N/A' }}</span>
                                </div>
                                <div class=\"datetime\">
                                    <span><strong>Fecha de Fin:</strong> {{ detalle.fechaHoraFin ? detalle.fechaHoraFin|date('Y-m-d') : 'N/A' }}</span>
                                    <span><strong>Hora de Fin:</strong> {{ detalle.fechaHoraFin ? detalle.fechaHoraFin|date('H:i') : 'N/A' }}</span>
                                </div>
                                <strong>Ponentes:</strong>
                                {% if detalle.ponentes|length > 0 %}
                                    <ul>
                                        {% for ponente in detalle.ponentes %}
                                            <li class=\"ponente\">
                                                <div class=\"info\">
                                                    <strong>Nombre: {{ ponente.nombre }}</strong>
                                                    <span>Cargo: {{ ponente.cargo }}</span>
                                                </div>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    No hay ponentes asignados.
                                {% endif %}<br>
                                <strong>Grupos:</strong>
                                {% set grupos = [] %}
                                {% for alumno in detalle.alumno %}
                                    {% if alumno.grupo and alumno.grupo not in grupos %}
                                        {% set grupos = grupos|merge([alumno.grupo]) %}
                                    {% endif %}
                                {% endfor %}
                                {% if grupos|length > 0 %}
                                    <ul>
                                        {% for grupo in grupos %}
                                            <li>{{ grupo.nivelEducativo.nombre }} - {{ grupo.nombre }}</li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    No hay grupos asignados.
                                {% endif %}<br>
                                <strong>Espacio:</strong> {{ detalle.espacio ? detalle.espacio.nombre : 'No asignado' }}<br>
                            </div>
                        {% endfor %}
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

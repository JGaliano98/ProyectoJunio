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

/* actividad/actividad.html.twig */
class __TwigTemplate_7bb15566133a4679f9f3fbb30bc11f16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actividad/actividad.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actividad/actividad.html.twig"));

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
        // line 12
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 18
        yield "</head>
<body>
    ";
        // line 20
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 113
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

        yield "Document";
        
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
        yield "    ";
        // line 10
        yield "    <link rel=\"stylesheet\" href=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilospestañas.css"), "html", null, true);
        yield "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 13
        yield "    <script src=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ficheros.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 15
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/actividad.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 16
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tablaPonentes.js"), "html", null, true);
        yield "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        yield "    <div class=\"tabs\">
        <div class=\"tab-container\">
            <div id=\"tab4\" class=\"tab\">
                <a href=\"#tab4\">Grupos</a>
                <div class=\"tab-content\">
                    <table>
                        <tr>
                            <td> <select class=\"recursos\" id=\"fuenteGrupos\" size=\"10\" multiple=\"multiple\"></select> </td>
                            <td>
                                <span id=\"pasarIzqGrupos\">&lt;</span><br>
                                <span id=\"pasarIzqTodosGrupos\">&lt;&lt;</span><br>
                                <span id=\"pasarDerGrupos\">&gt;</span><br>
                                <span id=\"pasarDerTodosGrupos\">&gt;&gt;</span>
                            </td>
                            <td> <select class=\"recursos\" id=\"seleccionadosGrupos\" size=\"10\" multiple=\"multiple\"></select> </td>
                        </tr>
                    </table>
                    <input type=\"submit\" value=\"Guardar\">
                </div>
            </div>
            
            <div id=\"tab3\" class=\"tab\">
                <a href=\"#tab3\">Ponentes</a>
                <div class=\"tab-content\">
                    <table border=\"1\" id=\"ponentesTable\">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>URL</th>
                                <th>Botones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type=\"text\" id=\"nombre\" placeholder=\"Introduce el nombre\"></td>
                                <td><input type=\"text\" id=\"cargo\" placeholder=\"Introduce el cargo\"></td>
                                <td><input type=\"text\" id=\"url\" placeholder=\"Introduce la URL\"></td>
                                <td>
                                    <button onclick=\"agregarPonente()\">Agregar</button>
                                </td>
                            </tr>
                            <!-- Aquí se agregarán las filas dinámicamente -->
                        </tbody>
                    </table>
                </div>
            </div>


            <div id=\"tab2\" class=\"tab\">
                <a href=\"#tab2\">Recursos</a>
                <div class=\"tab-content\">
                    <table>
                        <tr>
                            <td> <select class=\"recursos\" id=\"fuenteRecursos\" size=\"10\" multiple=\"multiple\"></select> </td>
                            <td>
                                <span id=\"pasarIzqRecursos\">&lt;</span><br>
                                <span id=\"pasarIzqTodosRecursos\">&lt;&lt;</span><br>
                                <span id=\"pasarDerRecursos\">&gt;</span><br>
                                <span id=\"pasarDerTodosRecursos\">&gt;&gt;</span>
                            </td>
                            <td> <select class=\"recursos\" id=\"seleccionadosRecursos\" size=\"10\" multiple=\"multiple\"></select> </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id=\"tab1\" class=\"tab\">
                <a href=\"#tab1\">General</a>
                <div class=\"tab-content form-actividad two-columns\">
                    <label>TIPO:</label>
                    <select class=\"tipoActividad\" id=\"tipoActividad\">
                        <option value=\"\">-</option> <!-- Opción vacía o con \"-\" -->
                        <option value=\"1\">Simple</option>
                        <option value=\"2\">Compuesta</option>
                    </select>
                    <label>EVENTO:</label>
                    <select class=\"tipoActividad\" id=\"evento\">
                        <option value=\"\">-</option> <!-- Opción vacía o con \"-\" -->
                        <option value=\"1\">Evento1</option>
                        <option value=\"2\">Evento2</option>
                    </select>
                    <label>ID:</label><input type=\"text\" id=\"valorID\">
                    <label>DESCRIPCIÓN:</label><input type=\"text\" id=\"descripcionID\">
                    <label>AFORO:</label><input type=\"text\" id=\"aforo\">
                    <label>FECHA DE INICIO:</label><input type=\"date\" id=\"fechaInicio\">
                    <label>FECHA DE FIN:</label><input type=\"date\" id=\"fechaFin\">
                    <input type=\"submit\" id=\"guardarGeneral\" value=\"Guardar\">

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
        return "actividad/actividad.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  176 => 21,  166 => 20,  153 => 16,  149 => 15,  145 => 14,  140 => 13,  130 => 12,  116 => 10,  114 => 9,  104 => 8,  84 => 6,  71 => 113,  69 => 20,  65 => 18,  62 => 12,  60 => 8,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Document{% endblock %}</title>
    
    {% block stylesheets %}
    {# <link rel=\"stylesheet\" href=\"{{ asset('css/pestañas.css') }}\"> #}
    <link rel=\"stylesheet\" href=\"{{ asset('css/estilospestañas.css') }}\">
    {% endblock %}
    {% block javascripts %}
    <script src=\"{{ asset('js/select.js') }}\"></script>
    <script src=\"{{ asset('js/ficheros.js') }}\"></script>
    <script src=\"{{ asset('js/actividad.js') }}\"></script>
    <script src=\"{{ asset('js/tablaPonentes.js') }}\"></script>
    {% endblock %}
</head>
<body>
    {% block body %}
    <div class=\"tabs\">
        <div class=\"tab-container\">
            <div id=\"tab4\" class=\"tab\">
                <a href=\"#tab4\">Grupos</a>
                <div class=\"tab-content\">
                    <table>
                        <tr>
                            <td> <select class=\"recursos\" id=\"fuenteGrupos\" size=\"10\" multiple=\"multiple\"></select> </td>
                            <td>
                                <span id=\"pasarIzqGrupos\">&lt;</span><br>
                                <span id=\"pasarIzqTodosGrupos\">&lt;&lt;</span><br>
                                <span id=\"pasarDerGrupos\">&gt;</span><br>
                                <span id=\"pasarDerTodosGrupos\">&gt;&gt;</span>
                            </td>
                            <td> <select class=\"recursos\" id=\"seleccionadosGrupos\" size=\"10\" multiple=\"multiple\"></select> </td>
                        </tr>
                    </table>
                    <input type=\"submit\" value=\"Guardar\">
                </div>
            </div>
            
            <div id=\"tab3\" class=\"tab\">
                <a href=\"#tab3\">Ponentes</a>
                <div class=\"tab-content\">
                    <table border=\"1\" id=\"ponentesTable\">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>URL</th>
                                <th>Botones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type=\"text\" id=\"nombre\" placeholder=\"Introduce el nombre\"></td>
                                <td><input type=\"text\" id=\"cargo\" placeholder=\"Introduce el cargo\"></td>
                                <td><input type=\"text\" id=\"url\" placeholder=\"Introduce la URL\"></td>
                                <td>
                                    <button onclick=\"agregarPonente()\">Agregar</button>
                                </td>
                            </tr>
                            <!-- Aquí se agregarán las filas dinámicamente -->
                        </tbody>
                    </table>
                </div>
            </div>


            <div id=\"tab2\" class=\"tab\">
                <a href=\"#tab2\">Recursos</a>
                <div class=\"tab-content\">
                    <table>
                        <tr>
                            <td> <select class=\"recursos\" id=\"fuenteRecursos\" size=\"10\" multiple=\"multiple\"></select> </td>
                            <td>
                                <span id=\"pasarIzqRecursos\">&lt;</span><br>
                                <span id=\"pasarIzqTodosRecursos\">&lt;&lt;</span><br>
                                <span id=\"pasarDerRecursos\">&gt;</span><br>
                                <span id=\"pasarDerTodosRecursos\">&gt;&gt;</span>
                            </td>
                            <td> <select class=\"recursos\" id=\"seleccionadosRecursos\" size=\"10\" multiple=\"multiple\"></select> </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div id=\"tab1\" class=\"tab\">
                <a href=\"#tab1\">General</a>
                <div class=\"tab-content form-actividad two-columns\">
                    <label>TIPO:</label>
                    <select class=\"tipoActividad\" id=\"tipoActividad\">
                        <option value=\"\">-</option> <!-- Opción vacía o con \"-\" -->
                        <option value=\"1\">Simple</option>
                        <option value=\"2\">Compuesta</option>
                    </select>
                    <label>EVENTO:</label>
                    <select class=\"tipoActividad\" id=\"evento\">
                        <option value=\"\">-</option> <!-- Opción vacía o con \"-\" -->
                        <option value=\"1\">Evento1</option>
                        <option value=\"2\">Evento2</option>
                    </select>
                    <label>ID:</label><input type=\"text\" id=\"valorID\">
                    <label>DESCRIPCIÓN:</label><input type=\"text\" id=\"descripcionID\">
                    <label>AFORO:</label><input type=\"text\" id=\"aforo\">
                    <label>FECHA DE INICIO:</label><input type=\"date\" id=\"fechaInicio\">
                    <label>FECHA DE FIN:</label><input type=\"date\" id=\"fechaFin\">
                    <input type=\"submit\" id=\"guardarGeneral\" value=\"Guardar\">

                </div>
            </div>
    </div>
    {% endblock %}
</body>
</html>
", "actividad/actividad.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\actividad\\actividad.html.twig");
    }
}

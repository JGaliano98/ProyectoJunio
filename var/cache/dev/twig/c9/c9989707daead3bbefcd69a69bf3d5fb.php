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

/* actividad/nuevaActividad.html.twig */
class __TwigTemplate_857d7fb7e10b808d6ecdfd94f99a8a7f extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actividad/nuevaActividad.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actividad/nuevaActividad.html.twig"));

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

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/estilosP.css"), "html", null, true);
        yield "\">
</head>

<body>
  ";
        // line 13
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 144
        yield "
  ";
        // line 145
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 152
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

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "  <form id=\"formActividad\" method=\"post\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actividad_create");
        yield "\">
    <div class=\"tabs\">
      <div class=\"tab-container\">
        

        <div id=\"tab4\" class=\"tab\">
          <a href=\"#tab4\">Pestaña 4</a>
          <div class=\"tab-content\">
              <table class=\"w-100\">
                  <tr>
                      <td><select class=\"recursos select-fixed\" id=\"fuenteGrupos\" size=\"10\" multiple=\"multiple\"></select></td>
                      <td class=\"text-center align-middle\">
                          <div class=\"d-flex flex-column align-items-center\">
                              <span id=\"pasarIzqGrupos\">&lt;</span>
                              <span id=\"pasarIzqTodosGrupos\">&lt;&lt;</span>
                              <span id=\"pasarDerGrupos\">&gt;</span>
                              <span id=\"pasarDerTodosGrupos\">&gt;&gt;</span>
                          </div>
                      </td>
                      <td class=\"text-right\"><select class=\"recursos select-fixed\" id=\"seleccionadosGrupos\" name=\"seleccionadosGrupos[]\" size=\"10\" multiple=\"multiple\"></select></td>
                  </tr>
              </table>
              <div class=\"text-right mt-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Guardar\">
              </div>
          </div>
        </div>

        
        <div id=\"tab3\" class=\"tab\">
          <a href=\"#tab3\">Pestaña 3</a>
          <div class=\"tab-content\">
            <table border=\"1\" id=\"ponentesTable\" class=\"table\">
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
                      <td><input type=\"text\" id=\"nombre\" placeholder=\"Introduce el nombre\" class=\"form-control\"></td>
                      <td><input type=\"text\" id=\"cargo\" placeholder=\"Introduce el cargo\" class=\"form-control\"></td>
                      <td><input type=\"text\" id=\"url\" placeholder=\"Introduce la URL\" class=\"form-control\"></td>
                      <td><button type=\"button\" onclick=\"agregarPonente()\" class=\"btn btn-primary\">Agregar</button></td>
                  </tr>
                  
              </tbody>
          </table>
          </div>
        </div>

        <div id=\"tab2\" class=\"tab\">
          <a href=\"#tab2\">Pestaña 2</a>
          <div class=\"tab-content\">
            <table class=\"w-100\">
              <tr>
                  <td><select class=\"recursos select-fixed\" id=\"fuenteRecursos\" size=\"10\" multiple=\"multiple\"></select></td>
                  <td class=\"text-center align-middle\">
                      <div class=\"d-flex flex-column align-items-center\">
                          <span id=\"pasarIzqRecursos\">&lt;</span>
                          <span id=\"pasarIzqTodosRecursos\">&lt;&lt;</span>
                          <span id=\"pasarDerRecursos\">&gt;</span>
                          <span id=\"pasarDerTodosRecursos\">&gt;&gt;</span>
                      </div>
                  </td>
                  <td><select class=\"recursos select-fixed\" id=\"seleccionadosRecursos\" size=\"10\" multiple=\"multiple\"></select></td>
                  <td><select class=\"select-fixed\" id=\"selectEspacios\" size=\"10\" multiple=\"multiple\"></select></td>
              </tr>
          </table>
          </div>
        </div>
        

        <div id=\"tab1\" class=\"tab\">
          <a href=\"#tab1\">Pestaña 1</a>
          <div class=\"tab-content\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <label for=\"valorID\">ID:</label>
                <input type=\"text\" class=\"form-control\" id=\"valorID\" name=\"idPadre\">
              </div>
              <div class=\"col-md-4\">
                <label for=\"tipoActividad\">TIPO:</label>
                <select class=\"form-control\" id=\"tipoActividad\">
                  <option value=\"\">-</option>
                  <option value=\"1\">Simple</option>
                  <option value=\"2\">Compuesta</option>
                </select>
              </div>
              <div class=\"col-md-4\">
                <label for=\"evento\">EVENTO:</label>
                <select class=\"form-control\" id=\"evento\">
                  <option value=\"\">-</option>
                  <option value=\"1\">Evento1</option>
                  <option value=\"2\">Evento2</option>
                </select>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-6\">
                <label for=\"descripcionID\">DESCRIPCIÓN:</label>
                <input type=\"text\" class=\"form-control\" id=\"descripcionID\" name=\"descripcion\">
              </div>
              <div class=\"col-md-6\">
                <label for=\"aforo\">AFORO:</label>
                <input type=\"text\" class=\"form-control\" id=\"aforo\" name=\"aforo\">
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-6\">
                <label for=\"fechaInicio\">FECHA DE INICIO:</label>
                <input type=\"date\" class=\"form-control\" id=\"fechaInicio\" name=\"fechaInicio\">
              </div>
              <div class=\"col-md-6\">
                <label for=\"fechaFin\">FECHA DE FIN:</label>
                <input type=\"date\" class=\"form-control\" id=\"fechaFin\" name=\"fechaFin\">
              </div>
              <div class=\"col-md-12 text-right mt-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Guardar\">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 145
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        yield "  <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
  <script src=\"";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/select.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ficheros.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tablaPonentes.js"), "html", null, true);
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
        return "actividad/nuevaActividad.html.twig";
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
        return array (  281 => 150,  277 => 149,  273 => 148,  269 => 146,  259 => 145,  117 => 14,  107 => 13,  87 => 6,  74 => 152,  72 => 145,  69 => 144,  67 => 13,  60 => 9,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Document{% endblock %}</title>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/estilosP.css') }}\">
</head>

<body>
  {% block body %}
  <form id=\"formActividad\" method=\"post\" action=\"{{ path('actividad_create') }}\">
    <div class=\"tabs\">
      <div class=\"tab-container\">
        

        <div id=\"tab4\" class=\"tab\">
          <a href=\"#tab4\">Pestaña 4</a>
          <div class=\"tab-content\">
              <table class=\"w-100\">
                  <tr>
                      <td><select class=\"recursos select-fixed\" id=\"fuenteGrupos\" size=\"10\" multiple=\"multiple\"></select></td>
                      <td class=\"text-center align-middle\">
                          <div class=\"d-flex flex-column align-items-center\">
                              <span id=\"pasarIzqGrupos\">&lt;</span>
                              <span id=\"pasarIzqTodosGrupos\">&lt;&lt;</span>
                              <span id=\"pasarDerGrupos\">&gt;</span>
                              <span id=\"pasarDerTodosGrupos\">&gt;&gt;</span>
                          </div>
                      </td>
                      <td class=\"text-right\"><select class=\"recursos select-fixed\" id=\"seleccionadosGrupos\" name=\"seleccionadosGrupos[]\" size=\"10\" multiple=\"multiple\"></select></td>
                  </tr>
              </table>
              <div class=\"text-right mt-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Guardar\">
              </div>
          </div>
        </div>

        
        <div id=\"tab3\" class=\"tab\">
          <a href=\"#tab3\">Pestaña 3</a>
          <div class=\"tab-content\">
            <table border=\"1\" id=\"ponentesTable\" class=\"table\">
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
                      <td><input type=\"text\" id=\"nombre\" placeholder=\"Introduce el nombre\" class=\"form-control\"></td>
                      <td><input type=\"text\" id=\"cargo\" placeholder=\"Introduce el cargo\" class=\"form-control\"></td>
                      <td><input type=\"text\" id=\"url\" placeholder=\"Introduce la URL\" class=\"form-control\"></td>
                      <td><button type=\"button\" onclick=\"agregarPonente()\" class=\"btn btn-primary\">Agregar</button></td>
                  </tr>
                  
              </tbody>
          </table>
          </div>
        </div>

        <div id=\"tab2\" class=\"tab\">
          <a href=\"#tab2\">Pestaña 2</a>
          <div class=\"tab-content\">
            <table class=\"w-100\">
              <tr>
                  <td><select class=\"recursos select-fixed\" id=\"fuenteRecursos\" size=\"10\" multiple=\"multiple\"></select></td>
                  <td class=\"text-center align-middle\">
                      <div class=\"d-flex flex-column align-items-center\">
                          <span id=\"pasarIzqRecursos\">&lt;</span>
                          <span id=\"pasarIzqTodosRecursos\">&lt;&lt;</span>
                          <span id=\"pasarDerRecursos\">&gt;</span>
                          <span id=\"pasarDerTodosRecursos\">&gt;&gt;</span>
                      </div>
                  </td>
                  <td><select class=\"recursos select-fixed\" id=\"seleccionadosRecursos\" size=\"10\" multiple=\"multiple\"></select></td>
                  <td><select class=\"select-fixed\" id=\"selectEspacios\" size=\"10\" multiple=\"multiple\"></select></td>
              </tr>
          </table>
          </div>
        </div>
        

        <div id=\"tab1\" class=\"tab\">
          <a href=\"#tab1\">Pestaña 1</a>
          <div class=\"tab-content\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <label for=\"valorID\">ID:</label>
                <input type=\"text\" class=\"form-control\" id=\"valorID\" name=\"idPadre\">
              </div>
              <div class=\"col-md-4\">
                <label for=\"tipoActividad\">TIPO:</label>
                <select class=\"form-control\" id=\"tipoActividad\">
                  <option value=\"\">-</option>
                  <option value=\"1\">Simple</option>
                  <option value=\"2\">Compuesta</option>
                </select>
              </div>
              <div class=\"col-md-4\">
                <label for=\"evento\">EVENTO:</label>
                <select class=\"form-control\" id=\"evento\">
                  <option value=\"\">-</option>
                  <option value=\"1\">Evento1</option>
                  <option value=\"2\">Evento2</option>
                </select>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-6\">
                <label for=\"descripcionID\">DESCRIPCIÓN:</label>
                <input type=\"text\" class=\"form-control\" id=\"descripcionID\" name=\"descripcion\">
              </div>
              <div class=\"col-md-6\">
                <label for=\"aforo\">AFORO:</label>
                <input type=\"text\" class=\"form-control\" id=\"aforo\" name=\"aforo\">
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-6\">
                <label for=\"fechaInicio\">FECHA DE INICIO:</label>
                <input type=\"date\" class=\"form-control\" id=\"fechaInicio\" name=\"fechaInicio\">
              </div>
              <div class=\"col-md-6\">
                <label for=\"fechaFin\">FECHA DE FIN:</label>
                <input type=\"date\" class=\"form-control\" id=\"fechaFin\" name=\"fechaFin\">
              </div>
              <div class=\"col-md-12 text-right mt-3\">
                <input type=\"submit\" class=\"btn btn-primary\" value=\"Guardar\">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
  {% endblock %}

  {% block javascripts %}
  <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
  <script src=\"{{ asset('js/select.js') }}\"></script>
  <script src=\"{{ asset('js/ficheros.js') }}\"></script>
  <script src=\"{{ asset('js/tablaPonentes.js') }}\"></script>
  {% endblock %}
</body>
</html>
", "actividad/nuevaActividad.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\actividad\\nuevaActividad.html.twig");
    }
}

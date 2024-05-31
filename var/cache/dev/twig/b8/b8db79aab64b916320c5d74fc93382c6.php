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

/* pdf/template.html.twig */
class __TwigTemplate_ce8d90376daf371c7701381e1f3215fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/template.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/template.html.twig"));

        yield "<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Interstellar Sevilla Schedule</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        h1, h2 {
            color: #e74c3c;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .table-schedule {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table-schedule thead th {
            background-color: #e74c3c;
            color: #ffffff;
            font-size: 1.2em;
            text-align: center;
            padding: 15px;
        }

        .table-schedule tbody tr {
            background-color: #ffffff;
            transition: background-color 0.3s;
        }

        .table-schedule tbody tr:hover {
            background-color: #f2f2f2;
        }

        .table-schedule td {
            text-align: center;
            vertical-align: middle;
            padding: 15px;
            font-size: 1em;
            border-top: 1px solid #dee2e6;
        }

        .event {
            font-weight: bold;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .event:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .veintiuno { background-color: #e74c3c; }
        .angel-stanich { background-color: #3498db; }
        .random-vestax { background-color: #9b59b6; }
        .xoel-lopez { background-color: #f39c12; }
        .carlos-sadness { background-color: #1abc9c; }
        .besmaya { background-color: #2ecc71; }
        .fernanda-arrau { background-color: #27ae60; }
        .dalila { background-color: #8e44ad; }
        .love-of-lesbian { background-color: #d35400; }
        .fuel-fandango { background-color: #c0392b; }
        .marlon { background-color: #e67e22; }
        .cora-novoa { background-color: #7f8c8d; }
        .ginebras { background-color: #16a085; }
        .dorian { background-color: #2980b9; }
        .la-paloma { background-color: #34495e; }
        .lejia { background-color: #bdc3c7; }
    </style>
</head>
<body>
    <div class=\"container mt-5\">
        <div class=\"text-center mb-4\">
            <h1>Interestelar Sevilla</h1>
            <h2>Sábado 18 Mayo</h2>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <table class=\"table table-bordered table-schedule\">
                    <thead>
                        <tr>
                            <th>Horario</th>
                            <th>Cruzcampo</th>
                            <th>José Cuervo</th>
                            <th>Ariane</th>
                            <th>Astro Club</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>18:30 - 19:30</td>
                            <td class=\"event veintiuno\">Veintiuno <br> 18:50 - 19:40</td>
                            <td class=\"event angel-stanich\">Ángel Stanich <br> 18:50 - 19:40</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>19:00 - 20:30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=\"event random-vestax\">Random Vestax <br> 19:00 - 20:30</td>
                        </tr>
                        <tr>
                            <td>19:30 - 20:30</td>
                            <td class=\"event xoel-lopez\">Xoel López <br> 19:45 - 20:50</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>20:30 - 21:30</td>
                            <td></td>
                            <td class=\"event carlos-sadness\">Carlos Sadness <br> 20:55 - 22:05</td>
                            <td class=\"event besmaya\">Besmaya <br> 20:55 - 22:05</td>
                            <td class=\"event fernanda-arrau\">Fernanda Arrau <br> 20:35 - 22:05</td>
                        </tr>
                        <tr>
                            <td>21:30 - 22:30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>22:10 - 23:40</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=\"event dalila\">Dalila <br> 22:10 - 23:40</td>
                        </tr>
                        <tr>
                            <td>22:30 - 23:30</td>
                            <td class=\"event love-of-lesbian\">Love of Lesbian <br> 22:10 - 23:40</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>23:30 - 00:30</td>
                            <td class=\"event fuel-fandango\">Fuel Fandango <br> 23:45 - 00:35</td>
                            <td class=\"event marlon\">Marlon <br> 23:45 - 00:35</td>
                            <td></td>
                            <td class=\"event cora-novoa\">Cora Novoa <br> 23:45 - 1:15</td>
                        </tr>
                        <tr>
                            <td>00:30 - 01:30</td>
                            <td class=\"event ginebras\">Ginebras <br> 00:40 - 1:50</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>01:30 - 03:00</td>
                            <td class=\"event dorian\">Dorian <br> 1:50 - 3:00</td>
                            <td class=\"event la-paloma\">La Paloma <br> 1:50 - 3:00</td>
                            <td></td>
                            <td class=\"event lejia\">Lejía <br> 1:20 - 3:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
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
        return "pdf/template.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Interstellar Sevilla Schedule</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        h1, h2 {
            color: #e74c3c;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .table-schedule {
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table-schedule thead th {
            background-color: #e74c3c;
            color: #ffffff;
            font-size: 1.2em;
            text-align: center;
            padding: 15px;
        }

        .table-schedule tbody tr {
            background-color: #ffffff;
            transition: background-color 0.3s;
        }

        .table-schedule tbody tr:hover {
            background-color: #f2f2f2;
        }

        .table-schedule td {
            text-align: center;
            vertical-align: middle;
            padding: 15px;
            font-size: 1em;
            border-top: 1px solid #dee2e6;
        }

        .event {
            font-weight: bold;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .event:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .veintiuno { background-color: #e74c3c; }
        .angel-stanich { background-color: #3498db; }
        .random-vestax { background-color: #9b59b6; }
        .xoel-lopez { background-color: #f39c12; }
        .carlos-sadness { background-color: #1abc9c; }
        .besmaya { background-color: #2ecc71; }
        .fernanda-arrau { background-color: #27ae60; }
        .dalila { background-color: #8e44ad; }
        .love-of-lesbian { background-color: #d35400; }
        .fuel-fandango { background-color: #c0392b; }
        .marlon { background-color: #e67e22; }
        .cora-novoa { background-color: #7f8c8d; }
        .ginebras { background-color: #16a085; }
        .dorian { background-color: #2980b9; }
        .la-paloma { background-color: #34495e; }
        .lejia { background-color: #bdc3c7; }
    </style>
</head>
<body>
    <div class=\"container mt-5\">
        <div class=\"text-center mb-4\">
            <h1>Interestelar Sevilla</h1>
            <h2>Sábado 18 Mayo</h2>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <table class=\"table table-bordered table-schedule\">
                    <thead>
                        <tr>
                            <th>Horario</th>
                            <th>Cruzcampo</th>
                            <th>José Cuervo</th>
                            <th>Ariane</th>
                            <th>Astro Club</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>18:30 - 19:30</td>
                            <td class=\"event veintiuno\">Veintiuno <br> 18:50 - 19:40</td>
                            <td class=\"event angel-stanich\">Ángel Stanich <br> 18:50 - 19:40</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>19:00 - 20:30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=\"event random-vestax\">Random Vestax <br> 19:00 - 20:30</td>
                        </tr>
                        <tr>
                            <td>19:30 - 20:30</td>
                            <td class=\"event xoel-lopez\">Xoel López <br> 19:45 - 20:50</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>20:30 - 21:30</td>
                            <td></td>
                            <td class=\"event carlos-sadness\">Carlos Sadness <br> 20:55 - 22:05</td>
                            <td class=\"event besmaya\">Besmaya <br> 20:55 - 22:05</td>
                            <td class=\"event fernanda-arrau\">Fernanda Arrau <br> 20:35 - 22:05</td>
                        </tr>
                        <tr>
                            <td>21:30 - 22:30</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>22:10 - 23:40</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class=\"event dalila\">Dalila <br> 22:10 - 23:40</td>
                        </tr>
                        <tr>
                            <td>22:30 - 23:30</td>
                            <td class=\"event love-of-lesbian\">Love of Lesbian <br> 22:10 - 23:40</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>23:30 - 00:30</td>
                            <td class=\"event fuel-fandango\">Fuel Fandango <br> 23:45 - 00:35</td>
                            <td class=\"event marlon\">Marlon <br> 23:45 - 00:35</td>
                            <td></td>
                            <td class=\"event cora-novoa\">Cora Novoa <br> 23:45 - 1:15</td>
                        </tr>
                        <tr>
                            <td>00:30 - 01:30</td>
                            <td class=\"event ginebras\">Ginebras <br> 00:40 - 1:50</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>01:30 - 03:00</td>
                            <td class=\"event dorian\">Dorian <br> 1:50 - 3:00</td>
                            <td class=\"event la-paloma\">La Paloma <br> 1:50 - 3:00</td>
                            <td></td>
                            <td class=\"event lejia\">Lejía <br> 1:20 - 3:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
</body>
</html>
", "pdf/template.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\pdf\\template.html.twig");
    }
}

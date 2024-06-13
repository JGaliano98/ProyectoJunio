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

/* error/error.html.twig */
class __TwigTemplate_8bcb54ff6ffe5e8b095e8a1c091b5f61 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/error.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/error.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Página no encontrada (404)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .error-container {
            text-align: center;
            padding: 30px;
            max-width: 600px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .error-container h1 {
            font-size: 3em;
            margin-bottom: 10px;
            color: #dc3545;
        }
        .error-container p {
            font-size: 1.2em;
            color: #6c757d;
        }
        .error-container ul {
            list-style-type: none;
            padding: 0;
        }
        .error-container ul li {
            margin: 10px 0;
        }
        .error-container ul li a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }
        .error-container ul li a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class=\"error-container\">
        <h1>Oops! Página no encontrada (404)</h1>
        <p>Lo sentimos, pero la página a la que quiere acceder no se encuentra.</p>
        <ul>
            <li><a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Volver a Inicio</a></li>
            <li>Revista la URL para ver el error.</li>
        </ul>
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
        return "error/error.html.twig";
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
        return array (  103 => 59,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/bundles/TwigBundle/Exception/error404.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Página no encontrada (404)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .error-container {
            text-align: center;
            padding: 30px;
            max-width: 600px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .error-container h1 {
            font-size: 3em;
            margin-bottom: 10px;
            color: #dc3545;
        }
        .error-container p {
            font-size: 1.2em;
            color: #6c757d;
        }
        .error-container ul {
            list-style-type: none;
            padding: 0;
        }
        .error-container ul li {
            margin: 10px 0;
        }
        .error-container ul li a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s;
        }
        .error-container ul li a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class=\"error-container\">
        <h1>Oops! Página no encontrada (404)</h1>
        <p>Lo sentimos, pero la página a la que quiere acceder no se encuentra.</p>
        <ul>
            <li><a href=\"{{ path('home') }}\">Volver a Inicio</a></li>
            <li>Revista la URL para ver el error.</li>
        </ul>
    </div>
</body>
</html>
", "error/error.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\error\\error.html.twig");
    }
}

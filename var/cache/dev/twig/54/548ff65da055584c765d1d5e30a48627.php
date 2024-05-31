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

/* pdf/fernandito.html.twig */
class __TwigTemplate_f7f95233831ccead4b14e74605a00736 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/fernandito.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/fernandito.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Documento PDF</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f7f7f7;
        }
        .header, .footer {
            text-align: center;
            padding: 10px 20px;
            background-color: #f1f1f1;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #4A90E2;
        }
        p {
            line-height: 1.5;
            font-size: 14px;
        }
        img.logo {
            max-width: 400px; /* Adjust logo size */
            margin-bottom: 20px;
        }
        .footer {
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/fernandito.jpg")), "html", null, true);
        yield "\" alt=\"Logo\" class=\"logo\">
    </div>
    <div class=\"content\">
        <h1>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "</h1>
        <p>Este documento PDF fue generado usando Symfony, DOM PDF, Mailer y una plantilla Twig</p>
    </div>
    <div class=\"footer\">
        Documento generado el ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i:s"), "html", null, true);
        yield "
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
        return "pdf/fernandito.html.twig";
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
        return array (  100 => 50,  93 => 46,  87 => 43,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/pdf/template.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Documento PDF</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f7f7f7;
        }
        .header, .footer {
            text-align: center;
            padding: 10px 20px;
            background-color: #f1f1f1;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: #4A90E2;
        }
        p {
            line-height: 1.5;
            font-size: 14px;
        }
        img.logo {
            max-width: 400px; /* Adjust logo size */
            margin-bottom: 20px;
        }
        .footer {
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"{{ absolute_url(asset('images/fernandito.jpg')) }}\" alt=\"Logo\" class=\"logo\">
    </div>
    <div class=\"content\">
        <h1>{{ message }}</h1>
        <p>Este documento PDF fue generado usando Symfony, DOM PDF, Mailer y una plantilla Twig</p>
    </div>
    <div class=\"footer\">
        Documento generado el {{ \"now\"|date(\"Y-m-d H:i:s\") }}
    </div>
</body>
</html>
", "pdf/fernandito.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\pdf\\fernandito.html.twig");
    }
}

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

/* home/base.html.twig */
class __TwigTemplate_597ff91c8a1500d323209a42c4e83e5b extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html> 
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link rel=\"icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icono.jpg"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/home.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        .footer {
            margin-top: auto;
        }
    </style>
    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 28
        yield "</head>
<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000\">
                    <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icono2.png"), "html", null, true);
        yield "\" alt=\"Logo I.E.S. Las Fuentezuelas\" width=\"80\">
                </a>

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto\">


                       <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"http://127.0.0.1:8000\">
                                <i class=\"fas fa-home\"></i> Inicio
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>




                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lista_eventos");
        yield "\">
                                <i class=\"fas fa-calendar-alt\"></i> Eventos
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lista_actividades");
        yield "\">
                                <i class=\"fas fa-list\"></i> Actividades
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                        
                        ";
        // line 73
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 74
            yield "
                        <li class=\"nav-item\">
                            <a href=\"http://127.0.0.1:8000/admin?crudAction=index&crudControllerFqcn=App%5CController%5CAdmin%5CUserCrudController\" id=\"cart-icon\" class=\"nav-link\"> 
                                <i class=\"fas fa-cog\"></i> Acceder Administrador
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt\"></i> Logout
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <span class=\"nav-link\">
                                    <i class=\"fas fa-user\"></i> ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "user", [], "any", false, false, false, 91), "getNombre", [], "method", false, false, false, 91), "html", null, true);
            yield "
                                </span>
                            </li>
                        ";
        } else {
            // line 95
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\">
                                    <i class=\"fas fa-sign-in-alt\"></i> Login
                                </a>
                            </li>
                        ";
        }
        // line 101
        yield "                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class=\"content\">
        ";
        // line 108
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 109
        yield "    </div>

    <footer class=\"footer mt-auto py-3 bg-dark text-white d-flex justify-content-between align-items-center\">
        <div class=\"d-flex\" style=\"margin: 0 40px;\">
            <a href=\"https://facebook.com\" class=\"btn btn-social-icon btn-facebook mr-2\" style=\"font-size: 28px;\"><i class=\"fab fa-facebook-f\" style=\"color: white;\"></i></a>
            <a href=\"https://twitter.com\" class=\"btn btn-social-icon btn-twitter mr-2\" style=\"font-size: 28px;\"><i class=\"fab fa-twitter\" style=\"color: white;\"></i></a>
            <a href=\"https://instagram.com\" class=\"btn btn-social-icon btn-instagram\" style=\"font-size: 28px;\"><i class=\"fab fa-instagram\" style=\"color: white;\"></i></a>
        </div>

        <div class=\"text-center\" style=\"margin: 0 40px;\">
            © ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Jesus Galiano
        </div>
    </footer>

    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js\"></script>
    ";
        // line 127
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 133
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

        yield "Eventos I.E.S. Las Fuentezuelas - Jaén";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 27
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 108
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        yield "
    <script src=\"";
        // line 129
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
        return "home/base.html.twig";
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
        return array (  299 => 129,  296 => 128,  286 => 127,  267 => 108,  248 => 27,  228 => 6,  215 => 133,  213 => 127,  202 => 119,  190 => 109,  188 => 108,  179 => 101,  171 => 95,  164 => 91,  155 => 85,  142 => 74,  140 => 73,  129 => 65,  118 => 57,  92 => 34,  84 => 28,  82 => 27,  59 => 7,  55 => 6,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html> 
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Eventos I.E.S. Las Fuentezuelas - Jaén{% endblock %}</title>
    <link rel=\"icon\" href=\"{{ asset('/img/icono.jpg') }}\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/home.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
        }
        .footer {
            margin-top: auto;
        }
    </style>
    {% block stylesheets %}{% endblock %}
</head>
<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"http://127.0.0.1:8000\">
                    <img src=\"{{ asset('img/icono2.png') }}\" alt=\"Logo I.E.S. Las Fuentezuelas\" width=\"80\">
                </a>

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto\">


                       <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"http://127.0.0.1:8000\">
                                <i class=\"fas fa-home\"></i> Inicio
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>




                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('lista_eventos') }}\">
                                <i class=\"fas fa-calendar-alt\"></i> Eventos
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('lista_actividades') }}\">
                                <i class=\"fas fa-list\"></i> Actividades
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                        
                        {% if is_granted('IS_AUTHENTICATED_FULLY') %}

                        <li class=\"nav-item\">
                            <a href=\"http://127.0.0.1:8000/admin?crudAction=index&crudControllerFqcn=App%5CController%5CAdmin%5CUserCrudController\" id=\"cart-icon\" class=\"nav-link\"> 
                                <i class=\"fas fa-cog\"></i> Acceder Administrador
                            </a>
                        </li>

                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">
                                    <i class=\"fas fa-sign-out-alt\"></i> Logout
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <span class=\"nav-link\">
                                    <i class=\"fas fa-user\"></i> {{ app.user.getNombre() }}
                                </span>
                            </li>
                        {% else %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\">
                                    <i class=\"fas fa-sign-in-alt\"></i> Login
                                </a>
                            </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class=\"content\">
        {% block body %}{% endblock %}
    </div>

    <footer class=\"footer mt-auto py-3 bg-dark text-white d-flex justify-content-between align-items-center\">
        <div class=\"d-flex\" style=\"margin: 0 40px;\">
            <a href=\"https://facebook.com\" class=\"btn btn-social-icon btn-facebook mr-2\" style=\"font-size: 28px;\"><i class=\"fab fa-facebook-f\" style=\"color: white;\"></i></a>
            <a href=\"https://twitter.com\" class=\"btn btn-social-icon btn-twitter mr-2\" style=\"font-size: 28px;\"><i class=\"fab fa-twitter\" style=\"color: white;\"></i></a>
            <a href=\"https://instagram.com\" class=\"btn btn-social-icon btn-instagram\" style=\"font-size: 28px;\"><i class=\"fab fa-instagram\" style=\"color: white;\"></i></a>
        </div>

        <div class=\"text-center\" style=\"margin: 0 40px;\">
            © {{ \"now\"|date(\"Y\") }} Jesus Galiano
        </div>
    </footer>

    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js\"></script>
    {% block javascripts %}

    <script src=\"{{ asset('js/evento.js') }}\"></script>


    {% endblock %}
</body>
</html>
", "home/base.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\home\\base.html.twig");
    }
}

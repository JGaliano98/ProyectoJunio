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

/* home/index.html.twig */
class __TwigTemplate_be69aa7300ba4aed3dd2b2c801e0452e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icono.jpg"), "html", null, true);
        yield "\" type=\"image/x-icon\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/home.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    ";
        // line 11
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 12
        yield "</head>
<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"";
        // line 18
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icono2.png"), "html", null, true);
        yield "\" alt=\"Logo I.E.S. Las Fuentezuelas\" width=\"80\">
                </a>

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                     <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <i class=\"fas fa-calendar-alt\"></i> Eventos
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <i class=\"fas fa-list\"></i> Actividades
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                        
                        ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 44
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
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    <i class=\"fas fa-sign-out-alt\"></i> Logout
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <span class=\"nav-link\">
                                    <i class=\"fas fa-user\"></i> ";
            // line 62
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "getNombre", [], "method", false, false, false, 62), "html", null, true);
            yield "
                                </span>
                            </li>
                        ";
        } else {
            // line 66
            yield "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#\" data-toggle=\"modal\" data-target=\"#loginModal\">
                                    <i class=\"fas fa-sign-in-alt\"></i> Login
                                </a>
                            </li>
                        ";
        }
        // line 72
        yield "                    </ul>


                </div>
            </div>
        </nav>
    </header>

    ";
        // line 80
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 153
        yield "
    <footer class=\"footer mt-auto py-3 bg-dark text-white d-flex justify-content-between align-items-center\">
        <div class=\"d-flex\" style=\"margin: 0 40px;\">
            <a href=\"https://facebook.com\" class=\"btn btn-social-icon btn-facebook mr-2\" style=\"font-size: 28px;\"><i class=\"fab fa-facebook-f\" style=\"color: white;\"></i></a>
            <a href=\"https://twitter.com\" class=\"btn btn-social-icon btn-twitter mr-2\" style=\"font-size: 28px;\"><i class=\"fab fa-twitter\" style=\"color: white;\"></i></a>
            <a href=\"https://instagram.com\" class=\"btn btn-social-icon btn-instagram\" style=\"font-size: 28px;\"><i class=\"fab fa-instagram\" style=\"color: white;\"></i></a>
        </div>

        <div class=\"text-center\" style=\"margin: 0 40px;\">
            © ";
        // line 162
        yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, "now", "Y"), "html", null, true);
        yield " Jesus Galiano
        </div>
    </footer>


    <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js\"></script>
    <script src=\"js/js.js\"></script>
    ";
        // line 172
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 173
        yield "</body>
</html>";
        
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

    // line 11
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

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 81
        yield "    <section id=\"hero\" class=\"jumbotron text-center\" style=\"background-image: url('img/portada.jpg');\">
        <div class=\"container\">
            <h1 class=\"display-4\">I.E.S. LAS FUENTEZUELAS - JAÉN</h1>
            <p class=\"lead\">El lugar donde da comienzo tu futuro laboral</p>
        </div>
    </section>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"img/icono.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Evento 1</h5>
                        <p class=\"card-text\">Descripción del evento.</p>
                        <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargar_pdf");
        yield "\" class=\"btn btn-primary\">Descargar PDF</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"img/icono.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Evento 2</h5>
                        <p class=\"card-text\">Descripción del evento.</p>
                        <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargar_pdf");
        yield "\" class=\"btn btn-primary\">Descargar PDF</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"img/icono.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Evento 3</h5>
                        <p class=\"card-text\">Descripción del evento.</p>
                        <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargar_pdf");
        yield "\" class=\"btn btn-primary\">Descargar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"loginModalLabel\">Iniciar sesión</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Cerrar\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- Aquí coloca tu formulario de inicio de sesión -->
                <form action=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
                    ";
        // line 135
        yield "                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                    
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Correo electrónico</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa tu correo electrónico\" name=\"_username\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Contraseña</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Contraseña\" name=\"_password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Iniciar sesión</button>
                </form>
            </div>

            </div>
        </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 172
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  340 => 172,  310 => 135,  306 => 133,  286 => 116,  273 => 106,  260 => 96,  243 => 81,  233 => 80,  214 => 11,  194 => 6,  182 => 173,  180 => 172,  167 => 162,  156 => 153,  154 => 80,  144 => 72,  136 => 66,  129 => 62,  120 => 56,  106 => 44,  104 => 43,  76 => 18,  68 => 12,  66 => 11,  59 => 7,  55 => 6,  48 => 1,);
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
    {% block stylesheets %}{% endblock %}
</head>
<body>
    <header>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"{{ asset('img/icono2.png') }}\" alt=\"Logo I.E.S. Las Fuentezuelas\" width=\"80\">
                </a>

                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                     <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
                                <i class=\"fas fa-calendar-alt\"></i> Eventos
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <span class=\"nav-link\">|</span>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">
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

    {% block body %}
    <section id=\"hero\" class=\"jumbotron text-center\" style=\"background-image: url('img/portada.jpg');\">
        <div class=\"container\">
            <h1 class=\"display-4\">I.E.S. LAS FUENTEZUELAS - JAÉN</h1>
            <p class=\"lead\">El lugar donde da comienzo tu futuro laboral</p>
        </div>
    </section>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"img/icono.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Evento 1</h5>
                        <p class=\"card-text\">Descripción del evento.</p>
                        <a href=\"{{ path('descargar_pdf') }}\" class=\"btn btn-primary\">Descargar PDF</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"img/icono.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Evento 2</h5>
                        <p class=\"card-text\">Descripción del evento.</p>
                        <a href=\"{{ path('descargar_pdf') }}\" class=\"btn btn-primary\">Descargar PDF</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"img/icono.jpg\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Evento 3</h5>
                        <p class=\"card-text\">Descripción del evento.</p>
                        <a href=\"{{ path('descargar_pdf') }}\" class=\"btn btn-primary\">Descargar PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"loginModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"loginModalLabel\">Iniciar sesión</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Cerrar\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <!-- Aquí coloca tu formulario de inicio de sesión -->
                <form action=\"{{ path('app_login') }}\" method=\"post\">
                    {# Incluir el token CSRF #}
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                    
                    <div class=\"form-group\">
                        <label for=\"exampleInputEmail1\">Correo electrónico</label>
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Ingresa tu correo electrónico\" name=\"_username\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"exampleInputPassword1\">Contraseña</label>
                        <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Contraseña\" name=\"_password\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Iniciar sesión</button>
                </form>
            </div>

            </div>
        </div>
        </div>
    {% endblock %}

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
    <script src=\"js/js.js\"></script>
    {% block javascripts %}{% endblock %}
</body>
</html>", "home/index.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\home\\index.html.twig");
    }
}

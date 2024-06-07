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
class __TwigTemplate_0ec5c61f9546a7b740a4253daec33b69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("home/base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<section id=\"hero\" class=\"jumbotron text-center\" style=\"background-image: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/portada.jpg"), "html", null, true);
        yield "');\">
    <div class=\"container\">
        <h1 class=\"display-4\">I.E.S. LAS FUENTEZUELAS - JAÉN</h1>
        <p class=\"lead\">El lugar donde da comienzo tu futuro laboral</p>
    </div>
</section>

<div class=\"container\">
    <h2 class=\"event-title\">Próximos Eventos:</h2>
    <div class=\"row\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["eventos"]) || array_key_exists("eventos", $context) ? $context["eventos"] : (function () { throw new RuntimeError('Variable "eventos" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["evento"]) {
            // line 15
            yield "        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <img src=\"images/";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "imagenUrl", [], "any", false, false, false, 17), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"Imagen del evento\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "titulo", [], "any", false, false, false, 19), "html", null, true);
            yield "</h5>
                    <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("descargar_pdf", ["eventoId" => CoreExtension::getAttribute($this->env, $this->source, $context["evento"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Descargar PDF</a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    </div>
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
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
                ";
        // line 40
        yield "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
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
        return array (  130 => 40,  126 => 38,  111 => 25,  100 => 20,  96 => 19,  91 => 17,  87 => 15,  83 => 14,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home/base.html.twig' %}

{% block body %}
<section id=\"hero\" class=\"jumbotron text-center\" style=\"background-image: url('{{ asset('img/portada.jpg') }}');\">
    <div class=\"container\">
        <h1 class=\"display-4\">I.E.S. LAS FUENTEZUELAS - JAÉN</h1>
        <p class=\"lead\">El lugar donde da comienzo tu futuro laboral</p>
    </div>
</section>

<div class=\"container\">
    <h2 class=\"event-title\">Próximos Eventos:</h2>
    <div class=\"row\">
        {% for evento in eventos %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                <img src=\"images/{{ evento.imagenUrl }}\" class=\"card-img-top\" alt=\"Imagen del evento\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ evento.titulo }}</h5>
                    <a href=\"{{ path('descargar_pdf', {'eventoId': evento.id}) }}\" class=\"btn btn-primary\">Descargar PDF</a>
                </div>
            </div>
        </div>
        {% endfor %}
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
", "home/index.html.twig", "C:\\xampp\\htdocs\\ProyectoJunio\\templates\\home\\index.html.twig");
    }
}

<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/_header_admin.html.twig */
class __TwigTemplate_d21f7a1b8178649e0c644d95fa114814 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header_admin.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg bg-danger\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Administration du blog de l'IUT Informatique</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link";
        // line 10
        echo (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "current_route", [], "any", false, false, false, 10)) && is_string($__internal_compile_1 = "admin.article.") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? (" active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.article.index");
        echo "\">Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link";
        // line 13
        echo (((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "current_route", [], "any", false, false, false, 13)) && is_string($__internal_compile_3 = "admin.categorie.") && str_starts_with($__internal_compile_2, $__internal_compile_3))) ? (" active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.categorie.index");
        echo "\">Catégories</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
        echo "
                    </a>
                    <ul class=\"dropdown-menu bg-danger\">
                        <li><a class=\"dropdown-item\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil utilisateur</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Me déconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/_header_admin.html.twig";
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
        return array (  87 => 24,  82 => 22,  76 => 19,  65 => 13,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg bg-danger\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"{{ path('home') }}\">Administration du blog de l'IUT Informatique</a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mb-2 mb-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link{{ app.current_route starts with 'admin.article.' ? ' active': '' }}\" href=\"{{ path('admin.article.index') }}\">Articles</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link{{ app.current_route starts with 'admin.categorie.' ? ' active': '' }}\" href=\"{{ path('admin.categorie.index') }}\">Catégories</a>
                </li>
            </ul>
            <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        {{ app.user.email }}
                    </a>
                    <ul class=\"dropdown-menu bg-danger\">
                        <li><a class=\"dropdown-item\" href=\"{{ path('home') }}\">Accueil utilisateur</a></li>
                        <li><hr class=\"dropdown-divider\"></li>
                        <li><a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\">Me déconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>", "partials/_header_admin.html.twig", "/var/www/html/templates/partials/_header_admin.html.twig");
    }
}

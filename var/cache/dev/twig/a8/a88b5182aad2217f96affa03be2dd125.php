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

/* article/_card.html.twig */
class __TwigTemplate_da4b27a50b3df3c62c61980799bc18d4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/_card.html.twig"));

        // line 1
        echo "<div class=\"card mb-3 flex-row\">
    <img class=\"card-img-xl-left\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 2, $this->source); })()), "imageFile"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 2, $this->source); })()), "imageName", [], "any", false, false, false, 2), "html", null, true);
        echo "\" />
    <div class=\"card-body\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <h4 class=\"text-primary card-title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h4>
            ";
        // line 6
        if ((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "current_route", [], "any", false, false, false, 6)) && is_string($__internal_compile_1 = "admin.") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 7
            echo "                ";
            $context["prefix"] = "admin.";
            // line 8
            echo "            ";
        } else {
            // line 9
            echo "                ";
            $context["prefix"] = "";
            // line 10
            echo "            ";
        }
        // line 11
        echo "            <strong><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 11, $this->source); })()) . "categorie.show"), ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "categorie", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "categorie", [], "any", false, false, false, 11), "label", [], "any", false, false, false, 11), "html", null, true);
        echo "</a></strong>
        </div>
        <p class=\"card-text\">";
        // line 13
        echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), "html", null, true));
        echo "</p>
        <p class=\"text-end\"><small>Ecrit le ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "publishedAt", [], "any", false, false, false, 14), "d/m/Y"), "html", null, true);
        echo "</small></p>
        ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 16
            echo "        <div class=\"d-flex justify-content-end p-2 gap-4\">
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin.article.edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"blog-button\">Editer</a>
            ";
            // line 18
            $this->loadTemplate("admin/article/_delete_form.html.twig", "article/_card.html.twig", 18)->display($context);
            // line 19
            echo "        </div>
        ";
        }
        // line 21
        echo "    </div>
    <div class=\"card-foot\"></div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "article/_card.html.twig";
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
        return array (  103 => 21,  99 => 19,  97 => 18,  93 => 17,  90 => 16,  88 => 15,  84 => 14,  80 => 13,  72 => 11,  69 => 10,  66 => 9,  63 => 8,  60 => 7,  58 => 6,  54 => 5,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card mb-3 flex-row\">
    <img class=\"card-img-xl-left\" src=\"{{ vich_uploader_asset(article, 'imageFile') }}\" alt=\"{{ article.imageName }}\" />
    <div class=\"card-body\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <h4 class=\"text-primary card-title\">{{ article.title }}</h4>
            {% if app.current_route starts with 'admin.' %}
                {% set prefix = 'admin.' %}
            {% else %}
                {% set prefix = '' %}
            {% endif %}
            <strong><a href=\"{{ path(prefix ~ 'categorie.show', {'id': article.categorie.id}) }}\">{{ article.categorie.label }}</a></strong>
        </div>
        <p class=\"card-text\">{{ article.content|nl2br }}</p>
        <p class=\"text-end\"><small>Ecrit le {{ article.publishedAt|date(\"d/m/Y\") }}</small></p>
        {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-end p-2 gap-4\">
            <a href=\"{{ path('admin.article.edit', {'id': article.id}) }}\" class=\"blog-button\">Editer</a>
            {% include 'admin/article/_delete_form.html.twig' %}
        </div>
        {% endif %}
    </div>
    <div class=\"card-foot\"></div>
</div>", "article/_card.html.twig", "/var/www/html/templates/article/_card.html.twig");
    }
}

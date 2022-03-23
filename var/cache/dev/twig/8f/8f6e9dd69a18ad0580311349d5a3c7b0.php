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

/* base.html.twig */
class __TwigTemplate_f811bf0e1cc41a0a478bccc732a115b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">

    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>";
        // line 10
        echo ((array_key_exists("head_title", $context)) ? ((isset($context["head_title"]) || array_key_exists("head_title", $context) ? $context["head_title"] : (function () { throw new RuntimeError('Variable "head_title" does not exist.', 10, $this->source); })())) : (""));
        echo "</title>

    <meta name=\"description\" content=\"";
        // line 12
        ((array_key_exists("head_description", $context)) ? (print (twig_escape_filter($this->env, (isset($context["head_description"]) || array_key_exists("head_description", $context) ? $context["head_description"] : (function () { throw new RuntimeError('Variable "head_description" does not exist.', 12, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">

    <meta name=\"theme-color\" content=\"";
        // line 14
        ((array_key_exists("head_themeColor", $context)) ? (print (twig_escape_filter($this->env, (isset($context["head_themeColor"]) || array_key_exists("head_themeColor", $context) ? $context["head_themeColor"] : (function () { throw new RuntimeError('Variable "head_themeColor" does not exist.', 14, $this->source); })()), "html", null, true))) : (print ("#ffffff")));
        echo "\">

    <meta name=\"robots\" content=\"";
        // line 16
        ((array_key_exists("head_robots", $context)) ? (print (twig_escape_filter($this->env, (isset($context["head_robots"]) || array_key_exists("head_robots", $context) ? $context["head_robots"] : (function () { throw new RuntimeError('Variable "head_robots" does not exist.', 16, $this->source); })()), "html", null, true))) : (print ("index, follow")));
        echo "\">

    <link rel=\"icon\" type=\"image/x-icon\" sizes=\"64x64\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon/favicon.ico"), "html", null, true);
        echo "\">

    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
</head>
<body>
<main id=\"app\">

    <div class=\"app-container\">

        ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "
    </div>

</main>

";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app", null, "_default", ["preload" => true]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "
    ";
        // line 43
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app", null, "_default", ["async" => true]);
        // line 46
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 46,  170 => 43,  167 => 42,  157 => 41,  146 => 34,  136 => 33,  126 => 21,  116 => 20,  104 => 49,  102 => 41,  95 => 36,  93 => 33,  84 => 26,  82 => 20,  77 => 18,  72 => 16,  67 => 14,  62 => 12,  57 => 10,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"ru\">
<head>
    <meta charset=\"UTF-8\">

    <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">

    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    <title>{{ head_title is defined ? head_title|raw }}</title>

    <meta name=\"description\" content=\"{{ head_description is defined ? head_description }}\">

    <meta name=\"theme-color\" content=\"{{ head_themeColor is defined ? head_themeColor : '#ffffff' }}\">

    <meta name=\"robots\" content=\"{{ head_robots is defined ? head_robots : 'index, follow' }}\">

    <link rel=\"icon\" type=\"image/x-icon\" sizes=\"64x64\" href=\"{{ asset('favicon/favicon.ico') }}\">

    {% block stylesheets %}
        {{- encore_entry_link_tags('app', attributes={
            preload:true
            })
        -}}
    {% endblock %}

</head>
<body>
<main id=\"app\">

    <div class=\"app-container\">

        {% block content %}

        {% endblock %}

    </div>

</main>

{% block javascripts %}

    {{ encore_entry_script_tags('app', attributes={
        async: true,
        })
    }}

{% endblock %}

</body>
</html>", "base.html.twig", "/var/www/app/templates/base.html.twig");
    }
}

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
class __TwigTemplate_3d6432f8407889ba9f37dfc8e61c30233847c5776449830c5069b11880ab9a31 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>WooCommerce Code Reference</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["css/normalize.css"]), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["css/template.css"]), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["images/favicon.png"]), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["images/apple-touch-icon.png"]), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["images/apple-touch-icon-72x72.png"]), "html", null, true);
        echo "\"/>
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["images/apple-touch-icon-114x114.png"]), "html", null, true);
        echo "\"/>
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "    <script src=\"https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.4.6/fuse.min.js\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["js/search.js"]), "html", null, true);
        echo "\"></script>
    <script defer src=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["js/searchIndex.js"]), "html", null, true);
        echo "\"></script>
    ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "</head>
<body>
<header class=\"phpdocumentor-top-header\">
    <section class=\"phpdocumentor-section\">
        <div class=\"site-branding\">
            <a class=\"site-logo\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["/index.html"]), "html", null, true);
        echo "\"><img width=\"180\" src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["images/logo.svg"]), "html", null, true);
        echo "\" alt=\"WooCommerce\" /></a>
        </div>
        <nav class=\"main-navigation\">
            <ul>
                <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["hooks/hooks.html"]), "html", null, true);
        echo "\">Hooks Reference</a></li>
                ";
        // line 32
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "settings", [], "any", false, false, false, 32), "custom", [], "any", false, false, false, 32)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["graphs.enabled"] ?? null) : null)) {
            // line 33
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["graphs/classes.html"]), "html", null, true);
            echo "\">Class Diagram</a></li>
                ";
        }
        // line 35
        echo "                <li><a href=\"https://docs.woocommerce.com/\">Documentation</a></li>
                <li><a href=\"https://woocommerce.github.io/woocommerce-rest-api-docs/\">REST API Docs</a></li>
            </ul>
        </nav>
    </section>
</header>
<header class=\"phpdocumentor-header\">
    <section class=\"phpdocumentor-section\">
        <h1 class=\"phpdocumentor-title\">WooCommerce Code Reference</h1>
    </section>

    <section class=\"phpdocumentor-section\">
        <div data-search-form class=\"phpdocumentor-search\">
            <label class=\"phpdocumentor-label\">
                <span class=\"visually-hidden\">Search</span>
                <input type=\"search\" class=\"phpdocumentor-field phpdocumentor-search__field\" placeholder=\"Loading...\" disabled />
            </label>
        </div>
        <div data-search-results class=\"phpdocumentor-search-results phpdocumentor-search-results--hidden\">

            <h2>Search results</h2>
            <ul class=\"phpdocumentor-search-results__entries\">

            </ul>
        </div>
    </section>
</header>
<main class=\"phpdocumentor\">
    <div class=\"phpdocumentor-section\">
        ";
        // line 64
        $this->loadTemplate("sidebar.html.twig", "base.html.twig", 64)->display($context);
        // line 65
        echo "
        <div class=\"nine phpdocumentor-columns phpdocumentor-content\">
        ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "        </div>
    </div>
</main>
<a href=\"#\" class=\"to-top\">Back to the top</a>
<footer class=\"phpdocumentor phpdocumentor-footer\">
    <div class=\"phpdocumentor-section\">
        <span>WooCommerce Code Reference API documentation generated by <a href=\"http://www.phpdoc.org/\">phpDocumentor</a> on ";
        // line 74
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "F jS, Y \\a\\t h:i a"), "html", null, true);
        echo ".</span>
    </div>
</footer>
</body>
</html>
";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 67
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  188 => 67,  182 => 21,  176 => 16,  166 => 74,  158 => 68,  156 => 67,  152 => 65,  150 => 64,  119 => 35,  113 => 33,  111 => 32,  107 => 31,  98 => 27,  91 => 22,  89 => 21,  85 => 20,  81 => 19,  77 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "base.html.twig");
    }
}

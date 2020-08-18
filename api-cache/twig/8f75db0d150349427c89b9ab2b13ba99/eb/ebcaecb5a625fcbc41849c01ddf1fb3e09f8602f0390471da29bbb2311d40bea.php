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

/* sidebar.html.twig */
class __TwigTemplate_d518fd1f8321f02dc3e80eecf7931a76fcb8af33b49de63da8fd6ec19c975bc8 extends \Twig\Template
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
        // line 1
        echo "<aside class=\"three phpdocumentor-columns phpdocumentor-sidebar\">
    ";
        // line 2
        if (($context["menu"] ?? null)) {
            // line 3
            echo "    ";
            echo twig_include($this->env, $context, "menu.html.twig", ["menuItem" => ($context["menu"] ?? null)], false);
            echo "
    ";
        }
        // line 5
        echo "
    <h1 class=\"phpdocumentor-sidebar__category-header\">Namespaces</h1>
    ";
        // line 7
        if ((($context["usesNamespaces"] ?? null) ||  !($context["usesPackages"] ?? null))) {
            // line 8
            echo "        <h2 class=\"phpdocumentor-sidebar__root-namespace\">";
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 8), "Global"]);
            echo "</h2>
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "namespace", [], "any", false, false, false, 9), "children", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["namespace"]) {
                // line 10
                echo "            <h3 class=\"phpdocumentor-sidebar__root-namespace\">";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["namespace"], "class:short"]);
                echo "</h3>
            <ul class=\"phpdocumentor-list\">
                ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["namespace"], "children", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 13
                    echo "                    <li>";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["child"], "class:short"]);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['namespace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if (($context["usesPackages"] ?? null)) {
            // line 20
            echo "    <h1 class=\"phpdocumentor-sidebar__category-header\">Packages</h1>
    ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["project"] ?? null), "package", [], "any", false, false, false, 21), "children", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                // line 22
                echo "        <h2 class=\"phpdocumentor-sidebar__root-package\">";
                echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["package"], "class:short"]);
                echo "</h2>
        <ul class=\"phpdocumentor-list\">
            ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["package"], "children", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 25
                    echo "                <li>";
                    echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["child"], "class:short"]);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        </ul>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['package'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        // line 30
        echo "
    <h1 class=\"phpdocumentor-sidebar__category-header\">Reports</h1>
    <h2 class=\"phpdocumentor-sidebar__root-package\"><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["reports/deprecated.html"]), "html", null, true);
        echo "\">Deprecated</a></h2>
    <h2 class=\"phpdocumentor-sidebar__root-package\"><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["reports/errors.html"]), "html", null, true);
        echo "\">Errors</a></h2>
    <h2 class=\"phpdocumentor-sidebar__root-package\"><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["reports/markers.html"]), "html", null, true);
        echo "\">Markers</a></h2>
</aside>
";
    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 34,  141 => 33,  137 => 32,  133 => 30,  130 => 29,  123 => 27,  114 => 25,  110 => 24,  104 => 22,  100 => 21,  97 => 20,  95 => 19,  92 => 18,  89 => 17,  82 => 15,  73 => 13,  69 => 12,  63 => 10,  59 => 9,  54 => 8,  52 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sidebar.html.twig", "sidebar.html.twig");
    }
}

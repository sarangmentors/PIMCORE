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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig */
class __TwigTemplate_f02ea3e5030a7bbe35dc7fa92e0ae87c extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig"));

        // line 9
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["attr"], 9, $this->source), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 9, $this->source), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"float-right\">
        ";
        // line 11
        if ((isset($context["sorted"]) || array_key_exists("sorted", $context) ? $context["sorted"] : (function () { throw new RuntimeError('Variable "sorted" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "            ";
            if (((isset($context["direction"]) || array_key_exists("direction", $context) ? $context["direction"] : (function () { throw new RuntimeError('Variable "direction" does not exist.', 12, $this->source); })()) == "desc")) {
                // line 13
                echo "                <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 15
                echo "                <i class=\"fa fa-sort-up\"></i>
            ";
            }
            // line 17
            echo "        ";
        } else {
            // line 18
            echo "            <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 20
        echo "    </span>
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()), 21, $this->source), "html", null, true);
        echo "
</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  82 => 20,  78 => 18,  75 => 17,  71 => 15,  67 => 13,  64 => 12,  62 => 11,  45 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Twitter Bootstrap - Font Awesome Sorting control implementation.
 *
 * @author Rodrigo Régis Palmeira <regisbsb@gmail.com>
 */
#}
<a{% for attr, value  in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>
    <span class=\"float-right\">
        {% if sorted %}
            {% if direction == 'desc' %}
                <i class=\"fa fa-sort-down\"></i>
            {% else %}
                <i class=\"fa fa-sort-up\"></i>
            {% endif %}
        {% else %}
            <i class=\"fa fa-sort\"></i>
        {% endif %}
    </span>
    {{ title }}
</a>
", "@KnpPaginator/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig", "/Users/saranggangapurkar/Documents/projects/my-project/vendor/knplabs/knp-paginator-bundle/templates/Pagination/twitter_bootstrap_v4_font_awesome_sortable_link.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 9, "if" => 11);
        static $filters = array("escape" => 9);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

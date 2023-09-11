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

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_fbb4248d8eb8850e8bdd31c430419c43 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'head' => [$this, 'block_head'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/form.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, true, 4), "nb_errors", [], "any", false, false, true, 4) > 0) || twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "data", [], "any", false, false, true, 4), "forms", [], "any", false, false, true, 4)))) {
            // line 5
            echo "        ";
            $context["status_color"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, true, 5), "nb_errors", [], "any", false, false, true, 5)) ? ("red") : (""));
            // line 6
            echo "        ";
            ob_start();
            // line 7
            echo "            ";
            echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 9
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, true, 9), "nb_errors", [], "any", false, false, true, 9)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, true, 9), "nb_errors", [], "any", false, false, true, 9)) : (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, true, 9), "forms", [], "any", false, false, true, 9), 9, $this->source)))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 16
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "data", [], "any", false, false, true, 16), "forms", [], "any", false, false, true, 16), 16, $this->source)), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 20
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, true, 20), "nb_errors", [], "any", false, false, true, 20) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, true, 20), "nb_errors", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
        ";
            // line 24
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 24, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 24, $this->source); })())]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "    <span class=\"label label-status-";
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "data", [], "any", false, false, true, 29), "nb_errors", [], "any", false, false, true, 29)) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "data", [], "any", false, false, true, 29), "forms", [], "any", false, false, true, 29))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 30
        echo twig_source($this->env, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "data", [], "any", false, false, true, 32), "nb_errors", [], "any", false, false, true, 32) > 0)) {
            // line 33
            echo "            <span class=\"count\">
                <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "data", [], "any", false, false, true, 34), "nb_errors", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 37
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 41
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-square-plus' width='24' height='24' viewBox='0 0 24 24' stroke-width='2px' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Crect x='4' y='4' width='16' height='16' rx='2'%3E%3C/rect%3E%3Cline x1='9' y1='12' x2='15' y2='12'%3E%3C/line%3E%3Cline x1='12' y1='9' x2='12' y2='15'%3E%3C/line%3E%3C/svg%3E\") no-repeat;
            background-size: 18px 18px;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: none;
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 18px;
            height: 18px;
            vertical-align: bottom;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 195
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 196
        echo "    <h2>Forms</h2>

    ";
        // line 198
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 198, $this->source); })()), "data", [], "any", false, false, true, 198), "forms", [], "any", false, false, true, 198))) {
            // line 199
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 201, $this->source); })()), "data", [], "any", false, false, true, 201), "forms", [], "any", false, false, true, 201));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 202
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_entry", [$context["formName"], $context["formData"], true], 202, $context, $this->getSourceContext());
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 208, $this->source); })()), "data", [], "any", false, false, true, 208), "forms", [], "any", false, false, true, 208));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 209
                echo "                ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_details", [$context["formName"], $context["formData"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 209, $this->source); })()), "data", [], "any", false, false, true, 209), "forms_by_hash", [], "any", false, false, true, 209), twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 209)], 209, $context, $this->getSourceContext());
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "        </div>
    ";
        } else {
            // line 213
            echo "        <div class=\"empty empty-panel\">
            <p>No forms were submitted for this request.</p>
        </div>
    ";
        }
        // line 217
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('.toggle-button'));
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 437
    public function macro_form_tree_entry($__name__ = null, $__data__ = null, $__is_root__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "is_root" => $__is_root__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_entry"));

            // line 438
            echo "    ";
            $context["has_error"] = (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, true, 438) && (twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 438, $this->source); })()), "errors", [], "any", false, false, true, 438), 438, $this->source)) > 0));
            // line 439
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 440
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 440, $this->source); })()), "id", [], "any", false, false, true, 440), 440, $this->source), "html", null, true);
            echo "-details\" title=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 440, $this->source); })()), 440, $this->source), "(no name)")) : ("(no name)")), "html", null, true);
            echo "\">
            ";
            // line 441
            if ((isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new RuntimeError('Variable "has_error" does not exist.', 441, $this->source); })())) {
                // line 442
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 442, $this->source); })()), "errors", [], "any", false, false, true, 442), 442, $this->source)), "html", null, true);
                echo "</div>
            ";
            }
            // line 444
            echo "
            ";
            // line 445
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 445, $this->source); })()), "children", [], "any", false, false, true, 445))) {
                // line 446
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 446, $this->source); })()), "id", [], "any", false, false, true, 446), 446, $this->source), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 448
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 450
            echo "
            <span ";
            // line 451
            if (((isset($context["has_error"]) || array_key_exists("has_error", $context) ? $context["has_error"] : (function () { throw new RuntimeError('Variable "has_error" does not exist.', 451, $this->source); })()) || ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, true, 451)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, true, 451), false)) : (false)))) {
                echo "class=\"has-error\"";
            }
            echo ">
                ";
            // line 452
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 452, $this->source); })()), 452, $this->source), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            </span>
        </div>

        ";
            // line 456
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 456, $this->source); })()), "children", [], "any", false, false, true, 456))) {
                // line 457
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 457, $this->source); })()), "id", [], "any", false, false, true, 457), 457, $this->source), "html", null, true);
                echo "-children\" ";
                if (( !(isset($context["is_root"]) || array_key_exists("is_root", $context) ? $context["is_root"] : (function () { throw new RuntimeError('Variable "is_root" does not exist.', 457, $this->source); })()) &&  !((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", true, true, true, 457)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_children_error", [], "any", false, false, true, 457), false)) : (false)))) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 458
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 458, $this->source); })()), "children", [], "any", false, false, true, 458));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 459
                    echo "                    ";
                    echo twig_call_macro($macros["_self"], "macro_form_tree_entry", [$context["childName"], $context["childData"], false], 459, $context, $this->getSourceContext());
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 461
                echo "            </ul>
        ";
            }
            // line 463
            echo "    </li>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 466
    public function macro_form_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, $__show__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "show" => $__show__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_tree_details"));

            // line 467
            echo "    <div class=\"tree-details";
            if ( !((array_key_exists("show", $context)) ? (_twig_default_filter((isset($context["show"]) || array_key_exists("show", $context) ? $context["show"] : (function () { throw new RuntimeError('Variable "show" does not exist.', 467, $this->source); })()), false)) : (false))) {
                echo " hidden";
            }
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "id", [], "any", true, true, true, 467)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 467, $this->source); })()), "id", [], "any", false, false, true, 467), 467, $this->source), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>";
            // line 468
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 468, $this->source); })()), 468, $this->source), "(no name)")) : ("(no name)")), "html", null, true);
            echo "</h2>
        ";
            // line 469
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "type_class", [], "any", true, true, true, 469)) {
                // line 470
                echo "            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                ";
                // line 472
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 472, $this->source); })()), "type_class", [], "any", false, false, true, 472), 472, $this->source));
                echo "
            </div>
        ";
            }
            // line 475
            echo "
        ";
            // line 476
            $context["form_has_errors"] =  !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, true, 476) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, true, 476)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", false, false, true, 476)) : ([])));
            // line 477
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 478
            echo (((isset($context["form_has_errors"]) || array_key_exists("form_has_errors", $context) ? $context["form_has_errors"] : (function () { throw new RuntimeError('Variable "form_has_errors" does not exist.', 478, $this->source); })())) ? ("active") : ("disabled"));
            echo "\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    ";
            // line 482
            echo twig_call_macro($macros["_self"], "macro_render_form_errors", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 482, $this->source); })())], 482, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 486
            echo (( !(isset($context["form_has_errors"]) || array_key_exists("form_has_errors", $context) ? $context["form_has_errors"] : (function () { throw new RuntimeError('Variable "form_has_errors" does not exist.', 486, $this->source); })())) ? ("active") : (""));
            echo "\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 490
            echo twig_call_macro($macros["_self"], "macro_render_form_default_data", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 490, $this->source); })())], 490, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 494
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", true, true, true, 494) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, true, 494)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, false, true, 494)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    ";
            // line 498
            echo twig_call_macro($macros["_self"], "macro_render_form_submitted_data", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 498, $this->source); })())], 498, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 502
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, true, 502) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 502)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 502)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 506
            echo twig_call_macro($macros["_self"], "macro_render_form_passed_options", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 506, $this->source); })())], 506, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 510
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, true, 510) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 510)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 510)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    ";
            // line 514
            echo twig_call_macro($macros["_self"], "macro_render_form_resolved_options", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 514, $this->source); })())], 514, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab ";
            // line 518
            echo ((twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, true, 518) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, true, 518)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, true, 518)) : ([])))) ? ("disabled") : (""));
            echo "\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    ";
            // line 522
            echo twig_call_macro($macros["_self"], "macro_render_form_view_variables", [(isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 522, $this->source); })())], 522, $context, $this->getSourceContext());
            echo "
                </div>
            </div>
        </div>
    </div>

    ";
            // line 528
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 528, $this->source); })()), "children", [], "any", false, false, true, 528));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 529
                echo "        ";
                echo twig_call_macro($macros["_self"], "macro_form_tree_details", [$context["childName"], $context["childData"], (isset($context["forms_by_hash"]) || array_key_exists("forms_by_hash", $context) ? $context["forms_by_hash"] : (function () { throw new RuntimeError('Variable "forms_by_hash" does not exist.', 529, $this->source); })())], 529, $context, $this->getSourceContext());
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 533
    public function macro_render_form_errors($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_errors"));

            // line 534
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "errors", [], "any", true, true, true, 534) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 534, $this->source); })()), "errors", [], "any", false, false, true, 534)) > 0))) {
                // line 535
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 537
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 537, $this->source); })()), "id", [], "any", false, false, true, 537), 537, $this->source), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 542
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 542, $this->source); })()), "id", [], "any", false, false, true, 542), 542, $this->source), "html", null, true);
                echo "-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                ";
                // line 551
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 551, $this->source); })()), "errors", [], "any", false, false, true, 551));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 552
                    echo "                    <tr>
                        <td>";
                    // line 553
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, true, 553), 553, $this->source), "html", null, true);
                    echo "</td>
                        <td>
                            ";
                    // line 555
                    if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, true, 555))) {
                        // line 556
                        echo "                                <em>This form.</em>
                            ";
                    } elseif ( !twig_get_attribute($this->env, $this->source,                     // line 557
($context["forms_by_hash"] ?? null), twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, true, 557), [], "array", true, true, true, 557)) {
                        // line 558
                        echo "                                <em>Unknown.</em>
                            ";
                    } else {
                        // line 560
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms_by_hash"]) || array_key_exists("forms_by_hash", $context) ? $context["forms_by_hash"] : (function () { throw new RuntimeError('Variable "forms_by_hash" does not exist.', 560, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["error"], "origin", [], "any", false, false, true, 560), [], "array", false, false, true, 560), "name", [], "any", false, false, true, 560), 560, $this->source), "html", null, true);
                        echo "
                            ";
                    }
                    // line 562
                    echo "                        </td>
                        <td>
                            ";
                    // line 564
                    if (twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, true, 564)) {
                        // line 565
                        echo "                                <span class=\"newline\">Caused by:</span>
                                ";
                        // line 566
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["error"], "trace", [], "any", false, false, true, 566));
                        foreach ($context['_seq'] as $context["_key"] => $context["stacked"]) {
                            // line 567
                            echo "                                    ";
                            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["stacked"], 567, $this->source));
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stacked'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 569
                        echo "                            ";
                    } else {
                        // line 570
                        echo "                                <em>Unknown.</em>
                            ";
                    }
                    // line 572
                    echo "                        </td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 575
                echo "                </tbody>
            </table>
        </div>
    ";
            } else {
                // line 579
                echo "        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 585
    public function macro_render_form_default_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_default_data"));

            // line 586
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", true, true, true, 586)) {
                // line 587
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 598
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, true, 598), "model", [], "any", true, true, true, 598)) {
                    // line 599
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 599, $this->source); })()), "default_data", [], "any", false, false, true, 599), "seek", ["model"], "method", false, false, true, 599), 599, $this->source));
                    echo "
                    ";
                } else {
                    // line 601
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 603
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 607
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 607, $this->source); })()), "default_data", [], "any", false, false, true, 607), "seek", ["norm"], "method", false, false, true, 607), 607, $this->source));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 612
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "default_data", [], "any", false, true, true, 612), "view", [], "any", true, true, true, 612)) {
                    // line 613
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 613, $this->source); })()), "default_data", [], "any", false, false, true, 613), "seek", ["view"], "method", false, false, true, 613), 613, $this->source));
                    echo "
                    ";
                } else {
                    // line 615
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 617
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 622
                echo "        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 628
    public function macro_render_form_submitted_data($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_submitted_data"));

            // line 629
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, true, 629), "norm", [], "any", true, true, true, 629)) {
                // line 630
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    ";
                // line 641
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, true, 641), "view", [], "any", true, true, true, 641)) {
                    // line 642
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 642, $this->source); })()), "submitted_data", [], "any", false, false, true, 642), "seek", ["view"], "method", false, false, true, 642), 642, $this->source));
                    echo "
                    ";
                } else {
                    // line 644
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 646
                echo "                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>";
                // line 650
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 650, $this->source); })()), "submitted_data", [], "any", false, false, true, 650), "seek", ["norm"], "method", false, false, true, 650), 650, $this->source));
                echo "</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    ";
                // line 655
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "submitted_data", [], "any", false, true, true, 655), "model", [], "any", true, true, true, 655)) {
                    // line 656
                    echo "                        ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 656, $this->source); })()), "submitted_data", [], "any", false, false, true, 656), "seek", ["model"], "method", false, false, true, 656), 656, $this->source));
                    echo "
                    ";
                } else {
                    // line 658
                    echo "                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    ";
                }
                // line 660
                echo "                </td>
            </tr>
            </tbody>
        </table>
    ";
            } else {
                // line 665
                echo "        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 671
    public function macro_render_form_passed_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_passed_options"));

            // line 672
            echo "    ";
            if ( !twig_test_empty((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", true, true, true, 672) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 672)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "passed_options", [], "any", false, false, true, 672)) : ([])))) {
                // line 673
                echo "        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            ";
                // line 682
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 682, $this->source); })()), "passed_options", [], "any", false, false, true, 682));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 683
                    echo "                <tr>
                    <th>";
                    // line 684
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 684, $this->source), "html", null, true);
                    echo "</th>
                    <td>";
                    // line 685
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 685, $this->source));
                    echo "</td>
                    <td>
                        ";
                    // line 688
                    echo "                        ";
                    $context["option_value"] = ((twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", true, true, true, 688)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["value"], "value", [], "any", false, false, true, 688), 688, $this->source), $this->sandbox->ensureToStringAllowed($context["value"], 688, $this->source))) : ($context["value"]));
                    // line 689
                    echo "                        ";
                    $context["resolved_option_value"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, true, 689), $context["option"], [], "array", false, true, true, 689), "value", [], "any", true, true, true, 689)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, true, true, 689), $context["option"], [], "array", false, true, true, 689), "value", [], "any", false, false, true, 689), 689, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 689, $this->source); })()), "resolved_options", [], "any", false, false, true, 689), $context["option"], [], "array", false, false, true, 689), 689, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 689, $this->source); })()), "resolved_options", [], "any", false, false, true, 689), $context["option"], [], "array", false, false, true, 689)));
                    // line 690
                    echo "                        ";
                    if (((isset($context["resolved_option_value"]) || array_key_exists("resolved_option_value", $context) ? $context["resolved_option_value"] : (function () { throw new RuntimeError('Variable "resolved_option_value" does not exist.', 690, $this->source); })()) == (isset($context["option_value"]) || array_key_exists("option_value", $context) ? $context["option_value"] : (function () { throw new RuntimeError('Variable "option_value" does not exist.', 690, $this->source); })()))) {
                        // line 691
                        echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                    } else {
                        // line 693
                        echo "                            ";
                        echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 693, $this->source); })()), "resolved_options", [], "any", false, false, true, 693), "seek", [$context["option"]], "method", false, false, true, 693), 693, $this->source));
                        echo "
                        ";
                    }
                    // line 695
                    echo "                    </td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 698
                echo "            </tbody>
        </table>
    ";
            } else {
                // line 701
                echo "        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 707
    public function macro_render_form_resolved_options($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_resolved_options"));

            // line 708
            echo "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 716
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", true, true, true, 716) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 716)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "resolved_options", [], "any", false, false, true, 716)) : ([])));
            foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                // line 717
                echo "            <tr>
                <th scope=\"row\">";
                // line 718
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 718, $this->source), "html", null, true);
                echo "</th>
                <td>";
                // line 719
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 719, $this->source));
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 722
            echo "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 726
    public function macro_render_form_view_variables($__data__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "data" => $__data__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_form_view_variables"));

            // line 727
            echo "    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 735
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", true, true, true, 735) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, true, 735)))) ? (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "view_vars", [], "any", false, false, true, 735)) : ([])));
            foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                // line 736
                echo "            <tr>
                <th scope=\"row\">";
                // line 737
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["variable"], 737, $this->source), "html", null, true);
                echo "</th>
                <td>";
                // line 738
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, $this->sandbox->ensureToStringAllowed($context["value"], 738, $this->source));
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 741
            echo "        </tbody>
    </table>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1501 => 741,  1492 => 738,  1488 => 737,  1485 => 736,  1481 => 735,  1471 => 727,  1452 => 726,  1435 => 722,  1426 => 719,  1422 => 718,  1419 => 717,  1415 => 716,  1405 => 708,  1386 => 707,  1367 => 701,  1362 => 698,  1354 => 695,  1348 => 693,  1344 => 691,  1341 => 690,  1338 => 689,  1335 => 688,  1330 => 685,  1326 => 684,  1323 => 683,  1319 => 682,  1308 => 673,  1305 => 672,  1286 => 671,  1267 => 665,  1260 => 660,  1256 => 658,  1250 => 656,  1248 => 655,  1240 => 650,  1234 => 646,  1230 => 644,  1224 => 642,  1222 => 641,  1209 => 630,  1206 => 629,  1187 => 628,  1168 => 622,  1161 => 617,  1157 => 615,  1151 => 613,  1149 => 612,  1141 => 607,  1135 => 603,  1131 => 601,  1125 => 599,  1123 => 598,  1110 => 587,  1107 => 586,  1088 => 585,  1069 => 579,  1063 => 575,  1055 => 572,  1051 => 570,  1048 => 569,  1039 => 567,  1035 => 566,  1032 => 565,  1030 => 564,  1026 => 562,  1020 => 560,  1016 => 558,  1014 => 557,  1011 => 556,  1009 => 555,  1004 => 553,  1001 => 552,  997 => 551,  985 => 542,  977 => 537,  973 => 535,  970 => 534,  951 => 533,  929 => 529,  925 => 528,  916 => 522,  909 => 518,  902 => 514,  895 => 510,  888 => 506,  881 => 502,  874 => 498,  867 => 494,  860 => 490,  853 => 486,  846 => 482,  839 => 478,  836 => 477,  834 => 476,  831 => 475,  825 => 472,  821 => 470,  819 => 469,  815 => 468,  802 => 467,  780 => 466,  764 => 463,  760 => 461,  751 => 459,  747 => 458,  738 => 457,  736 => 456,  729 => 452,  723 => 451,  720 => 450,  716 => 448,  710 => 446,  708 => 445,  705 => 444,  699 => 442,  697 => 441,  691 => 440,  688 => 439,  685 => 438,  664 => 437,  436 => 217,  430 => 213,  426 => 211,  409 => 209,  392 => 208,  386 => 204,  377 => 202,  373 => 201,  369 => 199,  367 => 198,  363 => 196,  353 => 195,  189 => 41,  179 => 40,  168 => 37,  162 => 34,  159 => 33,  157 => 32,  152 => 30,  145 => 29,  135 => 28,  122 => 24,  119 => 23,  111 => 20,  104 => 16,  100 => 14,  98 => 13,  95 => 12,  89 => 9,  83 => 7,  80 => 6,  77 => 5,  74 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.data.nb_errors > 0 or collector.data.forms|length %}
        {% set status_color = collector.data.nb_errors ? 'red' %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/form.svg') }}
            <span class=\"sf-toolbar-value\">
                {{ collector.data.nb_errors ?: collector.data.forms|length }}
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">{{ collector.data.forms|length }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.data.nb_errors > 0 ? 'red' }}\">{{ collector.data.nb_errors }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.data.nb_errors ? 'error' }} {{ collector.data.forms is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/form.svg') }}</span>
        <strong>Forms</strong>
        {% if collector.data.nb_errors > 0 %}
            <span class=\"count\">
                <span>{{ collector.data.nb_errors }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block head %}
    {{ parent() }}

    <style>
        .form-type-class {
            font-size: var(--font-size-body);
            display: flex;
            margin: 0 0 15px;
        }
        .form-type-class-label {
            margin-right: 4px;
        }
        .form-type-class pre.sf-dump {
            font-family: var(--font-family-system) !important;
            font-size: var(--font-size-body) !important;
            margin-left: 5px;
        }
        .form-type-class .sf-dump .sf-dump-str {
            color: var(--color-link) !important;
            text-decoration: underline;
        }
        .form-type-class .sf-dump .sf-dump-str:hover {
            text-decoration: none;
        }

        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 220px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            box-shadow: none !important;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid var(--table-border-color);
            margin-left: 230px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' data-icon-name='icon-tabler-square-plus' width='24' height='24' viewBox='0 0 24 24' stroke-width='2px' stroke='currentColor' fill='none' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath stroke='none' d='M0 0h24v24H0z' fill='none'%3E%3C/path%3E%3Crect x='4' y='4' width='16' height='16' rx='2'%3E%3C/rect%3E%3Cline x1='9' y1='12' x2='15' y2='12'%3E%3C/line%3E%3Cline x1='12' y1='9' x2='12' y2='15'%3E%3C/line%3E%3C/svg%3E\") no-repeat;
            background-size: 18px 18px;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: none;
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .tree .toggle-button {
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 18px;
            height: 18px;
            vertical-align: bottom;
        }
        .tree .toggle-icon.empty {
            width: 5px;
            height: 5px;
            position: absolute;
            top: 50%;
            margin-top: -2px;
            margin-left: -13px;
        }
        .tree .tree-inner {
            border-radius: 4px;
        }
        .tree ul ul .tree-inner {
            padding-left: 32px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 48px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 64px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 72px;
        }
        .tree .tree-inner:hover {
            background: var(--gray-200);
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: var(--tree-active-background);
            font-weight: bold;
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .badge-error {
            float: right;
            background: var(--background-error);
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .has-error {
            color: var(--color-error);
        }
        .errors h3 {
            color: var(--color-error);
        }
        .errors th {
            background: var(--background-error);
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: var(--background-error);
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
{% endblock %}

{% block panel %}
    <h2>Forms</h2>

    {% if collector.data.forms|length %}
        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            {% for formName, formData in collector.data.forms %}
                {{ _self.form_tree_entry(formName, formData, true) }}
            {% endfor %}
            </ul>
        </div>

        <div id=\"tree-details-container\">
            {% for formName, formData in collector.data.forms %}
                {{ _self.form_tree_details(formName, formData, collector.data.forms_by_hash, loop.first) }}
            {% endfor %}
        </div>
    {% else %}
        <div class=\"empty empty-panel\">
            <p>No forms were submitted for this request.</p>
        </div>
    {% endif %}

    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('.toggle-button'));
    </script>
{% endblock %}

{% macro form_tree_entry(name, data, is_root) %}
    {% set has_error = data.errors is defined and data.errors|length > 0 %}
    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"{{ data.id }}-details\" title=\"{{ name|default('(no name)') }}\">
            {% if has_error %}
                <div class=\"badge-error\">{{ data.errors|length }}</div>
            {% endif %}

            {% if data.children is not empty %}
                <a class=\"toggle-button\" data-toggle-target-id=\"{{ data.id }}-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            {% else %}
                <div class=\"toggle-icon empty\"></div>
            {% endif %}

            <span {% if has_error or data.has_children_error|default(false) %}class=\"has-error\"{% endif %}>
                {{ name|default('(no name)') }}
            </span>
        </div>

        {% if data.children is not empty %}
            <ul id=\"{{ data.id }}-children\" {% if not is_root and not data.has_children_error|default(false) %}class=\"hidden\"{% endif %}>
                {% for childName, childData in data.children %}
                    {{ _self.form_tree_entry(childName, childData, false) }}
                {% endfor %}
            </ul>
        {% endif %}
    </li>
{% endmacro %}

{% macro form_tree_details(name, data, forms_by_hash, show) %}
    <div class=\"tree-details{% if not show|default(false) %} hidden{% endif %}\" {% if data.id is defined %}id=\"{{ data.id }}-details\"{% endif %}>
        <h2>{{ name|default('(no name)') }}</h2>
        {% if data.type_class is defined %}
            <div class=\"form-type-class\">
                <span class=\"form-type-class-label\">Form type:</span>
                {{ profiler_dump(data.type_class) }}
            </div>
        {% endif %}

        {% set form_has_errors = data.errors ?? [] is not empty %}
        <div class=\"sf-tabs\">
            <div class=\"tab {{ form_has_errors ? 'active' : 'disabled' }}\">
                <h3 class=\"tab-title\">Errors</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_errors(data) }}
                </div>
            </div>

            <div class=\"tab {{ not form_has_errors ? 'active' }}\">
                <h3 class=\"tab-title\">Default Data</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_default_data(data) }}
                </div>
            </div>

            <div class=\"tab {{ data.submitted_data ?? [] is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Submitted Data</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_submitted_data(data) }}
                </div>
            </div>

            <div class=\"tab {{ data.passed_options ?? [] is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Passed Options</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_passed_options(data) }}
                </div>
            </div>

            <div class=\"tab {{ data.resolved_options ?? [] is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">Resolved Options</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_resolved_options(data) }}
                </div>
            </div>

            <div class=\"tab {{ data.view_vars ?? [] is empty ? 'disabled' }}\">
                <h3 class=\"tab-title\">View Vars</h3>

                <div class=\"tab-content\">
                    {{ _self.render_form_view_variables(data) }}
                </div>
            </div>
        </div>
    </div>

    {% for childName, childData in data.children %}
        {{ _self.form_tree_details(childName, childData, forms_by_hash) }}
    {% endfor %}
{% endmacro %}

{% macro render_form_errors(data) %}
    {% if data.errors is defined and data.errors|length > 0 %}
        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"{{ data.id }}-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"{{ data.id }}-errors\">
                <thead>
                <tr>
                    <th>Message</th>
                    <th>Origin</th>
                    <th>Cause</th>
                </tr>
                </thead>
                <tbody>
                {% for error in data.errors %}
                    <tr>
                        <td>{{ error.message }}</td>
                        <td>
                            {% if error.origin is empty %}
                                <em>This form.</em>
                            {% elseif forms_by_hash[error.origin] is not defined %}
                                <em>Unknown.</em>
                            {% else %}
                                {{ forms_by_hash[error.origin].name }}
                            {% endif %}
                        </td>
                        <td>
                            {% if error.trace %}
                                <span class=\"newline\">Caused by:</span>
                                {% for stacked in error.trace %}
                                    {{ profiler_dump(stacked) }}
                                {% endfor %}
                            {% else %}
                                <em>Unknown.</em>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    {% else %}
        <div class=\"empty\">
            <p>This form has no errors.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_default_data(data) %}
    {% if data.default_data is defined %}
        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    {% if data.default_data.model is defined %}
                        {{ profiler_dump(data.default_data.seek('model')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>{{ profiler_dump(data.default_data.seek('norm')) }}</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    {% if data.default_data.view is defined %}
                        {{ profiler_dump(data.default_data.seek('view')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>This form has default data defined.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_submitted_data(data) %}
    {% if data.submitted_data.norm is defined %}
        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Property</th>
                <th>Value</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th class=\"font-normal\" scope=\"row\">View Format</th>
                <td>
                    {% if data.submitted_data.view is defined %}
                        {{ profiler_dump(data.submitted_data.seek('view')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                <td>{{ profiler_dump(data.submitted_data.seek('norm')) }}</td>
            </tr>
            <tr>
                <th class=\"font-normal\" scope=\"row\">Model Format</th>
                <td>
                    {% if data.submitted_data.model is defined %}
                        {{ profiler_dump(data.submitted_data.seek('model')) }}
                    {% else %}
                        <em class=\"font-normal text-muted\">same as normalized format</em>
                    {% endif %}
                </td>
            </tr>
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>This form was not submitted.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_passed_options(data) %}
    {% if data.passed_options ?? [] is not empty %}
        <table>
            <thead>
            <tr>
                <th style=\"width: 180px\">Option</th>
                <th>Passed Value</th>
                <th>Resolved Value</th>
            </tr>
            </thead>
            <tbody>
            {% for option, value in data.passed_options %}
                <tr>
                    <th>{{ option }}</th>
                    <td>{{ profiler_dump(value) }}</td>
                    <td>
                        {# values can be stubs #}
                        {% set option_value = value.value|default(value) %}
                        {% set resolved_option_value = data.resolved_options[option].value|default(data.resolved_options[option]) %}
                        {% if resolved_option_value == option_value %}
                            <em class=\"font-normal text-muted\">same as passed value</em>
                        {% else %}
                            {{ profiler_dump(data.resolved_options.seek(option)) }}
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No options were passed when constructing this form.</p>
        </div>
    {% endif %}
{% endmacro %}

{% macro render_form_resolved_options(data) %}
    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Option</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        {% for option, value in data.resolved_options ?? [] %}
            <tr>
                <th scope=\"row\">{{ option }}</th>
                <td>{{ profiler_dump(value) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}

{% macro render_form_view_variables(data) %}
    <table>
        <thead>
        <tr>
            <th style=\"width: 180px\">Variable</th>
            <th>Value</th>
        </tr>
        </thead>
        <tbody>
        {% for variable, value in data.view_vars ?? [] %}
            <tr>
                <th scope=\"row\">{{ variable }}</th>
                <td>{{ profiler_dump(value) }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/form.html.twig", "/Users/saranggangapurkar/Documents/projects/my-project/vendor/symfony/web-profiler-bundle/Resources/views/Collector/form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4, "set" => 5, "for" => 201, "macro" => 437);
        static $filters = array("length" => 4, "escape" => 9, "default" => 440);
        static $functions = array("source" => 7, "include" => 24, "profiler_dump" => 472);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'macro', 'import'],
                ['length', 'escape', 'default'],
                ['source', 'include', 'profiler_dump']
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

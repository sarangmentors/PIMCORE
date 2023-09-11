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

/* @WebProfiler/Profiler/layout.html.twig */
class __TwigTemplate_201e43a686254c840eed31323fef38d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'summary' => [$this, 'block_summary'],
            'sidebar' => [$this, 'block_sidebar'],
            'sidebar_shortcuts_links' => [$this, 'block_sidebar_shortcuts_links'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/layout.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/layout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
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
        echo "    <div class=\"container\">
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/header.html.twig", array(), false);
        echo "

        <div id=\"summary\">
        ";
        // line 8
        $this->displayBlock('summary', $context, $blocks);
        // line 112
        echo "    </div>

        <div id=\"content\">
            <div id=\"main\">
                <div id=\"sidebar\">
                    ";
        // line 117
        $this->displayBlock('sidebar', $context, $blocks);
        // line 156
        echo "                </div>

                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 160
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/base_js.html.twig");
        echo "
                        ";
        // line 161
        $this->displayBlock('panel', $context, $blocks);
        // line 162
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_summary($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "summary"));

        // line 9
        echo "            ";
        if (array_key_exists("profile", $context)) {
            // line 10
            echo "                ";
            $context["request_collector"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, true, 10), "request", [], "any", true, true, true, 10)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, true, true, 10), "request", [], "any", false, false, true, 10), 10, $this->source), false)) : (false));
            // line 11
            echo "                ";
            $context["status_code"] = (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 11, $this->source); })())) ? (((twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", true, true, true, 11)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["request_collector"] ?? null), "statuscode", [], "any", false, false, true, 11), 11, $this->source), 0)) : (0))) : (0));
            // line 12
            echo "                ";
            $context["css_class"] = ((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 12, $this->source); })()) > 399)) ? ("status-error") : (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 12, $this->source); })()) > 299)) ? ("status-warning") : ("status-success"))));
            // line 13
            echo "
                ";
            // line 14
            if (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 14, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 14, $this->source); })()), "redirect", [], "any", false, false, true, 14))) {
                // line 15
                echo "                    ";
                $context["redirect"] = twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 15, $this->source); })()), "redirect", [], "any", false, false, true, 15);
                // line 16
                echo "                    ";
                $context["link_to_source_code"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["redirect"] ?? null), "controller", [], "any", false, true, true, 16), "class", [], "any", true, true, true, 16)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 16, $this->source); })()), "controller", [], "any", false, false, true, 16), "file", [], "any", false, false, true, 16), 16, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 16, $this->source); })()), "controller", [], "any", false, false, true, 16), "line", [], "any", false, false, true, 16), 16, $this->source))) : (""));
                // line 17
                echo "                    ";
                $context["redirect_route_name"] = ("@" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 17, $this->source); })()), "route", [], "any", false, false, true, 17), 17, $this->source));
                // line 18
                echo "
                    <div class=\"status status-compact status-warning\">
                        <span class=\"icon icon-redirect\">";
                // line 20
                echo twig_source($this->env, "@WebProfiler/Icon/redirect.svg");
                echo "</span>

                        <span class=\"status-response-status-code\">";
                // line 22
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 22, $this->source); })()), "status_code", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</span> redirect from

                        <span class=\"status-request-method\">";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 24, $this->source); })()), "method", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</span>

                        ";
                // line 26
                if ((isset($context["link_to_source_code"]) || array_key_exists("link_to_source_code", $context) ? $context["link_to_source_code"] : (function () { throw new RuntimeError('Variable "link_to_source_code" does not exist.', 26, $this->source); })())) {
                    // line 27
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["link_to_source_code"]) || array_key_exists("link_to_source_code", $context) ? $context["link_to_source_code"] : (function () { throw new RuntimeError('Variable "link_to_source_code" does not exist.', 27, $this->source); })()), 27, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 27, $this->source); })()), "controller", [], "any", false, false, true, 27), "file", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["redirect_route_name"]) || array_key_exists("redirect_route_name", $context) ? $context["redirect_route_name"] : (function () { throw new RuntimeError('Variable "redirect_route_name" does not exist.', 27, $this->source); })()), 27, $this->source), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 29
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["redirect_route_name"]) || array_key_exists("redirect_route_name", $context) ? $context["redirect_route_name"] : (function () { throw new RuntimeError('Variable "redirect_route_name" does not exist.', 29, $this->source); })()), 29, $this->source), "html", null, true);
                    echo "
                        ";
                }
                // line 31
                echo "
                        (<a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 32, $this->source); })()), "token", [], "any", false, false, true, 32), "panel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 32, $this->source); })()), "query", [], "any", false, false, true, 32), "get", ["panel", "request"], "method", false, false, true, 32)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["redirect"]) || array_key_exists("redirect", $context) ? $context["redirect"] : (function () { throw new RuntimeError('Variable "redirect" does not exist.', 32, $this->source); })()), "token", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</a>)
                    </div>
                ";
            }
            // line 35
            echo "
                <div class=\"status ";
            // line 36
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["css_class"]) || array_key_exists("css_class", $context) ? $context["css_class"] : (function () { throw new RuntimeError('Variable "css_class" does not exist.', 36, $this->source); })()), 36, $this->source), "html", null, true);
            echo "\">
                    ";
            // line 37
            if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 37, $this->source); })()) > 399)) {
                // line 38
                echo "                        <p class=\"status-error-details\">
                            <span class=\"icon\">";
                // line 39
                echo twig_source($this->env, "@WebProfiler/Icon/alert-circle.svg");
                echo "</span>
                            <span class=\"status-response-status-code\">Error ";
                // line 40
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 40, $this->source); })()), 40, $this->source), "html", null, true);
                echo "</span>
                            <span class=\"status-response-status-text\">";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 41, $this->source); })()), "statusText", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "</span>
                        </p>
                    ";
            }
            // line 44
            echo "
                    <h2>
                        <span class=\"status-request-method\">
                            ";
            // line 47
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 47, $this->source); })()), "method", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
            echo "
                        </span>

                        ";
            // line 50
            $context["profile_title"] = (((twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 50, $this->source); })()), "url", [], "any", false, false, true, 50), 50, $this->source)) < 160)) ? (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 50, $this->source); })()), "url", [], "any", false, false, true, 50)) : ((twig_slice($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 50, $this->source); })()), "url", [], "any", false, false, true, 50), 50, $this->source), 0, 160) . "…")));
            // line 51
            echo "                        ";
            if (twig_in_filter(twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 51, $this->source); })()), "method", [], "any", false, false, true, 51)), ["GET", "HEAD"])) {
                // line 52
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 52, $this->source); })()), "url", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["profile_title"]) || array_key_exists("profile_title", $context) ? $context["profile_title"] : (function () { throw new RuntimeError('Variable "profile_title" does not exist.', 52, $this->source); })()), 52, $this->source), "html", null, true);
                echo "</a>
                        ";
            } else {
                // line 54
                echo "                            ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["profile_title"]) || array_key_exists("profile_title", $context) ? $context["profile_title"] : (function () { throw new RuntimeError('Variable "profile_title" does not exist.', 54, $this->source); })()), 54, $this->source), "html", null, true);
                echo "
                        ";
            }
            // line 56
            echo "                    </h2>

                    <dl class=\"metadata\">
                        ";
            // line 59
            if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 59, $this->source); })()) < 400)) {
                // line 60
                echo "                            <dt>Response</dt>
                            <dd>
                                <span class=\"status-response-status-code\">";
                // line 62
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 62, $this->source); })()), 62, $this->source), "html", null, true);
                echo "</span>
                                <span class=\"status-response-status-text\">";
                // line 63
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 63, $this->source); })()), "statusText", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "</span>
                            </dd>
                        ";
            }
            // line 66
            echo "
                        ";
            // line 67
            $context["referer"] = (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 67, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 67, $this->source); })()), "requestheaders", [], "any", false, false, true, 67), "get", ["referer"], "method", false, false, true, 67)) : (null));
            // line 68
            echo "                        ";
            if ((isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 68, $this->source); })())) {
                // line 69
                echo "                            <dt></dt>
                            <dd>
                                <span class=\"icon icon-referer\">";
                // line 71
                echo twig_source($this->env, "@WebProfiler/Icon/referrer.svg");
                echo "</span>
                                <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["referer"]) || array_key_exists("referer", $context) ? $context["referer"] : (function () { throw new RuntimeError('Variable "referer" does not exist.', 72, $this->source); })()), 72, $this->source), "html", null, true);
                echo "\" class=\"referer\">Browse referrer URL</a>
                            </dd>
                        ";
            }
            // line 75
            echo "
                        <dt>IP</dt>
                        <dd>
                            <a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search_results", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 78, $this->source); })()), "limit" => 10, "ip" => twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 78, $this->source); })()), "ip", [], "any", false, false, true, 78)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 78, $this->source); })()), "ip", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "</a>
                        </dd>

                        <dt>Profiled on</dt>
                        <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 82, $this->source); })()), "time", [], "any", false, false, true, 82), 82, $this->source), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 82, $this->source); })()), "time", [], "any", false, false, true, 82), 82, $this->source), "r"), "html", null, true);
            echo "</time></dd>

                        <dt>Token</dt>
                        <dd>";
            // line 85
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 85, $this->source); })()), "token", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "</dd>
                    </dl>
                </div>

                ";
            // line 89
            if (((isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 89, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 89, $this->source); })()), "forwardtoken", [], "any", false, false, true, 89))) {
                // line 90
                $context["forward_profile"] = twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 90, $this->source); })()), "childByToken", [twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 90, $this->source); })()), "forwardtoken", [], "any", false, false, true, 90)], "method", false, false, true, 90);
                // line 91
                echo "                    ";
                $context["controller"] = (((isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 91, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 91, $this->source); })()), "collector", ["request"], "method", false, false, true, 91), "controller", [], "any", false, false, true, 91)) : ("n/a"));
                // line 92
                echo "                    <div class=\"status status-compact status-compact-forward\">
                        <span class=\"icon icon-forward\">";
                // line 93
                echo twig_source($this->env, "@WebProfiler/Icon/forward.svg");
                echo "</span>

                        Forwarded to

                            ";
                // line 97
                $context["link"] = ((twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", true, true, true, 97)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 97, $this->source); })()), "file", [], "any", false, false, true, 97), 97, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 97, $this->source); })()), "line", [], "any", false, false, true, 97), 97, $this->source))) : (null));
                // line 98
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 98, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 98, $this->source); })()), 98, $this->source), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 98, $this->source); })()), "file", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
                    echo "\">";
                }
                // line 99
                if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, true, 99)) {
                    // line 100
                    echo twig_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 100, $this->source); })()), "class", [], "any", false, false, true, 100), 100, $this->source))), "html", null, true);
                    // line 101
                    ((twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 101, $this->source); })()), "method", [], "any", false, false, true, 101)) ? (print (twig_escape_filter($this->env, (" :: " . twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 101, $this->source); })()), "method", [], "any", false, false, true, 101)), "html", null, true))) : (print ("")));
                } else {
                    // line 103
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 103, $this->source); })()), 103, $this->source), "html", null, true);
                }
                // line 105
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 105, $this->source); })())) {
                    echo "</a>";
                }
                // line 106
                echo "                            (<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 106, $this->source); })()), "forwardtoken", [], "any", false, false, true, 106)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (isset($context["request_collector"]) || array_key_exists("request_collector", $context) ? $context["request_collector"] : (function () { throw new RuntimeError('Variable "request_collector" does not exist.', 106, $this->source); })()), "forwardtoken", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo "</a>)

                    </div>";
            }
            // line 110
            echo "            ";
        }
        // line 111
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 118
        echo "                        <div id=\"sidebar-contents\">
                            <div id=\"sidebar-shortcuts\">
                                ";
        // line 120
        $this->displayBlock('sidebar_shortcuts_links', $context, $blocks);
        // line 130
        echo "
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("web_profiler.controller.profiler::searchBarAction", array(), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 131, $this->source); })()), "query", [], "any", false, false, true, 131), "all", [], "any", false, false, true, 131), 131, $this->source)));
        echo "
                            </div>

                            ";
        // line 134
        if (array_key_exists("templates", $context)) {
            // line 135
            echo "                                <ul id=\"menu-profiler\">
                                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 136, $this->source); })()));
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
            foreach ($context['_seq'] as $context["name"] => $context["template"]) {
                // line 137
                echo "                                        ";
                ob_start();
                // line 138
                if (                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 138)->hasBlock("menu", $context)) {
                    // line 139
                    $__internal_compile_0 = $context;
                    $__internal_compile_1 = ["collector" => twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 139, $this->source); })()), "getcollector", [$context["name"]], "method", false, false, true, 139), "profiler_markup_version" => (isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 139, $this->source); })())];
                    if (!twig_test_iterable($__internal_compile_1)) {
                        throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 139, $this->getSourceContext());
                    }
                    $__internal_compile_1 = twig_to_array($__internal_compile_1);
                    $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
                    // line 140
                    $this->loadTemplate($context["template"], "@WebProfiler/Profiler/layout.html.twig", 140)->displayBlock("menu", $context);
                    $context = $__internal_compile_0;
                }
                $context["menu"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 144
                echo "                                        ";
                if ( !twig_test_empty((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 144, $this->source); })()))) {
                    // line 145
                    echo "                                            <li class=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["name"], 145, $this->source), "html", null, true);
                    echo " ";
                    echo ((($context["name"] == (isset($context["panel"]) || array_key_exists("panel", $context) ? $context["panel"] : (function () { throw new RuntimeError('Variable "panel" does not exist.', 145, $this->source); })()))) ? ("selected") : (""));
                    echo "\">
                                                <a href=\"";
                    // line 146
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 146, $this->source); })()), "panel" => $context["name"]]), "html", null, true);
                    echo "\">";
                    echo $this->sandbox->ensureToStringAllowed((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 146, $this->source); })()), 146, $this->source);
                    echo "</a>
                                            </li>
                                        ";
                }
                // line 149
                echo "                                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                                </ul>
                            ";
        }
        // line 152
        echo "                        </div>

                        ";
        // line 154
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/settings.html.twig");
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 120
    public function block_sidebar_shortcuts_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_shortcuts_links"));

        // line 121
        echo "                                    <div class=\"shortcuts\">
                                        <a class=\"btn btn-link\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_search", ["limit" => 10]);
        echo "\">Last 10</a>
                                        <a class=\"btn btn-link\" href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", twig_array_merge(["token" => "latest"], $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 123, $this->source); })()), "query", [], "any", false, false, true, 123), "all", [], "any", false, false, true, 123), 123, $this->source))), "html", null, true);
        echo "\">Latest</a>

                                        <a class=\"sf-toggle btn btn-link\" data-toggle-selector=\"#sidebar-search\" ";
        // line 125
        if ((array_key_exists("tokens", $context) || array_key_exists("about", $context))) {
            echo "data-toggle-initial=\"display\"";
        }
        echo ">
                                            ";
        // line 126
        echo twig_source($this->env, "@WebProfiler/Icon/search.svg");
        echo " <span class=\"hidden-small\">Search</span>
                                        </a>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 161
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 161,  541 => 126,  535 => 125,  530 => 123,  526 => 122,  523 => 121,  513 => 120,  501 => 154,  497 => 152,  493 => 150,  479 => 149,  471 => 146,  464 => 145,  461 => 144,  456 => 140,  448 => 139,  446 => 138,  443 => 137,  426 => 136,  423 => 135,  421 => 134,  415 => 131,  412 => 130,  410 => 120,  406 => 118,  396 => 117,  386 => 111,  383 => 110,  374 => 106,  370 => 105,  367 => 103,  364 => 101,  362 => 100,  360 => 99,  352 => 98,  350 => 97,  343 => 93,  340 => 92,  337 => 91,  335 => 90,  333 => 89,  326 => 85,  318 => 82,  309 => 78,  304 => 75,  298 => 72,  294 => 71,  290 => 69,  287 => 68,  285 => 67,  282 => 66,  276 => 63,  272 => 62,  268 => 60,  266 => 59,  261 => 56,  255 => 54,  247 => 52,  244 => 51,  242 => 50,  236 => 47,  231 => 44,  225 => 41,  221 => 40,  217 => 39,  214 => 38,  212 => 37,  208 => 36,  205 => 35,  197 => 32,  194 => 31,  188 => 29,  178 => 27,  176 => 26,  171 => 24,  166 => 22,  161 => 20,  157 => 18,  154 => 17,  151 => 16,  148 => 15,  146 => 14,  143 => 13,  140 => 12,  137 => 11,  134 => 10,  131 => 9,  121 => 8,  106 => 162,  104 => 161,  100 => 160,  94 => 156,  92 => 117,  85 => 112,  83 => 8,  77 => 5,  74 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block body %}
    <div class=\"container\">
        {{ include('@WebProfiler/Profiler/header.html.twig', with_context = false) }}

        <div id=\"summary\">
        {% block summary %}
            {% if profile is defined %}
                {% set request_collector = profile.collectors.request|default(false) %}
                {% set status_code = request_collector ? request_collector.statuscode|default(0) : 0 %}
                {% set css_class = status_code > 399 ? 'status-error' : status_code > 299 ? 'status-warning' : 'status-success' %}

                {% if request_collector and request_collector.redirect %}
                    {% set redirect = request_collector.redirect %}
                    {% set link_to_source_code = redirect.controller.class is defined ? redirect.controller.file|file_link(redirect.controller.line) %}
                    {% set redirect_route_name = '@' ~ redirect.route %}

                    <div class=\"status status-compact status-warning\">
                        <span class=\"icon icon-redirect\">{{ source('@WebProfiler/Icon/redirect.svg') }}</span>

                        <span class=\"status-response-status-code\">{{ redirect.status_code }}</span> redirect from

                        <span class=\"status-request-method\">{{ redirect.method }}</span>

                        {% if link_to_source_code %}
                            <a href=\"{{ link_to_source_code }}\" title=\"{{ redirect.controller.file }}\">{{ redirect_route_name }}</a>
                        {% else %}
                            {{ redirect_route_name }}
                        {% endif %}

                        (<a href=\"{{ path('_profiler', { token: redirect.token, panel: request.query.get('panel', 'request') }) }}\">{{ redirect.token }}</a>)
                    </div>
                {% endif %}

                <div class=\"status {{ css_class }}\">
                    {% if status_code > 399 %}
                        <p class=\"status-error-details\">
                            <span class=\"icon\">{{ source('@WebProfiler/Icon/alert-circle.svg') }}</span>
                            <span class=\"status-response-status-code\">Error {{ status_code }}</span>
                            <span class=\"status-response-status-text\">{{ request_collector.statusText }}</span>
                        </p>
                    {% endif %}

                    <h2>
                        <span class=\"status-request-method\">
                            {{ profile.method|upper }}
                        </span>

                        {% set profile_title = profile.url|length < 160 ? profile.url : profile.url[:160] ~ '…' %}
                        {% if profile.method|upper in ['GET', 'HEAD'] %}
                            <a href=\"{{ profile.url }}\">{{ profile_title }}</a>
                        {% else %}
                            {{ profile_title }}
                        {% endif %}
                    </h2>

                    <dl class=\"metadata\">
                        {% if status_code < 400 %}
                            <dt>Response</dt>
                            <dd>
                                <span class=\"status-response-status-code\">{{ status_code }}</span>
                                <span class=\"status-response-status-text\">{{ request_collector.statusText }}</span>
                            </dd>
                        {% endif %}

                        {% set referer = request_collector ? request_collector.requestheaders.get('referer') : null %}
                        {% if referer %}
                            <dt></dt>
                            <dd>
                                <span class=\"icon icon-referer\">{{ source('@WebProfiler/Icon/referrer.svg') }}</span>
                                <a href=\"{{ referer }}\" class=\"referer\">Browse referrer URL</a>
                            </dd>
                        {% endif %}

                        <dt>IP</dt>
                        <dd>
                            <a href=\"{{ path('_profiler_search_results', { token: token, limit: 10, ip: profile.ip }) }}\">{{ profile.ip }}</a>
                        </dd>

                        <dt>Profiled on</dt>
                        <dd><time data-convert-to-user-timezone data-render-as-datetime datetime=\"{{ profile.time|date('c') }}\">{{ profile.time|date('r') }}</time></dd>

                        <dt>Token</dt>
                        <dd>{{ profile.token }}</dd>
                    </dl>
                </div>

                {% if request_collector and request_collector.forwardtoken -%}
                    {% set forward_profile = profile.childByToken(request_collector.forwardtoken) %}
                    {% set controller = forward_profile ? forward_profile.collector('request').controller : 'n/a' %}
                    <div class=\"status status-compact status-compact-forward\">
                        <span class=\"icon icon-forward\">{{ source('@WebProfiler/Icon/forward.svg') }}</span>

                        Forwarded to

                            {% set link = controller.file is defined ? controller.file|file_link(controller.line) : null -%}
                            {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.file }}\">{% endif -%}
                                {% if controller.class is defined %}
                                    {{- controller.class|abbr_class|striptags -}}
                                    {{- controller.method ? ' :: ' ~ controller.method -}}
                                {% else %}
                                    {{- controller -}}
                                {% endif %}
                                {%- if link %}</a>{% endif %}
                            (<a href=\"{{ path('_profiler', { token: request_collector.forwardtoken }) }}\">{{ request_collector.forwardtoken }}</a>)

                    </div>
                {%- endif %}
            {% endif %}
        {% endblock %}
    </div>

        <div id=\"content\">
            <div id=\"main\">
                <div id=\"sidebar\">
                    {% block sidebar %}
                        <div id=\"sidebar-contents\">
                            <div id=\"sidebar-shortcuts\">
                                {% block sidebar_shortcuts_links %}
                                    <div class=\"shortcuts\">
                                        <a class=\"btn btn-link\" href=\"{{ path('_profiler_search', { limit: 10 }) }}\">Last 10</a>
                                        <a class=\"btn btn-link\" href=\"{{ path('_profiler', { token: 'latest' }|merge(request.query.all)) }}\">Latest</a>

                                        <a class=\"sf-toggle btn btn-link\" data-toggle-selector=\"#sidebar-search\" {% if tokens is defined or about is defined %}data-toggle-initial=\"display\"{% endif %}>
                                            {{ source('@WebProfiler/Icon/search.svg') }} <span class=\"hidden-small\">Search</span>
                                        </a>
                                    </div>
                                {% endblock sidebar_shortcuts_links %}

                                {{ render(controller('web_profiler.controller.profiler::searchBarAction', query=request.query.all)) }}
                            </div>

                            {% if templates is defined %}
                                <ul id=\"menu-profiler\">
                                    {% for name, template in templates %}
                                        {% set menu -%}
                                            {%- if block('menu', template) is defined -%}
                                                {% with { collector: profile.getcollector(name), profiler_markup_version: profiler_markup_version } %}
                                                    {{- block('menu', template) -}}
                                                {% endwith %}
                                            {%- endif -%}
                                        {%- endset %}
                                        {% if menu is not empty %}
                                            <li class=\"{{ name }} {{ name == panel ? 'selected' }}\">
                                                <a href=\"{{ path('_profiler', { token: token, panel: name }) }}\">{{ menu|raw }}</a>
                                            </li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            {% endif %}
                        </div>

                        {{ include('@WebProfiler/Profiler/settings.html.twig') }}
                    {% endblock sidebar %}
                </div>

                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        {{ include('@WebProfiler/Profiler/base_js.html.twig') }}
                        {% block panel '' %}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/layout.html.twig", "/Users/saranggangapurkar/Documents/projects/my-project/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/layout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 8, "if" => 9, "set" => 10, "for" => 136, "with" => 139);
        static $filters = array("default" => 10, "file_link" => 16, "escape" => 22, "upper" => 47, "length" => 50, "slice" => 50, "date" => 82, "striptags" => 100, "abbr_class" => 100, "raw" => 146, "merge" => 123);
        static $functions = array("include" => 5, "source" => 20, "path" => 32, "render" => 131, "controller" => 131);

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'set', 'for', 'with'],
                ['default', 'file_link', 'escape', 'upper', 'length', 'slice', 'date', 'striptags', 'abbr_class', 'raw', 'merge'],
                ['include', 'source', 'path', 'render', 'controller']
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

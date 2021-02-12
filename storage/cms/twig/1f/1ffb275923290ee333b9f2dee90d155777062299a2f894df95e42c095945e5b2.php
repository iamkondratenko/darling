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

/* /Users/iamk/git/darling/themes/demo/partials/site/main-banner.htm */
class __TwigTemplate_c23ee6000f493876b9f382c842d46bebdabe8d783a8bb7cf2bcaec60dadde40b extends \Twig\Template
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
        $tags = array("set" => 4, "if" => 8);
        $filters = array("escape" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"MainHomeBanner\">
\t<div class=\"MainHomeBanner-Content\">
\t\t<div class=\"MainHomeBanner-Content-item\">
\t";
        // line 4
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, true, 4);
        // line 5
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, true, 5);
        // line 6
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 6);
        // line 7
        echo "
";
        // line 8
        if (($context["record"] ?? null)) {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null), [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
";
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["notFoundMessage"] ?? null), 11, $this->source), "html", null, true);
            echo "
";
        }
        // line 13
        echo "\t\t</div>
\t\t<div class=\"MainHomeBanner-Content-item\">
\t\t\t
\t\t</div>
\t</div>
</div>



<style>

\t.MainHomeBanner {
\t\tdisplay: block;
\t\twidth: 100vw;
\t\theight: 100vh;
\t\tposition: absolute;
\t}

\t.MainHomeBanner-Content {
\t\tdisplay: flex;
\t\twidth: 100%;
\t\theight: 100%;
\t}

\t.MainHomeBanner-Content-item {
\t\twidth: 50%;
\t\tbackground-color: #0b3f5a;
\t}

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/site/main-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 13,  84 => 11,  78 => 9,  76 => 8,  73 => 7,  71 => 6,  69 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"MainHomeBanner\">
\t<div class=\"MainHomeBanner-Content\">
\t\t<div class=\"MainHomeBanner-Content-item\">
\t{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    {{ attribute(record, displayColumn) }}
{% else %}
    {{ notFoundMessage }}
{% endif %}
\t\t</div>
\t\t<div class=\"MainHomeBanner-Content-item\">
\t\t\t
\t\t</div>
\t</div>
</div>



<style>

\t.MainHomeBanner {
\t\tdisplay: block;
\t\twidth: 100vw;
\t\theight: 100vh;
\t\tposition: absolute;
\t}

\t.MainHomeBanner-Content {
\t\tdisplay: flex;
\t\twidth: 100%;
\t\theight: 100%;
\t}

\t.MainHomeBanner-Content-item {
\t\twidth: 50%;
\t\tbackground-color: #0b3f5a;
\t}

</style>", "/Users/iamk/git/darling/themes/demo/partials/site/main-banner.htm", "");
    }
}

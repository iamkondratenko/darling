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

/* /Users/iamk/git/darling/themes/demo/partials/category/category-main-banner.htm */
class __TwigTemplate_037814f32d65e4244f11ea9f338274eb48cef7c5277ecd794ab84aa1b3829b3d extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 2);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"CategoryMainBanner\">
    <div class=\"CategoryMainBanner-Content\" style=\"background: url(";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainCategoryBackground"] ?? null), 2, $this->source), "html", null, true);
        echo "); background-size: 100%; background-repeat: no-repeat; background-size: cover\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categoryTitle"] ?? null), 4, $this->source), "html", null, true);
        echo "</h1>
            <p class=\"CategoryMainBanner-SubTitle\">";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categorySubtitle"] ?? null), 5, $this->source), "html", null, true);
        echo "</p>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" ></div>
    </div>
</div>

<style>

    h1.CategoryMainBanner-Title {
        color: #fff;
        font-size: 50px;
        font-weight: 500;
        text-transform: uppercase;
    }

    p.CategoryMainBanner-SubTitle {
        font-size: 80px;
        line-height: 105px;
        font-weight: 500;
        color: #fff;
        text-transform: uppercase;
    }

    .CategoryMainBanner {
        width: 100vw;
        height: 100vh;
    }

    .CategoryMainBanner-Content {
        width: 100%;
        height: 100%;
    }

    .CategoryMainBanner-Content-Container {
        width: 60%;
        height: 100%;
        display: flex;
        flex-direction: column;
        z-index: 99;
        position: absolute;
        padding: 0 60px;
        align-items: flex-start;
        justify-content: center;
    }

    .CategoryMainBanner-Content-Background {
        width: 100%;
        height: 100%;
        background-size: contain;
        position: absolute;
        top: 0;
        background-repeat: no-repeat;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/category-main-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 5,  70 => 4,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"CategoryMainBanner\">
    <div class=\"CategoryMainBanner-Content\" style=\"background: url({{ mainCategoryBackground }}); background-size: 100%; background-repeat: no-repeat; background-size: cover\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">{{ categoryTitle }}</h1>
            <p class=\"CategoryMainBanner-SubTitle\">{{ categorySubtitle }}</p>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" ></div>
    </div>
</div>

<style>

    h1.CategoryMainBanner-Title {
        color: #fff;
        font-size: 50px;
        font-weight: 500;
        text-transform: uppercase;
    }

    p.CategoryMainBanner-SubTitle {
        font-size: 80px;
        line-height: 105px;
        font-weight: 500;
        color: #fff;
        text-transform: uppercase;
    }

    .CategoryMainBanner {
        width: 100vw;
        height: 100vh;
    }

    .CategoryMainBanner-Content {
        width: 100%;
        height: 100%;
    }

    .CategoryMainBanner-Content-Container {
        width: 60%;
        height: 100%;
        display: flex;
        flex-direction: column;
        z-index: 99;
        position: absolute;
        padding: 0 60px;
        align-items: flex-start;
        justify-content: center;
    }

    .CategoryMainBanner-Content-Background {
        width: 100%;
        height: 100%;
        background-size: contain;
        position: absolute;
        top: 0;
        background-repeat: no-repeat;
    }
</style>", "/Users/iamk/git/darling/themes/demo/partials/category/category-main-banner.htm", "");
    }
}

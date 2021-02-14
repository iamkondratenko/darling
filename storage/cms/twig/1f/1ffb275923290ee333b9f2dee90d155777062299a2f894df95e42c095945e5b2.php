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
        $tags = array("set" => 1, "partial" => 5);
        $filters = array("theme" => 12, "media" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial'],
                ['theme', 'media'],
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/menu-drawer.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
<div class=\"MainHomeBanner\">
\t<div class=\"MainHomeBanner-Content\">

        <div class=\"MainHomeBanner-Content-Links\">
            <a href=\"#\" class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left\">
                <span class=\"MainHomeBanner-Content-LinkArrow\"><img class=\"MainHomeBanner-Content-LinkArrowImg\" src=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-banner/arrow-left.png");
        echo "\"></span> <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </a>

            <div href=\"#\" class=\"MainHomeBanner-Content-SlashHolder\">
                <div class=\"MainHomeBanner-Content-Slash\">/</div>
            </div>



            <a href=\"#\" class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right\">
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div><span class=\"MainHomeBanner-Content-LinkArrow\"><img class=\"MainHomeBanner-Content-LinkArrowImg\" src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-banner/arrow-right.png");
        echo "\"></span>
            </a>
        </div>
\t    
        <div class=\"MainHomeBanner-Content-Background\" style=\"background: url(";
        // line 26
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "first_slider_picture", [], "any", false, false, true, 26), 26, $this->source));
        echo "); background-size: cover; background-repeat: no-repeat; background-position: center\">

        </div>

\t\t
\t</div>
</div>



<style>

\t.MainHomeBanner {
\t\tdisplay: block;
\t\twidth: 100vw;
\t\theight: 100vh;
\t\tposition: absolute;
        z-index: 99;
\t}

\t.MainHomeBanner-Content {
\t\tdisplay: flex;
\t\twidth: 100%;
\t\theight: 100%;
\t}

    .MainHomeBanner-Content-Links {
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 999;
        display: flex;
    }

    a.MainHomeBanner-Content-LinkHolder {
        width: 50%;
        display: flex;
        align-items: center;
        color: #fff;
        text-transform: uppercase;
        text-decoration: none;
    }

    .MainHomeBanner-Content-LinkArrow {
        display: none;
    }

    .MainHomeBanner-Content-LinkArrowImg {
        width: 65px;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover {
        color: #EA028A;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover > .MainHomeBanner-Content-LinkArrow {
        display: block;
    }

    a.MainHomeBanner-Content-LinkHolder--right:hover > .MainHomeBanner-Content-LinkArrow {
        display: block;
    }

    a.MainHomeBanner-Content-LinkHolder--right:hover {
        color: #EA028A;
    }

    .MainHomeBanner-Content-LinkItem {
        font-weight: 500;
        font-size: 80px;
        padding: 50px;
    }

    .MainHomeBanner-Content-Slash {
        font-weight: 500;
        font-size: 80px;
    }

    .MainHomeBanner-Content-SlashHolder {
        color: #fff;
        display: flex;
        align-items: center;
    }

    .MainHomeBanner-Content-LinkHolder--left {
        justify-content: flex-end;
    }

    .MainHomeBanner-Content-LinkHolder--right {
        justify-content: flex-start;
    }

\t.MainHomeBanner-Content-Background {
\t\twidth: 100%;
\t}

    @media screen and (max-width: 1200px){

        .MainHomeBanner-Content-Links {
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
        }

        .MainHomeBanner-Content-Slash {
            display: none;
        }

        a.MainHomeBanner-Content-LinkHolder {
            width: 100%;
            justify-content: center;
        }

        .MainHomeBanner-Content-LinkItem {
            padding: 0 32px;
            font-size: 40px;
        }

        .MainHomeBanner-Content-LinkHolder--right {
            padding-bottom: 50px;
        }

        .MainHomeBanner-Content-LinkArrowImg {
            width: 36px;
        }
    }

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
        return array (  103 => 26,  96 => 22,  83 => 12,  75 => 6,  71 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = mainBanner.record %}
{% set displayColumn = mainBanner.displayColumn %}
{% set notFoundMessage = mainBanner.notFoundMessage %}

{% partial \"site/menu-drawer.htm\" %}

<div class=\"MainHomeBanner\">
\t<div class=\"MainHomeBanner-Content\">

        <div class=\"MainHomeBanner-Content-Links\">
            <a href=\"#\" class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left\">
                <span class=\"MainHomeBanner-Content-LinkArrow\"><img class=\"MainHomeBanner-Content-LinkArrowImg\" src=\"{{ 'assets/images/main-banner/arrow-left.png' | theme }}\"></span> <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </a>

            <div href=\"#\" class=\"MainHomeBanner-Content-SlashHolder\">
                <div class=\"MainHomeBanner-Content-Slash\">/</div>
            </div>



            <a href=\"#\" class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right\">
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div><span class=\"MainHomeBanner-Content-LinkArrow\"><img class=\"MainHomeBanner-Content-LinkArrowImg\" src=\"{{ 'assets/images/main-banner/arrow-right.png' | theme }}\"></span>
            </a>
        </div>
\t    
        <div class=\"MainHomeBanner-Content-Background\" style=\"background: url({{ record.first_slider_picture|media}}); background-size: cover; background-repeat: no-repeat; background-position: center\">

        </div>

\t\t
\t</div>
</div>



<style>

\t.MainHomeBanner {
\t\tdisplay: block;
\t\twidth: 100vw;
\t\theight: 100vh;
\t\tposition: absolute;
        z-index: 99;
\t}

\t.MainHomeBanner-Content {
\t\tdisplay: flex;
\t\twidth: 100%;
\t\theight: 100%;
\t}

    .MainHomeBanner-Content-Links {
        width: 100%;
        height: 100%;
        position: absolute;
        z-index: 999;
        display: flex;
    }

    a.MainHomeBanner-Content-LinkHolder {
        width: 50%;
        display: flex;
        align-items: center;
        color: #fff;
        text-transform: uppercase;
        text-decoration: none;
    }

    .MainHomeBanner-Content-LinkArrow {
        display: none;
    }

    .MainHomeBanner-Content-LinkArrowImg {
        width: 65px;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover {
        color: #EA028A;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover > .MainHomeBanner-Content-LinkArrow {
        display: block;
    }

    a.MainHomeBanner-Content-LinkHolder--right:hover > .MainHomeBanner-Content-LinkArrow {
        display: block;
    }

    a.MainHomeBanner-Content-LinkHolder--right:hover {
        color: #EA028A;
    }

    .MainHomeBanner-Content-LinkItem {
        font-weight: 500;
        font-size: 80px;
        padding: 50px;
    }

    .MainHomeBanner-Content-Slash {
        font-weight: 500;
        font-size: 80px;
    }

    .MainHomeBanner-Content-SlashHolder {
        color: #fff;
        display: flex;
        align-items: center;
    }

    .MainHomeBanner-Content-LinkHolder--left {
        justify-content: flex-end;
    }

    .MainHomeBanner-Content-LinkHolder--right {
        justify-content: flex-start;
    }

\t.MainHomeBanner-Content-Background {
\t\twidth: 100%;
\t}

    @media screen and (max-width: 1200px){

        .MainHomeBanner-Content-Links {
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
        }

        .MainHomeBanner-Content-Slash {
            display: none;
        }

        a.MainHomeBanner-Content-LinkHolder {
            width: 100%;
            justify-content: center;
        }

        .MainHomeBanner-Content-LinkItem {
            padding: 0 32px;
            font-size: 40px;
        }

        .MainHomeBanner-Content-LinkHolder--right {
            padding-bottom: 50px;
        }

        .MainHomeBanner-Content-LinkArrowImg {
            width: 36px;
        }
    }

</style>", "/Users/iamk/git/darling/themes/demo/partials/site/main-banner.htm", "");
    }
}

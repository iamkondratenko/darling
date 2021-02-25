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
        $tags = array("set" => 1);
        $filters = array("media" => 64);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['media'],
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

<div class=\"MainHomeBanner\">

    <div class=\"SubNavigationMenu jsDesktop\">
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-active\" href=\"#\">ENG</a>
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\">RUS</a>
        </div>
    </div>

\t<div class=\"MainHomeBanner-Content\">

        <div class=\"MainHomeBanner-Content-Links\">

            <a href=\"/category/makeup/\" class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left\">
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\"  xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M30.4535 0L2.26562 28.1878L2.28467 28.2069L0 30.4915L2.26782 32.7594L2.2655 32.7617L30.4534 60.9495L36.1102 55.2927L14.9224 34.1048H70.2656V26.1048H15.6624L36.1103 5.65686L30.4535 0Z\" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         viewBox=\"0 0 62 55\" style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0{fill:#FFFFFF;}
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                        </svg>
                </span>
                <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </a>

            <div href=\"#\" class=\"MainHomeBanner-Content-SlashHolder\">
                <div class=\"MainHomeBanner-Content-Slash\">/</div>
            </div>

            <a href=\"/category/skin-care/\" class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right\">
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div>
                <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         viewBox=\"0 0 62 55\" style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0{fill:#FFFFFF;}
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                        </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M39.8121 60.9492L68 32.7614L67.981 32.7423L70.2656 30.4577L67.9978 28.1898L68.0001 28.1875L39.8123 -0.000307838L34.1554 5.65655L55.3433 26.8444L2.98154e-06 26.8444L2.28216e-06 34.8444L54.6033 34.8444L34.1553 55.2924L39.8121 60.9492Z\" />
</svg>

                </span>
            </a>

        </div>
\t    
        <div class=\"MainHomeBanner-Content-Background\" style=\"background: url(";
        // line 64
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "first_slider_picture", [], "any", false, false, true, 64), 64, $this->source));
        echo "); background-size: cover; background-repeat: no-repeat; background-position: center\">

        </div>

\t\t
\t</div>

</div>



<style>




    .MainHomeBanner-Content-LinkArrow-Left {
        display: none;
    }

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
        z-index: 500;
        display: flex;
    }

    a.MainHomeBanner-Content-LinkHolder {
        width: 50%;
        display: flex;
        align-items: center;
        color: #fff;
        text-transform: uppercase;
        text-decoration: none;
        transition-duration: 500ms;
    }

    a.MainHomeBanner-Content-LinkHolder--left > .MainHomeBanner-Content-LinkArrow {
        opacity: 0;
        margin-right: -40px;
        transition-duration: 400ms;
    }

    a.MainHomeBanner-Content-LinkHolder--right > .MainHomeBanner-Content-LinkArrow {
        opacity: 0;
        margin-left: -40px;
        transition-duration: 400ms;
    }

    .MainHomeBanner-Content-LinkArrowImg {
        width: 65px;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover {
        color: #EA028A;
        transition-duration: 500ms;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover > .MainHomeBanner-Content-LinkArrow {
        opacity: 1;
        margin-right: -20px;
        transition-duration: 400ms;
    }

    a.MainHomeBanner-Content-LinkHolder--right:hover > .MainHomeBanner-Content-LinkArrow {
        opacity: 1;
        margin-left: -20px;
        transition-duration: 400ms;
    }

    a.MainHomeBanner-Content-LinkHolder--right:hover {
        color: #EA028A;
        transition-duration: 500ms;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover > .MainHomeBanner-Content-LinkArrow > svg {
        fill: #EA028A;
        transition: 500ms;
    }

    .MainHomeBanner-Content-LinkItem {
        font-weight: 500;
        font-size: 100px;
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

    @media screen and (max-width: 1919px) {
        .MainHomeBanner-Content-LinkItem {
            font-size: 80px;
        }
    }

    @media screen and (max-width: 1365px){



        .MainHomeBanner-Content-LinkArrow {
            display: none;
        }

        .MainHomeBanner-Content-Links {
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            padding-bottom: 100px;
        }

        .MainHomeBanner-Content-Slash {
            display: none;
        }

        a.MainHomeBanner-Content-LinkHolder {
            width: 100%;
            justify-content: center;
        }

        .MainHomeBanner-Content-LinkItem {
            padding: 0 12px;
            font-size: 75px;
        }

        .MainHomeBanner-Content-LinkHolder--right {
            padding-bottom: 50px;
        }

        .MainHomeBanner-Content-LinkArrowImg {
            width: 36px;
        }
    }

    @media screen and (max-width: 767px){

        .MainHomeBanner-Content-LinkArrow-Left {
            display: block;
            width: 30px;
            height: 30px;
        }

        .MainHomeBanner-Content-LinkArrow-Right {
            display: block;
            width: 30px;
            height: 30px;
            transform: rotate(180deg);
        }

        .MainHomeBanner-Content-LinkItem {
            font-size: 40px;
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
        return array (  130 => 64,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = mainBanner.record %}
{% set displayColumn = mainBanner.displayColumn %}
{% set notFoundMessage = mainBanner.notFoundMessage %}


<div class=\"MainHomeBanner\">

    <div class=\"SubNavigationMenu jsDesktop\">
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-active\" href=\"#\">ENG</a>
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\">RUS</a>
        </div>
    </div>

\t<div class=\"MainHomeBanner-Content\">

        <div class=\"MainHomeBanner-Content-Links\">

            <a href=\"/category/makeup/\" class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left\">
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\"  xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                    <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M30.4535 0L2.26562 28.1878L2.28467 28.2069L0 30.4915L2.26782 32.7594L2.2655 32.7617L30.4534 60.9495L36.1102 55.2927L14.9224 34.1048H70.2656V26.1048H15.6624L36.1103 5.65686L30.4535 0Z\" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         viewBox=\"0 0 62 55\" style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0{fill:#FFFFFF;}
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                        </svg>
                </span>
                <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </a>

            <div href=\"#\" class=\"MainHomeBanner-Content-SlashHolder\">
                <div class=\"MainHomeBanner-Content-Slash\">/</div>
            </div>

            <a href=\"/category/skin-care/\" class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right\">
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div>
                <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         viewBox=\"0 0 62 55\" style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0{fill:#FFFFFF;}
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                        </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
<path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M39.8121 60.9492L68 32.7614L67.981 32.7423L70.2656 30.4577L67.9978 28.1898L68.0001 28.1875L39.8123 -0.000307838L34.1554 5.65655L55.3433 26.8444L2.98154e-06 26.8444L2.28216e-06 34.8444L54.6033 34.8444L34.1553 55.2924L39.8121 60.9492Z\" />
</svg>

                </span>
            </a>

        </div>
\t    
        <div class=\"MainHomeBanner-Content-Background\" style=\"background: url({{ record.first_slider_picture|media}}); background-size: cover; background-repeat: no-repeat; background-position: center\">

        </div>

\t\t
\t</div>

</div>



<style>




    .MainHomeBanner-Content-LinkArrow-Left {
        display: none;
    }

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
        z-index: 500;
        display: flex;
    }

    a.MainHomeBanner-Content-LinkHolder {
        width: 50%;
        display: flex;
        align-items: center;
        color: #fff;
        text-transform: uppercase;
        text-decoration: none;
        transition-duration: 500ms;
    }

    a.MainHomeBanner-Content-LinkHolder--left > .MainHomeBanner-Content-LinkArrow {
        opacity: 0;
        margin-right: -40px;
        transition-duration: 400ms;
    }

    a.MainHomeBanner-Content-LinkHolder--right > .MainHomeBanner-Content-LinkArrow {
        opacity: 0;
        margin-left: -40px;
        transition-duration: 400ms;
    }

    .MainHomeBanner-Content-LinkArrowImg {
        width: 65px;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover {
        color: #EA028A;
        transition-duration: 500ms;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover > .MainHomeBanner-Content-LinkArrow {
        opacity: 1;
        margin-right: -20px;
        transition-duration: 400ms;
    }

    a.MainHomeBanner-Content-LinkHolder--right:hover > .MainHomeBanner-Content-LinkArrow {
        opacity: 1;
        margin-left: -20px;
        transition-duration: 400ms;
    }

    a.MainHomeBanner-Content-LinkHolder--right:hover {
        color: #EA028A;
        transition-duration: 500ms;
    }

    a.MainHomeBanner-Content-LinkHolder--left:hover > .MainHomeBanner-Content-LinkArrow > svg {
        fill: #EA028A;
        transition: 500ms;
    }

    .MainHomeBanner-Content-LinkItem {
        font-weight: 500;
        font-size: 100px;
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

    @media screen and (max-width: 1919px) {
        .MainHomeBanner-Content-LinkItem {
            font-size: 80px;
        }
    }

    @media screen and (max-width: 1365px){



        .MainHomeBanner-Content-LinkArrow {
            display: none;
        }

        .MainHomeBanner-Content-Links {
            flex-direction: column;
            align-items: center;
            justify-content: flex-end;
            padding-bottom: 100px;
        }

        .MainHomeBanner-Content-Slash {
            display: none;
        }

        a.MainHomeBanner-Content-LinkHolder {
            width: 100%;
            justify-content: center;
        }

        .MainHomeBanner-Content-LinkItem {
            padding: 0 12px;
            font-size: 75px;
        }

        .MainHomeBanner-Content-LinkHolder--right {
            padding-bottom: 50px;
        }

        .MainHomeBanner-Content-LinkArrowImg {
            width: 36px;
        }
    }

    @media screen and (max-width: 767px){

        .MainHomeBanner-Content-LinkArrow-Left {
            display: block;
            width: 30px;
            height: 30px;
        }

        .MainHomeBanner-Content-LinkArrow-Right {
            display: block;
            width: 30px;
            height: 30px;
            transform: rotate(180deg);
        }

        .MainHomeBanner-Content-LinkItem {
            font-size: 40px;
        }
    }

</style>", "/Users/iamk/git/darling/themes/demo/partials/site/main-banner.htm", "");
    }
}

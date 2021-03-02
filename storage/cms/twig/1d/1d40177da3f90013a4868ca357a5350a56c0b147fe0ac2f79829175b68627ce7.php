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
        $filters = array("media" => 2, "escape" => 4);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['media', 'escape'],
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
    <div class=\"CategoryMainBanner-Content desktop\" style=\"background: url(";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainCategoryBackground"] ?? null), 2, $this->source));
        echo "); background-size: 100%; background-repeat: no-repeat; background-size: cover\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categoryTitle"] ?? null), 4, $this->source), "html", null, true);
        echo "</h1>
            <div class=\"CategoryMainBanner-SubTitle\">
                <a href=\"#pads\" class=\"CategoryMainBanner-SubTitle-Item\">
                    pads
                </a>
                <span class=\"js-desktop\"> /</span>
                <span class=\"js-mobile\">
                </span>

                <a href=\"#patches\" class=\"CategoryMainBanner-SubTitle-Item\">patches</a><span class=\"js-desktop\"> /</span>
                <a href=\"#masks\" class=\"CategoryMainBanner-SubTitle-Item\">masks</a>
            </div>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" ></div>
    </div>
    <div class=\"CategoryMainBanner-Content mobile\" style=\"background: url(";
        // line 19
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainCategoryBackgroundMobile"] ?? null), 19, $this->source));
        echo "); background-size: 100%; background-repeat: no-repeat; background-size: cover\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categoryTitle"] ?? null), 21, $this->source), "html", null, true);
        echo "</h1>
            <div class=\"CategoryMainBanner-SubTitle\">
                <a href=\"#pads\" class=\"CategoryMainBanner-SubTitle-Item\">
                    pads
                    <span class=\"js-mobile\">
                    <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\" fill=\"white\"/>
                    </svg>
                </span>
                </a>
                <a href=\"#patches\" class=\"CategoryMainBanner-SubTitle-Item\">
                    patches
                    <span class=\"js-mobile\">
                    <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\" fill=\"white\"/>
                    </svg>
                </span>
                </a>
                <a href=\"#masks\" class=\"CategoryMainBanner-SubTitle-Item\">
                    masks
                    <span class=\"js-mobile\">
                    <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\" fill=\"white\"/>
                    </svg>
                </span>
                </a>


            </div>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" ></div>
    </div>


</div>

<style>



</style>


<script>






</script>";
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
        return array (  93 => 21,  88 => 19,  70 => 4,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"CategoryMainBanner\">
    <div class=\"CategoryMainBanner-Content desktop\" style=\"background: url({{ mainCategoryBackground | media }}); background-size: 100%; background-repeat: no-repeat; background-size: cover\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">{{ categoryTitle }}</h1>
            <div class=\"CategoryMainBanner-SubTitle\">
                <a href=\"#pads\" class=\"CategoryMainBanner-SubTitle-Item\">
                    pads
                </a>
                <span class=\"js-desktop\"> /</span>
                <span class=\"js-mobile\">
                </span>

                <a href=\"#patches\" class=\"CategoryMainBanner-SubTitle-Item\">patches</a><span class=\"js-desktop\"> /</span>
                <a href=\"#masks\" class=\"CategoryMainBanner-SubTitle-Item\">masks</a>
            </div>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" ></div>
    </div>
    <div class=\"CategoryMainBanner-Content mobile\" style=\"background: url({{ mainCategoryBackgroundMobile | media }}); background-size: 100%; background-repeat: no-repeat; background-size: cover\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">{{ categoryTitle }}</h1>
            <div class=\"CategoryMainBanner-SubTitle\">
                <a href=\"#pads\" class=\"CategoryMainBanner-SubTitle-Item\">
                    pads
                    <span class=\"js-mobile\">
                    <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\" fill=\"white\"/>
                    </svg>
                </span>
                </a>
                <a href=\"#patches\" class=\"CategoryMainBanner-SubTitle-Item\">
                    patches
                    <span class=\"js-mobile\">
                    <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\" fill=\"white\"/>
                    </svg>
                </span>
                </a>
                <a href=\"#masks\" class=\"CategoryMainBanner-SubTitle-Item\">
                    masks
                    <span class=\"js-mobile\">
                    <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\" fill=\"white\"/>
                    </svg>
                </span>
                </a>


            </div>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" ></div>
    </div>


</div>

<style>



</style>


<script>






</script>", "/Users/iamk/git/darling/themes/demo/partials/category/category-main-banner.htm", "");
    }
}

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

/* /Users/iamk/git/darling/themes/demo/partials/category/subcategory-banner.htm */
class __TwigTemplate_98098765d533c21676e7cd6767c030c87f3aced979b36a472c5ec8f0c1e2d598 extends \Twig\Template
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
        echo "<div class=\"SubcategoryBanner\">
        <div class=\"SubcategoryBanner-Content-Container\" style=\"background: url(";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainCategoryBackground"] ?? null), 2, $this->source), "html", null, true);
        echo "); background-size: 100%; background-repeat: no-repeat;\">
            <p class=\"SubcategoryBanner-SubTitle\">";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categorySubtitle"] ?? null), 3, $this->source), "html", null, true);
        echo "<span class=\"SubcategoryBanner-SubTitle-Marked\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categorySubtitleMarked"] ?? null), 3, $this->source), "html", null, true);
        echo "</span></p>
        </div>
</div>

<style>

    .SubcategoryBanner-SubTitle-Marked {
        color: #EA028A;
    }

    .SubcategoryBanner {
        width: 100%;
        height: 420px;
    }

    .SubcategoryBanner-Content-Container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
    }

    .SubcategoryBanner-SubTitle {
        padding: 60px;
        font-size: 50px;
        line-height: 65px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
        width: 60%;
    }

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/subcategory-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryBanner\">
        <div class=\"SubcategoryBanner-Content-Container\" style=\"background: url({{ mainCategoryBackground }}); background-size: 100%; background-repeat: no-repeat;\">
            <p class=\"SubcategoryBanner-SubTitle\">{{ categorySubtitle }}<span class=\"SubcategoryBanner-SubTitle-Marked\">{{ categorySubtitleMarked }}</span></p>
        </div>
</div>

<style>

    .SubcategoryBanner-SubTitle-Marked {
        color: #EA028A;
    }

    .SubcategoryBanner {
        width: 100%;
        height: 420px;
    }

    .SubcategoryBanner-Content-Container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
    }

    .SubcategoryBanner-SubTitle {
        padding: 60px;
        font-size: 50px;
        line-height: 65px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
        width: 60%;
    }

</style>", "/Users/iamk/git/darling/themes/demo/partials/category/subcategory-banner.htm", "");
    }
}

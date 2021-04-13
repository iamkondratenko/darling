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

/* /Users/iamk/git/darling/themes/demo/partials/category/banner-wiget.htm */
class __TwigTemplate_7b87047f4b9c3175ceae568ac1b3d1ed4e8a68ed61d40a8b5622fda8bf2338ea extends \Twig\Template
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
        $filters = array("media" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"SubcategoryListing-ItemCard\">
        <div class=\"SubcategoryListing-ItemCard-Holder\">
            <div class=\"SubcategoryListing-ItemCard-ImageHolderWrapper\">
                <div class=\"SubcategoryListing-ItemCard-ImageHolder\">
                    <img style=\"padding: 20px;\" class=\"SubcategoryListing-ItemCard-Image\" src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "banner_picture", [], "any", false, false, true, 5), 5, $this->source));
        echo "\">
                </div>
            </div>
        </div>
</div>

<style>



</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/banner-wiget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryListing-ItemCard\">
        <div class=\"SubcategoryListing-ItemCard-Holder\">
            <div class=\"SubcategoryListing-ItemCard-ImageHolderWrapper\">
                <div class=\"SubcategoryListing-ItemCard-ImageHolder\">
                    <img style=\"padding: 20px;\" class=\"SubcategoryListing-ItemCard-Image\" src=\"{{data.banner_picture | media}}\">
                </div>
            </div>
        </div>
</div>

<style>



</style>", "/Users/iamk/git/darling/themes/demo/partials/category/banner-wiget.htm", "");
    }
}

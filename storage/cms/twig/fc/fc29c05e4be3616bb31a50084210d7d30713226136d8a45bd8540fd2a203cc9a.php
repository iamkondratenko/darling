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

/* /Users/alex/Documents/GitHub/darling/themes/demo/partials/category/card-wiget.htm */
class __TwigTemplate_98686776fd93540f2cd342500a7703c36fb2a4f602e39d5a2e0c92197497ef95 extends \Twig\Template
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
        $filters = array("escape" => 2, "media" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'media'],
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
    <a class=\"SubcategoryListing-ItemCard-Link jsCardWigetLink\" href=\"/product/";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "slug", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
        <div class=\"SubcategoryListing-ItemCard-Holder\">
            <div class=\"SubcategoryListing-ItemCard-ImageHolderWrapper\">
                <div class=\"SubcategoryListing-ItemCard-ImageHolder\">
                    <img class=\"SubcategoryListing-ItemCard-Image\" src=\"";
        // line 6
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "picture", [], "any", false, false, true, 6), 6, $this->source));
        echo "\">
                </div>
            </div>


            <div class=\"SubcategoryListing-ItemCard-Info\">
                <h2 class=\"SubcategoryListing-ItemCard-Title\">";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</h2>
                <p class=\"SubcategoryListing-ItemCard-Description\">";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "</p>
                <div class=\"SubcategoryListing-ItemCard-Price rus-currency\">";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "price", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo " ₽</div>
            </div>
        </div>


    </a>
</div>

<style>



</style>";
    }

    public function getTemplateName()
    {
        return "/Users/alex/Documents/GitHub/darling/themes/demo/partials/category/card-wiget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 14,  85 => 13,  81 => 12,  72 => 6,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryListing-ItemCard\">
    <a class=\"SubcategoryListing-ItemCard-Link jsCardWigetLink\" href=\"/product/{{data.slug}}\">
        <div class=\"SubcategoryListing-ItemCard-Holder\">
            <div class=\"SubcategoryListing-ItemCard-ImageHolderWrapper\">
                <div class=\"SubcategoryListing-ItemCard-ImageHolder\">
                    <img class=\"SubcategoryListing-ItemCard-Image\" src=\"{{data.picture | media}}\">
                </div>
            </div>


            <div class=\"SubcategoryListing-ItemCard-Info\">
                <h2 class=\"SubcategoryListing-ItemCard-Title\">{{data.title}}</h2>
                <p class=\"SubcategoryListing-ItemCard-Description\">{{data.description}}</p>
                <div class=\"SubcategoryListing-ItemCard-Price rus-currency\">{{data.price}} ₽</div>
            </div>
        </div>


    </a>
</div>

<style>



</style>", "/Users/alex/Documents/GitHub/darling/themes/demo/partials/category/card-wiget.htm", "");
    }
}

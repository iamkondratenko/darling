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

/* /Users/iamk/git/darling/themes/demo/partials/category/card-wiget.htm */
class __TwigTemplate_06b4f972a4842fa9d3bb50feaa09867a1593232b5c5717cf7e37c68fa81c5cec extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
    <a class=\"SubcategoryListing-ItemCard-Link\" href=\"#\">
        <div class=\"SubcategoryListing-ItemCard-Holder\">
            <div class=\"SubcategoryListing-ItemCard-ImageHolder\">
                <img class=\"SubcategoryListing-ItemCard-Image\" src=\"http://darling:8888/storage/app/media/mask.png\">
            </div>

            <div class=\"SubcategoryListing-ItemCard-Info\">
                <h2 class=\"SubcategoryListing-ItemCard-Title\">power nap</h2>
                <p class=\"SubcategoryListing-ItemCard-Description\">Super moisture embo hydrogel face mask with immediate 8-hour sleep effect</p>
                <div class=\"SubcategoryListing-ItemCard-Price\">\$ 8.5</div>
            </div>
        </div>


    </a>
</div>

<style>

    .SubcategoryListing-ItemCard {
        width: 23%;
        text-align: center;
        color: #222;
        text-transform: uppercase;
    }

    h2.SubcategoryListing-ItemCard-Title {
        color: inherit;
        font-size: 25px;
        font-weight: 500;
        color: #222;
    }

    p.SubcategoryListing-ItemCard-Description {
        color: #222;
        text-transform: none;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
    }

    .SubcategoryListing-ItemCard-Price {
        color: #222;
        font-size: 25px;
        font-weight: 400;
    }

    .SubcategoryListing-ItemCard-ImageHolder {
        width: 100%;
    }

    img.SubcategoryListing-ItemCard-Image {
        width: 100%;
    }

    a.SubcategoryListing-ItemCard-Link {
        text-decoration: none;
    }

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/card-wiget.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryListing-ItemCard\">
    <a class=\"SubcategoryListing-ItemCard-Link\" href=\"#\">
        <div class=\"SubcategoryListing-ItemCard-Holder\">
            <div class=\"SubcategoryListing-ItemCard-ImageHolder\">
                <img class=\"SubcategoryListing-ItemCard-Image\" src=\"http://darling:8888/storage/app/media/mask.png\">
            </div>

            <div class=\"SubcategoryListing-ItemCard-Info\">
                <h2 class=\"SubcategoryListing-ItemCard-Title\">power nap</h2>
                <p class=\"SubcategoryListing-ItemCard-Description\">Super moisture embo hydrogel face mask with immediate 8-hour sleep effect</p>
                <div class=\"SubcategoryListing-ItemCard-Price\">\$ 8.5</div>
            </div>
        </div>


    </a>
</div>

<style>

    .SubcategoryListing-ItemCard {
        width: 23%;
        text-align: center;
        color: #222;
        text-transform: uppercase;
    }

    h2.SubcategoryListing-ItemCard-Title {
        color: inherit;
        font-size: 25px;
        font-weight: 500;
        color: #222;
    }

    p.SubcategoryListing-ItemCard-Description {
        color: #222;
        text-transform: none;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
    }

    .SubcategoryListing-ItemCard-Price {
        color: #222;
        font-size: 25px;
        font-weight: 400;
    }

    .SubcategoryListing-ItemCard-ImageHolder {
        width: 100%;
    }

    img.SubcategoryListing-ItemCard-Image {
        width: 100%;
    }

    a.SubcategoryListing-ItemCard-Link {
        text-decoration: none;
    }

</style>", "/Users/iamk/git/darling/themes/demo/partials/category/card-wiget.htm", "");
    }
}

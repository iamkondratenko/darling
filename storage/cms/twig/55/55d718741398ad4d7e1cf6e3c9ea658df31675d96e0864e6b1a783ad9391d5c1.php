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
        $filters = array("escape" => 2, "media" => 5);
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
    <a class=\"SubcategoryListing-ItemCard-Link\" href=\"/product/";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "slug", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\">
        <div class=\"SubcategoryListing-ItemCard-Holder\">
            <div class=\"SubcategoryListing-ItemCard-ImageHolder\">
                <img class=\"SubcategoryListing-ItemCard-Image\" src=\"";
        // line 5
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "picture", [], "any", false, false, true, 5), 5, $this->source));
        echo "\">
            </div>


            <div class=\"SubcategoryListing-ItemCard-Info\">
                <h2 class=\"SubcategoryListing-ItemCard-Title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</h2>
                <p class=\"SubcategoryListing-ItemCard-Description\">";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "description", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</p>
                <div class=\"SubcategoryListing-ItemCard-Price rus-currency\">";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "price", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</div>
            </div>
        </div>


    </a>
</div>

<style>

    .rus-currency::after {
        content: ' ₽';
        white-space: pre;
        position: absolute;
    }


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

    @media screen and (max-width: 768px) {
        .SubcategoryListing-ItemCard {
            width: 42%;
            text-align: center;
            color: #222;
            text-transform: uppercase;
        }
    }

    @media screen and (max-width: 375px) {
        .SubcategoryListing-ItemCard {
            width: 100%;
            text-align: center;
            color: #222;
            text-transform: uppercase;
            margin-bottom: 50px;
        }

    }


</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/card-wiget.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  83 => 11,  79 => 10,  71 => 5,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryListing-ItemCard\">
    <a class=\"SubcategoryListing-ItemCard-Link\" href=\"/product/{{data.slug}}\">
        <div class=\"SubcategoryListing-ItemCard-Holder\">
            <div class=\"SubcategoryListing-ItemCard-ImageHolder\">
                <img class=\"SubcategoryListing-ItemCard-Image\" src=\"{{data.picture | media}}\">
            </div>


            <div class=\"SubcategoryListing-ItemCard-Info\">
                <h2 class=\"SubcategoryListing-ItemCard-Title\">{{data.title}}</h2>
                <p class=\"SubcategoryListing-ItemCard-Description\">{{data.description}}</p>
                <div class=\"SubcategoryListing-ItemCard-Price rus-currency\">{{data.price}}</div>
            </div>
        </div>


    </a>
</div>

<style>

    .rus-currency::after {
        content: ' ₽';
        white-space: pre;
        position: absolute;
    }


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

    @media screen and (max-width: 768px) {
        .SubcategoryListing-ItemCard {
            width: 42%;
            text-align: center;
            color: #222;
            text-transform: uppercase;
        }
    }

    @media screen and (max-width: 375px) {
        .SubcategoryListing-ItemCard {
            width: 100%;
            text-align: center;
            color: #222;
            text-transform: uppercase;
            margin-bottom: 50px;
        }

    }


</style>", "/Users/iamk/git/darling/themes/demo/partials/category/card-wiget.htm", "");
    }
}

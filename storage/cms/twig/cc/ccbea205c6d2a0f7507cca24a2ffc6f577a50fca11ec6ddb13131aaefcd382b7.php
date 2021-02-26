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

/* /Users/iamk/git/darling/themes/demo/partials/category/subcategory-listing.htm */
class __TwigTemplate_ae4f1e99046c454d2fa5fdca699c0e6090dc89e02c758465969269d1b4643e3b extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 16, "if" => 17, "partial" => 18);
        $filters = array("escape" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if', 'partial'],
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["subcategoryListing"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["subcategoryListing"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["subcategoryListing"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["subcategoryListing"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["subcategoryListing"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["subcategoryListing"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        echo "

<div class=\"SubcategoryListing\">
    <div class=\"SubcategoryListing-Title\">";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subcategoryTitle"] ?? null), 10, $this->source), "html", null, true);
        echo "<span class=\"SubcategoryListing-Title-Asterisk\">*</span></div>
    <div class=\"SubcategoryListing-Items\">




        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 17
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "subcategory", [], "any", false, false, true, 17) == ($context["subcategorySlug"] ?? null))) {
                // line 18
                echo "        ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['data'] = $context["record"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/card-wiget"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 19
                echo "        ";
            }
            // line 20
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 21
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 21, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "


    </div>
</div>

<style>

    section#layout-content {
        overflow-x: hidden;
    }

    .SubcategoryListing {
        width: 82%;
        margin: 0 auto;
    }

    .SubcategoryListing-Items {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 20px 0 120px;
    }

    .SubcategoryListing-Title {
        font-size: 100px;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
        line-height: 1;
        margin: 80px 0 40px;
    }

    .SubcategoryListing-Title-Asterisk {
        color: #EA028A;
    }


    @media screen and (max-width: 1919px) {
        .SubcategoryListing-Title {
            font-size: 90px;
        }
    }

    @media screen and (max-width: 1365px) {
        .SubcategoryListing-Title {
            font-size: 80px;
        }
    }


    @media screen and (max-width: 767px) {

        .SubcategoryListing {
            width: 72%;
            margin: 0 auto;
        }

        .SubcategoryListing-Items {
            padding: 20px 0 40px;
        }
        .SubcategoryListing-Items {
            padding: 60px 0 40px;
        }
    }

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/subcategory-listing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 23,  110 => 21,  105 => 20,  102 => 19,  96 => 18,  93 => 17,  88 => 16,  79 => 10,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = subcategoryListing.records %}
{% set displayColumn = subcategoryListing.displayColumn %}
{% set noRecordsMessage = subcategoryListing.noRecordsMessage %}
{% set detailsPage = subcategoryListing.detailsPage %}
{% set detailsKeyColumn = subcategoryListing.detailsKeyColumn %}
{% set detailsUrlParameter = subcategoryListing.detailsUrlParameter %}


<div class=\"SubcategoryListing\">
    <div class=\"SubcategoryListing-Title\">{{subcategoryTitle}}<span class=\"SubcategoryListing-Title-Asterisk\">*</span></div>
    <div class=\"SubcategoryListing-Items\">




        {% for record in records %}
        {% if record.subcategory == subcategorySlug %}
        {% partial \"category/card-wiget\" data=record %}
        {% endif %}
    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}



    </div>
</div>

<style>

    section#layout-content {
        overflow-x: hidden;
    }

    .SubcategoryListing {
        width: 82%;
        margin: 0 auto;
    }

    .SubcategoryListing-Items {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 20px 0 120px;
    }

    .SubcategoryListing-Title {
        font-size: 100px;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
        line-height: 1;
        margin: 80px 0 40px;
    }

    .SubcategoryListing-Title-Asterisk {
        color: #EA028A;
    }


    @media screen and (max-width: 1919px) {
        .SubcategoryListing-Title {
            font-size: 90px;
        }
    }

    @media screen and (max-width: 1365px) {
        .SubcategoryListing-Title {
            font-size: 80px;
        }
    }


    @media screen and (max-width: 767px) {

        .SubcategoryListing {
            width: 72%;
            margin: 0 auto;
        }

        .SubcategoryListing-Items {
            padding: 20px 0 40px;
        }
        .SubcategoryListing-Items {
            padding: 60px 0 40px;
        }
    }

</style>", "/Users/iamk/git/darling/themes/demo/partials/category/subcategory-listing.htm", "");
    }
}

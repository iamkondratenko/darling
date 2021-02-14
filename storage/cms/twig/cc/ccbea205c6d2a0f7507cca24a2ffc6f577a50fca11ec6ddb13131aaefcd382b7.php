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
        $tags = array("partial" => 4);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo "<div class=\"SubcategoryListing\">
    <div class=\"SubcategoryListing-Title\">Pads<span class=\"SubcategoryListing-Title-Asterisk\">*</span></div>
    <div class=\"SubcategoryListing-Items\">
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/card-wiget"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/card-wiget"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/card-wiget"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
</div>

<style>
    .SubcategoryListing {
        width: 80%;
        margin: 0 auto;
    }
    .SubcategoryListing-Items {
        display: flex;
        justify-content: space-between;
    }
    .SubcategoryListing-Title {
        font-size: 100px;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
        line-height: 1;
        margin: 80px 0 60px;
    }

    .SubcategoryListing-Title-Asterisk {
        color: #EA028A;
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
        return array (  81 => 7,  76 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryListing\">
    <div class=\"SubcategoryListing-Title\">Pads<span class=\"SubcategoryListing-Title-Asterisk\">*</span></div>
    <div class=\"SubcategoryListing-Items\">
        {% partial \"category/card-wiget\" %}
        {% partial \"category/card-wiget\" %}
        {% partial \"category/card-wiget\" %}
    </div>
</div>

<style>
    .SubcategoryListing {
        width: 80%;
        margin: 0 auto;
    }
    .SubcategoryListing-Items {
        display: flex;
        justify-content: space-between;
    }
    .SubcategoryListing-Title {
        font-size: 100px;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
        line-height: 1;
        margin: 80px 0 60px;
    }

    .SubcategoryListing-Title-Asterisk {
        color: #EA028A;
    }

</style>", "/Users/iamk/git/darling/themes/demo/partials/category/subcategory-listing.htm", "");
    }
}

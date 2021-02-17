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

/* /Users/iamk/git/darling/themes/demo/partials/category/category.htm */
class __TwigTemplate_13a139569fca4b715834fa368b811a2db4e48b6f3071f7e5af6c86a51da388b1 extends \Twig\Template
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
        $tags = array("partial" => 1);
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
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['categorySubtitle'] = ($context["categorySubtitle"] ?? null)        ;
        $context['__cms_partial_params']['categorySubtitleMarked'] = ($context["categorySubtitleMarked"] ?? null)        ;
        $context['__cms_partial_params']['mainCategoryBackgrounds'] = ($context["mainCategoryBackgrounds"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/subcategory-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['subcategoryTitle'] = ($context["subcategoryTitle"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/subcategory-listing"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 3,  69 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"category/subcategory-banner\" categorySubtitle=categorySubtitle categorySubtitleMarked=categorySubtitleMarked mainCategoryBackgrounds=mainCategoryBackgrounds %}

{% partial \"category/subcategory-listing\" subcategoryTitle=subcategoryTitle %}", "/Users/iamk/git/darling/themes/demo/partials/category/category.htm", "");
    }
}

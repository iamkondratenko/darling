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

/* /Users/iamk/git/darling/themes/demo/pages/category.htm */
class __TwigTemplate_db5d73623d5131759a76e8e365561fab6d6dbde215f37284b3b42483978c9e0d extends \Twig\Template
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
        $tags = array("set" => 1, "if" => 5, "partial" => 9, "for" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'partial', 'for'],
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "


    ";
            // line 9
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['categoryTitle'] = twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "title", [], "any", false, false, true, 9)            ;
            $context['__cms_partial_params']['categorySubtitle'] = "pads / patches / masks"            ;
            $context['__cms_partial_params']['mainCategoryBackground'] = twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "main_banner", [], "any", false, false, true, 9)            ;
            $context['__cms_partial_params']['mainCategoryBackgroundMobile'] = twig_get_attribute($this->env, $this->source,             // line 10
($context["record"] ?? null), "main_banner_mobile", [], "any", false, false, true, 10)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-main-banner"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 11
            echo "

";
        }
        // line 14
        echo "
";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "subcategory", [], "any", false, false, true, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 16
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['subcategoryTitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_title", [], "any", false, false, true, 16)            ;
            $context['__cms_partial_params']['categorySubtitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_description", [], "any", false, false, true, 16)            ;
            $context['__cms_partial_params']['categorySubtitleMarked'] = "#youaredarling"            ;
            $context['__cms_partial_params']['mainCategoryBackground'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner", [], "any", false, false, true, 16)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  95 => 15,  92 => 14,  87 => 11,  83 => 10,  78 => 9,  73 => 6,  71 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = Category.record %}
{% set displayColumn = Category.displayColumn %}
{% set notFoundMessage = Category.notFoundMessage %}

{% if record %}



    {% partial \"category/category-main-banner\" categoryTitle=record.title categorySubtitle='pads / patches / masks' mainCategoryBackground=record.main_banner
mainCategoryBackgroundMobile=record.main_banner_mobile%}


{% endif %}

{% for subcategory in record.subcategory %}
    {% partial \"category/category\" subcategoryTitle=subcategory.subcategory_title categorySubtitle=subcategory.subcategory_description categorySubtitleMarked='#youaredarling' mainCategoryBackground=subcategory.subcategory_banner %}
{% endfor %}", "/Users/iamk/git/darling/themes/demo/pages/category.htm", "");
    }
}

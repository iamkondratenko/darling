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

/* /Users/iamk/git/darling/themes/demo/pages/home.htm */
class __TwigTemplate_9fe354c22b8057b1dce1d14bd501f7c86996719a63996941d58f211dd2157532 extends \Twig\Template
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
        $tags = array("partial" => 1, "set" => 6, "for" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'for'],
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/main-banner.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header-fixed.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "


";
        // line 6
        $context["recordMakeup"] = twig_get_attribute($this->env, $this->source, ($context["CategoryMakeup"] ?? null), "record", [], "any", false, false, true, 6);
        // line 7
        $context["recordSkinCare"] = twig_get_attribute($this->env, $this->source, ($context["CategorySkinCare"] ?? null), "record", [], "any", false, false, true, 7);
        // line 8
        echo "


";
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['subcategoryMenu'] = twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "subcategory", [], "any", false, false, true, 11)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header-fixed.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "
<div id=\"skin-care\" class=\"ProductContainer\" style=\"
    margin-top: 100vh; display: none;
\">
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordSkinCare"] ?? null), "subcategory", [], "any", false, false, true, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 17
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['subcategoryTitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_title", [], "any", false, false, true, 17)            ;
            $context['__cms_partial_params']['subcategorySlug'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "slug", [], "any", false, false, true, 17)            ;
            $context['__cms_partial_params']['categorySubtitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_description", [], "any", false, false, true, 17)            ;
            $context['__cms_partial_params']['mainSubcategoryBackground'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner", [], "any", false, false, true, 17)            ;
            $context['__cms_partial_params']['mainSubcategoryBackgroundTablet'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner_tabet", [], "any", false, false, true, 17)            ;
            $context['__cms_partial_params']['mainSubcategoryBackgroundMobile'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner_mobile", [], "any", false, false, true, 17)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</div>

<div id=\"makeup\" class=\"ProductContainer\" style=\"
    margin-top: 100vh; display: none;
\">
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordMakeup"] ?? null), "subcategory", [], "any", false, false, true, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 25
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['subcategoryTitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_title", [], "any", false, false, true, 25)            ;
            $context['__cms_partial_params']['subcategorySlug'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "slug", [], "any", false, false, true, 25)            ;
            $context['__cms_partial_params']['categorySubtitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_description", [], "any", false, false, true, 25)            ;
            $context['__cms_partial_params']['mainSubcategoryBackground'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner", [], "any", false, false, true, 25)            ;
            $context['__cms_partial_params']['mainSubcategoryBackgroundTablet'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner_tabet", [], "any", false, false, true, 25)            ;
            $context['__cms_partial_params']['mainSubcategoryBackgroundMobile'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner_mobile", [], "any", false, false, true, 25)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>


<script>
    function openCategory (slug) {
        let categoryNode = document.getElementById(slug)
        categoryNode.style.display = 'block'
        history.pushState(null, null, 'category/' + slug)
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 27,  135 => 26,  124 => 25,  120 => 24,  113 => 19,  99 => 17,  95 => 16,  89 => 12,  84 => 11,  79 => 8,  77 => 7,  75 => 6,  70 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"site/main-banner.htm\" %}
{% partial 'site/header-fixed.htm' %}



{% set recordMakeup = CategoryMakeup.record %}
{% set recordSkinCare = CategorySkinCare.record %}



{% partial 'site/header-fixed.htm' subcategoryMenu=record.subcategory %}

<div id=\"skin-care\" class=\"ProductContainer\" style=\"
    margin-top: 100vh; display: none;
\">
{% for subcategory in recordSkinCare.subcategory %}
{% partial \"category/category\" subcategoryTitle=subcategory.subcategory_title subcategorySlug=subcategory.slug categorySubtitle=subcategory.subcategory_description mainSubcategoryBackground=subcategory.subcategory_banner mainSubcategoryBackgroundTablet=subcategory.subcategory_banner_tabet mainSubcategoryBackgroundMobile=subcategory.subcategory_banner_mobile %}
{% endfor %}
</div>

<div id=\"makeup\" class=\"ProductContainer\" style=\"
    margin-top: 100vh; display: none;
\">
    {% for subcategory in recordMakeup.subcategory %}
    {% partial \"category/category\" subcategoryTitle=subcategory.subcategory_title subcategorySlug=subcategory.slug categorySubtitle=subcategory.subcategory_description mainSubcategoryBackground=subcategory.subcategory_banner mainSubcategoryBackgroundTablet=subcategory.subcategory_banner_tabet mainSubcategoryBackgroundMobile=subcategory.subcategory_banner_mobile %}
    {% endfor %}
</div>


<script>
    function openCategory (slug) {
        let categoryNode = document.getElementById(slug)
        categoryNode.style.display = 'block'
        history.pushState(null, null, 'category/' + slug)
    }
</script>", "/Users/iamk/git/darling/themes/demo/pages/home.htm", "");
    }
}

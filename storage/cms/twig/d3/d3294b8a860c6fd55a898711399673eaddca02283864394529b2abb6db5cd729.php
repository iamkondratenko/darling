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
        $context['__cms_partial_params']['categoryTitle'] = "Skin care"        ;
        $context['__cms_partial_params']['categorySubtitle'] = "pads / patches / masks"        ;
        $context['__cms_partial_params']['mainCategoryBackground'] = "http://darling:8888/storage/app/media/categoryBanner.jpg"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category-main-banner"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['categorySubtitle'] = "yes. but no. but yes. "        ;
        $context['__cms_partial_params']['categorySubtitleMarked'] = "#youaredarling"        ;
        $context['__cms_partial_params']['mainCategoryBackground'] = "http://darling:8888/storage/app/media/pads.jpg"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
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
        return array (  72 => 3,  69 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"category/category-main-banner\" categoryTitle='Skin care' categorySubtitle='pads / patches / masks' mainCategoryBackground='http://darling:8888/storage/app/media/categoryBanner.jpg' %}

{% partial \"category/category\" categorySubtitle='yes. but no. but yes. ' categorySubtitleMarked='#youaredarling' mainCategoryBackground='http://darling:8888/storage/app/media/pads.jpg' %}", "/Users/iamk/git/darling/themes/demo/pages/category.htm", "");
    }
}

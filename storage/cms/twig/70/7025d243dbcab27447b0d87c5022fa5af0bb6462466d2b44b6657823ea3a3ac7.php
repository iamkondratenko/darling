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

/* /Users/iamk/git/darling/themes/demo/partials/category/subcategory-banner.htm */
class __TwigTemplate_98098765d533c21676e7cd6767c030c87f3aced979b36a472c5ec8f0c1e2d598 extends \Twig\Template
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
        $tags = array("for" => 4, "if" => 5);
        $filters = array("media" => 2, "escape" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['media', 'escape'],
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
        echo "<div class=\"SubcategoryBanner\">
        <div class=\"SubcategoryBanner-Content-Container\" style=\"background: url(";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainCategoryBackground"] ?? null), 2, $this->source));
        echo "); background-size: 100%; background-repeat: no-repeat;\">
            <p class=\"SubcategoryBanner-SubTitle\">
                ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorySubtitle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 5
            echo "                <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description_marked", [], "any", false, false, true, 5) == true)) {
                echo " SubcategoryBanner-SubTitle-Marked ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description_text", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "            </p>
        </div>
</div>

<style>

    .SubcategoryBanner-SubTitle-Marked {
        color: #EA028A;
    }

    .SubcategoryBanner {
        width: 100%;
        height: 420px;
    }

    .SubcategoryBanner-Content-Container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
    }

    .SubcategoryBanner-SubTitle {
        padding: 60px;
        font-size: 50px;
        line-height: 65px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
        width: 50%;
    }

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/subcategory-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 7,  74 => 5,  70 => 4,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryBanner\">
        <div class=\"SubcategoryBanner-Content-Container\" style=\"background: url({{ mainCategoryBackground | media }}); background-size: 100%; background-repeat: no-repeat;\">
            <p class=\"SubcategoryBanner-SubTitle\">
                {% for description in categorySubtitle %}
                <span class=\"{% if description.subcategory_description_marked == true %} SubcategoryBanner-SubTitle-Marked {% endif %}\">{{ description.subcategory_description_text }}</span>
                {% endfor %}
            </p>
        </div>
</div>

<style>

    .SubcategoryBanner-SubTitle-Marked {
        color: #EA028A;
    }

    .SubcategoryBanner {
        width: 100%;
        height: 420px;
    }

    .SubcategoryBanner-Content-Container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
    }

    .SubcategoryBanner-SubTitle {
        padding: 60px;
        font-size: 50px;
        line-height: 65px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
        width: 50%;
    }

</style>", "/Users/iamk/git/darling/themes/demo/partials/category/subcategory-banner.htm", "");
    }
}

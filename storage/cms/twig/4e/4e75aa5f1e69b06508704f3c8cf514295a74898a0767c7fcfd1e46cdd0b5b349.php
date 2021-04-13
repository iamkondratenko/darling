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

/* /Users/alex/Documents/GitHub/darling/themes/demo/partials/category/subcategory-banner.htm */
class __TwigTemplate_1088befa5c8d6115ba9a91eaa05926523bd2f09bc5eaf96375621f189fdf5b1a extends \Twig\Template
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
        $tags = array("for" => 5, "if" => 6);
        $filters = array("escape" => 2, "media" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
        echo "<div class=\"SubcategoryBanner\">
    <div class=\"SubcategoryBanner-idLink\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subcategorySlug"] ?? null), 2, $this->source), "html", null, true);
        echo "\"></div>
    <div class=\"SubcategoryBanner-Content-Container\" style=\"background: url(";
        // line 3
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainSubcategoryBackground"] ?? null), 3, $this->source));
        echo "); background-size: cover; background-repeat: no-repeat;\">
        <p class=\"SubcategoryBanner-SubTitle\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorySubtitle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 6
            echo "            <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description_marked", [], "any", false, false, true, 6) == true)) {
                echo " SubcategoryBanner-SubTitle-Marked ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </p>
    </div>
    <div class=\"SubcategoryBanner-Content-ContainerTablet\" style=\"background: url(";
        // line 10
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainSubcategoryBackgroundTablet"] ?? null), 10, $this->source));
        echo "); background-size: cover; background-repeat: no-repeat;\">
        <p class=\"SubcategoryBanner-SubTitle\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorySubtitle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 13
            echo "            <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description_marked", [], "any", false, false, true, 13) == true)) {
                echo " SubcategoryBanner-SubTitle-Marked ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </p>
    </div>
    <div class=\"SubcategoryBanner-Content-ContainerMobile\" style=\"background: url(";
        // line 17
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainSubcategoryBackgroundMobile"] ?? null), 17, $this->source));
        echo "); background-size: cover; background-repeat: no-repeat;\">
        <h3 class=\"SubcategoryBanner-Title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subcategoryTitle"] ?? null), 18, $this->source), "html", null, true);
        echo "</h3>
        <p class=\"SubcategoryBanner-SubTitle\">
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorySubtitle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 21
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </p>
    </div>
</div>



<style>



</style>";
    }

    public function getTemplateName()
    {
        return "/Users/alex/Documents/GitHub/darling/themes/demo/partials/category/subcategory-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 23,  134 => 21,  130 => 20,  125 => 18,  121 => 17,  117 => 15,  104 => 13,  100 => 12,  95 => 10,  91 => 8,  78 => 6,  74 => 5,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryBanner\">
    <div class=\"SubcategoryBanner-idLink\" id=\"{{subcategorySlug}}\"></div>
    <div class=\"SubcategoryBanner-Content-Container\" style=\"background: url({{ mainSubcategoryBackground | media }}); background-size: cover; background-repeat: no-repeat;\">
        <p class=\"SubcategoryBanner-SubTitle\">
            {% for description in categorySubtitle %}
            <span class=\"{% if description.subcategory_description_marked == true %} SubcategoryBanner-SubTitle-Marked {% endif %}\">{{ description.subcategory_description }}</span>
            {% endfor %}
        </p>
    </div>
    <div class=\"SubcategoryBanner-Content-ContainerTablet\" style=\"background: url({{ mainSubcategoryBackgroundTablet | media }}); background-size: cover; background-repeat: no-repeat;\">
        <p class=\"SubcategoryBanner-SubTitle\">
            {% for description in categorySubtitle %}
            <span class=\"{% if description.subcategory_description_marked == true %} SubcategoryBanner-SubTitle-Marked {% endif %}\">{{ description.subcategory_description }}</span>
            {% endfor %}
        </p>
    </div>
    <div class=\"SubcategoryBanner-Content-ContainerMobile\" style=\"background: url({{ mainSubcategoryBackgroundMobile | media }}); background-size: cover; background-repeat: no-repeat;\">
        <h3 class=\"SubcategoryBanner-Title\">{{subcategoryTitle}}</h3>
        <p class=\"SubcategoryBanner-SubTitle\">
            {% for description in categorySubtitle %}
            <span>{{ description.subcategory_description }}</span>
            {% endfor %}
        </p>
    </div>
</div>



<style>



</style>", "/Users/alex/Documents/GitHub/darling/themes/demo/partials/category/subcategory-banner.htm", "");
    }
}

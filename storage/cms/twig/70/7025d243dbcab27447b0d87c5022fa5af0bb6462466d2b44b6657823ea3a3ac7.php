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
        $filters = array("escape" => 1, "media" => 2);
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
        echo "<div class=\"SubcategoryBanner\" id=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subcategorySlug"] ?? null), 1, $this->source), "html", null, true);
        echo "\">
    <div class=\"SubcategoryBanner-Content-Container\" style=\"background: url(";
        // line 2
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainSubcategoryBackground"] ?? null), 2, $this->source));
        echo "); background-size: 100%; background-repeat: no-repeat;\">
        <p class=\"SubcategoryBanner-SubTitle\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorySubtitle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 5
            echo "            <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description_marked", [], "any", false, false, true, 5) == true)) {
                echo " SubcategoryBanner-SubTitle-Marked ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </p>
    </div>
    <div class=\"SubcategoryBanner-Content-ContainerTablet\" style=\"background: url(";
        // line 9
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainSubcategoryBackgroundTablet"] ?? null), 9, $this->source));
        echo "); background-size: 100%; background-repeat: no-repeat;\">
        <p class=\"SubcategoryBanner-SubTitle\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorySubtitle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 12
            echo "            <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description_marked", [], "any", false, false, true, 12) == true)) {
                echo " SubcategoryBanner-SubTitle-Marked ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </p>
    </div>
    <div class=\"SubcategoryBanner-Content-ContainerMobile\" style=\"background: url(";
        // line 16
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["mainSubcategoryBackgroundMobile"] ?? null), 16, $this->source));
        echo "); background-size: 100%; background-repeat: no-repeat;\">
        <h3 class=\"SubcategoryBanner-Title\">";
        // line 17
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["subcategoryTitle"] ?? null), 17, $this->source), "html", null, true);
        echo "</h3>
        <p class=\"SubcategoryBanner-SubTitle\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorySubtitle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
            // line 20
            echo "            <span>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["description"], "subcategory_description", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </p>
    </div>
</div>



<style>

    .SubcategoryBanner-Content-ContainerTablet,
    .SubcategoryBanner-Content-ContainerMobile {
        display: none;
    }

    .SubcategoryBanner-SubTitle-Marked {
        color: #EA028A;
    }

    .SubcategoryBanner {
        width: 100%;
        min-height: 30vw;
    }

    .SubcategoryBanner-Content-Container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        min-height: 30vw;
    }

    .SubcategoryBanner-SubTitle {
        padding: 0 0 50px 9%;
        font-size: 50px;
        line-height: 65px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
        width: 100%;
        max-width: 900px;
        max-width: 930px;
        display: inline-block;
        box-sizing: content-box;
    }
    @media screen and (max-width: 1365px) {

        .SubcategoryBanner {
            width: 100%;
            /* height: 420px; */
            min-height: 65vw;
        }


        .SubcategoryBanner-Content-Container {
            display: none;
        }

        .SubcategoryBanner-Content-ContainerTablet {
            display: block;
            min-height: 65vw;
            align-items: flex-end;
            display: flex;
        }

        .SubcategoryBanner-SubTitle {
            font-size: 35px;
            line-height: 45px;
            width: 65%;
            display: inline-block;
        }
    }

    @media screen and (max-width: 767px) {
        .SubcategoryBanner-Content-Container,
        .SubcategoryBanner-Content-ContainerTablet{
            display: none !important;
        }

        .SubcategoryListing-Title {
            display: none;
        }

        h3.SubcategoryBanner-Title {
            font-size: 55px;
            color: white;
            text-transform: uppercase;
            text-align: center;
            font-weight: 700;
        }

        .SubcategoryBanner-Title::after {
            content: '*';
            position: absolute;
            color: #EA028A;
        }

        .SubcategoryBanner-SubTitle {
            font-size: 20px;
            line-height: 26px;
            width: auto;
            padding: 0 30px 30px;
            text-align: center;
            min-height: auto;
            display: inline-block;
        }

        .SubcategoryBanner-Content-ContainerMobile {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 120vw;
            padding: 30px 45px;
        }
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
        return array (  141 => 22,  132 => 20,  128 => 19,  123 => 17,  119 => 16,  115 => 14,  102 => 12,  98 => 11,  93 => 9,  89 => 7,  76 => 5,  72 => 4,  67 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"SubcategoryBanner\" id=\"{{subcategorySlug}}\">
    <div class=\"SubcategoryBanner-Content-Container\" style=\"background: url({{ mainSubcategoryBackground | media }}); background-size: 100%; background-repeat: no-repeat;\">
        <p class=\"SubcategoryBanner-SubTitle\">
            {% for description in categorySubtitle %}
            <span class=\"{% if description.subcategory_description_marked == true %} SubcategoryBanner-SubTitle-Marked {% endif %}\">{{ description.subcategory_description }}</span>
            {% endfor %}
        </p>
    </div>
    <div class=\"SubcategoryBanner-Content-ContainerTablet\" style=\"background: url({{ mainSubcategoryBackgroundTablet | media }}); background-size: 100%; background-repeat: no-repeat;\">
        <p class=\"SubcategoryBanner-SubTitle\">
            {% for description in categorySubtitle %}
            <span class=\"{% if description.subcategory_description_marked == true %} SubcategoryBanner-SubTitle-Marked {% endif %}\">{{ description.subcategory_description }}</span>
            {% endfor %}
        </p>
    </div>
    <div class=\"SubcategoryBanner-Content-ContainerMobile\" style=\"background: url({{ mainSubcategoryBackgroundMobile | media }}); background-size: 100%; background-repeat: no-repeat;\">
        <h3 class=\"SubcategoryBanner-Title\">{{subcategoryTitle}}</h3>
        <p class=\"SubcategoryBanner-SubTitle\">
            {% for description in categorySubtitle %}
            <span>{{ description.subcategory_description }}</span>
            {% endfor %}
        </p>
    </div>
</div>



<style>

    .SubcategoryBanner-Content-ContainerTablet,
    .SubcategoryBanner-Content-ContainerMobile {
        display: none;
    }

    .SubcategoryBanner-SubTitle-Marked {
        color: #EA028A;
    }

    .SubcategoryBanner {
        width: 100%;
        min-height: 30vw;
    }

    .SubcategoryBanner-Content-Container {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: flex-start;
        min-height: 30vw;
    }

    .SubcategoryBanner-SubTitle {
        padding: 0 0 50px 9%;
        font-size: 50px;
        line-height: 65px;
        text-transform: uppercase;
        color: #fff;
        font-weight: bold;
        width: 100%;
        max-width: 900px;
        max-width: 930px;
        display: inline-block;
        box-sizing: content-box;
    }
    @media screen and (max-width: 1365px) {

        .SubcategoryBanner {
            width: 100%;
            /* height: 420px; */
            min-height: 65vw;
        }


        .SubcategoryBanner-Content-Container {
            display: none;
        }

        .SubcategoryBanner-Content-ContainerTablet {
            display: block;
            min-height: 65vw;
            align-items: flex-end;
            display: flex;
        }

        .SubcategoryBanner-SubTitle {
            font-size: 35px;
            line-height: 45px;
            width: 65%;
            display: inline-block;
        }
    }

    @media screen and (max-width: 767px) {
        .SubcategoryBanner-Content-Container,
        .SubcategoryBanner-Content-ContainerTablet{
            display: none !important;
        }

        .SubcategoryListing-Title {
            display: none;
        }

        h3.SubcategoryBanner-Title {
            font-size: 55px;
            color: white;
            text-transform: uppercase;
            text-align: center;
            font-weight: 700;
        }

        .SubcategoryBanner-Title::after {
            content: '*';
            position: absolute;
            color: #EA028A;
        }

        .SubcategoryBanner-SubTitle {
            font-size: 20px;
            line-height: 26px;
            width: auto;
            padding: 0 30px 30px;
            text-align: center;
            min-height: auto;
            display: inline-block;
        }

        .SubcategoryBanner-Content-ContainerMobile {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            min-height: 120vw;
            padding: 30px 45px;
        }
    }

</style>", "/Users/iamk/git/darling/themes/demo/partials/category/subcategory-banner.htm", "");
    }
}

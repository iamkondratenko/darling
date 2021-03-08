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

/* /Users/iamk/git/darling/themes/demo/partials/site/menu-drawer.htm */
class __TwigTemplate_41361ef4339a78a9c3208c3d6f5c62d7242e6045a626e6ca30a0958dc6336f08 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 42, "if" => 45);
        $filters = array("escape" => 50);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "noRecordsMessage", [], "any", false, false, true, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "detailsPage", [], "any", false, false, true, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 6);
        // line 7
        echo "



";
        // line 11
        $context["recordsProductList"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "records", [], "any", false, false, true, 11);
        // line 12
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "displayColumn", [], "any", false, false, true, 12);
        // line 13
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 13);
        // line 14
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsPage", [], "any", false, false, true, 14);
        // line 15
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 15);
        // line 16
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["productList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 16);
        // line 17
        echo "
";
        // line 18
        $context["countSubcategory"] = 0;
        // line 19
        echo "


<div class=\"MainMenuDrawer\">
    <div class=\"SubNavigationMenu SubNavigationMenu-Fixed\">
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a href=\"#\" class=\"SubNavigationMenu-LanguageItem LanguageItem-dark LanguageItem-active\" onclick=\"console.log('sdfsd')\">ENG</a>
            <a href=\"#\" class=\"SubNavigationMenu-LanguageItem LanguageItem-dark\" onclick=\"console.log('sdfsd')\">RUS</a>
        </div>
        <div class=\"SubNavigationMenu-ScrollDown\">
            <svg width=\"27\" height=\"14\" viewBox=\"0 0 27 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 3.60039L2.4 0.400391L13.2 8.50039L24 0.400391L26.4 3.60039L13.2 13.5004L0 3.60039Z\" fill=\"white\"/>
            </svg>

        </div>
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\"></a>
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\"></a>
        </div>
    </div>
    <div class=\"MainMenuDrawer-Items\">


    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 43
            echo "        ";
            $context["count"] = 0;
            // line 44
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recordsProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recordProductItem"]) {
                // line 45
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, $context["recordProductItem"], "category", [], "any", false, false, true, 45) == twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 45))) {
                    // line 46
                    echo "                ";
                    $context["count"] = (($context["count"] ?? null) + 1);
                    // line 47
                    echo "            ";
                }
                // line 48
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recordProductItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "        <div class=\"MainMenuDrawer-Item\">
            <div class=\"MainMenuDrawer-Item-Category\">";
            // line 50
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "</div>
            <div class=\"MainMenuDrawer-Item-Subcategories\">
                <a  onclick=\"goTo('/category/";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "')\" class=\"MainMenuDrawer-Item-Subcategory\">All products
                    <sup>
                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null), 54, $this->source), "html", null, true);
            echo "
                    </sup></a>
                ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "subcategory", [], "any", false, false, true, 56));
            foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                // line 57
                echo "                ";
                $context["countSubcategory"] = 0;
                // line 58
                echo "                    <a onclick=\"goTo('/category/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "/#";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menuItem"], "slug", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "')\" class=\"MainMenuDrawer-Item-Subcategory\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menuItem"], "subcategory_title", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "
                        <sup>
                            ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["recordsProductList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["recordProductItem"]) {
                    // line 61
                    echo "                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["menuItem"], "slug", [], "any", false, false, true, 61) == twig_get_attribute($this->env, $this->source, $context["recordProductItem"], "subcategory", [], "any", false, false, true, 61))) {
                        // line 62
                        echo "                                    ";
                        $context["countSubcategory"] = (($context["countSubcategory"] ?? null) + 1);
                        // line 63
                        echo "                                ";
                    }
                    // line 64
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recordProductItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "
                            ";
                // line 66
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["countSubcategory"] ?? null), 66, $this->source), "html", null, true);
                echo "
                        </sup></a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
        
    </div>
</div>

<style>




</style>


<script>



    let menuCategoryList = document.querySelectorAll('.MainMenuDrawer-Item');


    function goTo(link) {
        window.location = link
        openMenuHandler()
    }

    function clearActiveSubmenu() {
        for (let i = 0; i < menuCategoryList.length; i++) {
            menuCategoryList[i].querySelector('.MainMenuDrawer-Item-Subcategories').style.height = '0px'
            menuCategoryList[i].classList.remove('subCategoryIsActive')
        }
    }


    for (let i = 0; i < menuCategoryList.length; i++) {
        menuCategoryList[i].addEventListener(\"click\",
            function (e){

            if (e.toElement.parentNode.classList.contains('subCategoryIsActive')) {
                let subCategoriesMenu =  document.querySelector('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories')

                let subCategoryMenu = document.querySelectorAll('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories > .MainMenuDrawer-Item-Subcategory')

                let subCategoryHeight = subCategoryMenu[0].clientHeight * subCategoryMenu.length
                subCategoriesMenu.style.height = '0'
                e.toElement.parentNode.classList.remove('subCategoryIsActive')
            } else {
                clearActiveSubmenu()

                e.toElement.parentNode.classList.add('subCategoryIsActive')

                let subCategoriesMenu =  document.querySelector('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories')

                let subCategoryMenu = document.querySelectorAll('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories > .MainMenuDrawer-Item-Subcategory')

                let subCategoryHeight = subCategoryMenu[0].clientHeight * subCategoryMenu.length
                subCategoriesMenu.style.height = subCategoryHeight + 'px'
            }


            }
        )
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/site/menu-drawer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 72,  215 => 69,  206 => 66,  203 => 65,  197 => 64,  194 => 63,  191 => 62,  188 => 61,  184 => 60,  174 => 58,  171 => 57,  167 => 56,  162 => 54,  157 => 52,  152 => 50,  149 => 49,  143 => 48,  140 => 47,  137 => 46,  134 => 45,  129 => 44,  126 => 43,  122 => 42,  97 => 19,  95 => 18,  92 => 17,  90 => 16,  88 => 15,  86 => 14,  84 => 13,  82 => 12,  80 => 11,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = mainMenuItem.records %}
{% set displayColumn = mainMenuItem.displayColumn %}
{% set noRecordsMessage = mainMenuItem.noRecordsMessage %}
{% set detailsPage = mainMenuItem.detailsPage %}
{% set detailsKeyColumn = mainMenuItem.detailsKeyColumn %}
{% set detailsUrlParameter = mainMenuItem.detailsUrlParameter %}




{% set recordsProductList = productList.records %}
{% set displayColumn = productList.displayColumn %}
{% set noRecordsMessage = productList.noRecordsMessage %}
{% set detailsPage = productList.detailsPage %}
{% set detailsKeyColumn = productList.detailsKeyColumn %}
{% set detailsUrlParameter = productList.detailsUrlParameter %}

{% set countSubcategory = 0 %}



<div class=\"MainMenuDrawer\">
    <div class=\"SubNavigationMenu SubNavigationMenu-Fixed\">
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a href=\"#\" class=\"SubNavigationMenu-LanguageItem LanguageItem-dark LanguageItem-active\" onclick=\"console.log('sdfsd')\">ENG</a>
            <a href=\"#\" class=\"SubNavigationMenu-LanguageItem LanguageItem-dark\" onclick=\"console.log('sdfsd')\">RUS</a>
        </div>
        <div class=\"SubNavigationMenu-ScrollDown\">
            <svg width=\"27\" height=\"14\" viewBox=\"0 0 27 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 3.60039L2.4 0.400391L13.2 8.50039L24 0.400391L26.4 3.60039L13.2 13.5004L0 3.60039Z\" fill=\"white\"/>
            </svg>

        </div>
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\"></a>
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\"></a>
        </div>
    </div>
    <div class=\"MainMenuDrawer-Items\">


    {% for record in records %}
        {% set count = 0 %}
        {% for recordProductItem in recordsProductList %}
            {% if recordProductItem.category == record.slug %}
                {% set count = count + 1 %}
            {% endif %}
        {% endfor %}
        <div class=\"MainMenuDrawer-Item\">
            <div class=\"MainMenuDrawer-Item-Category\">{{record.title}}</div>
            <div class=\"MainMenuDrawer-Item-Subcategories\">
                <a  onclick=\"goTo('/category/{{record.slug}}')\" class=\"MainMenuDrawer-Item-Subcategory\">All products
                    <sup>
                        {{count}}
                    </sup></a>
                {% for menuItem in record.subcategory %}
                {% set countSubcategory = 0 %}
                    <a onclick=\"goTo('/category/{{record.slug}}/#{{menuItem.slug}}')\" class=\"MainMenuDrawer-Item-Subcategory\">{{menuItem.subcategory_title}}
                        <sup>
                            {% for recordProductItem in recordsProductList %}
                                {% if menuItem.slug == recordProductItem.subcategory %}
                                    {% set countSubcategory = countSubcategory + 1 %}
                                {% endif %}
                            {% endfor %}

                            {{countSubcategory}}
                        </sup></a>
                {% endfor %}
            </div>
        </div>
    {% endfor %}

        
    </div>
</div>

<style>




</style>


<script>



    let menuCategoryList = document.querySelectorAll('.MainMenuDrawer-Item');


    function goTo(link) {
        window.location = link
        openMenuHandler()
    }

    function clearActiveSubmenu() {
        for (let i = 0; i < menuCategoryList.length; i++) {
            menuCategoryList[i].querySelector('.MainMenuDrawer-Item-Subcategories').style.height = '0px'
            menuCategoryList[i].classList.remove('subCategoryIsActive')
        }
    }


    for (let i = 0; i < menuCategoryList.length; i++) {
        menuCategoryList[i].addEventListener(\"click\",
            function (e){

            if (e.toElement.parentNode.classList.contains('subCategoryIsActive')) {
                let subCategoriesMenu =  document.querySelector('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories')

                let subCategoryMenu = document.querySelectorAll('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories > .MainMenuDrawer-Item-Subcategory')

                let subCategoryHeight = subCategoryMenu[0].clientHeight * subCategoryMenu.length
                subCategoriesMenu.style.height = '0'
                e.toElement.parentNode.classList.remove('subCategoryIsActive')
            } else {
                clearActiveSubmenu()

                e.toElement.parentNode.classList.add('subCategoryIsActive')

                let subCategoriesMenu =  document.querySelector('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories')

                let subCategoryMenu = document.querySelectorAll('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories > .MainMenuDrawer-Item-Subcategory')

                let subCategoryHeight = subCategoryMenu[0].clientHeight * subCategoryMenu.length
                subCategoriesMenu.style.height = subCategoryHeight + 'px'
            }


            }
        )
    }
</script>", "/Users/iamk/git/darling/themes/demo/partials/site/menu-drawer.htm", "");
    }
}

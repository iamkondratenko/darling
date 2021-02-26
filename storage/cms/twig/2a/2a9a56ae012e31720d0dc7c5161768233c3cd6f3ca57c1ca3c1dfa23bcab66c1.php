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
        $tags = array("set" => 1, "for" => 34, "if" => 38);
        $filters = array("escape" => 40);
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
        // line 8
        $context["recordsProducts"] = twig_get_attribute($this->env, $this->source, ($context["subcategoryListing"] ?? null), "records", [], "any", false, false, true, 8);
        // line 9
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
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 35
            echo "
";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["recordsProducts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recordProductItem"]) {
                // line 37
                echo "
";
                // line 38
                if ((twig_get_attribute($this->env, $this->source, $context["recordProductItem"], "slug", [], "any", false, false, true, 38) == twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 38))) {
                    // line 39
                    echo "
        ";
                    // line 40
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["recordProductItem"], "slug", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo "

        ";
                }
                // line 43
                echo "     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recordProductItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "
        <div class=\"MainMenuDrawer-Item\">
            <div class=\"MainMenuDrawer-Item-Category\">";
            // line 46
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "</div>
            <div class=\"MainMenuDrawer-Item-Subcategories\">
                <a  onclick=\"goTo('/category/";
            // line 48
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "')\" class=\"MainMenuDrawer-Item-Subcategory\">All products<sup> 10</sup></a>
                ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "subcategory", [], "any", false, false, true, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                echo " 
                <a  onclick=\"goTo('/category/";
                // line 50
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "/#";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menuItem"], "slug", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "')\" class=\"MainMenuDrawer-Item-Subcategory\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menuItem"], "subcategory_title", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "<sup> 3</sup></a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </div>
        </div>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
        
    </div>
</div>

<style>


    sup {
        font-weight: 500;
        font-size: 22px;
        top: -1em;
    }


    .SubNavigationMenu {
        width: 100vw;
        padding: 0 60px;
        height: 70px;
        position: absolute;
        bottom: 0;
        display: flex;
        justify-content: space-between;
        z-index: 900;
    }

    .SubNavigationMenu.SubNavigationMenu-Fixed {
        position: fixed;
        z-index: 1300;
    }


    .SubNavigationMenu-ChangeLanguage {
        min-width: 75px;
        display: flex;
        justify-content: space-around;
        cursor: pointer;
    }

    a.SubNavigationMenu-LanguageItem {
        color: #ffffff82;
        text-decoration: none;
        font-weight: 600;
        font-size: 20px;
        margin-right: 10px;
        transition-duration: 500ms;
    }

    a.SubNavigationMenu-LanguageItem:hover {
        color: #EA028A;
    }


    a.SubNavigationMenu-LanguageItem.LanguageItem-active {
        color: #ffffff;
        text-decoration: none;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark {
        color: #00000082;
        text-decoration: none;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark:hover {
        color: #EA028A;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark.LanguageItem-active {
        color: #000000;
        text-decoration: none;
    }


    .MainMenuDrawer-Item-Category {
        font-size: 70px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .MainMenuDrawer-Item-Category:hover {
        color: #EA028A;
    }

    a.MainMenuDrawer-Item-Subcategory {
        text-decoration: none;
        color: black;
        font-size: 40px;
        font-weight: 500;
        text-transform: uppercase;
        transition-duration: 500ms;
    }

    a.MainMenuDrawer-Item-Subcategory:hover {
        color: #EA028A;
    }

    .MainMenuDrawer-Item-Subcategories{
        display: flex;
        flex-direction: column;
        height: 0;
        overflow: hidden;
        transition-duration: 400ms;
    }
    .MainMenuDrawer-Items{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: black;
    }
    
    .MainMenuDrawer-Item {
        cursor: pointer;
    }

    .MainMenuDrawer {
        width: 100vw;
        height: 100vh;
        background-color: #fff;
        opacity: 0;
        z-index: -555;
        transition-duration: 400ms;
        position: fixed;
    }
    .MainMenuDrawer.js-menuIsOpened {
        z-index: 990;
        opacity: 1;
        transition-duration: 400ms;
    }


    @media screen and (max-width: 767px) {

        sup {
            font-size: 18px;
            top: -0.7em;
        }

        .SubNavigationMenu {
            padding: 30px;
            height: 90px;
        }

        .jsDesktop {
            display: none;
        }

        .MainMenuDrawer-Item-Category {
            font-size: 50px;
            font-weight: 500;
            text-transform: uppercase;
        }
        a.MainMenuDrawer-Item-Subcategory {
            text-decoration: none;
            color: black;
            font-size: 25px;
            font-weight: 500;
            text-transform: uppercase;
            padding-bottom: 8px;

        }
        .MainMenuDrawer-Items{
            width: 100%;
            padding: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            text-align: left;
            color: black;
        }
    }

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
        return array (  177 => 56,  168 => 52,  156 => 50,  150 => 49,  146 => 48,  141 => 46,  137 => 44,  131 => 43,  125 => 40,  122 => 39,  120 => 38,  117 => 37,  113 => 36,  110 => 35,  106 => 34,  79 => 9,  77 => 8,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = mainMenuItem.records %}
{% set displayColumn = mainMenuItem.displayColumn %}
{% set noRecordsMessage = mainMenuItem.noRecordsMessage %}
{% set detailsPage = mainMenuItem.detailsPage %}
{% set detailsKeyColumn = mainMenuItem.detailsKeyColumn %}
{% set detailsUrlParameter = mainMenuItem.detailsUrlParameter %}

{% set recordsProducts = subcategoryListing.records %}

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

{% for recordProductItem in recordsProducts %}

{% if recordProductItem.slug == record.slug %}

        {{ recordProductItem.slug }}

        {% endif %}
     {% endfor %}

        <div class=\"MainMenuDrawer-Item\">
            <div class=\"MainMenuDrawer-Item-Category\">{{record.title}}</div>
            <div class=\"MainMenuDrawer-Item-Subcategories\">
                <a  onclick=\"goTo('/category/{{record.slug}}')\" class=\"MainMenuDrawer-Item-Subcategory\">All products<sup> 10</sup></a>
                {% for menuItem in record.subcategory %} 
                <a  onclick=\"goTo('/category/{{record.slug}}/#{{menuItem.slug}}')\" class=\"MainMenuDrawer-Item-Subcategory\">{{menuItem.subcategory_title}}<sup> 3</sup></a>
                {% endfor %}
            </div>
        </div>
   
    {% endfor %}

        
    </div>
</div>

<style>


    sup {
        font-weight: 500;
        font-size: 22px;
        top: -1em;
    }


    .SubNavigationMenu {
        width: 100vw;
        padding: 0 60px;
        height: 70px;
        position: absolute;
        bottom: 0;
        display: flex;
        justify-content: space-between;
        z-index: 900;
    }

    .SubNavigationMenu.SubNavigationMenu-Fixed {
        position: fixed;
        z-index: 1300;
    }


    .SubNavigationMenu-ChangeLanguage {
        min-width: 75px;
        display: flex;
        justify-content: space-around;
        cursor: pointer;
    }

    a.SubNavigationMenu-LanguageItem {
        color: #ffffff82;
        text-decoration: none;
        font-weight: 600;
        font-size: 20px;
        margin-right: 10px;
        transition-duration: 500ms;
    }

    a.SubNavigationMenu-LanguageItem:hover {
        color: #EA028A;
    }


    a.SubNavigationMenu-LanguageItem.LanguageItem-active {
        color: #ffffff;
        text-decoration: none;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark {
        color: #00000082;
        text-decoration: none;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark:hover {
        color: #EA028A;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark.LanguageItem-active {
        color: #000000;
        text-decoration: none;
    }


    .MainMenuDrawer-Item-Category {
        font-size: 70px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .MainMenuDrawer-Item-Category:hover {
        color: #EA028A;
    }

    a.MainMenuDrawer-Item-Subcategory {
        text-decoration: none;
        color: black;
        font-size: 40px;
        font-weight: 500;
        text-transform: uppercase;
        transition-duration: 500ms;
    }

    a.MainMenuDrawer-Item-Subcategory:hover {
        color: #EA028A;
    }

    .MainMenuDrawer-Item-Subcategories{
        display: flex;
        flex-direction: column;
        height: 0;
        overflow: hidden;
        transition-duration: 400ms;
    }
    .MainMenuDrawer-Items{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: black;
    }
    
    .MainMenuDrawer-Item {
        cursor: pointer;
    }

    .MainMenuDrawer {
        width: 100vw;
        height: 100vh;
        background-color: #fff;
        opacity: 0;
        z-index: -555;
        transition-duration: 400ms;
        position: fixed;
    }
    .MainMenuDrawer.js-menuIsOpened {
        z-index: 990;
        opacity: 1;
        transition-duration: 400ms;
    }


    @media screen and (max-width: 767px) {

        sup {
            font-size: 18px;
            top: -0.7em;
        }

        .SubNavigationMenu {
            padding: 30px;
            height: 90px;
        }

        .jsDesktop {
            display: none;
        }

        .MainMenuDrawer-Item-Category {
            font-size: 50px;
            font-weight: 500;
            text-transform: uppercase;
        }
        a.MainMenuDrawer-Item-Subcategory {
            text-decoration: none;
            color: black;
            font-size: 25px;
            font-weight: 500;
            text-transform: uppercase;
            padding-bottom: 8px;

        }
        .MainMenuDrawer-Items{
            width: 100%;
            padding: 30px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            text-align: left;
            color: black;
        }
    }

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

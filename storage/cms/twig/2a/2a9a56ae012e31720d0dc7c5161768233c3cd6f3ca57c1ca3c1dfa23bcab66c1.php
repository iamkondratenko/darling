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
        $tags = array("set" => 19, "for" => 26);
        $filters = array("escape" => 28);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
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
        echo "<div class=\"MainMenuDrawer\">
    <div class=\"SubNavigationMenu SubNavigationMenu-Fixed\">
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-dark LanguageItem-active\" href=\"#\">ENG</a>
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-dark\" href=\"#\">RUS</a>
        </div>
        <div class=\"SubNavigationMenu-ScrollDown\">
            <svg width=\"27\" height=\"14\" viewBox=\"0 0 27 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 3.60039L2.4 0.400391L13.2 8.50039L24 0.400391L26.4 3.60039L13.2 13.5004L0 3.60039Z\" fill=\"white\"/>
            </svg>

        </div>
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-active\" href=\"#\"></a>
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\"></a>
        </div>
    </div>
    <div class=\"MainMenuDrawer-Items\">
    ";
        // line 19
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "records", [], "any", false, false, true, 19);
        // line 20
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "displayColumn", [], "any", false, false, true, 20);
        // line 21
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "noRecordsMessage", [], "any", false, false, true, 21);
        // line 22
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "detailsPage", [], "any", false, false, true, 22);
        // line 23
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 23);
        // line 24
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["mainMenuItem"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 24);
        // line 25
        echo "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 27
            echo "        <div class=\"MainMenuDrawer-Item\">
            <div class=\"MainMenuDrawer-Item-Category\">";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</div>
            <div class=\"MainMenuDrawer-Item-Subcategories\">
                <a  onclick=\"goTo('/category/";
            // line 30
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "')\" class=\"MainMenuDrawer-Item-Subcategory\">All products</a>
                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "subcategory", [], "any", false, false, true, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
                echo " 
                <a  onclick=\"goTo('/category/";
                // line 32
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "slug", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "/#";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menuItem"], "slug", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "')\" class=\"MainMenuDrawer-Item-Subcategory\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["menuItem"], "subcategory_title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </div>
        </div>
   
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
        
    </div>
</div>

<style>


    .SubNavigationMenu {
        width: 100vw;
        padding: 0 50px;
        height: 60px;
        position: absolute;
        bottom: 0;
        display: flex;
        justify-content: space-between;
        z-index: 950;
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
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }


    a.SubNavigationMenu-LanguageItem.LanguageItem-active {
        color: #ffffff82;
        text-decoration: none;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark {
        color: #000;
        text-decoration: none;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark.LanguageItem-active {
        color: #00000082;
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

    }
    .MainMenuDrawer-Item-Subcategories{
        display: flex;
        flex-direction: column;
        height: 0;
        overflow: hidden;
        transition-duration: 500ms;
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


    @media screen and (max-width: 375px) {
        .jsDesktop {
            display: none;
        }
        .SubNavigationMenu-ScrollDown {
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

                clearActiveSubmenu()

                e.toElement.parentNode.classList.toggle('subCategoryIsActive')

                let subCategoriesMenu =  document.querySelector('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories')

                let subCategoryMenu = document.querySelectorAll('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories > .MainMenuDrawer-Item-Subcategory')

                let subCategoryHeight = subCategoryMenu[0].clientHeight * subCategoryMenu.length
                subCategoriesMenu.style.height = subCategoryHeight + 'px'
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
        return array (  140 => 38,  131 => 34,  119 => 32,  113 => 31,  109 => 30,  104 => 28,  101 => 27,  97 => 26,  94 => 25,  92 => 24,  90 => 23,  88 => 22,  86 => 21,  84 => 20,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"MainMenuDrawer\">
    <div class=\"SubNavigationMenu SubNavigationMenu-Fixed\">
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-dark LanguageItem-active\" href=\"#\">ENG</a>
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-dark\" href=\"#\">RUS</a>
        </div>
        <div class=\"SubNavigationMenu-ScrollDown\">
            <svg width=\"27\" height=\"14\" viewBox=\"0 0 27 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 3.60039L2.4 0.400391L13.2 8.50039L24 0.400391L26.4 3.60039L13.2 13.5004L0 3.60039Z\" fill=\"white\"/>
            </svg>

        </div>
        <div class=\"SubNavigationMenu-ChangeLanguage\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-active\" href=\"#\"></a>
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\"></a>
        </div>
    </div>
    <div class=\"MainMenuDrawer-Items\">
    {% set records = mainMenuItem.records %}
{% set displayColumn = mainMenuItem.displayColumn %}
{% set noRecordsMessage = mainMenuItem.noRecordsMessage %}
{% set detailsPage = mainMenuItem.detailsPage %}
{% set detailsKeyColumn = mainMenuItem.detailsKeyColumn %}
{% set detailsUrlParameter = mainMenuItem.detailsUrlParameter %}

    {% for record in records %}
        <div class=\"MainMenuDrawer-Item\">
            <div class=\"MainMenuDrawer-Item-Category\">{{record.title}}</div>
            <div class=\"MainMenuDrawer-Item-Subcategories\">
                <a  onclick=\"goTo('/category/{{record.slug}}')\" class=\"MainMenuDrawer-Item-Subcategory\">All products</a>
                {% for menuItem in record.subcategory %} 
                <a  onclick=\"goTo('/category/{{record.slug}}/#{{menuItem.slug}}')\" class=\"MainMenuDrawer-Item-Subcategory\">{{menuItem.subcategory_title}}</a>
                {% endfor %}
            </div>
        </div>
   
    {% endfor %}

        
    </div>
</div>

<style>


    .SubNavigationMenu {
        width: 100vw;
        padding: 0 50px;
        height: 60px;
        position: absolute;
        bottom: 0;
        display: flex;
        justify-content: space-between;
        z-index: 950;
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
        color: #fff;
        text-decoration: none;
        font-weight: 600;
    }


    a.SubNavigationMenu-LanguageItem.LanguageItem-active {
        color: #ffffff82;
        text-decoration: none;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark {
        color: #000;
        text-decoration: none;
    }

    a.SubNavigationMenu-LanguageItem.LanguageItem-dark.LanguageItem-active {
        color: #00000082;
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

    }
    .MainMenuDrawer-Item-Subcategories{
        display: flex;
        flex-direction: column;
        height: 0;
        overflow: hidden;
        transition-duration: 500ms;
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


    @media screen and (max-width: 375px) {
        .jsDesktop {
            display: none;
        }
        .SubNavigationMenu-ScrollDown {
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

                clearActiveSubmenu()

                e.toElement.parentNode.classList.toggle('subCategoryIsActive')

                let subCategoriesMenu =  document.querySelector('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories')

                let subCategoryMenu = document.querySelectorAll('.subCategoryIsActive > .MainMenuDrawer-Item-Subcategories > .MainMenuDrawer-Item-Subcategory')

                let subCategoryHeight = subCategoryMenu[0].clientHeight * subCategoryMenu.length
                subCategoriesMenu.style.height = subCategoryHeight + 'px'
            }
        )
    }
</script>", "/Users/iamk/git/darling/themes/demo/partials/site/menu-drawer.htm", "");
    }
}

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

/* /Users/iamk/git/darling/themes/demo/pages/en/home.htm */
class __TwigTemplate_b59c6e161a4cc3aeba96f999371f87a7411aba74d2cffa148219399184e1cd3d extends \Twig\Template
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
        $tags = array("partial" => 1, "set" => 6, "for" => 33);
        $filters = array("escape" => 34);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'for'],
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



<div id=\"skin-care\" class=\"ProductContainer\" style=\"
    margin-top: 100vh; display: none;
\">

    <header class=\"MainHeaderFixed\">
        <div class=\"MainHeader-Content\">
            <div class=\"MainLogo MainLogoFixed\">
                <a class=\"LogoLink\" href=\"/\">
                    <svg width=\"131\" class=\"LogoSvgFixed\" height=\"21\" viewBox=\"0 0 187 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5781 23.3445C14.0901 23.3445 15.8653 21.2676 15.8653 18.9165V10.0613C15.8653 7.71016 14.0901 5.63324 10.5781 5.63324H6.25503V23.3445H10.5781ZM0.774414 0.773438H10.5779C17.1775 0.773438 21.3458 4.14328 21.3458 10.217V18.7589C21.3458 24.8322 17.1775 28.202 10.5779 28.202H0.774414V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M65.3227 13.196C67.7114 13.196 69.0982 12.1768 69.0982 9.39486C69.0982 6.65195 67.7114 5.63324 65.3227 5.63324H60.1222V13.196H65.3227ZM54.6523 0.773438H66.3246C71.8335 0.773438 74.6842 3.98665 74.6842 9.31584C74.6842 13.195 72.9123 15.8984 70.254 17.2309L75.2238 26.3607V28.202H69.9072L64.2831 17.8968H60.1225V28.202H54.6523V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M81.1016 0.773438H86.8221V23.3436H99.7138V28.202H81.1016V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M104.611 28.202H110.489V0.773438H104.611V28.202Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M117.347 0.773438H122.535L133.23 17.8578V0.773438H138.898V28.202H133.709L123.014 11.1181V28.202H117.347V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M144.774 19.4916V10.5802C144.774 4.39254 148.847 0.773438 155.807 0.773438C161.778 0.773438 166.325 4.00344 166.325 10.2299H160.71C160.71 7.46699 158.575 5.8326 155.491 5.8326C152.051 5.8326 150.389 7.58377 150.389 10.3467V19.4528C150.389 22.4105 152.169 24.1224 155.412 24.1224C157.547 24.1224 159.643 23.0719 160.71 21.4375V18.4798H155.807V13.8878H166.325V28.5977H163.32L161.778 26.3407C160.078 28.2086 157.666 29.1816 154.898 29.1816C148.531 29.1816 144.774 25.5237 144.774 19.4916Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M40.3758 17.1517L37.3928 8.218L34.3312 17.1517H40.3758ZM25.2646 26.361L34.7618 0.773438H40.2169L49.7544 26.361V28.202H44.2593L42.0622 21.7764H32.6815L30.4061 28.202H25.2646V26.361Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" class=\"LogoAsterisk\" clip-rule=\"evenodd\" d=\"M186.897 5.91835L185.166 2.97546L181.281 5.17749V0.773438H177.819V5.17749L173.934 2.97546L172.203 5.91835L176.089 8.12038L172.203 10.3224L173.934 13.2649L177.819 11.0628V15.4673H181.281V11.0628L185.166 13.2649L186.897 10.3224L183.012 8.12038L186.897 5.91835Z\"/>
                    </svg>
                </a>
            </div>
            <!--        <div class=\"MainHeaderFixed-Subcategory\">-->
            <!--            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategoryMenu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "-->
            <!--                <a href=\"#";
            // line 34
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\" class=\"MainHeaderFixed-Subcategory-Item\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "</a>-->
            <!--            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "-->
            <!--        </div>-->
            <div class=\"MainHeaderFixed-Subcategory\">
                <a href=\"#pads\" class=\"MainHeaderFixed-Subcategory-Item\">pads</a>
                <a href=\"#patches\" class=\"MainHeaderFixed-Subcategory-Item\">patches</a>
                <a href=\"#masks\" class=\"MainHeaderFixed-Subcategory-Item\">masks</a>
            </div>
            <div class=\"MainMenu\">
                <div class=\"MainMenu-Icon MainMenu-Icon-Fixed\" data-openMenu=\"menu-icon\" onclick=\"openMenuHandler()\"></div>
            </div>
        </div>
    </header>

    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordSkinCare"] ?? null), "subcategory", [], "any", false, false, true, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 49
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['subcategoryTitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_title", [], "any", false, false, true, 49)            ;
            $context['__cms_partial_params']['subcategorySlug'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "slug", [], "any", false, false, true, 49)            ;
            $context['__cms_partial_params']['categorySubtitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_description", [], "any", false, false, true, 49)            ;
            $context['__cms_partial_params']['mainSubcategoryBackground'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner", [], "any", false, false, true, 49)            ;
            $context['__cms_partial_params']['mainSubcategoryBackgroundTablet'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner_tabet", [], "any", false, false, true, 49)            ;
            $context['__cms_partial_params']['mainSubcategoryBackgroundMobile'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner_mobile", [], "any", false, false, true, 49)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>

<div id=\"makeup\" class=\"ProductContainer\" style=\"
    margin-top: 100vh; display: none;
\">

    <header class=\"MainHeaderFixed MainHeaderFixedMakeUp\">
        <div class=\"MainHeader-Content\">
            <div class=\"MainLogo MainLogoFixed\">
                <a class=\"LogoLink\" href=\"/\">
                    <svg width=\"131\" class=\"LogoSvgFixed\" height=\"21\" viewBox=\"0 0 187 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5781 23.3445C14.0901 23.3445 15.8653 21.2676 15.8653 18.9165V10.0613C15.8653 7.71016 14.0901 5.63324 10.5781 5.63324H6.25503V23.3445H10.5781ZM0.774414 0.773438H10.5779C17.1775 0.773438 21.3458 4.14328 21.3458 10.217V18.7589C21.3458 24.8322 17.1775 28.202 10.5779 28.202H0.774414V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M65.3227 13.196C67.7114 13.196 69.0982 12.1768 69.0982 9.39486C69.0982 6.65195 67.7114 5.63324 65.3227 5.63324H60.1222V13.196H65.3227ZM54.6523 0.773438H66.3246C71.8335 0.773438 74.6842 3.98665 74.6842 9.31584C74.6842 13.195 72.9123 15.8984 70.254 17.2309L75.2238 26.3607V28.202H69.9072L64.2831 17.8968H60.1225V28.202H54.6523V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M81.1016 0.773438H86.8221V23.3436H99.7138V28.202H81.1016V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M104.611 28.202H110.489V0.773438H104.611V28.202Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M117.347 0.773438H122.535L133.23 17.8578V0.773438H138.898V28.202H133.709L123.014 11.1181V28.202H117.347V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M144.774 19.4916V10.5802C144.774 4.39254 148.847 0.773438 155.807 0.773438C161.778 0.773438 166.325 4.00344 166.325 10.2299H160.71C160.71 7.46699 158.575 5.8326 155.491 5.8326C152.051 5.8326 150.389 7.58377 150.389 10.3467V19.4528C150.389 22.4105 152.169 24.1224 155.412 24.1224C157.547 24.1224 159.643 23.0719 160.71 21.4375V18.4798H155.807V13.8878H166.325V28.5977H163.32L161.778 26.3407C160.078 28.2086 157.666 29.1816 154.898 29.1816C148.531 29.1816 144.774 25.5237 144.774 19.4916Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M40.3758 17.1517L37.3928 8.218L34.3312 17.1517H40.3758ZM25.2646 26.361L34.7618 0.773438H40.2169L49.7544 26.361V28.202H44.2593L42.0622 21.7764H32.6815L30.4061 28.202H25.2646V26.361Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" class=\"LogoAsterisk\" clip-rule=\"evenodd\" d=\"M186.897 5.91835L185.166 2.97546L181.281 5.17749V0.773438H177.819V5.17749L173.934 2.97546L172.203 5.91835L176.089 8.12038L172.203 10.3224L173.934 13.2649L177.819 11.0628V15.4673H181.281V11.0628L185.166 13.2649L186.897 10.3224L183.012 8.12038L186.897 5.91835Z\"/>
                    </svg>
                </a>
            </div>

            <div class=\"MainHeaderFixed-Subcategory\">
                <a href=\"#eyes\" class=\"MainHeaderFixed-Subcategory-Item\">eyes</a>
                <a href=\"#lips\" class=\"MainHeaderFixed-Subcategory-Item\">lips</a>
                <a href=\"#face\" class=\"MainHeaderFixed-Subcategory-Item\">face</a>
            </div>

            <div class=\"MainMenu\">
                <div class=\"MainMenu-Icon MainMenu-Icon-Fixed\" data-openMenu=\"menu-icon\" onclick=\"openMenuHandler()\"></div>
            </div>
        </div>
    </header>
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["recordMakeup"] ?? null), "subcategory", [], "any", false, false, true, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
            // line 86
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['subcategoryTitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_title", [], "any", false, false, true, 86)            ;
            $context['__cms_partial_params']['subcategorySlug'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "slug", [], "any", false, false, true, 86)            ;
            $context['__cms_partial_params']['categorySubtitle'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_description", [], "any", false, false, true, 86)            ;
            $context['__cms_partial_params']['mainSubcategoryBackground'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner", [], "any", false, false, true, 86)            ;
            $context['__cms_partial_params']['mainSubcategoryBackgroundTablet'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner_tabet", [], "any", false, false, true, 86)            ;
            $context['__cms_partial_params']['mainSubcategoryBackgroundMobile'] = twig_get_attribute($this->env, $this->source, $context["subcategory"], "subcategory_banner_mobile", [], "any", false, false, true, 86)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("category/category"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 87
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "</div>




<script>

    var previousScrollState = 0

    function compareScrollStateState(currentScrollState) {

        if (currentScrollState > 0) {
            if (previousScrollState < currentScrollState) {

                previousScrollState = currentScrollState
                return 'down'

            }
            else {
                previousScrollState = currentScrollState
                return 'up'
            }
        }


    }


    var fixedMenuNode = document.querySelector('.MainHeaderFixed')
    var fixedMenuNodeMakeUp = document.querySelector('.MainHeaderFixedMakeUp')



    window.addEventListener('scroll', function (e){
        getBodyScrollTop(e)
    })
    function getBodyScrollTop(e) {
        
        var scrolled = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop)
        if (scrolled > 100) {
            fixedMenuNode.classList.add('jsScrolled')
            fixedMenuNodeMakeUp.classList.add('jsScrolled')
        }
        else {
            fixedMenuNode.classList.remove('jsScrolled')
            fixedMenuNodeMakeUp.classList.remove('jsScrolled')

        }
    }


</script>

<style>

    .MainHeaderFixed-Subcategory {
        display: flex;
        align-items: center;
    }

    .MainHeaderFixed-Subcategory.js-OpenedMenu {
        display: none;
    }

    .MainLogo.MainLogoFixed.js-OpenedMenu {
        display: flex;
    }

    a.MainHeaderFixed-Subcategory-Item {
        font-size: 30px;
        font-weight: 500;
        color: #222;
        text-transform: uppercase;
        text-decoration: none;
        margin: 0 25px;
        transition-duration: 400ms;
    }

    a.MainHeaderFixed-Subcategory-Item:hover {
        color: #EA028A;
    }

    @media screen and (max-width: 1919px) {
        a.MainHeaderFixed-Subcategory-Item {
            font-size: 25px;
        }
    }


    @media screen and (max-width: 767px) {
        .MainLogo.MainLogoFixed {
            display: none;
        }
        a.MainHeaderFixed-Subcategory-Item {
            font-size: 18px;
            color: #222;
            text-transform: uppercase;
            text-decoration: none;
            margin: 0 25px 0 0;
        }
    }
</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/pages/en/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 88,  206 => 87,  195 => 86,  191 => 85,  155 => 51,  141 => 49,  137 => 48,  122 => 35,  112 => 34,  106 => 33,  79 => 8,  77 => 7,  75 => 6,  70 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial \"site/main-banner.htm\" %}
{% partial 'site/header-fixed.htm' %}



{% set recordMakeup = CategoryMakeup.record %}
{% set recordSkinCare = CategorySkinCare.record %}




<div id=\"skin-care\" class=\"ProductContainer\" style=\"
    margin-top: 100vh; display: none;
\">

    <header class=\"MainHeaderFixed\">
        <div class=\"MainHeader-Content\">
            <div class=\"MainLogo MainLogoFixed\">
                <a class=\"LogoLink\" href=\"/\">
                    <svg width=\"131\" class=\"LogoSvgFixed\" height=\"21\" viewBox=\"0 0 187 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5781 23.3445C14.0901 23.3445 15.8653 21.2676 15.8653 18.9165V10.0613C15.8653 7.71016 14.0901 5.63324 10.5781 5.63324H6.25503V23.3445H10.5781ZM0.774414 0.773438H10.5779C17.1775 0.773438 21.3458 4.14328 21.3458 10.217V18.7589C21.3458 24.8322 17.1775 28.202 10.5779 28.202H0.774414V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M65.3227 13.196C67.7114 13.196 69.0982 12.1768 69.0982 9.39486C69.0982 6.65195 67.7114 5.63324 65.3227 5.63324H60.1222V13.196H65.3227ZM54.6523 0.773438H66.3246C71.8335 0.773438 74.6842 3.98665 74.6842 9.31584C74.6842 13.195 72.9123 15.8984 70.254 17.2309L75.2238 26.3607V28.202H69.9072L64.2831 17.8968H60.1225V28.202H54.6523V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M81.1016 0.773438H86.8221V23.3436H99.7138V28.202H81.1016V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M104.611 28.202H110.489V0.773438H104.611V28.202Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M117.347 0.773438H122.535L133.23 17.8578V0.773438H138.898V28.202H133.709L123.014 11.1181V28.202H117.347V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M144.774 19.4916V10.5802C144.774 4.39254 148.847 0.773438 155.807 0.773438C161.778 0.773438 166.325 4.00344 166.325 10.2299H160.71C160.71 7.46699 158.575 5.8326 155.491 5.8326C152.051 5.8326 150.389 7.58377 150.389 10.3467V19.4528C150.389 22.4105 152.169 24.1224 155.412 24.1224C157.547 24.1224 159.643 23.0719 160.71 21.4375V18.4798H155.807V13.8878H166.325V28.5977H163.32L161.778 26.3407C160.078 28.2086 157.666 29.1816 154.898 29.1816C148.531 29.1816 144.774 25.5237 144.774 19.4916Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M40.3758 17.1517L37.3928 8.218L34.3312 17.1517H40.3758ZM25.2646 26.361L34.7618 0.773438H40.2169L49.7544 26.361V28.202H44.2593L42.0622 21.7764H32.6815L30.4061 28.202H25.2646V26.361Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" class=\"LogoAsterisk\" clip-rule=\"evenodd\" d=\"M186.897 5.91835L185.166 2.97546L181.281 5.17749V0.773438H177.819V5.17749L173.934 2.97546L172.203 5.91835L176.089 8.12038L172.203 10.3224L173.934 13.2649L177.819 11.0628V15.4673H181.281V11.0628L185.166 13.2649L186.897 10.3224L183.012 8.12038L186.897 5.91835Z\"/>
                    </svg>
                </a>
            </div>
            <!--        <div class=\"MainHeaderFixed-Subcategory\">-->
            <!--            {% for item in subcategoryMenu %}-->
            <!--                <a href=\"#{{item.slug}}\" class=\"MainHeaderFixed-Subcategory-Item\">{{item.slug}}</a>-->
            <!--            {% endfor %}-->
            <!--        </div>-->
            <div class=\"MainHeaderFixed-Subcategory\">
                <a href=\"#pads\" class=\"MainHeaderFixed-Subcategory-Item\">pads</a>
                <a href=\"#patches\" class=\"MainHeaderFixed-Subcategory-Item\">patches</a>
                <a href=\"#masks\" class=\"MainHeaderFixed-Subcategory-Item\">masks</a>
            </div>
            <div class=\"MainMenu\">
                <div class=\"MainMenu-Icon MainMenu-Icon-Fixed\" data-openMenu=\"menu-icon\" onclick=\"openMenuHandler()\"></div>
            </div>
        </div>
    </header>

    {% for subcategory in recordSkinCare.subcategory %}
{% partial \"category/category\" subcategoryTitle=subcategory.subcategory_title subcategorySlug=subcategory.slug categorySubtitle=subcategory.subcategory_description mainSubcategoryBackground=subcategory.subcategory_banner mainSubcategoryBackgroundTablet=subcategory.subcategory_banner_tabet mainSubcategoryBackgroundMobile=subcategory.subcategory_banner_mobile %}
{% endfor %}
</div>

<div id=\"makeup\" class=\"ProductContainer\" style=\"
    margin-top: 100vh; display: none;
\">

    <header class=\"MainHeaderFixed MainHeaderFixedMakeUp\">
        <div class=\"MainHeader-Content\">
            <div class=\"MainLogo MainLogoFixed\">
                <a class=\"LogoLink\" href=\"/\">
                    <svg width=\"131\" class=\"LogoSvgFixed\" height=\"21\" viewBox=\"0 0 187 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M10.5781 23.3445C14.0901 23.3445 15.8653 21.2676 15.8653 18.9165V10.0613C15.8653 7.71016 14.0901 5.63324 10.5781 5.63324H6.25503V23.3445H10.5781ZM0.774414 0.773438H10.5779C17.1775 0.773438 21.3458 4.14328 21.3458 10.217V18.7589C21.3458 24.8322 17.1775 28.202 10.5779 28.202H0.774414V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M65.3227 13.196C67.7114 13.196 69.0982 12.1768 69.0982 9.39486C69.0982 6.65195 67.7114 5.63324 65.3227 5.63324H60.1222V13.196H65.3227ZM54.6523 0.773438H66.3246C71.8335 0.773438 74.6842 3.98665 74.6842 9.31584C74.6842 13.195 72.9123 15.8984 70.254 17.2309L75.2238 26.3607V28.202H69.9072L64.2831 17.8968H60.1225V28.202H54.6523V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M81.1016 0.773438H86.8221V23.3436H99.7138V28.202H81.1016V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M104.611 28.202H110.489V0.773438H104.611V28.202Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M117.347 0.773438H122.535L133.23 17.8578V0.773438H138.898V28.202H133.709L123.014 11.1181V28.202H117.347V0.773438Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M144.774 19.4916V10.5802C144.774 4.39254 148.847 0.773438 155.807 0.773438C161.778 0.773438 166.325 4.00344 166.325 10.2299H160.71C160.71 7.46699 158.575 5.8326 155.491 5.8326C152.051 5.8326 150.389 7.58377 150.389 10.3467V19.4528C150.389 22.4105 152.169 24.1224 155.412 24.1224C157.547 24.1224 159.643 23.0719 160.71 21.4375V18.4798H155.807V13.8878H166.325V28.5977H163.32L161.778 26.3407C160.078 28.2086 157.666 29.1816 154.898 29.1816C148.531 29.1816 144.774 25.5237 144.774 19.4916Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M40.3758 17.1517L37.3928 8.218L34.3312 17.1517H40.3758ZM25.2646 26.361L34.7618 0.773438H40.2169L49.7544 26.361V28.202H44.2593L42.0622 21.7764H32.6815L30.4061 28.202H25.2646V26.361Z\" fill=\"#222\"/>
                        <path fill-rule=\"evenodd\" class=\"LogoAsterisk\" clip-rule=\"evenodd\" d=\"M186.897 5.91835L185.166 2.97546L181.281 5.17749V0.773438H177.819V5.17749L173.934 2.97546L172.203 5.91835L176.089 8.12038L172.203 10.3224L173.934 13.2649L177.819 11.0628V15.4673H181.281V11.0628L185.166 13.2649L186.897 10.3224L183.012 8.12038L186.897 5.91835Z\"/>
                    </svg>
                </a>
            </div>

            <div class=\"MainHeaderFixed-Subcategory\">
                <a href=\"#eyes\" class=\"MainHeaderFixed-Subcategory-Item\">eyes</a>
                <a href=\"#lips\" class=\"MainHeaderFixed-Subcategory-Item\">lips</a>
                <a href=\"#face\" class=\"MainHeaderFixed-Subcategory-Item\">face</a>
            </div>

            <div class=\"MainMenu\">
                <div class=\"MainMenu-Icon MainMenu-Icon-Fixed\" data-openMenu=\"menu-icon\" onclick=\"openMenuHandler()\"></div>
            </div>
        </div>
    </header>
    {% for subcategory in recordMakeup.subcategory %}
    {% partial \"category/category\" subcategoryTitle=subcategory.subcategory_title subcategorySlug=subcategory.slug categorySubtitle=subcategory.subcategory_description mainSubcategoryBackground=subcategory.subcategory_banner mainSubcategoryBackgroundTablet=subcategory.subcategory_banner_tabet mainSubcategoryBackgroundMobile=subcategory.subcategory_banner_mobile %}
    {% endfor %}
</div>




<script>

    var previousScrollState = 0

    function compareScrollStateState(currentScrollState) {

        if (currentScrollState > 0) {
            if (previousScrollState < currentScrollState) {

                previousScrollState = currentScrollState
                return 'down'

            }
            else {
                previousScrollState = currentScrollState
                return 'up'
            }
        }


    }


    var fixedMenuNode = document.querySelector('.MainHeaderFixed')
    var fixedMenuNodeMakeUp = document.querySelector('.MainHeaderFixedMakeUp')



    window.addEventListener('scroll', function (e){
        getBodyScrollTop(e)
    })
    function getBodyScrollTop(e) {
        
        var scrolled = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop)
        if (scrolled > 100) {
            fixedMenuNode.classList.add('jsScrolled')
            fixedMenuNodeMakeUp.classList.add('jsScrolled')
        }
        else {
            fixedMenuNode.classList.remove('jsScrolled')
            fixedMenuNodeMakeUp.classList.remove('jsScrolled')

        }
    }


</script>

<style>

    .MainHeaderFixed-Subcategory {
        display: flex;
        align-items: center;
    }

    .MainHeaderFixed-Subcategory.js-OpenedMenu {
        display: none;
    }

    .MainLogo.MainLogoFixed.js-OpenedMenu {
        display: flex;
    }

    a.MainHeaderFixed-Subcategory-Item {
        font-size: 30px;
        font-weight: 500;
        color: #222;
        text-transform: uppercase;
        text-decoration: none;
        margin: 0 25px;
        transition-duration: 400ms;
    }

    a.MainHeaderFixed-Subcategory-Item:hover {
        color: #EA028A;
    }

    @media screen and (max-width: 1919px) {
        a.MainHeaderFixed-Subcategory-Item {
            font-size: 25px;
        }
    }


    @media screen and (max-width: 767px) {
        .MainLogo.MainLogoFixed {
            display: none;
        }
        a.MainHeaderFixed-Subcategory-Item {
            font-size: 18px;
            color: #222;
            text-transform: uppercase;
            text-decoration: none;
            margin: 0 25px 0 0;
        }
    }
</style>", "/Users/iamk/git/darling/themes/demo/pages/en/home.htm", "");
    }
}

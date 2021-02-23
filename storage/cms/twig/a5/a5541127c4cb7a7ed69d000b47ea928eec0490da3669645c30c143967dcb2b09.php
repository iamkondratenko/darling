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

/* /Users/iamk/git/darling/themes/demo/partials/site/header-fixed.htm */
class __TwigTemplate_9ffff23877adc34d4cd78a75876c86db27c37afcdcf880c8414e1aa17cc0c540 extends \Twig\Template
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
        $tags = array("for" => 18);
        $filters = array("escape" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        echo "<header class=\"MainHeaderFixed\">
    <div class=\"MainHeader-Content\">
        <div class=\"MainLogo MainLogoFixed\">
            <a class=\"LogoLink\" href=\"/\">
                <svg width=\"187\" class=\"LogoSvgFixed\" height=\"30\" viewBox=\"0 0 187 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
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
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["subcategoryMenu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "            <a href=\"#";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\" class=\"MainHeaderFixed-Subcategory-Item\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
        <div class=\"MainMenu\">
            <div class=\"MainMenu-Icon MainMenu-Icon-Fixed\" data-openMenu=\"menu-icon\" onclick=\"openMenuHandler()\"></div>
        </div>
    </div>
</header>



<script>
    var fixedMenuNode = document.querySelector('.MainHeaderFixed')

    window.addEventListener('scroll', function (){
        getBodyScrollTop()
    })
    function getBodyScrollTop() {
        var scrolled = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop)
        if (scrolled > window.innerHeight) {
            fixedMenuNode.classList.add('jsScrolled')
        } else {
            fixedMenuNode.classList.remove('jsScrolled')
        }
    }


</script>

<style>

    .MainHeaderFixed-Subcategory {
        display: flex;
        align-items: center;
    }

    a.MainHeaderFixed-Subcategory-Item {
        font-size: 30px;
        color: #222;
        text-transform: uppercase;
        text-decoration: none;
        margin: 0 25px;
    }

    @media screen and (max-width: 375px) {
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
        return "/Users/iamk/git/darling/themes/demo/partials/site/header-fixed.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 21,  85 => 19,  81 => 18,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"MainHeaderFixed\">
    <div class=\"MainHeader-Content\">
        <div class=\"MainLogo MainLogoFixed\">
            <a class=\"LogoLink\" href=\"/\">
                <svg width=\"187\" class=\"LogoSvgFixed\" height=\"30\" viewBox=\"0 0 187 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
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
            {% for item in subcategoryMenu %}
            <a href=\"#{{item.slug}}\" class=\"MainHeaderFixed-Subcategory-Item\">{{item.slug}}</a>
            {% endfor %}
        </div>
        <div class=\"MainMenu\">
            <div class=\"MainMenu-Icon MainMenu-Icon-Fixed\" data-openMenu=\"menu-icon\" onclick=\"openMenuHandler()\"></div>
        </div>
    </div>
</header>



<script>
    var fixedMenuNode = document.querySelector('.MainHeaderFixed')

    window.addEventListener('scroll', function (){
        getBodyScrollTop()
    })
    function getBodyScrollTop() {
        var scrolled = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop)
        if (scrolled > window.innerHeight) {
            fixedMenuNode.classList.add('jsScrolled')
        } else {
            fixedMenuNode.classList.remove('jsScrolled')
        }
    }


</script>

<style>

    .MainHeaderFixed-Subcategory {
        display: flex;
        align-items: center;
    }

    a.MainHeaderFixed-Subcategory-Item {
        font-size: 30px;
        color: #222;
        text-transform: uppercase;
        text-decoration: none;
        margin: 0 25px;
    }

    @media screen and (max-width: 375px) {
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
</style>", "/Users/iamk/git/darling/themes/demo/partials/site/header-fixed.htm", "");
    }
}

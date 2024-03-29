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
        $tags = array("if" => 11, "for" => 13);
        $filters = array("escape" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
            <a class=\"LogoLink\" onclick=\"goTo('/', false)\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 205.1 32\" class=\"LogoSvg\">
                    <path d=\"M20.5 24.7c3.5 0 5.2-2 5.2-4.4v-8.7c0-2.3-1.7-4.4-5.2-4.4h-4.3v17.5h4.3zM10.8 2.5h9.7c6.5 0 10.6 3.3 10.6 9.3v8.4c0 6-4.1 9.3-10.6 9.3h-9.7v-27zM74.4 14.7c2.4 0 3.7-1 3.7-3.7s-1.4-3.7-3.7-3.7h-5.1v7.5h5.1zM63.9 2.5h11.5c5.4 0 8.2 3.2 8.2 8.4 0 3.8-1.7 6.5-4.4 7.8l4.9 9v1.8H79l-5.5-10.2h-4.1v10.2H64v-27zM90 2.5h5.6v22.2h12.7v4.8H90v-27zM113.2 29.5h5.8v-27h-5.8v27zM125.7 2.5h5.1l10.5 16.8V2.5h5.6v27h-5.1l-10.5-16.8v16.8h-5.6v-27zM152.8 20.9v-8.8c0-6.1 4-9.7 10.9-9.7 5.9 0 10.4 3.2 10.4 9.3h-5.5c0-2.7-2.1-4.3-5.1-4.3-3.4 0-5 1.7-5 4.4v9c0 2.9 1.8 4.6 4.9 4.6 2.1 0 4.2-1 5.2-2.6V20h-4.8v-4.5H174V30h-3l-1.5-2.2c-1.7 1.8-4.1 2.8-6.8 2.8-6.2-.1-9.9-3.7-9.9-9.7zM49.9 18.6L47 9.8l-3 8.8h5.9zM35 27.7l9.4-25.2h5.4l9.4 25.2v1.8h-5.4l-2.2-6.3h-9.2L40 29.5h-5v-1.8z\"/>
                    <path d=\"M194.3 7.6l-1.7-2.9-3.8 2.2V2.5h-3.4v4.3l-3.8-2.2-1.7 2.9 3.8 2.2-3.8 2.2 1.7 2.9 3.8-2.2V17h3.4v-4.3l3.8 2.2 1.7-2.9-3.8-2.2 3.8-2.2z\" fill=\"#E6007D\"/>
                </svg>
            </a>
        </div>
        ";
        // line 11
        if (($context["subcategoryMenu"] ?? null)) {
            // line 12
            echo "        <div class=\"MainHeaderFixed-Subcategory\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["subcategoryMenu"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "                <a href=\"#";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" class=\"MainHeaderFixed-Subcategory-Item\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </div>
        ";
        } else {
            // line 18
            echo "        <div class=\"MainHeaderFixed-Subcategory\">
            <a href=\"#pads\" class=\"MainHeaderFixed-Subcategory-Item\">pads</a>
            <a href=\"#patches\" class=\"MainHeaderFixed-Subcategory-Item\">patches</a>
            <a href=\"#masks\" class=\"MainHeaderFixed-Subcategory-Item\">masks</a>
        </div>
        ";
        }
        // line 24
        echo "        
        <div class=\"MainMenu\" onclick=\"openMenuHandler()\">
            <div class=\"MainMenu-Icon MainMenu-Icon-Fixed\" data-openMenu=\"menu-icon\" ></div>
        </div>
    </div>
</header>



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
    const subNavigationMenu = document.querySelector('.SubNavigationMenu')

    window.addEventListener('scroll', function (e){
        getBodyScrollTop(e)
        localStorage.setItem('scrolledState', self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop))
        console.log(localStorage.getItem('scrolledState'))
    })
    function getBodyScrollTop(e) {
        var scrolled = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop)
        if (scrolled > 100) {
            fixedMenuNode.classList.add('jsScrolled')
            subNavigationMenu.classList.add('SubNavigationMenu--onFixedHeader')
        }
        else {
            fixedMenuNode.classList.remove('jsScrolled')
            subNavigationMenu.classList.remove('SubNavigationMenu--onFixedHeader')
        }
    }


                    
            function scrollToLastState() {
                
                if (localStorage.getItem('scrollToLastState') == \"true\") {
                    window.scrollTo({
                        top: localStorage.getItem('scrolledState'),
                        behavior: \"instant\"
                    });
                }
                localStorage.setItem('scrollToLastState', false)
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
        return "/Users/iamk/git/darling/themes/demo/partials/site/header-fixed.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 24,  98 => 18,  94 => 16,  83 => 14,  79 => 13,  76 => 12,  74 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"MainHeaderFixed\">
    <div class=\"MainHeader-Content\">
        <div class=\"MainLogo MainLogoFixed\">
            <a class=\"LogoLink\" onclick=\"goTo('/', false)\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 205.1 32\" class=\"LogoSvg\">
                    <path d=\"M20.5 24.7c3.5 0 5.2-2 5.2-4.4v-8.7c0-2.3-1.7-4.4-5.2-4.4h-4.3v17.5h4.3zM10.8 2.5h9.7c6.5 0 10.6 3.3 10.6 9.3v8.4c0 6-4.1 9.3-10.6 9.3h-9.7v-27zM74.4 14.7c2.4 0 3.7-1 3.7-3.7s-1.4-3.7-3.7-3.7h-5.1v7.5h5.1zM63.9 2.5h11.5c5.4 0 8.2 3.2 8.2 8.4 0 3.8-1.7 6.5-4.4 7.8l4.9 9v1.8H79l-5.5-10.2h-4.1v10.2H64v-27zM90 2.5h5.6v22.2h12.7v4.8H90v-27zM113.2 29.5h5.8v-27h-5.8v27zM125.7 2.5h5.1l10.5 16.8V2.5h5.6v27h-5.1l-10.5-16.8v16.8h-5.6v-27zM152.8 20.9v-8.8c0-6.1 4-9.7 10.9-9.7 5.9 0 10.4 3.2 10.4 9.3h-5.5c0-2.7-2.1-4.3-5.1-4.3-3.4 0-5 1.7-5 4.4v9c0 2.9 1.8 4.6 4.9 4.6 2.1 0 4.2-1 5.2-2.6V20h-4.8v-4.5H174V30h-3l-1.5-2.2c-1.7 1.8-4.1 2.8-6.8 2.8-6.2-.1-9.9-3.7-9.9-9.7zM49.9 18.6L47 9.8l-3 8.8h5.9zM35 27.7l9.4-25.2h5.4l9.4 25.2v1.8h-5.4l-2.2-6.3h-9.2L40 29.5h-5v-1.8z\"/>
                    <path d=\"M194.3 7.6l-1.7-2.9-3.8 2.2V2.5h-3.4v4.3l-3.8-2.2-1.7 2.9 3.8 2.2-3.8 2.2 1.7 2.9 3.8-2.2V17h3.4v-4.3l3.8 2.2 1.7-2.9-3.8-2.2 3.8-2.2z\" fill=\"#E6007D\"/>
                </svg>
            </a>
        </div>
        {% if subcategoryMenu %}
        <div class=\"MainHeaderFixed-Subcategory\">
            {% for item in subcategoryMenu %}
                <a href=\"#{{item.slug}}\" class=\"MainHeaderFixed-Subcategory-Item\">{{item.slug}}</a>
            {% endfor %}
        </div>
        {% else %}
        <div class=\"MainHeaderFixed-Subcategory\">
            <a href=\"#pads\" class=\"MainHeaderFixed-Subcategory-Item\">pads</a>
            <a href=\"#patches\" class=\"MainHeaderFixed-Subcategory-Item\">patches</a>
            <a href=\"#masks\" class=\"MainHeaderFixed-Subcategory-Item\">masks</a>
        </div>
        {% endif %}
        
        <div class=\"MainMenu\" onclick=\"openMenuHandler()\">
            <div class=\"MainMenu-Icon MainMenu-Icon-Fixed\" data-openMenu=\"menu-icon\" ></div>
        </div>
    </div>
</header>



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
    const subNavigationMenu = document.querySelector('.SubNavigationMenu')

    window.addEventListener('scroll', function (e){
        getBodyScrollTop(e)
        localStorage.setItem('scrolledState', self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop))
        console.log(localStorage.getItem('scrolledState'))
    })
    function getBodyScrollTop(e) {
        var scrolled = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop)
        if (scrolled > 100) {
            fixedMenuNode.classList.add('jsScrolled')
            subNavigationMenu.classList.add('SubNavigationMenu--onFixedHeader')
        }
        else {
            fixedMenuNode.classList.remove('jsScrolled')
            subNavigationMenu.classList.remove('SubNavigationMenu--onFixedHeader')
        }
    }


                    
            function scrollToLastState() {
                
                if (localStorage.getItem('scrollToLastState') == \"true\") {
                    window.scrollTo({
                        top: localStorage.getItem('scrolledState'),
                        behavior: \"instant\"
                    });
                }
                localStorage.setItem('scrollToLastState', false)
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
</style>", "/Users/iamk/git/darling/themes/demo/partials/site/header-fixed.htm", "");
    }
}

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

/* /Users/alex/Documents/GitHub/darling/themes/demo/partials/site/main-banner.htm */
class __TwigTemplate_36c105a9bd9ad16a017d2bcaf24ba60522f9797563ac434c70fdfe248cab6ad8 extends \Twig\Template
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
        $tags = array("set" => 1);
        $filters = array("media" => 168);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['media'],
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["mainBanner"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "

<div class=\"MainHomeBanner\">

    <div class=\"SubNavigationMenu\">
        <div class=\"SubNavigationMenu-ChangeLanguage jsDesktop\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-disabled\" onclick=\"channgeLanguage('en', false)\">ENG</a>
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-active\" onclick=\"channgeLanguage('ru', false)\">RUS</a>
        </div>
        <div class=\"SubNavigationMenu-ScrollDown t-cover__arrow-wrapper_animated jsHideScrollDown\" onclick=\"scrollDown()\">
            <svg width=\"27\" height=\"14\" viewBox=\"0 0 27 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 3.60039L2.4 0.400391L13.2 8.50039L24 0.400391L26.4 3.60039L13.2 13.5004L0 3.60039Z\" fill=\"white\"/>
            </svg>

        </div>
        <div class=\"SubNavigationMenu-ScrollDown-mobile t-cover__arrow-wrapper_animated\">Scroll down</div> 
    </div>

    <div class=\"MainHomeBanner-Content\">

        <div class=\"MainHomeBanner-categoryLeftScreen\">
            <h1 class=\"MainHomeBanner-categoryLeftScreen-title\">SKIN CARE</h1>

            <div>
                <div class=\"MainHomeBanner-categoryLeftScreen-content\">
                    <a href=\"#pads\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">
                       pads
                    </a>
                    <span> /</span>

                    <a href=\"#patches\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">patches</a><br /><span>
                        /</span>
                    <a href=\"#masks\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">masks</a>
                </div>
            </div>
        </div>

        <div class=\"MainHomeBanner-categoryRightScreen\">
            <h1 class=\"MainHomeBanner-categoryLeftScreen-title\">MAKEUP</h1>

            <div>
                <div class=\"MainHomeBanner-categoryLeftScreen-content\">
                    <a href=\"#eyes\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">
                     eyes
                    </a>
                    <span> /</span>

                    <a href=\"#lips\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">lips</a><br /><span>
                        /</span>
                    <a href=\"#face\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">face</a>
                </div>
            </div>
        </div>

        <div class=\"MainHomeBanner-Content-Links\">

            <div
                    class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left MainHomeBanner-Content-LinkHolderDiv\">
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>
                </span>
                <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </div>

            <a ontouchend=\"goTo('/category/makeup')\"
               class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left MainHomeBanner-Content-LinkHolderLink\">
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span>
                <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </a>

            <div href=\"#\" class=\"MainHomeBanner-Content-SlashHolder\">
                <div class=\"MainHomeBanner-Content-Slash\">/</div>
            </div>

            <div
                    class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right MainHomeBanner-Content-LinkHolderDiv\">
                <div class=\"MainHomeBanner-Content-LinkItem\">SKIN CARE</div>
                <!-- <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span> -->
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>

                </span>
            </div>

            <a ontouchend=\"goTo('/category/skin-care')\"
               class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right MainHomeBanner-Content-LinkHolderLink\">
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div>
                <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>

                </span>
            </a>

        </div>

        <div class=\"MainHomeBanner-Content-Background\">
            <div class=\"MainHomeBanner-Content-BackgroundMobile\"
                 style=\"background-image: url(";
        // line 168
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/2800px.jpg");
        echo "); background-size: auto 200vh; background-position: center -48vh;\">
            </div>

            <div class=\"MainHomeBanner-Content-BackgroundLeftScreen\"
                 style=\"background-color: #93969D; background-size: cover;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundLeftScreenContent\" style=\"background-image: url(";
        // line 174
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/left.jpg");
        echo ");
            background-size: auto 80vw; background-repeat: no-repeat; background-position: 11.8vw -12vw;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundRightScreen\"
                 style=\"background-color: #A5A8AF; background-size: cover;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundRightScreenContent\" style=\"background-image: url(";
        // line 180
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/right.jpg");
        echo ");
                background-size: auto 80vw; background-repeat: no-repeat; background-position: -38.2vw -12vw\"></div>
        </div>


    </div>

</div>

<style>
    .jsHideScrollDown {
        display: none;
    }
</style>

<script>


     

    
    
    const vh = window.innerHeight * 0.01;
     document.documentElement.style.setProperty('--vh', `\${vh}px`);

    const leftLink = document.querySelector(\".MainHomeBanner-Content-LinkHolder--left\");
    const rightLink = document.querySelector(\".MainHomeBanner-Content-LinkHolder--right\");
    const leftScreen = document.querySelector(\".MainHomeBanner-Content-BackgroundLeftScreen\");
    const leftScreenContent = document.querySelector(\".MainHomeBanner-Content-BackgroundLeftScreenContent\");
    const rightScreen = document.querySelector(\".MainHomeBanner-Content-BackgroundRightScreen\");
    const rightScreenContent = document.querySelector(\".MainHomeBanner-Content-BackgroundRightScreenContent\");
    const textContent = document.querySelector(\".MainHomeBanner-Content-Links\");
    const leftCategoryContent = document.querySelector(\".MainHomeBanner-categoryLeftScreen\");
    const rightCategoryContent = document.querySelector(\".MainHomeBanner-categoryRightScreen\")
    const SubNavigationMenuByMainHomeBanner = document.querySelector(\".MainHomeBanner .SubNavigationMenu\");

    const deleteLink = () => {
        textContent.classList.add('MainHomeBanner-Content-LinkHolder--delete');
    }

    const hideLink = () => {
        textContent.classList.add('MainHomeBanner-Content-LinkHolder--hided');
    }

    const onLeftLinkAction = () => {
        clearCategory()

        leftScreen.classList.add('MainHomeBanner-Content-BackgroundLeftScreenAnimation');
        leftScreenContent.classList.add('MainHomeBanner-Content-BackgroundLeftScreenContentAnimation');
        hideLink();
        setTimeout(deleteLink, 1000);
        rightCategoryContent.classList.add('MainHomeBanner-categoryScreenExisting')
        rightCategoryContent.classList.add('MainHomeBanner-categoryScreenAppearance')
        SubNavigationMenuByMainHomeBanner.classList.add('SubNavigationMenu-existing')
        SubNavigationMenuByMainHomeBanner.classList.add('SubNavigationMenu-appearance')
        openCategory('makeup','rigth')
        let scrollDownNode = document.querySelector('.jsHideScrollDown')
        scrollDownNode.classList.remove('jsHideScrollDown')
        document.getElementById('footer').classList.remove('jsHideScrollDown')
    }

    const onRightLinkAction = () => {
        clearCategory()

        rightScreen.classList.add('MainHomeBanner-Content-BackgroundRightScreenAnimation');
        rightScreenContent.classList.add('MainHomeBanner-Content-BackgroundRightScreenContentAnimation');
        hideLink()
        setTimeout(deleteLink, 1000);
        leftCategoryContent.classList.add('MainHomeBanner-categoryScreenExisting')
        leftCategoryContent.classList.add('MainHomeBanner-categoryScreenAppearance')
        SubNavigationMenuByMainHomeBanner.classList.add('SubNavigationMenu-existing')
        SubNavigationMenuByMainHomeBanner.classList.add('SubNavigationMenu-appearance')
        openCategory('skin-care','left')
        let scrollDownNode = document.querySelector('.jsHideScrollDown')
        scrollDownNode.classList.remove('jsHideScrollDown')
        document.getElementById('footer').classList.remove('jsHideScrollDown')
    }
    const isDesktop = window.matchMedia(\"(min-width: 1024px)\");


    if (isDesktop) {
        leftLink.addEventListener(\"click\", onLeftLinkAction);
        rightLink.addEventListener(\"click\", onRightLinkAction);
    }



    function openCategory (slug, side) {
        let categoryNodeMakeUp = document.getElementById('makeup')
        let categoryNodeSkinCare = document.getElementById('skin-care')

        if (slug == 'makeup') {
            categoryNodeMakeUp.style.display = 'block'
            categoryNodeSkinCare.style.display = 'none'
            history.pushState(null, null, window.location.origin + '/category/' + slug)
        } if (slug == 'skin-care') {
            categoryNodeMakeUp.style.display = 'none'
            categoryNodeSkinCare.style.display = 'block'
            history.pushState(null, null, window.location.origin + '/category/' + slug)
        }
        
        
    }


    function clearCategory()
    {
        leftScreen.classList.remove('MainHomeBanner-Content-BackgroundLeftScreenAnimation');
        leftScreenContent.classList.remove('MainHomeBanner-Content-BackgroundLeftScreenContentAnimation');

        rightCategoryContent.classList.remove('MainHomeBanner-categoryScreenExisting')
        rightCategoryContent.classList.remove('MainHomeBanner-categoryScreenAppearance')
        SubNavigationMenuByMainHomeBanner.classList.remove('SubNavigationMenu-existing')
        SubNavigationMenuByMainHomeBanner.classList.remove('SubNavigationMenu-appearance')


        rightScreen.classList.remove('MainHomeBanner-Content-BackgroundRightScreenAnimation');
        rightScreenContent.classList.remove('MainHomeBanner-Content-BackgroundRightScreenContentAnimation');

        leftCategoryContent.classList.remove('MainHomeBanner-categoryScreenExisting')
        leftCategoryContent.classList.remove('MainHomeBanner-categoryScreenAppearance')
        SubNavigationMenuByMainHomeBanner.classList.remove('SubNavigationMenu-existing')
        SubNavigationMenuByMainHomeBanner.classList.remove('SubNavigationMenu-appearance')
    }


function goTo(link) {
        window.location = link
        openMenuHandler()
    }

</script>






<style>



.SubNavigationMenu-ScrollDown-mobile {
    visibility: hidden    
}

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/alex/Documents/GitHub/darling/themes/demo/partials/site/main-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 180,  243 => 174,  234 => 168,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = mainBanner.record %}
{% set displayColumn = mainBanner.displayColumn %}
{% set notFoundMessage = mainBanner.notFoundMessage %}


<div class=\"MainHomeBanner\">

    <div class=\"SubNavigationMenu\">
        <div class=\"SubNavigationMenu-ChangeLanguage jsDesktop\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-disabled\" onclick=\"channgeLanguage('en', false)\">ENG</a>
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-active\" onclick=\"channgeLanguage('ru', false)\">RUS</a>
        </div>
        <div class=\"SubNavigationMenu-ScrollDown t-cover__arrow-wrapper_animated jsHideScrollDown\" onclick=\"scrollDown()\">
            <svg width=\"27\" height=\"14\" viewBox=\"0 0 27 14\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M0 3.60039L2.4 0.400391L13.2 8.50039L24 0.400391L26.4 3.60039L13.2 13.5004L0 3.60039Z\" fill=\"white\"/>
            </svg>

        </div>
        <div class=\"SubNavigationMenu-ScrollDown-mobile t-cover__arrow-wrapper_animated\">Scroll down</div> 
    </div>

    <div class=\"MainHomeBanner-Content\">

        <div class=\"MainHomeBanner-categoryLeftScreen\">
            <h1 class=\"MainHomeBanner-categoryLeftScreen-title\">SKIN CARE</h1>

            <div>
                <div class=\"MainHomeBanner-categoryLeftScreen-content\">
                    <a href=\"#pads\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">
                       pads
                    </a>
                    <span> /</span>

                    <a href=\"#patches\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">patches</a><br /><span>
                        /</span>
                    <a href=\"#masks\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">masks</a>
                </div>
            </div>
        </div>

        <div class=\"MainHomeBanner-categoryRightScreen\">
            <h1 class=\"MainHomeBanner-categoryLeftScreen-title\">MAKEUP</h1>

            <div>
                <div class=\"MainHomeBanner-categoryLeftScreen-content\">
                    <a href=\"#eyes\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">
                     eyes
                    </a>
                    <span> /</span>

                    <a href=\"#lips\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">lips</a><br /><span>
                        /</span>
                    <a href=\"#face\" class=\"MainHomeBanner-categoryLeftScreen-contentItem\">face</a>
                </div>
            </div>
        </div>

        <div class=\"MainHomeBanner-Content-Links\">

            <div
                    class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left MainHomeBanner-Content-LinkHolderDiv\">
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>
                </span>
                <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </div>

            <a ontouchend=\"goTo('/category/makeup')\"
               class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left MainHomeBanner-Content-LinkHolderLink\">
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span>
                <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </a>

            <div href=\"#\" class=\"MainHomeBanner-Content-SlashHolder\">
                <div class=\"MainHomeBanner-Content-Slash\">/</div>
            </div>

            <div
                    class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right MainHomeBanner-Content-LinkHolderDiv\">
                <div class=\"MainHomeBanner-Content-LinkItem\">SKIN CARE</div>
                <!-- <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span> -->
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>

                </span>
            </div>

            <a ontouchend=\"goTo('/category/skin-care')\"
               class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right MainHomeBanner-Content-LinkHolderLink\">
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div>
                <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\" class=\"MainHomeBanner-arrowIcon\">
                        <style type=\"text/css\">
                        </style>
                        <polygon points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \"/>
                    </svg>

                </span>
            </a>

        </div>

        <div class=\"MainHomeBanner-Content-Background\">
            <div class=\"MainHomeBanner-Content-BackgroundMobile\"
                 style=\"background-image: url({{'main-banner/2800px.jpg' | media }}); background-size: auto 200vh; background-position: center -48vh;\">
            </div>

            <div class=\"MainHomeBanner-Content-BackgroundLeftScreen\"
                 style=\"background-color: #93969D; background-size: cover;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundLeftScreenContent\" style=\"background-image: url({{'main-banner/left.jpg' | media }});
            background-size: auto 80vw; background-repeat: no-repeat; background-position: 11.8vw -12vw;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundRightScreen\"
                 style=\"background-color: #A5A8AF; background-size: cover;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundRightScreenContent\" style=\"background-image: url({{'main-banner/right.jpg' | media }});
                background-size: auto 80vw; background-repeat: no-repeat; background-position: -38.2vw -12vw\"></div>
        </div>


    </div>

</div>

<style>
    .jsHideScrollDown {
        display: none;
    }
</style>

<script>


     

    
    
    const vh = window.innerHeight * 0.01;
     document.documentElement.style.setProperty('--vh', `\${vh}px`);

    const leftLink = document.querySelector(\".MainHomeBanner-Content-LinkHolder--left\");
    const rightLink = document.querySelector(\".MainHomeBanner-Content-LinkHolder--right\");
    const leftScreen = document.querySelector(\".MainHomeBanner-Content-BackgroundLeftScreen\");
    const leftScreenContent = document.querySelector(\".MainHomeBanner-Content-BackgroundLeftScreenContent\");
    const rightScreen = document.querySelector(\".MainHomeBanner-Content-BackgroundRightScreen\");
    const rightScreenContent = document.querySelector(\".MainHomeBanner-Content-BackgroundRightScreenContent\");
    const textContent = document.querySelector(\".MainHomeBanner-Content-Links\");
    const leftCategoryContent = document.querySelector(\".MainHomeBanner-categoryLeftScreen\");
    const rightCategoryContent = document.querySelector(\".MainHomeBanner-categoryRightScreen\")
    const SubNavigationMenuByMainHomeBanner = document.querySelector(\".MainHomeBanner .SubNavigationMenu\");

    const deleteLink = () => {
        textContent.classList.add('MainHomeBanner-Content-LinkHolder--delete');
    }

    const hideLink = () => {
        textContent.classList.add('MainHomeBanner-Content-LinkHolder--hided');
    }

    const onLeftLinkAction = () => {
        clearCategory()

        leftScreen.classList.add('MainHomeBanner-Content-BackgroundLeftScreenAnimation');
        leftScreenContent.classList.add('MainHomeBanner-Content-BackgroundLeftScreenContentAnimation');
        hideLink();
        setTimeout(deleteLink, 1000);
        rightCategoryContent.classList.add('MainHomeBanner-categoryScreenExisting')
        rightCategoryContent.classList.add('MainHomeBanner-categoryScreenAppearance')
        SubNavigationMenuByMainHomeBanner.classList.add('SubNavigationMenu-existing')
        SubNavigationMenuByMainHomeBanner.classList.add('SubNavigationMenu-appearance')
        openCategory('makeup','rigth')
        let scrollDownNode = document.querySelector('.jsHideScrollDown')
        scrollDownNode.classList.remove('jsHideScrollDown')
        document.getElementById('footer').classList.remove('jsHideScrollDown')
    }

    const onRightLinkAction = () => {
        clearCategory()

        rightScreen.classList.add('MainHomeBanner-Content-BackgroundRightScreenAnimation');
        rightScreenContent.classList.add('MainHomeBanner-Content-BackgroundRightScreenContentAnimation');
        hideLink()
        setTimeout(deleteLink, 1000);
        leftCategoryContent.classList.add('MainHomeBanner-categoryScreenExisting')
        leftCategoryContent.classList.add('MainHomeBanner-categoryScreenAppearance')
        SubNavigationMenuByMainHomeBanner.classList.add('SubNavigationMenu-existing')
        SubNavigationMenuByMainHomeBanner.classList.add('SubNavigationMenu-appearance')
        openCategory('skin-care','left')
        let scrollDownNode = document.querySelector('.jsHideScrollDown')
        scrollDownNode.classList.remove('jsHideScrollDown')
        document.getElementById('footer').classList.remove('jsHideScrollDown')
    }
    const isDesktop = window.matchMedia(\"(min-width: 1024px)\");


    if (isDesktop) {
        leftLink.addEventListener(\"click\", onLeftLinkAction);
        rightLink.addEventListener(\"click\", onRightLinkAction);
    }



    function openCategory (slug, side) {
        let categoryNodeMakeUp = document.getElementById('makeup')
        let categoryNodeSkinCare = document.getElementById('skin-care')

        if (slug == 'makeup') {
            categoryNodeMakeUp.style.display = 'block'
            categoryNodeSkinCare.style.display = 'none'
            history.pushState(null, null, window.location.origin + '/category/' + slug)
        } if (slug == 'skin-care') {
            categoryNodeMakeUp.style.display = 'none'
            categoryNodeSkinCare.style.display = 'block'
            history.pushState(null, null, window.location.origin + '/category/' + slug)
        }
        
        
    }


    function clearCategory()
    {
        leftScreen.classList.remove('MainHomeBanner-Content-BackgroundLeftScreenAnimation');
        leftScreenContent.classList.remove('MainHomeBanner-Content-BackgroundLeftScreenContentAnimation');

        rightCategoryContent.classList.remove('MainHomeBanner-categoryScreenExisting')
        rightCategoryContent.classList.remove('MainHomeBanner-categoryScreenAppearance')
        SubNavigationMenuByMainHomeBanner.classList.remove('SubNavigationMenu-existing')
        SubNavigationMenuByMainHomeBanner.classList.remove('SubNavigationMenu-appearance')


        rightScreen.classList.remove('MainHomeBanner-Content-BackgroundRightScreenAnimation');
        rightScreenContent.classList.remove('MainHomeBanner-Content-BackgroundRightScreenContentAnimation');

        leftCategoryContent.classList.remove('MainHomeBanner-categoryScreenExisting')
        leftCategoryContent.classList.remove('MainHomeBanner-categoryScreenAppearance')
        SubNavigationMenuByMainHomeBanner.classList.remove('SubNavigationMenu-existing')
        SubNavigationMenuByMainHomeBanner.classList.remove('SubNavigationMenu-appearance')
    }


function goTo(link) {
        window.location = link
        openMenuHandler()
    }

</script>






<style>



.SubNavigationMenu-ScrollDown-mobile {
    visibility: hidden    
}

</style>", "/Users/alex/Documents/GitHub/darling/themes/demo/partials/site/main-banner.htm", "");
    }
}

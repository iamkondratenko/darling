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

/* /Users/iamk/git/darling/themes/demo/partials/site/main-banner.htm */
class __TwigTemplate_c23ee6000f493876b9f382c842d46bebdabe8d783a8bb7cf2bcaec60dadde40b extends \Twig\Template
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
        $filters = array("media" => 166);
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
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-active\" href=\"#\">ENG</a>
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\">RUS</a>
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
            <div class=\"MainHomeBanner-categoryLeftScreen-title\">SKIN CARE</div>

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
            <div class=\"MainHomeBanner-categoryLeftScreen-title\">MAKEUP</div>

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
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                              d=\"M30.4535 0L2.26562 28.1878L2.28467 28.2069L0 30.4915L2.26782 32.7594L2.2655 32.7617L30.4534 60.9495L36.1102 55.2927L14.9224 34.1048H70.2656V26.1048H15.6624L36.1103 5.65686L30.4535 0Z\" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span>
                <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </div>

            <a href=\"/category/makeup/\"
               class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left MainHomeBanner-Content-LinkHolderLink\">
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                              d=\"M30.4535 0L2.26562 28.1878L2.28467 28.2069L0 30.4915L2.26782 32.7594L2.2655 32.7617L30.4534 60.9495L36.1102 55.2927L14.9224 34.1048H70.2656V26.1048H15.6624L36.1103 5.65686L30.4535 0Z\" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
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
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div>
                <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                              d=\"M39.8121 60.9492L68 32.7614L67.981 32.7423L70.2656 30.4577L67.9978 28.1898L68.0001 28.1875L39.8123 -0.000307838L34.1554 5.65655L55.3433 26.8444L2.98154e-06 26.8444L2.28216e-06 34.8444L54.6033 34.8444L34.1553 55.2924L39.8121 60.9492Z\" />
                    </svg>

                </span>
            </div>

            <a href=\"/category/skin-care/\"
               class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right MainHomeBanner-Content-LinkHolderLink\">
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div>
                <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                              d=\"M39.8121 60.9492L68 32.7614L67.981 32.7423L70.2656 30.4577L67.9978 28.1898L68.0001 28.1875L39.8123 -0.000307838L34.1554 5.65655L55.3433 26.8444L2.98154e-06 26.8444L2.28216e-06 34.8444L54.6033 34.8444L34.1553 55.2924L39.8121 60.9492Z\" />
                    </svg>

                </span>
            </a>

        </div>

        <div class=\"MainHomeBanner-Content-Background\">
            <div class=\"MainHomeBanner-Content-BackgroundMobile\"
                 style=\"background-image: url(";
        // line 166
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/main-screen.jpg");
        echo "); background-size: cover; background-position: 50% 0;\">
            </div>

            <div class=\"MainHomeBanner-Content-BackgroundLeftScreen\"
                 style=\"background-image: url(";
        // line 170
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/left-screen-bg-color.jpg");
        echo "); background-size: cover;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundLeftScreenContent\" style=\"background-image: url(";
        // line 172
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/left-screen-content.png");
        echo ");
            background-size: auto 58vw; background-repeat: no-repeat; background-position: 25.25vw 0;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundRightScreen\"
                 style=\"background-image: url(";
        // line 176
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/right-screen-bg-color.jpg");
        echo "); background-size: cover;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundRightScreenContent\" style=\"background-image: url(";
        // line 178
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/right-screen-content.png");
        echo ");
                background-size: auto 58vw; background-repeat: no-repeat; background-position: -25vw 0;\"></div>
        </div>


    </div>

</div>

<style>
    .jsHideScrollDown {
        display: none;
    }
</style>

<script>
    const leftLink = document.querySelector(\".MainHomeBanner-Content-LinkHolder--left\");
    const rightLink = document.querySelector(\".MainHomeBanner-Content-LinkHolder--right\");
    const leftScreen = document.querySelector(\".MainHomeBanner-Content-BackgroundLeftScreen\");
    const leftScreenContent = document.querySelector(\".MainHomeBanner-Content-BackgroundLeftScreenContent\");
    const rightScreen = document.querySelector(\".MainHomeBanner-Content-BackgroundRightScreen\");
    const rightScreenContent = document.querySelector(\".MainHomeBanner-Content-BackgroundRightScreenContent\");
    const textContent = document.querySelector(\".MainHomeBanner-Content-Links\");
    const leftCategoryContent = document.querySelector(\".MainHomeBanner-categoryLeftScreen\");
    const rightCategoryContent = document.querySelector(\".MainHomeBanner-categoryRightScreen\")

    const deleteLink = () => {
        textContent.classList.add('MainHomeBanner-Content-LinkHolder--delete');
    }

    const hideLink = () => {
        textContent.classList.add('MainHomeBanner-Content-LinkHolder--hided');
    }

    const onLeftLinkAction = () => {

        leftScreen.classList.add('MainHomeBanner-Content-BackgroundLeftScreenAnimation');
        leftScreenContent.classList.add('MainHomeBanner-Content-BackgroundLeftScreenContentAnimation');
        hideLink();
        setTimeout(deleteLink, 1000);
        rightCategoryContent.classList.add('MainHomeBanner-categoryScreenExisting')
        rightCategoryContent.classList.add('MainHomeBanner-categoryScreenAppearance')
        openCategory('makeup')
        let scrollDownNode = document.querySelector('.jsHideScrollDown')
        scrollDownNode.classList.remove('jsHideScrollDown')
    }

    const onRightLinkAction = () => {
        rightScreen.classList.add('MainHomeBanner-Content-BackgroundRightScreenAnimation');
        rightScreenContent.classList.add('MainHomeBanner-Content-BackgroundRightScreenContentAnimation');
        hideLink()
        setTimeout(deleteLink, 1000);
        leftCategoryContent.classList.add('MainHomeBanner-categoryScreenExisting')
        leftCategoryContent.classList.add('MainHomeBanner-categoryScreenAppearance')
        openCategory('skin-care')
        let scrollDownNode = document.querySelector('.jsHideScrollDown')
        scrollDownNode.classList.remove('jsHideScrollDown')
    }
    const isDesktop = window.matchMedia(\"(min-width: 1024px)\");

    console.log('isDesktop', isDesktop.matches);

    if (isDesktop) {
        leftLink.addEventListener(\"click\", onLeftLinkAction);
        rightLink.addEventListener(\"click\", onRightLinkAction);
    }


    function openCategory (slug) {
        let categoryNode = document.getElementById(slug)
        categoryNode.style.display = 'block'
        history.pushState(null, null, 'category/' + slug)
    }


</script>



<style>

</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/site/main-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 178,  251 => 176,  244 => 172,  239 => 170,  232 => 166,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = mainBanner.record %}
{% set displayColumn = mainBanner.displayColumn %}
{% set notFoundMessage = mainBanner.notFoundMessage %}


<div class=\"MainHomeBanner\">

    <div class=\"SubNavigationMenu\">
        <div class=\"SubNavigationMenu-ChangeLanguage jsDesktop\">
            <a class=\"SubNavigationMenu-LanguageItem LanguageItem-active\" href=\"#\">ENG</a>
            <a class=\"SubNavigationMenu-LanguageItem\" href=\"#\">RUS</a>
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
            <div class=\"MainHomeBanner-categoryLeftScreen-title\">SKIN CARE</div>

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
            <div class=\"MainHomeBanner-categoryLeftScreen-title\">MAKEUP</div>

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
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                              d=\"M30.4535 0L2.26562 28.1878L2.28467 28.2069L0 30.4915L2.26782 32.7594L2.2655 32.7617L30.4534 60.9495L36.1102 55.2927L14.9224 34.1048H70.2656V26.1048H15.6624L36.1103 5.65686L30.4535 0Z\" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span>
                <div class=\"MainHomeBanner-Content-LinkItem\">makeup</div>
            </div>

            <a href=\"/category/makeup/\"
               class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--left MainHomeBanner-Content-LinkHolderLink\">
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                              d=\"M30.4535 0L2.26562 28.1878L2.28467 28.2069L0 30.4915L2.26782 32.7594L2.2655 32.7617L30.4534 60.9495L36.1102 55.2927L14.9224 34.1048H70.2656V26.1048H15.6624L36.1103 5.65686L30.4535 0Z\" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow-Left\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
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
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div>
                <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                              d=\"M39.8121 60.9492L68 32.7614L67.981 32.7423L70.2656 30.4577L67.9978 28.1898L68.0001 28.1875L39.8123 -0.000307838L34.1554 5.65655L55.3433 26.8444L2.98154e-06 26.8444L2.28216e-06 34.8444L54.6033 34.8444L34.1553 55.2924L39.8121 60.9492Z\" />
                    </svg>

                </span>
            </div>

            <a href=\"/category/skin-care/\"
               class=\"MainHomeBanner-Content-LinkHolder MainHomeBanner-Content-LinkHolder--right MainHomeBanner-Content-LinkHolderLink\">
                <div class=\"MainHomeBanner-Content-LinkItem\">Skin care</div>
                <span class=\"MainHomeBanner-Content-LinkArrow-Right\">
                    <svg version=\"1.1\" id=\"LinkArrow-Left\" xmlns=\"http://www.w3.org/2000/svg\"
                         xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 62 55\"
                         style=\"enable-background:new 0 0 62 55;\" xml:space=\"preserve\">
                        <style type=\"text/css\">
                            .st0 {
                                fill: #FFFFFF;
                            }
                        </style>
                        <polygon class=\"st0\" points=\"62,23.5 15.3,23.5 32.9,5.9 27.3,0.2 5.7,21.8 5.7,21.8 0,27.5 27.3,54.8 32.9,49.1 15.3,31.5 62,31.5
                            \" />
                    </svg>
                </span>
                <span class=\"MainHomeBanner-Content-LinkArrow\">
                    <svg width=\"71\" height=\"61\" viewBox=\"0 0 71 61\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"#EA028A\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\"
                              d=\"M39.8121 60.9492L68 32.7614L67.981 32.7423L70.2656 30.4577L67.9978 28.1898L68.0001 28.1875L39.8123 -0.000307838L34.1554 5.65655L55.3433 26.8444L2.98154e-06 26.8444L2.28216e-06 34.8444L54.6033 34.8444L34.1553 55.2924L39.8121 60.9492Z\" />
                    </svg>

                </span>
            </a>

        </div>

        <div class=\"MainHomeBanner-Content-Background\">
            <div class=\"MainHomeBanner-Content-BackgroundMobile\"
                 style=\"background-image: url({{'main-banner/main-screen.jpg' | media }}); background-size: cover; background-position: 50% 0;\">
            </div>

            <div class=\"MainHomeBanner-Content-BackgroundLeftScreen\"
                 style=\"background-image: url({{'main-banner/left-screen-bg-color.jpg' | media }}); background-size: cover;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundLeftScreenContent\" style=\"background-image: url({{'main-banner/left-screen-content.png' | media }});
            background-size: auto 58vw; background-repeat: no-repeat; background-position: 25.25vw 0;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundRightScreen\"
                 style=\"background-image: url({{'main-banner/right-screen-bg-color.jpg' | media }}); background-size: cover;\"></div>

            <div class=\"MainHomeBanner-Content-BackgroundRightScreenContent\" style=\"background-image: url({{'main-banner/right-screen-content.png' | media }});
                background-size: auto 58vw; background-repeat: no-repeat; background-position: -25vw 0;\"></div>
        </div>


    </div>

</div>

<style>
    .jsHideScrollDown {
        display: none;
    }
</style>

<script>
    const leftLink = document.querySelector(\".MainHomeBanner-Content-LinkHolder--left\");
    const rightLink = document.querySelector(\".MainHomeBanner-Content-LinkHolder--right\");
    const leftScreen = document.querySelector(\".MainHomeBanner-Content-BackgroundLeftScreen\");
    const leftScreenContent = document.querySelector(\".MainHomeBanner-Content-BackgroundLeftScreenContent\");
    const rightScreen = document.querySelector(\".MainHomeBanner-Content-BackgroundRightScreen\");
    const rightScreenContent = document.querySelector(\".MainHomeBanner-Content-BackgroundRightScreenContent\");
    const textContent = document.querySelector(\".MainHomeBanner-Content-Links\");
    const leftCategoryContent = document.querySelector(\".MainHomeBanner-categoryLeftScreen\");
    const rightCategoryContent = document.querySelector(\".MainHomeBanner-categoryRightScreen\")

    const deleteLink = () => {
        textContent.classList.add('MainHomeBanner-Content-LinkHolder--delete');
    }

    const hideLink = () => {
        textContent.classList.add('MainHomeBanner-Content-LinkHolder--hided');
    }

    const onLeftLinkAction = () => {

        leftScreen.classList.add('MainHomeBanner-Content-BackgroundLeftScreenAnimation');
        leftScreenContent.classList.add('MainHomeBanner-Content-BackgroundLeftScreenContentAnimation');
        hideLink();
        setTimeout(deleteLink, 1000);
        rightCategoryContent.classList.add('MainHomeBanner-categoryScreenExisting')
        rightCategoryContent.classList.add('MainHomeBanner-categoryScreenAppearance')
        openCategory('makeup')
        let scrollDownNode = document.querySelector('.jsHideScrollDown')
        scrollDownNode.classList.remove('jsHideScrollDown')
    }

    const onRightLinkAction = () => {
        rightScreen.classList.add('MainHomeBanner-Content-BackgroundRightScreenAnimation');
        rightScreenContent.classList.add('MainHomeBanner-Content-BackgroundRightScreenContentAnimation');
        hideLink()
        setTimeout(deleteLink, 1000);
        leftCategoryContent.classList.add('MainHomeBanner-categoryScreenExisting')
        leftCategoryContent.classList.add('MainHomeBanner-categoryScreenAppearance')
        openCategory('skin-care')
        let scrollDownNode = document.querySelector('.jsHideScrollDown')
        scrollDownNode.classList.remove('jsHideScrollDown')
    }
    const isDesktop = window.matchMedia(\"(min-width: 1024px)\");

    console.log('isDesktop', isDesktop.matches);

    if (isDesktop) {
        leftLink.addEventListener(\"click\", onLeftLinkAction);
        rightLink.addEventListener(\"click\", onRightLinkAction);
    }


    function openCategory (slug) {
        let categoryNode = document.getElementById(slug)
        categoryNode.style.display = 'block'
        history.pushState(null, null, 'category/' + slug)
    }


</script>



<style>

</style>", "/Users/iamk/git/darling/themes/demo/partials/site/main-banner.htm", "");
    }
}

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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
    <div class=\"MainMenuDrawer-Items\">
        <div class=\"MainMenuDrawer-Item\">
            <div class=\"MainMenuDrawer-Item-Category\">MakeUp</div>
            <div class=\"MainMenuDrawer-Item-Subcategories\">
                <a href=\"#\" class=\"MainMenuDrawer-Item-Subcategory\">All products</a>
                <a href=\"#\" class=\"MainMenuDrawer-Item-Subcategory\">Masks</a>
                <a href=\"#\" class=\"MainMenuDrawer-Item-Subcategory\">Patches</a>
                <a href=\"#\" class=\"MainMenuDrawer-Item-Subcategory\">Pads</a>
            </div>
        </div>
    </div>
</div>

<style>
    a.MainMenuDrawer-Item-Subcategory {
        text-decoration: none;
        color: black;
        font-size: 40px;

    }
    .MainMenuDrawer-Item-Subcategories{
        display: flex;
        flex-direction: column;
    }
    .MainMenuDrawer-Items{
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: black;
    }

    .MainMenuDrawer {
        width: 100vw;
        height: 100vh;
        background-color: #fff;
        opacity: 0;
        z-index: -555;
        transition-duration: 400ms;
        position: absolute;
    }
    .MainMenuDrawer.js-menuIsOpened {
        z-index: 990;
        opacity: 1;
        transition-duration: 400ms;
    }
</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/site/menu-drawer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"MainMenuDrawer\">
    <div class=\"MainMenuDrawer-Items\">
        <div class=\"MainMenuDrawer-Item\">
            <div class=\"MainMenuDrawer-Item-Category\">MakeUp</div>
            <div class=\"MainMenuDrawer-Item-Subcategories\">
                <a href=\"#\" class=\"MainMenuDrawer-Item-Subcategory\">All products</a>
                <a href=\"#\" class=\"MainMenuDrawer-Item-Subcategory\">Masks</a>
                <a href=\"#\" class=\"MainMenuDrawer-Item-Subcategory\">Patches</a>
                <a href=\"#\" class=\"MainMenuDrawer-Item-Subcategory\">Pads</a>
            </div>
        </div>
    </div>
</div>

<style>
    a.MainMenuDrawer-Item-Subcategory {
        text-decoration: none;
        color: black;
        font-size: 40px;

    }
    .MainMenuDrawer-Item-Subcategories{
        display: flex;
        flex-direction: column;
    }
    .MainMenuDrawer-Items{
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: black;
    }

    .MainMenuDrawer {
        width: 100vw;
        height: 100vh;
        background-color: #fff;
        opacity: 0;
        z-index: -555;
        transition-duration: 400ms;
        position: absolute;
    }
    .MainMenuDrawer.js-menuIsOpened {
        z-index: 990;
        opacity: 1;
        transition-duration: 400ms;
    }
</style>", "/Users/iamk/git/darling/themes/demo/partials/site/menu-drawer.htm", "");
    }
}

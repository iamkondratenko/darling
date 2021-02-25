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

/* /Users/iamk/git/darling/themes/demo/partials/site/footer.htm */
class __TwigTemplate_7469baec3f1fd5f9f1836e4f2d75feb6299cc04852433dfa9c7e33c68978dfec extends \Twig\Template
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
        echo "<div id=\"footer\">
    <div class=\"social_networks\">
        <div class=\"social_networks_title\">let’s be friends</div>
        <div class=\"social_networks_links\">
            <a href=\"#\" class=\"social_networks_link\">@hi_darling_official</a>
            <a href=\"#\" class=\"social_networks_link\">#youredarling</a>
            <a href=\"#\" class=\"social_networks_link\">@hi_darling_ru</a>
        </div>
    </div>
    <div class=\"footer_links\">
        <div class=\"footer_links\">
            <a href=\"#\" class=\"footer_link\">Buy now</a>
            <a href=\"#\" class=\"footer_link\">Privacy policy</a>
        </div>
    </div>
</div>

<style>


    a.footer_link {
        color: white;
        text-decoration: underline;
        margin: 0 0 0 50px;
        line-height: 2;
        font-size: 20px;
    }
    .footer_links {
        text-align: right;
        display: flex;
        align-items: flex-end;
        margin: 0 0 5px;
    }
    .social_networks {
        width: 450px;
        max-width: 90vw;
    }
    a.social_networks_link {
        color: white;
        text-decoration: none;
        margin: 0 50px 0 0;
        line-height: 2;
        font-size: 20px;
    }
    .social_networks_title {
        font-size: 50px;
        text-transform: uppercase;
        color: white;
        font-weight: 700;
    }
    #footer {
        width: 100%;
        padding: 60px 60px 0;
        height: 230px;
        display: flex;
        background-color: #EA028A;
        justify-content: space-between;
    }

    @media screen and (max-width: 1080px) {

        #footer {
            flex-direction: column;
            padding: 30px 30px 0;
            box-sizing: content-box;
            overflow: hidden;
            max-width: calc(100vw - 60px);
        }

        .social_networks_title {
            font-size: 30px;

        }

        .social_networks_links {
            display: flex;
            flex-direction: column;
        }

        .footer_links {
            width: 100%;
            justify-content: space-between;
            text-align: left;
        }

        a.footer_link {
            margin: 0;
        }

    }
</style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\">
    <div class=\"social_networks\">
        <div class=\"social_networks_title\">let’s be friends</div>
        <div class=\"social_networks_links\">
            <a href=\"#\" class=\"social_networks_link\">@hi_darling_official</a>
            <a href=\"#\" class=\"social_networks_link\">#youredarling</a>
            <a href=\"#\" class=\"social_networks_link\">@hi_darling_ru</a>
        </div>
    </div>
    <div class=\"footer_links\">
        <div class=\"footer_links\">
            <a href=\"#\" class=\"footer_link\">Buy now</a>
            <a href=\"#\" class=\"footer_link\">Privacy policy</a>
        </div>
    </div>
</div>

<style>


    a.footer_link {
        color: white;
        text-decoration: underline;
        margin: 0 0 0 50px;
        line-height: 2;
        font-size: 20px;
    }
    .footer_links {
        text-align: right;
        display: flex;
        align-items: flex-end;
        margin: 0 0 5px;
    }
    .social_networks {
        width: 450px;
        max-width: 90vw;
    }
    a.social_networks_link {
        color: white;
        text-decoration: none;
        margin: 0 50px 0 0;
        line-height: 2;
        font-size: 20px;
    }
    .social_networks_title {
        font-size: 50px;
        text-transform: uppercase;
        color: white;
        font-weight: 700;
    }
    #footer {
        width: 100%;
        padding: 60px 60px 0;
        height: 230px;
        display: flex;
        background-color: #EA028A;
        justify-content: space-between;
    }

    @media screen and (max-width: 1080px) {

        #footer {
            flex-direction: column;
            padding: 30px 30px 0;
            box-sizing: content-box;
            overflow: hidden;
            max-width: calc(100vw - 60px);
        }

        .social_networks_title {
            font-size: 30px;

        }

        .social_networks_links {
            display: flex;
            flex-direction: column;
        }

        .footer_links {
            width: 100%;
            justify-content: space-between;
            text-align: left;
        }

        a.footer_link {
            margin: 0;
        }

    }
</style>", "/Users/iamk/git/darling/themes/demo/partials/site/footer.htm", "");
    }
}

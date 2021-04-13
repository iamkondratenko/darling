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
        $filters = array("media" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div id=\"footer\" class=\"jsHideScrollDown\">
    <div class=\"social_networks_title\">let’s be friends</div>
            
    <div class=\"footer-content\">
        <div class=\"social_networks\">
            <div class=\"social_networks_links\">
                <a href=\"https://www.instagram.com/hi_darling_official/\" class=\"social_networks_link social_networks_link--official\" target=\"_blank\">@hi_darling_official</a>
                <a href=\"https://www.instagram.com/hi_darling_ru/\" class=\"social_networks_link social_networks_link--ru\" target=\"_blank\">@hi_darling_ru</a>
                <a href=\"#\" class=\"social_networks_link social_networks_link--hashtag\">#youredarling</a>
            </div>
        </div>
        <div class=\"footer_links\">
            <div class=\"footer_links\">
                <a href=\"https://goldapple.ru/brands/darling#144082\" class=\"footer_link\" target=\"_blank\">Buy now</a>
                <a href=";
        // line 15
        echo $this->extensions['System\Twig\Extension']->mediaFilter("privacy/privacy.pdf");
        echo " class=\"footer_link\" target=\"_blank\">Privacy policy</a>
            </div>
        </div>
    </div>
</div>

<style>


    a.footer_link {
        color: white;
        text-decoration: underline;
        margin: 0 0 0 50px;
        font-size: 20px;
        margin-bottom: 10px;
    }
    
    .footer_links {
        text-align: right;
        display: flex;
        align-items: flex-end;
    }
    .social_networks {
        width: 450px;
        max-width: 90vw;
    }
    
    .social_networks_links {
    display: flex;
    flex-wrap: wrap;
    }
        
        
    a.social_networks_link {
        color: white;
        text-decoration: none;
        margin: 0 50px 0 0;
        line-height: 50px;
        font-size: 20px;
    }
    .social_networks_title {
        font-size: 50px;
        text-transform: uppercase;
        color: white;
        font-weight: 700;
        margin-bottom: 16px;
    }
    #footer {
        width: 100%;
        padding: 60px;
        background-color: #EA028A; 
    }
    
    .footer-content{
        display: flex;
        justify-content: space-between;
    }
    
    .social_networks_link--official{
        order: 0;    
    }
    
     .social_networks_link--hashtag{
        order: 1;    
    }
    
     .social_networks_link--ru{
        order: 2;    
    }

    @media screen and (max-width: 1080px) {

        #footer {
            padding: 60px 45px;
            box-sizing: border-box;
            overflow: hidden;
        }
        
       

        .social_networks_title {
            font-size: 50px;
            line-height: 50px;
            margin-bottom: 24px;
        }

        .footer_links {
            flex: 1 1 auto;
            justify-content: flex-end;
            text-align: left;
        }

        a.footer_link {
            margin: 11px;
        }

    }
    
    @media screen and (max-width: 981px) {
         .social_networks {
            flex: 1 1 60%;
        }
    }
    
    @media screen and (max-width: 642px) {

        #footer {
            padding: 60px 30px;
        }
        
        .footer-content{
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
        
        .social_networks{
            margin-bottom: 8px;    
        }
        
        .footer_links {
            justify-content: space-between;
        }
        
        .social_networks_title {
            font-size: 30px;
            line-height: 30px;
        }
        
        .social_networks_links {
            flex-direction: column;
        }
        
        .social_networks_link{
            order: 0;    
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

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 15,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\" class=\"jsHideScrollDown\">
    <div class=\"social_networks_title\">let’s be friends</div>
            
    <div class=\"footer-content\">
        <div class=\"social_networks\">
            <div class=\"social_networks_links\">
                <a href=\"https://www.instagram.com/hi_darling_official/\" class=\"social_networks_link social_networks_link--official\" target=\"_blank\">@hi_darling_official</a>
                <a href=\"https://www.instagram.com/hi_darling_ru/\" class=\"social_networks_link social_networks_link--ru\" target=\"_blank\">@hi_darling_ru</a>
                <a href=\"#\" class=\"social_networks_link social_networks_link--hashtag\">#youredarling</a>
            </div>
        </div>
        <div class=\"footer_links\">
            <div class=\"footer_links\">
                <a href=\"https://goldapple.ru/brands/darling#144082\" class=\"footer_link\" target=\"_blank\">Buy now</a>
                <a href={{'privacy/privacy.pdf' | media }} class=\"footer_link\" target=\"_blank\">Privacy policy</a>
            </div>
        </div>
    </div>
</div>

<style>


    a.footer_link {
        color: white;
        text-decoration: underline;
        margin: 0 0 0 50px;
        font-size: 20px;
        margin-bottom: 10px;
    }
    
    .footer_links {
        text-align: right;
        display: flex;
        align-items: flex-end;
    }
    .social_networks {
        width: 450px;
        max-width: 90vw;
    }
    
    .social_networks_links {
    display: flex;
    flex-wrap: wrap;
    }
        
        
    a.social_networks_link {
        color: white;
        text-decoration: none;
        margin: 0 50px 0 0;
        line-height: 50px;
        font-size: 20px;
    }
    .social_networks_title {
        font-size: 50px;
        text-transform: uppercase;
        color: white;
        font-weight: 700;
        margin-bottom: 16px;
    }
    #footer {
        width: 100%;
        padding: 60px;
        background-color: #EA028A; 
    }
    
    .footer-content{
        display: flex;
        justify-content: space-between;
    }
    
    .social_networks_link--official{
        order: 0;    
    }
    
     .social_networks_link--hashtag{
        order: 1;    
    }
    
     .social_networks_link--ru{
        order: 2;    
    }

    @media screen and (max-width: 1080px) {

        #footer {
            padding: 60px 45px;
            box-sizing: border-box;
            overflow: hidden;
        }
        
       

        .social_networks_title {
            font-size: 50px;
            line-height: 50px;
            margin-bottom: 24px;
        }

        .footer_links {
            flex: 1 1 auto;
            justify-content: flex-end;
            text-align: left;
        }

        a.footer_link {
            margin: 11px;
        }

    }
    
    @media screen and (max-width: 981px) {
         .social_networks {
            flex: 1 1 60%;
        }
    }
    
    @media screen and (max-width: 642px) {

        #footer {
            padding: 60px 30px;
        }
        
        .footer-content{
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
        
        .social_networks{
            margin-bottom: 8px;    
        }
        
        .footer_links {
            justify-content: space-between;
        }
        
        .social_networks_title {
            font-size: 30px;
            line-height: 30px;
        }
        
        .social_networks_links {
            flex-direction: column;
        }
        
        .social_networks_link{
            order: 0;    
        }
        
         a.footer_link {
            margin: 0;
        }

    }
</style>", "/Users/iamk/git/darling/themes/demo/partials/site/footer.htm", "");
    }
}

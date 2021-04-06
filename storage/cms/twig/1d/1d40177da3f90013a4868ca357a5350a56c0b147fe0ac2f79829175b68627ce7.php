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

/* /Users/iamk/git/darling/themes/demo/partials/category/category-main-banner.htm */
class __TwigTemplate_037814f32d65e4244f11ea9f338274eb48cef7c5277ecd794ab84aa1b3829b3d extends \Twig\Template
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
        $tags = array("if" => 6);
        $filters = array("escape" => 4, "lower" => 7, "media" => 28);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'lower', 'media'],
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
        echo "<div class=\"CategoryMainBanner\">
    <div class=\"CategoryMainBanner-Content desktop\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categoryTitle"] ?? null), 4, $this->source), "html", null, true);
        echo "</h1>
            <div class=\"CategoryMainBanner-SubTitle\">
                ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "subcategory_title", [], "any", false, false, true, 6)) {
            // line 7
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "slug", [], "any", false, false, true, 7), 7, $this->source)), "html", null, true);
            echo "\" class=\"CategoryMainBanner-SubTitle-Item\">
                    ";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "subcategory_title", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "
                </a>

                <span class=\"js-desktop\"> /</span>
                <span class=\"js-mobile\">
                </span>
                ";
        }
        // line 15
        echo "
                ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null), "subcategory_title", [], "any", false, false, true, 16)) {
            // line 17
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[1] ?? null) : null), "slug", [], "any", false, false, true, 17), 17, $this->source)), "html", null, true);
            echo "\" class=\"CategoryMainBanner-SubTitle-Item\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[1] ?? null) : null), "subcategory_title", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</a><br/><span class=\"js-desktop\"> /</span>
                ";
        }
        // line 19
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[2] ?? null) : null), "subcategory_title", [], "any", false, false, true, 19)) {
            // line 20
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[2] ?? null) : null), "slug", [], "any", false, false, true, 20), 20, $this->source)), "html", null, true);
            echo "\" class=\"CategoryMainBanner-SubTitle-Item\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[2] ?? null) : null), "subcategory_title", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "</a>
                ";
        }
        // line 22
        echo "            </div>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" style=\"background-color: #A5A8AF; background-size: 100%; background-repeat: no-repeat; background-size: cover\"></div>
        
        <div class=\"CategoryMainBanner-Content-Background\" style=\"background-color: #93969D; background-size: 100%; background-repeat: no-repeat; background-size: cover\"></div>
        
        <div class=\"CategoryMainBanner-Content-BackgroundContent\" style=\"background-image: url(";
        // line 28
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/right.jpg");
        echo ");
                background-size: auto 100vh; background-repeat: no-repeat; background-position: 45vw 0vh\"></div>
                
        <div class=\"CategoryMainBanner-Content-BackgroundContent\" style=\"background-image: url(";
        // line 31
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/left.jpg");
        echo ");
                background-size: auto 100vh; background-repeat: no-repeat; background-position: 3vw 0vh\"></div>
                
    </div>
    <div class=\"CategoryMainBanner-Content mobile\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">";
        // line 37
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["categoryTitle"] ?? null), 37, $this->source), "html", null, true);
        echo "</h1>
            <div class=\"CategoryMainBanner-SubTitle\">
                ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null), "subcategory_title", [], "any", false, false, true, 39)) {
            // line 40
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[0] ?? null) : null), "slug", [], "any", false, false, true, 40), 40, $this->source)), "html", null, true);
            echo "\" class=\"CategoryMainBanner-SubTitle-Item\">
                    ";
            // line 41
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null), "subcategory_title", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "
                    <span class=\"js-mobile\">
                    <svg class=\"arrowIcon\" width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\"/>
                    </svg>
                </span>
                </a>
                ";
        }
        // line 49
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null), "subcategory_title", [], "any", false, false, true, 49)) {
            // line 50
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[1] ?? null) : null), "slug", [], "any", false, false, true, 50), 50, $this->source)), "html", null, true);
            echo "\" class=\"CategoryMainBanner-SubTitle-Item\">
                    ";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[1] ?? null) : null), "subcategory_title", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "
                    <span class=\"js-mobile\">
                    <svg class=\"arrowIcon\"  viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\"/>
                    </svg>
                </span>
                </a>
                ";
        }
        // line 59
        echo "
                ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[2] ?? null) : null), "subcategory_title", [], "any", false, false, true, 60)) {
            // line 61
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[2] ?? null) : null), "slug", [], "any", false, false, true, 61), 61, $this->source)), "html", null, true);
            echo "\" class=\"CategoryMainBanner-SubTitle-Item\">
                    ";
            // line 62
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["subcategoryMenu"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[2] ?? null) : null), "subcategory_title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
                    <span class=\"js-mobile\">
                    <svg class=\"arrowIcon\" width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\"/>
                    </svg>
                </span>
                </a>
                ";
        }
        // line 70
        echo "

            </div>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" style=\"background: url(";
        // line 74
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/new-right-bg-color.png");
        echo "); background-size: 100%; background-repeat: no-repeat; background-size: cover\"></div>
        
        <div class=\"CategoryMainBanner-Content-Background\" style=\"background: url(";
        // line 76
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/new-left-bg-color.png");
        echo "); background-size: 100%; background-repeat: no-repeat; background-size: cover\"></div>
        
        <div class=\"CategoryMainBanner-Content-BackgroundContent\" style=\"background-image: url(";
        // line 78
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/new-right-content.png");
        echo ");
                background-size: auto 110vh; background-repeat: no-repeat; background-position: 50vw -9vh\"></div>
                
        <div class=\"CategoryMainBanner-Content-BackgroundContent\" style=\"background-image: url(";
        // line 81
        echo $this->extensions['System\Twig\Extension']->mediaFilter("main-banner/new-left-content.png");
        echo ");
                background-size: auto 110vh; background-repeat: no-repeat; background-position: 3vw -9vh\"></div>
                
    </div>


</div>

<style>
                    
                     
                    
                    @media (max-width: 1180px) {
                        .arrowIcon {
                            width: auto;
                            height: 54px;
                            padding-left: 32px;
  
                        }
                    }
                    
                    @media (max-width: 642px) {
                        .arrowIcon {
                            width: auto;
                            height: 26px;
                            padding-left: 12px;     
                        }
                    }
                    </style>

<script>
// const vhForCategoryBanner = window.innerHeight * 0.01;
//      document.documentElement.style.setProperty('--vh', `\${vhForCategoryBanner}px`);
//      const categoryMainBanner = document.querySelector(\".CategoryMainBanner\");

//      if(window.location.search.replace( '?', '') === 'rigth-side'){
//          categoryMainBanner.classList.remove('CategoryMainBanner--leftAlign');
//          categoryMainBanner.classList.add('CategoryMainBanner--rightAlign');
//     }
    
//     if(window.location.search.replace( '?', '') === 'left-side'){
//          categoryMainBanner.classList.remove('CategoryMainBanner--rightAlign');
//          categoryMainBanner.classList.add('CategoryMainBanner--leftAlign');
//     }


const vhForCategoryBanner = window.innerHeight * 0.01;
     document.documentElement.style.setProperty('--vh', `\${vhForCategoryBanner}px`);
     const categoryMainBanner = document.querySelector(\".CategoryMainBanner\");

     if(window.location.pathname.match('makeup')){
         categoryMainBanner.classList.remove('CategoryMainBanner--leftAlign');
         categoryMainBanner.classList.add('CategoryMainBanner--rightAlign');
    }
    
    if(window.location.pathname.match('skin-care')){
         categoryMainBanner.classList.remove('CategoryMainBanner--rightAlign');
         categoryMainBanner.classList.add('CategoryMainBanner--leftAlign');
    }

</script>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/partials/category/category-main-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 81,  215 => 78,  210 => 76,  205 => 74,  199 => 70,  188 => 62,  183 => 61,  181 => 60,  178 => 59,  167 => 51,  162 => 50,  159 => 49,  148 => 41,  143 => 40,  141 => 39,  136 => 37,  127 => 31,  121 => 28,  113 => 22,  105 => 20,  102 => 19,  94 => 17,  92 => 16,  89 => 15,  79 => 8,  74 => 7,  72 => 6,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"CategoryMainBanner\">
    <div class=\"CategoryMainBanner-Content desktop\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">{{ categoryTitle }}</h1>
            <div class=\"CategoryMainBanner-SubTitle\">
                {% if subcategoryMenu[0].subcategory_title %}
                <a href=\"#{{ subcategoryMenu[0].slug  | lower }}\" class=\"CategoryMainBanner-SubTitle-Item\">
                    {{ subcategoryMenu[0].subcategory_title }}
                </a>

                <span class=\"js-desktop\"> /</span>
                <span class=\"js-mobile\">
                </span>
                {% endif %}

                {% if subcategoryMenu[1].subcategory_title %}
                <a href=\"#{{ subcategoryMenu[1].slug | lower }}\" class=\"CategoryMainBanner-SubTitle-Item\"> {{ subcategoryMenu[1].subcategory_title }}</a><br/><span class=\"js-desktop\"> /</span>
                {% endif %}
                {% if subcategoryMenu[2].subcategory_title %}
                <a href=\"#{{ subcategoryMenu[2].slug  | lower }}\" class=\"CategoryMainBanner-SubTitle-Item\"> {{ subcategoryMenu[2].subcategory_title }}</a>
                {% endif %}
            </div>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" style=\"background-color: #A5A8AF; background-size: 100%; background-repeat: no-repeat; background-size: cover\"></div>
        
        <div class=\"CategoryMainBanner-Content-Background\" style=\"background-color: #93969D; background-size: 100%; background-repeat: no-repeat; background-size: cover\"></div>
        
        <div class=\"CategoryMainBanner-Content-BackgroundContent\" style=\"background-image: url({{'main-banner/right.jpg' | media }});
                background-size: auto 100vh; background-repeat: no-repeat; background-position: 45vw 0vh\"></div>
                
        <div class=\"CategoryMainBanner-Content-BackgroundContent\" style=\"background-image: url({{'main-banner/left.jpg' | media }});
                background-size: auto 100vh; background-repeat: no-repeat; background-position: 3vw 0vh\"></div>
                
    </div>
    <div class=\"CategoryMainBanner-Content mobile\">
        <div class=\"CategoryMainBanner-Content-Container\" >
            <h1 class=\"CategoryMainBanner-Title\">{{ categoryTitle }}</h1>
            <div class=\"CategoryMainBanner-SubTitle\">
                {% if subcategoryMenu[0].subcategory_title %}
                <a href=\"#{{ subcategoryMenu[0].slug  | lower }}\" class=\"CategoryMainBanner-SubTitle-Item\">
                    {{ subcategoryMenu[0].subcategory_title }}
                    <span class=\"js-mobile\">
                    <svg class=\"arrowIcon\" width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\"/>
                    </svg>
                </span>
                </a>
                {% endif %}
                {% if subcategoryMenu[1].subcategory_title %}
                <a href=\"#{{subcategoryMenu[1].slug | lower }}\" class=\"CategoryMainBanner-SubTitle-Item\">
                    {{subcategoryMenu[1].subcategory_title}}
                    <span class=\"js-mobile\">
                    <svg class=\"arrowIcon\"  viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\"/>
                    </svg>
                </span>
                </a>
                {% endif %}

                {% if subcategoryMenu[2].subcategory_title %}
                <a href=\"#{{subcategoryMenu[2].slug | lower }}\" class=\"CategoryMainBanner-SubTitle-Item\">
                    {{subcategoryMenu[2].subcategory_title}}
                    <span class=\"js-mobile\">
                    <svg class=\"arrowIcon\" width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M23.0673 11.2018L14.7857 3.1106L17.2795 0.558068L30 12.9861L17.2795 25.4142L14.7857 22.8617L23.0673 14.7704L0.682477 14.7704L0.682477 11.2018L23.0673 11.2018Z\"/>
                    </svg>
                </span>
                </a>
                {% endif %}


            </div>
        </div>
        <div class=\"CategoryMainBanner-Content-Background\" style=\"background: url({{'main-banner/new-right-bg-color.png' | media }}); background-size: 100%; background-repeat: no-repeat; background-size: cover\"></div>
        
        <div class=\"CategoryMainBanner-Content-Background\" style=\"background: url({{'main-banner/new-left-bg-color.png' | media }}); background-size: 100%; background-repeat: no-repeat; background-size: cover\"></div>
        
        <div class=\"CategoryMainBanner-Content-BackgroundContent\" style=\"background-image: url({{'main-banner/new-right-content.png' | media }});
                background-size: auto 110vh; background-repeat: no-repeat; background-position: 50vw -9vh\"></div>
                
        <div class=\"CategoryMainBanner-Content-BackgroundContent\" style=\"background-image: url({{'main-banner/new-left-content.png' | media }});
                background-size: auto 110vh; background-repeat: no-repeat; background-position: 3vw -9vh\"></div>
                
    </div>


</div>

<style>
                    
                     
                    
                    @media (max-width: 1180px) {
                        .arrowIcon {
                            width: auto;
                            height: 54px;
                            padding-left: 32px;
  
                        }
                    }
                    
                    @media (max-width: 642px) {
                        .arrowIcon {
                            width: auto;
                            height: 26px;
                            padding-left: 12px;     
                        }
                    }
                    </style>

<script>
// const vhForCategoryBanner = window.innerHeight * 0.01;
//      document.documentElement.style.setProperty('--vh', `\${vhForCategoryBanner}px`);
//      const categoryMainBanner = document.querySelector(\".CategoryMainBanner\");

//      if(window.location.search.replace( '?', '') === 'rigth-side'){
//          categoryMainBanner.classList.remove('CategoryMainBanner--leftAlign');
//          categoryMainBanner.classList.add('CategoryMainBanner--rightAlign');
//     }
    
//     if(window.location.search.replace( '?', '') === 'left-side'){
//          categoryMainBanner.classList.remove('CategoryMainBanner--rightAlign');
//          categoryMainBanner.classList.add('CategoryMainBanner--leftAlign');
//     }


const vhForCategoryBanner = window.innerHeight * 0.01;
     document.documentElement.style.setProperty('--vh', `\${vhForCategoryBanner}px`);
     const categoryMainBanner = document.querySelector(\".CategoryMainBanner\");

     if(window.location.pathname.match('makeup')){
         categoryMainBanner.classList.remove('CategoryMainBanner--leftAlign');
         categoryMainBanner.classList.add('CategoryMainBanner--rightAlign');
    }
    
    if(window.location.pathname.match('skin-care')){
         categoryMainBanner.classList.remove('CategoryMainBanner--rightAlign');
         categoryMainBanner.classList.add('CategoryMainBanner--leftAlign');
    }

</script>", "/Users/iamk/git/darling/themes/demo/partials/category/category-main-banner.htm", "");
    }
}

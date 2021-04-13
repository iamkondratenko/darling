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

/* /Users/alex/Documents/GitHub/darling/themes/demo/pages/product.htm */
class __TwigTemplate_e6f354eb122ebcb59fbbc07e4d5965557973affe55c4819561cd9fb09283815b extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 37, "if" => 38);
        $filters = array("escape" => 9, "media" => 42, "raw" => 135);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'media', 'raw'],
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "record", [], "any", false, false, true, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "displayColumn", [], "any", false, false, true, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["productDetails"] ?? null), "notFoundMessage", [], "any", false, false, true, 3);
        // line 4
        echo "
<div class=\"product-section\">


    <div class=\"close_icon\">
            <a onclick=\"goBack('/category/";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "')\">
                <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M4.39355 2.39355L25.6068 23.6068\" stroke-width=\"4\"/>
                    <path d=\"M4.39355 23.6064L25.6068 2.39324\" stroke-width=\"4\"/>
                </svg>
            </a>
        </div>
        
        <style>
        
            .close_icon {
                cursor: pointer;
                z-index: 999;
            }
        
            .close_icon > a > svg {
                stroke: #222;
            }
            
            .close_icon:hover > a > svg {
                stroke: #EA028A;
            }
        </style>



    <div class=\"product-section__photo-block\">

        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 37));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 38
            echo "            <div class=\"photo-block__product-holder ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 38) == true)) {
                echo " activedColorSlider";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\">
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["slider"], "gallery", [], "any", false, false, true, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["sliderPicture"]) {
                // line 40
                echo "                    <div style=\"display: flex;min-width: 100vw;overflow: hidden;height: 100vh; justify-content: center;\">
                    ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "picture", [], "any", false, false, true, 41)) {
                    // line 42
                    echo "                        <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "picture", [], "any", false, false, true, 42), 42, $this->source));
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "alt_text", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "\" class=\"photo-block__product\">
                    ";
                }
                // line 44
                echo "                    
                    ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "mp4", [], "any", false, false, true, 45)) {
                    // line 46
                    echo "                        <video style=\"
    height: 120vw;
\" preload='auto' autoplay loop muted playsinline>
                            <source src=\"";
                    // line 49
                    echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "mp4", [], "any", false, false, true, 49), 49, $this->source));
                    echo "\" type='video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"'>
                        </video>
                    ";
                }
                // line 52
                echo "            
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sliderPicture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
        <div class=\"dots-pic\">

        </div>

    </div>

    <div class=\"product-section__text-block\">
        
                        
            <div class=\"product-section__text-block-holder\">


                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">
                        ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_title", [], "any", false, false, true, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 73
            echo "                        <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "product_title_marked", [], "any", false, false, true, 73) == true)) {
                echo "title-section__title_marked";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["title"], "product_title_construct", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "break_subcategory_title", [], "any", false, false, true, 73) == true)) {
                echo "</br>";
            }
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                    </h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        echo "</p>
</div>
                    <p></p>
                </div>
                
                ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 84)) {
            // line 85
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 85), "length", [], "any", false, false, true, 85) > 1)) {
                // line 86
                echo "                <div class=\"text-block__color-section text-block__color-section--desktop\">
                    ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 87));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                    // line 88
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 88) > 1)) {
                        // line 89
                        echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                        // line 90
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                        echo "\"
                               name=\"contact\" value=\"email\" ";
                        // line 91
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 91) == true)) {
                            echo " checked";
                        }
                        echo "  data-colorPicker=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                        echo "\">
                        <label for=\"color-picker-";
                        // line 92
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                        // line 93
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                        echo "\">
                                <span class=\"text-block__color-section_number\">0";
                        // line 94
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                        echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
                    }
                    // line 99
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                </div>
                ";
            }
            // line 102
            echo "                ";
        }
        // line 103
        echo "                
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">";
        // line 105
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
        echo " ₽</div>
                </div>
                

                
                ";
        // line 110
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 110)) {
            // line 111
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 111), "length", [], "any", false, false, true, 111) > 1)) {
                // line 112
                echo "                <div class=\"text-block__color-section\">
                    ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 113));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
                    // line 114
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 114) > 1)) {
                        // line 115
                        echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                        // line 116
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
                        echo "\"
                               name=\"contact\" value=\"email\" ";
                        // line 117
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 117) == true)) {
                            echo " checked";
                        }
                        echo "  data-colorPicker=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                        echo "\">
                        <label for=\"color-picker-";
                        // line 118
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
                        echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                        // line 119
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
                        echo "\">
                                <span class=\"text-block__color-section_number\">0";
                        // line 120
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
                        echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
                    }
                    // line 125
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                </div>
                ";
            }
            // line 128
            echo "                ";
        }
        // line 129
        echo "
                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "additional_info", [], "any", false, false, true, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["addittionalInfo"]) {
            // line 133
            echo "                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">";
            // line 134
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_title", [], "any", false, false, true, 134), 134, $this->source), "html", null, true);
            echo "</h2>
                            <p>";
            // line 135
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_text", [], "any", false, false, true, 135), 135, $this->source);
            echo "
                            </p>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addittionalInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "
                        <a href=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "buy_link", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "\" class=\"buy_now_link\">buy now</a>


                    </div>
                </div>
            </div>
        </div>


    </div>
    
    
    <style>



    
    
/* PRODUCT CARD */



    
    </style>

<script>
    var browserWidth = document.body.clientWidth

    var browserHeight = document.body.clientHeight


    var state = [0, 0]


    setScrollForProduct()

    window.addEventListener('scroll', function() {

        state[0] += 1
        window.requestAnimationFrame(function() {
            state[1] += 1
            console.log(state)
            let scrolledY = window.scrollY

            if (browserWidth >  1080) {
                scrollingFloatBlock(scrolledY)
            }
        })



    })



    function setScrollForProduct() {



        var route = 'product'

        if (browserWidth >  1080) {

            if (route == 'product') {
                let textBlock = document.querySelector('.product-section__text-block-holder')
                let photoBlock = document.querySelector('.photo-block__product-holder')
                let textBlockHeight = textBlock.scrollHeight
                let photoBlockHeight = photoBlock.scrollHeight

                if (textBlockHeight >= photoBlockHeight) {
                    photoBlock.classList.add('float-scroll')
                    floatScrollBlock = photoBlock
                    floatScrollBlockHeight = photoBlockHeight
                } else {
                    textBlock.classList.add('float-scroll')
                    floatScrollBlock = textBlock
                    floatScrollBlockHeight = textBlockHeight
                }
            }
        }

    }


    var fullBlockHeight = document.querySelector('.product-section').scrollHeight


    function scrollingFloatBlock(scrolledY) {


        console.log(floatScrollBlock.scrollHeight, browserHeight)

            floatScrollBlock.style.transform = scrolledY
        currentBlockPos = \"translate3d(0.01px,\" + (Math.floor(scrolledY / (fullBlockHeight / (fullBlockHeight - floatScrollBlockHeight)))) + \"px, 0.01px)\"

        // currentBlockPos = \"translate3d(0.01px,\" + (Math.floor(scrolledY / (fullBlockHeight / ((fullBlockHeight - floatScrollBlockHeight) + (window.innerHeight / devicePixelRatio))))) + \"px, 0.01px)\"
            floatScrollBlock.style.transform = currentBlockPos


    }



    var colorVariantNodes = document.querySelectorAll('.radio-color-picker')
    var colorSliderProducts = document.querySelectorAll('.photo-block__product-holder')





    function setDots() {
        var activeNode = document.querySelector('.activedColorSlider')
        var screenWidth = window.innerWidth
        var scrollWidth = activeNode.scrollWidth
        var sliderCount = 1


        activeNode.addEventListener('scroll', function (){
            (activeNode.scrollWidth)
            if (((activeNode.scrollLeft + screenWidth) / screenWidth).toFixed(0) != sliderCount){
                sliderCount = ((activeNode.scrollLeft + screenWidth) / screenWidth).toFixed(0)
                renderDots(sliderCount)
            }

        })





        function renderDots(count) {
            document.querySelector('.dots-pic').innerHTML = null
            var isActiveNode = document.querySelectorAll('.activedColorSlider > div')
             if (isActiveNode.length > 1) {
                for (let i = 0; i < isActiveNode.length; i++) {
                    let dotNode = document.createElement('div');
                    dotNode.classList.add('dot')
                    dotNode.classList.add('dot-item-' + '' + i)
                    if (i == count - 1) {
                        dotNode.classList.add('active-dot')
                    }
                    var dotsNode = document.querySelector('.dots-pic')
                    dotsNode.append(dotNode)
                }
            }
        }
        renderDots(1)
    }

    setDots()



    for (let i = 0; i < colorVariantNodes.length; i++) {
        colorVariantNodes[i].addEventListener('change', function(e) {
            var currentPickerColorNode = e.target
            var currentPickedColor = currentPickerColorNode.dataset.colorpicker
            selectSliderProduct(currentPickedColor)
        })
    }

    function selectSliderProduct(hex) {




        for (let i = 0; i < colorSliderProducts.length; i++) {

            var currentNodeId = colorSliderProducts[i].id
            if (hex == currentNodeId) {
                colorSliderProducts[i].classList.add('activedColorSlider')
                mobileSlider()
            } else {
                colorSliderProducts[i].classList.remove('activedColorSlider')
            }
        }
        setDots()
    }


    mobileSlider()

    function mobileSlider() {


        var activeNode = document.querySelector('.activedColorSlider')
        var screenWidth = window.innerWidth
        var scrollWidth = activeNode.scrollWidth
        var scrollHeight = activeNode.scrollHeight
        var sliderCount = scrollWidth / screenWidth
        
        var currentSlider = 0
        var nextSlider = screenWidth

        var currentMousePos = 0
        var isTouchStarted = false




        var initialPoint;
        var finalPoint;


        activeNode.addEventListener('mousemove', function(event) {
            currentMousePos = event.clientX   
            console.log(currentMousePos, isTouchStarted)         
        }, false);



        activeNode.addEventListener('touchstart', function(event) {
            event.preventDefault();
            event.stopPropagation();
            initialPoint=event.changedTouches[0];
            isTouchStarted = true
        }, false);

        activeNode.addEventListener('touchend', function(event) {
            event.preventDefault();
            event.stopPropagation();
            finalPoint=event.changedTouches[0];
            isTouchStarted = false


            var xAbs = Math.abs(initialPoint.pageX - finalPoint.pageX);
            var yAbs = Math.abs(initialPoint.pageY - finalPoint.pageY);
            if (xAbs > 20 || yAbs > 20) {
                if (xAbs > yAbs) {
                    
                    if (finalPoint.pageX < initialPoint.pageX) {

                        activeNode.scroll({
                            left: currentSlider + screenWidth,
                            behavior: 'smooth'
                        })
                        
                        currentSlider = currentSlider + screenWidth
                        

                        if (currentSlider >= Math.round(sliderCount) * screenWidth - screenWidth) {
                            currentSlider = Math.round(sliderCount) * screenWidth - screenWidth
                        }
                        

                       


                        
                    }
                    else{
                        activeNode.scroll({
                            left: currentSlider - screenWidth,
                            behavior: 'smooth'
                        })
                        
                        
                        
                        currentSlider = currentSlider - screenWidth
                        console.log(currentSlider, screenWidth)
                        

                        

                        if (currentSlider < 0) {
                            currentSlider = 0
                        }
                    }
                }
                else {
                    if (finalPoint.pageY < initialPoint.pageY){
                        /* Проверяем, если на странице продукта то не работает скролл даун */
                        var pattern = /product/;
                        
                        if (!pattern.test(window.location.href)) {
                            window.scroll({
                            top: scrollHeight,
                            behavior: 'smooth'
                        })
                        }
                        
                    }
                    else{
                        /*СВАЙП ВНИЗ*/}
                }
            }

        }, false);

    }


    function goBack(link) {
        localStorage.setItem('scrollToLastState', true)
        window.location = link
    }



</script>";
    }

    public function getTemplateName()
    {
        return "/Users/alex/Documents/GitHub/darling/themes/demo/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 140,  437 => 139,  427 => 135,  423 => 134,  420 => 133,  416 => 132,  411 => 129,  408 => 128,  404 => 126,  390 => 125,  382 => 120,  378 => 119,  374 => 118,  366 => 117,  362 => 116,  359 => 115,  356 => 114,  339 => 113,  336 => 112,  333 => 111,  331 => 110,  323 => 105,  319 => 103,  316 => 102,  312 => 100,  298 => 99,  290 => 94,  286 => 93,  282 => 92,  274 => 91,  270 => 90,  267 => 89,  264 => 88,  247 => 87,  244 => 86,  241 => 85,  239 => 84,  231 => 79,  225 => 75,  209 => 73,  205 => 72,  188 => 57,  173 => 55,  165 => 52,  159 => 49,  154 => 46,  152 => 45,  149 => 44,  141 => 42,  139 => 41,  136 => 40,  132 => 39,  123 => 38,  106 => 37,  75 => 9,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = productDetails.record %}
{% set displayColumn = productDetails.displayColumn %}
{% set notFoundMessage = productDetails.notFoundMessage %}

<div class=\"product-section\">


    <div class=\"close_icon\">
            <a onclick=\"goBack('/category/{{record.category}}')\">
                <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M4.39355 2.39355L25.6068 23.6068\" stroke-width=\"4\"/>
                    <path d=\"M4.39355 23.6064L25.6068 2.39324\" stroke-width=\"4\"/>
                </svg>
            </a>
        </div>
        
        <style>
        
            .close_icon {
                cursor: pointer;
                z-index: 999;
            }
        
            .close_icon > a > svg {
                stroke: #222;
            }
            
            .close_icon:hover > a > svg {
                stroke: #EA028A;
            }
        </style>



    <div class=\"product-section__photo-block\">

        {% for slider in record.color_slider %}
            <div class=\"photo-block__product-holder {% if loop.first == true %} activedColorSlider{% endif %}\" id=\"{{slider.product_color}}\">
                {% for sliderPicture in slider.gallery %}
                    <div style=\"display: flex;min-width: 100vw;overflow: hidden;height: 100vh; justify-content: center;\">
                    {% if sliderPicture.picture %}
                        <img src=\"{{ sliderPicture.picture | media }}\" alt=\"{{sliderPicture.alt_text }}\" class=\"photo-block__product\">
                    {% endif %}
                    
                    {% if sliderPicture.mp4 %}
                        <video style=\"
    height: 120vw;
\" preload='auto' autoplay loop muted playsinline>
                            <source src=\"{{ sliderPicture.mp4 | media }}\" type='video/mp4; codecs=\"avc1.42E01E, mp4a.40.2\"'>
                        </video>
                    {% endif %}
            
                    </div>
                {% endfor %}
            </div>
        {% endfor %}

        <div class=\"dots-pic\">

        </div>

    </div>

    <div class=\"product-section__text-block\">
        
                        
            <div class=\"product-section__text-block-holder\">


                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">
                        {% for title in record.product_title %}
                        <span class=\"{% if title.product_title_marked == true %}title-section__title_marked{% endif %}\">{{title.product_title_construct}}{% if title.break_subcategory_title == true %}</br>{% endif %}</span>
                        {% endfor %}
                    </h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>{{record.description}}</p>
</div>
                    <p></p>
                </div>
                
                {% if record.color_slider %}
                {% if record.color_slider.length > 1 %}
                <div class=\"text-block__color-section text-block__color-section--desktop\">
                    {% for slider in record.color_slider %}
                    {% if loop.length > 1 %}
                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-{{slider.product_color}}\"
                               name=\"contact\" value=\"email\" {% if loop.first == true %} checked{% endif %}  data-colorPicker=\"{{slider.product_color}}\">
                        <label for=\"color-picker-{{slider.product_color}}\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: {{slider.product_color}}\">
                                <span class=\"text-block__color-section_number\">0{{loop.index}}</span>
                            </div>
                        </label>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
                {% endif %}
                {% endif %}
                
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">{{ record.price }} ₽</div>
                </div>
                

                
                {% if record.color_slider %}
                {% if record.color_slider.length > 1 %}
                <div class=\"text-block__color-section\">
                    {% for slider in record.color_slider %}
                    {% if loop.length > 1 %}
                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-{{slider.product_color}}\"
                               name=\"contact\" value=\"email\" {% if loop.first == true %} checked{% endif %}  data-colorPicker=\"{{slider.product_color}}\">
                        <label for=\"color-picker-{{slider.product_color}}\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: {{slider.product_color}}\">
                                <span class=\"text-block__color-section_number\">0{{loop.index}}</span>
                            </div>
                        </label>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
                {% endif %}
                {% endif %}

                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        {% for addittionalInfo in record.additional_info %}
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">{{addittionalInfo.additional_info_title}}</h2>
                            <p>{{addittionalInfo.additional_info_text | raw}}
                            </p>
                        </div>
                        {% endfor %}

                        <a href=\"{{ record.buy_link }}\" class=\"buy_now_link\">buy now</a>


                    </div>
                </div>
            </div>
        </div>


    </div>
    
    
    <style>



    
    
/* PRODUCT CARD */



    
    </style>

<script>
    var browserWidth = document.body.clientWidth

    var browserHeight = document.body.clientHeight


    var state = [0, 0]


    setScrollForProduct()

    window.addEventListener('scroll', function() {

        state[0] += 1
        window.requestAnimationFrame(function() {
            state[1] += 1
            console.log(state)
            let scrolledY = window.scrollY

            if (browserWidth >  1080) {
                scrollingFloatBlock(scrolledY)
            }
        })



    })



    function setScrollForProduct() {



        var route = 'product'

        if (browserWidth >  1080) {

            if (route == 'product') {
                let textBlock = document.querySelector('.product-section__text-block-holder')
                let photoBlock = document.querySelector('.photo-block__product-holder')
                let textBlockHeight = textBlock.scrollHeight
                let photoBlockHeight = photoBlock.scrollHeight

                if (textBlockHeight >= photoBlockHeight) {
                    photoBlock.classList.add('float-scroll')
                    floatScrollBlock = photoBlock
                    floatScrollBlockHeight = photoBlockHeight
                } else {
                    textBlock.classList.add('float-scroll')
                    floatScrollBlock = textBlock
                    floatScrollBlockHeight = textBlockHeight
                }
            }
        }

    }


    var fullBlockHeight = document.querySelector('.product-section').scrollHeight


    function scrollingFloatBlock(scrolledY) {


        console.log(floatScrollBlock.scrollHeight, browserHeight)

            floatScrollBlock.style.transform = scrolledY
        currentBlockPos = \"translate3d(0.01px,\" + (Math.floor(scrolledY / (fullBlockHeight / (fullBlockHeight - floatScrollBlockHeight)))) + \"px, 0.01px)\"

        // currentBlockPos = \"translate3d(0.01px,\" + (Math.floor(scrolledY / (fullBlockHeight / ((fullBlockHeight - floatScrollBlockHeight) + (window.innerHeight / devicePixelRatio))))) + \"px, 0.01px)\"
            floatScrollBlock.style.transform = currentBlockPos


    }



    var colorVariantNodes = document.querySelectorAll('.radio-color-picker')
    var colorSliderProducts = document.querySelectorAll('.photo-block__product-holder')





    function setDots() {
        var activeNode = document.querySelector('.activedColorSlider')
        var screenWidth = window.innerWidth
        var scrollWidth = activeNode.scrollWidth
        var sliderCount = 1


        activeNode.addEventListener('scroll', function (){
            (activeNode.scrollWidth)
            if (((activeNode.scrollLeft + screenWidth) / screenWidth).toFixed(0) != sliderCount){
                sliderCount = ((activeNode.scrollLeft + screenWidth) / screenWidth).toFixed(0)
                renderDots(sliderCount)
            }

        })





        function renderDots(count) {
            document.querySelector('.dots-pic').innerHTML = null
            var isActiveNode = document.querySelectorAll('.activedColorSlider > div')
             if (isActiveNode.length > 1) {
                for (let i = 0; i < isActiveNode.length; i++) {
                    let dotNode = document.createElement('div');
                    dotNode.classList.add('dot')
                    dotNode.classList.add('dot-item-' + '' + i)
                    if (i == count - 1) {
                        dotNode.classList.add('active-dot')
                    }
                    var dotsNode = document.querySelector('.dots-pic')
                    dotsNode.append(dotNode)
                }
            }
        }
        renderDots(1)
    }

    setDots()



    for (let i = 0; i < colorVariantNodes.length; i++) {
        colorVariantNodes[i].addEventListener('change', function(e) {
            var currentPickerColorNode = e.target
            var currentPickedColor = currentPickerColorNode.dataset.colorpicker
            selectSliderProduct(currentPickedColor)
        })
    }

    function selectSliderProduct(hex) {




        for (let i = 0; i < colorSliderProducts.length; i++) {

            var currentNodeId = colorSliderProducts[i].id
            if (hex == currentNodeId) {
                colorSliderProducts[i].classList.add('activedColorSlider')
                mobileSlider()
            } else {
                colorSliderProducts[i].classList.remove('activedColorSlider')
            }
        }
        setDots()
    }


    mobileSlider()

    function mobileSlider() {


        var activeNode = document.querySelector('.activedColorSlider')
        var screenWidth = window.innerWidth
        var scrollWidth = activeNode.scrollWidth
        var scrollHeight = activeNode.scrollHeight
        var sliderCount = scrollWidth / screenWidth
        
        var currentSlider = 0
        var nextSlider = screenWidth

        var currentMousePos = 0
        var isTouchStarted = false




        var initialPoint;
        var finalPoint;


        activeNode.addEventListener('mousemove', function(event) {
            currentMousePos = event.clientX   
            console.log(currentMousePos, isTouchStarted)         
        }, false);



        activeNode.addEventListener('touchstart', function(event) {
            event.preventDefault();
            event.stopPropagation();
            initialPoint=event.changedTouches[0];
            isTouchStarted = true
        }, false);

        activeNode.addEventListener('touchend', function(event) {
            event.preventDefault();
            event.stopPropagation();
            finalPoint=event.changedTouches[0];
            isTouchStarted = false


            var xAbs = Math.abs(initialPoint.pageX - finalPoint.pageX);
            var yAbs = Math.abs(initialPoint.pageY - finalPoint.pageY);
            if (xAbs > 20 || yAbs > 20) {
                if (xAbs > yAbs) {
                    
                    if (finalPoint.pageX < initialPoint.pageX) {

                        activeNode.scroll({
                            left: currentSlider + screenWidth,
                            behavior: 'smooth'
                        })
                        
                        currentSlider = currentSlider + screenWidth
                        

                        if (currentSlider >= Math.round(sliderCount) * screenWidth - screenWidth) {
                            currentSlider = Math.round(sliderCount) * screenWidth - screenWidth
                        }
                        

                       


                        
                    }
                    else{
                        activeNode.scroll({
                            left: currentSlider - screenWidth,
                            behavior: 'smooth'
                        })
                        
                        
                        
                        currentSlider = currentSlider - screenWidth
                        console.log(currentSlider, screenWidth)
                        

                        

                        if (currentSlider < 0) {
                            currentSlider = 0
                        }
                    }
                }
                else {
                    if (finalPoint.pageY < initialPoint.pageY){
                        /* Проверяем, если на странице продукта то не работает скролл даун */
                        var pattern = /product/;
                        
                        if (!pattern.test(window.location.href)) {
                            window.scroll({
                            top: scrollHeight,
                            behavior: 'smooth'
                        })
                        }
                        
                    }
                    else{
                        /*СВАЙП ВНИЗ*/}
                }
            }

        }, false);

    }


    function goBack(link) {
        localStorage.setItem('scrollToLastState', true)
        window.location = link
    }



</script>", "/Users/alex/Documents/GitHub/darling/themes/demo/pages/product.htm", "");
    }
}

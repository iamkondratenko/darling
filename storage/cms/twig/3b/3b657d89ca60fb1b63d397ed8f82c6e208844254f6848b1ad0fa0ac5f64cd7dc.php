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

/* /Users/iamk/git/darling/themes/demo/pages/product2.htm */
class __TwigTemplate_05fd7558b75c6b085af3488a3d09d9b7d2b34fd2706b0bf63f96da35b8400d79 extends \Twig\Template
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
        $filters = array("escape" => 9, "media" => 41, "raw" => 126);
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
                echo "                <div style=\"display: block; width: 100%; height: 100vh\">
                    <img src=\"";
                // line 41
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "picture", [], "any", false, false, true, 41), 41, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "alt_text", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\" class=\"photo-block__product\">
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sliderPicture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
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
        // line 46
        echo "
        <div class=\"dots-pic\">
<!--            <div class=\"dot active-dot\"></div>-->
<!--            <div class=\"dot\"></div>-->
<!--            <div class=\"dot\"></div>-->
        </div>

    </div>

    <div class=\"product-section__text-block\">
        
                        
            <div class=\"product-section__text-block-holder\">


                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_title", [], "any", false, false, true, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 64
            echo "                        <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "product_title_marked", [], "any", false, false, true, 64) == true)) {
                echo "title-section__title_marked";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["title"], "product_title_construct", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "break_subcategory_title", [], "any", false, false, true, 64) == true)) {
                echo "</br>";
            }
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    </h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "</p>
</div>
                    <p></p>
                </div>
                
                ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 75)) {
            // line 76
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 76), "length", [], "any", false, false, true, 76) > 1)) {
                // line 77
                echo "                <div class=\"text-block__color-section text-block__color-section--desktop\">
                    ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 78));
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
                    // line 79
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 79) > 1)) {
                        // line 80
                        echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                        // line 81
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                        echo "\"
                               name=\"contact\" value=\"email\" ";
                        // line 82
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 82) == true)) {
                            echo " checked";
                        }
                        echo "  data-colorPicker=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                        echo "\">
                        <label for=\"color-picker-";
                        // line 83
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                        echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                        // line 84
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                        echo "\">
                                <span class=\"text-block__color-section_number\">0";
                        // line 85
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                        echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
                    }
                    // line 90
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
                // line 91
                echo "                </div>
                ";
            }
            // line 93
            echo "                ";
        }
        // line 94
        echo "                
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">";
        // line 96
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
        echo " ₽</div>
                </div>
                

                
                ";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 101)) {
            // line 102
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 102), "length", [], "any", false, false, true, 102) > 1)) {
                // line 103
                echo "                <div class=\"text-block__color-section\">
                    ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 104));
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
                    // line 105
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 105) > 1)) {
                        // line 106
                        echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                        // line 107
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                        echo "\"
                               name=\"contact\" value=\"email\" ";
                        // line 108
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 108) == true)) {
                            echo " checked";
                        }
                        echo "  data-colorPicker=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
                        echo "\">
                        <label for=\"color-picker-";
                        // line 109
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                        echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                        // line 110
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                        echo "\">
                                <span class=\"text-block__color-section_number\">0";
                        // line 111
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
                        echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
                    }
                    // line 116
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
                // line 117
                echo "                </div>
                ";
            }
            // line 119
            echo "                ";
        }
        // line 120
        echo "
                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "additional_info", [], "any", false, false, true, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["addittionalInfo"]) {
            // line 124
            echo "                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">";
            // line 125
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_title", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "</h2>
                            <p>";
            // line 126
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_text", [], "any", false, false, true, 126), 126, $this->source);
            echo "
                            </p>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addittionalInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "
                        <a href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "buy_link", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
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




        var initialPoint;
        var finalPoint;
        activeNode.addEventListener('touchstart', function(event) {
            event.preventDefault();
            event.stopPropagation();
            initialPoint=event.changedTouches[0];
        }, false);
        activeNode.addEventListener('touchend', function(event) {
            event.preventDefault();
            event.stopPropagation();
            finalPoint=event.changedTouches[0];
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

                        if ((scrollWidth / 2) + (screenWidth / 2) < currentSlider) {
                            currentSlider = (scrollWidth / 2) + (screenWidth / 2)
                        }
                    }
                    else{
                        activeNode.scroll({
                            left: currentSlider - screenWidth,
                            behavior: 'smooth'
                        })
                        currentSlider = currentSlider - screenWidth

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
        return "/Users/iamk/git/darling/themes/demo/pages/product2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 131,  416 => 130,  406 => 126,  402 => 125,  399 => 124,  395 => 123,  390 => 120,  387 => 119,  383 => 117,  369 => 116,  361 => 111,  357 => 110,  353 => 109,  345 => 108,  341 => 107,  338 => 106,  335 => 105,  318 => 104,  315 => 103,  312 => 102,  310 => 101,  302 => 96,  298 => 94,  295 => 93,  291 => 91,  277 => 90,  269 => 85,  265 => 84,  261 => 83,  253 => 82,  249 => 81,  246 => 80,  243 => 79,  226 => 78,  223 => 77,  220 => 76,  218 => 75,  210 => 70,  204 => 66,  188 => 64,  184 => 63,  165 => 46,  150 => 44,  139 => 41,  136 => 40,  132 => 39,  123 => 38,  106 => 37,  75 => 9,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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
                <div style=\"display: block; width: 100%; height: 100vh\">
                    <img src=\"{{sliderPicture.picture | media}}\" alt=\"{{sliderPicture.alt_text }}\" class=\"photo-block__product\">
                </div>
                {% endfor %}
            </div>
        {% endfor %}

        <div class=\"dots-pic\">
<!--            <div class=\"dot active-dot\"></div>-->
<!--            <div class=\"dot\"></div>-->
<!--            <div class=\"dot\"></div>-->
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




        var initialPoint;
        var finalPoint;
        activeNode.addEventListener('touchstart', function(event) {
            event.preventDefault();
            event.stopPropagation();
            initialPoint=event.changedTouches[0];
        }, false);
        activeNode.addEventListener('touchend', function(event) {
            event.preventDefault();
            event.stopPropagation();
            finalPoint=event.changedTouches[0];
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

                        if ((scrollWidth / 2) + (screenWidth / 2) < currentSlider) {
                            currentSlider = (scrollWidth / 2) + (screenWidth / 2)
                        }
                    }
                    else{
                        activeNode.scroll({
                            left: currentSlider - screenWidth,
                            behavior: 'smooth'
                        })
                        currentSlider = currentSlider - screenWidth

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



</script>", "/Users/iamk/git/darling/themes/demo/pages/product2.htm", "");
    }
}

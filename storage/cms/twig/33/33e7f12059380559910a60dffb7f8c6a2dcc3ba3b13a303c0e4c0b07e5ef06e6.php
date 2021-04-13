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

/* /Users/iamk/git/darling/themes/demo/pages/en/product2.htm */
class __TwigTemplate_a17f90b5cba01cfa65c8de9eb6c62e29342d2412f198fc8478de36b8f40f2edd extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 12, "if" => 13);
        $filters = array("escape" => 13, "media" => 16, "raw" => 108);
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




    <div class=\"product-section__photo-block\">

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 12));
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
            // line 13
            echo "            <div class=\"photo-block__product-holder ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 13) == true)) {
                echo " activedColorSlider";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "\">
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["slider"], "gallery", [], "any", false, false, true, 14));
            foreach ($context['_seq'] as $context["_key"] => $context["sliderPicture"]) {
                // line 15
                echo "                <div style=\"display: block; width: 100%; height: 100vh\">
                    <img src=\"";
                // line 16
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "picture", [], "any", false, false, true, 16), 16, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "alt_text", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\" class=\"photo-block__product\">
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sliderPicture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
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
        // line 21
        echo "
        <div class=\"dots-pic\">
<!--            <div class=\"dot active-dot\"></div>-->
<!--            <div class=\"dot\"></div>-->
<!--            <div class=\"dot\"></div>-->
        </div>

    </div>

    <div class=\"product-section__text-block\">
        <div class=\"close_icon\">
            <a href=\"/category/";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "/#";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "subcategory", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\">
                <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M4.39355 2.39355L25.6068 23.6068\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                    <path d=\"M4.39355 23.6064L25.6068 2.39324\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                </svg>
            </a>
        </div>
                        
            <div class=\"product-section__text-block-holder\">


                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">
                        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_title", [], "any", false, false, true, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 46
            echo "                        <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "product_title_marked", [], "any", false, false, true, 46) == true)) {
                echo "title-section__title_marked";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["title"], "product_title_construct", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "break_subcategory_title", [], "any", false, false, true, 46) == true)) {
                echo "</br>";
            }
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "</p>
</div>
                    <p></p>
                </div>
                
                ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 57)) {
            // line 58
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 58), "length", [], "any", false, false, true, 58) > 1)) {
                // line 59
                echo "                <div class=\"text-block__color-section text-block__color-section--desktop\">
                    ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 60));
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
                    // line 61
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 61) > 1)) {
                        // line 62
                        echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                        // line 63
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        echo "\"
                               name=\"contact\" value=\"email\" ";
                        // line 64
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 64) == true)) {
                            echo " checked";
                        }
                        echo "  data-colorPicker=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                        echo "\">
                        <label for=\"color-picker-";
                        // line 65
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                        echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                        // line 66
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                        echo "\">
                                <span class=\"text-block__color-section_number\">0";
                        // line 67
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
                    }
                    // line 72
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
                // line 73
                echo "                </div>
                ";
            }
            // line 75
            echo "                ";
        }
        // line 76
        echo "                
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "</div>
                </div>
                

                
                ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 83)) {
            // line 84
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 84), "length", [], "any", false, false, true, 84) > 1)) {
                // line 85
                echo "                <div class=\"text-block__color-section\">
                    ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 86));
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
                    // line 87
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 87) > 1)) {
                        // line 88
                        echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                        // line 89
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo "\"
                               name=\"contact\" value=\"email\" ";
                        // line 90
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 90) == true)) {
                            echo " checked";
                        }
                        echo "  data-colorPicker=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
                        echo "\">
                        <label for=\"color-picker-";
                        // line 91
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                        echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                        // line 92
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\">
                                <span class=\"text-block__color-section_number\">0";
                        // line 93
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                        echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
                    }
                    // line 98
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
                // line 99
                echo "                </div>
                ";
            }
            // line 101
            echo "                ";
        }
        // line 102
        echo "
                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "additional_info", [], "any", false, false, true, 105));
        foreach ($context['_seq'] as $context["_key"] => $context["addittionalInfo"]) {
            // line 106
            echo "                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">";
            // line 107
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_title", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "</h2>
                            <p>";
            // line 108
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_text", [], "any", false, false, true, 108), 108, $this->source);
            echo "
                            </p>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addittionalInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "
                        <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "buy_link", [], "any", false, false, true, 113), 113, $this->source), "html", null, true);
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
                        window.scroll({
                            top: scrollHeight,
                            behavior: 'smooth'
                        })
                    }
                    else{
                        /*СВАЙП ВНИЗ*/}
                }
            }

        }, false);

    }





</script>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/pages/en/product2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 113,  400 => 112,  390 => 108,  386 => 107,  383 => 106,  379 => 105,  374 => 102,  371 => 101,  367 => 99,  353 => 98,  345 => 93,  341 => 92,  337 => 91,  329 => 90,  325 => 89,  322 => 88,  319 => 87,  302 => 86,  299 => 85,  296 => 84,  294 => 83,  286 => 78,  282 => 76,  279 => 75,  275 => 73,  261 => 72,  253 => 67,  249 => 66,  245 => 65,  237 => 64,  233 => 63,  230 => 62,  227 => 61,  210 => 60,  207 => 59,  204 => 58,  202 => 57,  194 => 52,  188 => 48,  172 => 46,  168 => 45,  150 => 32,  137 => 21,  122 => 19,  111 => 16,  108 => 15,  104 => 14,  95 => 13,  78 => 12,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = productDetails.record %}
{% set displayColumn = productDetails.displayColumn %}
{% set notFoundMessage = productDetails.notFoundMessage %}

<div class=\"product-section\">




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
        <div class=\"close_icon\">
            <a href=\"/category/{{record.category}}/#{{record.subcategory}}\">
                <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path d=\"M4.39355 2.39355L25.6068 23.6068\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                    <path d=\"M4.39355 23.6064L25.6068 2.39324\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                </svg>
            </a>
        </div>
                        
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
                    <div class=\"basket-section__price\">{{ record.price }}</div>
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
                        window.scroll({
                            top: scrollHeight,
                            behavior: 'smooth'
                        })
                    }
                    else{
                        /*СВАЙП ВНИЗ*/}
                }
            }

        }, false);

    }





</script>", "/Users/iamk/git/darling/themes/demo/pages/en/product2.htm", "");
    }
}

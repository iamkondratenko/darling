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

/* /Users/iamk/git/darling/themes/demo/pages/product.htm */
class __TwigTemplate_55f48d30a52cb0dcc0659d820641a974123cd92ee0d5f2dfa489f226b4a12cde extends \Twig\Template
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
        $filters = array("escape" => 13, "media" => 16, "raw" => 82);
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
                echo "                <div style=\"display: block; min-width: 100%;\">
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
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_title", [], "any", false, false, true, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 45
            echo "                        <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "product_title_marked", [], "any", false, false, true, 45) == true)) {
                echo "title-section__title_marked";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["title"], "product_title_construct", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "break_subcategory_title", [], "any", false, false, true, 45) == true)) {
                echo "</br>";
            }
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "</p>
</div>
                    <p></p>
                </div>
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "</div>
                </div>



                <div class=\"text-block__color-section\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 62));
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
            // line 63
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 63) > 1)) {
                // line 64
                echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                // line 65
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "\"
                               name=\"contact\" value=\"email\" ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 66) == true)) {
                    echo " checked";
                }
                echo "  data-colorPicker=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\">
                        <label for=\"color-picker-";
                // line 67
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                // line 68
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "\">
                                <span class=\"text-block__color-section_number\">0";
                // line 69
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
            }
            // line 74
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
        // line 75
        echo "                </div>

                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "additional_info", [], "any", false, false, true, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["addittionalInfo"]) {
            // line 80
            echo "                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">";
            // line 81
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_title", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "</h2>
                            <p>";
            // line 82
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_text", [], "any", false, false, true, 82), 82, $this->source);
            echo "
                            </p>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addittionalInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
                        <a href=\"#\" class=\"buy_now_link\">buy now</a>


                    </div>
                </div>
            </div>
        </div>


    </div>
    
    
    <style>



    
    
/* PRODUCT CARD */

html {
    scroll-behavior: smooth;
}

.close_icon {
    display: block;
    position: absolute;
    right: 60px;
    top: 60px;
}

.MainMenu-Icon {
    width: 30px;
    height: 22px;
    cursor: pointer;
}

.MainMenu-Icon::before {
    width: 30px;
    height: 4px;
    content: '';
    background-color: black;
    transform: rotate(
            45deg
    ) translate(4px, 10px);
    position: absolute;
}

.MainMenu-Icon::after {
    width: 30px;
    height: 4px;
    content: '';
    background-color: black;
    transform: rotate(
            -45deg
    ) translate(3px, -9px);
    position: absolute;
    top: 82px;
}


.text-block__color-section {
    display: flex;
}

.text-block__color-section__holder {
    width: 85px;
    height: 85px;
    margin-right: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-block__color-section_item {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    transition-duration: 400ms;
    cursor: pointer;
}

.text-block__color-section_number {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-block__color-section__holder.active-color > .text-block__color-section_item > .text-block__color-section_number {
    border: 3px solid #fff;
    border-radius: 50%;
}

.text-block__color-section__holder.active-color > .text-block__color-section_item {
    width: 85px;
    height: 85px;
}

.text-block__color-section_item:hover {
    width: 85px;
    height: 85px;
    transition-duration: 400ms;
}

.text-block__color-section_item:hover > .text-block__color-section_number {
    width: 85px;
    height: 85px;
}

a.buy_now_link {
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 25px;
    color: #EA028A;
    text-decoration: underline;
}

.product-section {
    width: 100vw;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    background-color: #EEEEEE;
}

.product-section__text-block {
    color: #222;
    padding: 120px;
    margin: 0;
    width: 50%;
    background-color: #fff;
}

h1.title-section__title {
    font-size: 50px;
    line-height: 1;
    text-transform: uppercase;
    margin-bottom: 3%;
    color: #222;
    font-weight: 700;
}

.title-section__title_marked {
    color: #EA028A;
}

.text-block__basket-section {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10%;
}

.basket-section__price {
    font-size: 35px;
    font-weight: 700;
    color: #EA028A;
}

.basket-section__price::after {
    content: ' ₽';
    white-space: pre;
    position: absolute;
}

.text-block__title-section {
    margin-bottom: 5%;
}

.title-section__description {
    line-height: 1.8;
    font-size: 1.2em;
}

.product-info-block__title {
    margin: 0 auto 2%;
}

.product-info-block__description {
    margin: 0 0 5%;
    line-height: 1.8;
}

h2.product-info-block__description__title {
    color: #222;
    font-size: 25px;
    font-weight: 500;
    line-height: 28px;
    margin-bottom: 10px;
}

.product-section__photo-block {
    width: 50%;
    margin: 30px 0;
}

.photo-block__product-holder {
    width: 100%;
    display: none;
}

.photo-block__product-holder.activedColorSlider {
    width: 100%;
    display: block;
}

.photo-block__product {
    width: 100%;
    margin: 0 auto;
    display: block;
}

.float-scroll {
    transform: rotate3d(0, 0, 0, 0.01deg);
    position: sticky;
    bottom: 0;
    will-change: transform;

}

input.radio-color-picker {
    display: none;
}

input.radio-color-picker:checked+label > .text-block__color-section_item {
    width: 85px;
    height: 85px;
}

input.radio-color-picker:checked+label > .text-block__color-section_item > .text-block__color-section_number {
    border: 3px solid #fff;
    border-radius: 50%;
    width: 70px;
    height: 70px;
}

@media screen and (max-width: 767px) {

    .dots-pic {
        height: 8px;
        position: absolute;
        width: 86%;
        margin-left: 7%;
        display: flex;
    }

    .dot {
        width: 8px;
        height: 8px;
        margin-right: 15px;
        background: #22222247;
        border-radius: 4px;
    }

    .dot.active-dot {
        background: #222222;
    }

    .photo-block__product-holder.activedColorSlider {
        -webkit-overflow-scrolling: touch;
        width: 100%;
        display: flex;
        flex-direction: row;
        overflow-y: auto;
        transition-duration: 400ms;
        height: 80vw;
    }

    .photo-block__product-holder {
        height: 80vw;
    }

    ::-webkit-scrollbar { /* chrome based */
        width: 0px;  /* ширина scrollbar'a */
        background: transparent;  /* опционально */
    }

    .product-section {
        display: flex;
        flex-direction: column;
    }

    .product-section__photo-block {
        width: 100%;
    }

    .product-section__text-block {
        width: 100%;
        padding: 30px;
    }
    .close_icon {
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        position: absolute;
        top: 20px;
        right: 20px;
    }
}

    
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

        floatScrollBlock.style.transform = \"translate3d(0.01px,\" + (Math.floor(scrolledY / (fullBlockHeight / (fullBlockHeight - floatScrollBlockHeight)))) + \"px, 0.01px)\"

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
        return "/Users/iamk/git/darling/themes/demo/pages/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 86,  292 => 82,  288 => 81,  285 => 80,  281 => 79,  275 => 75,  261 => 74,  253 => 69,  249 => 68,  245 => 67,  237 => 66,  233 => 65,  230 => 64,  227 => 63,  210 => 62,  201 => 56,  193 => 51,  187 => 47,  171 => 45,  167 => 44,  150 => 32,  137 => 21,  122 => 19,  111 => 16,  108 => 15,  104 => 14,  95 => 13,  78 => 12,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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
                <div style=\"display: block; min-width: 100%;\">
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
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">{{ record.price }}</div>
                </div>



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

                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        {% for addittionalInfo in record.additional_info %}
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">{{addittionalInfo.additional_info_title}}</h2>
                            <p>{{addittionalInfo.additional_info_text | raw}}
                            </p>
                        </div>
                        {% endfor %}

                        <a href=\"#\" class=\"buy_now_link\">buy now</a>


                    </div>
                </div>
            </div>
        </div>


    </div>
    
    
    <style>



    
    
/* PRODUCT CARD */

html {
    scroll-behavior: smooth;
}

.close_icon {
    display: block;
    position: absolute;
    right: 60px;
    top: 60px;
}

.MainMenu-Icon {
    width: 30px;
    height: 22px;
    cursor: pointer;
}

.MainMenu-Icon::before {
    width: 30px;
    height: 4px;
    content: '';
    background-color: black;
    transform: rotate(
            45deg
    ) translate(4px, 10px);
    position: absolute;
}

.MainMenu-Icon::after {
    width: 30px;
    height: 4px;
    content: '';
    background-color: black;
    transform: rotate(
            -45deg
    ) translate(3px, -9px);
    position: absolute;
    top: 82px;
}


.text-block__color-section {
    display: flex;
}

.text-block__color-section__holder {
    width: 85px;
    height: 85px;
    margin-right: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-block__color-section_item {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    transition-duration: 400ms;
    cursor: pointer;
}

.text-block__color-section_number {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-block__color-section__holder.active-color > .text-block__color-section_item > .text-block__color-section_number {
    border: 3px solid #fff;
    border-radius: 50%;
}

.text-block__color-section__holder.active-color > .text-block__color-section_item {
    width: 85px;
    height: 85px;
}

.text-block__color-section_item:hover {
    width: 85px;
    height: 85px;
    transition-duration: 400ms;
}

.text-block__color-section_item:hover > .text-block__color-section_number {
    width: 85px;
    height: 85px;
}

a.buy_now_link {
    font-size: 20px;
    font-style: normal;
    font-weight: 400;
    line-height: 25px;
    color: #EA028A;
    text-decoration: underline;
}

.product-section {
    width: 100vw;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    background-color: #EEEEEE;
}

.product-section__text-block {
    color: #222;
    padding: 120px;
    margin: 0;
    width: 50%;
    background-color: #fff;
}

h1.title-section__title {
    font-size: 50px;
    line-height: 1;
    text-transform: uppercase;
    margin-bottom: 3%;
    color: #222;
    font-weight: 700;
}

.title-section__title_marked {
    color: #EA028A;
}

.text-block__basket-section {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 10%;
}

.basket-section__price {
    font-size: 35px;
    font-weight: 700;
    color: #EA028A;
}

.basket-section__price::after {
    content: ' ₽';
    white-space: pre;
    position: absolute;
}

.text-block__title-section {
    margin-bottom: 5%;
}

.title-section__description {
    line-height: 1.8;
    font-size: 1.2em;
}

.product-info-block__title {
    margin: 0 auto 2%;
}

.product-info-block__description {
    margin: 0 0 5%;
    line-height: 1.8;
}

h2.product-info-block__description__title {
    color: #222;
    font-size: 25px;
    font-weight: 500;
    line-height: 28px;
    margin-bottom: 10px;
}

.product-section__photo-block {
    width: 50%;
    margin: 30px 0;
}

.photo-block__product-holder {
    width: 100%;
    display: none;
}

.photo-block__product-holder.activedColorSlider {
    width: 100%;
    display: block;
}

.photo-block__product {
    width: 100%;
    margin: 0 auto;
    display: block;
}

.float-scroll {
    transform: rotate3d(0, 0, 0, 0.01deg);
    position: sticky;
    bottom: 0;
    will-change: transform;

}

input.radio-color-picker {
    display: none;
}

input.radio-color-picker:checked+label > .text-block__color-section_item {
    width: 85px;
    height: 85px;
}

input.radio-color-picker:checked+label > .text-block__color-section_item > .text-block__color-section_number {
    border: 3px solid #fff;
    border-radius: 50%;
    width: 70px;
    height: 70px;
}

@media screen and (max-width: 767px) {

    .dots-pic {
        height: 8px;
        position: absolute;
        width: 86%;
        margin-left: 7%;
        display: flex;
    }

    .dot {
        width: 8px;
        height: 8px;
        margin-right: 15px;
        background: #22222247;
        border-radius: 4px;
    }

    .dot.active-dot {
        background: #222222;
    }

    .photo-block__product-holder.activedColorSlider {
        -webkit-overflow-scrolling: touch;
        width: 100%;
        display: flex;
        flex-direction: row;
        overflow-y: auto;
        transition-duration: 400ms;
        height: 80vw;
    }

    .photo-block__product-holder {
        height: 80vw;
    }

    ::-webkit-scrollbar { /* chrome based */
        width: 0px;  /* ширина scrollbar'a */
        background: transparent;  /* опционально */
    }

    .product-section {
        display: flex;
        flex-direction: column;
    }

    .product-section__photo-block {
        width: 100%;
    }

    .product-section__text-block {
        width: 100%;
        padding: 30px;
    }
    .close_icon {
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        position: absolute;
        top: 20px;
        right: 20px;
    }
}

    
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

        floatScrollBlock.style.transform = \"translate3d(0.01px,\" + (Math.floor(scrolledY / (fullBlockHeight / (fullBlockHeight - floatScrollBlockHeight)))) + \"px, 0.01px)\"

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





</script>", "/Users/iamk/git/darling/themes/demo/pages/product.htm", "");
    }
}

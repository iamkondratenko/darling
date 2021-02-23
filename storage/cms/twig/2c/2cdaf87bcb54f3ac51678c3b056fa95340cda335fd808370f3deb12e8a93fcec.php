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
        $filters = array("escape" => 13, "media" => 16, "raw" => 81);
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




    <div class=\"product-section__photo-block float-scroll\">

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
            <div class=\"product-section__text-block-holder\">
                <div class=\"close_icon\">
                    <a href=\"/category/";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "/#";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "subcategory", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\">
                        <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M4.39355 2.39355L25.6068 23.6068\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                            <path d=\"M4.39355 23.6064L25.6068 2.39324\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                        </svg>
                    </a>
                </div>

                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_title", [], "any", false, false, true, 43));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 44
            echo "                        <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "product_title_marked", [], "any", false, false, true, 44) == true)) {
                echo "title-section__title_marked";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["title"], "product_title_construct", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "break_subcategory_title", [], "any", false, false, true, 44) == true)) {
                echo "</br>";
            }
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                    </h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "</p>
</div>
                    <p></p>
                </div>
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "</div>
                </div>



                <div class=\"text-block__color-section\">
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 61));
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
            // line 62
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 62) > 1)) {
                // line 63
                echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                // line 64
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "\"
                               name=\"contact\" value=\"email\" ";
                // line 65
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 65) == true)) {
                    echo " checked";
                }
                echo "  data-colorPicker=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "\">
                        <label for=\"color-picker-";
                // line 66
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                // line 67
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "\">
                                <span class=\"text-block__color-section_number\">0";
                // line 68
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
                echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
            }
            // line 73
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
        // line 74
        echo "                </div>

                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "additional_info", [], "any", false, false, true, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["addittionalInfo"]) {
            // line 79
            echo "                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "</h2>
                            <p>";
            // line 81
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_text", [], "any", false, false, true, 81), 81, $this->source);
            echo "
                            </p>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addittionalInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
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
    transition-duration: 100ms;
    transform: rotateX(0.01px);
    position: sticky;
    bottom: 0;
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

@media screen and (max-width: 768px) {

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

<script defer src=\"https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js\"></script>
<script>
    var colorVariantNodes = document.querySelectorAll('.radio-color-picker')
    var colorSliderProducts = document.querySelectorAll('.photo-block__product-holder')





    function setDots() {
        var activeNode = document.querySelector('.activedColorSlider')
        var screenWidth = window.innerWidth
        var scrollWidth = activeNode.scrollWidth
        var sliderCount = 1

        console.log((activeNode.scrollLeft + screenWidth) / screenWidth)

        activeNode.addEventListener('scroll', function (){
            console.log(activeNode.scrollWidth)
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

                        console.log(currentSlider)
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
                        console.log('sdffsdd')
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
        return array (  301 => 85,  291 => 81,  287 => 80,  284 => 79,  280 => 78,  274 => 74,  260 => 73,  252 => 68,  248 => 67,  244 => 66,  236 => 65,  232 => 64,  229 => 63,  226 => 62,  209 => 61,  200 => 55,  192 => 50,  186 => 46,  170 => 44,  166 => 43,  151 => 33,  137 => 21,  122 => 19,  111 => 16,  108 => 15,  104 => 14,  95 => 13,  78 => 12,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = productDetails.record %}
{% set displayColumn = productDetails.displayColumn %}
{% set notFoundMessage = productDetails.notFoundMessage %}

<div class=\"product-section\">




    <div class=\"product-section__photo-block float-scroll\">

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
            <div class=\"product-section__text-block-holder\">
                <div class=\"close_icon\">
                    <a href=\"/category/{{record.category}}/#{{record.subcategory}}\">
                        <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M4.39355 2.39355L25.6068 23.6068\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                            <path d=\"M4.39355 23.6064L25.6068 2.39324\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                        </svg>
                    </a>
                </div>

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
    transition-duration: 100ms;
    transform: rotateX(0.01px);
    position: sticky;
    bottom: 0;
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

@media screen and (max-width: 768px) {

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

<script defer src=\"https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js\"></script>
<script>
    var colorVariantNodes = document.querySelectorAll('.radio-color-picker')
    var colorSliderProducts = document.querySelectorAll('.photo-block__product-holder')





    function setDots() {
        var activeNode = document.querySelector('.activedColorSlider')
        var screenWidth = window.innerWidth
        var scrollWidth = activeNode.scrollWidth
        var sliderCount = 1

        console.log((activeNode.scrollLeft + screenWidth) / screenWidth)

        activeNode.addEventListener('scroll', function (){
            console.log(activeNode.scrollWidth)
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

                        console.log(currentSlider)
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
                        console.log('sdffsdd')
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

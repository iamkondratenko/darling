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
        $filters = array("escape" => 13, "media" => 15, "raw" => 73);
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
                echo "                    <img src=\"";
                echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "picture", [], "any", false, false, true, 15), 15, $this->source));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sliderPicture"], "alt_text", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\" class=\"photo-block__product\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sliderPicture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
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
        // line 19
        echo "
    </div>

    <div class=\"product-section__text-block\">
            <div class=\"product-section__text-block-holder\">
                <div class=\"close_icon\">
                    <a href=\"/category/";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
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
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "product_title", [], "any", false, false, true, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 36
            echo "                        <span class=\"";
            if ((twig_get_attribute($this->env, $this->source, $context["title"], "product_title_marked", [], "any", false, false, true, 36) == true)) {
                echo "title-section__title_marked";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["title"], "product_title_construct", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "</span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "description", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "</p>
</div>
                    <p></p>
                </div>
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "price", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "</div>
                </div>



                <div class=\"text-block__color-section\">
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "color_slider", [], "any", false, false, true, 53));
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
            // line 54
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, true, 54) > 1)) {
                // line 55
                echo "                    <div class=\"text-block__color-section__holder\" >
                        <input class=\"radio-color-picker\" type=\"radio\" id=\"color-picker-";
                // line 56
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "\"
                               name=\"contact\" value=\"email\" ";
                // line 57
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 57) == true)) {
                    echo " checked";
                }
                echo "  data-colorPicker=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "\">
                        <label for=\"color-picker-";
                // line 58
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "\">
                            <div class=\"text-block__color-section_item\" style=\"background-color: ";
                // line 59
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["slider"], "product_color", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "\">
                                <span class=\"text-block__color-section_number\">0";
                // line 60
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "</span>
                            </div>
                        </label>
                    </div>
                    ";
            }
            // line 65
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
        // line 66
        echo "                </div>

                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "additional_info", [], "any", false, false, true, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["addittionalInfo"]) {
            // line 71
            echo "                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">";
            // line 72
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_title", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "</h2>
                            <p>";
            // line 73
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["addittionalInfo"], "additional_info_text", [], "any", false, false, true, 73), 73, $this->source);
            echo "
                            </p>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addittionalInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                        <a href=\"#\" class=\"buy_now_link\">buy now</a>


                    </div>
                </div>
            </div>
        </div>


    </div>
    
    
    <style>
    
    
/* PRODUCT CARD */

.close_icon {
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
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
    padding: 6%;
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
    border-radius: 48px;
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

@media screen and (max-width: 700px) {
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
}
    
    </style>

<script>
    var colorVariantNodes = document.querySelectorAll('.radio-color-picker')
    var colorSliderProducts = document.querySelectorAll('.photo-block__product-holder')


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
            } else {
                colorSliderProducts[i].classList.remove('activedColorSlider')
            }
        }
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
        return array (  287 => 77,  277 => 73,  273 => 72,  270 => 71,  266 => 70,  260 => 66,  246 => 65,  238 => 60,  234 => 59,  230 => 58,  222 => 57,  218 => 56,  215 => 55,  212 => 54,  195 => 53,  186 => 47,  178 => 42,  172 => 38,  159 => 36,  155 => 35,  142 => 25,  134 => 19,  119 => 17,  108 => 15,  104 => 14,  95 => 13,  78 => 12,  68 => 4,  66 => 3,  64 => 2,  62 => 1,);
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
                    <img src=\"{{sliderPicture.picture | media}}\" alt=\"{{sliderPicture.alt_text }}\" class=\"photo-block__product\">
                {% endfor %}
            </div>
        {% endfor %}

    </div>

    <div class=\"product-section__text-block\">
            <div class=\"product-section__text-block-holder\">
                <div class=\"close_icon\">
                    <a href=\"/category/{{record.category}}\">
                        <svg width=\"30\" height=\"26\" viewBox=\"0 0 30 26\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                            <path d=\"M4.39355 2.39355L25.6068 23.6068\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                            <path d=\"M4.39355 23.6064L25.6068 2.39324\" stroke=\"#EA028A\" stroke-width=\"4\"/>
                        </svg>
                    </a>
                </div>

                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\">
                        {% for title in record.product_title %}
                        <span class=\"{% if title.product_title_marked == true %}title-section__title_marked{% endif %}\">{{title.product_title_construct}}</span>
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

.close_icon {
    display: flex;
    align-items: flex-end;
    justify-content: flex-end;
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
    padding: 6%;
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
    border-radius: 48px;
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

@media screen and (max-width: 700px) {
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
}
    
    </style>

<script>
    var colorVariantNodes = document.querySelectorAll('.radio-color-picker')
    var colorSliderProducts = document.querySelectorAll('.photo-block__product-holder')


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
            } else {
                colorSliderProducts[i].classList.remove('activedColorSlider')
            }
        }
    }


</script>", "/Users/iamk/git/darling/themes/demo/pages/product.htm", "");
    }
}

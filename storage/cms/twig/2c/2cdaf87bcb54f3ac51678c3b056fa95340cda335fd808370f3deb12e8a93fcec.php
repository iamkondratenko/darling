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
        echo "<div class=\"product-section\" data-productid=\"6\">

    <div class=\"product-section__photo-block float-scroll\">
        <div class=\"photo-block__product-holder \">
            <img src=\"http://darling:8888/storage/app/media/Rectangle%2089.jpg\" alt=\"\" class=\"photo-block__product\">
            <img src=\"http://darling:8888/storage/app/media/Rectangle%2089.jpg\" alt=\"\" class=\"photo-block__product\">
            <img src=\"http://darling:8888/storage/app/media/Rectangle%2089.jpg\" alt=\"\" class=\"photo-block__product\">
            <img src=\"http://darling:8888/storage/app/media/Rectangle%2089.jpg\" alt=\"\" class=\"photo-block__product\">
        </div>
    </div>

    <div class=\"product-section__text-block\">
            <div class=\"product-section__text-block-holder\">
                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\"><span class=\"title-section__title_marked\">DARLING*</span>  3-D CURE</h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>Upgraded fermentation Bio-Cellulose face mask for restorative deep skin health</p>
</div>
                    <p></p>
                </div>
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">170</div>
                </div>
                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\"></h2>
                            <p>I’m your 3-D second skin FERMENTATION mask of nourishing actives with HYALURONIC ACID, ALOE LEAF, CAFFEINE and ALLANTOIN for preventive and restorative effect in the deeper skin layers
                            </p>
                        </div>
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">THE FEATURES</h2>
                            <p>Advanced Bio Cellulose 3-D sheet mask with grid pattern holding more actives for advanced delivery deep into skin layers. Bio Cellulose sheet is infused with most current probiotic + fermentation technology. The creamy Hyaluronic Acid, Aloe Leaf polysaccharides, Caffeine and Allantoin formula intensively nourishes and calms the skin.
                            </p>
                        </div>
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">THE TIPS
                            </h2>
                            <p>Remove one tulle-like net and apply gel side with the other net than discard it. Super thin layer of gel will meld to your face. Relax for 10-20 min then remove mask and gently tap to fully absorb the essence. Your skin is calm and restored. Ideal for all skin types including dry and sensitive skin.
                            </p>
                        </div>
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">INGRIDIENTS
                            </h2>
                            <p>Water, Glycerin, Methylpropanediol, Dipropylene Glycol, Hydroxyacetophenone, Carbomer, Allantoin, Caffeine, PEG-40 Hydrogenated Castor Oil, Xanthan Gum, Tromethamine, Caprylyl Glycol, 1,2-Hexanediol, Ethylhexylglycerin, Butylene Glycol, Glyceryl Acrylate/Acrylic Acid Copolymer, Fragrance (Parfum), Disodium EDTA, Sodium Hyaluronate, PVM/MA Copolymer, Althaea Rosea Flower Extract, Aloe Barbadensis Leaf Polysaccharides.
                            </p>
                        </div>


                        <a href=\"#\" class=\"buy_now_link\">buy now</a>


                    </div>
                </div>
            </div>
        </div>


    </div>
    
    
    <style>
    
    
/* PRODUCT CARD */

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

.basket-section__basket-button {
    width: 70%;
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
    
    </style>";
    }

    public function getTemplateName()
    {
        return "/Users/iamk/git/darling/themes/demo/pages/product.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-section\" data-productid=\"6\">

    <div class=\"product-section__photo-block float-scroll\">
        <div class=\"photo-block__product-holder \">
            <img src=\"http://darling:8888/storage/app/media/Rectangle%2089.jpg\" alt=\"\" class=\"photo-block__product\">
            <img src=\"http://darling:8888/storage/app/media/Rectangle%2089.jpg\" alt=\"\" class=\"photo-block__product\">
            <img src=\"http://darling:8888/storage/app/media/Rectangle%2089.jpg\" alt=\"\" class=\"photo-block__product\">
            <img src=\"http://darling:8888/storage/app/media/Rectangle%2089.jpg\" alt=\"\" class=\"photo-block__product\">
        </div>
    </div>

    <div class=\"product-section__text-block\">
            <div class=\"product-section__text-block-holder\">
                <div class=\"text-block__title-section\">
                    <h1 class=\"title-section__title\"><span class=\"title-section__title_marked\">DARLING*</span>  3-D CURE</h1>
                    <p class=\"title-section__description\">
                        </p><div title=\"Page 1\">

\t<p>Upgraded fermentation Bio-Cellulose face mask for restorative deep skin health</p>
</div>
                    <p></p>
                </div>
                <div class=\"text-block__basket-section\">
                    <div class=\"basket-section__price\">170</div>
                </div>
                <div class=\"text-block__info-section\">
                    <div class=\"info-section__product-info-block\">
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\"></h2>
                            <p>I’m your 3-D second skin FERMENTATION mask of nourishing actives with HYALURONIC ACID, ALOE LEAF, CAFFEINE and ALLANTOIN for preventive and restorative effect in the deeper skin layers
                            </p>
                        </div>
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">THE FEATURES</h2>
                            <p>Advanced Bio Cellulose 3-D sheet mask with grid pattern holding more actives for advanced delivery deep into skin layers. Bio Cellulose sheet is infused with most current probiotic + fermentation technology. The creamy Hyaluronic Acid, Aloe Leaf polysaccharides, Caffeine and Allantoin formula intensively nourishes and calms the skin.
                            </p>
                        </div>
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">THE TIPS
                            </h2>
                            <p>Remove one tulle-like net and apply gel side with the other net than discard it. Super thin layer of gel will meld to your face. Relax for 10-20 min then remove mask and gently tap to fully absorb the essence. Your skin is calm and restored. Ideal for all skin types including dry and sensitive skin.
                            </p>
                        </div>
                        <div class=\"product-info-block__description\">
                            <h2 class=\"product-info-block__description__title\">INGRIDIENTS
                            </h2>
                            <p>Water, Glycerin, Methylpropanediol, Dipropylene Glycol, Hydroxyacetophenone, Carbomer, Allantoin, Caffeine, PEG-40 Hydrogenated Castor Oil, Xanthan Gum, Tromethamine, Caprylyl Glycol, 1,2-Hexanediol, Ethylhexylglycerin, Butylene Glycol, Glyceryl Acrylate/Acrylic Acid Copolymer, Fragrance (Parfum), Disodium EDTA, Sodium Hyaluronate, PVM/MA Copolymer, Althaea Rosea Flower Extract, Aloe Barbadensis Leaf Polysaccharides.
                            </p>
                        </div>


                        <a href=\"#\" class=\"buy_now_link\">buy now</a>


                    </div>
                </div>
            </div>
        </div>


    </div>
    
    
    <style>
    
    
/* PRODUCT CARD */

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

.basket-section__basket-button {
    width: 70%;
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
    
    </style>", "/Users/iamk/git/darling/themes/demo/pages/product.htm", "");
    }
}

<?php

/* /home/salinabyabc/public_html/themes/jtherczeg-corlate/pages/samples/preturi.htm */
class __TwigTemplate_fcf622255082a12640718842413a32a2ff5a787125c1796914b67e853734bad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section id=\"feature\" class=\"transparent-bg\" style=\"padding-top: 100px\">
        <div class=\"container\">
           <div class=\"center wow fadeInDown\">
                <h2>Preturi</h2>

                    </div><!--/.col-md-4-->               
                </div><!--/.services-->
 
 
    <section class=\"pricing-area shortcode-item\">
        
            ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("preturi"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    </section>
               

    <section id=\"services\" class=\"service-item\" style=\"padding: 50px;border-top: solid 5px #168CCB;\">
\t";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("sendmachine"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "/home/salinabyabc/public_html/themes/jtherczeg-corlate/pages/samples/preturi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 18,  42 => 17,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* <section id="feature" class="transparent-bg" style="padding-top: 100px">*/
/*         <div class="container">*/
/*            <div class="center wow fadeInDown">*/
/*                 <h2>Preturi</h2>*/
/* */
/*                     </div><!--/.col-md-4-->               */
/*                 </div><!--/.services-->*/
/*  */
/*  */
/*     <section class="pricing-area shortcode-item">*/
/*         */
/*             {%partial "preturi"%}*/
/*     </section>*/
/*                */
/* */
/*     <section id="services" class="service-item" style="padding: 50px;border-top: solid 5px #168CCB;">*/
/* 	{% partial "sendmachine" %}*/
/* </section>*/

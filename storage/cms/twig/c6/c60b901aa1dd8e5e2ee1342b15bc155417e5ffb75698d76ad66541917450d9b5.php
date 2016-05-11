<?php

/* /home/salinabyabc/public_html/themes/jtherczeg-corlate/partials/top.htm */
class __TwigTemplate_bfd091838126feac0383f71d6ada005feba6e258d5ff0dbc0fe74d53ac4acadd extends Twig_Template
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
        echo "<div class=\"top-bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-9 col-xs-12\">
                        ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav_home"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "                    </div>
                    <div class=\"col-sm-1 col-xs-6\" style=\"padding-top: 15px;\">
                       <div class=\"social\">
                            <ul class=\"social-share\">
                                <a href=\"https://www.facebook.com/salinabyabc/\"><i class=\"fa fa-facebook\"></i></a>
                            </ul>
                       </div>
                    </div>
                    <div class=\"col-sm-2 col-xs-6\" style=\"padding-top: 15px;\">
                        <div class=\"top-number\"><p><i class=\"fa fa-phone-square\"></i> 0733.809.377</p></div>
                    </div>
                </div>
            </div><!--/.container-->
\t</div><!--/.top-bar-->";
    }

    public function getTemplateName()
    {
        return "/home/salinabyabc/public_html/themes/jtherczeg-corlate/partials/top.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="top-bar">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-9 col-xs-12">*/
/*                         {% partial "nav_home" %}*/
/*                     </div>*/
/*                     <div class="col-sm-1 col-xs-6" style="padding-top: 15px;">*/
/*                        <div class="social">*/
/*                             <ul class="social-share">*/
/*                                 <a href="https://www.facebook.com/salinabyabc/"><i class="fa fa-facebook"></i></a>*/
/*                             </ul>*/
/*                        </div>*/
/*                     </div>*/
/*                     <div class="col-sm-2 col-xs-6" style="padding-top: 15px;">*/
/*                         <div class="top-number"><p><i class="fa fa-phone-square"></i> 0733.809.377</p></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!--/.container-->*/
/* 	</div><!--/.top-bar-->*/

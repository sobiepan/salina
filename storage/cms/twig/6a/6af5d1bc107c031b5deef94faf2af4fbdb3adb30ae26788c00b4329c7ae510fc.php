<?php

/* /home/salinabyabc/public_html/themes/jtherczeg-corlate/partials/footer.htm */
class __TwigTemplate_a7dc94ed158f85088dddbe1768f4077f95b9f94e2194b811a57ab14d001fcd1d extends Twig_Template
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
        echo "<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
\t\t\t\t&copy;  ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo ".
            </div>
            <div class=\"col-sm-6\">
                <ul class=\"pull-right\">
                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">Acasa</a></li>
                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('CMS')->pageFilter("samples/despre");
        echo "\">Despre noi</a></li>
                    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('CMS')->pageFilter("samples/faq");
        echo "\">Intrebari frecvente</a></li>
                    <li><a href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->pageFilter("samples/regulament");
        echo "\">Regulament</a></li>
                    <li><a href=\"http://www.anpc.gov.ro/\" target=\"_blank\">ANPC</a></li>
                    <li><a href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->pageFilter("samples/contact");
        echo "\">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    
        <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
<script type=\"text/javascript\">
    window.cookieconsent_options = {\"message\":\"Acest website foloseste cookie-uri pentru a oferi vizitatorilor o experienta mai buna de navigare si servicii adaptate nevoilor fiecaruia\",\"dismiss\":\"Am inteles\",\"learnMore\":\"Mai multe\",\"link\":\"http://salinabyabc.ro/politica-confidentialitate\",\"theme\":\"dark-bottom\"};
</script>

<script type=\"text/javascript\" src=\"//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js\"></script>
<!-- End Cookie Consent plugin -->";
    }

    public function getTemplateName()
    {
        return "/home/salinabyabc/public_html/themes/jtherczeg-corlate/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  45 => 11,  41 => 10,  37 => 9,  33 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-6">*/
/* 				&copy;  {{ "now"|date("Y") }} {{ this.theme.site_name }}.*/
/*             </div>*/
/*             <div class="col-sm-6">*/
/*                 <ul class="pull-right">*/
/*                     <li><a href="{{ 'home'|page }}">Acasa</a></li>*/
/*                     <li><a href="{{ 'samples/despre'|page }}">Despre noi</a></li>*/
/*                     <li><a href="{{ 'samples/faq'|page }}">Intrebari frecvente</a></li>*/
/*                     <li><a href="{{ 'samples/regulament'|page }}">Regulament</a></li>*/
/*                     <li><a href="http://www.anpc.gov.ro/" target="_blank">ANPC</a></li>*/
/*                     <li><a href="{{ 'samples/contact'|page }}">Contact</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*         <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->*/
/* <script type="text/javascript">*/
/*     window.cookieconsent_options = {"message":"Acest website foloseste cookie-uri pentru a oferi vizitatorilor o experienta mai buna de navigare si servicii adaptate nevoilor fiecaruia","dismiss":"Am inteles","learnMore":"Mai multe","link":"http://salinabyabc.ro/politica-confidentialitate","theme":"dark-bottom"};*/
/* </script>*/
/* */
/* <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>*/
/* <!-- End Cookie Consent plugin -->*/

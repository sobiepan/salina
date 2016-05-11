<?php

/* /home/salinabyabc/public_html/themes/jtherczeg-corlate/pages/home.htm */
class __TwigTemplate_3e2b66dfdad106fcfec7b4e16c0ccb27416b0a1193e23ae5cf877b0da7a2ed99 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    setTimeout(function() {
    \$('#circ').modal();
}, 3000);
</script>

<section id=\"main-slider\" class=\"no-margin\">
    <a data-toggle=\"modal\" href=\"#contentBasic\" ><img class=\"bubble\" src=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/slider/bubble.png");
        echo "\"/></a>

\t";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("carousel"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    <!--<a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>-->

</section>

<section id=\"feature\">
\t";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("servicii"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "</section>
<section id=\"studii\" style=\"border-bottom: solid 5px #ED2A81;\">
    \t\t\t<!-- Studii -->
\t\t\t<div class=\"container\">
\t\t\t
\t\t\t\t<div class=\"center wow fadeInDown\">
\t\t\t\t\t<h2>Studii</h2>
\t\t\t\t\t<p class=\"wall-of-text\">In testarile clinice, salinoterapia s-a dovedit a fi eficienta in reducerea simptomelor pentru o varietate de boli respiratorii si ale pielii. In timpul unei testari clinice, Salinoterapia a demonstrat o imbunatatire in:</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"row\">
\t\t
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\">
\t\t\t\t\t\t\t<div class=\"joomla-skill\">                                   
\t\t\t\t\t\t\t\t<p><em>85%</em></p>
\t\t\t\t\t\t\t\t<p>din cazurile de astm usor sau moderat</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t <div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
\t\t\t\t\t\t\t<div class=\"html-skill\">                                  
\t\t\t\t\t\t\t\t<p><em>97%</em></p>
\t\t\t\t\t\t\t\t<p>din cazurile de bronsita<br>cronica, bronsiectazie si<br>fibroza chistica</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<div class=\"sinlge-skill wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\">
\t\t\t\t\t\t\t<div class=\"css-skill\">                                    
\t\t\t\t\t\t\t\t<p><em>75%</em></p>
\t\t\t\t\t\t\t\t<p>din cazurile de astm sever</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
                                    <p class=\"follow\"><em>* “Jurnalul Aerosol Medicine, A.V. Chervinskaya, Volumul 8. Numarul 3, 1995”</em></p>
                                    <p class=\"wall-of-text\">Alte studii relevante cu privire la beneficiile salinoterapiei si salinelor artificiale de suprafata:</p>
                                     <ul>
                                      <li><a href=\"http://www.jurnalulpediatrului.ro/pages/arhiva/27-28/27-28-II-1.pdf\" target=\"_blanket\">Haloterapia - o metoda complementara de tratament pentru afectiunile respiratorii si fibroza cistica</a></li>
                                      <li><a href=\"http://www.ncbi.nlm.nih.gov/pmc/articles/PMC4391365/\" target=\"_blanket\">Studii asupra efectelor terapeutice ale camerelor de haloterapie cu mediu de salina pe pacientii cu patologii de anumite alergii cronice si patologii inflamatorii infectioase</a></li>
                                      <li><a href=\"http://www.saltspaasheville.com/uploads/Halotherapy_for_Treatment_of_Respiratory_Diseases1.pdf\" target=\"_blanket\">Haloterapia ca tratament pentru bolile respiratorii</a></li>
                                    </ul> 
\t\t\t\t</div>
\t
            </div><!--/.our-skill-->
</section>


<section id=\"services\" class=\"service-item\" style=\"max-height: 400px;\">
\t";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("cross"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "</section>
<div class=\"control-popup modal fade\" id=\"contentBasic\">
    <div class=\"modal-dialog\" style=\"width: 450px;top: 30%;\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h2><br>Programeaza-ti sedinta gratuita <br>de salinoterapie in Salina by ABC.</h2><br>
                <p>Completeaza datele personale iar un reprezentant Salina by ABC te va contacta pentru programarea sedintei gratuite de salinoterapie.</p><br>
<div class=\"confirm-container\"> <!--This will contain the confirmation when the email is successfully sent--> </div> 
<form class=\"flexiContactForm\" role=\"form\" data-request=\"contactFormHome::onMailSent\" data-request-update=\"'contactFormHome::confirm': '.confirm-container'\">
            <div class=\"form-groups\">
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"Nume\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"Email\">
    </div>
    <div class=\"form-group\">
        <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"Subiect\">
    </div>
    <div class=\"form-group\">
        <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Telefon\" cols=\"11\" rows=\"1\"></textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Trimite</button>
</div>
    </form>
                <!-- End Sendmachine hosted form -->
            </div>
        </div>
    </div>
</div>

<div class=\"control-popup modal\" id=\"circ\">
    <div class=\"modal-dialog\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" style=\"color: #f00;font-size:35px;opacity: 1;text-shadow: none;\">&times;</button>
        <img class=\"img-responsive\" src=\"";
        // line 110
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/popup/spectacole_mai.jpg");
        echo "\">                
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/salinabyabc/public_html/themes/jtherczeg-corlate/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 110,  111 => 75,  107 => 74,  53 => 22,  49 => 21,  37 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     setTimeout(function() {*/
/*     $('#circ').modal();*/
/* }, 3000);*/
/* </script>*/
/* */
/* <section id="main-slider" class="no-margin">*/
/*     <a data-toggle="modal" href="#contentBasic" ><img class="bubble" src="{{ 'assets/images/slider/bubble.png'|theme }}"/></a>*/
/* */
/* 	{% partial "carousel" %}*/
/*     <!--<a class="prev hidden-xs" href="#main-slider" data-slide="prev">*/
/*         <i class="fa fa-chevron-left"></i>*/
/*     </a>*/
/*     <a class="next hidden-xs" href="#main-slider" data-slide="next">*/
/*         <i class="fa fa-chevron-right"></i>*/
/*     </a>-->*/
/* */
/* </section>*/
/* */
/* <section id="feature">*/
/* 	{% partial "servicii" %}*/
/* </section>*/
/* <section id="studii" style="border-bottom: solid 5px #ED2A81;">*/
/*     			<!-- Studii -->*/
/* 			<div class="container">*/
/* 			*/
/* 				<div class="center wow fadeInDown">*/
/* 					<h2>Studii</h2>*/
/* 					<p class="wall-of-text">In testarile clinice, salinoterapia s-a dovedit a fi eficienta in reducerea simptomelor pentru o varietate de boli respiratorii si ale pielii. In timpul unei testari clinice, Salinoterapia a demonstrat o imbunatatire in:</p>*/
/* 				</div>*/
/* 				*/
/* 				<div class="row">*/
/* 		*/
/* 					<div class="col-sm-4">*/
/* 						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">*/
/* 							<div class="joomla-skill">                                   */
/* 								<p><em>85%</em></p>*/
/* 								<p>din cazurile de astm usor sau moderat</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					 <div class="col-sm-4">*/
/* 						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">*/
/* 							<div class="html-skill">                                  */
/* 								<p><em>97%</em></p>*/
/* 								<p>din cazurile de bronsita<br>cronica, bronsiectazie si<br>fibroza chistica</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="col-sm-4">*/
/* 						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">*/
/* 							<div class="css-skill">                                    */
/* 								<p><em>75%</em></p>*/
/* 								<p>din cazurile de astm sever</p>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/*                                     <p class="follow"><em>* “Jurnalul Aerosol Medicine, A.V. Chervinskaya, Volumul 8. Numarul 3, 1995”</em></p>*/
/*                                     <p class="wall-of-text">Alte studii relevante cu privire la beneficiile salinoterapiei si salinelor artificiale de suprafata:</p>*/
/*                                      <ul>*/
/*                                       <li><a href="http://www.jurnalulpediatrului.ro/pages/arhiva/27-28/27-28-II-1.pdf" target="_blanket">Haloterapia - o metoda complementara de tratament pentru afectiunile respiratorii si fibroza cistica</a></li>*/
/*                                       <li><a href="http://www.ncbi.nlm.nih.gov/pmc/articles/PMC4391365/" target="_blanket">Studii asupra efectelor terapeutice ale camerelor de haloterapie cu mediu de salina pe pacientii cu patologii de anumite alergii cronice si patologii inflamatorii infectioase</a></li>*/
/*                                       <li><a href="http://www.saltspaasheville.com/uploads/Halotherapy_for_Treatment_of_Respiratory_Diseases1.pdf" target="_blanket">Haloterapia ca tratament pentru bolile respiratorii</a></li>*/
/*                                     </ul> */
/* 				</div>*/
/* 	*/
/*             </div><!--/.our-skill-->*/
/* </section>*/
/* */
/* */
/* <section id="services" class="service-item" style="max-height: 400px;">*/
/* 	{% partial "cross" %}*/
/* </section>*/
/* <div class="control-popup modal fade" id="contentBasic">*/
/*     <div class="modal-dialog" style="width: 450px;top: 30%;">*/
/*         <div class="modal-content">*/
/*             <div class="modal-body">*/
/*                 <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*                 <h2><br>Programeaza-ti sedinta gratuita <br>de salinoterapie in Salina by ABC.</h2><br>*/
/*                 <p>Completeaza datele personale iar un reprezentant Salina by ABC te va contacta pentru programarea sedintei gratuite de salinoterapie.</p><br>*/
/* <div class="confirm-container"> <!--This will contain the confirmation when the email is successfully sent--> </div> */
/* <form class="flexiContactForm" role="form" data-request="contactFormHome::onMailSent" data-request-update="'contactFormHome::confirm': '.confirm-container'">*/
/*             <div class="form-groups">*/
/*     <div class="form-group">*/
/*         <input type="text" class="form-control" value=""  name="name" placeholder="Nume">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input type="text" class="form-control" value="" name="email" placeholder="Email">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <input type="text" class="form-control" value="" name="subject" placeholder="Subiect">*/
/*     </div>*/
/*     <div class="form-group">*/
/*         <textarea class="form-control" value="" name="body" placeholder="Telefon" cols="11" rows="1"></textarea>*/
/*     </div>*/
/*     <button type="submit" class="btn btn-primary btn-lg pull-right">Trimite</button>*/
/* </div>*/
/*     </form>*/
/*                 <!-- End Sendmachine hosted form -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="control-popup modal" id="circ">*/
/*     <div class="modal-dialog">*/
/*         <button type="button" class="close" data-dismiss="modal" style="color: #f00;font-size:35px;opacity: 1;text-shadow: none;">&times;</button>*/
/*         <img class="img-responsive" src="{{ 'assets/images/popup/spectacole_mai.jpg'|theme }}">                */
/*     </div>*/
/* </div>*/

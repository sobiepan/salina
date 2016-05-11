<?php

/* /home/salinabyabc/public_html/themes/jtherczeg-corlate/pages/samples/contact.htm */
class __TwigTemplate_9270181bbbf8ca089c8f3f62f1ad9520b32b5f97ade14fa8dc31920216abc2c3 extends Twig_Template
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
        echo "<section id=\"contact-info\">
        <div class=\"center\">                
            <h2>Ne gasesti aici</h2>
            <p class=\"lead\">Pentru mai multe detalii nu ezita sa ne contactezi</p>
        </div>
        <div class=\"gmap-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-6 text-center\">
                        <div class=\"gmap\">
                            <iframe frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.1627870801103!2d26.128084215720392!3d44.429822909881324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fed8f4540979%3A0xf770311eb6a692f5!2sACVATIC+BEBE+CLUB!5e0!3m2!1sro!2sro!4v1453385813248\"></iframe>
                        </div>
                    </div>

                    <div class=\"col-sm-6 map-content\">
                        <ul class=\"row\">
                            <li class=\"col-sm-6 roz\">
                                <address>
                                    <h5>Adresa</h5>
                                    <p>Str. Delea Noua, nr. 15<br>
                                        Sectorul 3<br>
                                        Bucuresti
                                    </p>
                                </address>

                                <address>
                                    <h5>Telefon & Email</h5>
                                    <p>0733.809.377<br>                                  
                                    salina@acvaticbebeclub.ro</p>
                                </address>
                            </li>


                            <li class=\"col-sm-6 albastru\">
                                <address>
                                    <h5>Orar</h5>
                                    <p>Luni -Vineri 09 - 20<br>
                                    Sambata - Duminica 9 - 15</p>
                                </address>

                                <address>
                                    <h5>Datele firmei</h5>
                                    <p>SALINA A.B.C. SRL<br>
                                    CUI 18542128<br>
                                    J40/5428/31.03.2006<br>
                                    Banca Transilvania<br>
                                    RO76BTRLRONCRT0309263001</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <section id=\"contact-page\">
        <div class=\"container\">
            <div class=\"center\">        
                <h2>Contacteaza-ne</h2>
                <p class=\"lead\">Completeaza formularul de mai jos pentru a lua legatura cu noi.</p>
            </div> 
            <div class=\"row contact-wrap\"> 
<div class=\"confirm-container\"> <!--This will contain the confirmation when the email is successfully sent--> </div> 
<form class=\"flexiContactForm\" role=\"form\" data-request=\"contactForm::onMailSent\" data-request-update=\"'contactForm::confirm': '.confirm-container'\">
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
        <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"Mesaj\" cols=\"30\" rows=\"10\"></textarea>
    </div>
    <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">Trimite</button>
</div>
    </form>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->";
    }

    public function getTemplateName()
    {
        return "/home/salinabyabc/public_html/themes/jtherczeg-corlate/pages/samples/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <section id="contact-info">*/
/*         <div class="center">                */
/*             <h2>Ne gasesti aici</h2>*/
/*             <p class="lead">Pentru mai multe detalii nu ezita sa ne contactezi</p>*/
/*         </div>*/
/*         <div class="gmap-area">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6 text-center">*/
/*                         <div class="gmap">*/
/*                             <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2849.1627870801103!2d26.128084215720392!3d44.429822909881324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1fed8f4540979%3A0xf770311eb6a692f5!2sACVATIC+BEBE+CLUB!5e0!3m2!1sro!2sro!4v1453385813248"></iframe>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="col-sm-6 map-content">*/
/*                         <ul class="row">*/
/*                             <li class="col-sm-6 roz">*/
/*                                 <address>*/
/*                                     <h5>Adresa</h5>*/
/*                                     <p>Str. Delea Noua, nr. 15<br>*/
/*                                         Sectorul 3<br>*/
/*                                         Bucuresti*/
/*                                     </p>*/
/*                                 </address>*/
/* */
/*                                 <address>*/
/*                                     <h5>Telefon & Email</h5>*/
/*                                     <p>0733.809.377<br>                                  */
/*                                     salina@acvaticbebeclub.ro</p>*/
/*                                 </address>*/
/*                             </li>*/
/* */
/* */
/*                             <li class="col-sm-6 albastru">*/
/*                                 <address>*/
/*                                     <h5>Orar</h5>*/
/*                                     <p>Luni -Vineri 09 - 20<br>*/
/*                                     Sambata - Duminica 9 - 15</p>*/
/*                                 </address>*/
/* */
/*                                 <address>*/
/*                                     <h5>Datele firmei</h5>*/
/*                                     <p>SALINA A.B.C. SRL<br>*/
/*                                     CUI 18542128<br>*/
/*                                     J40/5428/31.03.2006<br>*/
/*                                     Banca Transilvania<br>*/
/*                                     RO76BTRLRONCRT0309263001</p>*/
/*                                 </address>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </section>  <!--/gmap_area -->*/
/* */
/*     <section id="contact-page">*/
/*         <div class="container">*/
/*             <div class="center">        */
/*                 <h2>Contacteaza-ne</h2>*/
/*                 <p class="lead">Completeaza formularul de mai jos pentru a lua legatura cu noi.</p>*/
/*             </div> */
/*             <div class="row contact-wrap"> */
/* <div class="confirm-container"> <!--This will contain the confirmation when the email is successfully sent--> </div> */
/* <form class="flexiContactForm" role="form" data-request="contactForm::onMailSent" data-request-update="'contactForm::confirm': '.confirm-container'">*/
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
/*         <textarea class="form-control" value="" name="body" placeholder="Mesaj" cols="30" rows="10"></textarea>*/
/*     </div>*/
/*     <button type="submit" class="btn btn-primary btn-lg pull-right">Trimite</button>*/
/* </div>*/
/*     </form>*/
/*             </div><!--/.row-->*/
/*         </div><!--/.container-->*/
/*     </section><!--/#contact-page-->*/

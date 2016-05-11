<?php

/* /home/salinabyabc/public_html/plugins/laminsanneh/flexicontact/components/contactform/confirm.htm */
class __TwigTemplate_8952fcc20576b77011c3b4d0584aac32de544f57fc639d70a97151422979b443 extends Twig_Template
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
        if ((isset($context["errorHappened"]) ? $context["errorHappened"] : null)) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('CMS')->partialFunction(((isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::flash-messages")            , $context['__cms_partial_params']            );
            unset($context['__cms_partial_params']);
        } else {
            // line 4
            echo "    <h2>Mesajul a fost trimis cu succes!</h2>
    <p>
        ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["confirmation_text"]) ? $context["confirmation_text"] : null), "html", null, true);
            echo "
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/salinabyabc/public_html/plugins/laminsanneh/flexicontact/components/contactform/confirm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if errorHappened %}*/
/*     {% partial __SELF__~'::flash-messages' %}*/
/* {% else %}*/
/*     <h2>Mesajul a fost trimis cu succes!</h2>*/
/*     <p>*/
/*         {{confirmation_text}}*/
/*     </p>*/
/* {% endif %}*/

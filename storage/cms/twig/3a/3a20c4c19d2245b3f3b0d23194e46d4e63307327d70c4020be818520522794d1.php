<?php

/* /home/salinabyabc/public_html/themes/jtherczeg-corlate/partials/nav_home.htm */
class __TwigTemplate_11fc0a22429c489af2da5cf65c55569acba00a968877c7eff9e9eda47017d93f extends Twig_Template
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
        // line 2
        $context["links"] = array("home" => array(0 => "home", 1 => "Acasa"), "pages" => array("name" => "Servicii", "sublinks" => array("salinoterapia" => array(0 => "samples/salinoterapia", 1 => "Salinoterapia"), "adulti" => array(0 => "samples/adulti", 1 => "Salinoterapie adulti"), "copii" => array(0 => "samples/copii", 1 => "Salinoterapie copii"), "preturi" => array(0 => "samples/preturi", 1 => "Preturi"))), "portfolio" => array(0 => "samples/galerie-media", 1 => "Galerie Media"), "contact" => array(0 => "samples/contact", 1 => "Contact"));
        // line 18
        echo "
";
        // line 38
        echo "
";
        // line 39
        $context["nav"] = $this;
        // line 40
        echo "
<nav class=\"navbar navbar-inverse\" style=\"padding: 0px;\" role=\"banner\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 49
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\" style=\"padding: 0px;\">
\t\t\t\t";
        // line 53
        echo $context["nav"]->getrender_menu((isset($context["links"]) ? $context["links"] : null));
        echo "
\t\t\t</ul>
\t\t</div>
</nav><!--/nav-->";
    }

    // line 19
    public function getrender_menu($__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "links" => $__links__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 21
                echo "        <li class=\"";
                echo ((($context["code"] == (isset($context["currentPage"]) ? $context["currentPage"] : null))) ? ("active") : (""));
                echo " ";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown") : (""));
                echo "\" style=\"margin-left: 0px;\">
            <a
                href=\"";
                // line 23
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("#") : ($this->env->getExtension('CMS')->pageFilter((($this->getAttribute($context["link"], "page", array())) ? ($this->getAttribute($context["link"], "page", array())) : ($this->getAttribute($context["link"], 0, array(), "array"))))));
                echo "\"
                ";
                // line 24
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 25
                echo "                class=\"";
                echo (($this->getAttribute($context["link"], "sublinks", array())) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 27
                echo twig_escape_filter($this->env, (($this->getAttribute($context["link"], "name", array())) ? ($this->getAttribute($context["link"], "name", array())) : ($this->getAttribute($context["link"], 1, array(), "array"))), "html", null, true);
                echo "
            ";
                // line 28
                if ($this->getAttribute($context["link"], "sublinks", array())) {
                    // line 29
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu mega-menu\">

                    ";
                    // line 32
                    echo $this->getAttribute($this, "render_menu", array(0 => $this->getAttribute($context["link"], "sublinks", array())), "method");
                    echo "
                </ul>
            ";
                }
                // line 35
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "/home/salinabyabc/public_html/themes/jtherczeg-corlate/partials/nav_home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  107 => 32,  102 => 29,  100 => 28,  96 => 27,  90 => 25,  86 => 24,  82 => 23,  74 => 21,  69 => 20,  57 => 19,  49 => 53,  40 => 49,  29 => 40,  27 => 39,  24 => 38,  21 => 18,  19 => 2,);
    }
}
/* {# Note: Only one levels of sublinks are supported by Bootstrap 3 #}*/
/* {% set*/
/*     links = {*/
/* 	    'home':      ['home', 'Acasa'],				*/
/*                 'pages': {*/
/*             name: 'Servicii',*/
/*             sublinks: {*/
/*                 'salinoterapia':['samples/salinoterapia', 'Salinoterapia'],*/
/*                 'adulti':	  ['samples/adulti', 'Salinoterapie adulti'],*/
/*                 'copii':	  ['samples/copii', 'Salinoterapie copii'],*/
/*                 'preturi':	  ['samples/preturi', 'Preturi'],*/
/*             },*/
/*         },*/
/*         'portfolio': ['samples/galerie-media', 'Galerie Media'],*/
/*         'contact': ['samples/contact', 'Contact'],*/
/*     }*/
/* %}*/
/* */
/* {% macro render_menu(links) %}*/
/*     {% for code, link in links %}*/
/*         <li class="{{ code == currentPage ? 'active' }} {{ link.sublinks ? 'dropdown' }}" style="margin-left: 0px;">*/
/*             <a*/
/*                 href="{{ link.sublinks ? '#' : (link.page ?: link[0])|page }}"*/
/*                 {% if link.sublinks %}data-toggle="dropdown"{% endif %}*/
/*                 class="{{ link.sublinks ? 'dropdown-toggle' }}"*/
/*             >*/
/*                 {{ link.name ?: link[1] }}*/
/*             {% if link.sublinks %}*/
/*                 <span class="dropdown-arrow"></span>*/
/*                 <ul class="dropdown-menu mega-menu">*/
/* */
/*                     {{ _self.render_menu(link.sublinks) }}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as nav %}*/
/* */
/* <nav class="navbar navbar-inverse" style="padding: 0px;" role="banner">*/
/* 		<div class="navbar-header">*/
/* 			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/* 			<span class="sr-only">Toggle navigation</span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			<span class="icon-bar"></span>*/
/* 			</button>*/
/* 			<a class="navbar-brand" href="{{ 'home'|page }}"><img src="{{ 'assets/images/logo.png'|theme }}" alt="logo"></a>*/
/* 		</div>*/
/* 		<div class="collapse navbar-collapse navbar-right">*/
/* 			<ul class="nav navbar-nav" style="padding: 0px;">*/
/* 				{{ nav.render_menu(links) }}*/
/* 			</ul>*/
/* 		</div>*/
/* </nav><!--/nav-->*/

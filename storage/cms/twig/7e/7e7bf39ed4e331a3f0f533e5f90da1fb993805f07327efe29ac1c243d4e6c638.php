<?php

/* /home/salinabyabc/public_html/themes/jtherczeg-corlate/layouts/default.htm */
class __TwigTemplate_b858572dbbb68024f417e6c11544b3228cb03c853ac0ddc518aaa74d3adb8b39 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"ro\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
\t
\t<!-- core CSS -->
\t";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "\t<link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/prettyPhoto.css", 4 => "assets/css/main.css", 5 => "assets/css/responsive.css", 6 => "assets/css/hover.css"));
        // line 21
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 24
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 25
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 26
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
\t\t";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("top"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72159253-2', 'auto');
  ga('send', 'pageview');

</script> \t\t
</header><!--/header-->

    ";
        // line 45
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 46
        echo "

<footer id=\"footer\" class=\"midnight-blue\">
\t";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "</footer><!--/#footer-->

<!-- Scripts -->
<script type=\"text/javascript\" src=\"";
        // line 53
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 54
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/respond.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 56
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/main.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 60
        echo $this->env->getExtension('CMS')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
";
        // line 61
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css" rel="stylesheet">'.PHP_EOL;
        // line 62
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "             
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/salinabyabc/public_html/themes/jtherczeg-corlate/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 62,  147 => 61,  143 => 60,  139 => 59,  135 => 58,  131 => 57,  127 => 56,  123 => 55,  119 => 54,  115 => 53,  110 => 50,  106 => 49,  101 => 46,  99 => 45,  85 => 33,  81 => 32,  72 => 26,  68 => 25,  64 => 24,  60 => 23,  56 => 22,  53 => 21,  50 => 14,  47 => 13,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="ro">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/* 	<meta http-equiv="content-type" content="text/html; charset=utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <meta name="description" content="{{ this.page.meta_description }}">*/
/* 	<meta name="keywords" content="{{ this.page.meta_keywords }}">*/
/*     <meta name="author" content="{{ this.page.meta_author }}">*/
/*     <title>{{ this.page.title }} | {{ this.theme.site_name }}</title>*/
/* 	*/
/* 	<!-- core CSS -->*/
/* 	{% styles %}*/
/* 	<link href="{{ ['assets/css/bootstrap.min.css',*/
/* 		'assets/css/font-awesome.min.css',*/
/* 		'assets/css/animate.min.css',*/
/* 		'assets/css/prettyPhoto.css',*/
/* 		'assets/css/main.css',*/
/* 		'assets/css/responsive.css',*/
/*                 'assets/css/hover.css',*/
/* 	]|theme }}" rel="stylesheet">*/
/*     <link rel="shortcut icon" href="{{ 'assets/images/ico/favicon.ico'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ 'assets/images/ico/apple-touch-icon-144-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ 'assets/images/ico/apple-touch-icon-114-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ 'assets/images/ico/apple-touch-icon-72-precomposed.png'|theme }}">*/
/*     <link rel="apple-touch-icon-precomposed" href="{{ 'assets/images/ico/apple-touch-icon-57-precomposed.png'|theme }}">*/
/* </head><!--/head-->*/
/* */
/* <body class="homepage">*/
/* */
/* <header id="header">*/
/* 		{% partial "top" %}*/
/* <script>*/
/*   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*   ga('create', 'UA-72159253-2', 'auto');*/
/*   ga('send', 'pageview');*/
/* */
/* </script> 		*/
/* </header><!--/header-->*/
/* */
/*     {% page %}*/
/* */
/* */
/* <footer id="footer" class="midnight-blue">*/
/* 	{% partial "footer" %}*/
/* </footer><!--/#footer-->*/
/* */
/* <!-- Scripts -->*/
/* <script type="text/javascript" src="{{ 'assets/js/html5shiv.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/respond.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/bootstrap.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.prettyPhoto.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/jquery.isotope.min.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/main.js'|theme }}"></script>*/
/* <script type="text/javascript" src="{{ 'assets/js/wow.min.js'|theme }}"></script>*/
/* {% framework extras %}*/
/* {% scripts %}             */
/*          */
/* </body>*/
/* </html>*/

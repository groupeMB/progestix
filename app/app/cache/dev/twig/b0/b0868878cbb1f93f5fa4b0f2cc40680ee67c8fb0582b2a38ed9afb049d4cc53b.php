<?php

/* @GestionStock/template.html.twig */
class __TwigTemplate_82f20db65f339e8450a7ec4633c381980bcc80173f99553ad2883c1e738aa9b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'corps' => array($this, 'block_corps'),
            'menuHaut' => array($this, 'block_menuHaut'),
            'menuLeft' => array($this, 'block_menuLeft'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_201227f07f3a3edabb0677ba9db14570d59c385495e706365e0bfce792e6ef1b = $this->env->getExtension("native_profiler");
        $__internal_201227f07f3a3edabb0677ba9db14570d59c385495e706365e0bfce792e6ef1b->enter($__internal_201227f07f3a3edabb0677ba9db14570d59c385495e706365e0bfce792e6ef1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestionStock/template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Gestion Stock</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <!-- Encodage en utf-8, en HTML 5 -->
        <meta charset=\"utf-8\" />
        <!-- Inclusion des bibliothèques JavaScript -->

        <script type=\"text/javascript\" src=\"https://www.google.com/jsapi\"></script>
        <script type=\"text/javascript\">
            google.load(\"visualization\", \"1\", {packages:[\"corechart\", 'table', 'treemap', 'gauge']});
            google.load('jquery', '1.6.0');
        </script>
        <script type=\"text/javascript\" src=\" ";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/bower_components/jquery/dist/jquery.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/bower_components/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/bower_components/jquery/dist/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/js/modernizr.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/js/accueil.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/js/membre.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 21
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/js/contrat.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/js/sms.js")), "html", null, true);
        echo "\"></script>
       
        <!-- Inclusion des fichiers de styles -->
        
        <link rel=\"icon\" href=\"asset('bundles/Formation/images/favicon.ico')\" />
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 27
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/css/accueil.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 28
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/css/membre.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 29
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/bower_components/bootstrap/dist/css/bootstrap.min.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 30
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/bower_components/bootstrap/dist/css/jquery.dataTables.min.css")), "html", null, true);
        echo "\"/>
         <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 31
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/css/sb-admin-2.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 32
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/Formation/css/font-awesome.min.css")), "html", null, true);
        echo "\"/>
    </head>
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\" >
        <div >
            <!-- bloc conteneur de la page  -->
                  
            <div id=\"container\" class=\"container container-fluid\">
                ";
        // line 39
        $this->displayBlock('entete', $context, $blocks);
        // line 42
        echo "                ";
        $this->displayBlock('corps', $context, $blocks);
        // line 56
        echo "        </div>            
    </body>

</html>";
        
        $__internal_201227f07f3a3edabb0677ba9db14570d59c385495e706365e0bfce792e6ef1b->leave($__internal_201227f07f3a3edabb0677ba9db14570d59c385495e706365e0bfce792e6ef1b_prof);

    }

    // line 39
    public function block_entete($context, array $blocks = array())
    {
        $__internal_45caf20c76550ee82aeef9d428191f9460219b65559fd2db8214861abe876b5e = $this->env->getExtension("native_profiler");
        $__internal_45caf20c76550ee82aeef9d428191f9460219b65559fd2db8214861abe876b5e->enter($__internal_45caf20c76550ee82aeef9d428191f9460219b65559fd2db8214861abe876b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 40
        echo "                    
                ";
        
        $__internal_45caf20c76550ee82aeef9d428191f9460219b65559fd2db8214861abe876b5e->leave($__internal_45caf20c76550ee82aeef9d428191f9460219b65559fd2db8214861abe876b5e_prof);

    }

    // line 42
    public function block_corps($context, array $blocks = array())
    {
        $__internal_8d702086f05ca29cfbcf08f0a8ddadfc2a2c4ab350c0b156ec0d9ba3a4080801 = $this->env->getExtension("native_profiler");
        $__internal_8d702086f05ca29cfbcf08f0a8ddadfc2a2c4ab350c0b156ec0d9ba3a4080801->enter($__internal_8d702086f05ca29cfbcf08f0a8ddadfc2a2c4ab350c0b156ec0d9ba3a4080801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 43
        echo "                    ";
        $this->displayBlock('menuHaut', $context, $blocks);
        // line 47
        echo "                    
                    ";
        // line 48
        $this->displayBlock('menuLeft', $context, $blocks);
        // line 50
        echo "            
                    ";
        // line 51
        $this->displayBlock('contenu', $context, $blocks);
        // line 54
        echo "
                ";
        
        $__internal_8d702086f05ca29cfbcf08f0a8ddadfc2a2c4ab350c0b156ec0d9ba3a4080801->leave($__internal_8d702086f05ca29cfbcf08f0a8ddadfc2a2c4ab350c0b156ec0d9ba3a4080801_prof);

    }

    // line 43
    public function block_menuHaut($context, array $blocks = array())
    {
        $__internal_3788189705f88805ff3b16eceb5e95bec1d3bcb3344f3ae2625c79c1b0614714 = $this->env->getExtension("native_profiler");
        $__internal_3788189705f88805ff3b16eceb5e95bec1d3bcb3344f3ae2625c79c1b0614714->enter($__internal_3788189705f88805ff3b16eceb5e95bec1d3bcb3344f3ae2625c79c1b0614714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHaut"));

        // line 44
        echo "                        

                    ";
        
        $__internal_3788189705f88805ff3b16eceb5e95bec1d3bcb3344f3ae2625c79c1b0614714->leave($__internal_3788189705f88805ff3b16eceb5e95bec1d3bcb3344f3ae2625c79c1b0614714_prof);

    }

    // line 48
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_d862b9a71c18b143cc0cd56d6297d605ce8a56dcfb8a81532849f0666f1eaf12 = $this->env->getExtension("native_profiler");
        $__internal_d862b9a71c18b143cc0cd56d6297d605ce8a56dcfb8a81532849f0666f1eaf12->enter($__internal_d862b9a71c18b143cc0cd56d6297d605ce8a56dcfb8a81532849f0666f1eaf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 49
        echo "
                    ";
        
        $__internal_d862b9a71c18b143cc0cd56d6297d605ce8a56dcfb8a81532849f0666f1eaf12->leave($__internal_d862b9a71c18b143cc0cd56d6297d605ce8a56dcfb8a81532849f0666f1eaf12_prof);

    }

    // line 51
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1163c03219b0445436ff85d9cbc6e285adeb0829775bb5a2d9f70e6ab6881802 = $this->env->getExtension("native_profiler");
        $__internal_1163c03219b0445436ff85d9cbc6e285adeb0829775bb5a2d9f70e6ab6881802->enter($__internal_1163c03219b0445436ff85d9cbc6e285adeb0829775bb5a2d9f70e6ab6881802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 52
        echo "
                    ";
        
        $__internal_1163c03219b0445436ff85d9cbc6e285adeb0829775bb5a2d9f70e6ab6881802->leave($__internal_1163c03219b0445436ff85d9cbc6e285adeb0829775bb5a2d9f70e6ab6881802_prof);

    }

    public function getTemplateName()
    {
        return "@GestionStock/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 52,  194 => 51,  186 => 49,  180 => 48,  171 => 44,  165 => 43,  157 => 54,  155 => 51,  152 => 50,  150 => 48,  147 => 47,  144 => 43,  138 => 42,  130 => 40,  124 => 39,  114 => 56,  111 => 42,  109 => 39,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  83 => 28,  79 => 27,  71 => 22,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  51 => 17,  47 => 16,  43 => 15,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Gestion Stock</title>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <!-- Encodage en utf-8, en HTML 5 -->*/
/*         <meta charset="utf-8" />*/
/*         <!-- Inclusion des bibliothèques JavaScript -->*/
/* */
/*         <script type="text/javascript" src="https://www.google.com/jsapi"></script>*/
/*         <script type="text/javascript">*/
/*             google.load("visualization", "1", {packages:["corechart", 'table', 'treemap', 'gauge']});*/
/*             google.load('jquery', '1.6.0');*/
/*         </script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/bower_components/jquery/dist/jquery.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/bower_components/jquery/dist/jquery.dataTables.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/js/modernizr.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/js/accueil.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/js/membre.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/js/contrat.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/js/sms.js') }}"></script>*/
/*        */
/*         <!-- Inclusion des fichiers de styles -->*/
/*         */
/*         <link rel="icon" href="asset('bundles/Formation/images/favicon.ico')" />*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/css/accueil.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/css/membre.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/bower_components/bootstrap/dist/css/jquery.dataTables.min.css') }}"/>*/
/*          <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~  asset('bundles/Formation/css/sb-admin-2.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/Formation/css/font-awesome.min.css') }}"/>*/
/*     </head>*/
/*     <body id="coprsTemplate" onload="date_heure('heure');" >*/
/*         <div >*/
/*             <!-- bloc conteneur de la page  -->*/
/*                   */
/*             <div id="container" class="container container-fluid">*/
/*                 {% block entete%}*/
/*                     */
/*                 {% endblock %}*/
/*                 {% block corps %}*/
/*                     {% block menuHaut %}*/
/*                         */
/* */
/*                     {% endblock %}*/
/*                     */
/*                     {% block menuLeft %}*/
/* */
/*                     {% endblock %}            */
/*                     {% block contenu %}*/
/* */
/*                     {% endblock %}*/
/* */
/*                 {% endblock %}*/
/*         </div>            */
/*     </body>*/
/* */
/* </html>*/

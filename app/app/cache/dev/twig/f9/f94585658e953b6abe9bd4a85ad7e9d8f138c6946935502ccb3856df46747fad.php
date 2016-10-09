<?php

/* GestionStockBundle::template.html.twig */
class __TwigTemplate_744bb44a7a6c1f8053d6927704f68c7bc03c99bded0120840d93f1a39c19d8d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'corps' => array($this, 'block_corps'),
            'menuHaut' => array($this, 'block_menuHaut'),
            'titre' => array($this, 'block_titre'),
            'logout' => array($this, 'block_logout'),
            'menuLeft' => array($this, 'block_menuLeft'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9090b2fff6c72471eff148867ae8979235e3e196bac5aa66bb780d31c399d490 = $this->env->getExtension("native_profiler");
        $__internal_9090b2fff6c72471eff148867ae8979235e3e196bac5aa66bb780d31c399d490->enter($__internal_9090b2fff6c72471eff148867ae8979235e3e196bac5aa66bb780d31c399d490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle::template.html.twig"));

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
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/bower_components/jquery/dist/jquery.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/bower_components/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/bower_components/jquery/dist/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/js/modernizr.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/js/accueil.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/js/membre.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 21
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/js/contrat.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/js/sms.js")), "html", null, true);
        echo "\"></script>
        
        <script>
            \$(document).ready(function(){
                        \$('.dropdown-toggle').dropdown();
                        \$('#mytable').DataTable();
                    });    
        </script>

        <!-- Inclusion des fichiers de styles -->
        
        <link rel=\"icon\" href=\"asset('bundles/gestionstock/images/favicon.ico')\" />
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 34
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/accueil.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/membre.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 36
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/bower_components/bootstrap/dist/css/bootstrap.min.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 37
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/bower_components/bootstrap/dist/css/jquery.dataTables.min.css")), "html", null, true);
        echo "\"/>
         <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 38
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/sb-admin-2.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 39
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/font-awesome.min.css")), "html", null, true);
        echo "\"/>
    </head>
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\" >
        <div >
            <!-- bloc conteneur de la page  -->
                  
            <div id=\"container\" class=\"container container-fluid\">
                ";
        // line 46
        $this->displayBlock('entete', $context, $blocks);
        // line 49
        echo "                ";
        $this->displayBlock('corps', $context, $blocks);
        // line 110
        echo "        </div>            
    </body>

</html>";
        
        $__internal_9090b2fff6c72471eff148867ae8979235e3e196bac5aa66bb780d31c399d490->leave($__internal_9090b2fff6c72471eff148867ae8979235e3e196bac5aa66bb780d31c399d490_prof);

    }

    // line 46
    public function block_entete($context, array $blocks = array())
    {
        $__internal_4147a5a5d1c6df09e3d429abc6c866ba7025125653e2833695ddf8612e6eee93 = $this->env->getExtension("native_profiler");
        $__internal_4147a5a5d1c6df09e3d429abc6c866ba7025125653e2833695ddf8612e6eee93->enter($__internal_4147a5a5d1c6df09e3d429abc6c866ba7025125653e2833695ddf8612e6eee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 47
        echo "                    
                ";
        
        $__internal_4147a5a5d1c6df09e3d429abc6c866ba7025125653e2833695ddf8612e6eee93->leave($__internal_4147a5a5d1c6df09e3d429abc6c866ba7025125653e2833695ddf8612e6eee93_prof);

    }

    // line 49
    public function block_corps($context, array $blocks = array())
    {
        $__internal_fb419c042860e794b43ca478d0503a53df0ac413faf78a656eeee2335f934bd4 = $this->env->getExtension("native_profiler");
        $__internal_fb419c042860e794b43ca478d0503a53df0ac413faf78a656eeee2335f934bd4->enter($__internal_fb419c042860e794b43ca478d0503a53df0ac413faf78a656eeee2335f934bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 50
        echo "                    ";
        $this->displayBlock('menuHaut', $context, $blocks);
        // line 101
        echo "                    
                    ";
        // line 102
        $this->displayBlock('menuLeft', $context, $blocks);
        // line 104
        echo "            
                    ";
        // line 105
        $this->displayBlock('contenu', $context, $blocks);
        // line 108
        echo "
                ";
        
        $__internal_fb419c042860e794b43ca478d0503a53df0ac413faf78a656eeee2335f934bd4->leave($__internal_fb419c042860e794b43ca478d0503a53df0ac413faf78a656eeee2335f934bd4_prof);

    }

    // line 50
    public function block_menuHaut($context, array $blocks = array())
    {
        $__internal_ff232d9bef7c2183706535567a66252cca18895c1c4dc96ae9f5c6459af9eb35 = $this->env->getExtension("native_profiler");
        $__internal_ff232d9bef7c2183706535567a66252cca18895c1c4dc96ae9f5c6459af9eb35->enter($__internal_ff232d9bef7c2183706535567a66252cca18895c1c4dc96ae9f5c6459af9eb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHaut"));

        // line 51
        echo "                        <nav class=\"navbar navbar-fixed-top\" role=\"navigation\" style=\"background-color: #83b719; color: white\">
                            <div class=\"container-fluid\">
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    ";
        // line 60
        $this->displayBlock('titre', $context, $blocks);
        // line 63
        echo "                                </div>
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    ";
        // line 65
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 66
            echo "                                        <ul class=\"nav navbar-nav navbar-right\">
                                                <li style=\"background-color: #461900\"><a style=\"color: white\">Bienvenue ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</a></li>
                                        </ul>
                                    ";
        }
        // line 70
        echo "                                    <ul class=\"nav navbar-nav navbar-right barrehaut\">
                                        ";
        // line 71
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == "")) {
            // line 72
            echo "                                            <li class=\"icone_connexion\">
                                                <a href=\"\" style=\"color: white\"><span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\" ></span> Connexion</a>
                                            </li>
                                        ";
        } else {
            // line 76
            echo "                                            <li class=\"icone_connexion\">
                                                <a href=\"\" style=\"color: white\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil </a>
                                            </li>
                                        ";
        }
        // line 80
        echo "                                        <li>
                                            <a href=\"#\" style=\"color: white\"><span class=\"glyphicon glyphicon-blackboard\" aria-hidden=\"true\"></span> Viste guidée</a>
                                        </li>
                                        <li>
                                            <a href=\"#\" style=\"color: white\"><span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></span> Support technique</a>
                                        </li>
                                        <li>
                                            <a href=\"#\" style=\"color: white\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Contactez-nous</a>
                                        </li>
                                        ";
        // line 89
        $this->displayBlock('logout', $context, $blocks);
        // line 92
        echo "
                                    </ul>

                                </div>
                            </div>
                        </nav>
                        <br><br><br>

                    ";
        
        $__internal_ff232d9bef7c2183706535567a66252cca18895c1c4dc96ae9f5c6459af9eb35->leave($__internal_ff232d9bef7c2183706535567a66252cca18895c1c4dc96ae9f5c6459af9eb35_prof);

    }

    // line 60
    public function block_titre($context, array $blocks = array())
    {
        $__internal_f531cee78d22d502a9cb884bcc8c7cc150e5567c686e5e695113076fb8419784 = $this->env->getExtension("native_profiler");
        $__internal_f531cee78d22d502a9cb884bcc8c7cc150e5567c686e5e695113076fb8419784->enter($__internal_f531cee78d22d502a9cb884bcc8c7cc150e5567c686e5e695113076fb8419784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 61
        echo "                                        <span class=\"navbar-brand\" href=\"#\">Progestix, vous souhaite la bienvenue. </span>
                                    ";
        
        $__internal_f531cee78d22d502a9cb884bcc8c7cc150e5567c686e5e695113076fb8419784->leave($__internal_f531cee78d22d502a9cb884bcc8c7cc150e5567c686e5e695113076fb8419784_prof);

    }

    // line 89
    public function block_logout($context, array $blocks = array())
    {
        $__internal_11017a1ff93a60b5801df5b31176066d61842e9adc2ec842a184413e7d8987fe = $this->env->getExtension("native_profiler");
        $__internal_11017a1ff93a60b5801df5b31176066d61842e9adc2ec842a184413e7d8987fe->enter($__internal_11017a1ff93a60b5801df5b31176066d61842e9adc2ec842a184413e7d8987fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 90
        echo "
                                        ";
        
        $__internal_11017a1ff93a60b5801df5b31176066d61842e9adc2ec842a184413e7d8987fe->leave($__internal_11017a1ff93a60b5801df5b31176066d61842e9adc2ec842a184413e7d8987fe_prof);

    }

    // line 102
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_785b1ba36c2f28778b513caec87860077ebebce7329dc3593ac9af8a9084d6c6 = $this->env->getExtension("native_profiler");
        $__internal_785b1ba36c2f28778b513caec87860077ebebce7329dc3593ac9af8a9084d6c6->enter($__internal_785b1ba36c2f28778b513caec87860077ebebce7329dc3593ac9af8a9084d6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 103
        echo "
                    ";
        
        $__internal_785b1ba36c2f28778b513caec87860077ebebce7329dc3593ac9af8a9084d6c6->leave($__internal_785b1ba36c2f28778b513caec87860077ebebce7329dc3593ac9af8a9084d6c6_prof);

    }

    // line 105
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7428d02ac6e7e80baa3009a46d1ddd5bc87eed48e02414a0e9c18ea1cf91c37d = $this->env->getExtension("native_profiler");
        $__internal_7428d02ac6e7e80baa3009a46d1ddd5bc87eed48e02414a0e9c18ea1cf91c37d->enter($__internal_7428d02ac6e7e80baa3009a46d1ddd5bc87eed48e02414a0e9c18ea1cf91c37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 106
        echo "
                    ";
        
        $__internal_7428d02ac6e7e80baa3009a46d1ddd5bc87eed48e02414a0e9c18ea1cf91c37d->leave($__internal_7428d02ac6e7e80baa3009a46d1ddd5bc87eed48e02414a0e9c18ea1cf91c37d_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 106,  295 => 105,  287 => 103,  281 => 102,  273 => 90,  267 => 89,  259 => 61,  253 => 60,  238 => 92,  236 => 89,  225 => 80,  219 => 76,  213 => 72,  211 => 71,  208 => 70,  202 => 67,  199 => 66,  197 => 65,  193 => 63,  191 => 60,  180 => 51,  174 => 50,  166 => 108,  164 => 105,  161 => 104,  159 => 102,  156 => 101,  153 => 50,  147 => 49,  139 => 47,  133 => 46,  123 => 110,  120 => 49,  118 => 46,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  45 => 15,  29 => 1,);
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
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/bower_components/jquery/dist/jquery.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/bower_components/jquery/dist/jquery.dataTables.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/js/modernizr.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/js/accueil.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/js/membre.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/js/contrat.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/js/sms.js') }}"></script>*/
/*         */
/*         <script>*/
/*             $(document).ready(function(){*/
/*                         $('.dropdown-toggle').dropdown();*/
/*                         $('#mytable').DataTable();*/
/*                     });    */
/*         </script>*/
/* */
/*         <!-- Inclusion des fichiers de styles -->*/
/*         */
/*         <link rel="icon" href="asset('bundles/gestionstock/images/favicon.ico')" />*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/css/accueil.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/css/membre.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/bower_components/bootstrap/dist/css/jquery.dataTables.min.css') }}"/>*/
/*          <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~  asset('bundles/gestionstock/css/sb-admin-2.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/css/font-awesome.min.css') }}"/>*/
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
/*                         <nav class="navbar navbar-fixed-top" role="navigation" style="background-color: #83b719; color: white">*/
/*                             <div class="container-fluid">*/
/*                                 <div class="navbar-header">*/
/*                                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                                         <span class="sr-only">Toggle navigation</span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                         <span class="icon-bar"></span>*/
/*                                     </button>*/
/*                                     {% block titre %}*/
/*                                         <span class="navbar-brand" href="#">Progestix, vous souhaite la bienvenue. </span>*/
/*                                     {% endblock %}*/
/*                                 </div>*/
/*                                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                                     {% if app.user %}*/
/*                                         <ul class="nav navbar-nav navbar-right">*/
/*                                                 <li style="background-color: #461900"><a style="color: white">Bienvenue {{ app.user }}</a></li>*/
/*                                         </ul>*/
/*                                     {% endif %}*/
/*                                     <ul class="nav navbar-nav navbar-right barrehaut">*/
/*                                         {% if app.user == "" %}*/
/*                                             <li class="icone_connexion">*/
/*                                                 <a href="" style="color: white"><span class="glyphicon glyphicon-log-in" aria-hidden="true" ></span> Connexion</a>*/
/*                                             </li>*/
/*                                         {% else %}*/
/*                                             <li class="icone_connexion">*/
/*                                                 <a href="" style="color: white"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil </a>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/*                                         <li>*/
/*                                             <a href="#" style="color: white"><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Viste guidée</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#" style="color: white"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Support technique</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#" style="color: white"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contactez-nous</a>*/
/*                                         </li>*/
/*                                         {% block logout %}*/
/* */
/*                                         {% endblock %}*/
/* */
/*                                     </ul>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </nav>*/
/*                         <br><br><br>*/
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

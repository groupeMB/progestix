<?php

/* GestionInventaireBundle::templateInventaire.html.twig */
class __TwigTemplate_08f0e682fe5af96abc3a1a11b289c566d41e17fe621c299890619e055621d8de extends Twig_Template
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
            'menuLeft' => array($this, 'block_menuLeft'),
            'contenu' => array($this, 'block_contenu'),
            'tableInventaire' => array($this, 'block_tableInventaire'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5e8319c844c461cdac63dce32fedbd54624d2d258c36fa08d8e452c43ae4f6c = $this->env->getExtension("native_profiler");
        $__internal_f5e8319c844c461cdac63dce32fedbd54624d2d258c36fa08d8e452c43ae4f6c->enter($__internal_f5e8319c844c461cdac63dce32fedbd54624d2d258c36fa08d8e452c43ae4f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle::templateInventaire.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Inventaire</title>
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
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/inventaire.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/accueil.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 36
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/membre.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 37
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/bower_components/bootstrap/dist/css/bootstrap.min.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 38
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/bower_components/bootstrap/dist/css/jquery.dataTables.min.css")), "html", null, true);
        echo "\"/>
         <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 39
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/sb-admin-2.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 40
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/gestionstock/css/font-awesome.min.css")), "html", null, true);
        echo "\"/>
    </head>
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\" >
        <div >
            <!-- bloc conteneur de la page  -->
                  
            <div id=\"container\" class=\"container container-fluid\">
                ";
        // line 47
        $this->displayBlock('entete', $context, $blocks);
        // line 50
        echo "                ";
        $this->displayBlock('corps', $context, $blocks);
        // line 81
        echo "        </div>

    </body>

</html>";
        
        $__internal_f5e8319c844c461cdac63dce32fedbd54624d2d258c36fa08d8e452c43ae4f6c->leave($__internal_f5e8319c844c461cdac63dce32fedbd54624d2d258c36fa08d8e452c43ae4f6c_prof);

    }

    // line 47
    public function block_entete($context, array $blocks = array())
    {
        $__internal_2335c4f8fc3848997be12937ad02b08c890a2dd5989b9d6e3f016ca2c0a5fd4c = $this->env->getExtension("native_profiler");
        $__internal_2335c4f8fc3848997be12937ad02b08c890a2dd5989b9d6e3f016ca2c0a5fd4c->enter($__internal_2335c4f8fc3848997be12937ad02b08c890a2dd5989b9d6e3f016ca2c0a5fd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 48
        echo "                    
                ";
        
        $__internal_2335c4f8fc3848997be12937ad02b08c890a2dd5989b9d6e3f016ca2c0a5fd4c->leave($__internal_2335c4f8fc3848997be12937ad02b08c890a2dd5989b9d6e3f016ca2c0a5fd4c_prof);

    }

    // line 50
    public function block_corps($context, array $blocks = array())
    {
        $__internal_6132750947300e431bfe43d3c556ec2198f96fd7d3c8e1e5d9454878426f9e4f = $this->env->getExtension("native_profiler");
        $__internal_6132750947300e431bfe43d3c556ec2198f96fd7d3c8e1e5d9454878426f9e4f->enter($__internal_6132750947300e431bfe43d3c556ec2198f96fd7d3c8e1e5d9454878426f9e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 51
        echo "                    ";
        $this->displayBlock('menuHaut', $context, $blocks);
        // line 70
        echo "                    
                    ";
        // line 71
        $this->displayBlock('menuLeft', $context, $blocks);
        // line 73
        echo "            
                    ";
        // line 74
        $this->displayBlock('contenu', $context, $blocks);
        // line 79
        echo "
                ";
        
        $__internal_6132750947300e431bfe43d3c556ec2198f96fd7d3c8e1e5d9454878426f9e4f->leave($__internal_6132750947300e431bfe43d3c556ec2198f96fd7d3c8e1e5d9454878426f9e4f_prof);

    }

    // line 51
    public function block_menuHaut($context, array $blocks = array())
    {
        $__internal_ca8603052b4072b7610fe6d125a915350a559018a5fb9190b5d4968e8f633e38 = $this->env->getExtension("native_profiler");
        $__internal_ca8603052b4072b7610fe6d125a915350a559018a5fb9190b5d4968e8f633e38->enter($__internal_ca8603052b4072b7610fe6d125a915350a559018a5fb9190b5d4968e8f633e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHaut"));

        // line 52
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
        // line 61
        $this->displayBlock('titre', $context, $blocks);
        // line 64
        echo "                                </div>
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\"></div>
                            </div>
                        </nav>
                        <br><br><br>
                    ";
        
        $__internal_ca8603052b4072b7610fe6d125a915350a559018a5fb9190b5d4968e8f633e38->leave($__internal_ca8603052b4072b7610fe6d125a915350a559018a5fb9190b5d4968e8f633e38_prof);

    }

    // line 61
    public function block_titre($context, array $blocks = array())
    {
        $__internal_933dc3c71da8027f71541189839253f195b16015efa2f5474530df6672429a4a = $this->env->getExtension("native_profiler");
        $__internal_933dc3c71da8027f71541189839253f195b16015efa2f5474530df6672429a4a->enter($__internal_933dc3c71da8027f71541189839253f195b16015efa2f5474530df6672429a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 62
        echo "                                        <span class=\"navbar-brand\" href=\"#\">Progestix, vous souhaite la bienvenue. </span>
                                    ";
        
        $__internal_933dc3c71da8027f71541189839253f195b16015efa2f5474530df6672429a4a->leave($__internal_933dc3c71da8027f71541189839253f195b16015efa2f5474530df6672429a4a_prof);

    }

    // line 71
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_a024e8b68efa67e6157ceaf874a82f11fe0b6b9521ef638bbeb7483b0c107357 = $this->env->getExtension("native_profiler");
        $__internal_a024e8b68efa67e6157ceaf874a82f11fe0b6b9521ef638bbeb7483b0c107357->enter($__internal_a024e8b68efa67e6157ceaf874a82f11fe0b6b9521ef638bbeb7483b0c107357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 72
        echo "
                    ";
        
        $__internal_a024e8b68efa67e6157ceaf874a82f11fe0b6b9521ef638bbeb7483b0c107357->leave($__internal_a024e8b68efa67e6157ceaf874a82f11fe0b6b9521ef638bbeb7483b0c107357_prof);

    }

    // line 74
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4793a549d1ae2bfbee71182be97ea8b2a47c8a0d65f39efbfba23c161e091d48 = $this->env->getExtension("native_profiler");
        $__internal_4793a549d1ae2bfbee71182be97ea8b2a47c8a0d65f39efbfba23c161e091d48->enter($__internal_4793a549d1ae2bfbee71182be97ea8b2a47c8a0d65f39efbfba23c161e091d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 75
        echo "                        ";
        $this->displayBlock('tableInventaire', $context, $blocks);
        // line 78
        echo "                    ";
        
        $__internal_4793a549d1ae2bfbee71182be97ea8b2a47c8a0d65f39efbfba23c161e091d48->leave($__internal_4793a549d1ae2bfbee71182be97ea8b2a47c8a0d65f39efbfba23c161e091d48_prof);

    }

    // line 75
    public function block_tableInventaire($context, array $blocks = array())
    {
        $__internal_c16fab2d08a1e32dc76c3b342694b3ef113eb642f710a833a0df56d0657a4e8c = $this->env->getExtension("native_profiler");
        $__internal_c16fab2d08a1e32dc76c3b342694b3ef113eb642f710a833a0df56d0657a4e8c->enter($__internal_c16fab2d08a1e32dc76c3b342694b3ef113eb642f710a833a0df56d0657a4e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tableInventaire"));

        // line 76
        echo "
                        ";
        
        $__internal_c16fab2d08a1e32dc76c3b342694b3ef113eb642f710a833a0df56d0657a4e8c->leave($__internal_c16fab2d08a1e32dc76c3b342694b3ef113eb642f710a833a0df56d0657a4e8c_prof);

    }

    public function getTemplateName()
    {
        return "GestionInventaireBundle::templateInventaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 76,  254 => 75,  247 => 78,  244 => 75,  238 => 74,  230 => 72,  224 => 71,  216 => 62,  210 => 61,  198 => 64,  196 => 61,  185 => 52,  179 => 51,  171 => 79,  169 => 74,  166 => 73,  164 => 71,  161 => 70,  158 => 51,  152 => 50,  144 => 48,  138 => 47,  127 => 81,  124 => 50,  122 => 47,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  45 => 15,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Inventaire</title>*/
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
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/gestionstock/css/inventaire.css') }}"/>*/
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
/*                                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div>*/
/*                             </div>*/
/*                         </nav>*/
/*                         <br><br><br>*/
/*                     {% endblock %}*/
/*                     */
/*                     {% block menuLeft %}*/
/* */
/*                     {% endblock %}            */
/*                     {% block contenu %}*/
/*                         {% block tableInventaire %}*/
/* */
/*                         {% endblock %}*/
/*                     {% endblock %}*/
/* */
/*                 {% endblock %}*/
/*         </div>*/
/* */
/*     </body>*/
/* */
/* </html>*/

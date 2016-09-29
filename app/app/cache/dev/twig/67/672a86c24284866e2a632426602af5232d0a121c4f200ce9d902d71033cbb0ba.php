<?php

/* @PharmaciePharmacien/template.html.twig */
class __TwigTemplate_a7f9e6d4348f33de5cbadbd7203c0841df9fd061d986f379bcc046e144ad5af9 extends Twig_Template
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
        $__internal_8ffb54ca76cba31c0632ef3d034e822332478cc6da74939090682fb55552777a = $this->env->getExtension("native_profiler");
        $__internal_8ffb54ca76cba31c0632ef3d034e822332478cc6da74939090682fb55552777a->enter($__internal_8ffb54ca76cba31c0632ef3d034e822332478cc6da74939090682fb55552777a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PharmaciePharmacien/template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>PharmaGes</title>
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
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/jquery/dist/jquery.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 16
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/jquery/dist/jquery.dataTables.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 18
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/modernizr.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/accueil.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 20
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/membre.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 21
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/contrat.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\" ";
        // line 22
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/js/sms.js")), "html", null, true);
        echo "\"></script>
        <script>
            \$(function() {
                    \$('a[data-confirm]').click(function(ev) {
                    var href = \$(this).attr('href');
                    if (!\$('#dataConfirmModal').length) {
                        \$('body').append('<div id=\"dataConfirmModal\" class=\"modal\" role=\"dialog\" aria-labelledby=\"dataConfirmLabel\" aria-hidden=\"true\"><div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button><h3 id=\"dataConfirmLabel\" style=\"text-align: center; color: white; background-color: #83b719; padding: 5px\">Confirmation de l\\'opération en cours</h3></div><div class=\"modal-body\"></div><div class=\"modal-footer\"><button class=\"btn btn-danger\" data-dismiss=\"modal\" aria-hidden=\"true\">Non</button><a class=\"btn btn-success\" id=\"dataConfirmOK\">Oui</a></div></div></div></div>');
                    }
                    \$('#dataConfirmModal').find('.modal-body').text(\$(this).attr('data-confirm'));
                    \$('#dataConfirmOK').attr('href', href);
                    \$('#dataConfirmModal').modal({show:true});
                     return false;
                });
            });
        </script>


        <!-- Inclusion des fichiers de styles -->
        
        <link rel=\"icon\" href=\"asset('bundles/pharmaciepharmacien/images/favicon.ico')\" />
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 42
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/css/accueil.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 43
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/css/membre.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 44
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/bootstrap/dist/css/bootstrap.min.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 45
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/bower_components/bootstrap/dist/css/jquery.dataTables.min.css")), "html", null, true);
        echo "\"/>
         <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 46
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/css/sb-admin-2.css")), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 47
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/css/font-awesome.min.css")), "html", null, true);
        echo "\"/>
        
    </head>
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\">
        <div >
            <!-- bloc conteneur de la page  -->
            <div id=\"container\" class=\"container container-fluid\">
                ";
        // line 54
        $this->displayBlock('entete', $context, $blocks);
        // line 86
        echo "                ";
        $this->displayBlock('corps', $context, $blocks);
        // line 145
        echo "        </div>            
    </body>

</html>";
        
        $__internal_8ffb54ca76cba31c0632ef3d034e822332478cc6da74939090682fb55552777a->leave($__internal_8ffb54ca76cba31c0632ef3d034e822332478cc6da74939090682fb55552777a_prof);

    }

    // line 54
    public function block_entete($context, array $blocks = array())
    {
        $__internal_51870016da6112b636b7880ab01a87a1174d50611baf1461d50a80c6637de4a1 = $this->env->getExtension("native_profiler");
        $__internal_51870016da6112b636b7880ab01a87a1174d50611baf1461d50a80c6637de4a1->enter($__internal_51870016da6112b636b7880ab01a87a1174d50611baf1461d50a80c6637de4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 55
        echo "                    <div class=\"row\" style=\"margin-top: 15px\">
                        <div class=\"col-sm-6 col-md-3\" id=\"portofolioPresentation\">
                            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/images/pharmages.png")), "html", null, true);
        echo "\" width=\"100%\">
                        </div>
                        <div class=\"col-sm-3 col-md-3\" id=\"portofolioPresentation\">
                            <div class=\"panel panel-success\">
                                <div class=\"panel-heading\"><center><em>Recette du jour</em></center></div>
                                <div class=\"panel-body\">
                                    <center><em>250.000 FCFA</em></center>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-md-3\" id=\"portofolioPresentation\">
                            <div class=\"panel panel-success\">
                                <div class=\"panel-heading\"><center><em>Nombre produits vendus</em></center></div>
                                <div class=\"panel-body\">
                                    <center><em>600</em></center>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-md-3\" id=\"portofolioPresentation\">
                            <div class=\"panel panel-success\">
                                <div class=\"panel-heading\"><center><em>Fonds de roulement</em></center></div>
                                <div class=\"panel-body\">
                                    <center><em>60.000 FCFA</em></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                ";
        
        $__internal_51870016da6112b636b7880ab01a87a1174d50611baf1461d50a80c6637de4a1->leave($__internal_51870016da6112b636b7880ab01a87a1174d50611baf1461d50a80c6637de4a1_prof);

    }

    // line 86
    public function block_corps($context, array $blocks = array())
    {
        $__internal_ef9dbf0f6cc705654d8962a3cca8085c32107af531c616378611b8eb1bde75db = $this->env->getExtension("native_profiler");
        $__internal_ef9dbf0f6cc705654d8962a3cca8085c32107af531c616378611b8eb1bde75db->enter($__internal_ef9dbf0f6cc705654d8962a3cca8085c32107af531c616378611b8eb1bde75db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 87
        echo "                    ";
        $this->displayBlock('menuHaut', $context, $blocks);
        // line 134
        echo "                <div style=\"width: 100%;\">
                    
                    ";
        // line 136
        $this->displayBlock('menuLeft', $context, $blocks);
        // line 138
        echo "            
                    ";
        // line 139
        $this->displayBlock('contenu', $context, $blocks);
        // line 142
        echo "
                </div>
                ";
        
        $__internal_ef9dbf0f6cc705654d8962a3cca8085c32107af531c616378611b8eb1bde75db->leave($__internal_ef9dbf0f6cc705654d8962a3cca8085c32107af531c616378611b8eb1bde75db_prof);

    }

    // line 87
    public function block_menuHaut($context, array $blocks = array())
    {
        $__internal_2a5b9d2ba4754c0dca459754335407d050d718d467baf21d9395d7bda51a6a46 = $this->env->getExtension("native_profiler");
        $__internal_2a5b9d2ba4754c0dca459754335407d050d718d467baf21d9395d7bda51a6a46->enter($__internal_2a5b9d2ba4754c0dca459754335407d050d718d467baf21d9395d7bda51a6a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHaut"));

        // line 88
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
        // line 97
        $this->displayBlock('titre', $context, $blocks);
        // line 100
        echo "                                </div>
                                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                                    ";
        // line 102
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 103
            echo "                                        <ul class=\"nav navbar-nav navbar-right\">
                                                <li style=\"background-color: #461900\"><a style=\"color: white\">Bienvenue Pharmacien</a></li>
                                        </ul>
                                    ";
        }
        // line 107
        echo "                                    <ul class=\"nav navbar-nav navbar-right barrehaut\">
                                        ";
        // line 108
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == "")) {
            // line 109
            echo "                                            <li class=\"icone_connexion\">
                                                <a href=\"\"><span class=\"glyphicon glyphicon-login\" aria-hidden=\"true\"></span> Connexion</a>
                                            </li>
                                        ";
        } else {
            // line 113
            echo "                                            <li class=\"icone_connexion\">
                                                <a href=\"\"><span class=\"glyphicon glyphicon-home\" aria-hidden=\"true\"></span> Accueil </a>
                                            </li>
                                        ";
        }
        // line 117
        echo "                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-earphone\" aria-hidden=\"true\"></span> Support technique</a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><span class=\"glyphicon glyphicon-envelope\" aria-hidden=\"true\"></span> Contactez-nous</a>
                                        </li>
                                        ";
        // line 123
        $this->displayBlock('logout', $context, $blocks);
        // line 126
        echo "
                                    </ul>
                                </div>
                            </div>
                        </nav>  
                </div>

                    ";
        
        $__internal_2a5b9d2ba4754c0dca459754335407d050d718d467baf21d9395d7bda51a6a46->leave($__internal_2a5b9d2ba4754c0dca459754335407d050d718d467baf21d9395d7bda51a6a46_prof);

    }

    // line 97
    public function block_titre($context, array $blocks = array())
    {
        $__internal_3043c28812d819476d6fa1d1f8b7755c6c12ac1ea86679ae6b32b1f77aec80ae = $this->env->getExtension("native_profiler");
        $__internal_3043c28812d819476d6fa1d1f8b7755c6c12ac1ea86679ae6b32b1f77aec80ae->enter($__internal_3043c28812d819476d6fa1d1f8b7755c6c12ac1ea86679ae6b32b1f77aec80ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 98
        echo "                                        <span class=\"navbar-brand\" href=\"#\">Votre gestionnaire de pharmacie sécurisé</span>
                                    ";
        
        $__internal_3043c28812d819476d6fa1d1f8b7755c6c12ac1ea86679ae6b32b1f77aec80ae->leave($__internal_3043c28812d819476d6fa1d1f8b7755c6c12ac1ea86679ae6b32b1f77aec80ae_prof);

    }

    // line 123
    public function block_logout($context, array $blocks = array())
    {
        $__internal_894e8f1e2cb1e67e595298d2fa14945357f3a7901c482e29828d9673b3c4ade5 = $this->env->getExtension("native_profiler");
        $__internal_894e8f1e2cb1e67e595298d2fa14945357f3a7901c482e29828d9673b3c4ade5->enter($__internal_894e8f1e2cb1e67e595298d2fa14945357f3a7901c482e29828d9673b3c4ade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 124
        echo "
                                        ";
        
        $__internal_894e8f1e2cb1e67e595298d2fa14945357f3a7901c482e29828d9673b3c4ade5->leave($__internal_894e8f1e2cb1e67e595298d2fa14945357f3a7901c482e29828d9673b3c4ade5_prof);

    }

    // line 136
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_53ca54e64a74161a3c319a764619c3c7c468d958825d90977916ced4f9db0f0b = $this->env->getExtension("native_profiler");
        $__internal_53ca54e64a74161a3c319a764619c3c7c468d958825d90977916ced4f9db0f0b->enter($__internal_53ca54e64a74161a3c319a764619c3c7c468d958825d90977916ced4f9db0f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 137
        echo "
                    ";
        
        $__internal_53ca54e64a74161a3c319a764619c3c7c468d958825d90977916ced4f9db0f0b->leave($__internal_53ca54e64a74161a3c319a764619c3c7c468d958825d90977916ced4f9db0f0b_prof);

    }

    // line 139
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8b210b9f7f1f5dd0d1e6e60e6b1d1352a338bc9dbaa5d7e25df7e65af10423a7 = $this->env->getExtension("native_profiler");
        $__internal_8b210b9f7f1f5dd0d1e6e60e6b1d1352a338bc9dbaa5d7e25df7e65af10423a7->enter($__internal_8b210b9f7f1f5dd0d1e6e60e6b1d1352a338bc9dbaa5d7e25df7e65af10423a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 140
        echo "
                    ";
        
        $__internal_8b210b9f7f1f5dd0d1e6e60e6b1d1352a338bc9dbaa5d7e25df7e65af10423a7->leave($__internal_8b210b9f7f1f5dd0d1e6e60e6b1d1352a338bc9dbaa5d7e25df7e65af10423a7_prof);

    }

    public function getTemplateName()
    {
        return "@PharmaciePharmacien/template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 140,  330 => 139,  322 => 137,  316 => 136,  308 => 124,  302 => 123,  294 => 98,  288 => 97,  274 => 126,  272 => 123,  264 => 117,  258 => 113,  252 => 109,  250 => 108,  247 => 107,  241 => 103,  239 => 102,  235 => 100,  233 => 97,  222 => 88,  216 => 87,  207 => 142,  205 => 139,  202 => 138,  200 => 136,  196 => 134,  193 => 87,  187 => 86,  151 => 57,  147 => 55,  141 => 54,  131 => 145,  128 => 86,  126 => 54,  116 => 47,  112 => 46,  108 => 45,  104 => 44,  100 => 43,  96 => 42,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  45 => 15,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>PharmaGes</title>*/
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
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/jquery/dist/jquery.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/jquery/dist/jquery.dataTables.min.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/modernizr.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/accueil.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/membre.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/contrat.js') }}"></script>*/
/*         <script type="text/javascript" src=" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/js/sms.js') }}"></script>*/
/*         <script>*/
/*             $(function() {*/
/*                     $('a[data-confirm]').click(function(ev) {*/
/*                     var href = $(this).attr('href');*/
/*                     if (!$('#dataConfirmModal').length) {*/
/*                         $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel" style="text-align: center; color: white; background-color: #83b719; padding: 5px">Confirmation de l\'opération en cours</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Non</button><a class="btn btn-success" id="dataConfirmOK">Oui</a></div></div></div></div>');*/
/*                     }*/
/*                     $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));*/
/*                     $('#dataConfirmOK').attr('href', href);*/
/*                     $('#dataConfirmModal').modal({show:true});*/
/*                      return false;*/
/*                 });*/
/*             });*/
/*         </script>*/
/* */
/* */
/*         <!-- Inclusion des fichiers de styles -->*/
/*         */
/*         <link rel="icon" href="asset('bundles/pharmaciepharmacien/images/favicon.ico')" />*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/css/accueil.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/css/membre.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/bootstrap/dist/css/bootstrap.min.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/bower_components/bootstrap/dist/css/jquery.dataTables.min.css') }}"/>*/
/*          <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~  asset('bundles/pharmaciepharmacien/css/sb-admin-2.css') }}"/>*/
/*         <link rel="stylesheet" type="text/css" href = "{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/css/font-awesome.min.css') }}"/>*/
/*         */
/*     </head>*/
/*     <body id="coprsTemplate" onload="date_heure('heure');">*/
/*         <div >*/
/*             <!-- bloc conteneur de la page  -->*/
/*             <div id="container" class="container container-fluid">*/
/*                 {% block entete%}*/
/*                     <div class="row" style="margin-top: 15px">*/
/*                         <div class="col-sm-6 col-md-3" id="portofolioPresentation">*/
/*                             <img src="{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/images/pharmages.png') }}" width="100%">*/
/*                         </div>*/
/*                         <div class="col-sm-3 col-md-3" id="portofolioPresentation">*/
/*                             <div class="panel panel-success">*/
/*                                 <div class="panel-heading"><center><em>Recette du jour</em></center></div>*/
/*                                 <div class="panel-body">*/
/*                                     <center><em>250.000 FCFA</em></center>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-3 col-md-3" id="portofolioPresentation">*/
/*                             <div class="panel panel-success">*/
/*                                 <div class="panel-heading"><center><em>Nombre produits vendus</em></center></div>*/
/*                                 <div class="panel-body">*/
/*                                     <center><em>600</em></center>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-sm-3 col-md-3" id="portofolioPresentation">*/
/*                             <div class="panel panel-success">*/
/*                                 <div class="panel-heading"><center><em>Fonds de roulement</em></center></div>*/
/*                                 <div class="panel-body">*/
/*                                     <center><em>60.000 FCFA</em></center>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
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
/*                                         <span class="navbar-brand" href="#">Votre gestionnaire de pharmacie sécurisé</span>*/
/*                                     {% endblock %}*/
/*                                 </div>*/
/*                                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                                     {% if app.user %}*/
/*                                         <ul class="nav navbar-nav navbar-right">*/
/*                                                 <li style="background-color: #461900"><a style="color: white">Bienvenue Pharmacien</a></li>*/
/*                                         </ul>*/
/*                                     {% endif %}*/
/*                                     <ul class="nav navbar-nav navbar-right barrehaut">*/
/*                                         {% if app.user == "" %}*/
/*                                             <li class="icone_connexion">*/
/*                                                 <a href=""><span class="glyphicon glyphicon-login" aria-hidden="true"></span> Connexion</a>*/
/*                                             </li>*/
/*                                         {% else %}*/
/*                                             <li class="icone_connexion">*/
/*                                                 <a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Accueil </a>*/
/*                                             </li>*/
/*                                         {% endif %}*/
/*                                         <li>*/
/*                                             <a href="#"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Support technique</a>*/
/*                                         </li>*/
/*                                         <li>*/
/*                                             <a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contactez-nous</a>*/
/*                                         </li>*/
/*                                         {% block logout %}*/
/* */
/*                                         {% endblock %}*/
/* */
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </nav>  */
/*                 </div>*/
/* */
/*                     {% endblock %}*/
/*                 <div style="width: 100%;">*/
/*                     */
/*                     {% block menuLeft %}*/
/* */
/*                     {% endblock %}            */
/*                     {% block contenu %}*/
/* */
/*                     {% endblock %}*/
/* */
/*                 </div>*/
/*                 {% endblock %}*/
/*         </div>            */
/*     </body>*/
/* */
/* </html>*/

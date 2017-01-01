<?php

/* PharmacieAccueilBundle:Template:template.html.twig */
class __TwigTemplate_88d262a1bcd016962fa72eb039fd5122d967c3109e5148a1910e50168a87b460 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'corps' => array($this, 'block_corps'),
            'menuHaut' => array($this, 'block_menuHaut'),
            'titre' => array($this, 'block_titre'),
            'entete' => array($this, 'block_entete'),
            'logout' => array($this, 'block_logout'),
            'menuLeft' => array($this, 'block_menuLeft'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c53d76e2f9fae776e395fea098c2363645564dd7ec335b60035dd49c7e9bd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c53d76e2f9fae776e395fea098c2363645564dd7ec335b60035dd49c7e9bd9c->enter($__internal_2c53d76e2f9fae776e395fea098c2363645564dd7ec335b60035dd49c7e9bd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieAccueilBundle:Template:template.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Progestix</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <!-- Encodage en utf-8, en HTML 5 -->
        <meta charset=\"utf-8\" />

        <!-- Inclusion des fichiers de styles -->
       
          <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 11
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/bower_components/responsive-tables/responsive-tables.css")), "html", null, true);
        echo "\"/>

        <!-- <link rel=\"icon\" href=\"asset('bundles/pharmacieaccueil/images/favicon.ico')\" /> -->
        
        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/css/style.css")), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 17
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/bower_components/bootstrap/dist/css/bootstrap.min.css")), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href = \"";
        // line 19
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/bower_components/datatables/media/css/jquery.dataTables.css")), "html", null, true);
        echo "\"/>
         

    
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\">
        <div >
            <!-- bloc conteneur de la page  -->
            <div id=\"container \" class=\"container container-fluid\">
                ";
        // line 27
        $this->displayBlock('corps', $context, $blocks);
        // line 85
        echo "        </div>            
    </body>
    <script type=\"text/javascript\" src=\" ";
        // line 87
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/bower_components/jquery/jquery.min.js")), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/bower_components/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
    
    <script type=\"text/javascript\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/bower_components/datatables/media/js/jquery.dataTables.js")), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme JavaScript -->
    <script type=\"text/javascript\" src=\" ";
        // line 94
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/js/style.js")), "html", null, true);
        echo "\"></script>
     <script>
            \$(document).ready(function(){
                \$('.dropdown-toggle').dropdown();
                \$('#mytable').DataTable();

                var pathname = window.location.pathname.split(\"/\");
           

                if( pathname[pathname.length-2]==\"stock\" && pathname[pathname.length-1]==\"ajouter\"){
                    ajouter_keyword();
                    
                    ajouter_champ_produit();
                }
                else if( pathname[pathname.length-2]==\"produit\" && pathname[pathname.length-1]==\"ajouter\"){
                    //ajouter_champ_produit();
                    \$(\"#libelle\").select2({
                        placeholder: \"nom du produit\",
                        allowClear: true
                    });
                }

                    
            });    
        </script>
    <script>
        \$(document).ready(function(){
                    \$('.dropdown-toggle').dropdown();
                    \$('#mytable').DataTable();
                });    
    </script>
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

       

                         <!-- Pour les graphes et les statistiques -->

        <script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/js/highcharts.js"), "html", null, true);
        echo "\">
        </script>

        <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/js/exporting.js"), "html", null, true);
        echo "\">
        </script> 
                         <!-- FIN graphes et les statistiques -->

                         
        <!-- Pour assurer la responsivite -->
         <script>
            \$(document).ready(function(){
                \$('.collapse').collapse();
            });
         </script>
</html>";
        
        $__internal_2c53d76e2f9fae776e395fea098c2363645564dd7ec335b60035dd49c7e9bd9c->leave($__internal_2c53d76e2f9fae776e395fea098c2363645564dd7ec335b60035dd49c7e9bd9c_prof);

    }

    // line 27
    public function block_corps($context, array $blocks = array())
    {
        $__internal_0ebf15679cd2917a620a7c560165990d7622c6d57ffa1dead138ac6f623b70f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebf15679cd2917a620a7c560165990d7622c6d57ffa1dead138ac6f623b70f7->enter($__internal_0ebf15679cd2917a620a7c560165990d7622c6d57ffa1dead138ac6f623b70f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corps"));

        // line 28
        echo "                    ";
        $this->displayBlock('menuHaut', $context, $blocks);
        // line 68
        echo "                    
                </div>

                <div style=\"margin-top: 50px;\">
                    
                    ";
        // line 73
        $this->displayBlock('menuLeft', $context, $blocks);
        // line 75
        echo "            
                
                    ";
        // line 77
        $this->displayBlock('contenu', $context, $blocks);
        // line 80
        echo "                    <footer class=\"navbar-fixed-bottom\" style=\"background-color: #ed7d31\">
                        <h5 class=\"muted credit right\" style=\"color: white\"><center>Progestix, votre gestionnaire de pharmacie sécurisée. Copyright &copy; 2017</center></h5>
                    </footer>
                </div>
            ";
        
        $__internal_0ebf15679cd2917a620a7c560165990d7622c6d57ffa1dead138ac6f623b70f7->leave($__internal_0ebf15679cd2917a620a7c560165990d7622c6d57ffa1dead138ac6f623b70f7_prof);

    }

    // line 28
    public function block_menuHaut($context, array $blocks = array())
    {
        $__internal_90add5cbe5342db5b0884c0eeb360da6adf1bf8752e4f932bae0df63b59711a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90add5cbe5342db5b0884c0eeb360da6adf1bf8752e4f932bae0df63b59711a7->enter($__internal_90add5cbe5342db5b0884c0eeb360da6adf1bf8752e4f932bae0df63b59711a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuHaut"));

        // line 29
        echo "                       <nav class=\"navbar navbar-fixed-top\" style=\"background-color: #5cb85c\" role=\"navigation\">  <!-- #006400 -->
                            ";
        // line 30
        $this->displayBlock('titre', $context, $blocks);
        // line 33
        echo "                            <div class=\"container\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    <a class=\"navbar-brand\" href=\"#\">
                                        ";
        // line 43
        $this->displayBlock('entete', $context, $blocks);
        // line 44
        echo "                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav navbar-right menu-haut\">
                                        <li>
                                            <a  style=\"color: white\" href=\"#\"><span class=\"glyphicon glyphicon-home\"></span> Accueil</a>
                                        </li>
                                        <li>
                                            <a  style=\"color: white\" href=\"#\"><span class=\"glyphicon glyphicon-wrench\"></span> Administration</a>
                                        </li>
                                        <li>
                                            <a  style=\"color: white\" href=\"#\"><span class=\"glyphicon glyphicon-globe\"></span> Site web</a>
                                        </li>
                                        ";
        // line 58
        $this->displayBlock('logout', $context, $blocks);
        // line 61
        echo "                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>    
                    ";
        
        $__internal_90add5cbe5342db5b0884c0eeb360da6adf1bf8752e4f932bae0df63b59711a7->leave($__internal_90add5cbe5342db5b0884c0eeb360da6adf1bf8752e4f932bae0df63b59711a7_prof);

    }

    // line 30
    public function block_titre($context, array $blocks = array())
    {
        $__internal_d689ff93bf4660d8ae8e71f8cb351cc0616041392fe1f37f7027f333685b58e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d689ff93bf4660d8ae8e71f8cb351cc0616041392fe1f37f7027f333685b58e1->enter($__internal_d689ff93bf4660d8ae8e71f8cb351cc0616041392fe1f37f7027f333685b58e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 31
        echo "
                            ";
        
        $__internal_d689ff93bf4660d8ae8e71f8cb351cc0616041392fe1f37f7027f333685b58e1->leave($__internal_d689ff93bf4660d8ae8e71f8cb351cc0616041392fe1f37f7027f333685b58e1_prof);

    }

    // line 43
    public function block_entete($context, array $blocks = array())
    {
        $__internal_2cf0ddec41cc4c3035fde554178bec127767a3b3e5b1769ac86755915abe8679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf0ddec41cc4c3035fde554178bec127767a3b3e5b1769ac86755915abe8679->enter($__internal_2cf0ddec41cc4c3035fde554178bec127767a3b3e5b1769ac86755915abe8679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        echo "<img src=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/images/new_logo.jpg")), "html", null, true);
        echo "\" id=\"logo\">";
        
        $__internal_2cf0ddec41cc4c3035fde554178bec127767a3b3e5b1769ac86755915abe8679->leave($__internal_2cf0ddec41cc4c3035fde554178bec127767a3b3e5b1769ac86755915abe8679_prof);

    }

    // line 58
    public function block_logout($context, array $blocks = array())
    {
        $__internal_6e2ef93bb252b2097e43e2301a4c9b552269686e4d213cd8488f705f9ffd385f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2ef93bb252b2097e43e2301a4c9b552269686e4d213cd8488f705f9ffd385f->enter($__internal_6e2ef93bb252b2097e43e2301a4c9b552269686e4d213cd8488f705f9ffd385f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 59
        echo "                                
                                        ";
        
        $__internal_6e2ef93bb252b2097e43e2301a4c9b552269686e4d213cd8488f705f9ffd385f->leave($__internal_6e2ef93bb252b2097e43e2301a4c9b552269686e4d213cd8488f705f9ffd385f_prof);

    }

    // line 73
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_c7987593fa41f982968e416b68c6aeb0155994a47f0a65d75b4603de81f9a795 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7987593fa41f982968e416b68c6aeb0155994a47f0a65d75b4603de81f9a795->enter($__internal_c7987593fa41f982968e416b68c6aeb0155994a47f0a65d75b4603de81f9a795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 74
        echo "
                    ";
        
        $__internal_c7987593fa41f982968e416b68c6aeb0155994a47f0a65d75b4603de81f9a795->leave($__internal_c7987593fa41f982968e416b68c6aeb0155994a47f0a65d75b4603de81f9a795_prof);

    }

    // line 77
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_004f2d38776dbcc0472c9c9c7df9e3b3402fb2459f5d137843292e2f72a2647d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004f2d38776dbcc0472c9c9c7df9e3b3402fb2459f5d137843292e2f72a2647d->enter($__internal_004f2d38776dbcc0472c9c9c7df9e3b3402fb2459f5d137843292e2f72a2647d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 78
        echo "
                    ";
        
        $__internal_004f2d38776dbcc0472c9c9c7df9e3b3402fb2459f5d137843292e2f72a2647d->leave($__internal_004f2d38776dbcc0472c9c9c7df9e3b3402fb2459f5d137843292e2f72a2647d_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieAccueilBundle:Template:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 78,  316 => 77,  308 => 74,  302 => 73,  294 => 59,  288 => 58,  274 => 43,  266 => 31,  260 => 30,  247 => 61,  245 => 58,  229 => 44,  227 => 43,  215 => 33,  213 => 30,  210 => 29,  204 => 28,  193 => 80,  191 => 77,  187 => 75,  185 => 73,  178 => 68,  175 => 28,  169 => 27,  150 => 147,  144 => 144,  91 => 94,  85 => 91,  80 => 89,  75 => 87,  71 => 85,  69 => 27,  58 => 19,  53 => 17,  48 => 15,  41 => 11,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>Progestix</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <!-- Encodage en utf-8, en HTML 5 -->
        <meta charset=\"utf-8\" />

        <!-- Inclusion des fichiers de styles -->
       
          <link rel=\"stylesheet\" type=\"text/css\" href = \"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/bower_components/responsive-tables/responsive-tables.css') }}\"/>

        <!-- <link rel=\"icon\" href=\"asset('bundles/pharmacieaccueil/images/favicon.ico')\" /> -->
        
        <link rel=\"stylesheet\" type=\"text/css\" href = \"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/css/style.css') }}\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href = \"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/bower_components/bootstrap/dist/css/bootstrap.min.css') }}\"/>

        <link rel=\"stylesheet\" type=\"text/css\" href = \"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/bower_components/datatables/media/css/jquery.dataTables.css') }}\"/>
         

    
    <body id=\"coprsTemplate\" onload=\"date_heure('heure');\">
        <div >
            <!-- bloc conteneur de la page  -->
            <div id=\"container \" class=\"container container-fluid\">
                {% block corps %}
                    {% block menuHaut %}
                       <nav class=\"navbar navbar-fixed-top\" style=\"background-color: #5cb85c\" role=\"navigation\">  <!-- #006400 -->
                            {% block titre %}

                            {% endblock %}
                            <div class=\"container\">
                            <!-- Brand and toggle get grouped for better mobile display -->
                                <div class=\"navbar-header\">
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    <a class=\"navbar-brand\" href=\"#\">
                                        {% block entete%}<img src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/images/new_logo.jpg') }}\" id=\"logo\">{% endblock %}
                                    </a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div id=\"bs-example-navbar-collapse-1\">
                                    <ul class=\"nav navbar-nav navbar-right menu-haut\">
                                        <li>
                                            <a  style=\"color: white\" href=\"#\"><span class=\"glyphicon glyphicon-home\"></span> Accueil</a>
                                        </li>
                                        <li>
                                            <a  style=\"color: white\" href=\"#\"><span class=\"glyphicon glyphicon-wrench\"></span> Administration</a>
                                        </li>
                                        <li>
                                            <a  style=\"color: white\" href=\"#\"><span class=\"glyphicon glyphicon-globe\"></span> Site web</a>
                                        </li>
                                        {% block logout %}
                                
                                        {% endblock %}
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                            <!-- /.container -->
                        </nav>    
                    {% endblock %}
                    
                </div>

                <div style=\"margin-top: 50px;\">
                    
                    {% block menuLeft %}

                    {% endblock %}            
                
                    {% block contenu %}

                    {% endblock %}
                    <footer class=\"navbar-fixed-bottom\" style=\"background-color: #ed7d31\">
                        <h5 class=\"muted credit right\" style=\"color: white\"><center>Progestix, votre gestionnaire de pharmacie sécurisée. Copyright &copy; 2017</center></h5>
                    </footer>
                </div>
            {% endblock %}
        </div>            
    </body>
    <script type=\"text/javascript\" src=\" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/bower_components/jquery/jquery.min.js') }}\"></script>
    
    <script type=\"text/javascript\" src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/bower_components/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    
    <script type=\"text/javascript\" src=\"{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/bower_components/datatables/media/js/jquery.dataTables.js')}}\"></script>

    <!-- Custom Theme JavaScript -->
    <script type=\"text/javascript\" src=\" {{ app.request.schemeAndHttpHost ~ asset('bundles/pharmacieaccueil/js/style.js') }}\"></script>
     <script>
            \$(document).ready(function(){
                \$('.dropdown-toggle').dropdown();
                \$('#mytable').DataTable();

                var pathname = window.location.pathname.split(\"/\");
           

                if( pathname[pathname.length-2]==\"stock\" && pathname[pathname.length-1]==\"ajouter\"){
                    ajouter_keyword();
                    
                    ajouter_champ_produit();
                }
                else if( pathname[pathname.length-2]==\"produit\" && pathname[pathname.length-1]==\"ajouter\"){
                    //ajouter_champ_produit();
                    \$(\"#libelle\").select2({
                        placeholder: \"nom du produit\",
                        allowClear: true
                    });
                }

                    
            });    
        </script>
    <script>
        \$(document).ready(function(){
                    \$('.dropdown-toggle').dropdown();
                    \$('#mytable').DataTable();
                });    
    </script>
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

       

                         <!-- Pour les graphes et les statistiques -->

        <script type=\"text/javascript\" src=\"{{ asset('bundles/pharmacieaccueil/js/highcharts.js') }}\">
        </script>

        <script type=\"text/javascript\" src=\"{{ asset('bundles/pharmacieaccueil/js/exporting.js') }}\">
        </script> 
                         <!-- FIN graphes et les statistiques -->

                         
        <!-- Pour assurer la responsivite -->
         <script>
            \$(document).ready(function(){
                \$('.collapse').collapse();
            });
         </script>
</html>", "PharmacieAccueilBundle:Template:template.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/AccueilBundle/Resources/views/Template/template.html.twig");
    }
}

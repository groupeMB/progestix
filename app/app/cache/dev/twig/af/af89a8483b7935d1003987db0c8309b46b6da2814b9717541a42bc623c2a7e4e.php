<?php

/* PharmacieAccueilBundle:Template:template1.html.twig */
class __TwigTemplate_b69a3f4b6adaabd060ec09fcf7c0f058a1120ac8442f926033f1c2d43c8adb84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmacieAccueilBundle:Template:template.html.twig", "PharmacieAccueilBundle:Template:template1.html.twig", 1);
        $this->blocks = array(
            'entete' => array($this, 'block_entete'),
            'titre' => array($this, 'block_titre'),
            'logout' => array($this, 'block_logout'),
            'menuLeft' => array($this, 'block_menuLeft'),
            'statistique' => array($this, 'block_statistique'),
            'download' => array($this, 'block_download'),
            'legende' => array($this, 'block_legende'),
            'contenu' => array($this, 'block_contenu'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmacieAccueilBundle:Template:template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2767b4f9f74a00e3b9ba17387142402b0233ed361050a453288a885e12f2203 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2767b4f9f74a00e3b9ba17387142402b0233ed361050a453288a885e12f2203->enter($__internal_a2767b4f9f74a00e3b9ba17387142402b0233ed361050a453288a885e12f2203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmacieAccueilBundle:Template:template1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2767b4f9f74a00e3b9ba17387142402b0233ed361050a453288a885e12f2203->leave($__internal_a2767b4f9f74a00e3b9ba17387142402b0233ed361050a453288a885e12f2203_prof);

    }

    // line 2
    public function block_entete($context, array $blocks = array())
    {
        $__internal_27d4d0ea3914c039fb32528375e39d96d231770f7f4b2b0ea404c081148a0a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d4d0ea3914c039fb32528375e39d96d231770f7f4b2b0ea404c081148a0a6e->enter($__internal_27d4d0ea3914c039fb32528375e39d96d231770f7f4b2b0ea404c081148a0a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 3
        echo "
";
        
        $__internal_27d4d0ea3914c039fb32528375e39d96d231770f7f4b2b0ea404c081148a0a6e->leave($__internal_27d4d0ea3914c039fb32528375e39d96d231770f7f4b2b0ea404c081148a0a6e_prof);

    }

    // line 6
    public function block_titre($context, array $blocks = array())
    {
        $__internal_124591fa6b8eb1f0b9f5dc48e7c95a1f2d9fd203e5a84b9f24d498ef34a433a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_124591fa6b8eb1f0b9f5dc48e7c95a1f2d9fd203e5a84b9f24d498ef34a433a6->enter($__internal_124591fa6b8eb1f0b9f5dc48e7c95a1f2d9fd203e5a84b9f24d498ef34a433a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) {
            // line 8
            echo "        <span class=\"navbar-brand\" style=\"color: white\" href=\"#\">Bienvenue ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
            echo "</span>
    ";
        }
        
        $__internal_124591fa6b8eb1f0b9f5dc48e7c95a1f2d9fd203e5a84b9f24d498ef34a433a6->leave($__internal_124591fa6b8eb1f0b9f5dc48e7c95a1f2d9fd203e5a84b9f24d498ef34a433a6_prof);

    }

    // line 12
    public function block_logout($context, array $blocks = array())
    {
        $__internal_0e73006309506db3a32e89d8f2e51260ed5d242444c2eb2bb01012bc00d22f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e73006309506db3a32e89d8f2e51260ed5d242444c2eb2bb01012bc00d22f29->enter($__internal_0e73006309506db3a32e89d8f2e51260ed5d242444c2eb2bb01012bc00d22f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 13
        echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-envelope\"></span><span class=\"caret\"></span></a>
         <ul class=\"dropdown-menu dropdown-messages\">
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Simon DIOUF</strong>
                        <span class=\"pull-right text-muted\">
                            <em>Hier</em>
                        </span>
                    </div>
                    <div>Bonjour J'aimerais commander 2 Boites de doliprane et... </div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Ibrahima BA </strong>
                        <span class=\"pull-right text-muted\">
                            <em>5 octobre 2016</em>
                        </span>
                    </div>
                    <div>Est-ce que vous avez des complements alimentaires ?</div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Bassirou NGOM</strong>
                        <span class=\"pull-right text-muted\">
                            <em>17 Mai 2016</em>
                        </span>
                    </div>
                    <div>Avez vous un medicament pour faire maigrir une personne...</div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a class=\"text-center\" href=\"#\">
                    <strong>Tous les Messages</strong>
                    <i class=\"glyphicon glyphicon-arrow-right\"></i>
                </a>
            </li>
        </ul>
    </li>

    ";
        // line 62
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 63
            echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
       <ul class=\"dropdown-menu dropdown-user\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-user\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo " </a>
            </li>
            <li><a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\"><i class=\"glyphicon glyphicon-wrench\"></i> réglages</a>
            </li>
            <li class=\"divider\"></li>
            <li><a href=\"";
            // line 72
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"glyphicon glyphicon-log-out\"></i> Se deconnecter</a>
            </li>
        </ul>
    </li> 
     ";
        } else {
            // line 76
            echo " 
        <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
           <ul class=\"dropdown-menu dropdown-user\">
                <li class=\"divider\"></li>
                <li><a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"glyphicon glyphicon-log-in\"></i> Se connecter</a>
                </li>
            </ul>
    </li>
    ";
        }
        // line 85
        echo "   

";
        
        $__internal_0e73006309506db3a32e89d8f2e51260ed5d242444c2eb2bb01012bc00d22f29->leave($__internal_0e73006309506db3a32e89d8f2e51260ed5d242444c2eb2bb01012bc00d22f29_prof);

    }

    // line 90
    public function block_menuLeft($context, array $blocks = array())
    {
        $__internal_972a4181e88d3051dd340a925bd02a840bb3fe35468a11361bb40fa5b29860b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972a4181e88d3051dd340a925bd02a840bb3fe35468a11361bb40fa5b29860b2->enter($__internal_972a4181e88d3051dd340a925bd02a840bb3fe35468a11361bb40fa5b29860b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuLeft"));

        // line 91
        echo "    <div style=\"margin-top: 1%\">
        <span class=\"btn btn-block\" id=\"buttonflot\" type=\"button\" onclick=\"menuflottant()\" style=\"width:18.5%; background-color: #ed7d31; color: white; border-radius: 0\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Glisser le menu</span>
        <div class=\"navbar-default sidebar\" role=\"navigation\" style=\"height: 100%; width:3%; background-color: #ed7d31; display: none; float: left\" id=\"menuCourt\">
            <table>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Membre Physique\"><a href=\"#\"><button class=\" btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-shopping-cart\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Membre Morale\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-barcode\"></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-book\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-stats\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-wrench\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-flag\" ></span></button></a></span>   
                </tr>
            </table>
        </div>
        <div id=\"flotMenu\" style=\"width: 18.5%; float: left;\" class=\"fixe;\">
            <div class=\"sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav\">
                    <button class=\"btn btn-block alert-warning\" id=\"heure\"></button>
                    <ul class=\"nav menuLeft\" id=\"side-menu\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-shopping-cart\"></span> Gestion vente
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionstock_ajouter_achete");
        echo "\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestionstock_lister_achete_produitVendu");
        echo "\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-barcode\"></span> Gestion stock
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_categorie_lister");
        echo "\" ><i class=\"glyphicon glyphicon-folder-open\"></i> Mes catégories</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"";
        // line 147
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stock_lister_produit");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i> Gestion produits</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"";
        // line 150
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gestion_stockage_lister_stock");
        echo "\"><i class=\"glyphicon glyphicon-saved\"></i> Enregistrement stock</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-sort\"></i> Etat stock</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-book\"></span> Inventaire
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> mensuelle</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\" ><i class=\"glyphicon glyphicon-calendar\"></i> Annuelle</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-stats\"></span> Statistiques
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-wrench\"></span> Réglages
                            </a>
                        </li>
                        ";
        // line 181
        $this->displayBlock('statistique', $context, $blocks);
        // line 184
        echo "                        ";
        $this->displayBlock('download', $context, $blocks);
        // line 186
        echo " 
                        ";
        // line 187
        $this->displayBlock('legende', $context, $blocks);
        // line 206
        echo "                    </ul>

                    <div class=\"logoDashboard\" >
                        <center><img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/pharmacieaccueil/images/logo.jpg"), "html", null, true);
        echo "\" width=\"200px\" height=\"120px\"></center> 
                    </div>               
                </div>  
            </div>
            </nav>
        </div>
    </div>
";
        
        $__internal_972a4181e88d3051dd340a925bd02a840bb3fe35468a11361bb40fa5b29860b2->leave($__internal_972a4181e88d3051dd340a925bd02a840bb3fe35468a11361bb40fa5b29860b2_prof);

    }

    // line 181
    public function block_statistique($context, array $blocks = array())
    {
        $__internal_be85754b93a4c1802adc99446e9ede4660e99f47b4669380266545596b4454eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be85754b93a4c1802adc99446e9ede4660e99f47b4669380266545596b4454eb->enter($__internal_be85754b93a4c1802adc99446e9ede4660e99f47b4669380266545596b4454eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "statistique"));

        // line 182
        echo "                            
                        ";
        
        $__internal_be85754b93a4c1802adc99446e9ede4660e99f47b4669380266545596b4454eb->leave($__internal_be85754b93a4c1802adc99446e9ede4660e99f47b4669380266545596b4454eb_prof);

    }

    // line 184
    public function block_download($context, array $blocks = array())
    {
        $__internal_6633c8d1adf25c00a32eee1ffb0109106c83905a0f86f848b40c09a11d0e4dd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6633c8d1adf25c00a32eee1ffb0109106c83905a0f86f848b40c09a11d0e4dd0->enter($__internal_6633c8d1adf25c00a32eee1ffb0109106c83905a0f86f848b40c09a11d0e4dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "download"));

        echo " 
                            
                        ";
        
        $__internal_6633c8d1adf25c00a32eee1ffb0109106c83905a0f86f848b40c09a11d0e4dd0->leave($__internal_6633c8d1adf25c00a32eee1ffb0109106c83905a0f86f848b40c09a11d0e4dd0_prof);

    }

    // line 187
    public function block_legende($context, array $blocks = array())
    {
        $__internal_709915a89eef5dc9dab8fb4fec58a95a7b8e2db2a1a6237f7e5b8a62f6733e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709915a89eef5dc9dab8fb4fec58a95a7b8e2db2a1a6237f7e5b8a62f6733e35->enter($__internal_709915a89eef5dc9dab8fb4fec58a95a7b8e2db2a1a6237f7e5b8a62f6733e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "legende"));

        echo "    
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                    <i class=\"glyphicon glyphicon-flag\"></i> Légendes <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                                </a>
                                <ul class=\"dropdown-menu legende\">
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone indique que les données de l'individu sont erronées ou manquantes. Dans ce cas, il vous faudra opérer des modifications dans SAF afin que l'enregistrement puisse être valide.\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\" ></span></button> Suppresion</span>   
                                    </li>
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone indique que les données de l'individu sont valides\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\" ></span></button> Edition</span>   
                                    </li>
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone permet de télécharger la fiche de consentement personnalisée du client\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-download\" ></span></button> Visualisation</span>   
                                    </li>
                                    
                                </ul>
                            </li>
                        ";
        
        $__internal_709915a89eef5dc9dab8fb4fec58a95a7b8e2db2a1a6237f7e5b8a62f6733e35->leave($__internal_709915a89eef5dc9dab8fb4fec58a95a7b8e2db2a1a6237f7e5b8a62f6733e35_prof);

    }

    // line 218
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_15caf44340d71ed184015ee863028812e46aa93af29872b8f5089bba9366afe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15caf44340d71ed184015ee863028812e46aa93af29872b8f5089bba9366afe9->enter($__internal_15caf44340d71ed184015ee863028812e46aa93af29872b8f5089bba9366afe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo "     
    <div id=\"contenuflot\" style=\"width: 79%; float:right;\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-warning\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-12\">
                
                ";
        // line 253
        $this->displayBlock('main', $context, $blocks);
        // line 256
        echo "        </div> 
    </div>
        
    </div>
";
        
        $__internal_15caf44340d71ed184015ee863028812e46aa93af29872b8f5089bba9366afe9->leave($__internal_15caf44340d71ed184015ee863028812e46aa93af29872b8f5089bba9366afe9_prof);

    }

    // line 253
    public function block_main($context, array $blocks = array())
    {
        $__internal_fd2286057709a3d8db5738b456891f297a34a418502af336219528af96483ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2286057709a3d8db5738b456891f297a34a418502af336219528af96483ea3->enter($__internal_fd2286057709a3d8db5738b456891f297a34a418502af336219528af96483ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 254
        echo "
                ";
        
        $__internal_fd2286057709a3d8db5738b456891f297a34a418502af336219528af96483ea3->leave($__internal_fd2286057709a3d8db5738b456891f297a34a418502af336219528af96483ea3_prof);

    }

    public function getTemplateName()
    {
        return "PharmacieAccueilBundle:Template:template1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 254,  442 => 253,  431 => 256,  429 => 253,  387 => 218,  357 => 187,  343 => 184,  335 => 182,  329 => 181,  314 => 209,  309 => 206,  307 => 187,  304 => 186,  301 => 184,  299 => 181,  265 => 150,  259 => 147,  253 => 144,  236 => 130,  230 => 127,  192 => 91,  186 => 90,  177 => 85,  169 => 81,  162 => 76,  154 => 72,  148 => 69,  143 => 67,  137 => 63,  135 => 62,  84 => 13,  78 => 12,  65 => 8,  62 => 7,  56 => 6,  48 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"PharmacieAccueilBundle:Template:template.html.twig\" %}
{% block entete%}

{%endblock%}

{% block titre %}
    {% if app.user is defined  %}
        <span class=\"navbar-brand\" style=\"color: white\" href=\"#\">Bienvenue {{ app.user.firstname }} {{ app.user.lastname }}</span>
    {% endif %}
{% endblock %}

{% block logout %}

    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-envelope\"></span><span class=\"caret\"></span></a>
         <ul class=\"dropdown-menu dropdown-messages\">
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Simon DIOUF</strong>
                        <span class=\"pull-right text-muted\">
                            <em>Hier</em>
                        </span>
                    </div>
                    <div>Bonjour J'aimerais commander 2 Boites de doliprane et... </div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Ibrahima BA </strong>
                        <span class=\"pull-right text-muted\">
                            <em>5 octobre 2016</em>
                        </span>
                    </div>
                    <div>Est-ce que vous avez des complements alimentaires ?</div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a href=\"#\">
                    <div>
                        <strong>Bassirou NGOM</strong>
                        <span class=\"pull-right text-muted\">
                            <em>17 Mai 2016</em>
                        </span>
                    </div>
                    <div>Avez vous un medicament pour faire maigrir une personne...</div>
                </a>
            </li>
            <li class=\"divider\"></li>
            <li>
                <a class=\"text-center\" href=\"#\">
                    <strong>Tous les Messages</strong>
                    <i class=\"glyphicon glyphicon-arrow-right\"></i>
                </a>
            </li>
        </ul>
    </li>

    {% if app.user%}

    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
       <ul class=\"dropdown-menu dropdown-user\">
            <li><a href=\"#\"><i class=\"glyphicon glyphicon-user\"></i> {{app.user}} </a>
            </li>
            <li><a href=\"{{path('fos_user_profile_edit')}}\"><i class=\"glyphicon glyphicon-wrench\"></i> réglages</a>
            </li>
            <li class=\"divider\"></li>
            <li><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"glyphicon glyphicon-log-out\"></i> Se deconnecter</a>
            </li>
        </ul>
    </li> 
     {% else%} 
        <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
           <ul class=\"dropdown-menu dropdown-user\">
                <li class=\"divider\"></li>
                <li><a href=\"{{path('fos_user_security_logout')}}\"><i class=\"glyphicon glyphicon-log-in\"></i> Se connecter</a>
                </li>
            </ul>
    </li>
    {% endif%}   

{% endblock %}


{% block menuLeft %}
    <div style=\"margin-top: 1%\">
        <span class=\"btn btn-block\" id=\"buttonflot\" type=\"button\" onclick=\"menuflottant()\" style=\"width:18.5%; background-color: #ed7d31; color: white; border-radius: 0\"><span class=\"glyphicon glyphicon-chevron-left\"></span> Glisser le menu</span>
        <div class=\"navbar-default sidebar\" role=\"navigation\" style=\"height: 100%; width:3%; background-color: #ed7d31; display: none; float: left\" id=\"menuCourt\">
            <table>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Membre Physique\"><a href=\"#\"><button class=\" btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-shopping-cart\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Membre Morale\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-barcode\"></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-book\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-stats\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-wrench\" ></span></button></a></span>   
                </tr>
                <tr>
                     <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Contrats\"><a href=\"#\"><button class=\"btn btn-block\" style=\"color: white;background-color:#5cb85c; border-radius: 0 \"><span class=\"glyphicon glyphicon-flag\" ></span></button></a></span>   
                </tr>
            </table>
        </div>
        <div id=\"flotMenu\" style=\"width: 18.5%; float: left;\" class=\"fixe;\">
            <div class=\"sidebar\" role=\"navigation\">
                <div class=\"sidebar-nav\">
                    <button class=\"btn btn-block alert-warning\" id=\"heure\"></button>
                    <ul class=\"nav menuLeft\" id=\"side-menu\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-shopping-cart\"></span> Gestion vente
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"{{ path(\"gestionstock_ajouter_achete\") }}\"><i class=\"glyphicon glyphicon-list-alt\"></i> Espace vente </a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"{{ path(\"gestionstock_lister_achete_produitVendu\") }}\"><i class=\"glyphicon glyphicon-calendar\"></i> Historique de vente</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> Recette journalière</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-barcode\"></span> Gestion stock
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"{{ path(\"gestion_stock_categorie_lister\") }}\" ><i class=\"glyphicon glyphicon-folder-open\"></i> Mes catégories</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"{{ path(\"gestion_stock_lister_produit\") }}\"><i class=\"glyphicon glyphicon-tags\"></i> Gestion produits</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"{{ path(\"gestion_stockage_lister_stock\") }}\"><i class=\"glyphicon glyphicon-saved\"></i> Enregistrement stock</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-sort\"></i> Etat stock</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-book\"></span> Inventaire
                                <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\"><i class=\"glyphicon glyphicon-time\"></i> mensuelle</a></span>
                                </li>
                                <li>
                                    <span class=\"btn-block\"><a href=\"#\" ><i class=\"glyphicon glyphicon-calendar\"></i> Annuelle</a></span>
                                </li>
                            </ul>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-stats\"></span> Statistiques
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle titremenu\">
                                <i class=\"fa fa-dashboard fa-fw\"></i><span class=\"glyphicon glyphicon-wrench\"></span> Réglages
                            </a>
                        </li>
                        {% block statistique %}
                            
                        {% endblock %}
                        {% block download %} 
                            
                        {% endblock %} 
                        {% block legende %}    
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle titremenu\" data-toggle=\"dropdown\" onclick=\"mycaret(this)\">
                                    <i class=\"glyphicon glyphicon-flag\"></i> Légendes <b class=\"glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition\"></b>
                                </a>
                                <ul class=\"dropdown-menu legende\">
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone indique que les données de l'individu sont erronées ou manquantes. Dans ce cas, il vous faudra opérer des modifications dans SAF afin que l'enregistrement puisse être valide.\"><button class=\"btn btn-danger btn-xs\"><span class=\"glyphicon glyphicon-trash\" ></span></button> Suppresion</span>   
                                    </li>
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone indique que les données de l'individu sont valides\"><button class=\"btn btn-success btn-xs\"><span class=\"glyphicon glyphicon-edit\" ></span></button> Edition</span>   
                                    </li>
                                    <li>
                                         <span class=\"btn-block\" data-toggle=\"tooltip\" title=\"Cette icone permet de télécharger la fiche de consentement personnalisée du client\"><button class=\"btn btn-info btn-xs\"><span class=\"glyphicon glyphicon-download\" ></span></button> Visualisation</span>   
                                    </li>
                                    
                                </ul>
                            </li>
                        {% endblock %}
                    </ul>

                    <div class=\"logoDashboard\" >
                        <center><img src=\"{{ asset('bundles/pharmacieaccueil/images/logo.jpg') }}\" width=\"200px\" height=\"120px\"></center> 
                    </div>               
                </div>  
            </div>
            </nav>
        </div>
    </div>
{%endblock%}

{% block contenu %}     
    <div id=\"contenuflot\" style=\"width: 79%; float:right;\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-danger\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3\">
                <div class=\"panel panel-warning\">
                    <div class=\"panel-heading\">
                        <span class=\"btn-block\"><i class=\"fa fa-users fa-fw\"></i> Capital : 215364 FCFA</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-12\">
                
                {% block main %}

                {% endblock %}
        </div> 
    </div>
        
    </div>
{% endblock %}
", "PharmacieAccueilBundle:Template:template1.html.twig", "/home/abdoulaye/workspace/workflows/progestix/progestix/app/src/Pharmacie/AccueilBundle/Resources/views/Template/template1.html.twig");
    }
}

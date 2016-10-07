<?php

/* PharmaciePharmacienBundle:Pharmacien:accueil.html.twig */
class __TwigTemplate_af63d7262f1f35a444a24aa2f6811d615993b4be64ee4c3f75fc099c94877830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmaciePharmacienBundle::template.html.twig", "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'logout' => array($this, 'block_logout'),
            'contenu' => array($this, 'block_contenu'),
            'menuCentre' => array($this, 'block_menuCentre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmaciePharmacienBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ec81d63a135f5b245d9d33fda771f459d4964f8a3a2aef1ecf2108d4a970126 = $this->env->getExtension("native_profiler");
        $__internal_0ec81d63a135f5b245d9d33fda771f459d4964f8a3a2aef1ecf2108d4a970126->enter($__internal_0ec81d63a135f5b245d9d33fda771f459d4964f8a3a2aef1ecf2108d4a970126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ec81d63a135f5b245d9d33fda771f459d4964f8a3a2aef1ecf2108d4a970126->leave($__internal_0ec81d63a135f5b245d9d33fda771f459d4964f8a3a2aef1ecf2108d4a970126_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_fdebacb671d385b798ca33e898fd94dd89361096c2abd3151e0b8a1a38397d33 = $this->env->getExtension("native_profiler");
        $__internal_fdebacb671d385b798ca33e898fd94dd89361096c2abd3151e0b8a1a38397d33->enter($__internal_fdebacb671d385b798ca33e898fd94dd89361096c2abd3151e0b8a1a38397d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "    
        <span class=\"navbar-brand\" href=\"#\"><p id=\"heure\"></p></span>
    
";
        
        $__internal_fdebacb671d385b798ca33e898fd94dd89361096c2abd3151e0b8a1a38397d33->leave($__internal_fdebacb671d385b798ca33e898fd94dd89361096c2abd3151e0b8a1a38397d33_prof);

    }

    // line 9
    public function block_logout($context, array $blocks = array())
    {
        $__internal_c7c3cd3c91734a442b1047777cd7fb4d728089ce30d26522128fe69c8421115b = $this->env->getExtension("native_profiler");
        $__internal_c7c3cd3c91734a442b1047777cd7fb4d728089ce30d26522128fe69c8421115b->enter($__internal_c7c3cd3c91734a442b1047777cd7fb4d728089ce30d26522128fe69c8421115b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 10
        echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"\">Déconnexion</a></li>
        </ul>
    </li>             
";
        
        $__internal_c7c3cd3c91734a442b1047777cd7fb4d728089ce30d26522128fe69c8421115b->leave($__internal_c7c3cd3c91734a442b1047777cd7fb4d728089ce30d26522128fe69c8421115b_prof);

    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5a3f3979b33218375ec2dd43b6573082e9742d0afea7b0d8fb854c97e8660b8e = $this->env->getExtension("native_profiler");
        $__internal_5a3f3979b33218375ec2dd43b6573082e9742d0afea7b0d8fb854c97e8660b8e->enter($__internal_5a3f3979b33218375ec2dd43b6573082e9742d0afea7b0d8fb854c97e8660b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 20
        echo " <div id=\"container\" class=\"container container-fluid\">
    ";
        // line 21
        $this->displayBlock('menuCentre', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "</div>
";
        
        $__internal_5a3f3979b33218375ec2dd43b6573082e9742d0afea7b0d8fb854c97e8660b8e->leave($__internal_5a3f3979b33218375ec2dd43b6573082e9742d0afea7b0d8fb854c97e8660b8e_prof);

    }

    // line 21
    public function block_menuCentre($context, array $blocks = array())
    {
        $__internal_40cc6c08ca346e90820ff08f82f775597dc046f3095bfe70e362aa4e263114e8 = $this->env->getExtension("native_profiler");
        $__internal_40cc6c08ca346e90820ff08f82f775597dc046f3095bfe70e362aa4e263114e8->enter($__internal_40cc6c08ca346e90820ff08f82f775597dc046f3095bfe70e362aa4e263114e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCentre"));

        // line 22
        echo "        
    ";
        
        $__internal_40cc6c08ca346e90820ff08f82f775597dc046f3095bfe70e362aa4e263114e8->leave($__internal_40cc6c08ca346e90820ff08f82f775597dc046f3095bfe70e362aa4e263114e8_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_6b3b4f20db254697f96a48d27adb4578f7b59b0399fa18ce890f912d64ef1267 = $this->env->getExtension("native_profiler");
        $__internal_6b3b4f20db254697f96a48d27adb4578f7b59b0399fa18ce890f912d64ef1267->enter($__internal_6b3b4f20db254697f96a48d27adb4578f7b59b0399fa18ce890f912d64ef1267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4\" id=\"portofolioPresentation\">
                <div class=\"thumbnail\">
                    <h4>Vente de produits</h4>
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/images/cash.png")), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\" id=\"portofolioPresentation\">
                <div class=\"thumbnail\">
                     <h4>Comptabilité</h4>
                   <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/images/compta.jpg")), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\" id=\"portofolioPresentation\">
                <div class=\"thumbnail\">
                    <h4>Statistiques</h4>
                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/images/statistique.jpg")), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>
    ";
        
        $__internal_6b3b4f20db254697f96a48d27adb4578f7b59b0399fa18ce890f912d64ef1267->leave($__internal_6b3b4f20db254697f96a48d27adb4578f7b59b0399fa18ce890f912d64ef1267_prof);

    }

    public function getTemplateName()
    {
        return "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  131 => 35,  122 => 29,  116 => 25,  110 => 24,  102 => 22,  96 => 21,  88 => 46,  85 => 24,  83 => 21,  80 => 20,  74 => 19,  60 => 10,  54 => 9,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "PharmaciePharmacienBundle::template.html.twig" %}*/
/* */
/* {% block titre %}*/
/*     */
/*         <span class="navbar-brand" href="#"><p id="heure"></p></span>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block logout %}*/
/* */
/*     <li class="dropdown">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>*/
/*         <ul class="dropdown-menu">*/
/*             <li><a href="">Déconnexion</a></li>*/
/*         </ul>*/
/*     </li>             */
/* {% endblock %}*/
/* */
/* {% block contenu%}*/
/*  <div id="container" class="container container-fluid">*/
/*     {% block menuCentre %}*/
/*         */
/*     {% endblock %}*/
/*     {% block content %}*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-md-4" id="portofolioPresentation">*/
/*                 <div class="thumbnail">*/
/*                     <h4>Vente de produits</h4>*/
/*                     <img src="{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/images/cash.png') }}">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-6 col-md-4" id="portofolioPresentation">*/
/*                 <div class="thumbnail">*/
/*                      <h4>Comptabilité</h4>*/
/*                    <img src="{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/images/compta.jpg') }}">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-6 col-md-4" id="portofolioPresentation">*/
/*                 <div class="thumbnail">*/
/*                     <h4>Statistiques</h4>*/
/*                     <img src="{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/images/statistique.jpg') }}">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* */

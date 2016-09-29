<?php

/* @PharmaciePharmacien/Pharmacien/accueil.html.twig */
class __TwigTemplate_4cf75259e7fa4a0573726131e96f5d313e171f7800c5ef709b79ed672dd048ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmaciePharmacienBundle::template.html.twig", "@PharmaciePharmacien/Pharmacien/accueil.html.twig", 1);
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
        $__internal_b1ff7575e0ad9d3e84709ec6a1974bcae0ea84555b92bd45e195d698e0480d11 = $this->env->getExtension("native_profiler");
        $__internal_b1ff7575e0ad9d3e84709ec6a1974bcae0ea84555b92bd45e195d698e0480d11->enter($__internal_b1ff7575e0ad9d3e84709ec6a1974bcae0ea84555b92bd45e195d698e0480d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PharmaciePharmacien/Pharmacien/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ff7575e0ad9d3e84709ec6a1974bcae0ea84555b92bd45e195d698e0480d11->leave($__internal_b1ff7575e0ad9d3e84709ec6a1974bcae0ea84555b92bd45e195d698e0480d11_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_db32f3b6d91ebe1ff37299471aacc83e644e3e6dd5a9b7f3765ba0f88a3930b0 = $this->env->getExtension("native_profiler");
        $__internal_db32f3b6d91ebe1ff37299471aacc83e644e3e6dd5a9b7f3765ba0f88a3930b0->enter($__internal_db32f3b6d91ebe1ff37299471aacc83e644e3e6dd5a9b7f3765ba0f88a3930b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "    
        <span class=\"navbar-brand\" href=\"#\"><p id=\"heure\"></p></span>
    
";
        
        $__internal_db32f3b6d91ebe1ff37299471aacc83e644e3e6dd5a9b7f3765ba0f88a3930b0->leave($__internal_db32f3b6d91ebe1ff37299471aacc83e644e3e6dd5a9b7f3765ba0f88a3930b0_prof);

    }

    // line 9
    public function block_logout($context, array $blocks = array())
    {
        $__internal_51d81fa686505a4dfecc97959c21d5c2f70e2e62fc2e067c4c8a5766852d2a10 = $this->env->getExtension("native_profiler");
        $__internal_51d81fa686505a4dfecc97959c21d5c2f70e2e62fc2e067c4c8a5766852d2a10->enter($__internal_51d81fa686505a4dfecc97959c21d5c2f70e2e62fc2e067c4c8a5766852d2a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 10
        echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"\">Déconnexion</a></li>
        </ul>
    </li>             
";
        
        $__internal_51d81fa686505a4dfecc97959c21d5c2f70e2e62fc2e067c4c8a5766852d2a10->leave($__internal_51d81fa686505a4dfecc97959c21d5c2f70e2e62fc2e067c4c8a5766852d2a10_prof);

    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9ee282e71559369833dad362ac51cafeae54ffba6cf451f5092a39847bc18f83 = $this->env->getExtension("native_profiler");
        $__internal_9ee282e71559369833dad362ac51cafeae54ffba6cf451f5092a39847bc18f83->enter($__internal_9ee282e71559369833dad362ac51cafeae54ffba6cf451f5092a39847bc18f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9ee282e71559369833dad362ac51cafeae54ffba6cf451f5092a39847bc18f83->leave($__internal_9ee282e71559369833dad362ac51cafeae54ffba6cf451f5092a39847bc18f83_prof);

    }

    // line 21
    public function block_menuCentre($context, array $blocks = array())
    {
        $__internal_49361916bcbd27c663eb0d5860d8b09753656a8ec73e876b4d284314b280f068 = $this->env->getExtension("native_profiler");
        $__internal_49361916bcbd27c663eb0d5860d8b09753656a8ec73e876b4d284314b280f068->enter($__internal_49361916bcbd27c663eb0d5860d8b09753656a8ec73e876b4d284314b280f068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCentre"));

        // line 22
        echo "        
    ";
        
        $__internal_49361916bcbd27c663eb0d5860d8b09753656a8ec73e876b4d284314b280f068->leave($__internal_49361916bcbd27c663eb0d5860d8b09753656a8ec73e876b4d284314b280f068_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_85969116257a4ae56382f0baa5646706ae4523ddb82e16fdc261ff43fb298345 = $this->env->getExtension("native_profiler");
        $__internal_85969116257a4ae56382f0baa5646706ae4523ddb82e16fdc261ff43fb298345->enter($__internal_85969116257a4ae56382f0baa5646706ae4523ddb82e16fdc261ff43fb298345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_85969116257a4ae56382f0baa5646706ae4523ddb82e16fdc261ff43fb298345->leave($__internal_85969116257a4ae56382f0baa5646706ae4523ddb82e16fdc261ff43fb298345_prof);

    }

    public function getTemplateName()
    {
        return "@PharmaciePharmacien/Pharmacien/accueil.html.twig";
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

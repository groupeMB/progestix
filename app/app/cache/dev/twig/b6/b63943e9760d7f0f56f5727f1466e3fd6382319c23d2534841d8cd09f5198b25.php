<?php

/* PharmaciePharmacienBundle:Pharmacien:accueil.html.twig */
class __TwigTemplate_349c0e833f720c7a35ad3c52ce8bc9b98cb920919cda4acd70e89006ef067f2f extends Twig_Template
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
        $__internal_c7180681317da6a406eb455b427bc9d30458e843cb8b1bf7ddcfc276645fde86 = $this->env->getExtension("native_profiler");
        $__internal_c7180681317da6a406eb455b427bc9d30458e843cb8b1bf7ddcfc276645fde86->enter($__internal_c7180681317da6a406eb455b427bc9d30458e843cb8b1bf7ddcfc276645fde86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7180681317da6a406eb455b427bc9d30458e843cb8b1bf7ddcfc276645fde86->leave($__internal_c7180681317da6a406eb455b427bc9d30458e843cb8b1bf7ddcfc276645fde86_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_b87d5ee856d4ae44006e510a27ad881ce898848e24abc24d2a2efe8643c99c92 = $this->env->getExtension("native_profiler");
        $__internal_b87d5ee856d4ae44006e510a27ad881ce898848e24abc24d2a2efe8643c99c92->enter($__internal_b87d5ee856d4ae44006e510a27ad881ce898848e24abc24d2a2efe8643c99c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "    
        <span class=\"navbar-brand\" href=\"#\"><p id=\"heure\"></p></span>
    
";
        
        $__internal_b87d5ee856d4ae44006e510a27ad881ce898848e24abc24d2a2efe8643c99c92->leave($__internal_b87d5ee856d4ae44006e510a27ad881ce898848e24abc24d2a2efe8643c99c92_prof);

    }

    // line 9
    public function block_logout($context, array $blocks = array())
    {
        $__internal_64e9375b3c7c5ce07eb8c041f98369708ce3a03bcff1ebbb1aa1f90b890e6397 = $this->env->getExtension("native_profiler");
        $__internal_64e9375b3c7c5ce07eb8c041f98369708ce3a03bcff1ebbb1aa1f90b890e6397->enter($__internal_64e9375b3c7c5ce07eb8c041f98369708ce3a03bcff1ebbb1aa1f90b890e6397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 10
        echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"\">Déconnexion</a></li>
        </ul>
    </li>             
";
        
        $__internal_64e9375b3c7c5ce07eb8c041f98369708ce3a03bcff1ebbb1aa1f90b890e6397->leave($__internal_64e9375b3c7c5ce07eb8c041f98369708ce3a03bcff1ebbb1aa1f90b890e6397_prof);

    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_89d1116326c42ce29ae71fecff697cd7bd26216eff1da51611ed58c4ca4b420e = $this->env->getExtension("native_profiler");
        $__internal_89d1116326c42ce29ae71fecff697cd7bd26216eff1da51611ed58c4ca4b420e->enter($__internal_89d1116326c42ce29ae71fecff697cd7bd26216eff1da51611ed58c4ca4b420e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_89d1116326c42ce29ae71fecff697cd7bd26216eff1da51611ed58c4ca4b420e->leave($__internal_89d1116326c42ce29ae71fecff697cd7bd26216eff1da51611ed58c4ca4b420e_prof);

    }

    // line 21
    public function block_menuCentre($context, array $blocks = array())
    {
        $__internal_f5e5bbe3e40f0d9400f655b197d4b6dfba2c4162105456e0d5ce4855b3fa67f1 = $this->env->getExtension("native_profiler");
        $__internal_f5e5bbe3e40f0d9400f655b197d4b6dfba2c4162105456e0d5ce4855b3fa67f1->enter($__internal_f5e5bbe3e40f0d9400f655b197d4b6dfba2c4162105456e0d5ce4855b3fa67f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCentre"));

        // line 22
        echo "        
    ";
        
        $__internal_f5e5bbe3e40f0d9400f655b197d4b6dfba2c4162105456e0d5ce4855b3fa67f1->leave($__internal_f5e5bbe3e40f0d9400f655b197d4b6dfba2c4162105456e0d5ce4855b3fa67f1_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_f092139420d3579d060236ef595b7c1b56de060712517ca821a6092629831ef4 = $this->env->getExtension("native_profiler");
        $__internal_f092139420d3579d060236ef595b7c1b56de060712517ca821a6092629831ef4->enter($__internal_f092139420d3579d060236ef595b7c1b56de060712517ca821a6092629831ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f092139420d3579d060236ef595b7c1b56de060712517ca821a6092629831ef4->leave($__internal_f092139420d3579d060236ef595b7c1b56de060712517ca821a6092629831ef4_prof);

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

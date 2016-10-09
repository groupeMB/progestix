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
        $__internal_e52ffaa5a48b3dca0d5e97d8f251d9f3aa55d623ec484ae5604f3faf7756dcda = $this->env->getExtension("native_profiler");
        $__internal_e52ffaa5a48b3dca0d5e97d8f251d9f3aa55d623ec484ae5604f3faf7756dcda->enter($__internal_e52ffaa5a48b3dca0d5e97d8f251d9f3aa55d623ec484ae5604f3faf7756dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e52ffaa5a48b3dca0d5e97d8f251d9f3aa55d623ec484ae5604f3faf7756dcda->leave($__internal_e52ffaa5a48b3dca0d5e97d8f251d9f3aa55d623ec484ae5604f3faf7756dcda_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_8cec2be7964201dc853f9b3a909f9c119f4cd59cfc6cef4860e56e4d63a48850 = $this->env->getExtension("native_profiler");
        $__internal_8cec2be7964201dc853f9b3a909f9c119f4cd59cfc6cef4860e56e4d63a48850->enter($__internal_8cec2be7964201dc853f9b3a909f9c119f4cd59cfc6cef4860e56e4d63a48850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "    
        <span class=\"navbar-brand\" href=\"#\"><p id=\"heure\"></p></span>
    
";
        
        $__internal_8cec2be7964201dc853f9b3a909f9c119f4cd59cfc6cef4860e56e4d63a48850->leave($__internal_8cec2be7964201dc853f9b3a909f9c119f4cd59cfc6cef4860e56e4d63a48850_prof);

    }

    // line 9
    public function block_logout($context, array $blocks = array())
    {
        $__internal_478034afe4e24019d8994d872180b2fd7304d5efda5d63a7118534de395515c5 = $this->env->getExtension("native_profiler");
        $__internal_478034afe4e24019d8994d872180b2fd7304d5efda5d63a7118534de395515c5->enter($__internal_478034afe4e24019d8994d872180b2fd7304d5efda5d63a7118534de395515c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 10
        echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"\">Déconnexion</a></li>
        </ul>
    </li>             
";
        
        $__internal_478034afe4e24019d8994d872180b2fd7304d5efda5d63a7118534de395515c5->leave($__internal_478034afe4e24019d8994d872180b2fd7304d5efda5d63a7118534de395515c5_prof);

    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fc04c48ee79d090c66dc87966fd821de274780cbd9b39c406949ac9e1eeb7b3f = $this->env->getExtension("native_profiler");
        $__internal_fc04c48ee79d090c66dc87966fd821de274780cbd9b39c406949ac9e1eeb7b3f->enter($__internal_fc04c48ee79d090c66dc87966fd821de274780cbd9b39c406949ac9e1eeb7b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_fc04c48ee79d090c66dc87966fd821de274780cbd9b39c406949ac9e1eeb7b3f->leave($__internal_fc04c48ee79d090c66dc87966fd821de274780cbd9b39c406949ac9e1eeb7b3f_prof);

    }

    // line 21
    public function block_menuCentre($context, array $blocks = array())
    {
        $__internal_960dfcc3161d76db4b23976d89abfdb165edb001c20eb034c153e5dcd46da900 = $this->env->getExtension("native_profiler");
        $__internal_960dfcc3161d76db4b23976d89abfdb165edb001c20eb034c153e5dcd46da900->enter($__internal_960dfcc3161d76db4b23976d89abfdb165edb001c20eb034c153e5dcd46da900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCentre"));

        // line 22
        echo "        
    ";
        
        $__internal_960dfcc3161d76db4b23976d89abfdb165edb001c20eb034c153e5dcd46da900->leave($__internal_960dfcc3161d76db4b23976d89abfdb165edb001c20eb034c153e5dcd46da900_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_a02b742eae8eecdc5561f2c4516bf88d8ab44c95505a2509a5c768fdcd8a558b = $this->env->getExtension("native_profiler");
        $__internal_a02b742eae8eecdc5561f2c4516bf88d8ab44c95505a2509a5c768fdcd8a558b->enter($__internal_a02b742eae8eecdc5561f2c4516bf88d8ab44c95505a2509a5c768fdcd8a558b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a02b742eae8eecdc5561f2c4516bf88d8ab44c95505a2509a5c768fdcd8a558b->leave($__internal_a02b742eae8eecdc5561f2c4516bf88d8ab44c95505a2509a5c768fdcd8a558b_prof);

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

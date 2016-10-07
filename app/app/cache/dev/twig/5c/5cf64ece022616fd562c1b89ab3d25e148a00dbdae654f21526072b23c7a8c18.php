<?php

/* GestionInventaireBundle:Inventaire:index.html.twig */
class __TwigTemplate_d3d711bfb1d9d3decf25265c8f23363043e38cee47c067386d72c8db667f8b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionInventaireBundle::template.html.twig", "GestionInventaireBundle:Inventaire:index.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionInventaireBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_926829ca7ee75a1c6eb2a65e77fecfab8ec6e5afa7b36b3cc7ee82339f2f77e4 = $this->env->getExtension("native_profiler");
        $__internal_926829ca7ee75a1c6eb2a65e77fecfab8ec6e5afa7b36b3cc7ee82339f2f77e4->enter($__internal_926829ca7ee75a1c6eb2a65e77fecfab8ec6e5afa7b36b3cc7ee82339f2f77e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle:Inventaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_926829ca7ee75a1c6eb2a65e77fecfab8ec6e5afa7b36b3cc7ee82339f2f77e4->leave($__internal_926829ca7ee75a1c6eb2a65e77fecfab8ec6e5afa7b36b3cc7ee82339f2f77e4_prof);

    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4e9bea38f7c432734cef26f8e910f9ae10dd0f8ef0d4e7851fee6aaf5e63de79 = $this->env->getExtension("native_profiler");
        $__internal_4e9bea38f7c432734cef26f8e910f9ae10dd0f8ef0d4e7851fee6aaf5e63de79->enter($__internal_4e9bea38f7c432734cef26f8e910f9ae10dd0f8ef0d4e7851fee6aaf5e63de79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 4
        echo "<div class=\"col-md-12\" >
    <div class=\"row\">
        <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
                <h1>Bng</h1>
                bassirou ngom
            </div>
        </div>
    </div>

";
        
        $__internal_4e9bea38f7c432734cef26f8e910f9ae10dd0f8ef0d4e7851fee6aaf5e63de79->leave($__internal_4e9bea38f7c432734cef26f8e910f9ae10dd0f8ef0d4e7851fee6aaf5e63de79_prof);

    }

    public function getTemplateName()
    {
        return "GestionInventaireBundle:Inventaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "GestionInventaireBundle::template.html.twig" %}*/
/* */
/* {% block contenu %}*/
/* <div class="col-md-12" >*/
/*     <div class="row">*/
/*         <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*                 <h1>Bng</h1>*/
/*                 bassirou ngom*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock%}*/

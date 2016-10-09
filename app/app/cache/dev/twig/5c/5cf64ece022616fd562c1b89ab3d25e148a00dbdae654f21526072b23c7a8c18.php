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
        $__internal_574f2c4247503c3d82126697a07ba8300e82507f6f423d9919347c4a9285aaa8 = $this->env->getExtension("native_profiler");
        $__internal_574f2c4247503c3d82126697a07ba8300e82507f6f423d9919347c4a9285aaa8->enter($__internal_574f2c4247503c3d82126697a07ba8300e82507f6f423d9919347c4a9285aaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionInventaireBundle:Inventaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574f2c4247503c3d82126697a07ba8300e82507f6f423d9919347c4a9285aaa8->leave($__internal_574f2c4247503c3d82126697a07ba8300e82507f6f423d9919347c4a9285aaa8_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_314a2dbf532fcbadba97f8f3962d94c469477edd80630ee11d54ebb6a483c873 = $this->env->getExtension("native_profiler");
        $__internal_314a2dbf532fcbadba97f8f3962d94c469477edd80630ee11d54ebb6a483c873->enter($__internal_314a2dbf532fcbadba97f8f3962d94c469477edd80630ee11d54ebb6a483c873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "    <br>
     <button type=\"button\" class=\"btn btn-primary btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
         Faire l'inventaire
     </button>

     <!-- Modal -->
     <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
         <div class=\"modal-dialog\" role=\"document\">
             <div class=\"modal-content\">
                 <form method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                 <div class=\"modal-header\">
                     <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                         <span aria-hidden=\"true\">&times;</span>
                     </button>
                     <h4 class=\"modal-title\" id=\"myModalLabel\">Faire l'inventaire</h4>
                 </div>
                 <div class=\"modal-body\">
                     <div class=\"well\">
                             ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                     </div>
                 </div>
                 <div class=\"modal-footer\">
                     <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                     <button type=\"submit\" class=\"btn btn-primary\">executer</button>
                 </div>
                 </form>
             </div>
         </div>
     </div>

     <br>


 ";
        
        $__internal_314a2dbf532fcbadba97f8f3962d94c469477edd80630ee11d54ebb6a483c873->leave($__internal_314a2dbf532fcbadba97f8f3962d94c469477edd80630ee11d54ebb6a483c873_prof);

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
        return array (  63 => 21,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionInventaireBundle::template.html.twig" %}*/
/*  {% block contenu %}*/
/*     <br>*/
/*      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">*/
/*          Faire l'inventaire*/
/*      </button>*/
/* */
/*      <!-- Modal -->*/
/*      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*          <div class="modal-dialog" role="document">*/
/*              <div class="modal-content">*/
/*                  <form method="post" {{ form_enctype(form) }}>*/
/*                  <div class="modal-header">*/
/*                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">*/
/*                          <span aria-hidden="true">&times;</span>*/
/*                      </button>*/
/*                      <h4 class="modal-title" id="myModalLabel">Faire l'inventaire</h4>*/
/*                  </div>*/
/*                  <div class="modal-body">*/
/*                      <div class="well">*/
/*                              {{ form_widget(form) }}*/
/*                      </div>*/
/*                  </div>*/
/*                  <div class="modal-footer">*/
/*                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>*/
/*                      <button type="submit" class="btn btn-primary">executer</button>*/
/*                  </div>*/
/*                  </form>*/
/*              </div>*/
/*          </div>*/
/*      </div>*/
/* */
/*      <br>*/
/* */
/* */
/*  {%endblock%}*/

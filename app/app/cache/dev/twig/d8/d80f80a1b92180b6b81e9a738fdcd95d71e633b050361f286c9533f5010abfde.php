<?php

/* GestionStockBundle:Stock:supprimer.html.twig */
class __TwigTemplate_97db3dbf9df7bd1c879369d694926dfe15483cf163939f0a164c02c56696fedb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Stock:supprimer.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionStockBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76812fed3dc833262a1e3caa88e41cc9db8f248d66a6f9dc4cad75615e02f526 = $this->env->getExtension("native_profiler");
        $__internal_76812fed3dc833262a1e3caa88e41cc9db8f248d66a6f9dc4cad75615e02f526->enter($__internal_76812fed3dc833262a1e3caa88e41cc9db8f248d66a6f9dc4cad75615e02f526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Stock:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76812fed3dc833262a1e3caa88e41cc9db8f248d66a6f9dc4cad75615e02f526->leave($__internal_76812fed3dc833262a1e3caa88e41cc9db8f248d66a6f9dc4cad75615e02f526_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_42c1fb6dddf056129c5b7a2718db92c4a24fac1c9039b5502e66823496f1dd3f = $this->env->getExtension("native_profiler");
        $__internal_42c1fb6dddf056129c5b7a2718db92c4a24fac1c9039b5502e66823496f1dd3f->enter($__internal_42c1fb6dddf056129c5b7a2718db92c4a24fac1c9039b5502e66823496f1dd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "   <br><br>
   <div class=\"well\">
        <strong><center><h2>Supprimer le Stock ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "produit", array()), "html", null, true);
        echo " </h2></center></strong>
        </br>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "
   
    <div class=\"form-group\">
        ";
        // line 12
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité"));
        echo "

        ";
        // line 15
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 19
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

     <div class=\"form-group\">
        ";
        // line 25
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Seuil Minimum"));
        echo "

        ";
        // line 28
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 38
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produit", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Produit ID"));
        echo "

        ";
        // line 41
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produit", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 45
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

        </br>
   
        <span style=\"margin-left:30%\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Ajouter", array()), 'widget', array("label" => "Supprimer", "attr" => array("class" => "btn btn-danger")));
        echo "</span>

        <span style=\"margin-left:25%\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span>

    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
     ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo " 
     </div>
  ";
        
        $__internal_42c1fb6dddf056129c5b7a2718db92c4a24fac1c9039b5502e66823496f1dd3f->leave($__internal_42c1fb6dddf056129c5b7a2718db92c4a24fac1c9039b5502e66823496f1dd3f_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Stock:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  136 => 55,  131 => 53,  126 => 51,  116 => 45,  109 => 41,  103 => 38,  94 => 32,  87 => 28,  81 => 25,  72 => 19,  65 => 15,  59 => 12,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/*    {% block contenu %}*/
/*    <br><br>*/
/*    <div class="well">*/
/*         <strong><center><h2>Supprimer le Stock {{code.produit}} </h2></center></strong>*/
/*         </br>*/
/*     {{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {{ form_errors(formulaire) }}*/
/*    */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.quantite, "Quantité", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.quantite) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.quantite, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*      <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.seuilMin, "Seuil Minimum", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.seuilMin) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.seuilMin, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.produit, "Produit ID", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.produit) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.produit, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*         </br>*/
/*    */
/*         <span style="margin-left:30%">{{ form_widget(formulaire.Ajouter, {'label': 'Supprimer', 'attr': {'class': 'btn btn-danger'}}) }}</span>*/
/* */
/*         <span style="margin-left:25%">{{ form_widget(formulaire.Annuler, {'label': 'Annuler', 'attr': {'class': 'btn btn-warning'}}) }}</span>*/
/* */
/*     {{ form_widget(formulaire) }}*/
/*      {{ form_end(formulaire) }} */
/*      </div>*/
/*   {%endblock%}*/

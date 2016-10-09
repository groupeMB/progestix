<?php

/* GestionStockBundle:Produit:supprimer.html.twig */
class __TwigTemplate_6e7147850f91555d81e37b96c213771ff71e84e8e7e3341e2161236f651ab544 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Produit:supprimer.html.twig", 1);
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
        $__internal_b1588926ecb8884246f9d6570548fb4d144c89c96fa19b7c12192a3e62a52614 = $this->env->getExtension("native_profiler");
        $__internal_b1588926ecb8884246f9d6570548fb4d144c89c96fa19b7c12192a3e62a52614->enter($__internal_b1588926ecb8884246f9d6570548fb4d144c89c96fa19b7c12192a3e62a52614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Produit:supprimer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1588926ecb8884246f9d6570548fb4d144c89c96fa19b7c12192a3e62a52614->leave($__internal_b1588926ecb8884246f9d6570548fb4d144c89c96fa19b7c12192a3e62a52614_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0b61772a751b817696ead47afb046584a591cd4fc9ed66c5e2213f74f48668db = $this->env->getExtension("native_profiler");
        $__internal_0b61772a751b817696ead47afb046584a591cd4fc9ed66c5e2213f74f48668db->enter($__internal_0b61772a751b817696ead47afb046584a591cd4fc9ed66c5e2213f74f48668db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "   <br><br>
   <div class=\"well\">
        <strong><center><h2>Supprimer le produit ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "libelle", array()), "html", null, true);
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
        // line 11
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Libellé produit"));
        echo "

        ";
        // line 14
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 18
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité produit"));
        echo "

        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 30
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "codebarre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 35
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prix Unitaire"));
        echo "

        ";
        // line 38
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 42
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "prixunitaire", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 47
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Date de péremption"));
        echo "

        ";
        // line 50
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 54
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "dateperemption", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>
    <div class=\"form-group\">
        ";
        // line 59
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "reference", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Réference du produit"));
        echo "

        ";
        // line 62
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "reference", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 66
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "reference", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 72
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "categorie", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Categorie du produit"));
        echo "

        ";
        // line 75
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "categorie", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 79
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "categorie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

        </br>
   
        <span style=\"margin-left:30%\">";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Ajouter", array()), 'widget', array("label" => "Supprimer", "attr" => array("class" => "btn btn-danger")));
        echo "</span>

        <span style=\"margin-left:25%\">";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span>

    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
     ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo " 
     </div>
  ";
        
        $__internal_0b61772a751b817696ead47afb046584a591cd4fc9ed66c5e2213f74f48668db->leave($__internal_0b61772a751b817696ead47afb046584a591cd4fc9ed66c5e2213f74f48668db_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Produit:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 90,  197 => 89,  192 => 87,  187 => 85,  177 => 79,  170 => 75,  164 => 72,  155 => 66,  148 => 62,  142 => 59,  134 => 54,  127 => 50,  121 => 47,  113 => 42,  106 => 38,  100 => 35,  92 => 30,  85 => 26,  79 => 23,  71 => 18,  64 => 14,  58 => 11,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/*    {% block contenu %}*/
/*    <br><br>*/
/*    <div class="well">*/
/*         <strong><center><h2>Supprimer le produit {{code.libelle}} </h2></center></strong>*/
/*         </br>*/
/*     {{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {{ form_errors(formulaire) }}*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.libelle, "Libellé produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.libelle) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.libelle, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.codebarre, "Quantité produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.codebarre) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.codebarre, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.prixunitaire, "Prix Unitaire", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.prixunitaire) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.prixunitaire, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.dateperemption, "Date de péremption", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.dateperemption) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.dateperemption, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.reference, "Réference du produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.reference) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.reference, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.categorie, "Categorie du produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.categorie) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.categorie, {'attr': {'class': 'form-control'}}) }}*/
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

<?php

/* @GestionStock/Produit/ajouter.html.twig */
class __TwigTemplate_79865f6295a310d80204e58b0f263bc5faaeeeea8cd8dfebf562a963afa5b7ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "@GestionStock/Produit/ajouter.html.twig", 1);
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
        $__internal_05bca43afc458740a70bbaa5256d9a3d4c66c2ecbfe7ed1928e426467ed9c9b3 = $this->env->getExtension("native_profiler");
        $__internal_05bca43afc458740a70bbaa5256d9a3d4c66c2ecbfe7ed1928e426467ed9c9b3->enter($__internal_05bca43afc458740a70bbaa5256d9a3d4c66c2ecbfe7ed1928e426467ed9c9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@GestionStock/Produit/ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05bca43afc458740a70bbaa5256d9a3d4c66c2ecbfe7ed1928e426467ed9c9b3->leave($__internal_05bca43afc458740a70bbaa5256d9a3d4c66c2ecbfe7ed1928e426467ed9c9b3_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_499a02651abbda58288c203c91adf0e23683060a916a5d7ece4feabdd8f922e8 = $this->env->getExtension("native_profiler");
        $__internal_499a02651abbda58288c203c91adf0e23683060a916a5d7ece4feabdd8f922e8->enter($__internal_499a02651abbda58288c203c91adf0e23683060a916a5d7ece4feabdd8f922e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "
\t\t<div class=\"form-group\">
\t\t    ";
        // line 7
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Libellé produit"));
        echo "

\t\t    ";
        // line 10
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 14
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "libelle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
\t\t ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "\t
\t";
        
        $__internal_499a02651abbda58288c203c91adf0e23683060a916a5d7ece4feabdd8f922e8->leave($__internal_499a02651abbda58288c203c91adf0e23683060a916a5d7ece4feabdd8f922e8_prof);

    }

    public function getTemplateName()
    {
        return "@GestionStock/Produit/ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  71 => 18,  63 => 14,  56 => 10,  50 => 7,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* 	 {% block contenu %}*/
/* 		{{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}*/
/* 		{{ form_errors(formulaire) }}*/
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.libelle, "Libellé produit", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.libelle) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.libelle, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		{{ form_widget(formulaire) }}*/
/* 		 {{ form_end(formulaire) }}	*/
/* 	{%endblock%}*/

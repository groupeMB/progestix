<?php

/* GestionStockBundle:Categorie:ajouter.html.twig */
class __TwigTemplate_a1b424022c77865ca9d3c0f29968f33057a12ab14c352e54b091fda4ce79f41e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionStockBundle:Categorie:ajouter.html.twig", 2);
        $this->blocks = array(
            'tilte' => array($this, 'block_tilte'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_881038cb72b92f6b73057a0b475847b2cdb9310bd1169db23b8d61c70a657348 = $this->env->getExtension("native_profiler");
        $__internal_881038cb72b92f6b73057a0b475847b2cdb9310bd1169db23b8d61c70a657348->enter($__internal_881038cb72b92f6b73057a0b475847b2cdb9310bd1169db23b8d61c70a657348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_881038cb72b92f6b73057a0b475847b2cdb9310bd1169db23b8d61c70a657348->leave($__internal_881038cb72b92f6b73057a0b475847b2cdb9310bd1169db23b8d61c70a657348_prof);

    }

    // line 3
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_4b866c18687635b1f5be3b82efdfe3b384139491c32e0f2e6461a9d8d1f2af8a = $this->env->getExtension("native_profiler");
        $__internal_4b866c18687635b1f5be3b82efdfe3b384139491c32e0f2e6461a9d8d1f2af8a->enter($__internal_4b866c18687635b1f5be3b82efdfe3b384139491c32e0f2e6461a9d8d1f2af8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 4
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_4b866c18687635b1f5be3b82efdfe3b384139491c32e0f2e6461a9d8d1f2af8a->leave($__internal_4b866c18687635b1f5be3b82efdfe3b384139491c32e0f2e6461a9d8d1f2af8a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_96f2bfe82ab108708734b4c86a24e633e8c93c3e2387e388d1a24307eb9f530a = $this->env->getExtension("native_profiler");
        $__internal_96f2bfe82ab108708734b4c86a24e633e8c93c3e2387e388d1a24307eb9f530a->enter($__internal_96f2bfe82ab108708734b4c86a24e633e8c93c3e2387e388d1a24307eb9f530a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<h1>Ajouter d'une categorie </h1>

\t<form action=\"\" method=\"post\" ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t</form>
\t<p><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("gestion_stock_categorie_lister");
        echo "\">Retour à la liste des categorie</a></p>

";
        
        $__internal_96f2bfe82ab108708734b4c86a24e633e8c93c3e2387e388d1a24307eb9f530a->leave($__internal_96f2bfe82ab108708734b4c86a24e633e8c93c3e2387e388d1a24307eb9f530a_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Categorie:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  71 => 14,  67 => 13,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::base.html.twig" %}*/
/* {%block tilte%}*/
/* 	{{ parent() }}*/
/* {%endblock%}*/
/* */
/* {% block body %}*/
/* */
/* {{parent()}}*/
/* */
/* 	<h1>Ajouter d'une categorie </h1>*/
/* */
/* 	<form action="" method="post" {{ form_enctype(form) }}>*/
/* 	    {{ form_widget(form) }}*/
/* 	</form>*/
/* 	<p><a href="{{ path('gestion_stock_categorie_lister') }}">Retour à la liste des categorie</a></p>*/
/* */
/* {% endblock %}*/
/* */
/* */

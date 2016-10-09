<?php

/* GestionStockBundle:Categorie:modifier.html.twig */
class __TwigTemplate_68b491c55b5eca2fc017a586d27b996a9fd39ace57ebaf7e95020509c235a108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionStockBundle:Categorie:modifier.html.twig", 1);
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
        $__internal_6aa53de07e454c3d321440282100c3f96807f2c96cc6fa00cfae684220a8239d = $this->env->getExtension("native_profiler");
        $__internal_6aa53de07e454c3d321440282100c3f96807f2c96cc6fa00cfae684220a8239d->enter($__internal_6aa53de07e454c3d321440282100c3f96807f2c96cc6fa00cfae684220a8239d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa53de07e454c3d321440282100c3f96807f2c96cc6fa00cfae684220a8239d->leave($__internal_6aa53de07e454c3d321440282100c3f96807f2c96cc6fa00cfae684220a8239d_prof);

    }

    // line 2
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_2fbd461d0fe3f623245cc44e47942f88b508c17d59df71676c8280bb0327a92d = $this->env->getExtension("native_profiler");
        $__internal_2fbd461d0fe3f623245cc44e47942f88b508c17d59df71676c8280bb0327a92d->enter($__internal_2fbd461d0fe3f623245cc44e47942f88b508c17d59df71676c8280bb0327a92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 3
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_2fbd461d0fe3f623245cc44e47942f88b508c17d59df71676c8280bb0327a92d->leave($__internal_2fbd461d0fe3f623245cc44e47942f88b508c17d59df71676c8280bb0327a92d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_31dbfd9f3110103c21740e079521e11da3332d0b0590eb9879a20c1e538776be = $this->env->getExtension("native_profiler");
        $__internal_31dbfd9f3110103c21740e079521e11da3332d0b0590eb9879a20c1e538776be->enter($__internal_31dbfd9f3110103c21740e079521e11da3332d0b0590eb9879a20c1e538776be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<h1>Modification d'une categorie </h1>

\t<form action=\"\" method=\"post\" ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label');
        echo "
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "

\t    ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t
\t</form>
\t<p><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("gestion_stock_categorie_lister");
        echo "\">Retour à la liste des categorie</a></p>

";
        
        $__internal_31dbfd9f3110103c21740e079521e11da3332d0b0590eb9879a20c1e538776be->leave($__internal_31dbfd9f3110103c21740e079521e11da3332d0b0590eb9879a20c1e538776be_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Categorie:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  89 => 19,  84 => 17,  80 => 16,  75 => 14,  71 => 13,  67 => 12,  60 => 8,  57 => 7,  51 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {%block tilte%}*/
/* 	{{ parent() }}*/
/* {%endblock%}*/
/* */
/* {% block body %}*/
/* */
/* {{parent()}}*/
/* */
/* 	<h1>Modification d'une categorie </h1>*/
/* */
/* 	<form action="" method="post" {{ form_enctype(form) }}>*/
/* 		{{form_start(form)}}*/
/* 			{{form_errors(form)}}*/
/* */
/* 			{{form_label(form.libelle)}}*/
/* 			{{form_widget(form.libelle)}}*/
/* */
/* 	    {{form_end(form)}}*/
/* 		*/
/* 	</form>*/
/* 	<p><a href="{{ path('gestion_stock_categorie_lister') }}">Retour à la liste des categorie</a></p>*/
/* */
/* {% endblock %}*/
/* */
/* */

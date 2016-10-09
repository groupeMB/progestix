<?php

/* GestionStockBundle:Categorie:categorieProduit.html.twig */
class __TwigTemplate_bfb2a886f9e6ed788b381d951d18649da72d7ab7df112ecdc490ab287b426565 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GestionStockBundle:Categorie:categorieProduit.html.twig", 1);
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
        $__internal_a76c9d06adc52b260cc3d6dd5d5b29d623aa9c021bfc41f4a98d552194ee1cf6 = $this->env->getExtension("native_profiler");
        $__internal_a76c9d06adc52b260cc3d6dd5d5b29d623aa9c021bfc41f4a98d552194ee1cf6->enter($__internal_a76c9d06adc52b260cc3d6dd5d5b29d623aa9c021bfc41f4a98d552194ee1cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Categorie:categorieProduit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76c9d06adc52b260cc3d6dd5d5b29d623aa9c021bfc41f4a98d552194ee1cf6->leave($__internal_a76c9d06adc52b260cc3d6dd5d5b29d623aa9c021bfc41f4a98d552194ee1cf6_prof);

    }

    // line 2
    public function block_tilte($context, array $blocks = array())
    {
        $__internal_a5855642f4b9614b3e7b1e47a6fcf31caa180b133d5a0b0c4770aa8bae3abdd8 = $this->env->getExtension("native_profiler");
        $__internal_a5855642f4b9614b3e7b1e47a6fcf31caa180b133d5a0b0c4770aa8bae3abdd8->enter($__internal_a5855642f4b9614b3e7b1e47a6fcf31caa180b133d5a0b0c4770aa8bae3abdd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tilte"));

        // line 3
        echo "\t";
        $this->displayParentBlock("tilte", $context, $blocks);
        echo "
";
        
        $__internal_a5855642f4b9614b3e7b1e47a6fcf31caa180b133d5a0b0c4770aa8bae3abdd8->leave($__internal_a5855642f4b9614b3e7b1e47a6fcf31caa180b133d5a0b0c4770aa8bae3abdd8_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_89486d856dd38b88af554569a1938c2f0faa29c1f69bcb40c82d541ec1f91f4a = $this->env->getExtension("native_profiler");
        $__internal_89486d856dd38b88af554569a1938c2f0faa29c1f69bcb40c82d541ec1f91f4a->enter($__internal_89486d856dd38b88af554569a1938c2f0faa29c1f69bcb40c82d541ec1f91f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorieName"]) ? $context["categorieName"] : $this->getContext($context, "categorieName")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 11
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "libelle", array()), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t
";
        
        $__internal_89486d856dd38b88af554569a1938c2f0faa29c1f69bcb40c82d541ec1f91f4a->leave($__internal_89486d856dd38b88af554569a1938c2f0faa29c1f69bcb40c82d541ec1f91f4a_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Categorie:categorieProduit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 13,  69 => 11,  65 => 10,  60 => 8,  57 => 7,  51 => 6,  41 => 3,  35 => 2,  11 => 1,);
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
/* 	{% for tag in categorieName %}*/
/* 		{{  tag.libelle}}*/
/* 	{%endfor%}*/
/* 	*/
/* {% endblock %}*/
/* */

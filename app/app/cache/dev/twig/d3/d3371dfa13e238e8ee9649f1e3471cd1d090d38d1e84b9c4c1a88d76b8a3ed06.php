<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_709dc4d3d07f98e28983ca997aa5e3073c15e0ee39d1f55dd94d87702990dc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_323b1fba53ac9dfca85113f6f18411bc482c63e96936be96f960a7e6cd6dc22a = $this->env->getExtension("native_profiler");
        $__internal_323b1fba53ac9dfca85113f6f18411bc482c63e96936be96f960a7e6cd6dc22a->enter($__internal_323b1fba53ac9dfca85113f6f18411bc482c63e96936be96f960a7e6cd6dc22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_323b1fba53ac9dfca85113f6f18411bc482c63e96936be96f960a7e6cd6dc22a->leave($__internal_323b1fba53ac9dfca85113f6f18411bc482c63e96936be96f960a7e6cd6dc22a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5cfb0097ebe2d9fa953f9c1ce3e440862d55169d38c5c4b09b3fa01bff564e15 = $this->env->getExtension("native_profiler");
        $__internal_5cfb0097ebe2d9fa953f9c1ce3e440862d55169d38c5c4b09b3fa01bff564e15->enter($__internal_5cfb0097ebe2d9fa953f9c1ce3e440862d55169d38c5c4b09b3fa01bff564e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_5cfb0097ebe2d9fa953f9c1ce3e440862d55169d38c5c4b09b3fa01bff564e15->leave($__internal_5cfb0097ebe2d9fa953f9c1ce3e440862d55169d38c5c4b09b3fa01bff564e15_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */

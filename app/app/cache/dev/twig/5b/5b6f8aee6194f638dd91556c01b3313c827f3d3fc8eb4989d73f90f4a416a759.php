<?php

/* @SonataAdmin/CRUD/show_datetime.html.twig */
class __TwigTemplate_4c2a45c4a2357cc35cb0c400195e6cc02b3bcb50d244861e5fcc2cd3ecdae96d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_datetime.html.twig", 12);
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
        $__internal_7b29c92db84ffa790982e1320ef63a0d535e567b7c7711edd04826812843d7aa = $this->env->getExtension("native_profiler");
        $__internal_7b29c92db84ffa790982e1320ef63a0d535e567b7c7711edd04826812843d7aa->enter($__internal_7b29c92db84ffa790982e1320ef63a0d535e567b7c7711edd04826812843d7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b29c92db84ffa790982e1320ef63a0d535e567b7c7711edd04826812843d7aa->leave($__internal_7b29c92db84ffa790982e1320ef63a0d535e567b7c7711edd04826812843d7aa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1ca56a2f2b7074a9c55a26d3f4e9b72b117089c976bf4636c3b115b4166fc186 = $this->env->getExtension("native_profiler");
        $__internal_1ca56a2f2b7074a9c55a26d3f4e9b72b117089c976bf4636c3b115b4166fc186->enter($__internal_1ca56a2f2b7074a9c55a26d3f4e9b72b117089c976bf4636c3b115b4166fc186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_1ca56a2f2b7074a9c55a26d3f4e9b72b117089c976bf4636c3b115b4166fc186->leave($__internal_1ca56a2f2b7074a9c55a26d3f4e9b72b117089c976bf4636c3b115b4166fc186_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */

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
        $__internal_b7e20af7a9ba72ce6162aaf11335b8c544eaf1032ede733841272665988b559c = $this->env->getExtension("native_profiler");
        $__internal_b7e20af7a9ba72ce6162aaf11335b8c544eaf1032ede733841272665988b559c->enter($__internal_b7e20af7a9ba72ce6162aaf11335b8c544eaf1032ede733841272665988b559c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7e20af7a9ba72ce6162aaf11335b8c544eaf1032ede733841272665988b559c->leave($__internal_b7e20af7a9ba72ce6162aaf11335b8c544eaf1032ede733841272665988b559c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3d3d29c5d25cc1af2df5189d4440658c664b82dca043baae5c36e877fbd91528 = $this->env->getExtension("native_profiler");
        $__internal_3d3d29c5d25cc1af2df5189d4440658c664b82dca043baae5c36e877fbd91528->enter($__internal_3d3d29c5d25cc1af2df5189d4440658c664b82dca043baae5c36e877fbd91528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_3d3d29c5d25cc1af2df5189d4440658c664b82dca043baae5c36e877fbd91528->leave($__internal_3d3d29c5d25cc1af2df5189d4440658c664b82dca043baae5c36e877fbd91528_prof);

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

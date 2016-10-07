<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_b43d08099e0f2005f275a5e08aa74d4a808f913fbf192ab917774693db36bb6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_944acdf724acfbad3fa3f0bb130398595eda1b7dbfc5e3dc2a498a4e329e41a0 = $this->env->getExtension("native_profiler");
        $__internal_944acdf724acfbad3fa3f0bb130398595eda1b7dbfc5e3dc2a498a4e329e41a0->enter($__internal_944acdf724acfbad3fa3f0bb130398595eda1b7dbfc5e3dc2a498a4e329e41a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944acdf724acfbad3fa3f0bb130398595eda1b7dbfc5e3dc2a498a4e329e41a0->leave($__internal_944acdf724acfbad3fa3f0bb130398595eda1b7dbfc5e3dc2a498a4e329e41a0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_82f52d814af59daf3fc9f385fd270aa5117819623d8c57e038e6edfa1ec9f9de = $this->env->getExtension("native_profiler");
        $__internal_82f52d814af59daf3fc9f385fd270aa5117819623d8c57e038e6edfa1ec9f9de->enter($__internal_82f52d814af59daf3fc9f385fd270aa5117819623d8c57e038e6edfa1ec9f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_82f52d814af59daf3fc9f385fd270aa5117819623d8c57e038e6edfa1ec9f9de->leave($__internal_82f52d814af59daf3fc9f385fd270aa5117819623d8c57e038e6edfa1ec9f9de_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */

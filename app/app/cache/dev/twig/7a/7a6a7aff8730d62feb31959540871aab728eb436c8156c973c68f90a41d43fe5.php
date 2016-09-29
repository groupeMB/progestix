<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_cd7fc3487b2f3563c7a4b938c6efca676057da786159464e4932b883310f58c8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b19b7fb0b2c621ea23e7ac8dd4555872b3b5e9cf6a6c87f8e1aeebd68bf6d2ab = $this->env->getExtension("native_profiler");
        $__internal_b19b7fb0b2c621ea23e7ac8dd4555872b3b5e9cf6a6c87f8e1aeebd68bf6d2ab->enter($__internal_b19b7fb0b2c621ea23e7ac8dd4555872b3b5e9cf6a6c87f8e1aeebd68bf6d2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b19b7fb0b2c621ea23e7ac8dd4555872b3b5e9cf6a6c87f8e1aeebd68bf6d2ab->leave($__internal_b19b7fb0b2c621ea23e7ac8dd4555872b3b5e9cf6a6c87f8e1aeebd68bf6d2ab_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_30e5351bd0d30c54f4870e8f03bc618f1b6bdf4a7e57d37f7d7e7431e2e0ca38 = $this->env->getExtension("native_profiler");
        $__internal_30e5351bd0d30c54f4870e8f03bc618f1b6bdf4a7e57d37f7d7e7431e2e0ca38->enter($__internal_30e5351bd0d30c54f4870e8f03bc618f1b6bdf4a7e57d37f7d7e7431e2e0ca38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_30e5351bd0d30c54f4870e8f03bc618f1b6bdf4a7e57d37f7d7e7431e2e0ca38->leave($__internal_30e5351bd0d30c54f4870e8f03bc618f1b6bdf4a7e57d37f7d7e7431e2e0ca38_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
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

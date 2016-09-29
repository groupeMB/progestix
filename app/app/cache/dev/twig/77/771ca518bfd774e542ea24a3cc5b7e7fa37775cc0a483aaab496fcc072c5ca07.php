<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_400c88e464b5d0ecd92440555bac666a744b9bb91b09b574cc95c1588c3e13e5 extends Twig_Template
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
        $__internal_07502bd0b04e4e78f8a6ef23dac1c4a09ba844ffd5f4b5a816b114ca52c503ed = $this->env->getExtension("native_profiler");
        $__internal_07502bd0b04e4e78f8a6ef23dac1c4a09ba844ffd5f4b5a816b114ca52c503ed->enter($__internal_07502bd0b04e4e78f8a6ef23dac1c4a09ba844ffd5f4b5a816b114ca52c503ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07502bd0b04e4e78f8a6ef23dac1c4a09ba844ffd5f4b5a816b114ca52c503ed->leave($__internal_07502bd0b04e4e78f8a6ef23dac1c4a09ba844ffd5f4b5a816b114ca52c503ed_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_87fd758f090d9069bac1cea95fa1f3ef70920ff8f843d437221e044f665e38d5 = $this->env->getExtension("native_profiler");
        $__internal_87fd758f090d9069bac1cea95fa1f3ef70920ff8f843d437221e044f665e38d5->enter($__internal_87fd758f090d9069bac1cea95fa1f3ef70920ff8f843d437221e044f665e38d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_87fd758f090d9069bac1cea95fa1f3ef70920ff8f843d437221e044f665e38d5->leave($__internal_87fd758f090d9069bac1cea95fa1f3ef70920ff8f843d437221e044f665e38d5_prof);

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

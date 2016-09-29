<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_ca0bcf4c5841f37d518d684898f417f170ba7e3a4eeb3fb8c24bf22841a64683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
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
        $__internal_19450fc6c409bbdb71a759148cbc2ad678e8d1124ff2494eb70e48b85aee183a = $this->env->getExtension("native_profiler");
        $__internal_19450fc6c409bbdb71a759148cbc2ad678e8d1124ff2494eb70e48b85aee183a->enter($__internal_19450fc6c409bbdb71a759148cbc2ad678e8d1124ff2494eb70e48b85aee183a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19450fc6c409bbdb71a759148cbc2ad678e8d1124ff2494eb70e48b85aee183a->leave($__internal_19450fc6c409bbdb71a759148cbc2ad678e8d1124ff2494eb70e48b85aee183a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8f1b02700d25d343c18a997c8d4703f691e2bb792d0b7ef9170f156d48742682 = $this->env->getExtension("native_profiler");
        $__internal_8f1b02700d25d343c18a997c8d4703f691e2bb792d0b7ef9170f156d48742682->enter($__internal_8f1b02700d25d343c18a997c8d4703f691e2bb792d0b7ef9170f156d48742682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_8f1b02700d25d343c18a997c8d4703f691e2bb792d0b7ef9170f156d48742682->leave($__internal_8f1b02700d25d343c18a997c8d4703f691e2bb792d0b7ef9170f156d48742682_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
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

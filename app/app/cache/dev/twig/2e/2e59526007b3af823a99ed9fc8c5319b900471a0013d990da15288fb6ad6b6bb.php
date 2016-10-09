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
        $__internal_322729b28b84cbb2269c00aa960e6e9ce0b293dee17e8bf2dd846c3a7be761e9 = $this->env->getExtension("native_profiler");
        $__internal_322729b28b84cbb2269c00aa960e6e9ce0b293dee17e8bf2dd846c3a7be761e9->enter($__internal_322729b28b84cbb2269c00aa960e6e9ce0b293dee17e8bf2dd846c3a7be761e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_322729b28b84cbb2269c00aa960e6e9ce0b293dee17e8bf2dd846c3a7be761e9->leave($__internal_322729b28b84cbb2269c00aa960e6e9ce0b293dee17e8bf2dd846c3a7be761e9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_925b21d11ba0acb6c6f86ed7a10b279113ae34984d8fa828995da0a1b896a8d0 = $this->env->getExtension("native_profiler");
        $__internal_925b21d11ba0acb6c6f86ed7a10b279113ae34984d8fa828995da0a1b896a8d0->enter($__internal_925b21d11ba0acb6c6f86ed7a10b279113ae34984d8fa828995da0a1b896a8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_925b21d11ba0acb6c6f86ed7a10b279113ae34984d8fa828995da0a1b896a8d0->leave($__internal_925b21d11ba0acb6c6f86ed7a10b279113ae34984d8fa828995da0a1b896a8d0_prof);

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

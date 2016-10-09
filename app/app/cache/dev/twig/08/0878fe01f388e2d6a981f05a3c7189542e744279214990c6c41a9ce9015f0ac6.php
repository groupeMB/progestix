<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_3b9bccc4998b5e4d96bfe5de015dc694136b99796d2b98733eb2627ba5907774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ae42ed6f53a7e8d00210fc7571d2ef0d092149adcab5adb2e7a1be3e582b30b = $this->env->getExtension("native_profiler");
        $__internal_7ae42ed6f53a7e8d00210fc7571d2ef0d092149adcab5adb2e7a1be3e582b30b->enter($__internal_7ae42ed6f53a7e8d00210fc7571d2ef0d092149adcab5adb2e7a1be3e582b30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae42ed6f53a7e8d00210fc7571d2ef0d092149adcab5adb2e7a1be3e582b30b->leave($__internal_7ae42ed6f53a7e8d00210fc7571d2ef0d092149adcab5adb2e7a1be3e582b30b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_976b44dbca35aafac5f234324619819a44bf5af9f8c40892a97f65c42370c339 = $this->env->getExtension("native_profiler");
        $__internal_976b44dbca35aafac5f234324619819a44bf5af9f8c40892a97f65c42370c339->enter($__internal_976b44dbca35aafac5f234324619819a44bf5af9f8c40892a97f65c42370c339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_976b44dbca35aafac5f234324619819a44bf5af9f8c40892a97f65c42370c339->leave($__internal_976b44dbca35aafac5f234324619819a44bf5af9f8c40892a97f65c42370c339_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

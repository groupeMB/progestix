<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5729e607ec810be589e0aa351ac53a6206c4da04e9fd9c79384d5f3a67b6e2c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_399046953082a9fc3c39e55548349f4926188dab88185aaa5ff4efffa51903f7 = $this->env->getExtension("native_profiler");
        $__internal_399046953082a9fc3c39e55548349f4926188dab88185aaa5ff4efffa51903f7->enter($__internal_399046953082a9fc3c39e55548349f4926188dab88185aaa5ff4efffa51903f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_399046953082a9fc3c39e55548349f4926188dab88185aaa5ff4efffa51903f7->leave($__internal_399046953082a9fc3c39e55548349f4926188dab88185aaa5ff4efffa51903f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9d65bc8bbd2922cf8e8627c4190c23ad3ad6b01304bca4113d1e23cbdb55be8 = $this->env->getExtension("native_profiler");
        $__internal_b9d65bc8bbd2922cf8e8627c4190c23ad3ad6b01304bca4113d1e23cbdb55be8->enter($__internal_b9d65bc8bbd2922cf8e8627c4190c23ad3ad6b01304bca4113d1e23cbdb55be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b9d65bc8bbd2922cf8e8627c4190c23ad3ad6b01304bca4113d1e23cbdb55be8->leave($__internal_b9d65bc8bbd2922cf8e8627c4190c23ad3ad6b01304bca4113d1e23cbdb55be8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

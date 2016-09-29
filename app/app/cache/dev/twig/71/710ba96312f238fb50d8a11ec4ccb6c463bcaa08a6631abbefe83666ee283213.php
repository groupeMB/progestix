<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_d2d85ec14f08b0353cfb4f51618998bee2b5bdfe86f1d1e9a0365918d00a28ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_bbe398641ae2ae725953e07ce2ba6927207b7e5a4438d6da5423e6c6b98a9c6b = $this->env->getExtension("native_profiler");
        $__internal_bbe398641ae2ae725953e07ce2ba6927207b7e5a4438d6da5423e6c6b98a9c6b->enter($__internal_bbe398641ae2ae725953e07ce2ba6927207b7e5a4438d6da5423e6c6b98a9c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe398641ae2ae725953e07ce2ba6927207b7e5a4438d6da5423e6c6b98a9c6b->leave($__internal_bbe398641ae2ae725953e07ce2ba6927207b7e5a4438d6da5423e6c6b98a9c6b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04aba009379eeaa0924341fbf4e2633dcadfb875388428db96817814535bc721 = $this->env->getExtension("native_profiler");
        $__internal_04aba009379eeaa0924341fbf4e2633dcadfb875388428db96817814535bc721->enter($__internal_04aba009379eeaa0924341fbf4e2633dcadfb875388428db96817814535bc721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_04aba009379eeaa0924341fbf4e2633dcadfb875388428db96817814535bc721->leave($__internal_04aba009379eeaa0924341fbf4e2633dcadfb875388428db96817814535bc721_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

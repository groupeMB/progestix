<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_3f92ba855121d0f2234a06b0e457597409c384c977fe875ead498e19d47962af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_710ed14452146f54c3d47cefa27d1cc6cec97602f472c60d137ff6cb492691f5 = $this->env->getExtension("native_profiler");
        $__internal_710ed14452146f54c3d47cefa27d1cc6cec97602f472c60d137ff6cb492691f5->enter($__internal_710ed14452146f54c3d47cefa27d1cc6cec97602f472c60d137ff6cb492691f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_710ed14452146f54c3d47cefa27d1cc6cec97602f472c60d137ff6cb492691f5->leave($__internal_710ed14452146f54c3d47cefa27d1cc6cec97602f472c60d137ff6cb492691f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3019bc35b1856cfc636f02d3f646a53f16cad9f550dc8a74bcdab2ae3b9e2091 = $this->env->getExtension("native_profiler");
        $__internal_3019bc35b1856cfc636f02d3f646a53f16cad9f550dc8a74bcdab2ae3b9e2091->enter($__internal_3019bc35b1856cfc636f02d3f646a53f16cad9f550dc8a74bcdab2ae3b9e2091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_3019bc35b1856cfc636f02d3f646a53f16cad9f550dc8a74bcdab2ae3b9e2091->leave($__internal_3019bc35b1856cfc636f02d3f646a53f16cad9f550dc8a74bcdab2ae3b9e2091_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
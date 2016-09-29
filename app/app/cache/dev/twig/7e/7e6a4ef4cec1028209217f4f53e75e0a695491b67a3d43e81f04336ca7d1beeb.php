<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_5c103ba5315bd3a90d91e9ec6d1f7bee6a52ed16b2ff1d3f1d37ac1d8e94feec extends Twig_Template
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
        $__internal_62a10885afd0672573fcba81325b9b678d088e7a3e14c5cf921c3ea90f478336 = $this->env->getExtension("native_profiler");
        $__internal_62a10885afd0672573fcba81325b9b678d088e7a3e14c5cf921c3ea90f478336->enter($__internal_62a10885afd0672573fcba81325b9b678d088e7a3e14c5cf921c3ea90f478336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62a10885afd0672573fcba81325b9b678d088e7a3e14c5cf921c3ea90f478336->leave($__internal_62a10885afd0672573fcba81325b9b678d088e7a3e14c5cf921c3ea90f478336_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a09f409e4212950099461e8545b6752edff6a03859f42c65ae36aadf4d1a5b33 = $this->env->getExtension("native_profiler");
        $__internal_a09f409e4212950099461e8545b6752edff6a03859f42c65ae36aadf4d1a5b33->enter($__internal_a09f409e4212950099461e8545b6752edff6a03859f42c65ae36aadf4d1a5b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_a09f409e4212950099461e8545b6752edff6a03859f42c65ae36aadf4d1a5b33->leave($__internal_a09f409e4212950099461e8545b6752edff6a03859f42c65ae36aadf4d1a5b33_prof);

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

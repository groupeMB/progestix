<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_bc8df7dba33c2d70b63a1e3d350b1501dec5cb7a297a09fe621bfb224c97ffbb extends Twig_Template
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
        $__internal_e3086ff9b97eaa964467cff0f0efc73d4e7de89730b8c9e88d7e240caa4ad2d1 = $this->env->getExtension("native_profiler");
        $__internal_e3086ff9b97eaa964467cff0f0efc73d4e7de89730b8c9e88d7e240caa4ad2d1->enter($__internal_e3086ff9b97eaa964467cff0f0efc73d4e7de89730b8c9e88d7e240caa4ad2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3086ff9b97eaa964467cff0f0efc73d4e7de89730b8c9e88d7e240caa4ad2d1->leave($__internal_e3086ff9b97eaa964467cff0f0efc73d4e7de89730b8c9e88d7e240caa4ad2d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5e8ab42a3837e5591565accea98fac50d18369045eb9a4d9cdfedcf65ca072d = $this->env->getExtension("native_profiler");
        $__internal_c5e8ab42a3837e5591565accea98fac50d18369045eb9a4d9cdfedcf65ca072d->enter($__internal_c5e8ab42a3837e5591565accea98fac50d18369045eb9a4d9cdfedcf65ca072d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_c5e8ab42a3837e5591565accea98fac50d18369045eb9a4d9cdfedcf65ca072d->leave($__internal_c5e8ab42a3837e5591565accea98fac50d18369045eb9a4d9cdfedcf65ca072d_prof);

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

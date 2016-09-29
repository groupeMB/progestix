<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_fab13dfa115914433ff73a6ed8f830339ea1d85c993441b06fbc638d697258db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_920e5a4026aa40f942b7cde0dc6c10d0f540153dc84d5ba1f69c503f27a64f09 = $this->env->getExtension("native_profiler");
        $__internal_920e5a4026aa40f942b7cde0dc6c10d0f540153dc84d5ba1f69c503f27a64f09->enter($__internal_920e5a4026aa40f942b7cde0dc6c10d0f540153dc84d5ba1f69c503f27a64f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_920e5a4026aa40f942b7cde0dc6c10d0f540153dc84d5ba1f69c503f27a64f09->leave($__internal_920e5a4026aa40f942b7cde0dc6c10d0f540153dc84d5ba1f69c503f27a64f09_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20071285c7fe84d9c1c2d975ed092a4885876d402fa3e758b15c79c2827c1578 = $this->env->getExtension("native_profiler");
        $__internal_20071285c7fe84d9c1c2d975ed092a4885876d402fa3e758b15c79c2827c1578->enter($__internal_20071285c7fe84d9c1c2d975ed092a4885876d402fa3e758b15c79c2827c1578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_20071285c7fe84d9c1c2d975ed092a4885876d402fa3e758b15c79c2827c1578->leave($__internal_20071285c7fe84d9c1c2d975ed092a4885876d402fa3e758b15c79c2827c1578_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_da9b5fd8061fabb7ba54603a72f35db01656c0d26bf21e7dcf7900803210e8d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_3f1e09420fff805304f11feb280eda05b51fa4f9a71bdede8a17711a0ac90b60 = $this->env->getExtension("native_profiler");
        $__internal_3f1e09420fff805304f11feb280eda05b51fa4f9a71bdede8a17711a0ac90b60->enter($__internal_3f1e09420fff805304f11feb280eda05b51fa4f9a71bdede8a17711a0ac90b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f1e09420fff805304f11feb280eda05b51fa4f9a71bdede8a17711a0ac90b60->leave($__internal_3f1e09420fff805304f11feb280eda05b51fa4f9a71bdede8a17711a0ac90b60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_021b311f26ed0740593d210f5be670d3cd3dbf4581760ea2c835faa5ed8a0bb4 = $this->env->getExtension("native_profiler");
        $__internal_021b311f26ed0740593d210f5be670d3cd3dbf4581760ea2c835faa5ed8a0bb4->enter($__internal_021b311f26ed0740593d210f5be670d3cd3dbf4581760ea2c835faa5ed8a0bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_021b311f26ed0740593d210f5be670d3cd3dbf4581760ea2c835faa5ed8a0bb4->leave($__internal_021b311f26ed0740593d210f5be670d3cd3dbf4581760ea2c835faa5ed8a0bb4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

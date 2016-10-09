<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_c96d53ee8864fb7518edf4a2efa923e99eacb8029f0a87dd70182ea07ab99112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_29d469fb3528edbfef1bfe4e7ba487c239673a1ff8778f40a2a72567264db115 = $this->env->getExtension("native_profiler");
        $__internal_29d469fb3528edbfef1bfe4e7ba487c239673a1ff8778f40a2a72567264db115->enter($__internal_29d469fb3528edbfef1bfe4e7ba487c239673a1ff8778f40a2a72567264db115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d469fb3528edbfef1bfe4e7ba487c239673a1ff8778f40a2a72567264db115->leave($__internal_29d469fb3528edbfef1bfe4e7ba487c239673a1ff8778f40a2a72567264db115_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1fad9c83a33935c63fd6550fa1e394d6b0f07f9b8b61c9521a6f57c82518da6 = $this->env->getExtension("native_profiler");
        $__internal_c1fad9c83a33935c63fd6550fa1e394d6b0f07f9b8b61c9521a6f57c82518da6->enter($__internal_c1fad9c83a33935c63fd6550fa1e394d6b0f07f9b8b61c9521a6f57c82518da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c1fad9c83a33935c63fd6550fa1e394d6b0f07f9b8b61c9521a6f57c82518da6->leave($__internal_c1fad9c83a33935c63fd6550fa1e394d6b0f07f9b8b61c9521a6f57c82518da6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_109fab78270e079ec75213572adda7403d6df0dbe18805504ae8f5fa98510a9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_574f464352564e68aabfd2e5fd90cf576bcd6c75adc2213f80371b0c64e3d117 = $this->env->getExtension("native_profiler");
        $__internal_574f464352564e68aabfd2e5fd90cf576bcd6c75adc2213f80371b0c64e3d117->enter($__internal_574f464352564e68aabfd2e5fd90cf576bcd6c75adc2213f80371b0c64e3d117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_574f464352564e68aabfd2e5fd90cf576bcd6c75adc2213f80371b0c64e3d117->leave($__internal_574f464352564e68aabfd2e5fd90cf576bcd6c75adc2213f80371b0c64e3d117_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de8aada3b945c5dbaec0f883438f099355f6331f20cd65c9cafc10978bb2fc60 = $this->env->getExtension("native_profiler");
        $__internal_de8aada3b945c5dbaec0f883438f099355f6331f20cd65c9cafc10978bb2fc60->enter($__internal_de8aada3b945c5dbaec0f883438f099355f6331f20cd65c9cafc10978bb2fc60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_de8aada3b945c5dbaec0f883438f099355f6331f20cd65c9cafc10978bb2fc60->leave($__internal_de8aada3b945c5dbaec0f883438f099355f6331f20cd65c9cafc10978bb2fc60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

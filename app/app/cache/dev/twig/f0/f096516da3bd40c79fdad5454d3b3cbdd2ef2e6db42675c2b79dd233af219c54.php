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
        $__internal_0abb1c827410755cf69c37f4442969477824334a36f712ed1d81707b6708a2f8 = $this->env->getExtension("native_profiler");
        $__internal_0abb1c827410755cf69c37f4442969477824334a36f712ed1d81707b6708a2f8->enter($__internal_0abb1c827410755cf69c37f4442969477824334a36f712ed1d81707b6708a2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0abb1c827410755cf69c37f4442969477824334a36f712ed1d81707b6708a2f8->leave($__internal_0abb1c827410755cf69c37f4442969477824334a36f712ed1d81707b6708a2f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5656836c8da6eb6f6b7f171676a7a09bad17bebd3239f5b1c77ed8f11cdc3c0a = $this->env->getExtension("native_profiler");
        $__internal_5656836c8da6eb6f6b7f171676a7a09bad17bebd3239f5b1c77ed8f11cdc3c0a->enter($__internal_5656836c8da6eb6f6b7f171676a7a09bad17bebd3239f5b1c77ed8f11cdc3c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5656836c8da6eb6f6b7f171676a7a09bad17bebd3239f5b1c77ed8f11cdc3c0a->leave($__internal_5656836c8da6eb6f6b7f171676a7a09bad17bebd3239f5b1c77ed8f11cdc3c0a_prof);

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

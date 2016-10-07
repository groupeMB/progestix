<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_3fa0f5e445796eb003203f0c8280300080151f756dbc456b77836e15ff0877dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9b53e546ff65c8c1e60aa39da3182cc85aa21aaa1ab75d1f0226258fe157734c = $this->env->getExtension("native_profiler");
        $__internal_9b53e546ff65c8c1e60aa39da3182cc85aa21aaa1ab75d1f0226258fe157734c->enter($__internal_9b53e546ff65c8c1e60aa39da3182cc85aa21aaa1ab75d1f0226258fe157734c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b53e546ff65c8c1e60aa39da3182cc85aa21aaa1ab75d1f0226258fe157734c->leave($__internal_9b53e546ff65c8c1e60aa39da3182cc85aa21aaa1ab75d1f0226258fe157734c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b17c11ed4869629831c78db651aeacd3f04d003708c053cdeec3ef957469f44 = $this->env->getExtension("native_profiler");
        $__internal_0b17c11ed4869629831c78db651aeacd3f04d003708c053cdeec3ef957469f44->enter($__internal_0b17c11ed4869629831c78db651aeacd3f04d003708c053cdeec3ef957469f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_0b17c11ed4869629831c78db651aeacd3f04d003708c053cdeec3ef957469f44->leave($__internal_0b17c11ed4869629831c78db651aeacd3f04d003708c053cdeec3ef957469f44_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

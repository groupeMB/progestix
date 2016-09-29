<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_ac76c92b7911143bdb2948b915c3e71c935f08ab0157cc26b9e6345fcf886d8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_453465e7ca81a095b927ea8b67257abd41828c8e17d86a0f01328d1444abd91c = $this->env->getExtension("native_profiler");
        $__internal_453465e7ca81a095b927ea8b67257abd41828c8e17d86a0f01328d1444abd91c->enter($__internal_453465e7ca81a095b927ea8b67257abd41828c8e17d86a0f01328d1444abd91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_453465e7ca81a095b927ea8b67257abd41828c8e17d86a0f01328d1444abd91c->leave($__internal_453465e7ca81a095b927ea8b67257abd41828c8e17d86a0f01328d1444abd91c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d0a30cd0007a43030f61a735dd598b2401801028ae6b78037956e28e08c5134 = $this->env->getExtension("native_profiler");
        $__internal_8d0a30cd0007a43030f61a735dd598b2401801028ae6b78037956e28e08c5134->enter($__internal_8d0a30cd0007a43030f61a735dd598b2401801028ae6b78037956e28e08c5134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_8d0a30cd0007a43030f61a735dd598b2401801028ae6b78037956e28e08c5134->leave($__internal_8d0a30cd0007a43030f61a735dd598b2401801028ae6b78037956e28e08c5134_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

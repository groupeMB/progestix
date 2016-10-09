<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_21f9219151803053e143a6f1fc8e1b5482697e1639690ce9561059f6a388c441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e5193af018246de7bfa61ed002b8217fc9da3fb9c031f8993c30328058edf702 = $this->env->getExtension("native_profiler");
        $__internal_e5193af018246de7bfa61ed002b8217fc9da3fb9c031f8993c30328058edf702->enter($__internal_e5193af018246de7bfa61ed002b8217fc9da3fb9c031f8993c30328058edf702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5193af018246de7bfa61ed002b8217fc9da3fb9c031f8993c30328058edf702->leave($__internal_e5193af018246de7bfa61ed002b8217fc9da3fb9c031f8993c30328058edf702_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ad9707bc15f95e0789f097486505deb518e094505f4eaef6600d34588cc05ba = $this->env->getExtension("native_profiler");
        $__internal_6ad9707bc15f95e0789f097486505deb518e094505f4eaef6600d34588cc05ba->enter($__internal_6ad9707bc15f95e0789f097486505deb518e094505f4eaef6600d34588cc05ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6ad9707bc15f95e0789f097486505deb518e094505f4eaef6600d34588cc05ba->leave($__internal_6ad9707bc15f95e0789f097486505deb518e094505f4eaef6600d34588cc05ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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

<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_5ee938c8ce1c806cc68fb9182a404efc476d7014515b0bc4c8659c677c3fdc0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_e9e48e40687691ed6662964db19bfe103feb10925608900357dde0072d940a9c = $this->env->getExtension("native_profiler");
        $__internal_e9e48e40687691ed6662964db19bfe103feb10925608900357dde0072d940a9c->enter($__internal_e9e48e40687691ed6662964db19bfe103feb10925608900357dde0072d940a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9e48e40687691ed6662964db19bfe103feb10925608900357dde0072d940a9c->leave($__internal_e9e48e40687691ed6662964db19bfe103feb10925608900357dde0072d940a9c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e23ac31e3d6432f1a3c076cb1fdd879aeea4b3a32f201be64c2c04950558d8a3 = $this->env->getExtension("native_profiler");
        $__internal_e23ac31e3d6432f1a3c076cb1fdd879aeea4b3a32f201be64c2c04950558d8a3->enter($__internal_e23ac31e3d6432f1a3c076cb1fdd879aeea4b3a32f201be64c2c04950558d8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e23ac31e3d6432f1a3c076cb1fdd879aeea4b3a32f201be64c2c04950558d8a3->leave($__internal_e23ac31e3d6432f1a3c076cb1fdd879aeea4b3a32f201be64c2c04950558d8a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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

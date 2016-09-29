<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_1ee2553c43d6a5814b61ed8bc4c73dc4a456c6f43054a7e902fd43381b4bbe7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_28f10809990804c4ea9edf10ae8e5cb7c7d2ccd209e9d59f626a03c9c5f92285 = $this->env->getExtension("native_profiler");
        $__internal_28f10809990804c4ea9edf10ae8e5cb7c7d2ccd209e9d59f626a03c9c5f92285->enter($__internal_28f10809990804c4ea9edf10ae8e5cb7c7d2ccd209e9d59f626a03c9c5f92285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f10809990804c4ea9edf10ae8e5cb7c7d2ccd209e9d59f626a03c9c5f92285->leave($__internal_28f10809990804c4ea9edf10ae8e5cb7c7d2ccd209e9d59f626a03c9c5f92285_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63aea5fc501ed6bf2f48e86c6225c1b93ecc35d2b8000cf4b4bb3ddeb1c84810 = $this->env->getExtension("native_profiler");
        $__internal_63aea5fc501ed6bf2f48e86c6225c1b93ecc35d2b8000cf4b4bb3ddeb1c84810->enter($__internal_63aea5fc501ed6bf2f48e86c6225c1b93ecc35d2b8000cf4b4bb3ddeb1c84810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_63aea5fc501ed6bf2f48e86c6225c1b93ecc35d2b8000cf4b4bb3ddeb1c84810->leave($__internal_63aea5fc501ed6bf2f48e86c6225c1b93ecc35d2b8000cf4b4bb3ddeb1c84810_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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

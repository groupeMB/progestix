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
        $__internal_8bd792014f4ee41affaaf594950404c1e8bb70f60c8ebc325f066b49c13f55db = $this->env->getExtension("native_profiler");
        $__internal_8bd792014f4ee41affaaf594950404c1e8bb70f60c8ebc325f066b49c13f55db->enter($__internal_8bd792014f4ee41affaaf594950404c1e8bb70f60c8ebc325f066b49c13f55db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bd792014f4ee41affaaf594950404c1e8bb70f60c8ebc325f066b49c13f55db->leave($__internal_8bd792014f4ee41affaaf594950404c1e8bb70f60c8ebc325f066b49c13f55db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22b8fdffee7eb3ec7abe3a8cd1dfe245602b5438c81ed0c4ac174ec60198d92d = $this->env->getExtension("native_profiler");
        $__internal_22b8fdffee7eb3ec7abe3a8cd1dfe245602b5438c81ed0c4ac174ec60198d92d->enter($__internal_22b8fdffee7eb3ec7abe3a8cd1dfe245602b5438c81ed0c4ac174ec60198d92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_22b8fdffee7eb3ec7abe3a8cd1dfe245602b5438c81ed0c4ac174ec60198d92d->leave($__internal_22b8fdffee7eb3ec7abe3a8cd1dfe245602b5438c81ed0c4ac174ec60198d92d_prof);

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

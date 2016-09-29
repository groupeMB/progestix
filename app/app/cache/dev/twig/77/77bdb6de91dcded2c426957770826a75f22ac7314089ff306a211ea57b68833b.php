<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1472414b99b5644a524074e93f184cbe0570ffb14964069e712286eceeaab3e6 extends Twig_Template
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
        $__internal_b1dc2b44e1430961fb64ef2b48589e599f1b6b4d22a92ddbb8be13fdb68fd170 = $this->env->getExtension("native_profiler");
        $__internal_b1dc2b44e1430961fb64ef2b48589e599f1b6b4d22a92ddbb8be13fdb68fd170->enter($__internal_b1dc2b44e1430961fb64ef2b48589e599f1b6b4d22a92ddbb8be13fdb68fd170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1dc2b44e1430961fb64ef2b48589e599f1b6b4d22a92ddbb8be13fdb68fd170->leave($__internal_b1dc2b44e1430961fb64ef2b48589e599f1b6b4d22a92ddbb8be13fdb68fd170_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_493f9a52f089c3139accdfe2de29b83a34ff00ea07b27381486197585d22bf7b = $this->env->getExtension("native_profiler");
        $__internal_493f9a52f089c3139accdfe2de29b83a34ff00ea07b27381486197585d22bf7b->enter($__internal_493f9a52f089c3139accdfe2de29b83a34ff00ea07b27381486197585d22bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_493f9a52f089c3139accdfe2de29b83a34ff00ea07b27381486197585d22bf7b->leave($__internal_493f9a52f089c3139accdfe2de29b83a34ff00ea07b27381486197585d22bf7b_prof);

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

<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a32026f6599ddb8587c7948d328d1e784de5ba41b01642311e1434eaaaf488db extends Twig_Template
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
        $__internal_6ee4f42de4b4e65f49ac0c5747f2123705b5ca9a0ac8277c732ebd3f2a613705 = $this->env->getExtension("native_profiler");
        $__internal_6ee4f42de4b4e65f49ac0c5747f2123705b5ca9a0ac8277c732ebd3f2a613705->enter($__internal_6ee4f42de4b4e65f49ac0c5747f2123705b5ca9a0ac8277c732ebd3f2a613705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ee4f42de4b4e65f49ac0c5747f2123705b5ca9a0ac8277c732ebd3f2a613705->leave($__internal_6ee4f42de4b4e65f49ac0c5747f2123705b5ca9a0ac8277c732ebd3f2a613705_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95719ad6f88644c98b29c056964509f71fdb2f4aba8050bd032c7b748fa0b974 = $this->env->getExtension("native_profiler");
        $__internal_95719ad6f88644c98b29c056964509f71fdb2f4aba8050bd032c7b748fa0b974->enter($__internal_95719ad6f88644c98b29c056964509f71fdb2f4aba8050bd032c7b748fa0b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_95719ad6f88644c98b29c056964509f71fdb2f4aba8050bd032c7b748fa0b974->leave($__internal_95719ad6f88644c98b29c056964509f71fdb2f4aba8050bd032c7b748fa0b974_prof);

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

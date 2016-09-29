<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ed6ea79d6f020be93719b1ba8e7407ce200c652f82958ce8ce01eae61b84cc79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_6abb12018dc38c044f45ee7539c710626884e52737adb7794bbf4739ad5c29b7 = $this->env->getExtension("native_profiler");
        $__internal_6abb12018dc38c044f45ee7539c710626884e52737adb7794bbf4739ad5c29b7->enter($__internal_6abb12018dc38c044f45ee7539c710626884e52737adb7794bbf4739ad5c29b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6abb12018dc38c044f45ee7539c710626884e52737adb7794bbf4739ad5c29b7->leave($__internal_6abb12018dc38c044f45ee7539c710626884e52737adb7794bbf4739ad5c29b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46c3728812e46cddd4bcb9140eeb6614e101a967adbabb76a10d63042b8c2069 = $this->env->getExtension("native_profiler");
        $__internal_46c3728812e46cddd4bcb9140eeb6614e101a967adbabb76a10d63042b8c2069->enter($__internal_46c3728812e46cddd4bcb9140eeb6614e101a967adbabb76a10d63042b8c2069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_46c3728812e46cddd4bcb9140eeb6614e101a967adbabb76a10d63042b8c2069->leave($__internal_46c3728812e46cddd4bcb9140eeb6614e101a967adbabb76a10d63042b8c2069_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */

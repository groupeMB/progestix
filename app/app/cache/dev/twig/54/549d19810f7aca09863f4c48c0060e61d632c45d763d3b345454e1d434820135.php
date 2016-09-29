<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_0c4fe30674ca959cad526102d34f1af12f88e453130ff01f04f67f0fb8846621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_016c152faed78b5189ede842a726acc6d7c73dd4e0036682e93f1ca81e566c41 = $this->env->getExtension("native_profiler");
        $__internal_016c152faed78b5189ede842a726acc6d7c73dd4e0036682e93f1ca81e566c41->enter($__internal_016c152faed78b5189ede842a726acc6d7c73dd4e0036682e93f1ca81e566c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016c152faed78b5189ede842a726acc6d7c73dd4e0036682e93f1ca81e566c41->leave($__internal_016c152faed78b5189ede842a726acc6d7c73dd4e0036682e93f1ca81e566c41_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cf5f9bf7595c0f2956bae4535ccc2cc8e2ef3ed6d87591fe29129fd1049832d6 = $this->env->getExtension("native_profiler");
        $__internal_cf5f9bf7595c0f2956bae4535ccc2cc8e2ef3ed6d87591fe29129fd1049832d6->enter($__internal_cf5f9bf7595c0f2956bae4535ccc2cc8e2ef3ed6d87591fe29129fd1049832d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_cf5f9bf7595c0f2956bae4535ccc2cc8e2ef3ed6d87591fe29129fd1049832d6->leave($__internal_cf5f9bf7595c0f2956bae4535ccc2cc8e2ef3ed6d87591fe29129fd1049832d6_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_9418fa50d1308fcb33509f4f7b46d6086c995b64ba4cf7c37eb7f06ac35c8aba = $this->env->getExtension("native_profiler");
        $__internal_9418fa50d1308fcb33509f4f7b46d6086c995b64ba4cf7c37eb7f06ac35c8aba->enter($__internal_9418fa50d1308fcb33509f4f7b46d6086c995b64ba4cf7c37eb7f06ac35c8aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_9418fa50d1308fcb33509f4f7b46d6086c995b64ba4cf7c37eb7f06ac35c8aba->leave($__internal_9418fa50d1308fcb33509f4f7b46d6086c995b64ba4cf7c37eb7f06ac35c8aba_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_28594600d48a6fc9fae0d9effa5e89c3b1e8e7aee6ced6b4119711076126aaf6 = $this->env->getExtension("native_profiler");
        $__internal_28594600d48a6fc9fae0d9effa5e89c3b1e8e7aee6ced6b4119711076126aaf6->enter($__internal_28594600d48a6fc9fae0d9effa5e89c3b1e8e7aee6ced6b4119711076126aaf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_28594600d48a6fc9fae0d9effa5e89c3b1e8e7aee6ced6b4119711076126aaf6->leave($__internal_28594600d48a6fc9fae0d9effa5e89c3b1e8e7aee6ced6b4119711076126aaf6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */

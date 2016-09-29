<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_45fa6b7e58d3d4e2f43aea707c3a944320867411f37a7c7832cfc168471db9c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03c3993088dadf4ca1d870eac9508f05fbe051ea60138a589d068e9760232fd9 = $this->env->getExtension("native_profiler");
        $__internal_03c3993088dadf4ca1d870eac9508f05fbe051ea60138a589d068e9760232fd9->enter($__internal_03c3993088dadf4ca1d870eac9508f05fbe051ea60138a589d068e9760232fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03c3993088dadf4ca1d870eac9508f05fbe051ea60138a589d068e9760232fd9->leave($__internal_03c3993088dadf4ca1d870eac9508f05fbe051ea60138a589d068e9760232fd9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb4af09c4711f692094a8001f9f2170781a7090bc343e4c80ad05f0c9906aa45 = $this->env->getExtension("native_profiler");
        $__internal_fb4af09c4711f692094a8001f9f2170781a7090bc343e4c80ad05f0c9906aa45->enter($__internal_fb4af09c4711f692094a8001f9f2170781a7090bc343e4c80ad05f0c9906aa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_fb4af09c4711f692094a8001f9f2170781a7090bc343e4c80ad05f0c9906aa45->leave($__internal_fb4af09c4711f692094a8001f9f2170781a7090bc343e4c80ad05f0c9906aa45_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

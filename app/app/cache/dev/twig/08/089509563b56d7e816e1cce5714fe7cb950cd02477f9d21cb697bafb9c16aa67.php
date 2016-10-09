<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_504480b961d8e9782faf5a0209d16036a2bd308f43978e98387d86e10a0d098b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_9681ec215477a765d844afcbe06d839052f4188e17c02b6e3c5d165ebe724fba = $this->env->getExtension("native_profiler");
        $__internal_9681ec215477a765d844afcbe06d839052f4188e17c02b6e3c5d165ebe724fba->enter($__internal_9681ec215477a765d844afcbe06d839052f4188e17c02b6e3c5d165ebe724fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9681ec215477a765d844afcbe06d839052f4188e17c02b6e3c5d165ebe724fba->leave($__internal_9681ec215477a765d844afcbe06d839052f4188e17c02b6e3c5d165ebe724fba_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_051f34db83e8c0baba00e4aba45afc36f10b55987e7326b993afd5c76d707b3e = $this->env->getExtension("native_profiler");
        $__internal_051f34db83e8c0baba00e4aba45afc36f10b55987e7326b993afd5c76d707b3e->enter($__internal_051f34db83e8c0baba00e4aba45afc36f10b55987e7326b993afd5c76d707b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_051f34db83e8c0baba00e4aba45afc36f10b55987e7326b993afd5c76d707b3e->leave($__internal_051f34db83e8c0baba00e4aba45afc36f10b55987e7326b993afd5c76d707b3e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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

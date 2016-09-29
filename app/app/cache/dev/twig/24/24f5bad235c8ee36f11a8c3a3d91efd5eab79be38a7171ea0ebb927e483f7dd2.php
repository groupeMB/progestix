<?php

/* KnpMenuBundle::menu.html.twig */
class __TwigTemplate_56b43d5803e0148c2ab5b67d9b2f01dbc57aa8d51b4dfa11b46a6786b6dbdd05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "KnpMenuBundle::menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc7d9baafa77c34b91ad86519da8acc9d1b34e1903da8739796d3dac62cf4c70 = $this->env->getExtension("native_profiler");
        $__internal_dc7d9baafa77c34b91ad86519da8acc9d1b34e1903da8739796d3dac62cf4c70->enter($__internal_dc7d9baafa77c34b91ad86519da8acc9d1b34e1903da8739796d3dac62cf4c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpMenuBundle::menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc7d9baafa77c34b91ad86519da8acc9d1b34e1903da8739796d3dac62cf4c70->leave($__internal_dc7d9baafa77c34b91ad86519da8acc9d1b34e1903da8739796d3dac62cf4c70_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_405372e5836c4a0fcb4c5a15e44e79b9accb88f4e8e4fbb9ff3f03e9e3c04335 = $this->env->getExtension("native_profiler");
        $__internal_405372e5836c4a0fcb4c5a15e44e79b9accb88f4e8e4fbb9ff3f03e9e3c04335->enter($__internal_405372e5836c4a0fcb4c5a15e44e79b9accb88f4e8e4fbb9ff3f03e9e3c04335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_405372e5836c4a0fcb4c5a15e44e79b9accb88f4e8e4fbb9ff3f03e9e3c04335->leave($__internal_405372e5836c4a0fcb4c5a15e44e79b9accb88f4e8e4fbb9ff3f03e9e3c04335_prof);

    }

    public function getTemplateName()
    {
        return "KnpMenuBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block label %}*/
/*     {%- set translation_domain = item.extra('translation_domain', 'messages') -%}*/
/*     {%- set label = item.label -%}*/
/*     {%- if translation_domain is not same as(false) -%}*/
/*         {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}*/
/*     {%- endif -%}*/
/*     {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}*/
/* {% endblock %}*/
/* */

<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_a129586c43e8f6ca01022fe9064e4c932cef82e1e67b6106c264c055d3174d65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_3209a3d8fb6810b7f65841e3ff8d8c248f4c9710addcd8f6a0f7b95f31d154b8 = $this->env->getExtension("native_profiler");
        $__internal_3209a3d8fb6810b7f65841e3ff8d8c248f4c9710addcd8f6a0f7b95f31d154b8->enter($__internal_3209a3d8fb6810b7f65841e3ff8d8c248f4c9710addcd8f6a0f7b95f31d154b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3209a3d8fb6810b7f65841e3ff8d8c248f4c9710addcd8f6a0f7b95f31d154b8->leave($__internal_3209a3d8fb6810b7f65841e3ff8d8c248f4c9710addcd8f6a0f7b95f31d154b8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_87aa567d8f84960206a0a916f42dcd06d24a92d800a1ff1197c8ea4c8a85467d = $this->env->getExtension("native_profiler");
        $__internal_87aa567d8f84960206a0a916f42dcd06d24a92d800a1ff1197c8ea4c8a85467d->enter($__internal_87aa567d8f84960206a0a916f42dcd06d24a92d800a1ff1197c8ea4c8a85467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_87aa567d8f84960206a0a916f42dcd06d24a92d800a1ff1197c8ea4c8a85467d->leave($__internal_87aa567d8f84960206a0a916f42dcd06d24a92d800a1ff1197c8ea4c8a85467d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */

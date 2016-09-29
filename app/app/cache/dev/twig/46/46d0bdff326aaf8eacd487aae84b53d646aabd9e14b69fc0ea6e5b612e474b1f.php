<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_1ff9f284d4660ab08ea15cba8a9e8ab9670494537afdb21e071f2ce3bfa165f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_0a89842bd567fd4ee29f2308c5c35d4bb905bbffef6d73eb74815696c6d705ba = $this->env->getExtension("native_profiler");
        $__internal_0a89842bd567fd4ee29f2308c5c35d4bb905bbffef6d73eb74815696c6d705ba->enter($__internal_0a89842bd567fd4ee29f2308c5c35d4bb905bbffef6d73eb74815696c6d705ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a89842bd567fd4ee29f2308c5c35d4bb905bbffef6d73eb74815696c6d705ba->leave($__internal_0a89842bd567fd4ee29f2308c5c35d4bb905bbffef6d73eb74815696c6d705ba_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9739db06128769f8a8d8b47b68f576a0d8e2de94a0bb9101bec990d3243b9668 = $this->env->getExtension("native_profiler");
        $__internal_9739db06128769f8a8d8b47b68f576a0d8e2de94a0bb9101bec990d3243b9668->enter($__internal_9739db06128769f8a8d8b47b68f576a0d8e2de94a0bb9101bec990d3243b9668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_9739db06128769f8a8d8b47b68f576a0d8e2de94a0bb9101bec990d3243b9668->leave($__internal_9739db06128769f8a8d8b47b68f576a0d8e2de94a0bb9101bec990d3243b9668_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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

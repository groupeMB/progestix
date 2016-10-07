<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_9f9ec6fda3adf136a07f401e2b37ae9e789086ebbd11fa1c04559417f82ac911 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a01a6238d05b889a8d0d399af8b98024f3a2b33b4359f13529b20dc736229287 = $this->env->getExtension("native_profiler");
        $__internal_a01a6238d05b889a8d0d399af8b98024f3a2b33b4359f13529b20dc736229287->enter($__internal_a01a6238d05b889a8d0d399af8b98024f3a2b33b4359f13529b20dc736229287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a01a6238d05b889a8d0d399af8b98024f3a2b33b4359f13529b20dc736229287->leave($__internal_a01a6238d05b889a8d0d399af8b98024f3a2b33b4359f13529b20dc736229287_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */

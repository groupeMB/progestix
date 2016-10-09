<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_491a71cef27886449d8bb1d43c70fd2044625623de005f93efe24fd53beceaa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e735ac62470df471eaad148689651cd8cf9f1c16b099dd957cca0a3b4f9cb3c6 = $this->env->getExtension("native_profiler");
        $__internal_e735ac62470df471eaad148689651cd8cf9f1c16b099dd957cca0a3b4f9cb3c6->enter($__internal_e735ac62470df471eaad148689651cd8cf9f1c16b099dd957cca0a3b4f9cb3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e735ac62470df471eaad148689651cd8cf9f1c16b099dd957cca0a3b4f9cb3c6->leave($__internal_e735ac62470df471eaad148689651cd8cf9f1c16b099dd957cca0a3b4f9cb3c6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */

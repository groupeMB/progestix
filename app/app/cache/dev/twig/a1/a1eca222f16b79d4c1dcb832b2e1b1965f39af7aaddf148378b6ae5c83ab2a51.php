<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_34213f2afcf6e78760a08529fc27cf8099cc036c0f93c3d4cb312a9bc065c71d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de964382c43bb4f471f55fe3327926dad3b9cb6433e9a1d72901a87fc45b13af = $this->env->getExtension("native_profiler");
        $__internal_de964382c43bb4f471f55fe3327926dad3b9cb6433e9a1d72901a87fc45b13af->enter($__internal_de964382c43bb4f471f55fe3327926dad3b9cb6433e9a1d72901a87fc45b13af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de964382c43bb4f471f55fe3327926dad3b9cb6433e9a1d72901a87fc45b13af->leave($__internal_de964382c43bb4f471f55fe3327926dad3b9cb6433e9a1d72901a87fc45b13af_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */

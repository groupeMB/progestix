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
        $__internal_fb716d85308feefc961fd14f1e668d8cf80909aca866432b40e1ea1255f999d8 = $this->env->getExtension("native_profiler");
        $__internal_fb716d85308feefc961fd14f1e668d8cf80909aca866432b40e1ea1255f999d8->enter($__internal_fb716d85308feefc961fd14f1e668d8cf80909aca866432b40e1ea1255f999d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb716d85308feefc961fd14f1e668d8cf80909aca866432b40e1ea1255f999d8->leave($__internal_fb716d85308feefc961fd14f1e668d8cf80909aca866432b40e1ea1255f999d8_prof);

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

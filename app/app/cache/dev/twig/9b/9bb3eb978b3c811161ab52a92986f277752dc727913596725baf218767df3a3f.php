<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_cf365e60ee7fd0ade60d88a63753d393b24c4134fcd3a321dfbfc53abda61bca extends Twig_Template
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
        $__internal_247d0fbfce13489220d24645c28b11fac3ebd2c0743b3c12d8b0ea7bd9f91558 = $this->env->getExtension("native_profiler");
        $__internal_247d0fbfce13489220d24645c28b11fac3ebd2c0743b3c12d8b0ea7bd9f91558->enter($__internal_247d0fbfce13489220d24645c28b11fac3ebd2c0743b3c12d8b0ea7bd9f91558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247d0fbfce13489220d24645c28b11fac3ebd2c0743b3c12d8b0ea7bd9f91558->leave($__internal_247d0fbfce13489220d24645c28b11fac3ebd2c0743b3c12d8b0ea7bd9f91558_prof);

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

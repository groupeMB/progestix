<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_f3b135d9ff7e498248eb95b00b4965f4189ecc84b3eed0a614f8fcd2f2987764 extends Twig_Template
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
        $__internal_8cbe4b98cde7d9e1540bcb6a57db4d043de3c2626daa7c3f7162996db235d82f = $this->env->getExtension("native_profiler");
        $__internal_8cbe4b98cde7d9e1540bcb6a57db4d043de3c2626daa7c3f7162996db235d82f->enter($__internal_8cbe4b98cde7d9e1540bcb6a57db4d043de3c2626daa7c3f7162996db235d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbe4b98cde7d9e1540bcb6a57db4d043de3c2626daa7c3f7162996db235d82f->leave($__internal_8cbe4b98cde7d9e1540bcb6a57db4d043de3c2626daa7c3f7162996db235d82f_prof);

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
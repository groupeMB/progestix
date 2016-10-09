<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_a9b5487772adfdc49844055569a2a1dd9b659a735c438bc4e2583e99218846f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8309fdbf145067b09aa198e9b02c12fe6456f66ae6922924d08ab0f8889dae2 = $this->env->getExtension("native_profiler");
        $__internal_f8309fdbf145067b09aa198e9b02c12fe6456f66ae6922924d08ab0f8889dae2->enter($__internal_f8309fdbf145067b09aa198e9b02c12fe6456f66ae6922924d08ab0f8889dae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8309fdbf145067b09aa198e9b02c12fe6456f66ae6922924d08ab0f8889dae2->leave($__internal_f8309fdbf145067b09aa198e9b02c12fe6456f66ae6922924d08ab0f8889dae2_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */

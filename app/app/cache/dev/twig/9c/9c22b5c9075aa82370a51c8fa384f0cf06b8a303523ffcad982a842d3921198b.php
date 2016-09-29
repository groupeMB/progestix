<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_5b474cbb22ba8a8b95e2ba85cb027974ec580b22db7de28cc197cae6b64d38ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09aa1896c5523840ce06ad392d80614fc71d76df9012fa72ab22b12e9444ebd5 = $this->env->getExtension("native_profiler");
        $__internal_09aa1896c5523840ce06ad392d80614fc71d76df9012fa72ab22b12e9444ebd5->enter($__internal_09aa1896c5523840ce06ad392d80614fc71d76df9012fa72ab22b12e9444ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09aa1896c5523840ce06ad392d80614fc71d76df9012fa72ab22b12e9444ebd5->leave($__internal_09aa1896c5523840ce06ad392d80614fc71d76df9012fa72ab22b12e9444ebd5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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

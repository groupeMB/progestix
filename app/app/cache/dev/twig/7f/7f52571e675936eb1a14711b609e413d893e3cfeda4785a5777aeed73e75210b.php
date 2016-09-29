<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_aeae3b5d03655d9a3312676bff686000869b0652c148c4c91f7cd2e15955c7f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_facf6930f9f2e7b5d579c7937a08e975377fc953d47ec107816c47e2a334f717 = $this->env->getExtension("native_profiler");
        $__internal_facf6930f9f2e7b5d579c7937a08e975377fc953d47ec107816c47e2a334f717->enter($__internal_facf6930f9f2e7b5d579c7937a08e975377fc953d47ec107816c47e2a334f717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_facf6930f9f2e7b5d579c7937a08e975377fc953d47ec107816c47e2a334f717->leave($__internal_facf6930f9f2e7b5d579c7937a08e975377fc953d47ec107816c47e2a334f717_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}*/
/* */

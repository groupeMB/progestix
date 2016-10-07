<?php

/* SonataAdminBundle:CRUD:list_inner_row.html.twig */
class __TwigTemplate_dad30a1c28b9bd00d994a5d75e929cf82cd6f728505f5f024092a783daef596b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "SonataAdminBundle:CRUD:list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab31e58feb41f0e20c6ecb3d54a81401bb849ba0c915900512381e6e2a84f8c3 = $this->env->getExtension("native_profiler");
        $__internal_ab31e58feb41f0e20c6ecb3d54a81401bb849ba0c915900512381e6e2a84f8c3->enter($__internal_ab31e58feb41f0e20c6ecb3d54a81401bb849ba0c915900512381e6e2a84f8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab31e58feb41f0e20c6ecb3d54a81401bb849ba0c915900512381e6e2a84f8c3->leave($__internal_ab31e58feb41f0e20c6ecb3d54a81401bb849ba0c915900512381e6e2a84f8c3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_inner_row.html.twig";
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

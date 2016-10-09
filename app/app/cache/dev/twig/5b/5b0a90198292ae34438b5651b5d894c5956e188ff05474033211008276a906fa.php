<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_6eb7c8bebf8339d71b41c438ac75a5c7013ae7077573ef0fca2e845e8a3490ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47903cabb7a77070b560fd9a7cf826a64a4024b817a231dd7256b382031427f8 = $this->env->getExtension("native_profiler");
        $__internal_47903cabb7a77070b560fd9a7cf826a64a4024b817a231dd7256b382031427f8->enter($__internal_47903cabb7a77070b560fd9a7cf826a64a4024b817a231dd7256b382031427f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47903cabb7a77070b560fd9a7cf826a64a4024b817a231dd7256b382031427f8->leave($__internal_47903cabb7a77070b560fd9a7cf826a64a4024b817a231dd7256b382031427f8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */

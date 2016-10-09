<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_7bd080c7216ed7ef13e1d929e76e19f65192c432b1eb034826da1be993dde516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfdbf74de26a3a21e24793acac43c6f7aa24e4f9a8374441c903845660286793 = $this->env->getExtension("native_profiler");
        $__internal_cfdbf74de26a3a21e24793acac43c6f7aa24e4f9a8374441c903845660286793->enter($__internal_cfdbf74de26a3a21e24793acac43c6f7aa24e4f9a8374441c903845660286793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfdbf74de26a3a21e24793acac43c6f7aa24e4f9a8374441c903845660286793->leave($__internal_cfdbf74de26a3a21e24793acac43c6f7aa24e4f9a8374441c903845660286793_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */

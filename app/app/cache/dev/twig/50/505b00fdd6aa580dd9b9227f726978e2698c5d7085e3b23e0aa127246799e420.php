<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_4ebb221b0afa5e9356a4e1b551017b7f1892e1a61c1811fb418f4a466a7dd357 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_36fed7968a446e472debfe1a9f1cf9948e44f842a49a4cfa1bdb5bfa71dba6b8 = $this->env->getExtension("native_profiler");
        $__internal_36fed7968a446e472debfe1a9f1cf9948e44f842a49a4cfa1bdb5bfa71dba6b8->enter($__internal_36fed7968a446e472debfe1a9f1cf9948e44f842a49a4cfa1bdb5bfa71dba6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36fed7968a446e472debfe1a9f1cf9948e44f842a49a4cfa1bdb5bfa71dba6b8->leave($__internal_36fed7968a446e472debfe1a9f1cf9948e44f842a49a4cfa1bdb5bfa71dba6b8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */

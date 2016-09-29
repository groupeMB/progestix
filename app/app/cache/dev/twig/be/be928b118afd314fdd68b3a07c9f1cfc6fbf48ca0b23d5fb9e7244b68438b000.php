<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_76f52906b033556f4694967ad2b2b90fd61ccb993c1b13b84622946729fab4e9 extends Twig_Template
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
        $__internal_d656a62cee645e6407bba4645a0a374befa27202a0cbc041fd05cbef67c829a6 = $this->env->getExtension("native_profiler");
        $__internal_d656a62cee645e6407bba4645a0a374befa27202a0cbc041fd05cbef67c829a6->enter($__internal_d656a62cee645e6407bba4645a0a374befa27202a0cbc041fd05cbef67c829a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d656a62cee645e6407bba4645a0a374befa27202a0cbc041fd05cbef67c829a6->leave($__internal_d656a62cee645e6407bba4645a0a374befa27202a0cbc041fd05cbef67c829a6_prof);

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

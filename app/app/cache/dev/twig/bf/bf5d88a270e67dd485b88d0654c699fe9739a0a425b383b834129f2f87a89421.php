<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_685ee993da21daad44e294c251ee3e213ed229aede3b646e0876180f36c10fd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86efe58d07df1529194c8d010a4127cd8ac9c81a8300ea5d8d4a2a052192e2a5 = $this->env->getExtension("native_profiler");
        $__internal_86efe58d07df1529194c8d010a4127cd8ac9c81a8300ea5d8d4a2a052192e2a5->enter($__internal_86efe58d07df1529194c8d010a4127cd8ac9c81a8300ea5d8d4a2a052192e2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86efe58d07df1529194c8d010a4127cd8ac9c81a8300ea5d8d4a2a052192e2a5->leave($__internal_86efe58d07df1529194c8d010a4127cd8ac9c81a8300ea5d8d4a2a052192e2a5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */

<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_f050359576fe9bf7775132c2162a70ac5592f6390247cf7a52e40bd3f3d9e13f extends Twig_Template
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
        $__internal_980ef5cfe6c79b1c3d560ef6f4769eee1fc83bfae3d588983ceba6caa7abebce = $this->env->getExtension("native_profiler");
        $__internal_980ef5cfe6c79b1c3d560ef6f4769eee1fc83bfae3d588983ceba6caa7abebce->enter($__internal_980ef5cfe6c79b1c3d560ef6f4769eee1fc83bfae3d588983ceba6caa7abebce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_980ef5cfe6c79b1c3d560ef6f4769eee1fc83bfae3d588983ceba6caa7abebce->leave($__internal_980ef5cfe6c79b1c3d560ef6f4769eee1fc83bfae3d588983ceba6caa7abebce_prof);

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

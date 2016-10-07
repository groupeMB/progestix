<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_f864d7e667af846581075ca0f2b0932536fe286dd7385d393769ee5844bf14ba extends Twig_Template
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
        $__internal_7d25af67953c84b710bb401ebb85b7da3f9d3fa6e6f842fafdb88a1ee84eb512 = $this->env->getExtension("native_profiler");
        $__internal_7d25af67953c84b710bb401ebb85b7da3f9d3fa6e6f842fafdb88a1ee84eb512->enter($__internal_7d25af67953c84b710bb401ebb85b7da3f9d3fa6e6f842fafdb88a1ee84eb512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d25af67953c84b710bb401ebb85b7da3f9d3fa6e6f842fafdb88a1ee84eb512->leave($__internal_7d25af67953c84b710bb401ebb85b7da3f9d3fa6e6f842fafdb88a1ee84eb512_prof);

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

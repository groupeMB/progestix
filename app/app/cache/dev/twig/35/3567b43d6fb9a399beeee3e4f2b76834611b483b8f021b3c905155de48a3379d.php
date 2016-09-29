<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_a3f4173ad0840328129a1b0f5ff7d1cfa222a70bfa6752aa08bae6fa2aa9ad03 extends Twig_Template
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
        $__internal_9a8903431b1abd6274d5202c6ed9be2b1974bb811270d7edc3c565da97987cbb = $this->env->getExtension("native_profiler");
        $__internal_9a8903431b1abd6274d5202c6ed9be2b1974bb811270d7edc3c565da97987cbb->enter($__internal_9a8903431b1abd6274d5202c6ed9be2b1974bb811270d7edc3c565da97987cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8903431b1abd6274d5202c6ed9be2b1974bb811270d7edc3c565da97987cbb->leave($__internal_9a8903431b1abd6274d5202c6ed9be2b1974bb811270d7edc3c565da97987cbb_prof);

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

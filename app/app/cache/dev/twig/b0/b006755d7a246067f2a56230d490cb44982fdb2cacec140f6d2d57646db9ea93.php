<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_ed9aa0c81d7445468a9b7d25e897dd00d645fe4225cd5a5339da70826cd8f280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a97881ed5cb7ee72cb434382b74c8a7610e15855772863823bbb81d2501d357 = $this->env->getExtension("native_profiler");
        $__internal_1a97881ed5cb7ee72cb434382b74c8a7610e15855772863823bbb81d2501d357->enter($__internal_1a97881ed5cb7ee72cb434382b74c8a7610e15855772863823bbb81d2501d357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a97881ed5cb7ee72cb434382b74c8a7610e15855772863823bbb81d2501d357->leave($__internal_1a97881ed5cb7ee72cb434382b74c8a7610e15855772863823bbb81d2501d357_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */

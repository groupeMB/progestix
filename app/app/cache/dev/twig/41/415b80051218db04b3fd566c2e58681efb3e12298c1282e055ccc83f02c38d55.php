<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_6bdbf771e548b69639dfe087a30158711689032a8d919e7730b9af9894540de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27003bb2587deeb9ee85b576b50c63447a4c9ba182c402296b19ae26baf4de0b = $this->env->getExtension("native_profiler");
        $__internal_27003bb2587deeb9ee85b576b50c63447a4c9ba182c402296b19ae26baf4de0b->enter($__internal_27003bb2587deeb9ee85b576b50c63447a4c9ba182c402296b19ae26baf4de0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27003bb2587deeb9ee85b576b50c63447a4c9ba182c402296b19ae26baf4de0b->leave($__internal_27003bb2587deeb9ee85b576b50c63447a4c9ba182c402296b19ae26baf4de0b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */

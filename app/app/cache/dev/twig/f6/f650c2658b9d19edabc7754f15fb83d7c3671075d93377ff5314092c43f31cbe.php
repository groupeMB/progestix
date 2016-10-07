<?php

/* SonataAdminBundle:Core:create_button.html.twig */
class __TwigTemplate_1d3ac9f574f28acd2a1daf0d5553d4c32758f89ac6f73f1f248b51335c2930ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:Core:create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7953ae2df4005e5243c85c35a2d56ea0bd8d07addf41ab508148b07d86c6338 = $this->env->getExtension("native_profiler");
        $__internal_d7953ae2df4005e5243c85c35a2d56ea0bd8d07addf41ab508148b07d86c6338->enter($__internal_d7953ae2df4005e5243c85c35a2d56ea0bd8d07addf41ab508148b07d86c6338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7953ae2df4005e5243c85c35a2d56ea0bd8d07addf41ab508148b07d86c6338->leave($__internal_d7953ae2df4005e5243c85c35a2d56ea0bd8d07addf41ab508148b07d86c6338_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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
/* {# DEPRECATED #}*/
/* {# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}*/
/* */
/* {% extends 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/* */

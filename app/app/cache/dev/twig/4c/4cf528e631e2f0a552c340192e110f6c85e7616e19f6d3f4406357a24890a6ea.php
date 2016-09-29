<?php

/* @SonataUser/Security/login.html.twig */
class __TwigTemplate_2a2b0042ecad5af923f48714d627fd8e678265cd75f13d954da840dd9b59ce55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "@SonataUser/Security/login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf693b26586f92b4bbbb69cd9922a7d5a5625f76cf102147188932f5c948f7e6 = $this->env->getExtension("native_profiler");
        $__internal_bf693b26586f92b4bbbb69cd9922a7d5a5625f76cf102147188932f5c948f7e6->enter($__internal_bf693b26586f92b4bbbb69cd9922a7d5a5625f76cf102147188932f5c948f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf693b26586f92b4bbbb69cd9922a7d5a5625f76cf102147188932f5c948f7e6->leave($__internal_bf693b26586f92b4bbbb69cd9922a7d5a5625f76cf102147188932f5c948f7e6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/Security/login.html.twig";
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
/* {% extends "SonataUserBundle:Security:base_login.html.twig" %}*/

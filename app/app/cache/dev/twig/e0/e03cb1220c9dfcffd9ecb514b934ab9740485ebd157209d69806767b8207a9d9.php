<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_72c68d798cef1d5cd041d8b7319ad6165eee5873f6440913f4cbb4c71f3d427a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06145ed50951d4f4b7877925807eea96f4f890b48a385ced271154959c42f014 = $this->env->getExtension("native_profiler");
        $__internal_06145ed50951d4f4b7877925807eea96f4f890b48a385ced271154959c42f014->enter($__internal_06145ed50951d4f4b7877925807eea96f4f890b48a385ced271154959c42f014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06145ed50951d4f4b7877925807eea96f4f890b48a385ced271154959c42f014->leave($__internal_06145ed50951d4f4b7877925807eea96f4f890b48a385ced271154959c42f014_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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

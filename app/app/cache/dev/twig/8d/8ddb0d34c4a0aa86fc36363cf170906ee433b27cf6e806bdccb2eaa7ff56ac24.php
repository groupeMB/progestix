<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6ea670122c8c96c5d9f0ffb079f102c33462ef93bc89d167860f3ef1a9bc5b4d extends Twig_Template
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
        $__internal_99ea6fbde8cd8749d52dcab0e308309db5142edcb3a4501c086c35c9fba379d0 = $this->env->getExtension("native_profiler");
        $__internal_99ea6fbde8cd8749d52dcab0e308309db5142edcb3a4501c086c35c9fba379d0->enter($__internal_99ea6fbde8cd8749d52dcab0e308309db5142edcb3a4501c086c35c9fba379d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ea6fbde8cd8749d52dcab0e308309db5142edcb3a4501c086c35c9fba379d0->leave($__internal_99ea6fbde8cd8749d52dcab0e308309db5142edcb3a4501c086c35c9fba379d0_prof);

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
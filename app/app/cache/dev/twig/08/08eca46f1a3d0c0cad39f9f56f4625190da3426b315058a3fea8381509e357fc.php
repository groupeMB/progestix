<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_f2dd87ad6a7544343ebbec05ffcc5b889916460b060cfd658d8a61741c26839f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed5163d055e269d68e919712cdd8558dcb6555e9891360c956833b37d15e0de1 = $this->env->getExtension("native_profiler");
        $__internal_ed5163d055e269d68e919712cdd8558dcb6555e9891360c956833b37d15e0de1->enter($__internal_ed5163d055e269d68e919712cdd8558dcb6555e9891360c956833b37d15e0de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed5163d055e269d68e919712cdd8558dcb6555e9891360c956833b37d15e0de1->leave($__internal_ed5163d055e269d68e919712cdd8558dcb6555e9891360c956833b37d15e0de1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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

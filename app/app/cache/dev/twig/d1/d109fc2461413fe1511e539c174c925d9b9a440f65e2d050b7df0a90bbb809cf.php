<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_1a4812ab8502448b79e41257978324f5a761b1024e0fb6c906e187133ae193ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ef20a4662d4ac56e4a0d1a05906d5a479017b5717c4af2e0518683cfdc55fc4 = $this->env->getExtension("native_profiler");
        $__internal_8ef20a4662d4ac56e4a0d1a05906d5a479017b5717c4af2e0518683cfdc55fc4->enter($__internal_8ef20a4662d4ac56e4a0d1a05906d5a479017b5717c4af2e0518683cfdc55fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef20a4662d4ac56e4a0d1a05906d5a479017b5717c4af2e0518683cfdc55fc4->leave($__internal_8ef20a4662d4ac56e4a0d1a05906d5a479017b5717c4af2e0518683cfdc55fc4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */

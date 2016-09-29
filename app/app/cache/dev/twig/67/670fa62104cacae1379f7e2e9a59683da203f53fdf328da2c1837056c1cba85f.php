<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_928c7e22ea87e92c7491030b4839abcf52fbc6c3e21fd9a13aab21fc3e3028a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57bd29c0213c2d93dd9623ffd0ba88118924a255fc1fd6b05ae12a9146df0db6 = $this->env->getExtension("native_profiler");
        $__internal_57bd29c0213c2d93dd9623ffd0ba88118924a255fc1fd6b05ae12a9146df0db6->enter($__internal_57bd29c0213c2d93dd9623ffd0ba88118924a255fc1fd6b05ae12a9146df0db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57bd29c0213c2d93dd9623ffd0ba88118924a255fc1fd6b05ae12a9146df0db6->leave($__internal_57bd29c0213c2d93dd9623ffd0ba88118924a255fc1fd6b05ae12a9146df0db6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */

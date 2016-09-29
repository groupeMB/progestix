<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_7586fb0438b1cb7441c4dc9f57e626cfb882b275d39330c50dac4b2cf9bddb77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c80695d6ac2246638281c6a6fc931af24e200396f58e13afebe0c47f4881e94 = $this->env->getExtension("native_profiler");
        $__internal_8c80695d6ac2246638281c6a6fc931af24e200396f58e13afebe0c47f4881e94->enter($__internal_8c80695d6ac2246638281c6a6fc931af24e200396f58e13afebe0c47f4881e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c80695d6ac2246638281c6a6fc931af24e200396f58e13afebe0c47f4881e94->leave($__internal_8c80695d6ac2246638281c6a6fc931af24e200396f58e13afebe0c47f4881e94_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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

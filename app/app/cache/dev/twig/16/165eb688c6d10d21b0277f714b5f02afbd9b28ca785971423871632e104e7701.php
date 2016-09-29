<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_aaa6c09f0970ee988404126a30d984cef5a426a6cadb93964604241155460ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d952d9b19a13ba92c2e6d0c0faca66f22fafd93354f23b4e3a1e9e90e525b51 = $this->env->getExtension("native_profiler");
        $__internal_9d952d9b19a13ba92c2e6d0c0faca66f22fafd93354f23b4e3a1e9e90e525b51->enter($__internal_9d952d9b19a13ba92c2e6d0c0faca66f22fafd93354f23b4e3a1e9e90e525b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d952d9b19a13ba92c2e6d0c0faca66f22fafd93354f23b4e3a1e9e90e525b51->leave($__internal_9d952d9b19a13ba92c2e6d0c0faca66f22fafd93354f23b4e3a1e9e90e525b51_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */

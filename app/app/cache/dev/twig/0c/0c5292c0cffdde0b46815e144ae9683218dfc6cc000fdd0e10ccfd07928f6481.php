<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_bbc86d6b57ab97553572505c0f5025f440e425789a5f731b29e76f34ccce3f4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "@SonataAdmin/CRUD/history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70b38ea5f3e6523bc2003c5f7174cc23fd95d6e5cb1afde25662a32de9b9ea9c = $this->env->getExtension("native_profiler");
        $__internal_70b38ea5f3e6523bc2003c5f7174cc23fd95d6e5cb1afde25662a32de9b9ea9c->enter($__internal_70b38ea5f3e6523bc2003c5f7174cc23fd95d6e5cb1afde25662a32de9b9ea9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b38ea5f3e6523bc2003c5f7174cc23fd95d6e5cb1afde25662a32de9b9ea9c->leave($__internal_70b38ea5f3e6523bc2003c5f7174cc23fd95d6e5cb1afde25662a32de9b9ea9c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history.html.twig";
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

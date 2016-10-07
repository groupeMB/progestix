<?php

/* SonataAdminBundle:CRUD:list__action_delete.html.twig */
class __TwigTemplate_f17c39ed7607b9f8d5bd575a6e369ad39ec06203c7e5ed76e7264712b885ca62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_150105e91f90683e0f3a2c20967603718a3a15cf1a63da32afe4b17b99ec049c = $this->env->getExtension("native_profiler");
        $__internal_150105e91f90683e0f3a2c20967603718a3a15cf1a63da32afe4b17b99ec049c->enter($__internal_150105e91f90683e0f3a2c20967603718a3a15cf1a63da32afe4b17b99ec049c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action_delete.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "delete"), "method"))) {
            // line 13
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default delete_link\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        <i class=\"fa fa-times\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_150105e91f90683e0f3a2c20967603718a3a15cf1a63da32afe4b17b99ec049c->leave($__internal_150105e91f90683e0f3a2c20967603718a3a15cf1a63da32afe4b17b99ec049c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  27 => 13,  25 => 12,  22 => 11,);
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
/* {% if admin.isGranted('DELETE', object) and admin.hasRoute('delete') %}*/
/*     <a href="{{ admin.generateObjectUrl('delete', object) }}" class="btn btn-sm btn-default delete_link" title="{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}">*/
/*         <i class="fa fa-times"></i>*/
/*         {{ 'action_delete'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endif %}*/
/* */

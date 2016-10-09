<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_17382ef05dc59353baef6ff7ac3277186f61227884d7d6d3240a5c7f120014f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f40d35f4fe2f07a201b3660fdefade180b45f092242ee7648eb073f4f2f7f047 = $this->env->getExtension("native_profiler");
        $__internal_f40d35f4fe2f07a201b3660fdefade180b45f092242ee7648eb073f4f2f7f047->enter($__internal_f40d35f4fe2f07a201b3660fdefade180b45f092242ee7648eb073f4f2f7f047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40d35f4fe2f07a201b3660fdefade180b45f092242ee7648eb073f4f2f7f047->leave($__internal_f40d35f4fe2f07a201b3660fdefade180b45f092242ee7648eb073f4f2f7f047_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_57aa48db305b5af5dd45063d34f0fb724d4dfb46c4e8db3d9be6cc5a4c65e9f3 = $this->env->getExtension("native_profiler");
        $__internal_57aa48db305b5af5dd45063d34f0fb724d4dfb46c4e8db3d9be6cc5a4c65e9f3->enter($__internal_57aa48db305b5af5dd45063d34f0fb724d4dfb46c4e8db3d9be6cc5a4c65e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_57aa48db305b5af5dd45063d34f0fb724d4dfb46c4e8db3d9be6cc5a4c65e9f3->leave($__internal_57aa48db305b5af5dd45063d34f0fb724d4dfb46c4e8db3d9be6cc5a4c65e9f3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */

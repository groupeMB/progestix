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
        $__internal_854d8c80208fadc5de49ffede45d5b998ca5fbbb4ba15252a5a6a8e3d1833f1f = $this->env->getExtension("native_profiler");
        $__internal_854d8c80208fadc5de49ffede45d5b998ca5fbbb4ba15252a5a6a8e3d1833f1f->enter($__internal_854d8c80208fadc5de49ffede45d5b998ca5fbbb4ba15252a5a6a8e3d1833f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854d8c80208fadc5de49ffede45d5b998ca5fbbb4ba15252a5a6a8e3d1833f1f->leave($__internal_854d8c80208fadc5de49ffede45d5b998ca5fbbb4ba15252a5a6a8e3d1833f1f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a94b28c509ebb81ffeffe245a647546970ad4afc2f70400bc5c838ace4402461 = $this->env->getExtension("native_profiler");
        $__internal_a94b28c509ebb81ffeffe245a647546970ad4afc2f70400bc5c838ace4402461->enter($__internal_a94b28c509ebb81ffeffe245a647546970ad4afc2f70400bc5c838ace4402461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_a94b28c509ebb81ffeffe245a647546970ad4afc2f70400bc5c838ace4402461->leave($__internal_a94b28c509ebb81ffeffe245a647546970ad4afc2f70400bc5c838ace4402461_prof);

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

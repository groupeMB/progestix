<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_ff416400e7374fe4949fcfd1f4e9e3fb814c94893b5cf93c4857c870ec5ec261 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig", 12);
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
        $__internal_08ee137d19ff86b51a7885d64b2645adc04f263e7d1014dd40dd071bb2584952 = $this->env->getExtension("native_profiler");
        $__internal_08ee137d19ff86b51a7885d64b2645adc04f263e7d1014dd40dd071bb2584952->enter($__internal_08ee137d19ff86b51a7885d64b2645adc04f263e7d1014dd40dd071bb2584952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ee137d19ff86b51a7885d64b2645adc04f263e7d1014dd40dd071bb2584952->leave($__internal_08ee137d19ff86b51a7885d64b2645adc04f263e7d1014dd40dd071bb2584952_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fc66f811788a7a0377f17f82f2a137752989826e51a1c33f58c267fa4e0a07c5 = $this->env->getExtension("native_profiler");
        $__internal_fc66f811788a7a0377f17f82f2a137752989826e51a1c33f58c267fa4e0a07c5->enter($__internal_fc66f811788a7a0377f17f82f2a137752989826e51a1c33f58c267fa4e0a07c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 17
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 18
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">
            ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_fc66f811788a7a0377f17f82f2a137752989826e51a1c33f58c267fa4e0a07c5->leave($__internal_fc66f811788a7a0377f17f82f2a137752989826e51a1c33f58c267fa4e0a07c5_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  54 => 19,  49 => 18,  46 => 17,  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% set route_name = field_description.options.route.name %}*/
/*     {% set route_role = route_name | upper %}*/
/*     {% if field_description.hasAssociationAdmin and field_description.associationadmin.id(value) and field_description.associationadmin.isGranted(route_role) and field_description.associationadmin.hasRoute(route_name) %}*/
/*         <a href="{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}">*/
/*             {{ value|render_relation_element(field_description) }}*/
/*         </a>*/
/*     {% else %}*/
/*         {{ value|render_relation_element(field_description) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

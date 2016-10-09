<?php

/* SonataAdminBundle:CRUD:base_list_field.html.twig */
class __TwigTemplate_c2611aebca7d4a3dc7c5c145902447171ffebf6b1c9340c507eaa06686646b15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3cfe370a7150948008a82dbba028c37c34ae08c748faa051411b880b2b73519 = $this->env->getExtension("native_profiler");
        $__internal_e3cfe370a7150948008a82dbba028c37c34ae08c748faa051411b880b2b73519->enter($__internal_e3cfe370a7150948008a82dbba028c37c34ae08c748faa051411b880b2b73519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list_field.html.twig"));

        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "row_align", array(), "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "row_align", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "    ";
        $context["action"] = ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))));
        // line 15
        echo "
    ";
        // line 16
        if ((((($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 18
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))) &&         // line 19
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))) && $this->getAttribute(        // line 20
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))), "method")) && $this->getAttribute(        // line 21
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => ((twig_in_filter((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), array(0 => "VIEW", 1 => "EDIT"))) ? ((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))) : (null))), "method"))) {
            // line 23
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 24
            $this->displayBlock('field', $context, $blocks);
            // line 25
            echo "</a>
    ";
        } else {
            // line 27
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 28
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
            // line 29
            echo "
        ";
            // line 30
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 31
                echo "            ";
                $context["url"] = $this->env->getExtension('routing')->getPath("sonata_admin_set_object_field_value", twig_array_merge(array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getPersistentParameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getPersistentParameters", array()), array())) : (array()))));
                // line 32
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 33
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 36
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 38
            echo "    ";
        }
        // line 39
        echo "</td>
";
        
        $__internal_e3cfe370a7150948008a82dbba028c37c34ae08c748faa051411b880b2b73519->leave($__internal_e3cfe370a7150948008a82dbba028c37c34ae08c748faa051411b880b2b73519_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_8395293acaa58c5d1d61d70adb8788e1431780cb81f651952f57f8e42e68501b = $this->env->getExtension("native_profiler");
        $__internal_8395293acaa58c5d1d61d70adb8788e1431780cb81f651952f57f8e42e68501b->enter($__internal_8395293acaa58c5d1d61d70adb8788e1431780cb81f651952f57f8e42e68501b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        
        $__internal_8395293acaa58c5d1d61d70adb8788e1431780cb81f651952f57f8e42e68501b->leave($__internal_8395293acaa58c5d1d61d70adb8788e1431780cb81f651952f57f8e42e68501b_prof);

    }

    // line 32
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_9bb91dd05e29bbf0323f33dcdf80872ce45ed9ee5669dc1bde5ed8b61bc98189 = $this->env->getExtension("native_profiler");
        $__internal_9bb91dd05e29bbf0323f33dcdf80872ce45ed9ee5669dc1bde5ed8b61bc98189->enter($__internal_9bb91dd05e29bbf0323f33dcdf80872ce45ed9ee5669dc1bde5ed8b61bc98189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()) == "date") &&  !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "format", array(0 => "Y-m-d"), "method")) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
        
        $__internal_9bb91dd05e29bbf0323f33dcdf80872ce45ed9ee5669dc1bde5ed8b61bc98189->leave($__internal_9bb91dd05e29bbf0323f33dcdf80872ce45ed9ee5669dc1bde5ed8b61bc98189_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 32,  106 => 24,  98 => 39,  95 => 38,  89 => 36,  83 => 33,  78 => 32,  75 => 31,  73 => 30,  70 => 29,  67 => 28,  64 => 27,  60 => 25,  58 => 24,  54 => 23,  52 => 21,  51 => 20,  50 => 19,  49 => 18,  48 => 17,  47 => 16,  44 => 15,  41 => 14,  39 => 13,  27 => 12,  24 => 11,);
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
/* <td class="sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}" objectId="{{ admin.id(object) }}"{% if field_description.options.row_align is defined %} style="text-align:{{ field_description.options.row_align }}"{% endif %}>*/
/*     {% set route = field_description.options.route.name|default(null) %}*/
/*     {% set action = route == 'show' ? 'VIEW' : route|upper %}*/
/* */
/*     {% if*/
/*         field_description.options.identifier is defined*/
/*         and route*/
/*         and action*/
/*         and admin.hasRoute(route)*/
/*         and admin.isGranted(action, action in ['VIEW', 'EDIT'] ? object : null)*/
/*     %}*/
/*         <a class="sonata-link-identifier" href="{{ admin.generateObjectUrl(route, object, field_description.options.route.parameters) }}">*/
/*             {%- block field %}{{ value }}{% endblock -%}*/
/*         </a>*/
/*     {% else %}*/
/*         {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}*/
/*         {% set xEditableType = field_description.type|sonata_xeditable_type %}*/
/* */
/*         {% if isEditable and xEditableType %}*/
/*             {% set url = path('sonata_admin_set_object_field_value', { 'context': 'list', 'field': field_description.name, 'objectId': admin.id(object), 'code': admin.code(object) }|merge(admin.getPersistentParameters|default([])) )  %}*/
/*             <span {% block field_span_attributes %}class="x-editable" data-type="{{ xEditableType }}" data-value="{{ field_description.type == 'date' and value is not empty ? value.format('Y-m-d') : value }}" data-title="{{ field_description.label|trans({}, field_description.translationDomain) }}" data-pk="{{ admin.id(object) }}" data-url="{{ url }}" {% endblock %}>*/
/*                 {{ block('field') }}*/
/*             </span>*/
/*         {% else %}*/
/*             {{ block('field') }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* </td>*/
/* */

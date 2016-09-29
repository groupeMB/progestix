<?php

/* SonataAdminBundle:CRUD:list_boolean.html.twig */
class __TwigTemplate_1451e5a4809541a39119efb1b76338baa83172fcdea818e62b31cf5e90ba6ff5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f76d980583ae86236e0b98d088dd5edd9ac09cdc3f0fa97494b3d45bb8668788 = $this->env->getExtension("native_profiler");
        $__internal_f76d980583ae86236e0b98d088dd5edd9ac09cdc3f0fa97494b3d45bb8668788->enter($__internal_f76d980583ae86236e0b98d088dd5edd9ac09cdc3f0fa97494b3d45bb8668788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f76d980583ae86236e0b98d088dd5edd9ac09cdc3f0fa97494b3d45bb8668788->leave($__internal_f76d980583ae86236e0b98d088dd5edd9ac09cdc3f0fa97494b3d45bb8668788_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_e78976e7b36373a97ef5056d655df050d750f5c4dce589e8750ea7d541a62607 = $this->env->getExtension("native_profiler");
        $__internal_e78976e7b36373a97ef5056d655df050d750f5c4dce589e8750ea7d541a62607->enter($__internal_e78976e7b36373a97ef5056d655df050d750f5c4dce589e8750ea7d541a62607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_e78976e7b36373a97ef5056d655df050d750f5c4dce589e8750ea7d541a62607->leave($__internal_e78976e7b36373a97ef5056d655df050d750f5c4dce589e8750ea7d541a62607_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_86ecf41e25921a7d3b3749f1544bb373ea11dc95fa604c0dc41b2888f5e0da40 = $this->env->getExtension("native_profiler");
        $__internal_86ecf41e25921a7d3b3749f1544bb373ea11dc95fa604c0dc41b2888f5e0da40->enter($__internal_86ecf41e25921a7d3b3749f1544bb373ea11dc95fa604c0dc41b2888f5e0da40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_86ecf41e25921a7d3b3749f1544bb373ea11dc95fa604c0dc41b2888f5e0da40->leave($__internal_86ecf41e25921a7d3b3749f1544bb373ea11dc95fa604c0dc41b2888f5e0da40_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  88 => 31,  82 => 29,  79 => 28,  76 => 27,  70 => 26,  63 => 23,  56 => 21,  51 => 20,  48 => 19,  42 => 18,  35 => 12,  32 => 17,  30 => 15,  28 => 14,  19 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}*/
/* {% set xEditableType = field_description.type|sonata_xeditable_type %}*/
/* */
/* {% if isEditable and xEditableType %}*/
/*     {% block field_span_attributes %}*/
/*         {% spaceless %}*/
/*             {{ parent() }}*/
/*             data-source="[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]"*/
/*         {% endspaceless %}*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% block field %}*/
/*     {% spaceless %}*/
/*         {% if value %}*/
/*             <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*         {% else %}*/
/*             <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */

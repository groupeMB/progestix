<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_7e7a68ff60d16fbf82cdb3eeaa6ed4558e559c4d6d7577235c2d312b16a12b9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d83cdf3ec1ef788298ae98ebff53e9f40a1f797c1d4ae9e097f73f9027e0d12c = $this->env->getExtension("native_profiler");
        $__internal_d83cdf3ec1ef788298ae98ebff53e9f40a1f797c1d4ae9e097f73f9027e0d12c->enter($__internal_d83cdf3ec1ef788298ae98ebff53e9f40a1f797c1d4ae9e097f73f9027e0d12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 13
        $this->displayBlock('field', $context, $blocks);
        echo "</td>

";
        // line 15
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_d83cdf3ec1ef788298ae98ebff53e9f40a1f797c1d4ae9e097f73f9027e0d12c->leave($__internal_d83cdf3ec1ef788298ae98ebff53e9f40a1f797c1d4ae9e097f73f9027e0d12c_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_c84f326dc39aaca4754bd8fcd90a75adbb86c806b6cc3dcb5437d481810b1570 = $this->env->getExtension("native_profiler");
        $__internal_c84f326dc39aaca4754bd8fcd90a75adbb86c806b6cc3dcb5437d481810b1570->enter($__internal_c84f326dc39aaca4754bd8fcd90a75adbb86c806b6cc3dcb5437d481810b1570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_c84f326dc39aaca4754bd8fcd90a75adbb86c806b6cc3dcb5437d481810b1570->leave($__internal_c84f326dc39aaca4754bd8fcd90a75adbb86c806b6cc3dcb5437d481810b1570_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_5550992db6e8a03cc137500e44d0ff26ffff72e29d91bef10c7ff03ee39cc043 = $this->env->getExtension("native_profiler");
        $__internal_5550992db6e8a03cc137500e44d0ff26ffff72e29d91bef10c7ff03ee39cc043->enter($__internal_5550992db6e8a03cc137500e44d0ff26ffff72e29d91bef10c7ff03ee39cc043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_5550992db6e8a03cc137500e44d0ff26ffff72e29d91bef10c7ff03ee39cc043->leave($__internal_5550992db6e8a03cc137500e44d0ff26ffff72e29d91bef10c7ff03ee39cc043_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_db626f1c6d2b12a6537f6ef5fca27f14e017d1ab187a23bae56da1d7833f0361 = $this->env->getExtension("native_profiler");
        $__internal_db626f1c6d2b12a6537f6ef5fca27f14e017d1ab187a23bae56da1d7833f0361->enter($__internal_db626f1c6d2b12a6537f6ef5fca27f14e017d1ab187a23bae56da1d7833f0361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 16
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 17
            echo "        <td>
            ";
            // line 18
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 19
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_db626f1c6d2b12a6537f6ef5fca27f14e017d1ab187a23bae56da1d7833f0361->leave($__internal_db626f1c6d2b12a6537f6ef5fca27f14e017d1ab187a23bae56da1d7833f0361_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 19,  88 => 18,  85 => 17,  82 => 16,  76 => 15,  60 => 13,  48 => 12,  41 => 15,  36 => 13,  28 => 12,  25 => 11,);
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
/* <th{% if(is_diff|default(false)) %} class="diff"{% endif %}>{% block name %}{{ admin.trans(field_description.label, {}, field_description.translationDomain) }}{% endblock %}</th>*/
/* <td>{% block field %}{% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}{% endblock %}</td>*/
/* */
/* {% block field_compare %}*/
/*     {% if(value_compare is defined) %}*/
/*         <td>*/
/*             {% set value = value_compare %}*/
/*             {{ block('field') }}*/
/*         </td>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

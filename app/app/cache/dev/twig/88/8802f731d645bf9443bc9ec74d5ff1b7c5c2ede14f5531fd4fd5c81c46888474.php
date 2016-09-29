<?php

/* @SonataAdmin/CRUD/base_show_field.html.twig */
class __TwigTemplate_b0806ec914f8b179a169709d213e2323b6dfb6ce629683d74061d41cb84f1fb7 extends Twig_Template
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
        $__internal_0368a793e6d1fdf5ea3e95e86ee8bd4403ffe412a3e54285c7ff27b6e53ab49a = $this->env->getExtension("native_profiler");
        $__internal_0368a793e6d1fdf5ea3e95e86ee8bd4403ffe412a3e54285c7ff27b6e53ab49a->enter($__internal_0368a793e6d1fdf5ea3e95e86ee8bd4403ffe412a3e54285c7ff27b6e53ab49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_field.html.twig"));

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
        
        $__internal_0368a793e6d1fdf5ea3e95e86ee8bd4403ffe412a3e54285c7ff27b6e53ab49a->leave($__internal_0368a793e6d1fdf5ea3e95e86ee8bd4403ffe412a3e54285c7ff27b6e53ab49a_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_853db8aab71f6aad221885da7ad2704c47b5636d65729d22b6d1b1ed3039c7d6 = $this->env->getExtension("native_profiler");
        $__internal_853db8aab71f6aad221885da7ad2704c47b5636d65729d22b6d1b1ed3039c7d6->enter($__internal_853db8aab71f6aad221885da7ad2704c47b5636d65729d22b6d1b1ed3039c7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_853db8aab71f6aad221885da7ad2704c47b5636d65729d22b6d1b1ed3039c7d6->leave($__internal_853db8aab71f6aad221885da7ad2704c47b5636d65729d22b6d1b1ed3039c7d6_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_46b83bbab6e6fbd5d35b5d245c9b653d04561e6cc02748b4150b0dc98ba92f93 = $this->env->getExtension("native_profiler");
        $__internal_46b83bbab6e6fbd5d35b5d245c9b653d04561e6cc02748b4150b0dc98ba92f93->enter($__internal_46b83bbab6e6fbd5d35b5d245c9b653d04561e6cc02748b4150b0dc98ba92f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_46b83bbab6e6fbd5d35b5d245c9b653d04561e6cc02748b4150b0dc98ba92f93->leave($__internal_46b83bbab6e6fbd5d35b5d245c9b653d04561e6cc02748b4150b0dc98ba92f93_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_3875985d1f323be854ca58502f2591b07df188b0a43b7db92600d0e7d509e062 = $this->env->getExtension("native_profiler");
        $__internal_3875985d1f323be854ca58502f2591b07df188b0a43b7db92600d0e7d509e062->enter($__internal_3875985d1f323be854ca58502f2591b07df188b0a43b7db92600d0e7d509e062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_3875985d1f323be854ca58502f2591b07df188b0a43b7db92600d0e7d509e062->leave($__internal_3875985d1f323be854ca58502f2591b07df188b0a43b7db92600d0e7d509e062_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_field.html.twig";
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

<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_e5d4e14bf940d17ed3c19b15680ec8ee1eec787d4408e07ff4ad69c7db5a6dea extends Twig_Template
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
        $__internal_cb748f7f955c90c9e9df77e3d6b7276146834f869b5bd6628033cd212e7f9e9a = $this->env->getExtension("native_profiler");
        $__internal_cb748f7f955c90c9e9df77e3d6b7276146834f869b5bd6628033cd212e7f9e9a->enter($__internal_cb748f7f955c90c9e9df77e3d6b7276146834f869b5bd6628033cd212e7f9e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

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
        
        $__internal_cb748f7f955c90c9e9df77e3d6b7276146834f869b5bd6628033cd212e7f9e9a->leave($__internal_cb748f7f955c90c9e9df77e3d6b7276146834f869b5bd6628033cd212e7f9e9a_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_085e7b47f893ea1bd406cfdd4fd0944d8edddf38bab4f7a5f19cc75e7f6ea7c5 = $this->env->getExtension("native_profiler");
        $__internal_085e7b47f893ea1bd406cfdd4fd0944d8edddf38bab4f7a5f19cc75e7f6ea7c5->enter($__internal_085e7b47f893ea1bd406cfdd4fd0944d8edddf38bab4f7a5f19cc75e7f6ea7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), 1 => array(), 2 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "method"), "html", null, true);
        
        $__internal_085e7b47f893ea1bd406cfdd4fd0944d8edddf38bab4f7a5f19cc75e7f6ea7c5->leave($__internal_085e7b47f893ea1bd406cfdd4fd0944d8edddf38bab4f7a5f19cc75e7f6ea7c5_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_4d7a1612ae5d86886f7a8f67fbcd6f1263c2b26c7b392bd4d6318e3dc1b56929 = $this->env->getExtension("native_profiler");
        $__internal_4d7a1612ae5d86886f7a8f67fbcd6f1263c2b26c7b392bd4d6318e3dc1b56929->enter($__internal_4d7a1612ae5d86886f7a8f67fbcd6f1263c2b26c7b392bd4d6318e3dc1b56929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        
        $__internal_4d7a1612ae5d86886f7a8f67fbcd6f1263c2b26c7b392bd4d6318e3dc1b56929->leave($__internal_4d7a1612ae5d86886f7a8f67fbcd6f1263c2b26c7b392bd4d6318e3dc1b56929_prof);

    }

    // line 15
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_5335793d9f9a5c33ac63f4cdc0aa9aa3d354ad655f9e7eddecfb2fd15fc2feae = $this->env->getExtension("native_profiler");
        $__internal_5335793d9f9a5c33ac63f4cdc0aa9aa3d354ad655f9e7eddecfb2fd15fc2feae->enter($__internal_5335793d9f9a5c33ac63f4cdc0aa9aa3d354ad655f9e7eddecfb2fd15fc2feae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

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
        
        $__internal_5335793d9f9a5c33ac63f4cdc0aa9aa3d354ad655f9e7eddecfb2fd15fc2feae->leave($__internal_5335793d9f9a5c33ac63f4cdc0aa9aa3d354ad655f9e7eddecfb2fd15fc2feae_prof);

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

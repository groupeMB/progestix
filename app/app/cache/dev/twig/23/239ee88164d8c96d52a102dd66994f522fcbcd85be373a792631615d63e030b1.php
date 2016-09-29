<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_1ebf5030dfcd5cdd8a205ebec41c4627800b57e5e520db2f2a0dbd62e97f0c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1276da77f702f8a0c54ab3bd4a52b6cdaf09a26c987361bed9f07a04a1c63a5 = $this->env->getExtension("native_profiler");
        $__internal_f1276da77f702f8a0c54ab3bd4a52b6cdaf09a26c987361bed9f07a04a1c63a5->enter($__internal_f1276da77f702f8a0c54ab3bd4a52b6cdaf09a26c987361bed9f07a04a1c63a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1276da77f702f8a0c54ab3bd4a52b6cdaf09a26c987361bed9f07a04a1c63a5->leave($__internal_f1276da77f702f8a0c54ab3bd4a52b6cdaf09a26c987361bed9f07a04a1c63a5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c6081d094d80b347ea7c2017db7899986ef098fa2a9760bd9e38a396db7a6262 = $this->env->getExtension("native_profiler");
        $__internal_c6081d094d80b347ea7c2017db7899986ef098fa2a9760bd9e38a396db7a6262->enter($__internal_c6081d094d80b347ea7c2017db7899986ef098fa2a9760bd9e38a396db7a6262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        $context["route_role"] = twig_upper_filter($this->env, (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
        // line 17
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 19
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "isGranted", array(0 => (isset($context["route_role"]) ? $context["route_role"] : $this->getContext($context, "route_role")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 20
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 22
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 24
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 25
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        } else {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 28
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    ";
        }
        
        $__internal_c6081d094d80b347ea7c2017db7899986ef098fa2a9760bd9e38a396db7a6262->leave($__internal_c6081d094d80b347ea7c2017db7899986ef098fa2a9760bd9e38a396db7a6262_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_9a8c75010fb5f8a809f8c8ac6d3f4bf8e6d0dfa7d2f34f96acf5f9c0354025e4 = $this->env->getExtension("native_profiler");
        $__internal_9a8c75010fb5f8a809f8c8ac6d3f4bf8e6d0dfa7d2f34f96acf5f9c0354025e4->enter($__internal_9a8c75010fb5f8a809f8c8ac6d3f4bf8e6d0dfa7d2f34f96acf5f9c0354025e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_9a8c75010fb5f8a809f8c8ac6d3f4bf8e6d0dfa7d2f34f96acf5f9c0354025e4->leave($__internal_9a8c75010fb5f8a809f8c8ac6d3f4bf8e6d0dfa7d2f34f96acf5f9c0354025e4_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_cad6229b3ce7525452f97bbf02c39085a286cf6328c057eb98611d60e031979a = $this->env->getExtension("native_profiler");
        $__internal_cad6229b3ce7525452f97bbf02c39085a286cf6328c057eb98611d60e031979a->enter($__internal_cad6229b3ce7525452f97bbf02c39085a286cf6328c057eb98611d60e031979a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_cad6229b3ce7525452f97bbf02c39085a286cf6328c057eb98611d60e031979a->leave($__internal_cad6229b3ce7525452f97bbf02c39085a286cf6328c057eb98611d60e031979a_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 40,  163 => 39,  154 => 35,  149 => 34,  143 => 33,  135 => 30,  121 => 29,  115 => 28,  97 => 27,  94 => 26,  80 => 25,  76 => 24,  73 => 22,  70 => 20,  68 => 19,  50 => 18,  47 => 17,  44 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block field %}*/
/*     {% set route_name = field_description.options.route.name %}*/
/*     {% set route_role = route_name | upper %}*/
/*     {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}*/
/*         {% for element in value %}*/
/*             {%- if field_description.associationadmin.isGranted(route_role, value) -%}*/
/*                 {{ block('relation_link') }}*/
/*             {%- else -%}*/
/*                 {{ block('relation_value') }}*/
/*             {%- endif -%}*/
/*             {% if not loop.last %}, {% endif %}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% for element in value%}*/
/*             {{ block('relation_value') }}{% if not loop.last %}, {% endif %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {%- block relation_link -%}*/
/*     <a href="{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}">*/
/*         {{ element|render_relation_element(field_description) }}*/
/*     </a>*/
/* {%- endblock -%}*/
/* */
/* {%- block relation_value -%}*/
/*     {{ element|render_relation_element(field_description) }}*/
/* {%- endblock -%}*/
/* */

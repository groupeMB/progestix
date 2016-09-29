<?php

/* @SonataAdmin/CRUD/list_choice.html.twig */
class __TwigTemplate_c132313087ff821556af57531d6d054eb5d648905f523b1afd73cb70becb7dcd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_choice.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e14c7ace0e7d01149e6c6ac4bb9352a05ebfee47e8b356563339e3daa64cc9fb = $this->env->getExtension("native_profiler");
        $__internal_e14c7ace0e7d01149e6c6ac4bb9352a05ebfee47e8b356563339e3daa64cc9fb->enter($__internal_e14c7ace0e7d01149e6c6ac4bb9352a05ebfee47e8b356563339e3daa64cc9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_choice.html.twig"));

        // line 14
        $context["is_editable"] = (($this->getAttribute($this->getAttribute(        // line 15
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 16
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(        // line 17
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 19
        $context["x_editable_type"] = $this->env->getExtension('sonata_admin')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 21
        if (((isset($context["is_editable"]) ? $context["is_editable"] : $this->getContext($context, "is_editable")) && (isset($context["x_editable_type"]) ? $context["x_editable_type"] : $this->getContext($context, "x_editable_type")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14c7ace0e7d01149e6c6ac4bb9352a05ebfee47e8b356563339e3daa64cc9fb->leave($__internal_e14c7ace0e7d01149e6c6ac4bb9352a05ebfee47e8b356563339e3daa64cc9fb_prof);

    }

    // line 22
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_16c9babba6ccd42437ddd40f3c1577e7ed65e914ce44c2042d999ad7bcedf449 = $this->env->getExtension("native_profiler");
        $__internal_16c9babba6ccd42437ddd40f3c1577e7ed65e914ce44c2042d999ad7bcedf449->enter($__internal_16c9babba6ccd42437ddd40f3c1577e7ed65e914ce44c2042d999ad7bcedf449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 23
        echo "        ";
        ob_start();
        // line 24
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('sonata_admin')->getXEditableChoices((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")))), "html", null, true);
        echo "\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 27
        echo "    ";
        
        $__internal_16c9babba6ccd42437ddd40f3c1577e7ed65e914ce44c2042d999ad7bcedf449->leave($__internal_16c9babba6ccd42437ddd40f3c1577e7ed65e914ce44c2042d999ad7bcedf449_prof);

    }

    // line 30
    public function block_field($context, array $blocks = array())
    {
        $__internal_b96f9875a94837e0a11a81b9175290c57a7b927cb5a8a958a8db472e01cb1682 = $this->env->getExtension("native_profiler");
        $__internal_b96f9875a94837e0a11a81b9175290c57a7b927cb5a8a958a8db472e01cb1682->enter($__internal_b96f9875a94837e0a11a81b9175290c57a7b927cb5a8a958a8db472e01cb1682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 31
        ob_start();
        // line 32
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 33
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "multiple", array()) == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 34
                echo "
            ";
                // line 35
                $context["result"] = "";
                // line 36
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array()), ", ")) : (", "));
                // line 37
                echo "
            ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 39
                    echo "                ";
                    if ( !twig_test_empty((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")))) {
                        // line 40
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["delimiter"]) ? $context["delimiter"] : $this->getContext($context, "delimiter")));
                        // line 41
                        echo "                ";
                    }
                    // line 42
                    echo "
                ";
                    // line 43
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), $context["val"], array(), "array", true, true)) {
                        // line 44
                        echo "                    ";
                        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                            // line 45
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), $context["val"], array(), "array"));
                            // line 46
                            echo "                    ";
                        } else {
                            // line 47
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), $context["val"], array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array())));
                            // line 48
                            echo "                    ";
                        }
                        // line 49
                        echo "                ";
                    } else {
                        // line 50
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $context["val"]);
                        // line 51
                        echo "                ";
                    }
                    // line 52
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
            ";
                // line 54
                $context["value"] = (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"));
                // line 55
                echo "
        ";
            } elseif (twig_in_filter(            // line 56
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array())))) {
                // line 57
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                    // line 58
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    // line 59
                    echo "            ";
                } else {
                    // line 60
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
                    // line 61
                    echo "            ";
                }
                // line 62
                echo "        ";
            }
            // line 63
            echo "    ";
        }
        // line 64
        echo "
    ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b96f9875a94837e0a11a81b9175290c57a7b927cb5a8a958a8db472e01cb1682->leave($__internal_b96f9875a94837e0a11a81b9175290c57a7b927cb5a8a958a8db472e01cb1682_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 65,  175 => 64,  172 => 63,  169 => 62,  166 => 61,  163 => 60,  160 => 59,  157 => 58,  154 => 57,  152 => 56,  149 => 55,  147 => 54,  144 => 53,  138 => 52,  135 => 51,  132 => 50,  129 => 49,  126 => 48,  123 => 47,  120 => 46,  117 => 45,  114 => 44,  112 => 43,  109 => 42,  106 => 41,  103 => 40,  100 => 39,  96 => 38,  93 => 37,  90 => 36,  88 => 35,  85 => 34,  82 => 33,  79 => 32,  77 => 31,  71 => 30,  64 => 27,  59 => 25,  54 => 24,  51 => 23,  45 => 22,  38 => 12,  35 => 21,  33 => 19,  31 => 17,  30 => 16,  29 => 15,  28 => 14,  19 => 12,);
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
/* {% set is_editable =*/
/*     field_description.options.editable is defined and*/
/*     field_description.options.editable and*/
/*     admin.isGranted('EDIT', object)*/
/* %}*/
/* {% set x_editable_type = field_description.type|sonata_xeditable_type %}*/
/* */
/* {% if is_editable and x_editable_type %}*/
/*     {% block field_span_attributes %}*/
/*         {% spaceless %}*/
/*             {{ parent() }}*/
/*             data-source="{{ field_description|sonata_xeditable_choices|json_encode }}"*/
/*         {% endspaceless %}*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if field_description.options.choices is defined %}*/
/*         {% if field_description.options.multiple is defined and field_description.options.multiple==true and value is iterable %}*/
/* */
/*             {% set result = '' %}*/
/*             {% set delimiter = field_description.options.delimiter|default(', ') %}*/
/* */
/*             {% for val in value %}*/
/*                 {% if result is not empty %}*/
/*                     {% set result = result ~ delimiter %}*/
/*                 {% endif %}*/
/* */
/*                 {% if field_description.options.choices[val] is defined %}*/
/*                     {% if field_description.options.catalogue is not defined %}*/
/*                         {% set result = result ~ field_description.options.choices[val] %}*/
/*                     {% else %}*/
/*                         {% set result = result ~ field_description.options.choices[val]|trans({}, field_description.options.catalogue) %}*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                     {% set result = result ~ val %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*             {% set value = result %}*/
/* */
/*         {% elseif value in field_description.options.choices|keys %}*/
/*             {% if field_description.options.catalogue is not defined %}*/
/*                 {% set value = field_description.options.choices[value] %}*/
/*             {% else %}*/
/*                 {% set value = field_description.options.choices[value]|trans({}, field_description.options.catalogue) %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     {{ value }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */

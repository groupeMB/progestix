<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig */
class __TwigTemplate_f83d144e92a5fcb1cc382f99290c5197ea062c2bf882bfc293e45b85e62a64e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26fdb5bf4ab6ba460f25a92eeac0edd5d8b1ca3988ddc70701d2adc9e83d624b = $this->env->getExtension("native_profiler");
        $__internal_26fdb5bf4ab6ba460f25a92eeac0edd5d8b1ca3988ddc70701d2adc9e83d624b->enter($__internal_26fdb5bf4ab6ba460f25a92eeac0edd5d8b1ca3988ddc70701d2adc9e83d624b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig"));

        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "hasassociationadmin", array())) {
            // line 12
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        <span id=\"field_widget_";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" >
            ";
            // line 14
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()) == "inline")) {
                // line 15
                echo "                ";
                if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()) == "table")) {
                    // line 16
                    echo "                    ";
                    if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array())) > 0)) {
                        // line 17
                        echo "                        <table class=\"table table-bordered\">
                            <thead>
                                <tr>
                                    ";
                        // line 20
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), 0, array(), "array"), "children", array()));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 21
                            echo "                                        ";
                            if (($context["field_name"] == "_delete")) {
                                // line 22
                                echo "                                            <th>";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                                echo "</th>
                                        ";
                            } else {
                                // line 24
                                echo "                                            <th ";
                                echo (($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "required", array(), "array")) ? ("class=\"required\"") : (""));
                                echo ">
                                                ";
                                // line 25
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "sonata_admin", array(), "array"), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "label", array())), "method"), "html", null, true);
                                echo "
                                            </th>
                                        ";
                            }
                            // line 28
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "                                </tr>
                            </thead>
                            <tbody class=\"sonata-ba-tbody\">
                                ";
                        // line 32
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
                        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                            // line 33
                            echo "                                    <tr>
                                        ";
                            // line 34
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", array()));
                            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                                // line 35
                                echo "                                            <td class=\"sonata-ba-td-";
                                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                                echo " control-group";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "errors", array())) > 0)) {
                                    echo " error";
                                }
                                echo "\">
                                                ";
                                // line 36
                                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "hasformfielddescriptions", array(0 => $context["field_name"]), "method", true, true)) {
                                    // line 37
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["nested_field"], 'widget');
                                    echo "

                                                    ";
                                    // line 39
                                    $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", array());
                                    // line 40
                                    echo "                                                ";
                                } else {
                                    // line 41
                                    echo "                                                    ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["nested_field"], 'widget');
                                    echo "
                                                ";
                                }
                                // line 43
                                echo "                                                ";
                                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "errors", array())) > 0)) {
                                    // line 44
                                    echo "                                                    <div class=\"help-inline sonata-ba-field-error-messages\">
                                                        ";
                                    // line 45
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["nested_field"], 'errors');
                                    echo "
                                                    </div>
                                                ";
                                }
                                // line 48
                                echo "                                            </td>
                                        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 50
                            echo "                                    </tr>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "                            </tbody>
                        </table>
                    ";
                    }
                    // line 55
                    echo "                ";
                } elseif ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array())) > 0)) {
                    // line 56
                    echo "                    <div>
                        ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
                    foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
                        // line 58
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", array()));
                        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                            // line 59
                            echo "                                ";
                            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "hasformfielddescriptions", array(0 => $context["field_name"]), "method", true, true)) {
                                // line 60
                                echo "                                    ";
                                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["nested_field"], 'row', array("inline" => "natural", "edit" => "inline"));
                                // line 63
                                echo "
                                    ";
                                // line 64
                                $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", array());
                                // line 65
                                echo "                                ";
                            } else {
                                // line 66
                                echo "                                    ";
                                if (($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "name", array()) == "_delete")) {
                                    // line 67
                                    echo "                                        ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["nested_field"], 'row', array("label" => $this->env->getExtension('translator')->trans("action_delete", array(), "SonataAdminBundle")));
                                    echo "
                                    ";
                                } else {
                                    // line 69
                                    echo "                                        ";
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["nested_field"], 'row');
                                    echo "
                                    ";
                                }
                                // line 71
                                echo "                                ";
                            }
                            // line 72
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 73
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "                    </div>
                ";
                }
                // line 76
                echo "            ";
            } else {
                // line 77
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            ";
            }
            // line 79
            echo "
        </span>

        ";
            // line 82
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()) == "inline")) {
                // line 83
                echo "
            ";
                // line 84
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                    // line 85
                    echo "                <span id=\"field_actions_";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "\" >
                    <a
                        href=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                        onclick=\"return start_field_retrieve_";
                    // line 88
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "
                    </a>
                </span>
            ";
                }
                // line 97
                echo "
            ";
                // line 99
                echo "            ";
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", 99)->display($context);
                // line 100
                echo "
        ";
            } else {
                // line 102
                echo "            <div id=\"field_container_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-container\">
                <span id=\"field_widget_";
                // line 103
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" >
                    ";
                // line 104
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
                </span>

                <span id=\"field_actions_";
                // line 107
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-actions\">
                    ";
                // line 108
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                    // line 109
                    echo "                        <a
                            href=\"";
                    // line 110
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                    echo "\"
                            onclick=\"return start_field_dialog_form_add_";
                    // line 111
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "(this);\"
                            class=\"btn btn-success btn-sm sonata-ba-action\"
                            title=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "\"
                            >
                            <i class=\"fa fa-plus-circle\"></i>
                            ";
                    // line 116
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 119
                echo "                </span>

                ";
                // line 121
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", 121)->display($context);
                // line 122
                echo "            </div>

            ";
                // line 124
                $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", 124)->display($context);
                // line 125
                echo "        ";
            }
            // line 126
            echo "    </div>
";
        }
        
        $__internal_26fdb5bf4ab6ba460f25a92eeac0edd5d8b1ca3988ddc70701d2adc9e83d624b->leave($__internal_26fdb5bf4ab6ba460f25a92eeac0edd5d8b1ca3988ddc70701d2adc9e83d624b_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 126,  332 => 125,  330 => 124,  326 => 122,  324 => 121,  320 => 119,  314 => 116,  308 => 113,  303 => 111,  299 => 110,  296 => 109,  294 => 108,  290 => 107,  284 => 104,  280 => 103,  275 => 102,  271 => 100,  268 => 99,  265 => 97,  258 => 93,  252 => 90,  247 => 88,  243 => 87,  237 => 85,  235 => 84,  232 => 83,  230 => 82,  225 => 79,  219 => 77,  216 => 76,  212 => 74,  206 => 73,  200 => 72,  197 => 71,  191 => 69,  185 => 67,  182 => 66,  179 => 65,  177 => 64,  174 => 63,  171 => 60,  168 => 59,  163 => 58,  159 => 57,  156 => 56,  153 => 55,  148 => 52,  141 => 50,  134 => 48,  128 => 45,  125 => 44,  122 => 43,  116 => 41,  113 => 40,  111 => 39,  105 => 37,  103 => 36,  92 => 35,  88 => 34,  85 => 33,  81 => 32,  76 => 29,  70 => 28,  64 => 25,  59 => 24,  53 => 22,  50 => 21,  46 => 20,  41 => 17,  38 => 16,  35 => 15,  33 => 14,  29 => 13,  24 => 12,  22 => 11,);
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
/* {% if sonata_admin.field_description.hasassociationadmin %}*/
/*     <div id="field_container_{{ id }}" class="field-container">*/
/*         <span id="field_widget_{{ id }}" >*/
/*             {% if sonata_admin.edit == 'inline' %}*/
/*                 {% if sonata_admin.inline == 'table' %}*/
/*                     {% if form.children|length > 0 %}*/
/*                         <table class="table table-bordered">*/
/*                             <thead>*/
/*                                 <tr>*/
/*                                     {% for field_name, nested_field in form.children[0].children %}*/
/*                                         {% if field_name == '_delete' %}*/
/*                                             <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>*/
/*                                         {% else %}*/
/*                                             <th {{ nested_field.vars['required']  ? 'class="required"' : '' }}>*/
/*                                                 {{ nested_field.vars['sonata_admin'].admin.trans(nested_field.vars.label) }}*/
/*                                             </th>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody class="sonata-ba-tbody">*/
/*                                 {% for nested_group_field_name, nested_group_field in form.children %}*/
/*                                     <tr>*/
/*                                         {% for field_name, nested_field in nested_group_field.children %}*/
/*                                             <td class="sonata-ba-td-{{ id }}-{{ field_name  }} control-group{% if nested_field.vars.errors|length > 0 %} error{% endif %}">*/
/*                                                 {% if sonata_admin.field_description.associationadmin.hasformfielddescriptions(field_name) is defined %}*/
/*                                                     {{ form_widget(nested_field) }}*/
/* */
/*                                                     {% set dummy = nested_group_field.setrendered %}*/
/*                                                 {% else %}*/
/*                                                     {{ form_widget(nested_field) }}*/
/*                                                 {% endif %}*/
/*                                                 {% if nested_field.vars.errors|length > 0 %}*/
/*                                                     <div class="help-inline sonata-ba-field-error-messages">*/
/*                                                         {{ form_errors(nested_field) }}*/
/*                                                     </div>*/
/*                                                 {% endif %}*/
/*                                             </td>*/
/*                                         {% endfor %}*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     {% endif %}*/
/*                 {% elseif form.children|length > 0 %}*/
/*                     <div>*/
/*                         {% for nested_group_field_name, nested_group_field in form.children %}*/
/*                             {% for field_name, nested_field in nested_group_field.children %}*/
/*                                 {% if sonata_admin.field_description.associationadmin.hasformfielddescriptions(field_name) is defined %}*/
/*                                     {{ form_row(nested_field, {*/
/*                                         'inline': 'natural',*/
/*                                         'edit'  : 'inline'*/
/*                                     }) }}*/
/*                                     {% set dummy = nested_group_field.setrendered %}*/
/*                                 {% else %}*/
/*                                     {% if nested_field.vars.name == '_delete' %}*/
/*                                         {{ form_row(nested_field, { 'label': ('action_delete'|trans({}, 'SonataAdminBundle')) }) }}*/
/*                                     {% else %}*/
/*                                         {{ form_row(nested_field) }}*/
/*                                     {% endif %}*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 {{ form_widget(form) }}*/
/*             {% endif %}*/
/* */
/*         </span>*/
/* */
/*         {% if sonata_admin.edit == 'inline' %}*/
/* */
/*             {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}*/
/*                 <span id="field_actions_{{ id }}" >*/
/*                     <a*/
/*                         href="{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}"*/
/*                         onclick="return start_field_retrieve_{{ id }}(this);"*/
/*                         class="btn btn-success btn-sm sonata-ba-action"*/
/*                         title="{{ btn_add|trans({}, btn_catalogue) }}"*/
/*                         >*/
/*                         <i class="fa fa-plus-circle"></i>*/
/*                         {{ btn_add|trans({}, btn_catalogue) }}*/
/*                     </a>*/
/*                 </span>*/
/*             {% endif %}*/
/* */
/*             {# include association code #}*/
/*             {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig' %}*/
/* */
/*         {% else %}*/
/*             <div id="field_container_{{ id }}" class="field-container">*/
/*                 <span id="field_widget_{{ id }}" >*/
/*                     {{ form_widget(form) }}*/
/*                 </span>*/
/* */
/*                 <span id="field_actions_{{ id }}" class="field-actions">*/
/*                     {% if sonata_admin.field_description.associationadmin.hasRoute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}*/
/*                         <a*/
/*                             href="{{ sonata_admin.field_description.associationadmin.generateUrl('create', sonata_admin.field_description.getOption('link_parameters', {})) }}"*/
/*                             onclick="return start_field_dialog_form_add_{{ id }}(this);"*/
/*                             class="btn btn-success btn-sm sonata-ba-action"*/
/*                             title="{{ btn_add|trans({}, btn_catalogue) }}"*/
/*                             >*/
/*                             <i class="fa fa-plus-circle"></i>*/
/*                             {{ btn_add|trans({}, btn_catalogue) }}*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </span>*/
/* */
/*                 {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig' %}*/
/*             </div>*/
/* */
/*             {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endif %}*/
/* */

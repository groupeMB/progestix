<?php

/* SonataAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_7ec9c213c19d77a398de890754b5f02771aedf5141d3cb3898746b43f84e0132 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a82dc3673678241c2438ddfa74c05fd3945a4f84cab99293d820d1af10d7707 = $this->env->getExtension("native_profiler");
        $__internal_6a82dc3673678241c2438ddfa74c05fd3945a4f84cab99293d820d1af10d7707->enter($__internal_6a82dc3673678241c2438ddfa74c05fd3945a4f84cab99293d820d1af10d7707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a82dc3673678241c2438ddfa74c05fd3945a4f84cab99293d820d1af10d7707->leave($__internal_6a82dc3673678241c2438ddfa74c05fd3945a4f84cab99293d820d1af10d7707_prof);

    }

    // line 18
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_6faf083430399a258072edf94bb755a08e8b3000e11b7fc4dbffe8472763d829 = $this->env->getExtension("native_profiler");
        $__internal_6faf083430399a258072edf94bb755a08e8b3000e11b7fc4dbffe8472763d829->enter($__internal_6faf083430399a258072edf94bb755a08e8b3000e11b7fc4dbffe8472763d829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 19
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 20
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
        
        $__internal_6faf083430399a258072edf94bb755a08e8b3000e11b7fc4dbffe8472763d829->leave($__internal_6faf083430399a258072edf94bb755a08e8b3000e11b7fc4dbffe8472763d829_prof);

    }

    // line 23
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d4ba8492ffa9de9dc28f2fbe89aaa1d51b91f1d0e2e1eeb41e6f3b3cde917b77 = $this->env->getExtension("native_profiler");
        $__internal_d4ba8492ffa9de9dc28f2fbe89aaa1d51b91f1d0e2e1eeb41e6f3b3cde917b77->enter($__internal_d4ba8492ffa9de9dc28f2fbe89aaa1d51b91f1d0e2e1eeb41e6f3b3cde917b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 24
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 25
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_d4ba8492ffa9de9dc28f2fbe89aaa1d51b91f1d0e2e1eeb41e6f3b3cde917b77->leave($__internal_d4ba8492ffa9de9dc28f2fbe89aaa1d51b91f1d0e2e1eeb41e6f3b3cde917b77_prof);

    }

    // line 28
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_df328696b2c8e0f8bf5840f35ea6a6d1f598b7f107cfc707e0b58417c964d505 = $this->env->getExtension("native_profiler");
        $__internal_df328696b2c8e0f8bf5840f35ea6a6d1f598b7f107cfc707e0b58417c964d505->enter($__internal_df328696b2c8e0f8bf5840f35ea6a6d1f598b7f107cfc707e0b58417c964d505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 29
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 30
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_df328696b2c8e0f8bf5840f35ea6a6d1f598b7f107cfc707e0b58417c964d505->leave($__internal_df328696b2c8e0f8bf5840f35ea6a6d1f598b7f107cfc707e0b58417c964d505_prof);

    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_7e6e64ec6a88b26a374b93e898e6d75311095af40af174617ecaf4fde75da6c1 = $this->env->getExtension("native_profiler");
        $__internal_7e6e64ec6a88b26a374b93e898e6d75311095af40af174617ecaf4fde75da6c1->enter($__internal_7e6e64ec6a88b26a374b93e898e6d75311095af40af174617ecaf4fde75da6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 36
        echo "        ";
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class", array()) . " ") . (((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != ""))) ? ((((((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio")) . "-") . (isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")))) : ("")))));
        // line 37
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 38
            echo "            ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 39
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
        }
        // line 41
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 42
            echo "            ";
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline"))) {
                // line 43
                echo "                <div class=\"";
                echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("checkbox") : ("radio"));
                echo "\">
            ";
            }
            // line 45
            echo "            <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "widget_class", array()), "")) : ("")))));
            echo "
            ";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
            </label>
            ";
            // line 49
            if ((array_key_exists("widget_type", $context) && ((isset($context["widget_type"]) ? $context["widget_type"] : $this->getContext($context, "widget_type")) != "inline"))) {
                // line 50
                echo "                </div>
            ";
            }
            // line 52
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        ";
        $this->displayBlock("form_message", $context, $blocks);
        echo "
        ";
        // line 54
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 55
            echo "            </div>
        ";
        }
        // line 57
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7e6e64ec6a88b26a374b93e898e6d75311095af40af174617ecaf4fde75da6c1->leave($__internal_7e6e64ec6a88b26a374b93e898e6d75311095af40af174617ecaf4fde75da6c1_prof);

    }

    // line 60
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_63ce329be16cda9deeb2c26f0fd8c8b7b02c6d18ffdce1bd31e6e759215753db = $this->env->getExtension("native_profiler");
        $__internal_63ce329be16cda9deeb2c26f0fd8c8b7b02c6d18ffdce1bd31e6e759215753db->enter($__internal_63ce329be16cda9deeb2c26f0fd8c8b7b02c6d18ffdce1bd31e6e759215753db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
            // line 63
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 64
            echo "        ";
        }
        // line 65
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 66
            echo "            <div class=\"checkbox\">
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if (((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) && array_key_exists("label_render", $context))) {
            // line 70
            echo "            <label class=\"";
            if ((array_key_exists("inline", $context) && (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")))) {
                echo "checkbox-inline";
            }
            echo "\">
        ";
        }
        // line 72
        echo "
        <input type=\"checkbox\" ";
        // line 73
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo "/>
        ";
        // line 74
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 75
            echo "            ";
            if ((array_key_exists("label_render", $context) && twig_in_filter((isset($context["widget_checkbox_label"]) ? $context["widget_checkbox_label"] : $this->getContext($context, "widget_checkbox_label")), array(0 => "both", 1 => "widget")))) {
                // line 76
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
                </label>
            ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        ";
        if ((($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()) != null) && !twig_in_filter("choice", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array())))) {
            // line 81
            echo "            </div>
            ";
            // line 82
            $this->displayBlock("form_message", $context, $blocks);
            echo "
        ";
        }
        // line 84
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_63ce329be16cda9deeb2c26f0fd8c8b7b02c6d18ffdce1bd31e6e759215753db->leave($__internal_63ce329be16cda9deeb2c26f0fd8c8b7b02c6d18ffdce1bd31e6e759215753db_prof);

    }

    // line 87
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_5cb650ba094e1af489001b6d4ca9ca5bd0f8a2fdd55c6af091e186b5eab171af = $this->env->getExtension("native_profiler");
        $__internal_5cb650ba094e1af489001b6d4ca9ca5bd0f8a2fdd55c6af091e186b5eab171af->enter($__internal_5cb650ba094e1af489001b6d4ca9ca5bd0f8a2fdd55c6af091e186b5eab171af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 88
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "SonataAdminBundle:Form:filter_admin_fields.html.twig", 88)->display($context);
        
        $__internal_5cb650ba094e1af489001b6d4ca9ca5bd0f8a2fdd55c6af091e186b5eab171af->leave($__internal_5cb650ba094e1af489001b6d4ca9ca5bd0f8a2fdd55c6af091e186b5eab171af_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 88,  280 => 87,  272 => 84,  267 => 82,  264 => 81,  261 => 80,  258 => 79,  251 => 76,  248 => 75,  246 => 74,  234 => 73,  231 => 72,  223 => 70,  221 => 69,  218 => 68,  214 => 66,  211 => 65,  208 => 64,  205 => 63,  202 => 62,  199 => 61,  193 => 60,  185 => 57,  181 => 55,  179 => 54,  174 => 53,  168 => 52,  164 => 50,  162 => 49,  157 => 47,  153 => 46,  137 => 45,  131 => 43,  128 => 42,  123 => 41,  117 => 39,  114 => 38,  111 => 37,  108 => 36,  105 => 35,  102 => 34,  96 => 33,  86 => 30,  83 => 29,  77 => 28,  67 => 25,  64 => 24,  58 => 23,  48 => 20,  45 => 19,  39 => 18,  11 => 12,);
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
/* {% extends 'form_div_layout.html.twig' %}*/
/* */
/* {#*/
/*     Inspired from MopaBootstrapBundle: https://github.com/phiamo/MopaBootstrapBundle*/
/* #}*/
/* */
/* {% block choice_widget_collapsed %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class|default(''))}) %}*/
/*         {% set label_attr = label_attr|merge({'class': (label_attr.class ~ ' ' ~ (widget_type is defined and widget_type != '' ? (multiple ? 'checkbox' : 'radio') ~ '-' ~ widget_type : ''))}) %}*/
/*         {% if expanded %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('')}) %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*         {% endif %}*/
/*         {% for child in form %}*/
/*             {% if widget_type is defined and widget_type != 'inline' %}*/
/*                 <div class="{{ multiple ? 'checkbox' : 'radio' }}">*/
/*             {% endif %}*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{ form_widget(child, {'attr': {'class': attr.widget_class|default('')}}) }}*/
/*             {{ child.vars.label|trans({}, translation_domain) }}*/
/*             </label>*/
/*             {% if widget_type is defined and widget_type != 'inline' %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {{ block('form_message') }}*/
/*         {% if expanded %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget %}*/
/*     {% spaceless %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             <div class="checkbox">*/
/*         {% endif %}*/
/* */
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes and label_render is defined %}*/
/*             <label class="{% if inline is defined and inline %}checkbox-inline{% endif %}">*/
/*         {% endif %}*/
/* */
/*         <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %}/>*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             {% if label_render is defined and widget_checkbox_label in ['both', 'widget'] %}*/
/*                 {{ label|trans({}, translation_domain) }}*/
/*                 </label>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% if form.parent != null and 'choice' not in form.parent.vars.block_prefixes %}*/
/*             </div>*/
/*             {{ block('form_message') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock checkbox_widget %}*/
/* */
/* {% block sonata_type_model_autocomplete_widget %}*/
/*     {% include template %}*/
/* {% endblock sonata_type_model_autocomplete_widget %}*/
/* */

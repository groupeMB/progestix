<?php

/* @SonataAdmin/Form/form_admin_fields.html.twig */
class __TwigTemplate_c23f78781ede8f60ceaf3305a9561f44800a132482d446a860ad4387c7637e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SonataAdmin/Form/form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'sonata_help' => array($this, 'block_sonata_help'),
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_choice_field_mask_widget' => array($this, 'block_sonata_type_choice_field_mask_widget'),
            'sonata_type_choice_multiple_sortable' => array($this, 'block_sonata_type_choice_multiple_sortable'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8088976990e071d47a84c81dd92404fd3ac2782af7e7a3d43b3b6b3a722c4639 = $this->env->getExtension("native_profiler");
        $__internal_8088976990e071d47a84c81dd92404fd3ac2782af7e7a3d43b3b6b3a722c4639->enter($__internal_8088976990e071d47a84c81dd92404fd3ac2782af7e7a3d43b3b6b3a722c4639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Form/form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8088976990e071d47a84c81dd92404fd3ac2782af7e7a3d43b3b6b3a722c4639->leave($__internal_8088976990e071d47a84c81dd92404fd3ac2782af7e7a3d43b3b6b3a722c4639_prof);

    }

    // line 14
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_917ad6f35104585fa102ac15973d91b860f16b5dd37a8dd99e3613efebb74ce4 = $this->env->getExtension("native_profiler");
        $__internal_917ad6f35104585fa102ac15973d91b860f16b5dd37a8dd99e3613efebb74ce4->enter($__internal_917ad6f35104585fa102ac15973d91b860f16b5dd37a8dd99e3613efebb74ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 15
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 16
            echo "        ";
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 17
            echo "            <ul class=\"list-unstyled\">
                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                    <li><i class=\"fa fa-exclamation-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </ul>
        ";
            // line 22
            if ( !$this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</div>";
            }
            // line 23
            echo "    ";
        }
        
        $__internal_917ad6f35104585fa102ac15973d91b860f16b5dd37a8dd99e3613efebb74ce4->leave($__internal_917ad6f35104585fa102ac15973d91b860f16b5dd37a8dd99e3613efebb74ce4_prof);

    }

    // line 26
    public function block_sonata_help($context, array $blocks = array())
    {
        $__internal_b02897536a8bc62970696a0a12540167477087b4f041206703beb2b1223cb6cc = $this->env->getExtension("native_profiler");
        $__internal_b02897536a8bc62970696a0a12540167477087b4f041206703beb2b1223cb6cc->enter($__internal_b02897536a8bc62970696a0a12540167477087b4f041206703beb2b1223cb6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_help"));

        // line 27
        ob_start();
        // line 28
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 29
            echo "    <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b02897536a8bc62970696a0a12540167477087b4f041206703beb2b1223cb6cc->leave($__internal_b02897536a8bc62970696a0a12540167477087b4f041206703beb2b1223cb6cc_prof);

    }

    // line 34
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_ecd4260013537aa005450c2d2eb112b40891036b6eb5cf194e012a9ec01313c3 = $this->env->getExtension("native_profiler");
        $__internal_ecd4260013537aa005450c2d2eb112b40891036b6eb5cf194e012a9ec01313c3->enter($__internal_ecd4260013537aa005450c2d2eb112b40891036b6eb5cf194e012a9ec01313c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 35
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 36
        $this->displayBlock("sonata_help", $context, $blocks);
        
        $__internal_ecd4260013537aa005450c2d2eb112b40891036b6eb5cf194e012a9ec01313c3->leave($__internal_ecd4260013537aa005450c2d2eb112b40891036b6eb5cf194e012a9ec01313c3_prof);

    }

    // line 39
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_4fb881a6451a81afb9eb214a86acd4d3e97c9b0744eafb3f8531ca90f875ce0c = $this->env->getExtension("native_profiler");
        $__internal_4fb881a6451a81afb9eb214a86acd4d3e97c9b0744eafb3f8531ca90f875ce0c->enter($__internal_4fb881a6451a81afb9eb214a86acd4d3e97c9b0744eafb3f8531ca90f875ce0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 40
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 41
        echo "    ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "file")) {
            // line 42
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_4fb881a6451a81afb9eb214a86acd4d3e97c9b0744eafb3f8531ca90f875ce0c->leave($__internal_4fb881a6451a81afb9eb214a86acd4d3e97c9b0744eafb3f8531ca90f875ce0c_prof);

    }

    // line 47
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_a54d7649aee65f806d4061c8230f44060d0a1a5b60469d0ae193bcb75ac8e9a7 = $this->env->getExtension("native_profiler");
        $__internal_a54d7649aee65f806d4061c8230f44060d0a1a5b60469d0ae193bcb75ac8e9a7->enter($__internal_a54d7649aee65f806d4061c8230f44060d0a1a5b60469d0ae193bcb75ac8e9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 48
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 49
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_a54d7649aee65f806d4061c8230f44060d0a1a5b60469d0ae193bcb75ac8e9a7->leave($__internal_a54d7649aee65f806d4061c8230f44060d0a1a5b60469d0ae193bcb75ac8e9a7_prof);

    }

    // line 52
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a97cb1fdd47d33e0dadd42d5ed9aad89d756bb16ebfb559069b68233adb30a2e = $this->env->getExtension("native_profiler");
        $__internal_a97cb1fdd47d33e0dadd42d5ed9aad89d756bb16ebfb559069b68233adb30a2e->enter($__internal_a97cb1fdd47d33e0dadd42d5ed9aad89d756bb16ebfb559069b68233adb30a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 53
        if (((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")) == "{{ widget }}")) {
            // line 54
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 56
            echo "        ";
            $context["currencySymbol"] = trim(twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")));
            // line 57
            echo "        ";
            if (preg_match("/^{{ widget }}/", (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 58
                echo "            <div class=\"input-group\">";
                // line 59
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 60
                echo "<span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>
            </div>
        ";
            } elseif (preg_match("/{{ widget }}\$/",             // line 62
(isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")))) {
                // line 63
                echo "            <div class=\"input-group\">
                <span class=\"input-group-addon\">";
                // line 64
                echo twig_escape_filter($this->env, (isset($context["currencySymbol"]) ? $context["currencySymbol"] : $this->getContext($context, "currencySymbol")), "html", null, true);
                echo "</span>";
                // line 65
                $this->displayBlock("form_widget_simple", $context, $blocks);
                // line 66
                echo "</div>
        ";
            }
            // line 68
            echo "    ";
        }
        
        $__internal_a97cb1fdd47d33e0dadd42d5ed9aad89d756bb16ebfb559069b68233adb30a2e->leave($__internal_a97cb1fdd47d33e0dadd42d5ed9aad89d756bb16ebfb559069b68233adb30a2e_prof);

    }

    // line 71
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_1c8522f9a56e0f5283a5aa569a2837ec490ccb821046c3e12b990b6994399d61 = $this->env->getExtension("native_profiler");
        $__internal_1c8522f9a56e0f5283a5aa569a2837ec490ccb821046c3e12b990b6994399d61->enter($__internal_1c8522f9a56e0f5283a5aa569a2837ec490ccb821046c3e12b990b6994399d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 72
        echo "    ";
        ob_start();
        // line 73
        echo "        ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 74
        echo "        <div class=\"input-group\">
            ";
        // line 75
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">%</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1c8522f9a56e0f5283a5aa569a2837ec490ccb821046c3e12b990b6994399d61->leave($__internal_1c8522f9a56e0f5283a5aa569a2837ec490ccb821046c3e12b990b6994399d61_prof);

    }

    // line 81
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c3812698f86feea4e7bcc6a928bf4d3bba6a0b0548e10b907356ffded4770b57 = $this->env->getExtension("native_profiler");
        $__internal_c3812698f86feea4e7bcc6a928bf4d3bba6a0b0548e10b907356ffded4770b57->enter($__internal_c3812698f86feea4e7bcc6a928bf4d3bba6a0b0548e10b907356ffded4770b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 82
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 83
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 86
            echo "<div class=\"checkbox\">";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 88
            echo "</div>";
        }
        
        $__internal_c3812698f86feea4e7bcc6a928bf4d3bba6a0b0548e10b907356ffded4770b57->leave($__internal_c3812698f86feea4e7bcc6a928bf4d3bba6a0b0548e10b907356ffded4770b57_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c7877aba995b0d91cef85966e91de37352a2e616b2594a743c10f987da634fd7 = $this->env->getExtension("native_profiler");
        $__internal_c7877aba995b0d91cef85966e91de37352a2e616b2594a743c10f987da634fd7->enter($__internal_c7877aba995b0d91cef85966e91de37352a2e616b2594a743c10f987da634fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 94
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 95
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 97
            echo "<div class=\"radio\">";
            // line 98
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 99
            echo "</div>";
        }
        
        $__internal_c7877aba995b0d91cef85966e91de37352a2e616b2594a743c10f987da634fd7->leave($__internal_c7877aba995b0d91cef85966e91de37352a2e616b2594a743c10f987da634fd7_prof);

    }

    // line 104
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_17aa5fa748ff54fceb366cec3fe512e9692e89e6c035a10f3c6faaa9dd3834d1 = $this->env->getExtension("native_profiler");
        $__internal_17aa5fa748ff54fceb366cec3fe512e9692e89e6c035a10f3c6faaa9dd3834d1->enter($__internal_17aa5fa748ff54fceb366cec3fe512e9692e89e6c035a10f3c6faaa9dd3834d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 105
        ob_start();
        // line 106
        echo "    ";
        if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 107
            echo "        ";
            $context["label_class"] = "col-sm-3";
            // line 108
            echo "    ";
        }
        // line 109
        echo "
    ";
        // line 110
        $context["label_class"] = (((array_key_exists("label_class", $context)) ? (_twig_default_filter((isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")), "")) : ("")) . " control-label");
        // line 111
        echo "
    ";
        // line 112
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 113
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 114
            echo "
        ";
            // line 115
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 116
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 117
                echo "        ";
            }
            // line 118
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 119
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 120
                echo "        ";
            }
            // line 121
            echo "
        ";
            // line 122
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 123
                if ((array_key_exists("label_format", $context) &&  !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format"))))) {
                    // line 124
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 125
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 126
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 129
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 132
            echo "
        <label";
            // line 133
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
            // line 134
            if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            } else {
                // line 137
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method"), "html", null, true);
                echo "
            ";
            }
            // line 139
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_17aa5fa748ff54fceb366cec3fe512e9692e89e6c035a10f3c6faaa9dd3834d1->leave($__internal_17aa5fa748ff54fceb366cec3fe512e9692e89e6c035a10f3c6faaa9dd3834d1_prof);

    }

    // line 144
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8da0823c33990f603e8d07de437e984a4170875c4c5bf885cb50a4a299fb5dc6 = $this->env->getExtension("native_profiler");
        $__internal_8da0823c33990f603e8d07de437e984a4170875c4c5bf885cb50a4a299fb5dc6->enter($__internal_8da0823c33990f603e8d07de437e984a4170875c4c5bf885cb50a4a299fb5dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 145
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8da0823c33990f603e8d07de437e984a4170875c4c5bf885cb50a4a299fb5dc6->leave($__internal_8da0823c33990f603e8d07de437e984a4170875c4c5bf885cb50a4a299fb5dc6_prof);

    }

    // line 148
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_ca48047944a9591177643bf459fb5f549839ff9fb1b1a15e1abf54da69a3856d = $this->env->getExtension("native_profiler");
        $__internal_ca48047944a9591177643bf459fb5f549839ff9fb1b1a15e1abf54da69a3856d->enter($__internal_ca48047944a9591177643bf459fb5f549839ff9fb1b1a15e1abf54da69a3856d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 149
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ca48047944a9591177643bf459fb5f549839ff9fb1b1a15e1abf54da69a3856d->leave($__internal_ca48047944a9591177643bf459fb5f549839ff9fb1b1a15e1abf54da69a3856d_prof);

    }

    // line 152
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f31f3ba31b7f353da8f1706db17501eadf7a6e77f1fc8ee1086cef3dbf2f6d82 = $this->env->getExtension("native_profiler");
        $__internal_f31f3ba31b7f353da8f1706db17501eadf7a6e77f1fc8ee1086cef3dbf2f6d82->enter($__internal_f31f3ba31b7f353da8f1706db17501eadf7a6e77f1fc8ee1086cef3dbf2f6d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 153
        echo "    ";
        if ($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
            // line 154
            echo "        ";
            $context["translation_domain"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array());
            // line 155
            echo "    ";
        }
        // line 156
        echo "    ";
        // line 157
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 158
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 159
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 160
                echo "        ";
            }
            // line 161
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 162
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 163
                echo "        ";
            }
            // line 164
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 165
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 166
                echo "        ";
            }
            // line 167
            echo "        <label";
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
            echo ">";
            // line 168
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 169
            if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                // line 170
                echo "<span class=\"control-label__text\">";
                // line 171
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                // line 172
                echo "</span>";
            }
            // line 174
            echo "</label>
    ";
        }
        
        $__internal_f31f3ba31b7f353da8f1706db17501eadf7a6e77f1fc8ee1086cef3dbf2f6d82->leave($__internal_f31f3ba31b7f353da8f1706db17501eadf7a6e77f1fc8ee1086cef3dbf2f6d82_prof);

    }

    // line 178
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f025fd52e294aeaf0ce328a673a6abf9fa81380413daf3dc9d7e42de83ca0a46 = $this->env->getExtension("native_profiler");
        $__internal_f025fd52e294aeaf0ce328a673a6abf9fa81380413daf3dc9d7e42de83ca0a46->enter($__internal_f025fd52e294aeaf0ce328a673a6abf9fa81380413daf3dc9d7e42de83ca0a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 179
        ob_start();
        // line 180
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " list-unstyled")));
        // line 181
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 183
            echo "        <li>
            ";
            // line 184
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 185
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f025fd52e294aeaf0ce328a673a6abf9fa81380413daf3dc9d7e42de83ca0a46->leave($__internal_f025fd52e294aeaf0ce328a673a6abf9fa81380413daf3dc9d7e42de83ca0a46_prof);

    }

    // line 191
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_88feac948a0cbd729a10ef0e3c29642a23e2a0069ae5f8c3f06a531f0b343b17 = $this->env->getExtension("native_profiler");
        $__internal_88feac948a0cbd729a10ef0e3c29642a23e2a0069ae5f8c3f06a531f0b343b17->enter($__internal_88feac948a0cbd729a10ef0e3c29642a23e2a0069ae5f8c3f06a531f0b343b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 192
        ob_start();
        // line 193
        echo "    ";
        if ((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && array_key_exists("placeholder", $context)) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))))) {
            // line 194
            echo "        ";
            $context["required"] = false;
            // line 195
            echo "    ";
        } elseif (((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && array_key_exists("empty_value", $context)) && array_key_exists("empty_value_in_choices", $context)) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 196
            echo "        ";
            $context["required"] = false;
            // line 197
            echo "    ";
        }
        // line 198
        echo "
    ";
        // line 199
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 200
        echo "    ";
        if (((array_key_exists("sortable", $context) && (isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) && (isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 201
            echo "        ";
            $this->displayBlock("sonata_type_choice_multiple_sortable", $context, $blocks);
            echo "
    ";
        } else {
            // line 203
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo " >
            ";
            // line 204
            if ((array_key_exists("empty_value", $context) &&  !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))))) {
                // line 205
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 206
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 207
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 209
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 211
                echo "                </option>
            ";
            } elseif ((            // line 212
array_key_exists("placeholder", $context) &&  !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))))) {
                // line 213
                echo "                <option value=\"\"";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 214
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 215
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 217
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 219
                echo "                </option>
            ";
            }
            // line 221
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 222
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 223
                echo "                ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                ";
                // line 224
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 225
                    echo "                    <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
                ";
                }
                // line 227
                echo "            ";
            }
            // line 228
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 229
            echo "            ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_88feac948a0cbd729a10ef0e3c29642a23e2a0069ae5f8c3f06a531f0b343b17->leave($__internal_88feac948a0cbd729a10ef0e3c29642a23e2a0069ae5f8c3f06a531f0b343b17_prof);

    }

    // line 235
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4f965887761bf7af2cd56ec96dccb7d43014800e8a32fecb31c5af376685ad58 = $this->env->getExtension("native_profiler");
        $__internal_4f965887761bf7af2cd56ec96dccb7d43014800e8a32fecb31c5af376685ad58->enter($__internal_4f965887761bf7af2cd56ec96dccb7d43014800e8a32fecb31c5af376685ad58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 236
        ob_start();
        // line 237
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 238
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 240
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 241
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 242
                echo "        ";
            }
            // line 243
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-4")) : ("col-sm-4"));
            // line 244
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 245
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" => (((("<div class=\"" .             // line 246
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (((("<div class=\"" .             // line 247
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (((("<div class=\"" .             // line 248
(isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class"))) . "\">") . $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 249
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4f965887761bf7af2cd56ec96dccb7d43014800e8a32fecb31c5af376685ad58->leave($__internal_4f965887761bf7af2cd56ec96dccb7d43014800e8a32fecb31c5af376685ad58_prof);

    }

    // line 255
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5c9726f8eca9bc14e2517300035da807facb98152def2e759135fe1aec21d5fb = $this->env->getExtension("native_profiler");
        $__internal_5c9726f8eca9bc14e2517300035da807facb98152def2e759135fe1aec21d5fb->enter($__internal_5c9726f8eca9bc14e2517300035da807facb98152def2e759135fe1aec21d5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 256
        ob_start();
        // line 257
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 258
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 260
            echo "        ";
            if (( !array_key_exists("row", $context) || ((isset($context["row"]) ? $context["row"] : $this->getContext($context, "row")) == true))) {
                // line 261
                echo "            ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
                // line 262
                echo "        ";
            }
            // line 263
            echo "        ";
            $context["input_wrapper_class"] = ((array_key_exists("input_wrapper_class", $context)) ? (_twig_default_filter((isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "col-sm-6")) : ("col-sm-6"));
            // line 264
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"";
            // line 265
            echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
            echo "\">
                ";
            // line 266
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo "
            </div>
            ";
            // line 268
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                // line 269
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 270
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 273
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                // line 274
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["input_wrapper_class"]) ? $context["input_wrapper_class"] : $this->getContext($context, "input_wrapper_class")), "html", null, true);
                echo "\">
                    ";
                // line 275
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 278
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5c9726f8eca9bc14e2517300035da807facb98152def2e759135fe1aec21d5fb->leave($__internal_5c9726f8eca9bc14e2517300035da807facb98152def2e759135fe1aec21d5fb_prof);

    }

    // line 283
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_17ce334aa71938ffec9709a3ccb794094977ae705471d10666c14f54e9947309 = $this->env->getExtension("native_profiler");
        $__internal_17ce334aa71938ffec9709a3ccb794094977ae705471d10666c14f54e9947309->enter($__internal_17ce334aa71938ffec9709a3ccb794094977ae705471d10666c14f54e9947309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 284
        ob_start();
        // line 285
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 286
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 288
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " row")));
            // line 289
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 290
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            echo "
            ";
            // line 291
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            echo "

            ";
            // line 293
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 294
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 295
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 298
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 300
            echo "
            ";
            // line 301
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), "vars", array()), "widget", array()) == "single_text")) {
                // line 302
                echo "                <div class=\"col-sm-2\">
                    ";
                // line 303
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
                echo "
                </div>
            ";
            } else {
                // line 306
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("row" => false, "input_wrapper_class" => "col-sm-2"));
                echo "
            ";
            }
            // line 308
            echo "        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_17ce334aa71938ffec9709a3ccb794094977ae705471d10666c14f54e9947309->leave($__internal_17ce334aa71938ffec9709a3ccb794094977ae705471d10666c14f54e9947309_prof);

    }

    // line 313
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_92d5306b05f8535617af302c0340b0b1adbcdab7dfb47eef0b9192d82e55307f = $this->env->getExtension("native_profiler");
        $__internal_92d5306b05f8535617af302c0340b0b1adbcdab7dfb47eef0b9192d82e55307f->enter($__internal_92d5306b05f8535617af302c0340b0b1adbcdab7dfb47eef0b9192d82e55307f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 314
        echo "    ";
        $context["show_label"] = ((array_key_exists("show_label", $context)) ? (_twig_default_filter((isset($context["show_label"]) ? $context["show_label"] : $this->getContext($context, "show_label")), true)) : (true));
        // line 315
        echo "    <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 316
        if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", true, true)) {
            // line 317
            echo "            ";
            $context["label"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array()), (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) : ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            // line 318
            echo "        ";
        }
        // line 319
        echo "
        ";
        // line 320
        $context["div_class"] = "sonata-ba-field";
        // line 321
        echo "
        ";
        // line 322
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 323
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-collection-row-without-label");
            // line 324
            echo "        ";
        }
        // line 325
        echo "
        ";
        // line 326
        if ((array_key_exists("sonata_admin", $context) && ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal"))) {
            // line 327
            echo "            ";
            // line 328
            echo "            ";
            if ((((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "checked", array(), "any", true, true))) {
                // line 329
                echo "                ";
                if (twig_in_filter("collection", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "block_prefixes", array()))) {
                    // line 330
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-12");
                    // line 331
                    echo "                ";
                } else {
                    // line 332
                    echo "                    ";
                    $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9 col-sm-offset-3");
                    // line 333
                    echo "                ";
                }
                // line 334
                echo "            ";
            } else {
                // line 335
                echo "                ";
                $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " col-sm-9");
                // line 336
                echo "            ";
            }
            // line 337
            echo "        ";
        }
        // line 338
        echo "
        ";
        // line 339
        if ((isset($context["show_label"]) ? $context["show_label"] : $this->getContext($context, "show_label"))) {
            // line 340
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
        ";
        }
        // line 342
        echo "
        ";
        // line 343
        if ((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
            // line 344
            echo "            ";
            $context["div_class"] = (((((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array())) . "-") . $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()));
            // line 345
            echo "        ";
        }
        // line 346
        echo "
        ";
        // line 347
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 348
            echo "            ";
            $context["div_class"] = ((isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")) . " sonata-ba-field-error");
            // line 349
            echo "        ";
        }
        // line 350
        echo "
        <div class=\"";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo "\">
            ";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 353
        echo "
            ";
        // line 354
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 355
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 356
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 359
        echo "
            ";
        // line 360
        if (((array_key_exists("sonata_admin", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) && (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "help", array()), false)) : (false)))) {
            // line 361
            echo "                <span class=\"help-block sonata-ba-field-help\">";
            echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method");
            echo "</span>
            ";
        }
        // line 363
        echo "        </div>
    </div>
";
        
        $__internal_92d5306b05f8535617af302c0340b0b1adbcdab7dfb47eef0b9192d82e55307f->leave($__internal_92d5306b05f8535617af302c0340b0b1adbcdab7dfb47eef0b9192d82e55307f_prof);

    }

    // line 367
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c7f1159390404129efc9ec44bdd32a09abec8e114b9542d5bbb15b0f6b9d0473 = $this->env->getExtension("native_profiler");
        $__internal_c7f1159390404129efc9ec44bdd32a09abec8e114b9542d5bbb15b0f6b9d0473->enter($__internal_c7f1159390404129efc9ec44bdd32a09abec8e114b9542d5bbb15b0f6b9d0473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 368
        $context["show_label"] = false;
        // line 369
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c7f1159390404129efc9ec44bdd32a09abec8e114b9542d5bbb15b0f6b9d0473->leave($__internal_c7f1159390404129efc9ec44bdd32a09abec8e114b9542d5bbb15b0f6b9d0473_prof);

    }

    // line 372
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a7d39d04305e99fbe6729a1c6f53164dd6582a531cce377a2578c5ff9437acb9 = $this->env->getExtension("native_profiler");
        $__internal_a7d39d04305e99fbe6729a1c6f53164dd6582a531cce377a2578c5ff9437acb9->enter($__internal_a7d39d04305e99fbe6729a1c6f53164dd6582a531cce377a2578c5ff9437acb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 373
        $context["show_label"] = false;
        // line 374
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a7d39d04305e99fbe6729a1c6f53164dd6582a531cce377a2578c5ff9437acb9->leave($__internal_a7d39d04305e99fbe6729a1c6f53164dd6582a531cce377a2578c5ff9437acb9_prof);

    }

    // line 377
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_d13e64e97ee42fd32da802453ec7729c309588996ca0282ce1603d35cbdaa55f = $this->env->getExtension("native_profiler");
        $__internal_d13e64e97ee42fd32da802453ec7729c309588996ca0282ce1603d35cbdaa55f->enter($__internal_d13e64e97ee42fd32da802453ec7729c309588996ca0282ce1603d35cbdaa55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 378
        ob_start();
        // line 379
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 380
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 381
            echo "            <div class=\"row\">
                <div class=\"col-xs-1\">
                    <a href=\"#\" class=\"btn btn-link sonata-collection-delete\">
                        <i class=\"fa fa-minus-circle\"></i>
                    </a>
                </div>
                <div class=\"col-xs-11\">
        ";
        }
        // line 389
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row', array("label" => false));
        echo "
        ";
        // line 390
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 391
            echo "                </div>
            </div>
        ";
        }
        // line 394
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d13e64e97ee42fd32da802453ec7729c309588996ca0282ce1603d35cbdaa55f->leave($__internal_d13e64e97ee42fd32da802453ec7729c309588996ca0282ce1603d35cbdaa55f_prof);

    }

    // line 398
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_04389441e29ed2873833022f2a72e8ea5e6d24a64a769169604e28ecdfcbfe44 = $this->env->getExtension("native_profiler");
        $__internal_04389441e29ed2873833022f2a72e8ea5e6d24a64a769169604e28ecdfcbfe44->enter($__internal_04389441e29ed2873833022f2a72e8ea5e6d24a64a769169604e28ecdfcbfe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 399
        ob_start();
        // line 400
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 401
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 402
            echo "        ";
            $context["allow_delete_backup"] = (isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"));
            // line 403
            echo "        ";
            $context["allow_delete"] = true;
            // line 404
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 405
            echo "        ";
            $context["allow_delete"] = (isset($context["allow_delete_backup"]) ? $context["allow_delete_backup"] : $this->getContext($context, "allow_delete_backup"));
            // line 406
            echo "    ";
        }
        // line 407
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 408
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 409
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 410
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 412
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 413
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 414
            echo "            <div><a href=\"#\" class=\"btn btn-link sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 416
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_04389441e29ed2873833022f2a72e8ea5e6d24a64a769169604e28ecdfcbfe44->leave($__internal_04389441e29ed2873833022f2a72e8ea5e6d24a64a769169604e28ecdfcbfe44_prof);

    }

    // line 420
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_6e72d075ab14b4f2457d0b208983988a5b079ddbd8204bbbf4edf4c54e6b14db = $this->env->getExtension("native_profiler");
        $__internal_6e72d075ab14b4f2457d0b208983988a5b079ddbd8204bbbf4edf4c54e6b14db->enter($__internal_6e72d075ab14b4f2457d0b208983988a5b079ddbd8204bbbf4edf4c54e6b14db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 421
        echo "    ";
        ob_start();
        // line 422
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 423
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 425
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 426
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        echo "
            ";
        // line 429
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6e72d075ab14b4f2457d0b208983988a5b079ddbd8204bbbf4edf4c54e6b14db->leave($__internal_6e72d075ab14b4f2457d0b208983988a5b079ddbd8204bbbf4edf4c54e6b14db_prof);

    }

    // line 434
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_aecb3eb00efe4cca085e5fab5cb49f1d03ffcd9fa9d8347a66ceec5baefe826b = $this->env->getExtension("native_profiler");
        $__internal_aecb3eb00efe4cca085e5fab5cb49f1d03ffcd9fa9d8347a66ceec5baefe826b->enter($__internal_aecb3eb00efe4cca085e5fab5cb49f1d03ffcd9fa9d8347a66ceec5baefe826b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 435
        echo "    ";
        ob_start();
        // line 436
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 438
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 440
        $context["div_class"] = "";
        // line 441
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "options", array()), "form_type", array(), "array") == "horizontal")) {
            // line 442
            echo "                ";
            $context["div_class"] = "col-sm-9";
            // line 443
            echo "            ";
        }
        // line 444
        echo "
            <div class=\"";
        // line 445
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 446
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 447
        echo "            </div>

            ";
        // line 449
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), "vars", array()), "errors", array())) > 0)) {
            // line 450
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 451
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 454
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_aecb3eb00efe4cca085e5fab5cb49f1d03ffcd9fa9d8347a66ceec5baefe826b->leave($__internal_aecb3eb00efe4cca085e5fab5cb49f1d03ffcd9fa9d8347a66ceec5baefe826b_prof);

    }

    // line 458
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_37a7aaa9062bc95e3e407f6168fb58b2b257f3390832e95515d683053bca2626 = $this->env->getExtension("native_profiler");
        $__internal_37a7aaa9062bc95e3e407f6168fb58b2b257f3390832e95515d683053bca2626->enter($__internal_37a7aaa9062bc95e3e407f6168fb58b2b257f3390832e95515d683053bca2626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 459
        echo "    ";
        $this->loadTemplate((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "@SonataAdmin/Form/form_admin_fields.html.twig", 459)->display($context);
        
        $__internal_37a7aaa9062bc95e3e407f6168fb58b2b257f3390832e95515d683053bca2626->leave($__internal_37a7aaa9062bc95e3e407f6168fb58b2b257f3390832e95515d683053bca2626_prof);

    }

    // line 462
    public function block_sonata_type_choice_field_mask_widget($context, array $blocks = array())
    {
        $__internal_9fa61815465fbb37b9ff10ffea75f6a70ba05bfae77b59264b0af1857bbe9dac = $this->env->getExtension("native_profiler");
        $__internal_9fa61815465fbb37b9ff10ffea75f6a70ba05bfae77b59264b0af1857bbe9dac->enter($__internal_9fa61815465fbb37b9ff10ffea75f6a70ba05bfae77b59264b0af1857bbe9dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_field_mask_widget"));

        // line 463
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 464
        $context["main_form_name"] = twig_slice($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), 0, (twig_length_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) - twig_length_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))));
        // line 465
        echo "    <script>
        jQuery(document).ready(function() {
            var allFields = ";
        // line 467
        echo twig_jsonencode_filter((isset($context["all_fields"]) ? $context["all_fields"] : $this->getContext($context, "all_fields")));
        echo ";
            var map = ";
        // line 468
        echo twig_jsonencode_filter((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")));
        echo ";

            showMaskChoiceEl = jQuery('#";
        // line 470
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "');

            showMaskChoiceEl.on('change', function () {
                choice_field_mask_show(jQuery(this).val());
            });

            function choice_field_mask_show(val)
            {
                var controlGroupIdFunc = function (field) {
                    return '#sonata-ba-field-container-";
        // line 479
        echo twig_escape_filter($this->env, (isset($context["main_form_name"]) ? $context["main_form_name"] : $this->getContext($context, "main_form_name")), "html", null, true);
        echo "' + field;

                };
                if (map[val] == undefined) {
                    jQuery.each(allFields, function (i, field) {
                        jQuery(controlGroupIdFunc(field)).hide();
                    });
                    return;
                }

                jQuery.each(allFields, function (i, field) {
                    jQuery(controlGroupIdFunc(field)).hide();
                });
                jQuery.each(map[val], function (i, field) {
                    jQuery(controlGroupIdFunc(field)).show();
                });
            }
            choice_field_mask_show(showMaskChoiceEl.val());
        });

    </script>
";
        
        $__internal_9fa61815465fbb37b9ff10ffea75f6a70ba05bfae77b59264b0af1857bbe9dac->leave($__internal_9fa61815465fbb37b9ff10ffea75f6a70ba05bfae77b59264b0af1857bbe9dac_prof);

    }

    // line 502
    public function block_sonata_type_choice_multiple_sortable($context, array $blocks = array())
    {
        $__internal_2381983c579da03b1b69ce296455d9c1739c3572a2fd6daa144eb0a17ceb8241 = $this->env->getExtension("native_profiler");
        $__internal_2381983c579da03b1b69ce296455d9c1739c3572a2fd6daa144eb0a17ceb8241->enter($__internal_2381983c579da03b1b69ce296455d9c1739c3572a2fd6daa144eb0a17ceb8241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_choice_multiple_sortable"));

        // line 503
        echo "    <input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), ","), "html", null, true);
        echo "\" />

    <script>
        jQuery(document).ready(function() {
            Admin.setup_sortable_select2(jQuery('#";
        // line 507
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'), ";
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "choices", array()));
        echo ");
        });
    </script>
";
        
        $__internal_2381983c579da03b1b69ce296455d9c1739c3572a2fd6daa144eb0a17ceb8241->leave($__internal_2381983c579da03b1b69ce296455d9c1739c3572a2fd6daa144eb0a17ceb8241_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Form/form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1477 => 507,  1465 => 503,  1459 => 502,  1430 => 479,  1417 => 470,  1412 => 468,  1408 => 467,  1404 => 465,  1402 => 464,  1397 => 463,  1391 => 462,  1383 => 459,  1377 => 458,  1368 => 454,  1362 => 451,  1359 => 450,  1357 => 449,  1353 => 447,  1350 => 446,  1338 => 445,  1335 => 444,  1332 => 443,  1329 => 442,  1326 => 441,  1324 => 440,  1319 => 438,  1307 => 436,  1304 => 435,  1298 => 434,  1287 => 429,  1284 => 428,  1267 => 426,  1250 => 425,  1245 => 423,  1240 => 422,  1237 => 421,  1231 => 420,  1222 => 416,  1218 => 414,  1216 => 413,  1211 => 412,  1194 => 410,  1177 => 409,  1173 => 408,  1168 => 407,  1165 => 406,  1162 => 405,  1159 => 404,  1156 => 403,  1153 => 402,  1150 => 401,  1147 => 400,  1145 => 399,  1139 => 398,  1130 => 394,  1125 => 391,  1123 => 390,  1118 => 389,  1108 => 381,  1106 => 380,  1103 => 379,  1101 => 378,  1095 => 377,  1087 => 374,  1085 => 373,  1079 => 372,  1071 => 369,  1069 => 368,  1063 => 367,  1054 => 363,  1048 => 361,  1046 => 360,  1043 => 359,  1037 => 356,  1034 => 355,  1032 => 354,  1029 => 353,  1026 => 352,  1022 => 351,  1019 => 350,  1016 => 349,  1013 => 348,  1011 => 347,  1008 => 346,  1005 => 345,  1002 => 344,  1000 => 343,  997 => 342,  991 => 340,  989 => 339,  986 => 338,  983 => 337,  980 => 336,  977 => 335,  974 => 334,  971 => 333,  968 => 332,  965 => 331,  962 => 330,  959 => 329,  956 => 328,  954 => 327,  952 => 326,  949 => 325,  946 => 324,  943 => 323,  941 => 322,  938 => 321,  936 => 320,  933 => 319,  930 => 318,  927 => 317,  925 => 316,  916 => 315,  913 => 314,  907 => 313,  897 => 308,  891 => 306,  885 => 303,  882 => 302,  880 => 301,  877 => 300,  871 => 298,  865 => 295,  862 => 294,  860 => 293,  855 => 291,  851 => 290,  846 => 289,  843 => 288,  837 => 286,  834 => 285,  832 => 284,  826 => 283,  816 => 278,  810 => 275,  805 => 274,  802 => 273,  796 => 270,  791 => 269,  789 => 268,  784 => 266,  780 => 265,  775 => 264,  772 => 263,  769 => 262,  766 => 261,  763 => 260,  757 => 258,  754 => 257,  752 => 256,  746 => 255,  735 => 249,  733 => 248,  732 => 247,  731 => 246,  730 => 245,  725 => 244,  722 => 243,  719 => 242,  716 => 241,  713 => 240,  707 => 238,  704 => 237,  702 => 236,  696 => 235,  683 => 229,  680 => 228,  677 => 227,  671 => 225,  669 => 224,  664 => 223,  661 => 222,  658 => 221,  654 => 219,  651 => 217,  648 => 215,  646 => 214,  639 => 213,  637 => 212,  634 => 211,  631 => 209,  628 => 207,  626 => 206,  619 => 205,  617 => 204,  609 => 203,  603 => 201,  600 => 200,  598 => 199,  595 => 198,  592 => 197,  589 => 196,  586 => 195,  583 => 194,  580 => 193,  578 => 192,  572 => 191,  563 => 187,  556 => 185,  553 => 184,  550 => 183,  546 => 182,  541 => 181,  538 => 180,  536 => 179,  530 => 178,  521 => 174,  518 => 172,  516 => 171,  514 => 170,  512 => 169,  510 => 168,  495 => 167,  492 => 166,  489 => 165,  486 => 164,  483 => 163,  480 => 162,  477 => 161,  474 => 160,  471 => 159,  468 => 158,  465 => 157,  463 => 156,  460 => 155,  457 => 154,  454 => 153,  448 => 152,  441 => 149,  435 => 148,  428 => 145,  422 => 144,  412 => 139,  406 => 137,  403 => 135,  401 => 134,  386 => 133,  383 => 132,  379 => 129,  376 => 126,  375 => 125,  374 => 124,  372 => 123,  370 => 122,  367 => 121,  364 => 120,  361 => 119,  358 => 118,  355 => 117,  352 => 116,  350 => 115,  347 => 114,  344 => 113,  342 => 112,  339 => 111,  337 => 110,  334 => 109,  331 => 108,  328 => 107,  325 => 106,  323 => 105,  317 => 104,  309 => 99,  307 => 98,  305 => 97,  302 => 95,  300 => 94,  298 => 93,  292 => 92,  284 => 88,  282 => 87,  280 => 86,  277 => 84,  275 => 83,  273 => 82,  267 => 81,  255 => 75,  252 => 74,  249 => 73,  246 => 72,  240 => 71,  232 => 68,  228 => 66,  226 => 65,  223 => 64,  220 => 63,  218 => 62,  212 => 60,  210 => 59,  208 => 58,  205 => 57,  202 => 56,  199 => 54,  197 => 53,  191 => 52,  181 => 49,  178 => 48,  172 => 47,  162 => 44,  159 => 43,  156 => 42,  153 => 41,  150 => 40,  144 => 39,  137 => 36,  133 => 35,  127 => 34,  115 => 29,  113 => 28,  111 => 27,  105 => 26,  97 => 23,  93 => 22,  90 => 21,  81 => 19,  77 => 18,  74 => 17,  69 => 16,  67 => 15,  61 => 14,  11 => 12,);
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
/* {% block form_errors -%}*/
/*     {% if errors|length > 0 %}*/
/*         {% if not form.parent %}<div class="alert alert-danger">{% endif %}*/
/*             <ul class="list-unstyled">*/
/*                 {% for error in errors %}*/
/*                     <li><i class="fa fa-exclamation-circle"></i> {{ error.message }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% if not form.parent %}</div>{% endif %}*/
/*     {% endif %}*/
/* {%- endblock form_errors %}*/
/* */
/* {% block sonata_help %}*/
/* {% spaceless %}*/
/* {% if sonata_help is defined and sonata_help %}*/
/*     <span class="help-block sonata-ba-field-widget-help">{{ sonata_help|raw }}</span>*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block form_widget -%}*/
/*     {{ parent() }}*/
/*     {{ block('sonata_help') }}*/
/* {%- endblock form_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% set type = type|default('text') %}*/
/*     {% if type != 'file' %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock textarea_widget %}*/
/* */
/* {% block money_widget -%}*/
/*     {% if money_pattern == '{{ widget }}' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else %}*/
/*         {% set currencySymbol = money_pattern|replace({'{{ widget }}': ''})|trim %}*/
/*         {% if money_pattern matches '/^{{ widget }}/' %}*/
/*             <div class="input-group">*/
/*                 {{- block('form_widget_simple') -}}*/
/*                 <span class="input-group-addon">{{ currencySymbol }}</span>*/
/*             </div>*/
/*         {% elseif money_pattern matches '/{{ widget }}$/' %}*/
/*             <div class="input-group">*/
/*                 <span class="input-group-addon">{{ currencySymbol }}</span>*/
/*                 {{- block('form_widget_simple') -}}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = type|default('text') %}*/
/*         <div class="input-group">*/
/*             {{ block('form_widget_simple') }}*/
/*             <span class="input-group-addon">%</span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock percent_widget %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {% set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default('') -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not same as(false) and sonata_admin.options['form_type'] == 'horizontal' %}*/
/*         {% set label_class = 'col-sm-3' %}*/
/*     {% endif %}*/
/* */
/*     {% set label_class = label_class|default('') ~ ' control-label' %}*/
/* */
/*     {% if label is not same as(false) %}*/
/*         {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_class }) %}*/
/* */
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/* */
/*         {% if label is empty %}*/
/*             {%- if label_format is defined and label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {% endif %}*/
/* */
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {% if not sonata_admin.admin %}*/
/*                 {{- label|trans({}, translation_domain) -}}*/
/*             {% else %}*/
/*                 {{ sonata_admin.admin.trans(label, {}, sonata_admin.field_description.translationDomain) }}*/
/*             {% endif %}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {% if sonata_admin.admin %}*/
/*         {% set translation_domain = sonata_admin.field_description.translationDomain %}*/
/*     {% endif %}*/
/*     {# Do not display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {%- if label is not same as(false) -%}*/
/*                 <span class="control-label__text">*/
/*                     {{- label|trans({}, translation_domain) -}}*/
/*                 </span>*/
/*             {%- endif -%}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {% block choice_widget_expanded %}*/
/* {% spaceless %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' list-unstyled'}) %}*/
/*     <ul {{ block('widget_container_attributes') }}>*/
/*     {% for child in form %}*/
/*         <li>*/
/*             {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*         </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block choice_widget_collapsed %}*/
/* {% spaceless %}*/
/*     {% if required and placeholder is defined and placeholder is none %}*/
/*         {% set required = false %}*/
/*     {% elseif required and empty_value is defined and empty_value_in_choices is defined and empty_value is none and not empty_value_in_choices and not multiple %}*/
/*         {% set required = false %}*/
/*     {% endif %}*/
/* */
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {% if (sortable is defined) and sortable and multiple %}*/
/*         {{ block('sonata_type_choice_multiple_sortable') }}*/
/*     {% else %}*/
/*         <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %} >*/
/*             {% if empty_value is defined and empty_value is not none %}*/
/*                 <option value=""{% if required and value is empty %} selected="selected"{% endif %}>*/
/*                     {% if not sonata_admin.admin %}*/
/*                         {{- empty_value|trans({}, translation_domain) -}}*/
/*                     {% else %}*/
/*                         {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}*/
/*                     {% endif%}*/
/*                 </option>*/
/*             {% elseif placeholder is defined and placeholder is not none %}*/
/*                 <option value=""{% if required and value is empty %} selected="selected"{% endif %}>*/
/*                     {% if not sonata_admin.admin %}*/
/*                         {{- placeholder|trans({}, translation_domain) -}}*/
/*                     {% else %}*/
/*                         {{- placeholder|trans({}, sonata_admin.field_description.translationDomain) -}}*/
/*                     {% endif%}*/
/*                 </option>*/
/*             {% endif %}*/
/*             {% if preferred_choices|length > 0 %}*/
/*                 {% set options = preferred_choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*                 {% if choices|length > 0 %}*/
/*                     <option disabled="disabled">{{ separator }}</option>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             {% set options = choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*         </select>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block date_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% if row is not defined or row == true %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         {% endif %}*/
/*         {% set input_wrapper_class = input_wrapper_class|default('col-sm-4') %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ date_pattern|replace({*/
/*                 '{{ year }}':  '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.year) ~ '</div>',*/
/*                 '{{ month }}': '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.month) ~ '</div>',*/
/*                 '{{ day }}':   '<div class="'~ input_wrapper_class ~ '">' ~ form_widget(form.day) ~ '</div>',*/
/*             })|raw }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block time_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% if row is not defined or row == true %}*/
/*             {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         {% endif %}*/
/*         {% set input_wrapper_class = input_wrapper_class|default('col-sm-6') %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             <div class="{{ input_wrapper_class }}">*/
/*                 {{ form_widget(form.hour) }}*/
/*             </div>*/
/*             {% if with_minutes %}*/
/*                 <div class="{{ input_wrapper_class }}">*/
/*                     {{ form_widget(form.minute) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*             {% if with_seconds %}*/
/*                 <div class="{{ input_wrapper_class }}">*/
/*                     {{ form_widget(form.second) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock time_widget %}*/
/* */
/* {% block datetime_widget %}*/
/* {% spaceless %}*/
/*     {% if widget == 'single_text' %}*/
/*         {{ block('form_widget_simple') }}*/
/*     {% else %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' row' }) %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form.date) }}*/
/*             {{ form_errors(form.time) }}*/
/* */
/*             {% if form.date.vars.widget == 'single_text' %}*/
/*                 <div class="col-sm-2">*/
/*                     {{ form_widget(form.date) }}*/
/*                 </div>*/
/*             {% else %}*/
/*                 {{ form_widget(form.date, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}*/
/*             {% endif %}*/
/* */
/*             {% if form.time.vars.widget == 'single_text' %}*/
/*                 <div class="col-sm-2">*/
/*                     {{ form_widget(form.time) }}*/
/*                 </div>*/
/*             {% else %}*/
/*                 {{ form_widget(form.time, {'row': false, 'input_wrapper_class': 'col-sm-2'}) }}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock datetime_widget %}*/
/* */
/* {% block form_row %}*/
/*     {% set show_label = show_label|default(true) %}*/
/*     <div class="form-group{% if errors|length > 0 %} has-error{% endif %}" id="sonata-ba-field-container-{{ id }}">*/
/*         {% if sonata_admin.field_description.options is defined %}*/
/*             {% set label = sonata_admin.field_description.options.name|default(label)  %}*/
/*         {% endif %}*/
/* */
/*         {% set div_class = 'sonata-ba-field' %}*/
/* */
/*         {% if label is same as(false) %}*/
/*             {% set div_class = div_class ~ ' sonata-collection-row-without-label' %}*/
/*         {% endif %}*/
/* */
/*         {% if sonata_admin is defined and sonata_admin.options['form_type'] == 'horizontal' %}*/
/*             {# Add an offset if no label or is a checkbox/radio #}*/
/*             {% if label is same as(false) or form.vars.checked is defined %}*/
/*                 {% if 'collection' in form.parent.vars.block_prefixes %}*/
/*                     {% set div_class = div_class ~ ' col-sm-12' %}*/
/*                 {% else %}*/
/*                     {% set div_class = div_class ~ ' col-sm-9 col-sm-offset-3' %}*/
/*                 {% endif %}*/
/*             {% else %}*/
/*                 {% set div_class = div_class ~ ' col-sm-9' %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if show_label %}*/
/*             {{ form_label(form, label|default(null)) }}*/
/*         {% endif %}*/
/* */
/*         {% if sonata_admin is defined and sonata_admin_enabled %}*/
/*             {% set div_class = div_class ~ ' sonata-ba-field-' ~ sonata_admin.edit ~ '-' ~ sonata_admin.inline %}*/
/*         {% endif %}*/
/* */
/*         {% if errors|length > 0 %}*/
/*             {% set div_class = div_class ~ ' sonata-ba-field-error' %}*/
/*         {% endif %}*/
/* */
/*         <div class="{{ div_class }}">*/
/*             {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/* */
/*             {% if errors|length > 0 %}*/
/*                 <div class="help-block sonata-ba-field-error-messages">*/
/*                     {{ form_errors(form) }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% if sonata_admin is defined and sonata_admin_enabled and sonata_admin.field_description.help|default(false) %}*/
/*                 <span class="help-block sonata-ba-field-help">{{ sonata_admin.admin.trans(sonata_admin.field_description.help, {}, sonata_admin.field_description.translationDomain)|raw }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {% set show_label = false %}*/
/*     {{ block('form_row') }}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {% set show_label = false %}*/
/*     {{ block('form_row') }}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block sonata_type_native_collection_widget_row %}*/
/* {% spaceless %}*/
/*     <div class="sonata-collection-row">*/
/*         {% if allow_delete %}*/
/*             <div class="row">*/
/*                 <div class="col-xs-1">*/
/*                     <a href="#" class="btn btn-link sonata-collection-delete">*/
/*                         <i class="fa fa-minus-circle"></i>*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-xs-11">*/
/*         {% endif %}*/
/*             {{ form_row(child, { label: false }) }}*/
/*         {% if allow_delete %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_native_collection_widget_row %}*/
/* */
/* {% block sonata_type_native_collection_widget %}*/
/* {% spaceless %}*/
/*     {% if prototype is defined %}*/
/*         {% set child = prototype %}*/
/*         {% set allow_delete_backup = allow_delete %}*/
/*         {% set allow_delete = true %}*/
/*         {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}*/
/*         {% set allow_delete = allow_delete_backup %}*/
/*     {% endif %}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {{ form_errors(form) }}*/
/*         {% for child in form %}*/
/*             {{ block('sonata_type_native_collection_widget_row') }}*/
/*         {% endfor %}*/
/*         {{ form_rest(form) }}*/
/*         {% if allow_add %}*/
/*             <div><a href="#" class="btn btn-link sonata-collection-add"><i class="fa fa-plus-circle"></i></a></div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_native_collection_widget %}*/
/* */
/* {% block sonata_type_immutable_array_widget %}*/
/*     {% spaceless %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form) }}*/
/* */
/*             {% for key, child in form %}*/
/*                 {{ block('sonata_type_immutable_array_widget_row') }}*/
/*             {% endfor %}*/
/* */
/*             {{ form_rest(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_immutable_array_widget %}*/
/* */
/* {% block sonata_type_immutable_array_widget_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group{% if child.vars.errors|length > 0%} error{%endif%}" id="sonata-ba-field-container-{{ id }}-{{ key }}">*/
/* */
/*             {{ form_label(child) }}*/
/* */
/*             {% set div_class = "" %}*/
/*             {% if sonata_admin.options['form_type'] == 'horizontal' %}*/
/*                 {% set div_class = 'col-sm-9' %}*/
/*             {% endif%}*/
/* */
/*             <div class="{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if child.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*                 {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*             </div>*/
/* */
/*             {% if child.vars.errors|length > 0 %}*/
/*                 <div class="help-block sonata-ba-field-error-messages">*/
/*                     {{ form_errors(child) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_autocomplete_widget %}*/
/*     {% include template %}*/
/* {% endblock sonata_type_model_autocomplete_widget %}*/
/* */
/* {% block sonata_type_choice_field_mask_widget %}*/
/*     {{ block('choice_widget') }}*/
/*     {% set main_form_name = id|slice(0, id|length - name|length) %}*/
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             var allFields = {{ all_fields|json_encode|raw }};*/
/*             var map = {{ map|json_encode|raw }};*/
/* */
/*             showMaskChoiceEl = jQuery('#{{ main_form_name }}{{ name }}');*/
/* */
/*             showMaskChoiceEl.on('change', function () {*/
/*                 choice_field_mask_show(jQuery(this).val());*/
/*             });*/
/* */
/*             function choice_field_mask_show(val)*/
/*             {*/
/*                 var controlGroupIdFunc = function (field) {*/
/*                     return '#sonata-ba-field-container-{{ main_form_name }}' + field;*/
/* */
/*                 };*/
/*                 if (map[val] == undefined) {*/
/*                     jQuery.each(allFields, function (i, field) {*/
/*                         jQuery(controlGroupIdFunc(field)).hide();*/
/*                     });*/
/*                     return;*/
/*                 }*/
/* */
/*                 jQuery.each(allFields, function (i, field) {*/
/*                     jQuery(controlGroupIdFunc(field)).hide();*/
/*                 });*/
/*                 jQuery.each(map[val], function (i, field) {*/
/*                     jQuery(controlGroupIdFunc(field)).show();*/
/*                 });*/
/*             }*/
/*             choice_field_mask_show(showMaskChoiceEl.val());*/
/*         });*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
/* {%  block sonata_type_choice_multiple_sortable %}*/
/*     <input type="hidden" name="{{ full_name }}" id="{{ id }}" value="{{ value|join(',') }}" />*/
/* */
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             Admin.setup_sortable_select2(jQuery('#{{ id }}'), {{ form.vars.choices|json_encode|raw }});*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */

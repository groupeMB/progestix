<?php

/* SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig */
class __TwigTemplate_251935c15e684b8c3f67090306c7c33b5daba3c425862cc452ebf0183445b3f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_model_autocomplete_ajax_request_parameters' => array($this, 'block_sonata_type_model_autocomplete_ajax_request_parameters'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb421af5b273ba8a3dd91bc34951d09585b4e90d364ee684ed83138f6cea9862 = $this->env->getExtension("native_profiler");
        $__internal_cb421af5b273ba8a3dd91bc34951d09585b4e90d364ee684ed83138f6cea9862->enter($__internal_cb421af5b273ba8a3dd91bc34951d09585b4e90d364ee684ed83138f6cea9862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "
    <input type=\"text\" id=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input\" value=\"\"";
        // line 14
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 15
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 16
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 17
        echo "    />

    <div id=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_hidden_inputs_wrap\">
        ";
        // line 20
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 22
                    echo "<input type=\"hidden\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
                    echo "[]\"";
                    if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                        echo " disabled=\"disabled\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 25
            echo "<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
            echo "\"";
            if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                echo " disabled=\"disabled\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : null), 0, array(), "array"), "")) : ("")), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "</div>

    <script>
        (function (\$) {
            var autocompleteInput = \$('#";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input');
            autocompleteInput.select2({";
        // line 33
        $context["allowClearPlaceholder"] = ((( !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")) &&  !(isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")))) ? (" ") : (""));
        // line 34
        echo "placeholder: '";
        echo twig_escape_filter($this->env, (((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ((isset($context["allowClearPlaceholder"]) ? $context["allowClearPlaceholder"] : $this->getContext($context, "allowClearPlaceholder")))), "html", null, true);
        echo "', // allowClear needs placeholder to work properly
                allowClear: ";
        // line 35
        echo (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 36
        echo (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 37
        echo (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : $this->getContext($context, "minimum_input_length")), "html", null, true);
        echo ",
                multiple: ";
        // line 39
        echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("true") : ("false"));
        echo ",
                width: '";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "',
                dropdownAutoWidth: ";
        // line 41
        echo (((isset($context["dropdown_auto_width"]) ? $context["dropdown_auto_width"] : $this->getContext($context, "dropdown_auto_width"))) ? ("true") : ("false"));
        echo ",
                containerCssClass: '";
        // line 42
        echo twig_escape_filter($this->env, ((isset($context["container_css_class"]) ? $context["container_css_class"] : $this->getContext($context, "container_css_class")) . " form-control"), "html", null, true);
        echo "',
                dropdownCssClass: '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : $this->getContext($context, "dropdown_css_class")), "html", null, true);
        echo "',
                ajax: {
                    url:  '";
        // line 45
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) ? ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) : (twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "name", array()), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array()), array())) : (array()))), "js"))), "html", null, true);
        echo "',
                    dataType: 'json',
                    quietMillis: ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["quiet_millis"]) ? $context["quiet_millis"] : $this->getContext($context, "quiet_millis")), "html", null, true);
        echo ",
                    cache: ";
        // line 48
        echo (((isset($context["cache"]) ? $context["cache"] : $this->getContext($context, "cache"))) ? ("true") : ("false"));
        echo ",
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        ";
        // line 50
        $this->displayBlock('sonata_type_model_autocomplete_ajax_request_parameters', $context, $blocks);
        // line 90
        echo "                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 97
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 100
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on('change', function(e) {

                // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    ";
        // line 113
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 114
            echo "                        if(!\$.isArray(removedItems)) {
                            removedItems = [removedItems];
                        }

                        var length = removedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = removedItems[i];
                            \$('#";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden[value=\"'+el.id+'\"]').remove();
                        }";
        } else {
            // line 124
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val('');";
        }
        // line 126
        echo "                }

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    ";
        // line 134
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 135
            echo "                        if(!\$.isArray(addedItems)) {
                            addedItems = [addedItems];
                        }

                        var length = addedItems.length;
                        for (var i = 0; i < length; i++) {
                            el = addedItems[i];
                            \$('#";
            // line 142
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap').append('<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
            echo "[]\" value=\"'+el.id+'\" />');
                        }";
        } else {
            // line 145
            echo "\$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_hidden_inputs_wrap input:hidden').val(addedItems.id);";
        }
        // line 147
        echo "                }
            });

            // Initialise the autocomplete
            var data = [];";
        // line 153
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 154
            echo "data =";
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo "[";
            }
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["idx"] => $context["val"]) {
                if ((($context["idx"] . "") != "_labels")) {
                    // line 156
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        echo ", ";
                    }
                    // line 157
                    echo "{id: '";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["val"], "js"), "html", null, true);
                    echo "', label:'";
                    echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "_labels", array(), "array"), $context["idx"], array(), "array"), "js"), "html", null, true);
                    echo "'}";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo "]";
            }
            echo ";
            ";
        }
        // line 162
        echo "if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }

            // remove unneeded autocomplete text input before form submit
            \$('#";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input').closest('form').submit(function()
            {
                \$('#";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_autocomplete_input').remove();
                return true;
            });
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cb421af5b273ba8a3dd91bc34951d09585b4e90d364ee684ed83138f6cea9862->leave($__internal_cb421af5b273ba8a3dd91bc34951d09585b4e90d364ee684ed83138f6cea9862_prof);

    }

    // line 50
    public function block_sonata_type_model_autocomplete_ajax_request_parameters($context, array $blocks = array())
    {
        $__internal_6556ed3e7be7cbd2a6d161857b1b8130657b3c8d8a6f37de4675d6b7fc1d9ea1 = $this->env->getExtension("native_profiler");
        $__internal_6556ed3e7be7cbd2a6d161857b1b8130657b3c8d8a6f37de4675d6b7fc1d9ea1->enter($__internal_6556ed3e7be7cbd2a6d161857b1b8130657b3c8d8a6f37de4675d6b7fc1d9ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_ajax_request_parameters"));

        // line 51
        echo "                        return {
                                //search term
                                '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : $this->getContext($context, "req_param_name_search")), "html", null, true);
        echo "': term,

                                // page size
                                '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : $this->getContext($context, "req_param_name_items_per_page")), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : $this->getContext($context, "items_per_page")), "html", null, true);
        echo ",

                                // page number
                                '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : $this->getContext($context, "req_param_name_page_number")), "html", null, true);
        echo "': page,

                                // admin
                                ";
        // line 62
        if ( !(null === $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()))) {
            // line 63
            echo "                                    'uniqid': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "uniqid", array()), "html", null, true);
            echo "',
                                    'admin_code': '";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "code", array()), "html", null, true);
            echo "',
                                ";
        } elseif (        // line 65
(isset($context["admin_code"]) ? $context["admin_code"] : $this->getContext($context, "admin_code"))) {
            // line 66
            echo "                                    'admin_code':  '";
            echo twig_escape_filter($this->env, (isset($context["admin_code"]) ? $context["admin_code"] : $this->getContext($context, "admin_code")), "html", null, true);
            echo "',
                                ";
        }
        // line 68
        echo "                                
                                 // subclass
                                ";
        // line 70
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) {
            // line 71
            echo "                                    'subclass': '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "subclass"), "method"), "html", null, true);
            echo "',
                                ";
        }
        // line 73
        echo "
                                ";
        // line 74
        if (((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")) == "filter")) {
            // line 75
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), array("filter[" => "", "][value]" => "", "__" => ".")), "html", null, true);
            echo "',
                                    '_context': 'filter'
                                ";
        } else {
            // line 78
            echo "                                    'field':  '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "'
                                ";
        }
        // line 80
        echo "
                                // other parameters
                                ";
        // line 82
        if ( !twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")))) {
            echo ",";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")));
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
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 84
                echo "'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "': '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "'";
                // line 85
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 88
        echo "                        };
                        ";
        
        $__internal_6556ed3e7be7cbd2a6d161857b1b8130657b3c8d8a6f37de4675d6b7fc1d9ea1->leave($__internal_6556ed3e7be7cbd2a6d161857b1b8130657b3c8d8a6f37de4675d6b7fc1d9ea1_prof);

    }

    // line 97
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        $__internal_bd94098f3e1c44142246b1fedf84ee57b18cb624b494e9628af309368df169c3 = $this->env->getExtension("native_profiler");
        $__internal_bd94098f3e1c44142246b1fedf84ee57b18cb624b494e9628af309368df169c3->enter($__internal_bd94098f3e1c44142246b1fedf84ee57b18cb624b494e9628af309368df169c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        echo "'<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["dropdown_item_css_class"]) ? $context["dropdown_item_css_class"] : $this->getContext($context, "dropdown_item_css_class")), "html", null, true);
        echo "\">'+item.label+'<\\/div>'";
        
        $__internal_bd94098f3e1c44142246b1fedf84ee57b18cb624b494e9628af309368df169c3->leave($__internal_bd94098f3e1c44142246b1fedf84ee57b18cb624b494e9628af309368df169c3_prof);

    }

    // line 100
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        $__internal_fa31ac53b60408a64e9d06d601813865301c1e16c1b96b07338de4c426e8ee69 = $this->env->getExtension("native_profiler");
        $__internal_fa31ac53b60408a64e9d06d601813865301c1e16c1b96b07338de4c426e8ee69->enter($__internal_fa31ac53b60408a64e9d06d601813865301c1e16c1b96b07338de4c426e8ee69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        echo "item.label";
        
        $__internal_fa31ac53b60408a64e9d06d601813865301c1e16c1b96b07338de4c426e8ee69->leave($__internal_fa31ac53b60408a64e9d06d601813865301c1e16c1b96b07338de4c426e8ee69_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form/Type:sonata_type_model_autocomplete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 100,  452 => 97,  444 => 88,  427 => 85,  421 => 84,  404 => 83,  401 => 82,  397 => 80,  391 => 78,  384 => 75,  382 => 74,  379 => 73,  373 => 71,  371 => 70,  367 => 68,  361 => 66,  359 => 65,  355 => 64,  350 => 63,  348 => 62,  342 => 59,  334 => 56,  328 => 53,  324 => 51,  318 => 50,  304 => 169,  299 => 167,  292 => 162,  285 => 159,  271 => 157,  267 => 156,  256 => 155,  251 => 154,  249 => 153,  243 => 147,  238 => 145,  231 => 142,  222 => 135,  220 => 134,  210 => 126,  205 => 124,  200 => 121,  191 => 114,  189 => 113,  173 => 100,  167 => 97,  158 => 90,  156 => 50,  151 => 48,  147 => 47,  142 => 45,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  105 => 35,  100 => 34,  98 => 33,  94 => 31,  88 => 27,  76 => 25,  60 => 22,  55 => 21,  53 => 20,  49 => 19,  45 => 17,  41 => 16,  37 => 15,  33 => 14,  30 => 13,  27 => 12,  25 => 11,);
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
/* {% spaceless %}*/
/* */
/*     <input type="text" id="{{ id }}_autocomplete_input" value=""*/
/*         {%- if read_only %} readonly="readonly"{% endif -%}*/
/*         {%- if disabled %} disabled="disabled"{% endif -%}*/
/*         {%- if required %} required="required"{% endif %}*/
/*     />*/
/* */
/*     <div id="{{ id }}_hidden_inputs_wrap">*/
/*         {% if multiple -%}*/
/*             {%- for idx, val in value if idx~'' != '_labels' -%}*/
/*                 <input type="hidden" name="{{ full_name }}[]" {%- if disabled %} disabled="disabled"{% endif %} value="{{ val }}">*/
/*             {%- endfor -%}*/
/*         {% else -%}*/
/*             <input type="hidden" name="{{ full_name }}" {%- if disabled %} disabled="disabled"{% endif %} value="{{ value[0]|default('') }}">*/
/*         {% endif -%}*/
/*     </div>*/
/* */
/*     <script>*/
/*         (function ($) {*/
/*             var autocompleteInput = $('#{{ id }}_autocomplete_input');*/
/*             autocompleteInput.select2({*/
/*                 {%- set allowClearPlaceholder = (not multiple and not required) ? ' ' : '' -%}*/
/*                 placeholder: '{{ placeholder ?: allowClearPlaceholder }}', // allowClear needs placeholder to work properly*/
/*                 allowClear: {{ required ? 'false' : 'true' }},*/
/*                 enable: {{ disabled ? 'false' : 'true' }},*/
/*                 readonly: {{ read_only ? 'true' : 'false' }},*/
/*                 minimumInputLength: {{ minimum_input_length }},*/
/*                 multiple: {{ multiple ? 'true' : 'false' }},*/
/*                 width: '{{ width }}',*/
/*                 dropdownAutoWidth: {{ dropdown_auto_width ? 'true' : 'false' }},*/
/*                 containerCssClass: '{{ container_css_class ~ ' form-control' }}',*/
/*                 dropdownCssClass: '{{ dropdown_css_class }}',*/
/*                 ajax: {*/
/*                     url:  '{{ url ?: path(route.name, route.parameters|default([]))|e('js') }}',*/
/*                     dataType: 'json',*/
/*                     quietMillis: {{ quiet_millis }},*/
/*                     cache: {{ cache ? 'true' : 'false' }},*/
/*                     data: function (term, page) { // page is the one-based page number tracked by Select2*/
/*                         {% block sonata_type_model_autocomplete_ajax_request_parameters %}*/
/*                         return {*/
/*                                 //search term*/
/*                                 '{{ req_param_name_search }}': term,*/
/* */
/*                                 // page size*/
/*                                 '{{ req_param_name_items_per_page }}': {{ items_per_page }},*/
/* */
/*                                 // page number*/
/*                                 '{{ req_param_name_page_number }}': page,*/
/* */
/*                                 // admin*/
/*                                 {% if sonata_admin.admin is not null %}*/
/*                                     'uniqid': '{{ sonata_admin.admin.uniqid }}',*/
/*                                     'admin_code': '{{ sonata_admin.admin.code }}',*/
/*                                 {% elseif admin_code %}*/
/*                                     'admin_code':  '{{ admin_code }}',*/
/*                                 {% endif %}*/
/*                                 */
/*                                  // subclass*/
/*                                 {% if app.request.query.get('subclass') %}*/
/*                                     'subclass': '{{ app.request.query.get('subclass') }}',*/
/*                                 {% endif %}*/
/* */
/*                                 {% if context == 'filter' %}*/
/*                                     'field':  '{{ full_name|replace({'filter[': '', '][value]': '', '__':'.'}) }}',*/
/*                                     '_context': 'filter'*/
/*                                 {% else %}*/
/*                                     'field':  '{{ name }}'*/
/*                                 {% endif %}*/
/* */
/*                                 // other parameters*/
/*                                 {% if req_params is not empty %},*/
/*                                     {%- for key, value in req_params -%}*/
/*                                         '{{- key|e('js') -}}': '{{- value|e('js') -}}'*/
/*                                         {%- if not loop.last -%}, {% endif -%}*/
/*                                     {%- endfor -%}*/
/*                                 {% endif %}*/
/*                         };*/
/*                         {% endblock %}*/
/*                     },*/
/*                     results: function (data, page) {*/
/*                         // notice we return the value of more so Select2 knows if more results can be loaded*/
/*                         return {results: data.items, more: data.more};*/
/*                     }*/
/*                 },*/
/*                 formatResult: function (item) {*/
/*                     return {% block sonata_type_model_autocomplete_dropdown_item_format %}'<div class="{{ dropdown_item_css_class }}">'+item.label+'<\/div>'{% endblock %};// format of one dropdown item*/
/*                 },*/
/*                 formatSelection: function (item) {*/
/*                     return {% block sonata_type_model_autocomplete_selection_format %}item.label{% endblock %};// format selected item '<b>'+item.label+'</b>';*/
/*                 },*/
/*                 escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results*/
/*             });*/
/* */
/*             autocompleteInput.on('change', function(e) {*/
/* */
/*                 // console.log('change '+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));*/
/* */
/*                 // remove input*/
/*                 if (undefined !== e.removed && null !== e.removed) {*/
/*                     var removedItems = e.removed;*/
/* */
/*                     {% if multiple %}*/
/*                         if(!$.isArray(removedItems)) {*/
/*                             removedItems = [removedItems];*/
/*                         }*/
/* */
/*                         var length = removedItems.length;*/
/*                         for (var i = 0; i < length; i++) {*/
/*                             el = removedItems[i];*/
/*                             $('#{{ id }}_hidden_inputs_wrap input:hidden[value="'+el.id+'"]').remove();*/
/*                         }*/
/*                     {%- else -%}*/
/*                         $('#{{ id }}_hidden_inputs_wrap input:hidden').val('');*/
/*                     {%- endif %}*/
/*                 }*/
/* */
/*                 // add new input*/
/*                 var el = null;*/
/*                 if (undefined !== e.added) {*/
/* */
/*                     var addedItems = e.added;*/
/* */
/*                     {% if multiple %}*/
/*                         if(!$.isArray(addedItems)) {*/
/*                             addedItems = [addedItems];*/
/*                         }*/
/* */
/*                         var length = addedItems.length;*/
/*                         for (var i = 0; i < length; i++) {*/
/*                             el = addedItems[i];*/
/*                             $('#{{ id }}_hidden_inputs_wrap').append('<input type="hidden" name="{{ full_name }}[]" value="'+el.id+'" />');*/
/*                         }*/
/*                     {%- else -%}*/
/*                         $('#{{ id }}_hidden_inputs_wrap input:hidden').val(addedItems.id);*/
/*                     {%- endif %}*/
/*                 }*/
/*             });*/
/* */
/*             // Initialise the autocomplete*/
/*             var data = [];*/
/* */
/*             {%- if value is not empty -%}*/
/*                 data = {%- if multiple -%}[ {%- endif -%}*/
/*                 {%- for idx, val  in value if idx~'' != '_labels' -%}*/
/*                     {%- if not loop.first -%}, {% endif -%}*/
/*                     {id: '{{ val|e('js') }}', label:'{{ value['_labels'][idx]|e('js') }}'}*/
/*                 {%- endfor -%}*/
/*                 {%- if multiple -%} ] {%- endif -%};*/
/*             {% endif -%}*/
/* */
/*             if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set*/
/*                 autocompleteInput.select2('data', data);*/
/*             }*/
/* */
/*             // remove unneeded autocomplete text input before form submit*/
/*             $('#{{ id }}_autocomplete_input').closest('form').submit(function()*/
/*             {*/
/*                 $('#{{ id }}_autocomplete_input').remove();*/
/*                 return true;*/
/*             });*/
/*         })(jQuery);*/
/*     </script>*/
/* {% endspaceless %}*/
/* */

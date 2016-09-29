<?php

/* @SonataAdmin/CRUD/base_list.html.twig */
class __TwigTemplate_65b749affae6c8febc4db3dbf999fe6981513e9d0ef537274c7a70d6e7b4b9ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13824696fd02575b31e0e538510b66ef653fe501a146f02267141db22c6dd6f4 = $this->env->getExtension("native_profiler");
        $__internal_13824696fd02575b31e0e538510b66ef653fe501a146f02267141db22c6dd6f4->enter($__internal_13824696fd02575b31e0e538510b66ef653fe501a146f02267141db22c6dd6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13824696fd02575b31e0e538510b66ef653fe501a146f02267141db22c6dd6f4->leave($__internal_13824696fd02575b31e0e538510b66ef653fe501a146f02267141db22c6dd6f4_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_85a84bbf82f9fd9dee9edc3e212d99753f3d2c36f7b5072db3607ddcadde2079 = $this->env->getExtension("native_profiler");
        $__internal_85a84bbf82f9fd9dee9edc3e212d99753f3d2c36f7b5072db3607ddcadde2079->enter($__internal_85a84bbf82f9fd9dee9edc3e212d99753f3d2c36f7b5072db3607ddcadde2079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 15)->display($context);
        
        $__internal_85a84bbf82f9fd9dee9edc3e212d99753f3d2c36f7b5072db3607ddcadde2079->leave($__internal_85a84bbf82f9fd9dee9edc3e212d99753f3d2c36f7b5072db3607ddcadde2079_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_c486a8e5c52e4db9268f1ef64eac2fbec3998f8726da548807b7f297aa5ec7c8 = $this->env->getExtension("native_profiler");
        $__internal_c486a8e5c52e4db9268f1ef64eac2fbec3998f8726da548807b7f297aa5ec7c8->enter($__internal_c486a8e5c52e4db9268f1ef64eac2fbec3998f8726da548807b7f297aa5ec7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_c486a8e5c52e4db9268f1ef64eac2fbec3998f8726da548807b7f297aa5ec7c8->leave($__internal_c486a8e5c52e4db9268f1ef64eac2fbec3998f8726da548807b7f297aa5ec7c8_prof);

    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_5600dff338591a391d688b83e78226908f152956fe19e6d86ac04a5128d07572 = $this->env->getExtension("native_profiler");
        $__internal_5600dff338591a391d688b83e78226908f152956fe19e6d86ac04a5128d07572->enter($__internal_5600dff338591a391d688b83e78226908f152956fe19e6d86ac04a5128d07572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 21
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 22
        $context["batchactions"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "batchactions", array());
        // line 23
        echo "        ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 24
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "
        ";
        // line 29
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "

                ";
        // line 33
        $this->displayBlock('list_header', $context, $blocks);
        // line 34
        echo "
                ";
        // line 35
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 36
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 37
            $this->displayBlock('table_header', $context, $blocks);
            // line 73
            echo "
                        ";
            // line 74
            $this->displayBlock('table_body', $context, $blocks);
            // line 79
            echo "
                        ";
            // line 80
            $this->displayBlock('table_footer', $context, $blocks);
            // line 82
            echo "                    </table>
                ";
        } else {
            // line 84
            echo "                    <div class=\"info-box\">
                        <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                        <div class=\"info-box-content\">
                            <span class=\"info-box-text\">";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" style=\"width: 0%\"></div>
                            </div>
                            <span class=\"progress-description\">
                                ";
            // line 92
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
                // line 93
                echo "                                    ";
                $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/CRUD/base_list.html.twig", 93)->display($context);
                // line 94
                echo "                                ";
            }
            // line 95
            echo "                            </span>
                        </div><!-- /.info-box-content -->
                    </div>
                ";
        }
        // line 99
        echo "
                ";
        // line 100
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 102
        $this->displayBlock('list_footer', $context, $blocks);
        // line 193
        echo "        </div>
        ";
        // line 194
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))))) {
            // line 195
            echo "            </form>
        ";
        }
        // line 197
        echo "    </div>
";
        
        $__internal_5600dff338591a391d688b83e78226908f152956fe19e6d86ac04a5128d07572->leave($__internal_5600dff338591a391d688b83e78226908f152956fe19e6d86ac04a5128d07572_prof);

    }

    // line 33
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_d3cb74b7c329c2a1be271967416378b19b0843392147968955132809a0b73402 = $this->env->getExtension("native_profiler");
        $__internal_d3cb74b7c329c2a1be271967416378b19b0843392147968955132809a0b73402->enter($__internal_d3cb74b7c329c2a1be271967416378b19b0843392147968955132809a0b73402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_d3cb74b7c329c2a1be271967416378b19b0843392147968955132809a0b73402->leave($__internal_d3cb74b7c329c2a1be271967416378b19b0843392147968955132809a0b73402_prof);

    }

    // line 37
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_a7ffed97867c0e15e4ae8b390e9c8d88dea46aa7a28dfd0fb48abccd574c84da = $this->env->getExtension("native_profiler");
        $__internal_a7ffed97867c0e15e4ae8b390e9c8d88dea46aa7a28dfd0fb48abccd574c84da->enter($__internal_a7ffed97867c0e15e4ae8b390e9c8d88dea46aa7a28dfd0fb48abccd574c84da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 38
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 41
            echo "                                        ";
            if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                // line 42
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 45
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 46
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 47
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 48
                echo "                                            ";
                // line 49
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 50
                echo "                                            ";
                // line 51
                echo "                                        ";
            } else {
                // line 52
                echo "                                            ";
                $context["sortable"] = false;
                // line 53
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 54
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 55
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 56
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute((isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 57
                    echo "                                                ";
                    $context["sort_active_class"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 58
                    echo "                                                ";
                    $context["sort_by"] = (((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 59
                    echo "                                            ";
                }
                // line 60
                echo "
                                            ";
                // line 61
                ob_start();
                // line 62
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["sort_by"]) ? $context["sort_by"] : $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["sort_active_class"]) ? $context["sort_active_class"] : $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 63
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["sort_parameters"]) ? $context["sort_parameters"] : $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 64
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["field_description"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["field_description"], "translationDomain", array())), "method"), "html", null, true);
                echo "
                                                    ";
                // line 65
                if ((isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 66
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 68
                echo "                                        ";
            }
            // line 69
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_a7ffed97867c0e15e4ae8b390e9c8d88dea46aa7a28dfd0fb48abccd574c84da->leave($__internal_a7ffed97867c0e15e4ae8b390e9c8d88dea46aa7a28dfd0fb48abccd574c84da_prof);

    }

    // line 74
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_ed310f50a2ae21257a93882beed67af9a7275cd5e25d85cb6af987519db8a476 = $this->env->getExtension("native_profiler");
        $__internal_ed310f50a2ae21257a93882beed67af9a7275cd5e25d85cb6af987519db8a476->enter($__internal_ed310f50a2ae21257a93882beed67af9a7275cd5e25d85cb6af987519db8a476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 75
        echo "                            <tbody>
                                ";
        // line 76
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "@SonataAdmin/CRUD/base_list.html.twig", 76)->display($context);
        // line 77
        echo "                            </tbody>
                        ";
        
        $__internal_ed310f50a2ae21257a93882beed67af9a7275cd5e25d85cb6af987519db8a476->leave($__internal_ed310f50a2ae21257a93882beed67af9a7275cd5e25d85cb6af987519db8a476_prof);

    }

    // line 80
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_e0ca847f9febdd1873c868e7636861037e67635c94cfaebb2142a8ad03f32ded = $this->env->getExtension("native_profiler");
        $__internal_e0ca847f9febdd1873c868e7636861037e67635c94cfaebb2142a8ad03f32ded->enter($__internal_e0ca847f9febdd1873c868e7636861037e67635c94cfaebb2142a8ad03f32ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 81
        echo "                        ";
        
        $__internal_e0ca847f9febdd1873c868e7636861037e67635c94cfaebb2142a8ad03f32ded->leave($__internal_e0ca847f9febdd1873c868e7636861037e67635c94cfaebb2142a8ad03f32ded_prof);

    }

    // line 102
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_5bb2ed9b712e45034ff0b4b8a16850874ccd375b1207d924c932921142d702c3 = $this->env->getExtension("native_profiler");
        $__internal_5bb2ed9b712e45034ff0b4b8a16850874ccd375b1207d924c932921142d702c3->enter($__internal_5bb2ed9b712e45034ff0b4b8a16850874ccd375b1207d924c932921142d702c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 103
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 104
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 106
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 107
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 108
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, (isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions"))) > 0))) {
                    // line 109
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 150
                    echo "                                    ";
                }
                // line 151
                echo "                                </div>


                                <div class=\"pull-right\">
                                    ";
                // line 155
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                    // line 156
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\"></i>
                                                ";
                    // line 159
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 163
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 164
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 165
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\"></i>
                                                        ";
                        // line 167
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 176
                echo "
                                    ";
                // line 177
                $this->displayBlock('pager_results', $context, $blocks);
                // line 180
                echo "                                </div>
                            ";
            }
            // line 182
            echo "                        </div>

                        ";
            // line 184
            $this->displayBlock('pager_links', $context, $blocks);
            // line 190
            echo "                    </div>
                ";
        }
        // line 192
        echo "            ";
        
        $__internal_5bb2ed9b712e45034ff0b4b8a16850874ccd375b1207d924c932921142d702c3->leave($__internal_5bb2ed9b712e45034ff0b4b8a16850874ccd375b1207d924c932921142d702c3_prof);

    }

    // line 109
    public function block_batch($context, array $blocks = array())
    {
        $__internal_c2201bf7449a7aa7d347577deab6e76b6e332b30a40af24c86adb81ef84f0464 = $this->env->getExtension("native_profiler");
        $__internal_c2201bf7449a7aa7d347577deab6e76b6e332b30a40af24c86adb81ef84f0464->enter($__internal_c2201bf7449a7aa7d347577deab6e76b6e332b30a40af24c86adb81ef84f0464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 110
        echo "                                            <script>
                                                ";
        // line 111
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 132
        echo "                                            </script>

                                        ";
        // line 134
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 147
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_c2201bf7449a7aa7d347577deab6e76b6e332b30a40af24c86adb81ef84f0464->leave($__internal_c2201bf7449a7aa7d347577deab6e76b6e332b30a40af24c86adb81ef84f0464_prof);

    }

    // line 111
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_b562bb58c67fafec89f33fa091f6b4babd7353f26c7b376c7c276d3a5c76c54e = $this->env->getExtension("native_profiler");
        $__internal_b562bb58c67fafec89f33fa091f6b4babd7353f26c7b376c7c276d3a5c76c54e->enter($__internal_b562bb58c67fafec89f33fa091f6b4babd7353f26c7b376c7c276d3a5c76c54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 112
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        \$('#list_batch_checkbox').on('ifChanged', function () {
                                                            \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                                .iCheck(\$(this).is(':checked') ? 'check' : 'uncheck')
                                                            ;
                                                        });

                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_b562bb58c67fafec89f33fa091f6b4babd7353f26c7b376c7c276d3a5c76c54e->leave($__internal_b562bb58c67fafec89f33fa091f6b4babd7353f26c7b376c7c276d3a5c76c54e_prof);

    }

    // line 134
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_b82923b518ec63f6eefb09e0e5316f38accfe89d466724f42c024b4e5b8f8f5d = $this->env->getExtension("native_profiler");
        $__internal_b82923b518ec63f6eefb09e0e5316f38accfe89d466724f42c024b4e5b8f8f5d->enter($__internal_b82923b518ec63f6eefb09e0e5316f38accfe89d466724f42c024b4e5b8f8f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 135
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batchactions"]) ? $context["batchactions"] : $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 143
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                            </select>
                                        ";
        
        $__internal_b82923b518ec63f6eefb09e0e5316f38accfe89d466724f42c024b4e5b8f8f5d->leave($__internal_b82923b518ec63f6eefb09e0e5316f38accfe89d466724f42c024b4e5b8f8f5d_prof);

    }

    // line 177
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_df9925b7813abccfebb330877c3533646d9f41f030eab1d0ea35fdc5a1a3ad4e = $this->env->getExtension("native_profiler");
        $__internal_df9925b7813abccfebb330877c3533646d9f41f030eab1d0ea35fdc5a1a3ad4e->enter($__internal_df9925b7813abccfebb330877c3533646d9f41f030eab1d0ea35fdc5a1a3ad4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 178
        echo "                                        ";
        $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "@SonataAdmin/CRUD/base_list.html.twig", 178)->display($context);
        // line 179
        echo "                                    ";
        
        $__internal_df9925b7813abccfebb330877c3533646d9f41f030eab1d0ea35fdc5a1a3ad4e->leave($__internal_df9925b7813abccfebb330877c3533646d9f41f030eab1d0ea35fdc5a1a3ad4e_prof);

    }

    // line 184
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_027f7dcaa450ec3816c4d615b299ca46a24cdffaae4f02cb231b557224d648ad = $this->env->getExtension("native_profiler");
        $__internal_027f7dcaa450ec3816c4d615b299ca46a24cdffaae4f02cb231b557224d648ad->enter($__internal_027f7dcaa450ec3816c4d615b299ca46a24cdffaae4f02cb231b557224d648ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 185
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 186
            echo "                                <hr/>
                                ";
            // line 187
            $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "@SonataAdmin/CRUD/base_list.html.twig", 187)->display($context);
            // line 188
            echo "                            ";
        }
        // line 189
        echo "                        ";
        
        $__internal_027f7dcaa450ec3816c4d615b299ca46a24cdffaae4f02cb231b557224d648ad->leave($__internal_027f7dcaa450ec3816c4d615b299ca46a24cdffaae4f02cb231b557224d648ad_prof);

    }

    // line 200
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_a796acf9690bf8bfef6439db4f88a51fd7ec0590e5cb25e956d56c07c8c0007f = $this->env->getExtension("native_profiler");
        $__internal_a796acf9690bf8bfef6439db4f88a51fd7ec0590e5cb25e956d56c07c8c0007f->enter($__internal_a796acf9690bf8bfef6439db4f88a51fd7ec0590e5cb25e956d56c07c8c0007f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 201
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 202
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\"></i>
                    ";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 212
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 213
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 214
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_a796acf9690bf8bfef6439db4f88a51fd7ec0590e5cb25e956d56c07c8c0007f->leave($__internal_a796acf9690bf8bfef6439db4f88a51fd7ec0590e5cb25e956d56c07c8c0007f_prof);

    }

    // line 224
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_0b0a16848bcd9110cf944631188a45ccf8111c682020f9b97ad9660ccfa95ca2 = $this->env->getExtension("native_profiler");
        $__internal_0b0a16848bcd9110cf944631188a45ccf8111c682020f9b97ad9660ccfa95ca2->enter($__internal_0b0a16848bcd9110cf944631188a45ccf8111c682020f9b97ad9660ccfa95ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 225
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 226
            echo "        ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 227
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 228
            echo (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 231
            echo ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 232
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 236
            $context["withAdvancedFilter"] = false;
            // line 237
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 238
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo (((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 239
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 240
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute($context["filter"], "label", array()), 1 => array(), 2 => $this->getAttribute($context["filter"], "translationDomain", array())), "method"), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 242
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 243
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 245
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 249
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 254
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 261
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 262
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 263
                    echo "                                    ";
                }
                // line 264
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 269
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 270
            echo "                                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\"></i> ";
            // line 274
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 278
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 282
            if ((isset($context["withAdvancedFilter"]) ? $context["withAdvancedFilter"] : $this->getContext($context, "withAdvancedFilter"))) {
                // line 283
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\"></i>
                                            ";
                // line 286
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 290
            echo "                            </div>
                        </div>

                        ";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 294
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_0b0a16848bcd9110cf944631188a45ccf8111c682020f9b97ad9660ccfa95ca2->leave($__internal_0b0a16848bcd9110cf944631188a45ccf8111c682020f9b97ad9660ccfa95ca2_prof);

    }

    // line 238
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_abb85c9f6835bd1695bd7485e5ccb60d9e01c34d2406f77c9d35d4f1034bb78b = $this->env->getExtension("native_profiler");
        $__internal_abb85c9f6835bd1695bd7485e5ccb60d9e01c34d2406f77c9d35d4f1034bb78b->enter($__internal_abb85c9f6835bd1695bd7485e5ccb60d9e01c34d2406f77c9d35d4f1034bb78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_abb85c9f6835bd1695bd7485e5ccb60d9e01c34d2406f77c9d35d4f1034bb78b->leave($__internal_abb85c9f6835bd1695bd7485e5ccb60d9e01c34d2406f77c9d35d4f1034bb78b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  902 => 238,  890 => 296,  879 => 294,  875 => 293,  870 => 290,  863 => 286,  858 => 283,  856 => 282,  849 => 278,  845 => 277,  839 => 274,  831 => 270,  829 => 269,  823 => 265,  809 => 264,  806 => 263,  803 => 262,  801 => 261,  787 => 254,  779 => 249,  772 => 245,  768 => 243,  765 => 242,  757 => 240,  755 => 239,  738 => 238,  720 => 237,  718 => 236,  711 => 232,  705 => 231,  697 => 228,  694 => 227,  691 => 226,  688 => 225,  682 => 224,  671 => 218,  658 => 214,  650 => 213,  647 => 212,  642 => 211,  635 => 207,  628 => 202,  626 => 201,  620 => 200,  613 => 189,  610 => 188,  608 => 187,  605 => 186,  602 => 185,  596 => 184,  589 => 179,  586 => 178,  580 => 177,  572 => 145,  561 => 143,  557 => 142,  550 => 138,  546 => 137,  542 => 136,  537 => 135,  531 => 134,  505 => 112,  499 => 111,  490 => 148,  487 => 147,  485 => 134,  481 => 132,  479 => 111,  476 => 110,  470 => 109,  463 => 192,  459 => 190,  457 => 184,  453 => 182,  449 => 180,  447 => 177,  444 => 176,  437 => 171,  427 => 167,  422 => 165,  419 => 164,  415 => 163,  408 => 159,  403 => 156,  401 => 155,  395 => 151,  392 => 150,  389 => 109,  387 => 108,  384 => 107,  382 => 106,  378 => 104,  375 => 103,  369 => 102,  362 => 81,  356 => 80,  348 => 77,  346 => 76,  343 => 75,  337 => 74,  328 => 70,  322 => 69,  319 => 68,  315 => 66,  311 => 65,  306 => 64,  300 => 63,  278 => 62,  276 => 61,  273 => 60,  270 => 59,  267 => 58,  264 => 57,  261 => 56,  258 => 55,  255 => 54,  252 => 53,  249 => 52,  246 => 51,  244 => 50,  241 => 49,  239 => 48,  237 => 47,  234 => 46,  232 => 45,  227 => 42,  224 => 41,  220 => 40,  216 => 38,  210 => 37,  199 => 33,  191 => 197,  187 => 195,  185 => 194,  182 => 193,  180 => 102,  175 => 100,  172 => 99,  166 => 95,  163 => 94,  160 => 93,  158 => 92,  150 => 87,  145 => 84,  141 => 82,  139 => 80,  136 => 79,  134 => 74,  131 => 73,  129 => 37,  126 => 36,  124 => 35,  121 => 34,  119 => 33,  114 => 31,  108 => 30,  101 => 29,  98 => 27,  93 => 25,  88 => 24,  85 => 23,  83 => 22,  80 => 21,  74 => 20,  62 => 18,  54 => 15,  48 => 14,  33 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="col-xs-12 col-md-12">*/
/*         {% set batchactions = admin.batchactions %}*/
/*         {% if admin.hasRoute('batch') and batchactions|length %}*/
/*             <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST" >*/
/*             <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/*         {% endif %}*/
/* */
/*         {# Add a margin if no pager to prevent dropdown cropping on window #}*/
/*         <div class="box box-primary" {% if admin.datagrid.pager.lastPage == 1 %}style="margin-bottom: 100px;"{% endif %}>*/
/*             <div class="box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}">*/
/*                 {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}*/
/* */
/*                 {% block list_header %}{% endblock %}*/
/* */
/*                 {% if admin.datagrid.results|length > 0 %}*/
/*                     <table class="table table-bordered table-striped sonata-ba-list">*/
/*                         {% block table_header %}*/
/*                             <thead>*/
/*                                 <tr class="sonata-ba-list-field-header">*/
/*                                     {% for field_description in admin.list.elements %}*/
/*                                         {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-batch">*/
/*                                               <input type="checkbox" id="list_batch_checkbox">*/
/*                                             </th>*/
/*                                         {% elseif field_description.getOption('code') == '_select' %}*/
/*                                             <th class="sonata-ba-list-field-header sonata-ba-list-field-header-select"></th>*/
/*                                         {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}*/
/*                                             {# Action buttons disabled in ajax view! #}*/
/*                                         {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}*/
/*                                             {# Disable fields with 'ajax_hidden' option set to true #}*/
/*                                         {% else %}*/
/*                                             {% set sortable = false %}*/
/*                                             {% if field_description.options.sortable is defined and field_description.options.sortable %}*/
/*                                                 {% set sortable             = true %}*/
/*                                                 {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}*/
/*                                                 {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}*/
/*                                                 {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}*/
/*                                                 {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}*/
/*                                             {% endif %}*/
/* */
/*                                             {% spaceless %}*/
/*                                                 <th class="sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}"{% if field_description.options.header_style is defined %} style="{{ field_description.options.header_style }}"{% endif %}>*/
/*                                                     {% if sortable %}<a href="{{ admin.generateUrl('list', sort_parameters) }}">{% endif %}*/
/*                                                     {{ admin.trans(field_description.label, {}, field_description.translationDomain) }}*/
/*                                                     {% if sortable %}</a>{% endif %}*/
/*                                                 </th>*/
/*                                             {% endspaceless %}*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             </thead>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_body %}*/
/*                             <tbody>*/
/*                                 {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}*/
/*                             </tbody>*/
/*                         {% endblock %}*/
/* */
/*                         {% block table_footer %}*/
/*                         {% endblock %}*/
/*                     </table>*/
/*                 {% else %}*/
/*                     <div class="info-box">*/
/*                         <span class="info-box-icon bg-aqua"><i class="fa fa-arrow-circle-right"></i></span>*/
/*                         <div class="info-box-content">*/
/*                             <span class="info-box-text">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>*/
/*                             <div class="progress">*/
/*                                 <div class="progress-bar" style="width: 0%"></div>*/
/*                             </div>*/
/*                             <span class="progress-description">*/
/*                                 {% if not app.request.xmlHttpRequest %}*/
/*                                     {% include 'SonataAdminBundle:Button:create_button.html.twig' %}*/
/*                                 {% endif %}*/
/*                             </span>*/
/*                         </div><!-- /.info-box-content -->*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}*/
/*             </div>*/
/*             {% block list_footer %}*/
/*                 {% if admin.datagrid.results|length > 0 %}*/
/*                     <div class="box-footer">*/
/*                         <div class="form-inline clearfix">*/
/*                             {% if not app.request.isXmlHttpRequest %}*/
/*                                 <div class="pull-left">*/
/*                                     {% if admin.hasRoute('batch') and batchactions|length > 0  %}*/
/*                                         {% block batch %}*/
/*                                             <script>*/
/*                                                 {% block batch_javascript %}*/
/*                                                     jQuery(document).ready(function ($) {*/
/*                                                         $('#list_batch_checkbox').on('ifChanged', function () {*/
/*                                                             $(this)*/
/*                                                                 .closest('table')*/
/*                                                                 .find('td.sonata-ba-list-field-batch input[type="checkbox"], div.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                                 .iCheck($(this).is(':checked') ? 'check' : 'uncheck')*/
/*                                                             ;*/
/*                                                         });*/
/* */
/*                                                         $('td.sonata-ba-list-field-batch input[type="checkbox"], div.sonata-ba-list-field-batch input[type="checkbox"]')*/
/*                                                             .on('ifChanged', function () {*/
/*                                                                 $(this)*/
/*                                                                     .closest('tr, div.sonata-ba-list-field-batch')*/
/*                                                                     .toggleClass('sonata-ba-list-row-selected', $(this).is(':checked'))*/
/*                                                                 ;*/
/*                                                             })*/
/*                                                             .trigger('ifChanged')*/
/*                                                         ;*/
/*                                                     });*/
/*                                                 {% endblock %}*/
/*                                             </script>*/
/* */
/*                                         {% block batch_actions %}*/
/*                                             <label class="checkbox" for="{{ admin.uniqid }}_all_elements">*/
/*                                                 <input type="checkbox" name="all_elements" id="{{ admin.uniqid }}_all_elements">*/
/*                                                 {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}*/
/*                                                 ({{ admin.datagrid.pager.nbresults }})*/
/*                                             </label>*/
/* */
/*                                             <select name="action" style="width: auto; height: auto" class="form-control">*/
/*                                                 {% for action, options in batchactions %}*/
/*                                                     <option value="{{ action }}">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>*/
/*                                         {% endblock %}*/
/* */
/*                                             <input type="submit" class="btn btn-small btn-primary" value="{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}">*/
/*                                         {% endblock %}*/
/*                                     {% endif %}*/
/*                                 </div>*/
/* */
/* */
/*                                 <div class="pull-right">*/
/*                                     {% if admin.hasRoute('export') and admin.isGranted('EXPORT') and admin.getExportFormats()|length %}*/
/*                                         <div class="btn-group">*/
/*                                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                                                 <i class="fa fa-share-square-o"></i>*/
/*                                                 {{ "label_export_download"|trans({}, "SonataAdminBundle") }}*/
/*                                                 <span class="caret"></span>*/
/*                                             </button>*/
/*                                             <ul class="dropdown-menu">*/
/*                                                 {% for format in admin.getExportFormats() %}*/
/*                                                 <li>*/
/*                                                     <a href="{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}">*/
/*                                                         <i class="fa fa-arrow-circle-o-down"></i>*/
/*                                                         {{ ("export_format_" ~ format)|trans({}, 'SonataAdminBundle') }}*/
/*                                                     </a>*/
/*                                                 <li>*/
/*                                                 {% endfor %}*/
/*                                             </ul>*/
/*                                         </div>*/
/* */
/*                                         &nbsp;-&nbsp;*/
/*                                     {% endif %}*/
/* */
/*                                     {% block pager_results %}*/
/*                                         {% include admin.getTemplate('pager_results') %}*/
/*                                     {% endblock %}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/* */
/*                         {% block pager_links %}*/
/*                             {% if admin.datagrid.pager.haveToPaginate() %}*/
/*                                 <hr/>*/
/*                                 {% include admin.getTemplate('pager_links') %}*/
/*                             {% endif %}*/
/*                         {% endblock %}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         {% if admin.hasRoute('batch') and batchactions|length %}*/
/*             </form>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block list_filters_actions %}*/
/*     {%- if admin.datagrid.filters|length %}*/
/*         <ul class="nav navbar-nav navbar-right">*/
/* */
/*             <li class="dropdown sonata-actions">*/
/*                 <a href="#" class="dropdown-toggle sonata-ba-action" data-toggle="dropdown">*/
/*                     <i class="fa fa-filter"></i>*/
/*                     {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class="caret"></b>*/
/*                 </a>*/
/* */
/*                 <ul class="dropdown-menu" role="menu">*/
/*                     {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}*/
/*                         <li>*/
/*                             <a href="#" class="sonata-toggle-filter sonata-ba-action" filter-target="filter-{{ admin.uniqid }}-{{ filter.name }}" filter-container="filter-container-{{ admin.uniqid() }}">*/
/*                                 <i class="fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}"></i>{{ admin.trans(filter.label, {}, filter.translationDomain) }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     {% endif -%}*/
/* {% endblock %}*/
/* */
/* {% block list_filters %}*/
/*     {% if admin.datagrid.filters %}*/
/*         {% form_theme form admin.getTemplate('filter') %}*/
/* */
/*         <div class="col-xs-12 col-md-12 sonata-filters-box" style="display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}" id="filter-container-{{ admin.uniqid() }}">*/
/*             <div class="box box-primary" >*/
/*                 <div class="box-body">*/
/*                     <form class="sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}" action="{{ admin.generateUrl('list') }}" method="GET" role="form">*/
/*                         {{ form_errors(form) }}*/
/* */
/*                         <div class="row">*/
/*                             <div class="col-sm-9">*/
/*                                 {% set withAdvancedFilter = false %}*/
/*                                 {% for filter in admin.datagrid.filters %}*/
/*                                     <div class="form-group {% block sonata_list_filter_group_class %}{% endblock %}" id="filter-{{ admin.uniqid }}-{{ filter.name }}" sonata-filter="{{ (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) ? 'true' : 'false' }}" style="display: {% if (filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true)) %}block{% else %}none{% endif %}">*/
/*                                         {% if filter.label is not same as(false) %}*/
/*                                             <label for="{{ form.children[filter.formName].children['value'].vars.id }}" class="col-sm-3 control-label">{{ admin.trans(filter.label, {}, filter.translationDomain) }}</label>*/
/*                                         {% endif %}*/
/*                                         {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}*/
/* */
/*                                         <div class="col-sm-4 advanced-filter">*/
/*                                             {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-4">*/
/*                                             {{ form_widget(form.children[filter.formName].children['value']) }}*/
/*                                         </div>*/
/* */
/*                                         <div class="col-sm-1">*/
/*                                             <label class="control-label">*/
/*                                                 <a href="#" class="sonata-toggle-filter sonata-ba-action" filter-target="filter-{{ admin.uniqid }}-{{ filter.name }}" filter-container="filter-container-{{ admin.uniqid() }}">*/
/*                                                     <i class="fa fa-minus-circle"></i>*/
/*                                                 </a>*/
/*                                             </label>*/
/*                                         </div>*/
/*                                     </div>*/
/* */
/*                                     {% if filter.options['advanced_filter'] %}*/
/*                                         {% set withAdvancedFilter = true %}*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                             <div class="col-sm-3 text-center">*/
/*                                 <input type="hidden" name="filter[_page]" id="filter__page" value="1">*/
/* */
/*                                 {% set foo = form.children['_page'].setRendered() %}*/
/*                                 {{ form_rest(form) }}*/
/* */
/*                                 <div class="form-group">*/
/*                                     <button type="submit" class="btn btn-primary">*/
/*                                         <i class="fa fa-filter"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </button>*/
/* */
/*                                     <a class="btn btn-default" href="{{ admin.generateUrl('list', {filters: 'reset'}) }}">*/
/*                                         {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}*/
/*                                     </a>*/
/*                                 </div>*/
/* */
/*                                 {% if withAdvancedFilter %}*/
/*                                     <div class="form-group">*/
/*                                         <a href="#" data-toggle="advanced-filter">*/
/*                                             <i class="fa fa-cogs"></i>*/
/*                                             {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}*/
/*                                         </a>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         {% for paramKey, paramValue in admin.persistentParameters %}*/
/*                             <input type="hidden" name="{{ paramKey }}" value="{{ paramValue }}">*/
/*                         {% endfor %}*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

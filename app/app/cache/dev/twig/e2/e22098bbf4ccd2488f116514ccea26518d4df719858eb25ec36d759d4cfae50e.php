<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_e19b4d63f641f8975f43adc4e38612834f2925b01ff108d18e4dd6872549889c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_form_action_url' => array($this, 'block_sonata_form_action_url'),
            'sonata_form_attributes' => array($this, 'block_sonata_form_attributes'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
            'sonata_form_actions' => array($this, 'block_sonata_form_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9da954bfcc412a1a06ad3624479c3d1f2bb1e32239d59cc804e7d25663540a1 = $this->env->getExtension("native_profiler");
        $__internal_c9da954bfcc412a1a06ad3624479c3d1f2bb1e32239d59cc804e7d25663540a1->enter($__internal_c9da954bfcc412a1a06ad3624479c3d1f2bb1e32239d59cc804e7d25663540a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_c9da954bfcc412a1a06ad3624479c3d1f2bb1e32239d59cc804e7d25663540a1->leave($__internal_c9da954bfcc412a1a06ad3624479c3d1f2bb1e32239d59cc804e7d25663540a1_prof);

    }

    public function block_form($context, array $blocks = array())
    {
        $__internal_c7cfcd4bec743277fb9f6e1c7790dcacf6c2e005947e11cae5dd754f3a6ac604 = $this->env->getExtension("native_profiler");
        $__internal_c7cfcd4bec743277fb9f6e1c7790dcacf6c2e005947e11cae5dd754f3a6ac604->enter($__internal_c7cfcd4bec743277fb9f6e1c7790dcacf6c2e005947e11cae5dd754f3a6ac604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

    ";
        // line 4
        $context["url"] = (( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "method")) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form
              ";
            // line 12
            if (($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "form_type"), "method") == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 13
            echo "              role=\"form\"
              action=\"";
            // line 14
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "              method=\"POST\"
              ";
            // line 17
            if ( !$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 19
            echo "              >
            ";
            // line 20
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                // line 21
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 22
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                </div>
            ";
            }
            // line 25
            echo "
            ";
            // line 26
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 29
            echo "
            ";
            // line 30
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 62
            echo "
            ";
            // line 63
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 66
            echo "
            ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "

            ";
            // line 69
            $this->displayBlock('formactions', $context, $blocks);
            // line 113
            echo "        </form>
    ";
        }
        // line 115
        echo "
    ";
        // line 116
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

";
        
        $__internal_c7cfcd4bec743277fb9f6e1c7790dcacf6c2e005947e11cae5dd754f3a6ac604->leave($__internal_c7cfcd4bec743277fb9f6e1c7790dcacf6c2e005947e11cae5dd754f3a6ac604_prof);

    }

    // line 14
    public function block_sonata_form_action_url($context, array $blocks = array())
    {
        $__internal_873a5b1ec5ff2b2913c17c9c89d9ff763d20afeb8aab6f1a5238c8e56ec85209 = $this->env->getExtension("native_profiler");
        $__internal_873a5b1ec5ff2b2913c17c9c89d9ff763d20afeb8aab6f1a5238c8e56ec85209->enter($__internal_873a5b1ec5ff2b2913c17c9c89d9ff763d20afeb8aab6f1a5238c8e56ec85209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        
        $__internal_873a5b1ec5ff2b2913c17c9c89d9ff763d20afeb8aab6f1a5238c8e56ec85209->leave($__internal_873a5b1ec5ff2b2913c17c9c89d9ff763d20afeb8aab6f1a5238c8e56ec85209_prof);

    }

    // line 18
    public function block_sonata_form_attributes($context, array $blocks = array())
    {
        $__internal_5f9cc427d4ae2547be5ce3ba3c04d95b14dd40943c70c9fbc7e5f39b3e00c099 = $this->env->getExtension("native_profiler");
        $__internal_5f9cc427d4ae2547be5ce3ba3c04d95b14dd40943c70c9fbc7e5f39b3e00c099->enter($__internal_5f9cc427d4ae2547be5ce3ba3c04d95b14dd40943c70c9fbc7e5f39b3e00c099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_5f9cc427d4ae2547be5ce3ba3c04d95b14dd40943c70c9fbc7e5f39b3e00c099->leave($__internal_5f9cc427d4ae2547be5ce3ba3c04d95b14dd40943c70c9fbc7e5f39b3e00c099_prof);

    }

    // line 26
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        $__internal_3e8cd6ac920885f8253547da6b5bee0446a111df5f91302f0c4bff25f5942452 = $this->env->getExtension("native_profiler");
        $__internal_3e8cd6ac920885f8253547da6b5bee0446a111df5f91302f0c4bff25f5942452->enter($__internal_3e8cd6ac920885f8253547da6b5bee0446a111df5f91302f0c4bff25f5942452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 27
        echo "                <div class=\"row\">
            ";
        
        $__internal_3e8cd6ac920885f8253547da6b5bee0446a111df5f91302f0c4bff25f5942452->leave($__internal_3e8cd6ac920885f8253547da6b5bee0446a111df5f91302f0c4bff25f5942452_prof);

    }

    // line 30
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        $__internal_b74241ae28e318edab65f66f63143c013712a44eb5f7946f7798fd45292ed34a = $this->env->getExtension("native_profiler");
        $__internal_b74241ae28e318edab65f66f63143c013712a44eb5f7946f7798fd45292ed34a->enter($__internal_b74241ae28e318edab65f66f63143c013712a44eb5f7946f7798fd45292ed34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 31
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array())) > 1));
        // line 32
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 34
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 35
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 38
                echo "                                    <li";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\"><i class=\"fa fa-exclamation-circle has-errors hide\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["form_tab"], "translation_domain", array())), "method"), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 43
                echo "                                    <div class=\"tab-pane fade";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\" id=\"tab_";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 46
                if (($this->getAttribute($context["form_tab"], "description", array()) != false)) {
                    // line 47
                    echo "                                                    <p>";
                    echo $this->getAttribute($context["form_tab"], "description", array());
                    echo "</p>
                                                ";
                }
                // line 49
                echo "
                                                ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_helper"]) ? $context["form_helper"] : $this->getContext($context, "form_helper")), "render_groups", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 2 => $this->getAttribute($context["form_tab"], "groups", array(), "array"), 3 => (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))), "method"), "html", null, true);
                echo "
                                            </div>
                                        </div>
                                    </div>
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "                            </div>
                        </div>
                    ";
        } else {
            // line 58
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["form_helper"]) ? $context["form_helper"] : $this->getContext($context, "form_helper")), "render_groups", array(0 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 1 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "formtabs", array()), "default", array(), "array"), "groups", array()), 3 => (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))), "method"), "html", null, true);
            echo "
                    ";
        }
        // line 60
        echo "                </div>
            ";
        
        $__internal_b74241ae28e318edab65f66f63143c013712a44eb5f7946f7798fd45292ed34a->leave($__internal_b74241ae28e318edab65f66f63143c013712a44eb5f7946f7798fd45292ed34a_prof);

    }

    // line 63
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        $__internal_986b1748b21ff9c7014dd74fd9916fff8fe8fd0dbb023a31a87c315167d3f892 = $this->env->getExtension("native_profiler");
        $__internal_986b1748b21ff9c7014dd74fd9916fff8fe8fd0dbb023a31a87c315167d3f892->enter($__internal_986b1748b21ff9c7014dd74fd9916fff8fe8fd0dbb023a31a87c315167d3f892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 64
        echo "                </div>
            ";
        
        $__internal_986b1748b21ff9c7014dd74fd9916fff8fe8fd0dbb023a31a87c315167d3f892->leave($__internal_986b1748b21ff9c7014dd74fd9916fff8fe8fd0dbb023a31a87c315167d3f892_prof);

    }

    // line 69
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_33e0f4a92f43dc09af9cb5c9ddabf3d2fe17f69c48494c9f51ef19022b39c05b = $this->env->getExtension("native_profiler");
        $__internal_33e0f4a92f43dc09af9cb5c9ddabf3d2fe17f69c48494c9f51ef19022b39c05b->enter($__internal_33e0f4a92f43dc09af9cb5c9ddabf3d2fe17f69c48494c9f51ef19022b39c05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 70
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 71
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 111
        echo "                </div>
            ";
        
        $__internal_33e0f4a92f43dc09af9cb5c9ddabf3d2fe17f69c48494c9f51ef19022b39c05b->leave($__internal_33e0f4a92f43dc09af9cb5c9ddabf3d2fe17f69c48494c9f51ef19022b39c05b_prof);

    }

    // line 71
    public function block_sonata_form_actions($context, array $blocks = array())
    {
        $__internal_e3aaec39e75f2f10159bef12470bdca2279ddfb8863612c9369fc0ac313ccde5 = $this->env->getExtension("native_profiler");
        $__internal_e3aaec39e75f2f10159bef12470bdca2279ddfb8863612c9369fc0ac313ccde5->enter($__internal_e3aaec39e75f2f10159bef12470bdca2279ddfb8863612c9369fc0ac313ccde5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 72
        echo "                    ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isxmlhttprequest", array())) {
            // line 73
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 74
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            } else {
                // line 76
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 78
            echo "                    ";
        } else {
            // line 79
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "supportsPreviewMode", array())) {
                // line 80
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\"></i>
                                ";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 85
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                // line 86
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 88
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 89
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 91
                echo "
                            ";
                // line 92
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 93
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 96
                echo "
                            ";
                // line 97
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
                    // line 98
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
                    echo "\"><i class=\"fa fa-users\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 100
                echo "                        ";
            } else {
                // line 101
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
                    // line 102
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 104
                echo "                            ";
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                    // line 105
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 107
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 109
            echo "                    ";
        }
        // line 110
        echo "                ";
        
        $__internal_e3aaec39e75f2f10159bef12470bdca2279ddfb8863612c9369fc0ac313ccde5->leave($__internal_e3aaec39e75f2f10159bef12470bdca2279ddfb8863612c9369fc0ac313ccde5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  479 => 110,  476 => 109,  470 => 107,  464 => 105,  461 => 104,  455 => 102,  452 => 101,  449 => 100,  441 => 98,  439 => 97,  436 => 96,  429 => 94,  424 => 93,  422 => 92,  419 => 91,  413 => 89,  411 => 88,  405 => 86,  402 => 85,  396 => 82,  392 => 80,  389 => 79,  386 => 78,  380 => 76,  374 => 74,  371 => 73,  368 => 72,  362 => 71,  354 => 111,  352 => 71,  349 => 70,  343 => 69,  335 => 64,  329 => 63,  321 => 60,  315 => 58,  310 => 55,  291 => 50,  288 => 49,  282 => 47,  280 => 46,  267 => 43,  250 => 42,  246 => 40,  221 => 38,  204 => 37,  200 => 35,  198 => 34,  194 => 32,  191 => 31,  185 => 30,  177 => 27,  171 => 26,  160 => 18,  148 => 14,  138 => 116,  135 => 115,  131 => 113,  129 => 69,  124 => 67,  121 => 66,  119 => 63,  116 => 62,  114 => 30,  111 => 29,  109 => 26,  106 => 25,  100 => 22,  97 => 21,  95 => 20,  92 => 19,  89 => 18,  85 => 17,  82 => 16,  78 => 15,  74 => 14,  71 => 13,  67 => 12,  64 => 11,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  48 => 4,  42 => 2,  30 => 1,);
    }
}
/* {% block form %}*/
/*     {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*     {% set url = admin.id(object) is not null ? 'edit' : 'create' %}*/
/* */
/*     {% if not admin.hasRoute(url)%}*/
/*         <div>*/
/*             {{ "form_not_available"|trans({}, "SonataAdminBundle") }}*/
/*         </div>*/
/*     {% else %}*/
/*         <form*/
/*               {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class="form-horizontal"{% endif %}*/
/*               role="form"*/
/*               action="{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}"*/
/*               {% if form.vars.multipart %} enctype="multipart/form-data"{% endif %}*/
/*               method="POST"*/
/*               {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate="novalidate"{% endif %}*/
/*               {% block sonata_form_attributes %}{% endblock %}*/
/*               >*/
/*             {% if form.vars.errors|length > 0 %}*/
/*                 <div class="sonata-ba-form-error">*/
/*                     {{ form_errors(form) }}*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% block sonata_pre_fieldsets %}*/
/*                 <div class="row">*/
/*             {% endblock %}*/
/* */
/*             {% block sonata_tab_content %}*/
/*                 {% set has_tab = ((admin.formtabs|length == 1 and admin.formtabs|keys[0] != 'default') or admin.formtabs|length > 1 ) %}*/
/* */
/*                 <div class="col-md-12">*/
/*                     {% if has_tab %}*/
/*                         <div class="nav-tabs-custom">*/
/*                             <ul class="nav nav-tabs" role="tablist">*/
/*                                 {% for name, form_tab in admin.formtabs %}*/
/*                                     <li{% if loop.index == 1 %} class="active"{% endif %}><a href="#tab_{{ admin.uniqid }}_{{ loop.index }}" data-toggle="tab"><i class="fa fa-exclamation-circle has-errors hide"></i> {{ admin.trans(name, {}, form_tab.translation_domain) }}</a></li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                             <div class="tab-content">*/
/*                                 {% for code, form_tab in admin.formtabs %}*/
/*                                     <div class="tab-pane fade{% if loop.first %} in active{% endif %}" id="tab_{{ admin.uniqid }}_{{ loop.index }}">*/
/*                                         <div class="box-body  container-fluid">*/
/*                                             <div class="sonata-ba-collapsed-fields">*/
/*                                                 {% if form_tab.description != false %}*/
/*                                                     <p>{{ form_tab.description|raw }}</p>*/
/*                                                 {% endif %}*/
/* */
/*                                                 {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ form_helper.render_groups(admin, form, admin.formtabs['default'].groups, has_tab) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endblock %}*/
/* */
/*             {% block sonata_post_fieldsets %}*/
/*                 </div>*/
/*             {% endblock %}*/
/* */
/*             {{ form_rest(form) }}*/
/* */
/*             {% block formactions %}*/
/*                 <div class="sonata-ba-form-actions well well-small form-actions">*/
/*                 {% block sonata_form_actions %}*/
/*                     {% if app.request.isxmlhttprequest %}*/
/*                         {% if admin.id(object) is not null %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_update"><i class="fa fa-save"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% else %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_create"><i class="fa fa-plus-circle"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% endif %}*/
/*                     {% else %}*/
/*                         {% if admin.supportsPreviewMode %}*/
/*                             <button class="btn btn-info persist-preview" name="btn_preview" type="submit">*/
/*                                 <i class="fa fa-eye"></i>*/
/*                                 {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}*/
/*                             </button>*/
/*                         {% endif %}*/
/*                         {% if admin.id(object) is not null %}*/
/*                             <button type="submit" class="btn btn-success" name="btn_update_and_edit"><i class="fa fa-save"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                             {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                 <button type="submit" class="btn btn-success" name="btn_update_and_list"><i class="fa fa-save"></i> <i class="fa fa-list"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/* */
/*                             {% if admin.hasroute('delete') and admin.isGranted('DELETE', object) %}*/
/*                                 {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}*/
/*                                 <a class="btn btn-danger" href="{{ admin.generateObjectUrl('delete', object) }}"><i class="fa fa-minus-circle"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                             {% endif %}*/
/* */
/*                             {% if admin.isAclEnabled() and admin.hasroute('acl') and admin.isGranted('MASTER', object) %}*/
/*                                 <a class="btn btn-info" href="{{ admin.generateObjectUrl('acl', object) }}"><i class="fa fa-users"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             {% if admin.hasroute('edit') and admin.isGranted('EDIT') %}*/
/*                                 <button class="btn btn-success" type="submit" name="btn_create_and_edit"><i class="fa fa-save"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/*                             {% if admin.hasroute('list') and admin.isGranted('LIST') %}*/
/*                                 <button type="submit" class="btn btn-success" name="btn_create_and_list"><i class="fa fa-save"></i> <i class="fa fa-list"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                             {% endif %}*/
/*                             <button class="btn btn-success" type="submit" name="btn_create_and_create"><i class="fa fa-plus-circle"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>*/
/*                         {% endif %}*/
/*                     {% endif %}*/
/*                 {% endblock %}*/
/*                 </div>*/
/*             {% endblock formactions %}*/
/*         </form>*/
/*     {% endif%}*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}*/
/* */
/* {% endblock %}*/
/* */

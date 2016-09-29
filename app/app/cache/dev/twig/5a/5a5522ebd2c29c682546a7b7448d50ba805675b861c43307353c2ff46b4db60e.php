<?php

/* SonataAdminBundle:CRUD:base_acl_macro.html.twig */
class __TwigTemplate_c47a23f3c3d8aecf77e1a3f94b871f467bff6e1538776fe765058d2f9425bd6d extends Twig_Template
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
        $__internal_3cb03a9ec45561eaf2e2bc3252c7273f63f127dbce9276a79d16295b238c5bb5 = $this->env->getExtension("native_profiler");
        $__internal_3cb03a9ec45561eaf2e2bc3252c7273f63f127dbce9276a79d16295b238c5bb5->enter($__internal_3cb03a9ec45561eaf2e2bc3252c7273f63f127dbce9276a79d16295b238c5bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl_macro.html.twig"));

        // line 11
        echo "
";
        
        $__internal_3cb03a9ec45561eaf2e2bc3252c7273f63f127dbce9276a79d16295b238c5bb5->leave($__internal_3cb03a9ec45561eaf2e2bc3252c7273f63f127dbce9276a79d16295b238c5bb5_prof);

    }

    // line 12
    public function getrender_form($__form__ = null, $__permissions__ = null, $__td_type__ = null, $__admin__ = null, $__admin_pool__ = null, $__object__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "permissions" => $__permissions__,
            "td_type" => $__td_type__,
            "admin" => $__admin__,
            "admin_pool" => $__admin_pool__,
            "object" => $__object__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7f1402cfc6889948c2e3c0923071595df23710e881106c67299e253d1703104c = $this->env->getExtension("native_profiler");
            $__internal_7f1402cfc6889948c2e3c0923071595df23710e881106c67299e253d1703104c->enter($__internal_7f1402cfc6889948c2e3c0923071595df23710e881106c67299e253d1703104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_form"));

            // line 13
            echo "    <form class=\"form-horizontal\"
          action=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\"
          ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "multipart", array())) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 16
            echo "          method=\"POST\"
            ";
            // line 17
            if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method")) {
                echo "novalidate=\"novalidate\"";
            }
            // line 18
            echo "            >
        ";
            // line 19
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
                // line 20
                echo "            <div class=\"sonata-ba-form-error\">
                ";
                // line 21
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
            </div>
        ";
            }
            // line 24
            echo "
        <div class=\"box box-success\">
            <div class=\"body table-responsive no-padding\">
                <table class=\"table\">
                    <colgroup>
                        <col style=\"width: 100%;\"/>
                        ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 31
                echo "                            <col/>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                    </colgroup>

                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                if (($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array()) != "_token")) {
                    // line 36
                    echo "                        ";
                    if ((($this->getAttribute($context["loop"], "index0", array()) == 0) || (($this->getAttribute($context["loop"], "index0", array()) % 10) == 0))) {
                        // line 37
                        echo "                            <tr>
                                <th>";
                        // line 38
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["td_type"]) ? $context["td_type"] : $this->getContext($context, "td_type")), array(), "SonataAdminBundle"), "html", null, true);
                        echo "</th>
                                ";
                        // line 39
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
                        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                            // line 40
                            echo "                                    <th class=\"text-right\">";
                            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
                            echo "</th>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "                            </tr>
                        ";
                    }
                    // line 44
                    echo "
                        <tr>
                            <td>
                                ";
                    // line 47
                    $context["typeChild"] = (($this->getAttribute($context["child"], "role", array(), "array", true, true)) ? ($this->getAttribute($context["child"], "role", array(), "array")) : ($this->getAttribute($context["child"], "user", array(), "array")));
                    // line 48
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["typeChild"]) ? $context["typeChild"] : $this->getContext($context, "typeChild")), "vars", array()), "value", array()), "html", null, true);
                    echo "
                                ";
                    // line 49
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["typeChild"]) ? $context["typeChild"] : $this->getContext($context, "typeChild")), 'widget');
                    echo "
                            </td>
                            ";
                    // line 51
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
                    foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                        // line 52
                        echo "                                <td class=\"text-right\">";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], $context["permission"], array(), "array"), 'widget', array("label" => false));
                        echo "</td>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo "                        </tr>
                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                </table>
            </div>
        </div>

        ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "

        <div class=\"well well-small form-actions\">
            <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
        </div>
    </form>
";
            
            $__internal_7f1402cfc6889948c2e3c0923071595df23710e881106c67299e253d1703104c->leave($__internal_7f1402cfc6889948c2e3c0923071595df23710e881106c67299e253d1703104c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 63,  190 => 60,  184 => 56,  173 => 54,  164 => 52,  160 => 51,  155 => 49,  150 => 48,  148 => 47,  143 => 44,  139 => 42,  130 => 40,  126 => 39,  122 => 38,  119 => 37,  116 => 36,  105 => 35,  101 => 33,  94 => 31,  90 => 30,  82 => 24,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  64 => 17,  61 => 16,  57 => 15,  53 => 14,  50 => 13,  30 => 12,  22 => 11,);
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
/* {% macro render_form(form, permissions, td_type, admin, admin_pool, object) %}*/
/*     <form class="form-horizontal"*/
/*           action="{{ admin.generateUrl('acl', {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}"*/
/*           {% if form.vars.multipart %} enctype="multipart/form-data"{% endif %}*/
/*           method="POST"*/
/*             {% if not admin_pool.getOption('html5_validate') %}novalidate="novalidate"{% endif %}*/
/*             >*/
/*         {% if form.vars.errors|length > 0 %}*/
/*             <div class="sonata-ba-form-error">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="box box-success">*/
/*             <div class="body table-responsive no-padding">*/
/*                 <table class="table">*/
/*                     <colgroup>*/
/*                         <col style="width: 100%;"/>*/
/*                         {% for permission in permissions %}*/
/*                             <col/>*/
/*                         {% endfor %}*/
/*                     </colgroup>*/
/* */
/*                     {% for child in form.children if child.vars.name != '_token' %}*/
/*                         {% if loop.index0 == 0 or loop.index0 % 10 == 0 %}*/
/*                             <tr>*/
/*                                 <th>{{ td_type|trans({}, 'SonataAdminBundle') }}</th>*/
/*                                 {% for permission in permissions %}*/
/*                                     <th class="text-right">{{ permission }}</th>*/
/*                                 {% endfor %}*/
/*                             </tr>*/
/*                         {% endif %}*/
/* */
/*                         <tr>*/
/*                             <td>*/
/*                                 {% set typeChild = child['role'] is defined ? child['role'] : child['user'] %}*/
/*                                 {{ typeChild.vars.value }}*/
/*                                 {{ form_widget(typeChild) }}*/
/*                             </td>*/
/*                             {% for permission in permissions %}*/
/*                                 <td class="text-right">{{ form_widget(child[permission], { label: false }) }}</td>*/
/*                             {% endfor %}*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {{ form_row(form._token) }}*/
/* */
/*         <div class="well well-small form-actions">*/
/*             <input class="btn btn-primary" type="submit" name="btn_create_and_edit" value="{{ 'btn_update_acl'|trans({}, 'SonataAdminBundle') }}">*/
/*         </div>*/
/*     </form>*/
/* {% endmacro %}*/
/* */

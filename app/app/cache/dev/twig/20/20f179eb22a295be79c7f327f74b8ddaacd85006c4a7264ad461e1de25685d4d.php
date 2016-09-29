<?php

/* SonataAdminBundle:CRUD:base_show_macro.html.twig */
class __TwigTemplate_c1b79e98ca2953c02c954ebbd2d5493b7ff51d39577bbc3a49dfda25dec03e60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_092db192a0c9a3b07d6edf8e4485f7bf9699bbf57d1e401e4e95e1edd81b28ee = $this->env->getExtension("native_profiler");
        $__internal_092db192a0c9a3b07d6edf8e4485f7bf9699bbf57d1e401e4e95e1edd81b28ee->enter($__internal_092db192a0c9a3b07d6edf8e4485f7bf9699bbf57d1e401e4e95e1edd81b28ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_macro.html.twig"));

        // line 6
        echo "
";
        // line 7
        $this->displayBlock('field_row', $context, $blocks);
        
        $__internal_092db192a0c9a3b07d6edf8e4485f7bf9699bbf57d1e401e4e95e1edd81b28ee->leave($__internal_092db192a0c9a3b07d6edf8e4485f7bf9699bbf57d1e401e4e95e1edd81b28ee_prof);

    }

    public function block_field_row($context, array $blocks = array())
    {
        $__internal_90a798661798b80597557c3ecba545775a62d4645bcc742e30fd49a0e3f6018c = $this->env->getExtension("native_profiler");
        $__internal_90a798661798b80597557c3ecba545775a62d4645bcc742e30fd49a0e3f6018c->enter($__internal_90a798661798b80597557c3ecba545775a62d4645bcc742e30fd49a0e3f6018c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 9
            echo "        ";
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 10
            echo "
        <div class=\"";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo (((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding"))) ? ("nopadding") : (""));
            echo "\">
            <div class=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                <div class=\"box-header\">
                    <h4 class=\"box-title\">
                        ";
            // line 15
            $this->displayBlock('show_title', $context, $blocks);
            // line 18
            echo "                    </h4>
                </div>
                <div class=\"box-body table-responsive no-padding\">
                    <table class=\"table\">
                        <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 24
                echo "                            ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 31
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                        </tbody>
                    </table>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_90a798661798b80597557c3ecba545775a62d4645bcc742e30fd49a0e3f6018c->leave($__internal_90a798661798b80597557c3ecba545775a62d4645bcc742e30fd49a0e3f6018c_prof);

    }

    // line 15
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_6bed2cbf12b49127b5167564c9f4a6a2db600fee16f58d7111d1538eb8251ebc = $this->env->getExtension("native_profiler");
        $__internal_6bed2cbf12b49127b5167564c9f4a6a2db600fee16f58d7111d1538eb8251ebc->enter($__internal_6bed2cbf12b49127b5167564c9f4a6a2db600fee16f58d7111d1538eb8251ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 16
        echo "                            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "name", array()), 1 => array(), 2 => $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "translation_domain", array())), "method"), "html", null, true);
        echo "
                        ";
        
        $__internal_6bed2cbf12b49127b5167564c9f4a6a2db600fee16f58d7111d1538eb8251ebc->leave($__internal_6bed2cbf12b49127b5167564c9f4a6a2db600fee16f58d7111d1538eb8251ebc_prof);

    }

    // line 24
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_d8f78fa44166cfe179de50f6675b9668e0c99feee338542d1652efe2428aeec0 = $this->env->getExtension("native_profiler");
        $__internal_d8f78fa44166cfe179de50f6675b9668e0c99feee338542d1652efe2428aeec0->enter($__internal_d8f78fa44166cfe179de50f6675b9668e0c99feee338542d1652efe2428aeec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 25
        echo "                                <tr class=\"sonata-ba-view-container\">
                                    ";
        // line 26
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 27
            echo "                                        ";
            echo $this->env->getExtension('sonata_admin')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                    ";
        }
        // line 29
        echo "                                </tr>
                            ";
        
        $__internal_d8f78fa44166cfe179de50f6675b9668e0c99feee338542d1652efe2428aeec0->leave($__internal_d8f78fa44166cfe179de50f6675b9668e0c99feee338542d1652efe2428aeec0_prof);

    }

    // line 1
    public function getrender_groups($__admin__ = null, $__object__ = null, $__elements__ = null, $__groups__ = null, $__has_tab__ = null, $__no_padding__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "admin" => $__admin__,
            "object" => $__object__,
            "elements" => $__elements__,
            "groups" => $__groups__,
            "has_tab" => $__has_tab__,
            "no_padding" => $__no_padding__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9d1bfefd5ca8188bcbfc00dd47cd822647dcc50c57325220cc79dec8aa317105 = $this->env->getExtension("native_profiler");
            $__internal_9d1bfefd5ca8188bcbfc00dd47cd822647dcc50c57325220cc79dec8aa317105->enter($__internal_9d1bfefd5ca8188bcbfc00dd47cd822647dcc50c57325220cc79dec8aa317105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_groups"));

            // line 2
            echo "    <div class=\"row\">
        ";
            // line 3
            $this->displayBlock("field_row", $context, $blocks);
            echo "
    </div>
";
            
            $__internal_9d1bfefd5ca8188bcbfc00dd47cd822647dcc50c57325220cc79dec8aa317105->leave($__internal_9d1bfefd5ca8188bcbfc00dd47cd822647dcc50c57325220cc79dec8aa317105_prof);

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
        return "SonataAdminBundle:CRUD:base_show_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 3,  204 => 2,  184 => 1,  176 => 29,  170 => 27,  168 => 26,  165 => 25,  159 => 24,  149 => 16,  143 => 15,  119 => 32,  105 => 31,  102 => 24,  85 => 23,  78 => 18,  76 => 15,  70 => 12,  64 => 11,  61 => 10,  58 => 9,  40 => 8,  28 => 7,  25 => 6,);
    }
}
/* {% macro render_groups(admin, object, elements, groups, has_tab, no_padding = false) %}*/
/*     <div class="row">*/
/*         {{ block('field_row') }}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% block field_row %}*/
/*     {% for code in groups %}*/
/*         {% set show_group = admin.showgroups[code] %}*/
/* */
/*         <div class="{{ show_group.class|default('col-md-12') }} {{ no_padding ? 'nopadding' }}">*/
/*             <div class="{{ show_group.box_class }}">*/
/*                 <div class="box-header">*/
/*                     <h4 class="box-title">*/
/*                         {% block show_title %}*/
/*                             {{ admin.trans(show_group.name, {}, show_group.translation_domain) }}*/
/*                         {% endblock %}*/
/*                     </h4>*/
/*                 </div>*/
/*                 <div class="box-body table-responsive no-padding">*/
/*                     <table class="table">*/
/*                         <tbody>*/
/*                         {% for field_name in show_group.fields %}*/
/*                             {% block show_field %}*/
/*                                 <tr class="sonata-ba-view-container">*/
/*                                     {% if elements[field_name] is defined %}*/
/*                                         {{ elements[field_name]|render_view_element(object)}}*/
/*                                     {% endif %}*/
/*                                 </tr>*/
/*                             {% endblock %}*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

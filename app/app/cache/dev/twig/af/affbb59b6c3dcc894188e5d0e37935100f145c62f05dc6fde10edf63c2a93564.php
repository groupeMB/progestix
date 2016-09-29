<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_96ddf6b291558b756948489f2d9937422f7eb1ef2e3b0f0a72c64004e1194c59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_199657d5fc220d520e1d25a4e890a23a6ef687296973e822b892c9d06860c807 = $this->env->getExtension("native_profiler");
        $__internal_199657d5fc220d520e1d25a4e890a23a6ef687296973e822b892c9d06860c807->enter($__internal_199657d5fc220d520e1d25a4e890a23a6ef687296973e822b892c9d06860c807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        // line 14
        $context["show_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_macro.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 14);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199657d5fc220d520e1d25a4e890a23a6ef687296973e822b892c9d06860c807->leave($__internal_199657d5fc220d520e1d25a4e890a23a6ef687296973e822b892c9d06860c807_prof);

    }

    // line 16
    public function block_actions($context, array $blocks = array())
    {
        $__internal_85acee404eda1ddc5307a09bc36e8ff3375cc0d6c028ef3ee4b2db6400f5a84e = $this->env->getExtension("native_profiler");
        $__internal_85acee404eda1ddc5307a09bc36e8ff3375cc0d6c028ef3ee4b2db6400f5a84e->enter($__internal_85acee404eda1ddc5307a09bc36e8ff3375cc0d6c028ef3ee4b2db6400f5a84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 17
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 17)->display($context);
        
        $__internal_85acee404eda1ddc5307a09bc36e8ff3375cc0d6c028ef3ee4b2db6400f5a84e->leave($__internal_85acee404eda1ddc5307a09bc36e8ff3375cc0d6c028ef3ee4b2db6400f5a84e_prof);

    }

    // line 20
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_75e0341f1de97434082f664deb85e48bac8b301fc7495d8d53377566d9f5345a = $this->env->getExtension("native_profiler");
        $__internal_75e0341f1de97434082f664deb85e48bac8b301fc7495d8d53377566d9f5345a->enter($__internal_75e0341f1de97434082f664deb85e48bac8b301fc7495d8d53377566d9f5345a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 21
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 23
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 24
        echo "
";
        
        $__internal_75e0341f1de97434082f664deb85e48bac8b301fc7495d8d53377566d9f5345a->leave($__internal_75e0341f1de97434082f664deb85e48bac8b301fc7495d8d53377566d9f5345a_prof);

    }

    // line 27
    public function block_show($context, array $blocks = array())
    {
        $__internal_428f513c418a072d676e7bdd8748a59204aae522adf1cb5d761226382306e06e = $this->env->getExtension("native_profiler");
        $__internal_428f513c418a072d676e7bdd8748a59204aae522adf1cb5d761226382306e06e->enter($__internal_428f513c418a072d676e7bdd8748a59204aae522adf1cb5d761226382306e06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 28
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 30
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 32
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 33
        echo "
        ";
        // line 34
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 35
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 38
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\"></i>
                                ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $context["name"], 1 => array(), 2 => $this->getAttribute($context["show_tab"], "translation_domain", array())), "method"), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 49
                echo "                        <div
                                class=\"tab-pane fade";
                // line 50
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 55
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 56
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 58
                echo "
                                    ";
                // line 59
                echo $context["show_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), $this->getAttribute($context["show_tab"], "groups", array()), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 66
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 67
            echo "            ";
            echo $context["show_helper"]->getrender_groups((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array()), (isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab")));
            echo "
        ";
        }
        // line 69
        echo "
    </div>

    ";
        // line 72
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_428f513c418a072d676e7bdd8748a59204aae522adf1cb5d761226382306e06e->leave($__internal_428f513c418a072d676e7bdd8748a59204aae522adf1cb5d761226382306e06e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 72,  227 => 69,  221 => 67,  219 => 66,  215 => 64,  196 => 59,  193 => 58,  187 => 56,  185 => 55,  176 => 51,  170 => 50,  167 => 49,  150 => 48,  145 => 45,  127 => 41,  120 => 39,  113 => 38,  96 => 37,  92 => 35,  90 => 34,  87 => 33,  85 => 32,  80 => 30,  76 => 28,  70 => 27,  62 => 24,  60 => 23,  58 => 21,  52 => 20,  44 => 17,  38 => 16,  31 => 12,  29 => 14,  20 => 12,);
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
/* {% import 'SonataAdminBundle:CRUD:base_show_macro.html.twig' as show_helper %}*/
/* */
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {{ knp_menu_render(admin.sidemenu(action), {*/
/*         'currentClass' : 'active',*/
/*         'template': sonata_admin.adminPool.getTemplate('tab_menu_template')*/
/*     }, 'twig') }}*/
/* {% endblock %}*/
/* */
/* {% block show %}*/
/*     <div class="sonata-ba-view">*/
/* */
/*         {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}*/
/* */
/*         {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}*/
/* */
/*         {% if has_tab %}*/
/*             <div class="nav-tabs-custom">*/
/*                 <ul class="nav nav-tabs" role="tablist">*/
/*                     {% for name, show_tab in admin.showtabs %}*/
/*                         <li{% if loop.first %} class="active"{% endif %}>*/
/*                             <a href="#tab_{{ admin.uniqid }}_{{ loop.index }}" data-toggle="tab">*/
/*                                 <i class="fa fa-exclamation-circle has-errors hide"></i>*/
/*                                 {{ admin.trans(name, {}, show_tab.translation_domain) }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/* */
/*                 <div class="tab-content">*/
/*                     {% for code, show_tab in admin.showtabs %}*/
/*                         <div*/
/*                                 class="tab-pane fade{% if loop.first %} in active{% endif %}"*/
/*                                 id="tab_{{ admin.uniqid }}_{{ loop.index }}"*/
/*                         >*/
/*                             <div class="box-body  container-fluid">*/
/*                                 <div class="sonata-ba-collapsed-fields">*/
/*                                     {% if show_tab.description != false %}*/
/*                                         <p>{{ show_tab.description|raw }}</p>*/
/*                                     {% endif %}*/
/* */
/*                                     {{ show_helper.render_groups(admin, object, elements, show_tab.groups, has_tab) }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         {% elseif admin.showtabs is iterable %}*/
/*             {{ show_helper.render_groups(admin, object, elements, admin.showtabs.default.groups, has_tab) }}*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}*/
/* {% endblock %}*/
/* */
/* */

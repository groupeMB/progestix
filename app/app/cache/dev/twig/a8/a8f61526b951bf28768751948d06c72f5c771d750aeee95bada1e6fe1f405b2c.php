<?php

/* @SonataAdmin/Menu/sonata_menu.html.twig */
class __TwigTemplate_da56ddb50cee61cba6e554f0cf10d7a3e4f9a9f15a9dd77487c17f76ce99d01c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Menu/sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31a161c0c635379f8e0f8feb738542bc9cacbc8f9b9a58ad97cc522bdd7ec4d5 = $this->env->getExtension("native_profiler");
        $__internal_31a161c0c635379f8e0f8feb738542bc9cacbc8f9b9a58ad97cc522bdd7ec4d5->enter($__internal_31a161c0c635379f8e0f8feb738542bc9cacbc8f9b9a58ad97cc522bdd7ec4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a161c0c635379f8e0f8feb738542bc9cacbc8f9b9a58ad97cc522bdd7ec4d5->leave($__internal_31a161c0c635379f8e0f8feb738542bc9cacbc8f9b9a58ad97cc522bdd7ec4d5_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_3d1c3164cf28840d959cabc7fdd5ffebfdb0f46470a6ea01e6a43a475f7fab1d = $this->env->getExtension("native_profiler");
        $__internal_3d1c3164cf28840d959cabc7fdd5ffebfdb0f46470a6ea01e6a43a475f7fab1d->enter($__internal_3d1c3164cf28840d959cabc7fdd5ffebfdb0f46470a6ea01e6a43a475f7fab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_3d1c3164cf28840d959cabc7fdd5ffebfdb0f46470a6ea01e6a43a475f7fab1d->leave($__internal_3d1c3164cf28840d959cabc7fdd5ffebfdb0f46470a6ea01e6a43a475f7fab1d_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_e9a1b0898615207ef7370185cba7b2beb147fa2afbbf21ecae507f7ca70e1f2b = $this->env->getExtension("native_profiler");
        $__internal_e9a1b0898615207ef7370185cba7b2beb147fa2afbbf21ecae507f7ca70e1f2b->enter($__internal_e9a1b0898615207ef7370185cba7b2beb147fa2afbbf21ecae507f7ca70e1f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_e9a1b0898615207ef7370185cba7b2beb147fa2afbbf21ecae507f7ca70e1f2b->leave($__internal_e9a1b0898615207ef7370185cba7b2beb147fa2afbbf21ecae507f7ca70e1f2b_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_cc52b76a95b4660b9706baa28202e16dc134197ccef223e3d6f0831e1b3b21f0 = $this->env->getExtension("native_profiler");
        $__internal_cc52b76a95b4660b9706baa28202e16dc134197ccef223e3d6f0831e1b3b21f0->enter($__internal_cc52b76a95b4660b9706baa28202e16dc134197ccef223e3d6f0831e1b3b21f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"), ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\"></i>") : ("")))) : (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_cc52b76a95b4660b9706baa28202e16dc134197ccef223e3d6f0831e1b3b21f0->leave($__internal_cc52b76a95b4660b9706baa28202e16dc134197ccef223e3d6f0831e1b3b21f0_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_5a307c103a5dcd30f310b47e7adc3bd1a82abd6107e336a8f0347c8969d95a9d = $this->env->getExtension("native_profiler");
        $__internal_5a307c103a5dcd30f310b47e7adc3bd1a82abd6107e336a8f0347c8969d95a9d->enter($__internal_5a307c103a5dcd30f310b47e7adc3bd1a82abd6107e336a8f0347c8969d95a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        echo "
            <i class=\"fa pull-right fa-angle-left\"></i>
        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5a307c103a5dcd30f310b47e7adc3bd1a82abd6107e336a8f0347c8969d95a9d->leave($__internal_5a307c103a5dcd30f310b47e7adc3bd1a82abd6107e336a8f0347c8969d95a9d_prof);

    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        $__internal_bd239a2d0c1bb7f8a1001c42388cbf63fa7d984c90e5c574985372f5aaf42ec1 = $this->env->getExtension("native_profiler");
        $__internal_bd239a2d0c1bb7f8a1001c42388cbf63fa7d984c90e5c574985372f5aaf42ec1->enter($__internal_bd239a2d0c1bb7f8a1001c42388cbf63fa7d984c90e5c574985372f5aaf42ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) ? $context["is_link"] : $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_bd239a2d0c1bb7f8a1001c42388cbf63fa7d984c90e5c574985372f5aaf42ec1->leave($__internal_bd239a2d0c1bb7f8a1001c42388cbf63fa7d984c90e5c574985372f5aaf42ec1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Menu/sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 51,  162 => 45,  157 => 44,  154 => 43,  152 => 42,  149 => 41,  146 => 40,  140 => 39,  129 => 35,  126 => 34,  123 => 33,  120 => 32,  117 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  99 => 26,  88 => 22,  86 => 21,  84 => 20,  81 => 19,  79 => 18,  71 => 14,  66 => 13,  64 => 12,  62 => 10,  56 => 9,  48 => 6,  46 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block root %}*/
/*     {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}*/
/*     {%- set request        = item.extra('request') ?: app.request %}*/
/*     {{ block('list') -}}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/*     {%- if item.displayed %}*/
/*         {#- check role of the group #}*/
/*         {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}*/
/*         {%- for role in item.extra('roles') if not display %}*/
/*             {%- set display = is_granted(role) %}*/
/*         {%- endfor %}*/
/*     {%- endif %}*/
/* */
/*     {%- if item.displayed and display|default %}*/
/*         {% set options = options|merge({branch_class: 'treeview', currentClass: "active"}) %}*/
/*         {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}*/
/*         {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}*/
/*         {{ parent() }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     {% spaceless %}*/
/*         {% if item.extra('on_top') is defined and not item.extra('on_top') %}*/
/*             {% set translation_domain = item.extra('translation_domain', 'messages') %}*/
/*             {% set icon = item.attribute('icon')|default(item.level > 1 ? '<i class="fa fa-angle-double-right"></i>' : '') %}*/
/*         {% else %}*/
/*             {% set icon = item.extra('icon') %}*/
/*         {% endif %}*/
/*         {% set is_link = true %}*/
/*         {{ parent() }}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block spanElement %}*/
/*     {% spaceless %}*/
/*         <a href="#">*/
/*             {% set translation_domain = item.extra('label_catalogue') %}*/
/*             {% set icon = item.extra('icon')|default('') %}*/
/*             {{ icon|raw }}*/
/*             {{ parent() }}*/
/*             <i class="fa pull-right fa-angle-left"></i>*/
/*         </a>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}*/
/* */

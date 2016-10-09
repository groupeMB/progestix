<?php

/* SonataAdminBundle:CRUD:select_subclass.html.twig */
class __TwigTemplate_627a04695111c1c1645951edee7d398978b90b976fc3ff527fb1d33d5b2f9769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68edebdc0f924a6be20fbce26795f230cd006588eef87aff330582bea45f4c89 = $this->env->getExtension("native_profiler");
        $__internal_68edebdc0f924a6be20fbce26795f230cd006588eef87aff330582bea45f4c89->enter($__internal_68edebdc0f924a6be20fbce26795f230cd006588eef87aff330582bea45f4c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68edebdc0f924a6be20fbce26795f230cd006588eef87aff330582bea45f4c89->leave($__internal_68edebdc0f924a6be20fbce26795f230cd006588eef87aff330582bea45f4c89_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_671388fd7c8e4032e8db0a919f47c36c51de81e4d00bb6cbfb2057b055cadcf6 = $this->env->getExtension("native_profiler");
        $__internal_671388fd7c8e4032e8db0a919f47c36c51de81e4d00bb6cbfb2057b055cadcf6->enter($__internal_671388fd7c8e4032e8db0a919f47c36c51de81e4d00bb6cbfb2057b055cadcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_671388fd7c8e4032e8db0a919f47c36c51de81e4d00bb6cbfb2057b055cadcf6->leave($__internal_671388fd7c8e4032e8db0a919f47c36c51de81e4d00bb6cbfb2057b055cadcf6_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ac77f4176f323469257150c7917efd29e2d12be7bebc2370f2a5fd77ae26f3a = $this->env->getExtension("native_profiler");
        $__internal_3ac77f4176f323469257150c7917efd29e2d12be7bebc2370f2a5fd77ae26f3a->enter($__internal_3ac77f4176f323469257150c7917efd29e2d12be7bebc2370f2a5fd77ae26f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["subclass"], array(), (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_3ac77f4176f323469257150c7917efd29e2d12be7bebc2370f2a5fd77ae26f3a->leave($__internal_3ac77f4176f323469257150c7917efd29e2d12be7bebc2370f2a5fd77ae26f3a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 35,  88 => 33,  79 => 29,  72 => 25,  69 => 24,  64 => 23,  57 => 19,  52 => 16,  46 => 15,  34 => 13,  19 => 11,);
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
/* {% extends base_template %}*/
/* */
/* {% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="box box-success">*/
/*         <div class="box-header">*/
/*             <h3 class="box-title">*/
/*                 {{ block('title') }}*/
/*             </h3>*/
/*         </div>*/
/*         <div class="box-body">*/
/*             {% for subclass in admin.subclasses|keys %}*/
/*                 <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">*/
/*                     <a href="{{ admin.generateUrl(action, {'subclass': subclass }) }}"*/
/*                        class="btn btn-app btn-block"*/
/*                             >*/
/*                         <i class="fa fa-plus-square"></i>*/
/*                         {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}*/
/*                     </a>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <span class="alert alert-info">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>*/
/*             {% endfor %}*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

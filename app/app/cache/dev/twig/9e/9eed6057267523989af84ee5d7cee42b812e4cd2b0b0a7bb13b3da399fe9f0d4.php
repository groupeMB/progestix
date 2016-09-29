<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_45679e8a0dfab83c366ff7ad28818962d9b985104004d735f6330c59fb068a0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc188abdf1cdbcce3b1bb7c6611b84c75653fb07b8f4e3250893dfb44e1e909b = $this->env->getExtension("native_profiler");
        $__internal_cc188abdf1cdbcce3b1bb7c6611b84c75653fb07b8f4e3250893dfb44e1e909b->enter($__internal_cc188abdf1cdbcce3b1bb7c6611b84c75653fb07b8f4e3250893dfb44e1e909b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc188abdf1cdbcce3b1bb7c6611b84c75653fb07b8f4e3250893dfb44e1e909b->leave($__internal_cc188abdf1cdbcce3b1bb7c6611b84c75653fb07b8f4e3250893dfb44e1e909b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a77b9f9aac886c04dc05c71c4e69f6686fb7711b2b2284534d031e854a9804bf = $this->env->getExtension("native_profiler");
        $__internal_a77b9f9aac886c04dc05c71c4e69f6686fb7711b2b2284534d031e854a9804bf->enter($__internal_a77b9f9aac886c04dc05c71c4e69f6686fb7711b2b2284534d031e854a9804bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_a77b9f9aac886c04dc05c71c4e69f6686fb7711b2b2284534d031e854a9804bf->leave($__internal_a77b9f9aac886c04dc05c71c4e69f6686fb7711b2b2284534d031e854a9804bf_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_139086ee1e54b3b82ab7d886b2dd5089f2e6374f0aae39017d049586b5df69fe = $this->env->getExtension("native_profiler");
        $__internal_139086ee1e54b3b82ab7d886b2dd5089f2e6374f0aae39017d049586b5df69fe->enter($__internal_139086ee1e54b3b82ab7d886b2dd5089f2e6374f0aae39017d049586b5df69fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_139086ee1e54b3b82ab7d886b2dd5089f2e6374f0aae39017d049586b5df69fe->leave($__internal_139086ee1e54b3b82ab7d886b2dd5089f2e6374f0aae39017d049586b5df69fe_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_ce9ad5a429319cb7d737dc62ea55e27f262d71ce1ba40693bebfd0d3fce0abc3 = $this->env->getExtension("native_profiler");
        $__internal_ce9ad5a429319cb7d737dc62ea55e27f262d71ce1ba40693bebfd0d3fce0abc3->enter($__internal_ce9ad5a429319cb7d737dc62ea55e27f262d71ce1ba40693bebfd0d3fce0abc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h4 class=\"box-title\">";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 27
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements", array())) {
            // line 28
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 30
            echo "                    ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 31
            echo "                ";
        }
        // line 32
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 45
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 46
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 52
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_ce9ad5a429319cb7d737dc62ea55e27f262d71ce1ba40693bebfd0d3fce0abc3->leave($__internal_ce9ad5a429319cb7d737dc62ea55e27f262d71ce1ba40693bebfd0d3fce0abc3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  134 => 49,  130 => 48,  124 => 46,  122 => 45,  117 => 43,  111 => 40,  105 => 37,  101 => 36,  96 => 34,  92 => 32,  89 => 31,  86 => 30,  80 => 28,  78 => 27,  72 => 24,  67 => 21,  61 => 20,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block content %}*/
/*     <div class="sonata-ba-delete">*/
/*         <div class="box box-danger">*/
/*             <div class="box-header">*/
/*                 <h4 class="box-title">{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h4>*/
/*             </div>*/
/*             <div class="box-body">*/
/*                 {% if data.all_elements %}*/
/*                     {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}*/
/*                 {% else %}*/
/*                     {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <div class="box-footer clearfix">*/
/*                 <form action="{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}" method="POST">*/
/*                     <input type="hidden" name="confirmation" value="ok">*/
/*                     <input type="hidden" name="data" value="{{ data|json_encode }}">*/
/*                     <input type="hidden" name="_sonata_csrf_token" value="{{ csrf_token }}">*/
/* */
/*                     <div style="display: none">*/
/*                         {{ form_rest(form) }}*/
/*                     </div>*/
/* */
/*                     <button type="submit" class="btn btn-danger">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>*/
/* */
/*                     {% if admin.hasRoute('list') and admin.isGranted('LIST') %}*/
/*                         {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}*/
/* */
/*                         <a class="btn btn-success" href="{{ admin.generateUrl('list') }}">*/
/*                             <i class="fa fa-th-list"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

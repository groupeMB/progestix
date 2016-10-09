<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_5d00693932312bc517cdac2fb28ad0d7f5d1fba86d7f1d4be03068dc7b62d910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_base.html.twig", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig", 11);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e00d3df71f765f55e34109a932b32e0bb146133ea8d17f9e2cf508b4932c60ba = $this->env->getExtension("native_profiler");
        $__internal_e00d3df71f765f55e34109a932b32e0bb146133ea8d17f9e2cf508b4932c60ba->enter($__internal_e00d3df71f765f55e34109a932b32e0bb146133ea8d17f9e2cf508b4932c60ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e00d3df71f765f55e34109a932b32e0bb146133ea8d17f9e2cf508b4932c60ba->leave($__internal_e00d3df71f765f55e34109a932b32e0bb146133ea8d17f9e2cf508b4932c60ba_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_872518b2c281131ba4758a1f02a8df71a31135891315519e22ac5faaea3c8ba3 = $this->env->getExtension("native_profiler");
        $__internal_872518b2c281131ba4758a1f02a8df71a31135891315519e22ac5faaea3c8ba3->enter($__internal_872518b2c281131ba4758a1f02a8df71a31135891315519e22ac5faaea3c8ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">
                <i class=\"fa fa-history\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "
            </h3>
        </div>

        <div class=\"box-body\">
            <div class=\"panel-group\" id=\"accordion\">
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : $this->getContext($context, "revisions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 24
            echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\">
                            <h4 class=\"panel-title\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                                    ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "rev", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "username", array()), "html", null, true);
            echo "
                                    - ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["revision"], "revision", array()), "timestamp", array())), "html", null, true);
            echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse ";
            echo (($this->getAttribute($context["loop"], "first", array())) ? ("in") : (""));
            echo "\">
                            <div class=\"panel-body\">
                                <ul>
                                    ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["revision"], "entities", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 37
                echo "                                        <li>
                                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "entity", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "revisionType", array()), "html", null, true);
                echo "
                                            / ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["changedEntity"], "className", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["changedEntity"], "id", array()), "id", array()), "html", null, true);
                echo "
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                                </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_872518b2c281131ba4758a1f02a8df71a31135891315519e22ac5faaea3c8ba3->leave($__internal_872518b2c281131ba4758a1f02a8df71a31135891315519e22ac5faaea3c8ba3_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 47,  125 => 42,  114 => 39,  108 => 38,  105 => 37,  101 => 36,  93 => 33,  86 => 29,  80 => 28,  76 => 27,  71 => 24,  54 => 23,  45 => 17,  40 => 14,  34 => 13,  11 => 11,);
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
/* {% extends 'SonataBlockBundle:Block:block_base.html.twig' %}*/
/* */
/* {% block block %}*/
/*     <div class="box box-primary">*/
/*         <div class="box-header with-border">*/
/*             <h3 class="box-title">*/
/*                 <i class="fa fa-history"></i> {{ 'title_audit_log'|trans({}, 'SonataAdminBundle') }}*/
/*             </h3>*/
/*         </div>*/
/* */
/*         <div class="box-body">*/
/*             <div class="panel-group" id="accordion">*/
/*                 {% for revision in revisions %}*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading">*/
/*                             <h4 class="panel-title">*/
/*                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ loop.index }}">*/
/*                                     {{ revision.revision.rev }} - {{ revision.revision.username }}*/
/*                                     - {{ revision.revision.timestamp | date }}*/
/*                                 </a>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <div id="collapse{{ loop.index }}" class="panel-collapse collapse {{ loop.first ? "in" : "" }}">*/
/*                             <div class="panel-body">*/
/*                                 <ul>*/
/*                                     {% for changedEntity in revision.entities %}*/
/*                                         <li>*/
/*                                             {{ changedEntity.entity }} / {{ changedEntity.revisionType }}*/
/*                                             / {{ changedEntity.className }} - {{ changedEntity.id.id }}*/
/*                                         </li>*/
/*                                     {% endfor %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */

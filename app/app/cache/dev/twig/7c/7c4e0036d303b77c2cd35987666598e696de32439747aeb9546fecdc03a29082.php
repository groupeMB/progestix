<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_5120e018eee3fc845c002c572b7b8e909840de4c4b01540ada011234859e44ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_search_result.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f258d0d66225b64ec13bfb68ce7eb9f81fcadb104531f3850b79746c8fa684ac = $this->env->getExtension("native_profiler");
        $__internal_f258d0d66225b64ec13bfb68ce7eb9f81fcadb104531f3850b79746c8fa684ac->enter($__internal_f258d0d66225b64ec13bfb68ce7eb9f81fcadb104531f3850b79746c8fa684ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_search_result.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f258d0d66225b64ec13bfb68ce7eb9f81fcadb104531f3850b79746c8fa684ac->leave($__internal_f258d0d66225b64ec13bfb68ce7eb9f81fcadb104531f3850b79746c8fa684ac_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_9d6dc8ea925f186e17947152fcf1608d9df55534615a00e0753c8b94d8475ae9 = $this->env->getExtension("native_profiler");
        $__internal_9d6dc8ea925f186e17947152fcf1608d9df55534615a00e0753c8b94d8475ae9->enter($__internal_9d6dc8ea925f186e17947152fcf1608d9df55534615a00e0753c8b94d8475ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"col-lg-4 col-md-6\">
        <div class=\"box\">
            <div class=\"box-header with-border\">
                ";
        // line 18
        $context["icon"] = (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "icon", array()), "")) : (""));
        // line 19
        echo "                ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
                <h3 class=\"box-title\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label", array()), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
        echo "
                </h3>

                <div class=\"box-tools pull-right\">
                    ";
        // line 25
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 26
            echo "                        <span class=\"badge\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                    ";
        } elseif (($this->getAttribute(        // line 27
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 28
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-plus\"></i>
                        </a>
                    ";
        }
        // line 32
        echo "                    ";
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 33
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" class=\"btn btn-box-tool\">
                            <i class=\"fa fa-list\"></i>
                        </a>
                    ";
        }
        // line 37
        echo "                </div>
            </div>
            ";
        // line 39
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && twig_length_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method")))) {
            // line 40
            echo "                <div class=\"box-body no-padding\">
                    <ul class=\"nav nav-stacked sonata-search-result-list\">
                        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 43
                echo "                            ";
                $context["link"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getSearchResultLink", array(0 => $context["result"]), "method");
                // line 44
                echo "                            ";
                if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
                    // line 45
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                } else {
                    // line 47
                    echo "                                <li><a>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => $context["result"]), "method"), "html", null, true);
                    echo "</a></li>
                            ";
                }
                // line 49
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </ul>
                </div>
            ";
        } else {
            // line 53
            echo "                <div class=\"box-body\">
                    <p>
                        <em>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
            echo "</em>
                    </p>
                </div>
            ";
        }
        // line 59
        echo "        </div>
    </div>
";
        
        $__internal_9d6dc8ea925f186e17947152fcf1608d9df55534615a00e0753c8b94d8475ae9->leave($__internal_9d6dc8ea925f186e17947152fcf1608d9df55534615a00e0753c8b94d8475ae9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 59,  136 => 55,  132 => 53,  127 => 50,  121 => 49,  115 => 47,  107 => 45,  104 => 44,  101 => 43,  97 => 42,  93 => 40,  91 => 39,  87 => 37,  79 => 33,  76 => 32,  68 => 28,  66 => 27,  61 => 26,  59 => 25,  52 => 21,  46 => 19,  44 => 18,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="col-lg-4 col-md-6">*/
/*         <div class="box">*/
/*             <div class="box-header with-border">*/
/*                 {% set icon = settings.icon|default('') %}*/
/*                 {{ icon|raw }}*/
/*                 <h3 class="box-title">*/
/*                     {{ admin.label|trans({}, admin.translationdomain) }}*/
/*                 </h3>*/
/* */
/*                 <div class="box-tools pull-right">*/
/*                     {% if pager and pager.getNbResults() > 0 %}*/
/*                         <span class="badge">{{ pager.getNbResults() }}</span>*/
/*                     {% elseif admin.hasRoute('create') and admin.isGranted('CREATE') %}*/
/*                         <a href="{{ admin.generateUrl('create') }}" class="btn btn-box-tool">*/
/*                             <i class="fa fa-plus"></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     {% if admin.hasRoute('list') and admin.isGranted('LIST') %}*/
/*                         <a href="{{ admin.generateUrl('list') }}" class="btn btn-box-tool">*/
/*                             <i class="fa fa-list"></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*             {% if pager and pager.getResults()|length %}*/
/*                 <div class="box-body no-padding">*/
/*                     <ul class="nav nav-stacked sonata-search-result-list">*/
/*                         {% for result in pager.getResults() %}*/
/*                             {% set link = admin.getSearchResultLink(result) %}*/
/*                             {% if link %}*/
/*                                 <li><a href="{{ link }}">{{ admin.toString(result) }}</a></li>*/
/*                             {% else %}*/
/*                                 <li><a>{{ admin.toString(result) }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             {% else %}*/
/*                 <div class="box-body">*/
/*                     <p>*/
/*                         <em>{{ 'no_results_found'|trans({}, 'SonataAdminBundle') }}</em>*/
/*                     </p>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

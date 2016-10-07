<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_4314fca98ca738c6f71110c41534d286b2d038e401b5b9c7c2676b9e0cecf19c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataAdminBundle:Block:block_admin_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2130174b9a9733b1c3df6ad21a76ecab2aa9d6057c9d3bc7232913e48e72b6b2 = $this->env->getExtension("native_profiler");
        $__internal_2130174b9a9733b1c3df6ad21a76ecab2aa9d6057c9d3bc7232913e48e72b6b2->enter($__internal_2130174b9a9733b1c3df6ad21a76ecab2aa9d6057c9d3bc7232913e48e72b6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Block:block_admin_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2130174b9a9733b1c3df6ad21a76ecab2aa9d6057c9d3bc7232913e48e72b6b2->leave($__internal_2130174b9a9733b1c3df6ad21a76ecab2aa9d6057c9d3bc7232913e48e72b6b2_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a910e1d76d1454f95d032c38b86f5e8458a3d4bc4a7630cbb6e839cb8d0662a3 = $this->env->getExtension("native_profiler");
        $__internal_a910e1d76d1454f95d032c38b86f5e8458a3d4bc4a7630cbb6e839cb8d0662a3->enter($__internal_a910e1d76d1454f95d032c38b86f5e8458a3d4bc4a7630cbb6e839cb8d0662a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 18
                    echo "            ";
                    $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                    // line 19
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 22
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                echo "</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                                ";
                    if ((twig_length_filter($this->env, $this->getAttribute($context["admin"], "dashboardActions", array())) > 0)) {
                        // line 31
                        echo "                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                        echo "
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        ";
                        // line 37
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["admin"], "dashboardActions", array()));
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
                        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                            // line 38
                            echo "                                                            ";
                            $this->loadTemplate((($this->getAttribute($context["action"], "template", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "template", array()), "SonataAdminBundle:CRUD:dashboard__action.html.twig")) : ("SonataAdminBundle:CRUD:dashboard__action.html.twig")), "SonataAdminBundle:Block:block_admin_list.html.twig", 38)->display(array_merge($context, array("action" => $context["action"])));
                            // line 39
                            echo "                                                        ";
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
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                                                    </div>
                                                </td>
                                            </tr>
                                ";
                    }
                    // line 44
                    echo "                            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 50
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a910e1d76d1454f95d032c38b86f5e8458a3d4bc4a7630cbb6e839cb8d0662a3->leave($__internal_a910e1d76d1454f95d032c38b86f5e8458a3d4bc4a7630cbb6e839cb8d0662a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 50,  178 => 45,  164 => 44,  158 => 40,  144 => 39,  141 => 38,  124 => 37,  117 => 33,  113 => 31,  110 => 30,  93 => 29,  85 => 24,  81 => 22,  79 => 21,  76 => 20,  69 => 19,  66 => 18,  60 => 17,  57 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% for group in groups %}*/
/*         {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}*/
/*         {% for role in group.roles if not display %}*/
/*             {% set display = is_granted(role)%}*/
/*         {% endfor %}*/
/* */
/*         {% if display %}*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">{{ group.label|trans({}, group.label_catalogue) }}</h3>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <table class="table table-hover">*/
/*                         <tbody>*/
/*                             {% for admin in group.items %}*/
/*                                 {% if admin.dashboardActions|length > 0 %}*/
/*                                             <tr>*/
/*                                                 <td class="sonata-ba-list-label" width="40%">*/
/*                                                     {{ admin.label|trans({}, admin.translationdomain) }}*/
/*                                                 </td>*/
/*                                                 <td>*/
/*                                                     <div class="btn-group">*/
/*                                                         {% for action in admin.dashboardActions %}*/
/*                                                             {% include action.template|default('SonataAdminBundle:CRUD:dashboard__action.html.twig') with {'action': action} %}*/
/*                                                         {% endfor %}*/
/*                                                     </div>*/
/*                                                 </td>*/
/*                                             </tr>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

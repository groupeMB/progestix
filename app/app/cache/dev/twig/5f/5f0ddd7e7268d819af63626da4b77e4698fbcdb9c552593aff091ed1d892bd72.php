<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_09943341a859c6fa0faec7a92a7ecd60c64df27a30130fc2702b183fe5156a41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb503281508efd3a20678f602b7241652378a0e5bd98c6acba7c591bb16cea7b = $this->env->getExtension("native_profiler");
        $__internal_eb503281508efd3a20678f602b7241652378a0e5bd98c6acba7c591bb16cea7b->enter($__internal_eb503281508efd3a20678f602b7241652378a0e5bd98c6acba7c591bb16cea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb503281508efd3a20678f602b7241652378a0e5bd98c6acba7c591bb16cea7b->leave($__internal_eb503281508efd3a20678f602b7241652378a0e5bd98c6acba7c591bb16cea7b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_07f36620152d6f1fa13627e29e5d295dd26cf9eef0b70d45dccd1ba09acb0ca7 = $this->env->getExtension("native_profiler");
        $__internal_07f36620152d6f1fa13627e29e5d295dd26cf9eef0b70d45dccd1ba09acb0ca7->enter($__internal_07f36620152d6f1fa13627e29e5d295dd26cf9eef0b70d45dccd1ba09acb0ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_07f36620152d6f1fa13627e29e5d295dd26cf9eef0b70d45dccd1ba09acb0ca7->leave($__internal_07f36620152d6f1fa13627e29e5d295dd26cf9eef0b70d45dccd1ba09acb0ca7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */

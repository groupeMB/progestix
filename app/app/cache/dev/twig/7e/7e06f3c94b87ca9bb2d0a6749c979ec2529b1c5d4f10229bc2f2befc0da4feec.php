<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_22795d9de5651aba55c2a40f36aea2a28bf3e89e9711c56de12452d94fc26178 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e3d9b4fe049b3175b9e1ccf9b2afb054d44bc78b580fd386e510ace12437cfd = $this->env->getExtension("native_profiler");
        $__internal_8e3d9b4fe049b3175b9e1ccf9b2afb054d44bc78b580fd386e510ace12437cfd->enter($__internal_8e3d9b4fe049b3175b9e1ccf9b2afb054d44bc78b580fd386e510ace12437cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e3d9b4fe049b3175b9e1ccf9b2afb054d44bc78b580fd386e510ace12437cfd->leave($__internal_8e3d9b4fe049b3175b9e1ccf9b2afb054d44bc78b580fd386e510ace12437cfd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_46e20fa97077646758ba276083aebaecab08d2590c9328959776850b3573da91 = $this->env->getExtension("native_profiler");
        $__internal_46e20fa97077646758ba276083aebaecab08d2590c9328959776850b3573da91->enter($__internal_46e20fa97077646758ba276083aebaecab08d2590c9328959776850b3573da91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_46e20fa97077646758ba276083aebaecab08d2590c9328959776850b3573da91->leave($__internal_46e20fa97077646758ba276083aebaecab08d2590c9328959776850b3573da91_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */

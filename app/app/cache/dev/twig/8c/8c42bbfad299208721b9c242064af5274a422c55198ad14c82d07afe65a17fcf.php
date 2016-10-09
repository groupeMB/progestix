<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_1b5d88d79903bd98acd7c21231822edd4dfcfba6414307f2cf88172ea056f34d extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c26061c356a78c353b1cd5e743d70af5f7d03b287d35976db6aac158bfd668a2 = $this->env->getExtension("native_profiler");
        $__internal_c26061c356a78c353b1cd5e743d70af5f7d03b287d35976db6aac158bfd668a2->enter($__internal_c26061c356a78c353b1cd5e743d70af5f7d03b287d35976db6aac158bfd668a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c26061c356a78c353b1cd5e743d70af5f7d03b287d35976db6aac158bfd668a2->leave($__internal_c26061c356a78c353b1cd5e743d70af5f7d03b287d35976db6aac158bfd668a2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_181813e2704e3669b93c744f7f729f06da13f23b996f9d6f0e968f8d68f0835c = $this->env->getExtension("native_profiler");
        $__internal_181813e2704e3669b93c744f7f729f06da13f23b996f9d6f0e968f8d68f0835c->enter($__internal_181813e2704e3669b93c744f7f729f06da13f23b996f9d6f0e968f8d68f0835c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_181813e2704e3669b93c744f7f729f06da13f23b996f9d6f0e968f8d68f0835c->leave($__internal_181813e2704e3669b93c744f7f729f06da13f23b996f9d6f0e968f8d68f0835c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */

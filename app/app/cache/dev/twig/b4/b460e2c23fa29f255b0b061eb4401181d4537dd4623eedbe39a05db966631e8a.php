<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_66cda23841c5112a2c94a0ba5e261d0a78c48556ff2d27bb4abf7f94628a8bbc extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef7b11bddab4082fdecafd118d15eea7a561e87c7d2cd97f840c6d71399aff95 = $this->env->getExtension("native_profiler");
        $__internal_ef7b11bddab4082fdecafd118d15eea7a561e87c7d2cd97f840c6d71399aff95->enter($__internal_ef7b11bddab4082fdecafd118d15eea7a561e87c7d2cd97f840c6d71399aff95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7b11bddab4082fdecafd118d15eea7a561e87c7d2cd97f840c6d71399aff95->leave($__internal_ef7b11bddab4082fdecafd118d15eea7a561e87c7d2cd97f840c6d71399aff95_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_097b17e272e071aeaab6558f04933df7203693fed078724d8e88e83ea4222a1f = $this->env->getExtension("native_profiler");
        $__internal_097b17e272e071aeaab6558f04933df7203693fed078724d8e88e83ea4222a1f->enter($__internal_097b17e272e071aeaab6558f04933df7203693fed078724d8e88e83ea4222a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_097b17e272e071aeaab6558f04933df7203693fed078724d8e88e83ea4222a1f->leave($__internal_097b17e272e071aeaab6558f04933df7203693fed078724d8e88e83ea4222a1f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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

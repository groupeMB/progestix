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
        $__internal_563b6b05c7b1915c39cc117fa69bb1ffc2b96a7cc46fe80010874df93788749c = $this->env->getExtension("native_profiler");
        $__internal_563b6b05c7b1915c39cc117fa69bb1ffc2b96a7cc46fe80010874df93788749c->enter($__internal_563b6b05c7b1915c39cc117fa69bb1ffc2b96a7cc46fe80010874df93788749c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_563b6b05c7b1915c39cc117fa69bb1ffc2b96a7cc46fe80010874df93788749c->leave($__internal_563b6b05c7b1915c39cc117fa69bb1ffc2b96a7cc46fe80010874df93788749c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a314bbb1cf9bfffb74eb5ae91746d3d5201eabd7b1ead8b11779695d1a47636f = $this->env->getExtension("native_profiler");
        $__internal_a314bbb1cf9bfffb74eb5ae91746d3d5201eabd7b1ead8b11779695d1a47636f->enter($__internal_a314bbb1cf9bfffb74eb5ae91746d3d5201eabd7b1ead8b11779695d1a47636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a314bbb1cf9bfffb74eb5ae91746d3d5201eabd7b1ead8b11779695d1a47636f->leave($__internal_a314bbb1cf9bfffb74eb5ae91746d3d5201eabd7b1ead8b11779695d1a47636f_prof);

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

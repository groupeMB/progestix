<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_fc18da1981c3e78442262c5f2fe8f25ce6db757134dd81f977d415250a060f6b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a08cea1449797d724dbee667f23a98e91e8466617bbfaa343f64eb4b75c95c80 = $this->env->getExtension("native_profiler");
        $__internal_a08cea1449797d724dbee667f23a98e91e8466617bbfaa343f64eb4b75c95c80->enter($__internal_a08cea1449797d724dbee667f23a98e91e8466617bbfaa343f64eb4b75c95c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a08cea1449797d724dbee667f23a98e91e8466617bbfaa343f64eb4b75c95c80->leave($__internal_a08cea1449797d724dbee667f23a98e91e8466617bbfaa343f64eb4b75c95c80_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b96effdbb72ab2a85669517f05d6499de134c3777a1131d0fc58ca05e9c3e5bd = $this->env->getExtension("native_profiler");
        $__internal_b96effdbb72ab2a85669517f05d6499de134c3777a1131d0fc58ca05e9c3e5bd->enter($__internal_b96effdbb72ab2a85669517f05d6499de134c3777a1131d0fc58ca05e9c3e5bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b96effdbb72ab2a85669517f05d6499de134c3777a1131d0fc58ca05e9c3e5bd->leave($__internal_b96effdbb72ab2a85669517f05d6499de134c3777a1131d0fc58ca05e9c3e5bd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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

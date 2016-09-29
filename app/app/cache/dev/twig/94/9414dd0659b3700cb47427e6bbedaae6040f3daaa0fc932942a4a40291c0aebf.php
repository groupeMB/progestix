<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_eee33a00f0aa04bb11e19bca7d542e369e4c6ffc406e2ac83eefcf9389345cb3 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a60ed3adb158ed2dcb8367c11f7dc119d2967021860ea35d5c8b750fa99d422e = $this->env->getExtension("native_profiler");
        $__internal_a60ed3adb158ed2dcb8367c11f7dc119d2967021860ea35d5c8b750fa99d422e->enter($__internal_a60ed3adb158ed2dcb8367c11f7dc119d2967021860ea35d5c8b750fa99d422e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a60ed3adb158ed2dcb8367c11f7dc119d2967021860ea35d5c8b750fa99d422e->leave($__internal_a60ed3adb158ed2dcb8367c11f7dc119d2967021860ea35d5c8b750fa99d422e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ef955a52923194a3af16cdcb3b349bd5c57fae9a58b83aef38ab9292047b96c5 = $this->env->getExtension("native_profiler");
        $__internal_ef955a52923194a3af16cdcb3b349bd5c57fae9a58b83aef38ab9292047b96c5->enter($__internal_ef955a52923194a3af16cdcb3b349bd5c57fae9a58b83aef38ab9292047b96c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_ef955a52923194a3af16cdcb3b349bd5c57fae9a58b83aef38ab9292047b96c5->leave($__internal_ef955a52923194a3af16cdcb3b349bd5c57fae9a58b83aef38ab9292047b96c5_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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

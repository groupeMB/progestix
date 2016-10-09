<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_c2b0a3a42ec1f9faa3ea856d7470ceb626d24f7301ccc72f7724491becf4556e extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b328e5bca120bb185ea8bda479382a75e5989b34fd148f09eb0440357f4a9f5 = $this->env->getExtension("native_profiler");
        $__internal_5b328e5bca120bb185ea8bda479382a75e5989b34fd148f09eb0440357f4a9f5->enter($__internal_5b328e5bca120bb185ea8bda479382a75e5989b34fd148f09eb0440357f4a9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b328e5bca120bb185ea8bda479382a75e5989b34fd148f09eb0440357f4a9f5->leave($__internal_5b328e5bca120bb185ea8bda479382a75e5989b34fd148f09eb0440357f4a9f5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c8d28feb6ed9590228331c034f6c8ee2e60faa69a6f7c3d039d7401d9e4f4af1 = $this->env->getExtension("native_profiler");
        $__internal_c8d28feb6ed9590228331c034f6c8ee2e60faa69a6f7c3d039d7401d9e4f4af1->enter($__internal_c8d28feb6ed9590228331c034f6c8ee2e60faa69a6f7c3d039d7401d9e4f4af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_c8d28feb6ed9590228331c034f6c8ee2e60faa69a6f7c3d039d7401d9e4f4af1->leave($__internal_c8d28feb6ed9590228331c034f6c8ee2e60faa69a6f7c3d039d7401d9e4f4af1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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

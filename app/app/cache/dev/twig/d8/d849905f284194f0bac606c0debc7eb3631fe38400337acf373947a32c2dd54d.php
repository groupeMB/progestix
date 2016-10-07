<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_2856a75944c9bf8f91ec7cb8a5d9876ee745a4f55f97cd62d414e9d6bfc14913 extends Twig_Template
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
        $__internal_1d4cd9f94669dd1a274779883a1f05b0a75c758fb2c4085b93fc3acf753969b0 = $this->env->getExtension("native_profiler");
        $__internal_1d4cd9f94669dd1a274779883a1f05b0a75c758fb2c4085b93fc3acf753969b0->enter($__internal_1d4cd9f94669dd1a274779883a1f05b0a75c758fb2c4085b93fc3acf753969b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d4cd9f94669dd1a274779883a1f05b0a75c758fb2c4085b93fc3acf753969b0->leave($__internal_1d4cd9f94669dd1a274779883a1f05b0a75c758fb2c4085b93fc3acf753969b0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_24e2d0c37b2275da22c1de55021753e14a79cf198cd5084395758be3ca3e493e = $this->env->getExtension("native_profiler");
        $__internal_24e2d0c37b2275da22c1de55021753e14a79cf198cd5084395758be3ca3e493e->enter($__internal_24e2d0c37b2275da22c1de55021753e14a79cf198cd5084395758be3ca3e493e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_24e2d0c37b2275da22c1de55021753e14a79cf198cd5084395758be3ca3e493e->leave($__internal_24e2d0c37b2275da22c1de55021753e14a79cf198cd5084395758be3ca3e493e_prof);

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

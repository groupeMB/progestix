<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_f29fc00663ed44f4b3272ed1ad0491021334c7409619cba4731cfdbc53375c9e extends Twig_Template
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
        $__internal_00ccb81d6599f1970dd4103967ac5f6024c5aa913b7426184419f1cc09ef817a = $this->env->getExtension("native_profiler");
        $__internal_00ccb81d6599f1970dd4103967ac5f6024c5aa913b7426184419f1cc09ef817a->enter($__internal_00ccb81d6599f1970dd4103967ac5f6024c5aa913b7426184419f1cc09ef817a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ccb81d6599f1970dd4103967ac5f6024c5aa913b7426184419f1cc09ef817a->leave($__internal_00ccb81d6599f1970dd4103967ac5f6024c5aa913b7426184419f1cc09ef817a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b171b92f69142ffdd96aa12252880cb825c3fa2fd8fb577e923bfd9f7bf15e00 = $this->env->getExtension("native_profiler");
        $__internal_b171b92f69142ffdd96aa12252880cb825c3fa2fd8fb577e923bfd9f7bf15e00->enter($__internal_b171b92f69142ffdd96aa12252880cb825c3fa2fd8fb577e923bfd9f7bf15e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_b171b92f69142ffdd96aa12252880cb825c3fa2fd8fb577e923bfd9f7bf15e00->leave($__internal_b171b92f69142ffdd96aa12252880cb825c3fa2fd8fb577e923bfd9f7bf15e00_prof);

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

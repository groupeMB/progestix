<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_2e0c91bdda6d7e650a00390a53d80cd0efcb24ec7974095aa1e155dc269b134d extends Twig_Template
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
        $__internal_e89765a8b2f35049ba31fc13e4f268037707f433387ed22cb66248a26c2f04c2 = $this->env->getExtension("native_profiler");
        $__internal_e89765a8b2f35049ba31fc13e4f268037707f433387ed22cb66248a26c2f04c2->enter($__internal_e89765a8b2f35049ba31fc13e4f268037707f433387ed22cb66248a26c2f04c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e89765a8b2f35049ba31fc13e4f268037707f433387ed22cb66248a26c2f04c2->leave($__internal_e89765a8b2f35049ba31fc13e4f268037707f433387ed22cb66248a26c2f04c2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1622cf1503ce01486137d56844be1e6cc641296733de80abf1b8a3d8627241e1 = $this->env->getExtension("native_profiler");
        $__internal_1622cf1503ce01486137d56844be1e6cc641296733de80abf1b8a3d8627241e1->enter($__internal_1622cf1503ce01486137d56844be1e6cc641296733de80abf1b8a3d8627241e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1622cf1503ce01486137d56844be1e6cc641296733de80abf1b8a3d8627241e1->leave($__internal_1622cf1503ce01486137d56844be1e6cc641296733de80abf1b8a3d8627241e1_prof);

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

<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_868c3651fdda53abcbbc7b5581d501ce409a15dd554f7466682bf7a4b4475c8d extends Twig_Template
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
        $__internal_9b39c1ad8fc321374808957e87cbcfa9c8b6b5c9fcb084a5068798d1b6744955 = $this->env->getExtension("native_profiler");
        $__internal_9b39c1ad8fc321374808957e87cbcfa9c8b6b5c9fcb084a5068798d1b6744955->enter($__internal_9b39c1ad8fc321374808957e87cbcfa9c8b6b5c9fcb084a5068798d1b6744955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b39c1ad8fc321374808957e87cbcfa9c8b6b5c9fcb084a5068798d1b6744955->leave($__internal_9b39c1ad8fc321374808957e87cbcfa9c8b6b5c9fcb084a5068798d1b6744955_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a7c597102b16475720fdae509ae012c49498b5d5243f752af18bdb283622082c = $this->env->getExtension("native_profiler");
        $__internal_a7c597102b16475720fdae509ae012c49498b5d5243f752af18bdb283622082c->enter($__internal_a7c597102b16475720fdae509ae012c49498b5d5243f752af18bdb283622082c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a7c597102b16475720fdae509ae012c49498b5d5243f752af18bdb283622082c->leave($__internal_a7c597102b16475720fdae509ae012c49498b5d5243f752af18bdb283622082c_prof);

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

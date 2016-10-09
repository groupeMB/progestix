<?php

/* SonataAdminBundle:CRUD:base_filter_field.html.twig */
class __TwigTemplate_c36985f95b44b9b7437d1261ddd7e0400ef883c69d90f97da8347c9ed426cc0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4cd0d1df6e48f894a11c2e3a97ddb46340b9d9cc429eee71e181c5da5147ed1 = $this->env->getExtension("native_profiler");
        $__internal_c4cd0d1df6e48f894a11c2e3a97ddb46340b9d9cc429eee71e181c5da5147ed1->enter($__internal_c4cd0d1df6e48f894a11c2e3a97ddb46340b9d9cc429eee71e181c5da5147ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_c4cd0d1df6e48f894a11c2e3a97ddb46340b9d9cc429eee71e181c5da5147ed1->leave($__internal_c4cd0d1df6e48f894a11c2e3a97ddb46340b9d9cc429eee71e181c5da5147ed1_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_023ec691f1b8763f61c11c40e52212dd3a0ff617fdd4a608ee5546b594a8b209 = $this->env->getExtension("native_profiler");
        $__internal_023ec691f1b8763f61c11c40e52212dd3a0ff617fdd4a608ee5546b594a8b209->enter($__internal_023ec691f1b8763f61c11c40e52212dd3a0ff617fdd4a608ee5546b594a8b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_023ec691f1b8763f61c11c40e52212dd3a0ff617fdd4a608ee5546b594a8b209->leave($__internal_023ec691f1b8763f61c11c40e52212dd3a0ff617fdd4a608ee5546b594a8b209_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c7f3d59fb8b4333840802c18956936b7c5615841f8825696777cc3b7befee01 = $this->env->getExtension("native_profiler");
        $__internal_4c7f3d59fb8b4333840802c18956936b7c5615841f8825696777cc3b7befee01->enter($__internal_4c7f3d59fb8b4333840802c18956936b7c5615841f8825696777cc3b7befee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_4c7f3d59fb8b4333840802c18956936b7c5615841f8825696777cc3b7befee01->leave($__internal_4c7f3d59fb8b4333840802c18956936b7c5615841f8825696777cc3b7befee01_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  72 => 20,  66 => 18,  60 => 16,  57 => 15,  51 => 14,  42 => 25,  40 => 24,  34 => 23,  31 => 22,  29 => 14,  24 => 11,);
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
/* */
/* <div>*/
/*     {% block label %}*/
/*         {% if filter.fielddescription.options.name is defined %}*/
/*             {{ form_label(filter_form, filter.fielddescription.options.name) }}*/
/*         {% else %}*/
/*             {{ form_label(filter_form) }}*/
/*         {% endif %}*/
/*         <br>*/
/*     {% endblock %}*/
/* */
/*     <div class="sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(filter_form) }}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */

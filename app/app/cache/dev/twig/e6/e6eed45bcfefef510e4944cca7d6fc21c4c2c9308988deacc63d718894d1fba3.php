<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_c6ed7036c455e3dd5a21cc4714bb8f8ee247e360eb0a3d076a23b20605a4e749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69198645c7b5dbc31302258d40d5e183cd01533490ffaffaca2ae675eae3320e = $this->env->getExtension("native_profiler");
        $__internal_69198645c7b5dbc31302258d40d5e183cd01533490ffaffaca2ae675eae3320e->enter($__internal_69198645c7b5dbc31302258d40d5e183cd01533490ffaffaca2ae675eae3320e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_69198645c7b5dbc31302258d40d5e183cd01533490ffaffaca2ae675eae3320e->leave($__internal_69198645c7b5dbc31302258d40d5e183cd01533490ffaffaca2ae675eae3320e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_eb9652fc53db6b8af01594c8dd2dff7131aa2b98821f91ada2ab37ffb95cc0ee = $this->env->getExtension("native_profiler");
        $__internal_eb9652fc53db6b8af01594c8dd2dff7131aa2b98821f91ada2ab37ffb95cc0ee->enter($__internal_eb9652fc53db6b8af01594c8dd2dff7131aa2b98821f91ada2ab37ffb95cc0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_eb9652fc53db6b8af01594c8dd2dff7131aa2b98821f91ada2ab37ffb95cc0ee->leave($__internal_eb9652fc53db6b8af01594c8dd2dff7131aa2b98821f91ada2ab37ffb95cc0ee_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_f1abebebd1219cfd6eca131000536b0c72457b39e84db7c7b4ef870b61490acb = $this->env->getExtension("native_profiler");
        $__internal_f1abebebd1219cfd6eca131000536b0c72457b39e84db7c7b4ef870b61490acb->enter($__internal_f1abebebd1219cfd6eca131000536b0c72457b39e84db7c7b4ef870b61490acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_f1abebebd1219cfd6eca131000536b0c72457b39e84db7c7b4ef870b61490acb->leave($__internal_f1abebebd1219cfd6eca131000536b0c72457b39e84db7c7b4ef870b61490acb_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_1275b3fbce7edec28decd524906a05b58abea06ffbb1da83e783aed78b6ae96a = $this->env->getExtension("native_profiler");
        $__internal_1275b3fbce7edec28decd524906a05b58abea06ffbb1da83e783aed78b6ae96a->enter($__internal_1275b3fbce7edec28decd524906a05b58abea06ffbb1da83e783aed78b6ae96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_1275b3fbce7edec28decd524906a05b58abea06ffbb1da83e783aed78b6ae96a->leave($__internal_1275b3fbce7edec28decd524906a05b58abea06ffbb1da83e783aed78b6ae96a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */

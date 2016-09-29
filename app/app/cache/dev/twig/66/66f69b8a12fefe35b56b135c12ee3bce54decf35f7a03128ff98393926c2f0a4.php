<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_84163103abefb2d7dcbd60dee295502ea3253b0be17308f7f23250231a719549 extends Twig_Template
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
        $__internal_9028aa81ea46036319470cfade05462782cfffbdafb9af1040dc9a4fa0dddff7 = $this->env->getExtension("native_profiler");
        $__internal_9028aa81ea46036319470cfade05462782cfffbdafb9af1040dc9a4fa0dddff7->enter($__internal_9028aa81ea46036319470cfade05462782cfffbdafb9af1040dc9a4fa0dddff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_9028aa81ea46036319470cfade05462782cfffbdafb9af1040dc9a4fa0dddff7->leave($__internal_9028aa81ea46036319470cfade05462782cfffbdafb9af1040dc9a4fa0dddff7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a768b80c84a67d5ffc768a12405529375309a6a17269a8a620000e269f417d76 = $this->env->getExtension("native_profiler");
        $__internal_a768b80c84a67d5ffc768a12405529375309a6a17269a8a620000e269f417d76->enter($__internal_a768b80c84a67d5ffc768a12405529375309a6a17269a8a620000e269f417d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_a768b80c84a67d5ffc768a12405529375309a6a17269a8a620000e269f417d76->leave($__internal_a768b80c84a67d5ffc768a12405529375309a6a17269a8a620000e269f417d76_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_5cb1e8165ad6c2c336a1e39d77d5241ca32fb03b9f368e1d1d32473c18a7201a = $this->env->getExtension("native_profiler");
        $__internal_5cb1e8165ad6c2c336a1e39d77d5241ca32fb03b9f368e1d1d32473c18a7201a->enter($__internal_5cb1e8165ad6c2c336a1e39d77d5241ca32fb03b9f368e1d1d32473c18a7201a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_5cb1e8165ad6c2c336a1e39d77d5241ca32fb03b9f368e1d1d32473c18a7201a->leave($__internal_5cb1e8165ad6c2c336a1e39d77d5241ca32fb03b9f368e1d1d32473c18a7201a_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_edf0355e3c18544938bd9dcc6dc4ffc7b78b3bdd35aeb0ade5eee4d61b24e3f8 = $this->env->getExtension("native_profiler");
        $__internal_edf0355e3c18544938bd9dcc6dc4ffc7b78b3bdd35aeb0ade5eee4d61b24e3f8->enter($__internal_edf0355e3c18544938bd9dcc6dc4ffc7b78b3bdd35aeb0ade5eee4d61b24e3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_edf0355e3c18544938bd9dcc6dc4ffc7b78b3bdd35aeb0ade5eee4d61b24e3f8->leave($__internal_edf0355e3c18544938bd9dcc6dc4ffc7b78b3bdd35aeb0ade5eee4d61b24e3f8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
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

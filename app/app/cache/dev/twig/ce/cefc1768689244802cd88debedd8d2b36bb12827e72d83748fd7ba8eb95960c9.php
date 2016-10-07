<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_ab4c2282c6b3a86f04dacda4e92304a26ea9615fc37049949df36dff958af2a8 extends Twig_Template
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
        $__internal_d224a8127a8ddcaa5b2c7abe5be2b329a460b0ce98117d6f5f2f09264b658400 = $this->env->getExtension("native_profiler");
        $__internal_d224a8127a8ddcaa5b2c7abe5be2b329a460b0ce98117d6f5f2f09264b658400->enter($__internal_d224a8127a8ddcaa5b2c7abe5be2b329a460b0ce98117d6f5f2f09264b658400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_d224a8127a8ddcaa5b2c7abe5be2b329a460b0ce98117d6f5f2f09264b658400->leave($__internal_d224a8127a8ddcaa5b2c7abe5be2b329a460b0ce98117d6f5f2f09264b658400_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f5fffcccbcf50cff72a67363083999034649bd0cabf7b1b56ac1f4769b2c2c14 = $this->env->getExtension("native_profiler");
        $__internal_f5fffcccbcf50cff72a67363083999034649bd0cabf7b1b56ac1f4769b2c2c14->enter($__internal_f5fffcccbcf50cff72a67363083999034649bd0cabf7b1b56ac1f4769b2c2c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_f5fffcccbcf50cff72a67363083999034649bd0cabf7b1b56ac1f4769b2c2c14->leave($__internal_f5fffcccbcf50cff72a67363083999034649bd0cabf7b1b56ac1f4769b2c2c14_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_c935ce252b505c9d89a8e07b3efe034287978d45fa2ba9f396ad80fa50eaa20b = $this->env->getExtension("native_profiler");
        $__internal_c935ce252b505c9d89a8e07b3efe034287978d45fa2ba9f396ad80fa50eaa20b->enter($__internal_c935ce252b505c9d89a8e07b3efe034287978d45fa2ba9f396ad80fa50eaa20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_c935ce252b505c9d89a8e07b3efe034287978d45fa2ba9f396ad80fa50eaa20b->leave($__internal_c935ce252b505c9d89a8e07b3efe034287978d45fa2ba9f396ad80fa50eaa20b_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_90169fa26b39a04e9d095b226712a1b73a88f3cfa539c9c61e421c61ac460b8f = $this->env->getExtension("native_profiler");
        $__internal_90169fa26b39a04e9d095b226712a1b73a88f3cfa539c9c61e421c61ac460b8f->enter($__internal_90169fa26b39a04e9d095b226712a1b73a88f3cfa539c9c61e421c61ac460b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_90169fa26b39a04e9d095b226712a1b73a88f3cfa539c9c61e421c61ac460b8f->leave($__internal_90169fa26b39a04e9d095b226712a1b73a88f3cfa539c9c61e421c61ac460b8f_prof);

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

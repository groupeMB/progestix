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
        $__internal_6693c089d68aa3d48fb75d16b3027b2bff4107542b195801cd988afce306192c = $this->env->getExtension("native_profiler");
        $__internal_6693c089d68aa3d48fb75d16b3027b2bff4107542b195801cd988afce306192c->enter($__internal_6693c089d68aa3d48fb75d16b3027b2bff4107542b195801cd988afce306192c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

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
        
        $__internal_6693c089d68aa3d48fb75d16b3027b2bff4107542b195801cd988afce306192c->leave($__internal_6693c089d68aa3d48fb75d16b3027b2bff4107542b195801cd988afce306192c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fb962bb79f0bff0120532fb849f7d6cb9868019f9a7193fd00ef13baa83c95af = $this->env->getExtension("native_profiler");
        $__internal_fb962bb79f0bff0120532fb849f7d6cb9868019f9a7193fd00ef13baa83c95af->enter($__internal_fb962bb79f0bff0120532fb849f7d6cb9868019f9a7193fd00ef13baa83c95af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_fb962bb79f0bff0120532fb849f7d6cb9868019f9a7193fd00ef13baa83c95af->leave($__internal_fb962bb79f0bff0120532fb849f7d6cb9868019f9a7193fd00ef13baa83c95af_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_7b77e8ce47d2c7826bfac9003887f34963ef23cef62c610cedc57cef25dd1cbb = $this->env->getExtension("native_profiler");
        $__internal_7b77e8ce47d2c7826bfac9003887f34963ef23cef62c610cedc57cef25dd1cbb->enter($__internal_7b77e8ce47d2c7826bfac9003887f34963ef23cef62c610cedc57cef25dd1cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_7b77e8ce47d2c7826bfac9003887f34963ef23cef62c610cedc57cef25dd1cbb->leave($__internal_7b77e8ce47d2c7826bfac9003887f34963ef23cef62c610cedc57cef25dd1cbb_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_193bfe4fb24dba02ddbfb9c08381bc97fef02acfcef54d3b542b2921142a30b1 = $this->env->getExtension("native_profiler");
        $__internal_193bfe4fb24dba02ddbfb9c08381bc97fef02acfcef54d3b542b2921142a30b1->enter($__internal_193bfe4fb24dba02ddbfb9c08381bc97fef02acfcef54d3b542b2921142a30b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_193bfe4fb24dba02ddbfb9c08381bc97fef02acfcef54d3b542b2921142a30b1->leave($__internal_193bfe4fb24dba02ddbfb9c08381bc97fef02acfcef54d3b542b2921142a30b1_prof);

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

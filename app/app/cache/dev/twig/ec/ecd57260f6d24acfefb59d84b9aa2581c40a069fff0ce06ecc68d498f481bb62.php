<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_87dcc1171415bf63a24cc95ba68461b8f768ce4894c6c9bf9664b4205a2608e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7a2257f1905b864fc2837442c204d81ac2679253bd5fee558a455cb30e70b21 = $this->env->getExtension("native_profiler");
        $__internal_c7a2257f1905b864fc2837442c204d81ac2679253bd5fee558a455cb30e70b21->enter($__internal_c7a2257f1905b864fc2837442c204d81ac2679253bd5fee558a455cb30e70b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7a2257f1905b864fc2837442c204d81ac2679253bd5fee558a455cb30e70b21->leave($__internal_c7a2257f1905b864fc2837442c204d81ac2679253bd5fee558a455cb30e70b21_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e0e5ec106193e44df1edc65f22d7dbfb526bfa686a2b69a650c08982f4ec27d6 = $this->env->getExtension("native_profiler");
        $__internal_e0e5ec106193e44df1edc65f22d7dbfb526bfa686a2b69a650c08982f4ec27d6->enter($__internal_e0e5ec106193e44df1edc65f22d7dbfb526bfa686a2b69a650c08982f4ec27d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e0e5ec106193e44df1edc65f22d7dbfb526bfa686a2b69a650c08982f4ec27d6->leave($__internal_e0e5ec106193e44df1edc65f22d7dbfb526bfa686a2b69a650c08982f4ec27d6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value %}*/
/*         <span class="label label-success">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>*/
/*     {% else %}*/
/*         <span class="label label-danger">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */

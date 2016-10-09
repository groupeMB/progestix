<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_4dbae20358d5df08db56b31ae7aecd5580e21c845f297567daba08c85c8a1135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_c4931aad3284abe7bc28f62fb2160e657d2364bebf54e91800db50504d9b9ce1 = $this->env->getExtension("native_profiler");
        $__internal_c4931aad3284abe7bc28f62fb2160e657d2364bebf54e91800db50504d9b9ce1->enter($__internal_c4931aad3284abe7bc28f62fb2160e657d2364bebf54e91800db50504d9b9ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4931aad3284abe7bc28f62fb2160e657d2364bebf54e91800db50504d9b9ce1->leave($__internal_c4931aad3284abe7bc28f62fb2160e657d2364bebf54e91800db50504d9b9ce1_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_ee9c832e8550d3b461243c960604b65aac6a80c6aeb3906bcb168e196c294f8e = $this->env->getExtension("native_profiler");
        $__internal_ee9c832e8550d3b461243c960604b65aac6a80c6aeb3906bcb168e196c294f8e->enter($__internal_ee9c832e8550d3b461243c960604b65aac6a80c6aeb3906bcb168e196c294f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_ee9c832e8550d3b461243c960604b65aac6a80c6aeb3906bcb168e196c294f8e->leave($__internal_ee9c832e8550d3b461243c960604b65aac6a80c6aeb3906bcb168e196c294f8e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */

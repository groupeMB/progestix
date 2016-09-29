<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_38e3573d138e6bd2014230f0cfaaea00b5a6b940bf55409f77877a7537ff8304 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94f856f24d188234d665384cbd1a4ba8a13c027a339a2d46d4dbe616d94bc455 = $this->env->getExtension("native_profiler");
        $__internal_94f856f24d188234d665384cbd1a4ba8a13c027a339a2d46d4dbe616d94bc455->enter($__internal_94f856f24d188234d665384cbd1a4ba8a13c027a339a2d46d4dbe616d94bc455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f856f24d188234d665384cbd1a4ba8a13c027a339a2d46d4dbe616d94bc455->leave($__internal_94f856f24d188234d665384cbd1a4ba8a13c027a339a2d46d4dbe616d94bc455_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7ce7904cb2be2277a1ab7b530a90e1f6dd820a6a2095f1b8d83b14c7a7b232c0 = $this->env->getExtension("native_profiler");
        $__internal_7ce7904cb2be2277a1ab7b530a90e1f6dd820a6a2095f1b8d83b14c7a7b232c0->enter($__internal_7ce7904cb2be2277a1ab7b530a90e1f6dd820a6a2095f1b8d83b14c7a7b232c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_7ce7904cb2be2277a1ab7b530a90e1f6dd820a6a2095f1b8d83b14c7a7b232c0->leave($__internal_7ce7904cb2be2277a1ab7b530a90e1f6dd820a6a2095f1b8d83b14c7a7b232c0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}*/
/* {% endblock %}*/
/* */

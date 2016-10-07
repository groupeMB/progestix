<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_c77c9e09823fd237efa4a6ee4d59bb13969ef993674e3b6e004fdf47fbfef7e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da7e047f23d8d8736cbc3d635d3b975d878981faebbf1ca0464f710ea5020235 = $this->env->getExtension("native_profiler");
        $__internal_da7e047f23d8d8736cbc3d635d3b975d878981faebbf1ca0464f710ea5020235->enter($__internal_da7e047f23d8d8736cbc3d635d3b975d878981faebbf1ca0464f710ea5020235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7e047f23d8d8736cbc3d635d3b975d878981faebbf1ca0464f710ea5020235->leave($__internal_da7e047f23d8d8736cbc3d635d3b975d878981faebbf1ca0464f710ea5020235_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f7e6d277595b2f1a433b526a29ea7eac8b4387ec9c6bf5b50382bb0f5fba3d29 = $this->env->getExtension("native_profiler");
        $__internal_f7e6d277595b2f1a433b526a29ea7eac8b4387ec9c6bf5b50382bb0f5fba3d29->enter($__internal_f7e6d277595b2f1a433b526a29ea7eac8b4387ec9c6bf5b50382bb0f5fba3d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_f7e6d277595b2f1a433b526a29ea7eac8b4387ec9c6bf5b50382bb0f5fba3d29->leave($__internal_f7e6d277595b2f1a433b526a29ea7eac8b4387ec9c6bf5b50382bb0f5fba3d29_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_a099438449028054f5c642d9512c85f7d2aaa52d822571926211648817781439 = $this->env->getExtension("native_profiler");
        $__internal_a099438449028054f5c642d9512c85f7d2aaa52d822571926211648817781439->enter($__internal_a099438449028054f5c642d9512c85f7d2aaa52d822571926211648817781439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_a099438449028054f5c642d9512c85f7d2aaa52d822571926211648817781439->leave($__internal_a099438449028054f5c642d9512c85f7d2aaa52d822571926211648817781439_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_91c908c2d62340616b867ece5ed92005603562b59a1162b1ea37d1302fad4f2a = $this->env->getExtension("native_profiler");
        $__internal_91c908c2d62340616b867ece5ed92005603562b59a1162b1ea37d1302fad4f2a->enter($__internal_91c908c2d62340616b867ece5ed92005603562b59a1162b1ea37d1302fad4f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_91c908c2d62340616b867ece5ed92005603562b59a1162b1ea37d1302fad4f2a->leave($__internal_91c908c2d62340616b867ece5ed92005603562b59a1162b1ea37d1302fad4f2a_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_8e51d350b4b3a2c8538278db6ef144532d1ce37b3e44e5771accdd8165335602 = $this->env->getExtension("native_profiler");
        $__internal_8e51d350b4b3a2c8538278db6ef144532d1ce37b3e44e5771accdd8165335602->enter($__internal_8e51d350b4b3a2c8538278db6ef144532d1ce37b3e44e5771accdd8165335602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_8e51d350b4b3a2c8538278db6ef144532d1ce37b3e44e5771accdd8165335602->leave($__internal_8e51d350b4b3a2c8538278db6ef144532d1ce37b3e44e5771accdd8165335602_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  86 => 24,  76 => 22,  70 => 21,  62 => 24,  59 => 21,  53 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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
/* {% block actions %}*/
/*     {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}*/
/* */
/* {% block form %}*/
/*     {% block form_acl_roles %}*/
/*         {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/*     {% block form_acl_users %}*/
/*         {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */

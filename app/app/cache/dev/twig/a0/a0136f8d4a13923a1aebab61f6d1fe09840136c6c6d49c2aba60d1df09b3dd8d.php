<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_8bd52fc894429156d0ab5411890c0f22fb347c8e7fc1f6d58d004fc5cd6685f2 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_480234decc1c4fb6ce27de1249ef4d8a3e847982ed2358884a3cfe64b036ee27 = $this->env->getExtension("native_profiler");
        $__internal_480234decc1c4fb6ce27de1249ef4d8a3e847982ed2358884a3cfe64b036ee27->enter($__internal_480234decc1c4fb6ce27de1249ef4d8a3e847982ed2358884a3cfe64b036ee27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_480234decc1c4fb6ce27de1249ef4d8a3e847982ed2358884a3cfe64b036ee27->leave($__internal_480234decc1c4fb6ce27de1249ef4d8a3e847982ed2358884a3cfe64b036ee27_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_417bef6d2bbb290b5f9fec1915ef3bf2224abbd27f38228adc944329106ace23 = $this->env->getExtension("native_profiler");
        $__internal_417bef6d2bbb290b5f9fec1915ef3bf2224abbd27f38228adc944329106ace23->enter($__internal_417bef6d2bbb290b5f9fec1915ef3bf2224abbd27f38228adc944329106ace23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_417bef6d2bbb290b5f9fec1915ef3bf2224abbd27f38228adc944329106ace23->leave($__internal_417bef6d2bbb290b5f9fec1915ef3bf2224abbd27f38228adc944329106ace23_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_30f0d6ac9a778a77b5c7b99dc89aa1a284a3313a237f107ae7664ff7be538a2b = $this->env->getExtension("native_profiler");
        $__internal_30f0d6ac9a778a77b5c7b99dc89aa1a284a3313a237f107ae7664ff7be538a2b->enter($__internal_30f0d6ac9a778a77b5c7b99dc89aa1a284a3313a237f107ae7664ff7be538a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_30f0d6ac9a778a77b5c7b99dc89aa1a284a3313a237f107ae7664ff7be538a2b->leave($__internal_30f0d6ac9a778a77b5c7b99dc89aa1a284a3313a237f107ae7664ff7be538a2b_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_2767ced2a5fcfd5582b94c365b7f464bae4af5e6b993d99d9a0d7e69630d05b1 = $this->env->getExtension("native_profiler");
        $__internal_2767ced2a5fcfd5582b94c365b7f464bae4af5e6b993d99d9a0d7e69630d05b1->enter($__internal_2767ced2a5fcfd5582b94c365b7f464bae4af5e6b993d99d9a0d7e69630d05b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_2767ced2a5fcfd5582b94c365b7f464bae4af5e6b993d99d9a0d7e69630d05b1->leave($__internal_2767ced2a5fcfd5582b94c365b7f464bae4af5e6b993d99d9a0d7e69630d05b1_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_5dbddf49718bfc1095e664fcf455070127a313617092b884968fdd9c70166f6d = $this->env->getExtension("native_profiler");
        $__internal_5dbddf49718bfc1095e664fcf455070127a313617092b884968fdd9c70166f6d->enter($__internal_5dbddf49718bfc1095e664fcf455070127a313617092b884968fdd9c70166f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_5dbddf49718bfc1095e664fcf455070127a313617092b884968fdd9c70166f6d->leave($__internal_5dbddf49718bfc1095e664fcf455070127a313617092b884968fdd9c70166f6d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
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

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
        $__internal_4aec7a0586c1a5bb442992eb166048e00fe2d633acd16c0a754babf44f619c4a = $this->env->getExtension("native_profiler");
        $__internal_4aec7a0586c1a5bb442992eb166048e00fe2d633acd16c0a754babf44f619c4a->enter($__internal_4aec7a0586c1a5bb442992eb166048e00fe2d633acd16c0a754babf44f619c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aec7a0586c1a5bb442992eb166048e00fe2d633acd16c0a754babf44f619c4a->leave($__internal_4aec7a0586c1a5bb442992eb166048e00fe2d633acd16c0a754babf44f619c4a_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_0bfd1b1dd20930189b67fd041f43abb0044e4ec4e85cab0545502e25afc46caf = $this->env->getExtension("native_profiler");
        $__internal_0bfd1b1dd20930189b67fd041f43abb0044e4ec4e85cab0545502e25afc46caf->enter($__internal_0bfd1b1dd20930189b67fd041f43abb0044e4ec4e85cab0545502e25afc46caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_0bfd1b1dd20930189b67fd041f43abb0044e4ec4e85cab0545502e25afc46caf->leave($__internal_0bfd1b1dd20930189b67fd041f43abb0044e4ec4e85cab0545502e25afc46caf_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_3e777f019ed500ace542a9825a54396638820e0fd6e5dd2fa44bdbf0c13a8a6d = $this->env->getExtension("native_profiler");
        $__internal_3e777f019ed500ace542a9825a54396638820e0fd6e5dd2fa44bdbf0c13a8a6d->enter($__internal_3e777f019ed500ace542a9825a54396638820e0fd6e5dd2fa44bdbf0c13a8a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_3e777f019ed500ace542a9825a54396638820e0fd6e5dd2fa44bdbf0c13a8a6d->leave($__internal_3e777f019ed500ace542a9825a54396638820e0fd6e5dd2fa44bdbf0c13a8a6d_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_12ccfdca9e0a26a2f4261ba872a7aa5d60463f7b4bdb2c3134519e672e24a465 = $this->env->getExtension("native_profiler");
        $__internal_12ccfdca9e0a26a2f4261ba872a7aa5d60463f7b4bdb2c3134519e672e24a465->enter($__internal_12ccfdca9e0a26a2f4261ba872a7aa5d60463f7b4bdb2c3134519e672e24a465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_12ccfdca9e0a26a2f4261ba872a7aa5d60463f7b4bdb2c3134519e672e24a465->leave($__internal_12ccfdca9e0a26a2f4261ba872a7aa5d60463f7b4bdb2c3134519e672e24a465_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_3efae7799843cb91ec46794ace65ae0add003519bc35b9a5970d5d9de1a7ff1c = $this->env->getExtension("native_profiler");
        $__internal_3efae7799843cb91ec46794ace65ae0add003519bc35b9a5970d5d9de1a7ff1c->enter($__internal_3efae7799843cb91ec46794ace65ae0add003519bc35b9a5970d5d9de1a7ff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_3efae7799843cb91ec46794ace65ae0add003519bc35b9a5970d5d9de1a7ff1c->leave($__internal_3efae7799843cb91ec46794ace65ae0add003519bc35b9a5970d5d9de1a7ff1c_prof);

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

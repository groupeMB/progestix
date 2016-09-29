<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_2e8ef55e584d51ce175c701e4a76313d53ce5171cad98d81ed7e0b16290b3422 extends Twig_Template
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
        $__internal_7b81792e635e3c9c33271a384081fe13354dbc323c474293a4d5b504fdc67766 = $this->env->getExtension("native_profiler");
        $__internal_7b81792e635e3c9c33271a384081fe13354dbc323c474293a4d5b504fdc67766->enter($__internal_7b81792e635e3c9c33271a384081fe13354dbc323c474293a4d5b504fdc67766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b81792e635e3c9c33271a384081fe13354dbc323c474293a4d5b504fdc67766->leave($__internal_7b81792e635e3c9c33271a384081fe13354dbc323c474293a4d5b504fdc67766_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cccc2dd17cbe04e33fe7afd1f8a9493f78db2cc016bb4facd78e1dd910446e64 = $this->env->getExtension("native_profiler");
        $__internal_cccc2dd17cbe04e33fe7afd1f8a9493f78db2cc016bb4facd78e1dd910446e64->enter($__internal_cccc2dd17cbe04e33fe7afd1f8a9493f78db2cc016bb4facd78e1dd910446e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_cccc2dd17cbe04e33fe7afd1f8a9493f78db2cc016bb4facd78e1dd910446e64->leave($__internal_cccc2dd17cbe04e33fe7afd1f8a9493f78db2cc016bb4facd78e1dd910446e64_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_65d5c29875cac6b1bd5692b8ab7014bcaa218255f02a134f1b9b5c65580e250f = $this->env->getExtension("native_profiler");
        $__internal_65d5c29875cac6b1bd5692b8ab7014bcaa218255f02a134f1b9b5c65580e250f->enter($__internal_65d5c29875cac6b1bd5692b8ab7014bcaa218255f02a134f1b9b5c65580e250f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_65d5c29875cac6b1bd5692b8ab7014bcaa218255f02a134f1b9b5c65580e250f->leave($__internal_65d5c29875cac6b1bd5692b8ab7014bcaa218255f02a134f1b9b5c65580e250f_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_47757e5547e636f872dd76191865dd1497cee6ac9ff1d311ba3bbf28d73b1dfe = $this->env->getExtension("native_profiler");
        $__internal_47757e5547e636f872dd76191865dd1497cee6ac9ff1d311ba3bbf28d73b1dfe->enter($__internal_47757e5547e636f872dd76191865dd1497cee6ac9ff1d311ba3bbf28d73b1dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_47757e5547e636f872dd76191865dd1497cee6ac9ff1d311ba3bbf28d73b1dfe->leave($__internal_47757e5547e636f872dd76191865dd1497cee6ac9ff1d311ba3bbf28d73b1dfe_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_3c993772d8909c7a12a2cfda19f975cabdabd8fc36b46fa8cababac9b491ed4b = $this->env->getExtension("native_profiler");
        $__internal_3c993772d8909c7a12a2cfda19f975cabdabd8fc36b46fa8cababac9b491ed4b->enter($__internal_3c993772d8909c7a12a2cfda19f975cabdabd8fc36b46fa8cababac9b491ed4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_3c993772d8909c7a12a2cfda19f975cabdabd8fc36b46fa8cababac9b491ed4b->leave($__internal_3c993772d8909c7a12a2cfda19f975cabdabd8fc36b46fa8cababac9b491ed4b_prof);

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

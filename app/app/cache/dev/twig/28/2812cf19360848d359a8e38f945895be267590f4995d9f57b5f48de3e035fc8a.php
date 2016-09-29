<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_87be45f1efdd10224c667e144846f5de629c002b7ea5e0fe5715340856f70548 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bef8f3b0187de731d1022678737a6982c37b2eb7de10bab13c08b7c7dc4314ae = $this->env->getExtension("native_profiler");
        $__internal_bef8f3b0187de731d1022678737a6982c37b2eb7de10bab13c08b7c7dc4314ae->enter($__internal_bef8f3b0187de731d1022678737a6982c37b2eb7de10bab13c08b7c7dc4314ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bef8f3b0187de731d1022678737a6982c37b2eb7de10bab13c08b7c7dc4314ae->leave($__internal_bef8f3b0187de731d1022678737a6982c37b2eb7de10bab13c08b7c7dc4314ae_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_70e5cadc96267b98192e194035fc2e3bdda2dfec016814865fdb13245ffd40b9 = $this->env->getExtension("native_profiler");
        $__internal_70e5cadc96267b98192e194035fc2e3bdda2dfec016814865fdb13245ffd40b9->enter($__internal_70e5cadc96267b98192e194035fc2e3bdda2dfec016814865fdb13245ffd40b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_70e5cadc96267b98192e194035fc2e3bdda2dfec016814865fdb13245ffd40b9->leave($__internal_70e5cadc96267b98192e194035fc2e3bdda2dfec016814865fdb13245ffd40b9_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b4bf153c11b4529bc518fc34642d7147c1214a5d96825bfb1b03b32404eab3f2 = $this->env->getExtension("native_profiler");
        $__internal_b4bf153c11b4529bc518fc34642d7147c1214a5d96825bfb1b03b32404eab3f2->enter($__internal_b4bf153c11b4529bc518fc34642d7147c1214a5d96825bfb1b03b32404eab3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_b4bf153c11b4529bc518fc34642d7147c1214a5d96825bfb1b03b32404eab3f2->leave($__internal_b4bf153c11b4529bc518fc34642d7147c1214a5d96825bfb1b03b32404eab3f2_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab85946e9f28554419071852d89890d4e93f45eb0c9d9650a24ceafe9519c3a3 = $this->env->getExtension("native_profiler");
        $__internal_ab85946e9f28554419071852d89890d4e93f45eb0c9d9650a24ceafe9519c3a3->enter($__internal_ab85946e9f28554419071852d89890d4e93f45eb0c9d9650a24ceafe9519c3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_ab85946e9f28554419071852d89890d4e93f45eb0c9d9650a24ceafe9519c3a3->leave($__internal_ab85946e9f28554419071852d89890d4e93f45eb0c9d9650a24ceafe9519c3a3_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  69 => 24,  58 => 20,  55 => 19,  49 => 18,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */

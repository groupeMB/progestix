<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_695827f3258f27435edc9a6fca13caf6272b34c9bd12b975c55826f2a5a0e124 extends Twig_Template
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
        $__internal_ba920239ec84e6d949b87915644088eaa80648851c156a1cdc1696d2322a894f = $this->env->getExtension("native_profiler");
        $__internal_ba920239ec84e6d949b87915644088eaa80648851c156a1cdc1696d2322a894f->enter($__internal_ba920239ec84e6d949b87915644088eaa80648851c156a1cdc1696d2322a894f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba920239ec84e6d949b87915644088eaa80648851c156a1cdc1696d2322a894f->leave($__internal_ba920239ec84e6d949b87915644088eaa80648851c156a1cdc1696d2322a894f_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1afd570427df3377a74dbb92bdcef846e4ceacd4c483d29db5b5232bf60f6245 = $this->env->getExtension("native_profiler");
        $__internal_1afd570427df3377a74dbb92bdcef846e4ceacd4c483d29db5b5232bf60f6245->enter($__internal_1afd570427df3377a74dbb92bdcef846e4ceacd4c483d29db5b5232bf60f6245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_1afd570427df3377a74dbb92bdcef846e4ceacd4c483d29db5b5232bf60f6245->leave($__internal_1afd570427df3377a74dbb92bdcef846e4ceacd4c483d29db5b5232bf60f6245_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_2788dc5d78760cbb117bf3b4b59893b1688bf871fbfd5adee30ba65aae71582a = $this->env->getExtension("native_profiler");
        $__internal_2788dc5d78760cbb117bf3b4b59893b1688bf871fbfd5adee30ba65aae71582a->enter($__internal_2788dc5d78760cbb117bf3b4b59893b1688bf871fbfd5adee30ba65aae71582a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_2788dc5d78760cbb117bf3b4b59893b1688bf871fbfd5adee30ba65aae71582a->leave($__internal_2788dc5d78760cbb117bf3b4b59893b1688bf871fbfd5adee30ba65aae71582a_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d0e873b2c39f586d280bfc7042f64dedaec62affc843c9660a18ecdddec19a0 = $this->env->getExtension("native_profiler");
        $__internal_1d0e873b2c39f586d280bfc7042f64dedaec62affc843c9660a18ecdddec19a0->enter($__internal_1d0e873b2c39f586d280bfc7042f64dedaec62affc843c9660a18ecdddec19a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_1d0e873b2c39f586d280bfc7042f64dedaec62affc843c9660a18ecdddec19a0->leave($__internal_1d0e873b2c39f586d280bfc7042f64dedaec62affc843c9660a18ecdddec19a0_prof);

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

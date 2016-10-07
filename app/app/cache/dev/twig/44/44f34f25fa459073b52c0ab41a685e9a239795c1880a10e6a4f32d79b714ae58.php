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
        $__internal_cee59fd8676bdd0a6fdde1f3804706af279333e43c88f1140f9023ab4a630410 = $this->env->getExtension("native_profiler");
        $__internal_cee59fd8676bdd0a6fdde1f3804706af279333e43c88f1140f9023ab4a630410->enter($__internal_cee59fd8676bdd0a6fdde1f3804706af279333e43c88f1140f9023ab4a630410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cee59fd8676bdd0a6fdde1f3804706af279333e43c88f1140f9023ab4a630410->leave($__internal_cee59fd8676bdd0a6fdde1f3804706af279333e43c88f1140f9023ab4a630410_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d88b0648de6ce518e7ec5ba117c5c2ae04637e394b9d2ec5e9d394e92b3722d2 = $this->env->getExtension("native_profiler");
        $__internal_d88b0648de6ce518e7ec5ba117c5c2ae04637e394b9d2ec5e9d394e92b3722d2->enter($__internal_d88b0648de6ce518e7ec5ba117c5c2ae04637e394b9d2ec5e9d394e92b3722d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_d88b0648de6ce518e7ec5ba117c5c2ae04637e394b9d2ec5e9d394e92b3722d2->leave($__internal_d88b0648de6ce518e7ec5ba117c5c2ae04637e394b9d2ec5e9d394e92b3722d2_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ae3036fdeb7ab28e864afd59663373f04fe596806db04098ff86cd4f55cc20a6 = $this->env->getExtension("native_profiler");
        $__internal_ae3036fdeb7ab28e864afd59663373f04fe596806db04098ff86cd4f55cc20a6->enter($__internal_ae3036fdeb7ab28e864afd59663373f04fe596806db04098ff86cd4f55cc20a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_ae3036fdeb7ab28e864afd59663373f04fe596806db04098ff86cd4f55cc20a6->leave($__internal_ae3036fdeb7ab28e864afd59663373f04fe596806db04098ff86cd4f55cc20a6_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_fcb6d2dde1c3ecd04a2db8273b2d6f28db90286bbf153581146e17ee3743fb47 = $this->env->getExtension("native_profiler");
        $__internal_fcb6d2dde1c3ecd04a2db8273b2d6f28db90286bbf153581146e17ee3743fb47->enter($__internal_fcb6d2dde1c3ecd04a2db8273b2d6f28db90286bbf153581146e17ee3743fb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_fcb6d2dde1c3ecd04a2db8273b2d6f28db90286bbf153581146e17ee3743fb47->leave($__internal_fcb6d2dde1c3ecd04a2db8273b2d6f28db90286bbf153581146e17ee3743fb47_prof);

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
